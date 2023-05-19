
### verify-email.php

```php
<?php
require_once('../includes/db.php');
require_once('../includes/header.php');

// Get the email and verification code from the query string
$email = $_GET['email'];
$verification_code = $_GET['code'];

// Verify the email address
$stmt = $pdo->prepare('UPDATE users SET verified = 1 WHERE email = ? AND verification_code = ?');
$stmt->execute([$email, $verification_code]);

if ($stmt->rowCount() > 0) {
    echo '<h1>Email address verified</h1>';
    echo '<p>Thank you for verifying your email address.</p>';
} else {
    echo '<h1>Verification failed</h1>';
    echo '<p>The verification link is invalid. Please try again.</p>';
}

require_once('../includes/footer.php');
