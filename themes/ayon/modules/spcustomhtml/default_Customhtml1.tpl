{*
 * @package SP Custom Html
 * @version 1.0.1
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @copyright (c) 2014 YouTech Company. All Rights Reserved.
 * @author MagenTech http://www.magentech.com
 *}

<!-- SP Custom Html -->
{if isset($list) && !empty($list)}
    {foreach from=$list item=item}
        {assign var="moduleclass_sfx" value=( isset( $item->params.moduleclass_sfx ) ) ?  $item->params.moduleclass_sfx : ''}
        {math equation='rand()' assign='rand'}
        {assign var='randid' value="now"|strtotime|cat:$rand}
        {assign var="uniqued" value="sp_customhtml_{$item->id_spcustomhtml}_{$randid}"}
        <div class="{$uniqued|escape:'html':'UTF-8'}
		{$moduleclass_sfx|escape:'html':'UTF-8'} spcustom_html moduletable">
            {if isset($item->params.display_title_module) && $item->params.display_title_module && !empty($item->title_module[$cookie->id_lang])}
                <h3 class="title_block">
                    {$item->title_module[$cookie->id_lang]|escape:'html':'UTF-8'}
                </h3>
            {/if}
			
			<h4 class="subtitle">
				<span></span>
			</h4>
             
            {if isset($item->content[$cookie->id_lang]) && !empty($item->content[$cookie->id_lang])}
                   {$item->content[$cookie->id_lang]}
            {/if}
        </div>
    {/foreach}
{/if}
<!-- /SP Custom Html -->

<script>// <![CDATA[
jQuery(document).ready(function($) {
		$('.content-list').owlCarousel({
			pagination: false,
			center: false,
			nav: true,
			loop: false,
			margin: 0,
			navText: [ 'prev', 'next' ],
			slideBy: 1,
			autoplay: false,
			autoplayTimeout: 2500,
			autoplayHoverPause: true,
			autoplaySpeed: 800,
			startPosition: 0,
			responsive:{
				0:{
					items:1
				},
				480:{
					items:1
				},
				768:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});
	});

// ]]></script>