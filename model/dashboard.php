<?php
session_start();
if (isset($_SESSION['currentUser'])) {
?>
    <?php
    if ($_SESSION['currentLevel'] == 1) {
    ?>
        <div class="main-cards">
            <div class="card">
                <i class="fa fa-user-o fa-2x text-lightblue"></i>
                <div class="card-inner">
                    <p class="text-primary-p">Khoa</p>
                    <span class="font-bold text-title">10</span>
                </div>
            </div>
            <div class="card">
                <i class="fa fa-user-o fa-2x text-lightblue"></i>
                <div class="card-inner">
                    <p class="text-primary-p">Lớp</p>
                    <span class="font-bold text-title">10</span>
                </div>
            </div>
            <div class="card">
                <i class="fa fa-user-o fa-2x text-lightblue"></i>
                <div class="card-inner">
                    <p class="text-primary-p">Sinh viên</p>
                    <span class="font-bold text-title">10</span>
                </div>
            </div>
            <div class="card">
                <i class="fa fa-user-o fa-2x text-lightblue"></i>
                <div class="card-inner">
                    <p class="text-primary-p">Môn học</p>
                    <span class="font-bold text-title">10</span>
                </div>
            </div>
            <div class="card">
                <i class="fa fa-user-o fa-2x text-lightblue"></i>
                <div class="card-inner">
                    <p class="text-primary-p">Giảng viên</p>
                    <span class="font-bold text-title">10</span>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
<?php
} else header('location:login.php');
?>