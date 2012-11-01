<?php
/**
 * ブログ記事リスト
 *
 */
?>
<?php if($posts): ?>

<?php foreach($posts as $key => $post): ?>
<?php $class = array('post', 'post-'.($key+1)) ?>

<?php
global $wsLogPosts;
if($wsLogPosts == 'headline') :?>

<article class="<?php echo implode(' ', $class) ?>">
	<p class="date"><?php $blog->postDate($post, 'Y年n月j日') ?></p>
	<h1><?php echo $blog->getPostTitle($post); ?></h1>
<!-- /.post --></article>
<?php endif ?>

<?php endforeach ?>

<?php else: ?>
<p class="notFound">新着記事がありません。</p>
<?php endif ?>


