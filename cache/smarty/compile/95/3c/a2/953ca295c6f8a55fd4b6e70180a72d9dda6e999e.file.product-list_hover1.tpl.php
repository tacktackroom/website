<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/product-list_hover1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9190391745e4f26837b69c8-29822396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '953ca295c6f8a55fd4b6e70180a72d9dda6e999e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/product-list_hover1.tpl',
      1 => 1580262971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9190391745e4f26837b69c8-29822396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'roythemes' => 0,
    'nc_count' => 0,
    'link' => 0,
    'page_name' => 0,
    'PS_CATALOG_MODE' => 0,
    'nc_sale' => 0,
    'comparator_max_item' => 0,
    'mp_seller_info' => 0,
    'sellerDetail' => 0,
    'url' => 0,
    'count_order' => 0,
    'reviews' => 0,
    'j' => 0,
    'manpic' => 0,
    'content_dir' => 0,
    'restricted_country_mode' => 0,
    'currency' => 0,
    'productPrice' => 0,
    'priceDisplayPrecision' => 0,
    'schemaProductPrice' => 0,
    'priceDisplay' => 0,
    'nc_pl_red' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683822d99_19524973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683822d99_19524973')) {function content_5e4f2683822d99_19524973($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/modifier.replace.php';
?><div class="left-block">
   <div class="product-image-container">
      
      <a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
         <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_count'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_count']=="1")||(isset($_smarty_tpl->tpl_vars['nc_count']->value)&&$_smarty_tpl->tpl_vars['nc_count']->value=="1")) {?>
         <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'])) {?>
         <?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'])&&($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']!='0000-00-00 00:00:00')) {?>
         
   <?php }?>
   <?php }?>
   <?php }?>
   <img class="first-img replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?> width="152px" height="188px"<?php }?> itemprop="image" />
    </a>
   
   <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>
   <?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
   <span class="new-box">
   <span class="new-label"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span>
   </span>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
   <span class="sale-box">
   <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_sale'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_sale']=="2")||(isset($_smarty_tpl->tpl_vars['nc_sale']->value)&&$_smarty_tpl->tpl_vars['nc_sale']->value=="2")) {?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
   <span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount') {?>
   <span class="price-percent-reduction">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']),$_smarty_tpl);?>
</span>
   <?php }?>
   <?php } else { ?>
   <span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span>
   <?php }?>
   </span>
   <?php }?>
   <?php } else { ?>
   <?php if ((!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']<=0)) {?>
   <span class="soldout-box">
   <span class="soldout-label"><?php echo smartyTranslate(array('s'=>'Sold !'),$_smarty_tpl);?>
</span>
   </span>
   <?php }?>
   <?php }?>
</div>
</div>
<div class="right-block">
   <div class="functional-buttons">     			
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

      <?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
      <div class="compare">
         <a class="add_to_compare hidden-xs hidden-sm" title="" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><span><?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
</span></a>
      </div>
      <?php }?>
      <span style="font-size: 9px;font-weight: bold">#<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
</span>
   </div>
   <?php $_smarty_tpl->tpl_vars['mp_seller_info'] = new Smarty_variable(WkMpSeller::getSellerByProductId($_smarty_tpl->tpl_vars['product']->value['id_product']), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['sellerDetail'] = new Smarty_variable(WkMpSeller::getSeller($_smarty_tpl->tpl_vars['mp_seller_info']->value,Configuration::get('PS_LANG_DEFAULT')), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(Context::getContext()->shop->getBaseURL(true), null, 0);?>
   <div class="seller_pdt_list">
         <?php $_smarty_tpl->tpl_vars['count_order'] = new Smarty_variable(WkMpSellerOrder::countTotalOrderValidated(false,$_smarty_tpl->tpl_vars['sellerDetail']->value['seller_customer_id'],false), null, 0);?>	
         <a style="text-decoration: underline" id="profileconnect_list" title="<?php echo smartyTranslate(array('s'=>'Visit Shop','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
tackroom/<?php echo $_smarty_tpl->tpl_vars['sellerDetail']->value['link_rewrite'];?>
">
         <span><?php echo htmlspecialchars(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['sellerDetail']->value['shop_name'],'/#.*/',''), ENT_QUOTES, 'UTF-8', true);?>
 
         	<?php if ($_smarty_tpl->tpl_vars['count_order']->value!==0&&$_smarty_tpl->tpl_vars['count_order']->value<5&&$_smarty_tpl->tpl_vars['product']->value['quantity']>0) {?>
         	<img style="width: 10px" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/trusted.png" />
         	<?php } elseif ($_smarty_tpl->tpl_vars['count_order']->value>4&&$_smarty_tpl->tpl_vars['product']->value['quantity']>0) {?>
         	<img style="width: 10px" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/trusted_seller.png" />
         	
         <?php }?>	</span>
         <?php $_smarty_tpl->tpl_vars['reviews'] = new Smarty_variable(WkMpSellerReview::getSellerAvgRating($_smarty_tpl->tpl_vars['sellerDetail']->value['id_seller']), null, 0);?>  
 



		 	<div class="row review_product_list">
<?php if (($_smarty_tpl->tpl_vars['reviews']->value)&&($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='index'||$_smarty_tpl->tpl_vars['page_name']->value=='new-products')) {?>
	
					<div class ="avg_rating">
				
						<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['reviews']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['reviews']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
							<img  src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/star-on.png" />
						<?php }} ?>

			
					  	<?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(5-$_smarty_tpl->tpl_vars['reviews']->value, null, 0);?>

					  	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['j']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['j']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
					   		<img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/star-off.png" />					  
					 	<?php }} ?>

					</div>


<?php }?> 
  	</div>

   
         </a>
    
   </div>
   <?php $_smarty_tpl->tpl_vars["manpic"] = new Smarty_variable("img/m/".((string)$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']).".jpg", null, 0);?>
   <div class="list_man_wrapper"><label class="list_man_logo">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']->link_rewrite), ENT_QUOTES, 'UTF-8', true);?>
">
	     <span style="width: 100%;float: left;font-size: 8px" ><?php echo $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'];?>
</span>
      <?php if (file_exists($_smarty_tpl->tpl_vars['manpic']->value)) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['content_dir']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_manufacturer'];?>
-man_default.jpg" />
      <?php } else { ?><img src="../themes/ayon/img/logo/ttr_round_small.png" />
      <?php }?>
      </a>
      </label>
   </div>
   <h5 itemprop="name">
      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?>
      <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" >
      <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],39,'...'), ENT_QUOTES, 'UTF-8', true);?>

      </a>
   </h5>
	
<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" style="display:none">
   <span itemprop="ratingValue">5</span> 
   <span itemprop="ratingCount">1</span>                                                      
</div>
<meta itemprop="brand" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'];?>
">
<meta itemprop="sku" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" />
<meta itemprop="mpn" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
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
<span itemprop="description"></span>   
</div>
   
   <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

   <p class="product-desc" itemprop="description">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>

   </p>
   <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
   <div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
          <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
          <link itemprop="availability" <?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0) {?>href="http://schema.org/OutOfStock"<?php } else { ?>href="http://schema.org/InStock"<?php }?>>
			<meta itemprop="priceValidUntil" content="<?php echo date('Y')+1;?>
-12-31">
			<meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" />					
           <?php $_smarty_tpl->tpl_vars['schemaProductPrice'] = new Smarty_variable(Tools::ps_round(Tools::convertPrice($_smarty_tpl->tpl_vars['productPrice']->value,$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value), null, 0);?>
      <span class="price product-price"  itemprop="price" content="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['schemaProductPrice']->value,'.',',');?>
">
      <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
      </span>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost']&&!Product::GetCarrierwithid($_smarty_tpl->tpl_vars['product']->value['id_product'])&&$_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost']!='0.00') {?>
      <span class="shipping_cost">+ <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>number_format($_smarty_tpl->tpl_vars['product']->value['additional_shipping_cost'])),$_smarty_tpl);?>
 shipping</span>  
      <?php } elseif (Product::GetCarrierwithid($_smarty_tpl->tpl_vars['product']->value['id_product'])) {?>
      <span class="free_tag">Free Shipping</span>    
      <?php }?>	      
      <?php if (($_smarty_tpl->tpl_vars['product']->value['wholesale_price'])!='0') {?><span class="retail_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['wholesale_price']),$_smarty_tpl);?>
</span><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>0&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
      <span class="old-price product-price">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

      </span>
      <?php if ((isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pl_red'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pl_red']=="1")||(isset($_smarty_tpl->tpl_vars['nc_pl_red']->value)&&$_smarty_tpl->tpl_vars['nc_pl_red']->value=="1")) {?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
      <span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100;?>
%</span>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount') {?>
      <span class="price-percent-reduction">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']),$_smarty_tpl);?>
</span>
      <?php }?>
      <?php }?>
      <?php }?>
      <?php }?>
   </div>
   			<meta itemprop="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" />	
   <?php }?>
   <div class="product-flags">
      <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']) {?>
      <span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span>
      <?php }?>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
      <?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
      <span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
      <?php }?>
   </div>
   <div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['product']->value['color_list'];?>
</div>
   
</div><?php }} ?>
