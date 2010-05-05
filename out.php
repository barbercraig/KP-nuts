<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KP Nuts</title>
</head>

<body style="background-color:#01123a;">
	<?php
	
	if(isset($_GET['tid'])){
		$tagPgId = $_GET['tid'];
	}else {
		$tagPgId = "4314";	
	}
	
	if(isset($_GET['m'])){
		$moment = $_GET['m'];
	}else {
		$moment = "novote";	
	}
	
	switch ($tagPgId) {
		
		case "4314":
			$redir_url = "http://www.kpnuts.com/";	
		break;
		
		case "4315":
			$redir_url = "http://www.kpnuts.com/about-kp.php";	
		break;
		
		case "4316":
			$redir_url = "http://www.kpnuts.com/range.php";
		break;
		
		case "4319":
			$redir_url = "http://www.kpnuts.com/policy.php";
		break;
				
		case "4320":
			$redir_url = "http://www.123healthybalance.com/";
		break;
		
		case "4321":
			$redir_url = "http://www.unitedbiscuits.com/";
		break;
		
		case "4322":
			$redir_url = "http://www.unitedbiscuits.com/contact.php";
		break;

		case "4323":
			$redir_url = "http://www.kpnuts.com/range.php?p=regular";
		break;

		case "4324":
			$redir_url = "http://www.kpnuts.com/range.php?p=treenuts";
		break;

		case "4325":
			$redir_url = "http://www.kpnuts.com/range.php?p=jumbo_flavoured";
		break;

		case "4326":
			$redir_url = "http://www.kpnuts.com/nutrition.php";
		break;
		
		case "4332":
			$redir_url = "http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.kpnuts.com%2Fcompetition%2Fview.php?m=".$moment."&t=Vote%20for%20the%20best%20quality%20football%20moment%20for%20a%20chance%20to%20win%20football%20prizes%20very%20day.Plus%20win%20a%20European%20football%20holiday!";
		break;
		
		case "4333":
			$redir_url = "http://www.kpnuts.com/competition/league.php";
		break;
		
		case "4334":
			$redir_url = "http://www.kpnuts.com/range.php";
		break;
		
		case "4335":
			$redir_url = "http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.kpnuts.com%2Fcompetition%2Fview.php?m=".$moment."&t=Vote%20for%20the%20best%20quality%20football%20moment%20for%20a%20chance%20to%20win%20football%20prizes%20very%20day.Plus%20win%20a%20European%20football%20holiday!";
		break;
		
		case "4336":
			$redir_url = "http://www.kpnuts.com/competition/league.php";
		break;
		
		case "4337":
			$redir_url = "http://www.kpnuts.com/range.php";
		break;
		
		case "4338":
			$redir_url = "http://www.kpnuts.com/terms/";
		break;
		
		case "4339":
			$redir_url = "http://www.kpnuts.com/faqs/";
		break;
		
		default:
			$redir_url = "http://www.kpnuts.com/";	
		break;
	}
	
	$disp_redir_url = $redir_url;
	$redir_url = urlencode($redir_url);

	if ($tagPgId > 0) { ?>
		<SCRIPT type="text/javascript" language="JavaScript">
		<!--
			client_id = 252;
			page_id = <?= $tagPgId ?>;
			timeout = 600;
			isredirect = 'yes';
			redirecturl = '<?= $redir_url ?>';
		//-->
		</SCRIPT> 
		<script type="text/javascript" src="http://www.inboxtag.com/inbox_tagger.js">
		</script>
<?php } ?>

<p style="font-size:12px;text-align:center;font-family:Arial, Helvetica, sans-serif;color:#ffffff;">If you are not successfully redirected, <a href="<?php echo $disp_redir_url ?>" style="color:#ffae00;">please click here</a></p>
</body>
</html>
