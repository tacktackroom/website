<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/popuppro/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4878239495e4f1d2bd4d6d5-10955351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '028b414cf0694cb2f265f2919463bd8d797be615' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/popuppro/header.tpl',
      1 => 1537473975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4878239495e4f1d2bd4d6d5-10955351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'popup_blocks' => 0,
    'block' => 0,
    'page_name' => 0,
    'is_https' => 0,
    'logged' => 0,
    'popupModule' => 0,
    'customer_group' => 0,
    'associated_category' => 0,
    'customer_popup' => 0,
    'category' => 0,
    'associated' => 0,
    'id_manufacturer' => 0,
    'cart_value' => 0,
    'hideblock' => 0,
    'hide_by_lang' => 0,
    'hide_by_referer' => 0,
    'hideblock_minval' => 0,
    'hideblock_maxval' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2bdc4f90_27111863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2bdc4f90_27111863')) {function content_5e4f1d2bdc4f90_27111863($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/modifier.date_format.php';
?><style>
    
    @media only screen and (min-width: <?php echo Configuration::get('ppro_m_min');?>
px) and (max-width: <?php echo Configuration::get('ppro_m_max');?>
px) {
        #popuppro {
            display: none;
        }

        #popuppro_tablet {
            display: none;
        }

        #popuppro_mobile {
            display: block !important;
        }
    }

    @media only screen and (min-width: <?php echo Configuration::get('ppro_t_min');?>
px) and (max-width: <?php echo Configuration::get('ppro_t_max');?>
px) {
        #popuppro {
            display: none;
        }

        #popuppro_tablet {
            display: block !important;
        }

        #popuppro_mobile {
            display: none;
        }
    }

    @media (min-width: <?php echo Configuration::get('ppro_d_min');?>
px) {
        #popuppro {
            display: block !important;
        }

        #popuppro_tablet {
            display: none;
        }

        #popuppro_mobile {
            display: none;
        }
    }

    
</style>

<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popup_blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(0, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['homeonly'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['homeonly']==1) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['date'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['date']==1) {?>
            <?php if (smarty_modifier_date_format(time(),"%Y/%m/%d")<=$_smarty_tpl->tpl_vars['block']->value['datefrom']) {?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
            <?php if (smarty_modifier_date_format(time(),"%Y/%m/%d")>=$_smarty_tpl->tpl_vars['block']->value['dateto']) {?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['daytype']!=99) {?>
        <?php if (smarty_modifier_date_format(time(),"%w")!=$_smarty_tpl->tpl_vars['block']->value['daytype']) {?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['time'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['time']==1) {?>
            <?php if (smarty_modifier_date_format(time(),"%H:%M:%S")<=$_smarty_tpl->tpl_vars['block']->value['timefrom']) {?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
            <?php if (smarty_modifier_date_format(time(),"%H:%M:%S")>=$_smarty_tpl->tpl_vars['block']->value['timeto']) {?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
        <?php }?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['bssl'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['bssl']==1) {?><?php if ($_smarty_tpl->tpl_vars['is_https']->value!=1) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['logged'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['logged']==1) {?><?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['logged'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['logged']==2) {?><?php if ($_smarty_tpl->tpl_vars['logged']->value) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['cgroup'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['cgroup']!=0) {?>
            <?php $_smarty_tpl->tpl_vars['associated_category'] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['access'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['access']->_loop = false;
 $_smarty_tpl->tpl_vars['customer_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['popupModule']->value->getCustomerGroups(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['access']->key => $_smarty_tpl->tpl_vars['access']->value) {
$_smarty_tpl->tpl_vars['access']->_loop = true;
 $_smarty_tpl->tpl_vars['customer_group']->value = $_smarty_tpl->tpl_vars['access']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['customer_group']->value==$_smarty_tpl->tpl_vars['block']->value['cgroup']) {?>
                    <?php $_smarty_tpl->tpl_vars['associated_category'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['associated_category']->value==0) {?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
        <?php }?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['no_orders'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['no_orders']==1) {?>
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <?php if (count(Order::getCustomerOrders($_smarty_tpl->tpl_vars['customer_popup']->value->id_customer))>0) {?>
                    <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
        <?php }?>
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['productsonly'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['productsonly']==1) {?><?php if (isset($_GET['id_product'])&&$_smarty_tpl->tpl_vars['page_name']->value=='product') {?><?php if (!in_array($_GET['id_product'],$_smarty_tpl->tpl_vars['block']->value['selectedproducts'])) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['catsonly'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['catsonly']==1) {?><?php if (isset($_GET['id_category'])&&$_smarty_tpl->tpl_vars['page_name']->value=='category') {?><?php if (!in_array($_GET['id_category'],$_smarty_tpl->tpl_vars['block']->value['selected_cats'])) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['cmsonly'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['cmsonly']==1) {?><?php if (isset($_GET['id_cms'])&&$_smarty_tpl->tpl_vars['page_name']->value=='cms') {?><?php if (!in_array($_GET['id_cms'],$_smarty_tpl->tpl_vars['block']->value['selectedcms'])) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['manufsonly'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['manufsonly']==1) {?><?php if (isset($_GET['id_manufacturer'])&&$_smarty_tpl->tpl_vars['page_name']->value=='manufacturer') {?><?php if (!in_array($_GET['id_manufacturer'],$_smarty_tpl->tpl_vars['block']->value['selected_manufs'])) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['urlonly'])) {?><?php if ($_smarty_tpl->tpl_vars['block']->value['urlonly']==1) {?><?php if (popuppro::currentPageURL()!=$_smarty_tpl->tpl_vars['block']->value['url']) {?><?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?><?php }?><?php }?><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['block']->value['ostep_cart']==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value=="order"&&Tools::getValue('step','false')=='false') {?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(0, null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['block']->value['ostep_address']==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value=="order"&&Tools::getValue('step','false')==1) {?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(0, null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['block']->value['ostep_shipping']==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value=="order"&&Tools::getValue('step','false')==2) {?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(0, null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['block']->value['ostep_payment']==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value=="order"&&Tools::getValue('step','false')==3) {?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(0, null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['geoip'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['geoip']==1) {?>
            <?php if (!in_array($_smarty_tpl->tpl_vars['popupModule']->value->returnUserCountry(),$_smarty_tpl->tpl_vars['block']->value['selected_geoip'])) {?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
        <?php }?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['productscat'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['productscat']==1) {?>
            <?php if (isset($_GET['id_product'])) {?>
                <?php $_smarty_tpl->tpl_vars['associated'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = Product::getProductCategories($_GET['id_product']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['category']->value,$_smarty_tpl->tpl_vars['block']->value['selected_pcats'])) {?>
                        <?php $_smarty_tpl->tpl_vars['associated'] = new Smarty_variable(1, null, 0);?>
                    <?php }?>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['associated']->value==0) {?>
                    <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
        <?php }?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['assmanufsonly'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['assmanufsonly']==1) {?>
            <?php if (isset($_GET['id_product'])) {?>
                <?php $_smarty_tpl->tpl_vars['associated'] = new Smarty_variable(0, null, 0);?>
                <?php if (in_array($_smarty_tpl->tpl_vars['id_manufacturer']->value,$_smarty_tpl->tpl_vars['block']->value['selected_assmanufs'])) {?>
                    <?php $_smarty_tpl->tpl_vars['associated'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['associated']->value==0) {?>
                    <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
            <?php }?>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['oconfirmation']==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='order-confirmation') {?>
            <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['hideblock_minval'] = new Smarty_variable(0, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['tc_min']==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['cart_value']->value<$_smarty_tpl->tpl_vars['popupModule']->value->returnProperCurrencyPrice($_smarty_tpl->tpl_vars['block']->value['tc_minval'])) {?>
            <?php $_smarty_tpl->tpl_vars['hideblock_minval'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['hideblock_maxval'] = new Smarty_variable(0, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['tc_max']==1) {?>
        <?php if ($_smarty_tpl->tpl_vars['cart_value']->value>$_smarty_tpl->tpl_vars['popupModule']->value->returnProperCurrencyPrice($_smarty_tpl->tpl_vars['block']->value['tc_maxval'])) {?>
            <?php $_smarty_tpl->tpl_vars['hideblock_maxval'] = new Smarty_variable(1, null, 0);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['hide_by_lang'] = new Smarty_variable('0', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['lang']==1) {?>
        <?php $_smarty_tpl->tpl_vars['hide_by_lang'] = new Smarty_variable('1', null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['selected_lang']==$_smarty_tpl->tpl_vars['customer_popup']->value->id_lang) {?>
            <?php $_smarty_tpl->tpl_vars['hide_by_lang'] = new Smarty_variable('0', null, 0);?>
        <?php }?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['hide_by_referer'] = new Smarty_variable('0', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['referer']==1) {?>
        <?php $_smarty_tpl->tpl_vars['hide_by_referer'] = new Smarty_variable('1', null, 0);?>
        <?php if (popuppro::check_referer($_smarty_tpl->tpl_vars['block']->value['referer_domain'])) {?>
            <?php $_smarty_tpl->tpl_vars['hide_by_referer'] = new Smarty_variable('0', null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['hide_by_referer'] = new Smarty_variable('1', null, 0);?>
        <?php }?>
    <?php }?>


    

    <?php if (isset($_smarty_tpl->tpl_vars['block']->value['cmsHide'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['block']->value['cmsHide']==1) {?>
            <?php if (isset($_GET['id_cms'])&&$_smarty_tpl->tpl_vars['page_name']->value=='cms') {?>
                <?php if (in_array($_GET['id_cms'],$_smarty_tpl->tpl_vars['block']->value['selectedcmsHide'])) {?>
                    <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php }?>



    <?php if ($_smarty_tpl->tpl_vars['hideblock']->value!=1&&$_smarty_tpl->tpl_vars['hide_by_lang']->value!=1&&$_smarty_tpl->tpl_vars['hide_by_referer']->value!=1&&$_smarty_tpl->tpl_vars['hideblock_minval']->value!=1&&$_smarty_tpl->tpl_vars['hideblock_maxval']->value!=1) {?>
        <?php echo popuppro::spawn_popup($_smarty_tpl->tpl_vars['block']->value['id']);?>

    <?php }?>

    <?php $_smarty_tpl->tpl_vars['hideblock'] = new Smarty_variable(0, null, 0);?>
<?php } ?><?php }} ?>
