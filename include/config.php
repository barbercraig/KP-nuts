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

//tell scripts that config has been loaded
$config_set = true;

include(COMPCLASSROOT . 'vote/KPVoteAccessor.class.php');

//include the FormValidator and UserDataValidator classes
include('/nfslocal/www/include/competitions/v1.2/validator/FormValidator.class.php');
include('/nfslocal/www/include/competitions/v1.2/validator/UserDataValidator.class.php');
//include filtering class
include('/nfslocal/www/include/classes/security/mysqlfilter.class.php');
//include db connections
include(DBROOT.'dbconnect_ubsites.php');

$prizedraw_table = 'kp_prizedraw';
$newsletter_table = 'kp_newsletter';

$news_config['mandatories'] = array("fname", "sname", "email");

?>