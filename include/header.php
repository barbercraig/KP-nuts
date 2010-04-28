<?php
			
	//Displaying errors
	/*ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);*/
	
	//set success equal to false, form hasnt been submitted
	$success = false;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	
    <title>KP Nuts</title>
    
    <link href="<?php echo SITE_URL ?>assets/css/style.css" rel="stylesheet" type="text/css" media="screen" />
   
    <script type="text/javascript" src="<?php echo SITE_URL ?>assets/js/jquery-1.3.2.min.js"></script>  
	<script type="text/javascript" src="<?php echo SITE_URL ?>assets/js/jquery.qtip-1.0.0-rc3.min.js"></script> 
	
	<!--[if IE]>
    	<link href="<?php echo SITE_URL ?>/assets/css/ie.css" rel="stylesheet" type="text/css" media="screen" />	
    <![endif]-->

	<!--[if IE 6]>
		<script type="text/javascript" src="assets/js/DD_belatedPNG_0.0.8a-min.js" ></script>		
		<script>
       $(document).ready(function()
       {
            DD_belatedPNG.fix('h1 a, h2, h3, .range, .about, .newsletter, .window_range, #rangeContent a, .divider, .window_about, .window_newsletter, #about-kp, #scrollList a, #content-image-0, #content-image-1, #content-image-2, #content-image-3, #content-image-4, #content-image-5, #content-image-6, #content-image-7, .backButton, .imageHolder, .peanuts, #nutrition, #scrollPanel, .aboutfooter, a.cta, .content_float img, .window_win, .win, .win-right, #nutrition-image img');
			
			<?php if ($pageID == "about-kp") { ?>
			
			// fade out all items
			for (var i=0; i<numItems; i++)
			{
				$('#content-' + i).css("visibility", "hidden");
				$('#content-image-' + i).css("visibility", "hidden");
				$('#about-scroll-item' + i).css("background-image", "url(images/about/item-thumb-"+i+".png)"); // switch thumbnail to unselected
			}	
			
			<?php } ?>
       });
		
		</script>
	<![endif]-->

	<!--<script type="text/javascript" src="assets/js/jquery.pngFix.js"></script>-->
    <script type="text/javascript" src="<?php echo SITE_URL ?>assets/js/funcs.js"></script>
	<script type="text/javascript" src="<?php echo SITE_URL ?>assets/js/swfobject.js" ></script>
	
	
	<?php if ($pageID == "home") {?>
	
	<script type="text/javascript">
	
			var flashvars = {
			};
			var params = {
				menu: "false",
				scale: "noScale",
				allowFullscreen: "true",
				allowScriptAccess: "always",
				bgcolor: "#000719",
				wmode: "transparent"
			};
			var attributes = {
				id:"KPsite"
			};
			swfobject.embedSWF("home.swf", "altContent", "955", "550", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
			
			
	</script>
	
	<?php } else if (($pageID == "range") && (!isset($_GET['p']))) {?>
	
	<script type="text/javascript">
	
			var flashvars = {
				returnRange: "<?= $returnID ?>"
			};
			var params = {
				menu: "false",
				scale: "noScale",
				allowFullscreen: "true",
				allowScriptAccess: "always",
				bgcolor: "#000719",
				wmode: "transparent"
			};
			var attributes = {
				id:"KPsiteRange"
			};
			swfobject.embedSWF("range.swf", "altContent", "955", "550", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
			
			
	</script>
	
	
	<?php } else if (($pageID == "range") && (isset($_GET['p']))) { ?>	
	
	<script type="text/javascript">
	
			var flashvars = {
				range: "<?= $_GET['p'] ?>"
			};
			var params = {
				menu: "false",
				scale: "noScale",
				allowFullscreen: "true",
				allowScriptAccess: "always",
				bgcolor: "#000719",
				wmode: "transparent"
			};
			var attributes = {
				id:"KPsiteRangeDetails",
				name:"KPsiteRangeDetails"
			};
			swfobject.embedSWF("rangeDetails-<?= $_GET['p'] ?>.swf", "rangeFlashContent", "550", "500", "9.0.0", "expressInstall.swf", flashvars, params, attributes);
		
	</script>
	
	<?php } ?>
    
    <script type="text/javascript">
		document.write("hello"+flavour);
		alert("hello");
	</script>

	
</head>

<body>
<div class="wrapper <?php switch($pageID){case "competition": echo 'competition'; break; case "about-kp": echo 'aboutkp'; break;}?>">
	<div id="header">
    	<!--Main navigation bar-->   
    	<ul id="jsddm">        
			<li class="aboutNavTop">
           	  <a class="aboutNav" href="<?php echo $routes['about']; ?>">About Kp ></a>
            </li>
            <li class="rangeNavTop">
           	  <a class="rangeNav" href="<?php echo $routes['range']; ?>">KP Range ></a>
                <!--Drop down menu-->
                <ul>
					<li><a class="jumbo" href="<?php echo $routes['range']; ?>?p=jumbo_flavoured">jumbo flavoured</a></li>
                	<li><a class="regular" href="<?php echo $routes['range']; ?>?p=regular">regular</a></li>
                	<li><a class="treenuts" href="<?php echo $routes['range']; ?>?p=treenuts">treenuts</a></li>
                	<li><a class="nutrition" href="<?php echo $routes['nutrition']; ?>">nutrition</a></li>
                </ul>
            </li>
        </ul>
        <div id="logo">
        	<h1><a href="<?php echo SITE_URL; ?>"><span class="hidden">KP Quality produce since 1933</span></a></h1>
        </div>
  </div>
