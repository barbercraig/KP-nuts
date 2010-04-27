<?php

	session_start();
	$pageID = "competition";
	$step = 'error';
	
	print_r($_SESSION);
	
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
		
	include(DOCROOT . '/include/header.php'); 
	
?>

<div id="comp-content" class="sorry">
	<p>The prize you ahve won is <?=$_SESSION['win_prize']?></p>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
<?php session_destroy(); ?>

