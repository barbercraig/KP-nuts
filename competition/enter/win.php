<?php

	session_start();
	$pageID = "competition";
	$step = 'win';
	
	//print_r($_SESSION);
	
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}	
		
	include(DOCROOT . '/include/header.php'); 
	
?>

<div class="comp-content win-content">
	<div class="content_box win <?=$_SESSION['win_prize']?>">
    	<div class="display-content">
            <h2 class="win congrat">Congratulations!</h2>
            <h2 class="win <?=$_SESSION['win_prize']?>">You've won a Replica Football Shirt</h2>
            <br />
            <p class="win steps">Please follow these steps to claim your prize</p>
            <p style="font-size:13px;">
                Send your winning pack together with your full address and the unique <br />
                reference number above to the following address:
				<br />
                <br />
                MAD ABOUT HANDLING, 
                <br />
                C/O KP NUTS PROMOTION,
                <br /> 
                18 & 19 BURWAY TRADING ESTATE, 
                <br />
                BROMFIELD ROAD, 
                <br />
                LUDLOW, 
                <br />
                SHROPSHIRE, SY8 1EN
            <p>
            <br />
            <br />
            <a class="win facebook" target="_blank" href="<?=$routes['tag']?>?tid=4332&m=<?=$_SESSION['moment']?>">Share your vote on Facebook ></a>
            <a class="win league-table" href="<?=$routes['tag']?>?tid=4333">View League Table ></a>
            <a class="win product-range" href="<?=$routes['tag']?>?tid=4334">View Product Range ></a>
        </div>
    </div>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
<?php session_destroy(); ?>

