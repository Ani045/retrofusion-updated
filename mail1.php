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

$page_url = $_SERVER['HTTP_REFERER'] ?? 'Unknown Source URL';

// Generate clean WhatsApp link
$raw_phone = $_POST['phone'] ?? '';
$clean_phone = preg_replace('/[^0-9]/', '', $raw_phone);
if (strlen($clean_phone) === 10) {
    $whatsapp_phone = '91' . $clean_phone;
} else {
    $whatsapp_phone = $clean_phone;
}
$whatsapp_link = !empty($whatsapp_phone) ? 'https://wa.me/' . $whatsapp_phone : 'Not Provided';

$body = "";
$body .= '<h4>New Lead Retrofusion Website</h4>';
$body .= '<h5>Client Details:</h5>';
$body .= 'Name: ' . $_POST['name'] . "<br>";
$body .= 'Phone Number: ' . $_POST['phone'] . "<br>";
$body .= 'WhatsApp Link: <a href="' . $whatsapp_link . '">' . $whatsapp_link . "</a><br>";
$body .= 'Email: ' . $_POST['email'] . "<br>";
$body .= 'Guests: ' . $_POST['guests'] . "<br>";
$body .= 'Check-in: ' . $_POST['checkIn'] . "<br>";
$body .= 'Check-out: ' . $_POST['checkOut'] . "<br>";
$body .= 'Villa: ' . $_POST['villa'] . "<br>";
$body .= 'Source Page URL: <a href="' . $page_url . '">' . $page_url . "</a><br>";
$body .= 'Message: ' . $_POST['message'] . "<br>";

// Google Sheets Webhook Integration
$webhook_url = "https://script.google.com/macros/s/AKfycbzAcxEVuQ8n4eVPbetWdb1OvU4YxnVW6-Pn-udCwPnpY0jGsvvXIlNvle-ylYl5-PXLig/exec";

if (!empty($webhook_url)) {
    $webhook_data = [
        'name' => $_POST['name'] ?? 'Not Provided',
        'phone' => $_POST['phone'] ?? 'Not Provided',
        'email' => $_POST['email'] ?? 'Not Provided',
        'service' => "Villa: " . ($_POST['villa'] ?? 'Any') . " | Guests: " . ($_POST['guests'] ?? 'Any') . " | Dates: " . ($_POST['checkIn'] ?? 'N/A') . " to " . ($_POST['checkOut'] ?? 'N/A'),
        'message' => ($_POST['message'] ?? 'Not Provided') . "\n\nWhatsApp: " . $whatsapp_link . "\nPage URL: " . $page_url,
        'source' => 'Website Form: ' . $page_url,
        'whatsapp' => $whatsapp_link,
        'page_url' => $page_url
    ];
    
    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($webhook_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_exec($ch);
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