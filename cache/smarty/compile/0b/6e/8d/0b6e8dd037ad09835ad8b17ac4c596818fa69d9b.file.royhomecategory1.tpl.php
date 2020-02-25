<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/royhomecategory1/royhomecategory1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10760309925e4f1d2c75cef8-53737858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6e8dd037ad09835ad8b17ac4c596818fa69d9b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/royhomecategory1/royhomecategory1.tpl',
      1 => 1579120308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10760309925e4f1d2c75cef8-53737858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'link' => 0,
    'roythemes' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2c7690d2_98597619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2c7690d2_98597619')) {function content_5e4f1d2c7690d2_98597619($_smarty_tpl) {?>

<li class="hcc1">
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <div class="home_products_title">
        <?php if (RoyHomeCategory1::displayCategoryId()!=1&&RoyHomeCategory1::displayCategoryId()!=2) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(RoyHomeCategory1::displayCategoryId(),RoyHomeCategory1::displayCategoryLink());?>
"><span><?php echo RoyHomeCategory1::displayCategoryName();?>
</span></a>
        <?php } else { ?>
            <span><?php echo RoyHomeCategory1::displayCategoryName();?>
</span>
        <?php }?>
		<h3 class="undertitle">Professional tack store!</h3>
    </div>
    <div class="">
	<?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_carousel_featured'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_carousel_featured']=="1") {?><?php echo "car-featured";?><?php }?><?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_plc_f'])) {?><?php echo (string)$_smarty_tpl->tpl_vars['roythemes']->value['nc_plc_f'];?><?php }?><?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_items_featured'])) {?><?php echo (string)$_smarty_tpl->tpl_vars['roythemes']->value['nc_items_featured'];?><?php }?><?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"carousel-home ".$_tmp4." plc_".$_tmp5." items_".$_tmp6." homefeatured tab-pane",'id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

    </div>
<?php } else { ?>
<ul id="homefeatured" class="">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No products at this time.','mod'=>'royhomecategory1'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
</li><?php }} ?>
