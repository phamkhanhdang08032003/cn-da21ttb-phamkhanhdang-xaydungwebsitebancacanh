<!doctype html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giỏ hàng của bạn</title>
	<link rel="shortcut icon" href="./img/logo.webp" type="image/png" />
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
</head>
<hrad>
	<link rel="stylesheet" type="text/css" href="assets/TrangChu.css">
</hrad>

<body>
	<?php include("../layout/navbar.php") ?>

	<div class="breadcrumb-shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
					<ol class="breadcrumb breadcrumb-arrows">
						<li>
							<span class="text-dark">
								<a class="text-dark" href="TrangChu.php">Trang chủ&ensp;</a>
								/&ensp;Giỏ hàng&ensp;
							</span>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="header-page text-center my-4">
			<h2>Giỏ hàng của bạn</h2>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">Hình ảnh</th>
							<th class="text-center">Tên sản phẩm</th>
							<th class="text-center">Giá</th>
							<th class="text-center">Số lượng</th>
							<th class="text-center">Thành tiền</th>
							<th class="text-center">Xóa</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$order_id = $_GET["id"];
						$stm = $pdo->prepare('SELECT * FROM cart JOIN order_tbl ON cart.order_id = order_tbl.order_id WHERE cart.order_id = ? AND order_tbl.state = 1');
						$stm->execute([$order_id]);
						$data = $stm->fetchAll(PDO::FETCH_ASSOC);
						$tongTien = 0;

						if (!empty($data)) {
							foreach ($data as $item) {
								$tongTien += $item["Subtotal"];
								?>
								<?php
								$sql = "SELECT Product_Name, Product_Image, Product_Price, Product_Qty, Subtotal FROM cart WHERE Order_Id = ?";
								$stmt = $pdo->prepare($sql);
								$stmt->execute([$order_id]);
								$cartItems = $stmt->fetchAll();
								?>
								<tr>
									<td class="text-center">
										<img src="../img/ <?php echo htmlspecialchars($item["Product_Image"]); ?>"
											alt="Hình ảnh sản phẩm" width="100" height="100">
									</td>
									<td class="text-center">
										<?php echo htmlspecialchars($item["Product_Name"]); ?>
									</td>
									<td class="text-center">
										<?php echo number_format($item["Product_Price"], 0, ',', '.'); ?> đ
									</td>
									<td class="text-center">
										<?php echo htmlspecialchars($item["Product_Qty"]); ?>
									</td>
									<td class="text-center">
										<?php echo number_format($item["Subtotal"], 0, ',', '.'); ?> đ
									</td>
									<td class="text-center">
										<a href="../controller/removeItem.php?item_id=<?php echo $item['cart_id']; ?>&order_id=<?php echo $order_id; ?>"
											class="btn btn-danger btn-sm">
											<i class="bi bi-trash"></i> Xóa
										</a>
									</td>
								</tr>
								<?php
							}
						} else {
							echo '<tr><td colspan="6" class="text-center">Giỏ hàng của bạn trống!</td></tr>';
						}
						?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-7 col-lg-5">
				<div class="card">
					<div class="card-header text-center">
						<h3>Thông tin đơn hàng</h3>
					</div>
					<div class="card-body">
						<p>Tổng tiền: <span class="total-price"><?php echo number_format($tongTien, 0, ',', '.'); ?>
								đ</span></p>
						<a class="btn btn-dark btn-block"
							href="../controller/buyButton.php?id=<?php echo $order_id; ?>&total=<?php echo $tongTien; ?>">
							THANH TOÁN
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include("../layout/footer.php") ?>
</body>

</html>