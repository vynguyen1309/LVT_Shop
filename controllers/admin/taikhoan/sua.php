<?php
if (is_array($account)) {
    extract($account);
}
?>
<div style="margin-bottom:300px;" class="row">
    <div class="row frmtitle">
        <h1>SỬA TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent ">
        <form action="index_admin.php?act=update_tk" method="POST">
            <div class="row mb10 form_content_container">
                <label> Tên đăng nhập </label> <br>
                <input type="text" name="username" value="<?php if (isset($username) && ($username != "")) echo $username ?>">
            </div>
            <div class="row mb10">
                <label>Mật khẩu tài khoản </label> <br>
                <input type="text" name="password" value="<?php if (isset($password) && ($password != "")) echo $password ?>">
            </div>
            <div class="row mb10">
                <label>Email tài khoản </label> <br>
                <input type="text" name="email" value="<?php if (isset($email) && ($email != "")) echo $email ?>">
            </div>
            <div class="row mb10">
                <label>Địa chỉ</label> <br>
                <input type="text" name="address" value="<?php if (isset($address) && ($address != "")) echo $address ?>">
            </div>
            <div class="row mb10">
                <label>Số điện thoại </label> <br>
                <input type="text" name="phone" value="<?php if (isset($phone) && ($phone != "")) echo $phone ?>">
            </div>
            <div class="row mb10">
                <label>Vai trò </label> <br>
                <input type="text" name="role" value="<?php if (isset($role) && ($role != "")) echo $role ?>">
            </div>

            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?= $id_user ?>">
                <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index_admin.php?act=dstk"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php if (isset($thong_bao) && ($thong_bao != ""))
                echo  $thong_bao; ?>
        </form>
        <hr>
    </div>
</div>