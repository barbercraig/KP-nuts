<?php
/*
*	messageboard --> index.php
*
*	Displays the messageboard for KP football moments cometition
*	@date:		06.05.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/

$pageID = "competition";
$step = 'messageboard';


#include init file 
//we need to do some extra checking for document root for gay inboxwork
if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
	include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
}else{
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
}	

include(DOCROOT . '/include/header.php'); 

?>

<div class="comp-content messageboard-content">
    <h2 class="messageboard main">Your best quality football moments</h2>
    <p class="messageboard-text">Enjoy reading some of the best quality football moments submitted by fellow KP fans</p>
    <div class="messageboard-window">
   		<!--Window held on top of content window--> 
        <div class="messageboard-messages">
            <div class="messageboard-msg">
                <h3 class="message-title"><?=strtoupper("Craig from Swindon")?></h3>
                <p class="message bestmoment">best quality moment:</p>
                <p class="message-desc">adadasdasdasdasdasdadasddddddddddddddddddddddddd sdada\dasd asdasd asdasdas dasdsadsadsad sadsadasd asddas sa s ad d asd asdsada asda da sda sdasd d asd as da d</p>
            </div>
            <div class="messageboard-msg">
                <h3 class="message-title"><?=strtoupper("Craig from Swindon")?></h3>
                <p class="message bestmoment">best quality moment:</p>
                <p class="message-desc">adadasdasdasdasdasdad</p>
            </div>
            <div class="messageboard-msg">
                <h3 class="message-title"><?=strtoupper("Craig from Swindon")?></h3>
                <p class="message bestmoment">best quality moment:</p>
                <p class="message-desc">adadasdasdasdasdasdad</p>
            </div>
            <div class="messageboard-msg">
                <h3 class="message-title"><?=strtoupper("Craig from Swindon")?></h3>
                <p class="message bestmoment">best quality moment:</p>
                <p class="message-desc">adadasdasdasdasdasdad</p>
            </div>
            <div class="messageboard-msg">
                <h3 class="message-title"><?=strtoupper("Craig from Swindon")?></h3>
                <p class="message bestmoment">best quality moment:</p>
                <p class="message-desc">adadasdasdasdasdasdad</p>
            </div>
        </div>
    </div>
    <br />
    <a class="cta submit-moment" href="">Tell us your best moment ></a>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
