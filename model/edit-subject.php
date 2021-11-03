<div class="container-fluid">
    <h2 class="border-bottom border-info p-1">Thay đổi thông tin môn học</h2>
    <div class="col-lg-12">
        <div class="card card-outline card-primary border-2 border-info mt-4">
            <div class="card-body ">
                <form action="" id="manage-student">
                    <?php
                    //? mở kết nối
                    include '../config/config.php';
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã môn học#</label>
                                    <input type="text" class="form-control form-control-sm" id="subjectID" value="" required disabled>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Tên môn học</label>
                                    <input type="text" class="form-control form-control-sm" id="subjectName" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Giáo viên</label>
                                    <select id="teacherID" id="" class="form-select form-select-sm" required>
                                        <?php
                                        $sql = "SELECT * FROM giaovien";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result)) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['magv'] . '">' . $row['tengv'] . '</option>';
                                            }
                                        }

                                        mysqli_close($conn);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group text-dark mb-3">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Số tiết</label>
                                    <input type="text" class="form-control form-control-sm" id="subjectPrice" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex w-100 justify-content-center align-items-center">
                            <button class="btn btn-primary  mx-2" type="submit" id="btnSubmit">Lưu</button>
                            <a class="btn btn-danger mx-2 backSubject" href="#">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // ? truyền dữ liệu
        $("#subjectID").val($subjectID);
        $("#subjectName").val($subjectName);
        $("#subjectPrice").val($subjectPrice);
        $("#teacherID").val($teacherID);


        $('.backSubject').click(function() {
            $('#contents').load("./model/subjects.php")
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
                    url: "./process/process-edit-subject.php",
                    data: {
                        subjectName: $subjectName,
                        subjectID: $subjectID,
                        subjectPrice: $subjectPrice,
                        teacherID: $teacherID,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Sửa thành công");
                            $('#contents').load("./model/subjects.php");
                        } else {
                            alert("Sửa thất bại");
                        }
                    }
                });
            }

        });
    })
</script>