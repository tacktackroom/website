
<li class="hcc3" data-auto="{$roythemes.nc_auto_custom3}" data-max-slides="{$roythemes.nc_items_custom3}" data-nomargins="{$roythemes.nomargins_custom3}">
{if isset($products) && $products}
    <div class="home_products_title">
        {if RoyHomeCategory3::displayCategoryId() != 1 && RoyHomeCategory3::displayCategoryId() != 2}
            <a href="{$link->getCategoryLink(RoyHomeCategory3::displayCategoryId(), RoyHomeCategory3::displayCategoryLink())}"><span>{RoyHomeCategory3::displayCategoryName()}</span></a>
        {else}
            <span>{RoyHomeCategory3::displayCategoryName()}</span>
        {/if}
		<h3 class="undertitle">{l s='Check our best products' mod='royhomecategory3'}</h3>
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" class="carousel-home {if isset($roythemes.nc_carousel_custom3) && $roythemes.nc_carousel_custom3 == "1"}car-custom3{/if} royhomecategory3 plc_{if isset($roythemes.nc_plc_cc3)}{$roythemes.nc_plc_cc3}{/if} items_{if isset($roythemes.nc_items_custom3)}{$roythemes.nc_items_custom3}{/if} tab-pane" id='royhomecategory3'}
    </div>
{else}
<ul id="royhomecategory3" class="carousel-home royhomecategory3 tab-pane">
	<li class="alert alert-info">{l s='No products at this time.' mod='royhomecategory3'}</li>
</ul>
{/if}
</li>