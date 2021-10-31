<?php
if(isset($_POST['btnSubmit'])){
    $classID = $_POST['classID'];
    $className = $_POST['className'];
    $teacherID = $_POST['teacherID'];
}
include '../config/config.php';
$sql = "INSERT INTO `lop`(`malop`, `tenlop`, `magvcn`) 
VALUES ('$classID' ,'$className' ,'$teacherID' )";
$result = mysqli_query($conn, $sql);
if($result > 0){
    header("location: ../model/admin-index.php");
}
else{
    echo "lỗi";
}
?>