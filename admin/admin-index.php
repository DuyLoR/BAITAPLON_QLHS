<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/table-data.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Trường team8</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 bg-dark px-0">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li id="dashboard" class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Trang chủ</span>
                            </a>
                        </li>

                        <li id="dashboard" class="nav-item">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Lớp học</span>
                            </a>
                        </li>

                        <li id="subjects" class="nav-item">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-book"></i> <span class="ms-1 d-none d-sm-inline">Môn học</span>
                            </a>
                        </li>

                        <li id="teachers" class="nav-item">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-eyeglasses"></i> <span class="ms-1 d-none d-sm-inline">Giáo viên</span>
                            </a>
                        </li>

                        <li id="students" class="nav-item">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Học sinh</span> </a>
                        </li>

                        <li id="results" class="nav-item">
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-file-earmark-bar-graph"></i> <span class="ms-1 d-none d-sm-inline">Bảng điểm</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs bi-person-circle"></i>
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="contents" class="col py-3">
                <?php include 'classes.php'; ?>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#dashboard").click(function() {
                $("#contents").load('dashboard.php'); //? đẩy dữ liệu thay thế vào ô div có id là contents(dòng 41)

            });

            $("#classes").click(function() {
                $("#contents").load('classes.php');
            });

            $("#subjects").click(function() {
                $("#contents").load('subjects.php');
            });

            $("#teachers").click(function() {
                $("#contents").load('teachers.php');
            });
            $("#students").click(function() {
                $("#contents").load('students.php');
            });
            $("#results").click(function() {
                $("#contents").load('results.php');
            });
        });
    </script>
</body>

</html>