<h1>Quản lý loại sản phẩm</h1>
<?php 

    $a = 1;
    if(isset($_GET['a']))
    {
        $a = $_GET['a'];
    }
    switch($a)
    {
        case 1:
            include('./pages/qlLoai/pDanhSach.php');
            break;
        case 2:
            include('./pages/qlLoai/pCapNhat.php');
            break;
        default:
            include('./pages/Error.php');
            break;
    }

?>