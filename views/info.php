<style>
    #search {
        display: none;
    }
</style>

<?php
if (isset($_SESSION['username'])) {
    
    echo '
    <div class="account-info">
        <h1>Thông tin tài khoản</h1>
        <h3>Xin chào ' . $username . '</h3>
        <div class="profile-info">
            <li>Tên đăng nhập: <span>' . $username . '</span></li>
            <br>
            <li>Email: <span>' . $email . '</span></li>
            <br>
            <li>Số điện thoại: <span>' . $phone . '</span></li>
            <br>
            <li>Địa chỉ: <span>' . $address . '</span></li>
            <br>
        </div>
        ' . 
        (isset($_SESSION['username']) && $_SESSION['username']['role'] == 1 ? 
            '<a href="../controllers/admin/index_admin.php">
                <input type="submit" value="Đến trang quản trị"></a>' : '') .
        '
        <a href="index.php?act=uptt"><input type="submit" value="Cập nhật thông tin"></a>
    </div>';
  
} else {
    echo '
    <div class="account-info">
        <h1>Thông tin tài khoản</h1>
        <h3>Xin chào </h3>
        <div class="profile-info">
            Bạn chưa đăng nhập! <b><a href="index.php?act=dangnhap">Đăng nhập ngay</a></b>
        </div>
        
    </div>';
}


?>
