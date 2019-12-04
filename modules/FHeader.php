<div id='header'>
    <a href='./index.php'>
        <img src='./img/logo.gif' alt='logo lego' width='519' height='63'>
    </a>
    <div id='login_nav'>
        <?php
        
            if(isset($_SESSION['MaTaiKhoan']))
            {
                ?>
                Hello, <?php  echo $_SESSION['TenHienThi'];?>
                <a href="./modules/xlDangXuat.php">Đăng Xuất</a>
                <a href="./index.php?a=5">
                   <img src="./img/manage_shopping.png" alt="" height="20"> </a>
                <a href="./index.php?a=7">Thay Đổi Thông Tin</a>
                <a href="./index.php?a=8">Danh sách đơn đặt hàng</a>
                <?php

            }
            else 
            {
                ?>
                    <form name='frmLogin' action='modules/xlDangNhap.php' method='post' onsubmit='return KiemTraDangNhap()'>
                        Tài Khoản: <input type='text' name='txtUS' id='txtUS' size='10' maxlength='20' width='10'>
                        Mật Khẩu: <input type='password' name='txtPS' id='txtPS' size='10' maxlength='20' width='10'>
                        <input type='submit' value='Đăng Nhập'>
                        <input type='button' value='Đăng Ký' onclick='ChuyenTrangDangKy()'>
                    </form>
                    <script type="text/javascript">
                        function ChuyenTrangDangKy()
                        {
                            location = "./index.php?a=6";
                        }
                    </script>
                    <?php
                }
                ?>
    </div>
    <img src='./img/header_1.png' alt='' srcset='' width='748'>
    <img src='./img/header_2.png' alt='' srcset='' width='748'>
</div>