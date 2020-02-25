<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17483813215e4f1d2c64bdd8-46253160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1360e5ea96eff483943e1eaa4348a6232a70c103' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/blockwishlist_button.tpl',
      1 => 1580936218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17483813215e4f1d2c64bdd8-46253160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'wishlists' => 0,
    'show_btn_top' => 0,
    'ws_product' => 0,
    'issetProduct' => 0,
    'id_wishlist' => 0,
    'wl_custom_font' => 0,
    'advansedwishlistis17' => 0,
    'show_btn_text' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c666475_13961297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c666475_13961297')) {function content_5e4f1d2c666475_13961297($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>
    <div class="wishlist <?php if ($_smarty_tpl->tpl_vars['show_btn_top']->value) {?>wishlist_btn_top<?php }?>">
        <a data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product']);?>
" data-id-product-attribute="<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product_attribute']);?>
" class="open_wishlist_popup" href="#wishlist_popup_form"  title="<?php echo smartyTranslate(array('s'=>'Wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</a>
    </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['issetProduct']->value) {?>
        <div class="wishlist wrap_allert <?php if ($_smarty_tpl->tpl_vars['show_btn_top']->value) {?>wishlist_btn_top<?php }?>">
            <a href="#" data-checked="true" class="checked addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product']);?>
" rel="<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product']);?>
" onclick="WishlistCart('ws_wishlist_block_list', 'delete', '<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product']);?>
',<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product_attribute']);?>
, 1, <?php echo intval($_smarty_tpl->tpl_vars['id_wishlist']->value);?>
); return false;">
			<?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value==1||(!$_smarty_tpl->tpl_vars['wl_custom_font']->value&&$_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1)) {?>
			<i class="material-icons">favorite</i>
			<?php } elseif ($_smarty_tpl->tpl_vars['wl_custom_font']->value==3) {?>
			<span class="jms-heart-1"></span>
			<?php } else { ?>
			<i class="icon-heart"></i>
			<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['show_btn_text']->value) {?><?php echo smartyTranslate(array('s'=>'Added to Wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
<?php }?></a>
            <div class="allert_note"><span style="padding: 10px 0 0 0!important"><?php echo smartyTranslate(array('s'=>'Delete from wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</span></div>
        </div>
        <?php } else { ?>
        <div class="wishlist <?php if ($_smarty_tpl->tpl_vars['show_btn_top']->value) {?>wishlist_btn_top<?php }?>">
               <a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product']);?>
" onclick="WishlistCart('ws_wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product']);?>
',<?php echo intval($_smarty_tpl->tpl_vars['ws_product']->value['id_product_attribute']);?>
, 1, <?php echo intval($_smarty_tpl->tpl_vars['id_wishlist']->value);?>
); return false;">
			<?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value==1||(!$_smarty_tpl->tpl_vars['wl_custom_font']->value&&$_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1)) {?>
			<i class="material-icons">favorite</i>
			<?php } elseif ($_smarty_tpl->tpl_vars['wl_custom_font']->value==3) {?>
			<span class="jms-heart-1"></span>
			<?php } else { ?>
			<i class="icon-heart"></i>
			<?php }?>
               <?php if ($_smarty_tpl->tpl_vars['show_btn_text']->value) {?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
<?php }?>
               </a>
        </div>
        <?php }?>
    <?php }?>
<?php } else { ?>
<div class="wrap_allert wishlist <?php if ($_smarty_tpl->tpl_vars['show_btn_top']->value) {?>wishlist_btn_top<?php }?>">
<a href="#" id="wishlist_button" onclick="showLoginPopup()">
<?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value==1||(!$_smarty_tpl->tpl_vars['wl_custom_font']->value&&$_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1)) {?>
<i class="material-icons">favorite</i>
<?php } elseif ($_smarty_tpl->tpl_vars['wl_custom_font']->value==3) {?>
<span class="jms-heart-1"></span>
<?php } else { ?>
<i class="icon-heart"></i>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_btn_text']->value) {?><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
<?php }?></a>

    <div class="allert_note effect7"><span style="padding: 10px 0 0 0!important"><?php echo smartyTranslate(array('s'=>'You must be logged','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</span>
    <p class="login_links">
    <a class="inline" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['login_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</a> | <a class="inline" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['login_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Register','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</a>
    
    </div>

    </div>
<?php }?><?php }} ?>
