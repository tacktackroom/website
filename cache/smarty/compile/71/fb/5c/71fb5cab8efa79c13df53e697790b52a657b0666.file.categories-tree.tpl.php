<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/ets_megamenu/views/templates/hook/categories-tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4655305005e4f2683ed57d0-72931019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71fb5cab8efa79c13df53e697790b52a657b0666' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/ets_megamenu/views/templates/hook/categories-tree.tpl',
      1 => 1528421253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4655305005e4f2683ed57d0-72931019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683ede057_13805758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683ede057_13805758')) {function content_5e4f2683ede057_13805758($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value) {?>
    <ul class="ets_mm_categories">
        <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
            <li <?php if (isset($_smarty_tpl->tpl_vars['category']->value['sub'])&&$_smarty_tpl->tpl_vars['category']->value['sub']) {?>class="has-sub"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(intval($_smarty_tpl->tpl_vars['category']->value['id_category']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                <?php if (isset($_smarty_tpl->tpl_vars['category']->value['sub'])&&$_smarty_tpl->tpl_vars['category']->value['sub']) {?><?php echo $_smarty_tpl->tpl_vars['category']->value['sub'];?>
<?php }?>
            </li>
        <?php } ?>
    </ul>
<?php }?><?php }} ?>
