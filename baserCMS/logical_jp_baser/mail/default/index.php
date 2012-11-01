<?php
/**
 * メールフォーム入力ページ
 * 
 */
$bcBaser->css(array('/mail/css/style', 'jquery-ui/ui.all'), array('inline' => true));
$bcBaser->js(array('jquery-ui-1.8.14.custom.min','i18n/ui.datepicker-ja'), false);
?>

<article class="article">
	<header class="articleHeader">
		<div class="articleHeaderInner">
			<h1 class="title"><?php $bcBaser->contentsTitle() ?></h1>
		<!--/.articleHeaderInner --></div>
	<!--/.articleHeader --></header>

	<div class="articleContents freetxt">
		<div id="mailForm-apply" class="mailForm">

<div class="lead">
<?php $mail->description() ?>
<!-- /.lead --></div>

	<?php $bcBaser->flash() ?>
	<?php $bcBaser->element('mail_form') ?>

		<!-- /#mailForm-apply .mailForm --></div>
	<!--/.articleContents freetxt --></div>

<!--/.article --></article>
