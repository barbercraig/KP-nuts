<?php
/*
 * init.php
 *
 * Initialisation file for KP site
 * author:	Craig Barber
 * date:	08.04.2010
 *
*/
//define DOCROOT
//define('DOCROOT', $_SERVER['DOCUMENT_ROOT']);
define("COMPPROCESS", '/nfslocal/www/include/competitions/ub/kpnuts-fm-2010/process/');
define("COMPCLASSROOT", '/nfslocal/www/include/competitions/ub/kpnuts-fm-2010/classes/');
define("DBROOT", "/nfslocal/www/include/db/");


//check if current date/time is greater than competition start date
$today = strtotime("now");

$compStart = mktime(0, 0, 0, 5, 1, 2010);

if($today >= $compStart){
	$allowed_entry = true;
}else{
	$allowed_entry = false;
}
	

//set environmental control
$url = $_SERVER['SERVER_NAME'];

if      (strpos($_SERVER['SERVER_NAME'], 'ww2.dev') !== FALSE):    define('ENV', 'local');
elseif  (strpos($_SERVER['SERVER_NAME'], 'previewbox') !== FALSE): define('ENV', 'dev');
elseif  (strpos($_SERVER['SERVER_NAME'], 'inboxwork') !== FALSE):  define('ENV', 'staging');
else:                                                              define('ENV', 'live');
endif;

//set base url for site dependant on environment detected
switch(ENV){
	case "local":
		define('SITE_URL', 'http://ww2.dev.kp.co.uk/');
		define('DOCROOT', $_SERVER['DOCUMENT_ROOT']."/");
		break;
		
	case "dev":
		define('SITE_URL', 'http://kpnuts.previewbox.co.uk/');
		define('DOCROOT', $_SERVER['DOCUMENT_ROOT']."/");
		break;
	
	case "staging":
		define('SITE_URL', 'http://www.inboxwork.co.uk/ub/kp/dev/');
		define('DOCROOT', $_SERVER['DOCUMENT_ROOT']."/ub/kp/dev/");
		break;
		
	case "live":
		define('SITE_URL', 'http://www.kpnuts.com/');
		define('DOCROOT', $_SERVER['DOCUMENT_ROOT']."/");
		break;
}


//set up routes for site

$routes['previous']  = $_SERVER['HTTP_REFERER'];

$routes['about']     = SITE_URL . 'about-kp.php';
$routes['range']     = SITE_URL . 'range.php';
$routes['nutrition'] = SITE_URL . 'nutrition.php';
$routes['prizedraw'] = SITE_URL . 'prizedraw/';


$routes['competition']['root']   = SITE_URL . 'competition/';
$routes['competition']['enter']  = SITE_URL . 'competition/enter/';
$routes['competition']['league'] = SITE_URL . 'competition/league.php';
$routes['competition']['vote']   = SITE_URL . 'competition/vote.php';
$routes['competition']['view']   = SITE_URL . 'competition/view.php';

$routes['terms'] = SITE_URL . 'terms/';

$routes['tag'] = SITE_URL . 'out.php';

$routes['facebook'] = "http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.kpnuts.com%2Fcompetition%2Fview.php&t=Vote%20for%20the%20best%20quality%20football%20moment%20for%20a%20chance%20to%20win%20football%20prizes%20very%20day.Plus%20win%20a%20European%20football%20holiday!";

$routes['docs']['policy'] = SITE_URL . 'policy.php'; 

//store the winning
include(DOCROOT . 'include/football_moments.php');


if($pageID == 'competition'){
	switch($step){
		case "batch":
		case "user":
			//include files needed for competition depending on step
			include(COMPPROCESS . 'online/validation/'.$step.'-validator.php');
			break;
		
		case "captcha":
			//include files needed for competition depending on step
			include(COMPPROCESS . 'online/do-online-entry.php');
			break;
			
		case "league":
			//include files needed for competition depending on step
			include(DOCROOT . 'script/process_votes.php');
			break;
			
		case "prizedraw-enter":
			//include files needed for competition depending on step
			include(DOCROOT . 'script/prizedraw-process.php');
			break;
	}
}
?>