<div class="container-fluid">
    <h2 class="border-bottom border-info p-1">Sửa Điểm</h2>
    <div class="col-lg-12">
        <div class="card card-outline card-primary border-2 border-info mt-4">
            <div class="card-body ">
                <form action="" id="manage-student">
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <!-- gán dữ liệu từ js vào input -->
                                    <script>
                                    $("#subjectID").val($subjectID);
                                    $("#studentID").val($studentID);
                                    $("#markFirst").val($markFirst);
                                    $("#markSecond").val($markSecond);
                                    $("#markThird").val($markThird);
                                    </script>
                                    <label for="" class="control-label p-1 mt-1">Mã môn học#</label>
                                    <select id="subjectID" value="" class="custom-select custom-select-sm" required
                                        disabled>
                                        <!-- Lấy dữ liệu từ database -->
                                        <?php
                                    //? mở kết nối
                                    include '../config/config.php';
                                    $sql = "SELECT * FROM monhoc";
                                    $result = mysqli_query($conn, $sql);
                                    //? xác thực
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <option><?php echo $row['mamh']; ?></option>
                                        <?php
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã học sinh</label>
                                    <select id="studentID" value="" class="custom-select custom-select-sm" required
                                        disabled>
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
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Điểm miệng</label>
                                    <input type="number" class="form-control form-control-sm" id="markFirst" value=""
                                        required >
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Điểm giữa kỳ</label>
                                    <input type="number" class="form-control form-control-sm" id="markSecond" value=""
                                        required >
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Điểm cuối kỳ</label>
                                    <input type="number" class="form-control form-control-sm" id="markThird" value=""
                                        required >
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-footer border-top border-info">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <button class="btn btn-success  mx-2" id="btnSubmit">Lưu</button>
                    <a class="btn btn-success mx-2 backResult" href="#">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.backResult').click(function() {
        $('#contents').load("marks.php")
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
                url: "../process/process-edit-mark.php",
                data: {
                    subjectID: $subjectID,
                    studentID: $studentID,
                    markFirst: $markFirst,
                    markSecond: $markSecond,
                    markThird: $markThird,
                },
                success: function(response) {
                    if (response == "success") {
                        alert("Sửa thành công");
                        $('#contents').load("marks.php");
                    } else {
                        alert("Sửa thất bại");
                    }
                }
            });
        }

    });
})
</script>