<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:27
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/royblockuserinfo/roynav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20317275305e4f2683ca7888-50918843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb813e39a858199a8a50aa315fa2f9d8f796de0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/royblockuserinfo/roynav.tpl',
      1 => 1565130600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20317275305e4f2683ca7888-50918843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'roythemes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2683cc8911_92646128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2683cc8911_92646128')) {function content_5e4f2683cc8911_92646128($_smarty_tpl) {?><!-- Block user information module NAV  -->
<div class="account_top">
<div class="header_user_info">
<ul>
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<li>
		<span class="userwelcome"><?php echo smartyTranslate(array('s'=>'Welcome in your Tack Room,','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
</span> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span class="usercustomer"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	</li>
    <li>
        <a class="myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'View your account','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'My account','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

        </a>
    </li>
<?php } else { ?>
    <li>
        <a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

        </a>
    </li>
<?php }?>
    <li class="current">
        <span class="account-label <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>logged<?php }?>"></span>
    </li>
    <li class="acc-ul">
        <ul class="ui-account-ul">
            <?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
            <li>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My orders','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'My orders','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
                <li>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                    </a>
                </li>
            <?php }?>
            <li>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">	<?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                </a>
            </li>
            <li>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                </a>
            </li>
            <li>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                <li>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My promo codes','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>'My promo codes','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                    </a>
                </li>
            <?php }?>
            <li>
                <a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                </a>
            </li>
                        <li>
                <a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

                </a>
            </li>
            <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pos'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pos']=="1") {?>
            <li class="acc_sub">
                <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAccSub"),$_smarty_tpl);?>
</div>
            </li>
            <?php }?>
            <?php } else { ?>
                <li class="unlogged">
                    <p><?php echo smartyTranslate(array('s'=>'You should','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'login','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'to your customer account.','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
</p>
                    <p><?php echo smartyTranslate(array('s'=>'Or','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Register new customer account','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'register','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'new account.','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
</p>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['roythemes']->value['nc_pos'])&&$_smarty_tpl->tpl_vars['roythemes']->value['nc_pos']=="1") {?>
                <li class="acc_sub margin_unlogged">
                    <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAccSub"),$_smarty_tpl);?>
</div>
                </li>
                <?php }?>
            <?php }?>
        </ul>
    </li>
</ul>
</div>
</div>
<!-- /Block usmodule NAV -->
<?php }} ?>
