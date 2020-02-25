<!-- Block user information module NAV  -->
<div id="header_user_info">
<ul>
{if $is_logged}
	<li>
		<span class="userwelcome">{l s='Welcome,' mod='blockuserinfo'}</span> <span class="usercustomer">{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
	</li>
	{else}
		<li>
			<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Login to your customer account' mod='blockuserinfo'}">
				{l s='Sign in' mod='blockuserinfo'}
			</a>
		</li>
{/if}
    <li>
        <span class="account-label"></span>
    </li>
    <li>
        <span class="email-label"></span>
    </li>
    <ul id="ui-account" class="ui-account-ul">
        <li>
            <a href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" title="{l s='My orders' mod='blockmyaccount'}">
                {l s='My orders' mod='blockmyaccount'}
            </a>
        </li>
        {if $returnAllowed}
            <li>
                <a href="{$link->getPageLink('order-follow', true)|escape:'html':'UTF-8'}" title="{l s='My merchandise returns' mod='blockmyaccount'}">
                    {l s='My merchandise returns' mod='blockmyaccount'}
                </a>
            </li>
        {/if}
        <li>
            <a href="{$link->getPageLink('order-slip', true)|escape:'html':'UTF-8'}" title="{l s='My credit slips' mod='blockmyaccount'}">	{l s='My credit slips' mod='blockmyaccount'}
            </a>
        </li>
        <li>
            <a href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}" title="{l s='My addresses' mod='blockmyaccount'}">
                {l s='My addresses' mod='blockmyaccount'}
            </a>
        </li>
        <li>
            <a href="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" title="{l s='My personal info' mod='blockmyaccount'}">
                {l s='My personal info' mod='blockmyaccount'}
            </a>
        </li>
        {if $voucherAllowed}
            <li>
                <a href="{$link->getPageLink('discount', true)|escape:'html':'UTF-8'}" title="{l s='My vouchers' mod='blockmyaccount'}">
                    {l s='My vouchers' mod='blockmyaccount'}
                </a>
            </li>
        {/if}
        <li>
            <a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
                {l s='Sign out' mod='blockuserinfo'}
            </a>
        </li>
                <li>
            <a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
                {l s='Sign out' mod='blockuserinfo'}
            </a>
        </li>
    </ul>

</ul>
</div>
<!-- /Block usmodule NAV -->

