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
define('DOCROOT', $_SERVER['DOCUMENT_ROOT']);

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
		break;
		
	case "dev":
		define('SITE_URL', 'http://kp.previewbox.co.uk/');
		break;
	
	case "staging":
		define('SITE_URL', 'http://www.inboxwork.co.uk/ub/kp/dev/');
		break;
		
	case "live":
		define('SITE_URL', 'http://www.kp.co.uk/');
		break;
}

//set up routes for site
$routes['about']     = SITE_URL . 'about-kp.php';
$routes['range']     = SITE_URL . 'range.php';
$routes['nutrition'] = SITE_URL . 'nutrition.php';

$routes['competition']['enter'] = SITE_URL . 'competition/enter/';

$routes['docs']['policy'] = SITE_URL . 'policy.php'; 

?>