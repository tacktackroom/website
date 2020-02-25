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

{if isset($products) && $products}


	{*define numbers of product per line in other page for desktop*}
{*
	{if $page_name =='category'}
		{assign var='nbItemsPerLine' value=3}
		{assign var='nbItemsPerLineTablet' value=3}
		{assign var='nbItemsPerLineMobile' value=2}
	{elseif $page_name !='index' && $page_name !='product'}
		{assign var='nbItemsPerLine' value=4}
		{assign var='nbItemsPerLineTablet' value=4}
		{assign var='nbItemsPerLineMobile' value=2}
	{else if $page_name =='index'}
		{assign var='nbItemsPerLine' value=5}
		{assign var='nbItemsPerLineTablet' value=5}
		{assign var='nbItemsPerLineMobile' value=2}
	{/if}
*}
	{if isset($wscustomsix) && $wscustomsix}
		{assign var='nbItemsPerLine' value=6}
		{assign var='nbItemsPerLineTablet' value=4}
		{assign var='nbItemsPerLineMobile' value=2}
	{else if $page_name =='index'|| $page_name =='module-advansedwishlist-mywishlist'|| $page_name =='module-advansedwishlist-default'}
		{assign var='nbItemsPerLine' value=6}
		{assign var='nbItemsPerLineTablet' value=6}
		{assign var='nbItemsPerLineMobile' value=6}		
	{else if $page_name =='category' || $page_name =='manufacturer' || $page_name =='new-products' || $page_name =='module-marketplace-shopstore'}
		{assign var='nbItemsPerLine' value=4}
		{assign var='nbItemsPerLineTablet' value=3}
		{assign var='nbItemsPerLineMobile' value=2}				
	{else}	
		{assign var='nbItemsPerLine' value=5}
		{assign var='nbItemsPerLineTablet' value=3}
		{assign var='nbItemsPerLineMobile' value=2}
	{/if}
	{*define numbers of product per line in other page for tablet*}
	{assign var='nbLi' value=$products|@count}
	{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
	{math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}
	<!-- Products list -->

	<ul{if isset($id) && $id} id="{$id}"{/if} class="product_list grid row{if isset($class) && $class} {$class}{/if}{if isset($active) && $active == 1} active{/if}">

	{foreach from=$products item=product name=products}
		{math equation="(total%perLine)" total=$smarty.foreach.products.total perLine=$nbItemsPerLine assign=totModulo}
		{math equation="(total%perLineT)" total=$smarty.foreach.products.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
		{math equation="(total%perLineT)" total=$smarty.foreach.products.total perLineT=$nbItemsPerLineMobile assign=totModuloMobile}
		{if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
		{if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
		{if $totModuloMobile == 0}{assign var='totModuloMobile' value=$nbItemsPerLineMobile}{/if}
		<li class="ajax_block_product{if $page_name == 'index' || $page_name == 'product'|| $page_name =='module-advansedwishlist-mywishlist'|| $page_name =='module-advansedwishlist-default'} col-xs-6 col-sm-3 col-md-2{else if $page_name == 'category' ||$page_name == 'new-products' || $page_name =='manufacturer' || $page_name =='module-marketplace-shopstore'} col-xs-6 col-sm-4 col-md-3{else} col-xs-6 col-sm-4 col-md-4{/if}{if isset($ws) && $ws} wsl-block-{$product.id_product} {/if}{if $smarty.foreach.products.iteration%$nbItemsPerLine == 0} last-in-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLine == 1} first-in-line{/if}{if $smarty.foreach.products.iteration > ($smarty.foreach.products.total - $totModulo)} last-line{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLineTablet == 0} last-item-of-tablet-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLineTablet == 1} first-item-of-tablet-line{/if}{if $smarty.foreach.products.iteration%$nbItemsPerLineMobile == 0} last-item-of-mobile-line{elseif $smarty.foreach.products.iteration%$nbItemsPerLineMobile == 1} first-item-of-mobile-line{/if}{if $smarty.foreach.products.iteration > ($smarty.foreach.products.total - $totModuloMobile)} last-mobile-line{/if} {if (!$product.allow_oosp && $product.quantity_all_versions <= 0)}outofstock{/if}">
			<div class="product-container" itemscope itemtype="http://schema.org/Product">

				{if isset($roythemes.nc_p_hover)}
					{if $roythemes.nc_p_hover == "1"}
						{include file="./product-list_hover1.tpl"}
					{/if}
					{if $roythemes.nc_p_hover == "2"}
						{include file="./product-list_hover2.tpl"}
					{/if}
					{if $roythemes.nc_p_hover == "3"}
						{include file="./product-list_hover3.tpl"}
					{/if}
					{if $roythemes.nc_p_hover == "4"}
						{include file="./product-list_hover4.tpl"}
					{/if}
				{else}
					{if isset($nc_p_hover) && $nc_p_hover == "1"}
						{include file="./product-list_hover1.tpl"}
					{/if}
					{if isset($nc_p_hover) && $nc_p_hover == "2"}
						{include file="./product-list_hover2.tpl"}
					{/if}
					{if isset($nc_p_hover) && $nc_p_hover == "3"}
						{include file="./product-list_hover3.tpl"}
					{/if}
					{if isset($nc_p_hover) && $nc_p_hover == "4"}
						{include file="./product-list_hover4.tpl"}
					{/if}
				{/if}

{*
				{if isset($ws) && $ws}
					<div id="ws_btns">
						 {if (!isset($product.customization_required) || !$product.customization_required) && ($product.allow_oosp || $product.quantity > 0)}
							{capture}add=1&amp;id_product={$product.id_product|intval}{if isset($product.id_product_attribute) && $product.id_product_attribute}&amp;ipa={$product.id_product_attribute|intval}{/if}{if isset($static_token)}&amp;token={$static_token}{/if}{/capture}
                            <a class="btn btn-primary wishlist_add_to_cart exclusive" href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='advansedwishlist'}" data-id-product-attribute="{$product.id_product_attribute|intval}" data-id-product="{$product.id_product|intval}" data-minimal_quantity="{if isset($product.product_attribute_minimal_quantity) && $product.product_attribute_minimal_quantity >= 1}{$product.product_attribute_minimal_quantity|intval}{else}{$product.minimal_quantity|intval}{/if}">
                                <span>{l s='Add to cart' mod='advansedwishlist'}</span>
                            </a>
						 {else}
                            <span class="button ajax_add_to_cart_button btn btn-default disabled">
                                <span>{l s='Add to cart' mod='advansedwishlist'}</span>
                            </span>
                        {/if}
					</div>
					<div class="clearfix"></div>
				{/if}
*}

			</div><!-- product-container end -->
		</li>
	{/foreach}
	</ul>
{addJsDefL name=min_item}{l s='Please select at least one product' js=1}{/addJsDefL}
{addJsDefL name=max_item}{l s='You cannot add more than %d product(s) to the product comparison' sprintf=$comparator_max_item js=1}{/addJsDefL}
{addJsDef comparator_max_item=$comparator_max_item}
{addJsDef comparedProductsIds=$compared_products}
{/if}
