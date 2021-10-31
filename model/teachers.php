<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

                <h1 class="m-0 text-start">Danh sách giáo viên</h1>

            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>

<div class="col col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <a class="btn btn-block btn-sm btn-default btn-flat border-primary newTeacher" href="javascript:void(0)"><i class="fa fa-plus"></i>Thêm</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table cell-border" id="list">
                <colgroup>
                    <col width="5%">
                    <col width="10%">
                    <col width="10%">
                    <col width="7.5%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="5%">
                </colgroup>
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã giáo viên</th>
                        <th>Tên giáo viên</th>
                        <th>Giới tính</th>
                        <th>Chức vụ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Số CCCD</th>
                        <th>Địa chỉ</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>gv1</td>
                        <td>Nguyễn Văn Phú</td>
                        <td>Nam</td>
                        <td>GVCN</td>
                        <td>0342298409</td>
                        <td>phu83001@gmail.com</td>
                        <td>035201002706</td>
                        <td>Ha nam</td>
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

        $('.newTeacher').click(function() {
            $('#contents').load("add-teacher.php")
        })
    })
</script>