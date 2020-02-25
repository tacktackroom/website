<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:26
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/doofinder/views/templates/front/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13748577875e4f2682eca765-59570939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13b372e394ee389be746aadaa8cf4216b6d7d9d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/doofinder/views/templates/front/script.tpl',
      1 => 1544805285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13748577875e4f2682eca765-59570939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_engine_id' => 0,
    'df_region' => 0,
    'productLinks' => 0,
    'doofinder_banner_append' => 0,
    'doofinder_search_selector' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2682ed4831_28991763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2682ed4831_28991763')) {function content_5e4f2682ed4831_28991763($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['search_engine_id']->value)&&$_smarty_tpl->tpl_vars['search_engine_id']->value) {?>
  <!-- START OF DOOFINDER SCRIPT -->
  <script type="text/javascript" async="" src="https://<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['df_region']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-search.doofinder.com/5/script/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_engine_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.js"></script>
  <!-- END OF DOOFINDER SCRIPT -->
<?php }?>
  <!-- TO REGISTER CLICKS -->
<script>
<?php if (isset($_smarty_tpl->tpl_vars['productLinks']->value)) {?>
  var dfProductLinks = <?php echo html_entity_decode(mb_convert_encoding(htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['productLinks']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
;
  var dfLinks = Object.keys(dfProductLinks);
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['doofinder_banner_append']->value)) {?>
  var doofinderAppendAfterBanner = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['doofinder_banner_append']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
<?php }?>
  var doofinderQuerySelector = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['doofinder_search_selector']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
</script>  
  <!-- END OF TO REGISTER CLICKS -->
<?php }} ?>
