<?php
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic logging for debug
    $log_source = isset($_POST['source']) ? $_POST['source'] : 'Unknown';
    file_put_contents('lead_log.txt', date('[Y-m-d H:i:s] ') . "Form submitted from source: " . $log_source . "\n", FILE_APPEND);


    // Collect and sanitize input data
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : 'Not provided';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : 'Not provided';
    $phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : 'Not provided';
    $guests = isset($_POST['guests']) ? strip_tags(trim($_POST['guests'])) : 'Not provided';
    $checkIn = isset($_POST['checkIn']) ? strip_tags(trim($_POST['checkIn'])) : 'Not provided';
    $checkOut = isset($_POST['checkOut']) ? strip_tags(trim($_POST['checkOut'])) : 'Not provided';
    $villa = isset($_POST['villa']) ? strip_tags(trim($_POST['villa'])) : 'Not provided';
    $message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : 'Not provided';
    $source = isset($_POST['source']) ? strip_tags(trim($_POST['source'])) : 'Website Form';

    // Recipients
    $to = "satyamrai374@gmail.com, contact@retrofusion.in, retrofusion2023@gmail.com";
    
    // Subject
    $subject = "New Lead from Website";
    
    // Email Content
    $email_content = "
    <html>
    <head>
        <title>New Lead from Website</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
            .header { background-color: #0F2A24; color: white; padding: 10px; text-align: center; border-radius: 10px 10px 0 0; }
            .content { padding: 20px; }
            .field { margin-bottom: 10px; border-bottom: 1px solid #eee; padding-bottom: 5px; }
            .label { font-weight: bold; color: #amber-600; width: 150px; display: inline-block; }
            .footer { font-size: 12px; color: #777; margin-top: 20px; text-align: center; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Website Lead</h2>
            </div>
            <div class='content'>
                <p>Hello, you have a new lead from <strong>$source</strong>:</p>
                <div class='field'><span class='label'>Name:</span> $name</div>
                <div class='field'><span class='label'>Email:</span> $email</div>
                <div class='field'><span class='label'>Phone:</span> $phone</div>
                <div class='field'><span class='label'>Guests:</span> $guests</div>
                <div class='field'><span class='label'>Check-in:</span> $checkIn</div>
                <div class='field'><span class='label'>Check-out:</span> $checkOut</div>
                <div class='field'><span class='label'>Villa:</span> $villa</div>
                <div class='field'><span class='label'>Message:</span> $message</div>
            </div>
            <div class='footer'>
                This email was sent from the Retrofusion website lead handler.
            </div>
        </div>
    </body>
    </html>
    ";

    // Headers
    $from_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'retrofusion.in';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Retrofusion Website <noreply@$from_host>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";


    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank you page
        header("Location: thank-you.php?status=success");
        exit();
    } else {
        // Redirect with error
        header("Location: contact.php?status=error");
        exit();
    }
} else {
    // Not a POST request
    header("Location: index.php");
    exit();
}
