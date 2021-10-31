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
})
</script>