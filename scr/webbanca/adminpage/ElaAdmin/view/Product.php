<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include('./layouts/libraryAdmin.php') ?>
    <?php include("../utils/connect.php"); ?>
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
        <!-- Get data from category -->
        <?php
        $stm = $pdo->query('select * from category');
        $category = $stm->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- End get data from category -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../controller/AddProductController.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInput">Tên sản phẩm: </label>
                                <input type="text" name="productName" class="form-control" id="exampleInput"
                                    aria-describedby="emailHelp">
                            </div>
                            <select name="category" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"
                                onfocus='this.size=3;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                <?php foreach ($category as $item) {
                                    ?>
                                    <option value="<?php echo $item['Category_Id'] ?>"><?php echo $item['Category_Name'] ?>
                                    </option>
                                    <?php
                                } ?>
                            </select>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Hình ảnh 1: </label>
                                <input type="file" name="productImage1" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Hình ảnh 2: </label>
                                <input type="file" name="productImage2" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Hình ảnh 3: </label>
                                <input type="file" name="productImage3" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mô tả: </label>
                                <textarea class="form-control" name="productDesc" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Giá: </label>
                                <input type="text" name="productPrice" class="form-control" id="exampleInput"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput">Số lượng: </label>
                                <input type="text" name="productStock" class="form-control" id="exampleInput"
                                    aria-describedby="emailHelp">
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
        <?php
        $stm = $pdo->query('select * from product');
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <!-- End get data from category -->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh sách sản phẩm</strong>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModalScrollable">
                                    Thêm sản phẩm
                                </button>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Danh mục</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Hình ảnh</th>
                                            <th>Hình ảnh</th>
                                            <th>Mô Tả</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
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
                                                <?php
                                                $category_id = $item["Category_Id"];
                                                $sql = "SELECT Category_name from category where Category_id = ?";
                                                $stmt = $pdo->prepare($sql);
                                                $stmt->execute([$category_id]);
                                                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                                                foreach ($result as $cate) {
                                                    ?>
                                                    <td> <span class="product-category"><?php echo $cate ?></span> </td>
                                                <?php }
                                                ?>
                                                <td> <span class="product-name"><?php echo $item['Product_Name'] ?></span>
                                                </td>
                                                <td> <span class="product-image"><img
                                                            src="../upload/<?php echo $item['Product_FirstImg'] ?>"
                                                            alt="Hình ảnh"></span></td>
                                                <td> <span class="product-image"><img
                                                            src="../upload/<?php echo $item['Product_SecondImg'] ?>"
                                                            alt="Hình ảnh"></span></td>
                                                <td> <span class="product-image"><img
                                                            src="../upload/<?php echo $item['Product_ThirdImg'] ?>"
                                                            alt="Hình ảnh"></span></td>
                                                <td> <span class="product-desc"><?php echo $item['Product_Desc'] ?></span>
                                                </td>
                                                <td> <span class="product-desc"><?php echo $item['Price'] ?></span></td>
                                                <td> <span class="product-desc"><?php echo $item['Stock'] ?></span></td>
                                                <td> <a href="../controller/DeleteProductController.php?id=<?php echo $item["Product_Id"] ?>"
                                                        class="btn btn-danger"> Xóa</a>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-taget="#exampleModal<?php echo $i ?>">
                                                        Sửa
                                                    </button>
                                                </td>
                                                <div class="modal fade" id="exampleModal<?php echo $i ?>" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin
                                                                    danh mục</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-labelr="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="../controller/UpdateProductController.php?id=<?php echo $item["Product_Id"] ?>"
                                                                method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="exampleInput">Mã sản phẩm: </label>
                                                                        <input type="text" name="productID"
                                                                            class="form-control" id="exampleInput"
                                                                            aria-describedby="emailHelp"
                                                                            value="<?php echo $item["Product_Id"] ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInput">Tên sản phẩm: </label>
                                                                        <input type="text" name="productName"
                                                                            class="form-control" id="exampleInput"
                                                                            aria-describedby="emailHelp">
                                                                    </div>
                                                                    <select name="category"
                                                                        class="custom-select my-1 mr-sm-2"
                                                                        id="inlineFormCustomSelectPref"
                                                                        onfocus='this.size=3;' onblur='this.size=1;'
                                                                        onchange='this.size=1; this.blur();'>
                                                                        <?php foreach ($category as $item) {
                                                                            ?>
                                                                            <option value="<?php echo $item['Category_Id'] ?>">
                                                                                <?php echo $item['Category_Name'] ?></option>
                                                                            <?php
                                                                        } ?>
                                                                    </select>
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlFile1">Hình ảnh 1:
                                                                        </label>
                                                                        <input type="file" name="productImage1"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlFile1">Hình ảnh 2:
                                                                        </label>
                                                                        <input type="file" name="productImage2"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlFile1">Hình ảnh 3:
                                                                        </label>
                                                                        <input type="file" name="productImage3"
                                                                            class="form-control-file"
                                                                            id="exampleFormControlFile1">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlTextarea1">Mô tả:
                                                                        </label>
                                                                        <textarea class="form-control" name="productDesc"
                                                                            id="exampleFormControlTextarea1"
                                                                            rows="3"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInput">Giá: </label>
                                                                        <input type="text" name="productPrice"
                                                                            class="form-control" id="exampleInput"
                                                                            aria-describedby="emailHelp">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInput">Số lượng: </label>
                                                                        <input type="text" name="productStock"
                                                                            class="form-control" id="exampleInput"
                                                                            aria-describedby="emailHelp">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Đóng</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Lưu</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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
        <div style="height: 230px"></div>
        <?php include('./layouts/footerAdmin.php') ?>
    </div>
</body>

</html>