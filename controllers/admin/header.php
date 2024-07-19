<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../../views/css/admin.css">
    <link rel="stylesheet" href="../../views/css/acccount.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


</head>

<body>
   
    <div class="row mb headeradmin">
        <h1>Dashboard</h1>
        <h2>LVT - SHOP</h2>
    </div>
    <div class="boxcenter">
        <div class="row mb menu">
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="index_admin.php?act=listdm">Quản lí danh mục</a></li>
                <li><a href="index_admin.php?act=listsp">Quản lí hàng hóa</a></li>
                <li><a href="index_admin.php?act=dstk">Quản lí khách hàng</a></li>
                <li><a href="index_admin.php?act=dsbl">Quản lí bình luận</a></li>
                <li><a href="index_admin.php?act=ds_donhang">Quản lí đơn hàng</a></li>
                <div class="w3-dropdown-hover">
                    <button class="w3-button">Thống kê <i class="fa fa-caret-down"></i></button>
                    <div class="w3-dropdown-content w3-bar-block">
                        <a href="index_admin.php?act=thongke" class="w3-bar-item w3-button">Danh mục</a>
                        <a href="index_admin.php?act=doanh_thu" class="w3-bar-item w3-button">Doanh thu</a>
                    </div>
                </div>

            </ul>
        </div>