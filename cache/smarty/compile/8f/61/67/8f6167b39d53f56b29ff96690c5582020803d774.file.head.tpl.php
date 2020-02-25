<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/fbloginblock/views/templates/hooks/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9423204305e4f1d2bbf7073-16661977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6167b39d53f56b29ff96690c5582020803d774' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/fbloginblock/views/templates/hooks/head.tpl',
      1 => 1536164896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9423204305e4f1d2bbf7073-16661977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fbloginblockis17' => 0,
    'fbloginblockis16' => 0,
    'fbloginblockapipopup' => 0,
    'fbloginblockislogged' => 0,
    'fbloginblockis_display_voucher' => 0,
    'fbloginblockis_display_gdpr' => 0,
    'fbloginblocklbfooter' => 0,
    'fbloginblocklbtop' => 0,
    'fbloginblocklbauthpage' => 0,
    'fbloginblocklbbauthpage' => 0,
    'fbloginblocklbwelcome' => 0,
    'fbloginblockis_popup' => 0,
    'fbloginblockis_ssl' => 0,
    'fbloginblockamazonci' => 0,
    'fbloginblockssltxt' => 0,
    'aerror' => 0,
    'fbloginblockamazon_url' => 0,
    'fbloginblockhtmlgdpr' => 0,
    'id_module' => 0,
    'fbloginblockhtmlapipopup' => 0,
    'fbloginblockupdate_email' => 0,
    'fbloginblockcid' => 0,
    'fbloginblockhtmlcoupon' => 0,
    'fbloginblockbgcolortb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2bc0b694_85649935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2bc0b694_85649935')) {function content_5e4f1d2bc0b694_85649935($_smarty_tpl) {?>


<script type="text/javascript">

var fbloginblock_is17 = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockis17']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
var fbloginblock_is16 = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockis16']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
var fbloginblockapipopup = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockapipopup']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
var fbloginblockislogged = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockislogged']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
var fbloginblockvoucherpopup = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockis_display_voucher']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
var fbloginblockis_display_gdpr = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockis_display_gdpr']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
'; //gdpr




    <?php if (!$_smarty_tpl->tpl_vars['fbloginblockislogged']->value) {?>
        


        var fbloginblock_login_buttons_footer = '<?php echo $_smarty_tpl->tpl_vars['fbloginblocklbfooter']->value;?>
';
        var fbloginblock_login_buttons_top = '<?php echo $_smarty_tpl->tpl_vars['fbloginblocklbtop']->value;?>
';
        var fbloginblock_login_buttons_authpage = '<?php echo $_smarty_tpl->tpl_vars['fbloginblocklbauthpage']->value;?>
';
        var fbloginblock_login_buttons_beforeauthpage = '<?php echo $_smarty_tpl->tpl_vars['fbloginblocklbbauthpage']->value;?>
';
        var fbloginblock_login_buttons_welcome = '<?php echo $_smarty_tpl->tpl_vars['fbloginblocklbwelcome']->value;?>
';


        var fbloginblockis_popup = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockis_popup']->value;?>
';


        // amazon connect variables
        var fbloginblockis_ssl = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockis_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
        var fbloginblockamazonci = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockamazonci']->value;?>
';
        var fbloginblockssltxt = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockssltxt']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
        var fbloginblock_aerror = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['aerror']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
';
        var fbloginblockamazon_url = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockamazon_url']->value;?>
';
        // amazon connect variables

        


        <?php if ($_smarty_tpl->tpl_vars['fbloginblockis_display_gdpr']->value==1) {?>
        <!--  show popup for gdpr  -->
        
        var fbloginblock_htmlgdpr = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockhtmlgdpr']->value;?>
';
        var fbloginblock_id_module = '<?php echo $_smarty_tpl->tpl_vars['id_module']->value;?>
';
        
        <!--  show popup for gdpr  -->
        <?php }?>


<?php } else { ?>


        <?php if ($_smarty_tpl->tpl_vars['fbloginblockapipopup']->value==1) {?>
        <!--  show popup for twitter customer which not changed email address  -->
        
            var fbloginblock_htmlapipopup = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockhtmlapipopup']->value;?>
';
            var fbloginblockupdate_email = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockupdate_email']->value;?>
';
            var fbloginblockcid = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockcid']->value;?>
';
        
        <!--  show popup for twitter customer which not changed email address  -->
        <?php }?>






        <?php if ($_smarty_tpl->tpl_vars['fbloginblockis_display_voucher']->value==1) {?>
            <!--  show popup for coupon  -->
            
            var fbloginblock_htmlcoupon = '<?php echo $_smarty_tpl->tpl_vars['fbloginblockhtmlcoupon']->value;?>
';
            
            <!--  show popup for coupon  -->
        <?php }?>

<?php }?>


</script>

<style type="text/css">
    #follow-teaser, #follow-teaser-footer{background-color:<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fbloginblockbgcolortb']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 }
</style>


<?php }} ?>
