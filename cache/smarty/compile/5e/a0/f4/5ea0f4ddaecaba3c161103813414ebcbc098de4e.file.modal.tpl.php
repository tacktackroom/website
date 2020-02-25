<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:20
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/admin83/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16383092245e4f1d1c5e7214-98846131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea0f4ddaecaba3c161103813414ebcbc098de4e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/admin83/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1530853575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16383092245e4f1d1c5e7214-98846131',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d1c5e95e7_17362215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d1c5e95e7_17362215')) {function content_5e4f1d1c5e95e7_17362215($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
