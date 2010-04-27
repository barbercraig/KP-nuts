<?php 
	session_start();
	$pageID = "competition";
	$step = 'user';

	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	
	include(DOCROOT . 'competition/handlers/error-handler.php');
	
	if ($returnVal == "success") {
		foreach($cPost as $key => $value) {
			$_SESSION[$key] = $value;
		}
		header("Location: " . $routes['competition']['enter'] . "step3.php");
	}
	
	include(DOCROOT . '/include/header.php'); 
?>
<div id="comp-content" class="step2">
	<div class="content_box userform">
    	<div class="form-content">
        	<h2 class="step2-tellus">Tell us about you</h2>
            <form id="enter-step2" class="comp-process step2" name="enter-step2" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div id="error">
                    <?=isset($message) ? $message : null?>
                </div>
            	<fieldset>
                	<p class="field">
                        <label class="text" for="fname">First name*</label>
                        <input class="text <?=isset($error['fname'])? $error['fname'] : ""?>" id="fname" name="fname" type="text" tabindex="1" maxlength="100" />
                    </p>
                    <p class="field">
                    	<label class="text" for="sname">Surname*</label>
                        <input class="text <?=isset($error['fname'])? $error['sname'] : ""?>" id="sname" name="sname" type="text" tabindex="2" maxlength="100" />
                    </p>
                    <p class="field" style="padding-bottom:3px;">
                    	<label class="text" for="email">Email*</label>
                        <input class="text <?=isset($error['email'])? $error['email'] : ""?>" id="email" name="email" type="text" tabindex="3" maxlength="255" />
                        <span>this is so we can contact you if you are a winner</span>
                    </p>
                    <p class="field">
                    	<label class="text" for="email_confirm">Confirm email*</label>
                        <input class="text <?=isset($error['email_confirm'])? $error['email_confirm'] : ""?>" id="email_confirm" name="email_confirm" type="text" tabindex="4" maxlength="255" />
                    </p> 
                    <p class="field">
                    	<label class="text" for="house_no">House no/name*</label>
                        <input class="text <?=isset($error['house_no'])? $error['house_no'] : ""?>" id="house_no" name="house_no" type="text" tabindex="5" maxlength="100"  />
                    </p>
                    <p class="field">
                    	<label class="text" for="postcode1">Postcode*</label>
                        <input class="postcode <?=isset($error['postcode'])? $error['postcode'] : ""?>" id="postcode1" name="postcode1" type="text" tabindex="6" maxlength="4" />
                        <input class="postcode <?=isset($error['postcode'])? $error['postcode'] : ""?>" id="postcode2" name="postcode2" type="text" tabindex="7" maxlength="5" />
                    </p>
                </fieldset>
                <!--CHECKBOXES-->
                <fieldset id="checkboxes">
                	<p class="checkbox">
                    	<label class="checkbox" for="ROI"><input class="checkbox" id="ROI" name="ROI" type="checkbox" tabindex="8" value="1" />I live in the Republic Of Ireland</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox <?=isset($error['postcode'])? $error['postcode'] : ""?>" for="age"><input class="checkbox" id="age" name="age" type="checkbox" tabindex="9" value="1" />I am over 16*</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox <?=isset($error['consent'])? $error['consent'] : ""?>" for="consent"><input class="checkbox" id="consent" name="consent" type="checkbox" tabindex="10" value="1" />I am 16 or 17 and I have parental consent to enter</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox <?=isset($error['terms'])? $error['terms'] : ""?>" for="terms"><input class="checkbox" id="terms" name="terms" type="checkbox" tabindex="11" value="1" />I have read and agree to the Terms &amp; Conditions*</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox <?=isset($error['optin_1'])? $error['optin_1'] : ""?>" for="optin_1"><input class="checkbox" id="optin_1" name="optin_1" type="checkbox" tabindex="12" value="1" />I would like to receive updates and offers from United Biscuits</label>
                    </p>
                </fieldset>
                <!--END OF CHECKBOXES--> 
                <fieldset id="submit">
                    <a class="back" href="<?php echo $routes['competition']['enter']?>step1.php">BACK ></a>
                    <input id="submit" class="next" type="image" name="submit" value="submit" src="../../../images/competition/batchcode-entry/btn_next.png" alt="next" border="0" />
                </fieldset>
                <!--Hidden fields-->
        			<input name="formsubmit" id="formsubmit" type="hidden" value="submit" />
        		<!--End of hidden fields-->
            </form>
        </div>
    </div>
</div>
<?php include (DOCROOT . '/include/footer.php'); ?>
