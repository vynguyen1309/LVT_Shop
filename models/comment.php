
<?php
function insert_cmt($id_sp, $noidung, $id_user)
{
    $date = date('Y-m-d');
    $sql = "
            INSERT INTO `comment`(`noidung`, `id_user`, `id_sp`, `ngay_cmt`) 
            VALUES ('$noidung','$id_user','$id_sp','$date');
        ";
    //echo $sql;
    //die;
    pdo_execute($sql);
}

function loadall_comment($id_sp)
{
    $sql = "
            SELECT comment.id_cmt, comment.noidung, user.username, comment.ngay_cmt FROM `comment` 
            LEFT JOIN user ON comment.id_user = user.id_user
            LEFT JOIN sanpham ON comment.id_sp = sanpham.id_sp
            WHERE sanpham.id_sp = $id_sp;
        ";
    $listcmt =  pdo_query($sql);
    return $listcmt;
}

?>