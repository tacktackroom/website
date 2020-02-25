<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11527332915e4f2683c2b742-75894667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04b34d99b6bd1ae1301426cec3dd20311537ba9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/header.tpl',
      1 => 1567192920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11527332915e4f2683c2b742-75894667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'roythemes' => 0,
    'HOOK_HEADER' => 0,
    'shop_name' => 0,
    'page_name' => 0,
    'product' => 0,
    'cover' => 0,
    'link' => 0,
    'logged' => 0,
    'cookie' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'isMobile' => 0,
    'shop_name_to_trim' => 0,
    'instant_search' => 0,
    'nbProducts' => 0,
    'search_query' => 0,
    'search_tag' => 0,
    'ref' => 0,
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683c8da34_30402627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683c8da34_30402627')) {function content_5e4f2683c8da34_30402627($_smarty_tpl) {?><?php if (!is_callable('smarty_function_implode')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/function.implode.php';
if (!is_callable('smarty_modifier_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/modifier.replace.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> 
<html class="no-js lt-ie9 lt-ie8 lt-ie7 " lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
   <![endif]-->
   <!--[if IE 7]>
   <html class="no-js lt-ie9 lt-ie8 ie7" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
      <![endif]-->
      <!--[if IE 8]>
      <html class="no-js lt-ie9 ie8" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
         <![endif]-->
         <!--[if gt IE 8]> 
         <html class="no-js ie9" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
            <![endif]-->
            <html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" xmlns:og="http://ogp.me/ns#" itemscope itemtype="http://schema.org/WebPage" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
               <head>    
<meta property="fb:app_id" content="2625863847485184" />	
<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">                             
     
 
	             <meta property="og:image:width" content="100%" />
				 <meta property="og:image:height" content="auto" />
                  <meta charset="utf-8" />
                  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover"/>
                  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
                  <?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
                  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                  <?php }?>
                  <?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
                  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                  <?php }?>
                  <meta name="generator" content="PrestaShop" />
                  <meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />

                  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

                  <meta name="apple-mobile-web-app-capable" content="yes" />
                  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
                  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
                  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
                  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
                  <?php $_smarty_tpl->tpl_vars['id_shop'] = new Smarty_variable(Context::getContext()->shop->id, null, 0);?>
                  <?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
                  <?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
                  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
                  <?php } ?>
                  <?php }?>
                  <?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
                  <?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

                  <?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
                  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
                  <?php } ?>
                  <?php }?>
                  <!--[if IE 8]>
                  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                  <![endif]-->
                  <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['font_include'])) {?><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['font_include'];?>
 <?php }?>
                  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

                  <meta property="og:title" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                  <meta property="og:site_name" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                  <meta property="og:type" content="website">
                  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                  <meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
"/>
                  
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
					<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large');?>
">
					        <?php } else { ?>
					<meta property="og:image" content="https://tacktackroom.com/themes/ayon/img/logo/ttr_round.png" />
					<?php }?>                  
                  
                                 <style>
                     @import url('https://fonts.googleapis.com/css?family=Pacifico');
                     @import url('https://fonts.googleapis.com/css?family=Lato');
                  </style>
                   
      <script>
                     var logged = '<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
';	
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
                         name: '<?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
', // Full name
                         email: '<?php echo $_smarty_tpl->tpl_vars['cookie']->value->email;?>
', // Email address
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
var logged = '<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
';		    
var button_selling = document.getElementById("start_selling");
if (logged==0) {
                      
button_selling.setAttribute('onclick','showLoginPopup()')                      
               }  
else{
	
button_selling.setAttribute('onclick','window.location.replace("/sell-my-tack"),500;')                      	
	
}
}
                            
     </script> 
                              
                  
            
                  
               </head>
               <body <?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php }?><?php if ($_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?> not_home<?php }?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_trah'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_trah']=='1'&&$_smarty_tpl->tpl_vars['page_name']->value=='index') {?> transparent<?php }?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_trao'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_trao']=='1'&&$_smarty_tpl->tpl_vars['page_name']->value!=='index') {?> transparent<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['g_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['g_lay']=='2') {?>boxed<?php }?> header<?php echo $_smarty_tpl->tpl_vars['roythemes']->value['header_lay'];?>
 plc_cat_<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pc_layout'])) {?><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_pc_layout'];?>
<?php }?>">               
               <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
               <?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
               <div id="restricted-country">
                  <p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['geolocation_country']->value;?>
</span></p>
               </div>
               <?php }?>
               <div id="page" class="page">
                  <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_loader']=="1") {?>
                  <div class="loader-overlay">
                     <div class="loader">
                        <div class="loader-logo"></div>
                        <div class="loader-con">
                           <?php if (!isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay'])||(isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay']=="1")) {?>
                           <span class="loader-cube"><span class="loader-inner"></span></span>
                           <?php }?>
                           <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay'])) {?>
                           <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay']=="2"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay']=="3"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay']=="5") {?>
                           <span class="loader-obj"></span>
                           <?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay']=="4") {?>
                           <div class="loader-obj"><i></i><i></i><i></i><i></i></div>
                           <?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['roythemes']->value['nc_loader_lay']=="6") {?>
                           <ul class="loader-obj">
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                              <li></li>
                           </ul>
                           <?php }?>
                           <?php }?>
                        </div>
                        <div class="loader-shadow"></div>
                     </div>
                  </div>
                  <?php }?>
                  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayFixed"),$_smarty_tpl);?>

                  <div class="header-wrapper" data-boxed-padding="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['g_tp'])) {?><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['g_tp'];?>
<?php }?>">
                     <header id="header">
                        <?php $_smarty_tpl->_capture_stack[0][] = array('displayBanner', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <?php if (Smarty::$_smarty_vars['capture']['displayBanner']) {?>
                        <div class="top_banner">
                           <div class="container">
                              <div class="row">
                                 <?php echo Smarty::$_smarty_vars['capture']['displayBanner'];?>

                              </div>
                           </div>
                        </div>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']=="6") {?>
                        <div class="nav nav-panel nav-height">
                           <div class="container">
                              <div class="row">
                                 <nav>
                                    <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pos'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pos']=="2") {?>
                                    <div class="acc_out">
                                       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAccSub"),$_smarty_tpl);?>

                                    </div>
                                    <?php }?>
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

                                 </nav>
                              </div>
                           </div>
                        </div>
                        <?php }?>
                        <div class="head">
                           <div class="container head-height">
	                           <div class="review">

		                           
	                           </div>
                              <div class="row header_top">
                                 
                                 <div class="header-humanoid hidden-xs col-sm-3">
                                    <a href="https://tacktackroom.com">
                                       <!-- avatar-compact-mode -->
                                       <span class="avatar med url"></span>
                                    </a>
                                 </div>
                                <?php if (($_smarty_tpl->tpl_vars['isMobile']->value)||(Context::getContext()->isTablet())) {?> <div class="header-menu-block col-md-1 col-sm-1 col-xs-3 menu-little">
                                    <div class="menu_table">
                                       <div class="menu_wrapper"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMegaMenu'),$_smarty_tpl);?>
 </div>
                                    </div>
                                 </div><?php }?>
                                 <div id="search_block_top" class="col-sm-4 clearfix col-md-6 col-xs-6">
                                    <form id="searchbox" method="get" action="https://tacktackroom.com/search">
                                       <input type="hidden" name="controller" value="search">
                                       <input type="hidden" name="orderby" value="position">
                                       <input type="hidden" name="orderway" value="desc">
                                       <input class="search_query form-control" type="text" id="search_query_top" name="search_query" autocomplete="off" placeholder="Shop for used & new tack...">
                                       
                                       <button type="submit" name="submit_search" class="btn btn-default button-search disabled">
                                       
                                       <span class="rs_call_icon"><span class="word">Search</span></span>
                                       </button>
                                    </form>
                                 </div>
                                 <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pos'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pos']=="2")&&(isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']=="7")) {?>
                                 <div class="acc_out">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAccSub"),$_smarty_tpl);?>

                                 </div>
                                 <?php }?>
                                 <div class="col-lg-' col-sm-4">
                                    <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']=="5") {?>
                                    <div class="header-nav-block hidden-xs">
                                       <div class="nav nav-panel nav-height">
                                          <nav><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>
</nav>
                                       </div>
                                    </div>
                                    <?php }?>
                                    <div class="header-right-block">
                                       <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pos'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pos']=="2")&&(isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']!=="4"&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']!=="6"&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']!=="7")) {?>
                                       <div class="acc_out">
                                          <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAccSub"),$_smarty_tpl);?>
</div>
                                       </div>
                                       <?php }?>
                                       <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']!=="5"||$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']!=="6") {?>
                                       <div class="account_top"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAccount"),$_smarty_tpl);?>
</div>
                                       <?php }?>
                                       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopSearch",'mod'=>'royblocksearch'),$_smarty_tpl);?>

                                       <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pos'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pos']=="2")&&(isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']=="4")) {?>
                                       <div class="acc_out">
                                          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAccSub"),$_smarty_tpl);?>

                                       </div>
                                       <?php }?>
                                       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopCart",'mod'=>'royblockcart'),$_smarty_tpl);?>

                                    </div>
                                 </div>
                              </div>
                              <div class="row row_menu">
 <?php if ((!$_smarty_tpl->tpl_vars['isMobile']->value)&&(!Context::getContext()->isTablet())) {?>
                                 <div class="header-menu-block hidden-xs hidden-sm menu_for_big overflow_menu">
                                    <div class="menu_table">
                                       <div class="menu_wrapper"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMegaMenu'),$_smarty_tpl);?>
 </div>
                                    </div>
                                 </div>
                                 <?php }?>
                              </div>
                           </div>
                        </div>
                     </header>
                  </div>
                  <div class="columns-container-top<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['breadcrumb'])&&$_smarty_tpl->tpl_vars['roythemes']->value['breadcrumb']=="0"&&$_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>no-bread<?php }?>" >
                  <div id="topcolumns">
                     <div class="container">
                        <div class="row">
                           <div id="top_column" class="center_column col-xs-12 col-sm-12">
                              <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
                              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopColumn"),$_smarty_tpl);?>

                              <?php }?>
                              
                           </div>
                           <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['breadcrumb'])&&$_smarty_tpl->tpl_vars['roythemes']->value['breadcrumb']=="1"&&$_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='new-products') {?>
	                           <div class="pagename">
	                              <h1 class="page-heading"><?php $_smarty_tpl->tpl_vars['shop_name_to_trim'] = new Smarty_variable(" - ".((string)$_smarty_tpl->tpl_vars['shop_name']->value), null, 0);?>
	                              <?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['meta_title']->value,$_smarty_tpl->tpl_vars['shop_name_to_trim']->value,''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
	 </h1>                                                               							</div>
	                           <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                           <?php } elseif ($_smarty_tpl->tpl_vars['page_name']->value=='search') {?>
                           <div class="pagename">
							<h1 
								<?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value)&&$_smarty_tpl->tpl_vars['instant_search']->value) {?>id="instant_search_results"<?php }?> 
								class="page-heading <?php if (!isset($_smarty_tpl->tpl_vars['instant_search']->value)||(isset($_smarty_tpl->tpl_vars['instant_search']->value)&&!$_smarty_tpl->tpl_vars['instant_search']->value)) {?> product-listing<?php }?>">
								    <?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
&nbsp;
								    <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value>0) {?>
								        <span class="lighter">
								            "<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)&&$_smarty_tpl->tpl_vars['search_query']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif ($_smarty_tpl->tpl_vars['search_tag']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_tag']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif ($_smarty_tpl->tpl_vars['ref']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ref']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
								        </span>
								    <?php }?>
								    <?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value)&&$_smarty_tpl->tpl_vars['instant_search']->value) {?>
								        <a href="#" class="close">
								            <?php echo smartyTranslate(array('s'=>'Return to the previous page'),$_smarty_tpl);?>

								        </a>
								    <?php } else { ?>
								        <span class="heading-counter">
								            <?php if ($_smarty_tpl->tpl_vars['nbProducts']->value==1) {?><?php echo smartyTranslate(array('s'=>'%d result has been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d results have been found.','sprintf'=>intval($_smarty_tpl->tpl_vars['nbProducts']->value)),$_smarty_tpl);?>
<?php }?>
								        </span>
								    <?php }?>
								</h1>                         
							</div> 
                           <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
                           
                           <?php }?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="columns-container-middle">
               <div id="middlecolumns">
               <div class="container">
               <div class="row">
               <?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
               <div id="left_column" class="column col-xs-6 col-sm-4 col-md-3"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
               <?php }?>
               
               <div id="center_column" class="center_column col-xs-12 <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='new-products'||$_smarty_tpl->tpl_vars['page_name']->value=='search'||$_smarty_tpl->tpl_vars['page_name']->value=='manufacturer') {?>col-sm-8 col-md-9<?php } elseif ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>col-sm-12 col-md-12<?php } else { ?>col-sm-12 col-md-12<?php }?> <?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='new-products'||$_smarty_tpl->tpl_vars['page_name']->value=='search'||$_smarty_tpl->tpl_vars['page_name']->value=='manufacturer') {?>style="background-color: #f5f7f9"<?php }?>>
               <?php }?>
               <input type="hidden" id="nc_p_hover" name="nc_p_hover" value="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_p_hover'])) {?><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_p_hover'];?>
<?php }?>" />
               <?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
               <?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

               <?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
               <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
               <?php } ?>
               <?php }?><?php }} ?>
