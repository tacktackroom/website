<?php

class State extends StateCore
{
    /**
    * Get a state iso code with its id
    *
    * @param int $id State ID
    * @return string state iso code
    */
    public static function getIsoById($id_state, $id_country = null)
    {
        return Db::getInstance()->getValue('
            SELECT `iso_code`
            FROM `'._DB_PREFIX_.'state`
            WHERE `id_state` = \''.(int)$id_state.'\'
            '.($id_country ? 'AND `id_country` = '.(int)$id_country : ''));
    }
}