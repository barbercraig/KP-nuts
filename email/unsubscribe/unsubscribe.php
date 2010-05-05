<?php
	include("/nfslocal/www/include/db/dbconnect.php");
	require_once("/nfslocal/www/include/classes/security/mysqlfilter.class.php");
	
	$campaign = nvl($_REQUEST['c'], "UB3004101809");
	$uid 			= nvl($_REQUEST['u']);
	$email 		= nvl($_REQUEST['email']);
	
	$usConfirm = nvl($_REQUEST['us_confirm']);
	
	$dbFilter = new MysqlFilter();
	$campaign = $dbFilter->dbPrepare($campaign);	
	$uid 			= $dbFilter->dbPrepare($uid);
	$email 		= $dbFilter->dbPrepare($email);

	
	if ($usConfirm == "confirm") {
		$logTable = $campaign . "_log";
		$usTable  = "UB_unsubscribe";
		$sql 			= "INSERT INTO $logTable (log_date, campaign, uid, action, details) VALUES (now(), '$campaign', '$uid', '3 - Unsubscribe Confirm', '3 - Unsubscribe Confirm')";
		mysql_query($sql);
		
		$sql = "INSERT INTO $usTable (log_date, email, campaign, uid) VALUES (now(), '$email', '$campaign', '$uid')";
		mysql_query($sql);
	}

	include("templates/newsletter_header.php");
	include("templates/newsletter_us.php");
 	include("templates/newsletter_footer.php");
?>
