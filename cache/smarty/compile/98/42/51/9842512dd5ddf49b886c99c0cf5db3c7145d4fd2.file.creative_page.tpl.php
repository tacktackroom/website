<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/creativeelements/views/templates/hook/creative_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10007944415e4f1d2c0e5273-45285946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9842512dd5ddf49b886c99c0cf5db3c7145d4fd2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/creativeelements/views/templates/hook/creative_page.tpl',
      1 => 1581027413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10007944415e4f1d2c0e5273-45285946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'creative_elements' => 0,
    'creativepage_id' => 0,
    'ver' => 0,
    'creativepage_data' => 0,
    'section_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c0ef754_46131357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c0ef754_46131357')) {function content_5e4f1d2c0ef754_46131357($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['ver'] = new Smarty_variable($_smarty_tpl->tpl_vars['creative_elements']->value->getVersion(), null, 0);?>
<div class="elementor elementor-<?php echo intval($_smarty_tpl->tpl_vars['creativepage_id']->value);?>
" data-version="<?php echo $_smarty_tpl->tpl_vars['ver']->value;?>
">
	<div id="elementor-inner">
		<div id="elementor-section-wrap">
		<?php  $_smarty_tpl->tpl_vars['section_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['creativepage_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section_data']->key => $_smarty_tpl->tpl_vars['section_data']->value) {
$_smarty_tpl->tpl_vars['section_data']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate ('hook/element_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('this'=>CreativeElements::factory('ElementSection',$_smarty_tpl->tpl_vars['section_data']->value)), 0);?>

		<?php } ?>
		</div>
	</div>
</div>
<?php }} ?>
