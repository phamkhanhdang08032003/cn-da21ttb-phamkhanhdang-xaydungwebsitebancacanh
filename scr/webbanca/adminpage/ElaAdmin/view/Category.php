<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include('./layouts/libraryAdmin.php') ?>
    <?php session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: login.php");
        exit();
    }
    ?>
</head>

<body>
    <!-- Left Panel -->
    <?php include('./layouts/menuAdmin.php') ?>
    <!-- Left Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include('./layouts/headerAdmin.php') ?>
        <!-- Header-->
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Thêm danh mục</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../controller/AddCategoryController.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInput">Tên danh mục: </label>
                                <input type="text" name="categoryName" class="form-control" id="exampleInput" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Hình ảnh: </label>
                                <input type="file" name="categoryImage" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mô tả: </label>
                                <textarea class="form-control" name="categoryDesc" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Get data from category -->
        <?php include("../utils/connect.php");
        $stm = $pdo->query('select * from category');
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- End get data from category -->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách danh mục sản phẩm</strong>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable">
                Thêm danh mục
            </button>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Danh mục</th>
                                            <th>Hình ảnh</th>
                                            <th>Mô Tả</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        foreach ($data as $item) {
                                            $i++;
                                        ?>
                                            <tr>
                                                <td> <span><?php echo $i ?></span> </td>
                                                <td> <span class="category-name"><?php echo $item['Category_Name'] ?></span> </td>
                                                <td> <span class="category-image"><img src="../upload/<?php echo $item['Category_Image'] ?>" alt="Hình ảnh"></span></td>
                                                <td> <span class="category-desc"><?php echo $item['Category_Description'] ?></span></td>
                                                <td> <a href="../controller/DeleteCategoryController.php?id=<?php echo $item["Category_Id"] ?>" class="btn btn-danger">Xóa</a>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?php echo $i ?>">
                                                        Sửa
                                                    </button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin danh mục</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="../controller/UpdateCategoryController.php?id=<?php echo $item["Category_Id"]?>" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInput">ID: </label>
                                                                    <input type="text" value="<?php echo $item["Category_Id"] ?>" name="id" class="form-control" id="exampleInput" aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInput">Tên danh mục: </label>
                                                                    <input type="text" name="categoryName" class="form-control" id="exampleInput" aria-describedby="emailHelp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlFile1">Hình ảnh: </label>
                                                                    <input type="file" name="categoryImage" class="form-control-file" id="exampleFormControlFile1">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlTextarea1">Mô tả: </label>
                                                                    <textarea class="form-control" name="categoryDesc" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <!-- Modal -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 230px"></div>
        <?php include('./layouts/footerAdmin.php') ?>
    </div>
</body>

</html>