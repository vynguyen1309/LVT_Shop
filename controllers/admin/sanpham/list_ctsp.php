<div class="row">
    <div class="row header frmtitle mb">
        <h1>DANH SÁCH BIẾN THỂ</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">

            <table>
                <tr>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH ẢNH</th>
                    <th>SIZE</th>
                    <th>SỐ LƯỢNG</th>
                </tr>

                <!-- Show lên -->
                <?php
                //foreach ($list_chitietsp as $spct) {
                //extract($spct);
                foreach ($list_ctsp as $spct) {

                    extract($spct);
                    // $xoa_ctsp = "index.php?act=xoa_spct&id=" . $id_sanphambt;
                    // $sua_ctsp = "index.php?act=sua_spct&id=" . $id_sanphambt;
                    $hinhpart = "../../views/images/" . $image;
                    if (is_file($hinhpart)) {
                        $hinh = "<image src='" . $hinhpart . "' height='80'";
                    } else {
                        $hinh = "no photo";
                    }
                    echo '<tbody>
                                    <tr>
                                        <td>' . $id_sp . '</td>
                                        <td>' . $name . '</td>
                                        <td>' . $hinh . '</td>
                                        <td>' . $size . '</td>
                                        <td>' . $soluong . '</td> 
                                    </tr>
                                </tbody>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <a href="index_admin.php?act=add_ctsp"><input type="button" value="Nhập thêm"></a>
        </div>
        </form>
    </div>
</div>