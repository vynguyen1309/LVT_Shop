<div class="small-container single-product">
    <?php


    extract($sanpham);


    echo '
    <form action="index.php?act=addtocart" method="post">

    <div class="row">
        <div class="col-2">
           <img src="' . $img_path . $image . '" width="100%" id="productImg">
        </div>
        <div class="col-2">
            <h2>' . $name . '</h2>
            <p>' . $price . 'đ</p>
           ';
    echo '
            <select name="size" id="sizeSelect">
                <option value="">Size</option>';
    foreach ($listsize as $size) {
        extract($size);
        echo '<option value="' . $id_size . '">' . $size . '</option>';
    }
    echo '
            </select>
            <br>
            <input type="number" name="soluong" value="1" min="1">
            <input type="hidden" name="id_sp" value="' . $id_sp . '">
            <input type="hidden" name="name" value="' . $name . '">
            <input type="hidden" name="hinh" value="' . $img_path . $image . '">
            <input type="hidden" name="price" value="' . $price . '">
            <input type="hidden" name="size" value="' . $size . '">
            <input type="submit" name="addtocart" class="atc-btn" value="Thêm vào giỏ hàng">
            <h3>Mô tả</h3>
            <br>
           <p>' . $mota . '</p>
        </div>
    </div>
    </form>';

    ?>
</div>

<!-- ----- title------------- -->


<!-- ---------------Products----------------- -->
<div class="small-container">

    <div class="row-cmt">
        <div class="comment-form">
            <form action="index.php?act=spchitiet&id_sp=<?= $id_sp ?>" method="post">
                <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                <input type="text" name="noidung" placeholder="Bình luận ">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">

            </form>
        </div>
        <div class="comment-box">
            <table>
                <?php foreach ($comment as $value) : ?>
                    <tr>
                        <td><?php echo $value['username'] ?></td>
                        <td><?php echo $value['noidung'] ?></td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngay_cmt'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>


    </div>
    <br>
    <div class="small-container">
        <div class="row row2">
            <h2>Sản phẩm cùng loại</h2>
        </div>
    </div>
    <div class="row">
        <?php
        $i = 0;


        foreach ($sanphamcl as $sp) {
            extract($sp);
            if (strlen($name) > 24) {
                $name = substr($name, 0, 24) . '...';
            }

            $hinh = $img_path . $image;
            if (($i == 2) || ($i == 5) || ($i == 8)) {
                $mr = "";
            } else {
                $mr = "mr";
            }
            $linksp = "index.php?act=spchitiet&id_sp=" . $id_sp;
            echo ' <div class="col-4">
        <a href="' . $linksp . '"><img src="' . $hinh . '"></a>
        <a href="' . $linksp . '"><h4>' . $name . '</h4></a>        
        <p>' . $price . 'đ</p>  
        <input type="submit" name="addgiohang" class="atc-btn" value="Thêm vào giỏ hàng">
    </div>';
        }
        $i += 1;
        ?>
    </div>
</div>

<!-- ------------footer----------- -->

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2"><img src="../views/images/vans.png" class="offer-img"> </div>
            <div class="col-2">
                <p>Exclusive Availabble on LVT SHOP</p>
                <h1>LVT SHOP</h1>
                <small>
                    Sản phẩm dành cho phái mạnh, đừng bỏ qua những sản phẩm như Vans Old Skool, Authentic, Sk8 hay Slip on nếu bạn là fan cứng của thương hiệu VANS.</small>
                <a href="index.php?act=sanpham" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>