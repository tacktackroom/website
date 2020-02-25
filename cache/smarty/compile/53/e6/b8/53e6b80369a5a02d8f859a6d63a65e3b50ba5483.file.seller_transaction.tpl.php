<?php /* Smarty version Smarty-3.1.19, created on 2020-02-21 02:36:43
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/transaction/seller_transaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:884963715e4f2ffe7fd997-68345390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e6b80369a5a02d8f859a6d63a65e3b50ba5483' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/transaction/seller_transaction.tpl',
      1 => 1582248935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '884963715e4f2ffe7fd997-68345390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2ffe827af4_01642601',
  'variables' => 
  array (
    'transactions' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2ffe827af4_01642601')) {function content_5e4f2ffe827af4_01642601($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/modifier.regex_replace.php';
?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMpWalletRefundhook"),$_smarty_tpl);?>

<div class="box-content">
	<div class="table-responsive wk_order_table">
		<table class="table table-hover layout display responsive-table seller_sale_details dataTable no-footer" id="my-orders-table">
			<thead>
				<tr>
					


					<th><?php echo smartyTranslate(array('s'=>'Order ID','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Item','mod'=>'marketplace'),$_smarty_tpl);?>
</th>		
					<th><?php echo smartyTranslate(array('s'=>'Total Order','mod'=>'marketplace'),$_smarty_tpl);?>
</th>	
					<th><?php echo smartyTranslate(array('s'=>'Total Sale Price','mod'=>'marketplace'),$_smarty_tpl);?>
</th>	
					<th><?php echo smartyTranslate(array('s'=>'Shipping Cost','mod'=>'marketplace'),$_smarty_tpl);?>
</th>								

					<th><?php echo smartyTranslate(array('s'=>'TackTackRoom Commission','mod'=>'marketplace'),$_smarty_tpl);?>
</th> 



					<th><?php echo smartyTranslate(array('s'=>'Your earning','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Order date','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Available for cash out','mod'=>'marketplace'),$_smarty_tpl);?>
</th>					
					<th><?php echo smartyTranslate(array('s'=>'Cashed out','mod'=>'marketplace'),$_smarty_tpl);?>
</th>

				</tr>
			</thead>
			<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['transactions']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transactions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
						<tr>


							<td class="medium_number"><center><span class="wkbadge label-primary"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center></td>
							<td class="medium_number"><center><span class="wkbadge"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['product_name'],40,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center></td>
							<td class="medium_number"><center><span class="">$<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['data']->value['order_amount'],'/[.,][0-9]+/','');?>
</span></center></td>	
							<td class="medium_number"><center><span class="">$<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['data']->value['total_sale'],'/[.,][0-9]+/','');?>
</span></center></td>		
							<td class="medium_number"><center><span class=""><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['data']->value['seller_shipping'],'/[.,][0-9]+/','');?>
</span></center></td>							

							<td data-order="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['admin_commission_without_sign'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><center><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['data']->value['admin_commission'],'/[.,][0-9]+/','');?>
</center></td>
							<td data-order="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['seller_amount_without_sign'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
								<?php if (isset($_smarty_tpl->tpl_vars['data']->value['transaction_type'])&&$_smarty_tpl->tpl_vars['data']->value['transaction_type']=='order') {?>
									<center><span class="wkbadge-success-font"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['seller_amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['data']->value['transaction_type'])&&$_smarty_tpl->tpl_vars['data']->value['transaction_type']=='order_cancelled') {?>
									<center><span class="wkbadge-danger-font"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['seller_amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['data']->value['transaction_type'])&&$_smarty_tpl->tpl_vars['data']->value['transaction_type']=='settlement') {?>
									<center><span class="wkbadge-danger-font"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['seller_amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center>
								<?php } elseif (isset($_smarty_tpl->tpl_vars['data']->value['transaction_type'])&&$_smarty_tpl->tpl_vars['data']->value['transaction_type']=='settlement_cancelled') {?>
									<center><span class="wkbadge-success-font"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['seller_amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center>
								<?php }?>
							</td>							



							<td><center><span class=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['data']->value['date_add']),$_smarty_tpl);?>
</span></center></td>
							<td><center><span class=""><?php if ($_smarty_tpl->tpl_vars['data']->value['delivered']==1&&$_smarty_tpl->tpl_vars['data']->value['paidout']==0) {?><span class="wkbadge-success-font">Yes</span><?php } elseif ($_smarty_tpl->tpl_vars['data']->value['delivered']==1&&$_smarty_tpl->tpl_vars['data']->value['paidout']==1) {?><span class="wkbadge label-primary">--</span><?php } else { ?><span class="wkbadge label-primary">No</span><?php }?></span></center></td>
<td><center><span class=""><?php if ($_smarty_tpl->tpl_vars['data']->value['paidout']==1) {?><span class="wkbadge-success-font">Paid</span><?php } else { ?><span class="wkbadge label-primary">Not paid</span><?php }?></span></center></td>														

						</tr>
						<div style="display: none;">
							<div id="content<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['id_seller_transaction_history'], ENT_QUOTES, 'UTF-8', true);?>
" class="content_seq">
								<center><img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
marketplace/views/img/loading-small.gif" class="wk_prod_img_loader"/></center>
							</div>
						</div>
					<?php } ?>
				<?php }?>
			</tbody>
		</table>
	</div>
</div>
<?php }} ?>
