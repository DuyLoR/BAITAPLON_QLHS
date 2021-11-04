<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $studentId = "NULL";
    $teacherId = "NULL";

    include '../config/config.php';

    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `dangnhap`(tendangnhap, matkhau, capdo, mahs, magv) 
        VALUES ('$userName' ,'$pass_hash' ,'$level', $studentId, $teacherId )";
    if ($level == 0) {
        $studentId = $_POST['studentId'];
        $sql = "INSERT INTO `dangnhap`(tendangnhap, matkhau, capdo, mahs, magv) 
        VALUES ('$userName' ,'$pass_hash' ,'$level', '$studentId', $teacherId )";
    } else if ($level == 2) {
        $teacherId = $_POST['teacherId'];
        $sql = "INSERT INTO `dangnhap`(tendangnhap, matkhau, capdo, mahs, magv) 
        VALUES ('$userName' ,'$pass_hash' ,'$level', $studentId, '$teacherId' )";
    }


    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        echo "success";
    } else {
        echo "error";
    }
    ?>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>