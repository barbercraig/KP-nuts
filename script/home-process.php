<?php

/*
*
*	process.php
*	description:	A script to capture email address, validate, and insert into database securely.
*
*	author:			Craig Barber
*	Date:			13.01.10
*
*/
//look for submitted form
if(isset($_POST['newsformsubmit'])){
	//Check that config hasn't already been loaded
	if(!$config_set){
		include(DOCROOT . 'include/config.php');
	}
	//$success = true;
	//email has been submitted
	//cleanse post
	foreach($_POST as $key => $value){
		$_cPOST[$key] = mysql_real_escape_string($value);	
	}
	//destroy original post data
	//unset($_POST);
	
	//collect users IP address
	$ip = $_SERVER['REMOTE_ADDR'];
	
	


	//check for email already in database
	$sql = "SELECT count(*) FROM ".$newsletter_table." where email='".$_cPOST['email-news']."'";
	
		$qry=mysql_query($sql);
		$results=mysql_fetch_array($qry);
		$count=$results[0];
		if ($count>0){
			//This is a dupe				
			$news_error="Your details are already registered for the newsletter";
			
			$success = false;
		}

		//check for valid email
		//check email is valid
		$okemail=false;
		$emlVerifier = new EmailVerifier($_cPOST['email-news'], "Email");
		if ($emlVerifier->partVerify()) {
			//Email address is valid
			$okemail=true;
		}
		unset($emlVerifier);
		
		//output error if email isnt valid
		if (($okemail==false)&&(!empty($_cPOST['email-news']))) {	
			$news_error = "The email address you have entered is not valid";
			
			$success = false;
		}
					
	
	if(!isset($news_error)){
		//insert record into table
		$sql = "INSERT INTO ".$newsletter_table." (fname, sname, email, ip, optin) VALUES ('".$_cPOST['fname']."', '".$_cPOST['sname']."', '".$_cPOST['email-news']."', '".$ip."', '".$_cPOST['optin']."')";
		
		$qry = mysql_query($sql,$db_object);
	
		if (mysql_affected_rows($db_object) != 1){
			$success = false;
			$news_error = "There was a problem with your entry. Please try again";
		}else{
			//record successfully added
			$success = true;
		}
	
	}
	
	


}

//if no error, input into database display thankyou screen

//if error output error message, redirect back to page with errors, Get user to try again
?>