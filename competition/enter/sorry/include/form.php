
    <form class="register" id="register" name="register" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset id="registration">
            <div id="error" style="margin-left:0px;">
                <?=isset($message) ? $message : null?>
            </div>
            <h3 class="form-register">Register for news</h3>
            <p class="field">
                <label class="text reg-label" for="fname">First name*</label>
                <input class="reg <?=isset($error['fname'])? $error['fname'] : ""?>" name="fname" id="fname" type="text" tabindex="1" maxlength="200" value="<?=isset($_POST['fname'])?$_POST['fname']:''?>" />
            </p>
            <p class="field">
                <label class="text reg-label" for="sname">Surname*</label>
                <input class="reg <?=isset($error['sname'])? $error['sname'] : ""?>" name="sname" id="sname" type="text" tabindex="2" maxlength="200" value="<?=isset($_POST['sname'])?$_POST['sname']:''?>" />
            </p>
            <p class="field">
                <label class="text reg-label" for="email">Email*</label>
                <input class="reg <?=isset($error['email-reg-news'])? $error['email-reg-news'] : ""?>" name="email-reg-news" id="email-reg-news" type="text" tabindex="3" maxlength="255" value="<?=isset($_POST['email-reg-news'])?$_POST['email-reg-news']:''?>" />
            </p>
        </fieldset>
        <fieldset id="registration" class="boxes">
            <p class="checkbox">
                <label class="checkbox reg" for="optin"><input class="checkbox reg" id="optin" name="optin" type="checkbox" tabindex="8" value="1" />
                I would like to receive updates and offers from United Biscuits</label>
            </p>
        </fieldset>
        <fieldset id="registration" class="boxes" style="clear:both;">
            <input id="submit" class="submit" type="image" name="submit" value="submit" src="../../images/competition/result-messages/lose/btn_submit.gif" alt="submit >" width="93" height="28" border="0" />
        </fieldset>
        <!--Hidden fields-->
            <input name="newslettersubmit" id="newslettersubmit" type="hidden" value="submit" />
        <!--End of hidden fields-->
    
    </form>
