<?php
session_start();
if ($_SESSION['currentLevel'] == 1 || $_SESSION['currentLevel'] == 2) {

?>
    <div class="container-fluid">
        <h2 class="border-bottom border-info p-1">Thêm học sinh</h2>
        <div class="col-lg-12">
            <div class="card card-outline card-primary border-2 border-info mt-4">
                <div class="card-body ">
                    <form action="" id="manage-student">
                        <input type="hidden" name="id" value="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Mã học sinh#</label>
                                        <input type="text" class="form-control form-control-sm" id="studentID" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Họ và tên</label>
                                        <input type="text" class="form-control form-control-sm" id="studentName" value="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Giới tính</label>
                                    <select id="studentGender" id="" class="form-select form-select-sm" required>
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>


                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Tên lớp</label>
                                        <select id="classID" id="" class="form-select form-select-sm" required>
                                            <!-- Lấy dữ liệu từ database -->
                                            <?php
                                            //? mở kết nối
                                            include '../config/config.php';
                                            $sql = "SELECT * FROM lop";
                                            $result = mysqli_query($conn, $sql);
                                            //? xác thực
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row['malop'] . '">' . $row['tenlop'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Địa chỉ</label>
                                        <input id="studentAddress" class="form-control"></input>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6">


                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Khóa học</label>
                                        <input type="text" class="form-control form-control-sm" id="course" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Tên phụ huynh</label>
                                        <input type="text" class="form-control form-control-sm" id="parentName" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Số điện thoại</label>
                                        <input type="text" class="form-control form-control-sm" id="parentPhone" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Email</label>
                                        <input type="text" class="form-control form-control-sm" id="parentEmail" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-3">
                            <div class="d-flex w-100 justify-content-center align-items-center">
                                <button class="btn btn-primary  mx-2" type="submit" id="btnSubmit" id="btnSubmit">Lưu</button>
                                <a class="btn btn-danger mx-2 backStudent" href="#">Quay lại</a>
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
        $('.backStudent').click(function() {
            $('#contents').load("./model/students.php")
        })

        $('#btnSubmit').click(function() {
            $studentID = $('#studentID').val();
            $studentName = $('#studentName').val();
            $studentGender = $('#studentGender').val();
            $classID = $('#classID').val();
            $studentAddress = $('#studentAddress').val();
            $course = $('#course').val();
            $parentName = $('#parentName').val();
            $parentPhone = $('#parentPhone').val();
            $parentEmail = $('#parentEmail').val();

            if ($studentID == "" || $studentName == "" || $studentAddress == "" || $course == "" ||
                $parentName == "" || $parentPhone == "" || $parentEmail == "") {
                alert("Vui lòng nhập đủ thông tin");
            } else {
                $.ajax({
                    type: "post",
                    url: "./process/process-add-student.php",
                    data: {
                        studentName: $studentName,
                        studentID: $studentID,
                        studentGender: $studentGender,
                        classID: $classID,
                        studentAddress: $studentAddress,
                        course: $course,
                        parentName: $parentName,
                        parentPhone: $parentPhone,
                        parentEmail: $parentEmail,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Thêm thành công");
                            $('#contents').load("./model/students.php");
                        } else {
                            alert("Thêm thất bại");
                        }
                    }
                });
            }

        });
    })
</script>