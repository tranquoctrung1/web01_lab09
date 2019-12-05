<form action="./pages/qlLoai/xlThemMoi.php" method="GET" onsubmit="return KiemTra()">
    <fieldset>
        <legend>Thêm mới loại sản phẩm</legend>
        <div>
            <span>Tên loại sản phẩm:</span>
            <input type="text" name="txtTen" id="txtTen">
            <input type="submit" value="Thêm mới">
        </div>
        <div id="err"></div>
    </fieldset>
</form>

<script>

    function KiemTra()
    {
        var ten = document.getElementById('txtTen');
        var err = document.getElementById('err');

        if(ten.value == '')
        {
            err.innerHTML = "Tên loại không được rỗng";
            ten.focus();
            return false;
        }
        else
        {
            err = "";
        }

        return true;
    }
</script>