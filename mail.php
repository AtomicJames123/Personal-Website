<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "Jamesultima@Hotmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error has occurred");
	echo "Thank you for your email" . "<a href='contact.html'>Return Home</a>";
?>