
<li class="hcc4" data-auto="{$roythemes.nc_auto_custom4}" data-max-slides="{$roythemes.nc_items_custom4}" data-nomargins="{$roythemes.nomargins_custom4}">
{if isset($products) && $products}
    <div class="home_products_title">
        {if RoyHomeCategory4::displayCategoryId() != 1 && RoyHomeCategory4::displayCategoryId() != 2}
            <a href="{$link->getCategoryLink(RoyHomeCategory4::displayCategoryId(), RoyHomeCategory4::displayCategoryLink())}"><span>{RoyHomeCategory4::displayCategoryName()}</span></a>
        {else}
            <span>{RoyHomeCategory4::displayCategoryName()}</span>
        {/if}
		<h3 class="undertitle">{l s='Check our best products' mod='royhomecategory4'}</h3>
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" class="carousel-home {if isset($roythemes.nc_carousel_custom4) && $roythemes.nc_carousel_custom4 == "1"}car-custom4{/if} royhomecategory4 plc_{if isset($roythemes.nc_plc_cc4)}{$roythemes.nc_plc_cc4}{/if} items_{if isset($roythemes.nc_items_custom4)}{$roythemes.nc_items_custom4}{/if} tab-pane" id='royhomecategory4'}
    </div>
{else}
<ul id="royhomecategory4" class="carousel-home royhomecategory4 tab-pane">
	<li class="alert alert-info">{l s='No products at this time.' mod='royhomecategory4'}</li>
</ul>
{/if}
</li>