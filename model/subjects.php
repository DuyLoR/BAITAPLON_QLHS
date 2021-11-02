<?php
session_start();
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-start">Danh sách môn học</h1>

            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>

<div class="col col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newSubject"
                    href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table cell-border table-bordered" id="list">
                <!-- <colgroup>
                    <col width="10%">
                    <col width="15%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="15%">
                </colgroup> -->
                <thead class="mt-5">
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tiết</th>
                        <th>Tên giáo viên</th>
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
                    $sql = "SELECT * FROM monhoc, giaovien WHERE monhoc.magv = giaovien.magv";
                    $result = mysqli_query($conn, $sql);
                    //? xác thực
                    if (mysqli_num_rows($result) > 0) {
                        $stt = 1;
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <th class="text-center"><?php echo $stt++; ?></th>
                        <td><?php echo $row['mamh']; ?></td>
                        <td><?php echo $row['tenmh'] ?></td>
                        <td><?php echo $row['sotiet'] ?></td>
                        <td><?php echo $row['tengv'] ?></td>
                        <?php
                                if ($_SESSION['currentLevel'] == 1) {
                                ?>
                        <td class="text-center">
                            <div class="btn-group">
                                <button
                                    name="<?php echo $row['mamh'].','.$row['tenmh'].','.$row['sotiet'].','.$row['magv'];  ?>"
                                    class="btn btn-primary btn-flat manage_class editSubject">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button name="<?php echo $row['mamh'];  ?>"
                                    class="btn btn-danger btn-flat deleteSubject">
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    //? import thư viện data table
    $('#list').dataTable()

    $('.newSubject').click(function() {
        $('#contents').load("add-subject.php")
    })

    // Sửa học sinh

    $('.editSubject').click(function() {
        $id = $(this).attr('name'); //? bắt giá trị name của hàng

        $subjectID = $id.split(",")[0];
        $subjectName = $id.split(",")[1];
        $subjectPrice = $id.split(",")[2];
        $teacherID = $id.split(",")[3];

        $('#contents').load("edit-subject.php")
    })
<<<<<<< HEAD
</script>
<?php
    include 'footer.php';
?>
=======
    //? xoá môn học
    $('.deleteSubject').click(function() {
        $id = $(this).attr('name'); //? bắt giá trị name của hàng
        if (confirm("Bạn có muốn xoá môn học '" + $id + "' không?")) {
            //? nếu đồng ý
            $.ajax({
                type: "post",
                url: "../process/process-delete-subject.php",
                data: {
                    subjectId: $id,
                },
                success: function(response) {
                    if (response == 'success') {
                        alert("Xoá thành công!")
                        $('#contents').load("subjects.php")
                    } else if (response == 'error') {
                        alert("Xoá thất bại")
                    }
                }
            });
        } else return false;

    });
})
</script>
>>>>>>> master
