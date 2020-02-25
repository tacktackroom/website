<?php /* Smarty version Smarty-3.1.19, created on 2020-02-24 18:28:15
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/creativeelements/views/templates/hook/backoffice_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13904212945e4f1d1c0d7066-70094709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc7247afcf91fac660cb37fbeaef7c383d3a940' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/creativeelements/views/templates/hook/backoffice_header.tpl',
      1 => 1582597483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13904212945e4f1d1c0d7066-70094709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d1c0f5d21_32286090',
  'variables' => 
  array (
    'edit_width_ce' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d1c0f5d21_32286090')) {function content_5e4f1d1c0f5d21_32286090($_smarty_tpl) {?>

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
