<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/table-data.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Trường team8</title>
</head>

<body>
    <!-- sidebar -->
    <div class="header"></div>
    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
    <label for="openSidebarMenu" class="sidebarIconToggle">
        <div class="spinner diagonal part-1"></div>
        <div class="spinner horizontal"></div>
        <div class="spinner diagonal part-2"></div>
    </label>
    <div id="sidebarMenu">
        <ul class="sidebarMenuInner">
            <!-- user info -->
            <li>Team8 <span>Web Developer</span></li>
            <li id="dashboard"><a>Trang chủ</a></li>
            <li id="classes"><a>Lớp học</a></li>
            <li id="subjects"><a id="">Môn học</a></li>
            <li id="teachers"><a id="">Giáo viên</a></li>
            <li id="students"><a id="">Học sinh</a></li>
            <li id="results"><a id="">Bảng điểm</a></li>
        </ul>
    </div>
    <div id='center' class="main center">
        <?php include 'classes.php' ?>
    </div>
    <script>
        $(document).ready(function() {
            $("#dashboard").click(function() {
                $("#center").load('dashboard.php'); //? đẩy dữ liệu thay thế vào ô div có id là center(dòng 41)

            });

            $("#classes").click(function() {
                $("#center").load('classes.php');
            });

            $("#subjects").click(function() {
                $("#center").load('subjects.php');
            });

            $("#teachers").click(function() {
                $("#center").load('teachers.php');
            });
            $("#students").click(function() {
                $("#center").load('students.php');
            });
            $("#results").click(function() {
                $("#center").load('results.php');
            });
        });
    </script>
</body>

</html>