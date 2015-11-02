<?php
/**
 * メールフォーム送信完了ページ
 * 
 */
$bcBaser->css('/mail/css/style', array('inline' => true));
if(Configure::read('debug')==0 && $mailContent['MailContent']['redirect_url']){
	/* プラグインの為か、inlineが動作しない */
	//$html->meta(array('http-equiv'=>'Refresh'),null,array('content'=>'5;url='.$mailContent['MailContent']['redirect_url']),false);
	$this->addScript($html->meta(array('http-equiv'=>'Refresh'),null,array('content'=>'5;url='.$mailContent['MailContent']['redirect_url'])));
}
?>

<article class="article">
	<header class="articleHeader">
		<div class="articleHeaderInner">
			<h1 class="title"><?php $bcBaser->contentsTitle() ?></h1>
		<!--/.articleHeaderInner --></div>
	<!--/.articleHeader --></header>

	<div class="articleContents freetxt">
		<div id="mailForm-thx" class="mailForm">

<div class="lead">
	<h2>メール送信完了</h2>
	<p>ありがとうございました。お問い合わせを受け付けました。<br>
確認次第、担当者からご連絡をいたします。</p>

<?php if(Configure::read('debug')==0 && !$mailContent['MailContent']['redirect_url']): ?>
	<p><a href="<?php $bcBaser->root() ?>" class="linkBtn">トップページへもどる</a></p>
<?php endif; ?>
<!-- /.lead --></div>

<?php if(Configure::read('debug')==0 && $mailContent['MailContent']['redirect_url']): ?>
<div class="box02">
	<p>※５秒後にトップページへ自動的に移動します。</p>
	<p><a href="<?php echo $mailContent['MailContent']['redirect_url'] ?>">移動しない場合はコチラをクリックしてください。</a></p>
<!-- /.box02 --></div>
<?php endif; ?>

		<!-- /#mailForm-thx .mailForm --></div>
	<!--/.articleContents freetxt --></div>

<!--/.article --></article>
