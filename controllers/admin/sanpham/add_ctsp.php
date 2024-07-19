<div class="row">
    <div class="row header frmtitle">
        <h1>THÊM MỚI BIẾN THỂ</h1>
    </div>
    <div class="row frmcontent">
        <form action="index_admin.php?act=add_ctsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Sản phẩm<br>
                <select name="id_sp" id="">
                    <?php
                    foreach ($listsanpham as $sp) {
                        extract($sp);
                        echo '<option value="' . $id_sp . '">' . $name . '</option>';
                    }
                    ?>

                </select>
            </div>
            <div class="row mb10">
                Size:<br>
                <select name="id_size" id="">
                    <?php
                    foreach ($listsize as $size) {
                        extract($size);
                        echo '<option value="' . $id_size . '">' . $size . '</option>';
                    }
                    ?>

                </select>
            </div>

            <div class="row mb10">
                Số lượng<br>
                <input type="number" min="1" name="soluong" value="1" required><br><br>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoibt" value="THÊM MỚI">
                <a href="index_admin.php?act=list_ctsp"><input type="button" value="DANH SÁCH BIẾN THỂ"></a>

            </div>

            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>
</div>