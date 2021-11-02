<?php

    $subjectName = $_POST['subjectName'];
    $subjectID = $_POST['subjectID'];
    $subjectPrice = $_POST['subjectPrice'];
    $teacherID = $_POST['teacherID'];
   
    include '../config/config.php';
    $sql = "UPDATE `monhoc` SET `tenmh`='$subjectName',`magv`='$teacherID',`sotiet`='$subjectPrice' WHERE mamh = '$subjectID'";
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>