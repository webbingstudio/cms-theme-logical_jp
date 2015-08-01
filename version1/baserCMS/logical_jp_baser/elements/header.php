<?php
/**
 * ヘッダー
 */
?>
	<header id="header" role="banner">
		<div id="headerContents">

<div id="headerTitle">
	<div class="headerLogo"><?php $bcBaser->img('/images/logo.png',array('alt'=>'','height'=>'64')) ?></div>

	<h1 id="siteTitle"><?php $bcBaser->link($bcBaser->siteConfig['name'],'/') ?></h1>
<!-- /#headerTitle --></div>

<div id="searchBox" role="search">
<?php $bcBaser->element('search') ?>
<!--/#searchBox --></div>

		<!--/#headerContents --></div>
	<!--/#header --></header>