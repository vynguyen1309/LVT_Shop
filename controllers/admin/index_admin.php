<?php
include "../../models/connect.php";
include "../../models/login.php";
include "../../models/sanpham.php";
include "../../models/danhmuc.php";
include "../../models/comment.php";
include "../../models/size_color.php";
include "../../models/taikhoan.php";
include "../../models/binhluan.php";
include "../../models/cart.php";
include "../../models/quanlidonhang.php";
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //Controller danh mục
        case 'adddm':
            //Kiểm tra xem người dùng có click vòa nút add hay không?
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                // Gọi hàm
                if ((empty($tenloai))) {
                    $thongbao = "Chưa nhập các trường";
                } else {
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
            }
            include "../admin/danhmuc/add.php";
            break;
        case 'listdm':
            $listdm = loadall_danhmuc();
            include "../admin/danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                delete_danhmuc($_GET['id_danhmuc']);
            }
            $listdm = loadall_danhmuc();
            include "../admin/danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $dm = loadone_danhmuc($_GET['id_danhmuc']);
            }
            include "../admin/danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id_danhmuc = $_POST['id_danhmuc'];
                update_danhmuc($id_danhmuc, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadall_danhmuc();
            include "../admin/danhmuc/list.php";
            break;

            // Controller sản phẩm

        case 'addsp':
            //Kiểm tra xem người dùng có click vòa nút add hay không?
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_danhmuc = $_POST['id_danhmuc'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $filename = $_FILES['hinh']['name'];
                $target_dir = "../../views/images/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if ((empty($tensp)) && (empty($giasp))  && (empty($filename))) {
                    $thongbao = "Chưa nhập hết các trường";
                } else {
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    insert_sanpham($tensp, $giasp, $filename, $mota, $id_danhmuc);
                    $thongbao = "Thêm thành công";
                }
            }
            $listdm = loadall_danhmuc();
            include "../admin/sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_danhmuc = $_POST['id_danhmuc'];
            } else {
                $kyw = '';
                $id_danhmuc = 0;
            }
            $listdm = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "../admin/sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                delete_sanpham($_GET['id_sp']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "../admin/sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id_sp']);
            }
            $listdm = loadall_danhmuc();
            include "../admin/sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_sp = $_POST['id_sp'];
                $id_danhmuc = $_POST['id_danhmuc'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../../views/images/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                } else {
                }
                update_sanpham($id_sp, $id_danhmuc, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdm = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "../admin/sanpham/list.php";
            break;

            // Controller biến thể
        case 'add_ctsp':

            if (isset($_POST['id_sp']) && $_POST['id_sp'] && isset($_POST['id_size']) && $_POST['id_size'] && isset($_POST['soluong']) && $_POST['soluong']) {
                insert_spct($_POST['id_sp'], $_POST['id_size'], $_POST['soluong']);
                $thongbao = "Thêm thành công";
            }
            $listsanpham = loadall_sanpham();
            $listsize = loadall_size();
            include "../admin/sanpham/add_ctsp.php";

            break;
        case 'list_ctsp':
            $list_ctsp = load_ctsp();
            include "../admin/sanpham/list_ctsp.php";
            break;

            // controller tai khoan
        case 'dstk':
            $listtaikhoan = loadall_taikhoan();
            include "../admin/taikhoan/danhsach.php";
            break;
        case 'themtk':
            if (isset($_POST['themtk']) && ($_POST['themtk'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                if ((empty($username)) && (empty($password)) && (empty($email)) && (empty($address)) && (empty($phone))) {
                    $thong_bao = "Chưa nhập các trường";
                } else {
                    insert_user($username, $password, $email, $address, $phone);
                    $thong_bao = "Đã thêm tài khoản $username";
                }
            }
            include "../admin/taikhoan/them.php";
            break;
        case 'xoa_tk':
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                delete_taikhoan($_GET["id"]);
                echo "<script language='javascript'>alert('đã xóa tài khoản thành công');</script>";
            }
            $listtaikhoan = loadall_taikhoan();
            include "../admin/taikhoan/danhsach.php";
            break;
        case 'edit_tk':
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                $account = loadone_taikhoan($_GET["id"]);
            }
            include "../admin/taikhoan/sua.php";
            break;
        case 'update_tk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];
                update_taikhoan($id, $username, $password,  $email, $address, $phone, $role);
                $thong_bao =  "<script language='javascript'>alert('Cập nhật tài khoản thành công');</script>";
            }
            $listtaikhoan = loadall_taikhoan();
            include "../admin/taikhoan/danhsach.php";
            break;
            // controller cmt
        case 'dsbl':
            $listbinhluan = loadall_binhluan();
            include "../admin/binhluan/danhsach.php";
            break;
        case 'xoa_bl':
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                delete_binhluan($_GET["id"]);
                echo "<script language='javascript'>alert('đã xóa bình luận');</script>";
            }
            $listbinhluan = loadall_binhluan();
            include "../admin/binhluan/danhsach.php";
            break;

        case 'ds_donhang':
            $listdonhang = loadall_don_hang();
            include "../admin/donhang/ds_donhang.php";
            break;
        case 'edit_dh':
            if (isset($_GET["id_donhang"]) && ($_GET["id_donhang"]) > 0) {
                $don_hang = loadone_donhang($_GET["id_donhang"]);
            }
            include "../admin/donhang/update_status_donhang.php";
            break;

            // update account admin
        case 'update_dh':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $role = $_POST['role'];
                update_donhang_admin($id, $role);
                $thong_bao = "Cập nhật trạng thái đơn hàng thành công";
            }
            $listdonhang = loadall_don_hang();
            include "../admin/donhang/ds_donhang.php";
            break;
        case "xemchitiet":
            $id_donhang = $_GET["id_donhang"];
            $dh = loadall_cart($_GET['id_donhang']);
            include "../admin/donhang/chitiet_dh.php";


            break;
            // Thống kê
        case "thongke":
            $listthongke = loadall_thongke();
            include "thongkedanhmuc/list.php";
            break;
        case "bieudo":
            $listthongke = loadall_thongke();
            include "thongkedanhmuc/bieudo.php";
            break;
            case "doanh_thu":
                $doanhthu = loadall_doanhthu();
                include "thongkedoanhthu/listdoanhthu.php";
                break;
            case 'bieu_do_doanh_thu':
                $doanhthu = loadall_doanhthu();
                include "thongkedoanhthu/list_doanhthu.php";
                break;
       
    }
} else {
    $listthongke = loadall_thongke();
    include "thongkedanhmuc/list.php";
}
