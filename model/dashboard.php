<?php
session_start();
include '../config/config.php';
if (isset($_SESSION['currentUser'])) {
?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-start">Trang chủ</h1>
                </div>
            </div>
            <hr class="border-primary">
        </div>
    </div>
    <!-- role admin -->
    <?php
    if ($_SESSION['currentLevel'] == 1) {


    ?>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <h2>Quản lý học sinh trường THPT</h2>
            </div>
        </nav>
        <div class="col col-lg-12 bg-light">
            <div class="row mt-3 justify-content-around py-5 ">
                <div class="col-md-2 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                    <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                    <div class="ps-3 my-3">
                        <p>Tổng số học sinh</p>
                        <?php
                        $sql = "SELECT * FROM hocsinh";
                        $result = mysqli_query($conn, $sql);
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows($result);
                            echo "<p> $rowcount </p>";
                        } ?>
                    </div>
                </div>
                <div class="col-md-2 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                    <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-tie"></i></div>
                    <div class="ps-3 my-3">
                        <p>Tổng số giáo viên</p>
                        <?php
                        $sql = "SELECT * FROM giaovien";
                        $result = mysqli_query($conn, $sql);
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows($result);
                            echo "<p> $rowcount </p>";
                        } ?>
                    </div>
                </div>
                <div class="col-md-2 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                    <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-book-open"></i></div>
                    <div class="ps-3 my-3">
                        <p>Tổng số môn học</p>
                        <?php
                        $sql = "SELECT * FROM monhoc";
                        $result = mysqli_query($conn, $sql);
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows($result);
                            echo "<p> $rowcount </p>";
                        } ?>
                    </div>
                </div>
                <div class="col-md-2 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                    <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-school"></i></div>
                    <div class="ps-3 my-3">
                        <p>Tổng số lớp học</p>
                        <?php
                        $sql = "SELECT * FROM lop";
                        $result = mysqli_query($conn, $sql);
                        if ($result = mysqli_query($conn, $sql)) {
                            // Return the number of rows in result set
                            $rowcount = mysqli_num_rows($result);
                            echo "<p> $rowcount </p>";
                        } ?>
                    </div>
                </div>
            </div>
        <?php
    }
        ?>

        <!-- role học sinh -->
        <?php
        if ($_SESSION['currentLevel'] == 0) {
        ?>
            <div class="card">
                <div class="card-header">
                    <?php
                    $id = $_SESSION['currentId'];
                    $sql = "SELECT * FROM hocsinh WHERE mahs='$id' ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo "Xin chào " . $row['tenhs'] . ' - ' . $id . "!";
                    ?>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Chào mừng đến với trang quản lý học sinh</p>
                        <footer class="blockquote-footer">Học, học nữa, học mãi! </footer>
                    </blockquote>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- role giáo viên -->
        <?php
        if ($_SESSION['currentLevel'] == 2) {
        ?>
            <div class="card">
                <div class="card-header">
                    <?php
                    $id = $_SESSION['currentId'];
                    $sql = "SELECT * FROM giaovien WHERE magv='$id' ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo "Xin chào " . $row['tengv'] . ' - ' . $id . "!";
                    ?>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Chào mừng đến với trang quản lý học sinh</p>
                        <footer class="blockquote-footer">Học, học nữa, học mãi! </footer>
                    </blockquote>
                </div>
            </div>
        <?php
        }
        ?>

    <?php

} else header('location:login.php');
    ?>
    <?php
    //? đóng kết nối
    mysqli_close($conn);
    ?>