<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/sidebar.css">
    <title>Document</title>
</head>

<body>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
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
                <a href="#" class="nav_link" id="logout">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Đăng xuất</span>
                </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div id="contents" class="height-100 bg-light">
            <?php include 'classes.php'; ?>
        </div>
        <!--Container Main end-->
        <script src="../assets/js/sidebar.js"></script>
    </body>

</html>