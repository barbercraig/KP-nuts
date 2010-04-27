<?php 
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
?>
<?php $pageID = "competition"; ?>
<?php include(DOCROOT . '/include/header.php'); ?>
<div id="comp-content" class="step2">
	<div class="content_box userform">
    	<div class="form-content">
        	<h2 class="step2-tellus">Tell us about you</h2>
            <br />
            <form id="enter-step2" class="comp-process step2" name="enter-step2" action="<?php echo $routes['competition']['enter']?>step3.php" method="post">
            	<fieldset>
                	<p class="field">
                        <label class="text" for="firstname">First name*</label>
                        <input class="text" id="firstname" name="firstname" type="text" tabindex="1" maxlength="100" />
                    </p>
                    <p class="field">
                    	<label class="text" for="surname">Surname*</label>
                        <input class="text" id="surname" name="surname" type="text" tabindex="2" maxlength="100" />
                    </p>
                    <p class="field" style="padding-bottom:3px;">
                    	<label class="text" for="userdata-email">Email*</label>
                        <input class="text" id="userdata-email" name="email" type="text" tabindex="3" maxlength="255" />
                        <span>this is so we can contact you if you are a winner</span>
                    </p>
                    <p class="field">
                    	<label class="text" for="userdata-email_confirm">Confirm email*</label>
                        <input class="text" id="userdata-email_confirm" name="email-confirm" type="text" tabindex="4" maxlength="255" />
                    </p> 
                    <p class="field">
                    	<label class="text" for="house_no">House no/name*</label>
                        <input class="text" id="house_no" name="house_no" type="text" tabindex="5" maxlength="100"  />
                    </p>
                    <p class="field">
                    	<label class="text" for="postcode1">Postcode*</label>
                        <input class="postcode" id="postcode1" name="postcode1" type="text" tabindex="6" maxlength="4" />
                        <input class="postcode" id="postcode2" name="postcode2" type="text" tabindex="7" maxlength="5" />
                    </p>
                </fieldset>
                <!--CHECKBOXES-->
                <fieldset id="checkboxes">
                	<p class="checkbox">
                    	<label class="checkbox" for="ROI"><input class="checkbox" id="ROI" name="ROI" type="checkbox" tabindex="8" value="1" />I live in the Republic Of Ireland</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox" for="over16"><input class="checkbox" id="over16" name="over16" type="checkbox" tabindex="9" value="1" />I am over 16*</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox" for="consent"><input class="checkbox" id="consent" name="consent" type="checkbox" tabindex="10" value="1" />I am 16 or 17 and I have parental consent to enter</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox" for="terms"><input class="checkbox" id="terms" name="terms" type="checkbox" tabindex="11" value="1" />I have read and agree to the Terms &amp; Conditions*</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox" for="optin"><input class="checkbox" id="optin" name="optin" type="checkbox" tabindex="12" value="1" />I would like to receive updates and offers from United Biscuits</label>
                    </p>
                </fieldset>
                <!--END OF CHECKBOXES--> 
                <fieldset id="submit">
                    <a class="back" href="<?php echo $routes['competition']['enter']?>step1.php">BACK ></a>
                    <input id="submit" class="next" type="image" name="submit" value="submit" src="../../../images/competition/batchcode-entry/btn_next.png" alt="next" border="0" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php include (DOCROOT . '/include/footer.php'); ?>
