<?php
session_start();

// Redirect GET requests immediately
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

// CAPTCHA Validation
if (!isset($_POST['captcha']) || (int)$_POST['captcha'] !== (int)$_SESSION['captcha_answer']) {
    echo "<script>
        alert('Verification failed. Please try again.');
        window.history.back();
    </script>";
    exit();
}

// Extract variables
$name = $_POST['name'] ?? 'Not Provided';
$email = $_POST['email'] ?? 'Not Provided';
$phone = $_POST['phone'] ?? 'Not Provided';
$guests = $_POST['guests'] ?? 'Not Provided';
$checkIn = $_POST['checkIn'] ?? 'Not Provided';
$checkOut = $_POST['checkOut'] ?? 'Not Provided';
$villa = $_POST['villa'] ?? 'Not Provided';
$message = $_POST['message'] ?? 'Not Provided';
$page_url = $_SERVER['HTTP_REFERER'] ?? 'Unknown Source URL';

// Generate clean WhatsApp link
$clean_phone = preg_replace('/[^0-9]/', '', $phone);
if (strlen($clean_phone) === 10) {
    $whatsapp_phone = '91' . $clean_phone;
} else {
    $whatsapp_phone = $clean_phone;
}
$whatsapp_link = !empty($whatsapp_phone) ? 'https://wa.me/' . $whatsapp_phone : 'Not Provided';

// Prepare payload data
$payload = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'guests' => $guests,
    'checkIn' => $checkIn,
    'checkOut' => $checkOut,
    'villa' => $villa,
    'message' => $message,
    'page_url' => $page_url,
    'whatsapp_link' => $whatsapp_link
];

// Ensure leads queue directory exists
$dir_path = __DIR__ . '/leads_queue';
if (!is_dir($dir_path)) {
    mkdir($dir_path, 0755, true);
}

// Write payload to JSON file
$filename = 'lead_' . microtime(true) . '_' . rand(1000, 9999) . '.json';
$file_path = $dir_path . '/' . $filename;
file_put_contents($file_path, json_encode($payload));

// Spawn background worker process
// If exec is enabled, we trigger background_worker.php asynchronously.
// Otherwise, we fall back to synchronous execution.
$spawning_success = false;
if (function_exists('exec')) {
    // Run the php command in background: redirections (> /dev/null 2>&1 &) make it non-blocking
    $cmd = "php " . escapeshellarg(__DIR__ . '/background_worker.php') . " " . escapeshellarg($filename) . " > /dev/null 2>&1 &";
    exec($cmd);
    $spawning_success = true;
}

if ($spawning_success) {
    // Redirect the browser instantly
    header("Location: thank-you.php");
    exit();
}

// FALLBACK: Synchronous execution if exec() is disabled on the hosting server
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

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
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
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
    $mail->Timeout = 10;

    // Email Settings
    $mail->setFrom('contact@retrofusion.in', $name);
    $mail->addAddress('satyamrai374@gmail.com', 'New Lead');
    $mail->addAddress('jitendrarora@gmail.com', 'New Lead');

    $mail->Subject = 'New Lead Retrofustion Website';
    
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
    
    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    $mail->send();
}
catch (Exception $e) {
    error_log("PHPMailer Error: " . $mail->ErrorInfo);
}

// Clean up local json file since we processed it synchronously
if (file_exists($file_path)) {
    unlink($file_path);
}

header("Location: thank-you.php");
exit();
?>