<?php
session_start();
if ($_SESSION['currentLevel'] == 1 || $_SESSION['currentLevel'] == 2) {

?>
    <div class="container-fluid">
        <h2 class="border-bottom border-info p-1">Thêm Điểm</h2>
        <div class="col-lg-12">
            <div class="card card-outline card-primary border-2 border-info mt-4">
                <div class="card-body ">
                    <form action="" id="manage-student">
                        <input type="hidden" name="id" value="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Môn học#</label>
                                        <select id="subjectID" id="" class="form-select form-select-sm" required>
                                            <!-- Lấy dữ liệu từ database -->
                                            <?php
                                            //? mở kết nối
                                            include '../config/config.php';
                                            $sql = "SELECT * FROM monhoc";
                                            $result = mysqli_query($conn, $sql);
                                            //? xác thực
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<option value="' . $row['mamh'] . '">' . $row['tenmh'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Mã học sinh</label>
                                        <select id="studentID" id="" class="form-select form-select-sm" required>
                                            <!-- Lấy dữ liệu từ database -->
                                            <?php
                                            $sql = "SELECT * FROM hocsinh";
                                            $result = mysqli_query($conn, $sql);
                                            //? xác thực
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <option><?php echo $row['mahs']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                            </div>


                            <div class="col-md-6">
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Điểm miệng</label>
                                        <input type="number" class="form-control form-control-sm" id="markFirst" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Điểm giữa kỳ</label>
                                        <input type="number" class="form-control form-control-sm" id="markSecond" value="" required>
                                    </div>
                                </div>
                                <div class="form-group text-dark">
                                    <div class="form-group">
                                        <label for="" class="control-label p-1 mt-1">Điểm cuối kỳ</label>
                                        <input type="number" class="form-control form-control-sm" id="markThird" value="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card-footer border-top border-info">
                    <div class="d-flex w-100 justify-content-center align-items-center">
                        <button class="btn btn-primary  mx-2" id="btnSubmit">Lưu</button>
                        <a class="btn btn-danger mx-2 backResult" href="#">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} else header('location:login.php');
?>
<script>
    $(document).ready(function() {
        $('.backResult').click(function() {
            $('#contents').load("./model/marks.php")
        })

        $('#btnSubmit').click(function() {
            $subjectID = $('#subjectID').val();
            $studentID = $('#studentID').val();
            $markFirst = $('#markFirst').val();
            $markSecond = $('#markSecond').val();
            $markThird = $('#markThird').val();

            if ($markFirst == "" || $markSecond == "" || $markThird == "") {
                alert("Vui lòng nhập đủ thông tin");
            } else {
                $.ajax({
                    type: "post",
                    url: "./process/process-add-mark.php",
                    data: {
                        subjectID: $subjectID,
                        studentID: $studentID,
                        markFirst: $markFirst,
                        markSecond: $markSecond,
                        markThird: $markThird,
                    },
                    success: function(response) {
                        if (response == "success") {
                            alert("Thêm thành công");
                            $('#contents').load("./model/marks.php");
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