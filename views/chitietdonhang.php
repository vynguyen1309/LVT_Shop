<div class="small-container cart-page">
    <?php
    if (isset($_GET['id_donhang'])) {
        echo '
        <table>
            
            <br>
            <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Tên sản phẩm</th>  
                <th>Giá</th>                         
                <th>Số lượng</th>  

            </tr> ';
        $i = 0;
        $tongdonhang = 0;
        foreach ($dh as $sp) {
            extract($sp);
            echo '
            <tr>
               <td>' . ($i + 1) . '</td>
               <td>' . $sp['madh'] . '</td>
               <td>' . $sp['name'] . ' </td>   
               <td>' . number_format($price, 0, '.', '.') . 'đ</td>                    
               <td>' . $sp['soluong'] . '</td>                          
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
        <input type="text" name="name_receiver" placeholder="Họ và tên" value="<?= $name ?> " disabled>
        Số điện thoại:
        <input type="text" name="phone_receiver" placeholder="Số điện thoại" value="<?= $phone ?>" disabled>
        Email:
        <input type="email" name="email_receiver" placeholder="Email" value="<?= $email ?>" disabled>
        Địa chỉ:
        <input type="text" name="address_receiver" placeholder="Địa chỉ" value="<?= $address ?>" disabled>
        <input type="hidden" name="tongdonhang" value="<?= $tongdonhang ?>">
        <br>
        <h3>Phương thức thanh toán</h3>
        <p> Thanh toán khi nhận hàng</p>


    </form>
    <a href="index.php?act=lsmuahang"><button style="cursor: pointer;"><b>Quay lại</b></button></a>
</div>
</div>