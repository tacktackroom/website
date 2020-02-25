<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/facebookpswallposts/views/templates/front/facebook-og.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1254286715e4f26831189b7-44919719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6439582ed32b7fe19457401c0167ce48ca38b39b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/facebookpswallposts/views/templates/front/facebook-og.tpl',
      1 => 1559936777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254286715e4f26831189b7-44919719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'includeOg' => 0,
    'title' => 0,
    'image' => 0,
    'url' => 0,
    'site' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f268311f6f0_58817889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f268311f6f0_58817889')) {function content_5e4f268311f6f0_58817889($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['includeOg']->value)) {?>
	
	<meta property="og:title" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<meta property="og:type" content="product"/>
	<meta property="og:image" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<meta property="og:url" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<meta property="og:site_name" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['site']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<meta property="og:description" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	
<?php }?><?php }} ?>
