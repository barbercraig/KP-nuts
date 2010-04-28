<?php 
	#include init file 
	//we need to do some extra checking for document root for gay inboxwork
	if(strpos($_SERVER['SERVER_NAME'], 'inboxwork')){
		include($_SERVER['DOCUMENT_ROOT'] . '/ub/kp/dev/init/kp-init.php');
	}else{
		include($_SERVER['DOCUMENT_ROOT'] . '/init/kp-init.php');
	}
?>

<?php 
	$pageID = "range"; 
	$productID = isset($_GET['p']) ? $_GET['p'] : "";
	$returnID = isset($_GET['r']) ? $_GET['r'] : "";
	
	
?>
<?php include('include/header.php'); ?>

  <div id="content">  

	<?php if ($productID == "") { ?>
      
		<div id="altContent">
			<p>KP Site Range</p>
			<p><a href="http://www.adobe.com/go/getflashplayer"><img 
				src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
				alt="Get Adobe Flash player" /></a></p>
		</div>    
	  
	<?php } else { ?>
  
		<div id="rangeFlashContent">
			<p>KP Site Range</p>
			<p><a href="http://www.adobe.com/go/getflashplayer"><img 
				src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
				alt="Get Adobe Flash player" /></a></p>			
		</div>
  
		<div id="rangeContent" <?php if ($productID == "jumbo") { ?>style="width:390px"<?php };?>>
		
			<h2 id="<?= $productID ?>"><span class="hidden"><?php $productID ?></span></h2>
			
			<?php if ($productID == "regular" ) { ?>
			
				<div id="subnav">
					<a href="#" id="dry-roasted"><span class="hidden">Dry Roasted</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="original-salted"><span class="hidden">Original Salted</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="honey-roast"><span class="hidden">Honey Roast</span></a>
				</div>
				
				<p id="productCopy-original-salted" style="display:none">Our mouth-watering, Original Salted Peanuts are roasted to perfection to ensure they’re 
                		bursting full of flavour with a deliciously crunchy texture – it’s what we’re famous for and you’ll genuinely taste the difference.</p>
				<p id="productCopy-dry-roasted">These were a taste sensation when they launched in the mid-1980s and they’ve been a big hit ever since. Using the best 
                		quality peanuts and a special roasting process – we bring out a smoky savoury flavour that compliments the peanut perfectly.</p>
				<p id="productCopy-honey-roast" style="display:none">These irresistible sweet peanuts are traditionally popular during the festive season, but 
                		they’re now available all year round. They’re a deliciously sweet fusion of salt and sugar dusted over a glazed honey surface. 
                        Try them once and you’ll never go back.</p>

				<a href="#" class="didYouKnow" id="didYouKnow-regular" style="display:none"><span class="hidden">Did you know?</span></a>
				<!--<a href="#" class="didYouKnow" id="didYouKnow-dry-roasted"><span class="hidden">Did you know?</span></a>
				<a href="#" class="didYouKnow" id="didYouKnow-honey-roast" style="display:none"><span class="hidden">Did you know?</span></a>-->

				
				<script type="text/javascript">
				$(document).ready(function()
				{
					if (navigator.appName.indexOf("Microsoft") != -1)
					{
						flashMovie = window["KPsiteRangeDetails"];
					} 
					else if (document.getElementById) 
					{
						flashMovie = document.getElementById("KPsiteRangeDetails");
					}					
				
					$('#didYouKnow-regular').css("display","block");

					// setup tooltips
					$("#didYouKnow-regular").qtip({
						content: 'Peanuts are part of the legume family and grow underground, maturing after 125 days.',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});	
					/*$("#didYouKnow-dry-roasted").qtip({
						content: 'Dry Roasted: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});					
					$("#didYouKnow-honey-roast").qtip({

						content: 'Honey Roast: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});	*/
				
					// bind subnav items
					$('#original-salted').click(function() { 
							$('#original-salted').css("background-image", "url(images/range/subanv-original-salted-on.png)");
							$('#dry-roasted').css("background-image", "url(images/range/subanv-dry-roasted.png)");
							$('#honey-roast').css("background-image", "url(images/range/subanv-honey-roast.png)");
							
							// update copy
							$('#productCopy-original-salted').css("display","block");
							$('#productCopy-dry-roasted').css("display","none");
							$('#productCopy-honey-roast').css("display","none");
							
							// Display Did You Know
							/*$('#didYouKnow-original-salted').css("display","none");
							$('#didYouKnow-dry-roasted').css("display","none");
							$('#didYouKnow-honey-roast').css("display","none")*/
							
							var flavour = 'orginal-salted';								
							
							changeFocus(2)
					});	
					
					$('#dry-roasted').click(function() { 
							$('#original-salted').css("background-image", "url(images/range/subanv-original-salted.png)");
							$('#dry-roasted').css("background-image", "url(images/range/subanv-dry-roasted-on.png)");
							$('#honey-roast').css("background-image", "url(images/range/subanv-honey-roast.png)");
							
							// update copy
							$('#productCopy-original-salted').css("display","none");
							$('#productCopy-dry-roasted').css("display","block");
							$('#productCopy-honey-roast').css("display","none");
							
							// Display Did You Know
							/*$('#didYouKnow-original-salted').css("display","none");
							$('#didYouKnow-dry-roasted').css("display","block");
							$('#didYouKnow-honey-roast').css("display","none");*/								
							
							var flavour = 'dry-roasted';								
							
							changeFocus(1)
					});	
					
					$('#honey-roast').click(function() { 
							$('#original-salted').css("background-image", "url(images/range/subanv-original-salted.png)");
							$('#dry-roasted').css("background-image", "url(images/range/subanv-dry-roasted.png)");
							$('#honey-roast').css("background-image", "url(images/range/subanv-honey-roast-on.png)");
							
							// update copy
							$('#productCopy-original-salted').css("display","none");
							$('#productCopy-dry-roasted').css("display","none");
							$('#productCopy-honey-roast').css("display","block");
							
							// Display Did You Know
							/*$('#didYouKnow-original-salted').css("display","none");
							$('#didYouKnow-dry-roasted').css("display","none");
							$('#didYouKnow-honey-roast').css("display","block");*/								
							
							var flavour = 'honey-roast';								
							
							changeFocus(3);
					});	
					
					
					$('#dry-roasted').click();
				
				});	
				</script>
				
			<?php } else if ($productID == "flavoured" ) { ?>
			
				<div id="subnav">
					<a href="#" id="spicy-chilli"><span class="hidden">Spicy Chilli</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="salt-vinegar"><span class="hidden">Salt &amp; Vinegar</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="salt-pepper"><span class="hidden">Salt &amp; Pepper</span></a>
				</div>

				<p id="productCopy-spicy-chilli">Spicy Chilli: Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum erat. Fusce mollis consequat magna ut sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus semper mauris sed tempor. uris ac elementum ligula. Nam in odio id sapien porta placerat. et magna, eget euismod metus massa id odio. Nulla facilisi.</p>
				<p id="productCopy-salt-vinegar" style="display:none">Salt &amp; Vinegar: Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum erat. Fusce mollis consequat magna ut sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus semper mauris sed tempor. uris ac elementum ligula. Nam in odio id sapien porta placerat. et magna, eget euismod metus massa id odio. Nulla facilisi.</p>
				<p id="productCopy-salt-pepper" style="display:none">Salt &amp; Pepper: Lorem ipsum dolor sit amet, consectetur adipiscing elit. fermentum erat. Fusce mollis consequat magna ut sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus semper mauris sed tempor. uris ac elementum ligula. Nam in odio id sapien porta placerat. et magna, eget euismod metus massa id odio. Nulla facilisi.</p>

				<a href="#" class="didYouKnow" id="didYouKnow-spicy-chilli"><span class="hidden">Did you know?</span></a>
				<a href="#" class="didYouKnow" id="didYouKnow-salt-vinegar" style="display:none"><span class="hidden">Did you know?</span></a>
				<a href="#" class="didYouKnow" id="didYouKnow-salt-pepper" style="display:none"><span class="hidden">Did you know?</span></a>
				
				<script type="text/javascript">
				$(document).ready(function()
				{
					if (navigator.appName.indexOf("Microsoft") != -1)
					{
						flashMovie = window["KPsiteRangeDetails"];
					} 
					else if (document.getElementById) 
					{
						flashMovie = document.getElementById("KPsiteRangeDetails");
					}	
					
					// setup tooltips
					$("#didYouKnow-spicy-chilli").qtip({
						content: 'Spicy Chilli: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});	
					$("#didYouKnow-salt-vinegar").qtip({
						content: 'Salt &amp; Vinegar: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});					
					$("#didYouKnow-salt-pepper").qtip({
						content: 'Salt &amp; Pepper: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});					
				
					// bind subnav items
					$('#spicy-chilli').click(function() { 
							$('#spicy-chilli').css("background-image", "url(images/range/subanv-spicy-chilli-on.png)");
							$('#salt-vinegar').css("background-image", "url(images/range/subanv-salt-vinegar.png)");
							$('#salt-pepper').css("background-image", "url(images/range/subanv-salt-pepper.png)");

							// update copy
							$('#productCopy-spicy-chilli').css("display","block");
							$('#productCopy-salt-vinegar').css("display","none");
							$('#productCopy-salt-pepper').css("display","none");

							// Display Did You Know
							$('#didYouKnow-spicy-chilli').css("display","block");
							$('#didYouKnow-salt-vinegar').css("display","none");
							$('#didYouKnow-salt-pepper').css("display","none");							
							
							changeFocus(1)
					});	
					
					$('#salt-vinegar').click(function() { 
							$('#spicy-chilli').css("background-image", "url(images/range/subanv-spicy-chilli.png)");
							$('#salt-vinegar').css("background-image", "url(images/range/subanv-salt-vinegar-on.png)");
							$('#salt-pepper').css("background-image", "url(images/range/subanv-salt-pepper.png)");
							
							// update copy
							$('#productCopy-spicy-chilli').css("display","none");
							$('#productCopy-salt-vinegar').css("display","block");
							$('#productCopy-salt-pepper').css("display","none");

							// Display Did You Know
							$('#didYouKnow-spicy-chilli').css("display","none");
							$('#didYouKnow-salt-vinegar').css("display","block");
							$('#didYouKnow-salt-pepper').css("display","none");							
							
							changeFocus(2)
					});	
					
					$('#salt-pepper').click(function() { 
							$('#spicy-chilli').css("background-image", "url(images/range/subanv-spicy-chilli.png)");
							$('#salt-vinegar').css("background-image", "url(images/range/subanv-salt-vinegar.png)");
							$('#salt-pepper').css("background-image", "url(images/range/subanv-salt-pepper-on.png)");

							// update copy
							$('#productCopy-spicy-chilli').css("display","none");
							$('#productCopy-salt-vinegar').css("display","none");
							$('#productCopy-salt-pepper').css("display","block");

							// Display Did You Know
							$('#didYouKnow-spicy-chilli').css("display","none");
							$('#didYouKnow-salt-vinegar').css("display","none");
							$('#didYouKnow-salt-pepper').css("display","block");							
							
							changeFocus(3)
					});	
					
					$('#spicy-chilli').click();
				});		
				</script>
				
			<?php } else if ($productID == "jumbo_flavoured" ) { ?>
			
				<div id="subnav">
					<a href="#" id="salted"><span class="hidden">Salted</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="spicy-chilli"><span class="hidden">Spicy Chilli</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="salt-vinegar"><span class="hidden">Salt &amp; Vinegar</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="salt-pepper"><span class="hidden">Salt &amp; Pepper</span></a>
				</div>

				<p id="productCopy-salted">You won’t be disappointed by our biggest ever peanuts. These Jumbo Salted Peanuts are peanut perfection – so deliciously 
                			more-ish and tasty that you just can’t stop popping them in your mouth.</p>
				<p id="productCopy-spicy-chilli" style="display:none">If you like food with a big bit of bite, then you’ll love these hot and tasty Jumbo Spicy Chilli Flavour Peanuts that contain no artificial  colours or flavours. They have a mild tomato flavour that’s complemented by a strong chilli kick, giving you a delicious, big peanut with a bit of the devil inside.</p>
				<p id="productCopy-salt-vinegar" style="display:none">Big flavours don’t come much more tasty than Salt & Vinegar Flavour. So if you like your peanuts on the jumbo side, 
                			then you must try these jumbo peanuts that blend a salty flavour with a sharp vinegar hit and all without any artificial colours or flavours.</p>
				<p id="productCopy-salt-pepper" style="display:none">The latest quality addition to the KP range - this jumbo peanut has the classic combination of salt and speckled pieces 
                			of ground black pepper. <br />
                            It’s a delicious snack that will satisfy your peanut cravings, plus there are no artificial colours or flavours.</p>

				<a href="#" class="didYouKnow" id="didYouKnow-jumbo"><span class="hidden">Did you know?</span></a>
				<!--<a href="#" class="didYouKnow" id="didYouKnow-salt-vinegar" style="display:none"><span class="hidden">Did you know?</span></a>
				<a href="#" class="didYouKnow" id="didYouKnow-salted" style="display:none"><span class="hidden">Did you know?</span></a>
				<a href="#" class="didYouKnow" id="didYouKnow-salt-pepper" style="display:none"><span class="hidden">Did you know?</span></a>-->

				
				<script type="text/javascript">
				
				$(document).ready(function()
				{
					if (navigator.appName.indexOf("Microsoft") != -1)
					{
						flashMovie = window["KPsiteRangeDetails"];
					} 
					else if (document.getElementById) 
					{
						flashMovie = document.getElementById("KPsiteRangeDetails");
					}
					
					$('#didYouKnow-jumbo').css("display","block");					
				
					// setup tooltips
					$("#didYouKnow-jumbo").qtip({
						content: 'Peanuts are the most popular nuts in the UK. We consume over 46,000 tons every year.',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});	
					/*$("#didYouKnow-salt-vinegar").qtip({
						content: 'Salt &amp; Vinegar: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});					
					$("#didYouKnow-salted").qtip({
						content: 'Salted: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});	
					$("#didYouKnow-salt-pepper").qtip({
						content: 'Salt &amp; Pepper: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});	*/
					
					// bind subnav items
					$('#spicy-chilli').click(function() { 
							$('#spicy-chilli').css("background-image", "url(images/range/subanv-spicy-chilli-on.png)");
							$('#salt-vinegar').css("background-image", "url(images/range/subanv-salt-vinegar.png)");
							$('#salted').css("background-image", "url(images/range/subanv-salted.png)");
							$('#salt-pepper').css("background-image", "url(images/range/subanv-salt-pepper.png)");

							// update copy
							$('#productCopy-spicy-chilli').css("display","block");
							$('#productCopy-salt-vinegar').css("display","none");
							$('#productCopy-salted').css("display","none");
							$('#productCopy-salt-pepper').css("display","none");

							// Display Did You Know
							/*$('#didYouKnow-spicy-chilli').css("display","block");
							$('#didYouKnow-salt-vinegar').css("display","none");
							$('#didYouKnow-salted').css("display","none");
							$('#didYouKnow-salt-pepper').css("display","none");*/
							
							changeFocus(2);
					});	
					
					$('#salt-vinegar').click(function() { 
							$('#spicy-chilli').css("background-image", "url(images/range/subanv-spicy-chilli.png)");
							$('#salt-vinegar').css("background-image", "url(images/range/subanv-salt-vinegar-on.png)");
							$('#salted').css("background-image", "url(images/range/subanv-salted.png)");
							$('#salt-pepper').css("background-image", "url(images/range/subanv-salt-pepper.png)");

							// update copy
							$('#productCopy-spicy-chilli').css("display","none");
							$('#productCopy-salt-vinegar').css("display","block");
							$('#productCopy-salted').css("display","none");
							$('#productCopy-salt-pepper').css("display","none");
							
							// Display Did You Know
							/*$('#didYouKnow-spicy-chilli').css("display","none");
							$('#didYouKnow-salt-vinegar').css("display","block");
							$('#didYouKnow-salted').css("display","none");
							$('#didYouKnow-salt-pepper').css("display","none");*/
							
							
							changeFocus(3)
					});	
					
					$('#salted').click(function() { 
							$('#spicy-chilli').css("background-image", "url(images/range/subanv-spicy-chilli.png)");
							$('#salt-vinegar').css("background-image", "url(images/range/subanv-salt-vinegar.png)");
							$('#salted').css("background-image", "url(images/range/subanv-salted-on.png)");
							$('#salt-pepper').css("background-image", "url(images/range/subanv-salt-pepper.png)");

							// update copy
							$('#productCopy-spicy-chilli').css("display","none");
							$('#productCopy-salt-vinegar').css("display","none");
							$('#productCopy-salted').css("display","block");
							$('#productCopy-salt-pepper').css("display","none");
							
							// Display Did You Know
							/*$('#didYouKnow-spicy-chilli').css("display","none");
							$('#didYouKnow-salt-vinegar').css("display","none");
							$('#didYouKnow-salted').css("display","block");
							$('#didYouKnow-salt-pepper').css("display","none");*/
							
							
							changeFocus(1)
					});	
					
					$('#salt-pepper').click(function() { 
							$('#spicy-chilli').css("background-image", "url(images/range/subanv-spicy-chilli.png)");
							$('#salt-vinegar').css("background-image", "url(images/range/subanv-salt-vinegar.png)");
							$('#salted').css("background-image", "url(images/range/subanv-salted.png)");
							$('#salt-pepper').css("background-image", "url(images/range/subanv-salt-pepper-on.png)");

							// update copy
							$('#productCopy-spicy-chilli').css("display","none");
							$('#productCopy-salt-vinegar').css("display","none");
							$('#productCopy-salted').css("display","none");
							$('#productCopy-salt-pepper').css("display","block");
							
							// Display Did You Know
							/*$('#didYouKnow-spicy-chilli').css("display","none");
							$('#didYouKnow-salt-vinegar').css("display","none");
							$('#didYouKnow-salted').css("display","none");
							$('#didYouKnow-salt-pepper').css("display","block");*/
							
							
							changeFocus(4)
					});	

					//$('#spicy-chilli').click();	

				});					
				</script>
				
			<?php } else if ($productID == "treenuts" ) { ?>	
			
				<div id="subnav">
					<a href="#" id="pistachios"><span class="hidden">Pistachios</span></a>
					<span class="divider"><span class="hidden"> | </span></span>
					<a href="#" id="cashews"><span class="hidden">Cashews</span></a>
				</div>	
				
				<p id="productCopy-pistachios">Once you break apart the shell of a KP Pistachio nut, you’ll taste the irresistible, moreish flavour that makes you want to eat 
                		them again and again. The nuts taste great on their own, so we just gently roast them & season them with salt to bring out the nut’s natural flavour.</p>
				<p id="productCopy-cashews" style="display:none">We source our Cashews from all over the world, ensuring we find the very best quality nuts. And we enhance their 
                		smooth, creamy texture and mild nut flavour with just a sprinkle of salt, making them a tasty, tempting treat.</p>
				
				<a href="#" class="didYouKnow" id="didYouKnow-treenuts"><span class="hidden">Did you know?</span></a>
				<!--<a href="#" class="didYouKnow" id="didYouKnow-pistachios"><span class="hidden">Did you know?</span></a>
				<a href="#" class="didYouKnow" id="didYouKnow-cashews" style="display:none"><span class="hidden">Did you know?</span></a>-->
				
				<script type="text/javascript">
				$(document).ready(function()
				{
					if (navigator.appName.indexOf("Microsoft") != -1)
					{
						flashMovie = window["KPsiteRangeDetails"];
					} 
					else if (document.getElementById) 
					{
						flashMovie = document.getElementById("KPsiteRangeDetails");
					}					
				
					$('#didYouKnow-treenuts').css("display","block");
				
					// setup tooltips
					$("#didYouKnow-treenuts").qtip({
						content: 'Cashews are a good source of protein.',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});
					/*$("#didYouKnow-pistachios").qtip({
						content: 'Pistachios: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});	
					$("#didYouKnow-cashews").qtip({
						content: 'Cashews: Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
						position: { corner: { tooltip: 'topRight', target: 'bottomLeft' }}, style: { width: 200, padding: 5, background: '#04184c', color: '#ffffff', textAlign: 'left', 'font-size':12, border: { width: 7,radius: 5,color: '#d9a02e'},  tip: true, name: 'dark' }
					});*/	
					
					// bind subnav items
					$('#pistachios').click(function() { 
							$('#pistachios').css("background-image", "url(images/range/subanv-pistacios-on.png)");
							$('#cashews').css("background-image", "url(images/range/subanv-cashews.png)");
							
							// update copy
							$('#productCopy-pistachios').css("display","block");
							$('#productCopy-cashews').css("display","none");
							
							// Display Did You Know
							/*$('#didYouKnow-pistachios').css("display","block");
							$('#didYouKnow-cashews').css("display","none");*/

							// update Flash
							changeFocus(1);
					});	
					
					$('#cashews').click(function() { 
							$('#pistachios').css("background-image", "url(images/range/subanv-pistacios.png)");
							$('#cashews').css("background-image", "url(images/range/subanv-cashews-on.png)");
							
							// Display copy
							$('#productCopy-pistachios').css("display","none");
							$('#productCopy-cashews').css("display","block");

							// Display Did You Know
							/*$('#didYouKnow-pistachios').css("display","none");
							$('#didYouKnow-cashews').css("display","block");*/							

							// update Flash
							changeFocus(2);
					});	
					
					$('#pistachios').click();
					
				
					
					
				});	
				</script>				
				
			<?php } ?>
			
			
      <a href="range.php?r=<?=$productID?>" class="backToRangeButton"><span class="hidden">Back to range</span></a>			
			
			
		</div>
		
		<script type="text/javascript">
	
			// <![CDATA[

			// get our flash movie object
			var flashMovie;
			function init() 
			{
				if (navigator.appName.indexOf("Microsoft") != -1)
				{
					flashMovie = window["KPsiteRangeDetails"];
				} 
				else if (document.getElementById) 
				{
					flashMovie = document.getElementById("KPsiteRangeDetails");
				}	  
			}

			// wait for the page to fully load before initializing
			window.onload = init;

			// for updating the text
			function changeFocus(value) 
			{
				// alert("changeFocus Flashmovie: " + flashMovie);
				if (flashMovie)
				{
					// alert("changeFocus flashMovie.changeFocus: " + flashMovie.changeFocus);
				
					if (flashMovie.changeFocus)
					{
						flashMovie.changeFocus(value);
					}
				}
			}

			// ]]>
		</script>
		
	<?php } ?>
  
  
  </div>
  
<?php include ('include/footer.php'); ?>