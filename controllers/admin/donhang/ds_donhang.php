<div style="margin-bottom:300px;" class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row frmcontent ">
        <form action="#" method="POST">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>


                        <th>ID ĐƠN HÀNG</th>
                        <th>ID USER</th>
                        <th>TỔNG ĐƠN HÀNG</th>
                        <th>THÔNG TIN KHÁCH HÀNG</th>

                        <th>TRẠNG THÁI</th>
                        <th>PHƯƠNG THỨC THANH TOÁN</th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th></th>

                    </tr>

                    <?php
                    // sort($listtaikhoan);
                    foreach ($listdonhang as $donhang) {
                        extract($donhang);
                        $kh = $donhang['name_receiver'] . "<br>SĐT:" . $donhang['phone_receiver'] . "<br>Địa chỉ:" . $donhang['address_receiver'];
                        if ($status === 0) {
                            $role_dh = 'Chưa xác nhận';
                        } else if ($status === 1) {
                            $role_dh = 'Đã xác nhận';
                        } else if ($status == 2) {
                            $role_dh = 'Hủy đơn';
                        } else if ($status == 3) {
                            $role_dh = 'Giao hàng thành công';
                        } else {
                            $role_dh = 'Đang giao';
                        }
                        $thanh_toan = ($phuongthuc_thanhtoan == 1) ? 'Thanh toán khi nhận hàng' : 'Thanh toán online';
                        $sua_dh = "index_admin.php?act=edit_dh&id_donhang=" . $id_donhang;
                        $xemchitiet = "index_admin.php?act=xemchitiet&id_donhang=" . $id_donhang;
                        echo '<tr>                                          
                                            <td>' . $id_donhang . '</td>
                                            <td>' . $id_user . '</td>
                                            <td>' . number_format($tongdonhang, 0, '.', '.') . 'đ</td>
                                            <td>Tên:' . $kh . '</td>
                                            <td>' . $role_dh . '</td>
                                            <td>' . $thanh_toan . '</td>
                                            <td>' . $madh . '</td>
                                            <td>' . $ngaydathang . '</td>
                                            <td><a href="' . $sua_dh . '"><input type="button" value="Cập Nhật Trạng Thái"></a><br><a href="' . $xemchitiet . '"><input type="button" value="Xem chi tiết"></a></td>
                                        </tr>';
                    }
                    ?>
                </table>
            </div>

        </form>
        <hr>
    </div>
</div>
<!-- // <td>' . $name_receiver . '</td>
                                            // <td>' . $email_receiver . '</td>
                                            // <td>' . $phone_receiver . '</td>
                                            // <td>' . $address_receiver . '</td> -->