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
{include file="$tpl_dir./errors.tpl"}
{if isset($category)}
	{if $category->id AND $category->active}     
    {if isset($roythemes.nc_cat) && $roythemes.nc_cat == "1"}
    	{if $scenes || $category->description || $category->id_image}   
            <h2 class="subcategoriestitle page-heading{if (isset($subcategories) && !$products) || (isset($subcategories) && $products) || !isset($subcategories) && $products} product-listing{/if}"><span class="cat-name">{$category->name|escape:'html':'UTF-8'}{if isset($categoryNameComplement)}&nbsp;{$categoryNameComplement|escape:'html':'UTF-8'}{/if}</span>{include file="$tpl_dir./category-count.tpl"}</h1>
            <div class="content_scene_cat">
            	 {if $scenes}
                 	<div class="content_scene">
                        <!-- Scenes -->
                        {include file="$tpl_dir./scenes.tpl" scenes=$scenes}
                        {if $category->description}
                            <div class="cat_desc rte">
                            {if Tools::strlen($category->description) > 1000}
                                <div id="category_description_short">{$description_short}</div>
                                <div id="category_description_full" class="unvisible">{$category->description}</div>
                                <div class="showmore"><a href="{$link->getCategoryLink($category->id_category, $category.link_rewrite)|escape:'html':'UTF-8'}" class="lnk_more">{l s='Show More'}</a></div>
                            {else}
                                <div>{$category->description}</div>
                            {/if}
                            </div>
                        {/if}
                        </div>
                    {else}
                    <!-- Category image -->
                     {if $category->id_image}<img class="content_scene_cat_bg" src="{$link->getCatImageLink($category->link_rewrite, $category->id_image, 'category_default')|escape:'html':'UTF-8'}">{/if}

                     {if $category->description}
                         <div class="cat_desc">
                             {if Tools::strlen($category->description) > 1000}
                                 <div id="category_description_short" class="rte">{$description_short}</div>
                                 <div id="category_description_full" class="unvisible rte">{$category->description}</div>
                                 <div class="showmore"><a href="{$link->getCategoryLink($category->id_category, $category->link_rewrite)|escape:'html':'UTF-8'}" class="lnk_more">{l s='Show More'}</a></div>
                             {else}
                                 <div class="rte">{$category->description}</div>
                             {/if}
                         </div>
                     {/if}
                  {/if}
            </div>
		{/if}
    {/if}
    {if isset($roythemes.nc_subcat) && $roythemes.nc_subcat == "1"}
        {if isset($subcategories)}
            {if (isset($display_subcategories) && $display_subcategories eq 1) || !isset($display_subcategories) }
                <!-- Subcategories -->
                <div id="subcategories">
                    <ul class="clearfix">
                        {foreach from=$subcategories item=subcategory}
                            <li>
                                <div class="subcategory-image">
									<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}" title="{$subcategory.name|escape:'html':'UTF-8'}" class="img">
									{if $subcategory.id_image}
										<img class="replace-2x img-responsive" src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'category_default')|escape:'html':'UTF-8'}" alt=""  />
									{else}
										<img class="replace-2x img-responsive" src="{$img_cat_dir}default-medium_default.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />
									{/if}
									</a>
                                </div>
                                <h5><a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|truncate:25:'...'|escape:'html':'UTF-8'|truncate:350}</a></h5>
                                {if $subcategory.description}
                                    <div class="cat_desc">{$subcategory.description}</div>
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </div>
            {/if}
        {/if}        
    {/if}        
		{if $products}
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

            {assign var='lalala' value=$roythemes.nc_p_hover}

			{include file="./product-list.tpl" products=$products}

			<div class="content_sortPagiBar cat_bottom ">

                <div class="sortPagiBar clearfix ">
                    {include file="./product-sort.tpl"}
                    {include file="./product-compare.tpl"}
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
                        {if $nb_products > 1}{l s='Showing %1$d - %2$d of %3$d items' sprintf=[$productShowingStart, $productShowing, $nb_products]}{else}{l s='Showing %1$d - %2$d of 1 item' sprintf=[$productShowingStart, $productShowing]}{/if}
                    </div>
                </div>

				<div class="bottom-pagination-content clearfix {if !($nb_products > $products_per_page && $start!=$stop)}no-border{/if}">
                    {include file="./nbr-product-page.tpl"} 
                    {include file="./pagination.tpl" paginationId='bottom'}
				</div>
			</div>
			{else}
			<p class="alert alert-warning">{l s='No item listed yet in this category.'}</p>

		{/if}
	{else}
		<p class="alert alert-warning">{l s='This category is currently unavailable.'}</p>
	{/if}
{/if}