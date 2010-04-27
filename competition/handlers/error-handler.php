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

	}
	
?>
