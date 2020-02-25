<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:20
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/admin83/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19389513635e4f1d1c59ce19-24318657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1270b4e7e472f300e6d1a32d444cf915e3e7cd42' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/admin83/themes/default/template/content.tpl',
      1 => 1530853573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19389513635e4f1d1c59ce19-24318657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d1c5a00a3_26631550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d1c5a00a3_26631550')) {function content_5e4f1d1c5a00a3_26631550($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
