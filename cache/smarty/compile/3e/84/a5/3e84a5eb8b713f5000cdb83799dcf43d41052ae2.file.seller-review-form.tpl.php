<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/seller/_partials/seller-review-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2300824645e4f1d93ae9a88-55710992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e84a5eb8b713f5000cdb83799dcf43d41052ae2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/marketplace/views/templates/front/seller/_partials/seller-review-form.tpl',
      1 => 1551727695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2300824645e4f1d93ae9a88-55710992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'currenct_cust_review' => 0,
    'name_shop' => 0,
    'link' => 0,
    'seller_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d93af72d4_28438059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d93af72d4_28438059')) {function content_5e4f1d93af72d4_28438059($_smarty_tpl) {?>

<div id="wk_review_form" style="display:none;">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<div>
    		<h4>
    			<?php if (isset($_smarty_tpl->tpl_vars['currenct_cust_review']->value)) {?>
					<?php echo smartyTranslate(array('s'=>'Edit review','mod'=>'marketplace'),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'marketplace'),$_smarty_tpl);?>

				<?php }?>
    		</h4>
			<form id="review_submit" method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','shopstore',array('mp_shop_name'=>$_smarty_tpl->tpl_vars['name_shop']->value)), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
				<input type="hidden" name="mp_shop_name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_shop']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
				<div>
					<div class="rating_wrapper" style="width: 35%">
						<label for="rating" class="control-label required"><?php echo smartyTranslate(array('s'=>'Rating','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
						&nbsp;<span id="rating_image"></span>
						<div class="rating_error"></div>
					</div>
					<div class="rating_wrapper" style="width: 65%">
						<label for="comment"><?php echo smartyTranslate(array('s'=>'Description','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
						<textarea class="form-control" name="feedback" style="height:150px;"><?php if (isset($_smarty_tpl->tpl_vars['currenct_cust_review']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currenct_cust_review']->value['review'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></textarea>
                        <div class="feedback_error"></div>
						<input type="hidden" name="seller_id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['seller_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
						<input type="hidden" name="review_id" value="<?php if (isset($_smarty_tpl->tpl_vars['currenct_cust_review']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currenct_cust_review']->value['id_review'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?>0<?php }?>">
					</div>

				</div>
				<div class="submit_modal">
					<div class="col-xs-6 col-sm-6 col-md-6" style="text-align:left">
			        	<button type="button" class="btn"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'marketplace'),$_smarty_tpl);?>
</button>
			        </div>
			        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
			        	<button type="submit" name="submit_feedback" class="btn"><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'marketplace'),$_smarty_tpl);?>
</button>
			        </div>
				</div>
			</form>
		</div>
	<?php } else { ?>
		<div>
    		<h4>
    			<?php echo smartyTranslate(array('s'=>'Please login to write a review.','mod'=>'marketplace'),$_smarty_tpl);?>

    		</h4>
			<div><br />
		        

				<button type="button" class="btn btn-success wk_btn_extra" onclick="showLoginPopup()"><?php echo smartyTranslate(array('s'=>'Login','mod'=>'marketplace'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	<?php }?>
</div>

<script type="text/javascript">
$(function(){
	$('.open-review-form').fancybox({
		width: 600,
	    height: 310,
	    autoSize : false,
	    maxWidth : '100%',
		'hideOnContentClick': false
	});

	$(document).on('click', '#review_submit .wk_btn_cancel', function(e){
		e.preventDefault();
		$.fancybox.close();
	});

	$(".forloginuser").on("click", function(){
		if (typeof logged !== 'undefined' && !logged) {
			alert(not_logged_msg);
			return false;
		}
	});
});
</script><?php }} ?>
