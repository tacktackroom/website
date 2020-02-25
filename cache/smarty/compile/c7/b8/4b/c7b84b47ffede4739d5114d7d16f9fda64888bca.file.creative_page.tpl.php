<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/creativeelements/views/templates/hook/creative_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12471081005e4f268328ac78-24756658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b84b47ffede4739d5114d7d16f9fda64888bca' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/creativeelements/views/templates/hook/creative_page.tpl',
      1 => 1581027413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12471081005e4f268328ac78-24756658',
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
  'unifunc' => 'content_5e4f2683295113_40888015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683295113_40888015')) {function content_5e4f2683295113_40888015($_smarty_tpl) {?>

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
