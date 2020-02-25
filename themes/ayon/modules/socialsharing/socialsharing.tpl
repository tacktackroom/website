{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $PS_SC_TWITTER || $PS_SC_FACEBOOK || $PS_SC_GOOGLE || $PS_SC_PINTEREST}

		{if $PS_SC_TWITTER}
		<li>
			<button data-type="twitter" type="button" class="btn-twitter social-sharing">
				<i class="icon-twitter"></i> <span>{l s="Tweet" mod='socialsharing'}</span>
			</button>
		</li>
		{/if}
		{if $PS_SC_FACEBOOK}
		<li>
			<button data-type="facebook" type="button" class="btn-facebook social-sharing">
				<i class="icon-facebook"></i> <span>{l s="Share" mod='socialsharing'}</span>
			</button>
		</li>
		{/if}
		{if $PS_SC_GOOGLE}
		<li>
			<button data-type="google-plus" type="button" class="btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> <span>{l s="Google+" mod='socialsharing'}</span>
			</button>
		</li>
		{/if}
		{if $PS_SC_PINTEREST}
		<li>
			<button data-type="pinterest" type="button" class="btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> <span>{l s="Pinterest" mod='socialsharing'}</span>
			</button>
		</li>
		{/if}
{/if}