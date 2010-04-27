<?php

//read in xml response, and determine what response to give
$response = simplexml_load_string($returnVal);
/*print_r($response);

echo htmlentities($returnVal);*/

$entry_type = 'normal-entry';

//echo $response->type;

switch($response->type){
	
	case "win":	
		if($response->prize == 'Mini Football'){
			//last entry with entered pack
			$win_prize = 'Mini Football';	
		}
		
		//go through each of the entry status' and output relevant message
		if($response->prize == 'Mini Table Football'){
			//lasty entry of the day]
			$win_prize = 'Mini Table Football';	
		} 
		
		if($response->prize == 'Football Shirts'){
			//lasty entry of the day
			$win_prize = 'Football Shirts';	
		} 
		
		$_SESSION['win_prize']	= $win_prize;
		header("Location: " . $routes['competition']['enter'] . "win.php");

	break;
	
	case "reject":
	case "lose":
		//$entry_fail = $response->reason;
		if($response->reason == 'entry_limit_exceeded'){
			$_SESSION['lose_type']	= 'entry_limit_exceeded';
		}
		
		//$entry_fail = $response->reason;
		if($response->reason == 'pack_limit_exceeded'){
			$_SESSION['lose_type']	= 'pack_limit_exceeded';
		}
		
		if($response->reason == 'prizelimit_exceeded'){
			$_SESSION['lose_type']	= 'prizelimit_exceeded';
		}
		
		if($response->reason == 'no_wm'){
			$_SESSION['lose_type']	= 'no_wm';
		}
		
		header("Location: " . $routes['competition']['enter'] . "sorry.php");
	break;
	
	case "error":
		$message = 'Oops, you\'ve entered the wrong code or you don\'t have your cookies enabled. <a style="color:#ffffff;" href="/cookies.html" target="_blank">Enable your cookies</a> and try again.';
	break;
}


?>