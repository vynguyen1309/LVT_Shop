<div style="margin-bottom:300px;" class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent ">
        <form action="#" method="POST">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th>MÃ tÀI KHOẢN</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th></th>
                    </tr>

                    <?php
                    // sort($listtaikhoan);
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $sua_tk = "index_admin.php?act=edit_tk&id=" . $id_user;
                        $xoa_tk = "index_admin.php?act=xoa_tk&id=" . $id_user;
                        echo '<tr>
                                           
                                            <td>' . $id_user . '</td>
                                            <td>' . $username . '</td>
                                            <td>' . $password . '</td>
                                            <td>' . $email . '</td>
                                            <td>' . $address . '</td>
                                            <td>' . $phone . '</td>
                                            <td>' . $role . '</td>
                                            <td><a href="' . $sua_tk . '"><input type="button" value="Sửa"></a>
                                            <a href="' . $xoa_tk . '">
                                            <input type="button" value="Xóa">
                                            </a></td>
                                        </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <a href="index_admin.php?act=themtk"><input style="cursor: pointer;" type="button" value="Nhập thêm"></a>
            </div>
        </form>
        <hr>
    </div>
</div>