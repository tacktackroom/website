<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:18
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/hook/admin-order-view-seller-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:881349885e4f2f266a37a3-34370719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdbf46dfc7f5fbde6c808672fed3fa12df888536' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/hook/admin-order-view-seller-details.tpl',
      1 => 1531369754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '881349885e4f2f266a37a3-34370719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mp_seller_order_details' => 0,
    'mp_order_detail' => 0,
    'currentState' => 0,
    'link' => 0,
    'order_detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f266bb367_31000598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f266bb367_31000598')) {function content_5e4f2f266bb367_31000598($_smarty_tpl) {?>

<div class="panel">
	<div class="panel-heading">
		<i class="icon-list"></i>
		<?php echo smartyTranslate(array('s'=>'Seller Product List','mod'=>'marketplace'),$_smarty_tpl);?>
 
		<span class="badge"><?php echo mb_convert_encoding(htmlspecialchars(count($_smarty_tpl->tpl_vars['mp_seller_order_details']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
	</div>
	<div class="table-responsive">
		<table class="table wk-table">
			<thead>
				<tr>
					<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Unique Shop Name','mod'=>'marketplace'),$_smarty_tpl);?>
</span></th>
					<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Current Order Status','mod'=>'marketplace'),$_smarty_tpl);?>
</span></th>
					<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Tracking URL','mod'=>'marketplace'),$_smarty_tpl);?>
</span></th>
					<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Tracking Number','mod'=>'marketplace'),$_smarty_tpl);?>
</span></th>
					<th><?php echo smartyTranslate(array('s'=>'Seller Detail','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Product Detail','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminPsSellerOrderViewHead'),$_smarty_tpl);?>

				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['mp_order_detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mp_order_detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mp_seller_order_details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mp_order_detail']->key => $_smarty_tpl->tpl_vars['mp_order_detail']->value) {
$_smarty_tpl->tpl_vars['mp_order_detail']->_loop = true;
?>
					<tr>
						<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['seller_shop'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
						<td>
							<span style="background:<?php if (isset($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['ostate_name'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['color'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currentState']->value->color, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>;color:white !important; border-radius: 5px; padding: 5px;">
							<?php if (isset($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['ostate_name'])) {?>
								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['ostate_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

							<?php } else { ?>
								<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currentState']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

							<?php }?>
							</span>
						</td>
						<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['tracking_url'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
						<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['tracking_number'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
						<td><a class="btn btn-default" target="_blank" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSellerInfoDetail'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_seller=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['id_seller'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewwk_mp_seller"><i class="icon-search-plus"></i> <?php echo smartyTranslate(array('s'=>'View Seller','mod'=>'marketplace'),$_smarty_tpl);?>
</a></td>
						<td>
							<a data-id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['id_seller'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="btn btn-default wk-seller-prod" href="javascript:void(0);">
								<i class="icon-search-plus"></i> <?php echo smartyTranslate(array('s'=>'View Detail','mod'=>'marketplace'),$_smarty_tpl);?>

							</a>
						</td>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminPsSellerOrderViewBody','idSellerCustomer'=>$_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['seller_customer_id']),$_smarty_tpl);?>

					</tr>
					<tr class="wk-product-detail-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_order_detail']->value[0]['id_seller'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="display: none;">
						<td colspan="12">
							<div class="panel">
							<table class="table">
								<thead>
									<tr>
										<th><?php echo smartyTranslate(array('s'=>'Product Name','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
										<th><?php echo smartyTranslate(array('s'=>'Quantity','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
										<th><?php echo smartyTranslate(array('s'=>'Price(ti)','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
										<th><?php echo smartyTranslate(array('s'=>'Price(te)','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
									</tr>
								</thead>
								<tbody>
									<div class="panel-heading">
										<?php echo smartyTranslate(array('s'=>'Product Details','mod'=>'marketplace'),$_smarty_tpl);?>

									</div>
									<?php  $_smarty_tpl->tpl_vars['order_detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mp_order_detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_detail']->key => $_smarty_tpl->tpl_vars['order_detail']->value) {
$_smarty_tpl->tpl_vars['order_detail']->_loop = true;
?>
									<tr>
										<td>
											<a href="<?php if (isset($_smarty_tpl->tpl_vars['order_detail']->value['id_mp_product'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSellerProductDetail'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_mp_product=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order_detail']->value['id_mp_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&updatewk_mp_seller_product<?php }?>" target="_blank">
												<span class="productName"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order_detail']->value['product_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
											</a>
										</td>
										<td>
											<span class="productName"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['order_detail']->value['quantity'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
										</td>
										<td>
											<span class="productName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['order_detail']->value['price_ti'],'currency'=>$_smarty_tpl->tpl_vars['order_detail']->value['id_currency']),$_smarty_tpl);?>
</span>
										</td>
										<td>
											<span class="productName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['order_detail']->value['price_te'],'currency'=>$_smarty_tpl->tpl_vars['order_detail']->value['id_currency']),$_smarty_tpl);?>
</span>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click', '.wk-seller-prod', function(){
			var idSeller = $(this).attr('data-id');
			$('.wk-product-detail-'+idSeller).toggle();
		});
	});
</script><?php }} ?>
