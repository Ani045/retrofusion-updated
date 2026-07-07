<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Prevent command line access or web browser access to this file if it's hit via HTTP
if (php_sapi_name() !== 'cli') {
    header("Location: index.php");
    exit();
}

// Set script timeout to 5 minutes
set_time_limit(300);

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Get JSON filename from CLI args
$json_file = isset($argv[1]) ? $argv[1] : '';
if (empty($json_file)) {
    exit("No file specified");
}

$file_path = __DIR__ . '/leads_queue/' . basename($json_file);
if (!file_exists($file_path)) {
    exit("File not found");
}

// Load lead details
$json_data = file_get_contents($file_path);
$lead = json_decode($json_data, true);
if (!$lead) {
    exit("Invalid JSON");
}

$name = $lead['name'] ?? 'Not Provided';
$email = $lead['email'] ?? 'Not Provided';
$phone = $lead['phone'] ?? 'Not Provided';
$guests = $lead['guests'] ?? 'Not Provided';
$checkIn = $lead['checkIn'] ?? 'Not Provided';
$checkOut = $lead['checkOut'] ?? 'Not Provided';
$villa = $lead['villa'] ?? 'Not Provided';
$message = $lead['message'] ?? 'Not Provided';
$page_url = $lead['page_url'] ?? 'Unknown Source URL';
$whatsapp_link = $lead['whatsapp_link'] ?? 'Not Provided';

// Prepare email message body
$body = "";
$body .= '<h4>New Lead Retrofusion Website</h4>';
$body .= '<h5>Client Details:</h5>';
$body .= 'Name: ' . $name . "<br>";
$body .= 'Phone Number: ' . $phone . "<br>";
$body .= 'WhatsApp Link: <a href="' . $whatsapp_link . '">' . $whatsapp_link . "</a><br>";
$body .= 'Email: ' . $email . "<br>";
$body .= 'Guests: ' . $guests . "<br>";
$body .= 'Check-in: ' . $checkIn . "<br>";
$body .= 'Check-out: ' . $checkOut . "<br>";
$body .= 'Villa: ' . $villa . "<br>";
$body .= 'Source Page URL: <a href="' . $page_url . '">' . $page_url . "</a><br>";
$body .= 'Message: ' . $message . "<br>";

// Google Sheets Webhook Integration
$webhook_url = "https://script.google.com/macros/s/AKfycbzAcxEVuQ8n4eVPbetWdb1OvU4YxnVW6-Pn-udCwPnpY0jGsvvXIlNvle-ylYl5-PXLig/exec";

if (!empty($webhook_url)) {
    $webhook_data = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'service' => "Villa: " . $villa . " | Guests: " . $guests . " | Dates: " . $checkIn . " to " . $checkOut,
        'message' => $message . "\n\nWhatsApp: " . $whatsapp_link . "\nPage URL: " . $page_url,
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
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    curl_close($ch);
}

// PHPMailer SMTP Dispatcher
try {
    $mail = new PHPMailer(true);
    
    // SMTP Settings
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@retrofusion.in';
    $mail->Password = '#tORTx2j30';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Timeout = 15;

    // Email Settings
    $mail->setFrom('contact@retrofusion.in', $name);
    $mail->addAddress('satyamrai374@gmail.com', 'New Lead');
    $mail->addAddress('jitendrarora@gmail.com', 'New Lead');

    $mail->Subject = 'New Lead Retrofustion Website';
    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    $mail->send();
}
catch (Exception $e) {
    error_log("PHPMailer Error: " . $mail->ErrorInfo);
}

// Delete the JSON file after successful execution
unlink($file_path);
?>
