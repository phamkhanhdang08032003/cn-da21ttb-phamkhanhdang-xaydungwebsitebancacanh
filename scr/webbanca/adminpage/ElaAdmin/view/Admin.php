<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include('layouts/libraryAdmin.php') ?>
    <?php session_start();
        if (!isset($_SESSION['admin'])) {
            header("Location: login.php");
            exit();
        }
    ?>
</head>

<body>
    <!-- Left Panel -->
    <?php include('layouts/menuAdmin.php') ?>
    <!-- Left Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include('layouts/headerAdmin.php') ?>
        <!-- Header-->
        <div class="jumbotron" style="background-color: transparent;">
            <h1 class="display-4">Quản lý Cửa Hàng</h1>
            <p class="lead"></p>
            <hr class="my-4">
            <p>Các chức năng</p>
            <a class="btn btn-success btn-lg" href="./Users.php" role="button">Quản lý khách hàng</a>
            <a class="btn btn-success btn-lg" href="./Category.php" role="button">Quản lý danh mục sản phẩm</a>
            <a class="btn btn-success btn-lg" href="./Product.php" role="button">Quản lý sản phẩm</a>
        </div>
        <div style="height: 230px"></div>
        <?php include('layouts/footerAdmin.php') ?>
    </div>
</body>

</html>