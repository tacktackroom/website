{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if isset($htmlitems) && $htmlitems}
{if $hook == 'hometabcontent'}<li>{/if}
<div id="roybanners_{$hook|escape:'htmlall':'UTF-8'}" class="roybanners" data-in-row="{if $hook == 'top'}{$roythemes.ban_row_top}{/if}{if $hook == 'hometabcontent'}{$roythemes.ban_row_pro}{/if}{if $hook == 'miniproducts'}{$roythemes.ban_row_mini}{/if}{if $hook == 'info'}{$roythemes.ban_row_info}{/if}{if $hook == 'home'}{$roythemes.ban_row_home}{/if}{if $hook == 'additionalhome'}{$roythemes.ban_row_bra}{/if}{if $hook == 'footer'}{$roythemes.ban_row_foot}{/if}{if $hook == 'footertop'}{$roythemes.ban_row_foott}{/if}{if $hook == 'footerbottom'}{$roythemes.ban_row_footb}{/if}{if $hook == 'freesection1'}{$roythemes.ban_row_s1}{/if}{if $hook == 'freesection2'}{$roythemes.ban_row_s2}{/if}{if $hook == 'freesection3'}{$roythemes.ban_row_s3}{/if}">
	<ul class="clearfix row">
		{foreach name=items from=$htmlitems item=hItem}
			{if $hook == 'left' || $hook == 'right' || $hook == 'miniproducts' || $hook == 'info' || $hook == 'additionalhome' || $hook == 'home'}
                <li class="htmlcontent-item-{$smarty.foreach.items.iteration|escape:'htmlall':'UTF-8'} col-xs-12 bview bview-first {if $hItem.hover}hover{/if}{if $hItem.fit && $hItem.fit == 1} fit_mobile{/if} {if $hItem.hide && $hItem.hide == 1}hide_mobile{/if}">
                    <div class="li-cont">
			{else}
				<li class="htmlcontent-item-{$smarty.foreach.items.iteration|escape:'htmlall':'UTF-8'} col-xs-4 bview bview-first {if $hItem.hover}hover{/if}{if $hItem.fit && $hItem.fit == 1} fit_mobile{/if} {if $hItem.hide && $hItem.hide == 1}hide_mobile{/if}">
                    <div class="li-cont">
			{/if}
				{if $hItem.url}
					<a href="{$hItem.url|escape:'htmlall':'UTF-8'}" class="item-link"{if $hItem.target == 1} onclick="return !window.open(this.href);"{/if} title="{$hItem.title|escape:'htmlall':'UTF-8'}">
				{/if}
					{if $hItem.title && $hItem.title_use}
						<h2 class="item-title-top {if $hItem.url}href{/if} {if $hItem.fit && $hItem.fit == 1}hide_mobile{/if}">{$hItem.title|escape:'htmlall':'UTF-8'}</h2>
					{/if}
					{if $hItem.fit && $hItem.fit == 1}
						<div class="fit_content">
	                        <h2 class="item-title">{$hItem.title|escape:'htmlall':'UTF-8'}</h2>
	                        <p>
		                        {if $hItem.html}
		                            {$hItem.html}
		                        {/if}
	                        </p>
	                    </div>
					{/if}
					{if $hItem.image}
						<img src="{$link->getMediaLink("`$module_dir`img/`$hItem.image`")}" class="item-img {if $hook == 'left' || $hook == 'right'}img-responsive{/if} {if $hItem.url}href{/if}" title="{$hItem.title|escape:'htmlall':'UTF-8'}" alt="{$hItem.title|escape:'htmlall':'UTF-8'}" width="{if $hItem.image_w}{$hItem.image_w|intval}{else}100%{/if}" height="{if $hItem.image_h}{$hItem.image_h|intval}{else}100%{/if}"/>
					{/if}
					{if $hItem.hover == 1}
                        <div class="mask" {if $hItem.fit && $hItem.fit == 1}hide_mobile{/if}>
                            <div class="content">
                                <h2 class="item-title">{$hItem.title|escape:'htmlall':'UTF-8'}</h2>
                                <p>
                                {if $hItem.html}
                                    {$hItem.html}
                                {/if}
                                </p>
                            </div>
                        </div>
                    {/if}
				{if $hItem.url}
					</a>
				{/if}
				</div>
			</li>
		{/foreach}
	</ul>
</div>
{if $hook == 'hometabcontent'}</li>{/if}
{/if}
