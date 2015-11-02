<?php
/**
 * ホーム：メインビジュアル
 */
?>
<div id="mainVisual">
	<div id="mvContainer">

		<div class="mvSlide"><a href="<?php echo $bcBaser->url('/logical/index'); ?>">
<?php
echo $bcBaser->img('/images/home/mv_01.jpg', array(
	'width' => '960',
	'height' => '240',
	'alt' => '日本のCMS：「logical_jp」シリーズは、 日本語環境での読みやすさ、使いやすさを重視しています。スマートフォン・タブレットでも、最適なレイアウトを提供します。'
));
?>
		</a></div>
		<div class="mvSlide"><a href="#">
<?php
echo $bcBaser->img('/images/home/mv_02.jpg', array(
	'width' => '960',
	'height' => '240',
	'alt' => '今はやりの、端末の画面幅で見た目が変わる、レスポンシブレイアウト。高解像度用のページをただ縮めただけでは、モバイル端末の表示が遅くなってしまいます。logical_jpは、アクセス時に端末判定を行い、スマートフォンでは 余分なソーシャルプラグインや、特殊効果を止めるようにしています。'
));
?>
		</a></div>
		<div class="mvSlide"><a href="#">
<?php
echo $bcBaser->img('/images/home/mv_03.jpg', array(
	'width' => '960',
	'height' => '240',
	'alt' => 'ソーシャルプラグイン：日本のユーザーが多い、各種ウェブサービスの投稿ボタンを搭載。 ソーシャル連携に欠かせない文書規格、OGPにもきっちり対応。'
));
?>
		</a></div>
		<div class="mvSlide"><a href="http://webbingstudio.com/" target="_blank">
<?php
echo $bcBaser->img('/images/home/mv_04.jpg', array(
	'width' => '960',
	'height' => '240',
	'alt' => 'CMS専門：ブログ・CMSのテーマ制作を 専門にしているWebデザイナーが作りました。WebbingStudioについては画像をクリック'
));
?>
		</a></div>

	<!-- /#mvContainer --></div>
<!-- /#mainVisual --></div>