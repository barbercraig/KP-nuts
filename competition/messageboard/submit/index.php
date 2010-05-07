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
    <h2 class="messageboard submit">Your best quality football moments</h2>
    <div class="messageboard-window">
   		<!--Window held on top of content window--> 
        <div class="content_box messageboard-submit">
            <form id="messageboard-submit" class="messageboard" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <fieldset>
                    <p class="field">
                    asdsadasd
                    </p>
                </fieldset>
            </form>
        </div>
    </div>
    <br />
    <a class="cta submit-moment" href="">Tell us your best moment ></a>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
