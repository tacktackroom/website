<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/row_li_p.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12308545025e4f1d2c9c4c78-35541360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f18aace53ae9bcd031df05af8ada08424c5ef9bb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/row_li_p.tpl',
      1 => 1525307879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12308545025e4f1d2c9c4c78-35541360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c9c9b42_56666891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c9c9b42_56666891')) {function content_5e4f1d2c9c9b42_56666891($_smarty_tpl) {?>          <div class="row-products" data-class="li_p">
              <div class="container">
                  <div class="row">
                      <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
                          <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
                              <ul id="home-page-tabs" class="nav nav-tabs clearfix">
                                  <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

                              </ul>
                          <?php }?>
                          <div class="tab-content"><ul class="homeproducts"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</ul></div>
                          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

                      <?php }?>
                  </div>
              </div>
          </div><?php }} ?>
