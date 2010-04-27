<?php 
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
?>
<?php $pageID = "competition"; ?>
<?php include(DOCROOT . '/include/header.php'); ?>
<div id="comp-content" class="step3">
	<h2 class="captcha">For security, please enter the code you see below</h2>
    <br />
    <form id="enter-step3" class="comp-process step3" name="enter-step3" action="" method="post">
    	<fieldset>
        	<p class="field-captcha">
            	<img class="captcha" src="../../images/competition/code-entry/img_captcha.jpg" width="179" height="58" alt="captcha" border="0" />
                <a class="refresh" href="<?php $_SERVER['PHP_SELF'];?>">Refresh ></a>
            </p>
            <p class="field">
            	<label class="captcha" for="captcha">Enter code</label>
                <input class="captcha" id="captcha" name="captcha" type="text" tabindex="1" maxlength="5" />
            </p>
        </fieldset>
        <fieldset id="captcha">
            <a class="back" href="<?php echo $routes['competition']['enter']?>step2.php">BACK ></a>
            <input id="submit" class="next" type="image" name="submit" value="submit" src="../../../images/competition/batchcode-entry/btn_next.png" alt="next" border="0" />
        </fieldset>
    </form>
</div>
<?php include (DOCROOT . '/include/footer.php'); ?>

