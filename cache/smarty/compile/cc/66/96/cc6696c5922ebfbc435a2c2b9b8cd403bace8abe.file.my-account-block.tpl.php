<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:18:50
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/fbloginblock/views/templates/hooks/my-account-block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12443221795e4f2ffa8bfc95-71010702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc6696c5922ebfbc435a2c2b9b8cd403bace8abe' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/fbloginblock/views/templates/hooks/my-account-block.tpl',
      1 => 1536164896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12443221795e4f2ffa8bfc95-71010702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fbloginblockislogged' => 0,
    'fbloginblockis_soc_link' => 0,
    'fbloginblockaccount_url' => 0,
    'base_dir_ssl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2ffa8f70f6_17781373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2ffa8f70f6_17781373')) {function content_5e4f2ffa8f70f6_17781373($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['fbloginblockislogged']->value!=0) {?>
<?php if ($_smarty_tpl->tpl_vars['fbloginblockis_soc_link']->value==1) {?>
<li>

	<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockaccount_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
	   title="<?php echo smartyTranslate(array('s'=>'Social account linking','mod'=>'fbloginblock'),$_smarty_tpl);?>
" rel="nofollow">
        <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/fbloginblock/views/img/link.png" alt="<?php echo smartyTranslate(array('s'=>'Social account linking','mod'=>'fbloginblock'),$_smarty_tpl);?>
" />
       	<?php echo smartyTranslate(array('s'=>'Social account linking','mod'=>'fbloginblock'),$_smarty_tpl);?>

	   	</a>
</li>
<?php }?>
<?php }?>

<?php }} ?>
