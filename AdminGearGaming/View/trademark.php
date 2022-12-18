<?php
    ob_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../images/Logogear.ico">
    <title>Admin Gear Gaming</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/datepicker3.css" rel="stylesheet">
    <link href="../css/bootstrap-table.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <script src="../js/lumino.glyphs.js"></script>

</head>

<body>
    <?php
    include('menu-top.php')
    ?>

    <?php
    include('nav.php')
    ?>



    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản Lý Thương Hiệu</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Bảng Thương Hiệu</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="btn pull-left">
                                    <a class="btn btn-default" href="insert-trademark.php"><i class="glyphicon glyphicon-plus-sign" style="margin-top: 1px"></i> Thêm</a>
                                </div>
                                <div class="pull-right search">
                                    <input class="form-control" type="text" placeholder="Tìm kiếm">
                                </div>
                            </div>
                            <div class="fixed-table-container">
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                    <table data-toggle="table" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                        <thead>
                                            <tr>
                                                <th data-field="cb" data-checkbox="true"></th>
                                                <th data-field="ma" data-sortable="true">Mã thương hiệu</th>
                                                <th data-field="products" data-sortable="true">Tên thương hiệu</th>
                                                <th data-field="rs" data-sortable="true">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <form method="get">
                                        <tbody>
                                            <?php
                                                include('../../Model/connection.php');
                                                include('../../Controller/thuonghieu.php');
                                                $p=new thuonghieu_controller;
                                                foreach($p->getAll() as $thuonghieu){
                                                    echo'<tr>
                                                        <td class="bs-checkbox">
                                                            <input type="checkbox">
                                                        </td>
                                                        <td>'.$thuonghieu['MaThuongHieu'].'</td>
                                                        <td>'.$thuonghieu['TenThuongHieu'].'</td>
                                                        <td>
                                                            <div class="rf" style="display: flex; justify-content: space-around;">
                                                                <a href="trademark.php?MaThuongHieu='.$thuonghieu['MaThuongHieu'].'"><i class="glyphicon glyphicon-trash"></i></a>
                                                                <a href="update-trademark.php?MaThuongHieu='.$thuonghieu['MaThuongHieu'].'"><i class="glyphicon glyphicon-pencil"></i></a>
                                                            </div>

                                                        </td>
                                                    </tr>';
                                                }
                                            ?>
                                        </tbody>
                                        </form>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $mathuonghieu=$_GET['MaThuongHieu'];
            if(isset($mathuonghieu)){
                $p->lockTH($mathuonghieu);
                echo "<script>alert('Bạn đã xóa thương hiệu khỏi hệ thống');
                </script>";
            }
        ?>
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/chart.min.js"></script>
        <script src="../js/chart-data.js"></script>
        <script src="../js/easypiechart.js"></script>
        <script src="../js/easypiechart-data.js"></script>
        <script src="../js/bootstrap-datepicker.js"></script>
        <script src="../js/bootstrap-table.js"></script>
        <script>
            $('#calendar').datepicker({});

            ! function($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function() {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function() {
                if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function() {
                if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
            })
        </script>
</body>

</html>