<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/ets_megamenu/views/templates/hook/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17390195195e4f2683e9aa55-49518017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa35533bb300b8f6c83a7210d97864ecd10ed918' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/ets_megamenu/views/templates/hook/block.tpl',
      1 => 1528421253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17390195195e4f2683e9aa55-49518017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'manufacturer' => 0,
    'supplier' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683ec8a94_09231344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683ec8a94_09231344')) {function content_5e4f2683ec8a94_09231344($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['block']->value)&&$_smarty_tpl->tpl_vars['block']->value&&$_smarty_tpl->tpl_vars['block']->value['enabled']) {?>    
    <div class="ets_mm_block mm_block_type_<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['block']->value['block_type']), ENT_QUOTES, 'UTF-8', true);?>
 <?php if (!$_smarty_tpl->tpl_vars['block']->value['display_title']) {?>mm_hide_title<?php }?>">
        <h4 <?php if (Configuration::get('ETS_MM_TEXTTITLE_FONT_SIZE')) {?> style="font-size:<?php echo intval(Configuration::get('ETS_MM_TEXTTITLE_FONT_SIZE'));?>
px"<?php }?>><?php if ($_smarty_tpl->tpl_vars['block']->value['title_link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title_link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (Configuration::get('ETS_MM_TEXTTITLE_FONT_SIZE')) {?> style="font-size:<?php echo intval(Configuration::get('ETS_MM_TEXTTITLE_FONT_SIZE'));?>
px"<?php }?>><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['title_link']) {?></a><?php }?></h4>
        <div class="ets_mm_block_content">        
            <?php if ($_smarty_tpl->tpl_vars['block']->value['block_type']=='CATEGORY') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['block']->value['categoriesHtml'])) {?><?php echo $_smarty_tpl->tpl_vars['block']->value['categoriesHtml'];?>
<?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type']=='MNFT') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['block']->value['manufacturers'])&&$_smarty_tpl->tpl_vars['block']->value['manufacturers']) {?>
                    <ul <?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_mnu_img'])&&$_smarty_tpl->tpl_vars['block']->value['display_mnu_img']) {?>class="mm_mnu_display_img"<?php }?>>
                        <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['manufacturers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
                            <li class="<?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_mnu_img'])&&$_smarty_tpl->tpl_vars['block']->value['display_mnu_img']) {?>item_has_img <?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_mnu_inline'])&&$_smarty_tpl->tpl_vars['block']->value['display_mnu_inline']) {?>item_inline_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['display_mnu_inline'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_mnu_img'])&&$_smarty_tpl->tpl_vars['block']->value['display_mnu_img']) {?>
                                        <span class="ets_item_img">
                                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_mnu_name'])&&$_smarty_tpl->tpl_vars['block']->value['display_mnu_name']) {?>
                                            <span class="ets_item_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['label'], ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type']=='MNSP') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['block']->value['suppliers'])&&$_smarty_tpl->tpl_vars['block']->value['suppliers']) {?>
                    <ul <?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_suppliers_img'])&&$_smarty_tpl->tpl_vars['block']->value['display_suppliers_img']) {?>class="mm_mnu_display_img"<?php }?>>
                        <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['suppliers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
                            <li class="<?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_suppliers_img'])&&$_smarty_tpl->tpl_vars['block']->value['display_suppliers_img']) {?><?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_suppliers_inline'])&&$_smarty_tpl->tpl_vars['block']->value['display_suppliers_inline']) {?>item_inline_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['display_suppliers_inline'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?> item_has_img<?php }?>">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_suppliers_img'])&&$_smarty_tpl->tpl_vars['block']->value['display_suppliers_img']) {?>
                                        <span class="ets_item_img">
                                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                        </span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['block']->value['display_suppliers_name'])&&$_smarty_tpl->tpl_vars['block']->value['display_suppliers_name']) {?>
                                            <span class="ets_item_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php }?>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['label'], ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type']=='CMS') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['block']->value['cmss'])&&$_smarty_tpl->tpl_vars['block']->value['cmss']) {?>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['cms'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['cmss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms']->key => $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->_loop = true;
?>
                            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                        <?php } ?>
                    </ul>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type']=='IMAGE') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['block']->value['image'])&&$_smarty_tpl->tpl_vars['block']->value['image']) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['image_link']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['image_link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
                    <span class="mm_img_content">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" />
                    </span>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['image_link']) {?></a><?php }?><?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['block_type']=='PRODUCT') {?>
                <?php if (isset($_smarty_tpl->tpl_vars['block']->value['productsHtml'])) {?><?php echo $_smarty_tpl->tpl_vars['block']->value['productsHtml'];?>
<?php }?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>

            <?php }?>
        </div>
    </div>
    <div class="clearfix"></div>
<?php }?><?php }} ?>
