<div class="left-block">
   <div class="product-image-container">
      {*                         {if isset($quick_view) && $quick_view}
      <a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}" title="">
      <span>{l s='Quick view'}</span>
      </a>
      {/if} *}
      <a class="product_img_link" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}">
         {if (isset($roythemes.nc_count) && $roythemes.nc_count == "1") || (isset($nc_count) && $nc_count == "1")}
         {if isset($product.specific_prices.to) && isset($product.specific_prices.from)}
         {if ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $product.specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $product.specific_prices.from) && ($product.specific_prices.to != '0000-00-00 00:00:00')}
         {*
         <div class="countcontainer">
            <div class="roycountdown">
               <div class="roycount" style="display: none;" data-specific-price-to="{$product.specific_prices.to}" data-days={l s='Days'} data-hours={l s='Hours'} data-minutes={l s='Mins'} data-seconds={l s='Secs'}>
            </div>
         </div>
   </div>
   {elseif ($product.specific_prices.to == '0000-00-00 00:00:00') && ($product.specific_prices.to == '0000-00-00 00:00:00')}
   <div class="countcontainer">
   <div class="roycountoff">
   <span>{l s='Limited Special Offer'}</span>
   </div>
   </div>
   *}
   {/if}
   {/if}
   {/if}
   <img class="first-img replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}"{if $page_name=='index'} width="152px" height="188px"{/if} itemprop="image" />
    </a>
   {*
   {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
   <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
      <span itemprop="price" class="price product-price" content="{if !$priceDisplay}{$product.price|floatval}{else}{$product.price_tax_exc|floatval}{/if}">
      {if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
      </span>
      <meta itemprop="priceCurrency" content="{$currency->iso_code}" />
      {if $product.price_without_reduction > 0 && isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
      <span class="old-price product-price">
      {displayWtPrice p=$product.price_without_reduction}
      </span>
      {if (isset($roythemes.nc_pl_red) && $roythemes.nc_pl_red == "1") || (isset($nc_pl_red) && $nc_pl_red == "1")}
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
   *}
   {if $product.quantity > 0 || $product.allow_oosp }
   {if isset($product.new) && $product.new == 1}
   <span class="new-box">
   <span class="new-label">{l s='New'}</span>
   </span>
   {/if}
   {if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
   <span class="sale-box">
   {if (isset($roythemes.nc_sale) && $roythemes.nc_sale == "2") || (isset($nc_sale) && $nc_sale == "2")}
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
   <span class="soldout-label">{l s='Sold !'}</span>
   </span>
   {/if}
   {/if}
</div>
</div>
<div class="right-block">
   <div class="functional-buttons">     			
      {hook h='displayProductListFunctionalButtons' product=$product}
      {if isset($comparator_max_item) && $comparator_max_item}
      <div class="compare">
         <a class="add_to_compare hidden-xs hidden-sm" title="" href="{$product.link|escape:'html':'UTF-8'}" data-id-product="{$product.id_product}"><span>{l s='Compare'}</span></a>
      </div>
      {/if}
      <span style="font-size: 9px;font-weight: bold">#{$product.id_product}</span>
   </div>
   {assign var='mp_seller_info' value=WkMpSeller::getSellerByProductId($product.id_product)}
   {assign var='sellerDetail' value= WkMpSeller::getSeller($mp_seller_info, Configuration::get('PS_LANG_DEFAULT'))}
   {assign var='url' value= Context::getContext()->shop->getBaseURL(true)}
   <div class="seller_pdt_list">
         {assign var='count_order' value=WkMpSellerOrder::countTotalOrderValidated(false,$sellerDetail['seller_customer_id'],false)}	
         <a style="text-decoration: underline" id="profileconnect_list" title="{l s='Visit Shop' mod='marketplace'}" href="{$url}tackroom/{$sellerDetail['link_rewrite']}">
         <span>{$sellerDetail['shop_name']|regex_replace:'/#.*/':''|escape:'html':'UTF-8'} 
         	{if $count_order!==0 && $count_order < 5 && $product.quantity > 0 }
         	<img style="width: 10px" src="{$smarty.const._MODULE_DIR_|escape:'htmlall':'UTF-8'}marketplace/libs/rateit/lib/img/trusted.png" />
         	{else if $count_order > 4 && $product.quantity > 0}
         	<img style="width: 10px" src="{$smarty.const._MODULE_DIR_|escape:'htmlall':'UTF-8'}marketplace/libs/rateit/lib/img/trusted_seller.png" />
         	
         {/if}	</span>
         {assign var='reviews' value= WkMpSellerReview::getSellerAvgRating($sellerDetail['id_seller'])}  
 



		 	<div class="row review_product_list">
{if ($reviews) && ($page_name == 'category'|| $page_name == 'index'|| $page_name == 'new-products')}
	
					<div class ="avg_rating">
				
						{for $foo=1 to $reviews}
							<img  src="{$smarty.const._MODULE_DIR_|escape:'htmlall':'UTF-8'}marketplace/libs/rateit/lib/img/star-on.png" />
						{/for}

			
					  	{assign var=j value=5-$reviews}

					  	{for $foo=1 to $j}
					   		<img src="{$smarty.const._MODULE_DIR_|escape:'htmlall':'UTF-8'}marketplace/libs/rateit/lib/img/star-off.png" />					  
					 	{/for}

					</div>


{/if} 
  	</div>

   
         </a>
    
   </div>
   {assign var="manpic" value="img/m/{$product.id_manufacturer}.jpg"}
   <div class="list_man_wrapper"><label class="list_man_logo">
      <a href="{$link->getManufacturerLink($product.id_manufacturer, $product.id_manufacturer->link_rewrite)|escape:'html':'UTF-8'}">
	     <span style="width: 100%;float: left;font-size: 8px" >{$product.manufacturer_name}</span>
      {if file_exists($manpic)}
      <img src="{$content_dir}img/m/{$product.id_manufacturer}-man_default.jpg" />
      {else}<img src="../themes/ayon/img/logo/ttr_round_small.png" />
      {/if}
      </a>
      </label>
   </div>
   <h5 itemprop="name">
      {if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
      <a class="product-name" href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
      {$product.name|truncate:39:'...'|escape:'html':'UTF-8'}
      </a>
   </h5>
{*
   {if isset($mp_seller_info)}
   <div id="sup_details">
      <div id="wk_question_form" style="display: none;">
         <h4>{l s='Write your query' mod='marketplace'}</h4>
         <form id="wk_contact_seller-form" method="post" action="#">
            <div class="form-group">
               <label class="control-label required">{l s='Email' mod='marketplace'}</label>
               <input type="text" name="customer_email" id="customer_email" class="form-control" />
            </div>
            <div class="form-group">
               <label class="control-label required">{l s='Subject' mod='marketplace'}</label>
               <input type="text" name="query_subject" class="form-control" id="query_subject" />
            </div>
            <div class="form-group">
               <label class="control-label required">{l s='Description ' mod='marketplace'}</label>
               <textarea name="query_description" class="form-control" id="query_description" style="height:100px;"></textarea>
            </div>
            <input type="hidden" name="id_seller" value="{if isset($seller_id) && $seller_id}{$seller_id|escape:'htmlall':'UTF-8'}{/if}"/>
            <input type="hidden" name="id_customer" value="{$id_customer|escape:'htmlall':'UTF-8'}"/>
            <input type="hidden" name="id_product" value="{if isset($id_product)}{$id_product|escape:'htmlall':'UTF-8'}{else}0{/if}"/>
            <div class="form-group">
               <div class="contact_seller_message"></div>
            </div>
           	{include file="$self/../../views/templates/front/_partials/mp-form-fields-notification.tpl"} 
            <div class="form-group row">
               <div class="col-xs-6 col-sm-6 col-md-6" style="text-align:left">
                  <button type="button" class="btn wk_btn_cancel wk_btn_extra">
                  {l s='Cancel' mod='marketplace'}
                  </button>
               </div>
               <div class="col-xs-6 col-sm-6 col-md-6 wk_text_right">
                  <button type="submit" class="btn btn-success wk_btn_extra" id="wk_contact_seller" name="wk_contact_seller">
                  {l s='Send' mod='marketplace'}
                  </button>
               </div>
            </div>
         </form>
      </div>
   </div>
   {/if} 
*}	
<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" style="display:none">
   <span itemprop="ratingValue">5</span> 
   <span itemprop="ratingCount">1</span>                                                      
</div>
<meta itemprop="brand" content="{$product.manufacturer_name}">
<meta itemprop="sku" content="{$product.id}" />
<meta itemprop="mpn" content="{$product.reference}" />
<div itemprop="review" itemscope itemtype="http://schema.org/Review" style="display:none">
   <span itemprop="author">{Configuration::get('PS_SHOP_NAME')}</span>,
   <meta itemprop="datePublished" content="{'Y'|date}-{'m'|date}-{'d'|date}">
   <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
      <meta itemprop="worstRating" content="1"/>
      <span itemprop="ratingValue">5</span>/
      <span itemprop="bestRating">5</span>
   </div>
<span itemprop="description"></span>   
</div>
   
   {hook h='displayProductListReviews' product=$product}
   <p class="product-desc" itemprop="description">
      {$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}
   </p>
   {if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
   <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      {if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
          <meta itemprop="priceCurrency" content="{$currency->iso_code}" />
          <link itemprop="availability" {if $product->
            quantity <= 0}href="http://schema.org/OutOfStock"{else}href="http://schema.org/InStock"{/if}>
			<meta itemprop="priceValidUntil" content="{'Y'|date+1}-12-31">
			<meta itemprop="url" content="{$product.link|escape:'html':'UTF-8'}" />					
           {assign var='schemaProductPrice' value=Tools::ps_round(Tools::convertPrice($productPrice, $currency), $priceDisplayPrecision)}
      <span class="price product-price"  itemprop="price" content="{$schemaProductPrice|replace:'.':','}">
      {if !$priceDisplay}{convertPrice price=$product.price|floatval}{else}{convertPrice price=$product.price_tax_exc}{/if}
      </span>
      {if $product.additional_shipping_cost && !Product::GetCarrierwithid($product.id_product) && $product.additional_shipping_cost != '0.00'}
      <span class="shipping_cost">+ {convertPrice price=$product.additional_shipping_cost|number_format} shipping</span>  
      {elseif Product::GetCarrierwithid($product.id_product)}
      <span class="free_tag">Free Shipping</span>    
      {/if}	      
      {if ($product.wholesale_price)!='0'}<span class="retail_price">{convertPrice price=$product.wholesale_price}</span>{/if}
      {if $product.price_without_reduction > 0 && isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
      <span class="old-price product-price">
      {displayWtPrice p=$product.price_without_reduction}
      </span>
      {if (isset($roythemes.nc_pl_red) && $roythemes.nc_pl_red == "1") || (isset($nc_pl_red) && $nc_pl_red == "1")}
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
   			<meta itemprop="description" content="{$product.description|escape:'html':'UTF-8'}" />	
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
   <div class="color-list-container">{$product.color_list}</div>
   {*
   <div class="button-container">
      {if ($product.id_product_attribute > 1 && (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
      {if (!$product.allow_oosp && $product.quantity_all_versions <= 0)}
      <a itemprop="url" class="btn btn-default exclusive btn_add_cart red_out_stock" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Out of Stock'}">
      <span>{l s='Out of Stock'}</span>
      </a>
      {else}
      <a itemprop="url" class="btn btn-default exclusive btn_add_cart" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Select Options'}">
      <span>{l s='Select Options'}</span>
      </a>
      {/if}
      {else}
      {if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
      {if ($product.allow_oosp || $product.quantity > 0)}
      {if isset($static_token)}
      <a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
      <span>{l s='Add to Cart'}</span>
      </a>
      {else}
      <a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart'}" data-id-product="{$product.id_product|intval}">
      <span>{l s='Add to Cart'}</span>
      </a>
      {/if}
      {else}
      <a itemprop="url" class="btn btn-default exclusive btn_add_cart red_out_stock" href="{$product.link|escape:'html':'UTF-8'}" title="{l s='Out of Stock'}">
      <span>{l s='Out of Stock'}</span>
      </a>
      {/if}
      {/if}
      {/if}
   </div>
   *}
</div>