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

class IdentityController extends IdentityControllerCore
{
    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        if ($this->customer->birthday) {
            $birthday = explode('-', $this->customer->birthday);
        } else {
            $birthday = array('-', '-', '-');
        }

        $seller = WkMpSeller::getSellerDetailByCustomerId((int)$this->customer->id);

        /* Generate years, months and days */
        $this->context->smarty->assign(array(
            'years' => Tools::dateYears(),
            'sl_year' => $birthday[0],
            'months' => Tools::dateMonths(),
            'sl_month' => $birthday[1],
            'days' => Tools::dateDays(),
            'sl_day' => $birthday[2],
            'errors' => $this->errors,
            'genders' => Gender::getGenders(),
            'seller' => $seller,
            'is_seller' => WkMpSeller::isRealSeller($this->context->customer->id, true),
        ));

        // Call a hook to display more information
        $this->context->smarty->assign(array(
            'HOOK_CUSTOMER_IDENTITY_FORM' => Hook::exec('displayCustomerIdentityForm'),
        ));

        $newsletter = Configuration::get('PS_CUSTOMER_NWSL') || (Module::isInstalled('blocknewsletter') && Module::getInstanceByName('blocknewsletter')->active);
        $this->context->smarty->assign('newsletter', $newsletter);
        $this->context->smarty->assign('optin', (bool)Configuration::get('PS_CUSTOMER_OPTIN'));
        $this->context->smarty->assign('field_required', $this->context->customer->validateFieldsRequiredDatabase());
        $this->context->smarty->assign('static_token', Tools::getToken(false));

        /*$create_stripe_account = 0;

        if ($seller && $seller['stripe_account_id']) {
            $stripeAccount = WkMpStripe::getStripeAccount($seller['stripe_account_id'], $this->errors);

            if ($stripeAccount) {
                if (count($stripeAccount->verification->fields_needed) > 0) {
                    $hasAddressFields = false;
                    $fields_needed = array('stripe_fields' => 1, 'stripe_needed_fields' => array());
                    $_stripe_needed_fields = Tools::getValue('stripe_needed_fields');

                    foreach ($stripeAccount->verification->fields_needed as $_field) {
                        $fields_needed['stripe_needed_fields'][$_field] = (isset($_stripe_needed_fields[$_field]) ? $_stripe_needed_fields[$_field] : '');

                        if ($_field == 'legal_entity.address.city' || $_field == 'legal_entity.address.line1'
                            || $_field == 'legal_entity.address.postal_code' || $_field == 'legal_entity.address.state') {
                            $hasAddressFields = true;
                        }
                    }

                    if ($hasAddressFields) {
                        if ($cust_address = Customer::customerHasAtLeastOneAddress($this->context->customer->id)) {
                            if ($cust_address->address1 && $cust_address->city && $cust_address->postcode && (int)$cust_address->id_state) {
                                WkMpStripe::updateLegalEntityObjForSeller($seller['stripe_account_id'], array(
                                    'address.line1' => $cust_address->address1,
                                    'address.city' => $cust_address->city,
                                    'address.postal_code' => $cust_address->postcode,
                                    'address.state' => State::getNameById($cust_address->id_state),
                                ), $this->errors);

                                unset($fields_needed['stripe_needed_fields']['legal_entity.address.city'], $fields_needed['stripe_needed_fields']['legal_entity.address.line1'], $fields_needed['stripe_needed_fields']['legal_entity.address.postal_code'], $fields_needed['stripe_needed_fields']['legal_entity.address.state']);
                            }
                        }
                    }

                    $this->context->smarty->assign($fields_needed);
                }
            }
            $create_stripe_account = 1;
        }

        if (Tools::isSubmit('create_seller_stp') || (int)Tools::getValue('create_stripe_account') || ($seller && !$seller['stripe_account_id'])) {
            if ($seller && $seller['country_residence']) {
                $id_country = (int)$seller['country_residence'];
            } else {
                $id_country = (int)Tools::getCountry();
            }

            if (Configuration::get('PS_RESTRICT_DELIVERED_COUNTRIES')) {
                $countries = Carrier::getDeliveredCountries($this->context->language->id, true, true);
            } else {
                $countries = Country::getCountries($this->context->language->id, true);
            }

            $countries_list = '';
            foreach ($countries as $country) {
                $selected = ((int)$country['id_country'] === $id_country) ? ' selected="selected"' : '';
                $countries_list .= '<option value="'.(int)$country['id_country'].'"'.$selected.'>'.htmlentities($country['name'], ENT_COMPAT, 'UTF-8').'</option>';
            }
            $this->context->smarty->assign(array(
                'countries_list' => $countries_list,
            ));
            $create_stripe_account = 1;
        }
        $this->context->smarty->assign('create_stripe_account', $create_stripe_account);
        */
            
        Media::addJsDef(array(
            'path_sellerdetails' => $this->context->link->getModuleLink('marketplace', 'sellerrequest'),
        ));

        $this->setTemplate(_PS_THEME_DIR_.'identity.tpl');
    }

    public function setMedia()
    {
        parent::setMedia();

        $this->addJS(array(
            _PS_JS_DIR_.'jquery.SimpleMask.js',
            _MODULE_DIR_ .'marketplace/views/js/mp_form_validation.js',
        ));
    }

    /**
     * Start forms process
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
        $origin_newsletter = (bool)$this->customer->newsletter;

        if (Tools::isSubmit('submitIdentity')) {
            $email = trim(Tools::getValue('email'));
            $create_stripe_account = (int)Tools::getValue('create_stripe_account', 0);

            if (Tools::getValue('months') != '' && Tools::getValue('days') != '' && Tools::getValue('years') != '') {
                $dob = (int)Tools::getValue('years').'-'.(int)Tools::getValue('months').'-'.(int)Tools::getValue('days');

                if (WkMpStripe::checkAccountHolderAge($dob)) {
                    $this->errors[] = Tools::displayError('You must be at least 13 years old.');
                } else {
                    $this->customer->birthday = $dob;
                }
            }

            $seller = WkMpSeller::getSellerDetailByCustomerId((int)$this->customer->id);

            // if ($create_stripe_account) {
            //     if (Tools::getValue('months') == '' || Tools::getValue('days') == '' || Tools::getValue('years') == '') {
            //         $this->errors[] = Tools::displayError('Date of birth is not valid.');
            //     }

            //     if (!(int)Tools::getValue('country_residence') && !$seller['country_residence']) {
            //         $this->errors[] = Tools::displayError('Country of residence is not valid.');
            //     }

            //     if (empty(Tools::getValue('entity_type'))) {
            //         $this->errors[] = Tools::displayError('Entity type is not valid.');
            //     }
            // }

            if (Tools::getIsset('old_passwd')) {
                $old_passwd = trim(Tools::getValue('old_passwd'));
            }

            $phone = Tools::getValue('phone');

            if (!empty($phone)) {
                $phone = str_replace(array('(',')','-', ' '), '', $phone);

                if (strlen($phone) != 10 || !Validate::isPhoneNumber($phone)) {
                    $this->errors[] = Tools::displayError('This phone number is not valid');
                }
            }

            if (!Validate::isEmail($email)) {
                $this->errors[] = Tools::displayError('This email address is not valid');
            } elseif ($this->customer->email != $email && Customer::customerExists($email, true)) {
                $this->errors[] = Tools::displayError('An account using this email address has already been registered.');
            } elseif (!Tools::getIsset('old_passwd') || (Tools::encrypt($old_passwd) != $this->context->cookie->passwd)) {
                $this->errors[] = Tools::displayError('The password you entered is incorrect.');
            } elseif (Tools::getValue('passwd') != Tools::getValue('confirmation')) {
                $this->errors[] = Tools::displayError('The password and confirmation do not match.');
            } else {
                $prev_id_default_group = $this->customer->id_default_group;

                // Merge all errors of this file and of the Object Model
                $this->errors = array_merge($this->errors, $this->customer->validateController());
            }

            if ($seller || $create_stripe_account) {
                $shop_name = Tools::getValue('shop_name_unique');

                if (!$shop_name) {
                    $this->errors[] = Tools::displayError('Please provide a nickname.');
                } elseif (WkMpSeller::isShopNameExist(Tools::link_rewrite($shop_name), $seller['id_seller'])) {
                    $this->errors[] = Tools::displayError('Nickname is already taken. Try another.');
                }/* elseif (!Tools::getValue('phone')) {
                    $this->errors[] = Tools::displayError('Please provide a phone number.');
                }*/
            }

            $stripe_needed_fields = Tools::getValue('stripe_needed_fields');
            
            if ($stripe_needed_fields && count($stripe_needed_fields)) {
                $allFilled = true;
                foreach ($stripe_needed_fields as $_field) {
                    if (empty($_field)) {
                        $allFilled = false;
                        $this->errors[] = Tools::displayError('Please fill up all mandatory fields.');
                        break;
                    }
                }
            }

            if (!count($this->errors)) {
                $this->customer->id_default_group = (int)$prev_id_default_group;
                $this->customer->firstname = Tools::ucwords($this->customer->firstname);

                if (Configuration::get('PS_B2B_ENABLE')) {
                    $this->customer->website = Tools::getValue('website'); // force update of website, even if box is empty, this allows user to remove the website
                    $this->customer->company = Tools::getValue('company');
                }

                if (!Tools::getIsset('newsletter')) {
                    $this->customer->newsletter = 0;
                } elseif (!$origin_newsletter && Tools::getIsset('newsletter')) {
                    if ($module_newsletter = Module::getInstanceByName('blocknewsletter')) {
                        /** @var Blocknewsletter $module_newsletter */
                        if ($module_newsletter->active) {
                            $module_newsletter->confirmSubscription($this->customer->email);
                        }
                    }
                }

                if (!Tools::getIsset('optin')) {
                    $this->customer->optin = 0;
                }
                if (Tools::getValue('passwd')) {
                    $this->context->cookie->passwd = $this->customer->passwd;
                }
                if ($this->customer->update()) {
                    $this->context->cookie->customer_lastname = $this->customer->lastname;
                    $this->context->cookie->customer_firstname = $this->customer->firstname;
                    $this->context->smarty->assign('confirmation', 1);

                    if ($seller) {
                        $shop_name = trim(Tools::getValue('shop_name_unique'));
                        $wkMpSeller = new WkMpSeller($seller['id_seller']);
                        $wkMpSeller->shop_name_unique = pSQL($shop_name);
                        $wkMpSeller->link_rewrite = Tools::link_rewrite($shop_name);
                        $wkMpSeller->phone = trim(Tools::getValue('phone'));
                        $wkMpSeller->update();
                    }
                } else {
                    $this->errors[] = Tools::displayError('The information cannot be updated.');
                }
            }
        } else {
            $_POST = array_map('stripslashes', $this->customer->getFields());
        }

        return $this->customer;
    }
}