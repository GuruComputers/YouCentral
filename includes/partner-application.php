<?php

	// Check for form submission
	if(isset($_POST['save']) || $_POST['save'] != 'contact'){
		header("Location: ../index.php");
	}

	// Get Data from Form
	$youtube = $_POST['youtubeusername'];
	$email_address = $_POST['email'];
	$skype = $_POST['skypeusername'];

	// Check a YouTube Username was Entered
	if(empty($youtube)){
		$error = "You must enter your YouTube Username";	
	} elseif (empty($email_address)){
		$error = "You must enter your Email Address";
	} elseif (!preg_match(“/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/”, $email_address)){
		$error = "You must enter a valid email address";
	} elseif (empty($skype)){
		$error = "You must enter a Skype Username";
	}

	// Check if an error was thrown
	if(isset($error)){
		header("Location: ../index.php?e=".urlencode($error));
		exit;
	}

	// Write Email Content
	$email_content = "YouTube Username: $youtube\n";
	$email_content .= "Email Address: $email_address\n";
	$email_content .= "Skype Username: $skype";

	// Send the Email
	mail("apply@youcentral.tk","New Partner Application", $email_content);

	// Send user back to the homepage
	header("Location: ../index.php?s=".urlencode("Thankyou for your application."));
	exit;

?>