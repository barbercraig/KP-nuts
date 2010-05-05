<?php
	//explode string into an array	
	$error_object = simplexml_load_string($returnVal);
		
	switch($error_object->reason){
		case "invalid-batchcode":
			$code_error = "error";
			$message = "You've entered the wrong batchcode, try again";
			break;
					
		case "missing_mandatories":
			//loop through all the mandatory fields, and load them into error array
			foreach($config['mandatories'] as $key => $value){
				$error[$value]  = "error";
			}			
			$message = "Oops, you haven't entered all the mandatory fields, try again";
		break;
		
		case "invalid-email":
			$error['email'] = "error";
			$message = "Your email address is invalid";
			break;
						
		case "email-mismatch":
			$error['email_confirm'] = "error";
			$error['email'] = "error";
			$message = "Your entered email addresses don't match";
			break;
			
		case "numerics found":
			$error['fname'] = "error";
			$error['sname'] = "error";
			$message = "You are not permitted to enter numeric data in your name";
			break;
			
		case "invalid_age":
			$error['age'] = "error";
			$error['consent'] = "error";
			$message = "You must be over 16, or 17 with parent consent to enter";
			break;
			
		case "invalid-postcode":
			$error['postcode'] = "error";
			$message = "The postcode you have entered is incorrect, please try again";
			break;
	}
	
?>
