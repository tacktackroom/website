<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3344745765e4f268367bcf8-85140872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc6c6ad443eb661bb5e09cbb7f6306b48a0b3cb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/homefeatured/tab.tpl',
      1 => 1525307879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3344745765e4f268367bcf8-85140872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683684f24_87604971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683684f24_87604971')) {function content_5e4f2683684f24_87604971($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
