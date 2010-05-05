<?php
/*
*	sms-receive.php
*
*	Receive an sms entry to competition
*	@date:		31.03.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/

//Displaying PHP errors
/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/nfslocal/www/html/kpnuts/components/sms/log/error_log.txt');
error_reporting(E_ALL);*/


//echo 'success';

if(isset($_GET)){

	//send response back
	header("HTTP/1.0 200 OK");

	//start sms entry process
	include('/nfslocal/www/include/competitions/ub/kpnuts-fm-2010/process/sms/do-sms-early-entry.php');
	
}else{
	//echo 'no sms received';
}

/*function write_to_file($data){  	
	//declare log file
	$logfile = '/nfslocal/www/html/inboxwork/ub/kp/log/logfile.txt';
	
	//open log file
	$fh = fopen($logfile, 'a') or die("can't open file");
	
	$datastring = '';
	//loop through each of the get data pieces and make string
	/*foreach($data as $key => $value){
		if(is_array($value)){
			foreach($value as $data_key => $message){
				$datastring .= $message;
				$datastring .= ', ';
			}
			$datastring .= $value;
			$datastring .= ', ';
		}
	}*/
	/*$datastring .= $data;
	$datastring .= "\r\n";
	
	//write string to file
	fwrite($fh, $datastring);
	
	//close file
	fclose($fh);
}*/


?>