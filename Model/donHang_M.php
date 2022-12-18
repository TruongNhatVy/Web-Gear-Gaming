<?php
    class DonHang_M
    {
        public function thongTinDonHang($maDonHang)
        {
            $connect = new DateBase;
            $connect = $connect->connnection();

            $query = 'select * from donhang where MaDonHang = ' . $maDonHang;
            return mysqli_query($connect,$query);    
        }
        public function donHangTheoKhachHang($maTaikhoan)
        {
            // include('connection.php');
            $connect = new DateBase;
            $connect = $connect->connnection();
            $query = 'select * from donhang where MaTaiKhoan = ' . $maTaikhoan;
            $rs=mysqli_query($connect,$query);
            while($row=mysqli_fetch_array($rs)){
                $madh=$row['MaDonHang'];
                $matk=$row['MaTaiKhoan'];
                $ngaymua=$row['NgayMua'];
                $tongtien=$row['TongTien'];
                $tinhtrang=$row['TinhTrang'];
                $hoten=$row['HoTen'];
                $email=$row['Email'];
                $phone=$row['Phone'];
                $diachi=$row['DiaChi'];
                $tinhthanh=$row['TinhThanh'];
                $quanhuyen=$row['QuanHuyen'];
                $donhang=['MaDonHang' => $madh, 'MaTaiKhoan' => $matk, 'NgayMua' => $ngaymua, 'TongTien' => $tongtien, 'TinhTrang' => $tinhtrang,'HoTen' => $hoten, 'Email' => $email, 'Phone' => $phone,'DiaChi' => $diachi, 'TinhThanh' => $tinhthanh, 'QuanHuyen' => $quanhuyen];
                $dsdh[]=$donhang;
            }
            return $dsdh;    
        }
        public function themDonHangVaoDB($donHang)
        {
            $connect = new DateBase;
            $connect = $connect->connnection();

            $query = "INSERT INTO donhang VALUE(" .
            "''," .
            "'" . $donHang[ 'NgayMua' ] . "'," .
            "'" . $donHang[ 'TongTien' ] . "'," .
            "'" . $donHang[ 'TinhTrang' ] . "'," .
            "'" . $donHang[ 'HoTen' ] . "'," .
            "'" . $donHang[ 'Email' ] . "'," .
            "'" . $donHang[ 'Phone' ] . "'," .
            "'" . $donHang[ 'DiaChi' ] . "'," .
            "'" . $donHang[ 'TinhThanh' ] . "'," .
            "'" . $donHang[ 'QuanHuyen' ] . "'," .
            "'" . $donHang[ 'MaTaiKhoan' ] . "')";
            mysqli_query($connect,$query);
        }
        public function maDonHangMoiNhat()
        {
            $connect = new DateBase;
            $connect = $connect->connnection();

            $query = "SELECT MaDonHang FROM donhang ORDER BY MaDonHang DESC LIMIT 1;";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);
            return $row['MaDonHang'];
        }
    }
?>