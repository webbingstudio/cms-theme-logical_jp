/* =======================================

	Common JS

========================================== */

(function($){ // start jquery

/* scrollFix
========================================== */

$.fn.WSscrollFix = function(options){
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


$(window)
	.ready(function() {

		/* UA
		========================================== */
		var ua = navigator.userAgent.toLowerCase();
		$.browser.iphone = /iphone/.test(ua);
		$.browser.ipod = /ipod/.test(ua);
		$.browser.ipad = /ipad/.test(ua);
		$.browser.android = /android/.test(ua);
		$.browser.iemobile = /iemobile/.test(ua);
		if($.browser.iphone || $.browser.ipod || $.browser.ipad || $.browser.android || $.browser.iemobile) {
			WSbrowser = 'sp';
		} else {
			WSbrowser = 'full';
		}
		if(WSbrowser == 'sp'){
			$('#footer .backToTop, #main .socialS, #main #contentsWrapper .socialW').remove();
		} else {
			$('#footer').append('<p class="backToTop"><a href="#document" class="up">ページ先頭</a><a href="#footer" class="down">ページ末尾</a></p>');
			$('#footer .backToTop').WSscrollFix();
		}

	})
	.scroll(function() {
		if(WSbrowser != 'sp'){
			$('#footer .backToTop').WSscrollFix();
		}
	})
	.resize(function() {
		if(WSbrowser != 'sp'){
			$('#footer .backToTop').WSscrollFix();
		}
	});


$(function(){

	/* ua
	========================================== */
	if(WSbrowser != 'sp'){
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
	if(WSbrowser == 'sp'){
		$('#globalNav > ul > li > ul').remove();
	} else {
		var LEN = $('#globalNav > ul > li').length;
		$('#globalNav > ul').addClass('gnav' + LEN);
		$('#globalNav ul li ul').css({display: 'none'});
		$('#globalNav > ul > li')
			.live('mouseover', function(){
				$('ul', this)
					.stop()
					.slideDown('fast');
			})
			.live('mouseout', function(){
				$('ul', this)
					.stop()
					.slideUp('fast');
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
			$($.browser.safari ? 'body' : 'html').animate({scrollTop:top}, 500, 'swing');
		}
		return false;
	});

	/* Form Focus
	========================================== */

	$('input[type="text"].inputTxt, textarea.inputTxt, select.inputSelect').each(function() {
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

	/* Icon
	========================================== */

	$('#main .freetxt a').each(function() {
		var HREF = $(this).attr('href');
		if(HREF.match(/.+\.pdf$/)) {
			$(this).addClass('pdf');
		}
		if(HREF.match(/.+\.doc[x]*$/)) {
			$(this).addClass('doc');
		}
		if(HREF.match(/.+\.xls[x]*$/)) {
			$(this).addClass('xls');
		}
	});


	/* zebra
	========================================== */

	$('#main .headline').each(function() {
		$('.post:nth-child(even)', this).addClass('even');
	});



	/* biggerLink
	========================================== */
	if(WSbrowser != 'sp'){
		$('#Home #pickup .post, #Home #topHeadline .post').hover(
		function() {
			$(this).addClass('postHover');
		},function() {
			$(this).removeClass('postHover');
		});
	}
	$('#Home #pickup .post, #Home #topHeadline .post').css({
		cursor: 'pointer'
	});
	$('#Home #pickup .post, #Home #topHeadline .post').click(function() {
		HREF = $(this).find('a').eq(0).attr('href');
		window.location.href = HREF;
		return false;
	});


}); // end $(function


})(jQuery); // end jquery
