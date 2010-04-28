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

#include init file 
include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');

include(DOCROOT . 'competition/handlers/error-handler.php');

if ($returnVal == "success") {
	//do something here
}

include(DOCROOT . '/include/header.php'); 
?>

<p>&nbsp;</p>
<div id="comp-content" class="prizedraw">
	<div class="content_box prizedraw">
    	<div class="form-content prizedraw">
        	<h2 class="tellus">Tell us about you</h2>
            <form id="prizedraw" class="prizedraw" name="prizedraw" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
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
                </fieldset>
                <!--CHECKBOXES-->
                <fieldset id="checkboxes">
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
            </form>
        </div>
  </div>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
