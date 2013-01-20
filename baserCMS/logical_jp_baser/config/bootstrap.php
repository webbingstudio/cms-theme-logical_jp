<?php
/**
 * bootstrap
 * テーマ用変数・関数
 */

/* ==============================================
       重要な設定
============================================== */

/* トップページに表示する、外部フィードの見出しを指定してください
   （設定No.1のフィードを呼び出します）
------------------------------------------------------------- */
global $wsLogFeedTitle;
$wsLogFeedTitle = '外部フィード';


/* トップページの写真＋概要枠に表示するコンテンツを指定してください
------------------------------------------------------------- */
global $wsLogHomeSummary;
$wsLogHomeSummary['categoryName'] = 'このテーマのポイント'; //見出しの内容

// 概要１セット目
$wsLogHomeSummary['posts'][] = array(
	'title' => '日本のウェブサイトのために',
	'summary' => '日本の企業サイトで好まれるデザイン、日本語の標準フォントで快適に閲覧できる文字組となるよう制作しました。',
	'img' => '/images/home/summary_01.jpg',
	'url' => '/logical/point01',
);

// 概要２セット目
$wsLogHomeSummary['posts'][] = array(
	'title' => 'ソーシャルメディア対応',
	'summary' => 'Twitter・Facebook・Google+はもちろん、mixi・はてなブックマーク・中国圏のSNS「weibo」にも対応。シェアには欠かせないOGPも実装しています。',
	'img' => '/images/home/summary_02.jpg',
	'url' => '/logical/point02',
);

// 概要３セット目
$wsLogHomeSummary['posts'][] = array(
	'title' => 'スマートフォンでも快適',
	'summary' => 'レスポンシブレイアウトを採用。PC版のテーマのまま、タブレット・スマートフォンにも対応しています。',
	'img' => '/images/home/summary_03.jpg',
	'url' => '/logical/point03',
);


/* 写真＋概要枠を使用しない場合は、↓のコメントアウトを外してください
------------------------------------------------------------- */

/* $wsLogHomeSummary = null; */


/* ==============================================
       任意設定
============================================== */

/* カラーを指定してください　gray, blue, green, brown
未指定はグレーになります
------------------------------------------------------------- */
global $wsLogColor;
$wsLogColor = 'blue';

/* TwitterアカウントがあればIDを指定してください
------------------------------------------------------------- */
global $wsLogTwitterID;
$wsLogTwitterID = 'basercms';

/* Facebookページのコメント機能を使用する場合は「1」を指定してください
------------------------------------------------------------- */
global $wsLogUseFbComment;
$wsLogUseFbComment = 1;

/* Facebookインサイトを利用する場合は、ユーザーIDを指定してください
------------------------------------------------------------- */
global $wsLogFbAdminID;
//$wsLogFbAdminID = '000000000000000';

/* mixiいいね！ボタンを利用する場合は、開発者キーを指定してください
------------------------------------------------------------- */
global $wsLogMixiDevKey;
//$wsLogMixiDevKey = '0000000000000000000000000000000000000000';

/* OGP画像があれば、URLを「フルパスで」指定してください
------------------------------------------------------------- */
global $wsLogOGPImg;
//$wsLogOGPImg = 'http://example.com/themed/logical_jp_baser/images/ogp.jpg';

/* Facebookページ枠を表示する場合はURLを指定してください
------------------------------------------------------------- */
global $wsLogFbPageURL;
$wsLogFbPageURL = 'https://www.facebook.com/basercms';

/* 使用するSNSボタンに「1」を指定してください
------------------------------------------------------------- */
global $wsLogSnsBtn;
$wsLogSnsBtn = array(
	'facebook' => 1,
	'twitter' => 1,
	'google' => 1,
	'mixi' => 0,
	'hatena' => 0,
	'weibo' => 0,
);

?>