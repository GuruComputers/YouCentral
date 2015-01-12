<?php

	echo "breakpoint 1 reached";

	// Get Data from Form
	$youtube = $_POST['youtubeusername'];
	$email_address = $_POST['email'];
	$skype = $_POST['skypeusername'];

	// Write Email Content
	$email_content = "YouTube Username: $youtube\n";
	$email_content .= "Email Address: $email_address\n";
	$email_content .= "Skype Username: $skype";

	// Send the Email
	$to      = 'apply@youcentral.tk';
	$subject = 'New Partner Application';
	$message = $email_content;
	$headers = 'From: webmaster@youcentral.tk' . "\r\n" .
	'Reply-To: webmaster@youcentral.tk' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
   
   	mail($to, $subject, $message, $headers);

	// Send user back to the homepage
	header("Location: ../index.php?s=".urlencode("Thankyou for your application.")."#form");
	exit;

?>