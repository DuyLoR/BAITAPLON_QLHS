<?php
session_start();
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-start">Danh sách tài khoản</h1>
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
                    <a class="btn btn-block btn-sm btn-default btn-flat border-primary newAccount" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
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
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Mã người dùng</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Lấy dữ liệu từ database -->
                    <?php
                    //? mở kết nối
                    include '../config/config.php';
                    $sql = "SELECT * FROM dangnhap";
                    $result = mysqli_query($conn, $sql);
                    //? xác thực
                    if (mysqli_num_rows($result) > 0) {
                        $stt = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <th class="text-center"><?php echo $stt++; ?></th>
                                <td><?php echo $row['tendangnhap'] ?></td>
                                <td><?php echo $row['matkhau'] ?></td>
                                <td><?php echo ($row['mahs'] == null ? $row['magv'] : $row['mahs']) ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button name="<?php ?>" class="btn btn-primary btn-flat editAccount">
                                            <i class="fas fa-edit"></i>

                                        </button>
                                        <button name="<?php echo $row['tendangnhap'] ?>" class="btn btn-danger btn-flat deleteAccount">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
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

        //? thêm lớp 
        $('.newAccount').click(function() {
            $('#contents').load("add-account.php")
        })


        //? xoá tài khản
        $('.deleteAccount').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị name của hàng
            if (confirm("Bạn có muốn xoá tài khoản '" + $id + "' không?")) {
                //? nếu đồng ý
                $.ajax({
                    type: "post",
                    url: "../process/process-delete-account.php",
                    data: {
                        userName: $id,
                    },
                    success: function(response) {
                        if (response == 'success') {
                            alert("Xoá thành công!")
                            $('#contents').load("accounts.php")
                        } else if (response == 'error') {
                            alert("Xoá thất bại")
                        }
                    }
                });
            } else return false;

        });


        //? sửa tài khoản
        $('.editClass').click(function() {
            $id = $(this).attr('name'); //? bắt giá trị name của hàng
            $classID = $id.split(",")[0];
            $className = $id.split(",")[1];
            $teacherID = $id.split(",")[2];
            $('#contents').load("edit-class.php")

        });



    })
</script>