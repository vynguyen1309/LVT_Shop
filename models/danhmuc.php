<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id_danhmuc desc";
    $listdm=pdo_query($sql);
    return  $listdm;
}

    function insert_danhmuc($tenloai) {
        $sql="insert into danhmuc(name) values('$tenloai')";
        pdo_execute($sql);   
    }
    function delete_danhmuc($id_danhmuc) {
        $sql  = "DELETE FROM danhmuc WHERE id_danhmuc=".$id_danhmuc;
        pdo_execute($sql);
    }
    
    // function loadall_danhmuc() {
    //     $sql="select * from danhmuc order by id_danhmuc desc";
    //     $listdanhmuc = pdo_query($sql);
    //     return $listdanhmuc;
    // }
    function loadone_danhmuc($id_danhmuc) {
        $sql="select * from danhmuc where id_danhmuc=".$id_danhmuc;
        $dm = pdo_query_one($sql); 
        return $dm;
    }
    function update_danhmuc($id_danhmuc, $tenloai) {
        $sql="update danhmuc set name='".$tenloai."' where id_danhmuc=".$id_danhmuc;
        pdo_execute($sql);
    }
    function loadall_thongke() {
        $sql = "SELECT danhmuc.id_danhmuc as madm, danhmuc.name as tendm, count(sanpham.id_sp) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql.=" FROM sanpham LEFT JOIN danhmuc ON danhmuc.id_danhmuc = sanpham.id_danhmuc";
        $sql.=" GROUP BY danhmuc.id_danhmuc ORDER BY danhmuc.id_danhmuc DESC";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>
