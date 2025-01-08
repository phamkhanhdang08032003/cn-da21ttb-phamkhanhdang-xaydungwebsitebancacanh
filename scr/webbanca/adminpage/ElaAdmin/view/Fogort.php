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
    <title>Form</title>
</head>
<body>
    <div class="forgot-form">
        <div class="box">
            <div class="form ">
                <h3>Forgot Password</h3>
                <span>Type your Email for recovery</span>

                <form action="../controller/ForgotPassController.php" id="form_input" method="post">
                    <div class="type">
                        <input type="text" placeholder="Email" name="email" id="email" required> 
                    </div>  
                    <button class="btn bkg">Send Mail</button>
                </form>
            </div>
    <script src="../js/form.js"></script>
</body>
</html>