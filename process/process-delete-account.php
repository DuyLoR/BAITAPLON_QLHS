<?php
if (isset($_POST['userName'])) {
    $userName = $_POST['userName'];

    //?mở kết nối
    include '../config/config.php';

    //? set câu lệnh truy vấn
    $sql = "DELETE FROM dangnhap WHERE tendangnhap='$userName'";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
    //? đóng kết nối
    mysqli_close($conn);
}
