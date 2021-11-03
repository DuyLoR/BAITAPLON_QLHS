<?php

    $classID = $_POST['classID'];
    $className = $_POST['className'];
    $teacherID = $_POST['teacherID'];

    include '../config/config.php';
    $sql = "INSERT INTO `lop`(`malop`, `tenlop`, `magvcn`) 
    VALUES ('$classID' ,'$className' ,'$teacherID' )";
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