<?php
ini_set('display_errors',"1");
if(!$_POST) exit;

// Email address verification, do not edit.


if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$email    = $_POST['email'];
$comments = $_POST['comments'];
$subject  = $_POST['subject'];



// Configuration option.
// Enter the email address that you want to emails to be sent to.


//$address = "example@example.net";
$address = "hard.deev13@gmail.com";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by ."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'You have been contacted by ' . $name . ' ->Detail Subject: ' . $subject . ' .';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "You have been contacted by $name. Their additional message is as follows." . PHP_EOL . PHP_EOL;
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $name via email, $email";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
mail($address, $e_subject, $msg, $headers);
echo "<fieldset id='success_page'>";
	echo "<div>";
	echo "<h2>Email Sent Successfully</h2>";
	echo "<p>Thank you <strong>$name</strong>, your message has been submitted.</p>";
	echo "</div>";
	echo "</fieldset>";

