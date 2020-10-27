import 'bootstrap';

import '../scss/index.scss';

import '../slick/slick.min.js';

import '../lottie/bodymovin.js';
//import '../lottie/lottie.js'; <-- does not work

// https://github.com/alvarotrigo/fullPage.js/wiki/Use-module-loaders-for-fullPage.js
//import IScroll from '../fullpage/scrolloverflow.min.js';
//import fullpage from '../fullpage/fullpage.js';

import IScroll from 'fullpage.js/vendors/scrolloverflow';

//import fullpage from 'fullpage.js';
import parallax from '../fullpageparallax/fullpage.parallax.min';
import fullpage from 'fullpage.js/dist/fullpage.extensions.min';

(function($) {
  /*'use strict';*/

  const splashDuration = 4000;
  const bodyDisplay    = splashDuration - 1000;
  const splashHide     = splashDuration + 1000;

  let frameHeight = 90;

  var $playFixedVideo = $(".scroll-fixedvideo-play");
  var $overlayFixedVideo = $(".scroll-fixedvideo-stop");

  const fullParalaxOptions = {
      //anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
      //menu: '#menu',
      scrollBar: false,
      slidesNavigation: true,
      scrollingSpeed: 1000,

      licenseKey: '02EF1C6C-6EB14AD4-BADA0490-EBDF28DF',
      scrollOverflow: true,
      normalScrollElements: '.scrollable-element',
      afterLoad: function(origin, destination, direction){
        var leaving = origin.item.classList.value;
        var arrival = destination.item.classList.value;
        //console.log(classes);
        if(arrival.indexOf("scroll-video-autoplay") > -1 ) {
          //console.log('play video');
          var jqele = $(destination.item);
          var playButton  = jqele.find('.video_control');
          playButton.trigger('click');
        }
        if(leaving.indexOf("scroll-video-autoplay") > -1 ) {
          //console.log('pause video');
          var jqele = $(origin.item);
          var playButton  = jqele.find('.video_control');
          playButton.trigger('click');
        }

        function clickVideoButton() {
          var $ele = $('#sectionFixedVideo');
          var playButton  = $ele.find('.video_control');
          playButton.trigger('click');
        }



        if(arrival.indexOf("scroll-fixedvideo-play") > -1) {
          
          if(direction === 'down') {
            clickVideoButton();
          }
          if(direction === 'up') {
            var $ele = $(destination.item);
            if($ele.find('.video-overlay').hasClass('mshow')) {
              $('.video-overlay').removeClass('hshow');
              $('.video-overlay').removeClass('mshow');
            } else {
              $ele.find('.video-overlay').addClass('hshow');
              $(".scroll-fixedvideo-stop .video-overlay").addClass('mshow');
            }
          }
        }

        if(arrival.indexOf("scroll-fixedvideo-stop") > -1) {
          
          if(direction === 'up') {
            clickVideoButton();
          }
          if(direction === 'down') {
            var $ele = $(destination.item);
            if($ele.find('.video-overlay').hasClass('mshow')) {
              $('.video-overlay').removeClass('hshow');
              $('.video-overlay').removeClass('mshow');
            } else {
              $ele.find('.video-overlay').addClass('hshow');
              $(".scroll-fixedvideo-play .video-overlay").addClass('mshow');
            }
          }
        }
        
        if(leaving.indexOf("scroll-fixedvideo-play") > -1 && direction === 'up') {
          clickVideoButton();
          $('.video-overlay').removeClass('hshow');
          $('.video-overlay').removeClass('mshow');
        }

        if(leaving.indexOf("scroll-fixedvideo-stop") > -1 && direction === 'down') {
          clickVideoButton();
          $('.video-overlay').removeClass('hshow');
          $('.video-overlay').removeClass('mshow');
        }

        //Changing Fixed Video Background
        if(typeof destination.item.dataset.upfixedvideo !== 'undefined') {
          if(direction === 'up') {
            //console.log('loading video');
            $('#sectionFixedVideo video source').attr('src',destination.item.dataset.upfixedvideo);
            $("#sectionFixedVideo video")[0].load();
          } 
          
        }
        if(typeof destination.item.dataset.downfixedvideo !== 'undefined') {
          if(direction === 'down') {
            //console.log('loading video');
            $('#sectionFixedVideo video source').attr('src',destination.item.dataset.downfixedvideo);
            $("#sectionFixedVideo video")[0].load();
            
          } 
        }

        //Changing Fixed Image Background
        if(typeof destination.item.dataset.upfixedimage !== 'undefined') {
          if(direction === 'up') {
            //console.log('loading image');
            $('#sectionFixedImage').css('opacity',1);
            $('#sectionFixedImage img').attr('src',destination.item.dataset.upfixedimage);
            $("#sectionFixedVideo").hide();
            
          }
        }
        if(typeof destination.item.dataset.downfixedimage !== 'undefined') {
          if(direction === 'down') {
            //console.log('loading image');
            $('#sectionFixedImage').css('opacity',1);
            $('#sectionFixedImage img').attr('src',destination.item.dataset.downfixedimage);
            $("#sectionFixedVideo").hide();
          }
        }
      },
      onLeave: function(origin, destination, direction){ 
        var leaving = origin.item;
        var arrival = destination.item;

        var jqele = $(leaving);
        var collButton  = jqele.find('a[data-toggle="collapse"]');
        if(collButton.attr('aria-expanded')==="true") {
          collButton.trigger('click');
        }

        if(leaving.classList.value.indexOf("hidden-content") > -1){
          jqele.find('.button-show-hidden-element').removeClass('hhide');
          jqele.find('.hidden-element').removeClass('hshow');
        }
        
        
        if(typeof arrival.dataset.menucolor !== 'undefined'){
          let mcolor ='#FFFFFF';
          if(arrival.dataset.menucolor === 'brown') {
            mcolor ='#70634A';
          } 
          $('.navbar-toggler .icon-bar').css('background-color', mcolor);
        }
        if(typeof arrival.dataset.arrowcolor !== 'undefined'){
          let scolor ='#FFFFFF';
          let imgarrow = './public/images/icon/ENT_Up Arrow_White.svg';
          if(arrival.dataset.arrowcolor === 'brown') {
            scolor ='#70634A';
            imgarrow = './public/images/icon/ENT_Up Arrow_Brown.svg';
          } 
          $('#fixed-arrow-up').css('color', scolor);
          $('#fixed-arrow-up img').attr('src',imgarrow);
        }
        if(destination.index !== 0){
          $('header .navbar').css({
            "z-index": -1,
            "opacity": 0
          });
          $('#sectionFixedVideo').css('opacity',1);

        } else {
          $('header .navbar').css({
            "z-index": 10,
            "opacity": 1
          });
          $('#sectionFixedVideo').css('opacity',0);
        }


        //Changing Fixed Video Background
        if(typeof origin.item.dataset.upfixedvideo !== 'undefined') {
          if(direction === 'down') {
            //console.log('removing video');
            $('#sectionFixedVideo video source').attr('src','');
            $("#sectionFixedVideo video")[0].load();
          }
        }
        if(typeof origin.item.dataset.downfixedvideo !== 'undefined') {
          if(direction === 'up') {
            //console.log('removing video');
            $('#sectionFixedVideo video source').attr('src','');
            $("#sectionFixedVideo video")[0].load();
          }
        }

        //Changing Fixed Image Background
        if(typeof origin.item.dataset.upfixedimage !== 'undefined') {
          if(direction === 'down') {
            //console.log('removing image');
            $('#sectionFixedImage').css('opacity',0);
            $('#sectionFixedImage img').attr('src','');
            $("#sectionFixedVideo").show();
          }
        }
        if(typeof origin.item.dataset.downfixedimage !== 'undefined') {
          if(direction === 'up') {
            //console.log('removing image');
            $('#sectionFixedImage').css('opacity',0);
            $('#sectionFixedImage img').attr('src','');
            $("#sectionFixedVideo").show();
          }
        }

        if(leaving.classList.value.indexOf("animateFrames-helper__void") > -1  && direction == 'up'){
        //if(origin.index == 1 && direction == 'up'){
          //console.log("Going to section 1!");
          CDG.disableFullPage(true);
          return false;
        }
      },
      parallax: true,
      parallaxKey: 'ZW50ZXJwcm9qZWN0cy5uZXRfQXpFY0dGeVlXeHNZWGc9OWZD', //see https://goo.gl/xkUmHS
      parallaxOptions: {
          type: 'reveal',
          percentage: 62,
          property: 'translate'
      }
  }

  function setCookie(name, value, daysToLive) {
      // Encode value in order to escape semicolons, commas, and whitespace
      var cookie = name + "=" + encodeURIComponent(value)+ "; SameSite=Strict";
      
      if(typeof daysToLive === "number") {
          /* Sets the max-age attribute so that the cookie expires
          after the specified number of days */
          cookie += "; max-age=" + (daysToLive*24*60*60);
      }

      document.cookie = cookie;
  }

  function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");
    
    // Loop through the array elements
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if(name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }
    // Return null if not found
    return null;
  }

  var CDG = {
    //OnReady functions




    addMSGonReady: function() {
      console.log('Codigo Ready');
    },

    slickslider: function() {
      if ($('.slick-carousel').length) {
        var int = 0;
        var $carousels = [];
        $('.slick-carousel').each(function(){

          var $carousel = $(this);
          var autoplay = $carousel.data('autoplay'),
            dots       = $carousel.data('dots'),
            arrows     = $carousel.data('arrows'),
            slides     = $carousel.data('slides'),
            info       = $carousel.data('info'),
            fullbutton = $carousel.data('fullbutton');

          if ($('#splash').length) {
            var realautoplay = autoplay;
            autoplay = false;
          }

          var slickOptions = {
            lazyLoad: 'ondemand',
            infinite: true,
            autoplay: autoplay,
            dots: dots,
            arrows: arrows,
            slide:'div',
            prevArrow: '<button class="slick-prev slick-arrow"></button>',
            nextArrow: '<button class="slick-next slick-arrow"></button>',
          }

          if(typeof slides !== 'undefined' && slides > 1){
            slickOptions['slidesToShow'] = slides;
            //slickOptions['centerMode'] = true;
            //slickOptions['variableWidth'] = true;

            /**
            $carousel.slick('slickSetOption', {
              'slidesToShow': slides,
              'centerMode': true,
              'variableWidth': true,
            }, true);
            /**/
          }

          //console.log(slickOptions);

          $carousel.slick(slickOptions);


          if(typeof fullbutton !== 'undefined'){
            $("#"+fullbutton).on("click", function () {
              var elem = $carousel.get(0);

              if (document.fullscreenElement) {
                document.exitFullscreen();
              } else {
                if (elem.requestFullscreen) {
                  elem.requestFullscreen();
                } 
                /**
                else if (elem.msRequestFullscreen) {
                  elem.msRequestFullscreen();
                } else if (elem.mozRequestFullScreen) {
                  elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) {
                  elem.webkitRequestFullscreen();
                }
                /**/
              }
            });

            if (document.addEventListener) {
             document.addEventListener('fullscreenchange', changeFullScreen, false);
             document.addEventListener('mozfullscreenchange', changeFullScreen, false);
             document.addEventListener('MSFullscreenChange', changeFullScreen, false);
             document.addEventListener('webkitfullscreenchange', changeFullScreen, false);
            }
          }

          function changeFullScreen() {
            if (!document.fullscreenElement) {
              //console.log('exit fullscreen');

              $carousel.slick("unslick");

              if(typeof slides !== 'undefined' && slides > 1){
                slickOptions['slidesToShow'] = slides;
                slickOptions['centerMode'] = true;
                slickOptions['variableWidth'] = true;
                //console.log(slickOptions);
              }

              $carousel.slick(slickOptions);

            } else {
              //console.log('enter fullscreen');

              $carousel.slick("unslick");

              slickOptions['slidesToShow'] = 1;
              slickOptions['centerMode'] = false;
              slickOptions['variableWidth'] = false;

              $carousel.slick(slickOptions);
            }
            //if (document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement !== null)
          }


          if(typeof info !== 'undefined' && info != 0){
            var $status = $('#'+info);

            $carousel.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
                
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;

                if(typeof slick['$slides'][currentSlide].dataset.caption !== 'undefined') {
                  $status.text(slick['$slides'][currentSlide].dataset.caption);
                } else {
                  $status.text(i + ' / ' + slick.slideCount);
                }
              
            });

          }
          if ($('#splash').length) {
              setTimeout(
                  function() {
                    //console.log('autoplay: '+realautoplay);
                    $carousel.slick('slickSetOption', {
                      'autoplay': realautoplay
                    }, true);
                },
              splashDuration);
          }
          
          $carousels.push($carousel);

        });

      }
    },

    moveHiddenRightBlock: function() {
      $('.button-show-right-wrap').click(function() {
        let $leftBlock = $(this).closest('.trigger-hidden-right-wrap');
        let $rightBlock = $leftBlock.parent().find('.hidden-right-wrap');
        $leftBlock.addClass('move');
        $rightBlock.addClass('show');

        //Hide navigation elements
        //$('.navbar-toggler').css('z-index',-1);
        //$('#fixed-arrow-up').css('z-index',-1);

        if ($('#nofullpage').length) {
          $('body').css('overflow','hidden');
        }


      });

      $('.button-hide-right-wrap').click(function() {
        //console.log('.button-hide-right-wrap cicked');
        let $rightBlock= $(this).closest('.hidden-right-wrap');
        let $leftBlock = $rightBlock.parent().find('.trigger-hidden-right-wrap');
        $leftBlock.removeClass('move');
        $rightBlock.removeClass('show');

        //Show navigation elements
        //$('.navbar-toggler').css('z-index',11);
        //$('#fixed-arrow-up').css('z-index',11);

        if ($('#nofullpage').length) {
          $('body').css('overflow','visible');
        }
      });
    },

    fullpage: function(){
      if ($('#fullpage').length) {
        var fullPageInstance = new fullpage('#fullpage', {
            //menu: '#menu',
            scrollBar: false,
            licenseKey: '02EF1C6C-6EB14AD4-BADA0490-EBDF28DF',
            scrollOverflow: true,
            afterLoad: function(origin, destination, direction){
              var leaving = origin.item.classList.value;
              var arrival = destination.item.classList.value;
              //console.log(classes);
              if(arrival.indexOf("scroll-video-autoplay") > -1 ) {
                //console.log('play video');
                var jqele = $(destination.item);
                var playButton  = jqele.find('.video_control');
                playButton.trigger('click');
              }
              if(leaving.indexOf("scroll-video-autoplay") > -1 ) {
                //console.log('pause video');
                var jqele = $(origin.item);
                var playButton  = jqele.find('.video_control');
                playButton.trigger('click');
              }
            }
        });
      }
      if ($('#fullpageParallax').length) {

        if(typeof $('#fullpageParallax').data('scrolloverflow') !== 'undefined') {
          fullParalaxOptions.scrollOverflow = $('#fullpageParallax').data('scrolloverflow') 
        }

        var fullPageInstance = new fullpage('#fullpageParallax',fullParalaxOptions);

        $('.changebackground').click(function(){

          let bgvideo = $(this).data('fixedvideo');
          if(typeof bgvideo !== 'undefined') {
            $('#sectionFixedVideo video source').attr('src',bgvideo);
            $("#sectionFixedVideo video")[0].load();

            $('#sectionFixedImage').css('opacity',0);
            $("#sectionFixedVideo").show();
          }

          let bgimage = $(this).data('fixedimage');
          if(typeof bgimage !== 'undefined') {
            $('#sectionFixedImage').css('opacity',1);
            $('#sectionFixedImage img').attr('src',bgimage);
            $("#sectionFixedVideo").hide();
          }
        });
      }

      if(typeof fullPageInstance !== 'undefined'){
        $('#fixed-arrow-up').on("click",function(){
          console.log('move up');
          fullpage_api.moveTo(1);
          //fullpage_api.moveSectionDown();
        });
      }

    },

    enableFullPage: function() {
        //console.log('enable fullpage');
        var fullPageInstance = new fullpage('#fullpageHold', fullParalaxOptions);
        /**
        var fullPageInstance = new fullpage('#fullpageHold', {
            //menu: '#menu',
            scrollBar: false,
            licenseKey: '02EF1C6C-6EB14AD4-BADA0490-EBDF28DF',
            scrollOverflow: true,
            onLeave: function(origin, destination, direction){
              var leaving = origin.item.classList.value;
              
              if(origin.index == 1 && direction == 'up'){
                console.log(leaving);
                //console.log("Going to section 1!");
                CDG.disableFullPage();
                return false;
              }
            }
        });
        /**/
    },

    disableFullPage: function(scroll) {
        //console.log('destroy fullpage');
        fullpage_api.destroy('all');
        
        if(scroll === true) {
          setTimeout(function() { 
            $('#animateFrames').removeClass('occult');
            $('header').removeClass('withheld');
            CDG.scrollAnimation(frameHeight-1);
          }, 100);
        }
        
    },

    scrollAnimation: function(gotopos) {
      // https://levelup.gitconnected.com/how-to-create-frame-by-frame-moving-image-on-scroll-effect-30ce577c63c2

      //console.log('starting scrollAnimation ');

      const numFrames = 37;
      // Images asset
      const anImages = {1:'./public/images/practice/animation/01.jpg'}
      for(let i=2;i<numFrames;i++) {
        let j=i;
        if(i<10) j="0"+i;

        anImages[i] = './public/images/practice/animation/'+j+'.jpg';
      }


      // Global variable to control the scrolling behavior
      const h = window.innerHeight;
      const step = 30; // For each 30px, change an image
      frameHeight = 2*(step*numFrames) +30;
      $('#animateFrames .hero').css('height', frameHeight+'px');
      $('#animateFramesHelper').css('min-height', frameHeight+'px');

      //console.log('scroll to '+gotopos);
      /**/
      if(gotopos == 'limit') {
        window.scrollTo(0,frameHeight);
      } else {
        window.scrollTo(0,gotopos);
      }
      /**/
      

      function trackScrollPosition() {
        const y = window.scrollY;
        
        let label = Math.min(Math.floor(y/step), numFrames);
        if(Math.floor(y/step)>numFrames) {
          label = Math.min(Math.floor(y/(2*step)), numFrames);
        }

        const imageToUse = anImages[label];
        //console.log(imageToUse);
        // Change the background image
        
        $('#animateFrames img').attr('src', imageToUse);
        
        //console.log('pos Y: '+ y);

        if(y > (frameHeight - h)) {
          const alpha = parseFloat((frameHeight - y)/h).toFixed(2);
          $('#animateFrames .hero').css('opacity',alpha);
        }

        /**/
        
        //console.log('frameHeight '+frameHeight);
        //console.log('Y '+y);
        if(y > frameHeight) {
          $('#animateFrames').addClass('occult');
          $('header').addClass('withheld');
          //console.log('enable fullpage');
          CDG.enableFullPage();
        } 

        /**/
        if ($('#nofullpage').length) {

          if(y > (window.innerHeight -150 )) {
            $('header .navbar').css({
              "z-index": -1,
              "opacity": 0
            });
          } else {
            $('header .navbar').css({
              "z-index": 10,
              "opacity": 1
            });
          }

          $('#nofullpage .section').each(function(){
            //console.log('scrolposY '+y);
            //console.log('inerheight '+window.innerHeight)
            //console.log($(this).offset().top);
            var elePosY = $(this).offset().top - y;

            if(elePosY < 0 && Math.abs(elePosY)<window.innerHeight) {
              //console.log($(this).attr('class') );

              if(typeof $(this).data('menucolor') !== 'undefined'){
                let mcolor ='#FFFFFF';
                if($(this).data('menucolor') === 'brown') {
                  mcolor ='#70634A';
                } 
                $('.navbar-toggler .icon-bar').css('background-color', mcolor);
              }
              

            }

            if(elePosY > 0 && Math.abs(elePosY)<window.innerHeight) {
              if(typeof $(this).data('arrowcolor') !== 'undefined'){
                let scolor ='#FFFFFF';
                let imgarrow = './public/images/icon/ENT_Up Arrow_White.svg';
                if($(this).data('arrowcolor')  === 'brown') {
                  scolor ='#70634A';
                  imgarrow = './public/images/icon/ENT_Up Arrow_Brown.svg';
                } 
                $('#fixed-arrow-up').css('color', scolor);
                $('#fixed-arrow-up img').attr('src',imgarrow);
              }
            }
            //console.log('section pos '+ elePosY );
          });
        }
        

      }

      // register an event listener on window
      $(window).scroll(()=>{
        // We don't need to use 'event' as the scroll exist in window
        trackScrollPosition();
      })


      if ($('#nofullpage').length) {
        $('#fixed-arrow-up').on("click",function(){
          //console.log('move up');
          $('html,body').animate({ scrollTop: 0 }, 'slow');
          //fullpage_api.moveSectionDown();
        });
      }


      
    },

    /*
		* Full Height on mobile
		*/
		cssElements: function() {
			function setDocHeight() {
        
        document.documentElement.style.setProperty('--vh', `${window.innerHeight/100}px`);
        //console.log('--vh='+window.innerHeight/100 + "px");
			};
			window.addEventListener('resize', setDocHeight());
			window.addEventListener('orientationchange', setDocHeight());

			setDocHeight()
    },
    
    /*
		* Buttons along the site
		*/
		animateElements: function() {
			$('.button-show-hidden-element').on("click",function(){
        //console.log('move up');
        let target = $(this).data('target');
        $(target).addClass('hshow');
        $(this).addClass('hhide');
      });
      $('.hidden-element').click(function(){
        //console.log( $(this).hasClass('noevent') );
        if( $(this).hasClass('noevent') === false ) {
          $(this).removeClass('hshow');
          $('.button-show-hidden-element').removeClass('hhide');
        }
      });

      $('.hidden-element').find('a').each(function(){
        $(this).hover(
          function() {
            //console.log('mouse enter');
            $('.hidden-element').addClass('noevent');
          }, function() {
            //console.log('mouse leave');
            $('.hidden-element').removeClass('noevent');
          }
        );
      });


		},



    burgerEffects: function() {
      //Burger menu effect
       $(".navbar-toggler__animated").on("click", function () {
          

          if($(this).hasClass("active")){
            setTimeout(
              function() {
                $('header .navbar').css({
                  "z-index": -1,
                  "opacity": 0
                });
              }, 
            1000);
          } else {
            $('header .navbar').css({
              "z-index": 10,
              "opacity": 1
            });
          }

          $(this).toggleClass("active");
          
          /**
           * $navbar=$(this).closest('.navbar');
          if($navbar.hasClass("back-white")) {
            //console.log('removing class');
            setTimeout(function () {
              //console.log('now');
              $navbar.removeClass("back-white");
            }, 500);
          }
          else {
            $navbar.addClass("back-white");
          }
          /**/

        });
    },

    splashAnimation: function(){
      if ($('#splash').length) {

        var splashDisplayed = getCookie('splash');
        //console.log('splash: '+splashDisplayed);

        if(splashDisplayed !== 'displayed') {

          $('.wsplash').css('opacity','0');
          $('#splash').css('z-index','10');

          setTimeout(
              function() {
                $('#splash').css('opacity','1');
            },
          100);

          setTimeout(
              function() {
                $('.wsplash').css('opacity','1');
            },
          bodyDisplay);
          /**/
          setTimeout(
              function() {
                $('#splash').css('opacity','0');
            },
          splashDuration);
          setTimeout(
              function() {
                $('#splash').css('z-index','-10');
            },
          splashHide);
          /**/
          setCookie("splash", 'displayed', null); 
        }


      }

    },

    logoAnimation: function(){
      if ($('#lottieLogo').length) {
        var animData = {
            container: document.getElementById('lottieLogo'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            //path: './public/videos/logo.json'
            path: './public/videos/happy2016.json'
            //path: 'https://labs.nearpod.com/bodymovin/demo/2016/data.json'
        };
        var anim = bodymovin.loadAnimation(animData);
      }
    },

    handleHTMLVideo: function() {
      if ($('.video_control').length) {
        var $vcontrols = [];
        $('.video_control').each(function(){

          var videoControl = $(this);
          var videoID      = videoControl.data('video'); 
          var htmlVideo    = $('#'+videoID).get(0); 
            
          htmlVideo.onplaying = function() {
            videoControl.hide();
          };
          
          videoControl.click(function(){
            if (videoControl.hasClass("active")){
              htmlVideo.play();
            } else { 
              htmlVideo.pause();
            }
            videoControl.toggleClass("active");
          });

          $vcontrols.push(videoControl);

        });
      } 
    },


    onreadyFunctions: function() {
      //CDG.addMSGonReady();
      CDG.splashAnimation();
      CDG.slickslider();
      CDG.moveHiddenRightBlock();
      CDG.burgerEffects();
      CDG.animateElements();
      CDG.scrollAnimation(0);
      CDG.fullpage();

      CDG.cssElements();
      CDG.handleHTMLVideo();
      CDG.logoAnimation();


      if(window.location.hash) {
          const hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
          //console.log(hash);
          // hash found
          if(hash === 'contact') {
            CDG.scrollAnimation('limit');
            //enableFullPage();
            setTimeout(function() { 
              fullpage_api.moveTo('contact');
            }, 100);
            
          }
      } 
    },

    //OnLoad functions

    addMSGonLoad: function() {
      //console.log('Codigo Loaded');
    },

    onloadFunctions: function() {
      //CDG.addMSGonLoad();
    },
  };

  $(window).ready(function() {
    CDG.onreadyFunctions();
  });

  $(window).on('load', function() {
    CDG.onloadFunctions();
  });
})(jQuery);
