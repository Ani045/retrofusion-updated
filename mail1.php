<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

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

// Extract variables for background processing
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

// --- INSTANT USER REDIRECT (BACKGROUND WORKER MODE) ---
// Flush output, redirect browser immediately, then perform heavy cURL & SMTP mailing in background.
$instantRedirectSuccess = false;
if (function_exists('fastcgi_finish_request')) {
    ignore_user_abort(true);
    set_time_limit(180);
    
    // Redirect user to thank-you.php immediately
    header("Location: thank-you.php");
    header("Content-Encoding: none");
    header("Connection: close");
    header("Content-Length: 0");
    
    if (ob_get_level() > 0) {
        ob_end_clean();
    }
    
    fastcgi_finish_request();
    $instantRedirectSuccess = true;
}

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
    $mail->Timeout = 10; // Connect timeout of 10s

    // Email Settings
    $mail->setFrom('contact@retrofusion.in', $name);
    $mail->addAddress('satyamrai374@gmail.com', 'New Lead');
    $mail->addAddress('jitendrarora@gmail.com', 'New Lead');

    $mail->Subject = 'New Lead Retrofustion Website';
    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    $mail->send();
    
    // Fallback redirect if background execution wasn't supported
    if (!$instantRedirectSuccess) {
        echo "<script> window.location.href = 'thank-you.php'; </script>";
    }
}
catch (Exception $e) {
    // Log mailing error to error log
    error_log("PHPMailer Error: " . $mail->ErrorInfo);
    
    // Fallback redirect if background execution wasn't supported
    if (!$instantRedirectSuccess) {
        echo "<script>
            alert('Something went wrong, Please try again later');
            window.location.href = 'https://retrofusion.in';
        </script>";
    }
}
?>