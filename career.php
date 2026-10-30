<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// --- Collect Form Data ---
$name      = trim($_POST['name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$position  = trim($_POST['position'] ?? '');
$message   = trim($_POST['message'] ?? '');

// --- Basic Validation ---
if (empty($name) || empty($email) || empty($phone) || empty($position) || empty($message)) {
    die('All fields are required.<br><a href="javascript:history.back()">Go Back</a>');
}

// --- File Upload Handling ---
$uploadDir = 'upload/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true); // create folder if not exists
}

if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['resume']['tmp_name'];
    $fileName = basename($_FILES['resume']['name']);
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $allowedExt = ['pdf', 'doc', 'docx'];

    if (!in_array($fileExt, $allowedExt)) {
        die('Invalid file type. Only PDF, DOC, and DOCX are allowed.');
    }

    // Unique file name to prevent overwrite
    $newFileName = time() . '_' . preg_replace("/[^a-zA-Z0-9._-]/", "_", $fileName);
    $destPath = $uploadDir . $newFileName;

    if (!move_uploaded_file($fileTmpPath, $destPath)) {
        die('Error uploading file. Please try again.');
    }

    // Download link
    $resumeLink = "https://www.globepump.com/$destPath";
} else {
    die('Please upload your resume file.');
}

// --- Send Mail Using PHPMailer ---
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@globepump.com';  // your SMTP email
    $mail->Password   = 'S8vr2l[3';             // your SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Sender and Recipients
    $mail->setFrom('info@globepump.com', 'Career Application - Globe Pump');
    $mail->addAddress('hr@globeseal.com');
    $mail->addBCC('info@globepump.com');
    $mail->addReplyTo($email, $name);

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = "New Career Application from $name";
    $mail->Body = "
        <h2>Career Application Details</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Position Applied For:</strong> $position</p>
        <p><strong>Message:</strong><br>$message</p>
        <p><strong>Resume Download:</strong> <a href='$resumeLink' target='_blank'>Click to Download</a></p>
    ";

    // Optionally attach the file too
    $mail->addAttachment($destPath);

    // Send Email
    $mail->send();
    header("Location: thank-you.php");
    exit;
} catch (Exception $e) {
    echo "Error: Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
