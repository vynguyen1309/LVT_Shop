<div class="small-container">
    <br>
<h2>Tất cả sản phẩm</h2>
<br>
<h3>DANH MỤC</h3> 
        <div class="row row-2">   
                 <?php
                foreach ($listdm as $dm) {
                    extract($dm);      
                    $linkdm = "index.php?act=timkiem&id_danhmuc=" . $id_danhmuc;
                    echo '<a href="' . $linkdm . '">'.$name.'</a>';
                }
                ?>             
            
            <select>
                <option value="0">Sắp xếp</option>
                <option value="">Giá tăng dần</option>
                <option value="">Giá giảm dần</option>
            </select>
        </div>
<div class="row">
    <?php
    $i=0;
    

    foreach($sanpham as $sp){
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
    $i+=1;
    ?>
 </div>          