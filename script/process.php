<?php
/*
*	newsletter-process.php
*
*	Processes an entry to the kp newsletter
*	@date:		28.04.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/
//Displaying PHP errors
/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);*/

//look for submitted form
if(isset($_POST['newslettersubmit'])){
	
	require_once(DOCROOT . 'include/config.php');

	//collect users IP address
	$ip = $_SERVER['REMOTE_ADDR'];
	
	//cleanse the POST
	$dbFilter = new MysqlFilter();
		
	$cPost = array();
	
	foreach ($_POST as $key => $value) {		
		$value = str_replace(",", "", $value);
		$cPost[$key] = $dbFilter->dbPrepare($value);
	}
	
	//set mandatory fields
	$newsletter_conf['mandatories'] = array("fname", "sname", "email-reg-news");
	//set fields which must not contain numeric data
	$newsletter_conf['non_numeric'] = array("fname", "sname");
		
	//First, lets make sure there are is no numeric data in the name fields
	$userValidate = UserDataValidator::getInstance($newsletter_conf['mandatories'], '');
	
	if(!$userValidate->containsNumeric($cPost, $newsletter_conf['non_numeric'])){
		//continue with processing
		//check mandatory information has been submitted
		if(FormValidator::checkMandatories($newsletter_conf['mandatories'], $cPost)){
			//now check the email is a valid email
			//check email entered is a valid email
			$emailVerify = new EmailVerifier($cPost['email-reg-news']);
			if($emailVerify->partVerify()) {
				//now we can check the entrant hasn't already entered

				//check for email already in database
				$sql = "SELECT count(*) FROM ".$newsletter_table." where email='".$cPost['email-reg-news']."'";
					$qry=mysql_query($sql);
					$results=mysql_fetch_array($qry);
					$count=$results[0];
					if ($count<1){
						//haven't already entered, so enter them!
								//insert record into table
						$sql = "INSERT INTO ".$newsletter_table." (fname, sname, email, ip, optin) VALUES ('".$cPost['fname']."', '".$cPost['sname']."', '".$cPost['email-reg-news']."', '".$ip."', '".$cPost['optin']."')";
						
						$qry = mysql_query($sql,$db_object);
					
						if (mysql_affected_rows($db_object) != 1){
							$success = false;
							$returnVal = 'entry_other_error';
						}else{
							//record successfully added
							$returnVal = 'success';
						}
					}else{
						//This is a dupe				
						$returnVal = 'already_signed_up';
					}
			}else{
				$returnVal = 'invalid_email_addy';
			}
		}else{
			$returnVal = FormValidator::getLastError();
		}
	}else{
		//show error
		$returnVal = 'numeric_data';
	}
	
	
}
?>