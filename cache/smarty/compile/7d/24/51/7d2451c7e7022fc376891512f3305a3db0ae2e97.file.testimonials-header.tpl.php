<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/bontestimonials//views/templates/hook/testimonials-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2497882975e4f1d2c00c682-91240667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2451c7e7022fc376891512f3305a3db0ae2e97' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/bontestimonials//views/templates/hook/testimonials-header.tpl',
      1 => 1566252128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2497882975e4f1d2c00c682-91240667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'variable' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c013965_68638381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c013965_68638381')) {function content_5e4f1d2c013965_68638381($_smarty_tpl) {?>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
  <?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['variable'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['variable']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variable']->value, ENT_QUOTES, 'UTF-8', true);?>
 = <?php if (!$_smarty_tpl->tpl_vars['content']->value['value']) {?>false<?php } elseif ($_smarty_tpl->tpl_vars['content']->value['type']=='string') {?>'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
'<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>;
  <?php } ?>
</script>

<?php }} ?>
