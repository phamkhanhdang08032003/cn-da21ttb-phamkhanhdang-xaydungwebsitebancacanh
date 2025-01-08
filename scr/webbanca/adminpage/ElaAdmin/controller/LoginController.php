<?php
include("../utils/connect.php");

function HashPass($value)
{
    $value = password_hash($value, PASSWORD_BCRYPT);
    return $value;
}
$email = isset($_POST['email']) ? $_POST['email'] : "";
$sql = "SELECT Customer_Id, Last_Name ,Customer_Email ,password from Customer WHERE Customer_Email = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$takeOrderId = "SELECT * FROM Order_tbl where Customer_Id = ?";
$stm = $pdo->prepare($takeOrderId);
$stm->execute([$user['Customer_Id']]);
$order_id = $stm->fetch(PDO::FETCH_ASSOC);  


if ($user && password_verify($_POST['password'], $user['password'])) {
    session_start();
    $_SESSION['name'] = $user['Last_Name'];
    $_SESSION['customer_id'] = $user['Customer_Id'];
    $sqlCheck = "Select Count(*) from Order_tbl where Customer_Id = ?";
    $check = $pdo->prepare($sqlCheck);
    $check->execute([$user['Customer_Id']]);
    $rowCount = $check->fetchColumn();
    if ($rowCount > 0) {
        header("Location: ../../../userpage/view/TrangChu.php");
        $_SESSION['order_id'] = $order_id['Order_Id'];
        exit();
    } else {
        $sql = "INSERT INTO Order_tbl (Order_Total, Customer_Id, State) values(?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([0, $user['Customer_Id'], 1]);

        $sql = "SELECT * FROM Order_tbl where Customer_Id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user['Customer_Id']]);
        $newData = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['order_id'] = $newData['Order_Id'];
        header("Location: ../../../userpage/view/TrangChu.php");
        exit();
    }
} else if ($email == "admin@admin.com" && $_POST['password'] == "admin") {
    session_start();
    $_SESSION['admin'] = "admin";
    header("Location: ../view/Admin.php");
} else {
    echo '<script>
    alert("Sai thông tin đăng nhập, vui lòng nhập đúng hoặc tạo tài khoản mới");
    window.location.replace("../view/Login.php");
    </script>';
    exit;
}
