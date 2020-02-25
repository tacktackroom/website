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

<li class="hcc1">
{if isset($products) && $products}
    <div class="home_products_title">
        {if RoyHomeCategory1::displayCategoryId() != 1 && RoyHomeCategory1::displayCategoryId() != 2}
            <a href="{$link->getCategoryLink(RoyHomeCategory1::displayCategoryId(), RoyHomeCategory1::displayCategoryLink())}"><span>{RoyHomeCategory1::displayCategoryName()}</span></a>
        {else}
            <span>{RoyHomeCategory1::displayCategoryName()}</span>
        {/if}
		<h3 class="undertitle">Professional tack store!</h3>
    </div>
    <div class="">
	{include file="$tpl_dir./product-list.tpl" class="carousel-home {if isset($roythemes.nc_carousel_featured) && $roythemes.nc_carousel_featured == "1"}car-featured{/if} plc_{if isset($roythemes.nc_plc_f)}{$roythemes.nc_plc_f}{/if} items_{if isset($roythemes.nc_items_featured)}{$roythemes.nc_items_featured}{/if} homefeatured tab-pane" id='homefeatured' active=$active_ul}
    </div>
{else}
<ul id="homefeatured" class="">
	<li class="alert alert-info">{l s='No products at this time.' mod='royhomecategory1'}</li>
</ul>
{/if}
</li>