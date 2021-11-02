<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Quản lý học sinh</title>
</head>

<body>

    <div id="loginForm" class="login-container">
        <h2 class="text-center">login form</h2>
        <div class="row">
            <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="userName" name="userName" placeholder="userName">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <input type="password" placeholder="Enter your Password" class="form-control" id="password" name="password">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <input type="submit" name="login" class="btn btn-primary btn-block btn-login" value="Đăng nhập">
            </div>
        </div>
    </div>

    <div class="footer text-center">Thank you for choosing us. Design by <a href="#">PDLearn</a></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/login.js"></script> -->
    <script>
        $(document).ready(function() {
            $(document).keypress(function(event) {
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    $userName = $('#userName').val();
                    $password = $('#password').val();

                    if ($userName == '' || $password == '') {
                        alert("Vui lòng nhập đầy đủ TK và MK");
                    } else {
                        $.ajax({
                            url: "../process/process-login.php",
                            type: "POST",
                            data: {
                                do_login: "do_login",
                                userName: $userName,
                                password: $password
                            },
                            success: function(response) {
                                if (response == "admin") {
                                    window.location.href = "admin-index.php";
                                } else if (response == "teacher") {
                                    window.location.href = "admin-index.php";
                                } else if (response == "student") {
                                    window.location.href = "admin-index.php"
                                } else if (response == "wrong") {
                                    alert("Mật khẩu không chính xác !");
                                } else {
                                    alert("Tài khoản không tồn tại")
                                }
                            }
                        });


                    }
                }
            });

            $('.btn-login').click(function() {


            });
        })
    </script>
</body>

</html>