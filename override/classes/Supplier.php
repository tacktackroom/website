<?php
class Supplier extends SupplierCore
{
    /*
    * module: amazzingfilter
    * date: 2018-10-26 13:54:40
    * version: 2.8.2
    */
    public static function getProducts(
        $id_supplier,
        $id_lang,
        $p,
        $n,
        $order_by = null,
        $order_way = null,
        $get_total = false,
        $active = true,
        $active_category = true
    ) {
        $context = Context::getContext();
        if (isset($context->filtered_result) && $context->filtered_result['controller'] == 'supplier') {
            if ($get_total) {
                return $context->filtered_result['total'];
            }
            return $context->filtered_result['products'];
        } else {
            return parent::getProducts(
                $id_supplier,
                $id_lang,
                $p,
                $n,
                $order_by,
                $order_way,
                $get_total,
                $active,
                $active_category
            );
        }
    }
    /*
    * module: creativeelements
    * date: 2020-02-24 18:28:13
    * version: 0.11.7
    */
    const CE_OVERRIDE = true;
    /*
    * module: creativeelements
    * date: 2020-02-24 18:28:13
    * version: 0.11.7
    */
    public function __construct($id = null, $idLang = null)
    {
        parent::__construct($id, $idLang);
        $ctrl = Context::getContext()->controller;
        if ($ctrl instanceof SupplierController && !SupplierController::$initialized && !$this->active && Tools::getIsset('id_employee') && Tools::getIsset('adtoken')) {
            $tab = 'AdminCreativePage';
            if (Tools::getAdminToken($tab . (int) Tab::getIdFromClassName($tab) . (int) Tools::getValue('id_employee')) == Tools::getValue('adtoken')) {
                $this->active = 1;
            }
        }
    }
}
