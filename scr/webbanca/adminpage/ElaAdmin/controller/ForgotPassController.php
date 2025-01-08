<?php
include ("..\phpmailer\src\PHPMailer.php");
require('..\phpmailer\src\Exception.php');
require('..\phpmailer\src\SMTP.php');
// include('../../../phpmailer/srcPHPMailer.php');
// require('../../../phpmailer/srcException.php');
// require('../../../phpmailer/src/SMTP.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("../utils/connect.php");
session_start();
$email = isset($_POST['email']) ? $_POST['email'] : "";
$sqlCheck = "Select Count(*) from Customer where Customer_Email = ?";
$check = $pdo->prepare($sqlCheck);
$check->execute([$email]);
$rowCount = $check->fetchColumn();
if ($rowCount > 0) {
    $otp = rand(100000, 999999);
    $mail = new PHPMailer();
    try {
        // Cấu hình để sử dụng SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'trandinhkhoitvtp@gmail.com';    
        $mail->Password   = 'cahhuvkatoddqdrk';    
        $mail->SMTPSecure = 'tls';               
        $mail->Port       = 587;           

        $mail->setFrom('admin@admin.com', 'Admin');
        $mail->addAddress($email);
        
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8'; 
        $mail->Encoding = 'base64';
        $mail->Subject = 'Từ cửa hàng TĐKfruit';
        $mail->Body    = "Mã OTP của bạn là: $otp \nVui lòng không đưa mã này cho bất kỳ ai";
        $mail->send();
        $_SESSION['otpSend'] = $otp;
        $_SESSION['Email'] = $email;
        header("Location: ../view/GetOTP.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Không tồn tại";
}
