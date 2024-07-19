<style>
    #search {
        display: none;
    }
</style>
<div class="small-container cart-page">
    <?php
    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
        // Code xử lý
        echo '
        <table>
            <h1>Giỏ hàng của bạn</h1>
            <br>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Size</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr> ';
        $i = 0;
        $tongdonhang = 0;
        $del = "index.php?act=delcart&i=" . ($i + 1);
        foreach ($_SESSION['giohang'] as $spcart) {
            // extract($spcart);
            
            $tongtien = $spcart['4'] * $spcart['5'];
            $tongdonhang += $tongtien;
            echo '
            <tr>
               <td>' . ($i + 1) . '</td>
               <td>' . $spcart[2] . '</td>
               <td><img src=
               "' . $spcart[3] . '"></td>
               <td>' . number_format($spcart[4], 0, '.', '.') . 'đ</td>
               <td>' . $spcart[5] . '</td>
               <td>'.$spcart[6].'</td>
               <td>' . number_format($tongtien, 0, '.', '.') . 'đ</td>
               <td><a href="' . $del . '"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td></tr>
                ';
            $i++;  // echo var_dump( $_SESSION['giohang']);}

        }
    }
    ?>

    </table>

    <?php
    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
        echo '
    <div class="total-price">
        <table>
            <tr>
                <td>Tổng tiền:</td>
                <td>' . number_format($tongdonhang, 0, '.', '.') . 'đ</td>
            </tr>

        </table>

    </div>
 
    <a href="index.php?act=delcart"><input class="btn" type="submit" value="Xóa toàn bộ giỏ hàng"></a>
    <a href="index.php?act=thanhtoan"><input class="btn" type="submit" value="Tiến hành thanh toán"></a></div>
    ';
    } else {
        echo '</div>
        <div class="small-container cart-page">
        <table>
            <h1>Giỏ hàng của bạn</h1>
            <br>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Xóa</th>
            </tr>
            </table> <br>
            Không có sản phẩm nào trong giỏ hàng! <br>          
           </div>';
    }
    ?>