<?php /* Smarty version Smarty-3.1.19, created on 2020-02-21 02:18:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/_partials/payment_bank_account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11393970515e4f2ffe7e1a31-00304578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24da618b944d3b6a34c6bed9b68c8eff26bf6ff9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/front/_partials/payment_bank_account.tpl',
      1 => 1551727578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11393970515e4f2ffe7e1a31-00304578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'token' => 0,
    'seller_payment_details' => 0,
    'stripe_bank_details' => 0,
    'edit' => 0,
    'countries_list' => 0,
    'customer_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2ffe7f3419_89883663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2ffe7f3419_89883663')) {function content_5e4f2ffe7f3419_89883663($_smarty_tpl) {?>

<div id="paymentBankAccountModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Update Bank Account','mod'=>'marketplace'),$_smarty_tpl);?>
</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger ba_errors" style="display: none;"></div>

        <form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','mppayment'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="form-horizontal" id="bank_Account" role="form" accept-charset="UTF-8,ISO-8859-1,UTF-16">
            <input type="hidden" name="action" value="updateBankAccount" />
            <input type="hidden" name="ajax" value="1" />
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="id_customer_payment" value="<?php if (isset($_smarty_tpl->tpl_vars['seller_payment_details']->value['id_customer_payment'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seller_payment_details']->value['id_customer_payment'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />

            <p class="bank_line"><?php echo smartyTranslate(array('s'=>'This will replace any previously entered information.','mod'=>'marketplace'),$_smarty_tpl);?>
</p>
            <?php if (isset($_smarty_tpl->tpl_vars['stripe_bank_details']->value)&&count($_smarty_tpl->tpl_vars['stripe_bank_details']->value)) {?>
            <p class="linked_account"><?php echo smartyTranslate(array('s'=>'LINKED ACCOUNT','mod'=>'marketplace'),$_smarty_tpl);?>
</p>
            <p class="brank_info bank_line">
                <?php echo $_smarty_tpl->tpl_vars['stripe_bank_details']->value['bank_name'];?>
 <br />
                <?php echo $_smarty_tpl->tpl_vars['stripe_bank_details']->value['last4'];?>
 - <?php echo $_smarty_tpl->tpl_vars['stripe_bank_details']->value['country'];?>

            </p>
            <?php }?>

            <p class="bank_line"><?php echo smartyTranslate(array('s'=>'You can locate your Routing number and Account number on a bank check.','mod'=>'marketplace'),$_smarty_tpl);?>
</p>

              <div class="form-wrapper">
                 <div class="form-group row hidden">
                  
                    <div class="row">
                        <label for="id_country" class="control-label required"><?php echo smartyTranslate(array('s'=>'Bank Country','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
                        <select id="id_country" name="id_country" value="<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php if (isset($_smarty_tpl->tpl_vars['seller_payment_details']->value['id_country'])&&$_smarty_tpl->tpl_vars['seller_payment_details']->value['id_country']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['seller_payment_details']->value['id_country'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php }?>" class="form-control" required>
                          <?php echo $_smarty_tpl->tpl_vars['countries_list']->value;?>

                        </select>                      
                    </div>
              
                </div>

                <div class="form-group row">
                  
                    <div class="row">
                      
                        <label for="routing_number" class="control-label required"><?php echo smartyTranslate(array('s'=>'Routing number','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
                        <input id="routing_number" type="text" name="routing_number" value="" class="form-control" />
                      </div>
                    
                  
                </div>

                <div class="form-group row">
                  
                    <div class="row">
                      
                        <label for="payment_mode_id" class="control-label required"><?php echo smartyTranslate(array('s'=>'Account number','mod'=>'marketplace'),$_smarty_tpl);?>
</label>
                        <input id="account_number" type="text" name="account_number" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php if (isset($_smarty_tpl->tpl_vars['seller_payment_details']->value['account_number'])&&$_smarty_tpl->tpl_vars['seller_payment_details']->value['account_number']) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['seller_payment_details']->value['account_number'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?><?php }?>" class="form-control" required />
                      </div>
                   
                
                </div>

                <div class="form-group row">
                  <div class="col-md-12 wk_text_right">
                    <input type="hidden" id="customer_id" name="customer_id" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['customer_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                    <button type="button" name="submit_payment_details" id="submit_payment_details" class="btn btn-default button button-small">
                      <span><?php echo smartyTranslate(array('s'=>'Update Bank Account','mod'=>'marketplace'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i></span>
                    </button>
                  </div>
                </div>
              </div>
            </form>
      </div>
    </div>
  </div>
</div><?php }} ?>
