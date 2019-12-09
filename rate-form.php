
<?php

$origin = $_POST['origin'];
$destination = $_POST['destination'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
include 'resources/creds.php';

require_once 'vendor/autoload.php';

try {
	// prepare email message
	$message = (new Swift_Message())
		->setSubject('Urgent! New Rate Request.')
		->setFrom(['russobrothersHR@gmail.com' => 'Rate Request'])
		->setTo(['russodispatch@gmail.com' => 'Russo Brothers Transport Inc'])
		->setBody("Someone just sent a rate request:\r\nOrigin: $origin \r\n Destination: $destination \r\n Full Name: $fullname \r\n Phone: $phone \r\n\r\n  DO NOT REPLY TO THIS EMAIL!");

		$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
		->setUsername($username)
		->setPassword($password);
		$mailer = new Swift_Mailer($transport);
		$result = $mailer->send($message);
		if ($result) {
			echo "<h3><center>Your application was submited. We will get back to you as soon as we review your application.</center></h3>";
		} else {
			echo "There was an error submitting your application. Please call us at (916) 910-4818 or (916) 715-3739";
		}
} catch (Exception $e) {
	echo $e->getMessage();
}


 ?> 


