<?php
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}	

	$pageID = "competition"; 
	$step   = "vote";
?>
<?php include(DOCROOT.'include/header.php') ?>

<div class="comp-content vote-content">
	<h2 class="vote">Vote for your best quality football moment</h2>
    <br />
    <br />
    <div id="moments">
    	<div class="row top">
            <!--BANKS MOMENT-->
            <div class="moment firstmoment">
            	<h3 class="moment banks-vote">Banks</h3>
                <div class="holder banks">
                	<div class="button-deck first">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=banks">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=banks">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF BANKS MOMENT-->
            
            <!--MARA MOMENT-->
            <div class="moment">
            	<h3 class="moment maradona-vote">Maradona</h3>
                <div class="holder maradona">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=maradona">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=maradona">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF MARA MOMENT-->
            
            <!--OWEN MOMENT-->
            <div class="moment">
            	<h3 class="moment owen-vote">owen</h3>
                <div class="holder owen">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=owen">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=owen">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF OWEN MOMENT-->
            
            <!--HURST MOMENT-->
            <div class="moment">
            	<h3 class="moment hurst-vote">hurst</h3>
                <div class="holder hurst">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=hurst">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=hurst">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF HURST MOMENT-->
            
            <!--JAIRZINHO MOMENT-->
            <div class="moment">
            	<h3 class="moment jairzinho-vote">jairzinho</h3>
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
            <div class="moment firstmoment">
            	<h3 class="moment bergkamp-vote">bergkamp</h3>
                <div class="holder bergkamp">
                	<div class="button-deck first">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=bergkamp">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=bergkamp">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF BERGKAMP MOMENT-->
            
            <!--CRUYFF MOMENT-->
            <div class="moment">
            	<h3 class="moment cruyff-vote">cruyff</h3>
                <div class="holder cruyff">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=cruyff">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=cruyff">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF CRUYFF MOMENT-->
            
            <!--GEMMILL MOMENT-->
            <div class="moment">
            	<h3 class="moment gemmill-vote">gemmill</h3>
                <div class="holder gemmill">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=gemmill">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=gemmill">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF GEMMILL MOMENT-->
            
            <!--PLATT MOMENT-->
            <div class="moment">
            	<h3 class="moment platt-vote">platt</h3>
                <div class="holder platt">
                	<div class="button-deck">
                    	<a class="button view" href="<?=$routes['competition']['root']?>view.php?m=platt">View ></a>
                        <a class="button vote" href="<?=$routes['competition']['enter']?>step1.php?m=platt">Vote ></a>
                    </div>	
                </div>
            </div>
            <!--END OF PLATT MOMENT-->
            
            <!--MOORE MOMENT-->
            <div class="moment">
            	<h3 class="moment moore-vote">moore</h3>
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
