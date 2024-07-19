<?php
if (is_array($don_hang)) {
    extract($don_hang);
}
?>
<div style="margin-bottom:300px;" class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT TRẠNG THÁI ĐƠN HÀNG</h1>
    </div>
    <div class="row frmcontent ">
        <form action="index_admin.php?act=update_dh" method="POST">
            <div class="row mb10 form_content_container">
                <label> ID ĐƠN HÀNG </label> <br>
                <input type="text" name="id_donhang" value="<?php if (isset($id_donhang) && ($id_donhang != "")) echo $id_donhang ?>" disabled>
            </div>
            <div class="row mb10">
                <label>MÃ ĐƠN HÀNG </label> <br>
                <input type="text" name="madh" value="<?php if (isset($madh) && ($madh != "")) echo $madh ?>" disabled>
            </div>
            <div class="row mb10">
                <label>ID NGƯỜI DÙNG </label> <br>
                <input type="text" name="id_user" value="<?php if (isset($id_user) && ($id_user != "")) echo $id_user ?>" disabled>
            </div>
            <div class="row mb10">
                <label>TỔNG ĐƠN HÀNG </label> <br>
                <input type="text" name="tongdonhang" value="<?php if (isset($tongdonhang) && ($tongdonhang != "")) echo $tongdonhang ?>" disabled>
            </div>
            <div class="row mb10">
                <label>TÊN NGƯỜI NHẬN</label> <br>
                <input type="text" name="hoten" value="<?php if (isset($name_receiver) && ($name_receiver != "")) echo $name_receiver ?>" disabled>
            </div>
            <div class="row mb10">
                <label>EMAIL </label> <br>
                <input type="text" name="email" value="<?php if (isset($email_receiver) && ($email_receiver != "")) echo $email_receiver ?>" disabled>
            </div>
            <div class="row mb10">
                <label>SỐ ĐIỆN THOẠI </label> <br>
                <input type="text" name="sdt" value="<?php if (isset($phone_receiver) && ($phone_receiver != "")) echo '0' . $phone_receiver ?>" disabled>
            </div>
            <div class="row mb10">
                <label>ĐỊA CHỈ </label> <br>
                <input type="text" name="address" value="<?php if (isset($address_receiver) && ($address_receiver != "")) echo $address_receiver ?>" disabled>
            </div>
            <div class="row mb10">
                <label>NGÀY ĐẶT HÀNG</label> <br>
                <input type="text" name="ngay_dathang" value="<?php if (isset($ngaydathang) && ($ngaydathang != "")) echo $ngaydathang ?>" disabled>
            </div>
            <!-- <div class="row mb10">
                <label>MÃ SẢN PHẨM CHI TIẾT</label> <br>
                <input type="text" name="id_sp_chitiet" value="<?php if (isset($id_sanphamchitiet) && ($id_sanphamchitiet != "")) echo $id_sanphamchitiet ?>" disabled>
            </div> -->
            <div class="row mb10">
                <label>TRẠNG THÁI</label> <br>
                <select name="role" id="">
                    <option value="0">Chưa Xác Nhận</option>
                    <option value="1">Đã Xác Nhận</option>
                    <option value="2">Hủy Đơn</option>
                    <option value="3">Giao hàng thành công</option>
                    <option value="4">Đang giao</option>
                </select>
            </div>
            <!-- <div class="row mb10">
                <label>MÃ THANH TOÁN</label> <br>
                <input type="text" name="id_thanhtoan" value="<?php if (isset($id_thanhtoan) && ($id_thanhtoan != "")) echo $id_thanhtoan ?>" disabled>
            </div> -->

            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?= $id_donhang ?>">
                <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index_admin.php?act=ds_donhang"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php if (isset($thong_bao) && ($thong_bao != ""))
                echo  "<script language='javascript'>alert('đã cập nhật thành công');</script>"; ?>
        </form>
        <hr>
    </div>
</div>