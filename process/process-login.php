<?php
session_start();
if (isset($_POST['do_login'])) { //phải bấm đăng nhập thì mới vào được trang này
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    include '../config/config.php';
    $sql = "SELECT * FROM dangnhap WHERE tendangnhap = '$userName'";
    $result = mysqli_query($conn, $sql);

    //Xác thực
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // $pass_hash = $row['user_pass'];
        $level = $row['capdo'];
        // if (password_verify($password, $pass_hash))
        if ($password == $row['matkhau']) {
            $_SESSION['currentUser'] = $userName;
            if ($level == 1) { //Kiểm tra user level
                echo "admin";  //admin
            } else if ($level == 2) {
                echo "teacher"; //teacher
            } else {
                echo "student";
            }
        } else {
            echo "wrong"; //sai password
        }
    } else {
        echo "fail"; //sai username
    }
} else header('location:login.php'); //chuyển về trang đăng nhập
