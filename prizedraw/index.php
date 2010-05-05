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
$step   = "prizedraw";

#include init file 
//we need to do some extra checking for document root for gay inboxwork
if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
	include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
}else{
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
}	

include(DOCROOT . '/include/header.php'); 
?>

<div class="comp-content prizedraw-enter-content">
	<div class="content_box prizedraw-enter-box">
    	<div class="display-content prizedraw-enter">
        	<h2 class="prizedraw-enter">Grand Prize Draw</h2>
            <h3 class="prizedraw-enter-prize">Prize Includes:</h3>
            <ul class="prizedraw">
            	<li>Return flights for 2 people</li>
                <li>Airport transfers</li>
                <li>4 star accommodation*</li>
                <li>Daily breakfast</li>
                <li>Tickets to see a domestic game</li>
                <li>Up to &pound;250 spending money</li>
            </ul>
            <a class="prizedraw-enter-link" href="<?=$routes['prizedraw'].'enter/'?>">Enter to win></a>
        </div>
        <div id="terms_box">
        	<a href="<?=$routes['tag']?>?tid=4338" target="_blank">Terms &amp; Conditions</a>
            <br />
            *Number of nights vary per destination
        </div>
  </div>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
