{*
* RoyThemes AYON Theme
*}
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="{$lang_iso}"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7" lang="{$lang_iso}"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="{$lang_iso}"><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9" lang="{$lang_iso}"><![endif]-->
<html lang="{$lang_iso}" xmlns:og="http://ogp.me/ns#" itemscope itemtype="http://schema.org/WebPage">
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
{/if}
{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
{/if}
        <meta name="generator" content="PrestaShop" />
        <meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
        <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
        <link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
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
        {if !$page_name=='product' && !$page_name=='module-smartblog-details'}
            <meta property="og:url" content="http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}"/>
            <meta property="og:image" content="{$logo_url}" />
        {/if}
        {if $page_name=='product'}
            <meta property="og:image" content="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'large')}">
        {/if}
        {if $page_name=='module-smartblog-details'}
            <meta property="og:url" content="http://{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}"/>
            <meta property="og:image" content="{$base_dir}modules/smartblog/images/{$post_img}-single-default.jpg">
        {/if}
        <style>
@import url('https://fonts.googleapis.com/css?family=Pacifico');
@import url('https://fonts.googleapis.com/css?family=Lato');
</style>
{literal}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<SCRIPT type="text/javascript">	
	// tilt.js
$('.Button').tilt({ scale: 1.1, speed: 1000 });

// click event
$('.Button').on('click', function(e) {
  explode(e.pageX, e.pageY);
});

document.addEventListener("touchstart", function(){}, true);

// symbols
function explode(x, y) {
  
  var symbolArray = [
    '#donut',
    '#circle',
    '#tri_hollow',
    '#triangle',
    '#square',
    '#squ_hollow'
  ];
  
  var particles = 10, 
      explosion = $('.Button-wrapper');
      
  for (var i = 0; i < particles; i++) {
    
    var randomSymbol = Math.floor(Math.random()*symbolArray.length);
    // positioning x,y of the particles
    var x = (explosion.width() / 2) + rand(80, 150) * Math.cos(2 * Math.PI * i / rand(particles - 10, particles + 10)),
        y = (explosion.height() / 2) + rand(80, 150) * Math.sin(2 * Math.PI * i / rand(particles - 10, particles + 10)),
        deg = rand(0, 360) + 'deg',
        scale = rand(0.5, 1.1),
        // particle element creation
        elm = $(
          '<svg class="Symbol" style="top:' + y + 'px; left:' + x + 'px; transform: scale(' + scale + ') rotate(' + deg + ');">' + 
          '<use xlink:href="' + symbolArray[randomSymbol] + '" />' + 
          '</svg>'
         );

    if (i == 0) { // only need to target one of the symbols.
      // css3 animation end detection
      elm.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
        elm.siblings('svg').remove().end().remove(); // remove particles when animation is over.
      });
    }
    explosion.prepend(elm);
  }
}

function rand(min, max) {
  return Math.floor(Math.random() * (max + 1)) + min;
}
$(document).ready(function(){
    $("button").click(function(){
        $("#hiw").slideToggle( "slow" );
    });
});
var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');
  
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    
})(jQuery);
</script>
{/literal}
	</head>
	<body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{/if}{if $hide_right_column} hide-right-column{/if}{if $content_only} content_only{/if} lang_{$lang_iso}{if $page_name !='index'} not_home{/if}{if isset($roythemes.header_trah) && $roythemes.header_trah == '1' && $page_name == 'index'} transparent{/if}{if isset($roythemes.header_trao) && $roythemes.header_trao == '1' && $page_name !== 'index'} transparent{/if} {if isset($roythemes.g_lay) && $roythemes.g_lay == '2'}boxed{/if} header{$roythemes.header_lay} plc_cat_{if isset($roythemes.nc_pc_layout)}{$roythemes.nc_pc_layout}{/if}">
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
											<ul class="loader-obj"><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
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
							<div class="row">
                                <div id="logo_wrapper" class="col-md-2 col-xs-12">
                                    <div class="logo_row">
                                        <div class="logo_cell">
                                            <div id="header_logo">
                                                <a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
                                                    <img class="logo-normal img-responsive" src="{$modules_dir}roythemescustomizer/upload/logo-normal-{$id_shop}.{if isset($roythemes.logo_normal_ext)}{$roythemes.logo_normal_ext}{else}png{/if}" alt="{$shop_name|escape:'html':'UTF-8'}" />

                                                    <img class="logo-trans img-responsive" src="{$modules_dir}roythemescustomizer/upload/logo-trans-{$id_shop}.{if isset($roythemes.logo_trans_ext)}{$roythemes.logo_trans_ext}{else}png{/if}" alt="{$shop_name|escape:'html':'UTF-8'}" />
                                                    <img class="logo-sticky img-responsive" src="{$modules_dir}roythemescustomizer/upload/logo-sticky-{$id_shop}.{if isset($roythemes.logo_sticky_ext)}{$roythemes.logo_sticky_ext}{else}png{/if}" alt="{$shop_name|escape:'html':'UTF-8'}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="search_block_top" class="col-sm-3 clearfix col-md-5 col-xs-3">
	                                <div>
										<form id="searchbox" method="get" action="https://attractivetackroom.com/search">
											<input type="hidden" name="controller" value="search">
											<input type="hidden" name="orderby" value="position">
											<input type="hidden" name="orderway" value="desc">
											<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="">
											<button type="submit" name="submit_search" class="btn btn-default button-search">
									{* 			<span>Search</span> *}
												<span class="rs_call_icon"><span class="word">Search</span></span>
											</button>
										</form>
									</div>
                                </div>

								{if (isset($roythemes.nc_pos) && $roythemes.nc_pos == "2") && (isset($roythemes.header_lay) && $roythemes.header_lay == "7")}
									<div class="acc_out">
										{hook h="displayAccSub"}
									</div>
								{/if}
								{if isset($roythemes.header_lay) && $roythemes.header_lay == "5" }
								<div class="header-nav-block col-md-3">
									<div class="nav nav-panel nav-height">
										<nav>{hook h="displayNav"}</nav>
									</div>
								</div>
								{/if}
																<div class="header-right-block hidden-sm hidden-xs">

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
							<div class="row row_menu">
								<div class="header-menu-block hidden-xs hidden-sm menu_for_big">
                                    <div class="menu_table">
                                        <div class="menu_wrapper">{hook h='displayMegaMenu'} </div>
                                    </div>
								</div>
							</div>
							</div>
						</div>
					</div>
{*
				<div id="logo_payment_header">
					<a href="https://www.braintreepayments.com">
        <img class="braintree-logo" src="/img/header/braintree_logo.svg" alt="Braintree" width="124">
      </a>
					
*}
				</div>
				
				</header>
			</div>
			<div class="columns-container-top {if isset($roythemes.breadcrumb) && $roythemes.breadcrumb == "0" && $page_name !='index' && $page_name !='pagenotfound'}no-bread{/if}" >
				<div id="topcolumns">
					<div class="container">
						<div class="row">
							<div id="top_column" class="center_column col-xs-12 col-sm-12">
								{if $page_name == 'index'}
							{hook h="displayTopColumn"}
							{/if}
{* 									{hook h="homepage_banner"} *}</div>
							
							{if isset($roythemes.breadcrumb) && $roythemes.breadcrumb == "1" && $page_name !='index' || $page_name =='product'}
								<div class="pagename">
								{assign var=shop_name_to_trim value=" - $shop_name"}
								{$meta_title|replace:$shop_name_to_trim:''|escape:'htmlall':'UTF-8'}
								</div>{include file="$tpl_dir./breadcrumb.tpl"}
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
							<div id="left_column" class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
							{/if}
							<div id="center_column" class="center_column col-xs-12 col-sm-{12 - $left_column_size - $right_column_size} {$page_name}" {if $page_name == 'category'}style="background-color: #F9F9F9"{/if}>
	{/if}
							<input type="hidden" id="nc_p_hover" name="nc_p_hover" value="{if isset($roythemes.nc_p_hover)}{$roythemes.nc_p_hover}{/if}" />


	                        {if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
	                        {$js_def}
	                        {foreach from=$js_files item=js_uri}
	                            <script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
	                        {/foreach}
{/if}
