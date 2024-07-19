<?php

function delete_taikhoan($id)
{
    $sql = "DELETE FROM user WHERE id_user=" . $id;
    pdo_execute($sql);
}
function loadone_taikhoan($id)
{
    $sql = "SELECT * FROM user WHERE id_user=" . $id;
    $account = pdo_query_one($sql);
    return $account;
}
function check_user($user, $pass)
{
    $sql = "SELECT * FROM user WHERE username='" . $user . "' AND passwordS='" . $pass . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}
function check_email($email)
{
    $sql = "SELECT * FROM user WHERE email='" . $email . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}
function  update_taikhoan($id, $user, $password, $email, $address, $phone, $role)
{
    $sql = "UPDATE user SET username = '" . $user . "', password = '" . $password . "', email = '" . $email . "', address = '" . $address . "', phone = '" . $phone . "' ,role='" . $role . "'WHERE id_user=" . $id;
    pdo_execute($sql);
    echo "<script language='javascript'>alert('Cập nhật tài khoản thành công');</script>";
}
function loadall_taikhoan()
{
    $sql = "SELECT * FROM user ORDER BY id_user ASC";  // asc : sắp xếp từ bé đến lớn  , desc : sắp xếp từ lớn xuống bé
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function loadall_acc($id_user){
    $sql="select * from user where id_user=".$id_user;
    $listacc=pdo_query($sql);
    return  count($listacc);
}
function  update_info($id,  $email, $address, $phone)
{
    $sql = "UPDATE user SET   email = '" . $email . "', address = '" . $address . "', phone = '" . $phone . "' WHERE id_user=" . $id;
    pdo_execute($sql);
    echo "<script language='javascript'>alert('Cập nhật thông tin thành công');</script>";
}
