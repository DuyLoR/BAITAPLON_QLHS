<?php
if (isset($_POST['subjectId'])) {
    $subjectId = $_POST['subjectId'];

    //?mở kết nối
    include '../config/config.php';

    //? set câu lệnh truy vấn
    $sql = "DELETE FROM monhoc WHERE mamh='$subjectId'";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
    //? đóng kết nối
    mysqli_close($conn);
}
