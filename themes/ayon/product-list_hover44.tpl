sqdqsdqsdqsdqsdq				<div class="left-block">
					<div class="product-image-container">
	 				<div class="functional-buttons">
		 				<div class="button-container">					
						{if ($product.id_product_attribute > 1 && (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
							{if (!$product.allow_oosp && $product.quantity_all_versions <= 0)}
								<a itemprop="url" class="btn_add_cart red_out_stock" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Out of Stock'}">
									<span>{l s='Out of Stock'}</span>
								</a>
							{else}
								<a itemprop="url" class="btn_add_cart" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Select Options'}">
									<span>{l s='Select Options'}</span>
								</a>
							{/if}
						{else}
							{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
								{if ($product.allow_oosp || $product.quantity > 0)}
									{if isset($static_token)}
										<a class="ajax_add_to_cart_button" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
											<span>{l s='Add to Cart'}</span>
										</a>
									{else}
										<a class="ajax_add_to_cart_button" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
											<span>{l s='Add to Cart'}</span>
										</a>
									{/if}						
								{else}
									<a itemprop="url" class="btn_add_cart red_out_stock" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Out of Stock'}">
										<span>{l s='Out of Stock'}</span>
									</a>
								{/if}
							{/if}
						{/if}
						</div>{hook h='displayProductListFunctionalButtons' product=$product}{if isset($comparator_max_item) && $comparator_max_item}<div class="compare">
								<a class="add_to_compare" title="" href="{$product.link|escape:'html':'UTF-8'}" data-id-product="{$product.id_product}"><span>{l s='Compare'}</span></a>
							</div>{/if}{if isset($quick_view) && $quick_view}<div>
	                            <a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}" title="">
	                                <span>{l s='Quick view'}</span>
	                            </a>
							</div>
                        {/if}
					</div>
					{hook h='displayProductListReviews' product=$product}
					
						<a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}">
                    	{if isset($roythemes.nc_count) && $roythemes.nc_count == "1"}
							{if isset($product.specific_prices.to) && isset($product.specific_prices.from)}
                                {if ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $product.specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $product.specific_prices.from) && ($product.specific_prices.to != '0000-00-00 00:00:00')}
                                    <div class="countcontainer">
                                        <div class="roycountdown">
                                            <div class="roycount" style="display: none;" data-specific-price-to="{$product.specific_prices.to}" data-days={l s='Days'} data-hours={l s='Hours'} data-minutes={l s='Mins'} data-seconds={l s='Secs'}></div>
                                        </div>
                                    </div>
                                {elseif ($product.specific_prices.to == '0000-00-00 00:00:00') && ($product.specific_prices.from == '0000-00-00 00:00:00')}
                                    <div class="countcontainer">
                                        <div class="roycountoff">
                                            <span>{l s='Limited Special Offer'}</span>
                                        </div>
                                    </div>
                                {/if}
                            {/if}
            			{/if}
							<img class="first-img replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
	                    {if isset($roythemes.nc_second_img) && $roythemes.nc_second_img == "1"}
                            {assign var="pImages" value=Product::getImagesByID($product.id_product, 2)}{foreach from=$pImages item=image name=images}
                                <img src="{$link->getImageLink($product.link_rewrite, $image, 'home_default')}" {if $smarty.foreach.images.first}class="second-img img-responsive current img_{$smarty.foreach.images.index}"{else} class="img_{$smarty.foreach.images.index}" style="display:none;"{/if} alt="{$product.legend|escape:'htmlall':'UTF-8'}" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if}/>
                            {/foreach}
                        {/if}    
						</a>
						{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
							<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
									<span itemprop="price" class="price product-price" content="{if !$priceDisplay}{$product.price|floatval}{else}{$product.price_tax_exc|floatval}{/if}">
										{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
									</span>
									<meta itemprop="priceCurrency" content="{$currency->iso_code}" />
									{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction}
										<span class="old-price product-price">
											{displayWtPrice p=$product.price_without_reduction}
										</span>
										{if isset($roythemes.nc_pl_red) && $roythemes.nc_pl_red == "1"}
											{if $product.specific_prices.reduction_type == 'percentage'}
												<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
											{/if}
	                                        {if $product.specific_prices.reduction_type == 'amount'}
	                                            <span class="price-percent-reduction">-{convertPrice price=$product.specific_prices.reduction}</span>
	                                        {/if}
                                        {/if}
									{/if}
								{/if}
							</div>
						{/if}
                        {if $product.quantity > 0 || $product.allow_oosp }
                            {if isset($product.new) && $product.new == 1}
                                <span class="new-box">
                                    <span class="new-label">{l s='New'}</span>
                                </span>
                            {/if}
                            {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
                                <span class="sale-box">                                
								{if isset($roythemes.nc_sale) && $roythemes.nc_sale == "2"}
									{if $product.specific_prices.reduction_type == 'percentage'}
										<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
									{/if}
									{if $product.specific_prices.reduction_type == 'amount'}
	                                    <span class="price-percent-reduction">-{convertPrice price=$product.specific_prices.reduction}</span>
	                                {/if}
								{else}
                                    <span class="sale-label">{l s='Sale!'}</span>
                                {/if}
                                </span>
                            {/if}
                        {else}
							{if (!$product.allow_oosp && $product.quantity_all_versions <= 0)}
								<span class="soldout-box">
									<span class="soldout-label">{l s='Out of Stock'}</span>
								</span>
							{/if}
                        {/if}
					</div>
				</div>
				<div class="right-block">
					<h5 itemprop="name">
						{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
						<a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
							{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
						</a>
					</h5>
					<p class="product-desc" itemprop="description">
						{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}
					</p>
					{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
					<div class="content_price">
						{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
								<span class="price product-price">
								{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
							</span>
							{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction}
								<span class="old-price product-price">
									{displayWtPrice p=$product.price_without_reduction}
								</span>								
								{if isset($roythemes.nc_pl_red) && $roythemes.nc_pl_red == "1"}
									{if $product.specific_prices.reduction_type == 'percentage'}
										<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
									{/if}
									{if $product.specific_prices.reduction_type == 'amount'}
	                                    <span class="price-percent-reduction">-{convertPrice price=$product.specific_prices.reduction}</span>
	                                {/if}
                                {/if}
							{/if}
						{/if}
					</div>
					{/if}
					<div class="product-flags">
						{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
							{if isset($product.online_only) && $product.online_only}
								<span class="online_only">{l s='Online only'}</span>
							{/if}
						{/if}
						{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
							{elseif isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
								<span class="discount">{l s='Reduced price!'}</span>
							{/if}
					</div>

				</div>				