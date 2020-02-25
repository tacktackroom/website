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
* Do not edit or add to this file if you wish to upgrade PrestaShop to newersend_friend_form_content
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="idTab5">
	<div id="product_comments_block_tab">
		{if $comments}
			{foreach from=$comments item=comment}
				{if $comment.content}
				<div class="comment row">
					<div class="comment_author col-sm-2">
						<div class="comment_author_infos">
							<strong>{$comment.customer_name|escape:'html':'UTF-8'}</strong>
							<em>{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</em>
						</div>
					</div> <!-- .comment_author -->
					
					<div class="comment_details col-sm-10">
                        <div class="star_content clearfix">
                            {section name="i" start=0 loop=5 step=1}
                                {if $comment.grade le $smarty.section.i.index}
                                    <div class="star"></div>
                                {else}
                                    <div class="star star_on"></div>
                                {/if}
                            {/section}
                        </div>
						<p class="title_block">
							<strong>{$comment.title}</strong>
						</p>
						<p>{$comment.content|escape:'html':'UTF-8'|nl2br}</p>
						<ul>
							{if $comment.total_advice > 0}
								<li class="useful_number">
									{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='productcomments'}
								</li>
							{/if}
							{if $is_logged}
								{if !$comment.customer_advice}
								<li>
									<button class="usefulness_btn usefulness_yes" data-is-usefull="1" data-id-product-comment="{$comment.id_product_comment}">
										<span>{l s='Useful' mod='productcomments'}</span>
									</button>
									<button class="usefulness_btn usefulness_no" data-is-usefull="0" data-id-product-comment="{$comment.id_product_comment}">
										<span>{l s='Not' mod='productcomments'}</span>
									</button>
								</li>
								{/if}
								{if !$comment.customer_report}
								<li>
									<span class="report_btn" data-id-product-comment="{$comment.id_product_comment}">
										{l s='Report' mod='productcomments'}
									</span>
								</li>
								{/if}
							{/if}
						</ul>
					</div><!-- .comment_details -->
					
				</div> <!-- .comment -->
				{/if}
			{/foreach}
			{if (!$too_early AND ($is_logged OR $allow_guests))}
			<p class="align_center">
				<a id="new_comment_tab_btn" class="btn btn-default button button-small open-comment-form" href="#new_comment_form">
					<span>{l s='Write your review' mod='productcomments'} !</span>
				</a>
			</p>
			{/if}
		{else}
			{if (!$too_early AND ($is_logged OR $allow_guests))}
			<p class="align_center">
				<a id="new_comment_tab_btn" class="btn btn-default button button-small open-comment-form" href="#new_comment_form">
					<span>{l s='Be the first to write your review' mod='productcomments'} !</span>
				</a>
			</p>
			{else}
			<p class="align_center">{l s='No customer comments for the moment.' mod='productcomments'}</p>
			{/if}
		{/if}	
	</div> <!-- #product_comments_block_tab -->
</div>

<!-- Fancybox -->
<div style="display: none;">
	<div id="new_comment_form">
		<form id="id_new_comment_form" action="#">
			<h2 class="page-subheading">
				{l s='Write a review' mod='productcomments'}
			</h2>
			<div class="row">
				{if isset($product) && $product}
					<div class="product clearfix  col-xs-12 col-sm-12">
						<img src="{$productcomment_cover_image}" height="{$mediumSize.height}" width="{$mediumSize.width}" alt="{$product->name|escape:'html':'UTF-8'}" />
						<div class="product_desc">
							<p class="product_name">
								<strong>{$product->name}</strong>
							</p>
							{$product->description_short}
						</div>
					</div>
				{/if}
				<div class="new_comment_form_content col-xs-12 col-sm-12">
					<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
						<ul></ul>
					</div>
					{if $criterions|@count > 0}
						<ul id="criterions_list">
						{foreach from=$criterions item='criterion'}
							<li>
								<label>{$criterion.name|escape:'html':'UTF-8'}:</label>
								<div class="star_content">
									<input class="star" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="1" />
									<input class="star" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="2" />
									<input class="star" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="3" checked="checked" />
									<input class="star" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="4" />
									<input class="star" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="5" />
								</div>
								<div class="clearfix"></div>
							</li>
						{/foreach}
						</ul>
					{/if}
					<input id="comment_title" name="title" type="text" placeholder="{l s='Title *' mod='productcomments'}" value=""/>
					{if $allow_guests == true && !$is_logged}
						<input id="commentCustomerName" name="customer_name" type="text" placeholder="{l s='Your name' mod='productcomments'}" value=""/>
					{/if}
					<textarea id="content" name="content" placeholder="{l s='Comment *' mod='productcomments'}"></textarea>

					<div id="new_comment_form_footer">
						<input id="id_product_comment_send" name="id_product" type="hidden" value='{$id_product_comment_form}' />
						<p class="fl required"><sup>*</sup> {l s='Required fields' mod='productcomments'}</p>
						<p class="fr">
							<button id="submitNewMessage" name="submitMessage" type="submit" class="btn btn-default button button-small">
								<span>{l s='Send' mod='productcomments'}</span>
							</button>&nbsp;
							{l s='or' mod='productcomments'}&nbsp;
							<a class="closefb" href="#">
								{l s='Cancel' mod='productcomments'}
							</a>
						</p>
						<div class="clearfix"></div>
					</div> <!-- #new_comment_form_footer -->
				</div>
			</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->
{strip}
{addJsDef productcomments_controller_url=$productcomments_controller_url|@addcslashes:'\''}
{addJsDef moderation_active=$moderation_active|boolval}
{addJsDef productcomments_url_rewrite=$productcomments_url_rewriting_activated|boolval}
{addJsDef secure_key=$secure_key}

{addJsDefL name=confirm_report_message}{l s='Are you sure you want report this comment?' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_added}<div class="nc_padding_bottom">{l s='Your comment has been added!' mod='productcomments' js=1}</div>{/addJsDefL}
{addJsDefL name=productcomment_added_moderation}{l s='Your comment has been added and will be available once approved by a moderator' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_title}<span class="nc_padding_top">{l s='New comment' mod='productcomments' js=1}</span>{/addJsDefL}
{addJsDefL name=productcomment_ok}{l s='OK' mod='productcomments' js=1}{/addJsDefL}
{/strip}