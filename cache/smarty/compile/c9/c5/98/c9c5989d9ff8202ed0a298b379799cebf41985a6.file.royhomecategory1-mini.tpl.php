<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/royhomecategory1/views/templates/hook/royhomecategory1-mini.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11521562005e4f1d2ca0b531-06785509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c5989d9ff8202ed0a298b379799cebf41985a6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/royhomecategory1/views/templates/hook/royhomecategory1-mini.tpl',
      1 => 1525307879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11521562005e4f1d2ca0b531-06785509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'products' => 0,
    'product' => 0,
    'roythemes' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2ca23633_66206497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2ca23633_66206497')) {function content_5e4f1d2ca23633_66206497($_smarty_tpl) {?><!-- MODULE Roy Home Category 1 -->
<div id="royhomecategory1-mini" class="mini_products">
    <h4 class="mini_products_title">
        <?php if (RoyHomeCategory1::displayCategoryId()!=1&&RoyHomeCategory1::displayCategoryId()!=2) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(RoyHomeCategory1::displayCategoryId(),RoyHomeCategory1::displayCategoryLink());?>
"><?php echo RoyHomeCategory1::displayCategoryName();?>
</a>
        <?php } else { ?>
            <span><?php echo RoyHomeCategory1::displayCategoryName();?>
</span>
        <?php }?>
    </h4>
    <div class="mini_products_content">
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <div class="carousel_mini">
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']==1) {?><div class="products_box"><?php }?>
                    <div class="products_item clearfix">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" class="products-block-image content_img clearfix">
                            <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" />
                        </a>
                        <div class="product-content">
                            <h5>
                                <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['mini_r'])&&$_smarty_tpl->tpl_vars['roythemes']->value['mini_r']=="1") {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
                            <p class="product-description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),75,'...');?>
</p>
                            <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                <div class="price-box">
                                    <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
</span>
                                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?><span class="old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span><?php }?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>
                        </div>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['iteration']%3==0) {?>
                            </div><div class="products_box">
                        <?php }?>
                    <?php }?>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p><?php echo smartyTranslate(array('s'=>'No products at this category','mod'=>'royhomecategory1'),$_smarty_tpl);?>
</p>
        <?php }?>
    </div>
    <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']&&$_smarty_tpl->tpl_vars['products']->value) {?>
        </div>
    <?php }?>
</div>
<!-- /MODULE Roy Home Category 1 --><?php }} ?>
