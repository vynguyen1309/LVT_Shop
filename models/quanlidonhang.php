
<?php
function loadone_donhang($id_donhang)
{
    $sql = "SELECT * FROM donhang WHERE id_donhang=" . $id_donhang;
    $don_hang = pdo_query_one($sql);
    return $don_hang;
}

function  update_donhang_admin($id, $role)
{
    $sql = "UPDATE donhang SET status = '" . $role . "'  WHERE id_donhang=" . $id;
    pdo_execute($sql);
    echo "<script language='javascript'>alert('Cập nhật đơn hàng thành công');</script>";
}

function loadall_don_hang()
{
    $sql = "SELECT * FROM donhang ORDER BY id_donhang ASC";  // asc : sắp xếp từ bé đến lớn  , desc : sắp xếp từ lớn xuống bé
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}
function  cancel_order($id, $role)
{
    $sql = "UPDATE donhang SET status = '" . $role . "'  WHERE id_donhang=" . $id;
    pdo_execute($sql);
}
function loadall_doanhthu()
{
    $sql = "SELECT id_donhang, madh, SUM(tongdonhang) as total_revenue
            FROM `donhang`
            WHERE status = '1'
            GROUP BY id_donhang, madh";
    
    $list_doanhthu = pdo_query($sql);
    return $list_doanhthu;
}
?>