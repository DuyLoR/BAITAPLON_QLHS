<?php

    $subjectID = $_POST['subjectID'];
    $studentID = $_POST['studentID'];
    $markFirst = $_POST['markFirst'];
    $markSecond = $_POST['markSecond'];
    $markThird = $_POST['markThird'];

    include '../config/config.php';
    $sql = "UPDATE `diem` SET `diemm`='$markFirst',`diemgk`='$markSecond',`diemck`='$markThird' WHERE mahs = '$studentID' and mamh = '$subjectID'";
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>