<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:359168745e4f2683c9a419-01191916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb3bde0258c928590ad5af9237305ce62e792d23' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/blockcontact/nav.tpl',
      1 => 1556478481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359168745e4f2683c9a419-01191916',
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
  'unifunc' => 'content_5e4f2683ca17e3_64088030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683ca17e3_64088030')) {function content_5e4f2683ca17e3_64088030($_smarty_tpl) {?>

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
