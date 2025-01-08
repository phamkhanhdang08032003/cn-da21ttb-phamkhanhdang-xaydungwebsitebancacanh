<?php
include("../model/Category.php");
include("../utils/connect.php");
$categoryName = isset($_POST['categoryName']) ? $_POST['categoryName'] : '';
$categoryImage = isset($_FILES['categoryImage']['name']) ? $_FILES['categoryImage']['name'] : '';
$categoryDesc = isset($_POST['categoryDesc']) ? $_POST['categoryDesc'] : '';
$category = new Category($categoryName, $categoryImage, $categoryDesc);

if (isset($_FILES["categoryImage"])) {
    $uploadDir = "../upload/";
    $uploadFile = $uploadDir . basename($_FILES["categoryImage"]["name"]);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        if (move_uploaded_file($_FILES["categoryImage"]["tmp_name"], $uploadFile)) {
            $sql = "INSERT INTO Category (Category_Name, Category_Image, Category_Description) 
            VALUES ( ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            if ($stmt->execute([$category->getCategoryName(), $category->getCategoryImage(), $category->getCategoryDescription()])) {
                echo '<script>
                    alert("Thêm danh mục sản phẩm thành công");
                    window.location.replace("../view/Category.php");
                    </script>';
            } else {
                echo "Không thành công";
            }
        }
    } else {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
}
