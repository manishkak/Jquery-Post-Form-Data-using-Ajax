<?php
// Fetching Values from URL.
$name = $_POST['name'];
//$email = $_POST['email'];
$message = $_POST['message'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];
//$contact = $_POST['contact'];
//$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
echo '</br>Your name is- '.$name.' and your message is- '.$message.' and comment is- '.$comment."your gender is-> ".$gender."<br>";
$db = mysqli_connect('localhost','root','','db1') or die('cant connect to DB');
$qry="insert into info values('15','$name','$message','$comment')";
mysqli_query($db, $qry) or die("cant INSERT ".mysqli_error($db)." on line- ". __LINE__);
/*
$(document).ready(function(){  
					  var name = $('#name').val();
					  var message = $('#message').val();
					$("#name").focusout(function() {
					var name = $("#name").val();
					//alert(name.length);
					if(name.length<5 || name.length>20)
					{
						$("#name_err").show();
						return false();
					}
					else
					{
						$("#name_err").hide();
					}
				});
				if(message.length==0)
					{
						$("#msg_err").toggle();
					//	return false();
					}
				  $('#submit').click(function(){  
					   $.ajax({  
								 url:"contact_form.php",  
								 method:"POST",  
								 data:$('#submit_form').serialize(),  
								 success:function(data){  
									  $('form').trigger("reset");  
									  $('#response').html(data);  
								}  
							});  
					   });  
			 });
*/
?>