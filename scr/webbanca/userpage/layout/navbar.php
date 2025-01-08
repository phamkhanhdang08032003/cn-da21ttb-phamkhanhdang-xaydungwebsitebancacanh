<?php
require_once('../utlils/connectDB.php');
session_start();
?>



<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#" style="color: white;">KeyDiii </a>
    <div class="container">
        <!-- <img src="../img/logo.jpg" style="width:130px; margin-top: 2px;"> -->
        <li class="nav-item nav-link" style="padding: 0 5px; white-space: nowrap;"></li>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item  nav-link">
                    <a class="menu" aria-current="page" href="TrangChu.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item  nav-link">
                    <a class="menu" aria-current="page" href="Gioithieu.php">GIỚI THIỆU</a>
                </li>
                <li class="nav-item dropdown nav-link">
                    <a class="menu" href="DanhMuc.php">DANH MỤC SẢN PHẨM</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" aria-current="page" href="Tintuc.php">KIẾN THỨC THỦY SINH </a>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" aria-current="page" href="tieucanh.php">TIỂU CẢNH </a>
                </li>
                <li class="nav-item nav-link">
                    <a class="menu" aria-current="page" href="Lienhe.php">LIÊN HỆ</a>
                </li>

                <li class="nav-item nav-link">

                    <?php
                    if (isset($_SESSION['customer_id'])) {
                        // Truy vấn để lấy đơn đặt hàng với state = 1
                        $sql = "SELECT * FROM order_tbl WHERE state = 1 AND customer_id = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([$_SESSION['customer_id']]);
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);

                        // Truy vấn để lấy tất cả đơn đặt hàng với state = 0
                        $sql = "SELECT * FROM order_tbl WHERE state = 0 AND customer_id = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([$_SESSION['customer_id']]);
                        $newData = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if ($data) {
                            // Sử dụng Order_Id của đơn đặt hàng có state = 1
                            $order_id = $data['Order_Id'];
                            echo "<a class='menu' href='../view/GioHang.php?id={$order_id}'>GIỎ HÀNG</a>";
                        } else if (!empty($newData)) {
                            // Lấy Order_Id của đơn đặt hàng cuối cùng có state = 0
                            $lastOrderId = end($newData)['Order_Id'];
                            echo "<a class='menu' href='../view/GioHang.php?id={$lastOrderId}'>GIỎ HÀNG</a>";
                        } else {
                            echo "<div>Giỏ hàng trống</div>";
                        }
                    } else {
                        echo "";
                    }
                    ?>


                    <!-- 3 trang thai, khi chua dang nhap, khi dang nhap chua dat hang va dat hang -->
                </li>
                <li class="nav-item nav-link ">

                </li>
            </ul>
            <a class="menu" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php

            if (isset($_SESSION['name']) || isset($_SESSION['customer_id'])) {
                echo "Xin chào, " . $_SESSION['name'] . "! 
      <br>
      <li class='nav-item nav-link' >                                              
          <a class='menu' href='../../../webbanca/adminpage/ElaAdmin/controller/LogoutController.php'>ĐĂNG XUẤT</a>
      </div>
      </li>";
            } else {
                echo "<a class='menu' href='../../../webbanca/adminpage/ElaAdmin/view/login.php'>ĐĂNG NHẬP</a>";
            }
            ?></a>
        </div>
    </div>
</nav>