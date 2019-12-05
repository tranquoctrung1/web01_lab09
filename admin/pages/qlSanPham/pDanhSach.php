<a href="./index.php?c=2$a=3">
<img src="./image/new.png" alt=""></a>

<table cellspacing="0" border="1">
    <tr>
        <th width="50">STT:</th>
        <th width="300">Tên sản phẩm: </th>
        <th width="100">Hình:</th>
        <th width="100">Giá:</th>
        <th width="100">Ngày Nhập:</th>
        <th width="100">Số lượng tồn:</th>
        <th width="100">Số lượng bán:</th>
        <th width="100">Số lược xem:</th>
        <th width="100">Loại:</th>
        <th width="100">Hãng:</th>
        <th width="100">Mô tả:</th>
        <th width="100">Trạng thái:</th>
        <th width="200">Thao tác:</th>

        <?php 
        $sql ="SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuocXem, s.MoTa, s.BiXoa, l.TenLoaiSanPham, h.TenHangSanXuat FROM LoaiSanPham l , SanPham s, HangSanXuat h WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat = h.MaHangSanXuat ORDER BY s.MaSanPham DESC";
        $result = DataProvider::ExecuteQuery($sql);
        $i = 1;
        while($row = mysqli_fetch_array($result))
        {
            $stt = 1;
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['TenSanPham'] ?></td>
                    <td> <img src="../images/<?php echo $row['HinhURL'] ?>" alt="" height="50"> </td>
                    <td><?php echo $row['GiaSanPham'] ?></td>
                    <td><?php echo $row['NgayNhap'] ?></td>
                    <td><?php echo $row['SoLuongTon'] ?></td>
                    <td><?php echo $row['SoLuongBan'] ?></td>
                    <td><?php echo $row['SoLuocXem'] ?></td>
                    <td><?php echo $row['TenLoaiSanPham'] ?></td>
                    <td><?php echo $row['TenHangSanXuat'] ?></td>
                    <td><?php

                        if(strlen($row['MoTa']) > 20)
                        {
                            $MoTa = substr($row['MoTa'],0 ,20)."...";
                        }
                        else 
                        {
                            $MoTa = $row['MoTa'];
                        }
                    ?>
                        <div class="fullMoTa"><?php echo $row['MoTa'] ?></div>
                    </td>
                    <td><?php

                        if($row['BiXoa'] == 1)
                        {
                            echo "<img src='./image/locked.png'";
                        }
                        else 
                        {
                            echo "<img src='./image/active.png'";
                        }

                    ?></td>
                    <td>
                        <a href="./pages/qlSanPham/xlKhoa.php?id=<?php echo $row['MaSanPham']; ?>">
                            <img src="./image/lock.png" alt="">
                        </a>
                        <a href="./index.php?c=2&a=2&id=<?php echo $row['MaSanPham']; ?>">
                            <img src="./image/edit.png" alt="">
                        </a>
                    </td>
                </tr>
                
            <?php
        }
    ?>
</table>