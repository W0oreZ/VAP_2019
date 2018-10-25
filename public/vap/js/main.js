$(function(){
	'use strict';
	var upperH 	= $('.top-header').innerHeight();

	$('.collapse').on('hidden.bs.collapse', function () {
 			
		$(this).parent().find('.fa-minus').addClass('fa-plus').removeClass('fa-minus');
		
	});
	
	$('.collapse').on('shown.bs.collapse', function () {
 		
		$(this).parent().find('.fa-plus').addClass('fa-minus').removeClass('fa-plus');
	
	});


});
