<?php
/*
*	sms-send.php
*
*	Send sms
*	@date:		24.03.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/

if(isset($_GET) && isset($_GET['test'])){
	
	//SET THE COUNTRY THAT THE SMS RECEIVED FROM
	$country = 'ROI';
		
	//send response back
	header("HTTP/1.0 200 OK");

	//start sms entry process
	include('/nfslocal/www/include/competitions/ub/kpnuts-fm-2010/process/sms/do-sms-entry.php');
	
}else if(isset($_GET)){

	$country = 'ROI';

	//send response back
	header("HTTP/1.0 200 OK");

	//need to send an automated response back
	//start sms entry process
	include('/nfslocal/www/include/competitions/ub/kpnuts-fm-2010/process/sms/do-sms-early-entry.php');

}

?>