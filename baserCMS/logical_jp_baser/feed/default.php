<?php
/**
 * フィード
 */
$feed->saveCachetime();
?>
<cake:nocache>
	<?php $feed->cacheHeader() ?>
</cake:nocache>

<?php if(!empty($items)): ?>
<section id="topFeed" class="section headline">
<?php
global $wsLogFeedTitle;
if(isset($wsLogFeedTitle)): ?>
	<header class="sectionHeader">
		<h1><?php echo $wsLogFeedTitle; ?></h1>
	<!-- .sectionHeader --></header>
<?php endif ?>
	<div class="sectionContents">
<?php foreach($items as $key => $item): ?>
	<?php $no = sprintf('%02d',$key+1) ?>
	<?php if($key == 0): ?>
		<?php $class = ' class="post first feed'.$no.'"' ?>
	<?php elseif($key == count($items) - 1): ?>
		<?php $class = ' class="post last feed'.$no.'"' ?>
	<?php else: ?>
		<?php $class = ' class="post feed'.$no.'"' ?>
	<?php endif ?>
		<article<?php echo $class ?>>
			<p class="date"><?php echo date("Y年n月j日",strtotime($item['pubDate']['value'])); ?></p>
			<h1><a href="<?php echo $item['link']['value']; ?>"><?php echo $item['title']['value']; ?></a></h1>
		<!-- /.post --></article>
<?php endforeach; ?>
	<!-- /.sectionContents --></div>
<!-- /#topFeed .section headline --></section>
<script>
(function($){ // start jquery
	var topFeed = $('#Home #main #topFeed');
	topFeed.each(function() {
		$('.post:nth-child(even)', this).addClass('even');
	});
	if(wsBrowser != 'sp'){
		$('.post', topFeed).hover(
		function() {
			$(this).addClass('postHover');
		},function() {
			$(this).removeClass('postHover');
		});
	}
	$('.post', topFeed).css({
		cursor: 'pointer'
	});
	$('.post', topFeed).click(function() {
		HREF = $(this).find('a').eq(0).attr('href');
		window.location.href = HREF;
		return false;
	});
})(jQuery); // end jquery
</script>

<?php endif; ?>



