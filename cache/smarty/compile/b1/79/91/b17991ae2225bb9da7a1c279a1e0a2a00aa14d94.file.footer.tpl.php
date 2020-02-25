<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:28
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3977783265e4f2684103196-11015225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17991ae2225bb9da7a1c279a1e0a2a00aa14d94' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/footer.tpl',
      1 => 1576008620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3977783265e4f2684103196-11015225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'page_name' => 0,
    'isMobile' => 0,
    'product_has_offer_by_customer' => 0,
    'allow_oosp' => 0,
    'product' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'HOOK_PRODUCT_ACTIONS' => 0,
    'logged' => 0,
    'roythemes' => 0,
    'defaultLat' => 0,
    'defaultLong' => 0,
    'hasStoreIcon' => 0,
    'img_store_dir' => 0,
    'img_ps_dir' => 0,
    'searchUrl' => 0,
    'logo_store' => 0,
    'theme_dir' => 0,
    'HOOK_FOOTER' => 0,
    'modules_dir' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f268414f535_37774527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f268414f535_37774527')) {function content_5e4f268414f535_37774527($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
</div><!-- #center_column -->
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
<?php }?>
</div><!-- .row -->
<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
</div><!-- .container -->
<?php }?>
</div><!-- #middle-columns -->
</div><!-- .columns-container -->
<!-- Footer -->

 <?php if (($_smarty_tpl->tpl_vars['isMobile']->value)||(Context::getContext()->isTablet())) {?>
	<?php if ($_smarty_tpl->tpl_vars['page_name']->value=="product") {?>
	<div id="menu_mobile" class="mobile-menu">
		 <div class="product_menu">
			   
				<button data-toggle="modal" data-target="#startChat"> <img src="https://tacktackroom.com/img/footer/mobile/message.png" alt="Message"><span><?php echo smartyTranslate(array('s'=>'Message seller'),$_smarty_tpl);?>
</span></button>	   
		   </div>
		 <div  class="product_menu">
		       
		        <a href="javascript:;" class="<?php if ($_smarty_tpl->tpl_vars['product_has_offer_by_customer']->value==1) {?>not-active<?php }?>" data-toggle="modal" data-target="#makeOfferModal"> 
			        <img src="https://tacktackroom.com/img/footer/mobile/offer.png"/><span><?php echo smartyTranslate(array('s'=>'Make an offer'),$_smarty_tpl);?>
</span></a>
		 </div>
		 <div   id="add_to_cart" class="product_menu">
		
		        <button type="submit" name="Submit" class="<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value)||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> disabled <?php }?>"><img src="https://tacktackroom.com/img/footer/mobile/purchase.png" alt="Home">	  
		  	     <span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
		        </button>
		   </div>
		 <div  class="product_menu">
		  	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value;?>
<?php }?>
		</div>
	</div>
	<?php } else { ?>
	<div id="menu_mobile" class="mobile-menu">
	   <a href="/">
	      <img src="https://tacktackroom.com/img/footer/mobile/tackroom.png" alt="Home">
	      <div>Home</div>
	   </a>
	   <a href="/40-for-the-horse">
	      <img src="https://tacktackroom.com/img/footer/mobile/horse-head.png" alt="Horse Equipment">
	      <div>Horse</div>
	   </a>
	   <a <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>href="https://tacktackroom.com/module/marketplace/addproduct"<?php } else { ?>onclick="showLoginPopup()"<?php }?>>
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
	<?php }?>
<?php }?>
</div>
<?php if ((!$_smarty_tpl->tpl_vars['isMobile']->value)&&(!Context::getContext()->isTablet())) {?>
<div class="footer-wrapper hidden-xs">
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="8") {?>
   <?php $_smarty_tpl->tpl_vars['defaultLat'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['defaultLat']->value)&&$_smarty_tpl->tpl_vars['defaultLat']->value ? $_smarty_tpl->tpl_vars['defaultLat']->value : ''), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['defaultLong'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['defaultLong']->value)&&$_smarty_tpl->tpl_vars['defaultLong']->value ? $_smarty_tpl->tpl_vars['defaultLong']->value : ''), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['hasStoreIcon'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['hasStoreIcon']->value)&&$_smarty_tpl->tpl_vars['hasStoreIcon']->value ? $_smarty_tpl->tpl_vars['hasStoreIcon']->value : ''), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['img_store_dir'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['img_store_dir']->value)&&$_smarty_tpl->tpl_vars['img_store_dir']->value ? $_smarty_tpl->tpl_vars['img_store_dir']->value : ''), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['img_ps_dir'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['img_ps_dir']->value)&&$_smarty_tpl->tpl_vars['img_ps_dir']->value ? $_smarty_tpl->tpl_vars['img_ps_dir']->value : ''), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['searchUrl'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['searchUrl']->value)&&$_smarty_tpl->tpl_vars['searchUrl']->value ? $_smarty_tpl->tpl_vars['searchUrl']->value : ''), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['logo_store'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['logo_store']->value)&&$_smarty_tpl->tpl_vars['logo_store']->value ? $_smarty_tpl->tpl_vars['logo_store']->value : ''), null, 0);?>
   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('map'=>''),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('markers'=>array()),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('infoWindow'=>''),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('locationSelect'=>''),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultLat'=>$_smarty_tpl->tpl_vars['defaultLat']->value),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultLong'=>$_smarty_tpl->tpl_vars['defaultLong']->value),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('hasStoreIcon'=>$_smarty_tpl->tpl_vars['hasStoreIcon']->value),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_store_dir'=>$_smarty_tpl->tpl_vars['img_store_dir']->value),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('searchUrl'=>$_smarty_tpl->tpl_vars['searchUrl']->value),$_smarty_tpl);?>

   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('logo_store'=>$_smarty_tpl->tpl_vars['logo_store']->value),$_smarty_tpl);?>

   <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_1')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_1'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No stores were found. Please try selecting a wider radius.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_1'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_2')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_2'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'store found -- see details:','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_2'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_3')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_3'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'stores found -- view all results:','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_3'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_4')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_4'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Phone:','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_4'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_5')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_5'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Get directions','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_5'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'translation_6')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_6'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Not found','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'translation_6'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="7") {?>
   <div class="foot_line">
      <div class="container">
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterLine'),$_smarty_tpl);?>

      </div>
   </div>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="8") {?>
   <footer id="footer" class="container">
      
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="7") {?>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterTop'),$_smarty_tpl);?>

      <?php }?>
      <div class="row displayresp">
         <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="4"&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="6") {?>
         <div class="foot_left">
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="3") {?><img class="logo_footer img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['theme_dir']->value;?>
/themes/ayon/img/logo/ttr_round_medium.png" /><?php }?>                            
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterLeft'),$_smarty_tpl);?>

            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="3"||$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="4")) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterLeftMap'),$_smarty_tpl);?>

            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="5")) {?>  
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_copyright_display'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_copyright_display']=="1") {?>
            <div class="copy_left"><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['copyright_text'])) {?> <?php echo $_smarty_tpl->tpl_vars['roythemes']->value['copyright_text'];?>
 <?php } else { ?> <span>Copyright 2016 All Rights Reserved</span></div>
            <?php }?>
            <?php }?> 
            <?php }?>                        
         </div>
         <?php }?>
         <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="5")) {?>  
         <div class="foot_right">
            <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
                  
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="4"||$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="6") {?>
            <div class="foot_left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterLeft'),$_smarty_tpl);?>

               <img class="logo_footer img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
roythemescustomizer/upload/logo-footer-<?php echo Context::getContext()->shop->id;?>
.<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'])) {?><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['logo_footer_ext'];?>
<?php } else { ?>png<?php }?>" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
               <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterLeft'),$_smarty_tpl);?>

               <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="6")) {?>
               <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterLeftNews'),$_smarty_tpl);?>

               <?php }?>
               <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterLeftMap'),$_smarty_tpl);?>
                 
            </div>
            <?php }?>   
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="1"||$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="2")) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterRightNews'),$_smarty_tpl);?>

            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="3"&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="4"&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="6")) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterRightMap'),$_smarty_tpl);?>

            <?php }?>
         </div>
         <?php }?> 
         <div class="foot_bottom"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBottom'),$_smarty_tpl);?>
</div>
      </div>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="7") {?>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBottom'),$_smarty_tpl);?>

      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="5") {?>
</div>
<?php }?>
</footer>
<div class="mapwrapper">
   <div id="map"></div>
   <div class="store-content-select selector3">
      <select id="locationSelect" class="form-control">
         <option>-</option>
      </select>
   </div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="5"&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']!=="6")) {?>   
<div class="foot_copyright">
   <div class="container">
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="3"||$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="4"||$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="7")) {?>                        
      <div class="copy_cell">
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterCopyNews'),$_smarty_tpl);?>

      </div>
      <?php }?>
      <div class="copy_cell <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="3"||$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="4"||$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="7")) {?>copy_center<?php }?>">
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_copyright_display'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_copyright_display']=="1") {?>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['copyright_text'])) {?> <span class="copytext"><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['copyright_text'];?>
</span> <?php } else { ?> <span>Copyright 2016 All Rights Reserved</span> <?php }?>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['footer_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['footer_lay']=="8") {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>
<?php }?>
   </div>
</div>
</div>
<?php }?>
</div><!-- #footer -->
<?php }?>
</div>		
<!-- #page -->
<div class="side-menu"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySideMobile'),$_smarty_tpl);?>
</div>
<div id="menu_close" class="menu-close"></div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeviBox','mod'=>'roylevibox'),$_smarty_tpl);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="is_media"></div>
</body>
</html><?php }} ?>
