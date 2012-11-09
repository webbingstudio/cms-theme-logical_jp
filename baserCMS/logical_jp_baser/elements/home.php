<?php
/**
 * ホーム
 */
?>
<div id="contentsWrapper" class="layout01">

	<div id="contents01" class="contents">
<?php $bcBaser->flash() ?>
<?php $bcBaser->content() ?>

<?php global $wsLogHomeSummary ?>
<?php if($wsLogHomeSummary): ?>
<section class="section" id="topSummary">
	<header class="sectionHeader">
		<h1><?php echo $wsLogHomeSummary['categoryName'] ?></h1>
		<!-- .sectionHeader --></header>
	<div class="sectionContents">

<?php foreach ($wsLogHomeSummary['posts'] as $post): ?>
		<article class="post">
				<a href="<?php echo $post['url'] ?>">
				<figure><?php $bcBaser->img($post['img'], array('alt'=>'','width'=>'224','height'=>'140')) ?></figure>
				<div class="postContents">
					<h1><?php echo $post['title']; ?></h1>
					<p class="summary"><?php echo $post['summary']; ?></p>
					<p class="moreLink"><b>もっと詳しく</b></p>
				<!-- /.postContents --></div>
			</a>
		<!-- /.post --></article>
<?php endforeach; ?>
		<!-- /.sectionContents --></div>
	<!-- /#topSummary .section --></section>

<?php endif; ?>

	<!--/#contents01 .contents --></div>

	<div id="contents02" class="contents">

<section id="topHeadline" class="section headline">
	<header class="sectionHeader">

		<h1>新着情報</h1>

		<ul class="headerLink">
			<li class="rss"><a href="/news/index.rss"><span class="icon"></span>RSS</a></li>
		</ul>
	<!-- .sectionHeader --></header>
	<div class="sectionContents">

<?php
global $wsLogPosts;
$wsLogPosts = 'headline';
$bcBaser->blogPosts('news', 5);
?>

	<!-- /.sectionContents --></div>
<!-- /#topHeadline .section headline --></section>

	<!--/#contents02 .contents --></div>

	<div id="contents03" class="contents">

<?php
global $wsLogFbPageURL;
if(isset($wsLogFbPageURL)): ?>
<section id="fbPage">
	<h1><?php echo $bcBaser->_view->viewVars['siteConfig']['name']; ?>のFacebookページ</h1>

<script>
var wrapperW = $('#main #fbPage').width();
document.write('<div class="fb-like-box" data-href="<?php echo $wsLogFbPageURL; ?>" data-width="' + wrapperW + '" data-height="185" data-show-faces="true" data-border-color="#FFFFFF" data-stream="false" data-header="false"></div>');
</script>
<!-- /#fbPage --></section>
<?php endif ?>

<?php
global $wsLogTwitterID;
if(isset($wsLogTwitterID)): ?>
<p class="twitterBtn"><a href="https://twitter.com/<?php echo $wsLogTwitterID; ?>" target="_blank"><span class="caption"><?php echo $bcBaser->_view->viewVars['siteConfig']['name']; ?>のTwitter </span><strong class="twitterID">&#64;<?php echo $wsLogTwitterID; ?></strong></a></p>
<?php endif ?>

<div class="social socialW">

<?php
global $wsLogSnsBtn;
if($wsLogSnsBtn['twitter'] == 1): ?>
	<div class="twitter">
<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php $bcBaser->url( $bcBaser->getRoot() , true ); ?>" data-count="vertical"<?php if(isset($wsLogTwitterID)){ echo ' data-related="' . $wsLogTwitterID . '"'; } ?> data-lang="ja">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<!-- /.twitter --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['facebook'] == 1): ?>
	<div class="facebook fbLike">
<div class="fb-like" data-href="<?php $bcBaser->url( $bcBaser->getRoot() , true ); ?>" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div>
	<!-- /.facebook fbLike --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['google'] == 1): ?>
	<div class="google">
<div class="g-plusone" data-size="tall" data-href="<?php $bcBaser->url( $bcBaser->getRoot() , true ); ?>"></div>
	<!-- /.google --></div>
<?php endif ?>

<?php
global $wsLogMixiDevKey;
if($wsLogSnsBtn['mixi'] == 1): ?>
	<div class="mixi">
<div data-plugins-type="mixi-favorite"<?php if(isset($wsLogMixiDevKey)){ echo ' data-service-key="' . $wsLogMixiDevKey . '"'; } ?> data-size="large" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" data-show-faces="false" data-show-count="true" data-show-comment="true" data-width=""></div><script type="text/javascript">(function(d) {var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//static.mixi.jp/js/plugins.js#lang=ja';d.getElementsByTagName('head')[0].appendChild(s);})(document);</script>
	<!-- /.mixi --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['hatena'] == 1): ?>
	<div class="hatena">
<a href="http://b.hatena.ne.jp/entry/<?php $bcBaser->url( $bcBaser->getRoot() , true ); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
	<!-- /.hatena --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['weibo'] == 1): ?>

	<div class="weibo">
<script type="text/javascript" charset="utf-8">
(function(){
  var _w = 55 , _h = 66;
  var param = {
    url:location.href,
    type:'1',
    count:'1',
    appkey:'',
    title:'',
    pic:'',
    ralateUid:'',
    language:'zh_cn',
    rnd:new Date().valueOf()
  }
  var temp = [];
  for( var p in param ){
    temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
  }
  document.write('<iframe allowTransparency="true" frameborder="0" scrolling="no" src="http://hits.sinajs.cn/A1/weiboshare.html?' + temp.join('&') + '" width="'+ _w+'" height="'+_h+'"></iframe>')
})()
</script>
	<!-- /.weibo --></div>

<?php endif ?>

<!-- /.social socialW --></div>

	<!--/#contents03 .contents --></div>

<!--/#contentsWrapper .layout01 --></div>
