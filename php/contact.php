<?php

// Allow only POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

// Get and sanitize form data
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$subject = trim($_POST["subject"] ?? "");
$message = trim($_POST["message"] ?? "");

// Validate required fields
if (empty($name) || empty($email) || empty($message)) {
    die("Please fill in all required fields.");
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Please enter a valid email address.");
}

// Prevent email header injection
$name = str_replace(["\r", "\n"], "", $name);
$email = str_replace(["\r", "\n"], "", $email);
$subject = str_replace(["\r", "\n"], "", $subject);

// Your email address
$to = "your@email.com";

// Default subject
if (empty($subject)) {
    $subject = "New Contact Form Message";
}

// Email body
$emailBody = "
You have received a new message from your portfolio website.

Name: $name
Email: $email
Subject: $subject

Message:
$message
";

// Email headers
$headers = "From: Portfolio Website <no-reply@yourdomain.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $emailBody, $headers)) {

    // Redirect after successful submission
    header("Location: thank-you.php");
    exit;

} else {

    echo "Sorry, your message could not be sent. Please try again later.";
}
?>
