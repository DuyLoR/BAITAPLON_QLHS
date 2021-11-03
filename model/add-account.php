<?php
session_start();
if ($_SESSION['currentLevel'] == 1) {

?>
    <div class="container-fluid">
        <h2 class="border-bottom border-info p-1">Thêm tài khoản</h2>
        <div class="col-lg-12">
            <div class="card card-outline card-primary border-2 border-info mt-4">
                <div class="card-body ">
                    <form action="" id="manage-student">
                        <input type="hidden" name="id" value="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Tên đăng nhập#</label>
                                        <input type="text" class="form-control form-control-sm" id="userName" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Mật khẩu</label>
                                        <input type="text" class="form-control form-control-sm" id="password" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Cấp độ</label>
                                        <select id="level" class="form-select form-select-sm" required>
                                            <option value="1">Admin</option>
                                            <option value="2">Giáo viên</option>
                                            <option value="0">Học sinh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Mã giáo viên</label>
                                        <select id="teacherId" class="form-select form-select-sm" required disabled>
                                            <!-- Lấy dữ liệu từ database -->
                                            <?php
                                            //? mở kết nối
                                            include '../config/config.php';
                                            $sql = "SELECT * FROM giaovien";
                                            $result = mysqli_query($conn, $sql);
                                            //? xác thực
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row['magv'] . '">' . $row['magv'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Mã học sinh</label>
                                        <select id="studentId" class="form-select form-select-sm" required disabled>
                                            <!-- Lấy dữ liệu từ database -->
                                            <?php
                                            //? mở kết nối
                                            include '../config/config.php';
                                            $sql = "SELECT * FROM hocsinh";
                                            $result = mysqli_query($conn, $sql);
                                            //? xác thực
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row['mahs'] . '">' . $row['mahs'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer mt-4">
                                <div class="d-flex w-100 justify-content-center align-items-center">
                                    <button class="btn btn-primary  mx-2" type="submit" name="btnSubmit" id="btnSubmit">Lưu</button>
                                    <a class="btn btn-danger mx-2 backResult" href="#">Quay lại</a>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
<?php
} else header('location:login.php');
?>
<script>
    $(document).ready(function() {
        // ? thiết lập mặc định
        $('#studentId').val(null)
        $('#teacherId').val(null)

        // $('#teacherId').prop("disabled", false);
        $('#level').change(function() {
            if (this.value == 2) {
                $('#teacherId').prop("disabled", false)
                $('#studentId').prop("disabled", true)
                $('#studentId').val(null)


            } else if (this.value == 0) {
                $('#studentId').prop("disabled", false)
                $('#teacherId').prop("disabled", true)
                $('#teacherId').val(null)


            } else if (this.value == 1) {
                $('#teacherId').prop("disabled", true)
                $('#studentId').prop("disabled", true)
                $('#studentId').val(null)
                $('#teacherId').val(null)
            }

        });

        // ? quay lại
        $('.backResult').click(function() {
            $('#contents').load("./model/accounts.php")
        })

        // ? thêm tài khoản
        $('#btnSubmit').click(function() {
            $userName = $('#userName').val();
            $password = $('#password').val();
            $level = $('#level').val();
            $teacherId = $('#teacherId').val();
            $studentId = $('#studentId').val();


            if ($userName == "" || $password == "" || $level == "") {
                alert("Vui lòng nhập đủ thông tin");
            } else {
                $.ajax({
                    type: "post",
                    url: "./process/process-add-account.php",
                    data: {
                        userName: $userName,
                        password: $password,
                        level: $level,
                        teacherId: $teacherId,
                        studentId: $studentId,

                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Thêm thành công");
                            $('#contents').load("./model/accounts.php");
                        } else {
                            alert("Thêm thất bại");
                        }
                    }
                });
            }

        });
    })
</script>