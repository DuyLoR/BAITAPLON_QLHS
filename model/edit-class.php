<div class="container-fluid">
    <h2 class="border-bottom border-info p-1">Thay đổi thông tin lớp học</h2>
    <div class="col-lg-12">
        <div class="card card-outline card-primary border-2 border-info mt-4">
            <div class="card-body ">
                <form action="" id="manage-student">
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">

                                    <!-- Lấy dữ liệu từ database -->
                                    <?php
                                    //? mở kết nối
                                    include '../config/config.php';

                                    ?>
                                    <label for="" class="control-label p-1 mt-1">Mã Lớp học#</label>
                                    <input type="text" class="form-control form-control-sm" id="classID" value="" required disabled>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Tên lớp học</label>
                                    <input type="text" class="form-control form-control-sm" id="className" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Giáo viên chủ nhiệm</label>
                                    <select id="teacherID" id="" class="form-select form-select-sm mb-3" required>
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
                            <div class="form-group text-dark">
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="card-footer ">
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
        $("#classID").val($classID);
        $("#className").val($className);
        $("#teacherID").val($teacherID);

        $('.backResult').click(function() {
            $('#contents').load("./model/classes.php")
        })

        $('#btnSubmit').click(function() {
            $classID = $('#classID').val();
            $className = $('#className').val();
            $teacherID = $('#teacherID').val();

            if ($classID == "" || $className == "" || $teacherID == "") {
                alert("Vui lòng nhập đủ thông tin");
            } else {
                $.ajax({
                    type: "post",
                    url: "./process/process-edit-class.php",
                    data: {
                        classID: $classID,
                        className: $className,
                        teacherID: $teacherID,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("sửa thành công");
                            $('#contents').load("./model/classes.php");
                        } else {
                            alert("sửa thất bại");
                        }
                    }
                });
            }

        });
    })
</script>