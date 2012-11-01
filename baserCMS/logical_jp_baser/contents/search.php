<?php
/* SVN FILE: $Id$ */
/**
 * サイト内検索結果
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>

<div class="categoryHeader">
	<h1 class="categoryTitle"><?php $bcBaser->contentsTitle() ?></h1>
<!-- /.categoryHeader --></div>

<div class="section">
<?php if(!empty($paginator)): ?>
	<div class="search-result corner5">		
		<?php echo $paginator->counter(array('format' => '<strong>'.implode(' ', $query).'</strong> で検索した結果 <strong>%start%～%end%</strong>件目 / %count% 件')) ?>
	</div>
<?php endif ?>
	<!-- list-num -->
	<?php $bcBaser->element('admin/list_num') ?>
</div>

<?php if($datas): ?>
<section class="section search">
	<?php foreach($datas as $data): ?>
<?php $class = array('post') ?>
	<article class="<?php echo implode(' ', $class) ?>">
		<h1><?php $bcBaser->link($bcBaser->mark($query, $data['Content']['title']), $data['Content']['url']) ?></h1>
		<p class="summary"><?php echo $bcBaser->mark($query, $bcText->mbTruncate($data['Content']['detail'],100)) ?></p>
		<p class="permalink"><?php $bcBaser->link(fullUrl($data['Content']['url']), $data['Content']['url']) ?></p>
	<!-- /.post --></article>
<?php endforeach ?>
<!-- /.section posts --></section>
<?php else: ?>
<p class="notFound">該当するページが見つかりませんでした。</p>
<?php endif ?>
<?php $bcBaser->pagination('simple', array(), null, false) ?>
