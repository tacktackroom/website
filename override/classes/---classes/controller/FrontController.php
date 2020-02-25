<?php
/**
* 2007-2017 PrestaShop OVERRIDE
*/

class FrontController extends FrontControllerCore
{
	public function setMedia()
	{


		// if website is accessed by mobile device
		// @see FrontControllerCore::setMobileMedia()
		if ($this->useMobileTheme())
		{
			$this->setMobileMedia();
			return true;
		}

		$this->addCSS(_THEME_CSS_DIR_.'grid_prestashop.css', 'all');  // retro compat themes 1.5
		$this->addCSS(_THEME_CSS_DIR_.'global.css', 'all');
		$this->addjquery();
		$this->addjqueryPlugin('easing');
		$this->addJS(_PS_JS_DIR_.'tools.js');
		$this->addJS(_THEME_JS_DIR_.'global.js');
		$this->addJS(_THEME_JS_DIR_.'masterscript.js');

		// footer map

        if (Module::isEnabled('roymap')) {
			$default_country = new Country((int)Configuration::get('PS_COUNTRY_DEFAULT'));

			// if module map fix enabled
	        if (Module::isEnabled('mpgooglemapsfix')) { 
				$googleMapsJs = 'http'.((Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE')) ? 's' : '').'://maps.google.com/maps/api/js?region='.substr($default_country->iso_code, 0, 2);
	            if (Configuration::get('MPGOOGLEMAPSFIX_API_KEY')) {
	                $googleMapsJs .= '&key='.rawurlencode(Configuration::get('MPGOOGLEMAPSFIX_API_KEY'));
	            }
	            $this->addJS($googleMapsJs);
	        } else {
				$this->addJS('http'.((Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE')) ? 's' : '').'://maps.google.com/maps/api/js?region='.substr($default_country->iso_code, 0, 2));
	        }

			$this->addJS(_THEME_JS_DIR_.'stores.js');			
			$this->context->smarty->assign('hasStoreIcon', file_exists(_PS_IMG_DIR_.Configuration::get('PS_STORES_ICON')));
			$this->context->smarty->assign(array(
				'mediumSize' => Image::getSize(ImageType::getFormatedName('medium')),
				'defaultLat' => (float)Configuration::get('PS_STORES_CENTER_LAT'),
				'defaultLong' => (float)Configuration::get('PS_STORES_CENTER_LONG'),
				'searchUrl' => $this->context->link->getPageLink('stores'),
				'logo_store' => Configuration::get('PS_STORES_ICON')
			));
        }

        // For account menu
        $this->context->smarty->assign(array(
            'has_customer_an_address' => empty($has_address),
            'voucherAllowed' => (int)CartRule::isFeatureActive(),
            'returnAllowed' => (int)Configuration::get('PS_ORDER_RETURN')
        ));
		
		// Automatically add js files from js/autoload directory in the template
		if (@filemtime($this->getThemeDir().'js/autoload/'))
			foreach (scandir($this->getThemeDir().'js/autoload/', 0) as $file)
				if (preg_match('/^[^.].*\.js$/', $file))
					$this->addJS($this->getThemeDir().'js/autoload/'.$file);
		// Automatically add css files from css/autoload directory in the template
		if (@filemtime($this->getThemeDir().'css/autoload/'))
			foreach (scandir($this->getThemeDir().'css/autoload', 0) as $file)
				if (preg_match('/^[^.].*\.css$/', $file))
					$this->addCSS($this->getThemeDir().'css/autoload/'.$file);

		if (Tools::isSubmit('live_edit') && Tools::getValue('ad') && Tools::getAdminToken('AdminModulesPositions'.(int)Tab::getIdFromClassName('AdminModulesPositions').(int)Tools::getValue('id_employee')))
		{
			$this->addJqueryUI('ui.sortable');
			$this->addjqueryPlugin('fancybox');
			$this->addJS(_PS_JS_DIR_.'hookLiveEdit.js');
		}

		if (Configuration::get('PS_QUICK_VIEW'))
			$this->addjqueryPlugin('fancybox');

		if (Configuration::get('PS_COMPARATOR_MAX_ITEM') > 0)
			$this->addJS(_THEME_JS_DIR_.'products-comparison.js');

		// Execute Hook FrontController SetMedia
		Hook::exec('actionFrontControllerSetMedia', array());
	}

}
