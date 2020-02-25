
<li class="hspecials" data-auto="{$roythemes.nc_auto_sale}" data-max-slides="{$roythemes.nc_items_sale}" data-nomargins="{$roythemes.nomargins_sale}">
{if isset($specials) && $specials}
    <div class="home_products_title">
        <a href="{$link->getPageLink('prices-drop')|escape:'html'}" title="{l s='Big Sale' mod='royspecials'}"><span>{l s='Big Sale!' mod='royspecials'}</span></a>
        <h3 class="undertitle">{l s='There are our discounts for this spring! Up to 70%!' mod='royspecials'}</h3>
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" products=$specials class="carousel-home {if isset($roythemes.nc_carousel_sale) && $roythemes.nc_carousel_sale == "1"}car-sale{/if} plc_{if isset($roythemes.nc_plc_s)}{$roythemes.nc_plc_s}{/if} items_{if isset($roythemes.nc_items_sale)}{$roythemes.nc_items_sale}{/if} blockspecials tab-pane" id='royspecials'}
    </div>
{else}
<ul id="blockspecials" class="carousel-home blockspecials tab-pane">
	<li class="alert alert-info">{l s='No special products at this time.' mod='royspecials'}</li>
</ul>
{/if}
</li>
