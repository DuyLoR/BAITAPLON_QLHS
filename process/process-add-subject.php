<?php

    $subjectName = $_POST['subjectName'];
    $subjectID = $_POST['subjectID'];
    $subjectPrice = $_POST['subjectPrice'];
    $teacherID = $_POST['teacherID'];
   
    include '../config/config.php';
    $sql = "INSERT INTO `monhoc`(`mamh`, `tenmh`, `magv`, `sotiet`) 
    VALUES ('$subjectID','$subjectName','$teacherID','$subjectPrice')";
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