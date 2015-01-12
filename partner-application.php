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
	mail("apply@youcentral.tk","New Partner Application", $email_content, "YouCentral");

	session_start();
	$_SESSION['success'] = 'yes';

	// Send user back to the homepage
	header("Location: ../index.php?s=".urlencode("Thankyou for your application.")."#form");
	exit;

?>