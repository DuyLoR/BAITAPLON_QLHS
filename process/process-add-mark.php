<?php

    $subjectID = $_POST['subjectID'];
    $studentID = $_POST['studentID'];
    $markFirst = $_POST['markFirst'];
    $markSecond = $_POST['markSecond'];
    $markThird = $_POST['markThird'];

    include '../config/config.php';
    $sql = "INSERT INTO `diem`(`mahs`, `mamh`, `diemm`, `diemgk`, `diemck`) 
    VALUES ('$studentID','$subjectID','$markFirst','$markSecond','$markThird')";
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