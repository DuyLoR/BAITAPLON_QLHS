<?php
session_start();
if ($_SESSION['currentLevel'] == 1 || $_SESSION['currentLevel'] == 2) {

?>
    <div class="container-fluid">
        <h2 class="border-bottom border-info p-1">Thêm giáo viên</h2>
        <div class="col-lg-12">
            <div class="card card-outline card-primary border-2 border-info mt-4">
                <div class="card-body ">
                    <form action="" id="manage-student">
                        <input type="hidden" name="id" value="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Mã giáo viên#</label>
                                        <input type="text" class="form-control form-control-sm" id="teacherID" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Họ và tên</label>
                                        <input type="text" class="form-control form-control-sm" id="teacherName" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Chức vụ</label>
                                        <input type="text" class="form-control form-control-sm" id="teacherPosition" value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Giới tính</label>
                                    <select id="teacherGender" id="" class="form-select form-select-sm" required>
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Số điện thoại</label>
                                        <input type="tel" class="form-control form-control-sm" id="teacherPhone" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Email</label>
                                        <input type="text" class="form-control form-control-sm" id="teacherEmail" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Địa chỉ</label>
                                        <input id="teacherAddress" class="form-control form-control-sm"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-3">
                            <div class="d-flex w-100 justify-content-center align-items-center">
                                <button class="btn btn-success  mx-2" type="submit" id="btnSubmit">Lưu</button>
                                <a class="btn btn-danger mx-2 backTeacher" href="#">Quay lại</a>
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
        $('.backTeacher').click(function() {
            $('#contents').load("./model/teachers.php")
        })

        $('#btnSubmit').click(function() {
            $teacherID = $('#teacherID').val();
            $teacherName = $('#teacherName').val();
            $teacherGender = $('#teacherGender').val();
            $teacherPosition = $('#teacherPosition').val();
            $teacherAddress = $('#teacherAddress').val();
            $teacherEmail = $('#teacherEmail').val();
            $teacherPhone = $('#teacherPhone').val();

            if ($teacherID == "" || $teacherName == "" || $teacherAddress == "" || $teacherGender == "" ||
                $teacherPosition == "" || $teacherEmail == "" || $teacherPhone == "") {
                alert("Vui lòng nhập đủ thông tin");
            } else {
                $.ajax({
                    type: "post",
                    url: "./process/process-add-teacher.php",
                    data: {
                        teacherID: $teacherID,
                        teacherName: $teacherName,
                        teacherGender: $teacherGender,
                        teacherPosition: $teacherPosition,
                        teacherAddress: $teacherAddress,
                        teacherEmail: $teacherEmail,
                        teacherPhone: $teacherPhone,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Thêm thành công");
                            $('#contents').load("./model/teachers.php");
                        } else {
                            alert("Thêm thất bại");
                        }
                    }
                });
            }

        });
    })
</script>
<?php
    //? đóng kết nối
    mysqli_close($conn);
?>