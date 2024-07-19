<?php
function insert_user( $username, $password,$email,$address,$phone)
{
    $sql = "INSERT INTO user ( username, password,email,address,phone) 
    VALUES ( '$username','$password','$email','$address','$phone'); ";
    pdo_execute($sql);
}
function dangnhap($username, $password)
{
    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;

}
function dangxuat()
{
    if (isset($_SESSION['username'])) {
        
        unset($_SESSION['username']);
echo  "<script language='javascript'>
        window.location.reload();</script>";
    }
}
?>
