<?php
/**
 * メールフォーム確認ページ
 */
$bcBaser->css(array('/mail/css/style', 'jquery-ui/ui.all'), array('inline' => true));
$bcBaser->js(array('jquery-ui-1.8.14.custom.min','i18n/ui.datepicker-ja'), false);
if($freezed){
	$mailform->freeze();
}
?>

<article class="article">
	<header class="articleHeader">
		<div class="articleHeaderInner">
			<h1 class="title"><?php $bcBaser->contentsTitle() ?></h1>
		<!--/.articleHeaderInner --></div>
	<!--/.articleHeader --></header>

	<div class="articleContents freetxt">
		<div id="mailForm-confirm" class="mailForm">

<?php if($freezed): ?>
<div class="lead">
	<h2>入力内容の確認</h2>
	<p>下記の内容で送信します。<br>内容を今一度ご確認のうえ、「<strong>送信する</strong>」ボタンを押してください。</p>
<!-- /.lead --></div>
<?php endif ?>

	<?php $bcBaser->flash() ?>
	<?php $bcBaser->element('mail_form') ?>

		<!-- /#mailForm-confirm .mailForm --></div>
	<!--/.articleContents freetxt --></div>

<!--/.article --></article>
