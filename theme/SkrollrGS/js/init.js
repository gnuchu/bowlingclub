// init.js INITIALIZATION SCRIPT
// SkrollGS theme for GetSimple CMS
// http://get-simple.info/forums/showthread.php?tid=6986
// version 0.6
// Author: Alexander Amatuni

(function ( $ ) {
 
    $.fn.skrollr = function( options ) {
 
        var content = this,
            settings = $.extend({
            // defaults
              menu: "#nav ul",
              mobileMenu: '#mobile-menu',
              zeroSlide: true,
              speed: 1000,
              easing: 'ease'
             }, options ),
            
            slider = this.bxSlider({
              pager: false,
              speed: settings.speed,
              controls: false,
              easing : settings.easing,
              onSlideBefore: function ($el, oldIndex, newIndex) { //switches current page link highlight
                if (settings.zeroSlide) {
                  if (oldIndex !== 0) nav.eq(oldIndex - 1).parent().removeClass('current');
                  if (newIndex !== 0) nav.eq(newIndex - 1).parent().addClass('current'); 
                } else {
                  nav.eq(oldIndex).parent().removeClass('current'); 
                  nav.eq(newIndex).parent().addClass('current');
                }
              }
            }),
            
            nav = $(menu).find('a'),
        
            gotoIndex = function(index) {
              slideNum = nav.length;
              if (settings.zeroSlide) slideNum++;
              if (slideNum <= index || index < 0) return false;
              slider.goToSlide(index);
            },
            
            jump = function (slug) {
              if (slug === undefined) {return; }
                nav.each(function (i) {//cycle through menu
                if ($(this).parent().prop('class').toLowerCase().indexOf(slug.toLowerCase()) >= 0) { //li.class contains slug
                    slideIndex = i;
                    if (settings.zeroSlide) slideIndex++;
                    gotoIndex(slideIndex);
                    return false; //same as break
                }
              });
            },
            
            endsWith = function (str) {
              return (this.match(str+"$")==str);
            },
            
            site_url = window.location.href.replace('#', '').split(new RegExp("//|/|=")).filter(function (e) {return e; });            
        
      //initialization
      $(settings.mobileMenu).click(function () {$(settings.menu).toggle();});
      
      if (settings.zeroSlide) nav.eq(0).parent().removeClass('current');
           
      nav.each(function (i) {
          $(this).prop("href", "#"); //remove all links from menu (VERY important!)
          $(this).click(function () {
              var slideIndex = i;
              if (settings.zeroSlide) slideIndex++;
              gotoIndex(slideIndex);
              //collapse mobile menu on click (touch) event
              if ($(settings.mobileMenu).css("visibility") === "visible") {$(settings.menu).toggle();}
          });
          if ($(this).parent().hasClass('current')) {
            $(this).trigger( "click" ); 
          }
      });        
        
      //clean local links
      this.children().each( function () {
        $(this).find('a').each(function () {
            var a = $(this),
                link_url;
            if (a.hasClass('slider-next') || a.hasClass('slider-prev') || a.hasClass('slider-jump') || a.hasClass('slider-goto')) {
                return false; //manually created links
            }
            if (a.prop('href').endsWith('jpg') || a.prop('href').endsWith('gif') || a.prop('href').endsWith('png')) {
                return false; //image link
            }            
            link_url = a.prop('href').replace('#', '').split(new RegExp("//|/|=|#")).filter(function (e) {return e; });    
            if (link_url[0] == site_url[0] && link_url[1] == site_url[1]) a.prop('href', '#').addClass('slider-jump').attr('data-jump', link_url[link_url.length - 1]);
            
            /*for (var el = 0; el < link_url.length; el++) {
                if (el >= site_url.length) {
                    a.prop('href', '#').addClass('slider-jump').attr('data-jump', link_url[link_url.length - 1]);
                    break;
                } else if (link_url[el] !== site_url[el]) {
                    break;
                }
            }*/
        });
      });
        
      //helper classes for site-wide links
      $('.slider-next').prop('href', '#').click(function () {slider.goToNextSlide(); });
      $('.slider-prev').prop('href', '#').click(function () {slider.goToPrevSlide(); });
      $('.slider-jump').prop('href', '#').click(function () {jump($(this).attr('data-jump')); }); //data-jump should be page slug
      $('.slider-goto').prop('href', '#').click(function () {gotoIndex(parseInt($(this).attr('data-goto'))); }); //number of the slide to jump
        
      return this;
 
    }; //$.fn.skrollr
 
}( jQuery ));