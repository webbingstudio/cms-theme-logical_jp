<?php
/**
 * フッター
 */
?>
	<footer id="footer" role="contentinfo">
<div id="footerContents">

<nav id="footerNav" role="navigation">
<?php $bcBaser->element('global_menu') ?>
<!--/#footerNav --></nav>

	<p class="copyright"><small>Copyright &copy; <?php echo date('Y') ?> <?php echo $bcBaser->siteConfig['name'] ?>, Allrights Reserved.</small></p>

<p><a href="http://basercms.net/" target="_blank"><?php echo $html->image('baser.power.gif', array('alt'=> 'baserCMS : Based Website Development Project', 'border'=> "0")); ?></a>&nbsp; <a href="http://cakephp.org/" target="_blank"><?php echo $html->image('cake.power.gif', array('alt'=> 'CakePHP(tm) : Rapid Development Framework', 'border'=> "0")); ?></a></p>

<!--/#footerContents --></div>

	<!--/#footer --></footer>