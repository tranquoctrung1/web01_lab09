<h2>Thông tin Tài Khoản</h2>
<?php 

    $id = $_SESSION['MaTaiKhoan'];
    $sql = "SELECT * FROM TaiKhoan WHERE MaTaiKhoan = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
?>

<form action="./pages/xlThayDoiTaiKhoan.php" method="POST">
    <label for="#us">Tên đăng nhập:</label>
    <input type="text" name="us" id="us" disabled value="<?php echo $row['TenDangNhap']; ?>"><br>
    <label for="#name">Tên hiện thi:</label>    
    <input type="text" name="name" id="name" required value="<?php echo $row['TenHienThi']; ?>"><br>
    <label for="#add">Địa chỉ:</label>
    <input type="text" name="add" id="add" required value="<?php echo $row['DiaChi']; ?>"><br>
    <label for="#tel">Điện thoại:</label>
    <input type="text" name="tel" id="tel" required value="<?php echo $row['DienThoai']; ?>"><br>
    <label for="#mail">Email:</label>
    <input type="text" name="mail" id="mail" required value="<?php echo $row['Email']; ?>"><br>
    
    <input type="submit" value="Thay đổi">
</form>


<?php 

    $suc = 0;
    if(isset($_GET['suc']))
    {
        $suc = $_GET['suc'];
    }

    if($suc == 1)
    {
        echo "<h4>Thay đỗi thành công!</h4>";
    }
    else if ($suc ==2)
    {
        echo "<h4>Thay đỗi không thành công!</h4>";
    }

?>