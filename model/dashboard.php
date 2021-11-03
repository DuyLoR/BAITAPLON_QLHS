<?php
session_start();
if (isset($_SESSION['currentUser'])) {
    if ($_SESSION['currentLevel'] == 1) {
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
        <div class="height-100 bg-light">
            <div class="col py-3 ">
                <div class="container">
                    <div class="row mt-3 justify-content-around py-5 ">
                        <div class="col-md-3 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                            <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                            <div class="ps-3 my-3">
                                <p>Tổng số học sinh</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                            <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-tie"></i></div>
                            <div class="ps-3 my-3">
                                <p>Tổng số giáo viên</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                            <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-book-open"></i></div>
                            <div class="ps-3 my-3">
                                <p>Tổng số môn học</p>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-around py-5">
                        <div class="col-md-3 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                            <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-school"></i></div>
                            <div class="ps-3 my-3">
                                <p>Tổng số lớp học</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
    }
} else header('location:login.php');
    ?>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>
    