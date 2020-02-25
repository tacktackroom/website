<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/royfeatured/royfeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14439863245e4f1d2c6e2791-37035996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9733c820c07a57ac6dc5ea96148cd21cfd80a558' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/royfeatured/royfeatured.tpl',
      1 => 1579127142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14439863245e4f1d2c6e2791-37035996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roythemes' => 0,
    'products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c6ef356_60308956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c6ef356_60308956')) {function content_5e4f1d2c6ef356_60308956($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/XAMPP/xamppfiles/htdocs/ttr/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<li class="hfeatured" data-auto="<?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_auto_featured'];?>
" data-max-slides="<?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_items_featured'];?>
" data-nomargins="<?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nomargins_featured'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <div class="home_products_title">
        <a href="https://tacktackroom.com/17-hot-products"><span><?php echo smartyTranslate(array('s'=>'Handpicked Collections','mod'=>'royfeatured'),$_smarty_tpl);?>
</span></a>
		<h3 class="undertitle"><?php echo smartyTranslate(array('s'=>'These products are trending this week!','mod'=>'royfeatured'),$_smarty_tpl);?>
</h3>
    </div>
    <div class="rv_carousel_container">
	<?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_carousel_featured'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_carousel_featured']=="1") {?><?php echo "car-featured";?><?php }?><?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_plc_f'])) {?><?php echo (string)$_smarty_tpl->tpl_vars['roythemes']->value['nc_plc_f'];?><?php }?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_items_featured'])) {?><?php echo (string)$_smarty_tpl->tpl_vars['roythemes']->value['nc_items_featured'];?><?php }?><?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"carousel-home ".$_tmp1." plc_".$_tmp2." items_".$_tmp3." homefeatured tab-pane",'id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

    </div>
<?php } else { ?>

<ul id="homefeatured" class="carousel-home homefeatured tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'royfeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
</li><?php }} ?>
