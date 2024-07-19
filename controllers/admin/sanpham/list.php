<div class="row">
    <div class="row header frmtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>

    <div class="row frmcontent">
        <!-- <form action="index_admin.php?act=listsp" method="POST">
            <input type="text" name="kyw" id="">
            <select name="id_danhmuc" id="">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id_danhmuc . '">' . $name . '</option>';
                }
                ?>

            </select>
            <input style="width: 23px; cursor: pointer;" type="submit" name="listok" value="OK">
        </form> -->
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>

                <!-- Show lên -->
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index_admin.php?act=suasp&id_sp=" . $id_sp;
                    $xoasp = "index_admin.php?act=xoasp&id_sp=" . $id_sp;
                    $bien_the = "index_admin.php?act=add_ctsp";
                    $addbt = "index_admin.php?act=addbt&id_sp=" . $id_sp;
                    $hinhpart = "../../views/images/" . $image;
                    if (is_file($hinhpart)) {
                        $hinh = "<image src='" . $hinhpart . "' height='80'";
                    } else {
                        $hinh = "no photo";
                    }
                    echo '<tr>
                                        <td>' . $id_sp . '</td>
                                        <td>' . $name . '</td>
                                        <td>' . $hinh . '</td>
                                        <td>' . $price . '</td>
                                        <td>' . $luotxem . '</td>
                                        <td><a href="' . $suasp . '"><input style="cursor: pointer;" type="button" value="Sửa"></a>
                                        <a href="' . $xoasp . '"><input style="cursor: pointer;" type="submit" value="Xóa"></a>
                                        <a href="' . $bien_the . '"><input style="cursor: pointer;" type="submit" value="Thêm Biến Thể"></a>
                                        </td>
                                    </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <a href="index_admin.php?act=addsp"><input style="cursor: pointer;" type="button" value="Nhập thêm"></a>
            <a href="index_admin.php?act=list_ctsp"><input type="button" value="DANH SÁCH BIẾN THỂ"></a>
        </div>
        </form>
    </div>
</div>