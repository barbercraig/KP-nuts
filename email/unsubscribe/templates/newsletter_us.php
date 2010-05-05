<div id="content">
	<img src="http://www.kpnuts.com/email/unsubscribe/images/kp-top.jpg" width="650" height="41" alt="" style="display:block" />
	<div style="float:left; width:93px;"><img src="http://www.kpnuts.com/email/unsubscribe/images/nav/left.jpg" width="93" height="30" alt="" style="display:block" /></div>
  <div style="float:left; width:96px;"><img src="http://www.kpnuts.com/email/unsubscribe/images/nav/about-kp.jpg" width="96" height="30" alt="About KP" border="0" style="display:block" /></div>
  <div style="float:left; width:273px;">
  	<a href="http://www.kpnuts.com/about-kp.php" target="_blank"><img src="http://www.kpnuts.com/email/unsubscribe/images/nav/kp-mid.jpg" width="273" height="30" alt="KP" border="0" style="display:block" /></a>
  </div>
  <div style="float:left; width:94px;">
	  <a href="http://www.kpnuts.com/" target="_blank"><img src="http://www.kpnuts.com/email/unsubscribe/images/nav/kp-range.jpg" width="94" height="30" alt="KP Range" border="0" style="display:block" /></a>
  </div>
  <div style="float:left; width:94px;"><img src="http://www.kpnuts.com/email/unsubscribe/images/nav/right.jpg" width="94" height="30" alt="" style="display:block" /></div>
  <div class="clearer"><!-- --></div>
  <img src="http://www.kpnuts.com/email/unsubscribe/images/kp_btm.jpg" width="650" height="92" alt="You're a winner!" style="display:block" />
  
  <div id="form_area">
		<?php
		if ($usConfirm == "confirm") {
			echo "<div class=\"newsletter_intro\">You have been removed from the mailing list</div>\r\n";
		} else {
			echo "<div class=\"newsletter_intro\">Please click the button below to unsubscribe from the United Biscuits mailing list</div>\r\n";
		?>
  		<form style="width:650px; margin:0 auto; text-align:center;" name="us_form" id="us_form" method="post" action="http://www.kpnuts.com/email/unsubscribe/unsubscribe.php">
	 			<input type="hidden" name="us_confirm" value="confirm" />
				<input type="hidden" name="c" value="<?php echo nvl($campaign); ?>" />
  		  <input type="hidden" name="u" value="<?php echo nvl($uid); ?>" />
    		<input type="hidden" name="email" value="<?php echo nvl($email); ?>" /><br /><br />
		  	<input type="submit" value="Unsubscribe" />
	  	</form> 
		<?php
		}
		?>
    <br /><br /><br /><br />
  </div>
</div>