<?php
	if( isset($_POST['message']) ){
		$to_address = "engmiguelarcia@gmail.com";
		$headers 		= "From: engmiguelarcia@gmail.com\r\n";
		$subject 		= "Migue :: This goes in the subject line of the email!";
		$message 		= "This is the body of the email.\n\n";
		$message 		.= "More body: probably a variable.\n";
		mail("$to_address","$subject","$message","$headers");
	}
?>