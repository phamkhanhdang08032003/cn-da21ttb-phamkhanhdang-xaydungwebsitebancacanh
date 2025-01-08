<?php
include("../../adminpage/ElaAdmin/utils/connect.php");
session_start();
$order_id = $_GET['id']; 
$customer_id =  $_SESSION['customer_id'];
$order_total = $_GET['total'];



$sql = "UPDATE order_tbl SET State = ?, Order_Total = ? WHERE Order_id = ?";
$stmt = $pdo->prepare($sql);
if ($stmt->execute([0, $order_total, $order_id])) {
    echo '<script>
        alert("Đặt hàng thành công");
        window.location.replace("../view/TrangChu.php");
        </script>';
    $sql = "INSERT INTO Order_tbl (Order_Total, Customer_Id, State) values(?, ?, ?)";
    $stm = $pdo->prepare($sql);
    $stm->execute([0, $customer_id, 1]);
} else {
    echo "Không đặt hàng đc";
}
