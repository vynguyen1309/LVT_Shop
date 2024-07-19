<div class="small-container">

<br>
<h2>Tất cả sản phẩm</h2>
<br>
        <div class="row row-2">   
                 <?php
                foreach ($listdm as $dm) {
                    extract($dm);      
                    $linkdm = "index.php?act=timkiem&id_danhmuc=" . $id_danhmuc;
                    echo '<a href="' . $linkdm . '">'.$name.'</a>';
                }
                ?> 
        <select>
            <option>Sắp xếp</option>
            <a href=""><option>Giá tăng dần</option></a>
            <option>Giá giảm dần</option>
        </select>
    </div>
    <?php if (isset($thongbao) && !empty($thongbao)) : ?>
        <p><?php echo $thongbao; ?></p>
    <?php endif; ?>
    <div class="row">
        <?php
        $i = 0;
        foreach ($dssp as $sp) {
            extract($sp);
            if (strlen($name) > 20) {
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
        <p>' . number_format($price, 0, '.', '.') . 'đ</p>              
        <a href="index.php?act=addgiohang"><button class="atc-btn">Thêm vào giỏ hàng</button></a>
        </div>';
        }
        $i += 1;
        ?>
    </div>