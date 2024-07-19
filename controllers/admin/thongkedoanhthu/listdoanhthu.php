

<div class=" row">
    <div class="row header frmtitle mb">
        <h1>THỐNG KÊ DOANH THU</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>ID Đơn Hàng</th>
                    <th>Mã Đơn Hàng</th>

                    <th>Tổng Tiền</th>
                </tr>
                <?php
                $tong_tien_tat_ca = 0;
                foreach ($doanhthu as $dt) {
                    extract($dt);
                    echo '<tr>
                    <td>' . $id_donhang . '</td>
                    <td>' . $madh . '</td>
                    <td>' . $total_revenue . '</td>
                </tr>';
                    $tong_tien_tat_ca += $total_revenue;
                }
                ?>
                <tr style="background-color:rgb(169, 194, 226);">
                <td colspan="2"><strong>Tổng Doanh Thu Tất Cả</strong></td>
                <td style=" text-decoration:underline;  font-size: 20px; "><?= $tong_tien_tat_ca ?> VNĐ</td>
            </tr>
            </table>
        </div>
        <div class="row mb10">
            <a style="cursor: pointer;" href="index_admin.php?act=bieu_do_doanh_thu"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </div>
</div>