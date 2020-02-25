<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:19:57
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/mpfedexshipping/views/templates/hook/handlingfeeadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7174088615e4f303dc99522-97707461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9905bf0a198e464060da4b2770c6a028461b2acb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/mpfedexshipping/views/templates/hook/handlingfeeadmin.tpl',
      1 => 1535764417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7174088615e4f303dc99522-97707461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'handlingFees' => 0,
    'fee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f303dcd9f59_94060593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f303dcd9f59_94060593')) {function content_5e4f303dcd9f59_94060593($_smarty_tpl) {?>

<div class="panel">
	<div class="panel-heading">
		<i class="icon-truck"></i>
		<?php echo smartyTranslate(array('s'=>'Marketplace FedEx Shipping Fee','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

	</div>
	<table class="table table-bordered">
		<tr>
			<th><?php echo smartyTranslate(array('s'=>'Seller Name/Admin','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</th>
			<th><?php echo smartyTranslate(array('s'=>'Handling Fee','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</th>
			<th><?php echo smartyTranslate(array('s'=>'Total Shipping Fee','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['fee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fee']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['handlingFees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fee']->key => $_smarty_tpl->tpl_vars['fee']->value) {
$_smarty_tpl->tpl_vars['fee']->_loop = true;
?>
			<tr>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['fee']->value['seller_firstname']=='') {?>
						<?php echo smartyTranslate(array('s'=>'Admin','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fee']->value['seller_firstname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fee']->value['seller_lastname'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['fee']->value['handling_fee'],'currency'=>intval($_smarty_tpl->tpl_vars['fee']->value['id_currency'])),$_smarty_tpl);?>
</td>
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['fee']->value['total_charge'],'currency'=>intval($_smarty_tpl->tpl_vars['fee']->value['id_currency'])),$_smarty_tpl);?>
</td>
			</tr>
		<?php } ?>
	</table>
</div><?php }} ?>
