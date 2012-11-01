<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('サイトマップ') ?>
<?php $bcBaser->setDescription('baserCMS inc.のサイトマップページ') ?>
<?php $bcBaser->setPageEditLink(4) ?>
<!-- BaserPageTagEnd -->
<?php $bcBaser->sitemap() ?>
<ul class="section">
	<li>
		<?php $bcBaser->link("新着情報","/news/index") ?></li>
	<li>
		<?php $bcBaser->link("お問い合わせ","/contact/index") ?></li>
</ul>
