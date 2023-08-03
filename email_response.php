<?php 
// Set the recipient's email address
// print_r($_POST);
// $order_id = $_REQUEST["order_id"];

// print_r($_REQUEST);
// print_r($_SESSION);
$to = "omdewangan01@gmail.com";

// // Set the subject of the email
$subject = 'Test Email';

// // Set the body of the email
$message = 'This is a test email sent from PHP.';

// // Set additional headers (optional)
$headers = "From: omdewangan1@gmail.com";

// // Send the email
$mailSent = mail($to, $subject, $message, $headers);

// $mailSent = mail($to, $subject, $message);

// // Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email. Please check your server's configuration.";
}

?>