<?php
$open = "booktour";
include  "../../autoload/autoload.php";
?>

<?php include "../../layouts/head.php"?>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php include "../../layouts/header.php"?>

        <?php include "../../layouts/sidebar.php"?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Người book 
                    <small>Danh sách Tour</small>
                </h1>

            </section>

            <?php
            $customers = $db->fetchAll('book_tour');
            ?>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box">
                    <div class="box-body">
                        <?php require_once '../../../partials/notification.php'; ?>

                        <div class="table-responsive">
                            

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tour</th>
                                        <th>Họ và tên</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày book</th>
                                        <th>Adult</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $stt = 1; foreach ($customers as $item) : ?>
                                    <tr>
                                        <td><?= $stt ?></td>
                                        <td><?= $item['ten_danh_muc'] ?></td>
                                        <td><?= $item['ho_ten'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td><?= $item['dia_chi'] ?></td>
                                        <td><?= $item['ngay_book'] ?></td>
                                        <td><?= $item['Adult'] ?></td>
                                        <td>
                                            
                                            <a onclick="return confirm('Bạn chắc chắn xóa ?')" href="delete.php?id=<?= $item['id_nguoi_book'] ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>

                                        </td>
                                    </tr>
                                    <?php $stt++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include "../../layouts/footer.php"?>