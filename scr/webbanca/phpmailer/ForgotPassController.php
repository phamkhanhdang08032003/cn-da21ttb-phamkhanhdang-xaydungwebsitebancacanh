<?php
include("../utils/connect.php");
$email = isset($_POST['email']) ? $_POST['email'] : "";
$sqlCheck = "Select Count(*) from Customer where Customer_Email = ?";
$check = $pdo->prepare($sqlCheck);
$check->execute([$email]);
$rowCount = $check->fetchColumn();
if ($rowCount > 0) {
    $otp = rand(100000, 999999);
    ini_set('SMTP', 'server.com');
    ini_set('smtp_port', '25');
    ini_set('sendmail_from', 'email@domain.com');
  
    $recipientEmail = 'recipient@example.com';


    $subject = 'Your OTP Code';

    $message = "Your OTP code is: $otp";

    
    $senderEmail = 'your_email@example.com';

    
    $headers = 'From: ' . $senderEmail . "\r\n" .
        'Reply-To: ' . $senderEmail . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $mailSent = mail($email, $subject, $message, $headers);

    if ($mailSent) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Check your server configuration.';
    }
} else {
    echo "Không tồn tại";
}
