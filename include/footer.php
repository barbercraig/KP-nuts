    <div class="footer <?php switch($pageID){case "about-kp": echo 'aboutfooter'; break; case "competition": echo 'competition'; break;}?>" <?php if ($pageID != "home") {?>style="z-index:1"<?php }?>>
		
		<div class="footer-nav <?php switch($pageID){case "about-kp": echo 'aboutnav'; break; case "competition": echo 'compnav'; break;}?>">
			<?php if($pageID == "home"){
			
					include(DOCROOT . 'include/footer_nav.php');
					
				  } else if($pageID == "competition"){
				  
			 		include(DOCROOT . 'include/footer-comp.php'); 
					
				  }
		    ?>
		</div>
		<div id="terms">
		
			<script type="text/javascript">
			var addthis_config = {
				 ui_offset_top: -208,
				 ui_offset_left: -158,
				 ui_header_color: "#ffffff",
				 ui_header_background: "#04184c",
				 ui_cobrand: "KP Nuts"

			}
			</script>		
		
			<!-- AddThis Button BEGIN -->
			<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4b66f43131d4cf7a"><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4b66f43131d4cf7a"></script>
			<!-- AddThis Button END -->
		
			<ul>
				<li><a href="out.php?tid=4319" target="_blank">Privacy policy</a></li> |
				<li><a href="out.php?tid=4320" target="_blank">www.123healthybalance.com</a></li> |
				<li><a href="out.php?tid=4321" target="_blank">www.unitedbiscuits.com</a></li> |
				<li><a href="out.php?tid=4322" target="_blank">Contact Us</a></li>
			</ul>
			
		</div><!--End of terms-->
            <span class="trade">United Biscuits (UK) Limited. Registered in England number 2506007. Registered office: Hayes Park, Hayes End Road, Hayes, Middlesex  UB4 8EE.</span>
    </div><!--End of footer-->
</div><!--End of wrapper-->
<script type="text/javascript">
$(document).ready(function(){
	alert(flavour);
});
</script>
<?php include(DOCROOT . 'include/tagger.php'); ?>
</body>
</html>