<?php

    $studentID = $_POST['studentID'];
    $studentName = $_POST['studentName'];
    $studentGender = $_POST['studentGender'];
    $classID = $_POST['classID'];
    $studentAddress = $_POST['studentAddress'];
    $course = $_POST['course'];
    $parentName = $_POST['parentName'];
    $parentPhone = $_POST['parentPhone'];
    $parentEmail = $_POST['parentEmail'];

    include '../config/config.php';
    $sql = "INSERT INTO `hocsinh`(`mahs`, `tenhs`, `malop`, `gioitinh`, `diachi`, `khoahoc`, `tenph`, `email`, `sdt`) 
    VALUES ('$studentID','$studentName','$classID','$studentGender','$studentAddress','$course','$parentName','$parentEmail','$parentPhone')";
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>