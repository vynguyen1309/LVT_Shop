<style>
    #search {
        display: none;
    }
</style>
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="../views/images/1.jpg" width="100%">
            </div>
            <div class="col-2">
                <?php if (isset($thongbao) && !empty($thongbao)) : ?>
                    <p><?php echo $thongbao; ?></p>
                <?php endif; ?>
                <div class="form-container">
                    <div class="form-btn">
                        <span>Đăng nhập</span>
                        <form id="RegForm" action="index.php?act=dangnhap" method="post">
                            Tài khoản:
                            <input type="text" placeholder="Username" name="username">
                            Mật khẩu:
                            <input type="password" placeholder="Password" name="password">
                            <input type="submit" class="btn" value="Đăng nhập" name="dangnhap">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>