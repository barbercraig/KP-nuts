<?php
/*
*	league.php
*
*	Displays the league table of votes, recorded in the KP football Moments competition
*	@date:		27.04.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/

$pageID = "competition";
$step = 'view';

$moment = $_GET['m'];

#include init file 
//we need to do some extra checking for document root for gay inboxwork
if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
	include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
}else{
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
}	

include(DOCROOT . '/include/header.php'); 

?>
		<script src="js/swfobject.js" type="text/javascript"></script>
        <script type="text/javascript">
            var flashvars = {
            };
            var params = {
                menu: "false",
                scale: "noScale",
                allowFullscreen: "true",
                allowScriptAccess: "always",
                wmode: "transparent"
    
            };
            var attributes = {
                id:"altMomentContent"
            };
            swfobject.embedSWF("<?=SITE_URL?>assets/moments/<?=$moment?>.swf", "altMomentContent", "835", "315", "9.0.0", "<?=SITE_URL?>assets/moments/expressInstall.swf", flashvars, params, attributes);
        </script>

<div class="comp-content view-content">
	<h2 class="viewmoment <?=$moment?>"></h2>
    <p class="moment-desc"><?=$football_moment[$moment]['desc']?></p>
    <div id="viewNav">
        <a class="back" href="<?=$routes['competition']['vote']?>">BACK ></a>
        <a class="vote-view" href="<?=$routes['competition']['enter'].'step1.php?m='.$moment?>">NEXT ></a>
        <div style="clear:both;"><!--//--></div>
    </div>
    <div id="altMomentContent">
    	<h1>KPWorldCup</h1>
        <p>Alternative content</p>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img 
            src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
            alt="Get Adobe Flash player" /></a></p>
    
    </div>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
