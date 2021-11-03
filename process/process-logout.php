<?php
session_start();
unset($_SESSION['currentUser']);
unset($_SESSION['currentLevel']);
header('location:../model/login.php');
?>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>