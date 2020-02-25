<div id="header_user_info_mobile" class="header_user_info">
   <div class="special_menu_mobile"> <a title="{l s='Add Product' mod='marketplace'}" href="{if isset($product_list_link)}{$product_list_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'addproduct')|escape:'html':'UTF-8'}{/if}"  class="btn btn-default button button-small smaller rose_button">Sell</a>
   </div>
   {if $logged}
   <div class="middle_container">
      <p class="merri_style">{l s='Welcome' mod='royblockuserinfo'} <a  href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">{$cookie->customer_firstname} {$cookie->customer_lastname}</a></p>
   </div>
   <div class="seller_shop_account">
      <ul class="dashboard_list">
         {*
         <li class="lnk_wishlist">
            <a href="{$link->getModuleLink('advansedwishlist', 'mywishlist')}" title="My wishlists">
            <i style="color: #d75a4a" class="icon-heart"></i>
            <span>{l s='My wishlists'}</span>
            </a>
         </li>
         *}
         <li>
            <a>
            <span class="rubrique_menu">{l s='You'}</span>	</a>
            <ul class="submenu_roymobile">
               <li>
                  <a href="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" title="{l s='Information'}"><span>{l s='Your personal information'}</span></a>
               </li>
               <li class="address_menu"><a href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}" title="{l s='Addresses'}"><i class="io-map"></i><span>{l s='Your addresses'}</span></a></li>
               <li>
                  <a title="{l s='Edit your Tack Room' mod='marketplace'}" href="{$link->getModuleLink('marketplace', 'editprofile', ['reactivate' => 0])|escape:'html':'UTF-8'}">
                  <span>{l s='Edit your Tack Room' mod='marketplace'}</span>
                  </a>
               </li>
               <li>
                  <a title="{l s='View Shop' mod='marketplace'}" href="{if isset($shop_link)}{$shop_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'shopstore', ['mp_shop_name' => $name_shop|escape:'html':'UTF-8'])|escape:'html':'UTF-8'}{/if}">
                  {* 			<i class="icon-shopping-cart"></i> *}
                  <span>{l s='Your Tack Room' mod='marketplace'}</span>
                  </a>
               </li>
{*
               <li>
                  <a href="https://localhost/ttr/index.php?fc=module&module=mpfavouriteseller&controller=sellerfollowerlist"><span>{l s='The Followers' mod='marketplace'}</span></a>
               </li>
*}
            </ul>
      </ul>
      <ul class="dashboard_list">
         <li>
            <a>
            <span class="rubrique_menu">{l s='Message'}</span>		</a>
            <ul class="submenu_roymobile">
               <li><a href="{$link->getModuleLink('marketplace', 'pp_chat')|escape:'html':'UTF-8'}" title="{l s='Chat'}"><i class="io-map"></i><span>{l s='Inbox'} <span class="seller_new_messages" style="display: none;">0</span></span></a></li>
               <li><a href="{$link->getModuleLink('marketplace', 'pp_chat', ['archived' => 1])|escape:'html':'UTF-8'}" title="{l s='Chat'}"><i class="io-map"></i><span>{l s='Archived'}</span></a></li>
            </ul>
      </ul>
      <ul class="dashboard_list">
         <li>
            <a>
            <span class="rubrique_menu">{l s='Buying'}</span>		</a>
            <ul class="submenu_roymobile">
               <li>
                  <a href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" title="{l s='Orders'}"><i class="io-history"></i><span>{l s='Your Order(s)'}</span><span class="seller_new_updated_orders"></span>
                  </a>
               </li>
               {if $returnAllowed}
               <li><a href="{$link->getPageLink('order-follow', true)|escape:'html':'UTF-8'}" title="{l s='Merchandise returns'}"><i class="io-refresh"></i><span>{l s='My merchandise returns'}</span></a></li>
               {/if}
               <li class="lnk_wishlist">
                  <a href="{$link->getModuleLink('advansedwishlist', 'mywishlist')}" title="My wishlists"><i style="color: #d75a4a" class="icon-heart"></i>
                  <span>{l s='Your feeds'}</span>
                  
                  </a>
               </li>
            </ul>
      </ul>
      <ul class="dashboard_list">
         <li>
            <a>
            <span class="rubrique_menu">{l s='Selling'}</span>		</a>
            <ul class="submenu_roymobile">
               <li>
                  <a title="{l s='Add Product' mod='marketplace'}" href="{if isset($product_list_link)}{$product_list_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'addproduct')|escape:'html':'UTF-8'}{/if}">
                  <span>{l s='Add Product' mod='marketplace'}</span>
                  </a>
               </li>
               <li>
                  <a title="{l s='Product List' mod='marketplace'}" href="{if isset($product_list_link)}{$product_list_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'productlist')|escape:'html':'UTF-8'}{/if}">
                  <span>{l s='Your Listing(s)' mod='marketplace'}</span>
                  </a>
               </li>
               <li>
                  <a title="{l s='Your Order' mod='marketplace'}" href="{if isset($my_order_link)}{$my_order_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'mporder')|escape:'html':'UTF-8'}{/if}">
                  {* 			<i class="icon-gift"></i> *}
                  <span>{l s='Your Sales' mod='marketplace'}</span><span class="seller_new_orders"></span>
                  </a>
               </li>
               <li>
                  <a title="{l s='Transaction' mod='marketplace'}" href="{if isset($my_transaction_link)}{$my_transaction_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'mptransaction')|escape:'html':'UTF-8'}{/if}">
                  {* 			<i class="icon-exchange"></i> *}
                  <span>{l s='Your Transaction' mod='marketplace'}</span>
                  </a>
               </li>
               {*
               <li>
                  <a title="{l s='Payment Detail' mod='marketplace'}" href="{if isset($payment_detail_link)}{$payment_detail_link|escape:'html':'UTF-8'}{else}{$link->getModuleLink('marketplace', 'mppayment')|escape:'html':'UTF-8'}{/if}">
                     <i class="icon-money"></i> 
                     <span>{l s='Payment Detail' mod='marketplace'}</span>
               </li>
               *}
            </ul>
      </ul>
      <div style="width: 100%;float: left;text-align: center;border-top: 1px solid #ebebeb;padding-top: 20px; margin-bottom: 50px">
      <a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='royblockuserinfo'}">
      {l s='Sign out' mod='royblockuserinfo'}
      </a>
      </div>
   </div>
   {else}
   <div style="width: 100%;float:left;padding: 20px">
      <a class="log_button_mobile" href="https://attractivetackroom.com/my-account">Sign in</a><a class="log_button_mobile" href="https://attractivetackroom.com/my-account">Register</a>
   </div>
   {/if}
</div>