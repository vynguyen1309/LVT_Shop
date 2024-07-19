<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
include "../models/connect.php";
include "../models/login.php";
include "../models/sanpham.php";
include "../models/danhmuc.php";
include "../models/comment.php";
include "../models/size_color.php";
include "../models/cart.php";
include "../models/taikhoan.php";
include "../models/quanlidonhang.php";
$dsspnew = loadall_sanpham_top();
$sanpham = loadall_sanpham();
$listdm = loadall_danhmuc();
$listsize = loadall_size();
// $listcolor = loadall_color();
$spnew = loadall_sanpham_new();

// $listdh=loadall_donhang($id_user);
include "../views/header.php";
include "../global.php";

// include "global.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "timkiem":
            if (isset($_POST['keyw']) && $_POST['keyw'] != 0) {
                $keyw = $_POST['keyw'];
            } else {
                $keyw = "";
            }
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $id_danhmuc = $_GET['id_danhmuc'];
                // $listsp= loadall_sanpham_dm();
            } else {
                $id_danhmuc = 0;
            }
            $dssp = search_sanpham($keyw, $id_danhmuc);


            include "../views/sanphamsearch.php";


            break;
        case "sanpham":
            include "../views/sanpham.php";
            break;
        case "dangky":
            $error = [];
            if (isset($_POST['dangky']) && ($_POST['dangky'] != "")) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email    = $_POST['email'];
                $address  = $_POST['address'];
                $phone    = $_POST['phone'];
                if (empty($username)) {
                    $error['user'] = '!';
                }
                if (empty($password)) {
                    $error['pass'] = '!';
                }
                if (empty($email)) {
                    $error['email'] = '!';
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // filter_var đi cùng với những hàm validate có sẵn trong php
                    $error['email'] = 'Email không đúng định dạng';
                }
                if (empty($address)) {
                    $error['address'] = '!';
                }
                $regex_phone = '/^0\d{9}$/';
                if (empty($phone)) {
                    $error['phone'] = '!';
                } else if (!preg_match($regex_phone, $phone)) { // preg_match đi kèm với regex (không kiểm tra bằng các hàm có sẵn)
                    $error['phone'] = "Số điện thoại không hợp lệ";
                }
                if (!$error) {
                    insert_user($username, $password, $email, $address, $phone);
                    $thongbao = "<script language='javascript'>alert('Đăng kí tài khoản thành công')
                        window.location='index.php?act=dangnhap';</script>";
                }
            }
            include "../views/dangky.php";
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $taikhoan = dangnhap($username, $password);
                //    var_dump($taikhoan);
                //    die;
                if (is_array($taikhoan)) {
                    $_SESSION['username'] = $taikhoan;
                    // chuyen huong trang chu hoac admin
                    if ($taikhoan['role'] == 1) {
                        header("location:admin/index_admin.php");
                    } else {
                        header("location:index.php");
                    }
                } else {
                    $thongbao = "<script>alert('Username hoặc password không chính xác! Vui lòng kiểm tra lại.')</script>";
                }
            }
            include "../views/dangnhap.php";
            break;
        case "spchitiet":
            if (isset($_POST['guibinhluan'])) {
                if (isset($_SESSION['username'])) {
                    $thongtin = $_SESSION['username'];
                    extract($thongtin);
                    insert_cmt($_POST['id_sp'], $_POST['noidung'], $id_user);
                } else {
                    echo "<script>alert('Bạn phải đăng nhập trước')</script>";
                }
            }
            if (isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $sanpham = loadone_sanpham($_GET['id_sp']);
                $sanphamcl = load_sanpham_cungloai($_GET['id_sp'], $sanpham['id_danhmuc']);
                $comment = loadall_comment($_GET['id_sp']);
                include "../views/spchitiet.php";
            } else {
                include "../views/home.php";
            }
            break;
        case "dangxuat":
            dangxuat();
            include "../views/home.php";
            break;
        case "addtocart":

            // lấy dl từ form thêm vào giỏ hàng
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                if (isset($_SESSION['username'])) $id_user = $_SESSION['username']['id_user'];
                $id_sp = $_POST['id_sp'];
                $name = $_POST['name'];
                $hinh = $_POST['hinh'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                $size=$_POST['size'];
                $l = 0;
                // nếu thêm sản phầm giống nhau thì tăng số lượng
                for ($k = 0; $k < sizeof($_SESSION['giohang']); $k++) {
                    if ($_SESSION['giohang'][$k][2] == $name ) {
                        $l = 1;
                        $soluongmoi = $soluong + $_SESSION['giohang'][$k][5];
                        $_SESSION['giohang'][$k][5] = $soluongmoi;
                        header('location:index.php?act=giohang');
                        break;
                    }
                }
                if ($l == 0) {
                    $spcart = array($id_user, $id_sp, $name, $hinh, $price, $soluong,$size);
                    $_SESSION['giohang'][] = $spcart;
                    header('location:index.php?act=giohang');
                }
            }
            break;

        case "delcart":
            if (isset($_GET['i']) && ($_GET['i'] > 0)) {
                if (count($_SESSION['giohang']) > 1) {
                    array_splice($_SESSION['giohang'], $_GET['i'], 1);
                    header('location:index.php?act=giohang');
                } else {
                    unset($_SESSION['giohang']);
                    header('location:index.php');
                }
            } else {
                if (isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                header('location:index.php');
            }
            break;
        case "giohang":
            include "../views/giohang.php";
            break;
        case "thanhtoan":
            if (isset($_SESSION['username'])) {
                if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {

                    // Kiểm tra phương thức thanh toán
                    if (isset($_POST['pttt'])) {
                        $pttt = $_POST['pttt'];

                        // Lấy dữ liệu từ form
                        $name_receiver = $_POST['name_receiver'];
                        $email_receiver = $_POST['email_receiver'];
                        $phone_receiver = $_POST['phone_receiver'];
                        $address_receiver = $_POST['address_receiver'];
                        $tongdonhang = $_POST['tongdonhang'];
                        $madh = "LVT" . rand(0, 999999);

                        // Tạo đơn hàng
                        $id_donhang = taodonhang($id_user, $tongdonhang, $name_receiver, $email_receiver, $phone_receiver, $address_receiver, $pttt, $madh);

                        if (isset($_SESSION['giohang']) && (count($_SESSION['giohang'])) > 0) {
                            foreach ($_SESSION['giohang'] as $spcart) {
                                itemcart($id_donhang, $madh, $spcart[1], $spcart[5]);
                            }
                        }
                        unset($_SESSION['giohang']);


                        // Hiển thị thông báo
                        $thongbao = "<script>alert('Đặt hàng thành công, vui lòng đợi xác nhận đơn hàng!')</script>";

                        // Xóa thông tin thanh toán khỏi biến `$_SESSION`

                    } else {
                        // Biến `pttt` không tồn tại
                        echo "<script>alert('Vui lòng chọn phương thức thanh toán!')</script>";
                    }

                    // include "../controllers/index.php";
                }
            } else {
                echo "<script>alert('Vui lòng đăng nhập tài khoản để đặt hàng!')</script>";
            }

            include "../views/thanhtoan.php";
            break;

        case "lsmuahang":
            if (isset($_SESSION['username'])) {

                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $role = $_POST['role'];
                    cancel_order($id, $role);
                }

                $listdh = loadall_donhang($id_user);

                include "../views/lsmuahang.php";
            } else {

                include "../views/lsmuahang.php";
            }
            break;
        case "info":
            if (isset($_GET["id"]) && ($_GET["id"]) > 0) {
                $account = loadone_taikhoan($_GET["id"]);
            }
            include "../views/info.php";
            break;
        case "uptt":
            include "../views/upthongtin.php";
            break;
        case "upthongtin":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];

                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                update_info($id, $email, $address, $phone);
                $thong_bao = "Cập nhật tài khoản thành công";
            }
            // $account = loadone_taikhoan($_GET["id_user"]);
            include "../views/info.php";
            break;
        case "xemchitiet":
            $id_donhang = $_GET["id_donhang"];
            $dh = loadall_cart($_GET['id_donhang']);
            include "../views/chitietdonhang.php";


            // include "../views/chitietdonhang.php";
            break;
        case "goadmin":
            include "admin/index_admin.php";
            break;
    }
} else {
    include "../views/home.php";
}
include "../views/footer.php";
