<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 16:38:28
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/royblockuserinfo/roymobile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19100610775e4f26841aa528-10918543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a60237a70ef4659cc72904385a2924bb36bccb68' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/themes/ayon/modules/royblockuserinfo/roymobile.tpl',
      1 => 1569779967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19100610775e4f26841aa528-10918543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_list_link' => 0,
    'link' => 0,
    'logged' => 0,
    'cookie' => 0,
    'shop_link' => 0,
    'name_shop' => 0,
    'returnAllowed' => 0,
    'my_order_link' => 0,
    'my_transaction_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f26841d3480_63981403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f26841d3480_63981403')) {function content_5e4f26841d3480_63981403($_smarty_tpl) {?><div id="header_user_info_mobile" class="header_user_info">
   <div class="special_menu_mobile"> <a title="<?php echo smartyTranslate(array('s'=>'Add Product','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['product_list_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_list_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','addproduct'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"  class="btn btn-default button button-small smaller rose_button">Sell</a>
   </div>
   <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
   <div class="middle_container">
      <p class="merri_style"><?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
 <a  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</a></p>
   </div>
   <div class="seller_shop_account">
      <ul class="dashboard_list">
         
         <li>
            <a>
            <span class="rubrique_menu"><?php echo smartyTranslate(array('s'=>'You'),$_smarty_tpl);?>
</span>	</a>
            <ul class="submenu_roymobile">
               <li>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</span></a>
               </li>
               <li class="address_menu"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><i class="io-map"></i><span><?php echo smartyTranslate(array('s'=>'Your addresses'),$_smarty_tpl);?>
</span></a></li>
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Edit your Tack Room','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','editprofile',array('reactivate'=>0)), ENT_QUOTES, 'UTF-8', true);?>
">
                  <span><?php echo smartyTranslate(array('s'=>'Edit your Tack Room','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  </a>
               </li>
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'View Shop','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['shop_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','shopstore',array('mp_shop_name'=>htmlspecialchars($_smarty_tpl->tpl_vars['name_shop']->value, ENT_QUOTES, 'UTF-8', true))), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                  
                  <span><?php echo smartyTranslate(array('s'=>'Your Tack Room','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  </a>
               </li>

            </ul>
      </ul>
      <ul class="dashboard_list">
         <li>
            <a>
            <span class="rubrique_menu"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</span>		</a>
            <ul class="submenu_roymobile">
               <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','pp_chat'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Chat'),$_smarty_tpl);?>
"><i class="io-map"></i><span><?php echo smartyTranslate(array('s'=>'Inbox'),$_smarty_tpl);?>
 <span class="seller_new_messages" style="display: none;">0</span></span></a></li>
               <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','pp_chat',array('archived'=>1)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Chat'),$_smarty_tpl);?>
"><i class="io-map"></i><span><?php echo smartyTranslate(array('s'=>'Archived'),$_smarty_tpl);?>
</span></a></li>
            </ul>
      </ul>
      <ul class="dashboard_list">
         <li>
            <a>
            <span class="rubrique_menu"><?php echo smartyTranslate(array('s'=>'Buying'),$_smarty_tpl);?>
</span>		</a>
            <ul class="submenu_roymobile">
               <li>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><i class="io-history"></i><span><?php echo smartyTranslate(array('s'=>'Your Order(s)'),$_smarty_tpl);?>
</span><span class="seller_new_updated_orders"></span>
                  </a>
               </li>
               <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
               <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><i class="io-refresh"></i><span><?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>
</span></a></li>
               <?php }?>
               <li class="lnk_wishlist">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('advansedwishlist','mywishlist');?>
" title="My wishlists"><i style="color: #d75a4a" class="icon-heart"></i>
                  <span><?php echo smartyTranslate(array('s'=>'Your feeds'),$_smarty_tpl);?>
</span>
                  
                  </a>
               </li>
            </ul>
      </ul>
      <ul class="dashboard_list">
         <li>
            <a>
            <span class="rubrique_menu"><?php echo smartyTranslate(array('s'=>'Selling'),$_smarty_tpl);?>
</span>		</a>
            <ul class="submenu_roymobile">
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Add Product','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['product_list_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_list_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','addproduct'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                  <span><?php echo smartyTranslate(array('s'=>'Add Product','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  </a>
               </li>
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Product List','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['product_list_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_list_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','productlist'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                  <span><?php echo smartyTranslate(array('s'=>'Your Listing(s)','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  </a>
               </li>
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Your Order','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['my_order_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_order_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','mporder'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                  
                  <span><?php echo smartyTranslate(array('s'=>'Your Sales','mod'=>'marketplace'),$_smarty_tpl);?>
</span><span class="seller_new_orders"></span>
                  </a>
               </li>
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Transaction','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['my_transaction_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_transaction_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','mptransaction'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                  
                  <span><?php echo smartyTranslate(array('s'=>'Your Transaction','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  </a>
               </li>
               
            </ul>
      </ul>
      <div style="width: 100%;float: left;text-align: center;border-top: 1px solid #ebebeb;padding-top: 20px; margin-bottom: 50px">
      <a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>
">
      <?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'royblockuserinfo'),$_smarty_tpl);?>

      </a>
      </div>
   </div>
   <?php } else { ?>
   <div style="width: 100%;float:left;padding: 20px">
      <a class="log_button_mobile" href="https://attractivetackroom.com/my-account">Sign in</a><a class="log_button_mobile" href="https://attractivetackroom.com/my-account">Register</a>
   </div>
   <?php }?>
</div><?php }} ?>
