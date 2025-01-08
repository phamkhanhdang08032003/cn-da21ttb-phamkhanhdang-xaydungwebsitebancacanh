<?php
session_start();
if (isset($_SESSION['otpSend'])) {
    $otpReceived = $_SESSION['otpSend'];
    $otpInput = isset($_POST['otp']) ? $_POST['otp'] : '';
    if ($otpReceived == $otpInput) {
        header("Location: ../view/Repass.php");
    } else {
        echo '<script>
        alert("Sai OTP, vui lòng nhập lại");
        window.location.replace("../view/GetOTP.php");
        </script>';
    }
    unset($_SESSION['otp']);
} else {
    echo "Something went wrong, sai roi";
}
?>