<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/table-data.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body> -->
<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-start">Classes</h1>
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
                        <a href="#" class="btn btn-block btn-sm btn-default btn-flat border-primary new_class"><i class="fa fa-plus"></i>Add new</a>
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
                                        <col width="20%">
                                        <col width="20%">
                                        <col width="30%">
                                        <col width="20%">

                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Mã lớp</th>
                                            <th>Tên lớp</th>
                                            <th>Giáo viên chủ nhiệm</th>
                                            <th class="text-center">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Lấy dữ liệu từ database -->
                                        <?php
                                        //? mở kết nối
                                        include '../config/config.php';
                                        $sql = "SELECT * FROM lop, giaovien WHERE lop.magvcn = giaovien.magv";
                                        $result = mysqli_query($conn, $sql);
                                        //? xác thực
                                        if (mysqli_num_rows($result) > 0) {
                                            $stt = 1;
                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                                <tr>
                                                    <th class="text-center"><?php echo $stt++; ?></th>
                                                    <td><?php echo $row['malop']; ?></td>
                                                    <td><?php echo $row['tenlop'] ?></td>
                                                    <td><?php echo $row['tengv'] ?></td>
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

<!-- </body>

</html> -->