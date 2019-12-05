<table cellspacing="0" border="1">
    <tr>
        <th width="50">STT:</th>
        <th width="300">Tên loại sản phẩm: </th>
        <th width="100">Tình trạng:</th>
        <th width="200">Thao tác:</th>

        <?php 
        $sql ="SELECT * FROM LoaiSanPham";
        $result = DataProvider::ExecuteQuery($sql);

        while($row = mysqli_fetch_array($result))
        {
            $stt = 1;
            ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row['TenLoaiSanPham'] ?></td>
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
                        <a href="./pages/qlLoai/xlKhoa.php?id=<?php echo $row['MaLoaiSanPham']; ?>">
                            <img src="./image/lock.png" alt="">
                        </a>
                        <a href="./index.php?c=3&a=2&id=<?php echo $row['MaLoaiSanPham']; ?>">
                            <img src="./image/edit.png" alt="">
                        </a>
                    </td>
                </tr>
                
            <?php
            $stt++;
        }
    ?>
</table>