<?php
session_start();
?>
<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1 class="m-0 text-start">Bảng điểm</h1>

            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>

<div class="col col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newResult" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table cell-border table-bordered" id="list">
                <!-- <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="20%">
                    <col width="15%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                </colgroup> -->
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã học sinh</th>
                        <th>Tên học sinh</th>
                        <th>Tên môn học</th>
                        <th>Điểm miệng</th>
                        <th>Điểm giữa kỳ</th>
                        <th>Điểm cuối kỳ</th>
                        <th>Điểm trung bình</th>
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
                    $sql = "SELECT * FROM diem, monhoc, hocsinh WHERE diem.mamh = monhoc.mamh and diem.mahs = hocsinh.mahs";
                    $result = mysqli_query($conn, $sql);
                    //? xác thực
                    if (mysqli_num_rows($result) > 0) {
                        $stt = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <th class="text-center"><?php echo $stt++; ?></th>
                                <td><?php echo $row['mahs']; ?></td>
                                <td><?php echo $row['tenhs'] ?></td>
                                <td><?php echo $row['tenmh'] ?></td>
                                <td><?php echo $row['diemm'] ?></td>
                                <td><?php echo $row['diemgk'] ?></td>
                                <td><?php echo $row['diemck'] ?></td>
                                <td><?php echo ($row['diemm'] + $row['diemgk'] * 2 + $row['diemck'] * 3) / 6; ?></td>
                                <!-- //? là admin thì mới hiện nút sửa -->
                                <?php
                                if ($_SESSION['currentLevel'] == 1) {
                                ?>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary btn-flat manage_class">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button name="<?php echo $row['mahs'];  ?>" class="btn btn-danger btn-flat deleteMark">
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

        $('.newResult').click(function() {
            $('#contents').load("add-mark.php")
        })
    })
</script>
<?php
    include 'footer.php';
?>