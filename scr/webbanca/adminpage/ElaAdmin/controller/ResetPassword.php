<?php
include("../utils/connect.php");
session_start();
$newPass = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';
$retypeNewPass = isset($_POST['retypeNewPassword']) ? $_POST['retypeNewPassword'] : '';
$email = isset($_SESSION['Email']) ? $_SESSION['Email'] : '';
function HashPass($value)
{
    $value = password_hash($value, PASSWORD_BCRYPT);
    return $value;
}
$hashNewPass = HashPass($newPass);
if ($newPass == $retypeNewPass) {
    $sql = "UPDATE Customer SET Password = ? WHERE Customer_Email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$hashNewPass, $email]);
    echo '<script>
    alert("Cập nhật thành công");
    window.location.replace("../view/Login.php");
    </script>';
    exit;
} else {
    echo '<script>
    alert("Sai mật khẩu, vui lòng nhập đúng!!!");
    window.location.replace("../view/Repass.php");
    </script>';
    exit;
}
