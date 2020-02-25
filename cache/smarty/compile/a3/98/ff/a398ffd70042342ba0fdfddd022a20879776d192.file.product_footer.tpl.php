<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:00:12
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/productcommentpro//views/templates/hooks/product_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:986918845e4f1d8c1d18a7-46743963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a398ffd70042342ba0fdfddd022a20879776d192' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/productcommentpro//views/templates/hooks/product_footer.tpl',
      1 => 1577539119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '986918845e4f1d8c1d18a7-46743963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pcp_url' => 0,
    'id_product' => 0,
    'id_customer' => 0,
    'fb_app_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d8c1ddb89_52909371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d8c1ddb89_52909371')) {function content_5e4f1d8c1ddb89_52909371($_smarty_tpl) {?>



<!-- Fancybox -->
<div style="display:none">
    <div id="commentpalert" class="modal fade in">
		<h4 class="modal-title text-center"><?php echo smartyTranslate(array('s'=>'New comment','mod'=>'productcommentpro'),$_smarty_tpl);?>
</h4>
        <div class="content"><?php echo smartyTranslate(array('s'=>'Your comment has been added and will be available once approved by a moderator.','mod'=>'productcommentpro'),$_smarty_tpl);?>
</div>
		<br>
		<div class="text-center">
			<button type="submit" class="btn btn-primary" onclick="$.fancybox.close();">
				<span><?php echo smartyTranslate(array('s'=>'OK','mod'=>'productcommentpro'),$_smarty_tpl);?>
</span>
			</button>
		</div>
	</div>
    
    <div id="commentpreport_thanks" class="commentp-popup">
        <header><?php echo smartyTranslate(array('s'=>'Report Comment','mod'=>'productcommentpro'),$_smarty_tpl);?>
</header>
        <div class="content"><?php echo smartyTranslate(array('s'=>'Thank you for reporting.','mod'=>'productcommentpro'),$_smarty_tpl);?>
</div>
		<br>
		<div class="text-center">
			<button type="submit" class="btn btn-primary" onclick="$.fancybox.close();">
				<span><?php echo smartyTranslate(array('s'=>'OK','mod'=>'productcommentpro'),$_smarty_tpl);?>
</span>
			</button>
		</div>
	</div>
    
    <div id="commentpreport" class="commentp-popup">
        <form id="pcp_reportform" class="pcppopup-form" action="#">
            <header class="title"><?php echo smartyTranslate(array('s'=>'Report Comment','mod'=>'productcommentpro'),$_smarty_tpl);?>
</header>
            <div class="content">
                <div class="description"><?php echo smartyTranslate(array('s'=>'Report spam, abuse, or inappropriate content','mod'=>'productcommentpro'),$_smarty_tpl);?>
</div>

                <label for="reason"><?php echo smartyTranslate(array('s'=>'Your reason','mod'=>'productcommentpro'),$_smarty_tpl);?>
<sup class="required">*</sup></label>
                <textarea name="data[reason]" class="form-control" rows="4"></textarea>

                <footer>
                    <input type="hidden" name="data[id_comment]" value=""/>
                    <input type="hidden" name="action" value="report"/>
                    <div class="fl required"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'productcommentpro'),$_smarty_tpl);?>
</div>
                    <div class="fr">
                        <button type="submit" name="submitReport" class="btn btn-primary" disabled="true"><?php echo smartyTranslate(array('s'=>'Send','mod'=>'productcommentpro'),$_smarty_tpl);?>
</button>&nbsp;
                        <?php echo smartyTranslate(array('s'=>'or','mod'=>'productcommentpro'),$_smarty_tpl);?>
&nbsp;<a href="javascript:void(0);" onclick="$.fancybox.close();"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'productcommentpro'),$_smarty_tpl);?>
</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
            </div>
        </form>
    </div>
    
    <div id="commentpedit" class="modal fade in">
        <form id="pcp_editform" class="pcppopup-form" action="#">
	        <div class="modal-header">
            <h4 class="modal-title text-center"><?php echo smartyTranslate(array('s'=>'Edit Comment','mod'=>'productcommentpro'),$_smarty_tpl);?>
</h4>
	        </div>
            <div class="content">
                <textarea name="data[comment]" class="form-control" rows="4"></textarea>

                <footer>
                    <input type="hidden" name="data[id]" value=""/>
                    <input type="hidden" name="action" value="edit"/>
                    <div class="fr">
                        <button type="submit" name="submitReport" class="btn btn-primary" disabled="true"><?php echo smartyTranslate(array('s'=>'Send','mod'=>'productcommentpro'),$_smarty_tpl);?>
</button>&nbsp;
                        <?php echo smartyTranslate(array('s'=>'or','mod'=>'productcommentpro'),$_smarty_tpl);?>
&nbsp;<a href="javascript:void(0);" onclick="$.fancybox.close();"><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'productcommentpro'),$_smarty_tpl);?>
</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
            </div>
        </form>
    </div>
</div>
<!-- End fancybox -->

<script type="text/javascript">
const PCP_URL = "<?php echo $_smarty_tpl->tpl_vars['pcp_url']->value;?>
";
const ID_PRODUCT = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
var current_page = 1;
var id_customer = <?php echo mb_convert_encoding(htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id_customer']->value)===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
var fb_app_id = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['fb_app_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
var _txt_donot_permission_ = "<?php echo smartyTranslate(array('s'=>'Please login or register!','mod'=>'productcommentpro','js'=>1),$_smarty_tpl);?>
";
var _txt_delete_confirm_ = "<?php echo smartyTranslate(array('s'=>'Are you sure you want to delete this selected item?','mod'=>'productcommentpro','js'=>1),$_smarty_tpl);?>
";
</script>

<!--end Product Comments Pro --><?php }} ?>
