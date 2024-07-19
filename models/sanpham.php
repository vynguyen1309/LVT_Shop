<?php
function loadall_sanpham()
{
    $sql = "select * from sanpham where 1 order by id_sp desc";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function loadone_sanpham($id_sp)
{
    $sql = "select * from sanpham where id_sp = $id_sp";
    $sp = pdo_query_one($sql);
    return $sp;
}
function search_sanpham($keyw = "", $id_danhmuc = 0)
{
    $sql = "SELECT * FROM sanpham WHERE 1 ";
    if ($keyw != "") {
        $sql .= " and name like '%" . $keyw . "%'";
    }
    if ($id_danhmuc > 0) {
        $sql .= " and id_danhmuc ='" . $id_danhmuc . "'";
    }

    $sql .= " order by id_sp desc";
    $dssp = pdo_query($sql);
    return  $dssp;
}


function loadall_sanpham_top()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_new()
{
    $sql = "select * from sanpham where 1 order by id_sp desc limit 0,8";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function load_sanpham_cungloai($id_sp, $id_danhmuc)
{
    $sql = "select * from sanpham where id_danhmuc = $id_danhmuc and id_Sp <> $id_sp";
    $result = pdo_query($sql);
    return $result;
}
function insert_sanpham($tensp, $giasp, $hinh, $mota, $id_danhmuc)
{
    $sql = "insert into sanpham(name, price, image, mota, id_danhmuc) values('$tensp', '$giasp', '$hinh', '$mota', '$id_danhmuc')";
    return pdo_LastInsertId($sql);
}
function insert_spct($id_sp, $id_size, $soluong)
{
    $sql = "INSERT INTO sanphamchitiet(id_sp, id_size, soluong) VALUES('$id_sp', '$id_size', '$soluong')";
    return pdo_LastInsertId($sql);
}
function load_ctsp($id_danhmuc = 0)
{
    $sql = "SELECT danhmuc.id_danhmuc,sanphamchitiet.id_sanphambt , sanphamchitiet.soluong , sanpham.id_sp, sanpham.name ,sanpham.price , sanpham.image , sanpham.mota , size.size
    FROM sanpham
    LEFT JOIN sanphamchitiet ON sanpham.id_sp = sanphamchitiet.id_sp
    LEFT JOIN size ON size.id_size = sanphamchitiet.id_size
    LEFT JOIN danhmuc ON danhmuc.id_danhmuc = sanpham.id_danhmuc";
    if ($id_danhmuc > 0) {
        $sql .= " WHERE danhmuc.id_danhmuc = '$id_danhmuc'";
    }
    $list_ctsp = pdo_query($sql);
    //var_dump($list_ctsp);
    return $list_ctsp;
}
function delete_sanpham($id_sp)
{
    $sql = "delete from sanpham where id_sp=" . $id_sp;
    pdo_execute($sql);
}
function update_sanpham($id_sp, $id_danhmuc, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh != "")
        $sql = "update sanpham set id_danhmuc='" . $id_danhmuc . "', name='" . $tensp . "',  price='" . $giasp . "',  mota='" . $mota . "',  image='" . $hinh . "' where id_sp=" . $id_sp;
    else
        $sql = "update sanpham set id_danhmuc='" . $id_danhmuc . "', name='" . $tensp . "',  price='" . $giasp . "',  mota='" . $mota . "' where id_sp=" . $id_sp;
    pdo_execute($sql);
}
function add_bt($id_sp, $id_size, $soluong)
{
    $sql = "INSERT INTO sanphamchitiet ( id_sp, id_size, soluong)
            VALUES ('$id_sp','$id_size','$soluong');";
    pdo_execute($sql);
}
