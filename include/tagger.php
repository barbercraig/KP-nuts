<?php
/*
*	tagger.php
*
*	Sets page id's for inbox tag
*	@date:		27.04.2010
*	@version:	1.0
*	@author: 	Craig Barber
*/

switch($pageID){
	case "home":
		$tagId = "4314";
		break;
	
	case "about-kp":
		$tagId = "4315";
		break;
	
	case "range":
		$tagId = "4316";
		
		switch($productID){
			case "regular":
				$tagId = "4323";
				break;
				
			case "jumbo_flavoured":
				$tagId = "4325";
				break;
				
			case "treenuts":
				$tagId = "4324";
				break;
				
			default:
				$tagId = "4316";
				break;
		}
		
		break;
				
	case "nutrition":
		$tagId = "4326";
		break;
		
	default:
		$tagId = "4314";
		break;
}

?>
<script type="text/javascript" language="JavaScript">
	<!--
	client_id = 252;
	page_id   = "<?=$tagId?>";
	timeout   = 600;
	p1        = "<?=$flavour?>";
	p2        = "<?=$submit?>";
	//-->
</script> 
	<script type="text/javascript" src="http://www.inboxtag.com/inbox_tagger.js">
</script>
