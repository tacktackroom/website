<!-- Block user information module NAV  -->
<div id="header_user_info" class="header_user_info">
<ul>
    <li class="notcurrent">
     {if $is_logged} <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}"><span class="account-icon logged"><span class="acc-icon"></span><span class="word">{l s='Account' mod='royblockuserinfo'}</span></span></a>{else}
        <a class="login" href="javascript:void(0)" rel="nofollow" title="{l s='Account' mod='royblockuserinfo'}" id="modal_trigger" onclick="showLoginPopup()">
		<span>Sign in</span>
		</a>
		{/if}
    </li>
    <li class="acc-ul">
    {if $is_logged}
        <ul class="ui-account-ul">
        <div class="seller_shop_account effect7">
    <div class="welcome_wrapper">
 <span>{l s='Welcome' mod='royblockuserinfo'}</span>
                <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">{$cookie->customer_firstname} {$cookie->customer_lastname}</a>	    
	    
    </div>	        
     {hook h="displayMpMenu"}
      <div style="width: 100%;float: left;text-align: center;border-top: 1px solid #ebebeb;padding-top: 20px; margin-bottom: 50px">
      <a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='royblockuserinfo'}">
      {l s='Sign out' mod='royblockuserinfo'}
      </a>
      </div>     
        </ul>
        {/if}
    </li>
</ul>
</div>
<!-- /Block usmodule NAV -->
