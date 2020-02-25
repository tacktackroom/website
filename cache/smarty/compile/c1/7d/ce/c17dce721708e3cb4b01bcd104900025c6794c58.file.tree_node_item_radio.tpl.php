<?php /* Smarty version Smarty-3.1.19, created on 2020-02-21 11:36:29
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/admin83/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14630451095e50313dbad2c8-27757848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17dce721708e3cb4b01bcd104900025c6794c58' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/admin83/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1530853575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14630451095e50313dbad2c8-27757848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e50313dbb3152_72780213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e50313dbb3152_72780213')) {function content_5e50313dbb3152_72780213($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }} ?>
