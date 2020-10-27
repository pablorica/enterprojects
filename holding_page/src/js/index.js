import 'bootstrap';

import '../scss/index.scss';

import '../slick/slick.min.js';

(function($) {
  /*'use strict';*/

  var CDG = {
    //OnReady functions

    addMSGonReady: function() {
      console.log('Codigo Ready');
    },

    slickslider: function() {
      if ($('.slick-carousel').length) {
        var $carousel = $('.slick-carousel');
        var autoplay = $carousel.data('autoplay'),
          dots = $carousel.data('dots'),
          arrows = $carousel.data('arrows');
        $carousel.slick({
          lazyLoad: 'ondemand',
          autoplay: autoplay,
          dots: dots,
          arrows: arrows,
          prevArrow: '<button class="slick-prev slick-arrow">Prev</button>',
          nextArrow: '<button class="slick-next slick-arrow">Next</button>',
        });
      }
    },

    onreadyFunctions: function() {
      //CDG.addMSGonReady();

      CDG.slickslider();
    },

    //OnLoad functions

    addMSGonLoad: function() {
      console.log('Codigo Loaded');
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
