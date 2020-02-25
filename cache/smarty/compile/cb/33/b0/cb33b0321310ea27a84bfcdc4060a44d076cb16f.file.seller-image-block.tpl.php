<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/_partials/seller-image-block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1243780965e4f1d9384dea5-71960358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb33b0321310ea27a84bfcdc4060a44d076cb16f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/_partials/seller-image-block.tpl',
      1 => 1576025821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1243780965e4f1d9384dea5-71960358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seller_img_path' => 0,
    'timestamp' => 0,
    'sellerprofile' => 0,
    'name_shop' => 0,
    'link' => 0,
    'mp_seller_info' => 0,
    'WK_MP_SELLER_DETAILS_ACCESS_1' => 0,
    'reviews' => 0,
    'sellerDetail' => 0,
    'count_order' => 0,
    'WK_MP_SELLER_DETAILS_ACCESS_10' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d9386c7c1_75453533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d9386c7c1_75453533')) {function content_5e4f1d9386c7c1_75453533($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/modifier.regex_replace.php';
?>
<div class="wk_profile_img">

		<img class="wk_left_img" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seller_img_path']->value, ENT_QUOTES, 'UTF-8', true);?>
?time=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo smartyTranslate(array('s'=>'Image','mod'=>'marketplace'),$_smarty_tpl);?>
"/>

</div>
<div class="wk_profile_img_belowlink">
	<?php if (isset($_smarty_tpl->tpl_vars['sellerprofile']->value)) {?>
		<a class="wk_anchor_links" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','shopstore',array('mp_shop_name'=>$_smarty_tpl->tpl_vars['name_shop']->value)), ENT_QUOTES, 'UTF-8', true);?>
">
			<div class="wk_profile_left_display">
				<span>
					<i class="icon-shopping-cart"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller_info']->value['shop_name'], ENT_QUOTES, 'UTF-8', true);?>

				</span>
			</div>
		</a>
	<?php } else { ?>

			<div class="wk_profile_left_display">
				<span>
					
					<?php if (isset($_smarty_tpl->tpl_vars['WK_MP_SELLER_DETAILS_ACCESS_1']->value)) {?>
						<?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['mp_seller_info']->value['shop_name'],'/#.*/',''), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<?php } else { ?>
						<?php echo smartyTranslate(array('s'=>'Seller Profile','mod'=>'marketplace'),$_smarty_tpl);?>

					<?php }?>
				</span>
<?php if ($_smarty_tpl->tpl_vars['mp_seller_info']->value['country_residence']==21) {?>
	<img style="width: 20px;vertical-align: sub;" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/views/img/usa.png" />
<?php } elseif ($_smarty_tpl->tpl_vars['mp_seller_info']->value['country_residence']==4) {?>	
	<img style="width: 20px;vertical-align: sub;" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/views/img/canada.png" />		
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['reviews']->value)) {?>
<div >
	<span class="avg_rating"></span>
	<span class="number_review"> </span>
</div>
<?php }?>	
<?php $_smarty_tpl->tpl_vars['count_order'] = new Smarty_variable(WkMpSellerOrder::countTotalOrderValidated(false,$_smarty_tpl->tpl_vars['mp_seller_info']->value['seller_customer_id'],false), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['reviews'] = new Smarty_variable(WkMpSellerReview::getSellerAvgRating($_smarty_tpl->tpl_vars['sellerDetail']->value['id_seller']), null, 0);?>  
   
   <?php if ($_smarty_tpl->tpl_vars['count_order']->value!=0) {?>      
     <div class="seller_badge">  
	     <a href="http://help.tacktackroom.com/en/articles/3500283-badges-on-tacktackroom-com" target="_blank">      
         <span>
         <?php if ($_smarty_tpl->tpl_vars['count_order']->value>0&&$_smarty_tpl->tpl_vars['count_order']->value<5) {?>
         	<img style="width: 20px" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/trusted.png" /><span style="font-weight: bold;font-size: 13px"> Confirmed Seller</span>
         <?php } elseif ($_smarty_tpl->tpl_vars['count_order']->value>4) {?>
         	<img style="width: 20px" src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/libs/rateit/lib/img/trusted_seller.png" /><span style="font-weight: bold;font-size: 13px"> Elite Tack Shop</span>
         <?php }?>	
         </span>
	     </a>
     </div>	
     <?php }?>				
			
			</div>
							<div class="wk_about_shop">
								<?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['about_shop'];?>

							</div>			
			<?php if ($_smarty_tpl->tpl_vars['mp_seller_info']->value['id_seller']=='277') {?>
<div class="wrapper_location">
   <span class="icon_location">Covina, </span>   
   <label id="state_seller">California</label>
</div> 
<?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['country']=="United States";?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?>
<div class="wrapper_location">
   <span class="icon_location"><?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['city'];?>
,  <?php echo State::getNameById($_smarty_tpl->tpl_vars['mp_seller_info']->value['id_state']);?>
</span>  

   
</div> 
<?php } else { ?>
<div class="wrapper_location">
   <span class="icon_location"><?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['city'];?>
, </span>   
   <label><?php echo $_smarty_tpl->tpl_vars['mp_seller_info']->value['country'];?>
</label>

</div> 
<?php }}?>   

	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['WK_MP_SELLER_DETAILS_ACCESS_10']->value)) {?>
		<a href="#wk_question_form" class="wk_anchor_links open-question-form" title="<?php echo smartyTranslate(array('s'=>'Contact Seller','mod'=>'marketplace'),$_smarty_tpl);?>
">
			<div class="wk_profile_left_display_contact">
				<span>
					<i class="icon-envelope"></i> <?php echo smartyTranslate(array('s'=>'Contact Seller','mod'=>'marketplace'),$_smarty_tpl);?>

				</span>
			</div>
		</a>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/../../views/templates/hook/_partials/contact-seller-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMpSellerImageBlockFooter'),$_smarty_tpl);?>

</div><?php }} ?>
