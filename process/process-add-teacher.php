<?php

    $teacherID = $_POST['teacherID'];
    $teacherName = $_POST['teacherName'];
    $teacherGender = $_POST['teacherGender'];
    $teacherAddress = $_POST['teacherAddress'];
    $teacherPosition = $_POST['teacherPosition'];
    $teacherEmail = $_POST['teacherEmail'];
    $teacherPhone = $_POST['teacherPhone'];

    include '../config/config.php';
    $sql = "INSERT INTO `giaovien`(`magv`, `tengv`, `gioitinh`, `chucvu`, `sodt`, `email`, `diachi`) 
    VALUES ('$teacherID','$teacherName','$teacherGender','$teacherPosition','$teacherPhone','$teacherEmail','$teacherAddress')";
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>