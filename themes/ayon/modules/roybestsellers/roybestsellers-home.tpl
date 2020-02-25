
{counter name=active_ul assign=active_ul}
<li class="hbest" data-auto="{$roythemes.nc_auto_best}" data-max-slides="{$roythemes.nc_items_best}" data-nomargins="{$roythemes.nomargins_best}">
{if isset($best_sellers) && $best_sellers}
    <div class="home_products_title">
        <a href="{$link->getPageLink('best-sales')|escape:'html':'UTF-8'}" title="{l s='Top sellers' mod='roybestsellers'}"><span>{l s='Top Sellers' mod='roybestsellers'}</span></a>
		<h3 class="undertitle">{l s='There are most popular products! Check the people choice' mod='roybestsellers'}</h3>
    </div>
    <div class="rv_carousel_container">
        {include file="$tpl_dir./product-list.tpl" products=$best_sellers class="carousel-home {if isset($roythemes.nc_carousel_best) && $roythemes.nc_carousel_best == "1"}car-best{/if} plc_{if isset($roythemes.nc_plc_b)}{$roythemes.nc_plc_b}{/if} items_{if isset($roythemes.nc_items_best)}{$roythemes.nc_items_best}{/if} roybestsellers tab-pane" id='roybestsellers' active=$active_ul}
    </div>
{else}
<ul id="roybestsellers" class="carousel-home roybestsellers tab-pane{if isset($active_ul) && $active_ul == 1} active{/if}">
	<li class="alert alert-info">{l s='No best sellers at this time.' mod='roybestsellers'}</li>
</ul>
{/if}
</li>