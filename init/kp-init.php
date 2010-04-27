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
define('COMPPROCESS', '/nfslocal/www/include/competitions/ub/kpnuts-fm-2010/process/');

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
$routes['about']     = SITE_URL . 'about-kp.php';
$routes['range']     = SITE_URL . 'range.php';
$routes['nutrition'] = SITE_URL . 'nutrition.php';

$routes['competition']['root']  = SITE_URL . 'competition/';
$routes['competition']['enter'] = SITE_URL . 'competition/enter/';

$routes['docs']['policy'] = SITE_URL . 'policy.php'; 


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
	}
}
?>