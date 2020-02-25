
{counter name=active_ul assign=active_ul}
<li class="hfeatured" data-auto="{$roythemes.nc_auto_featured}" data-max-slides="{$roythemes.nc_items_featured}" data-nomargins="{$roythemes.nomargins_featured}">
{if isset($products) && $products}
    <div class="home_products_title">
        <a href="https://tacktackroom.com/17-hot-products"><span>{l s='Handpicked Collections' mod='royfeatured'}</span></a>
		<h3 class="undertitle">{l s='These products are trending this week!' mod='royfeatured'}</h3>
    </div>
    <div class="rv_carousel_container">
	{include file="$tpl_dir./product-list.tpl" class="carousel-home {if isset($roythemes.nc_carousel_featured) && $roythemes.nc_carousel_featured == "1"}car-featured{/if} plc_{if isset($roythemes.nc_plc_f)}{$roythemes.nc_plc_f}{/if} items_{if isset($roythemes.nc_items_featured)}{$roythemes.nc_items_featured}{/if} homefeatured tab-pane" id='homefeatured' active=$active_ul}
    </div>
{else}

<ul id="homefeatured" class="carousel-home homefeatured tab-pane{if isset($active_ul) && $active_ul == 1} active{/if}">
	<li class="alert alert-info">{l s='No featured products at this time.' mod='royfeatured'}</li>
</ul>
{/if}
</li>