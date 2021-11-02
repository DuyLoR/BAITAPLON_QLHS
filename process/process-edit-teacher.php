<?php

    $teacherID = $_POST['teacherID'];
    $teacherName = $_POST['teacherName'];
    $teacherGender = $_POST['teacherGender'];
    $teacherAddress = $_POST['teacherAddress'];
    $teacherPosition = $_POST['teacherPosition'];
    $teacherEmail = $_POST['teacherEmail'];
    $teacherPhone = $_POST['teacherPhone'];

    include '../config/config.php';
    $sql = "UPDATE `giaovien` SET `tengv`='$teacherName',`gioitinh`='$teacherGender',`chucvu`='$teacherPosition',`sodt`='$teacherPhone',`email`='$teacherEmail',`diachi`='$teacherAddress' WHERE magv = '$teacherID'";
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>