
	  <?php

	  	//we need to check if there is a moment being pased thru here, and echo it 
		//out if there for errors and thankyou display
		isset($_GET['m'])?$moment = '?m='.$_GET['m'] : $moment = '';
		
	  ?>
		  <h3 class ="newsletter">Keep in touch with KP. News &amp; Offers</h3>
		  <form id="newsletter" action="<?= $_SERVER['PHP_SELF'].$moment ?>" method="post">
			<fieldset>
				<label for="email-news">Enter your email address:</label>
				<input id="email-news" name="email-news" type="text" maxlength="255" value="<?= isset($news_error)?$news_error:''?>" class="<?php isset($error)?'error':''?>" />
				<input id="submit" class="newsletter <?=$version?>" type="image" name="submit" value="submit" src="<?=SITE_URL?>images/footer/newsletter<?=$version?>/newsletter_submit_btn.gif" border="0" />
				<input id="newsformsubmit" type="hidden" name="newsformsubmit" value="newsformsubmit" />                
			</fieldset>
		  </form>
