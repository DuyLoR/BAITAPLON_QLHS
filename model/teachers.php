<?php
session_start();
if (isset($_SESSION['currentUser'])) {
?>
    <div class="conten-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                    <h1 class="m-0 text-start">Danh sách giáo viên</h1>

                </div>
            </div>
            <hr class="border-primary">
        </div>
    </div>

    <div class="col col-lg-12">
        <div class="card card-outline card-primary">
            <!-- //? là admin thì mới có quyền chỉnh sửa -->
            <?php
            if ($_SESSION['currentLevel'] == 1) {
            ?>
                <div class="card-header">
                    <div class="card-tools">
                        <a class="btn btn-block btn-sm btn-default btn-flat border-primary newTeacher" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="card-body">
                <table class="table cell-border table-bordered" id="list">
                    <!-- <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="10%">
                    <col width="7.5%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="5%">
                </colgroup> -->
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Mã giáo viên</th>
                            <th>Tên giáo viên</th>
                            <th>Giới tính</th>
                            <th>Chức vụ</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <!-- //? là admin thì mới có quyền chỉnh sửa -->
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
                        $sql = "SELECT * FROM giaovien";
                        $result = mysqli_query($conn, $sql);
                        //? xác thực
                        if (mysqli_num_rows($result) > 0) {
                            $stt = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <th class="text-center"><?php echo $stt++; ?></th>
                                    <td><?php echo $row['magv']; ?></td>
                                    <td><?php echo $row['tengv'] ?></td>
                                    <td><?php echo ($row['gioitinh'] == 1 ? "Nam" : "Nữ"); ?></td>
                                    <td><?php echo $row['chucvu'] ?></td>
                                    <td><?php echo $row['sodt'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['diachi'] ?></td>
                                    <!-- session phân chia vai trò -->
                                    <?php
                                    if ($_SESSION['currentLevel'] == 1) {
                                    ?>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button name="<?php echo $row['magv'] . ',' . $row['tengv'] . ',' . $row['gioitinh'] . ',' . $row['chucvu'] . ',' . $row['sodt'] . ',' . $row['email'] . ',' . $row['diachi'];  ?>" class="btn btn-primary btn-flat manage_class editTeacher">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button name="<?php echo $row['magv'];  ?>" class="btn btn-danger btn-flat deleteTeacher">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    <?php
                                    }
                                    ?>
                                    <!-- session phân chia vai trò -->
                            <?php
                            }
                        }
                            ?>
                                </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
} else header('location:login.php');
?>

<script>
    $(document).ready(function() {
        //? import thư viện data table
        $('#list').dataTable()

        $('.newTeacher').click(function() {
            $('#contents').load("./model/add-teacher.php")
        })

        // Sửa giáo viên

        $('.editTeacher').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị name của hàng

            $teacherID = $id.split(",")[0];
            $teacherName = $id.split(",")[1];
            $teacherGender = $id.split(",")[2];
            $teacherPosition = $id.split(",")[3];
            $teacherPhone = $id.split(",")[4];
            $teacherEmail = $id.split(",")[5];
            $teacherAddress = $id.split(",")[6];

            $('#contents').load("./model/edit-teacher.php")
        })

        //? xoá giáo viên
        $('.deleteTeacher').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị name của hàng
            if (confirm("Bạn có muốn xoá giáo viên '" + $id + "' không?")) {
                //? nếu đồng ý
                $.ajax({
                    type: "post",
                    url: "./process/process-delete-teacher.php",
                    data: {
                        teacherId: $id,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            alert("Xoá thành công!")
                            $('#contents').load("./model/teachers.php")
                        } else if (response == 'error') {
                            alert("Xoá thất bại")
                        }
                    }
                });
            } else return false;

        });
    })
</script><?php
    //? đóng kết nối
    mysqli_close($conn);
?>