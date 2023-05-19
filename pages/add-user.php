<?php
require_once('../includes/db.php');
require_once('../includes/header.php');

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

// Insert the user into the database
$stmt = $pdo->prepare('INSERT INTO users (name, email, mobile) VALUES (?, ?, ?)');
$stmt->execute([$name, $email, $mobile]);

// Send verification email
$verification_code = md5(uniqid());
$stmt = $pdo->prepare('UPDATE users SET verification_code = ? WHERE email = ?');
$stmt->execute([$verification_code, $email]);

// $subject = 'Verify your email address';
// $message = 'Please click the following';
$to = $email;
$subject = 'Verify your email address';
$message = 'Please click the following link to verify your email address: http://example.com/verify.php?email=' . urlencode($email) . '&code=' . urlencode($verification_code);
$headers = 'From: meharitesfaye93@gmail.com' . "\r\n" .
           'Reply-To: meharithegreat@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
