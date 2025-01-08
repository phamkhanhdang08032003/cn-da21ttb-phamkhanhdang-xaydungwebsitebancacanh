<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách </title>
    <link rel="shortcut icon" href="../img/logo.webp" type="image/png" />
    <link href='//theme.hstatic.net/200000411281/1000827595/14/custom-styles.scss.css?v=176' rel='stylesheet'
        type='text/css' media='all' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<hrad>
    <link rel="stylesheet" type="text/css" href="assets/TrangChu.css">
</hrad>

<body>
    <?php include("../layout/navbar.php");
    $id = $_GET["id"] ?? "";
    $stm = $pdo->query('select * from Product where Category_Id = ' . $id);
    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="breadcrumb-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
                    <ol class="breadcrumb breadcrumb-arrows">
                        <li>
                            <span class="text-dark">
                                <a class="text-dark" href="TrangChu.php">Trang chủ&ensp;</a>
                                /&ensp;<a class="text-dark" href="DanhMuc.php">Danh mục&ensp;</a>/&ensp;Sản phẩm
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-5">
        <h3 class="text-center my-3" style="color: rgb(236, 110, 135);">Danh Sách Sản Phẩm</h3>
        <table class="table ">
            <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình ảnh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($data as $item) {
                    $i++;
                    ?>
                    <tr>

                        <td>
                            <h5><a class="tensanpham"
                                    href="ChiTietSP.php?id=<?php echo $item['Product_Id'] ?>"><?php echo $item["Product_Name"] ?></a>
                            </h5>
                        </td>
                        <td>
                            <div class="px col-lg-3 col-md-3 col-sm-6">
                                <a href="ChiTietSP.php?id=<?php echo $item['Product_Id'] ?>"><img
                                        src="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_FirstImg'] ?>"
                                        data-animation="fadeInDown" alt=""></a>
                            </div>
                        </td>

                    </tr>

                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <div style="padding: 10px;"></div>
    <?php include("../layout/footer.php") ?>
</body>

</html>