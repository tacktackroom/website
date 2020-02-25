{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="..\js\auto-complete.js"></script>


{literal}
<SCRIPT type="text/javascript">	
   (function ($) {
       "use strict";
   
 
 
       $('.input100').each(function(){
          
               if($(this).val().trim() != "") {
                   $(this).addClass('has-val');
               }
               else {
                   $(this).removeClass('has-val');
               }
            
       })
  
       /*==================================================================
       [ Focus input ]*/
       $('.input100').each(function(){
           $(this).on('blur', function(){
               if($(this).val().trim() != "") {
                   $(this).addClass('has-val');
               }
               else {
                   $(this).removeClass('has-val');
               }
           })    
       })
     
     
       /*==================================================================
       [ Validate ]*/
       var input = $('.validate-input .input100');
   
       $('.validate-form').on('submit',function(){
           var check = true;
   
           for(var i=0; i<input.length; i++) {
               if(validate(input[i]) == false){
                   showValidate(input[i]);
                   check=false;
               }
           }
   
           return check;
       });
   
   
       $('.validate-form .input100').each(function(){
           $(this).focus(function(){
              hideValidate(this);
           });
       });
   
       function validate (input) {
           if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
               if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                   return false;
               }
           }
           else {
               if($(input).val().trim() == ''){
                   return false;
               }
           }
       }
   
       function showValidate(input) {
           var thisAlert = $(input).parent();
   
           $(thisAlert).addClass('alert-validate');
       }
   
       function hideValidate(input) {
           var thisAlert = $(input).parent();
   
           $(thisAlert).removeClass('alert-validate');
       }
       
       
   }
   )(jQuery);
   
</script>
{/literal}
{capture name=path}{l s='Your addresses'}{/capture}
<div class="wk-mp-block  col-xs-12 col-sm-3 col-lg-3">
		{hook h="displayMpMenu"}
</div>
<div class="wk-mp-content col-xs-12 col-sm-9 col-lg-9 effect7">
	<h1 class="page-heading bottom-indent">{l s='Your address(es)?'}</h1>
   <div class="wk-mp-right-column wrapper_profile">
   <p class="info-title">
      {if isset($id_address) && (isset($smarty.post.alias) || isset($address->alias))}
      {l s='Modify address'} 
      {if isset($smarty.post.alias)}
      "{$smarty.post.alias}"
      {else}
      {if isset($address->alias)}"{$address->alias|escape:'html':'UTF-8'}"{/if}
      {/if}
      {else}
      {l s='To add a new address, please fill out the form below.'}
      {/if}
   </p>
   {include file="$tpl_dir./errors.tpl"}
   
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBW0Rd2D3Qndqldo1kFXUf2TjulFjBN5W8&libraries=places&callback=initAutocomplete" async defer></script>
  {**<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrB29n6nWY4GpCu15zmIFdqokhaY2BWjc&libraries=places&callback=initAutocomplete" async defer></script>**}

{*    <p class="required"><sup>*</sup>{l s='Required field'}</p> *}
   <form action="{$link->getPageLink('address', true)|escape:'html':'UTF-8'}" method="post" class="std" id="add_address" style=" margin-top: 30px;">
      <!--h3 class="page-subheading">{if isset($id_address)}{l s='Your address'}{else}{l s='New address'}{/if}</h3-->
      {assign var="stateExist" value=false}
      {assign var="postCodeExist" value=false}
      {assign var="dniExist" value=false}
      {assign var="homePhoneExist" value=false}
      {assign var="mobilePhoneExist" value=false}
      {assign var="atLeastOneExists" value=false}
      {foreach from=$ordered_adr_fields item=field_name}
      {if $field_name eq 'company'}
      <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
         <input class="form-control validate input100" data-validate="{$address_validation.$field_name.validate}" type="text" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{else}{if isset($address->company)}{$address->company|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="focus-input100" data-placeholder="{l s='Company'} "></span>
      </div>
      {/if}
      {if $field_name eq 'vat_number'}
      <div id="vat_area">
         <div id="vat_number">
            <div class="form-group">
               <label for="vat-number">{l s='VAT number'}</label>
               <input type="text" class="form-control validate" data-validate="{$address_validation.$field_name.validate}" id="vat-number" name="vat_number" value="{if isset($smarty.post.vat_number)}{$smarty.post.vat_number}{else}{if isset($address->vat_number)}{$address->vat_number|escape:'html':'UTF-8'}{/if}{/if}" />
            </div>
         </div>
      </div>
      {/if}
      {if $field_name eq 'dni'}
      {assign var="dniExist" value=true}
      <div class="required form-group">
         <label for="dni">{l s='Identification number'}</label>
         <input class="form-control" data-validate="{$address_validation.$field_name.validate}" type="text" name="dni" id="dni" value="{if isset($smarty.post.dni)}{$smarty.post.dni}{else}{if isset($address->dni)}{$address->dni|escape:'html'}{/if}{/if}" />
         <span class="form_info">{l s='DNI / NIF / NIE'}</span>
      </div>
      {/if}
      {if $field_name eq 'firstname'}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
         <input class="is_required validate form-control input100 has-val" data-validate="{$address_validation.$field_name.validate}" type="text" name="firstname" id="firstname" value="{if isset($smarty.post.firstname)}{$smarty.post.firstname}{else}{if isset($address->firstname)}{$address->firstname|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="focus-input100" data-placeholder="{l s='First name'} "></span>
      </div>
      {/if}
      {if $field_name eq 'lastname'}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
         <input class="is_required validate form-control input100 has-val" data-validate="{$address_validation.$field_name.validate}" type="text" id="lastname" name="lastname" value="{if isset($smarty.post.lastname)}{$smarty.post.lastname}{else}{if isset($address->lastname)}{$address->lastname|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="focus-input100" data-placeholder="{l s='Last name'} "></span>
      </div>
      {/if}
      {if $field_name eq 'address1'}
 {*   <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
	  <input id="autocomplete" placeholder="" onfocus="geolocate()" type="text" class="form-control input100 fmy_input has-val" autocomplete="off">
	   <span class="focus-input100" data-placeholder="{l s='Enter your address to autocomplete'} "></span>

      *<div id="address">
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label">Street address</label>
                  <input class="form-control" id="street_number" disabled="true">
                </div>
                <div class="col-md-6">
                  <label class="control-label">Route</label>
                  <input class="form-control" id="route" disabled="true">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label">City</label>
                  <input class="form-control field" id="locality" disabled="true">
                </div>
                <div class="col-md-6"> 
                  <label class="control-label">State</label>
                  <input class="form-control" id="administrative_area_level_1" disabled="true">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label class="control-label">Zip code</label>
                  <input class="form-control" id="postal_code" disabled="true">
                </div>
                <div class="col-md-6">
                  <label class="control-label">Country</label>
                  <input class="form-control" id="country" disabled="true">
                </div>
              </div>
            </div>*
    </div>     *}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
         <input class="is_required validate form-control input100" data-validate="{$address_validation.$field_name.validate}" type="text" id="address1" name="address1" autocomplete="off" value="{if isset($smarty.post.address1)}{$smarty.post.address1}{else}{if isset($address->address1)}{$address->address1|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="focus-input100" data-placeholder="{l s='Address'}"></span>
      </div>
      {/if}
{*
      {if $field_name eq 'address2'}
      <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
         <input class="validate form-control input100" data-validate="{$address_validation.$field_name.validate}" type="text" id="address2" name="address2" value="{if isset($smarty.post.address2)}{$smarty.post.address2}{else}{if isset($address->address2)}{$address->address2|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="focus-input100" data-placeholder="{l s='Address (Line 2)'}"></span>
      </div>
      {/if}
*}
{*
      {if $field_name eq 'postcode'}
      {assign var="postCodeExist" value=true}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6 postcode unvisible">
         <input class="is_required form-control input100" type="text" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{else}{if isset($address->postcode)}{$address->postcode|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="focus-input100" data-placeholder="{l s='Zip/Postal Code'}"></span>
      </div>
      {/if}
*}

            {if $field_name eq 'postcode'}
      {assign var="postCodeExist" value=true}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6 postcode unvisible">
         <input class="is_required form-control input100" type="text" id="postcode" name="postcode" autocomplete="off" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{else}{if isset($address->postcode)}{$address->postcode|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="focus-input100" data-placeholder="{l s='Zip/Postal Code'}"></span>
      </div>
      {/if}

      {if $field_name eq 'city'}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
         <input class="is_required validate form-control input100" data-validate="{$address_validation.$field_name.validate}" type="text" name="city" id="city" autocomplete="off" value="{if isset($smarty.post.city)}{$smarty.post.city}{else}{if isset($address->city)}{$address->city|escape:'html':'UTF-8'}{/if}{/if}" maxlength="64" />
         <span class="focus-input100" data-placeholder="{l s='City'} "></span>
      </div>
      {* if customer hasn't update his layout address, country has to be verified but it's deprecated *}
      {/if}
      {if $field_name eq 'Country:name' || $field_name eq 'country'}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
         <select id="id_country" class="form-control input100" name="id_country">{$countries_list}</select>
      </div>
      {/if}
      {if $field_name eq 'State:name'}
      {assign var="stateExist" value=true}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
         <select name="id_state" id="id_state" class="form-control" style="width: 100%;border: none">
            <option value="">{l s='State'} </option>
         </select>
      </div>
      {/if}
{*
      {if $field_name eq 'phone'}
      {assign var="homePhoneExist" value=true}
      <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6 phone-number">
         <input class="input100 {if isset($one_phone_at_least) && $one_phone_at_least}is_required{/if} validate form-control" data-validate="{$address_validation.phone.validate}" type="tel" id="phone" name="phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{else}{if isset($address->phone)}{$address->phone|escape:'html':'UTF-8'}{/if}{/if}"  />
         	<span class="focus-input100" data-placeholder="{l s='Home phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>**</sup>{/if} "></span>
      </div>
      {if isset($one_phone_at_least) && $one_phone_at_least}
      {assign var="atLeastOneExists" value=true}
      <p class="inline-infos required">** {l s='You must register at least one phone number.'}</p>
      {/if}
      <div class="clearfix"></div>
      {/if}
*}
      {if $field_name eq 'phone_mobile'}
      {assign var="mobilePhoneExist" value=true}
      <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6 required">
         <input class="input100 form-control tel_us_format" data-validate="{$address_validation.phone_mobile.validate}" type="tel" id="phone_mobile" name="phone_mobile" value="{if isset($smarty.post.phone_mobile)}{$smarty.post.phone_mobile}{else}{if isset($address->phone_mobile)}{$address->phone_mobile|escape:'html':'UTF-8'}{/if}{/if}" required="true" />
        <span class="focus-input100" data-placeholder="{l s='Mobile phone'}{if isset($one_phone_at_least) && $one_phone_at_least} <sup>**</sup>{/if} "></span>
      </div>
      {/if}
      {/foreach}

      {if isset($seller_additional_fields) && $seller_additional_fields}
        {if !$has_birthday}
          <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6 cust_dob" style="border: none;margin-bottom: 100px!important">
                <span class="focus-input100" data-placeholder="{l s='Birthday'}" style="margin-top: -34px;"></span>
                <div class="birth-selector">
                      <select id="months" name="months" class="form-control input100">
                          <option value="">-</option>
                          {foreach from=$months key=k item=v}
                              <option value="{$k}" {if ($sl_month == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>
                          {/foreach}
                      </select>
                  </div>
                  <div class="birth-selector">
                      <select name="days" id="days" class="form-control input100">
                          <option value="">-</option>
                          {foreach from=$days item=v}
                              <option value="{$v}" {if ($sl_day == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                          {/foreach}
                      </select>
                  </div>
  
                  <div class="birth-selector">
                      <select id="years" name="years" class="form-control input100">
                          <option value="">-</option>
                          {foreach from=$years item=v}
                              <option value="{$v}" {if ($sl_year == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                          {/foreach}
                      </select>
                  </div>
          </div>
        {/if}

        {if !$seller_data['country_residence']}
        <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
           <select id="country_residence" name="country_residence" class="form-control">{$countries_list}</select>
        </div>
        {/if}
      {/if}

      {if !$postCodeExist}
      <div class="postcode form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6 unvisible">
         <label for="postcode">{l s='Zip/Postal Code'} <sup>*</sup></label>
         <input class="is_required form-control" type="text" id="postcode" name="postcode" value="{if isset($smarty.post.postcode)}{$smarty.post.postcode}{else}{if isset($address->postcode)}{$address->postcode|escape:'html':'UTF-8'}{/if}{/if}" />
      </div>
      {/if}		
      {if !$stateExist}
      <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6 id_state unvisible">
         <label for="id_state">{l s='State'} <sup>*</sup></label>
         <select name="id_state" id="id_state" class="form-control">
            <option value="">-</option>
         </select>
      </div>
      {/if}
      {if !$dniExist}
      <div class="required dni form-group unvisible">
         <label for="dni">{l s='Identification number'} <sup>*</sup></label>
         <input class="is_required form-control" data-validate="{$address_validation.dni.validate}" type="text" name="dni" id="dni" value="{if isset($smarty.post.dni)}{$smarty.post.dni}{else}{if isset($address->dni)}{$address->dni|escape:'html':'UTF-8'}{/if}{/if}" />
         <span class="form_info">{l s='DNI / NIF / NIE'}</span>
      </div>
      {/if}
      <div class="required form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6 " id="adress_alias">
 
         <input type="text" id="alias" class="is_required validate form-control input100 has-val" data-validate="{$address_validation.alias.validate}" name="alias" value="{if isset($smarty.post.alias)}{$smarty.post.alias}{else if isset($address->alias)}{$address->alias|escape:'html':'UTF-8'}{elseif !$select_address}{l s='My address'}{/if}" />
                  <span class="focus-input100" data-placeholder="{l s='Choose a name for this address.'} "></span>
      </div>
      <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
         <textarea class="validate form-control input100" data-validate="{$address_validation.other.validate}" id="other" name="other" cols="26" rows="5" >{if isset($smarty.post.other)}{$smarty.post.other}{else}{if isset($address->other)}{$address->other|escape:'html':'UTF-8'}{/if}{/if}</textarea>
                  <span class="focus-input100" data-placeholder="{l s='Additional information'}"></span>
      </div>
{*
      {if !$homePhoneExist}
      <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6 phone-number">
         <input class="input100 {if isset($one_phone_at_least) && $one_phone_at_least}is_required{/if} validate form-control" data-validate="{$address_validation.phone.validate}" type="tel" id="phone" name="phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{else}{if isset($address->phone)}{$address->phone|escape:'html':'UTF-8'}{/if}{/if}"  />
         <span class="focus-input100" data-placeholder="{l s='Home phone'}"></span>
      </div>
      {/if}
      {if isset($one_phone_at_least) && $one_phone_at_least && !$atLeastOneExists }
      <p class="inline-infos required">{l s='You must register at least one phone number.'}</p>
      {/if}
      <div class="clearfix"></div>
*}
      {if !$mobilePhoneExist}
      <div class="{if isset($one_phone_at_least) && $one_phone_at_least}required {/if}form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6 ">
         <input class="input100 validate form-control" data-validate="{$address_validation.phone_mobile.validate}" type="tel" id="phone_mobile" name="phone_mobile" value="{if isset($smarty.post.phone_mobile)}{$smarty.post.phone_mobile}{else}{if isset($address->phone_mobile)}{$address->phone_mobile|escape:'html':'UTF-8'}{/if}{/if}" />
                  <span class="focus-input100" data-placeholder="{l s='Mobile phone'}"></span>
      </div>
      {/if}

      {if isset($seller_additional_fields) && $seller_additional_fields}
        <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6 checkboxes">
          <label class="form-control" for="as_ship_to">
            <input type="checkbox" id="as_ship_to" name="as_ship_to" value="1"{if isset($address->as_ship_to) && $address->as_ship_to} checked{/if} /> {l s='As ship to'}
          </label>
          <label class="form-control" for="as_ship_from">
            <input type="checkbox" id="as_ship_from" name="as_ship_from" value="1"{if isset($address->as_ship_from) && $address->as_ship_from} checked{/if} /> {l s='As ship from'}
          </label>
          <label class="form-control" for="as_legal">
            <input type="checkbox" id="as_legal" name="as_legal" value="1"{if isset($address->as_legal) && $address->as_legal} checked{/if} /> {l s='As legal'}
          </label>
        </div>
      {/if}
      <div class="clearfix"></div>
      <p class="submit2">
         {if isset($id_address)}<input type="hidden" name="id_address" value="{$id_address|intval}" />{/if}
         {if isset($back)}<input type="hidden" name="back" value="{$back}" />{/if}
         {if isset($mod)}<input type="hidden" name="mod" value="{$mod}" />{/if}
         {if isset($select_address)}<input type="hidden" name="select_address" value="{$select_address|intval}" />{/if}
         <input type="hidden" name="token" value="{$token}" />		
         <button type="submit" name="submitAddress" id="submitAddress" class="btn btn-default button button-small pull-right" style="float: none">
           <span> {l s='Save'} <i class="icon-chevron-right right"></i></span>
         </button>
         <div class="clearfix"></div>
      </p>
   </form>
</div>
<ul class="footer_links clearfix">
   <li>
      <a class="btn btn-default button button-small" href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}">
      <span><i class="icon-chevron-left"></i> {l s='Back to your addresses'}</span>
      </a>
   </li>
</ul>
</div>
{strip}
{if isset($smarty.post.id_state) && $smarty.post.id_state}
{addJsDef idSelectedState=$smarty.post.id_state|intval}
{else if isset($address->id_state) && $address->id_state}
{addJsDef idSelectedState=$address->id_state|intval}
{else}
{addJsDef idSelectedState=false}
{/if}
{if isset($smarty.post.id_country) && $smarty.post.id_country}
{addJsDef idSelectedCountry=$smarty.post.id_country|intval}
{else if isset($address->id_country) && $address->id_country}
{addJsDef idSelectedCountry=$address->id_country|intval}
{else}
{addJsDef idSelectedCountry=false}
{/if}
{if isset($countries)}
{addJsDef countries=$countries}
{/if}
{if isset($vatnumber_ajax_call) && $vatnumber_ajax_call}
{addJsDef vatnumber_ajax_call=$vatnumber_ajax_call}
{/if}
{/strip}