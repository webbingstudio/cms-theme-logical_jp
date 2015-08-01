/* =======================================

  Home JS

========================================== */

(function($){ // start jquery

$(window).resize(function() {
  resetHeight($('.home #mainVisual'));
});

$(window).load(function() {
  resetHeight($('.home #mainVisual'));
});

$(function(){
  /* slideMenu
  ========================================== */
  var Obj = $('.home #mainVisual');
  $('.mvSlide a', Obj).each(function(){
    //hrefが「#」であればリンクを除去する
    var HREF = $(this).attr('href');
    if(HREF == '#'){
      $(this).replaceWith($(this).html());
    }
  });
  Obj.wsSlideMenu();
}); // end $(function

var resetHeight = function(Obj) {
  var H = $('#mvContainer .mvSlide img', Obj).eq(0).height();
  $('#mvContainer, .mvNav', Obj).height(H);
}

})(jQuery); // end jquery
