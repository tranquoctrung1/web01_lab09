<?php 

    include('../lib/DataProvider.php');

    session_start();

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $add = $_POST['add'];
        $tel = $_POST['tel'];
        $mail = $_POST['mail'];

        $id = $_SESSION['MaTaiKhoan'];

        $sql = "UPDATE TaiKhoan SET TenHienThi= '$name', DiaChi = '$add', DienThoai = '$tel', Email= '$mail' WHERE MaTaiKhoan = $id";
        DataProvider::ExecuteQuery($sql);

        DataProvider::ChangeURL('../index.php?a=7&suc=1');
    }
    else 
    {
        DataProvider::ChangeURL('../index.php?a=7&suc=2');
    }

?>