<?php /* Smarty version Smarty-3.1.19, created on 2020-02-21 02:18:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/_partials/payment_seller_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12927764135e4f2ffe7b3340-45504749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960068147a61d6398495e14f1c886c7245ef572f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/_partials/payment_seller_account.tpl',
      1 => 1563583257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12927764135e4f2ffe7b3340-45504749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'token' => 0,
    'customer_firstname' => 0,
    'customer_lastname' => 0,
    'months' => 0,
    'k' => 0,
    'sl_month' => 0,
    'v' => 0,
    'days' => 0,
    'sl_day' => 0,
    'years' => 0,
    'sl_year' => 0,
    'countries_list' => 0,
    'stripe_fields' => 0,
    'stripe_needed_fields' => 0,
    'field_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2ffe7d55d5_64438324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2ffe7d55d5_64438324')) {function content_5e4f2ffe7d55d5_64438324($_smarty_tpl) {?>

<div id="paymentSellerAccountModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Seller account','mod'=>'marketplace'),$_smarty_tpl);?>
</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger sa_errors" style="display: none;"></div>

        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','mppayment'), ENT_QUOTES, 'UTF-8', true);?>
" method="POST" class="std" id="seller_account">
            <input type="hidden" name="action" value="updateSellerAccount" />
            <input type="hidden" name="ajax" value="1" />
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />

            <p class="notice">
              <?php echo smartyTranslate(array('s'=>'We process all payments securely with Stripe, the world\'s leading payment processor for marketplaces. Once you have received a payment, you will be able to transfer the funds directly to your bank account.','mod'=>'marketplace'),$_smarty_tpl);?>

            </p>
            <p class="notice">
              <?php echo smartyTranslate(array('s'=>'Learn more about.','mod'=>'marketplace'),$_smarty_tpl);?>
 <a href="http://help.tacktackroom.com/articles/2756023-why-am-i-required-to-link-my-full-ssn-or-photo-identification" target="_blank"><?php echo smartyTranslate(array('s'=>'Seller Identify Verification','mod'=>'marketplace'),$_smarty_tpl);?>
</a>
            </p>

            <div class="seller_name">
              <div class="form-group col-xs-12 col-md-12 col-lg-12">
                        <label class="control-label required"><?php echo smartyTranslate(array('s'=>'First Name','mod'=>'marketplace'),$_smarty_tpl);?>
</label>  
                  <input class="is_required validate form-control" data-validate="isName" type="text" id="firstname" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['customer_firstname']->value;?>
" />
                  
              </div>
              <div class=" form-group col-xs-12 col-md-12 col-lg-12 lastname">
	                                      <label class="control-label required"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
                  <input class="is_required validate form-control" data-validate="isName" type="text" name="lastname" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['customer_lastname']->value;?>
" />
              </div>
              <div class="clearfix"></div>
            </div>

            <div class=" form-group dob col-xs-12 col-md-12 col-lg-12">
                <div class="row">
                        <label class="control-label required"><?php echo smartyTranslate(array('s'=>'Date Of Birth','mod'=>'marketplace'),$_smarty_tpl);?>
</label> 
                   <div class="birth-selector">
                        <select id="months" name="months" class="form-control input100" required>
                            <option value="">-</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value==$_smarty_tpl->tpl_vars['k']->value)) {?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
&nbsp;</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="birth-selector">
                        <select name="days" id="days" class="form-control input100" required>
                            <option value="">-</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value==$_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="birth-selector">
                        <select id="years" name="years" class="form-control input100" required>
                            <option value="">-</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value==$_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group  col-xs-12 col-md-12 col-lg-12">
                        <label class="control-label required"><?php echo smartyTranslate(array('s'=>'Country of residence','mod'=>'marketplace'),$_smarty_tpl);?>
</label> 
                 <select name="country_residence"  class="form-control"><?php echo $_smarty_tpl->tpl_vars['countries_list']->value;?>
</select>
            </div>

            <?php if (isset($_smarty_tpl->tpl_vars['stripe_fields']->value)&&$_smarty_tpl->tpl_vars['stripe_fields']->value&&count($_smarty_tpl->tpl_vars['stripe_needed_fields']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['needed_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['needed_field']->_loop = false;
 $_smarty_tpl->tpl_vars['field_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stripe_needed_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['needed_field']->key => $_smarty_tpl->tpl_vars['needed_field']->value) {
$_smarty_tpl->tpl_vars['needed_field']->_loop = true;
 $_smarty_tpl->tpl_vars['field_key']->value = $_smarty_tpl->tpl_vars['needed_field']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['field_key']->value=='external_account'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.address.city'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.address.line1'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.address.postal_code'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.address.state') {?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.first_name'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.last_name'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.dob.day'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.dob.month'||$_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.dob.year') {?>
                        
                    <?php } elseif ($_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.type') {?>
                        <div class=" form-group col-xs-12 col-md-12 col-lg-12 stripe_field">
                            <label class="control-label required" style="margin-top: -34px;"><?php echo smartyTranslate(array('s'=>'You are'),$_smarty_tpl);?>
</label>
                             <select name="stripe_needed_fields[<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" required="true" class="form-control">
                                 <option class="individual">Individual</option>
                                 <option class="company">Company</option>
                             </select>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.ssn_last_4') {?>
                        <div class=" form-group col-xs-12 col-md-12 col-lg-12 stripe_fields">
	                        <label class="control-label required"><?php echo smartyTranslate(array('s'=>'Last 4 SSN'),$_smarty_tpl);?>
</label>  
                            <input class="form-control" type="text" name="stripe_needed_fields[<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" />
                             
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.personal_id_number') {?>
                        <div class=" form-group col-xs-12 col-md-12 col-lg-12 stripe_fields">
	                        <label class="control-label required"><?php echo smartyTranslate(array('s'=>'Personal number ID'),$_smarty_tpl);?>
</label>
                            <input class="form-control" type="text" name="stripe_needed_fields[<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" />
                               
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['field_key']->value=='legal_entity.verification.document') {?>
                        <div class=" form-group col-xs-12 col-md-12 col-lg-12 stripe_fields">
	                        <label class="control-label required"><?php echo smartyTranslate(array('s'=>'Upload your document ID'),$_smarty_tpl);?>
</label>
                            <input class="form-control" type="file" name="verification_document" id="verification_document" accept="image/*" />
                            
                        </div>
                    <?php } else { ?>
                        <div class=" form-group col-xs-12 col-md-12 col-lg-12 stripe_fields">
	                        <label class="control-label required"><?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
</label>   
                            <input class="form-control" type="text" name="stripe_needed_fields[<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" />
                            
                        </div>
                    <?php }?>
                <?php } ?>
            <?php }?>

            <div class="img_bottom"><img class="poweredbystripe" src="/img/powered-by-stripe.png" /></div>
            <p class="stripe_terms">
              <?php echo smartyTranslate(array('s'=>'All Information is processed securely through Stripe. View Stripe\'s','mod'=>'marketplace'),$_smarty_tpl);?>
 <a href="https://stripe.com/payment-terms/legal" target="_blank"><?php echo smartyTranslate(array('s'=>'Terms of Service','mod'=>'marketplace'),$_smarty_tpl);?>
 </a>
            </p>

            <div class="form-group">
                <button type="button" id="submitSellerAccount" class="btn btn-default button button-small">
                    <span><?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i></span>
                </button>
            </div>

            <h5 style="text-align: center"><?php echo smartyTranslate(array('s'=>'Questions?','mod'=>'marketplace'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'Contact support','mod'=>'marketplace'),$_smarty_tpl);?>
</a></h5>

         </form>
      </div>
    </div>
  </div>
</div><?php }} ?>
