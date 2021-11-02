<div class="container-fluid">
    <h2 class="border-bottom border-info p-1">Thay đổi thông tin học sinh</h2>
    <div class="col-lg-12">
        <div class="card card-outline card-primary border-2 border-info mt-4">
            <div class="card-body ">
                <form action="" id="manage-student">
                    <!-- Lấy dữ liệu từ database -->
                    <?php
                    //? mở kết nối
                    include '../config/config.php';
                    ?>
                    <div class="form-group text-dark">
                        <div class="form-group">
                            <label for="" class="control-label p-1 mt-1">Mã học sinh#</label>
                            <input type="text" class="form-control form-control-sm" id="studentId" value="" required disabled>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Tên học sinh</label>
                                    <input type="text" class="form-control form-control-sm" id="studentName" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Tên lớp học</label> <br>
                                    <select id="classId" class="form-select form-select-sm" required>
                                        <?php
                                        $sql = "SELECT * FROM lop";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result)) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['malop'] . '">' . $row['tenlop'] . '</option>';
                                            }
                                        }

                                        mysqli_close($conn);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Giới tính</label>
                                    <select id="gender" class="form-select form-select-sm" required>
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Khoá học</label>
                                    <input type="text" class="form-control form-control-sm" id="year" value="" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Địa chỉ</label>
                                    <input type="text" class="form-control form-control-sm" id="address" value="" required>
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
                                    <label for="" class="control-label p-1 mt-1">Số điện thoại phụ huynh</label>
                                    <input type="tel" class="form-control form-control-sm" id="parentPhone" value="" required>
                                </div>
                            </div>

                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Email phụ huynh</label>
                                    <input type="tel" class="form-control form-control-sm" id="parentEmail" value="" required>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer mt-2">
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

<script>
    $(document).ready(function() {
        //? truyền dữ liệu
        $("#studentId").val($studentId);
        $("#studentName").val($studentName);
        $("#classId").val($classId);
        $("#gender").val($gender);
        $("#year").val($year);
        $("#address").val($address);
        $("#parentName").val($parentName);
        $("#parentPhone").val($parentPhone);
        $("#parentEmail").val($parentEmail);

        //? quay lại
        $('.backResult').click(function() {
            $('#contents').load("students.php")
        })

        //? gửi
        $('#btnSubmit').click(function() {
            $studentId = $('#studentId').val();
            $studentName = $('#studentName').val();
            $classId = $('#classId').val();
            $gender = $('#gender').val();
            $year = $('#year').val();
            $address = $('#address').val();
            $parentName = $('#parentName').val();
            $parentPhone = $('#parentPhone').val();
            $parentEmail = $('#parentEmail').val();

            //? bắt nhập đủ
            if ($studentId == "" || $studentName == "" || $parentName == "" || $address == "" || $year == "" || $parentPhone == "" || $parentEmail == "") {
                alert("Vui lòng nhập đủ thông tin");
            } else {
                $.ajax({
                    type: "post",
                    url: "../process/process-edit-student.php",
                    data: {
                        studentId: $studentId,
                        studentName: $studentName,
                        classId: $classId,
                        gender: $gender,
                        year: $year,
                        address: $address,
                        parentName: $parentName,
                        parentPhone: $parentPhone,
                        parentEmail: $parentEmail,

                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("sửa thành công");
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