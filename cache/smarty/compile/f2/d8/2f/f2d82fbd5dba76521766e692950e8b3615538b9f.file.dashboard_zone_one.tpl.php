<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/fbloginblock/views/templates/hooks/dashboard_zone_one.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13691965665e4f2f1cdc57b6-30615085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2d82fbd5dba76521766e692950e8b3615538b9f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/fbloginblock/views/templates/hooks/dashboard_zone_one.tpl',
      1 => 1536164896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13691965665e4f2f1cdc57b6-30615085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fbloginblockcall_dash' => 0,
    'fbloginblockdata_dash' => 0,
    'text_type' => 0,
    'count_types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f1cdcdd88_03711205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f1cdcdd88_03711205')) {function content_5e4f2f1cdcdd88_03711205($_smarty_tpl) {?>

<section class="panel widget allow_push">

<section id="social_login_customer_stat">
    <header>
        <i class="icon-AdminParentCustomer"></i> <?php echo smartyTranslate(array('s'=>'Social Login Statistics','mod'=>'fbloginblock'),$_smarty_tpl);?>

    </header>

    <div id="dash_recent_orders" class="tab-content panel">
        <h3><?php echo smartyTranslate(array('s'=>'Total registrations','mod'=>'fbloginblock'),$_smarty_tpl);?>
 - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockcall_dash']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>

        <div class="table-responsive">
            <table class="table data_table">
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars['count_types'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['count_types']->_loop = false;
 $_smarty_tpl->tpl_vars['text_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fbloginblockdata_dash']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['count_types']->key => $_smarty_tpl->tpl_vars['count_types']->value) {
$_smarty_tpl->tpl_vars['count_types']->_loop = true;
 $_smarty_tpl->tpl_vars['text_type']->value = $_smarty_tpl->tpl_vars['count_types']->key;
?>
                    <tr>
                        <td class="text-left">
                            <img title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
                                 src="../modules/fbloginblock/views/img/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-small.png">
                        </td>
                        <td id="total_products" class="text-center"><?php if ($_smarty_tpl->tpl_vars['count_types']->value>0) {?><b><?php }?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['count_types']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['count_types']->value>0) {?></b><?php }?></td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</section>

</section><?php }} ?>
