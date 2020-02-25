<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:11
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17873099305e4f1d8bdead99-34605093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3779b2fea39ed58184edb5c1a126aa6d6e13d06' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/blockwishlist-extra.tpl',
      1 => 1580936220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17873099305e4f1d8bdead99-34605093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'single_mode' => 0,
    'advansedwishlist_ajax_controller_url' => 0,
    'id_wishlist' => 0,
    'advansedwishlistis17' => 0,
    'logged' => 0,
    'issetProduct' => 0,
    'wishlists' => 0,
    'wishlist' => 0,
    'id_product' => 0,
    'wl_custom_font' => 0,
    'id_product_attribute' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d8be0e2c7_40748453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d8be0e2c7_40748453')) {function content_5e4f1d8be0e2c7_40748453($_smarty_tpl) {?>
<script>
var single_mode = '<?php echo $_smarty_tpl->tpl_vars['single_mode']->value;?>
';
var advansedwishlist_ajax_controller_url = '<?php echo $_smarty_tpl->tpl_vars['advansedwishlist_ajax_controller_url']->value;?>
';
var added_to_wishlist = '<?php echo smartyTranslate(array('s'=>'The product was successfully added to your wishlist.','mod'=>'advansedwishlist','js'=>1),$_smarty_tpl);?>
'
var added_to_wishlist_btn = '<?php echo smartyTranslate(array('s'=>'Added to wishlist','mod'=>'advansedwishlist','js'=>1),$_smarty_tpl);?>
';
var add_to_wishlist_btn = '<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'advansedwishlist','js'=>1),$_smarty_tpl);?>
';
var idDefaultWishlist = '<?php echo $_smarty_tpl->tpl_vars['id_wishlist']->value;?>
';
<?php if ($_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1) {?>
var wishlist_btn_icon = '<i class="material-icons">favorite</i>';
var ps_ws_version = 'advansedwishlistis17';
<?php } else { ?>
var wishlist_btn_icon = '<i class="icon icon-heart"></i>';
var ps_ws_version = 'advansedwishlistis16';
<?php }?>
</script>

<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <div id="wishlist_button_block" class="buttons_bottom_block <?php if ($_smarty_tpl->tpl_vars['issetProduct']->value) {?>wrap_allert<?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['wishlists']->value)&&count($_smarty_tpl->tpl_vars['wishlists']->value)>1) {?>

		<select id="idWishlist">
			<?php  $_smarty_tpl->tpl_vars['wishlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wishlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wishlists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->key => $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->_loop = true;
?>
				<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
			<?php } ?>
		</select>
		<button class="btn btn-primary" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), 1, $('#idWishlist').val()); return false;"  title="<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
">
<?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value==1||(!$_smarty_tpl->tpl_vars['wl_custom_font']->value&&$_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1)) {?>
<i class="material-icons">favorite</i>
<?php } elseif ($_smarty_tpl->tpl_vars['wl_custom_font']->value==3) {?>
<span class="jms-heart-1"></span>
<?php } else { ?>
<i class="icon-heart"></i>
<?php }?>
        <?php echo smartyTranslate(array('s'=>'Add','mod'=>'advansedwishlist'),$_smarty_tpl);?>

		</button>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['advansedwishlistis17']->value) {?>
        <input type="hidden" name="id_product_attribute" id="idCombination" value="<?php echo intval($_smarty_tpl->tpl_vars['id_product_attribute']->value);?>
">
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['issetProduct']->value) {?>
            <a href="#" id="wishlist_button" class="checked" onclick="WishlistCart('wishlist_block_list', 'delete', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), 1, <?php echo intval($_smarty_tpl->tpl_vars['id_wishlist']->value);?>
); return false;">
<?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value==1||(!$_smarty_tpl->tpl_vars['wl_custom_font']->value&&$_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1)) {?>
<i class="material-icons">favorite</i>
<?php } elseif ($_smarty_tpl->tpl_vars['wl_custom_font']->value==3) {?>
<span class="jms-heart-1"></span>
<?php } else { ?>
<i class="icon-heart"></i>
<?php }?>
            <?php echo smartyTranslate(array('s'=>'Added to wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</a>
            <div class="allert_note"><?php echo smartyTranslate(array('s'=>'Delete from wishlist','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</div>
        <?php } else { ?>

 	      <a id="wishlist_button" class='wish' href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), 1, <?php echo intval($_smarty_tpl->tpl_vars['id_wishlist']->value);?>
); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my favourite','mod'=>'advansedwishlist'),$_smarty_tpl);?>
">
<?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value==1||(!$_smarty_tpl->tpl_vars['wl_custom_font']->value&&$_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1)) {?>
<i class="material-icons">favorite</i>
<?php } elseif ($_smarty_tpl->tpl_vars['wl_custom_font']->value==3) {?>
<span class="jms-heart-1"></span>
<?php } else { ?>
<i class="icon-heart"></i>
<?php }?>
        <?php echo smartyTranslate(array('s'=>'Add to my favourite','mod'=>'advansedwishlist'),$_smarty_tpl);?>

	    </a>
        <?php }?>

    <?php }?>
        </div>
<?php } else { ?>
<div class="wrap_allert">
<p class="buttons_bottom_block"><a href="#" id="wishlist_button" class='wish' onclick="showLoginPopup()">
<?php if ($_smarty_tpl->tpl_vars['wl_custom_font']->value==1||(!$_smarty_tpl->tpl_vars['wl_custom_font']->value&&$_smarty_tpl->tpl_vars['advansedwishlistis17']->value==1)) {?>
<i class="material-icons">favorite</i>
<?php } elseif ($_smarty_tpl->tpl_vars['wl_custom_font']->value==3) {?>
<span class="jms-heart-1"></span>
<?php } else { ?>
<i class="icon-heart"></i>
<?php }?>
<?php echo smartyTranslate(array('s'=>'Add to my favourite','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</a></p>

    <div class="allert_note effect7"><?php echo smartyTranslate(array('s'=>'You must be logged','mod'=>'advansedwishlist'),$_smarty_tpl);?>

    <p class="login_links">
    <a class="inline" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</a> | <a class="inline" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Register','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</a>
    </p>
    </div>

    </div>
<?php }?>
<?php }} ?>
