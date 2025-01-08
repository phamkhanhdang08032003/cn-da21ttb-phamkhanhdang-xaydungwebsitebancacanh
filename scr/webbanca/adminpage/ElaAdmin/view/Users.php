<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <?php session_start(); ?>
    <?php include('layouts/libraryAdmin.php') ?>
</head>

<body>
    <!-- Left Panel -->
    <?php include('layouts/menuAdmin.php') ?>
    <!-- Left Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include('layouts/headerAdmin.php') ?>
        <!-- Header-->
        <!-- Get Data -->
        <?php include("../utils/connect.php");
        $stm = $pdo->query('select Customer_Id, Customer_Email, First_Name, Last_Name, Address, Postcode, City, Phone from customer');
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- End Get Data -->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách người dùng</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>FULLNAME</th>
                                            <th>EMAIL</th>
                                            <th>ADDRESS</th>
                                            <th>POSTCODE</th>
                                            <th>CITY</th>
                                            <th>PHONE</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data as $user) {
                                        ?>
                                            <tr>
                                                <td> <span class="name"><?php echo $user['First_Name'] . " " . $user['Last_Name'] ?></span> </td>
                                                <td> <span class="email"><?php echo $user['Customer_Email'] ?></span> </td>
                                                <td> <span class="address"><?php echo $user['Address'] ?></span></td>
                                                <td> <span class="address"><?php echo $user['Postcode'] ?></span></td>
                                                <td> <span class="address"><?php echo $user['City'] ?></span></td>
                                                <td> <span class="address"><?php echo $user['Phone'] ?></span></td>
                                                <td> <a href="../controller/DeleteUserController.php?id=<?php echo $user["Customer_Id"]?>" class="btn btn-danger"> Xóa</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('layouts/footerAdmin.php') ?>
    </div>
</body>

</html>