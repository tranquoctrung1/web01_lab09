<?php 

if(!isset($_GET['id']))
{
    DataProvider::ChangeURL('./index/php?c=404');
}

$id = $_GET['id'];
$sql = "SELECT * FROM HangSanXuat WHERE MaHangSanXuat = $id";
$result = DataProvider::ExecuteQuery($sql);

$row = mysqli_fetch_array($result);
?>

<form action="./pages/qlHang/xlCapNhat.php" method="GET" onsubmit=" return KiemTra()">
<fieldset>
    <legend>Cập nhật thông tin hãng sản xuất</legend>
    <div>
        <span>Tên sản phẩm:</span>
        <input type="text" name="txtTen" id="txtTen" value="<?php echo $row['TenHangSanXuat']; ?>">
        <input type="hidden" name="id" value="<?php echo $row['MaHangSanXuat']; ?>">
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
        err.innerHTML = "Tên hãng không được rỗng";
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