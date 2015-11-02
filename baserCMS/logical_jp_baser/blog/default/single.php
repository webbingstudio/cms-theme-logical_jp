<?php
/**
 * ブログ詳細ページ
 * 
 */
$bcBaser->setDescription($blog->getTitle().'｜'.$blog->getPostContent($post,false,false,50));
?>

<div class="categoryHeader">
	<h1 class="categoryTitle"><?php $blog->title() ?></h1>
<?php if($blog->descriptionExists()): ?>
	<div class="categoryDesc"><?php $blog->description() ?></div>
<?php endif ?>
<!-- /.categoryHeader --></div>

<article class="article">
	<header class="articleHeader">
		<div class="articleHeaderInner">
			<h1 class="title"><?php $blog->postTitle($post, false) ?></h1>
			<p class="date" title="<?php $blog->postDate($post, 'c') ?>"><?php $blog->postDate($post, 'Y年n月j日') ?></p>
		<!--/.articleHeaderInner --></div>
<?php $bcBaser->element('social_plugin', array('size' => 'S')) ?>
	<!--/.articleHeader --></header>

	<div class="articleContents freetxt">
<?php $blog->postContent($post) ?>
	<!--/.articleContents freetxt --></div>

	<footer class="articleFooter">
<?php $bcBaser->element('social_plugin', array('size' => 'L')) ?>

<div class="meta">
<?php $blog->category($post) ?>
&nbsp;
<?php $blog->postDate($post, 'Y年n月j日 H:i:s') ?>
&nbsp;
[<?php $blog->author($post) ?>]
</div>

<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>

	<!--/.articleFooter --></footer>
<!--/.article --></article>

<div id="contentsNavi">
<?php $blog->prevLink($post) ?>
&nbsp;｜&nbsp;
<?php $blog->nextLink($post) ?>
</div>

<?php
global $wsLogUseFbComment;
if($wsLogUseFbComment == 1): ?>
<section id="commentFb" class="section">
	<h1>Facebookコメント</h1>
	<div class="sectionContents">
<script>
var wrapperW = $('#main #commentFb .sectionContents').width();
document.write('<div class="fb-comments" data-href="<?php echo $bcBaser->url($bcBaser->getHere() , true); ?>" data-num-posts="2" data-width="' + wrapperW + '"></div>');
</script>
	<!-- /.sectionContents --></div>
<!-- /#commentFb .section --></section>
<?php endif ?>

<?php $bcBaser->element('blog_comments') ?>