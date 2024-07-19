<div class="row">
    <div class="row header frmtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index_admin.php?act=addsp" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="row mb10">
                Danh mục<br>
                <select name="id_danhmuc" id="">
                    <?php
                        foreach ($listdm as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id_danhmuc.'">'.$name.'</option>';
                        }
                    ?>
                    
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                Mã sản phẩm<br>
                <input type="text" name="masp">
            </div>

            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index_admin.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                <a href="index_admin.php?act=add_ctsp"><input type="button" value="THÊM BIẾN THẺ"></a>
                
            </div>

            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
    <script>
    function validateForm() {
        var tenSP = document.forms["myForm"]["tensp"].value;
        console.log(tenSP);
        var giaSP = document.forms["myForm"]["giasp"].value;
        var hinh = document.forms["myForm"]["hinh"].value;
        var moTa = document.forms["myForm"]["mota"].value;
        var maSP = document.forms["myForm"]["masp"].value;

        if (tenSP == "") {
            alert("Vui lòng nhập tên sản phẩm");
            return false;
        }

        if (giaSP == "") {
            alert("Vui lòng nhập giá sản phẩm");
            return false;
        }

        if (hinh == "") {
            alert("Vui lòng chọn hình sản phẩm");
            return false;
        }

        if (moTa == "") {
            alert("Vui lòng nhập mô tả sản phẩm");
            return false;
        }

        if (maSP == "") {
            alert("Vui lòng nhập mã sản phẩm");
            return false;
        }
    }
</script>
</div>
</div>