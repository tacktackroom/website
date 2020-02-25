<?php

class Product extends ProductCore
{
	public static function getProductsImgs($product_id)
    {
    	$sql = '
    		(SELECT * from `'._DB_PREFIX_.'image` 
    		WHERE id_product="'.$product_id.'" and cover=1)
    		 union
    				 (SELECT * from `'._DB_PREFIX_.'image` 
    		WHERE id_product="'.$product_id.'" and cover=0 	ORDER BY `position` LIMIT 0,1 )
    	
    		LIMIT 0,2
    		';
            $result = Db::getInstance()->ExecuteS($sql);
    	return $result;
    }
    public static function getImagesByID($id_product, $limit = 2){
        $id_image = Db::getInstance()->ExecuteS('SELECT `id_image` FROM `'._DB_PREFIX_.'image` WHERE `id_product` = '.(int)($id_product) . ' ORDER BY position ASC LIMIT 1, ' . $limit);
        $toReturn = array();
        if(!$id_image)
            return;
        else
            foreach($id_image as $image)
                $toReturn[] = $id_product . '-' . $image['id_image'];
        return $toReturn;
    }
    public function getAdjacentProducts()
    {
        $position  = Db::getInstance()->getValue('SELECT position FROM '._DB_PREFIX_.'category_product WHERE id_product = ' . (int)$this->id . ' AND id_category = ' . (int)$this->id_category_default);
        $previous = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
        SELECT cp.id_product, pl.link_rewrite, cp.position, pl.name,im.id_image image
        FROM '._DB_PREFIX_.'category_product cp
        LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (cp.id_product = pl.id_product)
        LEFT JOIN '._DB_PREFIX_.'product p ON (cp.id_product = p.id_product)
        LEFT JOIN `'._DB_PREFIX_.'image` im ON  (p.`id_product` = im.`id_product`AND `cover` = 1)
        WHERE p.id_category_default = '.(int)$this->id_category_default.' AND (cp.position < '. (int)($position ) .' ) AND cp.id_category = ' . (int)$this->id_category_default .' AND pl.id_lang = '.(Context::getContext()->language->id).' AND p.active = 1
        ORDER BY cp.position DESC');
        $next = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
        SELECT cp.id_product, pl.link_rewrite, cp.position, pl.name,im.id_image image
        FROM '._DB_PREFIX_.'category_product cp
        LEFT JOIN '._DB_PREFIX_.'product_lang pl ON (cp.id_product = pl.id_product)
        LEFT JOIN '._DB_PREFIX_.'product p ON (cp.id_product = p.id_product)
        LEFT JOIN `'._DB_PREFIX_.'image` im ON  (p.`id_product` = im.`id_product`AND `cover` = 1)
        WHERE p.id_category_default = '.(int)$this->id_category_default.' AND (cp.position > '. (int)($position ) .' ) AND cp.id_category = ' . (int)$this->id_category_default .' AND pl.id_lang = '.(Context::getContext()->language->id).' AND p.active = 1
        ORDER BY cp.position ASC');
        return array('previous' => $previous, 'next' => $next);
    }
	
    /*
    * module: amazzingfilter
    * date: 2018-06-14 12:58:24
    * version: 2.8.1
    */
    public static function getPricesDrop(
        $id_lang,
        $page_number = 0,
        $nb_products = 10,
        $count = false,
        $order_by = null,
        $order_way = null,
        $beginning = false,
        $ending = false,
        Context $context = null
    ) {
        if (!$context) {
            $context = Context::getContext();
        }
        if (isset($context->filtered_result) && $context->filtered_result['controller'] == 'pricesdrop') {
            if ($count) {
                return $context->filtered_result['total'];
            }
            return $context->filtered_result['products'];
        } else {
            return parent::getPricesDrop(
                $id_lang,
                $page_number,
                $nb_products,
                $count,
                $order_by,
                $order_way,
                $beginning,
                $ending,
                $context
            );
        }
    }
    /*
    * module: amazzingfilter
    * date: 2018-06-14 12:58:24
    * version: 2.8.1
    */
/*
 public static function getNewProducts(
        $id_lang,
        $page_number = 0,
        $nb_products = 10,
        $count = false,
        $order_by = null,
        $order_way = null,
        Context $context = null
    ) {
        if (!$context) {
            $context = Context::getContext();
        }

        if (isset($context->filtered_result) && $context->filtered_result['controller'] == 'newproducts') {
            if ($count) {
                return $context->filtered_result['total'];
            }
            return $context->filtered_result['products'];
        } else {
            return parent::getNewProducts(
                $id_lang,
                $page_number,
                $nb_products,
                $count,
                $order_by,
                $order_way,
                $context
            );
        }
    }
*/

    /*
    * module: amazzingfilter
    * date: 2018-06-14 12:58:24
    * version: 2.8.1
    */
    public static function getProductsProperties($id_lang, $query_result)
    {
        if (!empty(Context::getContext()->properties_not_required)) {
            return $query_result;
        } else {
            return parent::getProductsProperties($id_lang, $query_result);
        }
    }
    /*
    * module: pagecache
    * date: 2019-02-06 16:19:29
    * version: 4.44
    */
    public function checkAccess($id_customer)
    {
        $context = Context::getContext();
        if (!$id_customer
            && isset($context->cookie)
            && isset($context->cookie->pc_groups)) {
            $groups = explode(',', $context->cookie->pc_groups);
            if ($groups !== false && count($groups) > 0) {
                return (bool)Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('
                    SELECT ctg.`id_group`
                    FROM `'._DB_PREFIX_.'category_product` cp
                    INNER JOIN `'._DB_PREFIX_.'category_group` ctg ON (ctg.`id_category` = cp.`id_category`)
                    WHERE cp.`id_product` = '.(int)$this->id.' AND ctg.`id_group` IN(' . implode(',', $groups) . ')');
            }
        }
        return parent::checkAccess($id_customer);
    }
    /*
    * module: pagecache
    * date: 2019-02-06 16:19:29
    * version: 4.44
    */
    public function getFieldsToUpdate()
    {
        return $this->update_fields;
    }

    public static function defineProductImage($row, $id_lang)
    {
        if (isset($row['id_image']) && $row['id_image']) {
            return $row['id_product'].'-'.$row['id_image'];
        }

        if (Image::hasImages($id_lang, $row['id_product'])) {
            if ($cover = Image::getCover($row['id_product'])) {
               return $row['id_product'].'-'.$cover['id_image'];
            }
        }

        return Language::getIsoById((int)$id_lang).'-default';
    }

    public static function insertOffer($id_cart, $id_product, $id_customer, $id_cart_rule, $offered_price): void
    {
        Db::getInstance()->insert('product_offer', [
            'id_product'  => $id_product,
            'id_cart'     => $id_cart,
            'id_customer' => $id_customer,
            'id_cart_rule'=> $id_cart_rule,
            'amount'      => $offered_price,
            'date_add'    => date('Y-m-d h:i:s'),
        ]);
    }

    public static function getOffer($id_product, $id_customer = null, $date, $id_cart = null)
    {
        return Db::getInstance()->getRow('
            SELECT * FROM `product_offer` 
            WHERE `id_product`='.(int)$id_product
            .((int)$id_customer ? ' AND `id_customer`='.(int)$id_customer : '')
            .((int)$id_cart ? ' AND `id_cart`='.(int)$id_cart : '')
            .' AND DATE(`date_add`) = "'. pSQL($date) .'"'
        );
    }

    public static function getOfferCount($id_product, $date, $id_customer = null, $id_cart = null)
    {
        return Db::getInstance()->getValue('
            SELECT COUNT(*) FROM `product_offer` 
            WHERE `id_product`='.(int)$id_product
            .((int)$id_customer ? ' AND `id_customer`='.(int)$id_customer : '')
            .((int)$id_cart ? ' AND `id_cart`='.(int)$id_cart : '')
            .' AND DATE(`date_add`) = "'. pSQL($date) .'"'
        );
    }

    public static function deleteOffer(int $id_product_offer)
    {
        return Db::getInstance()->delete('product_offer', '`id_product_offer`='.(int)$id_product_offer);
    }
	public static function GetCarrierwithid($id_product)
	{
		$freeshipping=false;
		$carrier= Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT c.id_reference
			FROM `'._DB_PREFIX_.'product_carrier` pc
			INNER JOIN `'._DB_PREFIX_.'carrier` c
				ON (c.`id_reference` = pc.`id_carrier_reference` AND c.`deleted` = 0)
			WHERE pc.`id_product` = '.(int)$id_product);
			

			foreach ($carrier as $key => $value){
			    if($value['id_reference']=='205')
			    {
				    $freeshipping=true;
			    }
			}	
 		return $freeshipping;

	}
		    public static function isOldListing($product)
		    {
			     $context = Context::getContext();		 

				 $today = new Datetime('now');	
				 $today = $today->format('Y\-m\-d\ h:i:s');
				 $ListingDate = $product->date_add;
 
				$diff = abs(strtotime($today) - strtotime($ListingDate));
				$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
				 return $days;		 
		}
		
		
    public function accept_offer(): bool
    {
        return (bool)Db::getInstance()->getValue('SELECT `accept_offer` FROM `'._DB_PREFIX_.'product` WHERE `id_product` = '. (int)$this->id .' AND `accept_offer` is NULL');
    }
    
    public function acceptOffer(): bool
    {
        return (bool)$this->accept_offer();
    }  
    public function getAdditionalShippingCost($id_product)
    {
	        $cost = Db::getInstance()->ExecuteS('
            SELECT `additional_shipping_cost` FROM `product` 
			where `id_product` = '.(int)$id_product);
			
			console_log('
            SELECT `additional_shipping_cost` FROM `product` 
			where `id_product` = '.(int)$id_product);
			
			return (int)$cost[0]['additional_shipping_cost'];
	    
    } 	      			
		
}
