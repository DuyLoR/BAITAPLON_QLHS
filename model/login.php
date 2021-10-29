<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                <input type="submit" name="view" class="btn btn-success btn-block btn-view" value="Quên mật khẩu">
            </div>
        </div>
    </div>

    <div class="footer text-center">Copy right by team8</div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/login.js"></script> -->
    <script>
        $(document).ready(function() {
            $('.btn-login').click(function() {
                $userName = $('#userName').val();
                $password = $('#password').val();

                if ($userName == '' || $password == '') {
                    alert("Vui lòng nhập đầy đủ TK và MK");
                } else {
                    $.ajax({
                        url: "../process/process-login.php",
                        method: "POST",
                        data: {
                            do_login: "do_login",
                            userName: $userName,
                            password: $password
                        },
                        success: function(response) {
                            if (response == "admin") {
                                window.location.href = "admin-index.php";
                            } else if (response == "teacher") {
                                window.location.href = "teacher-index.php";
                            } else if (response == "wrong") {
                                alert("Mật khẩu không chính xác !");
                            } else {
                                alert("Tài khoản không tồn tại")
                            }
                        }
                    });


                }

            });
        })
    </script>
</body>

</html>