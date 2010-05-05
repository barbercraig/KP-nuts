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
$step = 'league';


#include init file 
//we need to do some extra checking for document root for gay inboxwork
if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
	include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
}else{
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
}	

include(DOCROOT . '/include/header.php'); 

?>

<div class="comp-content league-content">
	<h2 class="league">League Table</h2>
    <p class="league-table">Here's how the best quality moments stack up in order of votes</p>
    <br />
    <br />
	<div class="board left">
    <?php
    $count = 1;
	foreach($voteResults as $moment => $percentage){
	//split the percentage into two figures
	if($moment == 'mara'){
		$mara_moment = 'maradona';
	}
	
	$perc_length = strlen($percentage);
	
	if($perc_length > 1){
		$digits = str_split($percentage,1);
	}
	
	//do a count, and when 6 is reached, change column
		if($count < 6){
		?>
			<div class="position-wrapper <?=$count?>">
				<div class="position">
					<img src="../images/competition/league/position/img_position-<?=$count?>.png" width="66" height="53" alt="<?=$count?>" border="0" style="display:block;" />
				</div>
				<a class="thumbnail" href="<?=$routes['competition']['view']?>?m=<?php if($moment == 'mara'){echo 'maradona';}else{echo $moment;};?>">
					<img src="../images/competition/league/thumbnails/img_thumb-<?=$moment?>.jpg" width="67" height="74" alt="<?=$moment?>" border="0" style="display:block;" />
				</a>
				<div class="percentage">
                	<div class="figures" <?=isset($digits)? 'style="width:58px;"':''?>>
                	<?php
						if(isset($digits)){
						
					?>
                            <img class="number" src="../images/competition/league/numbers/img_num-<?=$digits[0]?>.png" width="17" height="20" alt="2" border="0" />
                            <img class="number" src="../images/competition/league/numbers/img_num-<?=$digits[1]?>.png" width="17" height="20" alt="3" border="0"  />
					<?php }else{ ?>
							<img class="number" src="../images/competition/league/numbers/img_num-<?=$percentage?>.png" width="17" height="20" alt="2" border="0" />
                    <?php } ?>
					<img class="number" src="../images/competition/league/numbers/img_percentage.png" width="23" height="20" alt="%" border="0" />
                    	<div style="clear:both;"><!--//--></div>
                    </div>
				</div>
				<a class="league-desc <?=$moment?>" href="<?=$routes['competition']['view']?>?m=<?php if($moment == 'mara'){echo 'maradona';}else{echo $moment;};?>"></a>
				<a class="vote league-vote" href="<?=$routes['competition']['enter']?>step1.php?m=<?php if($moment == 'mara'){echo 'maradona';}else{echo $moment;};?>">vote ></a>
			</div>
	
		<?php 
			$count++;
		}else if($count <= 10){ 
			if($count == 6){
			?>

			</div><!--End of left column-->
			
			<div class="board">
        <?php }?>
				<div class="position-wrapper <?=$count?>">
					<div class="position">
						<img src="../images/competition/league/position/img_position-<?=$count?>.png" width="66" height="53" alt="<?=$count?>" border="0" style="display:block;" />
					</div>
					<a class="thumbnail" href="<?=$routes['competition']['view']?>?m=<?php if($moment == 'mara'){echo 'maradona';}else{echo $moment;};?>">
						<img src="../images/competition/league/thumbnails/img_thumb-<?=$moment?>.jpg" width="67" height="74" alt="<?=$moment?>" border="0" style="display:block;" />
					</a>
					<div class="percentage">
                    	<div class="figures" <?=isset($digits)? 'style="width:58px;"':''?>>
						<?php
                            if(isset($digits)){
                        ?>
                                <img class="number" src="../images/competition/league/numbers/img_num-<?=$digits[0]?>.png" width="17" height="20" alt="2" border="0" />
                                <img class="number" src="../images/competition/league/numbers/img_num-<?=$digits[1]?>.png" width="17" height="20" alt="3" border="0" />
                        <?php }else{ ?>
                                <img class="number" src="../images/competition/league/numbers/img_num-<?=$percentage?>.png" width="17" height="20" alt="2" border="0" />
                        <?php } ?>
                            <img class="number" src="../images/competition/league/numbers/img_percentage.png" width="23" height="20" alt="%" border="0" />
                            <div style="clear:both;"><!--//--></div>
                        </div>
					</div>
                    <a class="league-desc <?=$moment?>" href="<?=$routes['competition']['view']?>?m=<?php if($moment == 'mara'){echo 'maradona';}else{echo $moment;};?>"></a>
                    <a class="vote league-vote" href="<?=$routes['competition']['enter']?>step1.php?m=<?php if($moment == 'mara'){echo 'maradona';}else{echo $moment;};?>">vote ></a>
				</div>
			<?php
				$count++;
		} //endif
		unset($digits);
	}//end foreach?>
    </div><!--End of right column-->
    <div style="clear:both;"><!--//--></div>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
