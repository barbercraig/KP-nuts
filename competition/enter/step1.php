<?php 
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
?>
<?php $pageID = "competition"; ?>
<?php include(DOCROOT . '/include/header.php'); ?>

  <div id="comp-content">
	<h2 class="moment-mara">You've chosen to vote for B. Maradonna's breathtaking second goal v England 1986</h2>
    <br />
    <form id="enter-step1" class="comp-process" name="enter-step1" action="<?php echo $routes['competition']['enter']?>step2.php" method="post">
    	<fieldset>
        	<p class="field">
                <label class="batchcode" for="batchcode">Enter the batchcode from your promotional pack:</label>
                <input id="batchcode" name="batchcode" type="text" tabindex="1" maxlength="9" />
            </p>
            <p class="field">
            	<label class="moment" for="moment"></label>
                <select id="moment" name="moment" tabindex="2">
                	<option id="mara" name="owen">Maradona&rsquo;s breathtaking second goal v England 1986</option>
                    <option id="owen" name="owen">Owen&rsquo;s amazing goal v Argentina 1998</option>
                </select>
            </p>
        </fieldset>
        <fieldset>
        	<a class="back" href="">BACK ></a>
        	<input id="submit" class="next" type="image" name="submit" value="submit" src="../../../images/competition/batchcode-entry/btn_next.png" alt="next" border="0" />
        </fieldset>
    </form>
    <div id="visual">
    	<img src="../../../images/competition/batchcode-entry/img_batchcode-visual.png" width="310" height="257" alt="visual" border="0" style="display:block;" />
    </div>
  </div>
 
<?php include (DOCROOT . '/include/footer.php'); ?>
