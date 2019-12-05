<?php 

    if(!isset($_GET['id']))
    {
        DataProvider::ChangeURL('./index/php?c=404');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM LoaiSanPham WHERE MaLoaiSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);

    $row = mysqli_fetch_array($result);
?>

<form action="./pages/qlLoai/xlCapNhat.php" method="GET" onsubmit=" return KiemTra()">
    <fieldset>
        <legend>Cập nhật thông tin sản phẩm</legend>
        <div>
            <span>Tên sản phẩm:</span>
            <input type="text" name="txtTen" id="txtTen" value="<?php echo $row['TenLoaiSanPham']; ?>">
            <input type="hidden" name="id" value="<?php echo $row['MaLoaiSanPham']; ?>">
            <input type="submit" value="Cập nhật">
        </div>
        <div id="err"></div>
    </fieldset>
</form>

<script>
    function KiemTra()
    {
        var ten = document.getElementById('txtTen');
        var err = document.getElementById('err');

        if(ten.value == '')
        {
            err.innerHTML = "Tên loại không được rỗng";
            ten.focus();
            return false;
        }
        else
        {
            err = "";
        }

        return true;
    }

</script>