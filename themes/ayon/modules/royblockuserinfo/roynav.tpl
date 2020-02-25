<!-- Block user information module NAV  -->
<div class="account_top">
<div class="header_user_info">
<ul>
{if $is_logged}
	<li>
		<span class="userwelcome">{l s='Welcome in your Tack Room,' mod='royblockuserinfo'}</span> <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}"><span class="usercustomer">{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
	</li>
    <li>
        <a class="myaccount" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='View your account' mod='royblockuserinfo'}">
            {l s='My account' mod='royblockuserinfo'}
        </a>
    </li>
{else}
    <li>
        <a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Login to your customer account' mod='royblockuserinfo'}">
            {l s='Sign in' mod='royblockuserinfo'}
        </a>
    </li>
{/if}
    <li class="current">
        <span class="account-label {if $is_logged}logged{/if}"></span>
    </li>
    <li class="acc-ul">
        <ul class="ui-account-ul">
            {if $is_logged}
            <li>
                <a href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" title="{l s='My orders' mod='royblockuserinfo'}">
                    {l s='My orders' mod='royblockuserinfo'}
                </a>
            </li>
            {if $returnAllowed}
                <li>
                    <a href="{$link->getPageLink('order-follow', true)|escape:'html':'UTF-8'}" title="{l s='My merchandise returns' mod='royblockuserinfo'}">
                        {l s='My merchandise returns' mod='royblockuserinfo'}
                    </a>
                </li>
            {/if}
            <li>
                <a href="{$link->getPageLink('order-slip', true)|escape:'html':'UTF-8'}" title="{l s='My credit slips' mod='royblockuserinfo'}">	{l s='My credit slips' mod='royblockuserinfo'}
                </a>
            </li>
            <li>
                <a href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}" title="{l s='My addresses' mod='royblockuserinfo'}">
                    {l s='My addresses' mod='royblockuserinfo'}
                </a>
            </li>
            <li>
                <a href="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" title="{l s='My personal info' mod='royblockuserinfo'}">
                    {l s='My personal info' mod='royblockuserinfo'}
                </a>
            </li>
            {if $voucherAllowed}
                <li>
                    <a href="{$link->getPageLink('discount', true)|escape:'html':'UTF-8'}" title="{l s='My promo codes' mod='royblockuserinfo'}">
                        {l s='My promo codes' mod='royblockuserinfo'}
                    </a>
                </li>
            {/if}
            <li>
                <a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='royblockuserinfo'}">
                    {l s='Sign out' mod='royblockuserinfo'}
                </a>
            </li>
                        <li>
                <a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='royblockuserinfo'}">
                    {l s='Sign out' mod='royblockuserinfo'}
                </a>
            </li>
            {if isset($roythemes.nc_pos) && $roythemes.nc_pos == "1"}
            <li class="acc_sub">
                <div>{hook h="displayAccSub"}</div>
            </li>
            {/if}
            {else}
                <li class="unlogged">
                    <p>{l s='You should' mod='royblockuserinfo'} <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Login to your customer account' mod='royblockuserinfo'}">{l s='login' mod='royblockuserinfo'}</a> {l s='to your customer account.' mod='royblockuserinfo'}</p>
                    <p>{l s='Or' mod='royblockuserinfo'} <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Register new customer account' mod='royblockuserinfo'}">{l s='register' mod='royblockuserinfo'}</a> {l s='new account.' mod='royblockuserinfo'}</p>
                </li>
                {if isset($roythemes.nc_pos) && $roythemes.nc_pos == "1"}
                <li class="acc_sub margin_unlogged">
                    <div>{hook h="displayAccSub"}</div>
                </li>
                {/if}
            {/if}
        </ul>
    </li>
</ul>
</div>
</div>
<!-- /Block usmodule NAV -->
