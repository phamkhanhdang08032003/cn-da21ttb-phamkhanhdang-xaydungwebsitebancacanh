<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/styleForm.css">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
</head>
<body>
    <div class="container">
        <div class="box">
        <div class="form sign_in">
        <h3>Đăng Ký</h3>
                <form action="../controller/RegisterController.php" id="form_input" method="post">
                    <div class="type">
                        <input type="text" placeholder="First Name" name="FirstName">
                    </div>
                    <div class="type">
                        <input type="text" placeholder="Last name" name="LastName">
                    </div>
                    
                    <div class="type">
                        <input type="email" placeholder="Email" name="Email">
                    </div>
                    <div class="type">
                        <input type="password" placeholder="Password" name="Password">
                    </div>
                    <div class="type">
                        <input type="text" placeholder="Address" name="Address">
                    </div>
                    <div class="type">
                        <input type="text" placeholder="Phone" name="Phone">
                    </div>
                    <button class="btn bkg">Đăng Ký</button>
                </form>
                <a href="login.php">Bạn có tài khoản rồi ư?</a></button>
            </div>
        </div>
       
    </div>
    <!-- link script -->
    <script src="./assets/js/form.js"></script>
</body>
</html>