<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Google reCAPTCHA Secret Key
    $secret = '6LcPCQgsAAAAAPAGvx23LQg2mcVtpBS9e52QcdJr';

    // Verify reCAPTCHA response
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($verifyURL . '?secret=' . $secret . '&response=' . $recaptchaResponse);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo "<h3 style='color:red;'>reCAPTCHA verification failed. Please go back and try again.</h3>";
        exit;
    }

    // Receiver email addresses
    $to = "inquiry@globeseal.com";
    $bcc = "info@globepump.com";

    // Email subject
    $subject = "***Customer Enquiry (Popup Form) www.globepump.com***";

    // Collecting form data
    $name = trim($_POST['customername']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $requirement = trim($_POST['Requirement']);

    // Compose email message
    $message = "
    <html>
    <head>
      <title>Customer Enquiry - Popup Form</title>
    </head>
    <body>
      <h2>New Enquiry from Popup Form</h2>
      <table border='1' cellspacing='0' cellpadding='8'>
        <tr><td><strong>Name:</strong></td><td>{$name}</td></tr>
        <tr><td><strong>Phone:</strong></td><td>{$phone}</td></tr>
        <tr><td><strong>Email:</strong></td><td>{$email}</td></tr>
        <tr><td><strong>Requirement:</strong></td><td>{$requirement}</td></tr>
      </table>
      <p>Submitted from: <a href='https://www.globepump.com'>www.globepump.com</a></p>
    </body>
    </html>
    ";

    // Email headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: {$name} <{$email}>" . "\r\n";
    $headers .= "Bcc: {$bcc}" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: thank-you.php");
        exit();
    } else {
        echo "<h3>Sorry! Something went wrong. Please try again later.</h3>";
    }
} else {
    echo "Invalid request method.";
}
