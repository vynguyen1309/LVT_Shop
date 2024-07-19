<?php
    if(is_array($dm)) {
        extract($dm);
    }
?>

<div class="row">
            <div class="row header frmtitle">
                <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index_admin.php?act=updatedm" method="post">
                <div class="row mb10">
                    Mã loại<br>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="row mb10">
                    Tên loại<br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id_danhmuc" value="<?php if(isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc; ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index_admin.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                </div>

                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

                </form>
            </div>
        </div>
    </div>