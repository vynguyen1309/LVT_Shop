<div class=" row">
    <div class="row header frmtitle mb">
        <h1>THỐNG KÊ SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                    <td>' . $madm . '</td>
                    <td>' . $tendm . '</td>
                    <td>' . $countsp . '</td>
                    <td>' . $maxprice . '</td>
                    <td>' . $minprice . '</td>
                    <td>' . $avgprice . '</td>          
                </tr>';
                }

                ?>
            </table>
        </div>
        <div class="row mb10">
            <a style="cursor: pointer;" href="index_admin.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
        </div>
    </div>
</div>