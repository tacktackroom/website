<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:43
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/admin/seller_info_detail/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5904195545e4f2f3f8d89a8-17480879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85532691bb5320c8acffc58adbef3488b4e5acd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/admin/seller_info_detail/helpers/view/view.tpl',
      1 => 1531370302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5904195545e4f2f3f8d89a8-17480879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer_id' => 0,
    'mp_seller' => 0,
    'current' => 0,
    'token' => 0,
    'gender' => 0,
    'link' => 0,
    'avg_rating' => 0,
    'seller_img_path' => 0,
    'timestamp' => 0,
    'seller_default_img_path' => 0,
    'shop_img_path' => 0,
    'shop_default_img_path' => 0,
    'payment_detail' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f3f92dd79_85555173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f3f92dd79_85555173')) {function content_5e4f2f3f92dd79_85555173($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['customer_id']->value)&&$_smarty_tpl->tpl_vars['customer_id']->value==0) {?>
<div class="alert alert-danger">
	<p><?php echo smartyTranslate(array('s'=>'This seller has been removed by admin from prestashop.','mod'=>'marketplace'),$_smarty_tpl);?>
</p>
</div>
<?php }?>
<div id="mp-container-customer">
	<div class="row">
		<div class="col-lg-6">
			<div class="panel clearfix">
				<?php if (isset($_smarty_tpl->tpl_vars['mp_seller']->value)) {?>
					<div class="panel-heading">
						<i class="icon-user"></i>
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['seller_firstname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['seller_lastname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - 
						<a href="mailto:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['business_email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
							<i class="icon-envelope"></i>
							<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['business_email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						</a>
						<div class="panel-heading-action">
							<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&amp;updatewk_mp_seller&amp;id_seller=<?php echo intval($_smarty_tpl->tpl_vars['mp_seller']->value['id_seller']);?>
&amp;token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="btn btn-default">
								<i class="icon-edit"></i>
								<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'marketplace'),$_smarty_tpl);?>

							</a>
						</div>
					</div>
					<div class="form-horizontal">
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Social Title','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['gender']->value->name) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['gender']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Unknown','mod'=>'marketplace'),$_smarty_tpl);?>
<?php }?></p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Registration Date','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['mp_seller']->value['date_add'],'full'=>1),$_smarty_tpl);?>
</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Unique Shop Name','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static">
									<?php if ($_smarty_tpl->tpl_vars['mp_seller']->value['active']) {?>
										<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','shopstore',array('mp_shop_name'=>$_smarty_tpl->tpl_vars['mp_seller']->value['mp_shop_rewrite'])), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" target="_balnk" title="<?php echo smartyTranslate(array('s'=>'View Shop','mod'=>'marketplace'),$_smarty_tpl);?>
">
											<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['shop_name_unique'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

										</a>
									<?php } else { ?>
										<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['shop_name_unique'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

									<?php }?>
								</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Default Language','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['default_lang'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Shop Name','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['shop_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Phone','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['phone'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>

						<?php if ($_smarty_tpl->tpl_vars['mp_seller']->value['address']!='') {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Address','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['address'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['mp_seller']->value['postcode']!='') {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Zip/Postal Code','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['postcode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['mp_seller']->value['city']!='') {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'City','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['city'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['mp_seller']->value['country'])) {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Country','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['country'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['mp_seller']->value['state'])) {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'State','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller']->value['state'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<?php }?>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Rating','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static">
									<?php if (isset($_smarty_tpl->tpl_vars['avg_rating']->value)) {?>
										<span class="avg_rating"></span>
									<?php } else { ?>
										<?php echo smartyTranslate(array('s'=>'No Rating','mod'=>'marketplace'),$_smarty_tpl);?>

									<?php }?>
								</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Seller Logo','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static">
									<img class="img-thumbnail" width="100" height="100" src="<?php if (isset($_smarty_tpl->tpl_vars['seller_img_path']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['seller_img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?timestamp=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['seller_default_img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?timestamp=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" alt="<?php if (isset($_smarty_tpl->tpl_vars['seller_img_path']->value)) {?><?php echo smartyTranslate(array('s'=>'Seller Profile Image','mod'=>'marketplace'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Default Image','mod'=>'marketplace'),$_smarty_tpl);?>
<?php }?>"/>
								</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Shop Logo','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static">
									<img class="img-thumbnail" width="100" height="100" src="<?php if (isset($_smarty_tpl->tpl_vars['shop_img_path']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?timestamp=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_default_img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
?timestamp=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['timestamp']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" alt="<?php if (isset($_smarty_tpl->tpl_vars['shop_img_path']->value)) {?><?php echo smartyTranslate(array('s'=>'Shop Logo','mod'=>'marketplace'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Default Image','mod'=>'marketplace'),$_smarty_tpl);?>
<?php }?>"/>
								</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Status','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static">
									<?php if ($_smarty_tpl->tpl_vars['mp_seller']->value['active']) {?>
										<span class="label label-success">
											<i class="icon-check"></i>
											<?php echo smartyTranslate(array('s'=>'Active','mod'=>'marketplace'),$_smarty_tpl);?>

										</span>
									<?php } else { ?>
										<span class="label label-danger">
											<i class="icon-remove"></i>
											<?php echo smartyTranslate(array('s'=>'Inactive','mod'=>'marketplace'),$_smarty_tpl);?>

										</span>
									<?php }?>
								</p>
							</div>
						</div>

						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Seller Products','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<a href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSellerProductDetail'));?>
&amp;id_seller=<?php echo intval($_smarty_tpl->tpl_vars['mp_seller']->value['id_seller']);?>
" class="btn btn-default" target="_blank"><i class="icon-search-plus"></i> <?php echo smartyTranslate(array('s'=>'View Products','mod'=>'marketplace'),$_smarty_tpl);?>
</a>
							</div>
						</div>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminSellerDetailViewBottom'),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminSellerDetailViewLeftColumn'),$_smarty_tpl);?>

		</div>

		<div class="col-lg-6">
			<div class="panel clearfix">
				<div class="panel-heading">
					<i class="icon-money"></i>
					<?php echo smartyTranslate(array('s'=>'Payment Account details','mod'=>'marketplace'),$_smarty_tpl);?>

				</div>
				<div class="form-horizontal">
					<?php if (isset($_smarty_tpl->tpl_vars['payment_detail']->value)) {?>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Paymet Method','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_detail']->value['payment_mode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
						<div class="row">
							<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Account Details','mod'=>'marketplace'),$_smarty_tpl);?>
 :</label>
							<div class="col-lg-9">
								<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['payment_detail']->value['payment_detail'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							</div>
						</div>
					<?php } else { ?>
						<p class="text-muted text-center"><?php echo smartyTranslate(array('s'=>'No account details available','mod'=>'marketplace'),$_smarty_tpl);?>
</p>
					<?php }?>
				</div>
			</div>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminSellerDetailViewRightColumn'),$_smarty_tpl);?>

		</div>
	</div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['avg_rating']->value)) {?>
<script type="text/javascript">
	$('.avg_rating').raty(
	{
		path: '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['modules_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/marketplace/libs/rateit/lib/img',
		score: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['avg_rating']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
		readOnly: true,
	});
</script>
<?php }?>
<?php }} ?>
