<?php
class order_m
{
    function getAll()
    {
        $my_conn = new DateBase;
        $my_conn = $my_conn->connnection();
        $sql = "SELECT * FROM donhang";
        $query = mysqli_query($my_conn, $sql);
        $order_array = [];
        while ($row = mysqli_fetch_array($query)) {
            $id_order = $row['MaDonHang'];
            $id_customer = $row['MaTaiKhoan'];
            $date = $row['NgayMua'];
            $tong_tien = $row['TongTien'];
            $tinh_trang = $row['TinhTrang'];
            $ho_ten = $row['HoTen'];
            $email = $row['Email'];
            $sdt = $row['Phone'];
            $dia_chi = $row['DiaChi'];
            $tinh_thanh = $row['TinhThanh'];
            $quan_huyen = $row['QuanHuyen'];

            $one_order = ["MaDonHang" => $id_order, "MaTaiKhoan" =>  $id_customer, "NgayMua" => $date, "TongTien" => $tong_tien, "TinhTrang" => $tinh_trang, "HoTen" => $ho_ten, "Email" => $email, "Phone" => $sdt, "DiaChi" => $dia_chi, "TinhThanh" => $tinh_thanh, "QuanHuyen" => $quan_huyen];
            $order_array[] = $one_order;
        }
        return $order_array;
    }

    function detail_order($orderid)
    {
        $my_conn = new DateBase;
        $my_conn = $my_conn->connnection();
        $sql = "SELECT * FROM chitietdonhang WHERE MaDonHang=$orderid";
        $query = mysqli_query($my_conn, $sql);
        $orderdetail_array = [];
        while ($row = mysqli_fetch_array($query)) {
            $id_orders = $row['MaDonHang'];
            $id_products = $row['MaSanPham'];
            $quantity_orderdetail = $row['SoLuong'];
            $money_orderdetail = $row['DonGia'];
            $total_orderdetail = $row['ThanhTien'];

            $one_orderdetail = ["MaDonHang" => $id_orders, "MaSanPham" =>  $id_products, "SoLuong" => $quantity_orderdetail, "DonGia" => $money_orderdetail, "ThanhTien" => $total_orderdetail];
            $orderdetail_array[] = $one_orderdetail;
        }
        return $orderdetail_array;
    }
    function repair_order($orderID, $tinhTrang)
    {
        $my_conn = new DateBase;
        $my_conn = $my_conn->connnection();
        $sql_repair = "UPDATE donhang SET TinhTrang = '$tinhTrang' WHERE MaDonHang = '$orderID'";
        if (mysqli_query($my_conn, $sql_repair)) {
            echo "<script>alert('Thành công !');window.location='order.php';</script>";
        } else {
            echo '<script>alert("Thất bại !")</script>';
        }
    }

    function filter_order($tinhTrang)
    {
        $my_conn = new DateBase;
        $my_conn = $my_conn->connnection();
        $sql = "SELECT * FROM donhang WHERE TinhTrang=$tinhTrang";
        $query = mysqli_query($my_conn, $sql);
        $order_array = [];
        while ($row = mysqli_fetch_array($query)) {
            $id_order = $row['MaDonHang'];
            $id_customer = $row['MaTaiKhoan'];
            $date = $row['NgayMua'];
            $tong_tien = $row['TongTien'];
            $tinh_trang = $row['TinhTrang'];
            $ho_ten = $row['HoTen'];
            $email = $row['Email'];
            $sdt = $row['Phone'];
            $dia_chi = $row['DiaChi'];
            $tinh_thanh = $row['TinhThanh'];
            $quan_huyen = $row['QuanHuyen'];

            $one_order = ["MaDonHang" => $id_order, "MaTaiKhoan" =>  $id_customer, "NgayMua" => $date, "TongTien" => $tong_tien, "TinhTrang" => $tinh_trang, "HoTen" => $ho_ten, "Email" => $email, "Phone" => $sdt, "DiaChi" => $dia_chi, "TinhThanh" => $tinh_thanh, "QuanHuyen" => $quan_huyen];
            $order_array[] = $one_order;
        }
        return $order_array;
    }

    function search_order($orderID)
    {
        $my_conn = new DateBase;
        $my_conn = $my_conn->connnection();
        $sql = "SELECT * FROM donhang WHERE MaDonHang='$orderID' LIMIT 1";
        $query = mysqli_query($my_conn, $sql);
        $order_array = [];
        while ($row = mysqli_fetch_array($query)) {
            $id_order = $row['MaDonHang'];
            $id_customer = $row['MaTaiKhoan'];
            $date = $row['NgayMua'];
            $tong_tien = $row['TongTien'];
            $tinh_trang = $row['TinhTrang'];
            $ho_ten = $row['HoTen'];
            $email = $row['Email'];
            $sdt = $row['Phone'];
            $dia_chi = $row['DiaChi'];
            $tinh_thanh = $row['TinhThanh'];
            $quan_huyen = $row['QuanHuyen'];

            $one_order = ["MaDonHang" => $id_order, "MaTaiKhoan" =>  $id_customer, "NgayMua" => $date, "TongTien" => $tong_tien, "TinhTrang" => $tinh_trang, "HoTen" => $ho_ten, "Email" => $email, "Phone" => $sdt, "DiaChi" => $dia_chi, "TinhThanh" => $tinh_thanh, "QuanHuyen" => $quan_huyen];
            $order_array[] = $one_order;
        }
        return $order_array;
    }
}
