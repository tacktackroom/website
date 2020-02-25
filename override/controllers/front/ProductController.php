<?php

Class ProductController extends ProductControllerCore
{
	public function initContent()
	{
        parent::initContent();

		$adjacent_products = $this->product->getAdjacentProducts();
        $id_country = (int)Tools::getCountry();
        if (Configuration::get('PS_RESTRICT_DELIVERED_COUNTRIES')) {
            $countries = Carrier::getDeliveredCountries($this->context->language->id, true, true);
        } else {
            $countries = Country::getCountries($this->context->language->id, true);
        }
        $list = '';
        foreach ($countries as $country) {
            $selected = '';
            $list .= '<option value="'.(int)$country['id_country'].'"'.$selected.'>'.htmlentities($country['name'], ENT_COMPAT, 'UTF-8').'</option>';
        }

        $getSellerByProduct = WkMpSellerProduct::getSellerByPsIdProduct($this->product->id);
        $seller = WkMpSeller::getSellerByCustomerId($this->context->customer->id);

        if (Tools::isSubmit('submitReview') && ($order_id = (int)Tools::getValue('o')) 
            && $this->context->customer->isLogged()) {
            $order = new Order($order_id);
            $id_customer = (int)$order->id_customer;
            $is_real_seller = false;
            $canRate = false;

            // if this user is the seller one
            if ((int)$getSellerByProduct['seller_customer_id'] === (int)$this->context->customer->id) {
                $is_real_seller = true;
                
                $getSellerID = (int)WkMpSellerOrderDetail::getSellerIdByIdOrder($order->id);
                $seller = WkMpSeller::getSellerByCustomerId($id_customer);
                $seller_id = $seller['id_seller'];
                $getReview = WkMpSellerReview::getReviewByCustomerIdAndSellerId($this->context->customer->id, $seller_id, $order->id);

                if ($getSellerID === (int)$getSellerByProduct['id_seller'] && !$getReview) {
                    $canRate = true;
                }
            } else {
                $getSellerID = (int)WkMpSellerOrderDetail::getSellerIdByIdOrder($order->id);
                $seller_id = $getSellerID;
                $getReview = WkMpSellerReview::getReviewByCustomerIdAndSellerId($this->context->customer->id, $seller_id, $order->id);

                if ((int)$this->context->customer->id === $id_customer && !$getReview) {
                    $canRate = true;
                }
            }

            if (false !== $canRate) {
                $this->context->smarty->assign(array(
                    'sid' => $seller_id,
                    'cid' => $id_customer,
                    'is_real_seller' => $is_real_seller,
                    'name_shop' => $seller['link_rewrite'],
                    'back' => $this->context->link->getProductLink($this->product) .'?submitReview&o='. $order->id,
                    'id_order' => $order->id,
                ));

                $jsVars = array(
                    'logged' => $this->context->customer->isLogged(),
                    'moduledir' => _MODULE_DIR_,
                    'mp_image_dir' => _MODULE_DIR_.'marketplace/views/img/',
                    'rating_start_path' => _MODULE_DIR_ .'marketplace/libs/rateit/lib/img',
                    'contact_seller_ajax_link' => $this->context->link->getModuleLink('marketplace', 'contactsellerprocess'),
                );
                
                Media::addJsDef($jsVars);
            }
        }

        $customer = $this->context->customer;
        $shippingCost = 0;

        if ($customer->isLogged(false) && Validate::isLoadedObject($customer)) {
            $mpupsshippingModule = Module::getInstanceByName('mpupsshipping');

            if (Module::isInstalled('mpupsshipping') && Module::isEnabled('mpupsshipping') 
                    && Validate::isLoadedObject($mpupsshippingModule)) {
                // check for client's id_address_delivery on cart object
                $id_address_delivery = $this->getCustomerShipToAddress($customer->id);

                if ($id_address_delivery) {
                    if (Validate::isLoadedObject($this->product)) {

                        $groudCarrier = $mpupsshippingModule->getUpsCarriersByName('UPS Ground');
                        $mpupsshippingModule->id_carrier = $groudCarrier['carrier_id'];

                        // Add cart if no cart found
                        if (!Validate::isLoadedObject($this->context->cart)) {
                            if (Context::getContext()->cookie->id_guest) {
                                $guest = new Guest(Context::getContext()->cookie->id_guest);
                                $this->context->cart->mobile_theme = $guest->mobile_theme;
                            }

                            $this->context->cart->add();

                            if ($this->context->cart->id) {
                                $this->context->cookie->id_cart = (int)$this->context->cart->id;
                            }

                            $this->context->cart->customer = $customer;
                            $this->context->cart->id_address_delivery = $id_address_delivery;
                            $this->context->cart->id_address_invoice = $id_address_delivery;
                        }

                        $cart = $this->context->cart;

                        if (!$this->context->cart->id_address_delivery) {
                                $this->context->cart->id_address_delivery = $id_address_delivery;
                            $this->context->cart->update();
                        }

                        if (!$this->context->cart->secure_key) {
                            $this->context->cart->secure_key = $customer->secure_key;
                            $this->context->cart->update();
                        }

                        $doesCartHasAlreadyProduct = false;

                        if (!count($cart->getProducts())) {
                            $cart->updateQty(1, $this->product->id, null, false, 'up');
                        } else {
                            // true only if we iterate through products and found it in
                            if ($cart->containsProduct((int)$this->product->id)) {
                                $doesCartHasAlreadyProduct = true;
                            }

                            // foreach ($cart->getProducts() as $_product) {
                            //     if ((int)$_product['id_product'] === (int)$this->product->id) {
                            //         $doesCartHasAlreadyProduct = true;
                            //         break;
                            //     }
                            // }

                            if (!$doesCartHasAlreadyProduct) {
                                $cart->updateQty(1, $this->product->id, null, false, 'up');
                            }
                        }

                        $shippingCost = $mpupsshippingModule->getOrderShippingCostData($cart, 0);

                        // we just unamount the product if it was there
                        if (!$doesCartHasAlreadyProduct) {
                            $cart->updateQty(1, $this->product->id, null, false, 'down');
                        }
                    }
                }
            }
        }

		$this->context->smarty->assign(array(
			'prev_product'=> $adjacent_products['previous'],
			'next_product'=> $adjacent_products['next'],
            'ListedDays'=> Product::isOldListing($this->product),			
            'countries_list' => $list,
            'token' => Tools::getToken(false),
            'can_contact_seller_btn' => ($seller['id_seller'] !== $getSellerByProduct['id_seller']),
            'pp_shipping_cost' => $shippingCost,
            'make_offer_url' => $this->context->link->getModuleLink('marketplace', 'make_offer'),
            'offer_count' => (int)Product::getOfferCount($this->product->id, date('Y-m-d')),
            'product_has_offer_by_customer' => (int)Product::getOfferCount($this->product->id, date('Y-m-d'), $customer->id) || (int)$this->product->quantity === 0,
//              'accept_offer' => Product::acceptOffer(),            
		));
	}

    public function setMedia()
    {
        parent::setMedia();

        $this->addJS(_MODULE_DIR_ .'marketplace/libs/rateit/lib/jquery.raty.min.js');
        $this->addJS(_MODULE_DIR_ .'marketplace/views/js/shopstore.js');

        $this->addCSS(_THEME_DIR_ .'css/bootstrap_lib/bootstrap.css');

        $customerFeedID = false;

        $id_category = $this->product->id_category_default;
        $id_manufacturer = $this->product->id_manufacturer;

        if ($this->context->customer->id) {
            $customerFeed = PpFeedCollector::hasFeed($this->context->customer->id, PpFeedCollector::FEED_TYPE_PRODUCT_PAGE);

            if ($customerFeed) {
                $termID = $id_category .'##'. $id_manufacturer;
                $isSameCatManufs = PpFeedCollector::getFeedByCustomerByType($this->context->customer->id, PpFeedCollector::FEED_TYPE_PRODUCT_PAGE, true);

                foreach ($isSameCatManufs as $isSameCatManuf) {
                    if ($isSameCatManuf && $isSameCatManuf['terms'] === $termID) {
                        $customerFeedID = $isSameCatManuf['id_pp_feed_collecter'];
                        break;
                    }
                }
            }
        }
  
        Media::addJsDef(array(
            'moduledir' => _MODULE_DIR_,
            'hasFeedId' => $customerFeedID,
            'id_cat_default' => $this->product->id_category_default,
            'cat_name' => $this->product->category,
            'id_manufacturer' => $this->product->id_manufacturer,
            'manufacturer_name' => addslashes($this->product->manufacturer_name),
            'pp_feeder_url' => $this->context->link->getModuleLink('marketplace', 'pp_feeder'),
        ));
    }

    private function getCustomerShipToAddress($id_customer)
    {
        if (!$id_customer) {
            return false;
        }
        
        $cache_id = 'ProductController::getCustomerShipToAddress_'.(int)$id_customer;

        if (!Cache::isStored($cache_id)) {
            $result = (int)Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
                SELECT `id_address`
                FROM `'._DB_PREFIX_.'address`
                WHERE `id_customer` = '.(int)$id_customer.' AND `deleted` = 0 AND `active` = 1 AND `as_ship_to` = 1'
            );
            Cache::store($cache_id, $result);
            return $result;
        }
        return Cache::retrieve($cache_id);
    }
}