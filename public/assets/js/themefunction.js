/*--------------------------------------
		CUSTOM FUNCTION WRITE HERE		
--------------------------------------*/
"use strict";
jQuery(document).on('ready', function() {
	/*--------------------------------------
			MOBILE MENU						
	--------------------------------------*/
	// $(".at-btnlogout").click(function(){
	// 	$("body").css("opacity: 0.1;")
	// });
	$('#at-selecttheme').change(function (){
		var $option = $(this).find('option:selected');			
		$option.parent().parent().parent().addClass('at-changbordercolor');
	});
	$(".at-btnmenu").click(function(){
		$(".at-wrapper").toggleClass('at-closemenu')
	})
});