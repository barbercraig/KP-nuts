<?php
	
	//explode string into an array	
	//$error_object = simplexml_load_string($returnVal);
		
	switch($returnVal){
		case "missing_mandatories":
			//loop through all the mandatory fields, and load them into error array
			if($step == 'error'){
				foreach($newsletter_conf['mandatories'] as $key => $value){
					$error[$value]  = "error";
				}
			}else{
				foreach($prizedraw_conf['mandatories'] as $key => $value){
					$error[$value]  = "error";
				}
			}			
			$message = "Oops, you haven't entered all the mandatory fields, try again";
		break;
		
		case "invalid_email":
			$error['email'] = "error";
			$message = "Your email address is invalid";
			break;
			
		case "invalid_email_addy":
			$error['email-reg-news'] = "error";
			$message = "Your email address is invalid";
			break;
			
		case "field_mismatch":
			$error['email_confirm'] = "error";
			$error['email'] = "error";
			$message = "Your entered email addresses don't match";
			break;
			
		case "numeric_data":
			$error['fname'] = "error";
			$error['sname'] = "error";
			$message = "Your are not permitted to enter numeric data in your name";
			break;
			
		case "already_entered":
			$message = "You have already entered the prize draw";
			break;
			
		case "already_signed_up":
			$message = "You have already signed up to the newsletter mailing list";
			break;
	}
	
?>

