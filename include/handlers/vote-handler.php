<?php
/*
*	vote-handler.php
*
*	Pulls in voted moment and sets selected option
*	@date:		21.04.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/

$selected_vote = array();

isset($_GET['m']) ? $moment = $_GET['m'] : $moment = 'default';
 
switch($moment){
	case "banks":
		$selected_vote['banks'] = 'selected';
		break;

	case "maradona":
		$selected_vote['mara'] = 'selected';
		break;

	case "owen":
		$selected_vote['owen'] = 'selected';
		break;

	case "hurst":
		$selected_vote['hurst'] = 'selected';
		break;

	case "jairzinho":
		$selected_vote['jairzinho'] = 'selected';
		break;

	case "bergkamp":
		$selected_vote['bergkamp'] = 'selected';
		break;

	case "cruyff":
		$selected_vote['cruyff'] = 'selected';
		break;

	case "gemmill":
		$selected_vote['gemmill'] = 'selected';
		break;

	case "platt":
		$selected_vote['platt'] = 'selected';
		break;

	case "moore":
		$selected_vote['moore'] = 'selected';
		break;
}
?>
