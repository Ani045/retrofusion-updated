<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';


$mail = new PHPMailer(true);


$body = "";
$body .= '<h4>New Lead Retrofustion Website</h4>';
$body .= '<h5>Client Details:</h5>';
$body .= 'Name: ' . $_POST['name'] . "<br>";
$body .= 'Phone Number: ' . $_POST['phone'] . "<br>";
$body .= 'Email: ' . $_POST['email'] . "<br>";
$body .= 'Guests: ' . $_POST['guests'] . "<br>";
$body .= 'Check-in: ' . $_POST['checkIn'] . "<br>";
$body .= 'Check-out: ' . $_POST['checkOut'] . "<br>";
$body .= 'Villa: ' . $_POST['villa'] . "<br>";
$body .= 'Message: ' . $_POST['message'] . "<br>";


try {
    // SMTP Settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@retrofusion.in';
    $mail->Password = '#tORTx2j30';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Email Settings
    $mail->setFrom('contact@retrofusion.in', $_POST['name']);
    $mail->addAddress('satyamrai374@gmail.com', 'New Lead');
    $mail->addAddress('raisatyam9651@gmail.com', 'New Lead');
    $mail->addAddress('contact@retrofusion.in', 'New Lead');
    $mail->addAddress('retrofusion2023@gmail.com', 'New Lead');
    $mail->addAddress('jitendrarora@gmail.com', 'New Lead');
    $mail->addAddress('satyamraiseox@gmail.com', 'New Lead');

    $mail->Subject = 'New Lead Retrofustion Website';
    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    $mail->send();
    echo "<script> window.location.href = 'thank-you.php'; </script>";
}
catch (Exception $e) {
    echo "<script>
        alert('Something went wrong, Please try again later');
        window.location.href = 'https://retrofusion.in';
    </script>";
}



?>