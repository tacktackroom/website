<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:11
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/hook/mp_soldby.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1441038505e4f1d8bdc56e1-04051088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e19bcaa06ee42fa620691744d8d8f3b13036a31c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/hook/mp_soldby.tpl',
      1 => 1531369752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1441038505e4f1d8bdc56e1-04051088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wk_mp_product_link' => 0,
    'showDetail' => 0,
    'mp_seller_info' => 0,
    'WK_MP_SELLER_DETAILS_ACCESS_9' => 0,
    'shopstore_link' => 0,
    'WK_MP_SELLER_DETAILS_ACCESS_7' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d8bdd0950_51762523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d8bdd0950_51762523')) {function content_5e4f1d8bdd0950_51762523($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['wk_mp_product_link']->value)) {?>
<a title="<?php echo smartyTranslate(array('s'=>'Edit Product','mod'=>'marketplace'),$_smarty_tpl);?>
" class="wk_seller_edit" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['wk_mp_product_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	<i class="icon-pencil"></i>
	<span><?php echo smartyTranslate(array('s'=>'Edit Product','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
</a>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['showDetail']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['mp_seller_info']->value)&&isset($_smarty_tpl->tpl_vars['WK_MP_SELLER_DETAILS_ACCESS_9']->value)) {?>
		<p>
			<label><?php echo smartyTranslate(array('s'=>'Sold By','mod'=>'marketplace'),$_smarty_tpl);?>
:</label>
			<a id="profileconnect" title="<?php echo smartyTranslate(array('s'=>'Visit Shop','mod'=>'marketplace'),$_smarty_tpl);?>
" target="_blank" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shopstore_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
				<span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['mp_seller_info']->value['shop_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
			</a>

			<?php if (isset($_smarty_tpl->tpl_vars['WK_MP_SELLER_DETAILS_ACCESS_7']->value)) {?>
				<span id="seller_rating"></span>
			<?php }?>
		</p>
	<?php }?>
<?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMpProductSoldByBottom"),$_smarty_tpl);?>

<?php }} ?>
