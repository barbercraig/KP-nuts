    <div class="footer <?php switch($pageID){case "about-kp": echo 'aboutfooter'; break; case "competition": echo 'competition'; break;}?>" <?php if ($pageID != "home") {?>style="z-index:2"<?php }?>>
		
		<div class="footer-nav <?php switch($pageID){case "about-kp": echo 'aboutnav'; break; case "competition": echo 'compnav'; break; case "home": echo 'compnav'; break;}?>">
			<?php /*if($pageID == "home"){
			
					include(DOCROOT . 'include/footer_nav.php');
					
				  } else if($pageID == "competition"){
				  
			 		include(DOCROOT . 'include/footer-comp.php'); 
					
				  }*/
		    ?>
            
            <?php
				switch($pageID){
					case "home":
						$footer_left  = 'league';
						$footer_mid   = 'prizedraw';
						$footer_right = 'newsletter_home';
						break;
						
					case "competition":
						switch($step){
							case "home";
								$footer_left  = 'prizes';
								$footer_mid   = 'prizedraw';
								$footer_right = 'newsletter';
								break;
							
							case "league";
								$footer_left  = 'prizes';
								$footer_mid   = 'prizedraw';
								$footer_right = 'newsletter';
								break;

							case "batch";
								$footer_left  = 'prizes';
								$footer_mid   = 'league';
								$footer_right = 'prizedraw';
								break;

							case "user";
								$footer_left  = 'prizes';
								$footer_mid   = 'league';
								$footer_right = 'prizedraw';
								break;
								
							case "vote";
								$footer_left  = 'prizes';
								$footer_mid   = 'league';
								$footer_right = 'prizedraw';
								break;
								
							case "view";
								$footer_left  = 'prizes';
								$footer_mid   = 'league';
								$footer_right = 'prizedraw';
								break;

							case "captcha";
								$footer_left  = 'prizes';
								$footer_mid   = 'league';
								$footer_right = 'prizedraw';
								break;

							case "error";
								$footer_left  = 'prizes';
								$footer_mid   = 'league';
								$footer_right = 'prizedraw';
								break;
								
							case "prizedraw";
								$footer_left  = 'prizes_win';
								$footer_mid   = 'league';
								$footer_right = 'newsletter';
								break;

							case "prizedraw-enter";
								$footer_left  = 'prizes_win';
								$footer_mid   = 'league';
								$footer_right = 'newsletter';
								break;

							case "prizedraw-thanks";
								$footer_left  = 'prizes_win';
								$footer_mid   = 'league';
								$footer_right = 'newsletter';
								break;


							default:
								$footer_left  = 'prizes';
								$footer_mid   = 'prizedraw';
								$footer_right = 'newsletter';
								break;
						}
						break;
				}
			?>
            <div class="window_left ft_<?=$footer_left?>-left">
				<?php include('footer_sections/'.$footer_left.'.php')?>
            </div>
            
            <div class="window_mid ft_<?=$footer_mid?>-mid">
				<?php include('footer_sections/'.$footer_mid.'.php')?>
            </div>
            
            <div class="window_right ft_<?=$footer_right?>-right">
				<?php include('footer_sections/'.$footer_right.'.php')?>
            </div>

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
                <li><a href="<?=$routes['tag']?>?tid=4339" target="_blank">FAQs</a></li> |
                <li><a href="<?=$routes['tag']?>?tid=4338" target="_blank">Terms &amp; Conditions</a></li> |
				<li><a href="<?=$routes['tag']?>?tid=4319" target="_blank">Privacy policy</a></li> |
				<li><a href="<?=$routes['tag']?>?tid=4320" target="_blank">www.123healthybalance.com</a></li> |
				<li><a href="<?=$routes['tag']?>?tid=4321" target="_blank">www.unitedbiscuits.com</a></li> |
				<li><a href="<?=$routes['tag']?>?tid=4322" target="_blank">Contact Us</a></li>
			</ul>
			
		</div><!--End of terms-->
            <span class="trade">United Biscuits (UK) Limited. Registered in England number 2506007. Registered office: Hayes Park, Hayes End Road, Hayes, Middlesex  UB4 8EE.</span>
    </div><!--End of footer-->
</div><!--End of wrapper-->
<?php include(DOCROOT . 'include/tagger.php'); ?>
<script type="text/javascript" language="JavaScript">
	<!--
	client_id = 252;
	page_id   = "<?=$tagId?>";
	timeout   = 600;
	p1        = "<?=$flavour?>";
	p2        = "<?=$p2?>";
	p3        = "<?=$moment?>";
	//-->
</script> 
	<script type="text/javascript" src="http://www.inboxtag.com/inbox_tagger.js">
</script>

</body>
</html>