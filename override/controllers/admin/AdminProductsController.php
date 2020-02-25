<?php

class AdminProductsController extends AdminProductsControllerCore
{
    /*
    * module: featuresincategory
    * date: 2018-07-11 06:46:34
    * version: 1.0.1
    */
    public function initFormFeatures($obj)
    {
        if (!$this->default_form_language) {
            $this->getLanguages();
        }
        $data = $this->createTemplate($this->tpl_form);
        $data->assign('default_form_language', $this->default_form_language);
        $data->assign('languages', $this->_languages);
        if (!Feature::isFeatureActive()) {
            $this->displayWarning(
                $this->l('This feature has been disabled. ').
                ' <a href="index.php?tab=AdminPerformance&token='.Tools::getAdminTokenLite('AdminPerformance')
                .'#featuresDetachables">'.$this->l('Performances').'</a>'
            );
        } else {
            if ($obj->id) {
                if ($this->product_exists_in_shop) {
                    $features = Feature::getFeatures(
                        $this->context->language->id,
                        (Shop::isFeatureActive() && Shop::getContext() == Shop::CONTEXT_SHOP)
                    );
                    $categories = Product::getProductCategoriesFull($obj->id, $this->default_form_language);
                    require_once(_PS_MODULE_DIR_.'featuresincategory/featuresincategory.php');
                    $fcat = new FeaturesInCategory();
                    $all_cats = $fcat->getFeatureCategories(0);
                    $custom_features = array();
                    if (!empty($categories)) {
                        foreach ($categories as $c) {
                            $id_category = $c['id_category'];
                        
                            if (!empty($all_cats[$id_category])) {
                                foreach (array_keys($all_cats[$id_category]) as $cat) {
                                    if (!in_array((int)$cat, $custom_features)) {
                                        array_push($custom_features, (int)$cat);
                                    }
                                }
                            }
                        }
                    }
                    if (count($custom_features) > 0 || (int)Configuration::get('CATEGORY_FEATURES_SHOWALL') === 0) {
                        $new_features = array();
                        foreach ($features as $feature) {
                            if (in_array((int)$feature['id_feature'], $custom_features)) {
                                array_push($new_features, $feature);
                            }
                        }
                        $features = $new_features;
                    }
                    foreach ($features as $k => $tab_features) {
                        $features[$k]['current_item'] = false;
                        $features[$k]['val'] = array();
                        $custom = true;
                        
                        foreach ($obj->getFeatures() as $tab_products) {
                            if ($tab_products['id_feature'] == $tab_features['id_feature']) {
                                $features[$k]['current_item'] = $tab_products['id_feature_value'];
                            }
                        }
                        $features[$k]['featureValues'] = FeatureValue::getFeatureValuesWithLang(
                            $this->context->language->id,
                            (int)$tab_features['id_feature']
                        );
                        
                        if (count($features[$k]['featureValues'])) {
                            foreach ($features[$k]['featureValues'] as $value) {
                                if ($features[$k]['current_item'] == $value['id_feature_value']) {
                                    $custom = false;
                                }
                            }
                        }
                        if ($custom) {
                            $feature_values_lang = FeatureValue::getFeatureValueLang($features[$k]['current_item']);
                            foreach ($feature_values_lang as $feature_value) {
                                $features[$k]['val'][$feature_value['id_lang']] = $feature_value;
                            }
                        }
                    }
                    $data->assign('available_features', $features);
                    $data->assign('product', $obj);
                    $data->assign('link', $this->context->link);
                    $data->assign('default_form_language', $this->default_form_language);
                } else {
                    $this->displayWarning($this->l('You must save the product in this shop before adding features.'));
                }
            } else {
                $this->displayWarning($this->l('You must save this product before adding features.'));
            }
        }
        $this->tpl_form_vars['custom_form'] = $data->fetch();
    }
    /*
    * module: amazzingfilter
    * date: 2018-09-17 22:09:22
    * version: 2.8.1
    */
    public function processAdd()
    {
        parent::processAdd();
        Hook::exec('actionIndexProduct', array('product' => $this->object->id));
    }
    /*
    * module: amazzingfilter
    * date: 2018-09-17 22:09:22
    * version: 2.8.1
    */
    public function processUpdate()
    {
        parent::processUpdate();
        Hook::exec('actionIndexProduct', array('product' => $this->object->id));
    }
}
