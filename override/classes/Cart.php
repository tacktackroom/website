<?php
/**
* 2010-2018 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through this link for complete license : https://store.webkul.com/license.html
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to https://store.webkul.com/customisation-guidelines/ for more information.
*
*  @author    Webkul IN <support@webkul.com>
*  @copyright 2010-2018 Webkul IN
*  @license   https://store.webkul.com/license.html
*/
class Cart extends CartCore
{
    /** @var int Is an offer */
    public $is_offer; /* 0 = No, 1 = yes */

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'cart',
        'primary' => 'id_cart',
        'fields' => array(
            'id_shop_group' =>            array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_shop' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_address_delivery' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_address_invoice' =>    array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_carrier' =>            array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_currency' =>            array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_customer' =>            array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_guest' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_lang' =>                array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'recyclable' =>            array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift' =>                    array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift_message' =>            array('type' => self::TYPE_STRING, 'validate' => 'isMessage'),
            'mobile_theme' =>            array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'delivery_option' =>        array('type' => self::TYPE_STRING),
            'secure_key' =>            array('type' => self::TYPE_STRING, 'size' => 32),
            'allow_seperated_package' =>array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'is_offer' =>               array('type' => self::TYPE_INT),
            'date_add' =>                array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' =>                array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );

    /*
    * module: mpcartordersplit
    * date: 2018-09-08 20:52:18
    * version: 3.1.1
    */
    public function getPackageShippingCost($id_carrier = null, $use_tax = true, Country $default_country = null, $product_list = null, $id_zone = null)
    {
        if (Module::isInstalled('marketplace') && Module::isEnabled('marketplace') && Module::isInstalled('mpcartordersplit') && Module::isEnabled('mpcartordersplit')) {
            if (!$default_country) {
                $default_country = Context::getContext()->country;
            }
            if (!is_null($product_list)) {
                foreach ($product_list as $key => $value) {
                    if ($value['is_virtual'] == 1) {
                        unset($product_list[$key]);
                    }
                }
            }
            if (is_null($product_list)) {
                $products = $this->getProducts();
            } else {
                $products = $product_list;
            }
            if (is_null($id_carrier) && !empty($this->id_carrier)) {
                $id_carrier = (int) $this->id_carrier;
            }

            $sellerWiseProdList = array();
            require_once _PS_MODULE_DIR_.'mpcartordersplit/classes/CarrierProductMap.php';
            $obj_cp_map = new CarrierProductMap();
            foreach ($products as $product) {
                $id_seller = $obj_cp_map->getSellerIdByIdProd($product['id_product']);
                $id_seller = $id_seller ? $id_seller : 0;
                $sellerWiseProdList[$id_seller][] = $product;
            }
            unset($product_list);
            $shipping_cost = null;
            foreach ($sellerWiseProdList as $id_seller => $product_list) {
                $sellerWiseShippingCost = $this->getMpPackageShippingCost($id_carrier, $use_tax, $default_country, $product_list, $id_zone);
                if ($sellerWiseShippingCost !== false) {
// 	                console_log('toto');
                    if (is_null($shipping_cost)) {
                        $shipping_cost = $sellerWiseShippingCost;
                    } else {
                        $shipping_cost += $sellerWiseShippingCost;
                    }
                }
            }
            return !is_null($shipping_cost) ? $shipping_cost : false;
        } else {
            return parent::getPackageShippingCost($id_carrier, $use_tax, $default_country, $product_list, $id_zone);
        }
    }
    /**
     * Get products grouped by package and by addresses to be sent individualy (one package = one shipping cost).
     *
     * @return array array(
     *               0 => array( // First address
     *               0 => array(  // First package
     *               'product_list' => array(...),
     *               'carrier_list' => array(...),
     *               'id_warehouse' => array(...),
     *               ),
     *               ),
     *               );
     *
     * @todo Add avaibility check
     */
    /*
    * module: mpcartordersplit
    * date: 2018-09-08 20:52:18
    * version: 3.1.1
    */
    public function getPackageList($flush = false)
    {
	    
        if (Module::isInstalled('marketplace') && Module::isEnabled('marketplace') && Module::isInstalled('mpcartordersplit') && Module::isEnabled('mpcartordersplit') && Configuration::get('MP_ENABLE_CART_SPLIT')) {
            static $cache = array();
            $cache_key = (int) $this->id.'_'.(int) $this->id_address_delivery;
            if (isset($cache[$cache_key]) && $cache[$cache_key] !== false && !$flush) {
                return $cache[$cache_key];
            }
            $product_list = $this->getProducts($flush);
            $warehouse_count_by_address = array();
            $stock_management_active = Configuration::get('PS_ADVANCED_STOCK_MANAGEMENT');
	           
            foreach ($product_list as &$product) {
                if ((int) $product['id_address_delivery'] == 0) {
                    $product['id_address_delivery'] = (int) $this->id_address_delivery;
                }
                if (!isset($warehouse_count_by_address[$product['id_address_delivery']])) {
                    $warehouse_count_by_address[$product['id_address_delivery']] = array();
                }
                $product['warehouse_list'] = array();
                if ($stock_management_active &&
                    (int) $product['advanced_stock_management'] == 1) {
                    $warehouse_list = Warehouse::getProductWarehouseList($product['id_product'], $product['id_product_attribute'], $this->id_shop);
                    if (count($warehouse_list) == 0) {
                        $warehouse_list = Warehouse::getProductWarehouseList($product['id_product'], $product['id_product_attribute']);
                    }
                    $warehouse_in_stock = array();
                    $manager = StockManagerFactory::getManager();
                    foreach ($warehouse_list as $key => $warehouse) {
                        $product_real_quantities = $manager->getProductRealQuantities(
                            $product['id_product'],
                            $product['id_product_attribute'],
                            array($warehouse['id_warehouse']),
                            true
                        );
                        if ($product_real_quantities > 0 || Pack::isPack((int) $product['id_product'])) {
                            $warehouse_in_stock[] = $warehouse;
                        }
                    }
                    if (!empty($warehouse_in_stock)) {
                        $warehouse_list = $warehouse_in_stock;
                        $product['in_stock'] = true;
                    } else {
                        $product['in_stock'] = false;
                    }
                } else {
                    $warehouse_list = array(0 => array('id_warehouse' => 0));
                    $product['in_stock'] = StockAvailable::getQuantityAvailableByProduct($product['id_product'], $product['id_product_attribute']) > 0;
                }
                foreach ($warehouse_list as $warehouse) {
                    $product['warehouse_list'][$warehouse['id_warehouse']] = $warehouse['id_warehouse'];
                    if (!isset($warehouse_count_by_address[$product['id_address_delivery']][$warehouse['id_warehouse']])) {
                        $warehouse_count_by_address[$product['id_address_delivery']][$warehouse['id_warehouse']] = 0;
                    }
                    ++$warehouse_count_by_address[$product['id_address_delivery']][$warehouse['id_warehouse']];
                }
            }
            
            unset($product);
            arsort($warehouse_count_by_address);
            $grouped_by_warehouse = array();
            foreach ($product_list as &$product) {
                if (!isset($grouped_by_warehouse[$product['id_address_delivery']])) {
                    $grouped_by_warehouse[$product['id_address_delivery']] = array(
                        'in_stock' => array(),
                        'out_of_stock' => array(),
                    );
                }
                $product['carrier_list'] = array();
                $id_warehouse = 0;
                foreach ($warehouse_count_by_address[$product['id_address_delivery']] as $id_war => $val) {
                    if (array_key_exists((int) $id_war, $product['warehouse_list'])) {
                        $product['carrier_list'] = Tools::array_replace($product['carrier_list'], Carrier::getAvailableCarrierList(new Product($product['id_product']), $id_war, $product['id_address_delivery'], null, $this));
                        if (!$id_warehouse) {
                            $id_warehouse = (int) $id_war;
                        }
                    }
                }
                if (!isset($grouped_by_warehouse[$product['id_address_delivery']]['in_stock'][$id_warehouse])) {
                    $grouped_by_warehouse[$product['id_address_delivery']]['in_stock'][$id_warehouse] = array();
                    $grouped_by_warehouse[$product['id_address_delivery']]['out_of_stock'][$id_warehouse] = array();
                }
                if (!$this->allow_seperated_package) {
                    $key = 'in_stock';
                } else {
                    $key = $product['in_stock'] ? 'in_stock' : 'out_of_stock';
                    $product_quantity_in_stock = StockAvailable::getQuantityAvailableByProduct($product['id_product'], $product['id_product_attribute']);
                    if ($product['in_stock'] && $product['cart_quantity'] > $product_quantity_in_stock) {
                        $out_stock_part = $product['cart_quantity'] - $product_quantity_in_stock;
                        $product_bis = $product;
                        $product_bis['cart_quantity'] = $out_stock_part;
                        $product_bis['in_stock'] = 0;
                        $product['cart_quantity'] -= $out_stock_part;
                        $grouped_by_warehouse[$product['id_address_delivery']]['out_of_stock'][$id_warehouse][] = $product_bis;
                    }
                }
                if (empty($product['carrier_list'])) {
                    $product['carrier_list'] = array(0 => 0);
                }
                $grouped_by_warehouse[$product['id_address_delivery']][$key][$id_warehouse][] = $product;
            }
            unset($product);
            $grouped_by_carriers = array();
            foreach ($grouped_by_warehouse as $id_address_delivery => $products_in_stock_list) {
                if (!isset($grouped_by_carriers[$id_address_delivery])) {
                    $grouped_by_carriers[$id_address_delivery] = array(
                        'in_stock' => array(),
                        'out_of_stock' => array(),
                    );
                }
                foreach ($products_in_stock_list as $key => $warehouse_list) {
                    if (!isset($grouped_by_carriers[$id_address_delivery][$key])) {
                        $grouped_by_carriers[$id_address_delivery][$key] = array();
                    }
                    foreach ($warehouse_list as $id_warehouse => $product_list) {
                        if (!isset($grouped_by_carriers[$id_address_delivery][$key][$id_warehouse])) {
                            $grouped_by_carriers[$id_address_delivery][$key][$id_warehouse] = array();
                        }
                        foreach ($product_list as $product) {
                            $package_carriers_key = implode(',', $product['carrier_list']);
                            if (!isset($grouped_by_carriers[$id_address_delivery][$key][$id_warehouse][$package_carriers_key])) {
                                $grouped_by_carriers[$id_address_delivery][$key][$id_warehouse][$package_carriers_key] = array(
                                    'product_list' => array(),
                                    'carrier_list' => $product['carrier_list'],
                                    'warehouse_list' => $product['warehouse_list'],
                                );
                            }
                            $grouped_by_carriers[$id_address_delivery][$key][$id_warehouse][$package_carriers_key]['product_list'][] = $product;
                        }
                    }
                }
            }
            $package_list = array();
            foreach ($grouped_by_carriers as $id_address_delivery => $products_in_stock_list) {
                if (!isset($package_list[$id_address_delivery])) {
                    $package_list[$id_address_delivery] = array(
                        'in_stock' => array(),
                        'out_of_stock' => array(),
                    );
                }
                foreach ($products_in_stock_list as $key => $warehouse_list) {
                    if (!isset($package_list[$id_address_delivery][$key])) {
                        $package_list[$id_address_delivery][$key] = array();
                    }
                    $carrier_count = array();
                    foreach ($warehouse_list as $id_warehouse => $products_grouped_by_carriers) {
                        foreach ($products_grouped_by_carriers as $data) {
                            foreach ($data['carrier_list'] as $id_carrier) {
                                if (!isset($carrier_count[$id_carrier])) {
                                    $carrier_count[$id_carrier] = 0;
                                }
                                ++$carrier_count[$id_carrier];
                            }
                        }
                    }
                    arsort($carrier_count);
                    foreach ($warehouse_list as $id_warehouse => $products_grouped_by_carriers) {
                        if (!isset($package_list[$id_address_delivery][$key][$id_warehouse])) {
                            $package_list[$id_address_delivery][$key][$id_warehouse] = array();
                        }
                        foreach ($products_grouped_by_carriers as $data) {
                            foreach ($carrier_count as $id_carrier => $rate) {
                                if (array_key_exists($id_carrier, $data['carrier_list'])) {
                                    if (!isset($package_list[$id_address_delivery][$key][$id_warehouse][$id_carrier])) {
                                        $package_list[$id_address_delivery][$key][$id_warehouse][$id_carrier] = array(
                                            'carrier_list' => $data['carrier_list'],
                                            'warehouse_list' => $data['warehouse_list'],
                                            'product_list' => array(),
                                        );
                                    }
                                    $package_list[$id_address_delivery][$key][$id_warehouse][$id_carrier]['carrier_list'] =
                                        array_intersect($package_list[$id_address_delivery][$key][$id_warehouse][$id_carrier]['carrier_list'], $data['carrier_list']);
                                    $package_list[$id_address_delivery][$key][$id_warehouse][$id_carrier]['product_list'] =
                                        array_merge($package_list[$id_address_delivery][$key][$id_warehouse][$id_carrier]['product_list'], $data['product_list']);
                                    break;
                                }
                            }
                        }
                    }
                }
            }
            $final_package_list = array();
            foreach ($package_list as $id_address_delivery => $products_in_stock_list) {
                if (!isset($final_package_list[$id_address_delivery])) {
                    $final_package_list[$id_address_delivery] = array();
                }
                foreach ($products_in_stock_list as $key => $warehouse_list) {
                    foreach ($warehouse_list as $id_warehouse => $products_grouped_by_carriers) {
                        foreach ($products_grouped_by_carriers as $data) {
                            $final_package_list[$id_address_delivery][] = array(
                                'product_list' => $data['product_list'],
                                'carrier_list' => $data['carrier_list'],
                                'warehouse_list' => $data['warehouse_list'],
                                'id_warehouse' => $id_warehouse,
                            );
                        }
                    }
                }
            }
            require_once _PS_MODULE_DIR_.'mpcartordersplit/classes/CarrierProductMap.php';
            $obj_cp_map = new CarrierProductMap();
            $carriers_instance = array();
            $context = Context::getContext();
            $carrier_dtl = false;
            if (isset($context->cart->id) && $context->cart->id) {
                $carrier_dtl = $obj_cp_map->getCarrierDetailByIdCart($context->cart->id);
            }
            foreach ($final_package_list as $id_address => &$packages) {
	            
                $address = new Address($id_address);
                $country = new Country($address->id_country);
                foreach ($packages as &$package) {
	                
                    foreach ($package['product_list'] as &$product) {
	                    
                        $seller_dtl = $obj_cp_map->getSellerDetailByIdProd($product['id_product'], $context->language->id);
                        if ($seller_dtl) {
                            $shop_name = $obj_cp_map->getSellerShopNameByIdProduct($product['id_product']);
                            $product['id_seller'] = $seller_dtl['id_seller'];
                            $product['shop_name'] = $seller_dtl['shop_name'];
                            $product['seller_products_link'] = $context->link->getModuleLink('marketplace', 'shopstore', array('mp_shop_name' => $shop_name));
                        }
                        $product['product_img'] = $context->link->getImageLink(
                            $product['link_rewrite'],
                            $product['id_image'],
                            'cart_default'
                        );
                        $best_price = null;
                        $best_grade = null;
                        $carrier_exist = false;

                        foreach ($product['carrier_list'] as $id_carrier) {
	                        
                            if (isset($context->cart->id) && $context->cart->id) {
                                if ($carrier_dtl) {
                                    if (isset($carrier_dtl[$id_carrier])) {
                                        if (isset($carrier_dtl[$id_carrier][$product['id_product']])) {
                                            if (in_array($product['id_product_attribute'], $carrier_dtl[$id_carrier][$product['id_product']])) {
                                                $carrier_exist = true;
                                            }
                                        }
                                    }
                                }
                            }
                            $price_with_tax = $this->getPackageShippingCost((int) $id_carrier, true, $country, array($product));
                             $price_without_tax = $this->getPackageShippingCost((int) $id_carrier, false, $country, array($product));
                            if (!isset($carriers_instance[$id_carrier])) {
                                $carriers_instance[$id_carrier] = new Carrier($id_carrier);
                                if (file_exists(_PS_SHIP_IMG_DIR_.$id_carrier.'.jpg')) {
                                    $carriers_instance[$id_carrier]->logo = _THEME_SHIP_DIR_.$id_carrier.'.jpg';
                                } else {
                                    $carriers_instance[$id_carrier]->logo = false;
                                }
                            }
                            if (is_null($best_price) || $price_with_tax < $best_price) {
                                $best_price = $price_with_tax;
                            }
                            $grade = $carriers_instance[$id_carrier]->grade;
                            if (is_null($best_grade) || $grade > $best_grade) {
                                $best_grade = $grade;
                            }
                            $product['prod_carrier_instance'][$id_carrier] = $carriers_instance[$id_carrier];
                            $product['prod_carrier_dtl'][$id_carrier]['price_with_tax'] = $price_with_tax;
                            $product['prod_carrier_dtl'][$id_carrier]['price_without_tax'] = $price_without_tax;
                            $product['prod_carrier_dtl'][$id_carrier]['is_free'] = $price_without_tax <= 0 ? 1 : '';
                            $product['prod_carrier_dtl'][$id_carrier]['position'] = $carriers_instance[$id_carrier]->position;
                        }
                        if (!$carrier_exist && $carrier_dtl) {
                            $obj_cp_map->deleteDataBycartId($context->cart->id);
                            $carrier_dtl = false;
                        }
                        $product['prod_carrier_dtl']['best_price'] = $best_price;
                        $product['prod_carrier_dtl']['best_grade'] = $best_grade;
                    }
                }
            }
            $cache[$cache_key] = $final_package_list;
            return $final_package_list;
        } else {
            return parent::getPackageList($flush);
        }
    }
    /**
     * Get all deliveries options available for the current cart.
     *
     * @param Country $default_country
     * @param bool    $flush           Force flushing cache
     *
     * @return array array(
     *               0 => array( // First address
     *               '12,' => array(  // First delivery option available for this address
     *               carrier_list => array(
     *               12 => array( // First carrier for this option
     *               'instance' => Carrier Object,
     *               'logo' => <url to the carriers logo>,
     *               'price_with_tax' => 12.4,
     *               'price_without_tax' => 12.4,
     *               'package_list' => array(
     *               1,
     *               3,
     *               ),
     *               ),
     *               ),
     *               is_best_grade => true, // Does this option have the biggest grade (quick shipping) for this shipping address
     *               is_best_price => true, // Does this option have the lower price for this shipping address
     *               unique_carrier => true, // Does this option use a unique carrier
     *               total_price_with_tax => 12.5,
     *               total_price_without_tax => 12.5,
     *               position => 5, // Average of the carrier position
     *               ),
     *               ),
     *               );
     *               If there are no carriers available for an address, return an empty  array
     */
    /*
    * module: mpcartordersplit
    * date: 2018-09-08 20:52:18
    * version: 3.1.1
    */
    public function getDeliveryOptionList(Country $default_country = null, $flush = false)
    {
        if (Module::isInstalled('marketplace') && Module::isEnabled('marketplace') && Module::isInstalled('mpcartordersplit') && Module::isEnabled('mpcartordersplit') && Configuration::get('MP_ENABLE_CART_SPLIT')) {
            static $cache = array();
            if (isset($cache[$this->id]) && !$flush) {
                return $cache[$this->id];
            }
            $delivery_option_list = array();
            $carriers_price = array();
            $carrier_collection = array();
            $package_list = $this->getPackageList($flush);
            foreach ($package_list as $id_address => $packages) {
                $delivery_option_list[$id_address] = array();
                $carriers_price[$id_address] = array();
                $common_carriers = null;
                $best_price_carriers = array();
                $best_grade_carriers = array();
                $carriers_instance = array();
                if ($id_address) {
                    $address = new Address($id_address);
                    $country = new Country($address->id_country);
                } else {
                    $country = $default_country;
                }
                foreach ($packages as $id_package => $package) {
                    if (count($packages) == 1 && count($package['carrier_list']) == 1 && current($package['carrier_list']) == 0) {
                        $cache[$this->id] = array();
                        return $cache[$this->id];
                    }
                    $carriers_price[$id_address][$id_package] = array();
                    if (is_null($common_carriers)) {
                        $common_carriers = $package['carrier_list'];
                    } else {
                        $common_carriers = array_intersect($common_carriers, $package['carrier_list']);
                    }
                    $best_price = null;
                    $best_price_carrier = null;
                    $best_grade = null;
                    $best_grade_carrier = null;
                    foreach ($package['carrier_list'] as $id_carrier) {
                        if (!isset($carriers_instance[$id_carrier])) {
                            $carriers_instance[$id_carrier] = new Carrier($id_carrier);
                        }
                        $price_with_tax = $this->getPackageShippingCost((int) $id_carrier, true, $country, $package['product_list']);
                        $price_without_tax = $this->getPackageShippingCost((int) $id_carrier, false, $country, $package['product_list']);
                        if (is_null($best_price) || $price_with_tax < $best_price) {
                            $best_price = $price_with_tax;
                            $best_price_carrier = $id_carrier;
                        }
                        $carriers_price[$id_address][$id_package][$id_carrier] = array(
                            'without_tax' => $price_without_tax,
                            'with_tax' => $price_with_tax, );
                        $grade = $carriers_instance[$id_carrier]->grade;
                        if (is_null($best_grade) || $grade > $best_grade) {
                            $best_grade = $grade;
                            $best_grade_carrier = $id_carrier;
                        }
                    }
                    $best_price_carriers[$id_package] = $best_price_carrier;
                    $best_grade_carriers[$id_package] = $best_grade_carrier;
                }
                $best_price_carrier = array();
                $key = '';
                foreach ($best_price_carriers as $id_package => $id_carrier) {
                    $key .= $id_carrier.',';
                    if (!isset($best_price_carrier[$id_carrier])) {
                        $best_price_carrier[$id_carrier] = array(
                            'price_with_tax' => 0,
                            'price_without_tax' => 0,
                            'package_list' => array(),
                            'product_list' => array(),
                        );
                    }
                    $best_price_carrier[$id_carrier]['price_with_tax'] += $carriers_price[$id_address][$id_package][$id_carrier]['with_tax'];
                    $best_price_carrier[$id_carrier]['price_without_tax'] += $carriers_price[$id_address][$id_package][$id_carrier]['without_tax'];
                    $best_price_carrier[$id_carrier]['package_list'][] = $id_package;
                    $best_price_carrier[$id_carrier]['product_list'] = array_merge($best_price_carrier[$id_carrier]['product_list'], $packages[$id_package]['product_list']);
                    $best_price_carrier[$id_carrier]['instance'] = $carriers_instance[$id_carrier];
                    $real_best_price = !isset($real_best_price) || $real_best_price > $carriers_price[$id_address][$id_package][$id_carrier]['with_tax'] ?
                        $carriers_price[$id_address][$id_package][$id_carrier]['with_tax'] : $real_best_price;
                    $real_best_price_wt = !isset($real_best_price_wt) || $real_best_price_wt > $carriers_price[$id_address][$id_package][$id_carrier]['without_tax'] ?
                        $carriers_price[$id_address][$id_package][$id_carrier]['without_tax'] : $real_best_price_wt;
                }
                $delivery_option_list[$id_address][$key] = array(
                    'carrier_list' => $best_price_carrier,
                    'is_best_price' => true,
                    'is_best_grade' => false,
                    'unique_carrier' => (count($best_price_carrier) <= 1),
                );
                $best_grade_carrier = array();
                $key = '';
                foreach ($best_grade_carriers as $id_package => $id_carrier) {
                    $key .= $id_carrier.',';
                    if (!isset($best_grade_carrier[$id_carrier])) {
                        $best_grade_carrier[$id_carrier] = array(
                            'price_with_tax' => 0,
                            'price_without_tax' => 0,
                            'package_list' => array(),
                            'product_list' => array(),
                        );
                    }
                    $best_grade_carrier[$id_carrier]['price_with_tax'] += $carriers_price[$id_address][$id_package][$id_carrier]['with_tax'];
                    $best_grade_carrier[$id_carrier]['price_without_tax'] += $carriers_price[$id_address][$id_package][$id_carrier]['without_tax'];
                    $best_grade_carrier[$id_carrier]['package_list'][] = $id_package;
                    $best_grade_carrier[$id_carrier]['product_list'] = array_merge($best_grade_carrier[$id_carrier]['product_list'], $packages[$id_package]['product_list']);
                    $best_grade_carrier[$id_carrier]['instance'] = $carriers_instance[$id_carrier];
                }
                if (!isset($delivery_option_list[$id_address][$key])) {
                    $delivery_option_list[$id_address][$key] = array(
                        'carrier_list' => $best_grade_carrier,
                        'is_best_price' => false,
                        'unique_carrier' => (count($best_grade_carrier) <= 1),
                    );
                }
                $delivery_option_list[$id_address][$key]['is_best_grade'] = true;
                foreach ($common_carriers as $id_carrier) {
                    $key = '';
                    $package_list = array();
                    $product_list = array();
                    $price_with_tax = 0;
                    $price_without_tax = 0;
                    foreach ($packages as $id_package => $package) {
                        $key .= $id_carrier.',';
                        $price_with_tax += ceil($carriers_price[$id_address][$id_package][$id_carrier]['with_tax']);
                        $price_without_tax += $carriers_price[$id_address][$id_package][$id_carrier]['without_tax'];
                        $package_list[] = $id_package;
                        $product_list = array_merge($product_list, $package['product_list']);
                    }
                    if (!isset($delivery_option_list[$id_address][$key])) {
                        $delivery_option_list[$id_address][$key] = array(
                            'is_best_price' => false,
                            'is_best_grade' => false,
                            'unique_carrier' => true,
                            'carrier_list' => array(
                                $id_carrier => array(
                                    'price_with_tax' => $price_with_tax,
                                    'price_without_tax' => $price_without_tax,
                                    'instance' => $carriers_instance[$id_carrier],
                                    'package_list' => $package_list,
                                    'product_list' => $product_list,
                                ),
                            ),
                        );
                    } else {
                        $delivery_option_list[$id_address][$key]['unique_carrier'] = (count($delivery_option_list[$id_address][$key]['carrier_list']) <= 1);
                    }
                }
            }
            $cart_rules = CartRule::getCustomerCartRules(Context::getContext()->cookie->id_lang, Context::getContext()->cookie->id_customer, true, true, false, $this, true);
            $result = false;
            if ($this->id) {
                $result = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'cart_cart_rule WHERE id_cart = '.(int) $this->id);
            }
            $cart_rules_in_cart = array();
            if (is_array($result)) {
                foreach ($result as $row) {
                    $cart_rules_in_cart[] = $row['id_cart_rule'];
                }
            }
            $total_products_wt = $this->getOrderTotal(true, self::ONLY_PRODUCTS);
            $total_products = $this->getOrderTotal(false, self::ONLY_PRODUCTS);
            $free_carriers_rules = array();
            $context = Context::getContext();
            foreach ($cart_rules as $cart_rule) {
                $total_price = $cart_rule['minimum_amount_tax'] ? $total_products_wt : $total_products;
                $total_price += $cart_rule['minimum_amount_tax'] && $cart_rule['minimum_amount_shipping'] ? $real_best_price : 0;
                $total_price += !$cart_rule['minimum_amount_tax'] && $cart_rule['minimum_amount_shipping'] ? $real_best_price_wt : 0;
                if ($cart_rule['free_shipping'] && $cart_rule['carrier_restriction']
                    && in_array($cart_rule['id_cart_rule'], $cart_rules_in_cart)
                    && $cart_rule['minimum_amount'] <= $total_price) {
                    $cr = new CartRule((int) $cart_rule['id_cart_rule']);
                    if (Validate::isLoadedObject($cr) &&
                        $cr->checkValidity($context, in_array((int) $cart_rule['id_cart_rule'], $cart_rules_in_cart), false, false)) {
                        $carriers = $cr->getAssociatedRestrictions('carrier', true, false);
                        if (is_array($carriers) && count($carriers) && isset($carriers['selected'])) {
                            foreach ($carriers['selected'] as $carrier) {
                                if (isset($carrier['id_carrier']) && $carrier['id_carrier']) {
                                    $free_carriers_rules[] = (int) $carrier['id_carrier'];
                                }
                            }
                        }
                    }
                }
            }
            $productInfo = array();
            $carrierInstance = array();
            foreach ($delivery_option_list as $id_address => $delivery_option) {
                foreach ($delivery_option as $key => $value) {
                    $total_price_with_tax = 0;
                    $total_price_without_tax = 0;
                    $position = 0;
                    foreach ($value['carrier_list'] as $id_carrier => $data) {
                        $total_price_with_tax += $data['price_with_tax'];
                        $total_price_without_tax += $data['price_without_tax'];
                        $total_price_without_tax_with_rules = (in_array($id_carrier, $free_carriers_rules)) ? 0 : $total_price_without_tax;
                        if (!isset($carrier_collection[$id_carrier])) {
                            $carrier_collection[$id_carrier] = new Carrier($id_carrier);
                        }
                        $delivery_option_list[$id_address][$key]['carrier_list'][$id_carrier]['instance'] = $carrier_collection[$id_carrier];
                        if (file_exists(_PS_SHIP_IMG_DIR_.$id_carrier.'.jpg')) {
                            $delivery_option_list[$id_address][$key]['carrier_list'][$id_carrier]['logo'] = _THEME_SHIP_DIR_.$id_carrier.'.jpg';
                        } else {
                            $delivery_option_list[$id_address][$key]['carrier_list'][$id_carrier]['logo'] = false;
                        }
                        $position += $carrier_collection[$id_carrier]->position;
                        foreach ($data['product_list'] as $product_dtl) {
                            $productInfo[$product_dtl['id_product']][$product_dtl['id_product_attribute']] = $product_dtl;
                        }
                        $carrierInstance[$id_carrier] = $data['instance'];
                        $carrierInstance[$id_carrier]->logo = $delivery_option_list[$id_address][$key]['carrier_list'][$id_carrier]['logo'];
                        $carrierInstance[$id_carrier]->package_list = $data['package_list'];
                    }
                    $delivery_option_list[$id_address][$key]['total_price_with_tax'] = ceil($total_price_with_tax);
                    $delivery_option_list[$id_address][$key]['total_price_without_tax'] = ceil($total_price_without_tax);
                    $delivery_option_list[$id_address][$key]['is_free'] = !$total_price_without_tax_with_rules ? true : false;
                    $delivery_option_list[$id_address][$key]['position'] = $position / count($value['carrier_list']);
                                        if($delivery_option_list[$id_address][$key]['is_free'])
							{
// 							        unset( $delivery_option_list[$id_address][$key]);
								}
                }
            }
            if (isset($context->cart->id) && $context->cart->id) {
                if (Module::isInstalled('marketplace')) {
                    require_once _PS_MODULE_DIR_.'mpcartordersplit/classes/CarrierProductMap.php';
                }
                $obj_cp_map = new CarrierProductMap();
                $carrier_dtl = $obj_cp_map->getCarrierDetailByIdCart($context->cart->id);
                if ($carrier_dtl) {
                    foreach ($carrier_dtl as $id_carrier => $product) {
                        $old_carrier = new Carrier($id_carrier, (int) $context->cart->id_lang); // if carrier id is changed
                        if ($old_carrier->deleted) {
                            $obj_cp_map->deleteDataBycartId($context->cart->id);
                            $obj_cp_map->insertSelectedDeliveryOption($delivery_option_list);
                            break;
                        }
                    }
                    $delivery_option_list = $obj_cp_map->createFinalDeliveryOptionList($delivery_option_list, $productInfo, $carrierInstance, $free_carriers_rules, $default_country);
                } else {
                    $obj_cp_map->insertSelectedDeliveryOption($delivery_option_list);
                    $delivery_option_list = $obj_cp_map->createFinalDeliveryOptionList($delivery_option_list, $productInfo, $carrierInstance, $free_carriers_rules, $default_country);
                }
            }
            foreach ($delivery_option_list as &$array) {
                uasort($array, array('Cart', 'sortDeliveryOptionList'));
            }
            $cache[$this->id] = $delivery_option_list;
            return $cache[$this->id];
        } else {
            return parent::getDeliveryOptionList($default_country, $flush);
        }
    }
    /**
     * Set the delivery option and id_carrier, if there is only one carrier.
     */
    /*
    * module: mpcartordersplit
    * date: 2018-09-08 20:52:18
    * version: 3.1.1
    */
    public function setDeliveryOption($delivery_option = null)
    {
        if (Module::isInstalled('marketplace') && Module::isEnabled('marketplace') && Module::isInstalled('mpcartordersplit') && Module::isEnabled('mpcartordersplit') && Configuration::get('MP_ENABLE_CART_SPLIT')) {
            if (empty($delivery_option) || count($delivery_option) == 0) {
                $this->delivery_option = '';
                $this->id_carrier = 0;
                return;
            }
            if (Tools::getValue('carrier_list')) {
                $context = Context::getContext();
                $carrier_list = Tools::jsonDecode(Tools::getValue('carrier_list'), true);
                if (Module::isInstalled('marketplace')) {
                    require_once _PS_MODULE_DIR_.'mpcartordersplit/classes/CarrierProductMap.php';
                }
                $obj_cp_map = new CarrierProductMap();
                $obj_cp_map->deleteDataBycartId($context->cart->id);
                foreach ($carrier_list as $id_carrier => $product) {
                    foreach ($product as $id_product => $attr_arr) {
                        foreach ($attr_arr as $id_prod_attr) {
                            $id_seller = $obj_cp_map->getSellerIdByIdProd($id_product);
                            $id_seller = $id_seller ? $id_seller : 0;
                            $obj_cp_map = new CarrierProductMap();
                            $obj_cp_map->id_cart = $context->cart->id;
                            $obj_cp_map->id_carrier = $id_carrier;
                            $obj_cp_map->id_seller = $id_seller;
                            $obj_cp_map->id_product = $id_product;
                            $obj_cp_map->id_product_attribute = $id_prod_attr;
                            $obj_cp_map->save();
                        }
                    }
                }
            }
            Cache::clean('getContextualValue_*');
            $delivery_option_list = $this->getDeliveryOptionList(null, true);
            foreach ($delivery_option_list as $id_address => $options) {
                if (!isset($delivery_option[$id_address])) {
                    foreach ($options as $key => $option) {
                        if ($option['is_best_price']) {
                            $delivery_option[$id_address] = $key;
                            break;
                        }
                    }
                }
            }
            if (count($delivery_option) == 1) {
                $this->id_carrier = $this->getIdCarrierFromDeliveryOption($delivery_option);
            }
            $this->delivery_option = serialize($delivery_option);
        } else {
            return parent::setDeliveryOption($delivery_option);
        }
    }
    /*
    * module: mpcartordersplit
    * date: 2018-09-08 20:52:18
    * version: 3.1.1
    */
    public function getMpPackageShippingCost($id_carrier = null, $use_tax = true, Country $default_country = null, $product_list = null, $id_zone = null)
    {
        if ($this->isVirtualCart()) {
            return 0;
        }
        if (!$default_country) {
            $default_country = Context::getContext()->country;
        }
        if (!is_null($product_list)) {
            foreach ($product_list as $key => $value) {
                if ($value['is_virtual'] == 1) {
                    unset($product_list[$key]);
                }
            }
        }
        if (is_null($product_list)) {
            $products = $this->getProducts();
        } else {
            $products = $product_list;
        }
        if (Configuration::get('PS_TAX_ADDRESS_TYPE') == 'id_address_invoice') {
            $address_id = (int)$this->id_address_invoice;
        } elseif (count($product_list)) {
            $prod = current($product_list);
            $address_id = (int)$prod['id_address_delivery'];
        } else {
            $address_id = null;
        }
        if (!Address::addressExists($address_id)) {
            $address_id = null;
        }
        if (is_null($id_carrier) && !empty($this->id_carrier)) {
            $id_carrier = (int)$this->id_carrier;
        }
        $cache_id = 'getPackageShippingCost_'.(int)$this->id.'_'.(int)$address_id.'_'.(int)$id_carrier.'_'.(int)$use_tax.'_'.(int)$default_country->id;
        if ($products) {
            foreach ($products as $product) {
                $cache_id .= '_'.(int)$product['id_product'].'_'.(int)$product['id_product_attribute'];
            }
        }
        if (Cache::isStored($cache_id)) {
            return Cache::retrieve($cache_id);
        }
        $order_total = $this->getOrderTotal(true, Cart::ONLY_PHYSICAL_PRODUCTS_WITHOUT_SHIPPING, $product_list);
        $shipping_cost = 0;
        if (!count($products)) {
            Cache::store($cache_id, $shipping_cost);
            return $shipping_cost;
        }
        if (!isset($id_zone)) {
            if (!$this->isMultiAddressDelivery()
                && isset($this->id_address_delivery) // Be carefull, id_address_delivery is not usefull one 1.5
                && $this->id_address_delivery
                && Customer::customerHasAddress($this->id_customer, $this->id_address_delivery
            )) {
                $id_zone = Address::getZoneById((int)$this->id_address_delivery);
            } else {
                if (!Validate::isLoadedObject($default_country)) {
                    $default_country = new Country(Configuration::get('PS_COUNTRY_DEFAULT'), Configuration::get('PS_LANG_DEFAULT'));
                }
                $id_zone = (int)$default_country->id_zone;
            }
        }
        $this->mpTempProductList = $product_list;
        if ($id_carrier && !$this->isCarrierInRange((int)$id_carrier, (int)$id_zone)) {
            $id_carrier = '';
        }
        if (empty($id_carrier) && $this->isCarrierInRange((int)Configuration::get('PS_CARRIER_DEFAULT'), (int)$id_zone)) {
            $id_carrier = (int)Configuration::get('PS_CARRIER_DEFAULT');
        }
        $total_package_without_shipping_tax_inc = $this->getOrderTotal(true, Cart::BOTH_WITHOUT_SHIPPING, $product_list);
        if (empty($id_carrier)) {
            if ((int)$this->id_customer) {
                $customer = new Customer((int)$this->id_customer);
                $result = Carrier::getCarriers((int)Configuration::get('PS_LANG_DEFAULT'), true, false, (int)$id_zone, $customer->getGroups());
                unset($customer);
            } else {
                $result = Carrier::getCarriers((int)Configuration::get('PS_LANG_DEFAULT'), true, false, (int)$id_zone);
            }
            foreach ($result as $k => $row) {
                if ($row['id_carrier'] == Configuration::get('PS_CARRIER_DEFAULT')) {
                    continue;
                }
                if (!isset(self::$_carriers[$row['id_carrier']])) {
                    self::$_carriers[$row['id_carrier']] = new Carrier((int)$row['id_carrier']);
                }
                
                $carrier = self::$_carriers[$row['id_carrier']];
                $shipping_method = $carrier->getShippingMethod();
                if (($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT && $carrier->getMaxDeliveryPriceByWeight((int)$id_zone) === false)
                || ($shipping_method == Carrier::SHIPPING_METHOD_PRICE && $carrier->getMaxDeliveryPriceByPrice((int)$id_zone) === false)) {
                    unset($result[$k]);
                    continue;
                }
                if ($row['range_behavior']) {
                    $check_delivery_price_by_weight = Carrier::checkDeliveryPriceByWeight($row['id_carrier'], $this->getTotalWeight($product_list), (int)$id_zone);
                    $total_order = $total_package_without_shipping_tax_inc;
                    $check_delivery_price_by_price = Carrier::checkDeliveryPriceByPrice($row['id_carrier'], $total_order, (int)$id_zone, (int)$this->id_currency);
                    if (($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT && !$check_delivery_price_by_weight)
                    || ($shipping_method == Carrier::SHIPPING_METHOD_PRICE && !$check_delivery_price_by_price)) {
                        unset($result[$k]);
                        continue;
                    }
                }
                if ($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT) {
                    $shipping = $carrier->getDeliveryPriceByWeight($this->getTotalWeight($product_list), (int)$id_zone);
                } else {
                    $shipping = $carrier->getDeliveryPriceByPrice($order_total, (int)$id_zone, (int)$this->id_currency);
                }
                if (!isset($min_shipping_price)) {
                    $min_shipping_price = $shipping;
                }
                if ($shipping <= $min_shipping_price) {
                    $id_carrier = (int)$row['id_carrier'];
                    $min_shipping_price = $shipping;
                }
            }
        }
        if (empty($id_carrier)) {
            $id_carrier = Configuration::get('PS_CARRIER_DEFAULT');
        }
        if (!isset(self::$_carriers[$id_carrier])) {
            self::$_carriers[$id_carrier] = new Carrier((int)$id_carrier, Configuration::get('PS_LANG_DEFAULT'));
        }
        $carrier = self::$_carriers[$id_carrier];
        if (!Validate::isLoadedObject($carrier)) {
            Cache::store($cache_id, 0);
            return 0;
        }
        $shipping_method = $carrier->getShippingMethod();
        if (!$carrier->active) {
            Cache::store($cache_id, $shipping_cost);
            return $shipping_cost;
        }
        if ($carrier->is_free == 1) {
            Cache::store($cache_id, 0);
            return 0;
        }
        if ($use_tax && !Tax::excludeTaxeOption()) {
            $address = Address::initialize((int)$address_id);
            if (Configuration::get('PS_ATCP_SHIPWRAP')) {
                $carrier_tax = 0;
            } else {
                $carrier_tax = $carrier->getTaxesRate($address);
            }
        }
        $configuration = Configuration::getMultiple(array(
            'PS_SHIPPING_FREE_PRICE',
            'PS_SHIPPING_HANDLING',
            'PS_SHIPPING_METHOD',
            'PS_SHIPPING_FREE_WEIGHT'
        ));
        $free_fees_price = 0;
        if (isset($configuration['PS_SHIPPING_FREE_PRICE'])) {
            $free_fees_price = Tools::convertPrice((float)$configuration['PS_SHIPPING_FREE_PRICE'], Currency::getCurrencyInstance((int)$this->id_currency));
        }
        $orderTotalwithDiscounts = $this->getOrderTotal(true, Cart::BOTH_WITHOUT_SHIPPING, $product_list, null, false);
        if ($orderTotalwithDiscounts >= (float)($free_fees_price) && (float)($free_fees_price) > 0) {
            Cache::store($cache_id, $shipping_cost);
            return $shipping_cost;
        }
        if (isset($configuration['PS_SHIPPING_FREE_WEIGHT'])
            && $this->getTotalWeight() >= (float)$configuration['PS_SHIPPING_FREE_WEIGHT']
            && (float)$configuration['PS_SHIPPING_FREE_WEIGHT'] > 0) {
            Cache::store($cache_id, $shipping_cost);
            return $shipping_cost;
        }
        if ($carrier->range_behavior) {
            if (!isset($id_zone)) {
                if (isset($this->id_address_delivery)
                    && $this->id_address_delivery
                    && Customer::customerHasAddress($this->id_customer, $this->id_address_delivery)) {
                    $id_zone = Address::getZoneById((int)$this->id_address_delivery);
                } else {
                    $id_zone = (int)$default_country->id_zone;
                }
            }
            if (($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT && !Carrier::checkDeliveryPriceByWeight($carrier->id, $this->getTotalWeight($product_list), (int)$id_zone))
            || ($shipping_method == Carrier::SHIPPING_METHOD_PRICE && !Carrier::checkDeliveryPriceByPrice($carrier->id, $total_package_without_shipping_tax_inc, $id_zone, (int)$this->id_currency)
            )) {
                $shipping_cost += 0;
            } else {
                if ($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT) {
                    $shipping_cost += $carrier->getDeliveryPriceByWeight($this->getTotalWeight($product_list), $id_zone);
                } else { // by price
                    $shipping_cost += $carrier->getDeliveryPriceByPrice($order_total, $id_zone, (int)$this->id_currency);
                }
            }
        } else {
            if ($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT) {
                $shipping_cost += $carrier->getDeliveryPriceByWeight($this->getTotalWeight($product_list), $id_zone);
            } else {
                $shipping_cost += $carrier->getDeliveryPriceByPrice($order_total, $id_zone, (int)$this->id_currency);
            }
        }
        if (isset($configuration['PS_SHIPPING_HANDLING']) && $carrier->shipping_handling) {
            $shipping_cost += (float)$configuration['PS_SHIPPING_HANDLING'];
        }
        foreach ($products as $product) {
            if (!$product['is_virtual']) {
                $shipping_cost += $product['additional_shipping_cost'] * $product['cart_quantity'];
            }
        }
        $shipping_cost = Tools::convertPrice($shipping_cost, Currency::getCurrencyInstance((int)$this->id_currency));
        if ($carrier->shipping_external) {
            $module_name = $carrier->external_module_name;
            
            $module = Module::getInstanceByName($module_name);
            if (Validate::isLoadedObject($module)) {
                if (array_key_exists('id_carrier', $module)) {
                    $module->id_carrier = $carrier->id;
                }

                if ($carrier->need_range) {
                    if (method_exists($module, 'getPackageShippingCost')) {
                        $shipping_cost = $module->getPackageShippingCost($this, $shipping_cost, $products);
                    } else {
                        $shipping_cost = $module->getOrderShippingCost($this, $shipping_cost);
                    }
                } else {
                    $shipping_cost = $module->getOrderShippingCostExternal($this);
                }
                if ($shipping_cost === false) {
                    Cache::store($cache_id, false);
                    return false;
                }
            } else {
                Cache::store($cache_id, false);
                return false;
            }
        }
        if (Configuration::get('PS_ATCP_SHIPWRAP')) {
            if (!$use_tax) {
                    $shipping_cost /= (1 + $this->getAverageProductsTaxRate());
            }
        } else {
            if ($use_tax && isset($carrier_tax)) {
                $shipping_cost *= 1 + ($carrier_tax / 100);
            }
        }
        $shipping_cost = (float)Tools::ps_round((float)$shipping_cost, (Currency::getCurrencyInstance((int)$this->id_currency)->decimals * _PS_PRICE_DISPLAY_PRECISION_));
        Cache::store($cache_id, $shipping_cost);

        return $shipping_cost;
    }
    /**
     * isCarrierInRange
     *
     * Check if the specified carrier is in range
     *
     * @id_carrier int
     * @id_zone int
     */
    /*
    * module: mpcartordersplit
    * date: 2018-09-08 20:52:18
    * version: 3.1.1
    */
    public function isCarrierInRange($id_carrier, $id_zone)
    {
        if (Module::isInstalled('marketplace') && Module::isEnabled('marketplace') && Module::isInstalled('mpcartordersplit') && Module::isEnabled('mpcartordersplit') && Configuration::get('MP_ENABLE_CART_SPLIT')) {
            $product_list = $this->mpTempProductList;
            $carrier = new Carrier((int)$id_carrier, Configuration::get('PS_LANG_DEFAULT'));
            $shipping_method = $carrier->getShippingMethod();
            if (!$carrier->range_behavior) {
                return true;
            }
            if ($shipping_method == Carrier::SHIPPING_METHOD_FREE) {
                return true;
            }
            $check_delivery_price_by_weight = Carrier::checkDeliveryPriceByWeight(
                (int)$id_carrier,
                $this->getTotalWeight($product_list),
                $id_zone
            );
            if ($shipping_method == Carrier::SHIPPING_METHOD_WEIGHT && $check_delivery_price_by_weight) {
                return true;
            }
            $check_delivery_price_by_price = Carrier::checkDeliveryPriceByPrice(
                (int)$id_carrier,
                $this->getOrderTotal(
                    true,
                    Cart::BOTH_WITHOUT_SHIPPING,
                    $product_list
                ),
                $id_zone,
                (int)$this->id_currency
            );
            if ($shipping_method == Carrier::SHIPPING_METHOD_PRICE && $check_delivery_price_by_price) {
                return true;
            }
            return false;
        } else {
            return parent::isCarrierInRange($id_carrier, $id_zone);
        }
    }

     /**
     * Return cart products
     *
     * @result array Products
     */
    public function getProducts($refresh = false, $id_product = false, $id_country = null, $id_cart = true)
    {
        if (!$this->id) {
            return array();
        }
        // Product cache must be strictly compared to NULL, or else an empty cart will add dozens of queries
        if ($this->_products !== null && !$refresh) {
            // Return product row with specified ID if it exists
            if (is_int($id_product)) {
                foreach ($this->_products as $product) {
                    if ($product['id_product'] == $id_product) {
                        return array($product);
                    }
                }
                return array();
            }
            return $this->_products;
        }

        // Build query
        $sql = new DbQuery();

        // Build SELECT
        $sql->select('cp.`id_product_attribute`, cp.`id_product`, cp.`quantity` AS cart_quantity, cp.id_shop, pl.`name`, p.`is_virtual`,
                        pl.`description_short`, pl.`available_now`, pl.`available_later`, product_shop.`id_category_default`, p.`id_supplier`,
                        p.`id_manufacturer`, product_shop.`on_sale`, product_shop.`ecotax`, product_shop.`additional_shipping_cost`,
                        product_shop.`available_for_order`, product_shop.`price`, product_shop.`active`, product_shop.`unity`, product_shop.`unit_price_ratio`,
                        stock.`quantity` AS quantity_available, p.`width`, p.`height`, p.`depth`, stock.`out_of_stock`, p.`weight`,
                        p.`date_add`, p.`date_upd`, IFNULL(stock.quantity, 0) as quantity, pl.`link_rewrite`, cl.`link_rewrite` AS category,
                        CONCAT(LPAD(cp.`id_product`, 10, 0), LPAD(IFNULL(cp.`id_product_attribute`, 0), 10, 0), IFNULL(cp.`id_address_delivery`, 0)) AS unique_id, cp.id_address_delivery,
                        product_shop.advanced_stock_management, ps.product_supplier_reference supplier_reference');

        // Build FROM
        $sql->from('cart_product', 'cp');

        // Build JOIN
        $sql->leftJoin('product', 'p', 'p.`id_product` = cp.`id_product`');
        $sql->innerJoin('product_shop', 'product_shop', '(product_shop.`id_shop` = cp.`id_shop` AND product_shop.`id_product` = p.`id_product`)');
        $sql->leftJoin('product_lang', 'pl', '
            p.`id_product` = pl.`id_product`
            AND pl.`id_lang` = '.(int)$this->id_lang.Shop::addSqlRestrictionOnLang('pl', 'cp.id_shop')
        );

        $sql->leftJoin('category_lang', 'cl', '
            product_shop.`id_category_default` = cl.`id_category`
            AND cl.`id_lang` = '.(int)$this->id_lang.Shop::addSqlRestrictionOnLang('cl', 'cp.id_shop')
        );

        $sql->leftJoin('product_supplier', 'ps', 'ps.`id_product` = cp.`id_product` AND ps.`id_product_attribute` = cp.`id_product_attribute` AND ps.`id_supplier` = p.`id_supplier`');

        // @todo test if everything is ok, then refactorise call of this method
        $sql->join(Product::sqlStock('cp', 'cp'));

        // Build WHERE clauses
        if ($id_cart) {
            $sql->where('cp.`id_cart` = '.(int)$this->id);
        }

        if ($id_product) {
            $sql->where('cp.`id_product` = '.(int)$id_product);
        }
        $sql->where('p.`id_product` IS NOT NULL');

        // Build ORDER BY
        $sql->orderBy('cp.`date_add`, cp.`id_product`, cp.`id_product_attribute` ASC');

        if (Customization::isFeatureActive()) {
            $sql->select('cu.`id_customization`, cu.`quantity` AS customization_quantity');
            $sql->leftJoin('customization', 'cu',
                'p.`id_product` = cu.`id_product` AND cp.`id_product_attribute` = cu.`id_product_attribute` AND cu.`id_cart` = '.(int)$this->id);
            $sql->groupBy('cp.`id_product_attribute`, cp.`id_product`, cp.`id_shop`');
        } else {
            $sql->select('NULL AS customization_quantity, NULL AS id_customization');
        }

        if (Combination::isFeatureActive()) {
            $sql->select('
                product_attribute_shop.`price` AS price_attribute, product_attribute_shop.`ecotax` AS ecotax_attr,
                IF (IFNULL(pa.`reference`, \'\') = \'\', p.`reference`, pa.`reference`) AS reference,
                (p.`weight`+ pa.`weight`) weight_attribute,
                IF (IFNULL(pa.`ean13`, \'\') = \'\', p.`ean13`, pa.`ean13`) AS ean13,
                IF (IFNULL(pa.`upc`, \'\') = \'\', p.`upc`, pa.`upc`) AS upc,
                IFNULL(product_attribute_shop.`minimal_quantity`, product_shop.`minimal_quantity`) as minimal_quantity,
                IF(product_attribute_shop.wholesale_price > 0,  product_attribute_shop.wholesale_price, product_shop.`wholesale_price`) wholesale_price
            ');

            $sql->leftJoin('product_attribute', 'pa', 'pa.`id_product_attribute` = cp.`id_product_attribute`');
            $sql->leftJoin('product_attribute_shop', 'product_attribute_shop', '(product_attribute_shop.`id_shop` = cp.`id_shop` AND product_attribute_shop.`id_product_attribute` = pa.`id_product_attribute`)');
        } else {
            $sql->select(
                'p.`reference` AS reference, p.`ean13`,
                p.`upc` AS upc, product_shop.`minimal_quantity` AS minimal_quantity, product_shop.`wholesale_price` wholesale_price'
            );
        }

        $sql->select('image_shop.`id_image` id_image, il.`legend`');
        $sql->leftJoin('image_shop', 'image_shop', 'image_shop.`id_product` = p.`id_product` AND image_shop.cover=1 AND image_shop.id_shop='.(int)$this->id_shop);
        $sql->leftJoin('image_lang', 'il', 'il.`id_image` = image_shop.`id_image` AND il.`id_lang` = '.(int)$this->id_lang);

        $result = Db::getInstance()->executeS($sql);

        // Reset the cache before the following return, or else an empty cart will add dozens of queries
        $products_ids = array();
        $pa_ids = array();
        if ($result) {
            foreach ($result as $key => $row) {
                $products_ids[] = $row['id_product'];
                $pa_ids[] = $row['id_product_attribute'];
                $specific_price = SpecificPrice::getSpecificPrice($row['id_product'], $this->id_shop, $this->id_currency, $id_country, $this->id_shop_group, $row['cart_quantity'], $row['id_product_attribute'], $this->id_customer, $this->id);
                if ($specific_price) {
                    $reduction_type_row = array('reduction_type' => $specific_price['reduction_type']);
                } else {
                    $reduction_type_row = array('reduction_type' => 0);
                }

                $result[$key] = array_merge($row, $reduction_type_row);
            }
        }
        // Thus you can avoid one query per product, because there will be only one query for all the products of the cart
        Product::cacheProductsFeatures($products_ids);
        Cart::cacheSomeAttributesLists($pa_ids, $this->id_lang);

        $this->_products = array();
        if (empty($result)) {
            return array();
        }

        $ecotax_rate = (float)Tax::getProductEcotaxRate($this->{Configuration::get('PS_TAX_ADDRESS_TYPE')});
        $apply_eco_tax = Product::$_taxCalculationMethod == PS_TAX_INC && (int)Configuration::get('PS_TAX');
        $cart_shop_context = Context::getContext()->cloneContext();

        foreach ($result as &$row) {
            if (isset($row['ecotax_attr']) && $row['ecotax_attr'] > 0) {
                $row['ecotax'] = (float)$row['ecotax_attr'];
            }

            $row['stock_quantity'] = (int)$row['quantity'];
            // for compatibility with 1.2 themes
            $row['quantity'] = (int)$row['cart_quantity'];

            if (isset($row['id_product_attribute']) && (int)$row['id_product_attribute'] && isset($row['weight_attribute'])) {
                $row['weight'] = (float)$row['weight_attribute'];
            }

            if (Configuration::get('PS_TAX_ADDRESS_TYPE') == 'id_address_invoice') {
                $address_id = (int)$this->id_address_invoice;
            } else {
                $address_id = (int)$row['id_address_delivery'];
            }
            if (!Address::addressExists($address_id)) {
                $address_id = null;
            }

            if ($cart_shop_context->shop->id != $row['id_shop']) {
                $cart_shop_context->shop = new Shop((int)$row['id_shop']);
            }

            $address = Address::initialize($address_id, true);
            $id_tax_rules_group = Product::getIdTaxRulesGroupByIdProduct((int)$row['id_product'], $cart_shop_context);
            $tax_calculator = TaxManagerFactory::getManager($address, $id_tax_rules_group)->getTaxCalculator();

            $row['price_without_reduction'] = Product::getPriceStatic(
                (int)$row['id_product'],
                true,
                isset($row['id_product_attribute']) ? (int)$row['id_product_attribute'] : null,
                6,
                null,
                false,
                false,
                $row['cart_quantity'],
                false,
                (int)$this->id_customer ? (int)$this->id_customer : null,
                (int)$this->id,
                $address_id,
                $specific_price_output,
                true,
                true,
                $cart_shop_context
            );

            $row['price_with_reduction'] = Product::getPriceStatic(
                (int)$row['id_product'],
                true,
                isset($row['id_product_attribute']) ? (int)$row['id_product_attribute'] : null,
                6,
                null,
                false,
                true,
                $row['cart_quantity'],
                false,
                (int)$this->id_customer ? (int)$this->id_customer : null,
                (int)$this->id,
                $address_id,
                $specific_price_output,
                true,
                true,
                $cart_shop_context
            );

            $row['price'] = $row['price_with_reduction_without_tax'] = Product::getPriceStatic(
                (int)$row['id_product'],
                false,
                isset($row['id_product_attribute']) ? (int)$row['id_product_attribute'] : null,
                6,
                null,
                false,
                true,
                $row['cart_quantity'],
                false,
                (int)$this->id_customer ? (int)$this->id_customer : null,
                (int)$this->id,
                $address_id,
                $specific_price_output,
                true,
                true,
                $cart_shop_context
            );

            switch (Configuration::get('PS_ROUND_TYPE')) {
                case Order::ROUND_TOTAL:
                    $row['total'] = $row['price_with_reduction_without_tax'] * (int)$row['cart_quantity'];
                    $row['total_wt'] = $row['price_with_reduction'] * (int)$row['cart_quantity'];
                    break;
                case Order::ROUND_LINE:
                    $row['total'] = Tools::ps_round($row['price_with_reduction_without_tax'] * (int)$row['cart_quantity'], _PS_PRICE_COMPUTE_PRECISION_);
                    $row['total_wt'] = Tools::ps_round($row['price_with_reduction'] * (int)$row['cart_quantity'], _PS_PRICE_COMPUTE_PRECISION_);
                    break;

                case Order::ROUND_ITEM:
                default:
                    $row['total'] = Tools::ps_round($row['price_with_reduction_without_tax'], _PS_PRICE_COMPUTE_PRECISION_) * (int)$row['cart_quantity'];
                    $row['total_wt'] = Tools::ps_round($row['price_with_reduction'], _PS_PRICE_COMPUTE_PRECISION_) * (int)$row['cart_quantity'];
                    break;
            }

            $row['price_wt'] = $row['price_with_reduction'];
            $row['description_short'] = Tools::nl2br($row['description_short']);

            // check if a image associated with the attribute exists
            if ($row['id_product_attribute']) {
                $row2 = Image::getBestImageAttribute($row['id_shop'], $this->id_lang, $row['id_product'], $row['id_product_attribute']);
                if ($row2) {
                    $row = array_merge($row, $row2);
                }
            }

            $row['reduction_applies'] = ($specific_price_output && (float)$specific_price_output['reduction']);
            $row['quantity_discount_applies'] = ($specific_price_output && $row['cart_quantity'] >= (int)$specific_price_output['from_quantity']);
            $row['id_image'] = Product::defineProductImage($row, $this->id_lang);
            $row['allow_oosp'] = Product::isAvailableWhenOutOfStock($row['out_of_stock']);
            $row['features'] = Product::getFeaturesStatic((int)$row['id_product']);

            if (array_key_exists($row['id_product_attribute'].'-'.$this->id_lang, self::$_attributesLists)) {
                $row = array_merge($row, self::$_attributesLists[$row['id_product_attribute'].'-'.$this->id_lang]);
            }

            $row = Product::getTaxesInformations($row, $cart_shop_context);

            $this->_products[] = $row;
        }

        return $this->_products;
    }

    public function isOffer(): bool
    {
        return (bool)Db::getInstance()->getValue('SELECT `is_offer` FROM `'._DB_PREFIX_.'cart` WHERE `id_cart` = '. (int)$this->id .' AND `is_offer` = 1');
    }
}
