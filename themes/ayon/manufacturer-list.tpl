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

{capture name=path}{l s='Manufacturers:'}{/capture}

<h1 class="page-heading product-listing">
	{l s='Brands'}
    {strip}
		<span class="heading-counter">
			{if $nbManufacturers == 0}{l s='There are no manufacturers.'}
			{else}
				{if $nbManufacturers == 1}
					{l s='There is 1 brand'}
				{else}
					{l s='There are %d brands' sprintf=$nbManufacturers}
				{/if}
			{/if}
		</span>
    {/strip}
</h1>
{if isset($errors) AND $errors}
	{include file="$tpl_dir./errors.tpl"}
{else}
	{if $nbManufacturers > 0}
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

        {assign var='nbItemsPerLine' value=5}
        {assign var='nbItemsPerLineTablet' value=5}
        {assign var='nbLi' value=$manufacturers|@count}
        {math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
        {math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}

		<ul id="manufacturers_list" class="list row">
			{foreach from=$manufacturers item=manufacturer name=manufacturers}
	        	{math equation="(total%perLine)" total=$smarty.foreach.manufacturers.total perLine=$nbItemsPerLine assign=totModulo}
	            {math equation="(total%perLineT)" total=$smarty.foreach.manufacturers.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
	            {if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
	            {if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
				<li>
{* 				<li class="{if $smarty.foreach.manufacturers.iteration%$nbItemsPerLine == 0} last-in-line{elseif $smarty.foreach.manufacturers.iteration%$nbItemsPerLine == 1} first-in-line{/if} {if $smarty.foreach.manufacturers.iteration > ($smarty.foreach.manufacturers.total - $totModulo)}last-line{/if} {if $smarty.foreach.manufacturers.iteration%$nbItemsPerLineTablet == 0}last-item-of-tablet-line{elseif $smarty.foreach.manufacturers.iteration%$nbItemsPerLineTablet == 1}first-item-of-tablet-line{/if} {if $smarty.foreach.manufacturers.iteration > ($smarty.foreach.manufacturers.total - $totModuloTablet)}last-tablet-line{/if}{if $smarty.foreach.manufacturers.last} item-last{/if} col-xs-6"> *}				
					<div class="mansup-container">
						<div class="row"> 
			            	<div class="">
                                <h3>
                                    {if $manufacturer.nb_products > 0}
                                    <a
                                            class="product-name"
                                            href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}">
                                        {/if}
                                        {$manufacturer.name|truncate:60:'...'|escape:'html':'UTF-8'}
                                        {if $manufacturer.nb_products > 0}
                                    </a>
                                    {/if}
                                </h3>
								<div class="logo">
									{if $manufacturer.nb_products > 0}
										<a
										class="lnk_img" 
										href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}" 
										title="{$manufacturer.name|escape:'html':'UTF-8'}" >
									{/if}
										{if ($manufacturer.image!="en-default")}<img src="{$img_manu_dir}{$manufacturer.image|escape:'html':'UTF-8'}-medium_default.jpg" alt="" />{/if}
									{if $manufacturer.nb_products > 0}
										</a>
									{/if}
								</div> <!-- .logo -->
                                <div class="description rte">
                                    {$manufacturer.short_description}
                                </div>
							</div> <!-- .left-side -->

{*
							<div class="right-side col-xs-12 col-sm-4">
			                	<div class="right-side-content">
			                        <p class="product-counter">
			                            {if $manufacturer.nb_products > 0}
			                            	<a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}">
			                            {/if}
			                            {if $manufacturer.nb_products == 1}
			                            	{l s='%d product' sprintf=$manufacturer.nb_products|intval}
			                            {else}
			                            	{l s='%d products' sprintf=$manufacturer.nb_products|intval}
			                            {/if}
			                            {if $manufacturer.nb_products > 0}
			                        		</a>
			                        	{/if}
			                        </p>
				                    {if $manufacturer.nb_products > 0}
				                        <a 
				                        class="btn btn-default button exclusive-medium" 
				                        href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}">
				                        	<span>
				                        		{l s='view products'} <i class="icon-chevron-right right"></i>
				                        	</span>
				                        </a>
				                    {/if}
			                    </div>
			                </div>
*} <!-- .right-side -->
			            </div>
			        </div>
				</li>
			{/foreach}
		</ul>
        <div class="content_sortPagiBar">
        	<div class="bottom-pagination-content clearfix">
                {include file="./nbr-product-page.tpl"}
				{include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
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
{/if}
