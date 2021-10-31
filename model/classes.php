<?php
session_start();
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
        <div class="card-header">
            <div class="card-tools">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newClass" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered" id="list">
                <!-- <colgroup>
                    <col width="10%">
                    <col width="20%">
                    <col width="20%">
                    <col width="30%">
                    <col width="20%">

                </colgroup> -->
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
                                            <a href="#" class="btn btn-primary btn-flat manage_class">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button name="<?php echo $row['malop'] ?>" type="button" class="btn btn-danger btn-flat deleteClass">
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
        //? thêm lớp
        $('.newClass').click(function() {
            $('#contents').load("add-class.php")
        })

        //? xoá lớp 
        $('.deleteClass').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị name của hàng
            if (confirm("Bạn có muốn xoá lớp " + $id + " không?")) {
                //? nếu đồng ý
                $.ajax({
                    type: "post",
                    url: "../process/process-delete-class.php",
                    data: {
                        classId: $id,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            alert("Xoá thành công!")
                            location.reload()
                        } else if (response == 'error') {
                            alert("Xoá thất bại")
                        }
                    }
                });
            } else return false;

        });
    })
</script>