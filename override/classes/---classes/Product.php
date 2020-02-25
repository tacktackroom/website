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

        // get products that are before and after

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
	
}

