<?php
/*
*	prizedraw.php
*
*	Prize draw page for KP site
*	@date:		27.04.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/
$pageID = "competition";
$step   = "prizedraw-thanks";

#include init file 
//we need to do some extra checking for document root for gay inboxwork
if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
	include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
}else{
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
}	

if ($returnVal == "success") {
			
}

include(DOCROOT . '/include/header.php'); 
?>

<div class="comp-content prizedraw-thanks-content">
	<br />
    <br />
    <br />
	<h2 class="thanks">
    	Thank you for entering and good luck!
        The winner will be notifiedby 21st September 2010.
    </h2>
	<div class="content_box prizedraw-thanks-box">
    	<div class="form-content prizedraw-thanks-form">
        	<h2 class="vote-moment">Vote for your best quality football moment</h2>
            <a class="voteWin" href="<?=$routes['competition']['vote']?>">Vote &amp; Win ></a>
        </div>
  </div>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
