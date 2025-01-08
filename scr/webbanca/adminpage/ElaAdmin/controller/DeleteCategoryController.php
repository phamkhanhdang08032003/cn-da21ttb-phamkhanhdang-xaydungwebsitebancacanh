<?php 
    include("../utils/connect.php");
    $id = $_GET['id'];
    $sql = "Delete from Category where Category_Id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    header("Location: ../view/Category.php");
    exit();
?>