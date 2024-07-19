
<?php
echo'
<div class="account-info">
        <h1>Thông tin tài khoản</h1>
        <h3>Xin chào '.$username.'</h3>
        <div class="profile-info">
        <form action="index.php?act=upthongtin" method="POST">         
            
            <li>Email: <input type="text" name="email" value="'.$email.'" ></li>
            
            <li>Số điện thoại: <input type="text" name="phone" value="'.$phone.'" ></li>
            
            <li>Địa chỉ: <input type="text" name="address" value="'.$address.'" ></li>
            
        </div>
        <input type="hidden" name="id" value=" '.$id_user.'">
        <input type="submit" name="capnhat" value="Cập nhật thông tin">
        </form>
    </div>';
    ?>