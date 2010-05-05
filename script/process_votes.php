<?php
/*
*	process_votes.php
*
*	Utilizes the vote suite to calculate vote percentages for league table
*	@date:		28.04.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/
//Displaying PHP errors
/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);*/


//include vote suite
include(DOCROOT . 'include/config.php');

//devise array of number of votes
$voteResults = array(
	"banks"     => 0,
	"maradona"  => 0,
	"owen"      => 0,
	"hurst"     => 0,
	"jairzinho" => 0,
	"bergkamp"  => 0,
	"cruyff"    => 0,
	"gemmill"   => 0,
	"platt"     => 0,
	"moore"     => 0);

//set limit of records to retrieve, and which source of vote to be pulled
$amount = 100000;
$source = 'html';

//First we initiate the VoteAccessor
$voteAccess = new KPVoteAccessor($db_object);

//now we pull the top 10 votes from the database
$votes = $voteAccess->getTopX($amount, $source);
//get total number of votes to the competition
$total = $voteAccess->getTotalVotes($source);

//now loop through voteResults and match up numbers pulled from db
foreach($voteResults as $moment => $num){
	//if there is a vote for that moment, add figure to array, otherwise leave it as 0
	if(array_key_exists($moment, $votes)){
			
		$percentage = ($votes[$moment]/$total)*100;
		//calculate percentage
		$roundedPercentage = round($percentage, 0);

		$voteResults[$moment] = $roundedPercentage;
	}
}

//now we sort the array by percentage of votes
arsort($voteResults, SORT_NUMERIC);

?>