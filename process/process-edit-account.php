<?php
    $userName = $_POST['userName'];
    $level = $_POST['level'];
    $studentId = "NULL";
    $teacherId = "NULL";
    include '../config/config.php';
    $sql = "UPDATE `dangnhap` SET `capdo`='$level', `mahs` = $studentId, `magv` = $teacherId 
    WHERE tendangnhap = '$userName'";
    if($level == 0){
    $studentId = $_POST['studentId'];
        $sql = "UPDATE `dangnhap` SET `capdo`='$level', `mahs` = '$studentId' 
        WHERE tendangnhap = '$userName'";
    }
    if($level == 2){
    $teacherId = $_POST['teacherId'];
        $sql = "UPDATE `dangnhap` SET `capdo`='$level', `magv` = '$teacherId' 
        WHERE tendangnhap = '$userName'";
    }
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