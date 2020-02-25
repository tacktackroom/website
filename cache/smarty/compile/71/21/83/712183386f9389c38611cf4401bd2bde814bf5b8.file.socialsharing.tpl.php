<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:12
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/socialsharing/socialsharing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3796493045e4f1d8c1eb5f7-19965160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '712183386f9389c38611cf4401bd2bde814bf5b8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/socialsharing/socialsharing.tpl',
      1 => 1525307879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3796493045e4f1d8c1eb5f7-19965160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d8c1f1e27_23749099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d8c1f1e27_23749099')) {function content_5e4f1d8c1f1e27_23749099($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value||$_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value||$_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value||$_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>

		<?php if ($_smarty_tpl->tpl_vars['PS_SC_TWITTER']->value) {?>
		<li>
			<button data-type="twitter" type="button" class="btn-twitter social-sharing">
				<i class="icon-twitter"></i> <span><?php echo smartyTranslate(array('s'=>"Tweet",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_FACEBOOK']->value) {?>
		<li>
			<button data-type="facebook" type="button" class="btn-facebook social-sharing">
				<i class="icon-facebook"></i> <span><?php echo smartyTranslate(array('s'=>"Share",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_GOOGLE']->value) {?>
		<li>
			<button data-type="google-plus" type="button" class="btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> <span><?php echo smartyTranslate(array('s'=>"Google+",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['PS_SC_PINTEREST']->value) {?>
		<li>
			<button data-type="pinterest" type="button" class="btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> <span><?php echo smartyTranslate(array('s'=>"Pinterest",'mod'=>'socialsharing'),$_smarty_tpl);?>
</span>
			</button>
		</li>
		<?php }?>
<?php }?><?php }} ?>
