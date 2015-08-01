/* =======================================

  Common JS

========================================== */


/* User Agent
https://w3g.jp/blog/js_browser_sniffing2015
========================================== */

var _ua = (function(u){
  return {
    Tablet:(u.indexOf("windows") != -1 && u.indexOf("touch") != -1)
      || u.indexOf("ipad") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") == -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1)
      || u.indexOf("kindle") != -1
      || u.indexOf("silk") != -1
      || u.indexOf("playbook") != -1,
    Mobile:(u.indexOf("windows") != -1 && u.indexOf("phone") != -1)
      || u.indexOf("iphone") != -1
      || u.indexOf("ipod") != -1
      || (u.indexOf("android") != -1 && u.indexOf("mobile") != -1)
      || (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1)
      || u.indexOf("blackberry") != -1
  }
})(window.navigator.userAgent.toLowerCase());

(function($){ // start jquery

var wsUA = function() {
  if(_ua.Mobile) {
    return 'sp';
  } else {
    return 'full';
  }
};


$(window).ready(function() {

  /* UA
  ========================================== */
  wsBrowser = wsUA();
  if(wsBrowser == 'sp'){
    $('#main #commentFb, #footer .backToTop, #main .socialS, #main #contentsWrapper .socialW').remove();
  } else {
    $('#footer').append('<p class="backToTop"><a href="#document" class="up">ページ先頭</a><a href="#footer" class="down">ページ末尾</a></p>');
  }

});


$(function(){

  /* UA
  ========================================== */
  if(wsBrowser == 'sp'){
    $('body').addClass('sp');
  } else {
    $('body').addClass('full');
  }

  /* win/mac
  ========================================== */
  var UA = navigator.userAgent;
  if(UA.match(/[Ww]in/)) {
    $('body').addClass('win');
  } else if(UA.match(/[Mm]ac/)) {
    $('body').addClass('mac');
  }

  /* globalNav
  ========================================== */
  if(wsBrowser == 'sp'){
    $('#globalNav > ul > li > ul').remove();
  } else {
    var LEN = $('#globalNav > ul > li').length;
    $('#globalNav > ul').addClass('gnav' + LEN);
    $('#globalNav > ul > li > ul').css({display: 'none'});
    $('#globalNav > ul > li')
      .live('mouseover', function(){
        $(this).find('ul').eq(0)
          .stop()
          .slideDown('fast', 'easeInOutQuart');
      })
      .live('mouseout', function(){
        $(this).find('ul').eq(0)
          .stop()
          .slideUp('fast', 'easeInOutQuart');
      });
  }

  /* Smooth Scroll
  ========================================== */
  $('a[href^=#]:not(a[href$=#])').click(function(){
    var href= this.hash;
    var $target = $(href == '#_top' ? 'body' : href);

    // アンカーリンクがあるページでだけ以下を実行
    if($target.size()){
      var top = $target.offset().top;
      $($.browser.safari ? 'body' : 'html').animate({scrollTop:top}, 500, 'easeInOutQuart');
    }
    return false;
  });

  /* Form Focus
  ========================================== */

  $('input.inputTxt, textarea.inputTxt, select.inputSelect').each(function() {
    $(this).bind('focus', function(){
      $(this).addClass('inputFocus');
    });
    $(this).bind('blur', function(){
      $(this).removeClass('inputFocus');
    });
  });

  $('.submitBtn').each(function() {
    $(this).bind('mouseover', function(){
      $(this).addClass('submitBtnHover');
    });
    $(this).bind('mouseout', function(){
      $(this).removeClass('submitBtnHover');
    });
  });


  /* Zebra
  ========================================== */

  $('#main .headline').each(function() {
    $('.post:nth-child(even)', this).addClass('even');
  });


}); // end $(function


})(jQuery); // end jquery
