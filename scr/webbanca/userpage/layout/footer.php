<!-- <footer class="text-center text-lg-start text-muted">
    <section class="z">
        <div class="container  text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                </div>
            </div>
        </div>

    </section>
    <div class="text-center p-4" style="background-color: rgba(244, 246, 247, 0.05);">
        <a class="text-reset fw-bold" href="" style="color:white;">Copyright © 2024 KeyDiii Shop</a>
    </div>
</footer> -->

<footer>
    <div class="footer-container">
        <!-- Phần trên của footer -->
        <div class="footer-top">
            <div class="footer-section">
                <h3>Về chúng tôi</h3>
                <p>Công ty chúng tôi cung cấp các sản phẩm và dịch vụ chất lượng cao, hướng tới sự hài lòng tối đa của
                    khách hàng.</p>
            </div>
            <div class="footer-section">
                <h3>Liên hệ</h3>
                <p>Email: phamkhanhdang101@gmail.com </p>
                <p>Điện thoại:+84 898 832 570</p>
                <p>Địa chỉ: 123 Đường Nguyễn Thiện Thành, xã Hòa Lợi, huyện Châu Thành, TP.Trà Vinh</p>
            </div>
            <div class="footer-section">
                <h3>Tìm hiểu thêm </h3>
                <ul>
                    <li><a href="TrangChu.php">Trang chủ</a></li>
                    <li><a href="Gioithieu.php">Giới thiệu</a></li>
                    <li><a href="DanhMuc.php">Danh Mục</a></li>
                    <li><a href="Lienhe.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Theo dõi chúng tôi</h3>
                <div class="social-links">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
        <!-- Phần dưới của footer -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Copyright © 2025 Trường Đại Học Trà Vinh </p>
        </div>
    </div>
    <!-- Thêm CSS -->
    <style>
        footer {
            background-color: #222;
            color: #fff;
            padding: 20px 0;
            font-size: 14px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .footer-top {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .footer-section {
            flex: 1 1 200px;
        }

        .footer-section h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .social-links a {
            display: inline-block;
            margin-right: 10px;
            color: #fff;
            text-decoration: none;
        }

        .social-links a:hover {
            color: #4CAF50;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 10px;
        }
    </style>
</footer>