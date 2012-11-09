<!-- BaserPageTagBegin -->
<?php $bcBaser->setTitle('ポイント２：ソーシャルメディア対応') ?>
<?php $bcBaser->setDescription('logical_jpテーマは、日本でよく利用されているソーシャルネットワーキングサービスに対応しています。') ?>
<?php $bcBaser->setPageEditLink(18) ?>
<!-- BaserPageTagEnd -->
<h2>
	ソーシャルプラグイン</h2>
<p>
	logical_jpテーマは、日本でよく利用されているソーシャルネットワーキングサービスの機能を実装しています。<br />
	また、中国圏向けに、中国の人気SNS「weibo」にも対応しています。</p>
<p>
	現在、テーマ内で実装されているのは以下のプラグインです。</p>
<h3>
	シェアボタン</h3>
<ul>
	<li>
		Twitter: ツイート</li>
	<li>
		Facebook: いいね！</li>
	<li>
		Google: +1</li>
	<li>
		mixi: イイネ！</li>
	<li>
		はてなブックマーク: ブックマークする</li>
	<li>
		weibo: 投稿する</li>
</ul>
<h3>
	その他</h3>
<ul>
	<li>
		Facebook: コメント</li>
	<li>
		Facebook: Facebookページ紹介枠</li>
</ul>
<h2>
	OGP(Open Graph Protocol)</h2>
<p>
	logical_jpはシェアには欠かせない、OGPにも対応しています。<br />
	baserCMSの仕様の関係で実装できなかったものもありますが（og:titleは非対応です）、必須となっているog:imageや、ドメインインサイトを利用するために必要なfb:adminsも実装しています。</p>
<p>
	設定は、テーマ内のconfig/bootstrap.phpで行ってください。</p>
<h2>
	スマートフォン対策</h2>
<p>
	logical_jpはスマートフォン兼用のテーマでもあります。<br />
	デスクトップ環境向けのテーマをスマートフォンで利用すると、大量のリクエストが発生し、表示が遅くなる問題があります。</p>
<p>
	logical_jpは、スマートフォン・タブレットでの閲覧と判断した場合、余分なソーシャルプラグインを読み込まないという対策を行うことで、できるだけの軽量化を行っています。<br />
	また、狭い画面の状態（700ピクセル以下）でアクセスした場合は、Facebookコメント・Facebookページの紹介枠が画面にあわせて伸縮します。</p>
