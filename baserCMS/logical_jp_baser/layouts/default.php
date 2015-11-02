<?php
/**
 * デフォルトレイアウト
 */
?>
<?php $bcBaser->docType('html5'); ?>
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<?php $bcBaser->element('meta') ?>
<?php $bcBaser->element('google_analytics') ?>
</head>
<body id="<?php $bcBaser->contentsName() ?>">
<?php $bcBaser->element('fbroot') ?>

<div id="document">
<?php $bcBaser->header() ?>
<?php if($bcBaser->isHome()): ?>
<?php $bcBaser->element('home_mainvisual') ?>
<?php endif ?>
<nav id="globalNav" role="navigation">
<?php $bcBaser->element('global_menu') ?>
<!--/#globalNav --></nav>
	<div id="wrapper">
		<div id="main" role="main">
<?php if($bcBaser->isHome()): ?>
<?php $bcBaser->element('home') ?>
<?php else: ?>
<nav class="topicPath">
	<p>
<?php $bcBaser->element('crumbs'); ?>
	</p>
<!-- /.topicPath --></nav>

<?php if($bcBaser->isPage()): ?>

<article class="article">
	<header class="articleHeader">
		<div class="articleHeaderInner">
			<h1 class="title"><?php echo $bcBaser->getContentsTitle(); ?></h1>
		<!--/.articleHeaderInner --></div>
<?php $bcBaser->element('social_plugin', array('size' => 'S')) ?>
	<!--/.articleHeader --></header>

	<div class="articleContents freetxt">

<?php $bcBaser->flash() ?>
<?php $bcBaser->content() ?>

	<!--/.articleContents freetxt --></div>

	<footer class="articleFooter">
<?php $bcBaser->element('social_plugin', array('size' => 'L')) ?>
	<!--/.articleFooter --></footer>

<!--/.article --></article>

<?php else: ?>

<?php $bcBaser->flash() ?>
<?php $bcBaser->content() ?>

<?php endif ?>

<?php $bcBaser->element('contents_navi') ?>

<?php endif ?>

		<!--/#main --></div>

<?php if(!$bcBaser->isHome()): ?>
<?php $bcBaser->element('sidebar') ?>
<?php endif ?>

	<!--/#wrapper --></div>
<?php $bcBaser->footer() ?>

<!--/#document --></div>
<?php $bcBaser->func() ?>
</body>
</html>