<?php

	session_start();
	$pageID = "competition";
	$step = 'batch';
	
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}	

	//include moment vote handler
	include(DOCROOT . 'include/handlers/vote-handler.php');
	include(DOCROOT . 'include/handlers/error-handler.php');
	
	if ($returnVal == "success") {
		foreach($cPost as $key => $value) {
			$_SESSION[$key] = $value;
		}
		header("Location: " . $routes['competition']['enter'] . "step2.php");
	}

	include(DOCROOT . '/include/header.php'); 
	
?>
  <div class="comp-content">
	<?php
        if($allowed_entry){
    ?>
	<h2 class="moment-<?=$moment?>">You've chosen to vote for <?=$football_moment[$moment]['long']?></h2>
    <br />
    <form id="enter-step1" class="comp-process" name="enter-step1" action="<?= $_SERVER['PHP_SELF'].'?m='.$moment ?>" method="post">
    	<div id="error">
  			<?=isset($message) ? $message : null?>
        </div>
    	<fieldset>
        	<p class="field">
                <label class="batchcode" for="batchcode">To locate the batchcode on your promotional pack, please see the example on the 
                	right. Batchcode may vary in characters depending on promotional pack</label>
                <input class="<?=isset($code_error)? $code_error : ""?>" id="batchcode" name="batchcode" type="text" tabindex="1" maxlength="9" value="<?=isset($_POST['batchcode'])?$_POST['batchcode']:''?>" />
            </p>
            <p class="field">
            	<label class="moment" for="moment">My best quality moment is:</label>
                <select id="moment" name="moment" tabindex="2">
                    <option id="banks" name="banks" value="banks" <?=isset($selected_vote['banks'])?$selected_vote['banks']:''?>><?=$football_moment['banks']['long']?></option>
                	<option id="maradona" name="maradona" value="maradona" <?=isset($selected_vote['mara'])?$selected_vote['mara']:''?>><?=$football_moment['mara']['long']?></option>
                    <option id="owen" name="owen" value="owen" <?=isset($selected_vote['owen'])?$selected_vote['owen']:''?>><?=$football_moment['owen']['long']?></option>
                    <option id="hurst" name="hurst" value="hurst" <?=isset($selected_vote['hurst'])?$selected_vote['hurst']:''?>><?=$football_moment['hurst']['long']?></option>
                    <option id="jairzinho" name="jairzinho" value="jairzinho" <?=isset($selected_vote['jairzinho'])?$selected_vote['jairzinho']:''?>><?=$football_moment['jairzinho']['long']?></option>
                    <option id="bergkamp" name="bergkamp" value="bergkamp" <?=isset($selected_vote['bergkamp'])?$selected_vote['bergkamp']:''?>><?=$football_moment['bergkamp']['long']?></option>
                    <option id="cruyff" name="cruyff" value="cruyff" <?=isset($selected_vote['cruyff'])?$selected_vote['cruyff']:''?>><?=$football_moment['cruyff']['long']?></option>
                    <option id="gemmill" name="gemmill" value="gemmill" <?=isset($selected_vote['gemmill'])?$selected_vote['gemmill']:''?>><?=$football_moment['gemmill']['long']?></option>
                    <option id="platt" name="platt" value="platt" <?=isset($selected_vote['platt'])?$selected_vote['platt']:''?>><?=$football_moment['platt']['long']?></option>
                    <option id="moore" name="moore" value="moore" <?=isset($selected_vote['moore'])?$selected_vote['moore']:''?>><?=$football_moment['moore']['long']?></option>
                </select>
            </p>
        </fieldset>
        <fieldset>
        	<a class="back" href="<?=$routes['competition']['vote']?>">BACK ></a>
        	<input id="submit" class="next" type="image" name="submit" value="submit" src="<?=SITE_URL?>/images/competition/batchcode-entry/btn_next.gif" alt="next" border="0" />
        </fieldset>
        <!--Hidden fields-->
        	<input name="formsubmit" id="formsubmit" type="hidden" value="submit" />
        <!--End of hidden fields-->
    </form>
    <div id="visual">
    	<img src="<?=SITE_URL?>/images/competition/batchcode-entry/img_batchcode-visual.png" width="310" height="257" alt="visual" border="0" style="display:block;" />
    </div>
    <?php
	}
?>
  </div>

 
<?php include (DOCROOT . '/include/footer.php'); ?>
