<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12447003635e4f1d2cb07e18-71139181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f4bd72ea13fa07ce61ae64b25ed9cc6f07e4ab' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/blockcontact/nav.tpl',
      1 => 1556478481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12447003635e4f1d2cb07e18-71139181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'roythemes' => 0,
    'logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2cb0fb39_02006782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2cb0fb39_02006782')) {function content_5e4f1d2cb0fb39_02006782($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<div class="shop-phone">
        <span><span class="phone-text"><?php echo smartyTranslate(array('s'=>'Order by phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
 </span><strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong></span>
	</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['header_lay'])&&$_smarty_tpl->tpl_vars['roythemes']->value['header_lay']=="5") {?>


	<div class="special_menu" <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>onclick="showLoginPopup()"<?php }?>><a <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>href="https://tacktackroom.com/module/marketplace/addproduct"<?php }?>class="">Sell Now</a></div>
	<div class="feed_header" <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>onclick="showLoginPopup()"<?php }?>>
	<a <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>	href="https://tacktackroom.com/your-favourite-tack"<?php }?>>
			<i style="color: #d75a4a" class="icon-heart"></i>
			<div><span>Your Feed</span></div>
		</a>		
	</div>		

<?php }?>


<?php }} ?>
