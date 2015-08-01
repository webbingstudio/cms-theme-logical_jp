/* =======================================

  jQuery wsSlideMenu
  version 1.0

  Copyright (c) 2012 Seiko Kuchida(WebbingStudio)

  このプラグインは個人・商用ともにMITライセンスで公開しています。
  著作権表示を残していただければ、自由にご利用いただけます。
  ただし、作者はプラグインに関してなんら責任を負いません。

  This plugin available for use in all personal or commercial projects
  under both MIT licenses.

========================================== */

(function($){ // start jquery

$.fn.wsSlideMenu = function(options){
  var defaults = {
    slideEasingFunction: 'easeOutQuart',
    slideEasingDuration: 3000,
    slideInterval: 7000,
    firstSlide: 1
  };
  var settings = $.extend({}, defaults, options);

  return this.each(function(){
    var slideShow = $(this);
    var ssCntCurrent = settings.firstSlide - 1;
    var ssCntNext;
    var ssMax = $('.mvSlide', this).length - 1;
    var navClicked = 0;
    var ssStop = 0;
    var ssTimer;
    var stageWidth = $('#mvContainer', slideShow).width();

    $('.mvSlide', slideShow).css({
      top: 0,
      left: '-' + stageWidth + 'px',
      opacity: 0,
      zindex: 110
    });

    $('#mvContainer', slideShow)
      .append('<div id="mvPrev" class="mvNav"><span class="icon">&lt;</span></div><div id="mvNext" class="mvNav"><span class="icon">&gt;</span></div><div id="mvLoading"></div>');

    $('.mvNav', slideShow)
      .live('mouseover', function(){
        $(this).css({
          backgroundColor: '#000'
        });
        $('.icon', this).css({
          opacity: '1'
        });
      })
      .live('mouseout', function(){
        $(this).css({
          backgroundColor: 'transparent'
        });
        $('.icon', this).css({
          opacity: '.8'
        });
      });
    $('#mvPrev', slideShow).live('click', function(){
      if(navClicked == 0){
        navClicked = 1;
        slideMove(1);
      }
    });
    $('#mvNext', slideShow).live('click', function(){
      if(navClicked == 0){
        navClicked = 1;
        slideMove(0);
      }
    });

slideShow.ready(function() {
  if(ssCntCurrent > ssMax) { ssCntCurrent = 0 }
  if(ssCntCurrent < 0) { ssCntCurrent = ssMax }
  $('#mvLoading', slideShow).animate({
      opacity: 0
    }, settings.slideEasingDuration, settings.slideEasingFunction,
    function(){
      $('#mvLoading', slideShow).css({
        display: 'none'
      });
    });
  $('.mvSlide', slideShow).eq(ssCntCurrent)
    .css({
      left: 0,
      zindex: 111
    })
    .animate({
      opacity: 1
    }, settings.slideEasingDuration, settings.slideEasingFunction);
  ssTimer = slideStart();
});


var slideStart = function(){
  var timer = setInterval(slideMove, settings.slideInterval);
  return timer;
}

var slideStop = function(timer){
  clearInterval(timer);
}



var slideMove = function(prev){
  if(navClicked == 1) {
    ssStop = 1;
    slideStop(ssTimer);
  }

  ssCntNext = ssCntCurrent;
  if(prev == 1) { --ssCntNext; } else { ++ssCntNext; }
  if(ssCntNext > ssMax) { ssCntNext = 0 }
  if(ssCntNext < 0) { ssCntNext = ssMax }

  var ssCurrent = $('.mvSlide', slideShow).eq(ssCntCurrent);
  var ssNext = $('.mvSlide', slideShow).eq(ssCntNext);
  ssCntCurrent = ssCntNext;
  if(navClicked == 1) {
    navClicked = 0;
  }

  ssCurrent.css({
      top: 0,
      left: 0,
      opacity: 1,
      zIndex: 110
    })
    .stop()
    .animate({
      opacity: 0
    }, settings.slideEasingDuration, settings.slideEasingFunction,
      function(){
        slideMoveAfter(ssCurrent);
      });

  ssNext.css({
      top: 0,
      left: 0,
      opacity: 0,
      zIndex: 111
    })
    .stop()
    .animate({
      opacity: 1,
    }, settings.slideEasingDuration, settings.slideEasingFunction);

} //function slideMove

var slideMoveAfter = function(Obj){
  Obj.css({
    top: 0,
    left: '-' + stageWidth + 'px',
  });
  if(ssStop == 1) {
    ssStop = 0;
    ssTimer = slideStart();
  }
}

  });
};

})(jQuery); // end jquery
