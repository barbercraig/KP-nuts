<?php
include("/nfslocal/www/include/db/dbconnect.php");

//get vars
$uid 	  = $_REQUEST["u"]; //person unique ID
$url_id = $_REQUEST["r"]; //url_id for link in URL table

//get url details
$urlsql = "SELECT url, description, code, alert, personalise, active, campaign 
		 			  FROM url
          	WHERE url_id='$url_id' and active = 'true' LIMIT 1";
$geturl = mysql_query($urlsql);
$url 		= mysql_fetch_array($geturl);

//set campaign code
// use posted campaign code, or the one from the table, this means that landing pages can have the came link, but log to different campaigns
$campaign = nvl($_REQUEST["c"], $url[6]);

$campaigntable = $campaign . "_log";

//log click through
//$mysqltime = strftime ("%y/%m/%d %H:%M:%S" , time());
$logsql = "INSERT INTO $campaigntable(log_date, campaign, uid, action, details) VALUES (now(), '$campaign', '$uid', '$url[2]', '$url[1]')";
$dolog  = mysql_query($logsql);

//get passthrough details (if personalise = true)
if ($url[4] == "true") {
	$campaignemail = $campaign . "_email";	
	$dsql = "SELECT * FROM $campaignemail WHERE uid = '$uid'";	
	$getd = mysql_query($dsql);
	//personalise the link
	$d = mysql_fetch_array($getd);
	foreach ($d as $k => $v) {
	  $url[0] = str_replace("#=$k=#", $v, $url[0]);
	}		
}

$url[0] = str_replace("#=uid=#", $uid, $url[0]); // always substitute uid
$url[0] = str_replace("#=campaign=#", $campaign, $url[0]); // always substitute uid


// send email if appropriate
if ($url[3] == "true") {
	$message  = "The following person " . $d["email"] . "\n";
	$message .= "has clicked '" . $url[1] . "' on the email you sent them \n";
	$message .= "at " . strftime("%T %d %b %Y", time());
	mail($u["fromemail"], "Clickthrough alert", $message, "from: alerts@ibx01.com");
}

//redirect
//echo $url[0];
header("location: $url[0]");
?>