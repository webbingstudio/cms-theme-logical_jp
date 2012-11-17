/* =======================================

	Common JS

========================================== */

(function($){ // start jquery

/* scrollFix
========================================== */

$.fn.wsScrollFix = function(options){
	if(window.innerHeight) {
		var Ch = window.innerHeight;
	} else {
		var Ch = document.documentElement.clientHeight;
	}
	var defaults = {
		Ih : Ch
	};
	var settings = $.extend({}, defaults, options);

	return this.each(function(i){
		var St = $($.browser.safari ? 'body' : 'html').scrollTop();
		var Sb = St + settings.Ih;
		var Oh = $(this).height();
		var Top = Sb - Oh - 64;

		$(this).css({
			position: 'absolute',
			top: Top,
			right: '0',
			zIndex: 99,
		});
	});
};

var wsUA = function() {
	var ua = navigator.userAgent.toLowerCase();
	$.browser.iphone = /iphone/.test(ua);
	$.browser.ipod = /ipod/.test(ua);
	$.browser.ipad = /ipad/.test(ua);
	$.browser.android = /android/.test(ua);
	$.browser.iemobile = /iemobile/.test(ua);
	if($.browser.iphone || $.browser.ipod || $.browser.ipad || $.browser.android || $.browser.iemobile) {
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
		$('#footer .backToTop').wsScrollFix();
	}

});

$(window).scroll(function() {
	if(wsBrowser != 'sp'){
		$('#footer .backToTop').wsScrollFix();
	}
});

$(window).resize(function() {
	if(wsBrowser != 'sp'){
		$('#footer .backToTop').wsScrollFix();
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
