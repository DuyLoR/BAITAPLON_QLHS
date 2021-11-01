<div class="container-fluid">
    <h2 class="border-bottom border-info p-1">Thêm môn học</h2>
    <div class="col-lg-12">
        <div class="card card-outline card-primary border-2 border-info mt-4">
            <div class="card-body ">
                <form action="" id="manage-student">
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã môn học#</label>
                                    <input type="text" class="form-control form-control-sm" id="subjectID" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Tên môn học</label>
                                    <input type="text" class="form-control form-control-sm" id="subjectName" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã giáo viên</label>
                                    <select id="teacherID" id="" class="custom-select custom-select-sm" required>
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
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Số tiết</label>
                                    <input type="text" class="form-control form-control-sm" id="subjectPrice" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex w-100 justify-content-center align-items-center">
                            <button class="btn btn-success  mx-2" type="submit" id="btnSubmit">Lưu</button>
                            <a class="btn btn-success mx-2 backSubject" href="#">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.backSubject').click(function() {
        $('#contents').load("subjects.php")
    })

    $('#btnSubmit').click(function() {
        $subjectID = $('#subjectID').val();
        $subjectName = $('#subjectName').val();
        $subjectPrice = $('#subjectPrice').val();
        $teacherID = $('#teacherID').val();

        if ($subjectID == "" || $subjectName == "" || $subjectPrice == "" || $teacherID == "") {
            alert("Vui lòng nhập đủ thông tin");
        } else {
            $.ajax({
                type: "post",
                url: "../process/process-add-subject.php",
                data: {
                    subjectName: $subjectName,
                    subjectID: $subjectID,
                    subjectPrice: $subjectPrice,
                    teacherID: $teacherID,
                },
                success: function(response) {
                    if (response == "success") {
                        alert("Thêm thành công");
                        $('#contents').load("subjects.php");
                    } else {
                        alert("Thêm thất bại");
                    }
                }
            });
        }

    });
})
</script>