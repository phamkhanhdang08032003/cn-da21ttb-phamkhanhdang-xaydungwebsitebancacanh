<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <hrad>
        <link rel="stylesheet" type="text/css" href="assets/TrangChu.css">
    </hrad>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            display: flex;
            gap: 20px;
        }

        .form-container,
        .info-container {
            flex: 1;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .success {
            color: green;
            text-align: center;
        }

        .error {
            color: red;
            text-align: center;
        }

        .info-container p {
            text-align: center;
            margin: 10px 0;
        }

        .map-container {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php include("../layout/navbar.php") ?>
    <div class="container">
        <div class="form-container">
            <h3 style="color:#3366FF;">Liên hệ với chúng tôi</h3>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = htmlspecialchars(trim($_POST['name']));
                $email = htmlspecialchars(trim($_POST['email']));
                $phone = htmlspecialchars(trim($_POST['phone']));
                $message = htmlspecialchars(trim($_POST['message']));

                if ($name && $email && $message) {
                    echo '<p class="success">Cảm ơn bạn đã liên hệ! Chúng tôi sẽ sớm phản hồi.</p>';
                } else {
                    echo '<p class="error">Vui lòng điền đầy đủ thông tin!</p>';
                }
            }
            ?>
            <form method="post" action="">
                <label for="name">Tên của bạn</label>
                <input type="text" id="name" name="name" placeholder="Nhập tên của bạn" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Nhập email của bạn" required>

                <label for="phone">Số điện thoại</label>
                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại (không bắt buộc)">

                <label for="message">Nội dung tin nhắn</label>
                <textarea id="message" name="message" rows="5" placeholder="Nhập tin nhắn của bạn" required></textarea>

                <button type="submit">Gửi liên hệ</button>
            </form>
        </div>
        <div class="info">
            <h3 style="color:#3366FF;">Thông tin liên hệ</h3>
            <p>Email: phamkhanhdang101@gmail.com</p>
            <p>Điện thoại: +84 898 832 570</p>
            <p>Địa chỉ: 123 Đường Nguyễn Thiện Thành, xã Hòa Lợi, huyện Châu Thành, TP.Trà Vinh</p>


            <h2>Vị trí trên bản đồ</h2>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.912645680217!2d106.69279731511794!3d10.762622192326334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292ff1fc29%3A0xc9d91a5cdb2e4f2b!2sHo%20Chi%20Minh%20City%2C%20Vietnam!5e0!3m2!1sen!2s!4v1689609507234!5m2!1sen!2s"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
    <?php include("../layout/footer.php") ?>
</body>

</html>