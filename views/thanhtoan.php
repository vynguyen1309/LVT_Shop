<div class="small-container cart-page">
    <?php
    if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
        echo '
        <table>
            <h1>Đơn hàng của bạn</h1>
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
        foreach ($_SESSION['giohang'] as $spcart) {
            // extract($spcart);
            $tongtien = $spcart['4'] * $spcart['5'];
            $tongdonhang += $tongtien;
            echo '
            <tr>
               <td>' . ($i + 1) . '</td>
               <td>' . $spcart[2] . '</td>
               <td><img src="' . $spcart[3] . '"></td>
               <td>' . number_format($spcart[4], 0, '.', '.') . 'đ</td>
               <td>' . $spcart[5] . '</td>
               <td>'.$spcart[6].'</td>
               <td>' . number_format($tongtien, 0, '.', '.') . 'đ</td>
               <td><a href="index.php?act=delcart"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td></tr>
                ';
            $i++;  // echo var_dump( $_SESSION['giohang']);}

        }
    }
    ?>
    </table>
    <?php
    echo '
    <div class="total-price">
        <table>
            <tr>
                <td>Tổng tiền:</td>
                <td>' . number_format($tongdonhang, 0, '.', '.') . 'đ</td>
            </tr>

        </table>

    </div>
    ';
    ?>
    <?php if (isset($thongbao) && !empty($thongbao)) : ?>
        <p><?php echo $thongbao; ?></p>
    <?php endif; ?>
    <br>
    <hr>
    <?php
    if (isset($_SESSION['username'])) {
        $name = $_SESSION['username']['username'];
        $phone = $_SESSION['username']['phone'];
        $email = $_SESSION['username']['email'];
        $address = $_SESSION['username']['address'];
    } else {
        $name = "";
        $phone = "";
        $email = "";
        $address = "";
    }
    ?>

    <div class="info-paypal"></div>
    <h2>Thông tin đặt hàng</h2>
    <br>
    <form action="index.php?act=thanhtoan" method="post">
        Tên người nhận:
        <input type="text" name="name_receiver" placeholder="Họ và tên" value="<?= $name ?>">
        Số điện thoại:
        <input type="text" name="phone_receiver" placeholder="Số điện thoại" value="<?= $phone ?>">
        Email:
        <input type="email" name="email_receiver" placeholder="Email" value="<?= $email ?>">
        Địa chỉ:
        <input type="text" name="address_receiver" placeholder="Địa chỉ" value="<?= $address ?>">
        <input type="hidden" name="tongdonhang" value="<?= $tongdonhang ?>">
        <br>
        <h3>Phương thức thanh toán</h3>
        <p><input type="radio" name="pttt" value="1"> Thanh toán khi nhận hàng</p>
        <div class="paypal">
            <input type="submit" class="paypal-btn" id="paypal-btn" name="thanhtoan" value="Đặt hàng">
    </form>
</div>
</div>