<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:15:43
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/mpfedexshipping/views/templates/hook/adminfedexshippingdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:340703945e4f2f3f948443-53775516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c5834090cff2f5bccb5c528f07b75d1cb8354af' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/mpfedexshipping/views/templates/hook/adminfedexshippingdetails.tpl',
      1 => 1535764417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '340703945e4f2f3f948443-53775516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currency' => 0,
    'sellerFedexDetails' => 0,
    'countryName' => 0,
    'weightUnit' => 0,
    'dimensionUnit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f3f967d17_39114848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f3f967d17_39114848')) {function content_5e4f2f3f967d17_39114848($_smarty_tpl) {?>

<div class="panel clearfix">
	<div class="panel-heading">
		<i class="icon-truck"></i>
		<?php echo smartyTranslate(array('s'=>'FedEx Details','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

	</div>
	<div class="form-horizontal">
		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Handling Fee: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['handling_fee'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Address: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['address'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'City: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['city'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Zip Code: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['pin_code'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Country: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['countryName']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'pickup type: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static">
					<?php if ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['dropoff_type']=='REGULAR_PICKUP') {?>
						<?php echo smartyTranslate(array('s'=>'Regular Pickup','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['dropoff_type']=='REQUEST_COURIER') {?>
						<?php echo smartyTranslate(array('s'=>'Request Courier','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['dropoff_type']=='DROP_BOX') {?>
						<?php echo smartyTranslate(array('s'=>'Drop Box','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['dropoff_type']=='BUSINESS_SERVICE_CENTER') {?>
						<?php echo smartyTranslate(array('s'=>'Business Service Center','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['dropoff_type']=='STATION') {?>
						<?php echo smartyTranslate(array('s'=>'Station','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php }?>
				</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Packaging Type: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static">
					<?php if ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_type']=='FEDEX_ENVELOPE') {?>
						<?php echo smartyTranslate(array('s'=>'Fedex Envelope','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_type']=='FEDEX_PAK') {?>
						<?php echo smartyTranslate(array('s'=>'Fedex Pak','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_type']=='FEDEX_BOX') {?>
						<?php echo smartyTranslate(array('s'=>'Fedex Box','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_type']=='FEDEX_TUBE') {?>
						<?php echo smartyTranslate(array('s'=>'Fedex Tube','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_type']=='FEDEX_10KG_BOX') {?>
						<?php echo smartyTranslate(array('s'=>'Fedex 10kg Box','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_type']=='FEDEX_25KG_BOX') {?>
						<?php echo smartyTranslate(array('s'=>'Fedex 25kg Box','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_type']=='YOUR_PACKAGING') {?>
						<?php echo smartyTranslate(array('s'=>'Your Packaging','mod'=>'mpfedexshipping'),$_smarty_tpl);?>

					<?php }?>
				</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Dimension Unit: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static">
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['weightUnit']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['dimensionUnit']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-2"><?php echo smartyTranslate(array('s'=>'Width: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<span class="form-control-static col-lg-1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_width'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
			<label class="control-label col-lg-2"><?php echo smartyTranslate(array('s'=>'Height: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<span class="form-control-static col-lg-1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_height'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
			<label class="control-label col-lg-2"><?php echo smartyTranslate(array('s'=>'Depth: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<span class="form-control-static col-lg-1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_depth'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
			<label class="control-label col-lg-2"><?php echo smartyTranslate(array('s'=>'Weight: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<span class="form-control-static col-lg-1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['packaging_weight'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Details Add Date: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['date_add'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
		</div>

		<div class="row">
			<label class="control-label col-lg-3"><?php echo smartyTranslate(array('s'=>'Details Update Date: ','mod'=>'mpfedexshipping'),$_smarty_tpl);?>
</label>
			<div class="col-lg-9">
				<p class="form-control-static"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sellerFedexDetails']->value['date_upd'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
			</div>
		</div>
	</div>
</div><?php }} ?>
