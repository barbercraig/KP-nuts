<?php

	session_start();
	$pageID = "competition";
	$step = 'win';
	
	print_r($_SESSION);
	
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
		
	include(DOCROOT . '/include/header.php'); 
	
?>

<div id="comp-content" class="win">
	<h2 class="congrat">Congratulations!</h2>
    <h2 class="win <?=$_SESSION['prize_type']?>">Sorry. You have exceeded the entry limit.</h2>
    <p class="win <?=$_SESSION['lose_type']?>">Please pick up another KP pack and try again.</p>
	<p>The prize you ahve won is <?=$_SESSION['win_prize']?></p>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
<?php session_destroy(); ?>

