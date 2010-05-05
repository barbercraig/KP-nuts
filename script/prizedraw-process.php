<?php
/*
*	prizedraw-process.php
*
*	Processes an entry to the prize draw
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
if(isset($_POST['prizedrawsubmit'])){

	require_once(DOCROOT . 'include/config.php');

	//collect users IP address
	$ip = $_SERVER['REMOTE_ADDR'];
	
	$source = 'online-form';

	//cleanse the POST
	$dbFilter = new MysqlFilter();
		
	$cPost = array();
	
	foreach ($_POST as $key => $value) {		
		$value = str_replace(",", "", $value);
		$cPost[$key] = $dbFilter->dbPrepare($value);
	}
	
	//set mandatory fields
	$prizedraw_conf['mandatories'] = array("fname", "sname", "email", "terms");
	//set fields which must not contain numeric data
	$prizedraw_conf['non_numeric'] = array("fname", "sname");
		
	//First, lets make sure there are is no numeric data in the name fields
	$userValidate = UserDataValidator::getInstance($prizedraw_conf['mandatories'], '');
	
	if(!$userValidate->containsNumeric($cPost, $prizedraw_conf['non_numeric'])){
		//continue with processing
		//check mandatory information has been submitted
		if(FormValidator::checkMandatories($prizedraw_conf['mandatories'], $cPost)){
			//now check email and confirm email match
			if(FormValidator::fieldMatch($cPost['email'], $cPost['email_confirm'])){
				//now check the email is a valid email
				//check email entered is a valid email
				$emailVerify = new EmailVerifier($cPost['email']);
				if($emailVerify->partVerify()) {
					//now we can check the entrant hasn't already entered
	
					//check for email already in database
					$sql = "SELECT count(*) FROM ".$prizedraw_table." where email='".$cPost['email']."'";
						$qry=mysql_query($sql);
						$results=mysql_fetch_array($qry);
						$count=$results[0];
						if ($count<1){
							//haven't already entered, so enter them!
									//insert record into table
							$sql = "INSERT INTO ".$prizedraw_table." (fname, sname, email, ip, source, optin) VALUES ('".$cPost['fname']."', '".$cPost['sname']."', '".$cPost['email']."', '".$ip."', '".$source."', '".$cPost['optin_1']."')";
														
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
							$returnVal = 'already_entered';
						}
				}else{
					$returnVal = 'invalid_email';
				}
			}else{
				$returnVal = FormValidator::getLastError();
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