<?php
/*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author Yassine belkaid <yassine.belkaid87@gmail.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class Order extends OrderCore
{
    /** @var int Status updated */
    public $status_updated;

    /** @var int Status updated */
    public $delivered; /* 1 = accepted, 2 = disputed */

    /** @var int Paid out */
    public $paidout; /* 0 = No, 1 = yes */

    /** @var int Is an offer */
    public $is_offer; /* 0 = No, 1 = yes */
    public $seller_cancelled; /* 0 = No, 1 = yes */

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'orders',
        'primary' => 'id_order',
        'fields' => array(
            'id_address_delivery' =>        array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_address_invoice' =>        array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_cart' =>                    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_currency' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_shop_group' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_shop' =>                    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_lang' =>                    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_customer' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_carrier' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'current_state' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'secure_key' =>                array('type' => self::TYPE_STRING, 'validate' => 'isMd5'),
            'payment' =>                    array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'module' =>                    array('type' => self::TYPE_STRING, 'validate' => 'isModuleName', 'required' => true),
            'recyclable' =>                array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift' =>                        array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift_message' =>                array('type' => self::TYPE_STRING, 'validate' => 'isMessage'),
            'mobile_theme' =>                array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'total_discounts' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_discounts_tax_incl' =>    array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_discounts_tax_excl' =>    array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_paid' =>                array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_paid_tax_incl' =>        array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_paid_tax_excl' =>        array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_paid_real' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_products' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_products_wt' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_shipping' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_shipping_tax_incl' =>    array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_shipping_tax_excl' =>    array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'carrier_tax_rate' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'total_wrapping' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_wrapping_tax_incl' =>    array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_wrapping_tax_excl' =>    array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'round_mode' =>                    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'round_type' =>                    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'shipping_number' =>            array('type' => self::TYPE_STRING, 'validate' => 'isTrackingNumber'),
            'conversion_rate' =>            array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'invoice_number' =>            array('type' => self::TYPE_INT),
            'delivery_number' =>            array('type' => self::TYPE_INT),
            'invoice_date' =>                array('type' => self::TYPE_DATE),
            'delivery_date' =>                array('type' => self::TYPE_DATE),
            'valid' =>                        array('type' => self::TYPE_BOOL),
            'reference' =>                    array('type' => self::TYPE_STRING),
            'status_updated' =>               array('type' => self::TYPE_INT),
            'delivered' =>               array('type' => self::TYPE_INT),
            'paidout' =>               array('type' => self::TYPE_INT),
            'is_offer' =>               array('type' => self::TYPE_INT),
            'seller_cancelled' =>               array('type' => self::TYPE_INT),
            'date_add' =>                    array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' =>                    array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );

    /**
     * Get customer orders
     *
     * @param int $id_customer Customer id
     * @param bool $show_hidden_status Display or not hidden order statuses
     * @return array Customer orders
     */
     
    public static function getIdOrderCarrierbyIdOrder($order_id)
    {
        return (int)Db::getInstance()->getValue('
				SELECT `id_carrier`
				FROM `'._DB_PREFIX_.'order_carrier`
				WHERE `id_order` = '.(int)$order_id);
    }     
     
     
        public static function getTrackingCode($id_order)
    {


        $tracking_number = Db::getInstance()->getValue('
                SELECT `tracking_number`
                FROM `'._DB_PREFIX_.'wk_mp_seller_order_status`
                WHERE `id_order` = '.(int)$id_order);

        if (!$tracking_number) {
            return false;
        }

        return $tracking_number;
    } 
    
    
    
	public static function getTrackingUrl($id_order)
    {

        $tracking_url = Db::getInstance()->getValue('
                SELECT `tracking_url`
                FROM `'._DB_PREFIX_.'wk_mp_seller_order_status`
                WHERE `id_order` = '.(int)$id_order);

        if (!$tracking_url) {
            return false;
        }

        return $tracking_url;
    } 
   
     
    public static function getCustomerOrders($id_customer, $show_hidden_status = false, Context $context = null)
    {
        if (!$context) {
            $context = Context::getContext();
        }

        $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
        SELECT o.*, (SELECT SUM(od.`product_quantity`) FROM `'._DB_PREFIX_.'order_detail` od WHERE od.`id_order` = o.`id_order`) nb_products
        FROM `'._DB_PREFIX_.'orders` o
        WHERE o.`id_customer` = '.(int)$id_customer.
        Shop::addSqlRestriction(Shop::SHARE_ORDER).'
        GROUP BY o.`id_order`
        ORDER BY o.`date_add` DESC');
        if (!$res) {
            return array();
        }

        foreach ($res as $key => $val) {
            $res2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
                SELECT os.`id_order_state`, osl.`name` AS order_state, os.`invoice`, os.`color` as order_state_color
                FROM `'._DB_PREFIX_.'order_history` oh
                LEFT JOIN `'._DB_PREFIX_.'order_state` os ON (os.`id_order_state` = oh.`id_order_state`)
                INNER JOIN `'._DB_PREFIX_.'order_state_lang` osl ON (os.`id_order_state` = osl.`id_order_state` AND osl.`id_lang` = '.(int)$context->language->id.')
            WHERE oh.`id_order` = '.(int)$val['id_order'].(!$show_hidden_status ? ' AND os.`hidden` != 1' : '').'
                ORDER BY oh.`date_add` DESC, oh.`id_order_history` DESC
            LIMIT 1');

            if ($res2) {
                $res[$key] = array_merge($res[$key], $res2[0]);
            }
        }
        return $res;
    }


		public static function getProductOrder($id_order)
    {
	    $order=new Order($id_order);
		$products = $order->getProducts();
		$i = 0; 
		
		foreach ($products as $product) 
		{ 
			$i = $i + 1; 
			if($i == 1) 
			{ 
				$product_name = $product['product_name']; } 
				else
				{ 
					$product_name = $product_name.' and '.$product['product_name']; 
					
				} 
		} 

	return $product_name;		
		
    } 




    public static function updatePaidOutOrders(array $order_ids = array())
    {
        return Db::getInstance()->execute('UPDATE `'._DB_PREFIX_.'orders` SET `paidout` = 1 WHERE `delivered` = 1 AND `id_order` IN ('. implode(',', $order_ids) .')');
    }

    public static function isShipped($id_order): bool
    {
        $ps_os_shipping = (int)Configuration::get('PS_OS_SHIPPING');

        return (bool)Db::getInstance()->getValue('SELECT `id_order_history` FROM `'._DB_PREFIX_.'order_history` WHERE `id_order` = '. (int)$id_order .' AND `id_order_state` = '. (int)$ps_os_shipping);
    }

    public static function isDelivered($id_order): bool
    {
        $ps_os_delivered = (int)Configuration::get('PS_OS_DELIVERED');

        return (bool)Db::getInstance()->getValue('SELECT `id_order_history` FROM `'._DB_PREFIX_.'order_history` WHERE `id_order` = '. (int)$id_order .' AND `id_order_state` = '. (int)$ps_os_delivered);
    }

    public static function hasAtlessOneState(int $id_order, array $statuses = []): bool
    {
        return (bool)Db::getInstance()->getValue('
            SELECT `id_order_history` FROM `'._DB_PREFIX_.'order_history` 
            WHERE `id_order` = '. (int)$id_order .' AND `id_order_state` IN ('. implode(',', $statuses) .')'
        );
    }

    public function isOfferOrder(): bool
    {
        return (bool)Db::getInstance()->getValue('SELECT `is_offer` FROM `'._DB_PREFIX_.'orders` WHERE `id_order` = '. (int)$this->id .' AND `is_offer` = 1');
    }

    public function isOffer(): bool
    {
        return (bool)$this->isOfferOrder();
    }

    /**
     *
     * This method allows to add a payment to the current order
     * @since 1.5.0.1
     * @param float $amount_paid
     * @param string $payment_method
     * @param string $payment_transaction_id
     * @param Currency $currency
     * @param string $date
     * @param OrderInvoice $order_invoice
     * @return bool
     */
    public function addOrderPayment($amount_paid, $payment_method = null, $payment_transaction_id = null, $currency = null, $date = null, $order_invoice = null)
    {
        // only persist the first payment for offers
        if ($this->total_paid_real && $this->is_offer) {
            return true;
        }

        $order_payment = new OrderPayment();
        $order_payment->order_reference = $this->reference;
        $order_payment->id_currency = ($currency ? $currency->id : $this->id_currency);
        // we kept the currency rate for historization reasons
        $order_payment->conversion_rate = ($currency ? $currency->conversion_rate : 1);
        // if payment_method is define, we used this
        $order_payment->payment_method = ($payment_method ? $payment_method : $this->payment);
        $order_payment->transaction_id = $payment_transaction_id;
        $order_payment->amount = $amount_paid;
        $order_payment->date_add = ($date ? $date : null);

        // Add time to the date if needed
        if ($order_payment->date_add != null && preg_match('/^[0-9]+-[0-9]+-[0-9]+$/', $order_payment->date_add)) {
            $order_payment->date_add .= ' '.date('H:i:s');
        }

        // Update total_paid_real value for backward compatibility reasons
        if ($order_payment->id_currency == $this->id_currency) {
            $this->total_paid_real += $order_payment->amount;
        } else {
            $this->total_paid_real += Tools::ps_round(Tools::convertPrice($order_payment->amount, $order_payment->id_currency, false), 2);
        }

        // We put autodate parameter of add method to true if date_add field is null
        $res = $order_payment->add(is_null($order_payment->date_add)) && $this->update();

        if (!$res) {
            return false;
        }

        if (!is_null($order_invoice)) {
            $res = Db::getInstance()->execute('
            INSERT INTO `'._DB_PREFIX_.'order_invoice_payment` (`id_order_invoice`, `id_order_payment`, `id_order`)
            VALUES('.(int)$order_invoice->id.', '.(int)$order_payment->id.', '.(int)$this->id.')');

            // Clear cache
            Cache::clean('order_invoice_paid_*');
        }

        return $res;
    }
}