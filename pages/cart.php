<?php 
    $tittle= "Giỏ Hàng";

    $page_content = "<div id='content'>
    <div id='quanlygiohang'>
    <h1>Quản ly gio hang</h1>
    <table>
        <tr>
            <th width='20'>STT</th>
            <th> Tên sản phẩm</th>
            <th width='60'>Hình </th>
            <th width='50'>Giá</th>
            <th width='50'>Số Lượng</th>
            <th width='50'>Thao tác</th>
        </tr>
        <form action='#' name='frmGioHang' method='get'>
            <tr>
                <td>1</td>
                <td>Bill D.Beaver</td>
                <td align='center'>
                    <img src='./images/Vtech_Bright_Lights_Ball.jpg' alt='' width='50'>
                </td>
                <td>160000</td>
                <td>
                    <input type='text' name='txtSL' value='1' width='45' size='5'>
                    <input type='hidden' name='hdViTri' value='0'>
                </td>
                <td>
                    <input type='submit' value='Cập nhật số lượng'>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Bill D.Beaver</td>
                <td align='center'>
                    <img src='./images/Lamaze_Bill_D_Beaver.jpeg' alt='' width='50'>
                </td>
                <td>160000</td>
                <td>
                    <input type='text' name='txtSL' value='2' width='45' size='5'>
                    <input type='hidden' name='hdViTri' value='0'>
                </td>
                <td>
                    <input type='submit' value='Cập nhật số lượng'>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Bill D.Beaver</td>
                <td align='center'>
                    <img src='./images/Lamaze_Captain_Calamari.jpeg' alt='' width='50'>
                </td>
                <td>160000</td>
                <td>
                    <input type='text' name='txtSL' value='3' width='45' size='5'>
                    <input type='hidden' name='hdViTri' value='0'>
                </td>
                <td>
                    <input type='submit' value='Cập nhật số lượng'>
                </td>
            </tr>
        </form>
        </table>
        <div class='pprice'>
            Tộng thành tiền
        </div>
        <a href='#'>
            <img src='./img/dathang.png' alt='' width='100'>
        </a>
    </div>
    </div>";
?>