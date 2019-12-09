
<?php
include 'resources/creds.php';
$contact_fullname = $_POST['contact_fullname'];
$contact_phone = $_POST['contact_phone'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];
$mailto = $_POST['mailto'];


require_once 'vendor/autoload.php';

try {
	// prepare email message
	$message = (new Swift_Message())
		->setSubject('Someone contacted through the website')
		->setFrom(['russobrothersHR@gmail.com' => $contact_fullname])
		->setTo([$mailto => 'Russo Brothers Transport Inc'])
		->setBody("Someone just contacted through the website:\r\n\r\nFull Name: $contact_fullname \r\n Phone Number: $contact_phone \r\n Email: $contact_email \r\n Message: $contact_message \r\n\r\n Message from Admin: DO NOT REPLY DIRECTLY TO THIS EMAIL! If you would like to contact this person, use their email provided above.");

		$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
		->setUsername($username)
		->setPassword($password);
		$mailer = new Swift_Mailer($transport);
		$result = $mailer->send($message);
		if ($result) {
			echo "<h3><center>Your message was send. Thank you for reaching out to us!</center></h3>";
		} else {
			echo "There was an error submitting your application. Please call us at (916) 910-4818 or (916) 715-3739";
		}
} catch (Exception $e) {
	echo $e->getMessage();
}


 ?> 


