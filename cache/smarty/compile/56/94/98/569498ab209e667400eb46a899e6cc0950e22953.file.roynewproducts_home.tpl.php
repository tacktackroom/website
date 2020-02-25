<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/roynewproducts/roynewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5028576205e4f26839a2da7-15195086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '569498ab209e667400eb46a899e6cc0950e22953' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/roynewproducts/roynewproducts_home.tpl',
      1 => 1557772868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5028576205e4f26839a2da7-15195086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'roythemes' => 0,
    'new_products' => 0,
    'link' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f26839b08a6_99386716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f26839b08a6_99386716')) {function content_5e4f26839b08a6_99386716($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<li class="hnew" data-auto="<?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_auto_new'];?>
" data-max-slides="<?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nc_items_new'];?>
" data-nomargins="<?php echo $_smarty_tpl->tpl_vars['roythemes']->value['nomargins_new'];?>
">
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
    <div class="home_products_title">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'New listing','mod'=>'roynewproducts'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'New Arrivals','mod'=>'roynewproducts'),$_smarty_tpl);?>
</span></a>
		<h3 class="undertitle"><?php echo smartyTranslate(array('s'=>'There are new arrivals! See what our members have in their tackroom!','mod'=>'roynewproducts'),$_smarty_tpl);?>
</h3>
    </div>
    <div class="rv_carousel_container">
	<?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_carousel_new'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_carousel_new']=="1") {?><?php echo "car-new";?><?php }?><?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_plc_n'])) {?><?php echo (string)$_smarty_tpl->tpl_vars['roythemes']->value['nc_plc_n'];?><?php }?><?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_items_new'])) {?><?php echo (string)$_smarty_tpl->tpl_vars['roythemes']->value['nc_items_new'];?><?php }?><?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>"carousel-home ".$_tmp7." plc_".$_tmp8." items_".$_tmp9." blocknewproducts tab-pane",'id'=>'blocknewproducts','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

    </div>
<?php } else { ?>
<ul id="blocknewproducts" class="carousel-home blocknewproducts tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'roynewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
</li>
<?php }} ?>
