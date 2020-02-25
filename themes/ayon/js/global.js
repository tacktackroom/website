/*
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
*/
//global variables
var responsiveflag = false;
function hideIcon(self) {
    self.style.backgroundImage = 'none';
}
$(document).ready(function(){
	highdpiInit();
	responsiveResize();
	$(window).resize(responsiveResize);
	if (navigator.userAgent.match(/Android/i))
	{
		var viewport = document.querySelector('meta[name="viewport"]');
		viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
		window.scrollTo(0, 1);
	}
	blockHover();
	if (typeof quickView !== 'undefined' && quickView)
		quick_view();
	dropDown();

	if (typeof page_name != 'undefined' && !in_array(page_name, ['index', 'product']))
	{
		bindGrid();

 		$(document).on('change', '.selectProductSort', function(e){
			if (typeof request != 'undefined' && request)
				var requestSortProducts = request;
 			var splitData = $(this).val().split(':');
			if (typeof requestSortProducts != 'undefined' && requestSortProducts)
				document.location.href = requestSortProducts + ((requestSortProducts.indexOf('?') < 0) ? '?' : '&') + 'orderby=' + splitData[0] + '&orderway=' + splitData[1];
    	});

		$(document).on('change', 'select[name="n"]', function(){
			$(this.form).submit();
		});

		$(document).on('change', 'select[name="manufacturer_list"], select[name="supplier_list"]', function(){
			autoUrl($(this).attr('id'), '');
		});

		$(document).on('change', 'select[name="currency_payement"]', function(){
			setCurrency($(this).val());
		});
	}

	$(document).on('click', '.back', function(e){
		e.preventDefault();
		history.back();
	});
	
	jQuery.curCSS = jQuery.css;
	if (!!$.prototype.cluetip)
		$('a.cluetip').cluetip({
			local:true,
			cursor: 'pointer',
			dropShadow: false,
			dropShadowSteps: 0,
			showTitle: false,
			tracking: true,
			sticky: false,
			mouseOutClose: true,
			fx: {             
		    	open:       'fadeIn',
		    	openSpeed:  'fast'
			}
		}).css('opacity', 0.8);

	if (typeof(FancyboxI18nClose) !== 'undefined' && typeof(FancyboxI18nNext) !== 'undefined' && typeof(FancyboxI18nPrev) !== 'undefined' && !!$.prototype.fancybox)
		$.extend($.fancybox.defaults.tpl, {
			closeBtn : '<a title="' + FancyboxI18nClose + '" class="fancybox-item fancybox-close" href="javascript:;"></a>',
			next     : '<a title="' + FancyboxI18nNext + '" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
			prev     : '<a title="' + FancyboxI18nPrev + '" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		});
		
	// Close Alert messages
	$(".alert.alert-danger").on('click', this, function(e){
		if (e.offsetX >= 16 && e.offsetX <= 39 && e.offsetY >= 16 && e.offsetY <= 34)
			$(this).fadeOut();
	});
	
    updateCounters();

    if (typeof $.fn.simpleMask !== "undefined") {
    	$('.tel_us_format').simpleMask( { 'mask': '(###) ###-####', 'nextInput': true } );
    }

    if (new_rders > 0 || new_updated_orders > 0 || new_chats > 0 || needs_legal_address) {
    	$('#header_user_info li.notcurrent .account-icon.logged').prepend('<span class="seller_notif_icon">'+ (new_rders+new_updated_orders+new_chats+(needs_legal_address ? 1 : 0)) +'</span>');
    }

    if (new_rders > 0) {
    	$('.seller_new_orders').html( new_rders ).show('slow');
//     	$('<li><a href="'+ sales_page +'"><span class="seller_new_orders_top">New sales <span>'+ new_rders +'</span></span></a></li>').insertAfter('#header_user_info li.acc-ul ul li.lnk_wishlist');
    }

    if (new_updated_orders > 0) {
    	$('.seller_new_updated_orders').html( new_updated_orders ).show('slow');
//     	$('<li><a href="'+ order_histody_page +'"><span class="seller_new_updated_orders_top">New orders <span>'+ new_updated_orders +'</span></span></a></li>').insertAfter('#header_user_info li.acc-ul ul li.lnk_wishlist');
    }

    if (new_chats > 0) {
    	$('.seller_new_messages').html( new_chats ).show('slow');
//     	$('<li><a href="'+ messages_page +'"><span class="seller_new_updated_orders_top">New messages <span>'+ new_chats +'</span></span></a></li>').insertAfter('#header_user_info li.acc-ul ul li.lnk_wishlist');
    }

    if (needs_legal_address) {
    	$('.seller_needs_address').html( 1 ).show('slow');
    	$('<li><a href="'+ addresses_page +'"><span class="seller_new_updated_orders_top" style="color:red;">Fill out legal address for payout</span></a></li>').insertAfter('.address_menu');    	
    	
    }
});

function updateCounters() {
	$(".countcontainer").each(function(e) {		
		var $roycountdown = $(this).find(".roycountdown");
		var $roycount = $roycountdown.find(".roycount");
		var $dataspecificpriceto = $roycount.attr('data-specific-price-to');
		if ($roycountdown.length) {
			$roycountdown.county({
				endDateTime: new Date($dataspecificpriceto.replace(/-/g, "/")) , reflection: false, animation: 'none', theme: 'black',
				titleDays:$roycount.data('days'),titleHours:$roycount.data('hours'),titleMinutes:$roycount.data('minutes'),titleSeconds:$roycount.data('seconds')
			});
		}
	});
}

function highdpiInit()
{
	if (typeof highDPI === 'undefined')
		return;
	if(highDPI && $('.replace-2x').css('font-size') == "1px")
	{
		var els = $("img.replace-2x").get();
		for(var i = 0; i < els.length; i++)
		{
			src = els[i].src;
			extension = src.substr( (src.lastIndexOf('.') +1) );
			src = src.replace("." + extension, "2x." + extension);

			var img = new Image();
			img.src = src;
			img.height != 0 ? els[i].src = src : els[i].src = els[i].src;
		}
	}
}
// Used to compensante Chrome/Safari bug (they don't care about scroll bar for width)
function scrollCompensate()
{
	var inner = document.createElement('p');
	inner.style.width = "100%";
	inner.style.height = "200px";

	var outer = document.createElement('div');
	outer.style.position = "absolute";
	outer.style.top = "0px";
	outer.style.left = "0px";
	outer.style.visibility = "hidden";
	outer.style.width = "200px";
	outer.style.height = "150px";
	outer.style.overflow = "hidden";
	outer.appendChild(inner);

	document.body.appendChild(outer);
	var w1 = inner.offsetWidth;
	outer.style.overflow = 'scroll';
	var w2 = inner.offsetWidth;
	if (w1 == w2) w2 = outer.clientWidth;

	document.body.removeChild(outer);

	return (w1 - w2);
}

function responsiveResize()
{
	compensante = scrollCompensate();
	if (($(window).width()+scrollCompensate()) <= 991 && responsiveflag == false)
	{
		accordion('enable');
		accordionFooter('enable');
		$('.cat_top .sortPagiBar').addClass('mobile_switch')
		$('.cat_bottom .sortPagiBar').addClass('mobile_switch')
		responsiveflag = true;

	}
	else if (($(window).width()+scrollCompensate()) >= 992)
	{
		accordion('disable');
		accordionFooter('disable');
		$('.cat_top .sortPagiBar').removeClass('mobile_switch')
		$('.cat_bottom .sortPagiBar').removeClass('mobile_switch')
		responsiveflag = false;
		if (typeof bindUniform !=='undefined')
			bindUniform();
	}
}


function blockHover(status)
{
	$(document).off('mouseenter').on('mouseenter', '.product_list.grid li.ajax_block_product .product-container', function(e){

		if ('ontouchstart' in document.documentElement)
			return;
		if ($('body').find('.container').width() == 1170)
		{
			var pcHeight = $(this).parent().outerHeight();
			var pcPHeight = $(this).parent().find('.button-container').outerHeight() + $(this).parent().find('.comments_note').outerHeight() + $(this).parent().find('.functional-buttons').outerHeight();
		}
	});

	$(document).off('mouseleave').on('mouseleave', '.product_list.grid li.ajax_block_product .product-container', function(e){
	});
}


function quick_view()
{
	$(document).on('click', '.quick-view:visible', function(e) 
	{
		e.preventDefault();
//		var url = this.rel;
		var url = this.href;
		if (url.indexOf('?') != -1)
			url += '&';
		else
			url += '?';

		if (!!$.prototype.fancybox)
			$.fancybox({
				'padding':  0,
				'width':    1087,
				'height':   610,
				'type':     'iframe',
				'href':     url + 'content_only=1'
			});
	});
}

function bindGrid()
{
	var storage = false;
	if (typeof(getStorageAvailable) !== 'undefined') {
		storage = getStorageAvailable();
	}
	if (!storage) {
		return;
	}

	var view = $.totalStorage('display');

	if (!view && (typeof displayList != 'undefined') && displayList)
		view = 'list';

	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');

	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
    	updateCounters();

	});

	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');
    	updateCounters();

	});

}
function display(view)
{
    var plGLswitcher = $(".display_switcher"),
    plGridLayout = parseInt(plGLswitcher.attr('data-gridlay'));

	if (view == 'list')
	{
		if (plGridLayout == '1' || plGridLayout == '2' || plGridLayout == '3') {
			$('ul.product_list').removeClass('grid').addClass('list row');
			$('.product_list > li').removeClass('col-xs-6 col-sm-6 col-md-4').addClass('col-xs-6');
			$('.product_list > li').each(function(index, element) {
				html = '';
				html = '<div class="product-container"><div class="row">';
					html += '<div class="left-block col-xs-4 col-xs-5 col-md-4">' + $(element).find('.left-block').html() + '</div>';
					html += '<div class="center-block col-xs-4 col-xs-7 col-md-4">';
						html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
	                    html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
						var rating = $(element).find('.comments_note').html(); // check : rating
						if (rating != null) { 
							html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
						}
						html += '<p class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
						var colorList = $(element).find('.color-list-container').html();
						if (colorList != null) {
							html += '<div class="color-list-container" style="text-align:left">'+ colorList +'</div>';
						}
						var availability = $(element).find('.availability').html();	// check : catalog mode is enabled
						if (availability != null) {
							html += '<span class="availability">'+ availability +'</span>';
						}
	                    html += '<div class="functional-buttons clearfix">' + $(element).find('.functional-buttons').html() + '</div>';
					html += '</div>';	
					html += '<div class="right-block col-xs-4 col-xs-7 col-md-4">';
	                    html += '<div class="button-wrapper">';
						var price = $(element).find('.content_price').html();       // check : catalog mode is enabled
						if (price != null) { 
							html += '<div class="content_price">'+ price + '</div>';
						}
						html += '<div class="button-container">'+ $(element).find('.button-container').html() +'</div>';
	                    html += '</div>';
					html += '</div>';
				html += '</div>';
			$(element).html(html);
			});		
			$('.display').find('li#list').addClass('selected');
			$('.display').find('li#grid').removeAttr('class');
			$.totalStorage('display', 'list');
		}
		if (plGridLayout == '4')
		{
			$('ul.product_list').removeClass('grid').addClass('list row');
			$('.product_list > li').removeClass('col-xs-6 col-sm-6 col-md-4').addClass('col-xs-6');
			$('.product_list > li').each(function(index, element) {
				html = '';
				html = '<div class="product-container"><div class="row">';
					html += '<div class="left-block col-xs-4 col-xs-5 col-md-4">' + $(element).find('.left-block').html() + '</div>';                   


					html += '<div class="center-block col-xs-4 col-xs-7 col-md-4">';
						html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
	                    html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
						var rating = $(element).find('.comments_note').html(); // check : rating
						if (rating != null) { 
							html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
						}
						html += '<p class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
						var price = $(element).find('.content_price').html();       // check : catalog mode is enabled
						if (price != null) { 
							html += '<div class="content_price">'+ price + '</div>';
						}
						var colorList = $(element).find('.color-list-container').html();
						if (colorList != null) {
							html += '<div class="color-list-container" style="text-align:left">'+ colorList +'</div>';
						}
						var availability = $(element).find('.availability').html();	// check : catalog mode is enabled
						if (availability != null) {
							html += '<span class="availability">'+ availability +'</span>';
						}
	                    html += '<div class="functional-buttons clearfix">' + $(element).find('.functional-buttons').html() + '</div>';
					html += '</div>';	
				html += '</div>';
			$(element).html(html);
			});		
			$('.center-block').find('.functional-buttons').remove();
			$('.display').find('li#list').addClass('selected');
			$('.display').find('li#grid').removeAttr('class');
			$.totalStorage('display', 'list');
		}
	}
	else 
	{
		if (plGridLayout == '1')
		{
			$('.left-block').find('.functional-buttons').hide();
			$('ul.product_list').removeClass('list').addClass('grid row');
			$('.product_list > li').removeClass('col-xs-6').addClass('col-xs-6 col-sm-6 col-md-4');
			$('.product_list > li').each(function(index, element) {
			html = '';
			html += '<div class="product-container">';
				html += '<div class="left-block">' + $(element).find('.left-block').html();
			html += '</div>';	
				html += '<div class="right-block">';
					html += '<div class="functional-buttons clearfix">' + $(element).find('.functional-buttons').html() + '</div>';
					html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
					html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
					var rating = $(element).find('.comments_note').html(); // check : rating
						if (rating != null) { 
							html += '<div class="reviews-container"><div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div></div>';
						}
					html += '<p itemprop="description" class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
					var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
						if (price != null) { 
							html += '<div class="content_price">'+ price + '</div>';
						}
// 					html += '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="button-container">'+ $(element).find('.button-container').html() +'</div>';
					var colorList = $(element).find('.color-list-container').html();
					if (colorList != null) {
						html += '<div class="color-list-container">'+ colorList +'</div>';
					}
					var availability = $(element).find('.availability').html(); // check : catalog mode is enabled
					if (availability != null) {
						html += '<span class="availability">'+ availability +'</span>';
					}
				html += '</div>';
			html += '</div>';		
			$(element).html(html);
			});
			$('.display').find('li#grid').addClass('selected');
			$('.display').find('li#list').removeAttr('class');
			$.totalStorage('display', 'grid');
		}
		if (plGridLayout == '2')
		{
			$('.left-block').find('.functional-buttons').hide();
			$('ul.product_list').removeClass('list').addClass('grid row');
			$('.product_list > li').removeClass('col-xs-6').addClass('col-xs-6 col-sm-6 col-md-4');
			$('.product_list > li').each(function(index, element) {
			html = '';
			html += '<div class="product-container">';
				html += '<div class="left-block">' + $(element).find('.left-block').html();
			html += '</div>';	
				html += '<div class="right-block">';					
					var colorList = $(element).find('.color-list-container').html();
					if (colorList != null) {
						html += '<div class="color-list-container">'+ colorList +'</div>';
					}
					html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
					var rating = $(element).find('.comments_note').html(); // check : rating
						if (rating != null) { 
							html += '<div class="reviews-container"><div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div></div>';
						}
					html += '<p itemprop="description" class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
					var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
						if (price != null) { 
							html += '<div class="content_price">'+ price + '</div>';
						}
// 					html += '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="button-container">'+ $(element).find('.button-container').html() +'</div>';

					var availability = $(element).find('.availability').html(); // check : catalog mode is enabled
					if (availability != null) {
						html += '<span class="availability">'+ availability +'</span>';
					}
				html += '</div>';
			html += '</div>';		
			$(element).html(html);
			});
			$('.display').find('li#grid').addClass('selected');
			$('.display').find('li#list').removeAttr('class');
			$.totalStorage('display', 'grid');
		}
		if (plGridLayout == '3')
		{
			$('ul.product_list').removeClass('list').addClass('grid row');
			$('.product_list > li').removeClass('col-xs-6').addClass('col-xs-6 col-sm-6 col-md-4');
			$('.product_list > li').each(function(index, element) {
			html = '';
			html += '<div class="product-container">';
				html += '<div class="left-block">' + $(element).find('.left-block').html() + '</div>';
				html += '<div class="right-block">';
					var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
						if (price != null) { 
							html += '<div class="content_price">'+ price + '</div>';
						}
					html += '<div class="functional-buttons clearfix">' + $(element).find('.functional-buttons').html() + '</div>';
					html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
					var colorList = $(element).find('.color-list-container').html();
					if (colorList != null) {
						html += '<div class="color-list-container">'+ colorList +'</div>';
					}
					var rating = $(element).find('.comments_note').html(); // check : rating
						if (rating != null) { 
							html += '<div class="reviews-container"><div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div></div>';
						}
					html += '<p itemprop="description" class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
// 					html += '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="button-container">'+ $(element).find('.button-container').html() +'</div>';
					html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
					var availability = $(element).find('.availability').html(); // check : catalog mode is enabled
					if (availability != null) {
						html += '<span class="availability">'+ availability +'</span>';
					}
				html += '</div>';
			html += '</div>';		
			$(element).html(html);
			});
			$('.display').find('li#grid').addClass('selected');
			$('.display').find('li#list').removeAttr('class');
			$.totalStorage('display', 'grid');
		}
		if (plGridLayout == '4')
		{
			$('ul.product_list').removeClass('list').addClass('grid row');
			$('.product_list > li').removeClass('col-xs-6').addClass('col-xs-6 col-sm-6 col-md-4');
			$('.product_list > li').each(function(index, element) {
			html = '';
			html += '<div class="product-container">';
				html += '<div class="left-block">' + $(element).find('.left-block').html();
				html += '</div>';
				html += '<div class="right-block">';
					html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
					html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
					var colorList = $(element).find('.color-list-container').html();
					if (colorList != null) {
						html += '<div class="color-list-container">'+ colorList +'</div>';
					}
					html += '<p itemprop="description" class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
					var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
						if (price != null) { 
							html += '<div class="content_price">'+ price + '</div>';
						}
					var availability = $(element).find('.availability').html(); // check : catalog mode is enabled
					if (availability != null) {
						html += '<span class="availability">'+ availability +'</span>';
					}
				html += '</div>';
			html += '</div>';		
			$(element).html(html);
			});
			$('.display').find('li#grid').addClass('selected');
			$('.display').find('li#list').removeAttr('class');
			$.totalStorage('display', 'grid');
		}
	}	
}

function dropDown() 
{
	elementClick = '.current';
	elementSlide =  'ul.toogle_content';       
	activeClass = 'active';			 

	$(elementClick).on('click', function(e){
		e.stopPropagation();
		var subUl = $(this).next(elementSlide);
		if(subUl.is(':hidden'))
		{
			subUl.show('blind');
			$(this).addClass(activeClass);	
		}
		else
		{
			subUl.hide('blind');
			$(this).removeClass(activeClass);
		}
		$(elementClick).not(this).next(elementSlide).hide('blind');
		$(elementClick).not(this).removeClass(activeClass);
		e.preventDefault();
	});

	$(elementSlide).on('click', function(e){
		e.stopPropagation();
	});

	$(document).on('click', function(e){
		e.stopPropagation();
		var elementHide = $(elementClick).next(elementSlide);
		$(elementHide).hide('blind');
		$(elementClick).removeClass('active');
	});
}

function accordionFooter(status)
{
	if(status == 'enable')
	{
		$('#footer .footer-block h4').on('click', function(){
			$(this).toggleClass('active').parent().find('.toggle-footer').stop().slideToggle('medium');
		})
		$('#footer').addClass('accordion').find('.toggle-footer').slideUp('fast');
	}
	else
	{
		$('.footer-block h4').removeClass('active').off().parent().find('.toggle-footer').removeAttr('style').slideDown('fast');
		$('#footer').removeClass('accordion');
	}
}

function accordion(status)
{
	leftColumnBlocks = $('#left_column');
	if(status == 'enable')
	{
		var accordion_selector = '#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4,' +
								'#left_column .shopping_cart > a:first-child, #right_column .shopping_cart > a:first-child';

		$(accordion_selector).on('click', function(e){
			$(this).toggleClass('active').parent().find('.block_content').stop().slideToggle('medium');

		});
		$('#right_column, #left_column').addClass('accordion').find('.block .block_content').slideUp('fast');
		if (typeof(ajaxCart) !== 'undefined')
			ajaxCart.collapse();
	}
	else
	{
		$('#right_column .block .title_block, #left_column .block .title_block, #left_column #newsletter_block_left h4').removeClass('active').off().parent().find('.block_content').removeAttr('style').slideDown('fast');
		$('#left_column, #right_column').removeClass('accordion');
	}
}
function bindUniform()
{
	if (!!$.prototype.uniform)
		$("select.form-control,input[type='radio'],input[type='checkbox']").not(".not_uniform").uniform();
}



                        function hasClass(element, className) {
                     return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1;
                     }
function fixed_background(){
                      var element = document.body;                     
                     if(hasClass(element,"lock-position")) {
                        element.classList.remove("lock-position");
                        $('.menu-close').css('display', 'none');
                        
                        }
                       else{
                    
                      
                      	}                                   
                      }   						
                     
function removebck(){
	
	 $('.menu-close').css('display', 'none');	
	
}
function fixed_background_menu(){
	
	 var element = document.body;                     
                     if(hasClass(element,"lock-position")) {
                        element.classList.remove("lock-position");
                        $('.menu-close').css('display', 'none');
                        
                        }
                       else{
                     element.classList.add("lock-position");
                      
                      	}             
	
}
var scrollTimer;
$('.compact_block_content').on('scroll',function(e){
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(() => {
        this.scrollTop = Math.max(1, Math.min(this.scrollTop, this.scrollHeight - this.clientHeight - 1));
      }, 300);
});

// The function toggles more (hidden) text when the user clicks on "Read more". The IF ELSE statement ensures that the text 'read more' and 'read less' changes interchangeably when clicked on.
$('.moreless-button').click(function() {
  $(this).prev().find('.moretext').slideToggle();
  if ($(this).text() == "Read more") {
    $(this).text("Read less")
  } else {
    $(this).text("Read more")
  }
});

//tracking Fb Pixel Event
function FirePixelEvent(trigger){
	switch(trigger) {
	  case "step1":
	    fbq('trackCustom', 'InitiateCheckout-Address');
	    break;
	  case "step2":
	    fbq('trackCustom', 'InitiateCheckout-Shipping');
	    break;
	  case "step3":
	    fbq('trackCustom', 'InitiateCheckout-Payment');
	    break;		
	  case "MakeAnOffer":
	    fbq('trackCustom', 'MakeAnOffer');
	    break;	
	  case "step3":
	    fbq('trackCustom', 'InitiateCheckout-Shipping');
	    break;		    	    	    	
	}
}
