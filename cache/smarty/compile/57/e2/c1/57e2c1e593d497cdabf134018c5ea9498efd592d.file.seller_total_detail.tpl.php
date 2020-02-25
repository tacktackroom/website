<?php /* Smarty version Smarty-3.1.19, created on 2020-02-21 02:18:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/transaction/seller_total_detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4608894635e4f2ffe77cf45-28021417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e2c1e593d497cdabf134018c5ea9498efd592d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/transaction/seller_total_detail.tpl',
      1 => 1576003827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4608894635e4f2ffe77cf45-28021417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sellerOrderTotalPendingPayments' => 0,
    'id_customer' => 0,
    'sellerOrderTotalPendings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2ffe790683_64518458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2ffe790683_64518458')) {function content_5e4f2ffe790683_64518458($_smarty_tpl) {?>
<div class="cashout_wrapper">
	<div class="alert alert_cashout" style="display: none;">	
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../mppayment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<button id="cashout_seller" <?php if (!isset($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value)&&!count($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value)) {?>disabled<?php }?>>Cash out</button>



<div class=" clearfix box-account wk_seller_total" style="overflow: scroll">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMpTransactionTopContent"),$_smarty_tpl);?>

	<?php if ((Configuration::get('WK_MP_COMMISSION_DISTRIBUTE_ON')==1)) {?>
		<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Only payment accepted earning are available','mod'=>'marketplace'),$_smarty_tpl);?>
</div>
	<?php }?>
	 <span class="info_payout">Funds move from "Pending" to "Available" automatically 4 days after the item has arrived at the buyer's address.</span>
	 <span class="info_payout">Payouts generally take 2-3 business days to process.</span>
	<?php if (isset($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value)&&count($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value)) {?>
		<h3 class=""><?php echo smartyTranslate(array('s'=>'Available amount (Orders delivered over 4 days)'),$_smarty_tpl);?>
:</h3>
		<table class="table table-bordered table-striped layout no-footer seller_transaction_xs responsive-table seller_global">
			<thead>
				<tr class="nodrag nodrop">
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'Total Order','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'TTR Commission','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'Shipping Cost','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'Your Earning','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMpSellerTransactionTableColumnHead'),$_smarty_tpl);?>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="xs_td big_number"><center><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value['total_earning'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</center></td>
					<td class="xs_td medium_number"><center><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value['admin_commission'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</center></td>
					
					<td class="xs_td medium_number"><center><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value['admin_shipping'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</center></td>
					<td class="xs_td big_number"><center><span class="wkbadge-success-font"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value['seller_total'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center>
					</td>
					

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMpSellerTransactionTableColumnBody','seller_payment_data'=>$_smarty_tpl->tpl_vars['sellerOrderTotalPendingPayments']->value,'id_seller_customer'=>$_smarty_tpl->tpl_vars['id_customer']->value),$_smarty_tpl);?>

				</tr>
			</tbody>
		</table>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['sellerOrderTotalPendings']->value)&&$_smarty_tpl->tpl_vars['sellerOrderTotalPendings']->value) {?>
		<h3 class=""><?php echo smartyTranslate(array('s'=>'Pending amount (Orders accepted and Orders shipped)'),$_smarty_tpl);?>
:</h3>
		<table class="table table-bordered table-striped layout dataTable no-footer seller_transaction_xs responsive-table seller_pending">
			<thead>
				<tr class="nodrag nodrop">
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'Total Order','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'TTR Commission','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'Shipping Cost','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<th class="wk_text_center"><?php echo smartyTranslate(array('s'=>'Your Earning','mod'=>'marketplace'),$_smarty_tpl);?>
</th>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMpSellerTransactionTableColumnHead'),$_smarty_tpl);?>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="xs_td big_number"><center><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendings']->value['total_earning'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</center></td>
					<td class="xs_td medium_number"><center><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendings']->value['admin_commission'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</center></td>
					<td class="xs_td medium_number"><center><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendings']->value['admin_shipping'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</center></td>
					<td class="xs_td big_number"><center><span class="wkbadge-success-font"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerOrderTotalPendings']->value['seller_total'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span></center>
					</td>
				</tr>
			</tbody>
		</table>
	<?php }?>
</div><?php }} ?>
