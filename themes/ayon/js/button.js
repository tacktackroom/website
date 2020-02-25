/*
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
*/

$(document).ready(function(){
    $('.open-question-form').fancybox({
      width: 550,
        height: 425,
        autoSize : false,
        maxWidth : '100%',
      hideOnContentClick: false
    });

    $(document).on('click', '.wk_btn_cancel', function(e){
      e.preventDefault();
      $.fancybox.close();
    }); 
  
    // Get the input field
    // var input = document.getElementById("userpwd");
    // Execute a function when the user releases a key on the keyboard
    $("#userpwd").on("keyup", function(event) {
      // Cancel the default action, if needed
      event.preventDefault();
      // Number 13 is the "Enter" key on the keyboard
      if (event.keyCode === 13) {
        // Trigger the button element with a click
        document.getElementById("btn_modal").click();
      }
    });

    // $('.Button').tilt({ scale: 1.1, speed: 1000 });

    // click event
    $('.Button').on('click', function(e) {
      explode(e.pageX, e.pageY);
    });
    $("button").click(function(){
        $("#hiw").slideToggle( "slow" );
    });

    $('.tip_list > li a').click(function() {
        $(this).parent().find('ul').slideToggle( "100" );
        
            //alert($( this ).css( "transform" ));
        if (  $(this).parent().find('img').css( "transform" ) == 'none' ){
            $(this).parent().find('img').css("transform","rotate(90deg)");
        } else {
            $(this).parent().find('img').css("transform","" );
        }
    });

    $('.details_pdt_xs > li a').click(function() {
        $(this).parent().find('ul').slideToggle( "100" );
        
            //alert($( this ).css( "transform" ));
        if (  $(this).parent().find('img').css( "transform" ) == 'none' ){
            $(this).parent().find('img').css("transform","rotate(180deg)");
        } else {
            $(this).parent().find('img').css("transform","" );
        }
    });
});

document.addEventListener("touchstart", function(){}, true);

// symbols
function explode(x, y) {
  
  var symbolArray = [
    '#donut',
    '#circle',
    '#tri_hollow',
    '#triangle',
    '#square',
    '#squ_hollow'
  ];
  
  var particles = 10, 
      explosion = $('.Button-wrapper');
      
  for (var i = 0; i < particles; i++) {
    
    var randomSymbol = Math.floor(Math.random()*symbolArray.length);
    // positioning x,y of the particles
    var x = (explosion.width() / 2) + rand(80, 150) * Math.cos(2 * Math.PI * i / rand(particles - 10, particles + 10)),
        y = (explosion.height() / 2) + rand(80, 150) * Math.sin(2 * Math.PI * i / rand(particles - 10, particles + 10)),
        deg = rand(0, 360) + 'deg',
        scale = rand(0.5, 1.1),
        // particle element creation
        elm = $(
          '<svg class="Symbol" style="top:' + y + 'px; left:' + x + 'px; transform: scale(' + scale + ') rotate(' + deg + ');">' + 
          '<use xlink:href="' + symbolArray[randomSymbol] + '" />' + 
          '</svg>'
         );

    if (i == 0) { // only need to target one of the symbols.
      // css3 animation end detection
      elm.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
        elm.siblings('svg').remove().end().remove(); // remove particles when animation is over.
      });
    }
    explosion.prepend(elm);
  }
}

function rand(min, max) {
  return Math.floor(Math.random() * (max + 1)) + min;
}
/*
$('.dashboard_list > li a').click(function() {
    $(this).parent().find('ul').slideToggle( "100" );
    
        //alert($( this ).css( "transform" ));
    if (  $(this).parent().find('img').css( "transform" ) == 'none' ){
        $(this).parent().find('img').css("transform","rotate(90deg)");
    } else {
        $(this).parent().find('img').css("transform","" );
    }
});
*/

var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');
  
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
  bubblyButtons[i].addEventListener('click', animateButton, false);
}

