<?php
if (isset($_POST['classId'])) {
    $classId = $_POST['classId'];

    //?mở kết nối
    include '../config/config.php';

    //? set câu lệnh truy vấn
    $sql = "DELETE FROM lop WHERE malop='$classId'";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
    //? đóng kết nối
    mysqli_close($conn); 
}