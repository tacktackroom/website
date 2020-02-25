<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:11
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13095590625e4f1d8bf09388-01349843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34113058bebfc95265eb8d56ecf3b4cf90788cb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/product.tpl',
      1 => 1580263247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13095590625e4f1d8bf09388-01349843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'priceDisplayPrecision' => 0,
    'priceDisplay' => 0,
    'product' => 0,
    'adminActionDisplay' => 0,
    'confirmation' => 0,
    'roythemes' => 0,
    'images' => 0,
    'freeshipping' => 0,
    'productPriceWithoutReduction' => 0,
    'productPrice' => 0,
    'have_image' => 0,
    'jqZoomEnabled' => 0,
    'content_only' => 0,
    'isMobile' => 0,
    'cover' => 0,
    'link' => 0,
    'largeSize' => 0,
    'img_prod_dir' => 0,
    'lang_iso' => 0,
    'image' => 0,
    'imageIds' => 0,
    'imageTitle' => 0,
    'HOOK_EXTRA_LEFT' => 0,
    'HOOK_EXTRA_RIGHT' => 0,
    'nbComments' => 0,
    'ratings' => 0,
    'averageTotal' => 0,
    'too_early' => 0,
    'is_logged' => 0,
    'allow_guests' => 0,
    'customer_id' => 0,
    'cookie' => 0,
    'wk_mp_product_link' => 0,
    'product_manufacturer' => 0,
    'manpic' => 0,
    'content_dir' => 0,
    'packItems' => 0,
    'packItem' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'currency' => 0,
    'schemaProductPrice' => 0,
    'tax_enabled' => 0,
    'display_tax_label' => 0,
    'ecotax_tax_exc' => 0,
    'ecotax_tax_inc' => 0,
    'unit_price' => 0,
    'pp_shipping_cost' => 0,
    'HOOK_PRODUCT_ACTIONS' => 0,
    'features' => 0,
    'img_ps_dir' => 0,
    'feature' => 0,
    'groups' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'allow_oosp' => 0,
    'display_qties' => 0,
    'last_qties' => 0,
    'HOOK_PRODUCT_OOS' => 0,
    'group' => 0,
    'id_attribute_group' => 0,
    'groupName' => 0,
    'id_attribute' => 0,
    'group_attribute' => 0,
    'colors' => 0,
    'col_img_dir' => 0,
    'img_col_dir' => 0,
    'default_colorpicker' => 0,
    'static_token' => 0,
    'ListedDays' => 0,
    'can_contact_seller_btn' => 0,
    'quantityBackup' => 0,
    'mp_seller_info' => 0,
    'WK_MP_SELLER_DETAILS_ACCESS_9' => 0,
    'shopstore_link' => 0,
    'img_seller' => 0,
    'code_lang' => 0,
    'country_name' => 0,
    'WK_MP_SELLER_DETAILS_ACCESS_7' => 0,
    'sellerDetail' => 0,
    'count_order' => 0,
    'reviews' => 0,
    'i' => 0,
    'k' => 0,
    'j' => 0,
    'HOOK_PRODUCT_TAB_CONTENT' => 0,
    'HOOK_PRODUCT_FOOTER' => 0,
    'token' => 0,
    'countries_list' => 0,
    'logged' => 0,
    'make_offer_url' => 0,
    'id_order' => 0,
    'sid' => 0,
    'name_shop' => 0,
    'back' => 0,
    'base_dir' => 0,
    'attribute_anchor_separator' => 0,
    'attributesCombinations' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
    'combinations' => 0,
    'combinationImages' => 0,
    'customizationFields' => 0,
    'ecotaxTax_rate' => 0,
    'group_reduction' => 0,
    'no_tax' => 0,
    'stock_management' => 0,
    'tax_rate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d8c1957a3_60208559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d8c1957a3_60208559')) {function content_5e4f1d8c1957a3_60208559($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_math')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/modifier.regex_replace.php';
?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (count($_smarty_tpl->tpl_vars['errors']->value)==0) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['priceDisplayPrecision']->value)) {?>
<?php $_smarty_tpl->tpl_vars['priceDisplayPrecision'] = new Smarty_variable(2, null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(true,@constant('NULL'),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,@constant('NULL')), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?>
<?php $_smarty_tpl->tpl_vars['productPrice'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['productPriceWithoutReduction'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,@constant('NULL')), null, 0);?>
<?php $_smarty_tpl->tpl_vars['freeshipping'] = new Smarty_variable(Product::GetCarrierwithid($_smarty_tpl->tpl_vars['product']->value->id), null, 0);?>
<?php }?>
<div class="primary_block row" itemscope itemtype="http://schema.org/Product">
   <?php if (isset($_smarty_tpl->tpl_vars['adminActionDisplay']->value)&&$_smarty_tpl->tpl_vars['adminActionDisplay']->value) {?>
   <div id="admin-action">
      <p><?php echo smartyTranslate(array('s'=>'This product is not visible to your customers.'),$_smarty_tpl);?>

         <input type="hidden" id="admin-action-product-id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
         <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Publish'),$_smarty_tpl);?>
" name="publish_button" class="exclusive" />
         <input type="submit" value="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
" name="lnk_view" class="exclusive" />
      </p>
      <p id="admin-action-result"></p>
   </div>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value) {?>
   <p class="confirmation">
      <?php echo $_smarty_tpl->tpl_vars['confirmation']->value;?>

   </p>
   <?php }?>
   <!-- left infos-->
   <div class="pb-left-column <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_mobadrag'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_mobadrag']=="1")) {?>mobadrag<?php }?> col-xs-12 col-sm-4 col-md-5 <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_mobadots'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_mobadots']=="1")) {?>mobadots<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_mobaarrows'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_mobaarrows']=="1")) {?>mobaarrows<?php }?>">
   <?php if ((!isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']))||(isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']=="1")||(isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']=="2"&&isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2)) {?>
   <!-- product img-->
   <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0||$_smarty_tpl->tpl_vars['product']->value->available_for_order==0) {?>
   <div class="corner-ribbon top-left sticky red shadow top_fade shadow" style="opacity: 1; display: block;">Sold!</div>
   <?php } elseif ($_smarty_tpl->tpl_vars['freeshipping']->value) {?>
   	<div id="ribbon_shipping"><span class="corner-ribbon top-left sticky red shadow top_fade shadow">Free Shipping</span></div>
   <?php }?>		   		
   <div id="image-block" class="clearfix">
      <?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
      <span class="sale-box no-print left">
      <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
      </span>
      <span class="sale-box no-print">
      <span class="sale-label">
      <div id="reduction_percent" <?php if (!$_smarty_tpl->tpl_vars['product']->value->specificPrice||$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']!='percentage') {?> style="display:none;"<?php }?>>
      <span id="reduction_percent_display">
      <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage') {?>-<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*100;?>
%<?php }?>
      </span>
   </div>
   <div id="reduction_amount" <?php if (!$_smarty_tpl->tpl_vars['product']->value->specificPrice||$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']!='amount'||floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])==0) {?> style="display:none"<?php }?>>
   <span id="reduction_amount_display">
   <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount'&&intval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])!=0) {?>
   -<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value-floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>

   <?php }?>
   </span>
</div>
</span>
</span>
<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value) {?>
<span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['have_image']->value) {?>
<span id="view_full_size">
<?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value&&$_smarty_tpl->tpl_vars['have_image']->value&&!$_smarty_tpl->tpl_vars['content_only']->value&&!$_smarty_tpl->tpl_vars['isMobile']->value) {?>
<a class="jqzoom" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" rel="gal1" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
">
<img itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
</a>
<?php } else { ?>
<img id="bigpic" itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>

<?php }?>
</span>
<?php } else { ?>
<span id="view_full_size">
<img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-large_default.jpg" id="bigpic" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>

</span>
<?php }?>
</div> <!-- end image-block -->
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']=="1") {?>
<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0) {?>
<!-- thumbnails -->
<div id="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2) {?>hidden<?php }?>">
   <div id="thumbs_list">
      <ul id="thumbs_list_frame" class="thumb_slider">
         <?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
         <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['last'] = $_smarty_tpl->tpl_vars['image']->last;
?>
         <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
         <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
         <?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
         <?php } else { ?>
         <?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true), null, 0);?>
         <?php }?>
         <li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" data-thumb-order="<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['last']) {?> class="last"<?php }?>>
         <a
         <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value&&$_smarty_tpl->tpl_vars['have_image']->value&&!$_smarty_tpl->tpl_vars['content_only']->value) {?>
         href="javascript:void(0);"
         rel="{gallery: 'gal1', smallimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
',largeimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
'}"
         <?php } else { ?>
         href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
"
         data-fancybox-group="other-views"
         class="fancybox<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image']==$_smarty_tpl->tpl_vars['cover']->value['id_image']) {?> shown<?php }?>"
         <?php }?>
         title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
">
         <img class="img-responsive" id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" itemprop="image" />
         </a>
         </li>
         <?php } ?>
         <?php }?>
      </ul>
   </div>
   <!-- end thumbs_list -->
</div>
<!-- end views-block -->
<!-- end thumbnails -->
<?php }?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']=="2"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']=="3")) {?>
<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0) {?>
<!-- big images -->
<div id="views_block" class="clearfix <?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)<2) {?>hidden<?php }?>">
   <div id="thumbs_list" <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']=="3") {?>data-quantity="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_qq3'])) {?><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_qq3'];?>
<?php }?>" data-loop="<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_lo3'])) {?><?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_lo3'];?>
<?php }?>" <?php }?>>
   <ul id="thumbs_big" class="thumb_<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_image']=="2") {?>2<?php } else { ?>3<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_mobadrag'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_mobadrag']=="1")) {?>mobadrag<?php }?>">
   <?php if (isset($_smarty_tpl->tpl_vars['images']->value)) {?>
   <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
 $_smarty_tpl->tpl_vars['image']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->index++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['thumbnails']['last'] = $_smarty_tpl->tpl_vars['image']->last;
?>
   <?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
   <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
   <?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true), null, 0);?>
   <?php } else { ?>
   <?php $_smarty_tpl->tpl_vars['imageTitle'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true), null, 0);?>
   <?php }?>
   <li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" data-thumb-order="<?php echo $_smarty_tpl->tpl_vars['image']->index;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['thumbnails']['last']) {?> class="last"<?php }?>>
   <a
   <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value&&$_smarty_tpl->tpl_vars['have_image']->value&&!$_smarty_tpl->tpl_vars['content_only']->value) {?>
   href="javascript:void(0);"
   rel="{gallery: 'gal1', smallimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
',largeimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
'}"
   <?php } else { ?>
   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
"
   data-fancybox-group="other-views"
   class="fancybox<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image']==$_smarty_tpl->tpl_vars['cover']->value['id_image']) {?> shown<?php }?>"
   <?php }?>
   title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
">
   <img class="img-responsive" id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" itemprop="image" />
   </a>
   </li>
   <?php } ?>
   <?php }?>
   </ul>
</div>
<!-- end thumbs_list -->
</div> <!-- end views-block -->
<!-- end thumbnails -->
<?php }?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="1") {?> <!-- Layout 1 -->
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
<!-- usefull links-->
<ul id="usefull_link_block" class="clearfix no-print">
   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySocialSharing"),$_smarty_tpl);?>

   <?php if ($_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_LEFT']->value;?>
<?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_print'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_print']=="1") {?>
   <li class="print">
      <a href="javascript:print();">
      <i></i><span><?php echo smartyTranslate(array('s'=>'Print'),$_smarty_tpl);?>
</span>
      </a>
   </li>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['have_image']->value&&!$_smarty_tpl->tpl_vars['jqZoomEnabled']->value) {?><?php }?>
</ul>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value)&&$_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value;?>
<?php }?>
<?php }?> <!-- /Layout 1 -->
<?php if ((!$_smarty_tpl->tpl_vars['isMobile']->value)) {?>
<div id="comments_product_desk"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'myproducthook'),$_smarty_tpl);?>
</div>
<?php }?>
</div> <!-- end pb-left-column -->
<!-- end left infos-->
<!-- center infos -->
<div class="pb-center-column col-xs-7 col-sm-7 pp_stick">

	<div class="stick_inside">
	<div class="container_product_details" >
<!-- <div class="main-column <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_st'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_st']=="1") {?>pp_stick_it<?php }?>"> -->
<!-- Navigation -->

<!-- /Navigation -->
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="3") {?> <!-- layout 3 -->
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_reviews_display_top'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_reviews_display_top']=="1") {?>
<?php if (isset($_smarty_tpl->tpl_vars['nbComments']->value)&&$_smarty_tpl->tpl_vars['nbComments']->value>0) {?>
<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
   <div class="star_content clearfix">
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
      <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']<round($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {?>
      <div class="star star_on"></div>
      <?php } else { ?>
      <div class="star"></div>
      <?php }?>
      <?php endfor; endif; ?>
      <meta itemprop="worstRating" content = "0" />
      <meta itemprop="ratingValue" content = "<?php if (isset($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {?><?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['averageTotal']->value,1), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
      <meta itemprop="bestRating" content = "5" />
      <?php if (empty($_smarty_tpl->tpl_vars['content_only']->value)) {?> <!-- Not in Quick View -->
      <?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?>
      <span class="li">
      <a href="#idTab5" class="reviews">
      <?php echo smartyTranslate(array('s'=>'Read reviews'),$_smarty_tpl);?>
 (<span itemprop="reviewCount"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
</span>)
      </a>
      </span>
      <?php }?>
      <?php if (($_smarty_tpl->tpl_vars['too_early']->value==false&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
      <span class="li">
      <a class="open-comment-form" href="#new_comment_form">
      <?php echo smartyTranslate(array('s'=>'Write a review'),$_smarty_tpl);?>

      </a>
      </span>
      <?php }?>
      <?php }?>
   </div>
</div>
<?php }?>
<?php }?>
<?php }?> <!-- layout 3 -->
<?php if ($_smarty_tpl->tpl_vars['customer_id']->value==$_smarty_tpl->tpl_vars['cookie']->value->id_customer) {?>
<div class="edit_pdt"><a href="<?php echo $_smarty_tpl->tpl_vars['wk_mp_product_link']->value;?>
"><?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>
</a></div>
<?php }?>
<?php $_smarty_tpl->tpl_vars["manpic"] = new Smarty_variable("img/m/".((string)$_smarty_tpl->tpl_vars['product_manufacturer']->value->id_manufacturer).".jpg", null, 0);?>
<?php if (file_exists($_smarty_tpl->tpl_vars['manpic']->value)) {?>
<div class="man_wrapper"><label class="product_manufacturer_logo">
   <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['product_manufacturer']->value->id_manufacturer,$_smarty_tpl->tpl_vars['product_manufacturer']->value->link_rewrite), ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['product_manufacturer']->value->id_manufacturer;?>
-man_default.jpg" /></a>
   </label>
</div>
<?php }?>   
<h1 itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</h1>
<div id="manufacturer" <?php if (!$_smarty_tpl->tpl_vars['product_manufacturer']->value->name) {?>style="display: none;"<?php }?>>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['product_manufacturer']->value->id_manufacturer,$_smarty_tpl->tpl_vars['product_manufacturer']->value->link_rewrite), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->manufacturer_name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>			
</a> 
<span style="font-size: 9px;font-weight: bold">#<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</span>
</div>
<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" style="display:none">
   <span itemprop="ratingValue">5</span> 
   <span itemprop="ratingCount">1</span>                                                      
</div>
<meta itemprop="brand" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->manufacturer_name;?>
">
<meta itemprop="sku" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
<meta itemprop="mpn" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
" />
<div itemprop="review" itemscope itemtype="http://schema.org/Review" style="display:none">
   <span itemprop="author"><?php echo Configuration::get('PS_SHOP_NAME');?>
</span>,
   <meta itemprop="datePublished" content="<?php echo date('Y');?>
-<?php echo date('m');?>
-<?php echo date('d');?>
">
   <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
      <meta itemprop="worstRating" content="1"/>
      <span itemprop="ratingValue">5</span>/
      <span itemprop="bestRating">5</span>
   </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="1"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="2"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="4"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="5")) {?> <!-- layout 1,2 -->
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_reviews_display_top'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_reviews_display_top']=="1") {?>
<?php if (isset($_smarty_tpl->tpl_vars['nbComments']->value)&&$_smarty_tpl->tpl_vars['nbComments']->value>0) {?>
<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
   <div class="star_content clearfix">
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
      <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']<round($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {?>
      <div class="star star_on"></div>
      <?php } else { ?>
      <div class="star"></div>
      <?php }?>
      <?php endfor; endif; ?>
      <meta itemprop="worstRating" content = "0" />
      <meta itemprop="ratingValue" content = "<?php if (isset($_smarty_tpl->tpl_vars['ratings']->value['avg'])) {?><?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['averageTotal']->value,1), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
      <meta itemprop="bestRating" content = "5" />
      <?php if (empty($_smarty_tpl->tpl_vars['content_only']->value)) {?> <!-- Not in Quick View -->
      <?php if ($_smarty_tpl->tpl_vars['nbComments']->value!=0) {?>
      <span class="li">
      <a href="#idTab5" class="reviews">
      <?php echo smartyTranslate(array('s'=>'Read reviews'),$_smarty_tpl);?>
 (<span itemprop="reviewCount"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
</span>)
      </a>
      </span>
      <?php }?>
      <?php if (($_smarty_tpl->tpl_vars['too_early']->value==false&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
      <span class="li">
      <a class="open-comment-form" href="#new_comment_form">
      <?php echo smartyTranslate(array('s'=>'Write a review'),$_smarty_tpl);?>

      </a>
      </span>
      <?php }?>
      <?php }?>
   </div>
</div>
<?php }?>
<?php }?>
<?php }?> <!-- layout 1,2 -->
<?php if ($_smarty_tpl->tpl_vars['product']->value->description_short||count($_smarty_tpl->tpl_vars['packItems']->value)>0) {?>
<div id="short_description_block">
   <?php if ($_smarty_tpl->tpl_vars['product']->value->description_short) {?>
   <div id="short_description_content" class="rte align_justify"><?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>
</div>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value->description) {?>
   <p class="buttons_bottom_block">
      <a href="javascript:{}" class="button">
      <?php echo smartyTranslate(array('s'=>'More details'),$_smarty_tpl);?>

      </a>
   </p>
   <?php }?>
   <?php if (count($_smarty_tpl->tpl_vars['packItems']->value)>0) {?>
   <div class="short_description_pack">
      <h3><?php echo smartyTranslate(array('s'=>'Pack content'),$_smarty_tpl);?>
</h3>
      <?php  $_smarty_tpl->tpl_vars['packItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['packItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['packItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['packItem']->key => $_smarty_tpl->tpl_vars['packItem']->value) {
$_smarty_tpl->tpl_vars['packItem']->_loop = true;
?>
      <div class="pack_content">
         <?php echo $_smarty_tpl->tpl_vars['packItem']->value['pack_quantity'];?>
 x <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['packItem']->value['id_product'],$_smarty_tpl->tpl_vars['packItem']->value['link_rewrite'],$_smarty_tpl->tpl_vars['packItem']->value['category']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['packItem']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
         <p><?php echo $_smarty_tpl->tpl_vars['packItem']->value['description_short'];?>
</p>
      </div>
      <?php } ?>
   </div>
   <?php }?>
</div>
<!-- end short_description_block -->
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="1"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="4"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="5")) {?> <!-- layout 1 -->
<div class="box-info-product">
   <div class="content_prices clearfix">
      <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
      <!-- prices -->
      <div class="price">
         <div class="our_price_display" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <meta itemprop="url" content="<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
" />
            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
            <meta itemprop="itemCondition" content="<?php echo Smarty::$_smarty_vars['capture']['condition'];?>
" />
            <meta itemprop="priceValidUntil" content="<?php echo date('Y')+1;?>
-12-31">
            <div itemprop="seller" itemtype="http://schema.org/Organization" itemscope>
            </div>
            <link itemprop="availability" <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?>href="http://schema.org/OutOfStock"<?php } else { ?>href="http://schema.org/InStock"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2) {?>
            <?php $_smarty_tpl->tpl_vars['schemaProductPrice'] = new Smarty_variable(Tools::ps_round(Tools::convertPrice($_smarty_tpl->tpl_vars['productPrice']->value,$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
            <span id="our_price_display" class="price" itemprop="price" content="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['schemaProductPrice']->value,'.',',');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>
</span>
            <span class="display_calc_shipping"></span>
            

<?php if ($_smarty_tpl->tpl_vars['product']->value->additional_shipping_cost&&$_smarty_tpl->tpl_vars['product']->value->additional_shipping_cost!='0.00') {?>
<div class="estimated_shipping">+ <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>number_format($_smarty_tpl->tpl_vars['product']->value->additional_shipping_cost)),$_smarty_tpl);?>
 shipping</div>
<?php }?>            
            
            
            
            <!--<?php if ($_smarty_tpl->tpl_vars['tax_enabled']->value&&((isset($_smarty_tpl->tpl_vars['display_tax_label']->value)&&$_smarty_tpl->tpl_vars['display_tax_label']->value==1)||!isset($_smarty_tpl->tpl_vars['display_tax_label']->value))) {?>
               <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?><?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
<?php }?>
               <?php }?>-->
            <?php }?>
         </div>
         <div id="old_price"<?php if ((!$_smarty_tpl->tpl_vars['product']->value->specificPrice||!$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])) {?> class="hidden"<?php }?>><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value>=0&&$_smarty_tpl->tpl_vars['priceDisplay']->value<=2) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>
<span id="old_price_display"><span class="price"><?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl);?>
<?php }?></span><?php if ($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value>$_smarty_tpl->tpl_vars['productPrice']->value&&$_smarty_tpl->tpl_vars['tax_enabled']->value&&$_smarty_tpl->tpl_vars['display_tax_label']->value==1) {?> <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1) {?><?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'tax incl.'),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }?>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
      <br />
      <span id="pretaxe_price">
      <span id="pretaxe_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice(false,@constant('NULL'))),$_smarty_tpl);?>
</span>
      <?php echo smartyTranslate(array('s'=>'tax excl.'),$_smarty_tpl);?>

      </span>
      <?php }?>
   </div>
   <!-- end prices -->
   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductAfterPrice"),$_smarty_tpl);?>

   <?php if (count($_smarty_tpl->tpl_vars['packItems']->value)&&$_smarty_tpl->tpl_vars['productPrice']->value<$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()) {?>
   <p class="pack_price"><?php echo smartyTranslate(array('s'=>'Instead of'),$_smarty_tpl);?>
 <span style="text-decoration: line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getNoPackPrice()),$_smarty_tpl);?>
</span></p>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value->ecotax!=0) {?>
   <p class="price-ecotax"><?php echo smartyTranslate(array('s'=>'Include'),$_smarty_tpl);?>
 <span id="ecotax_price_display"><?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_exc']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convertAndFormatPrice'][0][0]->convertAndFormatPrice($_smarty_tpl->tpl_vars['ecotax_tax_inc']->value);?>
<?php }?></span> <?php echo smartyTranslate(array('s'=>'For green tax'),$_smarty_tpl);?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']) {?>
      <br /><?php echo smartyTranslate(array('s'=>'(not impacted by the discount)'),$_smarty_tpl);?>

      <?php }?>
   </p>
   <?php }?>
   <?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000) {?>
   <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['productPrice']->value,'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

   <p class="unit-price"><span id="unit_price_display"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'per'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->unity, ENT_QUOTES, 'UTF-8', true);?>
</p>
   <?php }?>
   <?php }?> 
   <div class="clear"></div>
</div>
<!-- end content_prices -->
<?php if (isset($_smarty_tpl->tpl_vars['product']->value->specificPrice['to'])&&isset($_smarty_tpl->tpl_vars['product']->value->specificPrice['from'])) {?>
<?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['product']->value->specificPrice['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['product']->value->specificPrice['from'])&&($_smarty_tpl->tpl_vars['product']->value->specificPrice['to']!='0000-00-00 00:00:00')) {?>
<div class="product_count_block">
   <div class="countcontainer">
      <div class="roycounttitle">
         <span><?php echo smartyTranslate(array('s'=>'Limited Special Offer! Expires in:'),$_smarty_tpl);?>
</span>
      </div>
      <div class="roycountdown">
         <div class="roycount" style="display: none;" data-specific-price-to="<?php echo $_smarty_tpl->tpl_vars['product']->value->specificPrice['to'];?>
" data-days=<?php echo smartyTranslate(array('s'=>'Days'),$_smarty_tpl);?>
 data-hours=<?php echo smartyTranslate(array('s'=>'Hours'),$_smarty_tpl);?>
 data-minutes=<?php echo smartyTranslate(array('s'=>'Minutes'),$_smarty_tpl);?>
 data-seconds=<?php echo smartyTranslate(array('s'=>'Seconds'),$_smarty_tpl);?>
>
      </div>
   </div>
</div>
</div>
<?php } elseif (($_smarty_tpl->tpl_vars['product']->value->specificPrice['to']=='0000-00-00 00:00:00')&&($_smarty_tpl->tpl_vars['product']->value->specificPrice['from']=='0000-00-00 00:00:00')) {?>
<div class="product_count_block">
   <div class="countcontainer">
      <div class="roycountoff">
         <span><?php echo smartyTranslate(array('s'=>'Limited Special Offer!'),$_smarty_tpl);?>
</span>
      </div>
   </div>
</div>
<?php }?>
<?php }?>
<span class="quantity_alert"><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity==1) {?>Only <?php }?><?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
 Available<?php } else { ?>Sold out!<?php }?></span>
</div>
<?php if ($_smarty_tpl->tpl_vars['pp_shipping_cost']->value) {?>
<div class="estimated_shipping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['pp_shipping_cost']->value)),$_smarty_tpl);?>
 shipping</div>
<?php }?>
<div class="sell_same_item" style="text-align: left;margin-top: 5px;">
   <img src="<?php echo @constant('_MODULE_DIR_');?>
marketplace/views/img/sell_same.png" width="30" /> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','addproduct',array('cp'=>$_smarty_tpl->tpl_vars['product']->value->id));?>
" style=""><?php echo smartyTranslate(array('s'=>'Have one to sell?'),$_smarty_tpl);?>
</a>
</div>
<div class="feed">
   <div id="create_product_search"></div>
   <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value) {?>
   <!-- Wishlist-->
   <?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value;?>
<?php }?>
   <!-- end Wishlist-->
   <?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_customer==2085) {?> 
<div id="shipping_calc">
   <a class="display_shipcaclc" href="#" data-toggle="modal" data-target="#calculateShipping"><?php echo smartyTranslate(array('s'=>'Calculate Shipping'),$_smarty_tpl);?>
</a>
</div>
<?php }?>
<?php }?> <!-- /layout 1 -->

<div class="pdt_feat">
   <ul id="features_ul">
      <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
      <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["img"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['img_ps_dir']->value)."pdt/".$_tmp1.".png", null, 0);?>     
      
      <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['value'])) {?>
      <li><span class="feature_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span> : <span class="feature_value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</span></li>
      <?php }?>
      
      <?php } ?>
   </ul>
</div>
<?php if (in_array(18,Product::getProductCategories(intval($_smarty_tpl->tpl_vars['product']->value->id)))) {?>
	<a href="" class="trial_button" data-toggle="modal" data-target="#trial_saddle" role="dialog"><?php echo smartyTranslate(array('s'=>'Trial information'),$_smarty_tpl);?>
</a>
	<div id="trial_saddle" class="modal fade">		
	 <div class="modal-dialog" style="width: 420px;">
	      <div class="modal-content">
	         <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal">&times;</button>
	            <h4 class="modal-title text-center">Trial information</h4>
	         </div>
	         <div class="modal-body">
				<span style="">A trial period is available for customers to ensure that the saddle is an appropriate fit, <strong>ONLY IF the seller agrees</strong>. If the customer decides to return the saddle, a full refund will be issued minus the 3% for payment processing. TackTackRoom doesn't retain any commission on returned item.
				 </span>
	         </div>
	      </div>
	   </div>
	</div>
<?php }?>


   
<div class="description_pdt" itemprop="description">
   <?php echo nl2br($_smarty_tpl->tpl_vars['product']->value->description);?>

</div>
<div class="product_attributes clearfix">
   <!-- not Layout 4 and 5 -->
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']!=="4"&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']!=="5") {?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value->online_only) {?>
   <p class="online_only"><label><?php echo smartyTranslate(array('s'=>'Status '),$_smarty_tpl);?>
 </label><span><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span></p>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_man_text'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_man_text']=="1") {?>
   <p id="product_manufacturer" <?php if (!$_smarty_tpl->tpl_vars['product']->value->id_manufacturer) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label itemprop="brand"><?php echo smartyTranslate(array('s'=>'Brand '),$_smarty_tpl);?>
 </label>
   <span class="editable">
   <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['product']->value->id_manufacturer);?>
" title="View all products"><?php }?>
   <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->manufacturer_name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

   <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_man_logo'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_man_logo']=="1") {?>
   <?php $_smarty_tpl->tpl_vars["manpic"] = new Smarty_variable("img/m/".((string)$_smarty_tpl->tpl_vars['product_manufacturer']->value->id_manufacturer).".jpg", null, 0);?>
   <?php if (file_exists($_smarty_tpl->tpl_vars['manpic']->value)) {?>
   <label class="product_manufacturer_logo">
   <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['product_manufacturer']->value->id_manufacturer;?>
-man_default.jpg" />
   </label>
   <?php }?>
   <?php }?>
   <?php }?>
   <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?></a><?php }?>
   </span>
   </p>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_refer'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_refer']=="1") {?>
   <p id="product_reference"<?php if (empty($_smarty_tpl->tpl_vars['product']->value->reference)||!$_smarty_tpl->tpl_vars['product']->value->reference) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Product Code '),$_smarty_tpl);?>
 </label>
   <span class="editable" itemprop="sku"><?php if (!isset($_smarty_tpl->tpl_vars['groups']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
   </p>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_avail'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_avail']=="1") {?>
   <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
   <!-- availability -->
   <p id="availability_statut"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later&&$_smarty_tpl->tpl_vars['allow_oosp']->value)||($_smarty_tpl->tpl_vars['product']->value->quantity>0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Availability '),$_smarty_tpl);?>
 </label>
   <span id="availability_value"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?> class="warning_inline"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?><?php if ($_smarty_tpl->tpl_vars['allow_oosp']->value) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_later;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'This product is no longer in stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_now;?>
<?php }?></span>
   </p>
   <?php }?>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_q'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_q']=="1") {?>
   <?php if (($_smarty_tpl->tpl_vars['display_qties']->value==1&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&$_smarty_tpl->tpl_vars['product']->value->available_for_order)) {?>
   <!-- number of item in stock -->
   <p id="pQuantityAvailable"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Quantity '),$_smarty_tpl);?>
 </label>
   <span id="quantityAvailable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value->quantity);?>
</span>
   <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>1) {?> style="display: none;"<?php }?> id="quantityAvailableTxt"><?php echo smartyTranslate(array('s'=>'Item'),$_smarty_tpl);?>
</span>
   <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity==1) {?> style="display: none;"<?php }?> id="quantityAvailableTxtMultiple"><?php echo smartyTranslate(array('s'=>'Items'),$_smarty_tpl);?>
</span>
   </p>
   <?php }?>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
   <?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
   <p class="warning_inline" id="last_quantities"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>$_smarty_tpl->tpl_vars['last_qties']->value||$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||$_smarty_tpl->tpl_vars['allow_oosp']->value||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none"<?php }?> ><?php echo smartyTranslate(array('s'=>'Warning: Last items in stock!'),$_smarty_tpl);?>
</p>
   <?php }?>
   <p id="availability_date"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value||!isset($_smarty_tpl->tpl_vars['product']->value->available_date)||$_smarty_tpl->tpl_vars['product']->value->available_date<smarty_modifier_date_format(time(),'%Y-%m-%d')) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Availability date '),$_smarty_tpl);?>
 </label>
   <span id="availability_date_value"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['product']->value->available_date,'full'=>false),$_smarty_tpl);?>
</span>
   </p>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_cond'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_cond']=="1") {?>
   <?php $_smarty_tpl->_capture_stack[0][] = array('condition', null, null); ob_start(); ?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value->condition=='new') {?><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>

   <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition=='used') {?><?php echo smartyTranslate(array('s'=>'Used'),$_smarty_tpl);?>

   <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition=='refurbished') {?><?php echo smartyTranslate(array('s'=>'Refurbished'),$_smarty_tpl);?>

   <?php }?>
   <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
   <p id="product_condition"<?php if (!$_smarty_tpl->tpl_vars['product']->value->condition) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Condition '),$_smarty_tpl);?>
 </label>
   <span class="editable" itemprop="condition"><?php echo Smarty::$_smarty_vars['capture']['condition'];?>
</span>
   </p>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="3") {?> <!-- Layout 3 usefull -->
   <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
   <!-- usefull links-->
   <div class="usefull_share">
      <label><?php echo smartyTranslate(array('s'=>'Share '),$_smarty_tpl);?>
 </label>
      <ul id="usefull_link_block" class="no-print">
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySocialSharing"),$_smarty_tpl);?>

      </ul>
   </div>
   <?php }?>
   <?php }?> <!-- /Layout 3 usefull -->
   <?php }?> <!-- /not Layout 4 -->
   <!-- Out of stock hook -->
   <div id="oosHook"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>0) {?> style="display: none;"<?php }?>>
   <?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_OOS']->value;?>

</div>
<?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
<!-- attributes -->
<div id="attributes">
   <div class="clearfix"></div>
   <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute_group']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
   <?php if (count($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
   <fieldset class="attribute_fieldset">
      <label class="attribute_label" <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type']!='color'&&$_smarty_tpl->tpl_vars['group']->value['group_type']!='radio') {?>for="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 :&nbsp;</label>
      <?php $_smarty_tpl->tpl_vars["groupName"] = new Smarty_variable("group_".((string)$_smarty_tpl->tpl_vars['id_attribute_group']->value), null, 0);?>
      <div class="attribute_list">
         <?php if (($_smarty_tpl->tpl_vars['group']->value['group_type']=='select')) {?>
         <select name="<?php echo $_smarty_tpl->tpl_vars['groupName']->value;?>
" id="group_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute_group']->value);?>
" class="form-control attribute_select no-print">
         <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
         <option value="<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
"<?php if ((isset($_GET[$_smarty_tpl->tpl_vars['groupName']->value])&&intval($_GET[$_smarty_tpl->tpl_vars['groupName']->value])==$_smarty_tpl->tpl_vars['id_attribute']->value)||$_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value) {?> selected="selected"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
         <?php } ?>
         </select>
         <?php } elseif (($_smarty_tpl->tpl_vars['group']->value['group_type']=='color')) {?>
         <ul id="color_to_pick_list" class="clearfix">
            <?php $_smarty_tpl->tpl_vars["default_colorpicker"] = new Smarty_variable('', null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value) {?> class="selected"<?php }?>>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" id="color_<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="color_pick<?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)) {?> selected<?php }?>" style="background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['value'], ENT_QUOTES, 'UTF-8', true);?>
;" title="">
            <?php if (file_exists((($_smarty_tpl->tpl_vars['col_img_dir']->value).($_smarty_tpl->tpl_vars['id_attribute']->value)).('.jpg'))) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['img_col_dir']->value;?>
<?php echo intval($_smarty_tpl->tpl_vars['id_attribute']->value);?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="20" height="20" />
            <?php }?>
            <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['colors']->value[$_smarty_tpl->tpl_vars['id_attribute']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
            </a>
            </li>
            <?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)) {?>
            <?php $_smarty_tpl->tpl_vars['default_colorpicker'] = new Smarty_variable($_smarty_tpl->tpl_vars['id_attribute']->value, null, 0);?>
            <?php }?>
            <?php } ?>
         </ul>
         <input type="hidden" class="color_pick_hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupName']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['default_colorpicker']->value);?>
" />
         <?php } elseif (($_smarty_tpl->tpl_vars['group']->value['group_type']=='radio')) {?>
         <ul>
            <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <li>
               <input type="radio" class="attribute_radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupName']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo $_smarty_tpl->tpl_vars['id_attribute']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['group']->value['default']==$_smarty_tpl->tpl_vars['id_attribute']->value)) {?> checked="checked"<?php }?> />
               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </li>
            <?php } ?>
         </ul>
         <?php }?>
      </div>
      <!-- end attribute_list -->
   </fieldset>
   <?php }?>
   <?php } ?>
</div>
<!-- end attributes -->
<?php }?>
<!-- quantity wanted -->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductBeforeBuy"),$_smarty_tpl);?>

<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
<?php if (($_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))||isset($_smarty_tpl->tpl_vars['groups']->value)||$_smarty_tpl->tpl_vars['product']->value->reference||(isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) {?>
<form id="buy_block" <?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&!isset($_smarty_tpl->tpl_vars['groups']->value)&&$_smarty_tpl->tpl_vars['product']->value->quantity>0) {?>class="hidden"<?php }?> action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
<!-- hidden datas -->
<p class="hidden">
   <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
" />
   <input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
" id="product_page_product_id" />
   <input type="hidden" name="add" value="1" />
   <input type="hidden" name="id_product_attribute" id="idCombination" value="" />
</p>

<?php if ($_smarty_tpl->tpl_vars['ListedDays']->value>45) {?>

   <span style="font-weight: bold;
    margin: auto;
    margin-bottom: 10px;
    padding: 3px;
    background-color: #ff6666;
    max-width: 300px;
    display: inline-block;
    color: white;
    border-radius: 5px;
    font-size: 10px;">This item was listed over 45 days ago, we highly recommend you to contact the seller make sure it's still available!</span>
   <?php }?>

<div class="buy_container">
   <div id="add_to_cart" class="buttons_bottom_block no-print">
      <button type="submit" name="Submit" class="btn button button-medium btn-default bright addcustom<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value)||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> disabled <?php }?>">
      <span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
      </button>
   </div>
   <div class="make_offer">
      

	     <a href="javascript:;" onclick="FirePixelEvent('MakeAnOffer')" class="btn" data-toggle="modal" data-target="#makeOfferModal"><?php echo smartyTranslate(array('s'=>'Make an offer'),$_smarty_tpl);?>
</a>		  
   </div>
		<?php if ($_smarty_tpl->tpl_vars['can_contact_seller_btn']->value) {?>
			<div class="message_seller">
		      	<button class=" <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>start_chat<?php }?> btn" data-toggle="modal" <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>data-target="#startChat"<?php } else { ?>onclick="showLoginPopup()"<?php }?> ><?php echo smartyTranslate(array('s'=>'Message seller'),$_smarty_tpl);?>
</button>
		   	</div>
		<?php }?>                                     
   <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>1) {?>
   <div class="container_qty">
      <div id="quantity_wanted_p"<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value&&$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
      <label><?php echo smartyTranslate(array('s'=>'Quantity :'),$_smarty_tpl);?>
</label>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_q'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_q']=="2")) {?>
      <div class="down_container">
         <a href="#" data-field-qty="qty" class="pm button-plus product_quantity_down">
         <span><i class="icon-angle-down"></i></span>
         </a>
      </div>
      <?php }?>
      <input type="text" name="qty" id="quantity_wanted" class="text" value="<?php if (isset($_smarty_tpl->tpl_vars['quantityBackup']->value)) {?><?php echo intval($_smarty_tpl->tpl_vars['quantityBackup']->value);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity>1) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
<?php } else { ?>1<?php }?><?php }?>" />
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_q'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_q']=="1")) {?>
      <div class="updown_container">
         <a href="#" data-field-qty="qty" class="pm button-plus product_quantity_up">
         <span><i class="icon-angle-up"></i></span>
         </a>
         <a href="#" data-field-qty="qty" class="pm button-minus product_quantity_down">
         <span><i class="icon-angle-down"></i></span>
         </a>
      </div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_q'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_q']=="2")) {?>
      <div class="up_container">
         <a href="#" data-field-qty="qty" class="pm button-plus product_quantity_up">
         <span><i class="icon-angle-up"></i></span>
         </a>
      </div>
      <?php }?>
      <span class="clearfix"></span>
   </div>
</div>
<?php }?>
</div>
<div><a href="http://help.tacktackroom.com/buying/faq/buyer-protection" class="details-protection" target="_blank" rel=""><img style="width: 16px;margin-right: 5px" src="../../img/pdt/buyer_protection.png">Shop Safely with TackTackRoom Buyer Protection</a></div>
</form>
<?php }?>
<?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductAfterBuy"),$_smarty_tpl);?>

<!-- minimal quantity wanted -->
<p id="minimal_quantity_wanted_p"<?php if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity<=1||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
<?php echo smartyTranslate(array('s'=>'This product is not sold individually. You must select at least'),$_smarty_tpl);?>
 <b id="minimal_quantity_label"><?php echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;?>
</b> <?php echo smartyTranslate(array('s'=>'quantity for this product.'),$_smarty_tpl);?>

</p>
</div> <!-- end product_attributes -->
<?php if (isset($_smarty_tpl->tpl_vars['mp_seller_info']->value)&&isset($_smarty_tpl->tpl_vars['WK_MP_SELLER_DETAILS_ACCESS_9']->value)) {?>

<?php }?>            
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="2")) {?> <!-- Layout 2 usefull -->
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
<!-- usefull links-->
<ul id="usefull_link_block" class="clearfix no-print">
   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySocialSharing"),$_smarty_tpl);?>

   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_print'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_print']=="1") {?>
   <li class="print">
      <a href="javascript:print();">
      <i></i><span><?php echo smartyTranslate(array('s'=>'Print'),$_smarty_tpl);?>
</span>
      </a>
   </li>
   <?php }?>
</ul>
<?php }?>
<?php }?> <!-- /Layout 2 usefull -->
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="2") {?> <!-- Layout 2 loyalty-->
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value)&&$_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value;?>
<?php }?>
<?php }?> <!-- /Layout 2 loyalty -->
<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col'])&&($_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="4"||$_smarty_tpl->tpl_vars['roythemes']->value['nc_pp_col']=="5")) {?> <!-- Layout 4 -->
<div class="product_attributes pp_col_4 clearfix" style="border:none">
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_refer'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_refer']=="1") {?>
   <p id="product_reference"<?php if (empty($_smarty_tpl->tpl_vars['product']->value->reference)||!$_smarty_tpl->tpl_vars['product']->value->reference) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Product Code '),$_smarty_tpl);?>
 </label>
   <span class="editable" itemprop="sku"><?php if (!isset($_smarty_tpl->tpl_vars['groups']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
   </p>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value->online_only) {?>
   <p class="online_only"><label><?php echo smartyTranslate(array('s'=>'Status '),$_smarty_tpl);?>
 </label><span><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span></p>
   <?php }?>
   
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_avail'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_avail']=="1") {?>
   <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
   <!-- availability -->
   <p id="availability_statut"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later&&$_smarty_tpl->tpl_vars['allow_oosp']->value)||($_smarty_tpl->tpl_vars['product']->value->quantity>0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Availability '),$_smarty_tpl);?>
 </label>
   <span id="availability_value"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?> class="warning_inline"<?php }?>><?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?><?php if ($_smarty_tpl->tpl_vars['allow_oosp']->value) {?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_later;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'This product is no longer in stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['product']->value->available_now;?>
<?php }?></span>
   </p>
   <?php }?>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_q'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_q']=="1") {?>
   <?php if (($_smarty_tpl->tpl_vars['display_qties']->value==1&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&$_smarty_tpl->tpl_vars['product']->value->available_for_order)) {?>
   <!-- number of item in stock -->
   <p id="pQuantityAvailable"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Quantity '),$_smarty_tpl);?>
 </label>
   <span id="quantityAvailable"><?php echo intval($_smarty_tpl->tpl_vars['product']->value->quantity);?>
</span>
   <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity>1) {?> style="display: none;"<?php }?> id="quantityAvailableTxt"><?php echo smartyTranslate(array('s'=>'Item'),$_smarty_tpl);?>
</span>
   <span <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity==1) {?> style="display: none;"<?php }?> id="quantityAvailableTxtMultiple"><?php echo smartyTranslate(array('s'=>'Items'),$_smarty_tpl);?>
</span>
   </p>
   <?php }?>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
   <?php if (!$_smarty_tpl->tpl_vars['product']->value->is_virtual) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
   <p class="warning_inline" id="last_quantities"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>$_smarty_tpl->tpl_vars['last_qties']->value||$_smarty_tpl->tpl_vars['product']->value->quantity<=0)||$_smarty_tpl->tpl_vars['allow_oosp']->value||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none"<?php }?> ><?php echo smartyTranslate(array('s'=>'Warning: Last items in stock!'),$_smarty_tpl);?>
</p>
   <?php }?>
   <p id="availability_date"<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value||!isset($_smarty_tpl->tpl_vars['product']->value->available_date)||$_smarty_tpl->tpl_vars['product']->value->available_date<smarty_modifier_date_format(time(),'%Y-%m-%d')) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Availability date '),$_smarty_tpl);?>
 </label>
   <span id="availability_date_value"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['product']->value->available_date,'full'=>false),$_smarty_tpl);?>
</span>
   </p>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_display_cond'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_display_cond']=="1") {?>
   <?php $_smarty_tpl->_capture_stack[0][] = array('condition', null, null); ob_start(); ?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value->condition=='new') {?><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>

   <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition=='used') {?><?php echo smartyTranslate(array('s'=>'Used'),$_smarty_tpl);?>

   <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->condition=='refurbished') {?><?php echo smartyTranslate(array('s'=>'Refurbished'),$_smarty_tpl);?>

   <?php }?>
   <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
   <p id="product_condition"<?php if (!$_smarty_tpl->tpl_vars['product']->value->condition) {?> style="display: none;"<?php }?>>
   <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['pp_li'])&&$_smarty_tpl->tpl_vars['roythemes']->value['pp_li']=="1") {?>
   <i class="att_icon"></i>
   <?php }?>
   <label><?php echo smartyTranslate(array('s'=>'Condition '),$_smarty_tpl);?>
 </label>
   <span class="editable" itemprop="condition"><?php echo Smarty::$_smarty_vars['capture']['condition'];?>
</span>
   </p>
   <?php }?>
   <!-- end center infos--><!-- end center infos--><!-- end center infos--><!-- end center infos--><!-- end center infos-->               
   
   <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
   <!-- usefull links-->
   <div class="usefull_share">
      <label><?php echo smartyTranslate(array('s'=>'Share '),$_smarty_tpl);?>
 </label>
      <ul id="usefull_link_block" class="no-print">
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySocialSharing"),$_smarty_tpl);?>

      </ul>
   </div>
   <?php }?>
</div>
<?php }?> <!-- /Layout 4 -->   		  



</div>
	<div id="seller_info" class="container_product_details">
   <p>
      <label style="font-size: 13px"><?php echo smartyTranslate(array('s'=>'Sold By','mod'=>'marketplace'),$_smarty_tpl);?>
: </label>
      <a id="profileconnect" title="<?php echo smartyTranslate(array('s'=>'Visit Shop','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shopstore_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
         <span style=""><?php if ($_smarty_tpl->tpl_vars['img_seller']->value!='') {?><img style="width: 50px;height:50px;border-radius: 50%" src="../modules/marketplace/views/img/shop_img/<?php echo $_smarty_tpl->tpl_vars['img_seller']->value;?>
"><?php }?>  <?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['mp_seller_info']->value['shop_name'],'/#.*/',''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
         
         
         
         <?php $_smarty_tpl->tpl_vars['code_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
         <?php $_smarty_tpl->tpl_vars['country_name'] = new Smarty_variable(Country::getNameById($_smarty_tpl->tpl_vars['code_lang']->value,$_smarty_tpl->tpl_vars['mp_seller_info']->value['id_country']), null, 0);?>  
         

   <?php if ($_smarty_tpl->tpl_vars['mp_seller_info']->value['id_seller']=='277') {?>
		   <div class="wrapper_location">
		   <span class="icon_location">Covina, </span>   
		   <label id="state_seller">California</label>
		   </div> 
   <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['id_country']=='21';?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2) {?>
		  <div class="wrapper_location">
		   	<span class="icon_location"><?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['city'];?>
, <?php echo State::getNameById($_smarty_tpl->tpl_vars['mp_seller_info']->value['id_state']);?>
</span>  
		   	<img style="width: 20px;vertical-align: sub;" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/views/img/usa.png" />
   
   		  </div> 
   <?php } else { ?>
	   <div class="wrapper_location">
		   <span class="icon_location"><?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['city'];?>
, </span>   
		   		<label><?php echo $_smarty_tpl->tpl_vars['country_name']->value;?>
</label>
		   <?php if ($_smarty_tpl->tpl_vars['mp_seller_info']->value['country_residence']==4) {?> 
		   			<img style="width: 20px;vertical-align: sub;" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/views/img/canada.png" />		
		   <?php } else { ?>
		   
		   <img style="width: 20px;vertical-align: sub;" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/views/img/france.png" />		

		   
		   <?php }?>
	   </div> 
   <?php }}?>  
   </a>
   <?php if (isset($_smarty_tpl->tpl_vars['WK_MP_SELLER_DETAILS_ACCESS_7']->value)) {?>
   <span id="seller_rating"></span>
   <?php }?>
   </p>
   
   <?php $_smarty_tpl->tpl_vars['mp_seller_info'] = new Smarty_variable(WkMpSeller::getSellerByProductId($_smarty_tpl->tpl_vars['product']->value->id), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['sellerDetail'] = new Smarty_variable(WkMpSeller::getSeller($_smarty_tpl->tpl_vars['mp_seller_info']->value,Configuration::get('PS_LANG_DEFAULT')), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['count_order'] = new Smarty_variable(WkMpSellerOrder::countTotalOrderValidated(false,$_smarty_tpl->tpl_vars['sellerDetail']->value['seller_customer_id'],false), null, 0);?>	 
   <?php $_smarty_tpl->tpl_vars['reviews'] = new Smarty_variable(WkMpSellerReview::getSellerAvgRating($_smarty_tpl->tpl_vars['sellerDetail']->value['id_seller']), null, 0);?>        
     <div class="seller_pdt_list">  
	     <a href="http://help.tacktackroom.com/en/articles/3500283-badges-on-tacktackroom-com" target="_blank">      
         <span>
         <?php if ($_smarty_tpl->tpl_vars['count_order']->value!==0&&$_smarty_tpl->tpl_vars['count_order']->value<5) {?>
         	<img style="width: 20px" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/trusted.png" /><span style="font-weight: bold"> Confirmed Seller</span>
         <?php } elseif ($_smarty_tpl->tpl_vars['count_order']->value>4) {?>
         	<img style="width: 20px" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/trusted_seller.png" /><span style="font-weight: bold"> Elite Tack Shop</span>
         <?php }?>	
         </span>
	     </a>
		 <div class="row review_product_list">
     	
<?php if (($_smarty_tpl->tpl_vars['reviews']->value)) {?>
	
					<div class ="avg_rating">
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
						<?php while ($_smarty_tpl->tpl_vars['i']->value!=$_smarty_tpl->tpl_vars['reviews']->value) {?>
							<img  src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/star-on.png" />
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
						<?php }?>

					  	<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable(0, null, 0);?>	
					  	<?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(5-$_smarty_tpl->tpl_vars['reviews']->value, null, 0);?>
					  	<?php while ($_smarty_tpl->tpl_vars['k']->value!=$_smarty_tpl->tpl_vars['j']->value) {?>
					   		<img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/star-off.png" />
					  	<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value+1, null, 0);?>
					 	<?php }?>
					</div>

<?php }?> 
  	</div>
   
    
   </div>    

   
   
   
           <?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;?>
<?php }?>

</div>
</div>
<!-- </div> -->
<!-- end center infos-->
</div>
</div> <!-- end primary_block -->
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>

<div class="footer_pdt">
   <?php if (($_smarty_tpl->tpl_vars['isMobile']->value)) {?>
   <div id="comments_product_mobile"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'myproducthook'),$_smarty_tpl);?>
</div>
   <?php }?> 	
   <?php if (isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)&&$_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;?>
<?php }?>	   	
</div>
<!-- description & features -->
<?php if (isset($_smarty_tpl->tpl_vars['packItems']->value)&&count($_smarty_tpl->tpl_vars['packItems']->value)>0) {?>
<section id="blockpack">
   <h3 class="page-product-heading"><?php echo smartyTranslate(array('s'=>'Pack content'),$_smarty_tpl);?>
</h3>
   <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0);?>

</section>
<?php }?>
<?php }?>
<div id="calculateShipping" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center"><?php echo smartyTranslate(array('s'=>'Calculate Shipping'),$_smarty_tpl);?>
</h4>
         </div>
         <div class="modal-body">
            <div class="alert alert-danger calc_shipping_err" style="display: none;"></div>
            <div class="calc_shipping_res" style="display: none;"></div>
            <form id="submitShippingCalc" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('mpfedexshipping','ajax');?>
">
               <input type="hidden" name="ajax" value="1" />
               <input type="hidden" name="action" value="calculateShipping" />
               <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
               <input type="hidden" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
               <div class="form-group country">
                  <label>Country</label>
                  <select id="sc_country" name="country">
                  <?php echo $_smarty_tpl->tpl_vars['countries_list']->value;?>

                  </select>
               </div>
               <div class="form-group postcode">
                  <label>Zip code</label>
                  <input id="cs_postcode" type="text" name="postcode" />
                  <div class="clearfix"></div>
               </div>
               <div class="form-group">
                  
                  <button type="button" class="shipping_calc_btn btn btn-default pull-right">
                  <?php echo smartyTranslate(array('s'=>'Calculate Shipping'),$_smarty_tpl);?>

                  </button>
                  <div class="clearfix"></div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div id="startChat" class="modal fade seller_msg_parent" role="dialog">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Message seller'),$_smarty_tpl);?>
</h4>
         </div>
         <div class="modal-body seller_message">
            <div style="display: none;" class="alert alert-success seller_msg"><?php echo smartyTranslate(array('s'=>'Message successfuly sent'),$_smarty_tpl);?>
</div>
            
            <div id="question_seller" class="<?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>unclickable<?php }?>">
               <div class="wrapper_question">	   	
                  <input id="c_available" type="checkbox" onclick="getchecked()" name="available" value="<?php echo smartyTranslate(array('s'=>"Is it still available?",'mod'=>'productcommentpro'),$_smarty_tpl);?>
"><label for="c_available"><?php echo smartyTranslate(array('s'=>"Is it still available?",'mod'=>'productcommentpro'),$_smarty_tpl);?>
</label><br>
               </div>



            </div>
            <form class="replyform" method="post">
               <input type="hidden" name="data[id_product]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"/>
               <input type="hidden" name="data[id_parent]" value="0"/>
               <input type="hidden" name="type" value="new"/>
               <input type="hidden" name="action" value="savechatdata"/>
               <input type="hidden" name="ajax" value="1" />
               <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
               <div class="form-group">
                  <textarea id="message_seller" class="form-control pcpeditor" name="data[comment]" rows="8" placeholder="<?php if (!$_smarty_tpl->tpl_vars['is_logged']->value) {?><?php echo smartyTranslate(array('s'=>'Please login or register to add a new comment!','mod'=>'productcommentpro'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Your comment ...','mod'=>'productcommentpro'),$_smarty_tpl);?>
<?php }?>" data-confirm="<?php echo smartyTranslate(array('s'=>'Please enter your text!','mod'=>'marketplace'),$_smarty_tpl);?>
"></textarea>
               </div>
               <div class="form-group">
                  <a class="cancel_btn" href="#"><?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
                  <input id="send_message_button" type="submit" name="save" class="btn btn-primary" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'marketplace'),$_smarty_tpl);?>
" disabled="true"/>
                  <div class="clearfix"></div>
               </div>

            </form>
         </div>
      </div>
   </div>
</div>

<div id="makeOfferModal" class="modal fade" role="dialog">
   <div class="modal-dialog" style="width: 420px;">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center">Make Offer</h4>
         </div>
         <div class="modal-body">
            <form id="makeOfferForm" action="<?php echo $_smarty_tpl->tpl_vars['make_offer_url']->value;?>
" method="post">
               <input type="hidden" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
               <p><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</p>
               <div class="form-group">
                  <label class="label-control col-md-12">Offer amount</label>
                  <div class="offer_price_container col-md-8" style="position: relative;margin-right: 10px;">
                     <p style="position: absolute;top: 11px;left: 5px;color: grey;">$</p>
                     <input id="offered_price" type="text" name="offered_price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
" style="padding-left: 20px;" /> 
                     <p style="position: absolute;top: 11px;right: 5px;color: grey;">USD</p>
                  </div>
                  <?php if ($_smarty_tpl->tpl_vars['pp_shipping_cost']->value) {?>
                  <small style="margin-top: 10px;display: inline-block;">+ <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['pp_shipping_cost']->value)),$_smarty_tpl);?>
 shipping</small>
                  <?php }?>
                  <div class="clearfix"></div>
               </div>
               <div class="form-group">
                  <p>Asking price: <b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['product']->value->price)),$_smarty_tpl);?>
</b></p>

						<p>Offers are limited: only 1 offer per day for the same item is available</p>
               </div>
               <div class="alert alert-danger offered_price_err" style="display: none;">
                  <?php echo smartyTranslate(array('s'=>'Your offer is too low (max is 30% Off). Please make an offer closer to the asking price. Minimum offer is: '),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['productPrice']->value*0.67;?>

               </div>
               <div class="form-group">
                  <button type="button" class="btn btn-modal btn-default pull-left" data-dismiss="modal">
                  Cancel
                  </button>
                  <button type="button" class="reviewOffer btn-modal btn btn-default">
                  Review Offer
                  </button>
                  <div class="clearfix"></div>
                  <div id="offer_info">
                     <p>Offers are valid for 24 hours. We won't charge your card until the seller accepts the offer and SHIPS the product.</p>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['id_order']->value)&&$_smarty_tpl->tpl_vars['id_order']->value)&&(isset($_smarty_tpl->tpl_vars['sid']->value)&&$_smarty_tpl->tpl_vars['sid']->value)&&(isset($_smarty_tpl->tpl_vars['name_shop']->value)&&$_smarty_tpl->tpl_vars['name_shop']->value)) {?>
<div id="rateThisSeller" class="modal fade rate_seller in" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Write a review'),$_smarty_tpl);?>
</h4>
         </div>
         <div class="modal-body">
            <form id="review_submit" method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','shopstore',array('mp_shop_name'=>$_smarty_tpl->tpl_vars['name_shop']->value)), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
               <input type="hidden" name="mp_shop_name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_shop']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
               <input type="hidden" name="back" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
               <div>
                  <div class="rating_wrapper">
                     <label for="rating" class="control-label required"><?php echo smartyTranslate(array('s'=>'Rating','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
                     &nbsp;<span id="rating_image"></span>
                     <div class="rating_error"></div>
                  </div>
                  <div class="feedback_wrapper">
                     <label for="comment"><?php echo smartyTranslate(array('s'=>'Description','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
                     <textarea class="form-control" name="feedback" style="height:150px;"></textarea>
                     <div class="feedback_error"></div>
                     <input type="hidden" name="seller_id" value="<?php echo intval($_smarty_tpl->tpl_vars['sid']->value);?>
">
                     <input type="hidden" name="review_id" value="0">
                     <input type="hidden" name="id_order" value="<?php echo intval($_smarty_tpl->tpl_vars['id_order']->value);?>
">
                  </div>
               </div>
               <div class="submit_modal">
                  <div class="col-xs-6 col-sm-6 col-md-6" style="text-align:left">
                     <button type="button" class="btn removeReviewModal"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'marketplace'),$_smarty_tpl);?>
</button>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                     <button type="submit" name="submit_feedback" class="btn"><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'marketplace'),$_smarty_tpl);?>
</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
       $(window).on('load',function() {
           $('#rateThisSeller').modal('show');
       });
   
       $('.removeReviewModal').on('click', function() {
           $('#rateThisSeller').modal('hide');
       });
   });
</script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'rate_req')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'rate_req'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Rating is required.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'rate_req'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'feedback_req')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'feedback_req'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Description is required.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'feedback_req'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'not_logged_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'not_logged_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please login to write a review.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'not_logged_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'review_yourself_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'review_yourself_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You can not write review to yourself.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'review_yourself_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'review_already_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'review_already_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You have already written a review for this seller.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'review_already_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'confirm_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Are you sure?','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'email_req')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'email_req'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Email is required field.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'email_req'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'invalid_email')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'invalid_email'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Email is not valid.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'invalid_email'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'subject_req')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'subject_req'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Subject is required field.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'subject_req'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'description_req')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'description_req'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Description is required field.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'description_req'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (isset($_GET['ad'])&&$_GET['ad']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'ad')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'ad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_GET['adtoken'])&&$_GET['adtoken']) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'adtoken')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'adtoken'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('allowBuyWhenOutOfStock'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['allow_oosp']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('availableNowValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_now)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('availableLaterValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_later)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('attribute_anchor_separator'=>addslashes($_smarty_tpl->tpl_vars['attribute_anchor_separator']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('attributesCombinations'=>$_smarty_tpl->tpl_vars['attributesCombinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencySign'=>html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8")),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyRate'=>floatval($_smarty_tpl->tpl_vars['currencyRate']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyFormat'=>intval($_smarty_tpl->tpl_vars['currencyFormat']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyBlank'=>intval($_smarty_tpl->tpl_vars['currencyBlank']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currentDate'=>smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['combinations']->value)&&$_smarty_tpl->tpl_vars['combinations']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinationsFromController'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['combinationImages']->value)&&$_smarty_tpl->tpl_vars['combinationImages']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('combinationImages'=>$_smarty_tpl->tpl_vars['combinationImages']->value),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('customizationFields'=>$_smarty_tpl->tpl_vars['customizationFields']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('default_eco_tax'=>floatval($_smarty_tpl->tpl_vars['product']->value->ecotax)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('displayPrice'=>intval($_smarty_tpl->tpl_vars['priceDisplay']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('ecotaxTax_rate'=>floatval($_smarty_tpl->tpl_vars['ecotaxTax_rate']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('group_reduction'=>1-$_smarty_tpl->tpl_vars['group_reduction']->value),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idDefaultImage'=>intval($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('idDefaultImage'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('img_prod_dir'=>$_smarty_tpl->tpl_vars['img_prod_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('jqZoomEnabled'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['jqZoomEnabled']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('maxQuantityToAllowDisplayOfLastQuantityMessage'=>intval($_smarty_tpl->tpl_vars['last_qties']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('minimalQuantity'=>intval($_smarty_tpl->tpl_vars['product']->value->minimal_quantity)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('noTaxForThisProduct'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['no_tax']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('oosHookJsCodeFunctions'=>Array()),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productHasAttributes'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval(isset($_smarty_tpl->tpl_vars['groups']->value))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceTaxExcluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceTaxIncluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productBasePriceTaxExcluded'=>floatval(($_smarty_tpl->tpl_vars['product']->value->base_price-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productReference'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productAvailableForOrder'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['product']->value->available_for_order)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPriceWithoutReduction'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productPrice'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productUnitPriceRatio'=>floatval($_smarty_tpl->tpl_vars['product']->value->unit_price_ratio)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productShowPrice'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['product']->value->show_price))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('PS_CATALOG_MODE'=>$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&count($_smarty_tpl->tpl_vars['product']->value->specificPrice)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_specific_price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_specific_price'=>array()),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['display_qties']->value==1&&$_smarty_tpl->tpl_vars['product']->value->quantity) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantityAvailable'=>$_smarty_tpl->tpl_vars['product']->value->quantity),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantityAvailable'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('quantitiesDisplayAllowed'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['display_qties']->value)),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='percentage') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_percent'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100)),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_percent'=>0),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type']=='amount') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('reduction_price'=>0),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['price']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['price'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_price'=>0),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('specific_currency'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval(($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['id_currency']))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('stock_management'=>intval($_smarty_tpl->tpl_vars['stock_management']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('taxRate'=>floatval($_smarty_tpl->tpl_vars['tax_rate']->value)),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExist')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExist'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'This combination does not exist for this product. Please select another combination.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExist'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExistNoMore')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMore'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'This product is no longer in stock','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMore'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'doesntExistNoMoreBut')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMoreBut'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'with those attributes but is available with others.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'doesntExistNoMoreBut'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'fieldRequired')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'fieldRequired'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please fill in all the required fields before saving your customization.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'fieldRequired'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'uploading_in_progress')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'uploading_in_progress'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Uploading in progress, please be patient.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'uploading_in_progress'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
