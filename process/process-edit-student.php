<?php

<<<<<<< HEAD
$studentId = $_POST['studentId'];
$studentName = $_POST['studentName'];
$classId = $_POST['classId'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$year = $_POST['year'];
$parentName = $_POST['parentName'];
$parentPhone = $_POST['parentPhone'];
$parentEmail = $_POST['parentEmail'];

include '../config/config.php';
$sql = "UPDATE `hocsinh` SET `tenhs`='$studentName',`malop`='$classId',`gioitinh`='$gender',`diachi`='$address',
`khoahoc`='$year',`tenph`='$parentName',`email`='$parentEmail',`sdt`='$parentPhone' WHERE mahs='$studentId' ";
$result = mysqli_query($conn, $sql);
if ($result > 0) {
    echo "success";
} else {
    echo "error";
}
=======
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
    $sql = "UPDATE `hocsinh` SET `tenhs`='$studentName',`malop`='$classID',`gioitinh`='$studentGender',`diachi`='$studentAddress',`khoahoc`='$course',`tenph`='$parentName',`email`='$parentEmail',`sdt`='$parentPhone' WHERE mahs = '$studentID'";
    $result = mysqli_query($conn, $sql);
    if($result > 0){
        echo "success";
    }
    else{
        echo "error" ;
    }
?>
>>>>>>> master
