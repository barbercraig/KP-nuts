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

#include init file 
include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
include(DOCROOT . '/include/header.php'); 

?>

<div id="comp-content" class="league">
	<h2 class="league">League Table</h2>
    <p class="league-table">Here's how the best quality moments stack up in order ot votes</p>
    <br />
    <br />
	<div class="board left">
        <div class="position-wrapper 1">
            <div class="position">
                <img src="../images/competition/league/position/img_position-1.png" width="66" height="53" alt="1" border="0" style="display:block;" />
            </div>
            <div class="thumbnail">
                <img src="../images/competition/league/thumbnails/img_thumb-moore.jpg" width="65" height="72" alt="Moore" style="display:block;" />
            </div>
            <div class="percentage">
                <img class="number" src="../images/competition/league/numbers/img_num-2.png" width="17" height="20" alt="2" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_num-3.png" width="17" height="20" alt="3" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_percentage.png" width="23" height="20" alt="%" border="0" style="display:block;" />
            </div>
            <p class="league-desc">Description here</p>
            <a class="vote league" href="">vote ></a>
        </div>
        
        <div class="position-wrapper 1">
            <div class="position">
                <img src="../images/competition/league/position/img_position-2.png" width="66" height="53" alt="1" border="0" style="display:block;" />
            </div>
            <div class="thumbnail">
                <img src="../images/competition/league/thumbnails/img_thumb-moore.jpg" width="65" height="72" alt="Moore" style="display:block;" />
            </div>
            <div class="percentage">
                <img class="number" src="../images/competition/league/numbers/img_num-4.png" width="17" height="20" alt="2" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_num-4.png" width="17" height="20" alt="3" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_percentage.png" width="23" height="20" alt="%" border="0" style="display:block;" />
            </div>
            <p class="league-desc owen">Description here</p>
            <a class="vote league" href="">vote ></a>
        </div>
    </div>
    <div class="board">
        <div class="position-wrapper 1">
            <div class="position">
                <img src="../images/competition/league/position/img_position-3.png" width="66" height="53" alt="3" border="0" style="display:block;" />
            </div>
            <div class="thumbnail">
                <img src="../images/competition/league/thumbnails/img_thumb-moore.jpg" width="65" height="72" alt="Moore" style="display:block;" />
            </div>
            <div class="percentage">
                <img class="number" src="../images/competition/league/numbers/img_num-5.png" width="17" height="20" alt="5" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_num-2.png" width="17" height="20" alt="2" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_percentage.png" width="23" height="20" alt="%" border="0" style="display:block;" />
            </div>
            <p class="league-desc">Description here</p>
            <a class="vote league" href="">vote ></a>
        </div>
        
        <div class="position-wrapper 1">
            <div class="position">
                <img src="../images/competition/league/position/img_position-4.png" width="66" height="53" alt="4" border="0" style="display:block;" />
            </div>
            <div class="thumbnail">
                <img src="../images/competition/league/thumbnails/img_thumb-moore.jpg" width="65" height="72" alt="Moore" style="display:block;" />
            </div>
            <div class="percentage">
                <img class="number" src="../images/competition/league/numbers/img_num-2.png" width="17" height="20" alt="2" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_num-1.png" width="17" height="20" alt="1" border="0" style="display:block;" />
                <img class="number" src="../images/competition/league/numbers/img_percentage.png" width="23" height="20" alt="%" border="0" style="display:block;" />
            </div>
            <p class="league-desc">Description here</p>
            <a class="vote league" href="">vote ></a>
        </div>
        <div style="clear:both;"><!--//--></div>
    </div>
</div>

<?php include (DOCROOT . '/include/footer.php'); ?>
