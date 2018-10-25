$(function(){
	'use strict';
	// uploading file using AJAX
	var cc= 0;
	var x = 0;
	
	$('#files').change(function(){
		var files 		= $('#files')[0].files,
			error 		= '',
			loader		= '',
			form_data 	= new FormData(files);
		
		for(var count = 0 ; count<files.length ; count++)
			{
				
				var name		= files[count].name,
					extension	= name.split('.').pop().toLocaleLowerCase();
				if(jQuery.inArray(extension,['gif','png','jpg','jpeg']) == -1)
					{
						error += " invalid " + count + " image file";
					}
				else
					{
						form_data.append('files[]',files[count]);
						loader += '<div class="photo"><img src="../../assets/images/loader.gif" style="width: 70px; margin: 10px auto; display: block;"></div>';
					}
			}
		
		cc = cc + count;
		
		//alert (cc);
		if(error == '' && cc <= 6 && files.length > 0)
			{
				
				$.ajax({
				url:			"http://localhost:8080/vap1/index.php/Welcome/do_upload",
				method:			"post",
				data:			form_data,
				contentType:	false,
				cache:			false,
				processData:	false,
				beforeSend: function() {
					 //$('#loader').show();
					$('#loader').append(loader);
				  },
				complete: function(){
					 //$('#loader').hide();
					loader = '';
					$('#loader').html(loader);
				  },
				success:		function(data){
					x = cc;
									$('#uploaded_images').append(data);
									$('#coaj').html(6-cc);
									if(x == 6)  $('#uploader').css('display','none');
									var arr = [];
								    $('input[name="images"]').each(function(){ arr.push($(this).val()); });
								    $('#imgcount').val(arr);
								}
				});
			}
		else
			{
				if(cc>6) 
				{
					cc=x;
					var a= cc + count;
					var ss = "You have selected " + a + " file(s), 6 is maximum!";
					alert(ss);
				}
				else if(error =! '' && error) 
					{
						alert(error);cc=x;
					}
			}
			
	});
		
		$(document).on ("click", ".remove", function () {
			var href = $(this).attr('href');
			var b = false;
			var xx = [];
				$.ajax({
					url:			"http://localhost:8080/vap1/index.php/Welcome/delete_img/"+href,
					method:			"post",
					contentType:	false,
					cache:			false,
					processData:	false,
					success:		function(){
									b = true;
									$('input[name="images"]').each(function(){ xx.push($(this).val()); });
									$('#imgcount').val(xx);
									}
					});
			if(!b)
				{
					$(this).parent().remove();
					x--;
					cc=x;
					$('#coaj').html(6-cc);
					$('#uploader').css('display','inline-block');
				}
                        

			});
	
			

});








