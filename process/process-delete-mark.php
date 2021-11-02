<?php
if (isset($_POST['studentId'])) {
    $studentId = $_POST['studentId'];
    $subjectId = $_POST['subjectId'];


    //?mở kết nối
    include '../config/config.php';

    //? set câu lệnh truy vấn
    $sql = "DELETE FROM diem WHERE (mahs='$studentId' AND mamh='$subjectId') ";

    //? kiểm tra và thực thi câu lệnh
    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "error";
    }
    //? đóng kết nối
    mysqli_close($conn);
}
