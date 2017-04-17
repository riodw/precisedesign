<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	  echo "Not all arguments Provided!";
	  return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'aldemar@precisecreates.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "New message from Your Website.\n\n"."Here are the details:\nName:\n-->$name\nEmail:\n-->$email_address\nPhone:\n-->$phone\n\nMessage:\n$message";
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);
return true;			
?>