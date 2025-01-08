<?php
include("../model/Product.php");
include("../utils/connect.php");
$product = new Product();
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
$sqlCheck = "Select Count(*) from product Where  Product_Name = ?";
$check = $pdo->prepare($sqlCheck);
$name=$product->getProductName();
$check->execute([$name]);

$rowCount = $check->fetchColumn();
if ($rowCount > 0) {
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// if($product->getProductName()==$data['Product_Name'])
// {
    echo '<script>
         alert("không thể thêm");
         window.location.replace("../view/Product.php");
     </script>';
}else {
$sql = "INSERT INTO Product (Product_Name, Product_Desc, Product_FirstImg, Product_SecondImg, Product_ThirdImg, Price, Stock, Category_Id)
             VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
if ($stmt->execute([$product->getProductName(), 
                    $product->getProductDesc(), 
                    $product->getProductFirstImg(), 
                    $product->getProductSecondImg(), 
                    $product->getProductThirdImg(),
                    $product->getProductPrice(), 
                    $product->getProductStock(),
                    $product->getCategoryId()])) {
    echo '<script>
                     alert("Thêm sản phẩm thành công");
                     window.location.replace("../view/Product.php");
                     </script>';
} else {
    echo "Không thành công";
}
}