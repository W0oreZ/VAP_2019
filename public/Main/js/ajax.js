//import axios from 'axios';
//import ImageCompressor from 'image-compressor.js';

$(function(){
	'use strict';
	// uploading file using AJAX
    
	var cc= 0, x = 0, cl = 0;
$(window).on('load', function() {
	var i = 0,arr = [];
 $('input[name="images"]').each(function(){ arr.push($(this).val()); i++; });
				cc=i;
				x=i;
				$('#coaj').html(6-cc);
				if(x == 6)  $('#uploader').css('display','none');
				else $('#uploader').css('display','inline-block');
				
});	

	
	$('#files').change(function(){
		var files 		= $('#files')[0].files,
			error 		= '',
			loader		= '';
			
		cc += files.length;

		for(var i = 0 ; i<files.length ; i++)
			{// the loop for checking errors
				
				var name		= files[i].name,
					extension	= name.split('.').pop().toLocaleLowerCase();
				if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1)
					{
						error += " invalid " + name + " image file\n";
					}
			}//End Loop

			if(error == '' && cc <= 6 && files.length > 0)
				{
					for(var count = 0 ; count<files.length ; count++)
						{
							x = cc;
							cl ++;
								loader = '';
							for (var i =0 ; i < cl; i++) 
							{
								loader += '<div class="photo"><img src="../../assets/images/loader.gif" style="width: 70px; margin: 10px auto; display: block;"></div>';
							}
							$('#loader').html(loader);

							new ImageCompressor(files[count], {
						    quality: 0.4,
						    success(result) {
						    	const form_data 	= new FormData(files);
						    	form_data.append('files[]',	result, result.name); 
							
									$.ajax({
									url:			"http://vap.somitic.com/index.php/Welcome/do_upload",
									method:			"post",
									data:			form_data,
									contentType:	false,
									cache:			false,
									processData:	false,
									beforeSend: function() {
										
									  },
									complete: function(){
										cl --;
										loader = '';
										for (var i =0 ; i < cl; i++) {
										loader += '<div class="photo"><img src="../../assets/images/loader.gif" style="width: 70px; margin: 10px auto; display: block;"></div>';
									}
									$('#loader').html(loader);
									  },
									success:	function(data){
													$('#uploaded_images').append(data);
													$('#coaj').html(6-x);
													if(x == 6)  $('#uploader').css('display','none');
													var arr = [];
												    $('input[name="images"]').each(function(){ arr.push($(this).val()); });
												    $('#imgcount').val(arr);
												}
									});// End AJAX
							 } ,

						    error(e) {
						      alert(e.message);
						    },
						});
											
											
						}// End Loop
				}// End If
				else
				{
					if(cc>6) 
					{
						alert('Seulement 6 photos sont autorisÃ©es par annonce!');
					}
					else if(error =! '' && error) 
						{
							alert(error);
						}
						cc=x;
				} //End Else
			
			
	});
		// Removing image
		$(document).on ("click", ".remove", function () {
			var href = $(this).attr('href');
			var b = false;
			
				$.ajax({
					url:			"http://vap.somitic.com/index.php/Welcome/delete_img/"+href,
					method:			"post",
					contentType:	false,
					cache:			false,
					processData:	false,
					success:		function(){
									b = true;
									var xx = [];
									$('input[name="images"]').each(function(){ xx.push($(this).val()); });
									$('#imgcount').val(xx);
									}
					});//End AJAX
			if(!b)
				{ 
					$(this).parent().remove();
					x--;
					cc=x;
					$('#coaj').html(6-cc);
					$('#uploader').css('display','inline-block');
				}
			});//End Function

});





