<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:418640985e4f1d2c079ed7-70109386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f490ed35b40fee53dd385e4b4074914504579bc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advansedwishlist/views/templates/hook/header.tpl',
      1 => 1580936220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '418640985e4f1d2c079ed7-70109386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'logged' => 0,
    'single_mode' => 0,
    'static_token' => 0,
    'advansedwishlist_ajax_controller_url' => 0,
    'id_wishlist' => 0,
    'advansedwishlistis17' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c081431_21625630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c081431_21625630')) {function content_5e4f1d2c081431_21625630($_smarty_tpl) {?>
<script>
    var baseDir = '<?php echo addslashes($_smarty_tpl->tpl_vars['base_dir']->value);?>
';    
    var isLogged = '<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
';
    var single_mode = '<?php echo $_smarty_tpl->tpl_vars['single_mode']->value;?>
';
    var added_to_wishlist = '<?php echo smartyTranslate(array('s'=>'The product was successfully added to your wishlist.','mod'=>'advansedwishlist','js'=>1),$_smarty_tpl);?>
'
    var added_to_wishlist_btn = '<?php echo smartyTranslate(array('s'=>'Added to wishlist','mod'=>'advansedwishlist','js'=>1),$_smarty_tpl);?>
'
    var add_to_wishlist_btn = '<?php echo smartyTranslate(array('s'=>'Add to wishlist','mod'=>'advansedwishlist','js'=>1),$_smarty_tpl);?>
'
    var static_token = '<?php echo addslashes($_smarty_tpl->tpl_vars['static_token']->value);?>
';
    var advansedwishlist_ajax_controller_url = '<?php echo $_smarty_tpl->tpl_vars['advansedwishlist_ajax_controller_url']->value;?>
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
<?php }} ?>
