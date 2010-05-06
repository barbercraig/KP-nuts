<?php
	session_start();
	//print_r($_SESSION);
	$pageID = "competition";
	$step = "captcha";
		
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}
		
	include(DOCROOT . 'include/handlers/error-handler.php');
	include(DOCROOT . 'include/handlers/response-handler.php');
	
	include(DOCROOT . '/include/header.php'); 

?>
<div class="comp-content step3-content">
	<?php
        if($allowed_entry){
    ?>
	<h2 class="captcha">For security, please enter the code you see below</h2>
    <form id="enter-step3" class="comp-process step3" name="enter-step3" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    	<div id="error" style="height:30px; padding-bottom:5px; text-align:center;">
        	<?=isset($message) ? $message : null?>
        </div>
    	<fieldset>
        	<p class="field-captcha">
            	<img class="captcha" src="<?=SITE_URL?>/captcha/visual_captcha.php" width="200" height="50" alt="" style="display:block; margin-left:auto; margin-right:auto;" />
                <a class="refresh" href="<?= $_SERVER['PHP_SELF'] ?>">Refresh ></a>
            </p>
            <p class="field">
            	<label class="captcha" for="captcha">Enter code</label>
                <input class="captcha" id="captcha" name="captcha" type="text" value="" tabindex="1" maxlength="5" />
            </p>
        </fieldset>
        <fieldset id="captcha">
            <a class="back" href="<?php echo $routes['competition']['enter']?>step2.php">BACK ></a>
            <input id="submit" class="next" type="image" name="submit" value="submit" src="<?=SITE_URL?>/images/competition/batchcode-entry/btn_next.gif" alt="next" border="0" />
        </fieldset>
        <input name="formsubmit" id="formsubmit" type="hidden" value="submit" />
    </form>
    	<?php
        }
    ?>

</div>
<?php include (DOCROOT . '/include/footer.php'); ?>

