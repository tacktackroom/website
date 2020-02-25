
{counter name=active_ul assign=active_ul}
<li class="hnew" data-auto="{$roythemes.nc_auto_new}" data-max-slides="{$roythemes.nc_items_new}" data-nomargins="{$roythemes.nomargins_new}">
{if isset($new_products) && $new_products}
    <div class="home_products_title">
        <a href="{$link->getPageLink('new-products')|escape:'html':'UTF-8'}" title="{l s='New listing' mod='roynewproducts'}"><span>{l s='New Arrivals' mod='roynewproducts'}</span></a>
		<h3 class="undertitle">{l s='There are new arrivals! See what our members have in their tackroom!' mod='roynewproducts'}</h3>
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" products=$new_products class="carousel-home {if isset($roythemes.nc_carousel_new) && $roythemes.nc_carousel_new == "1"}car-new{/if} plc_{if isset($roythemes.nc_plc_n)}{$roythemes.nc_plc_n}{/if} items_{if isset($roythemes.nc_items_new)}{$roythemes.nc_items_new}{/if} blocknewproducts tab-pane" id='blocknewproducts' active=$active_ul}
    </div>
{else}
<ul id="blocknewproducts" class="carousel-home blocknewproducts tab-pane{if isset($active_ul) && $active_ul == 1} active{/if}">
	<li class="alert alert-info">{l s='No new products at this time.' mod='roynewproducts'}</li>
</ul>
{/if}
</li>
