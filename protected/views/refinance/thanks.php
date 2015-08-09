<?php 


Yii::app()->clientScript->registerScript('myCustomScript', "

var fb_param = {};
fb_param.pixel_id = '6017299967068';
fb_param.value = '0.00';
fb_param.currency = 'MYR';
(function(){
  var fpw = document.createElement('script');
  fpw.async = true;
  fpw.src = '//connect.facebook.net/en_US/fp.js';
  var ref = document.getElementsByTagName('script')[0];
  ref.parentNode.insertBefore(fpw, ref);
})()
", CClientScript::POS_HEAD);

?>

<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6017299967068&amp;value=0&amp;currency=MYR" /></noscript>

<h1>Submitted. Thanks You</h1>
