<?php
/**
 * サイドバー
 */
?>
<div id="sub" role="complementary"><?php if(!empty($widgetArea)): ?>
<?php $bcBaser->element('widget_area',array('no'=>$widgetArea)) ?>
<?php endif ?>
<!--/#sub --></div>