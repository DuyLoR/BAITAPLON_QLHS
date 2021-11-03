<?php
session_start();
if (isset($_SESSION['currentUser'])) {
    include './model/header.php';
?>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'>
                    </i> <span class="nav_logo-name">Menu</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active" id="dashboard">
                        <i class='bx bx-home nav_icon'></i>
                        <span class="nav_name">Trang chủ</span>
                    </a>

                    <!-- riêng admin -->
                    <?php
                    if ($_SESSION['currentLevel'] == 1) {
                    ?>
                        <a href="#" class="nav_link" id="accounts">
                            <i class='bx bxs-user-account nav_icon'></i>
                            <span class="nav_name">Tài khoản</span>
                        </a>
                    <?php
                    }
                    ?>
                    <a href="#" class="nav_link" id="classes">
                        <i class='bx bxs-school nav_icon'></i>
                        <span class="nav_name">Lớp học</span>
                    </a>

                    <a href="#" class="nav_link" id="subjects">
                        <i class='bx bx-book-open nav_icon'></i>
                        <span class="nav_name">Môn học</span>
                    </a>

                    <a href="#" class="nav_link" id="teachers">
                        <i class='bx bx-glasses nav_icon'></i>
                        <span class="nav_name">Giáo viên</span>
                    </a>
                    <a href="#" class="nav_link" id="students">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Học sinh</span>
                    </a>
                    <a href="#" class="nav_link" id="results">
                        <i class='bx bx-table nav_icon'></i>
                        <span class="nav_name">Kết quả</span>
                    </a>
                </div>
            </div>
            <a href="./process/process-logout.php" class="nav_link" id="logout">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Đăng xuất</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div id="contents" class="height-100 bg-light">

    </div>
    <!--Container Main end-->

    <script src="./assets/js/main.js"></script>
    <!-- </body>

    </html> -->


<?php
    include './model/footer.php';
} else header('location:./model/login.php');
?>