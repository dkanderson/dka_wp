/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var DKA = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
        /**
         * Copyright 2012, Digital Fusion
         * Licensed under the MIT license.
         * http://teamdf.com/jquery-plugins/license/
         *
         * @author Sam Sehnert
         * @desc A small plugin that checks whether elements are within
         *     the user visible viewport of a web browser.
         *     only accounts for vertical position, not horizontal.
         */

        $.fn.visible = function(partial) {
          
            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;
          
          return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

        };

        $('#mob-trigger').click(function(){
            $('#mob-trigger').addClass('open');
            $('body').append('<div class="menu-bg-cover"><div class="menu-container"></div></div><div class="overlayW"></div>');

            $('.screen-nav').clone().appendTo('.menu-container').removeClass('screen-nav').addClass('mobi-nav');
            setTimeout(function() {
                $('.menu-container').addClass('in');
                $('.overlayW').addClass('active');
            }, 100);
            $('.menu-bg-cover').click(function(){
              $('.menu-container').removeClass('in').addClass('out');
              $('#mob-trigger').removeClass('open');
              setTimeout(function(){
                  $('.menu-bg-cover').remove();
                  $('.overlayW').remove();
              }, 1000);
            });
        });
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  about: {
    init: function(){
      // about page only
    }
  },
  blog: {
    init: function() {
      // bog page only

      }
    },
  bio: {
    init: function(){
      // bio page only
        $('.mac-bg h1').addClass('move-up');
        
        $('.progress').each(function(i, el){
          el = $(el);
          if (el.visible(true)) {
            el.css('width', el.text());
          }
        });
        $(window).scroll(function(event) {
            $('.progress').each(function(i, el){
              el = $(el);
              if (el.visible(true)) {
                el.css('width', el.text());
              }
            });
        });

        
      }
    },
    work: {
      init: function(){
        var el = $('.description').find('h1'), fl;
        el.each(function(i, el){
            var newel = $(el);
            fl = newel.text().charAt(0);
            $(this).parent().find('span').append(fl);
        });

        $('.project a').hover(function(){
          $(this).find('.tech').addClass('animate');
          $(this).find('h1').addClass('animate');
        }, function(){
          $(this).find('.tech').removeClass('animate');
          $(this).find('h1').removeClass('animate');
        });
      }
    }
  };

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = DKA;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
