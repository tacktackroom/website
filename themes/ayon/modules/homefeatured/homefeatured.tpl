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

{counter name=active_ul assign=active_ul}
<li class="hfeatured">
{if isset($products) && $products}
    <div class="home_products_title">
        <span>{l s='Recently Sold' mod='homefeatured'}</span>
{* 		<h3 class="undertitle">{l s='These products are in trend this week. Pay attention to them' mod='homefeatured'}</h3> *}
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" class='carousel-home homefeatured tab-pane' id='homefeatured' active=$active_ul}
    </div>
{else}

<ul id="homefeatured" class="carousel-home homefeatured tab-pane{if isset($active_ul) && $active_ul == 1} active{/if}">
	<li class="alert alert-info">{l s='No featured products at this time.' mod='homefeatured'}</li>
</ul>
{/if}
</li>