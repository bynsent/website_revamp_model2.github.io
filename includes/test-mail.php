<?php
$to = "your-email@example.com"; // Replace with your email
$subject = "Test Email from PHP";
$message = "This is a test email to check if the PHP mail() function works.";
$headers = "From: no-reply@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully!";
} else {
    echo "Mail failed. Check your server settings.";
}
?>
