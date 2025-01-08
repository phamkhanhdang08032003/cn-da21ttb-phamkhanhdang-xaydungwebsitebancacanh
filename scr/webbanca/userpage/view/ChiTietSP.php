<!doctype html>
<html amp class="no-js" lang="vi">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi Tiết SP</title>
  <link rel="shortcut icon" href="../img/logo.webp" type="image/png" />
  <link href='//theme.hstatic.net/200000411281/1000827595/14/plugin.css?v=176' rel='stylesheet' type='text/css'
    media='all' />
  <link href='//theme.hstatic.net/200000411281/1000827595/14/custom-styles.scss.css?v=176' rel='stylesheet'
    type='text/css' media='all' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<hrad>
  <link rel="stylesheet" type="text/css" href="assets/TrangChu.css">
</hrad>
<script>
  function minusQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
    }
  }

  function plusQuantity() {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
  }
</script>

<body>
  <?php include("../layout/navbar.php");
  $id = $_GET["id"] ?? "";
  $stm = $pdo->query('select * from Product where Product_Id = ' . $id);
  $data = $stm->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <div class="breadcrumb-shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
          <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a class="text-dark" href="TrangChu.php" target="_self" itemprop="item"><span itemprop="name">Trang
                  chủ</span></a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a class="text-dark" href="DanhMuc.php" target="_self" itemprop="item">
                <span itemprop="name">Danh Mục</span>
              </a>
              <meta itemprop="position" content="2">
            </li>
            <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <span itemprop="item"
                content="https://www.freshgarden.vn/products/banh-kem-forever-love-8-banh-kem-forever-love">
                <span itemprop="name"><?php foreach ($data as $item) {
                  echo $item['Product_Name'];
                } ?></span>
              </span>
              <meta itemprop="position" content="3">
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <?php foreach ($data as $item) { ?>
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-lg-12">
          <div class="row product-detail-main mb-5">
            <div class="col-lg-6 col-sm-12 col-xs-12 product-content-img">
              <div class="product-gallery">
                <div class="product-image-detail box__product-gallery scroll">
                  <div class="">
                    <img class="product-image-feature"
                      src="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_FirstImg'] ?>"
                      style="width: 300px; height: 270px; object-fit: cover;">
                  </div>
                </div>
                <div class="product-gallery__thumbs owl-carousel owl-loaded owl-drag" data-nav="true" data-margin="15"
                  data-sm-items="4" data-xs-items="4" data-md-items="4" data-lg-items="5">
                  <div class="owl-stage-outer">
                    <div class="owl-stage"
                      style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 87px;">
                      <div class="owl-item active" style="width: 350px; padding: 0 32px">
                        <div class="row">
                          <div style="width: 100px; height: 100px; object-fit: cover;"
                            class="col-4 product-gallery__thumb active"
                            data-image-large="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_FirstImg'] ?>">
                            <img src="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_FirstImg'] ?>" alt=""
                              srcset="">
                          </div>
                          <div style="width: 100px; height: 100px; object-fit: cover;"
                            class="col-4 product-gallery__thumb active"
                            data-image-large="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_SecondImg'] ?>">
                            <img src="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_SecondImg'] ?>" alt=""
                              srcset="">
                          </div>
                          <div style="width: 100px; height: 100px; object-fit: cover;"
                            class="col-4 product-gallery__thumb active"
                            data-image-large="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_ThirdImg'] ?>">
                            <img src="../../adminpage/ElaAdmin/upload/<?php echo $item['Product_ThirdImg'] ?>" alt=""
                              srcset="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-xs-12 product-content-desc" id="detail-product">
              <div class="product-title">
                <h1><?php echo $item["Product_Name"] ?></h1>
              </div>
              <div>
                <p><b>Thông Tin Sản Phẩm: </b><?php echo $item['Product_Desc'] ?></p>
              </div>
              <div>
                <p><b>Số lượng:</b> <?php echo $item['Stock'] ?> </p>
              </div>
              <div class="product-price" id="price-preview">
                <span class="pro-price"><?php echo $item['Price'] ?> đ</span>
              </div>
              <div class="selector-actions">
                <form action="../controller/cart.php" method="post">
                  <input type="hidden" name="Product_Id" value="<?php echo $item["Product_Id"] ?>">

                  <?php if (isset($_SESSION["customer_id"])) { ?>
                    <input type="hidden" name="Customer_Id" value="<?php echo $_SESSION["customer_id"] ?>">
                  <?php } else { ?>
                    <div></div>
                  <?php } ?>
                  <input type="hidden" name="Product_Image" value="<?php echo $item["Product_FirstImg"] ?>">
                  <div class="quantity-area clearfix">
                    <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                    <input type="text" id="quantity" name="Product_quantity" value="1" min="1" class="quantity-selector">
                    <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                  </div>
                  <input type="hidden" name="Product_price" value="<?php echo $item['Price'] ?>">
                  <input type="hidden" name="Product_Stock" value="<?php echo $item['Stock'] ?>">
                  <input type="hidden" name="Product_Name" value="<?php echo $item['Product_Name'] ?>">
                  <?php
                  if (isset($_SESSION['customer_id'])) {
                    $sql = "SELECT * FROM order_tbl WHERE State = 1 AND customer_id = ?";
                    $stm = $pdo->prepare($sql);
                    $stm->execute([$_SESSION['customer_id']]);
                    $data = $stm->fetch(PDO::FETCH_ASSOC);

                    if (is_array($data) && !empty($data)) {
                      $lastOrderId = $data['Order_Id'];
                    } else {
                      $lastOrderId = null;
                    }
                    ?>

                    <input type="hidden" name="Order_Id" value="<?php echo $lastOrderId ?>">
                  <?php } ?>
                  <div class="wrap-addcart">
                    <button class="" style="padding: 10px" type="submit" name="addCart">Thêm vào giỏ</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  } ?>
  <script>
    $(document).ready(function () {
      $('.product-gallery__thumb').on('click', function () {
        // Lấy đường dẫn hình ảnh lớn từ thuộc tính data
        var largeImageSrc = $(this).data('image-large');

        // Thay đổi hình ảnh lớn
        $('.product-image-feature').attr('src', largeImageSrc);
      });
    });
  </script>
  <?php include("../layout/footer.php") ?>
</body>

</html>