<?php
function loadall_size()
{
    $sql = "select * from size order by id_size asc";
    $listsize = pdo_query($sql);
    return  $listsize;
}
