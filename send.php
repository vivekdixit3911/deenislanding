<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $inquiry_type = htmlspecialchars($_POST['inquiry_type']);
    $message = htmlspecialchars($_POST['message']);

    if (!$email) {
        die("Invalid email address.");
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mail.deenislawchamberandservices.com';  // Updated SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'deenis@deenislawchamberandservices.com';  // Your email
        $mail->Password = 'Deenis@2024';  // Your email password (Replace with actual password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;  // Correct port for SMTPS

        $mail->setFrom('deenis@deenislawchamberandservices.com', 'Deenis Law Chamber');
        $mail->addAddress('Deenis.group2000@gmail.com', 'Deenis Law Chamber');

        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $full_name";
        $mail->Body = "<strong>Name:</strong> $full_name<br>
                       <strong>Email:</strong> $email<br>
                       <strong>Phone:</strong> $phone_number<br>
                       <strong>Inquiry Type:</strong> $inquiry_type<br>
                       <strong>Message:</strong> $message";

        $mail->send();
        echo "We have received your message. We will reply shortly.";
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        echo "Message could not be sent. Please try again later.";
    }
} else {
    echo "No POST request received.";
}
?>
