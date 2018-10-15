<?php

//Setting the variables
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

//Conditional tests based on selection to direct the enquiry
	switch($_POST['mailToOption']) {
	case 'Organisers':
		$mailTo = "fireworks@n2web.co.uk";
	break;
	case 'Web Master':
		$mailTo = "artwm@n2web.co.uk";
	break;
	}


// Conditional tests based on checkboxes to display the user's contact requests
	if (isset($_POST['contactByPhone_cb'])) {
		$contactByPhone = "YES";
	} else {
		$contactByPhone = "NO";
	}

	if (isset($_POST['contactByEmail_cb'])) {
		$contactByEmail = "YES";
	} else {
		$contactByEmail = "NO";
	}


//Setting the parameters to be used in mail() function below
	$subject = "Message from ascotfireworks.org.uk contact form!";
	$headers = "From: ".$mailFrom;
	$headers = "Reply-To: $mailFrom \r\n";


//Constructing and formatting the message to be sent
	if (isset($_POST['contactByPhone_cb'])) {
		$txt = "The following enquiry has been recieved from ".$name.
				".\n\n============\n\n"
				.$message.
				"\n\n============\n\n".
				"Contact ".$name." by?\n\n".
				"Telephone: ".$contactByPhone." - ".$phone."\n".
				"Email: ".$contactByEmail."\n";
	}	else {
		$txt = "The following enquiry has been recieved from ".$name.
				".\n\n============\n\n"
				.$message.
				"\n\n============\n\n".
				"Contact ".$name." by?\n\n".
				"Telephone: ".$contactByPhone."\n".
				"Email: ".$contactByEmail."\n";
	}


//mail() function to send the email
	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact.html?messagesent");

?>