{*
* RoyThemes AYON Theme
*}
<!DOCTYPE HTML>
<!--[if lt IE 7]> 
<html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="{$lang_iso}">
   <![endif]-->
   <!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8 ie7" lang="{$lang_iso}">
      <![endif]-->
      <!--[if IE 8]>
      <html class="no-js lt-ie9 ie8" lang="{$lang_iso}">
         <![endif]-->
         <!--[if gt IE 8]> 
         <html class="no-js ie9" lang="{$lang_iso}">
            <![endif]-->
            <html lang="{$lang_iso}" xmlns:og="http://ogp.me/ns#" itemscope itemtype="http://schema.org/WebPage" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
               <head>    
<meta property="fb:app_id" content="2625863847485184" />	
<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">                             
     
{*  	             <meta property="og:image" content="https://tacktackroom.com/themes/ayon/img/logo.png" />   *} 
	             <meta property="og:image:width" content="100%" />
				 <meta property="og:image:height" content="auto" />
                  <meta charset="utf-8" />
                  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover"/>
                  <title>{$meta_title|escape:'html':'UTF-8'}</title>
                  {if isset($meta_description) AND $meta_description}
                  <meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
                  {/if}
                  {if isset($meta_keywords) AND $meta_keywords}
                  <meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
                  {/if}
                  <meta name="generator" content="PrestaShop" />
                  <meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
{*                   <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> *}
                  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

                  <meta name="apple-mobile-web-app-capable" content="yes" />
                  <link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
                  <link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
                  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
                  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
                  {$id_shop = Context::getContext()->shop->id}
                  {if isset($css_files)}
                  {foreach from=$css_files key=css_uri item=media}
                  <link rel="stylesheet" href="{$css_uri}" type="text/css" media="{$media}" />
                  {/foreach}
                  {/if}
                  {if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
                  {$js_def}
                  {foreach from=$js_files item=js_uri}
                  <script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
                  {/foreach}
                  {/if}
                  <!--[if IE 8]>
                  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                  <![endif]-->
                  {if isset($roythemes.font_include)}{$roythemes.font_include} {/if}
                  {$HOOK_HEADER}
                  <meta property="og:title" content="{$meta_title|escape:'htmlall':'UTF-8'}"/>
                  <meta property="og:site_name" content="{$shop_name|escape:'htmlall':'UTF-8'}"/>
                  <meta property="og:type" content="website">
                  <meta property="og:description" content="{$meta_description|escape:html:'UTF-8'}">
                  <meta property="og:url" content="http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}"/>
                  
					{if $page_name=='product'}
					<meta property="og:image" content="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'large')}">
					        {else}
					<meta property="og:image" content="https://tacktackroom.com/themes/ayon/img/logo/ttr_round.png" />
					{/if}                  
                  
                                 <style>
                     @import url('https://fonts.googleapis.com/css?family=Pacifico');
                     @import url('https://fonts.googleapis.com/css?family=Lato');
                  </style>
                  {literal} 
      <script>
                     var logged = '{/literal}{$logged}{literal}';	
                     if (logged==0) {
                       window.intercomSettings = {
                         app_id: "sqnyrtsg",
                         custom_launcher_selector: '#my_custom_link',
                       };
                       } else { 
                     (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/sqnyrtsg';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
                     
                     
                       window.intercomSettings = {
                         app_id: "sqnyrtsg",
                         custom_launcher_selector: '#my_custom_link',
                         name: '{/literal}{$cookie->customer_firstname}{literal}', // Full name
                         email: '{/literal}{$cookie->email}{literal}', // Email address
                       };
                       }
                  </script>  
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
                  <script type="text/javascript" src="/themes/ayon/js/button.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128664289-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128664289-2');
</script>
    <script>    
	    if(window.location.pathname == '/'){              
var logged = '{/literal}{$logged}{literal}';		    
var button_selling = document.getElementById("start_selling");
if (logged==0) {
                      
button_selling.setAttribute('onclick','showLoginPopup()')                      
               }  
else{
	
button_selling.setAttribute('onclick','window.location.replace("/sell-my-tack"),500;')                      	
	
}
}
                            
     </script> 
                              
                  {/literal}
            
                  
               </head>
               <body {if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{/if}{if $hide_right_column} hide-right-column{/if}{if $content_only} content_only{/if} lang_{$lang_iso}{if $page_name !='index'} not_home{/if}{if isset($roythemes.header_trah) && $roythemes.header_trah == '1' && $page_name == 'index'} transparent{/if}{if isset($roythemes.header_trao) && $roythemes.header_trao == '1' && $page_name !== 'index'} transparent{/if} {if isset($roythemes.g_lay) && $roythemes.g_lay == '2'}boxed{/if} header{$roythemes.header_lay} plc_cat_{if isset($roythemes.nc_pc_layout)}{$roythemes.nc_pc_layout}{/if}">               
               {if !$content_only}
               {if isset($restricted_country_mode) && $restricted_country_mode}
               <div id="restricted-country">
                  <p>{l s='You cannot place a new order from your country.'} <span class="bold">{$geolocation_country}</span></p>
               </div>
               {/if}
               <div id="page" class="page">
                  {if isset($roythemes.nc_loader) && $roythemes.nc_loader == "1" }
                  <div class="loader-overlay">
                     <div class="loader">
                        <div class="loader-logo"></div>
                        <div class="loader-con">
                           {if !isset($roythemes.nc_loader_lay) || (isset($roythemes.nc_loader_lay) && $roythemes.nc_loader_lay == "1")}
                           <span class="loader-cube"><span class="loader-inner"></span></span>
                           {/if}
                           {if isset($roythemes.nc_loader_lay)}
                           {if $roythemes.nc_loader_lay == "2" || $roythemes.nc_loader_lay == "3" || $roythemes.nc_loader_lay == "5"}
                           <span class="loader-obj"></span>
                           {/if}
                           {if $roythemes.nc_loader_lay == "4"}
                           <div class="loader-obj"><i></i><i></i><i></i><i></i></div>
                           {/if}
                           {if $roythemes.nc_loader_lay == "6"}
                           <ul class="loader-obj">
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                           </ul>
                           {/if}
                           {/if}
                        </div>
                        <div class="loader-shadow"></div>
                     </div>
                  </div>
                  {/if}
                  {hook h="displayFixed"}
                  <div class="header-wrapper" data-boxed-padding="{if isset($roythemes.g_tp)}{$roythemes.g_tp}{/if}">
                     <header id="header">
                        {capture name='displayBanner'}{hook h='displayBanner'}{/capture}
                        {if $smarty.capture.displayBanner}
                        <div class="top_banner">
                           <div class="container">
                              <div class="row">
                                 {$smarty.capture.displayBanner}
                              </div>
                           </div>
                        </div>
                        {/if}
                        {if isset($roythemes.header_lay) && $roythemes.header_lay == "6"}
                        <div class="nav nav-panel nav-height">
                           <div class="container">
                              <div class="row">
                                 <nav>
                                    {if isset($roythemes.nc_pos) && $roythemes.nc_pos == "2"}
                                    <div class="acc_out">
                                       {hook h="displayAccSub"}
                                    </div>
                                    {/if}
                                    {hook h="displayNav"}
                                 </nav>
                              </div>
                           </div>
                        </div>
                        {/if}
                        <div class="head">
                           <div class="container head-height">
	                           <div class="review">
{* 		                           <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmyusedsaddle%2Fposts%2F580742329108711&width=500" width="500" height="218" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> *}
		                           
	                           </div>
                              <div class="row header_top">
                                 {*
                                 <div id="logo_wrapper" class="col-sm-12 col-md-2 col-xs-12">
                                    <div class="logo_row">
                                       <div class="logo_cell">
                                          <div id="header_logo">
                                             <a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
                                             <img class="logo-normal img-responsive" src="{$modules_dir}roythemescustomizer/upload/logo-normal-{$id_shop}.{if isset($roythemes.logo_normal_ext)}{$roythemes.logo_normal_ext}{else}png{/if}" alt="{$shop_name|escape:'html':'UTF-8'}" />
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 *}
                                 <div class="header-humanoid hidden-xs col-sm-3">
                                    <a href="https://tacktackroom.com">
                                       <!-- avatar-compact-mode -->
                                       <span class="avatar med url"></span>
                                    </a>
                                 </div>
                                {if ($isMobile)||(Context::getContext()->isTablet())} <div class="header-menu-block col-md-1 col-sm-1 col-xs-3 menu-little">
                                    <div class="menu_table">
                                       <div class="menu_wrapper">{hook h='displayMegaMenu'} </div>
                                    </div>
                                 </div>{/if}
                                 <div id="search_block_top" class="col-sm-4 clearfix col-md-6 col-xs-6">
                                    <form id="searchbox" method="get" action="https://tacktackroom.com/search">
                                       <input type="hidden" name="controller" value="search">
                                       <input type="hidden" name="orderby" value="position">
                                       <input type="hidden" name="orderway" value="desc">
                                       <input class="search_query form-control" type="text" id="search_query_top" name="search_query" autocomplete="off" placeholder="Shop for used & new tack...">
                                       {*                                        <input class="search_query form-control" onfocus="hideIcon(this);" type="text" id="search_query_top" name="search_query" autocomplete="off"> *}
                                       <button type="submit" name="submit_search" class="btn btn-default button-search disabled">
                                       {* 			<span>Search</span> *}
                                       <span class="rs_call_icon"><span class="word">Search</span></span>
                                       </button>
                                    </form>
                                 </div>
                                 {if (isset($roythemes.nc_pos) && $roythemes.nc_pos == "2") && (isset($roythemes.header_lay) && $roythemes.header_lay == "7")}
                                 <div class="acc_out">
                                    {hook h="displayAccSub"}
                                 </div>
                                 {/if}
                                 <div class="col-lg-' col-sm-4">
                                    {if isset($roythemes.header_lay) && $roythemes.header_lay == "5" }
                                    <div class="header-nav-block hidden-xs">
                                       <div class="nav nav-panel nav-height">
                                          <nav>{hook h="displayNav"}</nav>
                                       </div>
                                    </div>
                                    {/if}
                                    <div class="header-right-block">
                                       {if (isset($roythemes.nc_pos) && $roythemes.nc_pos == "2") && (isset($roythemes.header_lay) && $roythemes.header_lay !== "4" && $roythemes.header_lay !== "6" && $roythemes.header_lay !== "7")}
                                       <div class="acc_out">
                                          <div>{hook h="displayAccSub"}</div>
                                       </div>
                                       {/if}
                                       {if isset($roythemes.header_lay) && $roythemes.header_lay !== "5" || $roythemes.header_lay !== "6" }
                                       <div class="account_top">{hook h="displayAccount"}</div>
                                       {/if}
                                       {hook h="displayTopSearch" mod='royblocksearch'}
                                       {if (isset($roythemes.nc_pos) && $roythemes.nc_pos == "2") && (isset($roythemes.header_lay) && $roythemes.header_lay == "4")}
                                       <div class="acc_out">
                                          {hook h="displayAccSub"}
                                       </div>
                                       {/if}
                                       {hook h="displayTopCart" mod='royblockcart'}
                                    </div>
                                 </div>
                              </div>
                              <div class="row row_menu">
 {if (!$isMobile)&&(!Context::getContext()->isTablet())}
                                 <div class="header-menu-block hidden-xs hidden-sm menu_for_big overflow_menu">
                                    <div class="menu_table">
                                       <div class="menu_wrapper">{hook h='displayMegaMenu'} </div>
                                    </div>
                                 </div>
                                 {/if}
                              </div>
                           </div>
                        </div>
                     </header>
                  </div>
                  <div class="columns-container-top{if isset($roythemes.breadcrumb) && $roythemes.breadcrumb == "0" && $page_name !='index' && $page_name !='pagenotfound'}no-bread{/if}" >
                  <div id="topcolumns">
                     <div class="container">
                        <div class="row">
                           <div id="top_column" class="center_column col-xs-12 col-sm-12">
                              {if $page_name == 'index'}
                              {hook h="displayTopColumn"}
                              {/if}
                              {* 									{hook h="homepage_banner"} *}
                           </div>
                           {if isset($roythemes.breadcrumb) && $roythemes.breadcrumb == "1" && $page_name =='category'|| $page_name =='new-products'}
	                           <div class="pagename">
	                              <h1 class="page-heading">{assign var=shop_name_to_trim value=" - $shop_name"}
	                              {$meta_title|replace:$shop_name_to_trim:''|escape:'htmlall':'UTF-8'}	 </h1>                                                               							</div>
	                           {include file="$tpl_dir./breadcrumb.tpl"}
                           {elseif $page_name =='search'}
                           <div class="pagename">
							<h1 
								{if isset($instant_search) && $instant_search}id="instant_search_results"{/if} 
								class="page-heading {if !isset($instant_search) || (isset($instant_search) && !$instant_search)} product-listing{/if}">
								    {l s='Search'}&nbsp;
								    {if $nbProducts > 0}
								        <span class="lighter">
								            "{if isset($search_query) && $search_query}{$search_query|escape:'html':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'html':'UTF-8'}{elseif $ref}{$ref|escape:'html':'UTF-8'}{/if}"
								        </span>
								    {/if}
								    {if isset($instant_search) && $instant_search}
								        <a href="#" class="close">
								            {l s='Return to the previous page'}
								        </a>
								    {else}
								        <span class="heading-counter">
								            {if $nbProducts == 1}{l s='%d result has been found.' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' sprintf=$nbProducts|intval}{/if}
								        </span>
								    {/if}
								</h1>                         
							</div> 
                           {include file="$tpl_dir./breadcrumb.tpl"}                           
                           {/if}
                        </div>
                     </div>
                  </div>
               </div>
               <div class="columns-container-middle">
               <div id="middlecolumns">
               <div class="container">
               <div class="row">
               {if isset($left_column_size) && !empty($left_column_size)}
               <div id="left_column" class="column col-xs-6 col-sm-4 col-md-3">{$HOOK_LEFT_COLUMN}</div>
               {/if}
               {*
               {if $page_name=='category'} 
               <div class="col-xs-6 hidden-md hidden-lg sortbar_xs">
                  <div class="content_sortPagiBar clearfix">
                     <div class="sortPagiBar clearfix">
                        {include file="./product-sort.tpl"}
                        {include file="./product-compare.tpl"}
                        <div class="product-count hidden-xs hidden-sm">
                           {if ($n*$p) < $nb_products }
                           {assign var='productShowing' value=$n*$p}
                           {else}
                           {assign var='productShowing' value=($n*$p-$nb_products-$n*$p)*-1}
                           {/if}
                           {if $p==1}
                           {assign var='productShowingStart' value=1}
                           {else}
                           {assign var='productShowingStart' value=$n*$p-$n+1}
                           {/if}
                           {if $nb_products > 1}{l s='Showing %1$d - %2$d of %3$d items' sprintf=[$productShowingStart, $productShowing, $nb_products]}{else}{l s='Showing %1$d - %2$d of 1 item' sprintf=[$productShowingStart, $productShowing]}{/if}
                        </div>
                     </div>
                  </div>
               </div>
               {/if}
               *}
               <div id="center_column" class="center_column col-xs-12 {if $page_name == 'category'||$page_name == 'new-products'||$page_name == 'search'||$page_name == 'manufacturer'}col-sm-8 col-md-9{else if $page_name == 'product'}col-sm-12 col-md-12{else}col-sm-12 col-md-12{/if} {$page_name}" {if $page_name == 'category'||$page_name == 'new-products'||$page_name == 'search'||$page_name == 'manufacturer'}style="background-color: #f5f7f9"{/if}>
               {/if}
               <input type="hidden" id="nc_p_hover" name="nc_p_hover" value="{if isset($roythemes.nc_p_hover)}{$roythemes.nc_p_hover}{/if}" />
               {if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
               {$js_def}
               {foreach from=$js_files item=js_uri}
               <script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
               {/foreach}
               {/if}