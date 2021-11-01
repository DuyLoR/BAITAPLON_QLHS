<?php
session_start();
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-start">Danh sách học sinh</h1>


            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>

<div class="col col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newStudent" href="javascript:void(0)">
                    <i class="fa fa-plus"></i>
                    Thêm
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="table cell-border table-bordered" id="list">
                <!-- <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="15%">
                    <col width="5%">
                    <col width="10%">
                    <col width="10%">
                    <col width="15%">
                    <col width="15%">
                    <col width="7.5%">
                    <col width="7.5%">


                </colgroup> -->
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã học sinh</th>
                        <th>Tên học sinh</th>
                        <th>Lớp</th>
                        <th>Giới tính</th>
                        <th>Tên phụ huynh</th>
                        <th>Địa chỉ</th>
                        <th>Khoá học</th>
                        <?php
                        if ($_SESSION['currentLevel'] == 1) {
                        ?>
                            <th class="text-center">Hành động</th>
                        <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <!-- Lấy dữ liệu từ database -->
                    <?php
                    //? mở kết nối
                    include '../config/config.php';
                    $sql = "SELECT * FROM hocsinh, lop WHERE hocsinh.malop = lop.malop";
                    $result = mysqli_query($conn, $sql);
                    //? xác thực
                    if (mysqli_num_rows($result) > 0) {
                        $stt = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <th class="text-center"><?php echo $stt++; ?></th>
                                <td><?php echo $row['mahs']; ?></td>
                                <td><?php echo $row['tenhs'] ?></td>
                                <td><?php echo $row['tenlop'] ?></td>
                                <td><?php echo ($row['gioitinh'] == 1 ? "Nam" : "Nữ"); ?></td>
                                <td><?php echo $row['tenph'] ?></td>
                                <td><?php echo $row['diachi'] ?></td>
                                <td><?php echo $row['khoahoc'] ?></td>
                                <!-- //? là admin thì mới hiện nút sửa -->
                                <?php
                                if ($_SESSION['currentLevel'] == 1) {
                                ?>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary btn-flat manage_class">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button name="<?php echo $row['mahs'];  ?>" class="btn btn-danger btn-flat deleteStudent">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                <?php
                                }
                                ?>

                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        //? import thư viện data table
        $('#list').dataTable()

        $('.newStudent').click(function() {
            $('#contents').load("add-student.php")
        })
    })
</script>