<?php
include("../model/Product.php");
include("../utils/connect.php");
$product = new Product();
$id = $_GET['id'];
$product->setProductName($_POST['productName'] ?? '');
$product->setCategoryId($_POST['category'] ?? '');
$product->setProductDesc($_POST['productDesc'] ?? '');
$product->setProductPrice($_POST['productPrice'] ?? '');
$product->setProductStock($_POST['productStock'] ?? '');
$uploadDir = "../upload/";
for ($i = 1; $i <= 3; $i++) {
    $fieldName = "productImage$i";
    $image = $_FILES[$fieldName]['name'] ?? '';

    $uploadFile = $uploadDir . basename($image);

    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
        if (move_uploaded_file($_FILES[$fieldName]["tmp_name"], $uploadFile)) {
            switch ($i) {
                case 1:
                    $product->setProductFirstImg($uploadFile);
                    break;
                case 2:
                    $product->setProductSecondImg($uploadFile);
                    break;
                case 3:
                    $product->setProductThirdImg($uploadFile);
                    break;
            }
        } else {
            echo "Failed to upload image $i.";
        }
    } else {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed for image $i.";
    }
}
$sql = "Update Product set Product_Name = ?, Product_Desc = ?, Product_FirstImg = ?, Product_SecondImg = ?, Product_ThirdImg = ?, Price = ?, Stock = ?, Category_Id = ? where Product_Id = ?";
             
$stmt = $pdo->prepare($sql);
if ($stmt->execute([$product->getProductName(), 
                    $product->getProductDesc(), 
                    $product->getProductFirstImg(), 
                    $product->getProductSecondImg(), 
                    $product->getProductThirdImg(),
                    $product->getProductPrice(), 
                    $product->getProductStock(),
                    $product->getCategoryId(), $id])) {
    echo '<script>
                     alert("Cập nhật sản phẩm thành công");
                     window.location.replace("../view/Product.php");
                     </script>';
} else {
    echo "Không thành công";
}
