<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/royfeatured/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21415744845e4f1d2c4e7c29-16790563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa5e42938a553426054755cba383d5c4764927c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/royfeatured/views/templates/hook/tab.tpl',
      1 => 1525307878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21415744845e4f1d2c4e7c29-16790563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c4ebe96_39113361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c4ebe96_39113361')) {function content_5e4f1d2c4ebe96_39113361($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'royfeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>
