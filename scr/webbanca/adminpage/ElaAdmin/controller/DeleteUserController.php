<?php 
    include("../utils/connect.php");
    $id = $_GET['id'];
    $sql = "Delete from Customer where Customer_ID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    header("Location: ../view/Users.php");
    exit();
?>