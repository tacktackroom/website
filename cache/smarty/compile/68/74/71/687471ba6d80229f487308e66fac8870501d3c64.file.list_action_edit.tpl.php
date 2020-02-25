<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 18:22:16
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/admin83/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20890930515e5484d8967b01-18524933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '687471ba6d80229f487308e66fac8870501d3c64' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/admin83/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1530853575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20890930515e5484d8967b01-18524933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e5484d896c610_53911759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e5484d896c610_53911759')) {function content_5e5484d896c610_53911759($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
