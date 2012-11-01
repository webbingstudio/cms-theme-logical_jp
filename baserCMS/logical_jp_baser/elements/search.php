<?php
/**
 * 検索フォーム（オプションなし）
 */
if(Configure::read('BcRequest.isMaintenance')) {
	return;
}
if(!empty($this->passedArgs['num'])) {
	$url = array('plugin' => null, 'controller' => 'contents', 'num' => $this->passedArgs['num']);
} else {
	$url = array('plugin' => null, 'controller' => 'contents');
}
?>
<?php echo $bcForm->create('Content', array('type' => 'get', 'action' => 'search', 'url' => $url )) ?>
<?php echo $bcForm->input('Content.q', array('class' => 'inputTxt')) ?>
<?php echo $bcForm->submit('検索', array('div' => false, 'class' => 'submitBtn')) ?>
<?php echo $bcForm->end() ?>
