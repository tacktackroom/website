<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/mpfavouriteseller/views/templates/hook/addtofavouritelink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2700345865e4f1d9387a310-81135673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5852fb71744ef5c1080b830426f317e53ace7e2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/mpfavouriteseller/views/templates/hook/addtofavouritelink.tpl',
      1 => 1550674195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2700345865e4f1d9387a310-81135673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'favourite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d9387fe59_98560540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d9387fe59_98560540')) {function content_5e4f1d9387fe59_98560540($_smarty_tpl) {?>
<div class="wk-fav-btn">
	<?php if (isset($_smarty_tpl->tpl_vars['favourite']->value)) {?>
		<a href="" id="wk_removefromfav" id_fav_seller="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['favourite']->value['id_favourite_seller'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Remove from favourite','mod'=>'mpfavouriteseller'),$_smarty_tpl);?>
" class="wk_anchor_links">
			<span class="wk-heart-enable" style="padding-left:20px;"></span>
			<span id="wk_removetext"><?php echo smartyTranslate(array('s'=>'Remove from favourite','mod'=>'mpfavouriteseller'),$_smarty_tpl);?>
</span>
		</a>
	<?php } else { ?>
		<a href="" id="wk_addtofav" title="<?php echo smartyTranslate(array('s'=>'Add to favourite','mod'=>'mpfavouriteseller'),$_smarty_tpl);?>
" class="wk_anchor_links">
			<span class="wk-heart-disable" style="padding-left:20px;"></span>
			<span id="wk_addtext"><?php echo smartyTranslate(array('s'=>'Add to favourite','mod'=>'mpfavouriteseller'),$_smarty_tpl);?>
</span>
		</a>
	<?php }?>
</div><?php }} ?>
