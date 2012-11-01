<?php
/**
 * METAタグ
 */
global $wsLogColor;
global $wsLogFbAdminID;
global $wsLogOGPImg;
global $wsLogSnsBtn;
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no,address=no,email=no">

<!--[if lt IE 9]><?php $bcBaser->js(array('html5.js')) ?>
<![endif]-->

<?php $bcBaser->title(' | ' , true) ?>

<?php $bcBaser->metaDescription() ?>

<?php $bcBaser->metaKeywords() ?>

<?php
/* og:titleは取得できないので保留 ===================== */

/* og:description ===================== */
echo '<meta property="og:description" content="' . $bcBaser->getDescription() . '">' . "\n";

/* og:site_name ===================== */
echo '<meta property="og:site_name" content="' . $bcBaser->_view->viewVars['siteConfig']['name'] . '">' . "\n";

/* og:image ===================== */
if($wsLogOGPImg) {
echo '<meta property="og:image" content="' . $wsLogOGPImg . '">' . "\n";
}

/* fb:admins ===================== */
if($wsLogFbAdminID) {
echo '<meta property="fb:admins" content="' . $wsLogFbAdminID . '">' . "\n";
}

?>
<?php if($bcBaser->isHome()): ?>
<meta property="og:type" content="website">
<?php else: ?>
<meta property="og:type" content="article">
<?php endif; ?>

<?php
$bcBaser->css(array('reset', 'base', 'parts', 'textdecoration'));
if($bcBaser->isHome()) {
	$bcBaser->css(array('home'));
}
if($wsLogColor == 'blue') {
	$bcBaser->css(array('color_blue'));
}
?>
<?php $bcBaser->js(array('jquery', 'common')) ?>

<?php $bcBaser->icon() ?>

<?php $bcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>

<?php if($wsLogSnsBtn['google'] == 1): ?>
<script type="text/javascript">
  window.___gcfg = {lang: 'ja'};
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script><?php endif ?>

<?php if(!$bcBaser->isHome()): ?>
<?php
	$bcBaser->css(array('colorbox/colorbox'), array('inline' => true));
	$bcBaser->js('jquery.colorbox-min', false);
?>
<script type="text/javascript">
(function($){
$(function(){
	//common.js: モバイル端末であれば起動しない
	if(WSbrowser != 'sp'){
		if($("#main a[rel='colorbox']").colorbox){
			$("#main a[rel='colorbox']").colorbox({transition:"fade"});
		}
	}
});
})(jQuery);
</script>
<?php endif ?>

<?php $bcBaser->scripts() ?>
