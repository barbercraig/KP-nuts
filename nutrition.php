<?php 
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}
?>
<? $pageID = "nutrition" ?>
<?php include('include/header.php') ?>

  <div id="content">
    <div id="nutrition-image"><img src="images/nutrition/packet.png" width="328" height="304" border="0" alt="Original Salted Peanuts" /></div>
  
	<div id="nutrition-content" style="visibility:visible">
    	<div id="text">
            <h2 id="nutrition"><span class="hidden">Nutritional Information</span></h2>
            <p>Peanuts are a good source of protein and fibre, as well as containing essential vitamins and minerals for those who lead an active lifestyle. These include Niacin (Vitamin B3), Biotin (Vitamin H), Phosphorus and Magnesium. </p>
            <p>We should eat a balanced diet including some fat and nearly 80% of the fat in peanuts is monounsaturated and polyunsaturated (the ones that are better for you!). Fat in our diet is essential as it provides the vital energy that we need to grow and live our daily lives. </p>
            <p>Nuts make the perfect snack choice which can easily fit into a balanced diet and active lifestyle.
          </p>
       </div>
      <a href="range.php" class="ViewRangeButton nutrition" style="margin-left:1px;"><span class="hidden">View Range</span></a>
      <img class="peanuts" src="images/nutrition/peanuts.png" width="180" height="46" alt="peanuts" />
	</div>
  </div>
 
<?php include ('include/footer.php') ?>
