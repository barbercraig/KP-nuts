<?php 
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}	
?>
<?php $pageID = "home"; ?>
<?php include(DOCROOT . 'include/header.php'); ?>
  <div id="content"> 
      <div id="altContent">
        <p>KP Site</p>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img 
			src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
			alt="Get Adobe Flash player" /></a></p>
      </div>    
  </div>
  
<?php include (DOCROOT . 'include/footer.php'); ?>