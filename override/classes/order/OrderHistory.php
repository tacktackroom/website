<?php

 class OrderHistory extends OrderHistoryCore
 {
    public function add($autodate = true, $null_values = false)
    {
        if (!parent::add($autodate)) {
            return false;
        }
        $order = new Order((int)$this->id_order);
        $order->current_state = $this->id_order_state;
        $order->update();
        Hook::exec('actionOrderHistoryAddAfter', array('order_history' => $this), null, false, true, false, $order->id_shop);
        return true;
    }
    private function getSellerOrderIdByOrderId($id_order)
    {
        return Db::getInstance()->getRow('SELECT `id_mp_order_detail`, `viewed` FROM `wk_mp_seller_order_detail` WHERE `id_order` = '. (int)$id_order);
    }
    /*
    * module: mpsellerinvoice
    * date: 2019-01-20 12:54:00
    * version: 3.1.0
    */
    public function addWithemail($autodate = true, $template_vars = false, Context $context = null)
    {
        $order = new Order($this->id_order);
        if (!$this->add($autodate)) {
            return false;
        }
        if (!Context::getContext()->cookie->no_admin_product && !Tools::isSubmit('submitState')) {
            if (!$this->sendEmail($order, $template_vars)) {
                return false;
            }
        }
        return true;
    }
    
    
    public function getDateDelivered($id_order)
    {
	    $DateDelivery = new Datetime();
	    $DateDelivery = Db::getInstance()->getRow('SELECT `date_add` FROM `order_history` WHERE `id_order_state` = 5 and `id_order` = '. (int)$id_order);
	    return $DateDelivery;
	    
    }    
    
 }