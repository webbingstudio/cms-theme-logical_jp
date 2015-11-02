<?php
/**
 * ソーシャルプラグイン
 */
global $wsLogSnsBtn;
global $wsLogTwitterID;
global $wsLogMixiDevKey;
?>
<?php if($size == 'L'): ?>

<div class="social socialL">

<?php if($wsLogSnsBtn['twitter'] == 1): ?>
	<div class="twitter">
<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>"<?php if(isset($wsLogTwitterID)){ echo ' data-related="' . $wsLogTwitterID . '"'; } ?> data-lang="ja" data-size="large">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<!-- /.twitter --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['google'] == 1): ?>
	<div class="google">
<div class="g-plusone" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>"></div>
	<!-- /.google --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['mixi'] == 1): ?>
	<div class="mixi">
<div data-plugins-type="mixi-favorite"<?php if(isset($wsLogMixiDevKey)){ echo ' data-service-key="' . $wsLogMixiDevKey . '"'; } ?> data-size="medium" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" data-show-faces="false" data-show-count="false" data-show-comment="true" data-width=""></div><script type="text/javascript">(function(d) {var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//static.mixi.jp/js/plugins.js#lang=ja';d.getElementsByTagName('head')[0].appendChild(s);})(document);</script>
	<!-- /.mixi --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['hatena'] == 1): ?>
	<div class="hatena">
<a href="http://b.hatena.ne.jp/entry/<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard-balloon" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20"></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
	<!-- /.hatena --></div>
<?php endif ?>
<?php if($wsLogSnsBtn['weibo'] == 1): ?>
	<div class="weibo">
<script type="text/javascript" charset="utf-8">
(function(){
  var _w = 90 , _h = 24;
  var param = {
    url:location.href,
    type:'2',
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

<?php if($wsLogSnsBtn['facebook'] == 1): ?>
	<div class="facebook fbLike">
<script>
var wrapperW = $('#main .fbLike').width();
document.write('<div class="fb-like" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" data-send="true" data-layout="standard" data-width="' + wrapperW + '" data-show-faces="true"></div>');
</script>
	<!-- /.facebook fbLike --></div>
<?php endif ?>

<!-- /.social socialL --></div>

<?php else: ?>

<div class="social socialS">
<?php
global $wsLogSnsBtn;
if($wsLogSnsBtn['twitter'] == 1): ?>
	<div class="twitter">
<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>"<?php if(isset($wsLogTwitterID)){ echo ' data-related="' . $wsLogTwitterID . '"'; } ?> data-lang="ja">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<!-- /.twitter --></div>
<?php endif ?>


<?php if($wsLogSnsBtn['facebook'] == 1): ?>
	<div class="facebook fbLike">
<div class="fb-like" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false"></div>
	<!-- /.facebook fbLike --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['google'] == 1): ?>
	<div class="google">
<div class="g-plusone" data-size="medium" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>"></div>
	<!-- /.google --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['mixi'] == 1): ?>
	<div class="mixi">
<div data-plugins-type="mixi-favorite"<?php if(isset($wsLogMixiDevKey)){ echo ' data-service-key="' . $wsLogMixiDevKey . '"'; } ?> data-size="medium" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" data-show-faces="false" data-show-count="false" data-show-comment="true" data-width=""></div><script type="text/javascript">(function(d) {var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//static.mixi.jp/js/plugins.js#lang=ja';d.getElementsByTagName('head')[0].appendChild(s);})(document);</script>
	<!-- /.mixi --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['hatena'] == 1): ?>
	<div class="hatena">
<a href="http://b.hatena.ne.jp/entry/<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple-balloon" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" width="20" height="20"></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
	<!-- /.hatena --></div>
<?php endif ?>

<?php if($wsLogSnsBtn['weibo'] == 1): ?>
	<div class="weibo">
<script type="text/javascript" charset="utf-8">
(function(){
  var _w = 90 , _h = 24;
  var param = {
    url:location.href,
    type:'2',
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

<!-- /.social socialS --></div>

<?php endif ?>
