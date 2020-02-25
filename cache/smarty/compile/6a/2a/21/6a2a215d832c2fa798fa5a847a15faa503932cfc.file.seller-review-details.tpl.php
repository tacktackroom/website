<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/seller/_partials/seller-review-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19857822875e4f1d93acb597-34468460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a2a215d832c2fa798fa5a847a15faa503932cfc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/seller/_partials/seller-review-details.tpl',
      1 => 1573708200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19857822875e4f1d93acb597-34468460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews' => 0,
    'count' => 0,
    'i' => 0,
    'review' => 0,
    'k' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d93ae15a8_07391325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d93ae15a8_07391325')) {function content_5e4f1d93ae15a8_07391325($_smarty_tpl) {?>


		<?php if (!empty($_smarty_tpl->tpl_vars['reviews']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>		
			<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
			<?php } ?>
		


	
	
	<div class="box-content">
		
		<div class="clearfix"></div>
	
		<?php if (!empty($_smarty_tpl->tpl_vars['reviews']->value)) {?>
				<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>		
			<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value) {
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
			<div class="review_container_seller">
				<div class="row wk_reviews_customer_details">
					<div class="">
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
						<?php while ($_smarty_tpl->tpl_vars['i']->value!=$_smarty_tpl->tpl_vars['review']->value['rating']) {?>
							<img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/marketplace/views/img/star-on.png" />
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
						<?php }?>

					  	<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable(0, null, 0);?>	
					  	<?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable(5-$_smarty_tpl->tpl_vars['review']->value['rating'], null, 0);?>
					  	<?php while ($_smarty_tpl->tpl_vars['k']->value!=$_smarty_tpl->tpl_vars['j']->value) {?>
					   		<img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/marketplace/views/img/star-off.png" />
					  	<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value+1, null, 0);?>
					 	<?php }?>
					</div>
					<div class="">
						<div class="product_review">
							<span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['product_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
						</div>
						<div class="wk_reviews_customer_details">
							<span><?php echo smartyTranslate(array('s'=>'By','mod'=>'marketplace'),$_smarty_tpl);?>
 <?php echo substr($_smarty_tpl->tpl_vars['review']->value['customer_name'],0,strpos($_smarty_tpl->tpl_vars['review']->value['customer_name'],' '));?>
 </span>							<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['review']->value['time']),$_smarty_tpl);?>
</span>
						</div>
					</div>
				</div>
				<div class="wk_review_content">
					<?php if (!empty($_smarty_tpl->tpl_vars['review']->value['review'])) {?>
						<span class="comment_review"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['review'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<?php }?>

				</div>
				</div>
			<?php } ?>
			

		<?php } else { ?>
			<p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No reviews found','mod'=>'marketplace'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>	
	
</div>
<?php }?><?php }} ?>
