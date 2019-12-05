<a href="./index.php?c=4$a=3">
<img src="./image/new.png" alt=""></a>

<table cellspacing="0" border="1">
    <tr>
        <th width="50">STT:</th>
        <th width="300">Mã đơn đặt hàng: </th>
        <th width="100">Ngày lập:</th>
        <th width="100">Khách hàng:</th>
        <th width="100">Tình trạng:</th>
        <th width="100">Thao tác:</th>
        <?php 
        $sql ="SELECT d.MaDonDatHang, d.NgayLap, d.MaTinhTrang, t.TenHienThi,  tt.TenTinhTrang FROM DonDatHang d, TaiKhoan t, TinhTrang tt WHERE d.MaTaiKhoan = t.MaTaiKhoan AND d.MaTinhTrang = tt.MaTinhTrang ORDER BY d.MaTinhTrang, d.NgayLap";
        $result = DataProvider::ExecuteQuery($sql);
        $i = 1;
        while($row = mysqli_fetch_array($result))
        {
           $c =='';
           switch ($row['MaTinhTrang'])
           {
               case 2:
                    $c = "classGiaoHang";
                    break;
               case 3:
                    $c = "classThanhToan";
                    break;
               case 2:
                    $c = "classHuy";
                    break;
           }
            ?>
                <tr class="<?php echo $c ?>">
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['MaDonDatHang'] ?></td>
                    <td><?php echo $row['NgayLap'] ?></td>
                    <td><?php echo $row['TenHienThi'] ?></td>
                    <td><?php echo $row['TenTinhTrang'] ?></td>
                    <td>
                        <a href="./index.php?c=5&a=2id=<?php echo $row['MaDonDatHang']; ?>">
                            <img src="./image/edit.png" alt="">
                        </a>
                    </td>
                </tr>
                
            <?php
        }
    ?>
</table>