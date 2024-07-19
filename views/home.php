<div class="small-container">
    <h2 class="title">Sản phẩm nổi bật</h2>
    <div class="row">
        <?php
        $i = 0;
        foreach ($dsspnew as $sp) {
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
            <form action="index.php?act=addtocart" method="post">
                <a href="' . $linksp . '"><img src="' . $hinh . '"></a>
                <a href="' . $linksp . '"><h4>' . $name . '</h4></a>        
                <p>' .number_format($price,0,'.','.') . 'đ</p>               
                <input type="submit" name="addtocart" class="atc-btn" value="Thêm vào giỏ hàng">
                <input type="hidden" name="id_sp" value="'.$id_sp.'">
                <input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="hinh"  value="'.$hinh.'">
                <input type="hidden" name="price"  value="'.$price.'">
                <input type="hidden" name="soluong" value="1">   
                </form>                         
            </div>';
        }
        $i += 1;
        ?>

    </div>
    <div class="small-container">
        <h2 class="title">Sản phẩm mới nhất</h2>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
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
                <form action="index.php?act=addtocart" method="post">
                    <a href="' . $linksp . '"><img src="' . $hinh . '"></a>
                    <a href="' . $linksp . '"><h4>' . $name . '</h4></a>        
                    <p>' .number_format($price,0,'.','.') . 'đ</p>               
                    <input type="submit" name="addtocart" class="atc-btn" value="Thêm vào giỏ hàng">
                    <input type="hidden" name="id_sp" value="'.$id_sp.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="hinh"  value="'.$hinh.'">
                    <input type="hidden" name="price"  value="'.$price.'">
                    <input type="hidden" name="soluong" value="1">   
                    </form>                         
                </div>';
            }
            $i += 1;
            ?>
        </div>
    </div>
</div>
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