<div style="margin-bottom:300px;margin-left: 15px;" class="row">
    <div style="margin-left: -30px;" class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent ">
        <form action="#" method="POST">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th>MÃ BÌNH LUẬN</th>
                        <th>MÃ USER</th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>NỘI DUNG BÌNH LUẬN</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th></th>
                    </tr>

                    <?php
                    // sort($listtaikhoan);
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);

                        $xoa_bl = "index_admin.php?act=xoa_bl&id=" . $id_cmt;
                        echo '<tr>
                                            <td>' . $id_cmt . '</td>
                                            <td>' . $id_user . '</td>
                                            <td>' . $id_sp . '</td>
                                            <td>' . $noidung . '</td>
                                            <td>' . $ngay_cmt . '</td>
                                            <td> <a href="' . $xoa_bl . '"><input type="button" value="Xóa"></a></td> </td>
                                            
                                        </tr>';
                    }
                    ?>
                </table>
            </div>

        </form>
        <hr>
    </div>
</div>