<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/admin83/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15304428415e4f2f1ce4d571-82185928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21475edddd6923bcfa17b31b6fa0a55003985bc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/admin83/themes/default/template/content.tpl',
      1 => 1530853573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15304428415e4f2f1ce4d571-82185928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f1ce51536_66151829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f1ce51536_66151829')) {function content_5e4f2f1ce51536_66151829($_smarty_tpl) {?>
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
