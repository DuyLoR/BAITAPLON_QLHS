<?php
if (isset($_POST['teacherId'])) {
    $classId = $_POST['teacherId'];

    //?mở kết nối
    include '../config/config.php';

    //? set câu lệnh truy vấn
    $sql = "DELETE FROM giaovien WHERE magv='$teacherId'";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
    //? đóng kết nối  
    mysqli_close($conn);
}