<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/row_li_p.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6093673775e4f2683b81483-88785152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b7f2d198b250a3013a3a5c1794f9a528039abe' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/row_li_p.tpl',
      1 => 1525307879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6093673775e4f2683b81483-88785152',
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
  'unifunc' => 'content_5e4f2683b86d18_56795870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683b86d18_56795870')) {function content_5e4f2683b86d18_56795870($_smarty_tpl) {?>          <div class="row-products" data-class="li_p">
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
