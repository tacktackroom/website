<?php
class FrontController extends FrontControllerCore
{
    const CAPTURE_PAYMENTS_DAYS = 3;
    const MAX_CAPTURING_DAYS = 6;
    const DELIVERED_ORDERS_SADDLE_DAYS = 7;
    const DELIVERED_ORDERS_DAYS = 3;
	public function init()
	{
		parent::init();
		$newOrders = 0;
        $newUpdatedOrders = 0;
        $newChats = 0;
        $needsLegalAddress = false;
        $dontAccessToControllers = ['order-detail' => 1];
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($dontAccessToControllers[$this->php_self])) {
            if (isset($this->context->customer->id) && $this->context->customer->id) {
	            
                require_once _PS_MODULE_DIR_ .'marketplace/classes/WkMpRequiredClasses.php';
                
                $seller = WkMpSellerProduct::getSellerByPsIdProduct(null, $this->context->customer->id);
    	        $objMpOrder = new WkMpSellerOrder();
    	        
    	        
    	        $mporders = $objMpOrder->getSellerOrders($this->context->language->id, $this->context->customer->id, false, ((isset($seller['id_seller']) && $seller['id_seller']) ? $seller['id_seller'] : false), true);
                $pageName = ((isset($this->page_name) && $this->page_name) ? $this->page_name : $this->php_self);
                $productcommentpro = Module::getInstanceByName('productcommentpro');
                $todayDate = date('Y-m-d');
                $ps_os_delivered = (int)Configuration::get('PS_OS_DELIVERED');
                $ps_os_cancelled = (int)Configuration::get('PS_OS_CANCELED');
                $ps_os_preparation = (int)Configuration::get('PS_OS_PREPARATION');
                $ps_os_paypment = (int)Configuration::get('PS_OS_PAYMENT');
                $ps_os_shipping = (int)Configuration::get('PS_OS_SHIPPING');
                $today = new Datetime('now');
                
    	        foreach ($mporders as $key => $mpOrder) {
                    $myOrder = new Order((int)$mpOrder['id_order']);
                    $checkDate = new Datetime($mpOrder['date_add']);
                    $passedDays = (int)$today->diff( $checkDate )->d;
    	            if (!$mpOrder['new_orders']) {
                        if ('module-marketplace-mporder' === $pageName) {
                            $sellerOrderDetail = new WkMpSellerOrderDetail($mpOrder['id_mp_order_detail']);
                            $sellerOrderDetail->viewed = 1;
                            $sellerOrderDetail->update();
                        } else {
    	                   $newOrders += 1;
                        }
    	            }
                 
           
                    unset($myOrder);
    	        }
    	        if ($orders = Order::getCustomerOrders($this->context->customer->id)) {
    	        	foreach ($orders as $order) {
    	        		if (!$order['status_updated']) {
                            if ('history' === $this->php_self) {
                                $myOrder = new Order((int)$order['id_order']);
                                $myOrder->status_updated = 1;
                                $myOrder->update();
                            } else {
        	        			$newUpdatedOrders += 1;
                            }
    	        		}
    	        	}
    	        }
                if (!(int)Tools::getValue('ic')) {
                    $newChats += ChatParticipantModel::getUnreadMessagesNotification($this->context->customer->id);
                }
                if ($seller && isset($seller['id_seller'])) {
                    if (!Address::customerHasAtLeastOneAddress($this->context->customer->id, false, false, true)) {
                        $needsLegalAddress = true;
                    }
                }
            }
        }
        Media::addJsDef(array(
            'new_rders' => $newOrders,
            'new_updated_orders' => $newUpdatedOrders,
            'new_chats' => $newChats,
            'order_histody_page' => $this->context->link->getPageLink('history', true),
            'sales_page' => $this->context->link->getModuleLink('marketplace', 'mporder'),
            'messages_page' => $this->context->link->getModuleLink('marketplace', 'pp_chat'),
            'needs_legal_address' => $needsLegalAddress,
            'addresses_page' => $this->context->link->getPageLink('addresses', true),
        ));
	}
    private function isOrderPaid(int $id_order):  bool
    {
        return (bool)Db::getInstance()->getValue(
            'SELECT `id_paid_order` FROM `paid_orders` WHERE `id_order` = '. (int)$id_order
        );
    }
    private function insertOrderPaid(int $id_order, float $amount):  void
    {
        Db::getInstance()->insert('paid_orders', [
            'id_order'  => (int)$id_order,
            'amount'    => (float)$amount,
            'date_add'  => date('Y-m-d H:i:s'),
        ]);
    }
    private function capturePayments(Order $order, int $ps_os_cancelled, int $ps_os_shipping, int $ps_os_delivered)
    {
        $byRef = Order::getByReference($order->reference);
        $amount = 0;
        if ($byRef->count() > 1) {
            foreach ($byRef as $_order) {
	             
                if (!Order::hasAtlessOneState($_order->id, [$ps_os_delivered, $ps_os_cancelled]) &&  
                    Order::hasAtlessOneState($_order->id, [$ps_os_shipping])) {
                    $this->insertOrderPaid((int)$_order->id, (float)$_order->total_paid);
                    $amount += (float)$_order->total_paid;
                }
            }
        } else {
            if (Order::hasAtlessOneState($order->id, [$ps_os_shipping])) {
                $this->insertOrderPaid((int)$order->id, (float)$order->total_paid);
                $amount = (float)$order->total_paid;
            }
        }
        if ($amount && Validate::isLoadedObject($order)) {
            require_once _PS_MODULE_DIR_ .'stripe_official/stripe_official.php';
            $stripe_official = new Stripe_official();
            $getPayment = Db::getInstance()->getRow(
                'SELECT * FROM '._DB_PREFIX_.'stripe_payment WHERE `id_cart` = '.(int)$order->id_cart
            );
            if ($getPayment && (isset($getPayment['id_stripe']) && $getPayment['id_stripe'])) {
                $chargeId = $getPayment['id_stripe'];
                try {
                    \Stripe\Stripe::setApiKey($stripe_official->getSecretKey());
                    \Stripe\Stripe::setAppInfo("StripePrestashop", $stripe_official->version, Configuration::get('PS_SHOP_DOMAIN_SSL'));
                    $charge = \Stripe\Charge::retrieve($chargeId);
                    if (strtolower($charge->status) === 'succeeded' && 
                        !$charge->captured && !count($charge->refunds->data)) {
                        $charge->capture(['amount' => $amount * 100]);
                        Db::getInstance()->update('stripe_payment', [
                            'result' => 1,
                            'amount' => $amount,
                        ], '`id_stripe` = "'. $chargeId .'"');
                    }
                } catch (\Stripe\Error\Card $e) {
                    file_put_contents(dirname(__FILE__) .'/captured-payments-errs.txt', print_r([
                        'logged_at' => date('d/m/Y H:i:s'),
                        'shipping-error' => $e->getMessage(),
                        '$chargeId' => $chargeId,
                        '$order->total_paid' => $order->total_paid,
                        '$order->id' => $order->id,
                    ], true), FILE_APPEND);
                    return false;
                }
            }
        }
    }
	public function setMedia()
	{
		if ($this->useMobileTheme())
		{
			$this->setMobileMedia();
			return true;
		}
		$this->addCSS(_THEME_CSS_DIR_.'grid_prestashop.css', 'all');  // retro compat themes 1.5
		$this->addCSS(_THEME_CSS_DIR_.'global.css', 'all');
		$this->addjquery();
		$this->addjqueryPlugin('easing');
		$this->addJS(_PS_JS_DIR_.'tools.js');
		$this->addJS(_THEME_JS_DIR_.'global.js');
		$this->addJS(_THEME_JS_DIR_.'masterscript.js');
        if (Module::isEnabled('roymap')) {
			$default_country = new Country((int)Configuration::get('PS_COUNTRY_DEFAULT'));
	        if (Module::isEnabled('mpgooglemapsfix')) { 
				$googleMapsJs = 'http'.((Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE')) ? 's' : '').'://maps.google.com/maps/api/js?region='.substr($default_country->iso_code, 0, 2);
	            if (Configuration::get('MPGOOGLEMAPSFIX_API_KEY')) {
	                $googleMapsJs .= '&key='.rawurlencode(Configuration::get('MPGOOGLEMAPSFIX_API_KEY'));
	            }
	            $this->addJS($googleMapsJs);
	        } else {
				$this->addJS('http'.((Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE')) ? 's' : '').'://maps.google.com/maps/api/js?region='.substr($default_country->iso_code, 0, 2));
	        }
			$this->addJS(_THEME_JS_DIR_.'stores.js');			
			$this->context->smarty->assign('hasStoreIcon', file_exists(_PS_IMG_DIR_.Configuration::get('PS_STORES_ICON')));
			$this->context->smarty->assign(array(
				'mediumSize' => Image::getSize(ImageType::getFormatedName('medium')),
				'defaultLat' => (float)Configuration::get('PS_STORES_CENTER_LAT'),
				'defaultLong' => (float)Configuration::get('PS_STORES_CENTER_LONG'),
				'searchUrl' => $this->context->link->getPageLink('stores'),
				'logo_store' => Configuration::get('PS_STORES_ICON')
			));
        }
        $this->context->smarty->assign(array(
            'has_customer_an_address' => empty($has_address),
            'voucherAllowed' => (int)CartRule::isFeatureActive(),
            'returnAllowed' => (int)Configuration::get('PS_ORDER_RETURN')
        ));
		
		if (@filemtime($this->getThemeDir().'js/autoload/'))
			foreach (scandir($this->getThemeDir().'js/autoload/', 0) as $file)
				if (preg_match('/^[^.].*\.js$/', $file))
					$this->addJS($this->getThemeDir().'js/autoload/'.$file);
		if (@filemtime($this->getThemeDir().'css/autoload/'))
			foreach (scandir($this->getThemeDir().'css/autoload', 0) as $file)
				if (preg_match('/^[^.].*\.css$/', $file))
					$this->addCSS($this->getThemeDir().'css/autoload/'.$file);
		if (Tools::isSubmit('live_edit') && Tools::getValue('ad') && Tools::getAdminToken('AdminModulesPositions'.(int)Tab::getIdFromClassName('AdminModulesPositions').(int)Tools::getValue('id_employee')))
		{
			$this->addJqueryUI('ui.sortable');
			$this->addjqueryPlugin('fancybox');
			$this->addJS(_PS_JS_DIR_.'hookLiveEdit.js');
		}
		if (Configuration::get('PS_QUICK_VIEW'))
			$this->addjqueryPlugin('fancybox');
		if (Configuration::get('PS_COMPARATOR_MAX_ITEM') > 0)
			$this->addJS(_THEME_JS_DIR_.'products-comparison.js');
		Hook::exec('actionFrontControllerSetMedia', array());
	}
    public function pagination($total_products = null)
    {
        if (empty($this->context->custom_pagination)) {
            return parent::pagination($total_products);
        }
    }
    public function productSort()
    {
        if (empty($this->context->custom_sorting)) {
            return parent::productSort();
        }
    }
    private function updateDeliveredStatus($id_order)
    {
        return Db::getInstance()->execute('UPDATE `orders` SET `delivered` = 1 WHERE `id_order` = '. (int)$id_order);
    }
    private function sendAcceptedOrderMail(Order $order, $id_product, $productcommentpro)
    {
        $seller   = WkMpSellerProduct::getSellerByPsIdProduct((int)$id_product);
        $customer = new Customer((int)$order->id_customer);
        $sellerCustomer = new Customer($seller['seller_customer_id']);
        $productLink = $this->context->link->getProductLink($id_product) .'?submitReview&o='. $order->id;
        $comment = 'Order #'. $order->reference .' has been accepted, please click <a href="'. $productLink .'" target="_blank">here to rate each other</a>.';
        $thread_id = $productcommentpro->chatInstanceExists($id_product, $order->id_customer);
        $productcommentpro->createMessage($thread_id, $order->id_customer, $comment, 0, 1, 1);
        $productcommentpro->makeChatAsRead($thread_id, $seller['seller_customer_id'], 0);
        $productcommentpro->makeChatAsRead($thread_id, (int)$order->id_customer, 0);
        $cusTemplateVars = array(
            '{user_name}' => $customer->firstname .' '. $customer->lastname,
            '{message}' => "Thanks for shopping with us.<br />Your order #{$order->reference} has been accepted.<br />Would you please review this seller by clicking <a href='{$productLink}'>here</a>",
        );
        Mail::Send(
            $this->context->language->id,
            'user_review',
            Mail::l('Order review', $this->context->language->id),
            $cusTemplateVars,
            $customer->email,
            null,
            null,
            null, null, null,
            _PS_MODULE_DIR_ .'marketplace/mails/',
            false, null, null
        );
        $sellerTemplateVars = array(
            '{user_name}' => $sellerCustomer->firstname .' '. $sellerCustomer->lastname,
            '{message}' => "Congrats, your order #{$order->reference} has been accepted.<br/ >Would you please review this buyer by clicking <a href='{$productLink}'>here</a>",
        );
        Mail::Send(
            $this->context->language->id,
            'user_review',
            Mail::l('Order review', $this->context->language->id),
            $sellerTemplateVars,
            $sellerCustomer->email,
            null,
            null,
            null, null, null,
            _PS_MODULE_DIR_ .'marketplace/mails/',
            false, null, null
        );
    }
    
    
    
private function cancelAndRefund(Order $myOrder, $cancellation_status)
    {
        $myOrder->setCurrentState($cancellation_status);    
        $getPayment = Db::getInstance()->getRow(
            'SELECT * FROM '._DB_PREFIX_.'stripejs_transaction WHERE `id_cart` = '. (int)$myOrder->id_cart
        );
        $chargeId = $getPayment['id_payment_intent'];
          
		$stripe_mode = (int)Configuration::get('STRIPE_MODE');
        require_once _PS_MODULE_DIR_ .'stripe_official/stripe_official.php';
        $stripe_official = new Stripe_official();
        try {
				\Stripe\Stripe::setApiKey(Configuration::get('STRIPE_MODE') ? Configuration::get('STRIPE_PRIVATE_KEY_LIVE') : Configuration::get('STRIPE_PRIVATE_KEY_TEST'));	          
	
	
				$payment_intent = \Stripe\PaymentIntent::retrieve( $chargeId);		
				$payment_intent->cancel();  
	        
    } 
    catch (\Stripe\Error\InvalidRequest $e) {	    
            $errors[] = Tools::displayError($e->getMessage());
        }   
    }	
	    
}
