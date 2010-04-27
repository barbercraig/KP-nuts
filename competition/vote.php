<?php
	#include init file 
	include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	//$init = $_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php';
	//include($init);
	$pageID = "competition"; 
	$step   = "vote";
?>
<?php include(DOCROOT.'include/header.php') ?>

<div id="comp-content" class="vote">
	<h2 class="vote">Vote for your best quality football moment</h2>
    <br />
    <br />
    <div id="moments">
    	<div class="row top">
            <!--BANKS MOMENT-->
            <div class="moment banks">
            	<h3 class="moment banks">Banks</h3>
                <div class="holder banks">
                	<div class="button-deck first">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=banks">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=banks">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF BANKS MOMENT-->
            
            <!--MARA MOMENT-->
            <div class="moment mara">
            	<h3 class="moment mara">mara</h3>
                <div class="holder mara">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=mara">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=mara">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF MARA MOMENT-->
            
            <!--OWEN MOMENT-->
            <div class="moment owen">
            	<h3 class="moment owen">owen</h3>
                <div class="holder owen">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=owen">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=owen">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF OWEN MOMENT-->
            
            <!--HURST MOMENT-->
            <div class="moment hurst">
            	<h3 class="moment hurst">hurst</h3>
                <div class="holder hurst">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=hurst">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=hurst">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF HURST MOMENT-->
            
            <!--JAIRZINHO MOMENT-->
            <div class="moment jairzinho">
            	<h3 class="moment jairzinho">jairzinho</h3>
                <div class="holder jairzinho">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=jairzinho">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=jairzinho">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF JAIRZINHO MOMENT-->
            <div style="clear:both;"><!--clear--></div>
        </div>
        <br />
        <br />
    	<div class="row bottom">
            <!--BERGKAMP MOMENT-->
            <div class="moment bergkamp">
            	<h3 class="moment bergkamp">bergkamp</h3>
                <div class="holder bergkamp">
                	<div class="button-deck first">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=bergkamp">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=bergkamp">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF BERGKAMP MOMENT-->
            
            <!--CRUYFF MOMENT-->
            <div class="moment cruyff">
            	<h3 class="moment cruyff">cruyff</h3>
                <div class="holder cruyff">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=cruyff">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=cruyff">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF CRUYFF MOMENT-->
            
            <!--GEMMILL MOMENT-->
            <div class="moment gemmill">
            	<h3 class="moment gemmill">gemmill</h3>
                <div class="holder gemmill">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=gemmill">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=gemmill">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF GEMMILL MOMENT-->
            
            <!--PLATT MOMENT-->
            <div class="moment platt">
            	<h3 class="moment platt">platt</h3>
                <div class="holder platt">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=platt">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=platt">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF PLATT MOMENT-->
            
            <!--MOORE MOMENT-->
            <div class="moment moore">
            	<h3 class="moment moore">moore</h3>
                <div class="holder moore">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=moore">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=moore">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF MOORE MOMENT-->
            <div style="clear:both;"><!--clear--></div>
        </div>
    </div>	
</div>

<?php include (DOCROOT.'include/footer.php') ?>
