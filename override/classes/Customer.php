<?php
class Customer extends CustomerCore 
{
    
    public function getAddresses($id_lang, $cached = true)
    {
        $share_order = (bool)Context::getContext()->shop->getGroup()->share_order;
        if ($cached) {
            $cache_id = 'Customer::getAddresses'.(int)$this->id.'-'.(int)$id_lang.'-'.$share_order;
            if (!Cache::isStored($cache_id)) {
                $sql = 'SELECT DISTINCT a.*, cl.`name` AS country, s.name AS state, s.iso_code AS state_iso
                        FROM `'._DB_PREFIX_.'address` a
                        LEFT JOIN `'._DB_PREFIX_.'country` c ON (a.`id_country` = c.`id_country`)
                        LEFT JOIN `'._DB_PREFIX_.'country_lang` cl ON (c.`id_country` = cl.`id_country`)
                        LEFT JOIN `'._DB_PREFIX_.'state` s ON (s.`id_state` = a.`id_state`)
                        '.($share_order ? '' : Shop::addSqlAssociation('country', 'c')).'
                        WHERE `id_lang` = '.(int)$id_lang.' AND `id_customer` = '.(int)$this->id.' AND a.`deleted` = 0';
                $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
                Cache::store($cache_id, $result);
                return $result;
            }
            return Cache::retrieve($cache_id);
        }
        $sql = 'SELECT DISTINCT a.*, cl.`name` AS country, s.name AS state, s.iso_code AS state_iso
            FROM `'._DB_PREFIX_.'address` a
            LEFT JOIN `'._DB_PREFIX_.'country` c ON (a.`id_country` = c.`id_country`)
            LEFT JOIN `'._DB_PREFIX_.'country_lang` cl ON (c.`id_country` = cl.`id_country`)
            LEFT JOIN `'._DB_PREFIX_.'state` s ON (s.`id_state` = a.`id_state`)
            '.($share_order ? '' : Shop::addSqlAssociation('country', 'c')).'
            WHERE `id_lang` = '.(int)$id_lang.' AND `id_customer` = '.(int)$this->id.' AND a.`deleted` = 0';
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
	public function getFirstName($id_customer)
    {
	         $sql = 'SELECT `firstname`
				FROM `'._DB_PREFIX_.'customer`
				WHERE id_customer = '.$id_customer.'';
				return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);		
	    
	}
    
}