{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Search'}{/capture}

{include file="$tpl_dir./errors.tpl"}
{if !$nbProducts}
	<p class="alert alert-warning">
		{if isset($search_query) && $search_query}
			{l s='No results were found for your search'}&nbsp;"{if isset($search_query)}{$search_query|escape:'html':'UTF-8'}{/if}"
		{elseif isset($search_tag) && $search_tag}
			{l s='No results were found for your search'}&nbsp;"{$search_tag|escape:'html':'UTF-8'}"
		{else}
			{l s='Please enter a search keyword'}
		{/if}
	</p>
{else}
	{if isset($instant_search) && $instant_search}
        <p class="alert alert-info">
            {if $nbProducts == 1}{l s='%d result has been found.' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' sprintf=$nbProducts|intval}{/if}
        </p>
    {/if}
			<div class="content_sortPagiBar clearfix hidden-xs hidden-sm">
            	<div class="sortPagiBar clearfix">
            		{include file="./product-sort.tpl"}
                    {include file="./product-compare.tpl"}
					<div class="product-count hidden-xs hidden-sm">
						{if ($n*$p) < $nb_products }
							{assign var='productShowing' value=$n*$p}
						{else}
							{assign var='productShowing' value=($n*$p-$nb_products-$n*$p)*-1}
						{/if}
						{if $p==1}
							{assign var='productShowingStart' value=1}
						{else}
							{assign var='productShowingStart' value=$n*$p-$n+1}
						{/if}
						{if $nb_products > 1}{l s='Showing %1$d - %2$d of %3$d items' sprintf=[$productShowingStart, $productShowing, $nb_products]}{else}{l s='Showing %1$d - %2$d of 1 item' sprintf=[$productShowingStart, $productShowing]}{/if}
					</div>
				</div>
			</div>
	{include file="$tpl_dir./product-list.tpl" products=$search_products}
    <div class="content_sortPagiBar">
    	<div class="bottom-pagination-content clearfix">
            {if !isset($instant_search) || (isset($instant_search) && !$instant_search)}
                {include file="./nbr-product-page.tpl"}
            {/if}
        	{if !isset($instant_search) || (isset($instant_search) && !$instant_search)}
                {include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
            {/if}
        </div>
        <div class="product-count">
            {if ($n*$p) < $nb_products }
                {assign var='productShowing' value=$n*$p}
            {else}
                {assign var='productShowing' value=($n*$p-$nb_products-$n*$p)*-1}
            {/if}
            {if $p==1}
                {assign var='productShowingStart' value=1}
            {else}
                {assign var='productShowingStart' value=$n*$p-$n+1}
            {/if}
            {if $nb_products > 1}
                {l s='Showing %1$d - %2$d of %3$d items' sprintf=[$productShowingStart, $productShowing, $nb_products]}
            {else}
                {l s='Showing %1$d - %2$d of 1 item' sprintf=[$productShowingStart, $productShowing]}
            {/if}
        </div>
    </div>
{/if}
