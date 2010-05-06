<?php

	session_start();
	$pageID = "competition";
	$step = 'error';
		
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}
	
	include(DOCROOT . '/script/process.php');	
	
	include(DOCROOT . 'include/handlers/prizedraw-error-handler.php');
	
	include(DOCROOT . '/include/header.php'); 
	
?>

<?php 

	if($_SESSION['lose_type'] == 'no_wm'){
		//include generic lose type message
		include(DOCROOT . "competition/enter/sorry/sorry_gen.php");
	}else{
		//display entry error messages
		include(DOCROOT . "competition/enter/sorry/sorry_error.php");
	}
?>

<?php include (DOCROOT . '/include/footer.php'); ?>
<?php session_destroy(); ?>

