

<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1 class="m-0 text-start">Bảng điểm</h1>

            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>

<div class="col col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newResult" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table cell-border" id="list">
                <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="20%">
                    <col width="15%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                </colgroup>
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã học sinh</th>
                        <th>Tên học sinh</th>
                        <th>Tên môn học</th>
                        <th>Học Kỳ</th>
                        <th>Điểm cc</th>
                        <th>Điểm giữa kỳ</th>
                        <th>Điểm thi</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">1</th>
                        <td>hs1</td>
                        <td>Nguyễn Văn Phú</td>
                        <td>Toán</td>
                        <td>1</td>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-flat manage_class">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-danger btn-flat delete_class">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.newResult').click(function() {
            $('#contents').load("add-mark.php")
        })
    })
</script>
