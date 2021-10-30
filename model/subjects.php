
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
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newSubject" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table cell-border" id="list">
                <colgroup>
                    <col width="10%">
                    <col width="15%">
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                    <col width="15%">
                </colgroup>
                <thead class="mt-5">
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tiết</th>
                        <th>Tên giáo viên</th>
                        <th class="text-center">Hành động</th>
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
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary btn-flat manage_class">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-flat delete_class">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
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
        $('.newSubject').click(function() {
            $('#contents').load("add-subject.php")
        })
    })
</script>


