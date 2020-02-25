<?php
/**
* 2014-2016 Crezzur
*
* LICENSE
* You are not allowed to share this code and or files. All rights reserved Crezzur
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade our products to newer
* versions in the future. If you wish to customize our products for your
* needs please contact us for more information.
*
*  @author    Crezzur <info@crezzur.com>
*  @copyright 2014-2016 Jaimy Aerts
*  @license   in All rights reserved
*  International Registered Trademark & Property of Crezzur
*/
class AdminFeaturesController extends AdminFeaturesControllerCore
{
    /*
    * module: featuresincategory
    * date: 2018-07-11 06:46:34
    * version: 1.0.1
    */
    public function initProcess()
    {
        if (Tools::isSubmit('activeOnCats')) {
            require_once(_PS_MODULE_DIR_.'featuresincategory/featuresincategory.php');
            $fcat = new FeaturesInCategory();
            $fcat->setFeatureCategories(Tools::getValue('activeOnCats'), Tools::getValue('id_feature'));
        }
        if (Tools::getValue('id_feature_value') || Tools::isSubmit('deletefeature_value')
            || Tools::isSubmit('submitAddfeature_value') || Tools::isSubmit('addfeature_value')
            || Tools::isSubmit('updatefeature_value') || Tools::isSubmit('submitBulkdeletefeature_value')) {
            $this->setTypeValue();
        }
        if (Tools::getIsset('viewfeature')) {
            $this->list_id = 'feature_value';
            if (Tools::getIsset(Tools::getValue('submitReset'.$this->list_id))) {
                $this->processResetFilters();
            }
        } else {
            $this->list_id = 'feature';
        }
        parent::initProcess();
    }
}
