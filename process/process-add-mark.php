<?php
if(isset($_POST['btnSubmit'])){
    $subjectID = $_POST['subjectID'];
    $studentName = $_POST['studentName'];
    $courseName = $_POST['courseName'];
    $markFirst = $_POST['markFirst'];
    $markSecond = $_POST['markSecond'];
    $markThird = $_POST['markThird'];
    $markAvg = $_POST['markAvg'];
}
include '../config/config.php';
$sql = "INSERT INTO `diem`(`mahs`, `mamh`, `diemm`, `diemgk`, `diemck`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
$result = mysqli_query($conn, $sql);
if($result > 0){
    header("location: ../model/admin-index.php");
}
else{
    echo "lỗi";
}
?>