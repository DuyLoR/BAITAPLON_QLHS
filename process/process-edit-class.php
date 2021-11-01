<?php

    $classID = $_POST['classID'];
    $className = $_POST['className'];
    $teacherID = $_POST['teacherID'];

    include '../config/config.php';
    $sql = "UPDATE `lop` SET `tenlop`='$className',`magvcn`='$teacherID' WHERE malop = '$classID'";
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>