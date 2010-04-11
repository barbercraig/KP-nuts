<?php
/*
*
*	config.php
*	description:	Configuration file for kp site
*
*	author:			Craig Barber
*	Date:			13.01.10
*
*/

define("CLASSROOT", "/nfslocal/www/include/classes/");
define("DBROOT", "/nfslocal/www/include/db/");

include(CLASSROOT.'EmailVerifier.php');
include(DBROOT.'dbconnect_ubsites.php');

$table = "kp_newsletter";

?>