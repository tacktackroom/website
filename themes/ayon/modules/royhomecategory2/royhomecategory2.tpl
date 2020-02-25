
<li class="hcc2" data-auto="{$roythemes.nc_auto_custom2}" data-max-slides="{$roythemes.nc_items_custom2}" data-nomargins="{$roythemes.nomargins_custom2}">
{if isset($products) && $products}
    <div class="home_products_title">
        {if RoyHomeCategory2::displayCategoryId() != 1 && RoyHomeCategory2::displayCategoryId() != 2}
            <a href="{$link->getCategoryLink(RoyHomeCategory2::displayCategoryId(), RoyHomeCategory2::displayCategoryLink())}"><span>{RoyHomeCategory2::displayCategoryName()}</span></a>
        {else}
            <span>{RoyHomeCategory2::displayCategoryName()}</span>
        {/if}
		<h3 class="undertitle">{l s='Check our best products' mod='royhomecategory2'}</h3>
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" class="carousel-home {if isset($roythemes.nc_carousel_custom2) && $roythemes.nc_carousel_custom2 == "1"}car-custom2{/if} royhomecategory2 plc_{if isset($roythemes.nc_plc_cc2)}{$roythemes.nc_plc_cc2}{/if} items_{if isset($roythemes.nc_items_custom2)}{$roythemes.nc_items_custom2}{/if} tab-pane" id='royhomecategory2'}
    </div>
{else}
<ul id="royhomecategory2" class="carousel-home royhomecategory2 tab-pane">
	<li class="alert alert-info">{l s='No products at this time.' mod='royhomecategory2'}</li>
</ul>
{/if}
</li>