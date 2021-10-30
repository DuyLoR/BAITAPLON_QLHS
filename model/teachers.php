<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-start">Teachers</h1>
            </div>
        </div>
        <hr class="border-primary">
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="col col-lg-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="#" class="btn btn-block btn-sm btn-default btn-flat border-primary new_class"><i
                                class="fa fa-plus"></i>Add new</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 mb-3">
                                <div class="dataTables_filter">
                                    <label>
                                        Search:
                                        <input type="search" class="form-control form-control-sm">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!--data -->
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table tabe-hover table-bordered" id="list">
                                    <colgroup>
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="10%">
                                        <col width="5%">
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
                                            <th>Địa chỉ</th>
                                            <th class="text-center">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Lấy dữ liệu từ database -->
                                        <?php
                                        //? mở kết nối
                                        include '../config/config.php';
                                        $sql = "SELECT * FROM giaovien";
                                        $result = mysqli_query($conn, $sql);
                                        //? xác thực
                                        if (mysqli_num_rows($result) > 0) {
                                            $stt = 1;
                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <th class="text-center"><?php echo $stt++; ?></th>
                                            <td><?php echo $row['magv']; ?></td>
                                            <td><?php echo $row['tengv'] ?></td>
                                            <td><?php echo ($row['gioitinh'] == 1 ?"Nam":"Nữ"); ?></td>
                                            <td><?php echo $row['chucvu'] ?></td>
                                            <td><?php echo $row['sodt'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['diachi'] ?></td>
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
                                        <?php
                                            }
                                        }
                                        ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>