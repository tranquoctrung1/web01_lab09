<a href="./index.php?c=4&a=3">
    <img src="./image/new.png" alt="">
</a>

<table cellspacing="0" border="1">
    <tr>
        <th width="100">STT</th>
        <th width="300">Tên hãng sản xuất</th>
        <th width="100">Trình trạng</th>
        <th width="200">Thao tác</th>
    </tr>

    <?php 
    
        $sql = "SELECT * FROM HangSanXuat";
        $result = DataProvider::ExecuteQuery($sql);
        $i = 1;
        while($row = mysqli_fetch_array($result))
        {
            ?>

                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $row['TenHangSanXuat']; ?></td>
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
                        <a href="./pages/qlHang/xlKhoa.php?id=<?php echo $row['MaHangSanXuat']; ?>">
                            <img src="./image/lock.png" alt="">
                        </a>
                        <a href="./index.php?c=4&a=2&id=<?php echo $row['MaHangSanXuat']; ?>">
                            <img src="./image/edit.png" alt="">
                        </a>
                    </td>
                </tr>

            <?php
        }
    
    ?>
</table>