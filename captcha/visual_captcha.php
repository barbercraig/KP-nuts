<?php
	require_once("/nfslocal/www/include/classes/captcha-v1.0/php-captcha.inc.php");
	
	// captcha
	$aFonts = array("/nfslocal/www/include/ub/captcha-fonts/arial.ttf");
	$oVisualCaptcha = new PhpCaptcha($aFonts, 200, 50);
	
	$oVisualCaptcha->Create();
?>