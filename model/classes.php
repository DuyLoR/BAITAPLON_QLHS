<?php
session_start();
if (isset($_SESSION['currentUser'])) {

?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-start">Danh sách lớp học</h1>
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
                        <a class="btn btn-block btn-sm btn-default btn-flat border-primary newClass" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="card-body">
                <table class="table cell-border table-bordered" id="list">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Mã lớp</th>
                            <th>Tên lớp</th>
                            <th>Giáo viên chủ nhiệm</th>

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
                        $sql = "SELECT * FROM lop, giaovien WHERE lop.magvcn = giaovien.magv";
                        $result = mysqli_query($conn, $sql);
                        //? xác thực
                        if (mysqli_num_rows($result) > 0) {
                            $stt = 1;
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <th class="text-center"><?php echo $stt++; ?></th>
                                    <td><?php echo $row['malop']; ?></td>
                                    <td><?php echo $row['tenlop'] ?></td>
                                    <td><?php echo $row['tengv'] ?></td>

                                    <!-- //? là admin thì mới hiện nút sửa -->
                                    <?php
                                    if ($_SESSION['currentLevel'] == 1) {
                                    ?>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button name="<?php echo $row['malop'] . ',' . $row['tenlop'] . ',' . $row['magv'];  ?>" class="btn btn-primary btn-flat editClass">
                                                    <i class="fas fa-edit"></i>

                                                </button>
                                                <button name="<?php echo $row['malop'];  ?>" class="btn btn-danger btn-flat deleteClass">
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
<?php
} else header('location:login.php');
?>
<script>
    $(document).ready(function() {
        //? import thư viện data table
        $('#list').dataTable()

        //? thêm lớp 
        $('.newClass').click(function() {
            $('#contents').load("./model/add-class.php")
        })


        //? xoá lớp 
        $('.deleteClass').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị name của hàng
            if (confirm("Bạn có muốn xoá lớp '" + $id + "' không?")) {
                //? nếu đồng ý
                $.ajax({
                    type: "post",
                    url: "./process/process-delete-class.php",
                    data: {
                        classId: $id,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            alert("Xoá thành công!")
                            $('#contents').load("./model/classes.php")
                        } else if (response == 'error') {
                            alert("Xoá thất bại")
                        }
                    }
                });
            } else return false;

        });


        //? sửa lớp 
        $('.editClass').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị name của hàng
            $classID = $id.split(",")[0];
            $className = $id.split(",")[1];
            $teacherID = $id.split(",")[2];
            $('#contents').load("./model/edit-class.php")

        });



    })
</script>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>