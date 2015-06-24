<?php 
if(!defined('INC_ROOT')){die('Forbidden Access');}
return array(
	'UPLOAD_MAX_SIZE'           => 32*1000*1000,
	'UPLOAD_ALLOW_TYPE'         => array(
		'*',
		'zip'
	),
);
?>