<?php
include("../model/Customer.php");
include("../utils/connect.php");
function HashPass($value)
{
    $value = password_hash($value, PASSWORD_BCRYPT);
    return $value;
}
$customer = new Customer();

$customer->setFirstName(isset($_POST["FirstName"]) ? $_POST["FirstName"] : "");
$customer->setLastName(isset($_POST["LastName"]) ? $_POST["LastName"] : "");
$customer->setCustomerEmail(isset($_POST["Email"]) ? $_POST["Email"] : "");
$customer->setPassword(HashPass(isset($_POST["Password"]) ? $_POST["Password"] : ""));
$customer->setAddress(isset($_POST["Address"]) ? $_POST["Address"] : "");
$customer->setPostCode(intval(isset($_POST["Postcode"]) ? $_POST["Postcode"] : 0));
$customer->setCity(isset($_POST["City"]) ? $_POST["City"] : "");
$customer->setPhone(isset($_POST["Phone"]) ? $_POST["Phone"] : "");
$sql = "INSERT INTO customer (Customer_Email, First_Name, Last_Name, Password, Address, Postcode, City, Phone) 
        VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

$checkEmail = $customer->getCustomerEmail();
$sqlCheck = "Select Count(*) from Customer where Customer_Email = ?";
$check = $pdo->prepare($sqlCheck);
$check->execute([$checkEmail]);
$rowCount = $check->fetchColumn();
if ($rowCount > 0) {
    echo '<script>
    alert("Đã tồn tại Email này, hãy sử dụng một email khác");
    window.location.replace("../view/Login.php");
    </script>';
    exit;
} else if ($stmt->execute([$customer->getCustomerEmail(), $customer->getFirstName(), $customer->getLastName(), $customer->getPassword(), $customer->getAddress(),  $customer->getPostcode(), $customer->getCity(), $customer->getPhone()])) {
    header("Location: ../view/Admin.php");
} else {
    echo "Error";
}
