<?php
 function delete_binhluan($id){
    $sql = "DELETE FROM comment WHERE id_cmt=".$id;
    pdo_execute($sql);
}
function loadall_binhluan(){
    $sql = "SELECT * FROM comment ORDER BY id_cmt ASC";  // asc : sắp xếp từ bé đến lớn  , desc : sắp xếp từ lớn xuống bé
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}

?>