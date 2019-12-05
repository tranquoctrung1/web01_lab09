<?php 

    include('../../../lib/DataProvider.php');

    if(isset($_POST['txtTen']))
    {
        $ten = $_POST['txtTen'];
        $hang = $_POST['cmbHang'];
        $loai = $_POST['cmbLoai'];
        $hinh = $_POST['fHinh'];
        $gia = $_POST['txtGia'];
        $ton = $_POST['txtTon'];
        $mota = $_POST['txtMoTa'];
        $sql = "INSERT INTO SanPham(TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat ) VALUES ('$ten', '$hinh', $gia, date('y-m-d'), $ton, 100, 10, '$mota', 0, $loai, $hang)";

        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL('../../index.php?c=2');

?>