<h2>Danh sách đơn đặt hàng</h2>

<?php
    $id = $_SESSION['MaTaiKhoan'];
    $sql = "SELECT * FROM DonDatHang WHERE MaTaiKhoan = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $content = "";
    $stt = 1;
    while ($row = mysqli_fetch_array($result)) {
        $maDonHang = $row['MaDonDatHang'];
        $ngayLap = $row['NgayLap'];
        $tongThanhTien = $row['TongThanhTien'];
        if ($row['MaTinhTrang'] == 1) {
            $tinhTrang = "Đang Chuyển";    
        } else if ($row['MaTinhTrang'] == 2) {
            $tinhTrang = "Bom hàng!";
        }      
        $tinhTrang = strval($tinhTrang);
        $stt= strval($stt);

        $content .= "<tr>
                <td>$stt</td>
                <td>$maDonHang</td>
                <td align='center'>
                    $ngayLap
                </td>
                <td>$tongThanhTien</td>
                <td>
                   $tinhTrang
                </td>
            </tr>";
        $stt = intval($stt);
        $stt++;
    }
?>
<div id="quanlygiohang">
    <table>
        <tr>
            <th width='20'>STT</th>
            <th> Mã đơn đặt hàng</th>
            <th width='100'>Ngày Lập </th>
            <th width='80'>Tổng thành tiền</th>
            <th width='70'>Tình trạng</th>
        </tr>
        <?php
           ECHO  "$content";
        ?>
    </table>
</div>