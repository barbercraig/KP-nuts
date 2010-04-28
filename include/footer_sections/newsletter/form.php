
	  
		  <h3 class ="newsletter">Keep in touch with KP. News &amp; Offers</h3>
		  <form id="newsletter" action="index.php" method="post">
			<fieldset>
				<label for="email-news">Enter your email address:</label>
				<input id="email-news" name="email" type="text" maxlength="255" value="<?php //nvl($error)?>" class="<?php //if(nvl($error)){echo 'error';}?>" />
				<input id="submit" class="newsletter <?=$version?>" type="image" name="submit" value="submit" src="<?=SITE_URL?>images/footer/newsletter<?=$version?>/newsletter_submit_btn.png" border="0" />
				<input id="formsubmit" type="hidden" name="formsubmit" value="formsubmit" />                
			</fieldset>
		  </form>
