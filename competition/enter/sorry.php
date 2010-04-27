<?php

	session_start();
	$pageID = "competition";
	$step = 'error';
	
	print_r($_SESSION);
	
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
		
	include(DOCROOT . '/include/header.php'); 
	
?>
<div id="comp-content" class="sorry">
	<h2 class="error <?=$_SESSION['lose_type']?>">Sorry. You have exceeded the entry limit.</h2>
    <p class="error <?=$_SESSION['lose_type']?>">Please pick up another KP pack and try again.</p>
    <form class="register" id="register" name="register" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset id="registration">
        	<h3 class="form-register">Register for news</h3>
            <p class="field">
                <label class="text reg" for="fname">First name*</label>
                <input class="reg" name="fname" id="fname" type="text" tabindex="1" maxlength="200" />
            </p>
            <p class="field">
                <label class="text reg" for="sname">Surname*</label>
                <input class="reg" name="sname" id="sname" type="text" tabindex="2" maxlength="200" />
            </p>
            <p class="field">
                <label class="text reg" for="email">Email*</label>
                <input class="reg" name="email" id="email" type="text" tabindex="3" maxlength="255" />
            </p>
        </fieldset>
        <fieldset id="registration" class="boxes">
            <p class="checkbox">
                <label class="checkbox reg" for="ROI"><input class="checkbox reg" id="ROI" name="ROI" type="checkbox" tabindex="8" value="1" />
                I would like to receive updates and offers from United Biscuits</label>
            </p>
        </fieldset>
        <fieldset id="registration" class="boxes" style="clear:both;">
            <input id="submit" class="submit" type="image" name="submit" value="submit" src="../../images/competition/result-messages/btn_submit.png" alt="submit >" width="93" height="28" border="0" />
        </fieldset>
    </form>
    <div id="nav-sorry">
    	<a class="button league" href="" >View League Table ></a>
    	<a class="button range" href="" >View Product Range ></a>
    </div>
</div>
<?php include (DOCROOT . '/include/footer.php'); ?>
<?php session_destroy(); ?>

