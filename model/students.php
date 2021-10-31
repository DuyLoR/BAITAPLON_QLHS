<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-start">Danh sách học sinh</h1>


            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>

<div class="col col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newStudent" href="javascript:void(0)">
                    <i class="fa fa-plus"></i>
                    Thêm
                </a>
            </div>
        </div>

        <div class="card-body">
            <table class="table cell-border" id="list">
                <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="15%">
                    <col width="5%">
                    <col width="10%">
                    <col width="10%">
                    <col width="15%">
                    <col width="15%">
                    <col width="7.5%">
                    <col width="7.5%">


                </colgroup>
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã học sinh</th>
                        <th>Tên học sinh</th>
                        <th>Lớp</th>
                        <th>Giới tính</th>
                        <th>Dân tộc</th>
                        <th>Địa chỉ</th>
                        <th>Số CCCD</th>
                        <th>Khoá học</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center">1</th>
                        <td>hs1</td>
                        <td>Nguyễn Văn Phú</td>
                        <td>61th1</td>
                        <td>Nam</td>
                        <td>Kinh</td>
                        <td>Hà Nam</td>
                        <td>035201002706</td>
                        <td>61</td>
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
        $('#list').dataTable()
        $('.newStudent').click(function() {
            $('#contents').load("add-student.php")
        })
    })
</script>