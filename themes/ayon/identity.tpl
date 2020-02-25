{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{literal}
<SCRIPT type="text/javascript">	
(function ($) {
    "use strict";

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
})(jQuery);
</script>
{/literal}
{capture name=path}
    <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">
        {l s='My account'}
    </a>
    <span class="navigation-pipe">
        {$navigationPipe}
    </span>
    <span class="navigation_page">
        {l s='Your personal information'}
    </span>
   
{/capture}

<div class="wk-mp-block">
		{hook h="displayMpMenu"}
</div>
<div class="wk-mp-content effect7">
    <h1 class="page-heading bottom-indent">
        {l s='Your personal information'}
    </h1>
    
{include file="$tpl_dir./errors.tpl"}
<div class="wk-mp-right-column wrapper_profile">
    {if isset($confirmation) && $confirmation}
        <p class="alert alert-success">
            {l s='Your personal information has been successfully updated.'}
            {if isset($pwd_changed)}<br />{l s='Your password has been sent to your email:'} {$email}{/if}
        </p>
    {else}
        <p class="info-title">
            {l s='Please be sure to update your personal information if it has changed.'}
        </p>
        <form action="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" method="post" class="std" style="margin-top:30px" enctype="multipart/form-data">
            <fieldset>	                     
{*
            <div class="clearfix title-gender">
                <label style="color: #ababab;font-size: 12px">{l s='Title'}</label>
                <br />
                {foreach from=$genders key=k item=gender}
                    <div class="radio-inline">
                        <label for="id_gender{$gender->id}" class="top">
                        <input type="radio" name="id_gender" id="id_gender{$gender->id}" value="{$gender->id|intval}" {if isset($smarty.post.id_gender) && $smarty.post.id_gender == $gender->id}checked="checked"{/if} />
                        {$gender->name}</label>
                    </div>
                {/foreach}
            </div>
*}
    
        {if isset($seller) && $seller}
            <div class="form-group wrap-input100 required col-xs-12 col-md-6 col-lg-6">
                <input type="hidden" id="mp_seller_id" value="{$seller.id_seller|intval}" />
                <input type="hidden" name="token" id="wk-static-token" value="{$static_token|escape:'htmlall':'UTF-8'}">

                <img style="display: none;" width="25" src="{$smarty.const._MODULE_DIR_}marketplace/views/img/loading-small.gif" class="seller-loading-img"/>
                <input class="form-control input100 is_required validate has-val" type="text" value="{if isset($smarty.post.shop_name_unique)}{$smarty.post.shop_name_unique|escape:'htmlall':'UTF-8'}{else}{$seller.shop_name_unique}{/if}" 
                    id="shop_name_unique" 
                    data-validate="isName"
                    name="shop_name_unique" 
                    onblur="onblurCheckUniqueshop();"
                    autocomplete="off" />                       
                <span class="focus-input100 required" data-placeholder="{l s='Nickname' mod='marketplace'}"></span>
                <span class="wk-msg-shopnameunique"></span>
            </div>
        {/if}

            <div class="required form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
                <input class="is_required validate form-control input100 has-val" data-validate="isName" type="text" id="firstname" name="firstname" value="{$smarty.post.firstname}" />
                <span class="focus-input100" data-placeholder="{l s='First Name' mod='marketplace'}"></span>	
            </div>
            <div class="required form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
                <input class="is_required validate form-control input100 has-val" data-validate="isName" type="text" name="lastname" id="lastname" value="{$smarty.post.lastname}" />
                <span class="focus-input100" data-placeholder="{l s='Last name'}"></span>	
            </div>
            <div class="required form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
                <input class="is_required validate form-control input100 has-val" data-validate="isEmail" type="email" name="email" id="email" value="{$smarty.post.email}" />
                <span class="focus-input100" data-placeholder="{l s='E-mail address'} "></span>	
            </div>
            <div class="{if $is_seller}required {/if}form-group wrap-input100 col-xs-12 col-md-6 col-lg-6" style="border: none">
                <div class="row">
                    <span style="width: 100%;float: left;text-align: center;color: #ababab;">{l s='Date of birth'} </span>
                   <div class="birth-selector">
                        <select id="months" name="months" class="form-control input100" {if $is_seller}required{/if}>
                            <option value="">-</option>
                            {foreach from=$months key=k item=v}
                                <option value="{$k}" {if ($sl_month == $k)}selected="selected"{/if}>{l s=$v}&nbsp;</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="birth-selector">
                        <select name="days" id="days" class="form-control input100" {if $is_seller}required{/if}>
                            <option value="">-</option>
                            {foreach from=$days item=v}
                                <option value="{$v}" {if ($sl_day == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="birth-selector">
                        <select id="years" name="years" class="form-control input100" {if $is_seller}required{/if}>
                            <option value="">-</option>
                            {foreach from=$years item=v}
                                <option value="{$v}" {if ($sl_year == $v)}selected="selected"{/if}>{$v}&nbsp;&nbsp;</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
            </div>

            {if isset($seller) && $seller}
                <div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
                    <input class="form-control input100 validate has-val tel_us_format" type="text" value="{if isset($smarty.post.phone)}{$smarty.post.phone|escape:'htmlall':'UTF-8'}{else}{$seller.phone}{/if}" id="phone" name="phone" />                       
                    <span class="focus-input100" data-placeholder="{l s='Phone' mod='marketplace'}"></span>
                </div>
            {/if}

            <div class="required form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
                <input class="is_required validate form-control input100" type="password" data-validate="isPasswd" name="old_passwd" id="old_passwd" />
                <span class="focus-input100" data-placeholder="{l s='Current Password'} "></span>	
            </div>
            <div class="password form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
                <input class="is_required validate form-control input100" type="password" data-validate="isPasswd" name="passwd" id="passwd" />
                <span class="focus-input100" data-placeholder=" {l s='New Password'}"></span>	
            </div>
            <div class="password form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">
                <input class="is_required validate form-control input100" type="password" data-validate="isPasswd" name="confirmation" id="confirmation" />
                <span class="focus-input100" data-placeholder="{l s='Confirmation'}"></span>	
            </div>
                
                {if $newsletter}
                    <div class="checkbox">
                        <label for="newsletter">
                            <input type="checkbox" id="newsletter" name="newsletter" value="1" {if isset($smarty.post.newsletter) && $smarty.post.newsletter == 1} checked="checked"{/if}/>
                            {l s='Sign up for our newsletter!'}
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="optin">
                            <input type="checkbox" name="optin" id="optin" value="1" {if isset($smarty.post.optin) && $smarty.post.optin == 1} checked="checked"{/if}/>
                            {l s='Receive special offers from our partners!'}
                        </label>
                    </div>
                {/if}
			{if $b2b_enable}
				<h1 class="page-subheading">
					{l s='Your company information'}
				</h1>
				<div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">

					<input type="text" class="form-control input100" id="company" name="company" value="{if isset($smarty.post.company)}{$smarty.post.company}{/if}" />
					<span class="focus-input100" data-placeholder="{l s='Company'}"></span>	
				</div>
				<div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">

					<input type="text" class="form-control input100" id="siret" name="siret" value="{if isset($smarty.post.siret)}{$smarty.post.siret}{/if}" />
					<span class="focus-input100" data-placeholder="{l s='SIRET'}<"></span>	
				</div>
				<div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">

					<input type="text" class="form-control input100" id="ape" name="ape" value="{if isset($smarty.post.ape)}{$smarty.post.ape}{/if}" />
					<span class="focus-input100" data-placeholder="{l s='APE'}"></span>	
				</div>
				<div class="form-group wrap-input100 col-xs-12 col-md-6 col-lg-6">

					<input type="text" class="form-control input100" id="website" name="website" value="{if isset($smarty.post.website)}{$smarty.post.website}{/if}" />
					<span class="focus-input100" data-placeholder="{l s='Website'}"></span>	
				</div>
			{/if}

            <div class="save">
                <button type="submit" name="submitIdentity" class="btn btn-default button button-small">
                    <span>{l s='Save'}<i class="icon-chevron-right right"></i></span>
                </button>
            </div>
            </fieldset>
        </form> <!-- .std -->
    {/if}
</div>

{*
<ul class="footer_links clearfix">
	<li>
        <a class="btn btn-default button button-small" href="{$link->getPageLink('my-account', true)}">
            <span>
                <i class="icon-chevron-left"></i>{l s='Back to your account'}
            </span>
        </a>
    </li>
	<li>
        <a class="btn btn-default button button-small" href="{$base_dir}">
            <span>
                <i class="icon-chevron-left"></i>{l s='Home'}
            </span>
        </a>
    </li>
</ul>
*}

</div>

{addJsDefL name=shop_name_exist_msg}{l s='This Shop name is already used! Try another.' js=1 mod='marketplace'}{/addJsDefL}
{addJsDefL name=shop_name_error_msg}{l s='Shop name can not contain any special character except underscore. Try another.' js=1 mod='marketplace'}{/addJsDefL}