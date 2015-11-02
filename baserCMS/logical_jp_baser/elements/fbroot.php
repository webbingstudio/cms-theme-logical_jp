<?php
/**
 * Facebook JSSDK
 */
global $wsLogFbPageURL;
global $wsLogSnsBtn;
global $wsLogUseFbComment;
?>
<?php if((!empty($wsLogFbPageURL))||($wsLogSnsBtn['facebook'] == 1)||($wsLogUseFbComment == 1)): ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php endif ?>
