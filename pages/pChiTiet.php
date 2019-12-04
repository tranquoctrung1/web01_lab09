<h1>Thông Tin Chi Tiết Sản Phẩm</h1>
<?php 

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else 
    {
        DataProvider::ChangeURL('./index.php?a=404');
    }

    $sql = "SELECT s.MaSanPham, s.TenSanPham, s.GiaSanPham, s.SoLuongTon, s.SoLuocXem, s.HinhURL, s.MoTa, h.TenHangSanXuat, l.TenLoaiSanPham FROM SanPham s, HangSanXuat h, LoaiSanPham l WHERE s.BiXoa = 0 AND s.MaHangSanXuat = h.MaHangSanXuat AND s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);

    if($row == null)
    {
        DataProvider::ChangeURL('./index.php?a=404');
    }
    ?>
    <div class='box-detail'>
            <img src='./images/<?php echo $row['HinhURL'];?>' alt=''>
            <div class='content-detail'>
                <div class='pname'> Tên sản phẩm: <span><?php echo $row['TenSanPham'] ?></span></div>
                <div class='pprice'>Giá: <span><?php echo $row['GiaSanPham'];?></span></div>
                <div class='pbrand'>Hãng sản xuất: <span><?php echo $row['TenHangSanXuat'];?></span></div>
                <div class='ptype'>Loại sản phẩm: <span><?php echo $row['TenLoaiSanPham'];?></span></div>
                <div class='pamount'>Số lượng:  <span> <?php echo $row['SoLuongTon'];?></span></div>
                <div class='pviewer'>Số lượt xem: <span> <?php echo $row['SoLuocXem'];?></span></div>
                <div class='order'>
                    <?php 
                        if(isset($_SESSION['MaTaiKhoan']))
                        {
                            ?>
                                <a href='./index.php?a=5&id=<?php echo $row['MaSanPham'];?>'>
                                    <img src='./img/shopping_cart.png' alt=''>
                                </a>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <!-- <div class="mo-ta">
                <?php 
                    echo $row['MoTa'];
                ?>
            </div> -->
        </div>

        <?php 
        
            $SoLuocXem = $row['SoLuocXem'] + 1;
            $sql = "UPDATE SanPham SET SoLuocXem = $SoLuocXem WHERE MaSanPham = $id";
            
            DataProvider::ExecuteQuery($sql);

        ?>