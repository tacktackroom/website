<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/ets_megamenu/views/templates/hook/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9596045295e4f1d2cd8f5b9-68259448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb0f2005edbdf77f466b8b010a9a34db246b7f73' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/ets_megamenu/views/templates/hook/megamenu.tpl',
      1 => 1557796896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9596045295e4f1d2cd8f5b9-68259448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menusHTML' => 0,
    'mm_config' => 0,
    'mm_layout_direction' => 0,
    'mm_multiLayout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2cda23b4_38125135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2cda23b4_38125135')) {function content_5e4f1d2cda23b4_38125135($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['menusHTML']->value) {?>
    <div class="ets_mm_megamenu 
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_LAYOUT'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_LAYOUT']) {?>layout_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_LAYOUT'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SHOW_ICON_VERTICAL'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SHOW_ICON_VERTICAL']) {?> show_icon_in_mobile<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SKIN'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SKIN']) {?>skin_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SKIN'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>  
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_TRANSITION_EFFECT'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_TRANSITION_EFFECT']) {?>transition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_TRANSITION_EFFECT'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>   
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MOBILE_MM_TYPE'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MOBILE_MM_TYPE']) {?>transition_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MOBILE_MM_TYPE'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_CUSTOM_CLASS'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_CUSTOM_CLASS']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_CUSTOM_CLASS'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_STICKY_ENABLED'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_STICKY_ENABLED']) {?>sticky_enabled<?php } else { ?>sticky_disabled<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_ACTIVE_ENABLED'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_ACTIVE_ENABLED']) {?>enable_active_menu<?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['mm_layout_direction']->value)&&$_smarty_tpl->tpl_vars['mm_layout_direction']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm_layout_direction']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>ets-dir-ltr<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_HOOK_TO'])&&$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_HOOK_TO']=='customhook') {?>hook-custom<?php } else { ?>hook-default<?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['mm_multiLayout']->value)&&$_smarty_tpl->tpl_vars['mm_multiLayout']->value) {?>multi_layout<?php } else { ?>single_layout<?php }?>
        ">
        <div class="ets_mm_megamenu_content">
            <div class="container">
                <div class="ets_mm_megamenu_content_content">
                    <div class="ybc-menu-toggle ybc-menu-btn closed" onClick="fixed_background_menu()">
                        <span class="ybc-menu-button-toggle_icon">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </span>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['menusHTML']->value;?>

                </div>
            </div>
        </div>
    </div>
<?php }?><?php }} ?>
