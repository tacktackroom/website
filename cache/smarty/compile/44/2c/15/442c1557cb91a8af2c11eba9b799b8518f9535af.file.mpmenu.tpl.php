<?php /* Smarty version Smarty-3.1.19, created on 2020-02-20 17:16:22
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/hook/mpmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4295948155e4f2f664bdf33-64387105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442c1557cb91a8af2c11eba9b799b8518f9535af' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/tacktackroom/modules/marketplace/views/templates/hook/mpmenu.tpl',
      1 => 1569779629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4295948155e4f2f664bdf33-64387105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'has_customer_an_address' => 0,
    'shop_link' => 0,
    'name_shop' => 0,
    'returnAllowed' => 0,
    'product_list_link' => 0,
    'my_order_link' => 0,
    'my_transaction_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5e4f2f66505cb0_79586024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4f2f66505cb0_79586024')) {function content_5e4f2f66505cb0_79586024($_smarty_tpl) {?>

<div class="container_block_account hidden-xs hidden-sm">
   <div class="seller_shop_account effect7">
      <h2 class="page-heading"><?php echo smartyTranslate(array('s'=>'You'),$_smarty_tpl);?>
</h2>
      
      <ul class="dashboard_list">
         <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><i class="io-personal"></i><span><?php echo smartyTranslate(array('s'=>'Your personal information'),$_smarty_tpl);?>
</span></a></li>
         <li class="address_menu"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><i class="io-map"></i><span><?php echo smartyTranslate(array('s'=>'Your addresse(s)'),$_smarty_tpl);?>
</span></a></li>
         <?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value) {?>
         <?php if (!isset($_smarty_tpl->tpl_vars['has_customer_an_address']->value)) {?> 
         <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
"><i class="io-addaddress"></i><span><?php echo smartyTranslate(array('s'=>'Add Your first address'),$_smarty_tpl);?>
</span></a></li>
         <?php }?>   
         <?php }?> 
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
      <h2 class="page-heading"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</h2>
         <ul class="dashboard_list">
         <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','pp_chat'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Chat'),$_smarty_tpl);?>
"><i class="io-map"></i><span><?php echo smartyTranslate(array('s'=>'Inbox'),$_smarty_tpl);?>
 <span class="seller_new_messages" style="display: none;">0</span></span></a></li>
         <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','pp_chat',array('archived'=>1)), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Chat'),$_smarty_tpl);?>
"><i class="io-map"></i><span><?php echo smartyTranslate(array('s'=>'Archived'),$_smarty_tpl);?>
</span></a></li>        
      </ul>      
      <h2 class="page-heading"><?php echo smartyTranslate(array('s'=>'Buying'),$_smarty_tpl);?>
</h2>
      
      <ul class="dashboard_list">
         
         
               <li>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><i class="io-history"></i>
                  <span><?php echo smartyTranslate(array('s'=>'Your Order(s)'),$_smarty_tpl);?>
</span>
                  <span class="seller_new_updated_orders"></span>
                  </a>
               </li>
               <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
               <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><i class="io-refresh"></i><span><?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>
</span></a></li>
               <?php }?>
               
               
         <li class="lnk_wishlist">
            <a 	href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('advansedwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'Your feeds','mod'=>'advansedwishlist'),$_smarty_tpl);?>
">
          <i style="color: #d75a4a" class="icon-heart"></i>
            <span><?php echo smartyTranslate(array('s'=>'Your feeds','mod'=>'advansedwishlist'),$_smarty_tpl);?>
</span>
            </a>
         </li>
      </ul>
      
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMpMyAccountMenuTop"),$_smarty_tpl);?>

      <h2 class="page-heading"><?php echo smartyTranslate(array('s'=>'Selling','mod'=>'marketplace'),$_smarty_tpl);?>
</h2>
      
      
      <ul class="dashboard_list">
         
         
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Product List','mod'=>'marketplace'),$_smarty_tpl);?>
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
                  
                  <span><?php echo smartyTranslate(array('s'=>'Your listing(s)','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  </a>
               </li>
               
         <li>
            
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Your Sales','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['my_order_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_order_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','mporder'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                  
                  <span><?php echo smartyTranslate(array('s'=>'Your Sales','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  <span class="seller_new_orders"></span>
                  </a>
               </li>
               <li>
                  <a title="<?php echo smartyTranslate(array('s'=>'Transaction','mod'=>'marketplace'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['my_transaction_link']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_transaction_link']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','mptransaction'), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                  
                  <span><?php echo smartyTranslate(array('s'=>'Transaction','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
                  </a>
               </li>
               
               
         </li>
      </ul>
      <?php if (Configuration::get('WK_MP_PRESTA_ATTRIBUTE_ACCESS')) {?>
      <li class="lnk_wishlist" >
         <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','productattribute'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Product Attributes','mod'=>'marketplace'),$_smarty_tpl);?>
">
         <i class="icon-asterisk"></i>
         <span><?php echo smartyTranslate(array('s'=>'Product Attributes','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
         </a>
      </li>
      <?php }?>
      <?php if (Configuration::get('WK_MP_PRESTA_FEATURE_ACCESS')) {?>
      <li class="lnk_wishlist" >
         <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('marketplace','productfeature'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product Features','mod'=>'marketplace'),$_smarty_tpl);?>
">
         <i class="icon-star"></i>
         <span><?php echo smartyTranslate(array('s'=>'Product Features','mod'=>'marketplace'),$_smarty_tpl);?>
</span>
         </a>
      </li>
      <?php }?>
      
      
      
   </div>
</div>
<?php }} ?>
