// JavaScript Document

	var timeout    = 200;
	var closetimer = 0;
	var ddmenuitem = 0;
	
	function jsddm_open()
	{  jsddm_canceltimer();
	   jsddm_close();
	   ddmenuitem = $(this).find('ul').css('visibility', 'visible');}
	
	function jsddm_close()
	{  if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}
	
	function jsddm_timer()
	{  closetimer = window.setTimeout(jsddm_close, timeout);}
	
	function jsddm_canceltimer()
	{  if(closetimer)
	   {  window.clearTimeout(closetimer);
		  closetimer = null;}}
	
	
	
	$(document).ready(function()
	{  
		var formError     = $('#notifier').val();
		var postcodeError = $('#postcodenotifier').val();
		var streetError   = $('#streetnotifier').val();
		var townError     = $('#townnotifier').val();
		
		$('#jsddm > li').bind('mouseover', jsddm_open);
		$('#jsddm > li').bind('mouseout',  jsddm_timer);
		
		$('#roi-fields').hide();
		
		checked = $("#ROI").attr('checked');		
		if(checked == true){
			$('#roi-fields').slideDown();
			$('#roi-postcode').hide();
			//disable the ROI only fields
			if(streetError == 'error'){
				$("#street").removeAttr("disabled");
				$("#street").css("background-color", "#fddfdf");
			}else if(formError == 'error'){
				$("#street").css("background-color", "white");
			}else{
				$("#street").attr("value", "");
				$("#street").removeAttr("disabled");
				$("#street").css("background-color", "white");
			}
			
			//check town
			if(townError == 'error'){
				$("#town").removeAttr("disabled");
				$("#town").css("background-color", "#fddfdf");
			}else if(formError == 'error'){
				$("#town").css("background-color", "white");
			}else{
				$("#town").attr("value", "");
				$("#town").removeAttr("disabled");
				$("#town").css("background-color", "white");
			}
			
			//check postcodes
			/*if(postcodeError !== ''){
				$("#postcode1").removeAttr("disabled");
				$("#postcode1").css("background-color", "#fddfdf");
				$("#postcode2").removeAttr("disabled");
				$("#postcode2").css("background-color", "#fddfdf");
			}else{
				
			}*/
				$("#postcode1").attr("disabled", "true");
				$("#postcode1").css("background-color", "#959696");
				$("#postcode2").attr("disabled", "true");
				$("#postcode2").css("background-color", "#959696");
		}else{
			
			if(postcodeError == 'error'){
				$("#postcode1").removeAttr("disabled");
				$("#postcode1").css("background-color", "#fddfdf");
				$("#postcode2").removeAttr("disabled");
				$("#postcode2").css("background-color", "#fddfdf");
				
			}else if(formError == 'error'){
					$("#postcode1").css("background-color", "white");
					$("#postcode2").css("background-color", "white");					
			}else{
					$("#postcode1").attr("value", "");
					$("#postcode1").removeAttr("disabled");
					$("#postcode1").css("background-color", "white");
					$("#postcode2").attr("value", "");
					$("#postcode2").removeAttr("disabled");
					$("#postcode2").css("background-color", "white");					
			}
			
			if(townError == 'error'){
				$("#town").removeAttr("disabled");
				$("#town").css("background-color", "#fddfdf");
			}else if(formError == 'error'){
				$("#town").css("background-color", "white");
			}else{
				$("#town").attr("value", "");
				$("#town").removeAttr("disabled");
				$("#town").css("background-color", "white");
			}
			
			if(streetError == 'error'){
				$("#street").removeAttr("disabled");
				$("#street").css("background-color", "#fddfdf");
			}else if(formError == 'error'){
				$("#street").css("background-color", "white");
			}else{
				$("#street").attr("value", "");
				$("#street").removeAttr("disabled");
				$("#street").css("background-color", "white");
			}
			
			

				

		}
		
		$("input#ROI").click(function() {
			checked = $("#ROI").attr('checked');		
			if(checked == true){
				$('#roi-fields').slideDown();
				$('#roi-postcode').hide();
				
				if(postcodeError == 'error'){
					$("#postcode1").attr("value", "");
					$("#postcode1").attr("disabled", "true");
					$("#postcode1").css("background-color", "#fddfdf");
					$("#postcode2").attr("value", "");
					$("#postcode2").attr("disabled", "true");
					$("#postcode2").css("background-color", "#fddfdf");
				}else if(formError == 'error'){
					$("#postcode1").attr("value", "");
					$("#postcode1").attr("disabled", "true");
					$("#postcode1").css("background-color", "#959696");
					$("#postcode2").attr("value", " ");
					$("#postcode2").attr("disabled", "true");
					$("#postcode2").css("background-color", "#959696");
				}
				
				
				//check street
				if(streetError == 'error'){
					$("#street").removeAttr("disabled");
					$("#street").css("background-color", "#fddfdf");
				}else{
					$("#street").attr("value", "");
					$("#street").removeAttr("disabled");
					$("#street").css("background-color", "white");
				}
				
				//check town
				if(townError == 'error'){
					$("#town").removeAttr("disabled");
					$("#town").css("background-color", "#fddfdf");
				}else{
					$("#town").attr("value", "");
					$("#town").removeAttr("disabled");
					$("#town").css("background-color", "white");
				}
						
				
			}else{
				$('#roi-fields').slideUp();
				$('#roi-postcode').show();
				//it is not checked, so enable postcode field
				
				if(postcodeError == 'error'){
					$("#postcode1").removeAttr("disabled");
					$("#postcode1").css("background-color", "#fddfdf");
					$("#postcode2").removeAttr("disabled");
					$("#postcode2").css("background-color", "#fddfdf");
				}else{
					$("#postcode1").attr("value", "");
					$("#postcode1").removeAttr("disabled");
					$("#postcode1").css("background-color", "white");
					$("#postcode2").attr("value", "");
					$("#postcode2").removeAttr("disabled");
					$("#postcode2").css("background-color", "white");					
				}
				
				//now check street
				if(streetError == 'error'){
					$("#street").attr("value", "");
					$("#street").removeAttr("disabled");
					$("#street").css("background-color", "#fddfdf");
				}else{
					$("#street").attr("value", "");
					$("#street").addAttr("disabled");
					$("#street").css("background-color", "#959696");
				}
				
				if(townError == 'error'){
					$("#town").attr("value", "");
					$("#town").removeAttr("disabled");
					$("#town").css("background-color", "#fddfdf");
				}else{
					$("#town").attr("value", "");
					$("#town").addAttr("disabled");
					$("#town").css("background-color", "#959696");
				}

			}
		});
	
		// $(document).pngFix();   
	});
	
	document.onclick = jsddm_close;
	
	
	window.onerror = function() {
		return true
	};
	