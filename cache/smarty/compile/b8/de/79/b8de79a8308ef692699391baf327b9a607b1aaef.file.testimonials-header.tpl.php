<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/bontestimonials//views/templates/hook/testimonials-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7927762625e4f2683126f59-75372966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8de79a8308ef692699391baf327b9a607b1aaef' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/bontestimonials//views/templates/hook/testimonials-header.tpl',
      1 => 1566252128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7927762625e4f2683126f59-75372966',
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
  'unifunc' => 'content_5e4f268312e524_01977442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f268312e524_01977442')) {function content_5e4f268312e524_01977442($_smarty_tpl) {?>
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
