<div class="window_newsletter">
    <!--Display-->
    <?php
		$version ='';
	
		//include process script
		include(DOCROOT. 'script/process.php');
	?>

    <div id="display">
        <!--Dynamic content-->
        <?php
        //display either form or thankyou message
        switch($success){
            case true:
            include("newsletter/thankyou.php");
            break;

            case false:
            include("newsletter/form.php");
            break;
        }
        ?>
        <!--END Dynamic content-->
    </div><!--End of display-->
</div><!--End of window_newsletter-->