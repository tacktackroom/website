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
		 clearfix {$moduleclass_sfx|escape:'html':'UTF-8'} spcustom_html">
            {if isset($item->params.display_title_module) && $item->params.display_title_module && !empty($item->title_module[$cookie->id_lang])}
                <h3 class="title_block">
                    {$item->title_module[$cookie->id_lang]|escape:'html':'UTF-8'}
                </h3>
            {/if}
             
            {if isset($item->content[$cookie->id_lang]) && !empty($item->content[$cookie->id_lang])}
                   {$item->content[$cookie->id_lang]}
            {/if}
        </div>
    {/foreach}
{/if}
<!-- /SP Custom Html -->


{if $item->id_spcustomhtml == 10}
	<script>// <![CDATA[
	jQuery(document).ready(function($) {
		$(".faqs .item .item-title").click(function(){
			//slide up all the link lists
			$(".faqs .item .item-content").slideUp();
			$(".faqs .item").removeClass('active');
			//slide down the link list below the h3 clicked - only if its closed
			if(!$(this).next().is(":visible"))
			{
				$(this).next().slideDown();
				$(this).next().parents('.faqs .item').addClass('active');
			}
		})
	});

// ]]></script>
{/if}

{if $item->id_spcustomhtml == 11}
	<script>// <![CDATA[
	jQuery(document).ready(function($) {
			$('.testimonial-items').owlCarousel({
				pagination: false,
				center: false,
				nav: true,
				loop: false,
				dots: false,
				margin: 0,
				navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
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
{/if}

{if $item->id_spcustomhtml == 16}
	<script>// <![CDATA[
	jQuery(document).ready(function($) {
			$('.testimonials4').owlCarousel({
				pagination: false,
				center: false,
				nav: true,
				loop: false,
				dots: true,
				margin: 0,
				navText: [ '<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>' ],
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
{/if}