// Loader
$(window).load(function() { $(".loader-overlay").fadeOut(1200); });

$(document).ready(function() {


    // limit cart block height
    cartitems = $('#header .cart_block dl > dt');
    cartheight = $(cartitems).length;
    if (cartheight >= 6) {
        $(cartitems).slice(6).addClass('hidden');
        $('.all_products').removeClass('hidden');
    }
    $('.all_products').click(function(e) {
        if ($('.all_products > .back').hasClass('hidden')) {
            $(cartitems).removeClass('hidden');
            $('.all_products > .show').addClass('hidden');
            $('.all_products > .back').removeClass('hidden');
        } else {
            $(cartitems).slice(6).addClass('hidden');
            $('.all_products > .show').removeClass('hidden');
            $('.all_products > .back').addClass('hidden');
        }
    });

    // Scroll down slider
    $('a[href*="#middlecolumns"]').click(function(e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top - "60" + "px"
        }, {
            duration: 600
        });
        return false;
    });

        // Scroll to reviews correct
    $('.comments_note a.reviews').click(function(e) {
        $("html, body").animate({
            scrollTop: $('#more_info_block').offset().top - "110" + "px"
        }, {
            duration: 400
        });
    });

    // Mini products wrap
    var bannerswrap = $(".row-miniproducts > .container > .row > .mini_products");
    bannerswrap.wrapAll("<div class='banners_wrap container'></div>");

    // Bottom row banners no margin
    var findbanners = $(".roybanners");
    findbanners.each(function() {
        var countinrow = $(this).attr('data-in-row');
        $(this).find('li').slice(-countinrow).css('margin-bottom','0');
    });

    // Blog widescreen
    var findblogpost = $(".sdsarticleCat");
    findblogpost.each(function() {
        if (findblogpost.width() > 880) {
            $(this).addClass('blog_cut');
        }
    });

    // Payments sign in to see warning
    $("#HOOK_PAYMENT > .warning").removeClass('alert').addClass('alert alert-warning');

    // Sticky header
    var sticky = function(){
        $('.header-wrapper').addClass("sticky");
        $('body').removeClass("add_padding").addClass("add_sticky_padding");
    };

    if ($('body').hasClass('boxed')) { // For boxed layout
        var stickyfrom = parseInt($('.header-wrapper').attr('data-boxed-padding'));
    } else {
        var stickyfrom = 0;
    }

    if ($(window).scrollTop() > stickyfrom) sticky();
    if (window.matchMedia('(max-width: 991px)').matches) {
        sticky();
    }

    $(window).scroll(function() {
        if ($(this).scrollTop() > stickyfrom){
                sticky();
            } else {
            if (window.matchMedia('(min-width: 992px)').matches) {
                $('.header-wrapper').removeClass("sticky");
                $('body').removeClass("add_sticky_padding").addClass("add_padding");
            }
        }
    });

    $(window).on('resize', function(){
        if (window.matchMedia('(max-width: 991px)').matches) {
            sticky();
        } else {
            if ($(this).scrollTop() == stickyfrom){
                $('.header-wrapper').removeClass("sticky");
                $('body').removeClass("add_sticky_padding").addClass("add_padding");
            }
        }
    });

    // Sticky product page
    var pp_stick = $(".pp_stick_it");
        pp_stick_ops = {
            parent: '.primary_block',
            offset_top: 100
        };

    if (window.matchMedia('(min-width: 768px)').matches) {
        pp_stick.stick_in_parent(pp_stick_ops);
    }

    $(window).on('resize', function(){
        if (window.matchMedia('(min-width: 768px)').matches) {
            pp_stick.stick_in_parent(pp_stick_ops);
        } else {
            pp_stick.trigger("sticky_kit:detach");
        }
    });

});


// Browser detection
// If Safari
$(function () {
    if (navigator.userAgent.indexOf('Safari') != -1 &&
        navigator.userAgent.indexOf('Chrome') == -1) {
        $("body").addClass("safari");
    }
});

// If Android
var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
if(isAndroid) {
    $("body").addClass("android");
}

// Youtube responsive
$(function() {

    var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='https://player.vimeo.com'], iframe[src^='//www.youtube.com'], iframe[src^='https://www.youtube.com'], object, embed"),
        $fluidEl = $("#cms #center_column .rte"),
        $allVideosPPS = $("#short_description_content iframe[src^='//player.vimeo.com'], #short_description_content iframe[src^='https://player.vimeo.com'], #short_description_content iframe[src^='//www.youtube.com'], #short_description_content iframe[src^='https://www.youtube.com'], #short_description_content object, #short_description_content embed"),
        $fluidElPPS = $("#short_description_content"),
        $allVideosPPF = $("#idTab1 iframe[src^='//player.vimeo.com'], #idTab1 iframe[src^='https://player.vimeo.com'], #idTab1 iframe[src^='//www.youtube.com'], #idTab1 iframe[src^='https://www.youtube.com'], #idTab1 object, #idTab1 embed"),
        $fluidElPPF = $("#idTab1");
        $allVideosB = $("#module-smartblog-details iframe[src^='//player.vimeo.com'], #module-smartblog-details iframe[src^='https://player.vimeo.com'], #module-smartblog-details iframe[src^='//www.youtube.com'], #module-smartblog-details iframe[src^='https://www.youtube.com'], #module-smartblog-details object, #module-smartblog-details embed"),
        $fluidElB = $("#module-smartblog-details #content");

    $allVideos.each(function() {

        $(this)
            // jQuery .data does not work on object/embed elements
            .attr('data-aspectRatio', this.height / this.width)
            .removeAttr('height')
            .removeAttr('width');

    });

    $(window).resize(function() {

        var newWidth = $fluidEl.width();
        var newWidthPPS = $fluidElPPS.width();
        var newWidthPPF = $fluidElPPF.width();
        var newWidthB = $fluidElB.width();
        $allVideos.each(function() {
            var $el = $(this);
            $el
                .width(newWidth)
                .height(newWidth * $el.attr('data-aspectRatio'));
        });
        $allVideosB.each(function() {
            var $el = $(this);
            $el
                .width(newWidthB)
                .height(newWidthB * $el.attr('data-aspectRatio'));
        });
        $allVideosPPS.each(function() {
            var $el = $(this);
            $el
                .width(newWidthPPS)
                .height(newWidthPPS * $el.attr('data-aspectRatio'));
        });
        $allVideosPPF.each(function() {
            var $el = $(this);
            $el
                .width(newWidthPPF)
                .height(newWidthPPF * $el.attr('data-aspectRatio'));
        });

    }).resize();

});

// MAP Footer
var mapwrapper = $(".footer-wrapper").find(".mapwrapper");
var mapicon = $(".roymap").find(".map_switcher");

$('.map_switcher').click(function () {
    if (!$('body').hasClass('stores')) {
        if (!mapwrapper.hasClass('started'))
        {
            if ($(window).width() < 479) {
                mapwrapper.hide().height('220')
            } else {
                mapwrapper.hide().height('460')
            }
        }
        mapicon.toggleClass('opened')

        mapwrapper.slideToggle({
            duration: 400,
            step: function(){
                if (mapicon.hasClass('opened')) $("html, body").scrollTop($(document).height());
            }
        });
        mapwrapper.addClass('started');
    } else {
        $("html, body").animate({
            scrollTop: 0
        }, {
            duration: 500
        });
        return false;
    }
});

// ROY SEARCH PRO
var rslayer = $(".search_layer");

$('.rs_call_icon').click(function () {
    rslayer.toggleClass('search_called');
    var ac_results = $("body > .ac_results");
    ac_results.removeClass('ac_hide');
	setTimeout(function() {
        $('.search_layer').find('.ac_input').focus();
    },100);
});

$('.search_close').click(function () {
    var ac_results = $("body > .ac_results");
    ac_results.addClass('ac_hide')
    rslayer.toggleClass('search_called');
});

$('.search_close_icon').click(function (e) {
    var ac_results = $("body > .ac_results");
    ac_results.addClass('ac_hide');
    rslayer.toggleClass('search_called');
	e.stopPropagation();
});

$('.ac_results li a').click(function(eve){
    eve.stopPropagation();
});

$(document).bind("DOMSubtreeModified propertychange", function() {
    $('.ac_results li a').click(function(eve){
        eve.stopPropagation();
    });
});


// Roy Mobile sidebar
$(document).ready(function() {

    $('.header-right-block .account_top').css('cursor','pointer');
    $('.header-right-block .carttop').css('cursor','pointer');

    var account_top_click = function (e) {
        e.preventDefault();
       if (isLogged == true) {  $('.side-menu').addClass('sm_open');}
        $('#page').addClass('page_open');
        $('.header-wrapper').addClass('page_open');
        if (isLogged == true) { $('.menu-close').css('display', 'block');}
        $('.side-menu #header_user_info_mobile').css('display', 'block');
        $('.side-menu .carttop').css('display', 'none');
    }
    var carttop_click = function (e) {
        e.preventDefault();
        $('.side-menu').addClass('sm_open');
        $('#page').addClass('page_open');
        $('.header-wrapper').addClass('page_open');
        $('.menu-close').css('display', 'block');
        $('.side-menu #header_user_info_mobile').css('display', 'none');
        $('.side-menu .carttop').css('display', 'block');
    }

    var mobileside = function() {
        if ($('body').hasClass('mobileside_enabled')) {
            $('.header-right-block .shopping_cart > a:first-child').on('click', false);
            $('.header-right-block .account_top').off("click", account_top_click).on("click", account_top_click);
            $('.header-right-block .carttop').off("click", carttop_click).on("click", carttop_click);
        }
    };

    if ($('#is_media').css('float') == 'left') {

        $('body').addClass('mobileside_enabled');
        mobileside();

    } else {
        $('body').removeClass('mobileside_enabled');
        $('.header-right-block .shopping_cart > a:first-child').off('click', false);
        $('.side-menu').removeClass('sm_open');
        $('#page').removeClass('page_open');
        $('.header-wrapper').removeClass('page_open');
        $('.menu-close').css('display', 'none');
        $('.header-right-block .account_top').off("click", account_top_click);
        $('.header-right-block .carttop').off("click", carttop_click);
    }

    $(window).on('resize', function(){
    if ($('#is_media').css('float') == 'left') {
        $('body').addClass('mobileside_enabled');
        mobileside();
    } else {
        $('body').removeClass('mobileside_enabled');
        $('.header-right-block .shopping_cart > a:first-child').off('click', false);
        $('.side-menu').removeClass('sm_open');
        $('#page').removeClass('page_open');
        $('.header-wrapper').removeClass('page_open');
        $('.menu-close').css('display', 'none');
        $('.header-right-block .account_top').off("click", account_top_click);
        $('.header-right-block .carttop').off("click", carttop_click);
    }
});

$('.menu-close').click(function () {
    $('.side-menu').removeClass('sm_open');
    $('#page').removeClass('page_open');
    $('.header-wrapper').removeClass('page_open');
    $('.menu-close').css('display', 'none');
});

});

// Hover4 count buttons
setTimeout(function() {

    var counthover4cont = $(".product_list > li .product-image-container")

    counthover4cont.each(function() {
        var counthover4 = $(this).find('.functional-buttons').children().length;

        if (counthover4 == 4) {
            $(this).find('.functional-buttons').addClass('b4');
            $(this).find('.reviews-container').addClass('b4');
        } else {
            $(this).find('.functional-buttons').addClass('b3');
            $(this).find('.reviews-container').addClass('b3');
        }
    });
},100);


$(document).ready(function(){

$('ul.car-featured, ul.car-best, ul.car-new, ul.car-sale, ul.car-custom1, ul.car-custom2, ul.car-custom3, ul.car-custom4, ul.car-custom5, ul#specialsul, ul#roybrandsul').addClass('items_li');
$('.carousel_mini').addClass('mini_count');

$('.items_li').each(function(i, elem){
    var $this = $(this),
        count = $(this).find('li').length;

    $this.attr('data-item-count',count);
});
$('.mini_count').each(function(i, elem){
    var $this = $(this),
        count = $(this).children('div').length;

    $this.attr('data-item-count',count);
});

    var ulFeatured = $(".hfeatured"),
        autoFeatured = ulFeatured.attr('data-auto') === "true" ? true : false,
        maxslidesFeatured = parseInt(ulFeatured.attr('data-max-slides')),
        nomarginsFeatured = parseInt(ulFeatured.attr('data-nomargins')),
        maxslidesFeaturedRes = 3,
        maxslidesFeaturedRes680 = 3,
        ulBest = $(".hbest"),
        autoBest = ulBest.attr('data-auto') === "true" ? true : false,
        maxslidesBest = parseInt(ulBest.attr('data-max-slides')),
        nomarginsBest = parseInt(ulBest.attr('data-nomargins')),
        maxslidesBestRes = 3,
        maxslidesBestRes680 = 3,
        ulNew = $(".hnew"),
        autoNew = ulNew.attr('data-auto') === "true" ? true : false,
        maxslidesNew = parseInt(ulNew.attr('data-max-slides')),
        nomarginsNew = parseInt(ulNew.attr('data-nomargins')),
        maxslidesNewRes = 3,
        maxslidesNewRes680 = 3,
        ulSale = $(".hspecials"),
        autoSale = ulSale.attr('data-auto') === "true" ? true : false,
        maxslidesSale = parseInt(ulSale.attr('data-max-slides')),
        nomarginsSale = parseInt(ulSale.attr('data-nomargins')),
        maxslidesSaleRes = 3,
        maxslidesSaleRes680 = 3,
        ulCustom1 = $(".hcc1"),
        autoCustom1 = ulCustom1.attr('data-auto') === "true" ? true : false,
        maxslidesCustom1 = parseInt(ulCustom1.attr('data-max-slides')),
        nomarginsCustom1 = parseInt(ulCustom1.attr('data-nomargins')),
        maxslidesCustom1Res = 3,
        maxslidesCustom1Res680 = 3,
        ulCustom2 = $(".hcc2"),
        autoCustom2 = ulCustom2.attr('data-auto') === "true" ? true : false,
        maxslidesCustom2 = parseInt(ulCustom2.attr('data-max-slides')),
        nomarginsCustom2 = parseInt(ulCustom2.attr('data-nomargins')),
        maxslidesCustom2Res = 3,
        maxslidesCustom2Res680 = 3,
        ulCustom3 = $(".hcc3"),
        autoCustom3 = ulCustom3.attr('data-auto') === "true" ? true : false,
        maxslidesCustom3 = parseInt(ulCustom3.attr('data-max-slides')),
        nomarginsCustom3 = parseInt(ulCustom3.attr('data-nomargins')),
        maxslidesCustom3Res = 3,
        maxslidesCustom3Res680 = 3,
        ulCustom4 = $(".hcc4"),
        autoCustom4 = ulCustom4.attr('data-auto') === "true" ? true : false,
        maxslidesCustom4 = parseInt(ulCustom4.attr('data-max-slides')),
        nomarginsCustom4 = parseInt(ulCustom4.attr('data-nomargins')),
        maxslidesCustom4Res = 3,
        maxslidesCustom4Res680 = 3,
        ulCustom5 = $(".hcc5"),
        autoCustom5 = ulCustom5.attr('data-auto') === "true" ? true : false,
        maxslidesCustom5 = parseInt(ulCustom5.attr('data-max-slides')),
        nomarginsCustom5 = parseInt(ulCustom5.attr('data-nomargins')),
        maxslidesCustom5Res = 3,
        maxslidesCustom5Res680 = 3,
        ulBlogHome = $(".homenews"),
        maxslidesBlogHome = parseInt(ulBlogHome.attr('data-post-row')),
        countFeatured = $('ul.car-featured').attr('data-item-count') === "1" ? false : true,
        countBest = $('ul.car-best').attr('data-item-count') === "1" ? false : true,
        countNew = $('ul.car-new').attr('data-item-count') === "1" ? false : true,
        countSale = $('ul.car-sale').attr('data-item-count') === "1" ? false : true,
        countCustom1 = $('ul.car-custom1').attr('data-item-count') === "1" ? false : true,
        countCustom2 = $('ul.car-custom2').attr('data-item-count') === "1" ? false : true,
        countCustom3 = $('ul.car-custom3').attr('data-item-count') === "1" ? false : true,
        countCustom4 = $('ul.car-custom4').attr('data-item-count') === "1" ? false : true,
        countCustom5 = $('ul.car-custom5').attr('data-item-count') === "1" ? false : true,
        countSpecials = $('ul#specialsul').attr('data-item-count') === "1" ? false : true,
        countBrands = $('ul#roybrandsul').attr('data-item-count') === "1" ? false : true
;


$('.mini_count').each(function(i, elem){
    var $this = $(this);
    if ($this.attr('data-item-count') === "1") {
        $this.removeClass('carousel_mini');
    }
});

    if (maxslidesFeatured > 3) { maxslidesFeaturedRes = 4 } else if (maxslidesFeatured == 2) { maxslidesFeaturedRes = 2, maxslidesFeaturedRes680 = 2}
    if (maxslidesBest > 3) { maxslidesBestRes = 4 } else if (maxslidesBest == 2) { maxslidesBestRes = 2, maxslidesBestRes680 = 2}
    if (maxslidesNew > 3) { maxslidesNewRes = 4 } else if (maxslidesNew == 2) { maxslidesNewRes = 2, maxslidesNewRes680 = 2}
    if (maxslidesSale > 3) { maxslidesSaleRes = 4 } else if (maxslidesSale == 2) { maxslidesSaleRes = 2, maxslidesSaleRes680 = 2}
    if (maxslidesCustom1 > 3) { maxslidesCustom1Res = 4 } else if (maxslidesCustom1 == 2) { maxslidesCustom1Res = 2, maxslidesCustom1Res680 = 2}
    if (maxslidesCustom2 > 3) { maxslidesCustom2Res = 4 } else if (maxslidesCustom2 == 2) { maxslidesCustom2Res = 2, maxslidesCustom2Res680 = 2}
    if (maxslidesCustom3 > 3) { maxslidesCustom3Res = 4 } else if (maxslidesCustom3 == 2) { maxslidesCustom3Res = 2, maxslidesCustom3Res680 = 2}
    if (maxslidesCustom4 > 3) { maxslidesCustom4Res = 4 } else if (maxslidesCustom4 == 2) { maxslidesCustom4Res = 2, maxslidesCustom4Res680 = 2}
    if (maxslidesCustom5 > 3) { maxslidesCustom5Res = 4 } else if (maxslidesCustom5 == 2) { maxslidesCustom5Res = 2, maxslidesCustom5Res680 = 2}

	// Home products sliders
    function carloads() {
		$('ul.car-featured').owlCarousel({
			loop:countFeatured,
			margin:nomarginsFeatured,
			autoplay:autoFeatured,
			autoplayTimeout:5000,
			autoplayHoverPause:true,
			mouseDrag:true,
			touchDrag:true,
			navText:'  ',
			nav:true,
			navSpeed:400,
			autoplaySpeed:1100,
			dots:false,
			responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesFeaturedRes680
                },
                992:{
                    items:maxslidesFeaturedRes
                },
                1199:{
                    items:maxslidesFeatured
                }
			}
		});
        $('ul.car-best').owlCarousel({
            loop:countBest,
            margin:nomarginsBest,
            autoplay:autoBest,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesBestRes680
                },
                992:{
                    items:maxslidesBestRes
                },
                1199:{
                    items:maxslidesBest
                }
            }
        });
        $('ul.car-new').owlCarousel({
            loop:countNew,
            margin:nomarginsNew,
            autoplay:autoNew,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesNewRes680
                },
                992:{
                    items:maxslidesNewRes
                },
                1199:{
                    items:maxslidesNew
                }
            }
        });
        $('ul.car-sale').owlCarousel({
            loop:countSale,
            margin:nomarginsSale,
            autoplay:autoSale,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesSaleRes680
                },
                992:{
                    items:maxslidesSaleRes
                },
                1199:{
                    items:maxslidesSale
                }
            }
        });
        $('ul.car-custom1').owlCarousel({
            loop:countCustom1,
            margin:nomarginsCustom1,
            autoplay:autoCustom1,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesCustom1Res680
                },
                992:{
                    items:maxslidesCustom1Res
                },
                1199:{
                    items:maxslidesCustom1
                }
            }
        });
        $('ul.car-custom2').owlCarousel({
            loop:countCustom2,
            margin:nomarginsCustom2,
            autoplay:autoCustom2,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesCustom2Res680
                },
                992:{
                    items:maxslidesCustom2Res
                },
                1199:{
                    items:maxslidesCustom2
                }
            }
        });
        $('ul.car-custom3').owlCarousel({
            loop:countCustom3,
            margin:nomarginsCustom3,
            autoplay:autoCustom3,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesCustom3Res680
                },
                992:{
                    items:maxslidesCustom3Res
                },
                1199:{
                    items:maxslidesCustom3
                }
            }
        });
        $('ul.car-custom4').owlCarousel({
            loop:countCustom4,
            margin:nomarginsCustom4,
            autoplay:autoCustom4,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesCustom4Res680
                },
                992:{
                    items:maxslidesCustom4Res
                },
                1199:{
                    items:maxslidesCustom4
                }
            }
        });
        $('ul.car-custom5').owlCarousel({
            loop:countCustom5,
            margin:nomarginsCustom5,
            autoplay:autoCustom5,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                },
                480:{
                    items:2
                },
                680:{
                    items:maxslidesCustom5Res680
                },
                992:{
                    items:maxslidesCustom5Res
                },
                1199:{
                    items:maxslidesCustom5
                }
            }
        });
		// Mini products sliders
		$('.carousel_mini').owlCarousel({
			loop: true,
			margin:30,
			lazyLoad : true,
			autoplay:false,
			mouseDrag:true,
			touchDrag:true,
			navText:'  ',
			nav:true,
			navSpeed:400,
			dots:false,
			responsive:{
				0:{
					items:1,
					nav:false
				},
				768:{
					items:1
				}
			}
		});
		// Brands logo slider
		$('#roybrandsul').owlCarousel({
			loop:countBrands,
			margin:60,
			autoplay:true,
			autoplayTimeout:3400,
			autoplayHoverPause:true,
			mouseDrag:true,
			touchDrag:true,
			navText:'  ',
			nav:true,
			navSpeed:600,
			autoplaySpeed:600,
			dots:false,
			responsive:{
				0:{
					items:2,
					nav:false
				},
				480:{
					items:3,
					nav:false
				},
				680:{
					items:4
				},
				992:{
					items:5
				},
				1200:{
					items:6
				}
			}
		});
		// Latest posts slider
		$('.sdsblog-box-content').owlCarousel({
			loop:false,
			margin:30,
			mouseDrag:true,
			touchDrag:true,
			navText:'  ',
			nav:true,
			navSpeed:400,
			dots:false,
			responsive:{
				0:{
					items:1,
					nav:false
				},
				480:{
					items:2,
					nav:false
				},
				992:{
					items:maxslidesBlogHome
				}
			}
		});
		// Left column blocks
		$('.products_slider').owlCarousel({
            loop:false,
			margin:30,
			lazyLoad : true,
			autoplay:true,
			autoplayTimeout:4000,
			autoplayHoverPause:true,
			mouseDrag:true,
			touchDrag:true,
			navText:'  ',
			nav:true,
			navSpeed:400,
			autoplaySpeed:1100,
			dots:false,
			responsive:{
				0:{
					items:1,
					nav:false
				},
				768:{
					items:1
				}
			}
		});
        // Product page products sliders
        $('.pp_products').owlCarousel({
            loop:false,
            margin:30,
            autoplay:true,
            autoplayTimeout:7000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                480:{
                    items:2,
                    nav:false
                },
                680:{
                    items:3
                },
                992:{
                    items:4
                }
            }
        });
        // Product page products sliders
        $('#product #crossselling ul').owlCarousel({
            loop:false,
            margin:30,
            autoplay:true,
            autoplayTimeout:7000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                480:{
                    items:2,
                    nav:false
                },
                680:{
                    items:3
                },
                992:{
                    items:4
                }
            }
        });
		// Product page products sliders
		$('#order-opc #crossselling ul').owlCarousel({
            loop:false,
			margin:20,
			autoplay:true,
			autoplayTimeout:7000,
			autoplayHoverPause:true,
			mouseDrag:true,
			touchDrag:true,
			navText:'  ',
			nav:true,
			navSpeed:400,
			autoplaySpeed:1100,
			dots:false,
			responsive:{
				0:{
					items:4,
					nav:false
				},
				480:{
					items:5,
					nav:false
				},
				680:{
					items:6
				},
				992:{
					items:8
				}
			}
		});

    }

    function carloads_afterdom() {
        // Specials block slider
        $('#specialsul').owlCarousel({
            loop:countSpecials,
            margin:14,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            mouseDrag:true,
            touchDrag:true,
            autoHeight : true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                768:{
                    items:1
                }
            }
        });
        // Viewed block slider
        $('#products_viewed').owlCarousel({
            loop:false,
            margin:14,
            autoplay:false,
            mouseDrag:true,
            touchDrag:true,
            autoHeight : true,
            navText:'  ',
            nav:true,
            navSpeed:400,
            autoplaySpeed:1100,
            dots:false,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                768:{
                    items:1
                }
            }
        });

    }

    carloads();
    setTimeout(carloads_afterdom, 300);

});
