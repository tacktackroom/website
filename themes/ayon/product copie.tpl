{*
* RoyThemes 2017
*}
{include file="$tpl_dir./errors.tpl"}
{if $errors|@count == 0}
{if !isset($priceDisplayPrecision)}
{assign var='priceDisplayPrecision' value=2}
{/if}
{if !$priceDisplay || $priceDisplay == 2}
{assign var='productPrice' value=$product->getPrice(true, $smarty.const.NULL, $priceDisplayPrecision)}
{assign var='productPriceWithoutReduction' value=$product->getPriceWithoutReduct(false, $smarty.const.NULL)}
{elseif $priceDisplay == 1}
{assign var='productPrice' value=$product->getPrice(false, $smarty.const.NULL, $priceDisplayPrecision)}
{assign var='productPriceWithoutReduction' value=$product->getPriceWithoutReduct(true, $smarty.const.NULL)}
{/if}
<div class="primary_block row" itemscope itemtype="http://schema.org/Product">
   {if isset($adminActionDisplay) && $adminActionDisplay}
   <div id="admin-action">
      <p>{l s='This product is not visible to your customers.'}
         <input type="hidden" id="admin-action-product-id" value="{$product->id}" />
         <input type="submit" value="{l s='Publish'}" name="publish_button" class="exclusive" />
         <input type="submit" value="{l s='Back'}" name="lnk_view" class="exclusive" />
      </p>
      <p id="admin-action-result"></p>
   </div>
   {/if}
   {if isset($confirmation) && $confirmation}
   <p class="confirmation">
      {$confirmation}
   </p>
   {/if}
   <!-- left infos-->
   <div class="pb-left-column {if (isset($roythemes.nc_mobadrag) && $roythemes.nc_mobadrag == "1")}mobadrag{/if} col-xs-12 col-sm-4 col-md-5 {if (isset($roythemes.nc_mobadots) && $roythemes.nc_mobadots == "1")}mobadots{/if} {if (isset($roythemes.nc_mobaarrows) && $roythemes.nc_mobaarrows == "1")}mobaarrows{/if}">
   {if (!isset($roythemes.nc_pp_image)) || (isset($roythemes.nc_pp_image) && $roythemes.nc_pp_image == "1") || (isset($roythemes.nc_pp_image) && $roythemes.nc_pp_image == "2" && isset($images) && count($images) < 2)}
   <!-- product img-->
   <div id="image-block" class="clearfix">
      {if $product->on_sale}
      <span class="sale-box no-print left">
      <span class="sale-label">{l s='Sale!'}</span>
      </span>
      <span class="sale-box no-print">
      <span class="sale-label">
      <div id="reduction_percent" {if !$product->specificPrice || $product->specificPrice.reduction_type != 'percentage'} style="display:none;"{/if}>
      <span id="reduction_percent_display">
      {if $product->specificPrice && $product->specificPrice.reduction_type == 'percentage'}-{$product->specificPrice.reduction*100}%{/if}
      </span>
   </div>
   <div id="reduction_amount" {if !$product->specificPrice || $product->specificPrice.reduction_type != 'amount' || $product->specificPrice.reduction|floatval ==0} style="display:none"{/if}>
   <span id="reduction_amount_display">
   {if $product->specificPrice && $product->specificPrice.reduction_type == 'amount' && $product->specificPrice.reduction|intval !=0}
   -{convertPrice price=$productPriceWithoutReduction-$productPrice|floatval}
   {/if}
   </span>
</div>
</span>
</span>
{elseif $product->specificPrice && $product->specificPrice.reduction && $productPriceWithoutReduction > $productPrice}
<span class="discount">{l s='Reduced price!'}</span>
{/if}
{if $have_image}
<span id="view_full_size">
{if $jqZoomEnabled && $have_image && !$content_only}
<a class="jqzoom" title="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" rel="gal1" href="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'thickbox_default')|escape:'html':'UTF-8'}" itemprop="url">
<img itemprop="image" src="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'large_default')|escape:'html':'UTF-8'}" title="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" alt="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}"/>
</a>
{else}
<img id="bigpic" itemprop="image" src="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'large_default')|escape:'html':'UTF-8'}" title="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" alt="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" width="{$largeSize.width}" height="{$largeSize.height}"/>
{if !$content_only}
<span class="span_link no-print"></span>
{/if}
{/if}
</span>
{else}
<span id="view_full_size">
<img itemprop="image" src="{$img_prod_dir}{$lang_iso}-default-large_default.jpg" id="bigpic" alt="" title="{$product->name|escape:'html':'UTF-8'}" width="{$largeSize.width}" height="{$largeSize.height}"/>
{if !$content_only}
<span class="span_link">
{l s='View larger'}
</span>
{/if}
</span>
{/if}
</div> <!-- end image-block -->
{/if}
{if isset($roythemes.nc_pp_image) && $roythemes.nc_pp_image == "1"}
{if isset($images) && count($images) > 0}
<!-- thumbnails -->
<div id="views_block" class="clearfix {if isset($images) && count($images) < 2}hidden{/if}">
   <div id="thumbs_list">
      <ul id="thumbs_list_frame" class="thumb_slider">
         {if isset($images)}
         {foreach from=$images item=image name=thumbnails}
         {assign var=imageIds value="`$product->id`-`$image.id_image`"}
         {if !empty($image.legend)}
         {assign var=imageTitle value=$image.legend|escape:'html':'UTF-8'}
         {else}
         {assign var=imageTitle value=$product->name|escape:'html':'UTF-8'}
         {/if}
         <li id="thumbnail_{$image.id_image}" data-thumb-order="{$image@index}" {if $smarty.foreach.thumbnails.last} class="last"{/if}>
         <a
         {if $jqZoomEnabled && $have_image && !$content_only}
         href="javascript:void(0);"
         rel="{literal}{{/literal}gallery: 'gal1', smallimage: '{$link->getImageLink($product->link_rewrite, $imageIds, 'large_default')|escape:'html':'UTF-8'}',largeimage: '{$link->getImageLink($product->link_rewrite, $imageIds, 'thickbox_default')|escape:'html':'UTF-8'}'{literal}}{/literal}"
         {else}
         href="{$link->getImageLink($product->link_rewrite, $imageIds, 'thickbox_default')|escape:'html':'UTF-8'}"
         data-fancybox-group="other-views"
         class="fancybox{if $image.id_image == $cover.id_image} shown{/if}"
         {/if}
         title="{$imageTitle}">
         <img class="img-responsive" id="thumb_{$image.id_image}" src="{$link->getImageLink($product->link_rewrite, $imageIds, 'large_default')|escape:'html':'UTF-8'}" alt="{$imageTitle}" title="{$imageTitle}" itemprop="image" />
         </a>
         </li>
         {/foreach}
         {/if}
      </ul>
   </div>
   <!-- end thumbs_list -->
</div>
<!-- end views-block -->
<!-- end thumbnails -->
{/if}
{/if}
{if isset($roythemes.nc_pp_image) && ($roythemes.nc_pp_image == "2" || $roythemes.nc_pp_image == "3")}
{if isset($images) && count($images) > 0}
<!-- big images -->
<div id="views_block" class="clearfix {if isset($images) && count($images) < 2}hidden{/if}">
   <div id="thumbs_list" {if isset($roythemes.nc_pp_image) && $roythemes.nc_pp_image == "3"}data-quantity="{if isset($roythemes.nc_pp_qq3)}{$roythemes.nc_pp_qq3}{/if}" data-loop="{if isset($roythemes.nc_pp_lo3)}{$roythemes.nc_pp_lo3}{/if}" {/if}>
   <ul id="thumbs_big" class="thumb_{if isset($roythemes.nc_pp_image) && $roythemes.nc_pp_image == "2"}2{else}3{/if} {if (isset($roythemes.nc_mobadrag) && $roythemes.nc_mobadrag == "1")}mobadrag{/if}">
   {if isset($images)}
   {foreach from=$images item=image name=thumbnails}
   {assign var=imageIds value="`$product->id`-`$image.id_image`"}
   {if !empty($image.legend)}
   {assign var=imageTitle value=$image.legend|escape:'html':'UTF-8'}
   {else}
   {assign var=imageTitle value=$product->name|escape:'html':'UTF-8'}
   {/if}
   <li id="thumbnail_{$image.id_image}" data-thumb-order="{$image@index}" {if $smarty.foreach.thumbnails.last} class="last"{/if}>
   <a
   {if $jqZoomEnabled && $have_image && !$content_only}
   href="javascript:void(0);"
   rel="{literal}{{/literal}gallery: 'gal1', smallimage: '{$link->getImageLink($product->link_rewrite, $imageIds, 'large_default')|escape:'html':'UTF-8'}',largeimage: '{$link->getImageLink($product->link_rewrite, $imageIds, 'large_default')|escape:'html':'UTF-8'}'{literal}}{/literal}"
   {else}
   href="{$link->getImageLink($product->link_rewrite, $imageIds, 'large_default')|escape:'html':'UTF-8'}"
   data-fancybox-group="other-views"
   class="fancybox{if $image.id_image == $cover.id_image} shown{/if}"
   {/if}
   title="{$imageTitle}">
   <img class="img-responsive" id="thumb_{$image.id_image}" src="{$link->getImageLink($product->link_rewrite, $imageIds, 'large_default')|escape:'html':'UTF-8'}" alt="{$imageTitle}" title="{$imageTitle}" itemprop="image" />
   </a>
   </li>
   {/foreach}
   {/if}
   </ul>
</div>
<!-- end thumbs_list -->
</div> <!-- end views-block -->
<!-- end thumbnails -->
{/if}
{/if}
{if isset($roythemes.nc_pp_col) && $roythemes.nc_pp_col == "1"} <!-- Layout 1 -->
{if !$content_only}
<!-- usefull links-->
<ul id="usefull_link_block" class="clearfix no-print">
   {hook h="displaySocialSharing"}
   {if $HOOK_EXTRA_LEFT}{$HOOK_EXTRA_LEFT}{/if}
   {if isset($roythemes.pp_display_print) && $roythemes.pp_display_print == "1"}
   <li class="print">
      <a href="javascript:print();">
      <i></i><span>{l s='Print'}</span>
      </a>
   </li>
   {/if}
   {if $have_image && !$jqZoomEnabled}{/if}
</ul>
{/if}
{if isset($HOOK_EXTRA_RIGHT) && $HOOK_EXTRA_RIGHT}{$HOOK_EXTRA_RIGHT}{/if}
{/if} <!-- /Layout 1 -->
</div> <!-- end pb-left-column -->
<!-- end left infos-->
<!-- center infos -->
<div class="pb-center-column col-xs-7 col-sm-7 {if (isset($roythemes.nc_pp_st) && $roythemes.nc_pp_st == "1") && (isset($roythemes.nc_pp_image) && $roythemes.nc_pp_image !== "3")}pp_stick{/if}">
<div class="stick_inside {if (isset($roythemes.nc_pp_st) && $roythemes.nc_pp_st == "1") && (isset($roythemes.nc_pp_image) && $roythemes.nc_pp_image !== "3")}pp_stick_it{/if}">
<!-- <div class="main-column {if isset($roythemes.nc_pp_st) && $roythemes.nc_pp_st == "1"}pp_stick_it{/if}"> -->
<!-- Navigation
   {if empty($content_only)} 
       <div class="product-navigation">
           {if $prev_product}
               <a title="{$prev_product.name}" class="product-prev" href="{$link->getProductLink($prev_product.id_product, $prev_product.link_rewrite)}"><div class="pn_image"><img src="{$link->getImageLink($prev_product.link_rewrite, $prev_product.image, 'small_default')|escape:'html':'UTF-8'}" title="{$next_product.name}" /></div></a>
           {/if}
           {if $next_product}
               <a title="{$next_product.name}" class="product-next" style="float:right" href="{$link->getProductLink($next_product.id_product, $next_product.link_rewrite)}"><div class="pn_image"><img src="{$link->getImageLink($next_product.link_rewrite, $next_product.image, 'small_default')|escape:'html':'UTF-8'}" /><span>{$next_product.name}</span></div></a>
   
           {/if}
       </div>
   {/if}
   Navigation -->
{if isset($roythemes.nc_pp_col) && $roythemes.nc_pp_col == "3"} <!-- layout 3 -->
{if isset($roythemes.pp_reviews_display_top) && $roythemes.pp_reviews_display_top == "1"}
{if isset($nbComments) && $nbComments > 0}
<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
   <div class="star_content clearfix">
      {section name="i" start=0 loop=5 step=1}
      {if $smarty.section.i.index lt round($ratings.avg)}
      <div class="star star_on"></div>
      {else}
      <div class="star"></div>
      {/if}
      {/section}
      <meta itemprop="worstRating" content = "0" />
      <meta itemprop="ratingValue" content = "{if isset($ratings.avg)}{$ratings.avg|round:1|escape:'html':'UTF-8'}{else}{$averageTotal|round:1|escape:'html':'UTF-8'}{/if}" />
      <meta itemprop="bestRating" content = "5" />
      {if empty($content_only)} <!-- Not in Quick View -->
      {if $nbComments != 0}
      <span class="li">
      <a href="#idTab5" class="reviews">
      {l s='Read reviews'} (<span itemprop="reviewCount">{$nbComments}</span>)
      </a>
      </span>
      {/if}
      {if ($too_early == false AND ($is_logged OR $allow_guests))}
      <span class="li">
      <a class="open-comment-form" href="#new_comment_form">
      {l s='Write a review'}
      </a>
      </span>
      {/if}
      {/if}
   </div>
</div>
{/if}
{/if}
{/if} <!-- layout 3 -->
{if $product_manufacturer->id}
<A style="    WIDTH: 100%;
   float: left;" href="{$link->getmanufacturerLink($product_manufacturer->id_manufacturer, $product_manufacturer->link_rewrite)}">
<IMG style="width: 100px"src="{$img_manu_dir}{$product_manufacturer->id}-pdt_page.jpg" class="logo_manufacturer" title="{$product_manufacturer->name}" alt="{$product_manufacturer->name}" /></A>
{/if}
<h1 itemprop="name">{$product->name|escape:'html':'UTF-8'}</h1>
{if isset($roythemes.nc_pp_col) && ($roythemes.nc_pp_col == "1" || $roythemes.nc_pp_col == "4" || $roythemes.nc_pp_col == "5")} <!-- layout 1 -->
<div class="box-info-product">
   <div class="content_prices clearfix">
      {if $product->show_price && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
      <!-- prices -->
      <div class="price">
         <div class="our_price_display" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <link itemprop="availability" {if $product->
            quantity <= 0}href="http://schema.org/OutOfStock"{else}href="http://schema.org/InStock"{/if}>
            {if $priceDisplay >= 0 && $priceDisplay <= 2}
            {assign var='schemaProductPrice' value=Tools::ps_round(Tools::convertPrice($productPrice, $currency), $priceDisplayPrecision)}
            <span id="our_price_display" class="price" itemprop="price" content="{$schemaProductPrice|replace:'.':','}">{convertPrice price=$productPrice|floatval}</span>
            <!--{if $tax_enabled  && ((isset($display_tax_label) && $display_tax_label == 1) || !isset($display_tax_label))}
               {if $priceDisplay == 1}{l s='tax excl.'}{else}{l s='tax incl.'}{/if}
               {/if}-->
            <meta itemprop="priceCurrency" content="{$currency->iso_code}" />
            {/if}
         </div>
         <div id="old_price"{if (!$product->specificPrice || !$product->specificPrice.reduction)} class="hidden"{/if}>{strip}
         {if $priceDisplay >= 0 && $priceDisplay <= 2}
         {hook h="displayProductPriceBlock" product=$product type="old_price"}
         <span id="old_price_display"><span class="price">{if $productPriceWithoutReduction > $productPrice}{convertPrice price=$productPriceWithoutReduction|floatval}{/if}</span>{if $productPriceWithoutReduction > $productPrice && $tax_enabled && $display_tax_label == 1} {if $priceDisplay == 1}{l s='tax excl.'}{else}{l s='tax incl.'}{/if}{/if}</span>
         {/if}
         {/strip}
      </div>
      {if $priceDisplay == 2}
      <br />
      <span id="pretaxe_price">
      <span id="pretaxe_price_display">{convertPrice price=$product->getPrice(false, $smarty.const.NULL)}</span>
      {l s='tax excl.'}
      </span>
      {/if}
   </div>
   <!-- end prices -->
   {hook h="displayProductAfterPrice"}
   {if $packItems|@count && $productPrice < $product->getNoPackPrice()}
   <p class="pack_price">{l s='Instead of'} <span style="text-decoration: line-through;">{convertPrice price=$product->getNoPackPrice()}</span></p>
   {/if}
   {if $product->ecotax != 0}
   <p class="price-ecotax">{l s='Include'} <span id="ecotax_price_display">{if $priceDisplay == 2}{$ecotax_tax_exc|convertAndFormatPrice}{else}{$ecotax_tax_inc|convertAndFormatPrice}{/if}</span> {l s='For green tax'}
      {if $product->specificPrice && $product->specificPrice.reduction}
      <br />{l s='(not impacted by the discount)'}
      {/if}
   </p>
   {/if}
   {if !empty($product->unity) && $product->unit_price_ratio > 0.000000}
   {math equation="pprice / punit_price"  pprice=$productPrice  punit_price=$product->unit_price_ratio assign=unit_price}
   <p class="unit-price"><span id="unit_price_display">{convertPrice price=$unit_price}</span> {l s='per'} {$product->unity|escape:'html':'UTF-8'}</p>
   {/if}
   {/if} {*close if for show price*}
   <div class="clear"></div>
</div>
<!-- end content_prices -->
{if isset($product->specificPrice.to) && isset($product->specificPrice.from)}
{if ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $product->specificPrice.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $product->specificPrice.from) && ($product->specificPrice.to != '0000-00-00 00:00:00')}
<div class="product_count_block">
   <div class="countcontainer">
      <div class="roycounttitle">
         <span>{l s='Limited Special Offer! Expires in:'}</span>
      </div>
      <div class="roycountdown">
         <div class="roycount" style="display: none;" data-specific-price-to="{$product->specificPrice.to}" data-days={l s='Days'} data-hours={l s='Hours'} data-minutes={l s='Minutes'} data-seconds={l s='Seconds'}>
      </div>
   </div>
</div>
</div>
{elseif ($product->specificPrice.to == '0000-00-00 00:00:00') && ($product->specificPrice.from == '0000-00-00 00:00:00')}
<div class="product_count_block">
   <div class="countcontainer">
      <div class="roycountoff">
         <span>{l s='Limited Special Offer!'}</span>
      </div>
   </div>
</div>
{/if}
{/if}
</div>
{/if} <!-- /layout 1 -->
<div id="features_productpage">
   <table class="table-data-sheet">
      {foreach from=$features item=feature}
      {assign var="img" value="{$img_ps_dir}pdt/{$feature.name|escape:'html':'UTF-8'}.png"}                                   
      <tr class="{cycle values="odd,even"}">
      {if isset($feature.value)}
      <td><img class="pdt_icon" src="{if ($feature.name|escape:'html':'UTF-8')=="Flap Size Width" || ($feature.name|escape:'html':'UTF-8')=="Flap Size Length"|| ($feature.name|escape:'html':'UTF-8')=="Tree Size Dot To Dot"|| ($feature.name|escape:'html':'UTF-8')=="Block"|| ($feature.name|escape:'html':'UTF-8')=="integrated Panels"}{$img_ps_dir}pdt/saddle.png{else}{$img}{/if}">{$feature.name|escape:'html':'UTF-8'}</td>
      <td>{$feature.value|escape:'html':'UTF-8'}</td>
      {/if}
      </tr>
      {/foreach}
      <tr class="{cycle values="odd,even"}">
      {if isset($feature.value)}
      <td>{l s='Brand '}</td>
      <td> {$product->manufacturer_name|escape:'htmlall':'UTF-8'}</td>
      {/if}
      </tr>                                  
   </table>
</div>
{if isset($mp_seller_info) && isset($WK_MP_SELLER_DETAILS_ACCESS_9)}
<p>
   <label style="font-family: Pacifico!important;font-size: 13px">{l s='Sold By' mod='marketplace'}:</label>
   <a id="profileconnect" title="{l s='Visit Shop' mod='marketplace'}" target="_blank" href="{$shopstore_link|escape:'htmlall':'UTF-8'}">
   <span style="color:#F4157E">{$mp_seller_info.shop_name|escape:'htmlall':'UTF-8'}</span>
   </a>
   {if isset($WK_MP_SELLER_DETAILS_ACCESS_7)}
   <span id="seller_rating"></span>
   {/if}
</p>
<a href="#wk_question_form" class="wk_anchor_links open-question-form" title="{l s='Contact Seller' mod='marketplace'}">
   <div class="wk_profile_left_display_contact">
      <span>
      <i class="icon-envelope"></i> {l s='Contact Seller' mod='marketplace'}
      </span>
   </div>
</a>
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
      <input type="hidden" name="id_seller" value="{$seller_id|escape:'htmlall':'UTF-8'}"/>
      <input type="hidden" name="id_customer" value="{$id_customer|escape:'htmlall':'UTF-8'}"/>
      <input type="hidden" name="id_product" value="{if isset($id_product)}{$id_product|escape:'htmlall':'UTF-8'}{else}0{/if}"/>
      <div class="form-group">
         <div class="contact_seller_message"></div>
      </div>
      {* 		{include file="$self/../../views/templates/front/_partials/mp-form-fields-notification.tpl"} *}
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
{/if}
</div>
<div id="features_productpage_xs">
   <ul class="details_pdt_xs">
      <li>
         <a><span>See details</span></a>
         <ul class="details_show effect7" style="display: none;">
            <table class="table-data-sheet">
               {foreach from=$features item=feature}
               {assign var="img" value="{$img_ps_dir}pdt/{$feature.name|escape:'html':'UTF-8'}.png"}                                   
               <tr class="{cycle values="odd,even"}">
               {if isset($feature.value)}
               <td><img class="pdt_icon" src="{if ($feature.name|escape:'html':'UTF-8')=="Flap Size Width" || ($feature.name|escape:'html':'UTF-8')=="Flap Size Length"|| ($feature.name|escape:'html':'UTF-8')=="Tree Size Dot To Dot"|| ($feature.name|escape:'html':'UTF-8')=="Block"|| ($feature.name|escape:'html':'UTF-8')=="integrated Panels"}{$img_ps_dir}pdt/saddle.png{else}{$img}{/if}">{$feature.name|escape:'html':'UTF-8'}</td>
               <td>{$feature.value|escape:'html':'UTF-8'}</td>
               {/if}
               </tr>
               {/foreach}
               <tr class="{cycle values="odd,even"}">
               {if isset($feature.value)}
               <td>{l s='Brand '}</td>
               <td> {$product->manufacturer_name|escape:'htmlall':'UTF-8'}</td>
               {/if}
               </tr>                                  
            </table>
         </ul>
      </li>
   </ul>
</div>
</div>
{if isset($roythemes.nc_pp_col) && $roythemes.nc_pp_col == "3"} <!-- layout 3 -->
<div class="box-info-product">
   <div class="content_prices clearfix">
      {if $product->show_price && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
      {hook h="displayProduct"}
      {if $packItems|@count && $productPrice < $product->getNoPackPrice()}
      <p class="pack_price">{l s='Instead of'} <span style="text-decoration: line-through;">{convertPrice price=$product->getNoPackPrice()}</span></p>
      {/if}
      {if $product->ecotax != 0}
      <p class="price-ecotax">{l s='Include'} <span id="ecotax_price_display">{if $priceDisplay == 2}{$ecotax_tax_exc|convertAndFormatPrice}{else}{$ecotax_tax_inc|convertAndFormatPrice}{/if}</span> {l s='For green tax'}
         {if $product->specificPrice && $product->specificPrice.reduction}
         <br />{l s='(not impacted by the discount)'}
         {/if}
      </p>
      {/if}
      {if !empty($product->unity) && $product->unit_price_ratio > 0.000000}
      {math equation="pprice / punit_price"  pprice=$productPrice  punit_price=$product->unit_price_ratio assign=unit_price}
      <p class="unit-price"><span id="unit_price_display">{convertPrice price=$unit_price}</span> {l s='per'} {$product->unity|escape:'html':'UTF-8'}</p>
      {/if}
      {/if} {*close if for show price*}
      <div class="clear"></div>
   </div>
   <!-- end content_prices -->
   {if isset($product->specificPrice.to) && isset($product->specificPrice.from)}
   {if ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $product->specificPrice.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $product->specificPrice.from) && ($product->specificPrice.to != '0000-00-00 00:00:00')}
   <div class="product_count_block">
      <div class="countcontainer">
         <div class="roycounttitle">
            <span>{l s='Limited Special Offer! Expires in:'}</span>
         </div>
         <div class="roycountdown">
            <div class="roycount" style="display: none;" data-specific-price-to="{$product->specificPrice.to}" data-days={l s='Days'} data-hours={l s='Hours'} data-minutes={l s='Minutes'} data-seconds={l s='Seconds'}>
         </div>
      </div>
   </div>
</div>
{elseif ($product->specificPrice.to == '0000-00-00 00:00:00') && ($product->specificPrice.from == '0000-00-00 00:00:00')}
<div class="product_count_block">
   <div class="countcontainer">
      <div class="roycountoff">
         <span>{l s='Limited Special Offer!'}</span>
      </div>
   </div>
</div>
{/if}
{/if}
</div>
{/if} <!-- /layout 3 -->
{if isset($roythemes.nc_pp_col) && ($roythemes.nc_pp_col == "1" || $roythemes.nc_pp_col == "2" || $roythemes.nc_pp_col == "4" || $roythemes.nc_pp_col == "5")} <!-- layout 1,2 -->
{if isset($roythemes.pp_reviews_display_top) && $roythemes.pp_reviews_display_top == "1"}
{if isset($nbComments) && $nbComments > 0}
<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
   <div class="star_content clearfix">
      {section name="i" start=0 loop=5 step=1}
      {if $smarty.section.i.index lt round($ratings.avg)}
      <div class="star star_on"></div>
      {else}
      <div class="star"></div>
      {/if}
      {/section}
      <meta itemprop="worstRating" content = "0" />
      <meta itemprop="ratingValue" content = "{if isset($ratings.avg)}{$ratings.avg|round:1|escape:'html':'UTF-8'}{else}{$averageTotal|round:1|escape:'html':'UTF-8'}{/if}" />
      <meta itemprop="bestRating" content = "5" />
      {if empty($content_only)} <!-- Not in Quick View -->
      {if $nbComments != 0}
      <span class="li">
      <a href="#idTab5" class="reviews">
      {l s='Read reviews'} (<span itemprop="reviewCount">{$nbComments}</span>)
      </a>
      </span>
      {/if}
      {if ($too_early == false AND ($is_logged OR $allow_guests))}
      <span class="li">
      <a class="open-comment-form" href="#new_comment_form">
      {l s='Write a review'}
      </a>
      </span>
      {/if}
      {/if}
   </div>
</div>
{/if}
{/if}
{/if} <!-- layout 1,2 -->
{if $product->description_short || $packItems|@count > 0}
<div id="short_description_block">
   {if $product->description_short}
   <div id="short_description_content" class="rte align_justify" itemprop="description">{$product->description_short}</div>
   {/if}
   {if $product->description}
   <p class="buttons_bottom_block">
      <a href="javascript:{ldelim}{rdelim}" class="button">
      {l s='More details'}
      </a>
   </p>
   {/if}
   {if $packItems|@count > 0}
   <div class="short_description_pack">
      <h3>{l s='Pack content'}</h3>
      {foreach from=$packItems item=packItem}
      <div class="pack_content">
         {$packItem.pack_quantity} x <a href="{$link->getProductLink($packItem.id_product, $packItem.link_rewrite, $packItem.category)|escape:'html':'UTF-8'}">{$packItem.name|escape:'html':'UTF-8'}</a>
         <p>{$packItem.description_short}</p>
      </div>
      {/foreach}
   </div>
   {/if}
</div>
<!-- end short_description_block -->
{/if}
<div class="product_attributes clearfix">
   <!-- not Layout 4 and 5 -->
   {if isset($roythemes.nc_pp_col) && $roythemes.nc_pp_col !== "4" && $roythemes.nc_pp_col !== "5"}
   {if $product->online_only}
   <p class="online_only"><label>{l s='Status '} </label><span>{l s='Online only'}</span></p>
   {/if}
   {if isset($roythemes.nc_man_text) && $roythemes.nc_man_text == "1"}
   {*
   <p id="product_manufacturer" {if !$product->id_manufacturer} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Brand '} </label>
   <span class="editable">
   {if !$content_only}<a href="{$link->getManufacturerLink($product->id_manufacturer)}" title="View all products">{/if}
   {$product->manufacturer_name|escape:'htmlall':'UTF-8'}
   {if !$content_only}
   {if isset($roythemes.nc_man_logo) && $roythemes.nc_man_logo == "1"}
   {assign var="manpic" value="img/m/{$product_manufacturer->id_manufacturer}.jpg"}
   {if file_exists($manpic)}
   <label class="product_manufacturer_logo">
   <img src="{$content_dir}img/m/{$product_manufacturer->id_manufacturer}-man_default.jpg" />
   </label>
   {/if}
   {/if}
   {/if}
   {if !$content_only}</a>{/if}
   </span>
   </p>
   *}
   {/if}
   {if isset($roythemes.pp_display_refer) && $roythemes.pp_display_refer == "1"}
   <p id="product_reference"{if empty($product->reference) || !$product->reference} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Product Code '} </label>
   <span class="editable" itemprop="sku">{if !isset($groups)}{$product->reference|escape:'html':'UTF-8'}{/if}</span>
   </p>
   {/if}
   {if isset($roythemes.pp_display_avail) && $roythemes.pp_display_avail == "1"}
   {if $PS_STOCK_MANAGEMENT}
   <!-- availability -->
   <p id="availability_statut"{if ($product->quantity <= 0 && !$product->available_later && $allow_oosp) || ($product->quantity > 0 && !$product->available_now) || !$product->available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Availability '} </label>
   <span id="availability_value"{if $product->quantity <= 0} class="warning_inline"{/if}>{if $product->quantity <= 0}{if $allow_oosp}{$product->available_later}{else}{l s='This product is no longer in stock'}{/if}{else}{$product->available_now}{/if}</span>
   </p>
   {/if}
   {/if}
   {if isset($roythemes.pp_display_q) && $roythemes.pp_display_q == "1"}
   {if ($display_qties == 1 && !$PS_CATALOG_MODE && $PS_STOCK_MANAGEMENT && $product->available_for_order)}
   <!-- number of item in stock -->
   <p id="pQuantityAvailable"{if $product->quantity <= 0} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Quantity '} </label>
   <span id="quantityAvailable">{$product->quantity|intval}</span>
   <span {if $product->quantity > 1} style="display: none;"{/if} id="quantityAvailableTxt">{l s='Item'}</span>
   <span {if $product->quantity == 1} style="display: none;"{/if} id="quantityAvailableTxtMultiple">{l s='Items'}</span>
   </p>
   {/if}
   {/if}
   {if $PS_STOCK_MANAGEMENT}
   {if !$product->is_virtual}{hook h="displayProductDeliveryTime" product=$product}{/if}
   <p class="warning_inline" id="last_quantities"{if ($product->quantity > $last_qties || $product->quantity <= 0) || $allow_oosp || !$product->available_for_order || $PS_CATALOG_MODE} style="display: none"{/if} >{l s='Warning: Last items in stock!'}</p>
   {/if}
   <p id="availability_date"{if ($product->quantity > 0) || !$product->available_for_order || $PS_CATALOG_MODE || !isset($product->available_date) || $product->available_date < $smarty.now|date_format:'%Y-%m-%d'} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Availability date '} </label>
   <span id="availability_date_value">{dateFormat date=$product->available_date full=false}</span>
   </p>
   {if isset($roythemes.pp_display_cond) && $roythemes.pp_display_cond == "1"}
   {capture name=condition}
   {if $product->condition == 'new'}{l s='New'}
   {elseif $product->condition == 'used'}{l s='Used'}
   {elseif $product->condition == 'refurbished'}{l s='Refurbished'}
   {/if}
   {/capture}
   <p id="product_condition"{if !$product->condition} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Condition '} </label>
   <span class="editable" itemprop="condition">{$smarty.capture.condition}</span>
   </p>
   {/if}
   {if isset($roythemes.nc_pp_col) && $roythemes.nc_pp_col == "3"} <!-- Layout 3 usefull -->
   {if !$content_only}
   <!-- usefull links-->
   <div class="usefull_share">
      <label>{l s='Share '} </label>
      <ul id="usefull_link_block" class="no-print">
         {hook h="displaySocialSharing"}
      </ul>
   </div>
   {/if}
   {/if} <!-- /Layout 3 usefull -->
   {/if} <!-- /not Layout 4 -->
   <!-- Out of stock hook -->
   <div id="oosHook"{if $product->quantity > 0} style="display: none;"{/if}>
   {$HOOK_PRODUCT_OOS}
</div>
{if isset($groups)}
<!-- attributes -->
<div id="attributes">
   <div class="clearfix"></div>
   {foreach from=$groups key=id_attribute_group item=group}
   {if $group.attributes|@count}
   <fieldset class="attribute_fieldset">
      <label class="attribute_label" {if $group.group_type != 'color' && $group.group_type != 'radio'}for="group_{$id_attribute_group|intval}"{/if}>{$group.name|escape:'html':'UTF-8'} :&nbsp;</label>
      {assign var="groupName" value="group_$id_attribute_group"}
      <div class="attribute_list">
         {if ($group.group_type == 'select')}
         <select name="{$groupName}" id="group_{$id_attribute_group|intval}" class="form-control attribute_select no-print">
         {foreach from=$group.attributes key=id_attribute item=group_attribute}
         <option value="{$id_attribute|intval}"{if (isset($smarty.get.$groupName) && $smarty.get.$groupName|intval == $id_attribute) || $group.default == $id_attribute} selected="selected"{/if} title="{$group_attribute|escape:'html':'UTF-8'}">{$group_attribute|escape:'html':'UTF-8'}</option>
         {/foreach}
         </select>
         {elseif ($group.group_type == 'color')}
         <ul id="color_to_pick_list" class="clearfix">
            {assign var="default_colorpicker" value=""}
            {foreach from=$group.attributes key=id_attribute item=group_attribute}
            <li{if $group.default == $id_attribute} class="selected"{/if}>
            <a href="{$link->getProductLink($product)|escape:'html':'UTF-8'}" id="color_{$id_attribute|intval}" name="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" class="color_pick{if ($group.default == $id_attribute)} selected{/if}" style="background: {$colors.$id_attribute.value|escape:'html':'UTF-8'};" title="">
            {if file_exists($col_img_dir|cat:$id_attribute|cat:'.jpg')}
            <img src="{$img_col_dir}{$id_attribute|intval}.jpg" alt="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" width="20" height="20" />
            {/if}
            <label>{$colors.$id_attribute.name|escape:'html':'UTF-8'}</label>
            </a>
            </li>
            {if ($group.default == $id_attribute)}
            {$default_colorpicker = $id_attribute}
            {/if}
            {/foreach}
         </ul>
         <input type="hidden" class="color_pick_hidden" name="{$groupName|escape:'html':'UTF-8'}" value="{$default_colorpicker|intval}" />
         {elseif ($group.group_type == 'radio')}
         <ul>
            {foreach from=$group.attributes key=id_attribute item=group_attribute}
            <li>
               <input type="radio" class="attribute_radio" name="{$groupName|escape:'html':'UTF-8'}" value="{$id_attribute}" {if ($group.default == $id_attribute)} checked="checked"{/if} />
               <span>{$group_attribute|escape:'html':'UTF-8'}</span>
            </li>
            {/foreach}
         </ul>
         {/if}
      </div>
      <!-- end attribute_list -->
   </fieldset>
   {/if}
   {/foreach}
</div>
<!-- end attributes -->
{/if}
{if isset($roythemes.nc_pp_col) && $roythemes.nc_pp_col == "2"} <!-- 2 layout -->
<div class="box-info-product">
   <div class="content_prices clearfix">
      {if $product->show_price && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
      <!-- prices -->
      <div class="price">
         <div class="our_price_display" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <link itemprop="availability" {if $product->
            quantity <= 0}href="http://schema.org/OutOfStock"{else}href="http://schema.org/InStock"{/if}>
            {if $priceDisplay >= 0 && $priceDisplay <= 2}
            {assign var='schemaProductPrice' value=Tools::ps_round(Tools::convertPrice($productPrice, $currency), $priceDisplayPrecision)}
            <span id="our_price_display" class="price" itemprop="price" content="{$schemaProductPrice|replace:'.':','}">{convertPrice price=$productPrice|floatval}</span>
            <!--{if $tax_enabled  && ((isset($display_tax_label) && $display_tax_label == 1) || !isset($display_tax_label))}
               {if $priceDisplay == 1}{l s='tax excl.'}{else}{l s='tax incl.'}{/if}
               {/if}-->
            <meta itemprop="priceCurrency" content="{$currency->iso_code}" />
            {/if}
         </div>
         <div id="old_price"{if (!$product->specificPrice || !$product->specificPrice.reduction)} class="hidden"{/if}>{strip}
         {if $priceDisplay >= 0 && $priceDisplay <= 2}
         {hook h="displayProductPriceBlock" product=$product type="old_price"}
         <span id="old_price_display"><span class="price">{if $productPriceWithoutReduction > $productPrice}{convertPrice price=$productPriceWithoutReduction|floatval}{/if}</span>{if $productPriceWithoutReduction > $productPrice && $tax_enabled && $display_tax_label == 1} {if $priceDisplay == 1}{l s='tax excl.'}{else}{l s='tax incl.'}{/if}{/if}</span>
         {/if}
         {/strip}
      </div>
      {if $priceDisplay == 2}
      <br />
      <span id="pretaxe_price">
      <span id="pretaxe_price_display">{convertPrice price=$product->getPrice(false, $smarty.const.NULL)}</span>
      {l s='tax excl.'}
      </span>
      {/if}
   </div>
   <!-- end prices -->
   {if $packItems|@count && $productPrice < $product->getNoPackPrice()}
   <p class="pack_price">{l s='Instead of'} <span style="text-decoration: line-through;">{convertPrice price=$product->getNoPackPrice()}</span></p>
   {/if}
   {if $product->ecotax != 0}
   <p class="price-ecotax">{l s='Include'} <span id="ecotax_price_display">{if $priceDisplay == 2}{$ecotax_tax_exc|convertAndFormatPrice}{else}{$ecotax_tax_inc|convertAndFormatPrice}{/if}</span> {l s='For green tax'}
      {if $product->specificPrice && $product->specificPrice.reduction}
      <br />{l s='(not impacted by the discount)'}
      {/if}
   </p>
   {/if}
   {if !empty($product->unity) && $product->unit_price_ratio > 0.000000}
   {math equation="pprice / punit_price"  pprice=$productPrice  punit_price=$product->unit_price_ratio assign=unit_price}
   <p class="unit-price"><span id="unit_price_display">{convertPrice price=$unit_price}</span> {l s='per'} {$product->unity|escape:'html':'UTF-8'}</p>
   {/if}
   {/if} {*close if for show price*}
   <div class="clear"></div>
</div>
<!-- end content_prices -->
{hook h="displayProductAfterPrice"}
{if isset($product->specificPrice.to) && isset($product->specificPrice.from)}
{if ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $product->specificPrice.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $product->specificPrice.from) && ($product->specificPrice.to != '0000-00-00 00:00:00')}
<div class="product_count_block">
   <div class="countcontainer">
      <div class="roycounttitle">
         <span>{l s='Limited Special Offer! Expires in:'}</span>
      </div>
      <div class="roycountdown">
         <div class="roycount" style="display: none;" data-specific-price-to="{$product->specificPrice.to}" data-days={l s='Days'} data-hours={l s='Hours'} data-minutes={l s='Minutes'} data-seconds={l s='Seconds'}>
      </div>
   </div>
</div>
</div>
{elseif ($product->specificPrice.to == '0000-00-00 00:00:00') && ($product->specificPrice.from == '0000-00-00 00:00:00')}
<div class="product_count_block">
   <div class="countcontainer">
      <div class="roycountoff">
         <span>{l s='Limited Special Offer!'}</span>
      </div>
   </div>
</div>
{/if}
{/if}
</div>
{/if} <!-- /2 layout -->
<!-- quantity wanted -->
{hook h="displayProductBeforeBuy"}
{if !$PS_CATALOG_MODE}
{if ($product->show_price && !isset($restricted_country_mode)) || isset($groups) || $product->reference || (isset($HOOK_PRODUCT_ACTIONS) && $HOOK_PRODUCT_ACTIONS)}
<form id="buy_block" {if $PS_CATALOG_MODE && !isset($groups) && $product->quantity > 0}class="hidden"{/if} action="{$link->getPageLink('cart')|escape:'html':'UTF-8'}" method="post">
<!-- hidden datas -->
<p class="hidden">
   <input type="hidden" name="token" value="{$static_token}" />
   <input type="hidden" name="id_product" value="{$product->id|intval}" id="product_page_product_id" />
   <input type="hidden" name="add" value="1" />
   <input type="hidden" name="id_product_attribute" id="idCombination" value="" />
</p>
<div class="buy_container">
   {*
   <div id="quantity_wanted_p"{if (!$allow_oosp && $product->quantity <= 0) || !$product->available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
   <label>{l s='Quantity :'}</label>
   {if isset($roythemes.nc_pp_q) && ($roythemes.nc_pp_q == "2")}
   <div class="down_container">
      <a href="#" data-field-qty="qty" class="pm button-plus product_quantity_down">
      <span><i class="icon-angle-down"></i></span>
      </a>
   </div>
   {/if}
   <input type="text" name="qty" id="quantity_wanted" class="text" value="{if isset($quantityBackup)}{$quantityBackup|intval}{else}{if $product->minimal_quantity > 1}{$product->minimal_quantity}{else}1{/if}{/if}" />
   {if isset($roythemes.nc_pp_q) && ($roythemes.nc_pp_q == "1")}
   <div class="updown_container">
      <a href="#" data-field-qty="qty" class="pm button-plus product_quantity_up">
      <span><i class="icon-angle-up"></i></span>
      </a>
      <a href="#" data-field-qty="qty" class="pm button-minus product_quantity_down">
      <span><i class="icon-angle-down"></i></span>
      </a>
   </div>
   {/if}
   {if isset($roythemes.nc_pp_q) && ($roythemes.nc_pp_q == "2")}
   <div class="up_container">
      <a href="#" data-field-qty="qty" class="pm button-plus product_quantity_up">
      <span><i class="icon-angle-up"></i></span>
      </a>
   </div>
   {/if}
   <span class="clearfix"></span>
</div>
*}
<div id="add_to_cart" class="buttons_bottom_block no-print">
   <button type="submit" name="Submit" class="btn button button-medium btn-default bright addcustom{if (!$allow_oosp && $product->quantity <= 0) || !$product->available_for_order || (isset($restricted_country_mode) && $restricted_country_mode) || $PS_CATALOG_MODE} disabled {/if}">
   <span>{l s='Add to cart'}</span>
   </button>
</div>
<!-- Wishlist-->
{if isset($HOOK_PRODUCT_ACTIONS) && $HOOK_PRODUCT_ACTIONS}{$HOOK_PRODUCT_ACTIONS}{/if}
<!-- end Wishlist-->
<a href="/help/buyer-protection" class="details-protection" target="_blank" rel=""><img style="width: 16px;margin-right: 5px" src="../../img/pdt/buyer_protection.png">Shop Safely with AttractiveTackRoom Buyer Protection</a>
</div>
</form>
{/if}
{/if}
{hook h="displayProductAfterBuy"}
<!-- minimal quantity wanted -->
<p id="minimal_quantity_wanted_p"{if $product->minimal_quantity <= 1 || !$product->available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
{l s='This product is not sold individually. You must select at least'} <b id="minimal_quantity_label">{$product->minimal_quantity}</b> {l s='quantity for this product.'}
</p>
</div> <!-- end product_attributes -->
<div id="description_productpage">
   {if isset($product) && $product->description}
   <!-- full description -->
   <section class="page-product-box" id="idTab1">
      {$product->description}
   </section>
   {/if}
</div>
{if isset($roythemes.nc_pp_col) && ($roythemes.nc_pp_col == "2")} <!-- Layout 2 usefull -->
{if !$content_only}
<!-- usefull links-->
<ul id="usefull_link_block" class="clearfix no-print">
   {hook h="displaySocialSharing"}
   {if isset($roythemes.pp_display_print) && $roythemes.pp_display_print == "1"}
   <li class="print">
      <a href="javascript:print();">
      <i></i><span>{l s='Print'}</span>
      </a>
   </li>
   {/if}
</ul>
{/if}
{/if} <!-- /Layout 2 usefull -->
{if isset($roythemes.nc_pp_col) && $roythemes.nc_pp_col == "2"} <!-- Layout 2 loyalty-->
{if isset($HOOK_EXTRA_RIGHT) && $HOOK_EXTRA_RIGHT}{$HOOK_EXTRA_RIGHT}{/if}
{/if} <!-- /Layout 2 loyalty -->
{if isset($roythemes.nc_pp_col) && ($roythemes.nc_pp_col == "4" || $roythemes.nc_pp_col == "5")} <!-- Layout 4 -->
<div class="product_attributes pp_col_4 clearfix">
   {if isset($roythemes.pp_display_refer) && $roythemes.pp_display_refer == "1"}
   <p id="product_reference"{if empty($product->reference) || !$product->reference} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Product Code '} </label>
   <span class="editable" itemprop="sku">{if !isset($groups)}{$product->reference|escape:'html':'UTF-8'}{/if}</span>
   </p>
   {/if}
   {if $product->online_only}
   <p class="online_only"><label>{l s='Status '} </label><span>{l s='Online only'}</span></p>
   {/if}
   {*
   {if isset($roythemes.nc_man_text) && $roythemes.nc_man_text == "1"}
   <p id="product_manufacturer" {if !$product->id_manufacturer} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Brand '} </label>
   <span class="editable">
   {if !$content_only}<a href="{$link->getManufacturerLink($product->id_manufacturer)}" title="View all products">{/if}
   {$product->manufacturer_name|escape:'htmlall':'UTF-8'}
   {if !$content_only}
   {if isset($roythemes.nc_man_logo) && $roythemes.nc_man_logo == "1"}
   {assign var="manpic" value="img/m/{$product_manufacturer->id_manufacturer}.jpg"}
   {if file_exists($manpic)}
   <label class="product_manufacturer_logo">
   <img src="{$content_dir}img/m/{$product_manufacturer->id_manufacturer}-man_default.jpg" />
   </label>
   {/if}
   {/if}
   {/if}
   {if !$content_only}</a>{/if}
   </span>
   </p>
   {/if}
   *}
   {if isset($roythemes.pp_display_avail) && $roythemes.pp_display_avail == "1"}
   {if $PS_STOCK_MANAGEMENT}
   <!-- availability -->
   <p id="availability_statut"{if ($product->quantity <= 0 && !$product->available_later && $allow_oosp) || ($product->quantity > 0 && !$product->available_now) || !$product->available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Availability '} </label>
   <span id="availability_value"{if $product->quantity <= 0} class="warning_inline"{/if}>{if $product->quantity <= 0}{if $allow_oosp}{$product->available_later}{else}{l s='This product is no longer in stock'}{/if}{else}{$product->available_now}{/if}</span>
   </p>
   {/if}
   {/if}
   {if isset($roythemes.pp_display_q) && $roythemes.pp_display_q == "1"}
   {if ($display_qties == 1 && !$PS_CATALOG_MODE && $PS_STOCK_MANAGEMENT && $product->available_for_order)}
   <!-- number of item in stock -->
   <p id="pQuantityAvailable"{if $product->quantity <= 0} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Quantity '} </label>
   <span id="quantityAvailable">{$product->quantity|intval}</span>
   <span {if $product->quantity > 1} style="display: none;"{/if} id="quantityAvailableTxt">{l s='Item'}</span>
   <span {if $product->quantity == 1} style="display: none;"{/if} id="quantityAvailableTxtMultiple">{l s='Items'}</span>
   </p>
   {/if}
   {/if}
   {if $PS_STOCK_MANAGEMENT}
   {if !$product->is_virtual}{hook h="displayProductDeliveryTime" product=$product}{/if}
   <p class="warning_inline" id="last_quantities"{if ($product->quantity > $last_qties || $product->quantity <= 0) || $allow_oosp || !$product->available_for_order || $PS_CATALOG_MODE} style="display: none"{/if} >{l s='Warning: Last items in stock!'}</p>
   {/if}
   <p id="availability_date"{if ($product->quantity > 0) || !$product->available_for_order || $PS_CATALOG_MODE || !isset($product->available_date) || $product->available_date < $smarty.now|date_format:'%Y-%m-%d'} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Availability date '} </label>
   <span id="availability_date_value">{dateFormat date=$product->available_date full=false}</span>
   </p>
   {if isset($roythemes.pp_display_cond) && $roythemes.pp_display_cond == "1"}
   {capture name=condition}
   {if $product->condition == 'new'}{l s='New'}
   {elseif $product->condition == 'used'}{l s='Used'}
   {elseif $product->condition == 'refurbished'}{l s='Refurbished'}
   {/if}
   {/capture}
   <p id="product_condition"{if !$product->condition} style="display: none;"{/if}>
   {if isset($roythemes.pp_li) && $roythemes.pp_li == "1"}
   <i class="att_icon"></i>
   {/if}
   <label>{l s='Condition '} </label>
   <span class="editable" itemprop="condition">{$smarty.capture.condition}</span>
   </p>
   {/if}
   {if !$content_only}
   <!-- usefull links-->
   <div class="usefull_share">
      <label>{l s='Share '} </label>
      <ul id="usefull_link_block" class="no-print">
         {hook h="displaySocialSharing"}
      </ul>
   </div>
   {/if}
</div>
{/if} <!-- /Layout 4 -->
</div>
<!-- </div> -->
<!-- end center infos-->
</div>
</div> <!-- end primary_block -->
{*
{if !$content_only}
{if (isset($product) && $product->description) || (isset($features) && $features) || (isset($accessories) && $accessories) || (isset($HOOK_PRODUCT_TAB) && $HOOK_PRODUCT_TAB) || (isset($attachments) && $attachments) || isset($product) && $product->customizable}
<div id="more_info_block" class="col-md-12 review-tab">
   <ul id="more_info_tabs" class="idTabs idTabsShort nav nav-tabs">
      {if $product->description}
      <li><a id="more_info_tab_more_info" href="#idTab1">{l s='More info'}</a></li>
      {/if}
      {if $features}
      <li><a id="more_info_tab_data_sheet" href="#idTab2">{l s='Data sheet'}</a></li>
      {/if}
      {if (isset($quantity_discounts) && count($quantity_discounts) > 0)}
      <li><a id="tab_discounts" href="#idTab3">{l s='Volume discounts'}</a></li>
      {/if}
      {if $attachments}
      <li><a id="more_info_tab_attachments" href="#idTab9">{l s='Download'}</a></li>
      {/if}
      {if isset($accessories) AND $accessories}
      <li><a href="#idTab4">{l s='Accessories'}</a></li>
      {/if}
      {if isset($product) && $product->customizable}
      <li><a href="#idTab10">{l s='Customization'}</a></li>
      {/if}
      {if isset($HOOK_PRODUCT_TAB) && $HOOK_PRODUCT_TAB}{$HOOK_PRODUCT_TAB}{/if}
   </ul>
   <div id="more_info_sheets" class="sheets align_justify">
      {if isset($HOOK_PRODUCT_TAB) && $HOOK_PRODUCT_TAB}
      <!-- full description -->
      <section class="page-product-box">
         {if isset($HOOK_PRODUCT_TAB_CONTENT) && $HOOK_PRODUCT_TAB_CONTENT}{$HOOK_PRODUCT_TAB_CONTENT}{/if}
      </section>
      {/if}
      {if isset($features) && $features}
      <!-- product's features -->
      <section class="page-product-box" id="idTab2">
         <table class="table-data-sheet">
            {foreach from=$features item=feature}
            <tr class="{cycle values="odd,even"}">
            {if isset($feature.value)}
            <td>{$feature.name|escape:'html':'UTF-8'}</td>
            <td>{$feature.value|escape:'html':'UTF-8'}</td>
            {/if}
            </tr>
            {/foreach}
         </table>
      </section>
      {/if}
      {if (isset($quantity_discounts) && count($quantity_discounts) > 0)}
      <!-- quantity discount -->
      <section class="page-product-box" id="idTab3">
         <h3 class="page-product-heading">{l s='Volume discounts'}</h3>
         <div id="quantityDiscount">
            <table class="std table-product-discounts">
               <thead>
                  <tr>
                     <th>{l s='Quantity'}</th>
                     <th>{if $display_discount_price}{l s='Price'}{else}{l s='Discount'}{/if}</th>
                     <th>{l s='You Save'}</th>
                  </tr>
               </thead>
               <tbody>
                  {foreach from=$quantity_discounts item='quantity_discount' name='quantity_discounts'}
                  <tr id="quantityDiscount_{$quantity_discount.id_product_attribute}" class="quantityDiscount_{$quantity_discount.id_product_attribute}">
                     <td>{$quantity_discount.quantity|intval}</td>
                     <td>
                        {if $quantity_discount.price >= 0 || $quantity_discount.reduction_type == 'amount'}
                        {if $display_discount_price}
                        {convertPrice price=$productPrice-$quantity_discount.real_value|floatval}
                        {else}
                        {convertPrice price=$quantity_discount.real_value|floatval}
                        {/if}
                        {else}
                        {if $display_discount_price}
                        {convertPrice price = $productPrice-($productPrice*$quantity_discount.reduction)|floatval}
                        {else}
                        {$quantity_discount.real_value|floatval}%
                        {/if}
                        {/if}
                     </td>
                     <td>
                        <span>{l s='Up to'}</span>
                        {if $quantity_discount.price >= 0 || $quantity_discount.reduction_type == 'amount'}
                        {$discountPrice=$productPrice-$quantity_discount.real_value|floatval}
                        {else}
                        {$discountPrice=$productPrice-($productPrice*$quantity_discount.reduction)|floatval}
                        {/if}
                        {$discountPrice=$discountPrice*$quantity_discount.quantity}
                        {$qtyProductPrice = $productPrice*$quantity_discount.quantity}
                        {convertPrice price=$qtyProductPrice-$discountPrice}
                     </td>
                  </tr>
                  {/foreach}
               </tbody>
            </table>
         </div>
      </section>
      {/if}
      {if isset($attachments) && $attachments}
      <section class="page-product-box" id="idTab9">
         <!--Download -->
         {foreach from=$attachments item=attachment name=attachements}
         {if $smarty.foreach.attachements.iteration %3 == 1}
         <div class="row">
            {/if}
            <div class="col-lg-4">
               <h4><a href="{$link->getPageLink('attachment', true, NULL, "id_attachment={$attachment.id_attachment}")|escape:'html':'UTF-8'}">{$attachment.name|escape:'html':'UTF-8'}</a></h4>
               <p class="text-muted">{$attachment.description|escape:'html':'UTF-8'}</p>
               <a class="btn btn-default btn-block" href="{$link->getPageLink('attachment', true, NULL, "id_attachment={$attachment.id_attachment}")|escape:'html':'UTF-8'}">
               <i class="icon-download"></i>
               {l s="Download"} ({Tools::formatBytes($attachment.file_size, 2)})
               </a>
               <hr>
            </div>
            {if $smarty.foreach.attachements.iteration %3 == 0 || $smarty.foreach.attachements.last}
         </div>
         {/if}
         {/foreach}
      </section>
      <!--end Download -->
      {/if}
      {if isset($accessories) AND $accessories}
      <!-- accessories -->
      <section class="page-product-box" id="idTab4">
         <div class="block products_block accessories_block clearfix">
            <div class="block_content">
               <ul>
                  {foreach from=$accessories item=accessory name=accessories_list}
                  {if ($accessory.allow_oosp || $accessory.quantity_all_versions > 0 || $accessory.quantity > 0) AND $accessory.available_for_order AND !isset($restricted_country_mode)}
                  {assign var='accessoryLink' value=$link->getProductLink($accessory.id_product, $accessory.link_rewrite, $accessory.category)}
                  <li class="ajax_block_product{if $smarty.foreach.accessories_list.first} first_item{elseif $smarty.foreach.accessories_list.last} last_item{else} item{/if} product_accessories_description">
                     <div class="product_desc">
                        <a href="{$accessoryLink|escape:'htmlall':'UTF-8'}" title="{$accessory.legend|escape:'htmlall':'UTF-8'}" class="product_image"><img src="{$link->getImageLink($accessory.link_rewrite, $accessory.id_image, 'home_default')|escape:'html'}" alt="{$accessory.legend|escape:'htmlall':'UTF-8'}" width="{$homeSize.width}" height="{$homeSize.height}" /></a>
                        <p class="product-name">
                           <a href="{$accessoryLink|escape:'htmlall':'UTF-8'}">{$accessory.name|escape:'htmlall':'UTF-8'}</a>
                           {if $accessory.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE} - <span class="price">{if $priceDisplay != 1}{displayWtPrice p=$accessory.price}{else}{displayWtPrice p=$accessory.price_tax_exc}{/if}</span>{/if}
                        </p>
                        <div class="block_description">
                           <a href="{$accessoryLink|escape:'htmlall':'UTF-8'}" title="{l s='More'}" class="product_description">{$accessory.description_short|strip_tags|truncate:400:'...'}</a>
                        </div>
                        <div class="clear_product_desc">&nbsp;</div>
                     </div>
                     <p class="clearfix" style="margin-top:5px">
                        <a class="button btn btn-default button-medium" href="{$accessoryLink|escape:'htmlall':'UTF-8'}" title="{l s='View'}"><span>{l s='View'}</span></a>
                        {if !$PS_CATALOG_MODE && ($accessory.allow_oosp || $accessory.quantity > 0)}
                        <a class="button btn btn-default button-medium exclusive" href="{$link->getPageLink('cart', true, NULL, "qty=1&amp;id_product={$accessory.id_product|intval}&amp;token={$static_token}&amp;add")|escape:'html'}" rel="ajax_id_product_{$accessory.id_product|intval}" title="{l s='Add to cart'}"><span>{l s='Add to cart'}</span></a>
                        {/if}
                     </p>
                  </li>
                  {/if}
                  {/foreach}
               </ul>
            </div>
         </div>
      </section>
      {/if}
      <!-- Customizable products -->
      {if isset($product) && $product->customizable}
      <section class="page-product-box" id="idTab10">
         <div class="bullet customization_block">
            <form method="post" action="{$customizationFormTarget}" enctype="multipart/form-data" id="customizationForm" class="clearfix">
               <p class="infoCustomizable">
                  {l s='After saving your customized product, remember to add it to your cart.'}
                  {if $product->uploadable_files}<br />{l s='Allowed file formats are: GIF, JPG, PNG'}{/if}
               </p>
               {if $product->uploadable_files|intval}
               <div class="customizableProductsFile">
                  <h3>{l s='Pictures'}</h3>
                  <ul id="uploadable_files" class="clearfix">
                     {counter start=0 assign='customizationField'}
                     {foreach from=$customizationFields item='field' name='customizationFields'}
                     {if $field.type == 0}
                     <li class="customizationUploadLine{if $field.required} required{/if}">
                        {assign var='key' value='pictures_'|cat:$product->id|cat:'_'|cat:$field.id_customization_field}
                        {if isset($pictures.$key)}
                        <div class="customizationUploadBrowse">
                           <img src="{$pic_dir}{$pictures.$key}_small" alt="" />
                           <a href="{$link->getProductDeletePictureLink($product, $field.id_customization_field)|escape:'html'}" title="{l s='Delete'}" >
                           <img src="{$img_dir}icon/delete.gif" alt="{l s='Delete'}" class="customization_delete_icon" width="11" height="13" />
                           </a>
                        </div>
                        {/if}
                        <div class="customizationUploadBrowse">
                           <label class="customizationUploadBrowseDescription">{if !empty($field.name)}{$field.name}{else}{l s='Please select an image file from your computer'}{/if}{if $field.required}<sup>*</sup>{/if}</label>
                           <input type="file" name="file{$field.id_customization_field}" id="img{$customizationField}" class="customization_block_input {if isset($pictures.$key)}filled{/if}" />
                        </div>
                     </li>
                     {counter}
                     {/if}
                     {/foreach}
                  </ul>
               </div>
               {/if}
               {if $product->text_fields|intval}
               <div class="customizableProductsText">
                  <h3>{l s='Text'}</h3>
                  <ul id="text_fields">
                     {counter start=0 assign='customizationField'}
                     {foreach from=$customizationFields item='field' name='customizationFields'}
                     {if $field.type == 1}
                     <li class="customizationUploadLine{if $field.required} required{/if}">
                        <label for ="textField{$customizationField}">{assign var='key' value='textFields_'|cat:$product->id|cat:'_'|cat:$field.id_customization_field} {if !empty($field.name)}{$field.name}{/if}{if $field.required}<sup>*</sup>{/if}</label>
                        <textarea name="textField{$field.id_customization_field}" id="textField{$customizationField}" rows="1" cols="40" class="customization_block_input">{if isset($textFields.$key)}{$textFields.$key|stripslashes}{/if}</textarea>
                     </li>
                     {counter}
                     {/if}
                     {/foreach}
                  </ul>
               </div>
               {/if}
               <p id="customizedDatas">
                  <input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
                  <input type="hidden" name="submitCustomizedDatas" value="1" />
                  <input type="button" class="button btn button-medium btn-default" value="{l s='Save'}" onclick="javascript:saveCustomization()" />
                  <span id="ajax-loader" style="display:none"><img src="{$img_ps_dir}loader.gif" alt="loader" /></span>
               </p>
            </form>
            <p class="clear required"><sup>*</sup> {l s='required fields'}</p>
         </div>
      </section>
      {/if}
   </div>
</div>
{/if}
{if isset($HOOK_PRODUCT_FOOTER) && $HOOK_PRODUCT_FOOTER}{$HOOK_PRODUCT_FOOTER}{/if}
<!-- description & features -->
{if isset($packItems) && $packItems|@count > 0}
<section id="blockpack">
   <h3 class="page-product-heading">{l s='Pack content'}</h3>
   {include file="$tpl_dir./product-list.tpl" products=$packItems}
</section>
{/if}
{/if}
*}
{strip}
{if isset($smarty.get.ad) && $smarty.get.ad}
{addJsDefL name=ad}{$base_dir|cat:$smarty.get.ad|escape:'html':'UTF-8'}{/addJsDefL}
{/if}
{if isset($smarty.get.adtoken) && $smarty.get.adtoken}
{addJsDefL name=adtoken}{$smarty.get.adtoken|escape:'html':'UTF-8'}{/addJsDefL}
{/if}
{addJsDef allowBuyWhenOutOfStock=$allow_oosp|boolval}
{addJsDef availableNowValue=$product->available_now|escape:'quotes':'UTF-8'}
{addJsDef availableLaterValue=$product->available_later|escape:'quotes':'UTF-8'}
{addJsDef attribute_anchor_separator=$attribute_anchor_separator|addslashes}
{addJsDef attributesCombinations=$attributesCombinations}
{addJsDef currencySign=$currencySign|html_entity_decode:2:"UTF-8"}
{addJsDef currencyRate=$currencyRate|floatval}
{addJsDef currencyFormat=$currencyFormat|intval}
{addJsDef currencyBlank=$currencyBlank|intval}
{addJsDef currentDate=$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}
{if isset($combinations) && $combinations}
{addJsDef combinations=$combinations}
{/if}
{if isset($combinationImages) && $combinationImages}
{addJsDef combinationImages=$combinationImages}
{/if}
{addJsDef customizationFields=$customizationFields}
{addJsDef default_eco_tax=$product->ecotax|floatval}
{addJsDef displayPrice=$priceDisplay|intval}
{addJsDef ecotaxTax_rate=$ecotaxTax_rate|floatval}
{addJsDef group_reduction=1 - $group_reduction}
{if isset($cover.id_image_only)}
{addJsDef idDefaultImage=$cover.id_image_only|intval}
{else}
{addJsDef idDefaultImage=0}
{/if}
{addJsDef img_ps_dir=$img_ps_dir}
{addJsDef img_prod_dir=$img_prod_dir}
{addJsDef id_product=$product->id|intval}
{addJsDef jqZoomEnabled=$jqZoomEnabled|boolval}
{addJsDef maxQuantityToAllowDisplayOfLastQuantityMessage=$last_qties|intval}
{addJsDef minimalQuantity=$product->minimal_quantity|intval}
{addJsDef noTaxForThisProduct=$no_tax|boolval}
{addJsDef oosHookJsCodeFunctions=Array()}
{addJsDef productHasAttributes=isset($groups)|boolval}
{addJsDef productPriceTaxExcluded=($product->getPriceWithoutReduct(true)|default:'null' - $product->ecotax)|floatval}
{addJsDef productBasePriceTaxExcluded=($product->base_price - $product->ecotax)|floatval}
{addJsDef productReference=$product->reference|escape:'html':'UTF-8'}
{addJsDef productAvailableForOrder=$product->available_for_order|boolval}
{addJsDef productPriceWithoutReduction=$productPriceWithoutReduction|floatval}
{addJsDef productPrice=$productPrice|floatval}
{addJsDef productUnitPriceRatio=$product->unit_price_ratio|floatval}
{addJsDef productShowPrice=(!$PS_CATALOG_MODE && $product->show_price)|boolval}
{addJsDef PS_CATALOG_MODE=$PS_CATALOG_MODE}
{if $product->specificPrice && $product->specificPrice|@count}
{addJsDef product_specific_price=$product->specificPrice}
{else}
{addJsDef product_specific_price=array()}
{/if}
{if $display_qties == 1 && $product->quantity}
{addJsDef quantityAvailable=$product->quantity}
{else}
{addJsDef quantityAvailable=0}
{/if}
{addJsDef quantitiesDisplayAllowed=$display_qties|boolval}
{if $product->specificPrice && $product->specificPrice.reduction && $product->specificPrice.reduction_type == 'percentage'}
{addJsDef reduction_percent=$product->specificPrice.reduction*100|floatval}
{else}
{addJsDef reduction_percent=0}
{/if}
{if $product->specificPrice && $product->specificPrice.reduction && $product->specificPrice.reduction_type == 'amount'}
{addJsDef reduction_price=$product->specificPrice.reduction|floatval}
{else}
{addJsDef reduction_price=0}
{/if}
{if $product->specificPrice && $product->specificPrice.price}
{addJsDef specific_price=$product->specificPrice.price|floatval}
{else}
{addJsDef specific_price=0}
{/if}
{addJsDef specific_currency=($product->specificPrice && $product->specificPrice.id_currency)|boolval}
{addJsDef stock_management=$stock_management|intval}
{addJsDef taxRate=$tax_rate|floatval}
{addJsDefL name=doesntExist}{l s='This combination does not exist for this product. Please select another combination.' js=1}{/addJsDefL}
{addJsDefL name=doesntExistNoMore}{l s='This product is no longer in stock' js=1}{/addJsDefL}
{addJsDefL name=doesntExistNoMoreBut}{l s='with those attributes but is available with others.' js=1}{/addJsDefL}
{addJsDefL name=fieldRequired}{l s='Please fill in all the required fields before saving your customization.' js=1}{/addJsDefL}
{addJsDefL name=uploading_in_progress}{l s='Uploading in progress, please be patient.' js=1}{/addJsDefL}
{/strip}
{/if}