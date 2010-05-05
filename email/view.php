<?
// generate template preview
include("/nfslocal/www/include/db/dbconnect.php");

//get vars
$campaign = $_REQUEST["c"];
$uid 			= $_REQUEST["u"];

$output = build_instance($uid, $campaign);
echo !isset($output["error"]) ? stripslashes($output["copy"]) : $output["error"];

///////////////////////////////////////////////////////////////////////////////////////////////////////
function build_instance($uid,$campaign) {
	// get user details
	$campaignemail = $campaign."_email";
	$csql = mysql_query("SELECT * FROM $campaignemail WHERE uid = '$uid'");
	$c= mysql_fetch_array($csql);
	$temp_inst = $c["template"];
	$part = "html";

	// get client and campaign/tempalte tables
	$sql = "SELECT client.company, campaign.trackopen FROM campaign INNER JOIN `client` ON campaign.client_id = client.client_id WHERE campaign.reference ='$campaign';";

	$getcomp = mysql_query($sql);
	$company = mysql_fetch_array($getcomp);

	$template_table = $company[0]."_template";
	$section_table  = $company[0]."_section";
	$ti_table 			= $company[0]."_template_instance";
	$si_table 			= $company[0]."_section_instance";
	$rules					= $company[0]."_rules";
	$trackopen 			= $company[1];

	// get template from temp instance
	$tisql = mysql_query("SELECT * FROM $ti_table WHERE template_instance_id = '$temp_inst'");

	if (mysql_num_rows($tisql) < 1) {
		$output["html"] = "";
		$output["name"] = "";
		$output["error"] = "Template instance does not exist";
	} else {	
		$ti = mysql_fetch_array($tisql);
		$template =  $ti["template_id"];
	}

	//get template
	$sql = "SELECT ".$part."section,name FROM $template_table WHERE template_id = '$template'";
	
	$tsql = mysql_query($sql);
	if (mysql_num_rows($tsql) < 1) {
		$output["html"] = "";
		$output["name"] = "";
		$output["error"] = "Template does not exist";
	} else {
		$t = mysql_fetch_array($tsql);
		$thtml = $t[0];	
	
		// get sections
		$ssql = mysql_query("SELECT $si_table.instance_id, $section_table.section_id, $section_table.content, $section_table.name, $section_table.max_sub_section, $rules.field, $rules.search, $rules.priority, $si_table.description
													FROM ($section_table INNER JOIN $si_table ON $section_table.section_id = $si_table.section_id) 
													LEFT JOIN $rules ON $si_table.instance_id = $rules.section_instance_id
													WHERE $si_table.template_instance_id='$temp_inst'
													ORDER BY $si_table.description DESC,$rules.priority");
		
		while ($s = mysql_fetch_array($ssql)) {
			// set a flag if section has been displayed already so it doesn't display again
		  $arr[$s["instance_id"]] = isset($arr[$s["instance_id"]]) ? $arr[$s["instance_id"]] : "";
		  
			// set a count how many sections of a multiple have been diplayed so we can stop at max
		  $cnt[$s["section_id"]] = isset($cnt[$s["section_id"]]) ? $cnt[$s["section_id"]] : 1;
		  
			// make descision in section content replace section with content
		  if ($s["description"] == "rule") {
				// if the data contains a value in a personalisation field that may w=matcha rule
				if (isset($c[$s["field"]])) {
					//if data matches rule and that section has not already been displayed
					//$pat = "/\b".$c[$s["field"]]."\b/";
					$match = preg_match("/\b" . $s["search"] . "\b/", $c[$s["field"]]);
					if ($match and ($arr[$s["instance_id"]] == "")) {
						//if (($c[$s["field"]] == $s["search"]) and ($arr[$s["instance_id"]] == "")){
						if ($s["max_sub_section"] == 1) {
							if (!isset($sec["###===".$s["name"]."===###"])) {
								$sec["###===".$s["name"]."===###"] = build_element($s,$company[0]);
								$arr[$s["instance_id"]] = "true";
							}
						} else {
							if (!isset($sec["###===".$s["name"]."===###"])) {
								$sec["###===".$s["name"]."===###"] = build_element($s,$company[0]);
								$arr[$s["instance_id"]] = "true";
								$cnt[$s["section_id"]]++;
							} else {
								if($cnt[$s["section_id"]] <= $s["max_sub_section"]) {
									$sec["###===".$s["name"]."===###"] .= build_element($s,$company[0]);
									$arr[$s["instance_id"]] = "true";
									$cnt[$s["section_id"]]++;
								}
							}
						}	
					}
				} // if section is default	 
			} else {
			 	// use default if section is not set
				if ($s["max_sub_section"] == 1) {
					if (!isset($sec["###===".$s["name"]."===###"])) {
						$sec["###===".$s["name"]."===###"] = build_element($s,$company[0]);
					} // add default to bottom of section if mulitplr allowed	
				} else {
					if (!isset($sec["###===".$s["name"]."===###"])) {
						$sec["###===".$s["name"]."===###"] = build_element($s,$company[0]);
					} else {
						if($cnt[$s["section_id"]] <= $s["max_sub_section"]) {
							$sec["###===".$s["name"]."===###"] .= build_element($s,$company[0]);
						}
					}
				}
			}
		} // replace the markers for all present sections

		foreach($sec as $k => $v) {
			//echo $k."<br>";
			//echo $v."<br>";
			$pattern = "/".$k."/";
			$thtml = preg_replace($pattern,$v,$thtml);
		}
		
		// replace markers for absent sections 
		$pattern = "/###===(.*)===###/";
		$thtml = preg_replace($pattern,"NO SECTION",$thtml);
		
		$pattern = "/##==(.*)==##/";
		$thtml = preg_replace($pattern,"NO ELEMENT",$thtml);
		
		$output["copy"] = $thtml;
		$output["name"] = nvl($ti["name"]);
		
		//personalise
		foreach ($c as $k => $v) {
	   $output["copy"] = str_replace("#=$k=#",$v,$output["copy"]);
		}
	
		$output["copy"] = str_replace("#=uid=#",$uid,$output["copy"]);
		$output["copy"] = str_replace("#=campaign=#",$campaign,$output["copy"]);
	}

	if ($trackopen == "true") {
		$output["copy"] .= "\n<div align='center'><img src='http://www.kpnuts.com/MEDIA$uid/$campaign.gif' width='10' height='10'><div>";
	}
	
	return $output;
}

function build_element($s,$company) {
	$element_table = $company."_element";
	$ei_table = $company."_element_instance";
	$sql = "SELECT $ei_table.content,$element_table.name 
				  FROM $element_table LEFT JOIN $ei_table ON $element_table.element_id = $ei_table.element_id 
				  WHERE $ei_table.section_instance_id = '$s[instance_id]'";

	$esql =  mysql_query($sql);

	while ($e = mysql_fetch_array($esql)) {
		// replace section with content
		$s["content"] = str_replace("##==".$e["name"]."==##",$e["content"],$s["content"]);
	}
	return nvl($s["content"]);
}
?>