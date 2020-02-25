<?php
  class Configuration extends ConfigurationCore
  {
    /*
    * module: exportproducts
    * date: 2019-08-15 10:46:03
    * version: 4.0.8
    */
    public static function getGlobalValue($key, $id_lang = null)
    {
      self::loadConfiguration();
      return parent::getGlobalValue($key, $id_lang = null);
    }
  }