<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpart = "../upload/" . $image;
if (is_file($hinhpart)) {
    $hinh = "<image src='" . $hinhpart . "' height='80'";
} else {
    $hinh = "no photo";
}
?>

<div class="row">
    <div class="row header frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">

                <select name="id_danhmuc">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdanhmuc as $danhmuc) : ?>

                        if($danhmuc['id_danhmuc']==$danhmuc['id_danhmuc']){
                            echo '<option value="<?php echo $danhmuc['id_danhmuc'] ?>" selected><?php echo $danhmuc['name'] ?></option>';
                        }

                    <?php endforeach ?>

                </select>

            </div>
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                Giá<br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh" id="">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả<br>
                <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>

            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>

        </form>
    </div>
</div>
</div>