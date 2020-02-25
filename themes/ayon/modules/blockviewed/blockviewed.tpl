<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block">
	<p class="title_block">{l s='Viewed Products' mod='blockviewed'}</p>
    <div class="block_content products-block">
        <div id="products_viewed" class="">
			{foreach from=$productsViewedObj item=viewedProduct name=myLoop}
				{if $smarty.foreach.myLoop.iteration == 1}<div class="products_box">{/if}
				<div class="products_item clearfix">
					<a
					class="products-block-image" 
					href="{$viewedProduct->product_link|escape:'html':'UTF-8'}" 
					title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}" >
						<img 
						src="{if isset($viewedProduct->id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'small_default')}{else}{$img_prod_dir}{$lang_iso}-default-medium_default.jpg{/if}" 
						alt="{$viewedProduct->legend|escape:'html':'UTF-8'}" />
					</a>
					<div class="product-content">
						<h5>
							<a class="product-name" 
							href="{$viewedProduct->product_link|escape:'html':'UTF-8'}" 
							title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}">
								{$viewedProduct->name|truncate:75:'...'|escape:'html':'UTF-8'}
							</a>
						</h5>
						<p class="product-description">{$viewedProduct->description_short|strip_tags:'UTF-8'|truncate:90}</p>
					</div>
				</div>
			{if $smarty.foreach.myLoop.last}
                </div>
            {else}
                {if $smarty.foreach.myLoop.iteration%2 == 0}
                    </div><div class="products_box">
                {/if}
            {/if}
			{/foreach}
		</div>
	</div>
	{if !$smarty.foreach.myLoop.last}
        </div>
    {/if}
</div>
