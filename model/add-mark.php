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
                                    <label for="" class="control-label p-1 mt-1">Mã môn học#</label>
                                    <input type="text" class="form-control form-control-sm" name="student_code" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Mã học sinh</label>
                                    <input type="text" class="form-control form-control-sm" name="student_code" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Học Kỳ</label>
                                    <input type="text" class="form-control form-control-sm" name="student_code" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Điểm miệng</label>
                                    <input type="text" class="form-control form-control-sm" name="student_code" value="" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">



                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Điểm giữa kỳ</label>
                                    <input type="text" class="form-control form-control-sm" name="student_code" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Điểm cuối kỳ</label>
                                    <input type="text" class="form-control form-control-sm" name="student_code" value="" required>
                                </div>
                            </div>
                            <div class="form-group text-dark">
                                <div class="form-group">
                                    <label for="" class="control-label p-1 mt-1">Điểm trung bình</label>
                                    <input type="text" class="form-control form-control-sm" name="student_code" value="" required>
                                </div>
                            </div>




                        </div>
                    </div>

                </form>

            </div>
            <div class="card-footer border-top border-info">
                <div class="d-flex w-100 justify-content-center align-items-center">
                    <button class="btn btn-success  mx-2" form="#">Lưu</button>
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
    })
</script>