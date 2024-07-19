<di class="row">
    <div class="row header frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th></th>
                </tr>

                <!-- Show lên -->
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index_admin.php?act=suadm&id_danhmuc=" . $id_danhmuc;
                    $xoadm = "index_admin.php?act=xoadm&id_danhmuc=" . $id_danhmuc;
                    echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>' . $id_danhmuc . '</td>
                                        <td>' . $name . '</td>
                                        <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a> <a href="' . $xoadm . '"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <a href="index_admin.php?act=adddm"><input style="cursor: pointer;" type="button" value="Nhập thêm"></a>
        </div>
        </form>
    </div>
    </div>