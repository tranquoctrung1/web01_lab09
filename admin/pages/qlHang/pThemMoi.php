<form action="./pages/qlHang/xlThemMoi.php" method="GET" onsubmit="return KiemTra()">
    <fieldset>
        <legend>Thêm mới hãng sản xuất</legend>
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
            err.innerHTML = "Tên hãng không được rỗng";
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