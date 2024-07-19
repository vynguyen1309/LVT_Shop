<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LVT SHOP</title>
    <link rel="stylesheet" href="../views/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .log a:hover {
            color: red;
            font-size: 18px;
            transition: 0.5s;

        }
    </style>
</head>


<body>

    <div class="header">
        <div class="container">
            <?php
            if (isset($_SESSION['username']) && $_SESSION['username'] != "") {

                extract($_SESSION['username']);
          
                   
                

                echo '<li class="user"><a href="#">' . $username . '</a> | <a href="index.php?act=dangxuat"> <input class="logout" type="submit" name="dangxuat" value="Đăng xuất"></a></li>';
            } else {
            ?>
                <div class="log" style="float:right; padding:10px;"><a href="index.php?act=dangky">Đăng ký </a>| <a href="index.php?act=dangnhap"> Đăng nhập</a> </div>

            <?php } ?>

            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="../views/images/logo_main.png" width="125px"></a>
                </div>

                <nav>

                    <ul id="MenuItems">
                        <li><a href="../controllers/index.php">TRANG CHỦ</a></li>
                        <li><a href="index.php?act=sanpham">SẢN PHẨM</a></li>
                        <li><a href="index.php?act=info">TÀI KHOẢN</a></li>

                        <!-- <li><a href="lsmuahang.html">LỊCH SỬ MUA HÀNG</a></li> -->
                        <li><a href="index.php?act=lsmuahang">LỊCH SỬ MUA HÀNG</a></li>

                    </ul>
                </nav>
                <a href="index.php?act=giohang"><img src="../views/images/cart.png" width="30px" height="30px"></a>

                <img src="../views/images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="search-container">

                <form action="index.php?act=timkiem" method="POST" id="search">
                    <input type="search" name="keyw" placeholder="Tìm kiếm sản phẩm..."><button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Chào mừng bạn đến với<br> LVT SHOP</h1>
                    <p><i>Chúc bạn có những giây phút tuyệt vời khi đến với LVT SHOP</i> </p>
                    <a href="index.php?act=sanpham" class="btn">SHOP NOW &#8594;</a>

                </div>
                <div class="col-2">
                    <img id="slide_show" src="../views/images/vans.png" style="width:412px;height: 332px;">
                </div>

            </div>
        </div>
    </div>
    <!-- <script src="../views/js/main.js"></script> -->