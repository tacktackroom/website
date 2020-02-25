<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/ets_megamenu/views/templates/hook/custom_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17645620355e4f2683f1d029-97248844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bee08180f0c6e00373c3eb24787968e2e930241' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/ets_megamenu/views/templates/hook/custom_menu.tpl',
      1 => 1528421253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17645620355e4f2683f1d029-97248844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ETS_MM_DISPLAY_SHOPPING_CART' => 0,
    'ETS_MM_DISPLAY_SEARCH' => 0,
    'ETS_MM_DISPLAY_CUSTOMER_INFO' => 0,
    'ETS_MM_CUSTOM_HTML_TEXT' => 0,
    'ETS_MM_SEARCH_DISPLAY_DEFAULT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683f23f67_37031268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683f23f67_37031268')) {function content_5e4f2683f23f67_37031268($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['ETS_MM_DISPLAY_SHOPPING_CART']->value||$_smarty_tpl->tpl_vars['ETS_MM_DISPLAY_SEARCH']->value||$_smarty_tpl->tpl_vars['ETS_MM_DISPLAY_CUSTOMER_INFO']->value||$_smarty_tpl->tpl_vars['ETS_MM_CUSTOM_HTML_TEXT']->value) {?>
    <div class="mm_extra_item<?php if ($_smarty_tpl->tpl_vars['ETS_MM_SEARCH_DISPLAY_DEFAULT']->value) {?> mm_display_search_default<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['ETS_MM_CUSTOM_HTML_TEXT']->value) {?>
            <div class="mm_custom_text">
                <?php echo $_smarty_tpl->tpl_vars['ETS_MM_CUSTOM_HTML_TEXT']->value;?>

            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['ETS_MM_DISPLAY_SEARCH']->value) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySearch'),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['ETS_MM_DISPLAY_CUSTOMER_INFO']->value) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCustomerInforTop'),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['ETS_MM_DISPLAY_SHOPPING_CART']->value) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCartTop'),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }?><?php }} ?>
