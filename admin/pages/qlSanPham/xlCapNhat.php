<?php 

    include('../../../lib/DataProvider.php');

    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $ten = $_POST['txtTen'];
        $hang = $_POST['cmbHang'];
        $loai = $_POST['cmbLoai'];
        $hinh = $_POST['fHinh'];
        $ban = $_POST['txtBan'];
        $gia = $_POST['txtGia'];
        $ton = $_POST['txtTon'];
        $mota = $_POST['txtMoTa'];
        $sql = "UPDATE SanPham SET TenSanPham = '$ten', HinhURL = '$hinh', GiaSanPham = $gia, SoLuongTon = $ton, SoLuongBan = $ban, MoTa = '$mota' WHERE MaSanPham = $id";

        DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL('../../index.php?c=2');

?>