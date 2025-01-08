<?php 
    include("../utils/connect.php");
    $id = $_GET['id'];
    $sql = "Delete from Product where Product_Id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    header("Location: ../view/Product.php");
    exit();
?>