<div id='quanlygiohang'>
    <h1>Quản ly giỏ hang</h1>
    <table>
        <tr>
            <th width='20'>STT</th>
            <th> Tên sản phẩm</th>
            <th width='60'>Hình </th>
            <th width='50'>Giá</th>
            <th width='50'>Số Lượng</th>
            <th width='50'>Thao tác</th>
        </tr>
        <?php 
            $tongia = 0;

            if(isset($_SESSION['GioHang']) )
            {
                $soSanPham = count($gioHang->listProduct);
                for($i = 0 ; $i < $soSanPham; $i++)
                {
                    $id = $gioHang->listProduct[$i]->id;
                    $sql = "SELECT * FROM SanPham WHERE MaSanPham = $id";
                    echo $id;
                    $result = DataProvider::ExecuteQuery($sql);

                    $row = mysqli_fetch_array($result);
                    ?>
                        <form action='./pages/GioHang/xlCapNhatGioHang.php' name='frmGioHang' method='POST'>
                            <tr>
                                <td>1</td>
                                <td><?php echo $row['TenSanPham'] ?></td>
                                <td align='center'>
                                    <img src='./images/<?php echo $row['HinhURL'] ?>' alt='' width='50'>
                                </td>
                                <td><?php echo $row['GiaSanPham'] ?></td>
                                <td>
                                    <input type='text' name='txtSL' value='<?php echo $gioHang->listProduct[$i]->num ?>' width='45' size='5'>
                                    <input type='hidden' name='hdID' value='<?php echo $gioHang->listProduct[$i]->id ?>'>
                                </td>
                                <td>
                                    <input type='submit' value='Cập nhật số lượng'>
                                </td>
                            </tr>
                        </form>
                    <?php

                    $tongia += $row['GiaSanPham'] * $gioHang->listProduct[$i]->num;
                }
            }
            
            $_SESSION['TongGia'] = $tongia;
        ?>
        
        </table>
        <div class='pprice'>
            Tộng thành tiền <?php echo $tongia ?> đ
        </div>
        <a href='./pages/GioHang/xlDatHang.php'>
            <img src='./img/dathang.png' alt='' width='100'>
        </a>
    </div>