<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/creativeelements/views/templates/hook/backoffice_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14381198795e4f2f1c406cd6-43922657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36501ca7bd080a7907de0c01784bd1affb3aef7c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/creativeelements/views/templates/hook/backoffice_header.tpl',
      1 => 1581027413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14381198795e4f2f1c406cd6-43922657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit_width_ce' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f1c4b6db6_18619733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f1c4b6db6_18619733')) {function content_5e4f2f1c4b6db6_18619733($_smarty_tpl) {?>

<style>.icon-AdminParentCreativeElements:before { content: ""; }</style>
<?php if (!empty($_smarty_tpl->tpl_vars['edit_width_ce']->value)) {?>
<script type="text/html" id="tmpl-btn-back-to-ps">
	<a href="<?php echo $_smarty_tpl->tpl_vars['edit_width_ce']->value;?>
&amp;action=backToPsEditor" class="btn btn-default btn-back-to-ps"><i class="material-icons">navigate_before</i> <?php echo smartyTranslate(array('s'=>'Back to PrestaShop Editor','mod'=>'creativeelements'),$_smarty_tpl);?>
</a>
</script>
<script type="text/html" id="tmpl-btn-edit-with-ce">
	<a href="<?php echo $_smarty_tpl->tpl_vars['edit_width_ce']->value;?>
" class="btn pointer btn-edit-with-ce"><i class="material-icons">explicit</i> <?php echo smartyTranslate(array('s'=>'Edit with Creative Elements','mod'=>'creativeelements'),$_smarty_tpl);?>
</a>
</script>
<?php }?>
<?php }} ?>
