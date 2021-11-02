<?php
    $userName = $_POST['userName'];
    $level = $_POST['level'];
    $teacherId = $_POST['teacherId'];
    $studentId = $_POST['studentId'];
    include '../config/config.php';
    $sql = "UPDATE `dangnhap` SET `capdo`='$level', `mahs` = $studentId, `magv` = $teacherId WHERE tendangnhap = '$userName'";
    if($level == 0){
        $sql = "UPDATE `dangnhap` SET `capdo`='$level', `mahs` = '$studentId' WHERE tendangnhap = '$userName'";

    }
    if($level == 2){
        $sql = "UPDATE `dangnhap` SET `capdo`='$level', `magv` = '$teacherId' WHERE tendangnhap = '$userName'";
    }
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>