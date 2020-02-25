{if !$content_only}
</div><!-- #center_column -->
{if isset($right_column_size) && !empty($right_column_size)}
<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
{/if}
</div><!-- .row -->
{if $page_name != 'index'}
</div><!-- .container -->
{/if}
</div><!-- #middle-columns -->
</div><!-- .columns-container -->
<!-- Footer -->

 {if ($isMobile)||(Context::getContext()->isTablet())}
	{if $page_name=="product"}
	<div id="menu_mobile" class="mobile-menu">
		 <div class="product_menu">
			   
				<button data-toggle="modal" data-target="#startChat"> <img src="https://tacktackroom.com/img/footer/mobile/message.png" alt="Message"><span>{l s='Message seller'}</span></button>	   
		   </div>
		 <div  class="product_menu">
		       
		        <a href="javascript:;" class="{if $product_has_offer_by_customer==1}not-active{/if}" data-toggle="modal" data-target="#makeOfferModal"> 
			        <img src="https://tacktackroom.com/img/footer/mobile/offer.png"/><span>{l s='Make an offer'}</span></a>
		 </div>
		 <div   id="add_to_cart" class="product_menu">
		
		        <button type="submit" name="Submit" class="{if (!$allow_oosp && $product->quantity <= 0) || !$product->available_for_order || (isset($restricted_country_mode) && $restricted_country_mode) || $PS_CATALOG_MODE} disabled {/if}"><img src="https://tacktackroom.com/img/footer/mobile/purchase.png" alt="Home">	  
		  	     <span>{l s='Add to cart'}</span>
		        </button>
		   </div>
		 <div  class="product_menu">
		  	{if isset($HOOK_PRODUCT_ACTIONS) && $HOOK_PRODUCT_ACTIONS}{$HOOK_PRODUCT_ACTIONS}{/if}
		</div>
	</div>
	{else}
	<div id="menu_mobile" class="mobile-menu">
	   <a href="/">
	      <img src="https://tacktackroom.com/img/footer/mobile/tackroom.png" alt="Home">
	      <div>Home</div>
	   </a>
	   <a href="/40-for-the-horse">
	      <img src="https://tacktackroom.com/img/footer/mobile/horse-head.png" alt="Horse Equipment">
	      <div>Horse</div>
	   </a>
	   <a {if $logged}href="https://tacktackroom.com/module/marketplace/addproduct"{else}onclick="showLoginPopup()"{/if}>
	      <img src="https://tacktackroom.com/img/footer/mobile/sell.png" class="vendre" alt="Sell">
	      <div>Sell</div>
	   </a>
	   <a href="/41-for-the-rider">
	      <img src="https://tacktackroom.com/img/footer/mobile/rider.png" alt="rider equipment">
	      <div>Rider</div>
	   </a>
	   <a href="/93-around-the-horse">
	      <img src="https://tacktackroom.com/img/footer/mobile/jump.png" alt="Matériel d'écurie">
	      <div>Barn</div>
	   </a>
	</div>
	{/if}
{/if}
</div>
{if (!$isMobile)&&(!Context::getContext()->isTablet())}
<div class="footer-wrapper hidden-xs">
   {if isset($roythemes.footer_lay) && $roythemes.footer_lay !== "8"}
   {assign var='defaultLat' value=((isset($defaultLat) && $defaultLat) ? $defaultLat : '')}
   {assign var='defaultLong' value=((isset($defaultLong) && $defaultLong) ? $defaultLong : '')}
   {assign var='hasStoreIcon' value=((isset($hasStoreIcon) && $hasStoreIcon) ? $hasStoreIcon : '')}
   {assign var='img_store_dir' value=((isset($img_store_dir) && $img_store_dir) ? $img_store_dir : '')}
   {assign var='img_ps_dir' value=((isset($img_ps_dir) && $img_ps_dir) ? $img_ps_dir : '')}
   {assign var='searchUrl' value=((isset($searchUrl) && $searchUrl) ? $searchUrl : '')}
   {assign var='logo_store' value=((isset($logo_store) && $logo_store) ? $logo_store : '')}
   {addJsDef map=''}
   {addJsDef markers=array()}
   {addJsDef infoWindow=''}
   {addJsDef locationSelect=''}
   {addJsDef defaultLat=$defaultLat}
   {addJsDef defaultLong=$defaultLong}
   {addJsDef hasStoreIcon=$hasStoreIcon}
   {addJsDef img_store_dir=$img_store_dir}
   {addJsDef img_ps_dir=$img_ps_dir}
   {addJsDef searchUrl=$searchUrl}
   {addJsDef logo_store=$logo_store}
   {addJsDefL name=translation_1}{l s='No stores were found. Please try selecting a wider radius.' js=1}{/addJsDefL}
   {addJsDefL name=translation_2}{l s='store found -- see details:' js=1}{/addJsDefL}
   {addJsDefL name=translation_3}{l s='stores found -- view all results:' js=1}{/addJsDefL}
   {addJsDefL name=translation_4}{l s='Phone:' js=1}{/addJsDefL}
   {addJsDefL name=translation_5}{l s='Get directions' js=1}{/addJsDefL}
   {addJsDefL name=translation_6}{l s='Not found' js=1}{/addJsDefL}
   {/if}
   {if isset($roythemes.footer_lay) && $roythemes.footer_lay == "7"}
   <div class="foot_line">
      <div class="container">
         {hook h='displayFooterLine'}
      </div>
   </div>
   {/if}
   {if isset($roythemes.footer_lay) && $roythemes.footer_lay !== "8"}
   <footer id="footer" class="container">
      {*
      <div class="footer-reinssurance inner">
         <ul>
            <li>
               <a data-fancybox-footer="1" href="#">
               <img style="reinsurance_img" src="https://attractivetackroom.com/img/footer/moneyback_guarantee.png">
               100% Moneyback guarantee</a>
            </li>
            <li>
               <a data-fancybox-footer="1" href="#">
               <img style="reinsurance_img" src="https://attractivetackroom.com/img/footer/customer_service.png">
               Amazing Customer Service</a>
            </li>
            <li>
               <a data-fancybox-footer="1" href="#">
               <img style="reinsurance_img" src="https://attractivetackroom.com/img/footer/chatting.png">
               Don't buy blindly</a>
            </li>
            <li>
               <a data-fancybox-footer="1" href="#">
               <img style="reinsurance_img" src="https://attractivetackroom.com/img/footer/secure_payment.png">
               Safe Payment</a>
            </li>
         </ul>
      </div>
      *}
      {if isset($roythemes.footer_lay) && $roythemes.footer_lay !== "7"}
      {hook h='displayFooterTop'}
      {/if}
      <div class="row displayresp">
         {if isset($roythemes.footer_lay) && $roythemes.footer_lay !== "4" && $roythemes.footer_lay !== "6"}
         <div class="foot_left">
            {if isset($roythemes.footer_lay) && $roythemes.footer_lay !== "3"}<img class="logo_footer img-responsive" src="{$theme_dir}/themes/ayon/img/logo/ttr_round_medium.png" />{/if}                            
            {hook h='displayFooterLeft'}
            {if isset($roythemes.footer_lay) && ($roythemes.footer_lay == "3" || $roythemes.footer_lay == "4")}
            {hook h='displayFooterLeftMap'}
            {/if}
            {if isset($roythemes.footer_lay) && ($roythemes.footer_lay == "5")}  
            {if isset($roythemes.footer_copyright_display) && $roythemes.footer_copyright_display == "1"}
            <div class="copy_left">{if isset($roythemes.copyright_text)} {$roythemes.copyright_text} {else} <span>Copyright 2016 All Rights Reserved</span></div>
            {/if}
            {/if} 
            {/if}                        
         </div>
         {/if}
         {if isset($roythemes.footer_lay) && ($roythemes.footer_lay !== "5")}  
         <div class="foot_right">
            {$HOOK_FOOTER}                  
            {if isset($roythemes.footer_lay) && $roythemes.footer_lay == "4" || $roythemes.footer_lay == "6"}
            <div class="foot_left">{hook h='displayFooterLeft'}
               <img class="logo_footer img-responsive" src="{$modules_dir}roythemescustomizer/upload/logo-footer-{Context::getContext()->shop->id}.{if isset($roythemes.logo_footer_ext)}{$roythemes.logo_footer_ext}{else}png{/if}" alt="{$shop_name|escape:'html':'UTF-8'}" />
               {hook h='displayFooterLeft'}
               {if isset($roythemes.footer_lay) && ($roythemes.footer_lay == "6")}
               {hook h='displayFooterLeftNews'}
               {/if}
               {hook h='displayFooterLeftMap'}                 
            </div>
            {/if}   
            {if isset($roythemes.footer_lay) && ($roythemes.footer_lay == "1" || $roythemes.footer_lay == "2")}
            {hook h='displayFooterRightNews'}
            {/if}
            {if isset($roythemes.footer_lay) && ($roythemes.footer_lay !== "3" && $roythemes.footer_lay !== "4" && $roythemes.footer_lay !== "6")}
            {hook h='displayFooterRightMap'}
            {/if}
         </div>
         {/if} 
         <div class="foot_bottom">{hook h='displayFooterBottom'}</div>
      </div>
      {if isset($roythemes.footer_lay) && $roythemes.footer_lay !== "7"}
      {hook h='displayFooterBottom'}
      {/if}
      {if isset($roythemes.footer_lay) && $roythemes.footer_lay == "5"}
</div>
{/if}
</footer>
<div class="mapwrapper">
   <div id="map"></div>
   <div class="store-content-select selector3">
      <select id="locationSelect" class="form-control">
         <option>-</option>
      </select>
   </div>
</div>
{/if}
{if isset($roythemes.footer_lay) && ($roythemes.footer_lay !== "5" && $roythemes.footer_lay !== "6")}   
<div class="foot_copyright">
   <div class="container">
      {if isset($roythemes.footer_lay) && ($roythemes.footer_lay == "3" || $roythemes.footer_lay == "4" || $roythemes.footer_lay == "7")}                        
      <div class="copy_cell">
         {hook h='displayFooterCopyNews'}
      </div>
      {/if}
      <div class="copy_cell {if isset($roythemes.footer_lay) && ($roythemes.footer_lay == "3" || $roythemes.footer_lay == "4" || $roythemes.footer_lay == "7")}copy_center{/if}">
      {if isset($roythemes.footer_copyright_display) && $roythemes.footer_copyright_display == "1"}
      {if isset($roythemes.copyright_text)} <span class="copytext">{$roythemes.copyright_text}</span> {else} <span>Copyright 2016 All Rights Reserved</span> {/if}
      {/if}
      {if isset($roythemes.footer_lay) && $roythemes.footer_lay == "8"}{hook h='displayFooter'}{/if}
   </div>
</div>
</div>
{/if}
</div><!-- #footer -->
{/if}
</div>		
<!-- #page -->
<div class="side-menu">{hook h='displaySideMobile'}</div>
<div id="menu_close" class="menu-close"></div>
{hook h='displayLeviBox' mod='roylevibox'}
{/if}
{include file="$tpl_dir./global.tpl"}
<div id="is_media"></div>
</body>
</html>