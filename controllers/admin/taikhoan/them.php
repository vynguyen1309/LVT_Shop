<div style="margin-bottom:300px;" class="row">
    <div class="row header frmtitle">
        <h1>THÊM TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent ">
        <form action="index_admin.php?act=themtk" method="POST" enctype="multipart/form-data">
            <div class="row mb10 form_content_container">
            </div>

            <div class="row mb10">
                <label>Tên user</label> <br>
                <input type="text" name="username" placeholder="Nhập tên user">
            </div>
            <div class="row mb10">
                <label>Mật khẩu</label> <br>
                <input type="text" name="password" placeholder="Nhập mật khẩu">
            </div>
            <div class="row mb10">
                <label>Email </label> <br>
                <input type="text" name="email" placeholder="Nhập email">
            </div>
            <div class="row mb10">
                <label>Địa chỉ </label> <br>
                <input type="text" name="address" placeholder="Nhập địa chỉ">
            </div>
            <div class="row mb10">
                <label>Số điện thoại </label> <br>
                <input type="text" name="phone" placeholder="Nhập số điện thoại">
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" name="themtk" value="THÊM MỚI">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index_admin.php?act=dstk"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>

            <?php if (isset($thong_bao) && ($thong_bao != ""))
                echo  $thong_bao; ?>
        </form>
        <hr>
    </div>
</div>