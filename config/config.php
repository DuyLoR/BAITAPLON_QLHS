<?php 
    // Kết nối đến cơ sở dữ liệu
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = '';
    const DB = 'quanlyhocsinh';
    // hàm thực hiện kết nối
    $conn = mysqli_connect(HOST, USER, PASS, DB);
    if(!$conn){
        die("Không thể kết nối!");
    }
     echo 'Ket noi thanh cong';
?>