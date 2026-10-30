<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$secret = '6LcTRwksAAAAABwZlEp5p0ZWxIcryVSDDvkKslSt';

// ✅ Verify reCAPTCHA
if (empty($_POST['g-recaptcha-response'])) {
    die('Please click on the reCAPTCHA box.<br><a href="javascript:history.back()">Go Back</a>');
}

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=" . $_POST['g-recaptcha-response']);
$responseData = json_decode($verify);
if (!$responseData->success) {
    die('Captcha verification failed.<br><a href="javascript:history.back()">Go Back</a>');
}

// ✅ Collect form data
$customername = trim($_POST['customername'] ?? '');
$phone        = trim($_POST['phone'] ?? '');
$email        = trim($_POST['email'] ?? '');
$requirement  = trim($_POST['Requirement'] ?? '');

if (empty($customername) || empty($phone) || empty($email) || empty($requirement)) {
    die('All fields are required.<br><a href="javascript:history.back()">Go Back</a>');
}

// ✅ Email setup
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';  // ✅ use your domain’s mail server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@globepump.com';  // ✅ your domain email
    $mail->Password   = 'S8vr2l[3'; // ✅ your domain email password
    $mail->SMTPSecure = 'ssl';                 // or 'tls' if port 587
    $mail->Port       = 465;                   // 465 for SSL, 587 for TLS

    // Recipients
	$mail->setFrom('info@globepump.com', 'Website Enquiry');
    //$mail->setFrom('info@globepump.com', 'Website Enquiry');
    $mail->addAddress('inquiry@globeseal.com');
    $mail->addBCC('info@globepump.com');
	$mail->addBCC('info@globepump.com');
    $mail->addReplyTo($email, $customername);

    // Content
    $mail->isHTML(false);
    $mail->Subject = "***Customer Enquiry www.globepump.com***";
    $mail->Body    = "
Customer Name: $customername
Phone Number: $phone
E-Mail ID: $email
Requirement: $requirement
";

    // Send mail
    $mail->send();
    header("Location: thank-you.php");
    exit;

} catch (Exception $e) {
    echo "Error: Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
