<div class="container-fluid">
    <h2 class="border-bottom border-info p-1">Sửa học sinh</h2>
    <div class="col-lg-12">
        <div class="card card-outline card-primary border-2 border-info mt-4">
            <div class="card-body ">
                <form action="" id="manage-student">
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <script>
                                    $("#studentID").val($studentID);
                                    $("#studentName").val($studentName);
                                    $("#classID").val($classID);
                                    $("#studentGender").val($studentGender == 1 ?"Nam":"Nữ");
                                    $("#studentAddress").val($studentAddress);
                                    $("#course").val($course);
                                    $("#parentName").val($parentName);
                                    $("#parentEmail").val($parentEmail);
                                    $("#parentPhone").val($parentPhone);
                                    </script>
                                    <label for="" class="control-label p-1 mt-1">Mã học sinh#</label>
                                    <input type="text" class="form-control form-control-sm" id="studentID" value=""
                                        required disabled>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Họ và tên</label>
                                    <input type="text" class="form-control form-control-sm" id="studentName" value=""
                                        required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label p-1 mt-1">Giới tính</label>
                                <select id="studentGender" id="" class="custom-select custom-select-sm" required>
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Địa chỉ</label>
                                    <textarea id="studentAddress" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">

                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã lớp</label>
                                    <select id="classID" id="" class="custom-select custom-select-sm" required>
                                        <!-- Lấy dữ liệu từ database -->
                                        <?php
                                    //? mở kết nối
                                    include '../config/config.php';
                                    $sql = "SELECT * FROM lop";
                                    $result = mysqli_query($conn, $sql);
                                    //? xác thực
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option><?php echo $row['malop']; ?></option>
                                        <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">khóa học</label>
                                    <input type="text" class="form-control form-control-sm" id="course" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Tên phụ huynh</label>
                                    <input type="text" class="form-control form-control-sm" id="parentName" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">số điện thoại</label>
                                    <input type="text" class="form-control form-control-sm" id="parentPhone" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">email</label>
                                    <input type="text" class="form-control form-control-sm" id="parentEmail" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <div class="d-flex w-100 justify-content-center align-items-center">
                            <button class="btn btn-success  mx-2" type="submit" id="btnSubmit"
                                id="btnSubmit">Lưu</button>
                            <a class="btn btn-success mx-2 backStudent" href="#">Quay lại</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.backStudent').click(function() {
        $('#contents').load("students.php")
    })

    $('#btnSubmit').click(function() {
        $studentID = $('#studentID').val();
        $studentName = $('#studentName').val();
        $studentGender = $('#studentGender').val() == "Nam"?"1":"0";
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
                url: "../process/process-edit-student.php",
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
                        alert("Sửa thành công");
                        $('#contents').load("students.php");
                    } else {
                        alert("sửa thất bại");
                    }
                }
            });
        }

    });
})
</script>