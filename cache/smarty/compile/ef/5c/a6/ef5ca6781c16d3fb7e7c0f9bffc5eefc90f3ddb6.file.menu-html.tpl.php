<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/ets_megamenu/views/templates/hook/menu-html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20366026875e4f1d2cca28e7-52318523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5ca6781c16d3fb7e7c0f9bffc5eefc90f3ddb6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/ets_megamenu/views/templates/hook/menu-html.tpl',
      1 => 1565132187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20366026875e4f1d2cca28e7-52318523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mm_config' => 0,
    'menus' => 0,
    'logged' => 0,
    'product_list_link' => 0,
    'link' => 0,
    'menu' => 0,
    'key' => 0,
    'tab' => 0,
    'column' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2cce4204_02567509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2cce4204_02567509')) {function content_5e4f1d2cce4204_02567509($_smarty_tpl) {?>

<ul class="mm_menus_ul <?php if (isset($_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SHOW_ICON_VERTICAL'])&&!$_smarty_tpl->tpl_vars['mm_config']->value['ETS_MM_SHOW_ICON_VERTICAL']) {?> hide_icon_vertical<?php }?>" >
    <?php if (isset($_smarty_tpl->tpl_vars['menus']->value)&&$_smarty_tpl->tpl_vars['menus']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?><div style="width: 100%;float:left;padding: 20px; margin: 20px 0;text-align: center" class="hidden-lg hidden-sm">

    <a class="log_button_mobile" href="javascript:void(0)" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Join us','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
" id="modal_trigger" onclick="showLoginPopup()"><span><?php echo smartyTranslate(array('s'=>'Join Us'),$_smarty_tpl);?>
</span></a>
    </div><?php }?>
     <div class="special_menu_mobile hidden-lg"> <a title="<?php echo smartyTranslate(array('s'=>'Add Product','mod'=>'marketplace'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>href="<?php if (isset($_smarty_tpl->tpl_vars['product_list_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_list_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','addproduct'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php } else { ?>onclick="showLoginPopup()" <?php }?>class="btn btn-default button button-small smaller rose_button">Sell</a>
   
   
   </div>

    <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
        <li  class="mm_menus_li<?php if ($_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']) {?> mm_menus_li_tab<?php }?><?php if ($_smarty_tpl->tpl_vars['menu']->value['custom_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['custom_class'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['menu']->value['sub_menu_type']) {?> mm_sub_align_<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['menu']->value['sub_menu_type']), ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?> mm_has_sub<?php }?><?php if ($_smarty_tpl->tpl_vars['menu']->value['display_tabs_in_full_width']&&$_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']) {?> display_tabs_in_full_width<?php }?>" <?php if ($_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']) {?>style="width: <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_item_width']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['menu_item_width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>230px<?php }?>"<?php }?>>
           <a <?php if (isset($_smarty_tpl->tpl_vars['menu']->value['menu_open_new_tab'])&&$_smarty_tpl->tpl_vars['menu']->value['menu_open_new_tab']==1) {?> target="_blank"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['menu_link'], ENT_QUOTES, 'UTF-8', true);?>
" style="<?php if ($_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']) {?><?php if (isset($_smarty_tpl->tpl_vars['menu']->value['menu_ver_text_color'])&&$_smarty_tpl->tpl_vars['menu']->value['menu_ver_text_color']) {?>color:<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_ver_text_color'];?>
;<?php }?><?php if (isset($_smarty_tpl->tpl_vars['menu']->value['menu_ver_background_color'])&&$_smarty_tpl->tpl_vars['menu']->value['menu_ver_background_color']) {?>background-color:<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu_ver_background_color'];?>
;<?php }?><?php }?><?php if (Configuration::get('ETS_MM_HEADING_FONT_SIZE')) {?>font-size:<?php echo intval(Configuration::get('ETS_MM_HEADING_FONT_SIZE'));?>
px;<?php }?>">
                <span class="mm_menu_content_title">
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_img_link']) {?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['menu_img_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="" alt="" width="20" />
                    <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['menu_icon']) {?>
                        <i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['menu_icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
                    <?php }?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?><span class="mm_arrow"></span><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_text']) {?><span class="mm_bubble_text" style="background: <?php if ($_smarty_tpl->tpl_vars['menu']->value['bubble_background_color']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['bubble_background_color'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>#FC4444<?php }?>; color: <?php if (htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'], ENT_QUOTES, 'UTF-8', true)) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value['bubble_text_color'];?>
<?php } else { ?>#ffffff<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['menu']->value['bubble_text'];?>
</span><?php }?>
                </span>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']) {?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['tabs']) {?>
                    <span class="arrow closed"></span>
                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']) {?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['tabs']) {?>
                    <ul class="mm_columns_ul mm_columns_ul_tab">
                        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
                            <li class="mm_tabs_li<?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?> open<?php }?><?php if ($_smarty_tpl->tpl_vars['tab']->value['columns']) {?> mm_tabs_has_content<?php }?><?php if (!$_smarty_tpl->tpl_vars['tab']->value['tab_sub_content_pos']) {?> mm_tab_content_hoz<?php }?>">
                                <div class="mm_tab_li_content closed" style="width: <?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['tab_item_width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>230px<?php }?>">
                                    <span class="mm_tab_name mm_tab_toggle<?php if ($_smarty_tpl->tpl_vars['tab']->value['columns']) {?> mm_tab_has_child<?php }?>">
                                        <span class="mm_tab_toggle_title">
                                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['url']) {?>
                                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_img_link']) {?>
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['tab_img_link'], ENT_QUOTES, 'UTF-8', true);?>
" title="" alt="" width="20" />
                                            <?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['tab_icon']) {?>
                                                <i class="fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['tab_icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
                                            <?php }?>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['bubble_text']) {?><span class="mm_bubble_text" style="background: <?php if ($_smarty_tpl->tpl_vars['tab']->value['bubble_background_color']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['bubble_background_color'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>#FC4444<?php }?>; color: <?php if (htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['bubble_text_color'], ENT_QUOTES, 'UTF-8', true)) {?><?php echo $_smarty_tpl->tpl_vars['tab']->value['bubble_text_color'];?>
<?php } else { ?>#ffffff<?php }?>;"><?php echo $_smarty_tpl->tpl_vars['tab']->value['bubble_text'];?>
</span><?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['tab']->value['url']) {?>
                                                </a>
                                            <?php }?>
                                        </span>
                                    </span>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['tab']->value['columns']) {?>
                                    <ul class="mm_columns_contents_ul" style="<?php if ($_smarty_tpl->tpl_vars['tab']->value['tab_sub_width']) {?>width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['tab_sub_width'], ENT_QUOTES, 'UTF-8', true);?>
;<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {?> width:calc(100% - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['tab_item_width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>230px<?php }?> + 2px);<?php }?> left: <?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['tab_item_width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>230px<?php }?>;right: <?php if ($_smarty_tpl->tpl_vars['menu']->value['tab_item_width']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['tab_item_width'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>230px<?php }?>;<?php if ($_smarty_tpl->tpl_vars['tab']->value['background_image']) {?> background-image:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['background_image'], ENT_QUOTES, 'UTF-8', true);?>
');background-position:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value['position_background'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                                        <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                                            <li class="mm_columns_li column_size_<?php echo intval($_smarty_tpl->tpl_vars['column']->value['column_size']);?>
 <?php if ($_smarty_tpl->tpl_vars['column']->value['is_breaker']) {?>mm_breaker<?php }?> <?php if ($_smarty_tpl->tpl_vars['column']->value['blocks']) {?>mm_has_sub<?php }?>">
                                                <?php if (isset($_smarty_tpl->tpl_vars['column']->value['blocks'])&&$_smarty_tpl->tpl_vars['column']->value['blocks']) {?>
                                                    <ul class="mm_blocks_ul">
                                                        <?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
                                                            <li data-id-block="<?php echo intval($_smarty_tpl->tpl_vars['block']->value['id_block']);?>
" class="mm_blocks_li">
                                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlock','block'=>$_smarty_tpl->tpl_vars['block']->value),$_smarty_tpl);?>

                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                <?php }?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                            </li>
                        <?php } ?> 
                    </ul>
                <?php }?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?><span class="arrow closed"></span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['columns']) {?>
                        <ul class="mm_columns_ul" style=" width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['sub_menu_max_width'], ENT_QUOTES, 'UTF-8', true);?>
;<?php if (Configuration::get('ETS_MM_TEXT_FONT_SIZE')) {?> font-size:<?php echo intval(Configuration::get('ETS_MM_TEXT_FONT_SIZE'));?>
px;<?php }?><?php if (!$_smarty_tpl->tpl_vars['menu']->value['enabled_vertical']&&$_smarty_tpl->tpl_vars['menu']->value['background_image']) {?> background-image:url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['background_image'], ENT_QUOTES, 'UTF-8', true);?>
');background-position:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['position_background'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                            <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                                <li class="mm_columns_li column_size_<?php echo intval($_smarty_tpl->tpl_vars['column']->value['column_size']);?>
 <?php if ($_smarty_tpl->tpl_vars['column']->value['is_breaker']) {?>mm_breaker<?php }?> <?php if ($_smarty_tpl->tpl_vars['column']->value['blocks']) {?>mm_has_sub<?php }?>">
                                    <?php if (isset($_smarty_tpl->tpl_vars['column']->value['blocks'])&&$_smarty_tpl->tpl_vars['column']->value['blocks']) {?>
                                        <ul class="mm_blocks_ul">
                                            <?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
                                                <li data-id-block="<?php echo intval($_smarty_tpl->tpl_vars['block']->value['id_block']);?>
" class="mm_blocks_li">
                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlock','block'=>$_smarty_tpl->tpl_vars['block']->value),$_smarty_tpl);?>

                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php }?>
                                </li>
                            <?php } ?>
                        </ul>
                <?php }?>
            <?php }?>     
        </li>
    <?php } ?>
    <?php }?>
</ul>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCustomMenu'),$_smarty_tpl);?>

<?php }} ?>
