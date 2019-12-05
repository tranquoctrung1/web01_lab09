<form action="./pages/qlSanPham/xlThemMoi.php" method="POST" onsubmit="return KiemTra()" enctype="multipart/form-data">
    <fieldset>
        <legend>Thêm sản phẩm</legend>
        <div>
            <span>Tên sản phẩm:</span>
            <input type="text" name="txtTen" id="txtTen">
        </div>

        <div>
            <span>Hảng sản xuất</span>
            <select name="cmbHang" >
                <?php 
                
                    $sql = "SELECT * FROM HangSanXuat WHERE BiXoa = 0";
                    $result = DataProvider::ExecuteQuery($sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>

                            <option value="<?php echo $row['MaHangSanXuat']; ?>"><?php echo $row['TenHangSanXuat']; ?></option>

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
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>

                            <option value="<?php echo $row['MaLoaiSanPham']; ?>"><?php echo $row['TenLoaiSanPham']; ?></option>

                        <?php
                    }
                ?>
            </select>
        </div>
        <div>
            <span>Hình:</span>
            <input type="file" name="fHinh">
        </div>
        <div>
            <span>Giá:</span>
            <input type="number" name="txtGia" id="txtGia">
            <i id="errGia"></i> 
        </div>
        <div>
            <span>Số lượng tồn:</span>
            <input type="text" name="txtTon" id="txtTon">
            <i id="errTon"></i> 
        </div>
        <div>
            <span>Mô tả:</span>
           <textarea name="txtMoTa" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
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

        return false;

        
    }

</script>