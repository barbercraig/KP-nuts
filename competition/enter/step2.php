<?php 
	session_start();
	$pageID = "competition";
	$step = 'user';


	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}	
		
	include(DOCROOT . 'include/handlers/error-handler.php');
		
	if ($returnVal == "success") {
		foreach($cPost as $key => $value) {
			$_SESSION[$key] = $value;
		}
		header("Location: " . $routes['competition']['enter'] . "step3.php");
	}
	
	include(DOCROOT . '/include/header.php'); 
?>
<div class="comp-content step2-content">
	<?php
        if($allowed_entry){
    ?>
	<div class="content_box userform">
    	<div class="form-content">
        	<h2 class="tellus">Tell us about you</h2>
            <form id="enter-step2" class="comp-process step2" name="enter-step2" action="<?= $_SERVER['PHP_SELF'].'?m='.$_SESSION['moment'] ?>" method="post">
                <div id="error">
                    <?=isset($message) ? $message : null?>
                </div>
            	<fieldset>
                	<p class="field">
                        <label class="text" for="fname">First name*</label>
                        <input class="text <?=isset($error['fname'])? $error['fname'] : ""?>" id="fname" name="fname" type="text" tabindex="1" maxlength="100" value="<?=isset($_POST['fname'])?$_POST['fname']:''?>" />
                    </p>
                    <p class="field">
                    	<label class="text" for="sname">Surname*</label>
                        <input class="text <?=isset($error['fname'])? $error['sname'] : ""?>" id="sname" name="sname" type="text" tabindex="2" maxlength="100" value="<?=isset($_POST['sname'])?$_POST['sname']:''?>" />
                    </p>
                    <p class="field" style="padding-bottom:3px;">
                    	<label class="text" for="email">Email*</label>
                        <input class="text <?=isset($error['email'])? $error['email'] : ""?>" id="email" name="email" type="text" tabindex="3" maxlength="255" value="<?=isset($_POST['email'])?$_POST['email']:''?>" />
                        <span>this is so we can contact you if you are a winner</span>
                    </p>
                    <p class="field">
                    	<label class="text" for="email_confirm">Confirm email*</label>
                        <input class="text <?=isset($error['email_confirm'])? $error['email_confirm'] : ""?>" id="email_confirm" name="email_confirm" type="text" tabindex="4" maxlength="255" value="<?=isset($_POST['email_confirm'])?$_POST['email_confirm']:''?>"/>
                    </p> 
                    <p class="field">
                    	<label class="text" for="house_no">House no/name*</label>
                        <input class="text <?=isset($error['house_no'])? $error['house_no'] : ""?>" id="house_no" name="house_no" type="text" tabindex="5" maxlength="100" value="<?=isset($_POST['house_no'])?$_POST['house_no']:''?>" />
                    </p>
                    <div id="roi-fields">
                        <p class="field">
                            <label class="text" for="street">Street*</label>
                            <input class="text <?=isset($error['street'])? $error['street'] : ""?>" id="street" name="street" type="text" tabindex="5" maxlength="100" value="<?=isset($_POST['street'])?$_POST['street']:''?>" />
                        </p>
                        <p class="field">
                            <label class="text" for="town">Town/City*</label>
                            <input class="text <?=isset($error['town'])? $error['town'] : ""?>" id="town" name="town" type="text" tabindex="5" maxlength="100" value="<?=isset($_POST['town'])?$_POST['town']:''?>" />
                        </p>
                    </div>
                    <div id="roi-postcode">
                        <p class="field">
                            <label class="text" for="postcode1">Postcode*</label>
                            <input class="postcode <?=isset($error['postcode'])? $error['postcode'] : ""?>" id="postcode1" name="postcode1" type="text" tabindex="6" maxlength="4" value="<?=isset($_POST['postcode1'])?$_POST['postcode1']:''?>" />
                            <input class="postcode <?=isset($error['postcode'])? $error['postcode'] : ""?>" id="postcode2" name="postcode2" type="text" tabindex="7" maxlength="3" value="<?=isset($_POST['postcode2'])?$_POST['postcode2']:''?>" />
                        </p>
                    </div>
                </fieldset>
                <!--CHECKBOXES-->
                <fieldset id="checkboxes">
                	<p class="checkbox">
                    	<label class="checkbox" for="ROI"><input class="checkbox" id="ROI" name="ROI" type="checkbox" tabindex="8" value="1" <?=isset($_POST['ROI'])? 'checked' : ""?> />I live in the Republic Of Ireland</label>
                    </p>
                    <p class="checkbox">
                    	<label class="checkbox <?=isset($error['age'])? $error['age'] : ""?>" for="age"><input class="checkbox" id="age" name="age" type="checkbox" tabindex="9" value="1" />I am over 16*</label>
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
                    <a class="back" href="<?php echo $routes['competition']['enter']?>step1.php?m=<?=$_SESSION['moment']?>">BACK ></a>
                    <input id="submit" class="next" type="image" name="submit" value="submit" src="<?=SITE_URL?>/images/competition/batchcode-entry/btn_next.gif" alt="next" border="0" />
                </fieldset>
                <!--Hidden fields-->
        			<input name="formsubmit" id="formsubmit" type="hidden" value="submit" />
        			<input name="notifer" id="notifier" type="hidden" value="<?=isset($_POST['formsubmit'])? 'error' : ""?>" />
        			<input name="postcodenotifer" id="postcodenotifier" type="hidden" value="<?=isset($error['postcode'])? $error['postcode'] : ""?>" />
        			<input name="streetnotifer" id="streetnotifier" type="hidden" value="<?=isset($error['street'])? $error['street'] : ""?>" />
        			<input name="townnotifer" id="townnotifier" type="hidden" value="<?=isset($error['town'])? $error['town'] : ""?>" />
        		<!--End of hidden fields-->
            </form>
        </div>
    </div>
        <?php
	}
?>

</div>
<?php include (DOCROOT . '/include/footer.php'); ?>
