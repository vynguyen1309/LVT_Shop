<div style="margin-top:40px;" class="row">
    <style>
        #back {
            text-decoration: none;
        }

        #back:hover {
            color: orangered;
        }
    </style>
      <div class="row frmtitle">
        <h1>CHI TIẾT ĐƠN HÀNG</h1>
    </div>
    <div class="row frmcontent ">
        <form action="#" method="POST">
            <div class="row mb10 frmdsloai">
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
                </table><br>
                <?php

                echo '
    <div class="total-price">
        <table>
            <tr>
                Tổng tiền : ' . number_format($tongdonhang, 0, '.', '.') . 'đ<br>
            </tr>

        </table>

    </div>
    ';
                ?>
                <?php if (isset($thongbao) && !empty($thongbao)) : ?>
                    <p><?php echo $thongbao; ?></p>
                <?php endif; ?>
                <br>


                <a id="back" href="index_admin.php?act=ds_donhang">Quay Lại</a>
            </div>
        </form>

    </div>
</div>