<div class="account-page">
    <style>
        span {
            position: relative;
            top: -38px;
            left: -20px;
        }

        #search {
            display: none;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="../views/images/1.jpg" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <p>Đăng ký</ơ>
                        <form id="RegForm" action="index.php?act=dangky" method="post" name="dang_ki">
                            <input id="name" type="text" placeholder="Username" name="username">
                            <span style="color: red"><?php echo isset($error["user"]) ? $error["user"] : '' ?></span>
                            <input id="pass" type="password" placeholder="Password" name="password">
                            <span style="color: red"><?php echo isset($error["pass"]) ? $error["pass"] : '' ?></span>
                            <input id="mail" type="email" placeholder="Email" name="email">
                            <span style="color: red"><?php echo isset($error["email"]) ? $error["email"] : '' ?></span>
                            <input id="address" type="text" placeholder="Địa chỉ" name="address">
                            <span style="color: red"><?php echo isset($error["address"]) ? $error["address"] : '' ?></span>
                            <input id="phone" type="text" placeholder="Số điện thoại" name="phone">
                            <span style="position: relative; top: -50px;color:red"><?php echo isset($error["phone"]) ? $error["phone"] : '' ?></span>
                            <input type="submit" class="btn" value="Đăng ký" name="dangky" id="dang_ki">
                            <!-- <input type="submit"   class="btn" value="Đăng nhập" name="dangnhap"> -->
                        </form>
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>