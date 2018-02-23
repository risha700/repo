<?php
require('./vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;

/**
 * This example shows how to handle a simple contact form.
 */
$msg = '';

//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');



    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
	$mail->isSMTP();                            // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                     // Enable SMTP authentication
	$mail->Username = 'rscode777@gmail.com';          // SMTP username
	$mail->Password = 'xxx'; // SMTP password
	$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;         
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('contact@resume.me', 'Resume Viewer');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('ahboxmail@gmail.com', 'Ahmed Shehab');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'ahmed-Resume Contact';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body

        $mail->Body = <<<EOT
Name: {$_POST['name']}
Email: {$_POST['email']}
phone: {$_POST['phone']}
Message: {$_POST['message']}
EOT;






        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = '<div class="alert alert-danger">Sorry, something went wrong. Please try again later.</div>';
        } else {
            $msg = '<div class="alert alert-success">Message sent! Thanks for contacting us.</div>';
        }
    } else {
        $msg = '<div class="alert alert-danger">Invalid email address, message ignored.</div>';
    }
}

