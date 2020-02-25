<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/intercom/views/templates/hook/intercom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21112725945e4f1d2c964d92-28009477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9b8261dfc334e2e1d23306eb41ddd8a7b0deec' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/intercom/views/templates/hook/intercom.tpl',
      1 => 1545000262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21112725945e4f1d2c964d92-28009477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c968866_11914341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c968866_11914341')) {function content_5e4f1d2c968866_11914341($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='1') {?>
	<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['code']->value, '');?>

<?php }?><?php }} ?>
