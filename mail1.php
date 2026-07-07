<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

session_start();

$mail = new PHPMailer(true);

// CAPTCHA Validation
if (!isset($_POST['captcha']) || (int)$_POST['captcha'] !== (int)$_SESSION['captcha_answer']) {
    echo "<script>
        alert('Verification failed. Please try again.');
        window.history.back();
    </script>";
    exit();
}

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

// Google Sheets Webhook Integration
$webhook_url = "https://script.google.com/macros/s/AKfycbzoIDI6QnK-uVDGzUE62OXGc6abU1GESNVdzN87NoFbsVz0mUoXVD0epfmoFn40fzvvhQ/exec";

if (!empty($webhook_url)) {
    $webhook_data = [
        'name' => $_POST['name'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'email' => $_POST['email'] ?? '',
        'guests' => $_POST['guests'] ?? '',
        'checkIn' => $_POST['checkIn'] ?? '',
        'checkOut' => $_POST['checkOut'] ?? '',
        'villa' => $_POST['villa'] ?? '',
        'message' => $_POST['message'] ?? '',
        'service' => "Villa: " . ($_POST['villa'] ?? 'Any') . " | Guests: " . ($_POST['guests'] ?? 'Any') . " | Dates: " . ($_POST['checkIn'] ?? 'N/A') . " to " . ($_POST['checkOut'] ?? 'N/A'),
        'source' => 'Retrofusion Website Contact Form',
        'timestamp' => date('Y-m-d H:i:s')
    ];

    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($webhook_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
}

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
    $mail->addAddress('jitendrarora@gmail.com', 'New Lead');

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