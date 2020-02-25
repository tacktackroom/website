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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class HistoryController extends HistoryControllerCore
{
    public function setMedia()
    {
        parent::setMedia();

        $this->addCSS(array(
            _THEME_CSS_DIR_.'bootstrap_lib/bootstrap.css'
        ));
    }
    
    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        $ps_os_delivered = (int)Configuration::get('PS_OS_DELIVERED');

        if ($orders = Order::getCustomerOrders($this->context->customer->id)) {
            foreach ($orders as &$order) {
                $myOrder = new Order((int)$order['id_order']);
                 $products=$myOrder->getProducts();         
                if (Validate::isLoadedObject($myOrder)) {
                    $order['virtual'] = $myOrder->isVirtual(false);
                }
            }
        }
        $this->context->smarty->assign(array(
            'orders' => $orders, 
            'products' => $products,        
            'invoiceAllowed' => (int)Configuration::get('PS_INVOICE'),
            'ps_os_delivered' => $ps_os_delivered,
            'reorderingAllowed' => !(bool)Configuration::get('PS_DISALLOW_HISTORY_REORDERING'),
            'slowValidation' => Tools::isSubmit('slowvalidation')
        ));

        $this->setTemplate(_PS_THEME_DIR_.'history.tpl');
    }

    public function displayAjaxProcessAccepcted() {
        require_once _PS_MODULE_DIR_ .'marketplace/classes/WkMpRequiredClasses.php';

        $order = new Order((int)Tools::getValue('id_order'));

        if (!Validate::isLoadedObject($order)) {
            die(json_encode(array('hasError' => true, 'errors' => ['Could not find the order!'])));
        }

        $productcommentpro = Module::getInstanceByName('productcommentpro');
        $orderProd = $order->getProducts();
        sort($orderProd);
        $id_product = $orderProd[0]['product_id'];
        $id_customer= ((int)$this->context->customer->id ?: $order->id_customer);
        $seller     = WkMpSellerProduct::getSellerByPsIdProduct((int)$id_product);
        $customer   = new Customer($id_customer);
        $sellerCustomer = new Customer($seller['seller_customer_id']);
        $productLink = $this->context->link->getProductLink($id_product) .'?submitReview&o='. $order->id;

        // Create chat bots
        $comment = '@'. $customer->firstname .' has accepted the order, please click <a href="'. $productLink .'" target="_blank">here to rate each other</a>.';
        $thread_id = $productcommentpro->chatInstanceExists($id_product, $order->id_customer);
        $productcommentpro->createMessage($thread_id, $order->id_customer, $comment, 0, 1, 1);
        $productcommentpro->makeChatAsRead($thread_id, $seller['seller_customer_id'], 0);

        $this->updateDeliveredStatus(1, $order->id);

        $cusTemplateVars = array(
            '{user_name}' => $customer->firstname .' '. $customer->lastname,
            '{message}' => "Thanks for shopping with us.<br />You have accepted the order number #{$order->id}.<br/ >Would you please review this seller by clicking <a href='{$productLink}'>here</a>",
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
            '{message}' => "Congrats, the buyer has accepted the order number #{$order->id}.<br/ >Would you please review this buyer by clicking <a href='{$productLink}'>here</a>",
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

        die(json_encode(array('hasError' => false)));
    }

    public function displayAjaxProcessDispute() {
        require_once _PS_MODULE_DIR_ .'marketplace/classes/WkMpRequiredClasses.php';

        $order   = new Order((int)Tools::getValue('id_order'));

        if (!Validate::isLoadedObject($order)) {
            die(json_encode(array('hasError' => true, 'errors' => ['Could not find the order!'])));
        }

        $errors  = array();
        $id_product= (int)Tools::getValue('item');
        $reason  = trim(Tools::getValue('reason'));
        $comment = trim(Tools::getValue('comment'));
        $order_ref = trim(Tools::getValue('order_ref'));
        $item_name = trim(Tools::getValue('item_name'));
        $id_customer = ((int)$this->context->customer->id ?: $order->id_customer);
        $orderProd = $order->getProducts();
        sort($orderProd);

        if (!$id_product) {
            $id_product = $orderProd[0]['product_id'];
        }

        if (empty($id_product)) {   
            $errors[] = Tools::displayError('Item name is mandatory.');
        }
        if (empty($comment)) {
            $errors[] = Tools::displayError('Comment is mandatory.');
        }
        if (empty($reason)) {   
            $errors[] = Tools::displayError('Reason is mandatory.');
        }

        if (!count($errors)) {
            $customer = new Customer($id_customer);
            $reason = str_replace('_', ' ', ucfirst($reason));
            $comment = "@{$customer->firstname} has opened a dispute:\n\nOrder reference: ". $order_ref ."\n". 'Product name: '. $item_name ."\n"
                .'Reason: '. $reason ."\n".'Message: '. $comment;

            // fetch Seller id from Product ID
            $seller = WkMpSellerProduct::getSellerByPsIdProduct((int)$id_product);
            $productcommentpro = Module::getInstanceByName('productcommentpro');
            $violated = false;

            // check violation
            if ($productcommentpro->moderateViolation('email', $comment)
                || $productcommentpro->moderateViolation('phone', $comment)) {
                $violated = true;
            }

            $thread_id = $productcommentpro->chatInstanceExists($id_product, $order->id_customer);
            $createdMessage = $productcommentpro->createMessage($thread_id, $order->id_customer, $comment, $violated, 1, 1);
            // make seller notice this
            $productcommentpro->makeChatAsRead($thread_id, $seller['seller_customer_id'], 0);

            // Send a notification email to comment author.
            if (!$violated) {
                $productcommentpro->sendDisputeEmailNotification($createdMessage, $order, $seller['seller_customer_id'], $errors);
            }

            $this->updateDeliveredStatus(2, $order->id);
        }

        die(json_encode(array('hasError' => (bool)count($errors), 'errors' => $errors)));
    }

    public function displayAjaxGetItemsByOrder() {
        $id_order = (int)Tools::getValue('id_order');

        $results = Db::getInstance()->executeS('SELECT `product_id`, `product_name` FROM `order_detail` 
            WHERE `id_order` = '. (int)$id_order);
        $res = array();

        if ($results) {
            foreach ($results as $_res) {
                $res[] = array(
                    'id_product' => $_res['product_id'],
                    'product_name' => $_res['product_name'],
                );
            }
        }
        unset($results);

        die(json_encode(array('results' => $res)));
    }

    private function updateDeliveredStatus($status, $id_order)
    {
        return Db::getInstance()->execute('UPDATE `orders` SET `delivered` = '. (int)$status .' WHERE `id_order` = '. (int)$id_order);
    }
}