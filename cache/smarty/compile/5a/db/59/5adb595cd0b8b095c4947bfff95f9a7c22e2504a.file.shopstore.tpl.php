<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/shop/shopstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17263423725e4f1d937ef458-38516604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5adb595cd0b8b095c4947bfff95f9a7c22e2504a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/shop/shopstore.tpl',
      1 => 1573695483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17263423725e4f1d937ef458-38516604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'navigationPipe' => 0,
    'review_submitted' => 0,
    'review_submit_default' => 0,
    'review_deleted' => 0,
    'shop_banner_path' => 0,
    'reviews' => 0,
    'count' => 0,
    'WK_MP_SELLER_DETAILS_ACCESS_8' => 0,
    'mp_shop_collection' => 0,
    'n' => 0,
    'p' => 0,
    'nb_products' => 0,
    'productShowingStart' => 0,
    'productShowing' => 0,
    'roythemes' => 0,
    'products_per_page' => 0,
    'start' => 0,
    'stop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d938424b9_00447365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d938424b9_00447365')) {function content_5e4f1d938424b9_00447365($_smarty_tpl) {?>
<script>
	
	   function openTab(evt, tab) {
     var i, x, tablinks;
     x = document.getElementsByClassName("tab");
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
     }
     tablinks = document.getElementsByClassName("tablink");
     for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace("feed_active", "");
     }
     document.getElementById(tab).style.display = "block";
     evt.currentTarget.firstElementChild.className += " feed_active";
   }
   
   
   </script>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','dashboard'), ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
		<?php echo smartyTranslate(array('s'=>'Marketplace','mod'=>'marketplace'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
	<span class="navigation_page"><?php echo smartyTranslate(array('s'=>'Shop','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['review_submitted']->value)) {?>
	<p class="alert alert-success">
		<?php echo smartyTranslate(array('s'=>'Thanks for the feedback. Review will be active after admin approval.','mod'=>'marketplace'),$_smarty_tpl);?>

	</p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['review_submit_default']->value)) {?>
	<p class="alert alert-success">
		<?php echo smartyTranslate(array('s'=>'Thanks for the feedback.','mod'=>'marketplace'),$_smarty_tpl);?>

	</p>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['review_deleted']->value)) {?>
	<p class="alert alert-success">
		<?php echo smartyTranslate(array('s'=>'Your review successfully deleted.','mod'=>'marketplace'),$_smarty_tpl);?>

	</p>
<?php }?>

<div class="wrapper-overflow">
<div class="<?php if (!isset($_smarty_tpl->tpl_vars['shop_banner_path']->value)) {?>shop_top_banner<?php }?>">
	<?php if (isset($_smarty_tpl->tpl_vars['shop_banner_path']->value)) {?>
		<img class="wk_banner_image" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_banner_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'Banner','mod'=>'marketplace'),$_smarty_tpl);?>
"/>
	<?php }?>
</div>
</div>

<div class="header_seller_shop">
	<div class="wk_profile_container col-xs-12 col-sm-12 col-lg-12">
							
<div class="wk_shop_left_bar">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/../../views/templates/front/_partials/seller-image-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



		</div>
		</div>				
		<div class="clearfix"></div>
	</div>
	

 <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>  
 <div id="seller_tab">
	   <div class="container_tab container">
	      <a href="javascript:void(0)" onclick="openTab(event, 'wrapper_seller_shop');">
	         <div class="feed_active tablink">Listings</div>
	      </a>
	      <a href="javascript:void(0)" onclick="openTab(event, 'reviews');">
	         <div class=" tablink">Feedbacks <span class="avg_rating"></span><span class="number_review"> (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</span>
</div>
	      </a>
	   </div>
   </div>
   <?php }?>
   
<div id="wrapper_seller_shop" class="tab" style="display:block">
	<?php if (isset($_smarty_tpl->tpl_vars['WK_MP_SELLER_DETAILS_ACCESS_8']->value)) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['mp_shop_collection']->value)&&$_smarty_tpl->tpl_vars['mp_shop_collection']->value) {?>
			<div id="left_column" class="column col-xs-6 col-sm-4 col-md-3">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayShopStore'),$_smarty_tpl);?>

			</div>
			<div id="center_column" class="center_column col-xs-12 col-sm-8 col-md-9 category">
				<div class="content_sortPagiBar clearfix hidden-xs hidden-sm">
		        	<div class="sortPagiBar clearfix">
		        		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						<div class="product-count hidden-xs hidden-sm">
							<?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)<$_smarty_tpl->tpl_vars['nb_products']->value) {?>
								<?php $_smarty_tpl->tpl_vars['productShowing'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value, null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['productShowing'] = new Smarty_variable(($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_products']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1, null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['p']->value==1) {?>
								<?php $_smarty_tpl->tpl_vars['productShowingStart'] = new Smarty_variable(1, null, 0);?>
							<?php } else { ?>
								<?php $_smarty_tpl->tpl_vars['productShowingStart'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['nb_products']->value>1) {?><?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of %3$d items','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value,$_smarty_tpl->tpl_vars['nb_products']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of 1 item','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value)),$_smarty_tpl);?>
<?php }?>
						</div>
					</div>
				</div>

		        <?php $_smarty_tpl->tpl_vars['lalala'] = new Smarty_variable($_smarty_tpl->tpl_vars['roythemes']->value['nc_p_hover'], null, 0);?>

				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['mp_shop_collection']->value), 0);?>


				<div class="content_sortPagiBar cat_bottom ">

		            <div class="sortPagiBar clearfix ">
		                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		                <div class="product-count">
		                    <?php if (($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)<$_smarty_tpl->tpl_vars['nb_products']->value) {?>
		                        <?php $_smarty_tpl->tpl_vars['productShowing'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value, null, 0);?>
		                    <?php } else { ?>
		                        <?php $_smarty_tpl->tpl_vars['productShowing'] = new Smarty_variable(($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['nb_products']->value-$_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value)*-1, null, 0);?>
		                    <?php }?>
		                    <?php if ($_smarty_tpl->tpl_vars['p']->value==1) {?>
		                        <?php $_smarty_tpl->tpl_vars['productShowingStart'] = new Smarty_variable(1, null, 0);?>
		                    <?php } else { ?>
		                        <?php $_smarty_tpl->tpl_vars['productShowingStart'] = new Smarty_variable($_smarty_tpl->tpl_vars['n']->value*$_smarty_tpl->tpl_vars['p']->value-$_smarty_tpl->tpl_vars['n']->value+1, null, 0);?>
		                    <?php }?>
		                    <?php if ($_smarty_tpl->tpl_vars['nb_products']->value>1) {?><?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of %3$d items','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value,$_smarty_tpl->tpl_vars['nb_products']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Showing %1$d - %2$d of 1 item','sprintf'=>array($_smarty_tpl->tpl_vars['productShowingStart']->value,$_smarty_tpl->tpl_vars['productShowing']->value)),$_smarty_tpl);?>
<?php }?>
		                </div>
		            </div>

					<div class="bottom-pagination-content clearfix <?php if (!($_smarty_tpl->tpl_vars['nb_products']->value>$_smarty_tpl->tpl_vars['products_per_page']->value&&$_smarty_tpl->tpl_vars['start']->value!=$_smarty_tpl->tpl_vars['stop']->value)) {?>no-border<?php }?>">
		                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('seller_shop'=>true), 0);?>
 
		                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

					</div>
				</div>
			</div>
		<?php }?>
	<?php }?>
</div>

<div id="reviews" class="tab" style="display:none">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/../../views/templates/front/seller/_partials/seller-review-details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/../../views/templates/front/seller/_partials/seller-review-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'rate_req')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'rate_req'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Rating is required.','js'=>1,'mod'=>'marketplace'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'rate_req'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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
<?php }} ?>
