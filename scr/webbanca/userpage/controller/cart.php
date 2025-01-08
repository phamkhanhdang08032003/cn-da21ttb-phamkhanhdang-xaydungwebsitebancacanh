<?php
// session_start();
include("../../adminpage/ElaAdmin/utils/connect.php");
// include("../model/order.php");

if (isset($_POST['addCart']) && isset($_POST['Customer_Id'])) {
    $product_id = $_POST["Product_Id"];
    $customer_id = $_POST['Customer_Id'];
    $product_quantity = $_POST['Product_quantity'];
    $product_price = $_POST['Product_price'];
    $Subtotal = intval($product_price) * $product_quantity;
    $product_image = $_POST['Product_Image'];
    $product_name = $_POST['Product_Name'];
    $croppedFileName = strstr($product_image, 'Screenshot');
    $order_id = $_POST["Order_Id"];
    $Stock = $_POST['Product_Stock'];
    //     if($product_quantity>$Stock){
//         echo '<script>
//     alert("số lượng không đủ");
//     window.location.replace("../view/ChiTietSP?id=' . $product_id . '");
// </script>';
//     }else{
    $sql = "INSERT INTO cart (Product_Id,Product_Image, Order_Id, Product_Qty, Product_Name, Product_Price, Subtotal) values(?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$product_id, $croppedFileName, $order_id, $product_quantity, $product_name, $product_price, $Subtotal]);
    echo '<script>
    alert("Thêm vào giỏ hàng thành công!!");
        window.location.replace("../view/ChiTietSP.php?id=' . $product_id . '");
      
</script>';
    //}
} else {
    echo '<script>
    alert("Yêu cầu đăng nhập!!!");
    window.location.replace("../../adminpage/ElaAdmin/view/login.php");
</script>';
}

