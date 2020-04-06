<?php
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$visitor_mobile=$_POST['mobile'];
	$message = $_POST['messsage'];
	
	$email_from='prakanshusrivastva3677@gmail.com';
	
	$email_subject = "New Enquiry";
	
	$email_body = "User Name: $name.\n".
			"User Email: $visitor_email.\n".
			"User Mobile: $visitor_mobile.\n".
			"User Message: $message.\n".
	
	
	$to="prakanshu8600@gmail.com";
	
	$headers = "From: $email_from \r\n";
	$headers .="Reply-To: $visitor_email \r\n";
	mail(($to,$email_subject,$email_body,$hheaders);
	header("Location:index.html");
	
?>
