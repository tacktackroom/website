<?php
/*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class AddressController extends AddressControllerCore
{
    public function setMedia()
    {
        parent::setMedia();

        $this->addJS(array(
            _PS_JS_DIR_.'jquery.SimpleMask.js',
            _MODULE_DIR_ .'marketplace/views/js/mp_form_validation.js',
        ));
    }

    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        if ($id_country = (int)Tools::getValue('id_country')) {
            $this->id_country = $id_country;
        }

        $this->assignCountries();
        $this->assignVatNumber();
        $this->assignAddressFormat();

        // Assign common vars
        $this->context->smarty->assign(array(
            'address_validation' => Address::$definition['fields'],
            'one_phone_at_least' => (int)Configuration::get('PS_ONE_PHONE_AT_LEAST'),
            'onr_phone_at_least' => (int)Configuration::get('PS_ONE_PHONE_AT_LEAST'), //retro compat
            'ajaxurl' => _MODULE_DIR_,
            'errors' => $this->errors,
            'token' => Tools::getToken(false),
            'select_address' => (int)Tools::getValue('select_address'),
            'address' => $this->_address,
            'id_address' => (Validate::isLoadedObject($this->_address)) ? $this->_address->id : 0,
            'seller_additional_fields' => $this->isSellerType(true),
            'seller_data' => WkMpSellerProduct::getSellerByPsIdProduct(null, $this->context->customer->id),
            'has_birthday' => (bool)($this->context->customer->birthday != '0000-00-00'),
            'years' => Tools::dateYears(),
            'sl_year' => Tools::getValue('years', '-'),
            'months' => Tools::dateMonths(),
            'sl_month' => Tools::getValue('months', '-'),
            'days' => Tools::dateDays(),
            'sl_day' => Tools::getValue('days', '-'),
        ));

        if ($back = Tools::getValue('back')) {
            $this->context->smarty->assign('back', Tools::safeOutput($back));
        }
        if ($mod = Tools::getValue('mod')) {
            $this->context->smarty->assign('mod', Tools::safeOutput($mod));
        }
        if (isset($this->context->cookie->account_created)) {
            $this->context->smarty->assign('account_created', 1);
            unset($this->context->cookie->account_created);
        }

        $this->setTemplate(_PS_THEME_DIR_.'address.tpl');
    }

    /**
     * Assign template vars related to countries display
     */
    protected function assignCountries()
    {
        $this->id_country = (int)Tools::getCountry($this->_address);

        if ($id_country = (int)Tools::getValue('id_country')) {
            $this->id_country = $id_country;
        }

        // Generate countries list
        if (Configuration::get('PS_RESTRICT_DELIVERED_COUNTRIES')) {
            $countries = Carrier::getDeliveredCountries($this->context->language->id, true, true);
        } else {
            $countries = Country::getCountries($this->context->language->id, true);
        }

        // @todo use helper
        $list = '';
        foreach ($countries as $country) {
            $selected = ((int)$country['id_country'] === $this->id_country) ? ' selected="selected"' : '';
            $list .= '<option value="'.(int)$country['id_country'].'"'.$selected.'>'.htmlentities($country['name'], ENT_COMPAT, 'UTF-8').'</option>';
        }

        // Assign vars
        $this->context->smarty->assign(array(
            'countries_list' => $list,
            'countries' => $countries,
            'sl_country' => (int)$this->id_country,
        ));
    }

    /**
     * Process changes on an address
     */
    protected function processSubmitAddress()
    {
        $address = new Address();
        $this->errors = $address->validateController();
        $address->id_customer = ((int)Tools::getValue('id_customer') ?: (int)$this->context->customer->id);

        // Check page token
        if ($this->context->customer->isLogged() && !$this->isTokenValid()) {
            $this->errors[] = Tools::displayError('Invalid token.');
        }

        // Check phone
        if ((Configuration::get('PS_ONE_PHONE_AT_LEAST') || $this->isSellerType(true)) && !Tools::getValue('phone') && !Tools::getValue('phone_mobile')) {
            $this->errors[] = Tools::displayError('You must register at least one phone number.');
        }

        if ($this->isSellerType(true)) {
            if ($this->context->customer->birthday == '0000-00-00' || !$this->context->customer->birthday) {
                if (!Tools::getValue('months') || !Tools::getValue('years') || !Tools::getValue('days')) {
                    $this->errors[] = Tools::displayError('You must enter your birthday.');
                } else {
                    $dob = (int)Tools::getValue('years').'-'.(int)Tools::getValue('months').'-'.(int)Tools::getValue('days');

                    if (WkMpStripe::checkAccountHolderAge($dob)) {
                        $this->errors[] = Tools::displayError('You must be at least 13 years old.');
                    } else {
                        $this->context->customer->birthday = $dob;
                        $this->context->customer->update();
                    }
                }
            }

            $getSeller = WkMpSeller::getSellerByCustomerId($this->context->customer->id);
            $seller = new WkMpSeller($getSeller['id_seller']);

            if (empty($seller->country_residence) && !($country_residence = (int)Tools::getValue('country_residence'))) {
                $_errors[] = Tools::displayError('You must provide your country of residence.');
            }

            if (empty($seller->country_residence) && $country_residence) {   
                $seller->country_residence = $country_residence;
                $seller->update();
            }

            $entity_type = Tools::getValue('entity_type');
            if ($entity_type) {
                $seller->entity_type = $entity_type;
                $seller->update();
            }
        }

        if ($address->id_country) {
            // Check country
            if (!($country = new Country($address->id_country)) || !Validate::isLoadedObject($country)) {
                throw new PrestaShopException('Country cannot be loaded with address->id_country');
            }

            if ((int)$country->contains_states && !(int)$address->id_state) {
                $this->errors[] = Tools::displayError('This country requires you to chose a State.');
            }

            if (!$country->active) {
                $this->errors[] = Tools::displayError('This country is not active.');
            }

            $postcode = Tools::getValue('postcode');
            /* Check zip code format */
            if ($country->zip_code_format && !$country->checkZipCode($postcode)) {
                $this->errors[] = sprintf(Tools::displayError('The Zip/Postal code you\'ve entered is invalid. It must follow this format: %s'), str_replace('C', $country->iso_code, str_replace('N', '0', str_replace('L', 'A', $country->zip_code_format))));
            } elseif (empty($postcode) && $country->need_zip_code) {
                $this->errors[] = Tools::displayError('A Zip/Postal code is required.');
            } elseif ($postcode && !Validate::isPostCode($postcode)) {
                $this->errors[] = Tools::displayError('The Zip/Postal code is invalid.');
            }

            // Check country DNI
            if ($country->isNeedDni() && (!Tools::getValue('dni') || !Validate::isDniLite(Tools::getValue('dni')))) {
                $this->errors[] = Tools::displayError('The identification number is incorrect or has already been used.');
            } elseif (!$country->isNeedDni()) {
                $address->dni = null;
            }
        }
        // Check if the alias exists
        if (!$this->context->customer->is_guest && !empty($_POST['alias']) && (int)$this->context->customer->id > 0) {
            $id_address = Tools::getValue('id_address');
            if (Configuration::get('PS_ORDER_PROCESS_TYPE') && (int)Tools::getValue('opc_id_address_'.Tools::getValue('type')) > 0) {
                $id_address = Tools::getValue('opc_id_address_'.Tools::getValue('type'));
            }

            if (Address::aliasExist(Tools::getValue('alias'), (int)$id_address, (int)$this->context->customer->id)) {
                $this->errors[] = sprintf(Tools::displayError('The alias "%s" has already been used. Please select another one.'), Tools::safeOutput(Tools::getValue('alias')));
            }
        }

        $phone = Tools::getValue('phone_mobile');

        // if (!empty($phone)) {
            $phone = str_replace(array('(',')','-', ' '), '', $phone);

            if (strlen($phone) != 10 || !Validate::isPhoneNumber($phone)) {
                $this->errors[] = Tools::displayError('This phone number is not valid');
            }
        // }

        // Check the requires fields which are settings in the BO
        $this->errors = array_merge($this->errors, $address->validateFieldsRequiredDatabase());

        // Don't continue this process if we have errors !
        if ($this->errors && !$this->ajax) {
            return;
        }

        // If we edit this address, delete old address and create a new one
        if (Validate::isLoadedObject($this->_address)) {
            if (Validate::isLoadedObject($country) && !$country->contains_states) {
                $address->id_state = 0;
            }
            $address_old = $this->_address;
            if (Customer::customerHasAddress($this->context->customer->id, (int)$address_old->id)) {
                if ($address_old->isUsed()) {
                    $address_old->delete();
                } else {
                    $address->id = (int)$address_old->id;
                    $address->date_add = $address_old->date_add;
                }
            }
        }

        if ($this->ajax && Configuration::get('PS_ORDER_PROCESS_TYPE')) {
            $this->errors = array_unique(array_merge($this->errors, $address->validateController()));
            if (count($this->errors)) {
                $return = array(
                    'hasError' => (bool)$this->errors,
                    'errors' => $this->errors
                );
                $this->ajaxDie(Tools::jsonEncode($return));
            }
        }

        $as_ship_to = (int)Tools::getValue('as_ship_to', 0);
        $as_ship_from = (int)Tools::getValue('as_ship_from', 0);
        $as_legal = (int)Tools::getValue('as_legal', 0);

        $address->as_ship_to = $as_ship_to;
        $address->as_ship_from = $as_ship_from;
        $address->as_legal = $as_legal;

        $addresses = $this->context->customer->getAddresses((int)Configuration::get('PS_LANG_DEFAULT'));
        if (!count($addresses)) {
            $address->as_ship_to = 1;
            $address->as_ship_from = 1;
        }

        // Save address
        if ($result = $address->save()) {
            // Update id address of the current cart if necessary
            if (isset($address_old) && $address_old->isUsed()) {
                $this->context->cart->updateAddressId($address_old->id, $address->id);
            } else { // Update cart address
                $this->context->cart->autosetProductAddress();
            }

            if ((bool)Tools::getValue('select_address', false) == true || (Tools::getValue('type') == 'invoice' && Configuration::get('PS_ORDER_PROCESS_TYPE'))) {
                $this->context->cart->id_address_invoice = (int)$address->id;
            } elseif (Configuration::get('PS_ORDER_PROCESS_TYPE')) {
                $this->context->cart->id_address_invoice = (int)$this->context->cart->id_address_delivery;
            }
            $this->context->cart->update();

            $getSeller = WkMpSeller::getSellerByCustomerId($this->context->customer->id);
            $seller = new WkMpSeller($getSeller['id_seller']);
            $canUpdateSeller = false;

            if (!$seller->country_residence && (int)$address->id_country) {   
                $seller->country_residence = (int)$address->id_country;
                $canUpdateSeller = true;
            }

            if (empty($seller->city) || $address->as_ship_from) {
                $seller->city = $address->city;
                $canUpdateSeller = true;
            }

            if (empty($seller->address) || $address->as_ship_from) {
                $seller->address = $address->address1;
                $canUpdateSeller = true;
            }

            if (empty($seller->postcode) || $address->as_ship_from) {
                $seller->postcode = $address->postcode;
                $canUpdateSeller = true;
            }

            if (empty($seller->id_country) || $address->as_ship_from) {
                $seller->id_country = $address->id_country;
                $canUpdateSeller = true;
            }

            if (empty($seller->id_state) || $address->as_ship_from) {
                $seller->id_state = $address->id_state;
                $canUpdateSeller = true;
            }

            if (empty($seller->phone) || $address->as_ship_from) {
                $seller->phone = $address->phone_mobile;
                $canUpdateSeller = true;
            }

            if ($canUpdateSeller) {
                $seller->update();
            }
            
            if ($this->isSellerType(true)) {

                $addresses = $this->context->customer->getAddresses((int)Configuration::get('PS_LANG_DEFAULT'), false);

                // update ups shipping method
                if ($address->as_ship_to) {
                    // remove as "ship from" from previous address if applied                    
                    if (count($addresses) > 1) {
                        foreach ($addresses as $_addr) {
                            if ($address->id == $_addr['id_address'] || $_addr['as_ship_to'] == 0) {
                                continue;
                            }
                            $tmpAddr = new Address($_addr['id_address']);
                            $tmpAddr->as_ship_to = 0;
                            $tmpAddr->update();
                            $tmpAddr = null;
                        }
                    }
                }

                // update ups shipping method
                if ($address->as_ship_from) {
                    // remove as "ship from" from previous address if applied
                    if (count($addresses) > 1) {
                        foreach ($addresses as $_addr) {
                            if ($address->id == $_addr['id_address'] || $_addr['as_ship_from'] == 0) {
                                continue;
                            }
                            $tmpAddr = new Address($_addr['id_address']);
                            $tmpAddr->as_ship_from = 0;
                            $tmpAddr->update();
                            $tmpAddr = null;
                        }
                    }

                    if (Module::isInstalled('mpupsshipping') && Module::isEnabled('mpupsshipping')) {
                        if (!class_exists('MpUpsSellerDetails')) {
                            require_once _PS_MODULE_DIR_ .'mpupsshipping/classes/MpUpsSellerDetails.php';
                        }

                        // Add address to ups shipping method
                        if ($detailId = MpUpsSellerDetails::findSellerByIdSeller($seller->id)) {
                            MpUpsSellerDetails::updateSellerShippingInfo($detailId, $address->address1, $address->city, $address->postcode, $address->id_country, $address->id_state);
                        } else {
                            MpUpsSellerDetails::persistSellerShippingInfo($seller->id, $address->address1, $address->city, $address->postcode, $address->id_country, $address->id_state);
                        }
                    }

                    if (Module::isInstalled('mpfedexshipping') && Module::isEnabled('mpfedexshipping')) {
                        if (!class_exists('MpFedexSellerDetails')) {
                            require_once _PS_MODULE_DIR_ .'mpfedexshipping/classes/MpFedexSellerDetails.php';
                        }

                        // Add address to fedex shipping method
                        if ($detailId = MpFedexSellerDetails::findSellerByIdSeller($seller->id)) {
                            MpFedexSellerDetails::updateSellerShippingInfo($detailId, $address->address1, $address->city, $address->postcode, $address->id_country, $address->id_state);
                        } else {
                            MpFedexSellerDetails::persistSellerShippingInfo($seller->id, $address->address1, $address->city, $address->postcode, $address->id_country, $address->id_state);
                        }
                    }
                }

                // update Stripe legal address
                if ($address->as_legal) {
                    // remove as legal from previous address if applied
                    if (count($addresses) > 1) {
                        foreach ($addresses as $_addr) {
                            if ($address->id == $_addr['id_address'] || $_addr['as_legal'] == 0) {
                                continue;
                            }
                            $tmpAddr = new Address($_addr['id_address']);
                            $tmpAddr->as_legal = 0;
                            $tmpAddr->update();
                            $tmpAddr = null;
                        }
                    }

                    if (!$seller->stripe_account_id) {
                        PpLogger::log([__METHOD__.'::SellernotFound, create one', $seller]);
                        $stripeAccount = WkMpStripe::createStripeAccountForSeller($this->context->customer, $seller, $this->errors);

                        if (!empty($this->errors)) {
                            PpLogger::log([__METHOD__.'::createStripeAccountForSellerErrors', $this->errors]);
                        }

                        if ($stripeAccount) {
                            $seller->stripe_account_id = $stripeAccount->id;
                        }
                    }

                    if ($seller->stripe_account_id) {
                        $entityData = array(
                            'address.line1' => $address->address1,
                            'address.city' => $address->city,
                            'address.postal_code' => $address->postcode,
                            'address.country' => $address->id_country,                            
                            'address.state' => State::getNameById($address->id_state),
                            'address.postal_code' => $address->postcode,
                            'first_name' => $this->context->customer->firstname,
                            'last_name'=> $this->context->customer->lastname,
                        );

                        if ($seller->entity_type) {
                            $entityData['type'] = $seller->entity_type;
                        } else {
                            $entityData['type'] = 'individual';
                            $seller->entity_type = $entityData['type'];
                            $seller->update();
                        }

                        if ($this->context->customer->birthday != '0000-00-00'
                            && $this->context->customer->birthday) {
                            list($year, $month, $day) = explode('-', $this->context->customer->birthday);
                            $entityData['dob.day'] = $day;
                            $entityData['dob.month'] = $month;
                            $entityData['dob.year'] = $year;
                        } else {
                            $custObj = new Customer((int)$this->context->customer->id);
                            if (Validate::isLoadedObject($custObj)) {
                                if ($custObj->birthday != '0000-00-00' && $custObj->birthday) {
                                    list($year, $month, $day) = explode('-', $custObj->birthday);
                                    $entityData['dob.day'] = $day;
                                    $entityData['dob.month'] = $month;
                                    $entityData['dob.year'] = $year;
                                }
                            }
                        }

                        $entityData['force_legal_address_change'] = true;

                        WkMpStripe::updateLegalEntityObjForSeller($seller->stripe_account_id, $entityData, $this->errors);
                    }
                }
            } else {
                $seller->phone = $address->phone_mobile;
                $seller->update();
            }

            if ($this->ajax) {
                $return = array(
                    'hasError' => (bool)$this->errors,
                    'errors' => $this->errors,
                    'id_address_delivery' => (int)$this->context->cart->id_address_delivery,
                    'id_address_invoice' => (int)$this->context->cart->id_address_invoice
                );
                $this->ajaxDie(Tools::jsonEncode($return));
            }

            if (empty($this->errors)) {
                // Redirect to old page or current page
                if ($back = Tools::getValue('back')) {
                    if ($back == Tools::secureReferrer(Tools::getValue('back')) || Validate::isAbsoluteUrl($back)) {
                        Tools::redirect(html_entity_decode($back));
                    }

                    $mod = Tools::getValue('mod');
                    Tools::redirect('index.php?controller='.$back.($mod ? '&back='.$mod : ''));
                } else {
                    Tools::redirect('index.php?controller=addresses');
                }
            }
        }
        $this->errors[] = Tools::displayError('An error occurred while updating your address.');
    }

    public function displayAjaxSubmitAddress()
    {
        if ($id_customer = (int)Tools::getValue('id_customer')) {
            $this->context->customer = new Customer($id_customer);
        }
        
        // ini_set('display_errors', 'on');
        // error_reporting(E_ALL);

        $_errors = array();
        $address = new Address();
        $address->id_country = ((int)Tools::getValue('id_country') ? : (int)Tools::getCountry());
        $_errors = $address->validateController();
        $address->id_customer = (int)$this->context->customer->id;
        $isRealSeller = (bool)Tools::getValue('isRealSeller', false);

        PpLogger::log([__METHOD__.'::Comig data from address' => $_POST]);

        // Check page token
        // if ($this->context->customer->isLogged() && !$this->isTokenValid()) {
        //     $_errors[] = Tools::displayError('Invalid token.');
        // }

        // Check phone
        if (Configuration::get('PS_ONE_PHONE_AT_LEAST') && !Tools::getValue('phone') && !Tools::getValue('phone_mobile')) {
            $_errors[] = Tools::displayError('You must register at least one phone number.');
        }

        $phone = Tools::getValue('phone_mobile');
        $phone = str_replace(array('(',')','-', ' '), '', $phone);

        if (empty($phone) || strlen($phone) != 10 || !Validate::isPhoneNumber($phone)) {
            $_errors[] = Tools::displayError('This phone number is not valid');
        }

        if ($this->isSellerType(true) || $isRealSeller) {
            if ($this->context->customer->birthday == '0000-00-00' || !$this->context->customer->birthday) {
                if (!Tools::getValue('months') || !Tools::getValue('years') || !Tools::getValue('days')) {
                    $_errors[] = Tools::displayError('You must enter your birthday.');
                } else {
                    $dob = (int)Tools::getValue('years').'-'.(int)Tools::getValue('months').'-'.(int)Tools::getValue('days');

                    if (WkMpStripe::checkAccountHolderAge($dob)) {
                        $_errors[] = Tools::displayError('You must be at least 13 years old.');
                    } else {
                        $this->context->customer->birthday = $dob;
                        $this->context->customer->update();
                    }
                }
            }

            $getSeller = WkMpSeller::getSellerByCustomerId($this->context->customer->id);
            $seller = new WkMpSeller($getSeller['id_seller']);

            if (empty($seller->country_residence) && !($country_residence = (int)Tools::getValue('country_residence'))) {
                $_errors[] = Tools::displayError('You must provide your country of residence.');
            }

            if (!$seller->country_residence && $country_residence) {   
                $seller->country_residence = $country_residence;
                $seller->update();
            }
        }

        if ($address->id_country) {
            // Check country
            if (!($country = new Country($address->id_country)) || !Validate::isLoadedObject($country)) {
                throw new PrestaShopException('Country cannot be loaded with address->id_country');
            }

            if ((int)$country->contains_states && !(int)$address->id_state) {
                $_errors[] = Tools::displayError('This country requires you to chose a State.');
            }

            if (!$country->active) {
                $_errors[] = Tools::displayError('This country is not active.');
            }

            $postcode = Tools::getValue('postcode');
            /* Check zip code format */
            if ($country->zip_code_format && !$country->checkZipCode($postcode)) {
                $_errors[] = sprintf(Tools::displayError('The Zip/Postal code you\'ve entered is invalid. It must follow this format: %s'), str_replace('C', $country->iso_code, str_replace('N', '0', str_replace('L', 'A', $country->zip_code_format))));
            } elseif (empty($postcode) && $country->need_zip_code) {
                $_errors[] = Tools::displayError('A Zip/Postal code is required.');
            } elseif ($postcode && !Validate::isPostCode($postcode)) {
                $_errors[] = Tools::displayError('The Zip/Postal code is invalid.');
            }

            // Check country DNI
            if ($country->isNeedDni() && (!Tools::getValue('dni') || !Validate::isDniLite(Tools::getValue('dni')))) {
                $_errors[] = Tools::displayError('The identification number is incorrect or has already been used.');
            } elseif (!$country->isNeedDni()) {
                $address->dni = null;
            }
        }
        // Check if the alias exists
        if (!$this->context->customer->is_guest && !empty($_POST['alias']) && (int)$this->context->customer->id > 0) {
            $id_address = Tools::getValue('id_address');
            if (Configuration::get('PS_ORDER_PROCESS_TYPE') && (int)Tools::getValue('opc_id_address_'.Tools::getValue('type')) > 0) {
                $id_address = Tools::getValue('opc_id_address_'.Tools::getValue('type'));
            }

            if (Address::aliasExist(Tools::getValue('alias'), (int)$id_address, (int)$this->context->customer->id)) {
                $_errors[] = sprintf(Tools::displayError('The alias "%s" has already been used. Please select another one.'), Tools::safeOutput(Tools::getValue('alias')));
            }
        }

        // Check the requires fields which are settings in the BO
        $_errors = array_merge($_errors, $address->validateFieldsRequiredDatabase());

        // If we edit this address, delete old address and create a new one
        if (Validate::isLoadedObject($this->_address)) {
            if (Validate::isLoadedObject($country) && !$country->contains_states) {
                $address->id_state = 0;
            }
            $address_old = $this->_address;
            if (Customer::customerHasAddress($this->context->customer->id, (int)$address_old->id)) {
                if ($address_old->isUsed()) {
                    $address_old->delete();
                } else {
                    $address->id = (int)$address_old->id;
                    $address->date_add = $address_old->date_add;
                }
            }
        }

        if (count($_errors)) {
            $return = array(
                'hasError' => (bool)$_errors,
                'errors' => $_errors,
            );
            $this->ajaxDie(Tools::jsonEncode($return));
        }

        $address->as_ship_to = 1;
        $address->as_ship_from = 1;
        $address->as_legal = 1;

        // Save address
        if ($result = $address->save()) {
            // Update id address of the current cart if necessary
            if (isset($address_old) && $address_old->isUsed()) {
                $this->context->cart->updateAddressId($address_old->id, $address->id);
            } else { // Update cart address
                $this->context->cart->autosetProductAddress();
            }

            if ((bool)Tools::getValue('select_address', false) == true || (Tools::getValue('type') == 'invoice' && Configuration::get('PS_ORDER_PROCESS_TYPE'))) {
                $this->context->cart->id_address_invoice = (int)$address->id;
            } elseif (Configuration::get('PS_ORDER_PROCESS_TYPE')) {
                $this->context->cart->id_address_invoice = (int)$this->context->cart->id_address_delivery;
            }
            $this->context->cart->update();

            if (!count($_errors) && ($this->isSellerType(true) || $isRealSeller)) {
                $getSeller = WkMpSeller::getSellerByCustomerId($this->context->customer->id);
                $seller = new WkMpSeller($getSeller['id_seller']);

                if (!$seller->country_residence && (int)$address->id_country) {   
                    $seller->country_residence = (int)$address->id_country;
                    $seller->update();
                }

                $stripeAccount = null;
                if (!$seller->stripe_account_id) {
                    PpLogger::log([__METHOD__.'::SellerNotFound, create one', $seller]);
                    $stripeAccount = WkMpStripe::createStripeAccountForSeller($this->context->customer, $seller, $_errors);
                }

                $canUpdateSeller = false;

                if (empty($seller->phone)) {
                    $seller->phone = ($address->phone_mobile ?: $address->phone);
                    $canUpdateSeller = true;
                }

                if (empty($seller->city)) {
                    $seller->city = $address->city;
                    $canUpdateSeller = true;
                }

                if (empty($seller->address)) {
                    $seller->address = $address->address1;
                    $canUpdateSeller = true;
                }

                if (empty($seller->postcode)) {
                    $seller->postcode = $address->postcode;
                    $canUpdateSeller = true;
                }

                if (empty($seller->id_country)) {
                    $seller->id_country = $address->id_country;
                    $canUpdateSeller = true;
                }

                if (empty($seller->id_state)) {
                    $seller->id_state = $address->id_state;
                    $canUpdateSeller = true;
                }

                if ($canUpdateSeller) {
                    $seller->update();
                }

                if (Module::isInstalled('mpupsshipping') && Module::isEnabled('mpupsshipping')) {
                    if (!class_exists('MpUpsSellerDetails')) {
                        require_once _PS_MODULE_DIR_ .'mpupsshipping/classes/MpUpsSellerDetails.php';
                    }

                    // Add address to ups shipping method
                    if (!MpUpsSellerDetails::findSellerByIdSeller($seller->id)) {
                        MpUpsSellerDetails::persistSellerShippingInfo($seller->id, $address->address1, $address->city, $address->postcode, $address->id_country, $address->id_state);
                    }
                }

                if (Module::isInstalled('mpfedexshipping') && Module::isEnabled('mpfedexshipping')) {
                    if (!class_exists('MpFedexSellerDetails')) {
                        require_once _PS_MODULE_DIR_ .'mpfedexshipping/classes/MpFedexSellerDetails.php';
                    }

                    // Add address to fedex shipping method
                    if (!MpFedexSellerDetails::findSellerByIdSeller($seller->id)) {
                        MpFedexSellerDetails::persistSellerShippingInfo($seller->id, $address->address1, $address->city, $address->postcode, $address->id_country, $address->id_state);
                    }
                }

                if ($stripeAccount && (isset($stripeAccount->id) && $stripeAccount->id)) {
                    PpLogger::log(['AddressPostSubmitAjax', $stripeAccount, $this->context->customer, $_errors]);

                    // reconfirm the stripe id attached to seller
                    $seller->stripe_account_id = $stripeAccount->id;
                    $seller->update();
// console_log('this is the country code' .(int)$address->id_country);
                    $entityData = array(
                        'dob.day' => '',
                        'dob.month' => '',
                        'dob.year' => '',
                        'force_legal_address_change' => true,
                        'address.line1' => $address->address1,
                        'address.city' => $address->city,
                        'address.postal_code' => $address->postcode,
                        'address.country' => $address->id_country,                        
                        'address.state' => State::getNameById($address->id_state),
                        'first_name' => $this->context->customer->firstname,
                        'last_name'=> $this->context->customer->lastname,
                    );

                    if (isset($seller->entity_type) && $seller->entity_type) {
                        $entityData['type'] = $seller->entity_type;
                    } else {
                        $entityData['type'] = 'individual';
                        $seller->entity_type = $entityData['type'];
                        $seller->update();
                    }

                    if ($this->context->customer->birthday != '0000-00-00'
                            && $this->context->customer->birthday) {
                        list($year, $month, $day) = explode('-', $this->context->customer->birthday);
                        $entityData['dob.day'] = $day;
                        $entityData['dob.month'] = $month;
                        $entityData['dob.year'] = $year;
                    } else {
                        $custObj = new Customer((int)$this->context->customer->id);
                        if (Validate::isLoadedObject($custObj)) {
                            if ($custObj->birthday != '0000-00-00' && $custObj->birthday) {
                                list($year, $month, $day) = explode('-', $custObj->birthday);
                                $entityData['dob.day'] = $day;
                                $entityData['dob.month'] = $month;
                                $entityData['dob.year'] = $year;
                            }
                        }
                    }

                    WkMpStripe::updateLegalEntityObjForSeller($stripeAccount->id, $entityData, $_errors);
                }
            }

            if (count($_errors)) {
                $address->deleted = 1;
                $address->update();
            }

            $return = array(
                'hasError' => (bool)$_errors,
                'errors' => $_errors,
            );
            $this->ajaxDie(Tools::jsonEncode($return));
        }

        $this->ajaxDie(Tools::jsonEncode(array('Unkown error.')));
    }

    private function isSellerType($real_seller = false)
    {
        if (!class_exists('WkMpRequiredClasses')) {
            require _PS_MODULE_DIR_ .'/marketplace/classes/WkMpRequiredClasses.php';
        }

        $seller = WkMpSeller::isRealSeller($this->context->customer->id, true);

        if (!$seller)
            return false;
        return true;
    }
}