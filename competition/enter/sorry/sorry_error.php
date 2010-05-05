<div class="comp-content sorry-content">
    <h2 class="error <?=$_SESSION['lose_type']?>">Sorry. You have exceeded the entry limit.</h2>
    <p class="error <?=$_SESSION['lose_type']?>">Please pick up another KP pack and try again.</p>
	<?php
		if($returnVal == "success"){
			include('include/thanks.php');
		}else{
			include('include/form.php');
		}
	?>
    <div id="nav-sorry">
        <a class="button league" href="<?=$routes['competition']['league']?>">View League Table ></a>
        <a class="button range" href="<?=$routes['range']?>">View Product Range ></a>
    </div>
</div>


