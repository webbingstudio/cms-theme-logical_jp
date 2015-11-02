<?php
/**
 * ブログアーカイブ一覧
 * 
 */

//$bcBaser->css(array('/blog/css/style'), array('inline' => true));
$bcBaser->css(array('colorbox/colorbox'), array('inline' => true));
$bcBaser->js('jquery.colorbox-min', false);
//$bcBaser->setTitle($this->pageTitle.'｜'.$blog->getTitle());
$bcBaser->setDescription($blog->getTitle().'｜'.$bcBaser->getContentsTitle().'のアーカイブ一覧です。');
?>

<div class="categoryHeader">
	<h1 class="categoryTitle"><?php $blog->title() ?></h1>
<?php if($blog->descriptionExists()): ?>
	<div class="categoryDesc"><?php $blog->description() ?></div>
<?php endif ?>
<!-- /.categoryHeader --></div>

<?php if(!empty($posts)): ?>

<section class="section posts">
<?php foreach($posts as $key => $post): ?>
<?php $class = array('post', 'post-'.($key+1)) ?>
	<article class="<?php echo implode(' ', $class) ?>">
		<header class="postHeader">
			<div class="postHeaderInner">
				<h1 class="title"><?php $blog->postTitle($post, true) ?></h1>
				<p class="date" title="<?php $blog->postDate($post, 'c') ?>"><?php $blog->postDate($post, 'Y年n月j日') ?></p>
			<!--/.postHeaderInner --></div>
		<!--/.postHeader --></header>

	<div class="postContents freetxt">
<?php $blog->postContent($post, false, 'この記事の続きを読む') ?>
	<!--/.postContents freetxt --></div>

		<header class="postFooter">
			<div class="meta">
<?php $blog->category($post) ?>
&nbsp;
<?php $blog->postDate($post, 'Y年n月j日 H:i:s') ?>
&nbsp;
[<?php $blog->author($post) ?>]
&nbsp;
<a href="#document" title="ページ先頭" class="backToTop">▲</a>
			<!--/.meta --></div>
		<!--/.postHeader --></header>


<!--/.post --></article>

	<?php endforeach; ?>

<!-- /.section posts --></section>
<?php else: ?>
<p class="notFound">記事はありません。</p>
<?php endif; ?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>

<?php $bcBaser->pagination('simple'); ?>

