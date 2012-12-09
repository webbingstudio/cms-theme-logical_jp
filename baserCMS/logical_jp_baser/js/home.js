/* =======================================

	Home JS

========================================== */

(function($){ // start jquery

$(window).resize(function() {
	resetHeight($('#Home #mainVisual'));
});

$(window).load(function() {
	resetHeight($('#Home #mainVisual'));
});

$(function(){
	/* slideMenu
	========================================== */
	var Obj = $('#Home #mainVisual');
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
