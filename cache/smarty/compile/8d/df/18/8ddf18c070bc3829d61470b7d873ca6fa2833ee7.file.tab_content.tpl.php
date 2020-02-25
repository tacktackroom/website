<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:32
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/usps_tracking/views/templates/hook/tab_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15881581055e4f2f342dac35-13022972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ddf18c070bc3829d61470b7d873ca6fa2833ee7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/usps_tracking/views/templates/hook/tab_content.tpl',
      1 => 1567551862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15881581055e4f2f342dac35-13022972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f342e30d5_21326449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f342e30d5_21326449')) {function content_5e4f2f342e30d5_21326449($_smarty_tpl) {?><div class="tab-pane" id="uspstracking">
	<div class="col-lg-6">
		<?php if ($_smarty_tpl->tpl_vars['status']->value->code=='FORBIDDEN') {?>
			<p><?php echo smartyTranslate(array('s'=>'Wrong API key','mod'=>'usps_tracking'),$_smarty_tpl);?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['status']->value->code=='RESOURCE_NOT_FOUND') {?>
			<p><?php echo smartyTranslate(array('s'=>'Wrong or expired tracking code','mod'=>'usps_tracking'),$_smarty_tpl);?>
</p>
		<?php } else { ?>
			<img src="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['module_dir']->value);?>
views/img/icon-status.png" />
			<p class="uspstracking-code">n&#176; <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['status']->value->code, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			<p class="uspstracking-date"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['status']->value->date, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			<p class="uspstracking-status"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['status']->value->message, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			<a class="uspstracking-link" target="_blank" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['status']->value->link, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">> <?php echo smartyTranslate(array('s'=>'Details','mod'=>'usps_tracking'),$_smarty_tpl);?>
</a>
		<?php }?>
	</div>
	<div class="clearfix"></div>
</div>
<?php }} ?>
