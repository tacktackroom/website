<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advancelogin/views/templates/hook/advancelogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14690220425e4f1d2bc35f73-65958018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42c040d3e736f43cbb35bace68c97f79dac892a8' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/modules/advancelogin/views/templates/hook/advancelogin.tpl',
      1 => 1577892129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14690220425e4f1d2bc35f73-65958018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_action' => 0,
    'rightsideimage' => 0,
    'path' => 0,
    'backgroundimage' => 0,
    'forgot_password_action' => 0,
    'sign_up_action' => 0,
    'imagetype' => 0,
    'facebook_action' => 0,
    'google_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2bc6ec17_41745896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2bc6ec17_41745896')) {function content_5e4f1d2bc6ec17_41745896($_smarty_tpl) {?>
<SCRIPT type="text/javascript">	
   (function ($) {
       "use strict";
   
 
 
       $('.input100').each(function(){
          
               if($(this).val().trim() != "") {
                   $(this).addClass('has-val');
               }
               else {
                   $(this).removeClass('has-val');
               }
            
       })
  
       /*==================================================================
       [ Focus input ]*/
       $('.input100').each(function(){
           $(this).on('blur', function(){
               if($(this).val().trim() != "") {
                   $(this).addClass('has-val');
               }
               else {
                   $(this).removeClass('has-val');
               }
           })    
       })
     
     
       /*==================================================================
       [ Validate ]*/
       var input = $('.validate-input .input100');
   
       $('.validate-form').on('submit',function(){
           var check = true;
   
           for(var i=0; i<input.length; i++) {
               if(validate(input[i]) == false){
                   showValidate(input[i]);
                   check=false;
               }
           }
   
           return check;
       });
   
   
       $('.validate-form .input100').each(function(){
           $(this).focus(function(){
              hideValidate(this);
           });
       });
   
       function validate (input) {
           if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
               if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                   return false;
               }
           }
           else {
               if($(input).val().trim() == ''){
                   return false;
               }
           }
       }
   
       function showValidate(input) {
           var thisAlert = $(input).parent();
   
           $(thisAlert).addClass('alert-validate');
       }
   
       function hideValidate(input) {
           var thisAlert = $(input).parent();
   
           $(thisAlert).removeClass('alert-validate');
       }
       
       
   }
   )(jQuery);
   
</script>



<script>
    var loginaction = '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['login_action']->value);?>
';
//error messages for velovalidation.js
    velovalidation.setErrorLanguage({
    empty_field: "<?php echo smartyTranslate(array('s'=>'Field cannot be empty.','mod'=>'advancelogin'),$_smarty_tpl);?>
",
    validate_email: "<?php echo smartyTranslate(array('s'=>'Please enter a valid Email.','mod'=>'advancelogin'),$_smarty_tpl);?>
",
    not_image: "<?php echo smartyTranslate(array('s'=>'Uploaded file is not an image','mod'=>'advancelogin'),$_smarty_tpl);?>
",
    image_size: "<?php echo smartyTranslate(array('s'=>'Uploaded file size must be less than #d.','mod'=>'advancelogin'),$_smarty_tpl);?>
"
});
</script>
<?php if (isset($_smarty_tpl->tpl_vars['rightsideimage']->value)&&$_smarty_tpl->tpl_vars['rightsideimage']->value!='') {?>  
    <div class="vss-ui-dialog dialogNewLoginSignup" id="vss_login_popup" style="visibility: visible; display: none;">
        <div class="shield" onclick="closeLoginPopup();"></div>
        <div class="window alpha30 window-absolute large">
            <div class="content">
                <div class="dialog-body" style="display:block;">
                    <div id="login-signup-newDialog" class="line" style="display: block; background: url('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/uploads/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['backgroundimage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');">
                        <div class="line" id="line">
                            <div class="size1of2 vss-inline-block login-vmiddle">
                                <div class="new-login-dialog-wrap vss-hidden" style="display: block;">

                                    <span id="loginWithOtpFlow" class="vss-hidden" data-socialid="" data-showpopup=""></span>
                                    <div>
                                        <div class="login-wrap">
                                            <div class="alert alert-danger login_error">
                                                <p class="err_text"></p>
			                    </div>
                                            <div class="new-login-form">
                                                 <div id="error_div"></div>
                                                <div class="title_modal_log"><?php echo smartyTranslate(array('s'=>'LOG IN','mod'=>'advancelogin'),$_smarty_tpl);?>
</div>
                                               
                                                <form id="advance_login_form">
                                                    <div class="login-input-wrap wrap-input100">
                                                        <input type="text" class="vss-input login-form-input_large user-email input100" id="useremail" name="login_email" onkeyup="enablelogin();" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Enter email','mod'=>'advancelogin'),$_smarty_tpl);?>
"  />
                                                        <span class="focus-input100 focus-input100-b" data-placeholder="<?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
"></span>
                                                    </div>
                                                    <div class="tmargin10 login-input-wrap">
                                                        <input type="password" class="vss-input login-form-input_large user-pwd" id="userpwd" name="login_password" autocomplete="off" style="margin-top:10px;" placeholder="<?php echo smartyTranslate(array('s'=>'Enter password','mod'=>'advancelogin'),$_smarty_tpl);?>
" />
                                                    </div>
                                                </form>
                                                <div class="tmargin20 login-btn-wrap">
                                                    <input type="button" class="btn btn-default button" style="font-size:16px;" value="<?php echo smartyTranslate(array('s'=>'LOGIN','mod'=>'advancelogin'),$_smarty_tpl);?>
" onmouseover="" onmouseout="" id="login_btn" onclick="validate_entry()">
                                                    <div class="loading_block">
                                                        <div class="loading_image" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/front/loading.gif' height="30px!important">
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="signup_with_rightimage">
                                                   <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['forgot_password_action']->value);?>
" class="" ><?php echo smartyTranslate(array('s'=>'Forgot Password?','mod'=>'advancelogin'),$_smarty_tpl);?>
</a>  
                                                </div>
                                                <p class="signup_text frgt_pswd"><?php echo smartyTranslate(array('s'=>'Do not have an account?','mod'=>'advancelogin'),$_smarty_tpl);?>
</p><a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['sign_up_action']->value);?>
" class="wh_sign" style="color:skyblue; font-size:14px;"><?php echo smartyTranslate(array('s'=>'Sign up','mod'=>'advancelogin'),$_smarty_tpl);?>
</a>
                                                <div class="login-social-wrap">
                                                    <?php if ($_smarty_tpl->tpl_vars['imagetype']->value!='do_not_show') {?>
                                                        
                                                        <div class="login-bottom-msg tmargin30 vss-font-12 txt_fb_google" style="font-size:14px;"><?php echo smartyTranslate(array('s'=>'Sign In Using Social Account','mod'=>'advancelogin'),$_smarty_tpl);?>
</div>
                                                       
                                                       
                                                       
                                                       
                                                    <?php if ($_smarty_tpl->tpl_vars['imagetype']->value=='large_buttons') {?>
                                                        <div class="tmargin10 login-btn-wrap txt_fb_google">
                                                            <?php if ($_smarty_tpl->tpl_vars['facebook_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['facebook_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=450,height=300,left=500,top=500')" class="vss-button-social rmargin10 button_social"  title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'advancelogin'),$_smarty_tpl);?>
"><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/facebook_large.png' alt="Facebook"></a>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['google_action']->value!=''&&$_smarty_tpl->tpl_vars['facebook_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['google_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=500,height=500,left=500,top=500')" class="vss-button-social go_mar button_social"  title="<?php echo smartyTranslate(array('s'=>'Google','mod'=>'advancelogin'),$_smarty_tpl);?>
" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/google_large.png' alt="Google"></a>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['google_action']->value!=''&&$_smarty_tpl->tpl_vars['facebook_action']->value=='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['google_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=500,height=500,left=500,top=500')" class="vss-button-social rmargin10 button_social"  title="<?php echo smartyTranslate(array('s'=>'Google','mod'=>'advancelogin'),$_smarty_tpl);?>
" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/google_large.png' alt="Google"></a>
                                                            <?php }?>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="tmargin10 login-btn-wrap txt_fb_google_small">
                                                            <?php if ($_smarty_tpl->tpl_vars['facebook_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['facebook_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=450,height=300,left=500,top=500')" class="vss-button-social_small rmargin10" title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'advancelogin'),$_smarty_tpl);?>
"><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/fb_small.png' alt="Facebook"></a>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['google_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['google_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=500,height=500,left=500,top=500')" class="vss-button-social_small go_mar_small"   title="<?php echo smartyTranslate(array('s'=>'Google','mod'=>'advancelogin'),$_smarty_tpl);?>
" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/google_small.png' alt="Google"></a>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['rightsideimage']->value!='') {?>                        
                        <div class="divider-div vss-inline-block divider"> 
                            <div class="right_image"><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/uploads/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rightsideimage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' style="height:200px;margin-top:-31px;" alt="Right column image">
                            </div>
                        </div>
                        <div class="right_image" id="right_image" style="display:none;"><img id="image" src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/uploads/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['rightsideimage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
' alt="Right column image">
                        </div> 
                        <?php }?>
                    </div>
                </div>
            </div>
            <span class="close-icon close" onclick="closeLoginPopup()" title="<?php echo smartyTranslate(array('s'=>'close','mod'=>'advancelogin'),$_smarty_tpl);?>
"></span>
        </div>
    </div>
<?php } else { ?>
    <div class="vss-ui-dialog dialogNewLoginSignup" id="vss_login_popup" style="visibility: visible; display: none;">
        <div class="shield" onclick="closeLoginPopup();"></div>
        <div class="window alpha30 window-absolute small">
            <div class="content">
                <div class="dialog-body" style="display:block;">
                    <div id="login-signup-newDialog" class="line" style="display: block">
                        <div class="line" id="line">
                            <div class="size1of2 vss-inline-block login-vmiddle">
                                <div class="new-login-dialog-wrap vss-hidden" style="display: block;">

                                    <span id="loginWithOtpFlow" class="vss-hidden" data-socialid="" data-showpopup=""></span>
                                    <div>
                                        <div class="login-wrap">
                                            <div class="alert alert-danger login_error" style="display:none;">
                                                <p class="err_text"></p>
			                    </div>
                                            <div class="new-login-form">
                                                <div id="error_div"></div>
                                                <div class="title_modal_log"><?php echo smartyTranslate(array('s'=>'LOGIN','mod'=>'advancelogin'),$_smarty_tpl);?>
</div>
                                                
                                                <form  id="advance_login_form">
	                                                
	                                                
	                                                
	                                                
	                                                <div class="form-group wrap-input100">						
<input type="text" class="is_required validate account_input form-control input100" data-validate="isEmail" id="useremail" name="login_email" onkeyup="enablelogin();" >
						<span class="focus-input100 focus-input100-b" data-placeholder="<?php echo smartyTranslate(array('s'=>'Email address'),$_smarty_tpl);?>
"></span>
					</div>
					
					
			<div class="password form-group wrap-input100">

				<input type="password" class="is_required validate form-control input100" data-validate="isPasswd" name="login_password" id="userpwd">
				
										<span class="focus-input100 focus-input100-b" data-placeholder="<?php echo smartyTranslate(array('s'=>'Password','mod'=>'marketplace'),$_smarty_tpl);?>
"></span>
			</div> 
					
					
					



                                                </form>

                                                <div class="login-btn-wrap login_small">
                                                    <input type="button" class="btn btn-default button" style="" value="<?php echo smartyTranslate(array('s'=>'LOGIN','mod'=>'advancelogin'),$_smarty_tpl);?>
" onmouseover="" onmouseout="" id="login_btn" onclick="validate_entry()">
                                                     <div class="loading_block">
                                                         <div class="loading_image"><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/front/loading.gif' height="30px!important"> 
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="signup_without_rightimage">
                                                   <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['forgot_password_action']->value);?>
" class="top" ><?php echo smartyTranslate(array('s'=>'Forgot Password?','mod'=>'advancelogin'),$_smarty_tpl);?>
</a>  
                                                </div>
                                                <div class="sign_modal">
                                                <p class="signup_text frgt_pswd top_sign"><?php echo smartyTranslate(array('s'=>'Do not have an account?','mod'=>'advancelogin'),$_smarty_tpl);?>
</p><a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['sign_up_action']->value);?>
" class="wh_sign"><?php echo smartyTranslate(array('s'=>'Sign up here','mod'=>'advancelogin'),$_smarty_tpl);?>
</a>
                                                <div class="login-social-wrap">
	                                              
                                                    
                                                    
                                                    <div class="login-bottom-msg tmargin30 vss-font-12 txt_fb_google" style="font-size:14px;"><?php echo smartyTranslate(array('s'=>'Sign In using social account','mod'=>'advancelogin'),$_smarty_tpl);?>
</div>
                                                      <div style="width: 100%; float: left;margin: 5px auto;text-align: center"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'socialConnectSpm'),$_smarty_tpl);?>
</div>
                                                    
                                                    <?php if ($_smarty_tpl->tpl_vars['imagetype']->value=='large_buttons') {?>
                                                        <div class="tmargin10 login-btn-wrap txt_fb_google">
                                                            <?php if ($_smarty_tpl->tpl_vars['facebook_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['facebook_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=450,height=300,left=500,top=500')" class="vss-button-social rmargin10 button_social" title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'advancelogin'),$_smarty_tpl);?>
"><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/facebook_large.png' alt="Facebook"></a>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['google_action']->value!=''&&$_smarty_tpl->tpl_vars['facebook_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['google_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=500,height=500,left=500,top=500')" class="vss-button-social go_mar button_social"  title="<?php echo smartyTranslate(array('s'=>'Google','mod'=>'advancelogin'),$_smarty_tpl);?>
" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/google_large.png' alt="Google"></a>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['google_action']->value!=''&&$_smarty_tpl->tpl_vars['facebook_action']->value=='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['google_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=500,height=500,left=500,top=500')" class="vss-button-social rmargin10 button_social"  title="<?php echo smartyTranslate(array('s'=>'Google','mod'=>'advancelogin'),$_smarty_tpl);?>
" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/google_large.png' alt="Google"></a>
                                                            <?php }?>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="tmargin10 login-btn-wrap txt_fb_google_small">
                                                            <?php if ($_smarty_tpl->tpl_vars['facebook_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['facebook_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=450,height=300,left=500,top=500')" class="vss-button-social_small rmargin10"  title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'advancelogin'),$_smarty_tpl);?>
"><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/fb_small.ico' alt="Facebook" style="width: 30px;    height: auto;"></a>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['google_action']->value!=''&&$_smarty_tpl->tpl_vars['facebook_action']->value!='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['google_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=500,height=500,left=500,top=500')" class="vss-button-social_small go_mar_small" title="<?php echo smartyTranslate(array('s'=>'Google','mod'=>'advancelogin'),$_smarty_tpl);?>
" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/google_small.png' alt="Google"></a>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['google_action']->value!=''&&$_smarty_tpl->tpl_vars['facebook_action']->value=='') {?>
                                                            <a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['google_action']->value);?>
" onclick="return !window.open(this.href, 'popup','width=500,height=500,left=500,top=500')" class="vss-button-social_small rmargin10" title="<?php echo smartyTranslate(array('s'=>'Google','mod'=>'advancelogin'),$_smarty_tpl);?>
" ><img src='<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
advancelogin/views/img/admin/buttons/google_small.png' alt="Google"></a>
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    
                                                </div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="close-icon close" onclick="closeLoginPopup()" title="<?php echo smartyTranslate(array('s'=>'close','mod'=>'advancelogin'),$_smarty_tpl);?>
"></span>
        </div>
    </div>     
<?php }?>
</form>

    <?php }} ?>
