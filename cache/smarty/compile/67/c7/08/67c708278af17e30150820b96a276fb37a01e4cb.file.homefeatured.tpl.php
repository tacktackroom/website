<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20684923585e4f1d2c578690-72927780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c708278af17e30150820b96a276fb37a01e4cb' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/homefeatured/homefeatured.tpl',
      1 => 1565231335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20684923585e4f1d2c578690-72927780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c580661_14600098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c580661_14600098')) {function content_5e4f1d2c580661_14600098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/function.counter.php';
?>

<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<li class="hfeatured">
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <div class="home_products_title">
        <span><?php echo smartyTranslate(array('s'=>'Recently Sold','mod'=>'homefeatured'),$_smarty_tpl);?>
</span>

    </div>
    <div class="rv_carousel_container">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'carousel-home homefeatured tab-pane','id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

    </div>
<?php } else { ?>

<ul id="homefeatured" class="carousel-home homefeatured tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
</li><?php }} ?>
