<?php 

    if(!isset($_GET['id']))
    {
        DataProvider::ChangeURL('./index.php?c=404');
    }

    $id = $_GET['id'];
    $sql ="SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuocXem, s.MoTa, s.BiXoa, l.TenLoaiSanPham, h.TenHangSanXuat FROM LoaiSanPham l , SanPham s, HangSanXuat h WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat AND MaSanPham =$id";

    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);

?>

<form action="./pages/qlSanPham/xlCapNhat.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data">

    <fieldset>
        <legend>Cập nhật thông tin sản phẩm</legend>

        <div>
            <span>Tên sản phẩm:</span>
            <input type="text" name="txtTen" id="txtTen" value="<?php echo $row['TenSanPham'] ?>">
            <i id="errTen"></i>
        </div>
        <div>
        <span>Hảng sản xuất</span>
            <select name="cmbHang" >
                <?php 
                
                    $sql = "SELECT * FROM HangSanXuat WHERE BiXoa = 0";
                    $result = DataProvider::ExecuteQuery($sql);
                    while($row1 = mysqli_fetch_array($result))
                    {
                        ?>

                            <option value="<?php echo $row1['MaHangSanXuat']; ?>" <?php if( $row['MaHangSanXuat'] == $row1['MaHangSanXuat']) echo "selected" ?>> <?php echo $row1['TenHangSanXuat'] ?></option>

                        <?php
                    }
                ?>
            </select>
        </div>
        <div>
        <span>Loại sản phẩm</span>
            <select name="cmbLoai" >
                <?php 
                
                    $sql = "SELECT * FROM LoaiSanPham WHERE BiXoa = 0";
                    $result = DataProvider::ExecuteQuery($sql);
                    while($row1 = mysqli_fetch_array($result))
                    {
                        ?>

                            <option value="<?php echo $row1['MaLoaiSanPham']; ?>" <?php if( $row['MaLoaiSanPham'] == $row1['MaLoaiSanPham']) echo "selected" ?>> <?php echo $row1['TenLoaiSanPham'] ?></option>

                        <?php
                    }
                ?>
            </select>
        </div>
        <div>
            <span>Hình:</span>
            <input type="file" name="fHinh"><br>
            <img src="../images<?php echo $row['HinhURL']; ?>" alt="" width="75">
        </div>
        <div>
            <span>Giá:</span>
            <input type="number" name="txtGia" id="txtGia" value="<?php echo $row['GiaSanPham'] ?>">
            <i id="errGia"></i> 
        </div>
        <div>
            <span>Số lượng tồn:</span>
            <input type="text" name="txtTon" id="txtTon" value="<?php echo $row['SoLuongTon'] ?>">
            <i id="errTon"></i> 
        </div>
        <div>
            <span>Số lượng bán:</span>
            <input type="text" name="txtBán" id="txtBan" value="<?php echo $row['SoLuongBan'] ?>">
            <i id="errBan"></i> 
        </div>
        <div>
            <span>Mô tả:</span>
           <textarea name="txtMoTa" id="" cols="30" rows="10"><?php echo $row['MoTa'] ?></textarea>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['MaSanPham']; ?>">
            <input type="submit" value="Thêm mới">
        </div>
    </fieldset>

</form>

<script>

function KiemTra()
    {
        var ten = document.getElementById('txtTen');
        var err = document.getElementById('errTen');
        if(ten.value == '')
        {
            err.innerHTML= "Tên sản phẩm không được trống";
            ten.focus();
            return false;
        }
        else 
            err.innerHTML ="";

        ten = document.getElementById('txtGia');
        err = document.getElementById('errGia');
        if(ten.value == '')
        {
            err.innerHTML= "Giá sản phẩm không được trống";
            ten.focus();
            return false;
        }
        else 
            err.innerHTML ="";

        ten = document.getElementById('txtTon');
        err = document.getElementById('errTon');
        if(ten.value == '')
        {
            err.innerHTML= "Số lượng tồn không được trống";
            ten.focus();
            return false;
        }
        else 
            err.innerHTML ="";

        ten = document.getElementById('txtBan');
        err = document.getElementById('errBan');
        if(ten.value == '')
        {
            err.innerHTML= "Số lượng bán không được trống";
            ten.focus();
            return false;
        }
        else 
            err.innerHTML ="";

        return false;
    }

</script>