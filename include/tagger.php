<?php
/*
*	tagger.php
*
*	Sets page id's for inbox tag
*	@date:		27.04.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/

//Displaying PHP errors
/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);*/

switch($pageID){
	case "home":
		$tagId = "4314";
		break;
	
	case "about-kp":
		$tagId = "4315";
		break;
	
	case "range":
		$tagId = "4316";
		
		switch($productID){
			case "regular":
				$tagId = "4323";
				break;
				
			case "jumbo_flavoured":
				$tagId = "4325";
				break;
				
			case "treenuts":
				$tagId = "4324";
				break;
				
			default:
				$tagId = "4316";
				break;
		}
		
		break;
				
	case "nutrition":
		$tagId = "4326";
		break;
		
	case "newsletter-signup":
		$tagId = "4318";
		break;
	
	case "competition":
		switch($step){
			case "view":
				$tagId = "4327";
				break;
				
			case "vote":
				$tagId = "4328";
				break;
				
			case "batch":
				$tagId = "4329";
				break;
				
			case "user":
				$tagId = "4330";
				break;
				
			case "captcha":
				$tagId = "4331";
				break;
			
			case "league":
				$tagId = "4337";
				break;	
				
			case "prizedraw":
				$tagId = "4340";
				break;
				
			case "prizedraw-enter":
				$tagId = "4341";
				break;
				
			case "prizedraw-thanks":
				$tagId = "4342";
				break;
		}
		
		break;
	
	case "terms":
		$tagId = "4338";
		break;
		
	case "faqs":
		$tagId = "4339";
		break; 
		
	default:
		$tagId = "4314";
		break;
}

?>
