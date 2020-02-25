<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:31
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/stripejs/views/templates/admin/orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6815235975e4f2f33727025-29437210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e338f2625b8960b8c82c427e32b1917602e2e224' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/stripejs/views/templates/admin/orders.tpl',
      1 => 1579291019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6815235975e4f2f33727025-29437210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trans' => 0,
    'currency' => 0,
    'isZeroDecimalCurrency' => 0,
    'stripe_capture_error' => 0,
    'diff' => 0,
    'timeleft' => 0,
    'stripe_refund_error' => 0,
    'stripe_refunded' => 0,
    'stripe_refund_details' => 0,
    'stripe_refund_detail' => 0,
    'c_char' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f33792a19_55426144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f33792a19_55426144')) {function content_5e4f2f33792a19_55426144($_smarty_tpl) {?>


<div id="stripe_order_details" style="display:none;">
  <div class="panel panel-highlighted" style="padding: 5px 10px;"><fieldset><legend>&nbsp;<?php echo smartyTranslate(array('s'=>'Stripe Payment Details','mod'=>'stripejs'),$_smarty_tpl);?>
</legend>

<?php if (!empty($_smarty_tpl->tpl_vars['trans']->value['source'])) {?>
  <?php if ($_smarty_tpl->tpl_vars['trans']->value['status']=='pending'&&$_smarty_tpl->tpl_vars['trans']->value['source_type']=='multibanco') {?>
    <?php echo smartyTranslate(array('s'=>'Stripe Source ID:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['source'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br />
  <?php } else { ?>
    <?php echo smartyTranslate(array('s'=>'Stripe Transaction ID:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br />
  <?php }?>
  
  <?php echo smartyTranslate(array('s'=>'Payment Source:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b> <?php if ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='alipay') {?>Alipay<?php } elseif ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='prbutton') {?>Apple Pay/ Google Pay/ Microsoft Pay<?php } elseif ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='three_d_secure') {?>3D-Secure authentication<?php } elseif ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='card') {?>Credit Card<?php } elseif ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='customer') {?> <?php echo smartyTranslate(array('s'=>'Quick Pay with saved Card','mod'=>'stripejs'),$_smarty_tpl);?>
<?php } else { ?><?php echo mb_convert_encoding(htmlspecialchars(Tools::strtoupper($_smarty_tpl->tpl_vars['trans']->value['source_type']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></b><br /><br />
  
  <?php if ($_smarty_tpl->tpl_vars['trans']->value['status']=='pending'&&$_smarty_tpl->tpl_vars['trans']->value['source_type']=='multibanco') {?>
  <?php echo smartyTranslate(array('s'=>'Multibanco Entity:','mod'=>'stripejs'),$_smarty_tpl);?>
<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['client_secret'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br /><?php echo smartyTranslate(array('s'=>'Multibanco Reference:','mod'=>'stripejs'),$_smarty_tpl);?>
<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['cc_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br /><br />
  <?php }?>
  
  <?php echo smartyTranslate(array('s'=>'Status:','mod'=>'stripejs'),$_smarty_tpl);?>
<span style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['trans']->value['status']=='paid') {?>green<?php } else { ?>#CC0000<?php }?>;"><?php echo mb_convert_encoding(htmlspecialchars(Tools::strtoupper($_smarty_tpl->tpl_vars['trans']->value['status']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span><br />
  <?php echo smartyTranslate(array('s'=>'Amount:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo $_smarty_tpl->tpl_vars['trans']->value['amount'];?>
</b><br />
  <?php echo smartyTranslate(array('s'=>'Processed on:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['date_add'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br />
  
  <?php if ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='card'||$_smarty_tpl->tpl_vars['trans']->value['source_type']=='prbutton') {?>
  
  <?php echo smartyTranslate(array('s'=>'Credit card:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars(Tools::strtoupper($_smarty_tpl->tpl_vars['trans']->value['cc_type']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <br /></b><?php echo smartyTranslate(array('s'=>'Expired On:','mod'=>'stripejs'),$_smarty_tpl);?>
<b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['cc_exp'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br /><?php echo smartyTranslate(array('s'=>'Last 4 digits:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b>xxxx xxxx xxxx <?php echo mb_convert_encoding(htmlspecialchars(sprintf('%04d',$_smarty_tpl->tpl_vars['trans']->value['cc_last_digits']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </b><br /><?php echo smartyTranslate(array('s'=>'CVC Check:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php if ($_smarty_tpl->tpl_vars['trans']->value['cvc_check']) {?><span style="color: #35c135;"><?php echo smartyTranslate(array('s'=>'OK','mod'=>'stripejs'),$_smarty_tpl);?>
</span><?php } else { ?> <span style="color: orange;"><?php echo smartyTranslate(array('s'=>'Unchecked / Failed','mod'=>'stripejs'),$_smarty_tpl);?>
</span><?php }?></b><br /><?php echo smartyTranslate(array('s'=>'Street Check:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php if ($_smarty_tpl->tpl_vars['trans']->value['line1_check']) {?> <span style="color: #35c135;"><?php echo smartyTranslate(array('s'=>'OK','mod'=>'stripejs'),$_smarty_tpl);?>
</span><?php } else { ?><span style="color: orange;"><?php echo smartyTranslate(array('s'=>'Unchecked / Failed','mod'=>'stripejs'),$_smarty_tpl);?>
</span><?php }?></b><br /><?php echo smartyTranslate(array('s'=>'Zipcode Check:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php if ($_smarty_tpl->tpl_vars['trans']->value['zip_check']) {?> <span style="color: #35c135;"><?php echo smartyTranslate(array('s'=>'OK','mod'=>'stripejs'),$_smarty_tpl);?>
</span><?php } else { ?><span style="color: orange;"><?php echo smartyTranslate(array('s'=>'Unchecked / Failed','mod'=>'stripejs'),$_smarty_tpl);?>
</span><?php }?></b><br />
  
  <?php } elseif ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='sepa_debit') {?>
	<?php echo smartyTranslate(array('s'=>'Fingerprint:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['cc_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br /><?php echo smartyTranslate(array('s'=>'IBAN Last 4 digits:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b>xxxxxxxxxxxx<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['cc_last_digits'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br />
    
  <?php } elseif ($_smarty_tpl->tpl_vars['trans']->value['source_type']=='customer') {?>                                    
	<?php echo smartyTranslate(array('s'=>'Stripe customer ID:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['source'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br /><?php echo smartyTranslate(array('s'=>'Credit card:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['cc_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo smartyTranslate(array('s'=>'Exp.:','mod'=>'stripejs'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['cc_exp'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br /><?php echo smartyTranslate(array('s'=>'Last 4 digits:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b>xxxx xxxx xxxx <?php echo mb_convert_encoding(htmlspecialchars(sprintf('%04d',$_smarty_tpl->tpl_vars['trans']->value['cc_last_digits']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </b><br />
   <?php }?>
  
  <?php echo smartyTranslate(array('s'=>'Processing Fee:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php if ($_smarty_tpl->tpl_vars['isZeroDecimalCurrency']->value) {?> <?php echo mb_convert_encoding(htmlspecialchars(round($_smarty_tpl->tpl_vars['trans']->value['fee']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo $_smarty_tpl->tpl_vars['trans']->value['fee']/mb_convert_encoding(htmlspecialchars(100, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></b><br /><br /><?php echo smartyTranslate(array('s'=>'Payment mode:','mod'=>'stripejs'),$_smarty_tpl);?>
 <span style="font-weight: bold; color: <?php if ($_smarty_tpl->tpl_vars['trans']->value['mode']=='live') {?>green<?php } else { ?>#CC0000<?php }?>"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['mode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
<?php }?>

  <?php if (empty($_smarty_tpl->tpl_vars['trans']->value['source'])) {?>
  <b style="color: #CC0000;"><?php echo smartyTranslate(array('s'=>'Warning:','mod'=>'stripejs'),$_smarty_tpl);?>
</b> <?php echo smartyTranslate(array('s'=>'The customer paid using Stripe and an error occured while saving the transaction.','mod'=>'stripejs'),$_smarty_tpl);?>

  <?php }?>
  
   </fieldset><br />
   
   <?php if (Tools::getIsset('SubmitStripeCapture')) {?>
   <div  class="bootstrap"><?php if ($_smarty_tpl->tpl_vars['stripe_capture_error']->value==''&&Tools::getIsset('id_payment_intent')&&Tools::getIsset('SubmitStripeCapture')) {?> <div class="conf confirmation alert alert-success"><?php echo smartyTranslate(array('s'=>'Your capture was successfully processed','mod'=>'stripejs'),$_smarty_tpl);?>
</div><?php }?>
<?php if ($_smarty_tpl->tpl_vars['stripe_capture_error']->value!='') {?><div style="color: #CC0000; font-weight: bold;" class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'Error:','mod'=>'stripejs'),$_smarty_tpl);?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stripe_capture_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div><?php }?></div>
   <?php }?>

<?php if ($_smarty_tpl->tpl_vars['trans']->value['status']=='uncaptured') {?>

    <fieldset><legend>&nbsp;<?php echo smartyTranslate(array('s'=>'Proceed to a full or partial capture via Stripe','mod'=>'stripejs'),$_smarty_tpl);?>
</legend>
    <?php if ($_smarty_tpl->tpl_vars['diff']->value>0) {?>
    <form action="" method="post"><?php echo smartyTranslate(array('s'=>'Capture:','mod'=>'stripejs'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <input type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="stripe_amount_to_capture" style="display: inline-block; width: 60px;" /> <input type="hidden" name="id_payment_intent" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['id_payment_intent'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><input type="submit" class="button" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Do you want to proceed to this capture?','mod'=>'stripejs'),$_smarty_tpl);?>
');" name="SubmitStripeCapture" value="<?php echo smartyTranslate(array('s'=>'Process Capture','mod'=>'stripejs'),$_smarty_tpl);?>
" /></form><font style="color:red;font-size:13px;"> <br><?php echo smartyTranslate(array('s'=>'NOTE: Time left to Capture payment:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['timeleft']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b> <?php echo smartyTranslate(array('s'=>'otherwise payment will be automatically refunded.','mod'=>'stripejs'),$_smarty_tpl);?>
</font>
    <?php } else { ?>
    <font style="color:red;"> <b><?php echo smartyTranslate(array('s'=>'7 days has been passed so the payment has been refunded.','mod'=>'stripejs'),$_smarty_tpl);?>
</b></font>
    <?php }?>
    </fieldset>

<?php } else { ?>

   <fieldset class="bootstrap <?php if (empty($_smarty_tpl->tpl_vars['trans']->value['id_transaction'])||$_smarty_tpl->tpl_vars['trans']->value['status']=='unpaid') {?> hidden<?php }?>"><legend>&nbsp;<?php echo smartyTranslate(array('s'=>'Proceed to a full or partial refund via Stripe','mod'=>'stripejs'),$_smarty_tpl);?>
</legend>
    <?php if (Tools::getIsset('SubmitStripeRefund')) {?>
     <?php if (empty($_smarty_tpl->tpl_vars['stripe_refund_error']->value)&&Tools::getIsset('id_transaction')) {?> <div class="conf confirmation alert alert-success"><?php echo smartyTranslate(array('s'=>'Your refund was successfully processed','mod'=>'stripejs'),$_smarty_tpl);?>
</div><?php }?>
     <?php if (!empty($_smarty_tpl->tpl_vars['stripe_refund_error']->value)) {?> <div style="color: #CC0000; font-weight: bold;" class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'Error:','mod'=>'stripejs'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stripe_refund_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</div><?php }?>
    <?php }?>
    
    <?php echo smartyTranslate(array('s'=>'Already refunded:','mod'=>'stripejs'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stripe_refunded']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b><br /><br /><?php if ($_smarty_tpl->tpl_vars['stripe_refunded']->value) {?><table class="table" cellpadding="0" cellspacing="0" style="font-size: 12px;"><tr><th><?php echo smartyTranslate(array('s'=>'Date','mod'=>'stripejs'),$_smarty_tpl);?>
</th><th><?php echo smartyTranslate(array('s'=>'Amount refunded','mod'=>'stripejs'),$_smarty_tpl);?>
</th><th><?php echo smartyTranslate(array('s'=>'Status','mod'=>'stripejs'),$_smarty_tpl);?>
</th></tr>
    <?php  $_smarty_tpl->tpl_vars['stripe_refund_detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stripe_refund_detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stripe_refund_details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stripe_refund_detail']->key => $_smarty_tpl->tpl_vars['stripe_refund_detail']->value) {
$_smarty_tpl->tpl_vars['stripe_refund_detail']->_loop = true;
?>
    <tr><td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stripe_refund_detail']->value['date_add'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td><td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stripe_refund_detail']->value['amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td><td><?php if ($_smarty_tpl->tpl_vars['stripe_refund_detail']->value['status']=='paid') {?><?php echo smartyTranslate(array('s'=>'Processed','mod'=>'stripejs'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Error','mod'=>'stripejs'),$_smarty_tpl);?>
<?php }?></td></tr>
    <?php } ?>
    </table><br /></fieldset>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['trans']->value['amount']>$_smarty_tpl->tpl_vars['stripe_refunded']->value) {?>
<form action="" method="post"><?php echo smartyTranslate(array('s'=>'Refund:','mod'=>'stripejs'),$_smarty_tpl);?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['c_char']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <input type="text" value="<?php if ($_smarty_tpl->tpl_vars['isZeroDecimalCurrency']->value) {?> <?php echo round($_smarty_tpl->tpl_vars['trans']->value['amount']-$_smarty_tpl->tpl_vars['stripe_refunded']->value);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['trans']->value['amount']-$_smarty_tpl->tpl_vars['stripe_refunded']->value;?>
<?php }?>" name="stripe_amount_to_refund" style="display: inline-block; width: 60px;" /> <input type="hidden" name="id_transaction" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['trans']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><input type="submit" class="button" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Do you want to proceed to this refund?','mod'=>'stripejs'),$_smarty_tpl);?>
');" name="SubmitStripeRefund" value="<?php echo smartyTranslate(array('s'=>'Process Refund','mod'=>'stripejs'),$_smarty_tpl);?>
" /></form>
<?php }?>
<?php }?>
</div>
</div>
<script type="text/javascript">
var appendEl; 
$(document).ready(function() {
	  if ($("select[name=id_order_state]").is(":visible")) {
		  appendEl = $("select[name=id_order_state]").parents("form").after($("<div/>"));
	  } else {
		  appendEl = $("#status");
	  }
	  $('#stripe_order_details').show();
	  $('#stripe_order_details').appendTo(appendEl);
});
</script>
<?php }} ?>
