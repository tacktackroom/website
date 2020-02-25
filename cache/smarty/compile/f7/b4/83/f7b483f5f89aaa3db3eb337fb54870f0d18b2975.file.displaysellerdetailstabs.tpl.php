<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:43
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/hook/displaysellerdetailstabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1775271035e4f2f3f98b558-43454562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b483f5f89aaa3db3eb337fb54870f0d18b2975' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/hook/displaysellerdetailstabs.tpl',
      1 => 1531369752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1775271035e4f2f3f98b558-43454562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f3f996512_15456256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f3f996512_15456256')) {function content_5e4f2f3f996512_15456256($_smarty_tpl) {?>

<style>
.wk-seller {
	margin-bottom:10px;
	padding:0px !important;;
}
.wk-seller li {
	border-right: 1px solid #ccc;
    padding: 4px;
	margin-left:0px !important;
}
</style>

<ul class="panel nav nav-pills wk-seller">
	<li role="presentation" <?php if (isset($_GET['controller'])) {?><?php if ($_GET['controller']=='AdminSellerInfoDetail') {?>class="active"<?php }?><?php }?>>
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSellerInfoDetail'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
			<i class="icon-user"></i>
			<?php echo smartyTranslate(array('s'=>'Manage Seller Profile','mod'=>'marketplace'),$_smarty_tpl);?>

		</a>
	</li>
	<li role="presentation" <?php if (isset($_GET['controller'])) {?><?php if ($_GET['controller']=='AdminSellerReviews') {?>class="active"<?php }?><?php }?>>
		<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminSellerReviews'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
			<i class="icon-star-empty"></i>
			<?php echo smartyTranslate(array('s'=>'Manage Seller Reviews','mod'=>'marketplace'),$_smarty_tpl);?>

		</a>
	</li>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMpSellerDetailsExtraTab'),$_smarty_tpl);?>

</ul><?php }} ?>
