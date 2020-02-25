<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/blockwishlist_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16624262545e4f1d2c970892-52851229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15a38851909d9268518d45ebc10b62a3f5614e58' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/blockwishlist_footer.tpl',
      1 => 1580936218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16624262545e4f1d2c970892-52851229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlists' => 0,
    'wishlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c9772f0_95932620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c9772f0_95932620')) {function content_5e4f1d2c9772f0_95932620($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
<div class="hidden wishlist_popup">
<div id="wishlist_popup_form">
<form name="wlform" id="wlform" action="">
<h2><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</h2>
<div class="text"><?php echo smartyTranslate(array('s'=>'Select your Wish List below.','mod'=>'advansedwishlist'),$_smarty_tpl);?>


 <?php echo smartyTranslate(array('s'=>'Manage your list title and more from \'My Account\'.','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</div>
<input type="hidden" name="wish_p" id="wish_p" value="0">
<input type="hidden" name="wish_pat" id="wish_pat" value="0">
    <div class="wishlist">
    <select id="wishlist_select_popup">
    <?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
"><?php echo $_smarty_tpl->tpl_vars['wishlist']->value['name'];?>
</option>
    <?php } ?>
    </select>
    <button class="popup_button_wishlist"><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</button>
    </div>
</form>
</div>
</div>
<?php }?><?php }} ?>
