
<li class="hcc5" data-auto="{$roythemes.nc_auto_custom5}" data-max-slides="{$roythemes.nc_items_custom5}" data-nomargins="{$roythemes.nomargins_custom5}">
{if isset($products) && $products}
    <div class="home_products_title">
        {if RoyHomeCategory5::displayCategoryId() != 1 && RoyHomeCategory5::displayCategoryId() != 2}
            <a href="{$link->getCategoryLink(RoyHomeCategory5::displayCategoryId(), RoyHomeCategory5::displayCategoryLink())}"><span>{RoyHomeCategory5::displayCategoryName()}</span></a>
        {else}
            <span>{RoyHomeCategory5::displayCategoryName()}</span>
        {/if}
        <h3 class="undertitle">{l s='Check our best products' mod='royhomecategory5'}</h3>
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" class="carousel-home {if isset($roythemes.nc_carousel_custom5) && $roythemes.nc_carousel_custom5 == "1"}car-custom5{/if} royhomecategory5 plc_{if isset($roythemes.nc_plc_cc5)}{$roythemes.nc_plc_cc5}{/if} items_{if isset($roythemes.nc_items_custom5)}{$roythemes.nc_items_custom5}{/if} tab-pane" id='royhomecategory5'}
    </div>
{else}
<ul id="royhomecategory5" class="carousel-home royhomecategory5 tab-pane">
	<li class="alert alert-info">{l s='No products at this time.' mod='royhomecategory5'}</li>
</ul>
{/if}
</li>