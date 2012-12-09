<?php
/**
 * ブログ記事リスト
 *
 */
?>
<section id="topHeadline" class="section headline">
	<header class="sectionHeader">
		<h1>新着情報</h1>
		<ul class="headerLink">
			<li class="rss"><a href="/news/index.rss"><span class="icon"></span>RSS</a></li>
		</ul>
	<!-- .sectionHeader --></header>
	<div class="sectionContents">

<?php if($posts): ?>
<?php foreach($posts as $key => $post): ?>
<?php $class = array('post', 'post-'.($key+1)) ?>
		<article class="<?php echo implode(' ', $class) ?>">
			<p class="date"><?php $blog->postDate($post, 'Y年n月j日') ?></p>
			<h1><?php echo $blog->getPostTitle($post); ?></h1>
		<!-- /.post --></article>
<?php endforeach ?>
<?php else: ?>
<p class="notFound">新着記事がありません。</p>
<?php endif; //if($posts) ?>

	<!-- /.sectionContents --></div>
<!-- /#topHeadline .section headline --></section>


