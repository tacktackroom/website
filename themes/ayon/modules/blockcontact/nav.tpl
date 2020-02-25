{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $telnumber}
	<div class="shop-phone">
        <span><span class="phone-text">{l s='Order by phone:' mod='blockcontact'} </span><strong>{$telnumber}</strong></span>
	</div>
{/if}
{*
<div id="contact-link" {if $telnumber}class="sep_left"{/if}>
	<a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact Us' mod='blockcontact'}">{l s='Contact Us' mod='blockcontact'}</a>
</div>
*}
{if isset($roythemes.header_lay) && $roythemes.header_lay == "5" }
{* 	<a href="{$link->getPageLink('stores')|escape:'html'}" title="{l s='Our stores' mod='blockcontact'}">{l s='Our stores' mod='blockcontact'}</a> *}
{*
    <a class="myaccount" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='View your account' mod='blockcontact'}">
        {l s='My account' mod='blockcontact'}
    </a>
*}
	<div class="special_menu" {if !$logged}onclick="showLoginPopup()"{/if}><a {if $logged}href="https://tacktackroom.com/module/marketplace/addproduct"{/if}class="">Sell Now</a></div>
	<div class="feed_header" {if !$logged}onclick="showLoginPopup()"{/if}>
	<a {if $logged}	href="https://tacktackroom.com/your-favourite-tack"{/if}>
			<i style="color: #d75a4a" class="icon-heart"></i>
			<div><span>Your Feed</span></div>
		</a>		
	</div>		

{/if}


