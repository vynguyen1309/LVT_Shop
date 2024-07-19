<?php
function taodonhang($id_user,$tongdonhang,$name_receiver,$email_receiver,$phone_receiver,$address_receiver, $pttt,$madh)
{
    $sql = "INSERT INTO donhang ( id_user,tongdonhang, name_receiver, email_receiver, phone_receiver, address_receiver, phuongthuc_thanhtoan, madh)
            VALUES ('$id_user','$tongdonhang','$name_receiver','$email_receiver','$phone_receiver','$address_receiver','$pttt','$madh');";
            return pdo_LastInsertId($sql);
          
   
}
function itemcart($id_donhang,$madh,$id_sp,$soluong)
{

    $sql = "INSERT INTO donhangchitiet ( id_donhang,madh, id_sp, soluong)
            VALUES ('$id_donhang','$madh','$id_sp','$soluong');";
            pdo_execute($sql);
   
}
function loadall_donhang($id_user){
    $sql="select * from donhang where id_user=".$id_user;
    $listdh=pdo_query($sql);
    return  $listdh;
}
// function loadone_donhang($id_donhang){
//     $sql="select * from donhangchitiet where id_donhang=".$id_donhang;
//     $dh=pdo_query($sql);
//     return  $dh;
// }

function loadall_sp_cart($id_donhang){
    $sql="select * from donhangchitiet where id_donhang=".$id_donhang;
    $listdh=pdo_query($sql);
    return  count($listdh);
}
function loadall_cart($id_donhang){
    $sql=" SELECT donhangchitiet.id_dhct, donhangchitiet.madh,donhangchitiet.madh, sanpham.name,donhang.tongdonhang,sanpham.price, donhangchitiet.soluong FROM `donhangchitiet` 
    LEFT JOIN donhang ON donhangchitiet.id_donhang = donhang.id_donhang
    LEFT JOIN sanpham ON donhangchitiet.id_sp = sanpham.id_sp
    WHERE  donhang.id_donhang=$id_donhang;";
    $dh=pdo_query($sql);
    return  $dh;

}


?>