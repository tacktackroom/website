<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 15:58:36
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/royblockuserinfo/royaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13230030225e4f1d2cb5d4b8-89628426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcea28ed8c20254a7865ecc98f6d2ccf71ae0790' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ttr/themes/ayon/modules/royblockuserinfo/royaccount.tpl',
      1 => 1549148814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13230030225e4f1d2cb5d4b8-89628426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f1d2cb69556_98744123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f1d2cb69556_98744123')) {function content_5e4f1d2cb69556_98744123($_smarty_tpl) {?><!-- Block user information module NAV  -->
<div id="header_user_info" class="header_user_info">
<ul>
    <li class="notcurrent">
     <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span class="account-icon logged"><span class="acc-icon"></span><span class="word"><?php echo smartyTranslate(array('s'=>'Account','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
</span></span></a><?php } else { ?>
        <a class="login" href="javascript:void(0)" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Account','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
" id="modal_trigger" onclick="showLoginPopup()">
		<span>Sign in</span>
		</a>
		<?php }?>
    </li>
    <li class="acc-ul">
    <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
        <ul class="ui-account-ul">
        <div class="seller_shop_account effect7">
    <div class="welcome_wrapper">
 <span><?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
</span>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</a>	    
	    
    </div>	        
     <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMpMenu"),$_smarty_tpl);?>

      <div style="width: 100%;float: left;text-align: center;border-top: 1px solid #ebebeb;padding-top: 20px; margin-bottom: 50px">
      <a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
      <?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

      </a>
      </div>     
        </ul>
        <?php }?>
    </li>
</ul>
</div>
<!-- /Block usmodule NAV -->
<?php }} ?>
