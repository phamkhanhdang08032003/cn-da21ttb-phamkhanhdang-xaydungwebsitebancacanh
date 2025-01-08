<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/styleForm.css">

    <!-- link icon -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="form sign_in">
                <h3>Đăng Nhập</h3>

                <form action="../controller/LoginController.php" method="Post" id="form_input">
                    <div class="type">
                        <input type="text" placeholder="Email" name="email">
                    </div>
                    <div class="type">
                        <input type="password" placeholder="Password" name="password">

                    </div>

                    <div class="">
                        <span><a href="./Fogort.php">Quên mật khẩu?</a></span>
                    </div>

                    <button class="btn bkg" style="margin-top: 20px;">Đăng Nhập</button>
                    </br>
                    <a>Hoặc</a>
                    </br>
                    <a href="google-oauth.php" class="btn bkg" style="margin-top: 20px;">Google</a>





                </form>
                <button class="btn ">
                    <a href="register.php"> Đăng ký tại đây </a></button>
            </div>
        </div>
    </div>
    </div>
    <!-- link script -->
    <script src="./assets/js/form.js"></script>
</body>

</html>