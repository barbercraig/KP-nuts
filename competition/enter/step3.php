<?php
	session_start();
	//print_r($_SESSION);
	$pageID = "competition";
	$step = "captcha";
	
	print_r($_SESSION);
	
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	
	include(DOCROOT . 'competition/handlers/error-handler.php');
	include(DOCROOT . 'competition/handlers/response-handler.php');
	
	include(DOCROOT . '/include/header.php'); 

?>
<div id="comp-content" class="step3">
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
            <input id="submit" class="next" type="image" name="submit" value="submit" src="../../../images/competition/batchcode-entry/btn_next.png" alt="next" border="0" />
        </fieldset>
        <input name="formsubmit" id="formsubmit" type="hidden" value="submit" />
    </form>
</div>
<?php include (DOCROOT . '/include/footer.php'); ?>

