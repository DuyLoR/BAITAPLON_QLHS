<div class="container-fluid">
    <h2 class="border-bottom border-info p-1">Thêm Điểm</h2>
    <div class="col-lg-12">
        <div class="card card-outline card-primary border-2 border-info mt-4">
            <div class="card-body ">
                <form action="../process/process-add-class.php" id="manage-student" method="post">
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã Lớp học#</label>
                                    <input type="text" class="form-control form-control-sm" name="classID" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Tên lớp học</label>
                                    <input type="text" class="form-control form-control-sm" name="className" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã giáo viên chủ nhiệm</label>
                                    <select name="teacherID" id="" class="custom-select custom-select-sm" required>
                                        <!-- Lấy dữ liệu từ database -->
                                        <?php
                                    //? mở kết nối
                                    include '../config/config.php';
                                    $sql = "SELECT * FROM giaovien";
                                    $result = mysqli_query($conn, $sql);
                                    //? xác thực
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option><?php echo $row['magv']; ?></option>
                                        <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="card-footer ">
                            <div class="d-flex w-100 justify-content-center align-items-center">
                                <button class="btn btn-success  mx-2" type="submit" name = "btnSubmit">Lưu</button>
                                <a class="btn btn-success mx-2 backResult" href="#">Quay lại</a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.backResult').click(function() {
        $('#contents').load("results.php")
    })
})
</script>