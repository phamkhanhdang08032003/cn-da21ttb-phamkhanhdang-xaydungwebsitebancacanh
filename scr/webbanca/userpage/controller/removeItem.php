<?php 
include("../../adminpage/ElaAdmin/utils/connect.php");
$item_id = $_GET['item_id'];
$order_id = $_GET['order_id'];
$sql = "DELETE FROM cart where cart_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$item_id]);
header("Location: ../view/GioHang.php?id=" . $order_id);
exit();
?>