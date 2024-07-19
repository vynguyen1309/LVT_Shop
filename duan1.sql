-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2023 at 06:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int NOT NULL,
  `noidung` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `id_sp` int NOT NULL,
  `ngay_cmt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cmt`, `noidung`, `id_user`, `id_sp`, `ngay_cmt`) VALUES
(34, '', 2, 1, '2023-11-29'),
(35, '123', 2, 1, '2023-11-29'),
(36, 'qahasd', 3, 1, '2023-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `name`) VALUES
(1, 'VANS CLASSIC'),
(2, 'VANS SLIP-ON'),
(3, 'VANS OLD SKOOL'),
(4, 'VANS AUTHENTIC'),
(5, 'VANS ERA');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int NOT NULL,
  `id_user` int NOT NULL DEFAULT '0',
  `tongdonhang` double(10,0) NOT NULL DEFAULT '0',
  `name_receiver` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email_receiver` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_receiver` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `address_receiver` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '0 chưa xác nhận, 1 đã xác nhận',
  `phuongthuc_thanhtoan` int NOT NULL DEFAULT '1',
  `madh` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ngaydathang` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_user`, `tongdonhang`, `name_receiver`, `email_receiver`, `phone_receiver`, `address_receiver`, `status`, `phuongthuc_thanhtoan`, `madh`, `ngaydathang`) VALUES
(35, 2, 11250000, 'user2', 'user1234567@gmail.com', '123456788', 'TPHCM', 1, 1, 'LVT716872', '2023-11-29 00:00:00'),
(37, 2, 1550000, 'user2', 'user1234567@gmail.com', '123456788', 'TPHCM', 1, 1, 'LVT807422', '2023-11-29 00:00:00'),
(38, 2, 6490000, 'user2', 'user1234567@gmail.com', '123456788', 'TPHCM', 1, 1, 'LVT613097', '2023-11-29 00:00:00'),
(39, 2, 3440000, 'vỹ', 'user1234567@gmail.com', '123456788', 'TPHCM', 1, 1, 'LVT983391', '2023-11-30 00:00:00'),
(40, 8, 4050000, 'vynguyen', 'vytestweb@gmail.com', '987654321', 'Ha Noi', 1, 1, 'LVT788958', '2023-11-30 00:00:00'),
(41, 3, 10850000, 'vỹ', 'vytestweb@gmail.com', '123456789', 'Ha Noi', 1, 1, 'LVT85138', '2023-12-02 00:00:00'),
(42, 2, 140000, 'user2', 'user1234567@gmail.com', '123456788', 'TPHCM', 1, 1, 'LVT228645', '2023-12-13 23:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id_dhct` int NOT NULL,
  `madh` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_sp` int NOT NULL,
  `soluong` int NOT NULL,
  `id_donhang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id_dhct`, `madh`, `id_sp`, `soluong`, `id_donhang`) VALUES
(2, 'LVT716872', 3, 1, 35),
(3, 'LVT716872', 15, 4, 35),
(4, 'LVT807422', 1, 1, 37),
(5, 'LVT613097', 1, 1, 38),
(6, 'LVT613097', 3, 1, 38),
(7, 'LVT613097', 4, 1, 38),
(8, 'LVT613097', 5, 1, 38),
(9, 'LVT983391', 3, 1, 39),
(10, 'LVT983391', 4, 1, 39),
(11, 'LVT788958', 3, 1, 40),
(12, 'LVT788958', 15, 1, 40),
(13, 'LVT85138', 1, 1, 41),
(14, 'LVT85138', 1, 1, 41),
(15, 'LVT85138', 1, 5, 41),
(16, 'LVT228645', 20, 7, 42);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` double(10,0) NOT NULL,
  `image` text COLLATE utf8mb4_general_ci NOT NULL,
  `mota` text COLLATE utf8mb4_general_ci NOT NULL,
  `luotxem` int NOT NULL DEFAULT '0',
  `id_danhmuc` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `name`, `price`, `image`, `mota`, `luotxem`, `id_danhmuc`, `status`) VALUES
(20, 'VANS AUTHENTIC CLASSIC BLACK/WHITE', 1550000, 'sp1.jpg', 'VANS CLASSIC AUTHENTIC BLACK/WHITE Là phiên bản được ưa chuộng nhất trong bộ sưu tập Authentic của VANS với sự kết hợp 2 màu đen trắng dễ phối đồ và custom, đặc biệt là phiên bản cổ nhất có tuổi đời hơn 50 năm, dù vậy vẫn được fan hâm mộ săn đón và được sử dụng khá nhiều với những vận động viên trượt ván chuyên nghiệp. VANS CLASSIC AUTHENTIC BLACK/WHITE được đánh giá là một siêu phẩm cần có khi bạn quyết định sẽ trở thành một tín đồ của nhà VANS đấy!', 10, 4, 1),
(22, 'VANS OLD SKOOL CLASSIC BLACK/WHITE', 1650000, 'sp3.jpg', 'VANS OLD SKOOL CLASSIC BLACK/WHITE Được gọi vui một cách\r\nthân thuộc là \\\"giày VANS đen\\\" vốn là một sự phổ biến rất đặc biệt đối với các tín đồ của nhà VANS. Tới nay đôi giày\r\nchỉ với phối màu đen trắng này vẫn nằm trong top \\\"Best Seller\\\" của VANS trên toàn thế giới, với kiểu dáng cổ điển cùng\r\n\\\"sọc Jazz\\\" huyền thoại hợp thời trang khiến đôi VANS này thật sự trở thành mẫu giày classic bất bại, là fan hâm mộ của\r\nVANS nói chung và những skaters nói riêng đều nên có một đôi trong tủ giày.', 9, 3, 1),
(23, 'VANS CLASSIC SLIP-ON BLACK/WHITE', 1650000, 'sp3.jpg', 'Phiên bản VANS Slip-on Black White là một trong những phiên\r\nbản cháy hàng nhất trong bộ sưu tập VANS CLASSIC SLIP-ON chỉ sau checkerboard và true white, dành cho những bạn bận bịu\r\nkhông thích thắt dây giày, phối màu đơn giản dễ phối đồ cùng với chất liệu dễ custom khiến đôi giày trở thành một trong\r\nnhững sự lựa chọn hàng đầu.', 10, 2, 1),
(24, 'VANS ERA CLASSIC BLACK', 1790000, 'sp4.jpg', 'VANS ERA được thiết kế với các chi tiết từ vải cho đến đường chỉ may\r\nhoàn toàn khác biệt so với phong cách đường phố đặc trưng của những đôi giày VANS trước đây. VANS ERA CLASSIC BLACK là\r\nmột sản phẩm đặc trưng cho chính ý đồ thiết kế của VANS-OFF THE WALL khi quyết định đưa VANS ERA lên thị trường của\r\nmình. Màu đen huyền bí cùng sự cá tính mang lại bởi VANS ERA sẽ giúp cho khách hàng của VANS dễ dàng bộc lộ được cái tôi\r\ncá nhân cũng như khẳng định được cá tính của chính mình. ', 10, 5, 1),
(25, 'VANS CLASSIC SK8-HI BLACK/WHITE', 1500000, 'sp5.jpg', 'Phiên bản VANS Classic Sk8 Black/White là một trong style\r\nkinh điển của VANS và đã mang lại lợi nhuận khổng lồ cho hãng khi luôn nằm trong mục Best Seller của VANS. Tông màu đen\r\nđơn giản dễ phối đồ cùng cổ cao kinh điển sẽ là sản phẩm tuyệt vời cho các fan yêu thời trang.', 10, 1, 1),
(26, 'VANS CANVAS OLD SKOOL CLASSIC TRUE WHITE', 1650000, 'sp6.jpg', 'Vans Old Skool True White với Upper hoàn toàn\r\nlà vải canvas - chất liệu dễ vẽ khiến cho các tín đồ Custom rất ưa chuộng và là sự lựa chọn hàng đầu khi họ thi triển\r\ntài nghệ. Đồng thời khi đôi giày đã quá cũ chính bạn cũng có thể tự sáng tạo hoặc bỏ chút tiền ra để Custom theo sở\r\nthích của mình.', 10, 3, 1),
(27, 'VANS SLIP-ON CLASSIC TRUE WHITE', 1650000, 'sp7.jpg', 'VANS CLASSIC SLIP-ON TRUE WHITE Là phiên bản trắng tinh True\r\nWhite nằm trong mục Best Seller của VANS và nằm trong bộ 3 True White mang lại lợi nhuận khổng lồ cho hãng. Được các họa\r\nsĩ Custom lựa chọn để cho ra những tác phẩm độc đáo vì chất liệu vải bố, đồng thời toàn đôi giày đều có thể vẽ lên bất\r\ncứ đâu.', 10, 2, 1),
(28, 'VANS ERA CLASSIC BLACK', 1790000, 'sp8.jpg', 'VANS ERA được thiết kế với các chi tiết từ vải cho đến đường chỉ may\r\nhoàn toàn khác biệt so với phong cách đường phố đặc trưng của những đôi giày VANS trước đây. VANS ERA CLASSIC BLACK là\r\nmột sản phẩm đặc trưng cho chính ý đồ thiết kế của VANS-OFF THE WALL khi quyết định đưa VANS ERA lên thị trường của\r\nmình. Màu đen huyền bí cùng sự cá tính mang lại bởi VANS ERA sẽ giúp cho khách hàng của VANS dễ dàng bộc lộ được cái tôi\r\ncá nhân cũng như khẳng định được cá tính của chính mình.', 7, 5, 1),
(29, 'VANS AUTHENTIC CLASSIC BLACK/BLACK', 1500000, 'sp9.jpg', 'Nay VANS CLASSIC AUTHENTIC BLACK/BLACK xuất hiện lần đầu\r\ntrong kiểu dáng VANS AUTHENTIC đặc biệt đẹp đẽ và tinh tế đến lạ thường. Sắc đen dễ dàng kết hợp và phù hợp với hầu hết\r\ntất cả những outfit dù là phong cách gì đi chăng nữa. Cũng vẫn là sự chất lượng đến từ chất liệu và từng đường chỉ mà\r\nVANS đã mang lại từ trước đến nay, VANS CLASSIC AUTHENTIC BLACK/BLACK sẽ là một sản phẩm khiến cho những người sở hữu nó\r\ntự hào một cách đặc biệt.', 8, 1, 1),
(30, 'VANS CLASSIC AUTHENTIC TRUE WHITE', 2150000, 'sp10.jpg', 'Với màu trắng cơ bản, cùng với sự tỉ mỉ trong khâu sản\r\nxuất, chất liệu đạt chất lượng tốt nhất, VANS CLASSIC AUTHENTIC TRUE WHITE nổi bật từ chính những gì cơ bản và tối giản\r\nnhất của một đôi giày thể thao. Đồng thời với chất liệt Canvas cũng là chất liệu tuyệt vời cho những ai đam mê Custom\r\nsáng tạo.', 8, 4, 1),
(31, 'VANS OLD SKOOL MULE CLASSIC BLACK/WHITE', 1650000, 'sp11.jpg', 'VANS OLD SKOOL MULE CLASSIC BLACK/WHITE Được gọi vui một cách\r\nthân thuộc là \"giày VANS đen\" vốn là một sự phổ biến rất đặc biệt đối với các tín đồ của nhà VANS. Tới nay đôi giày\r\nchỉ với phối màu đen trắng này vẫn nằm trong top \"Best Seller\" của VANS trên toàn thế giới, với kiểu dáng cổ điển cùng\r\n\"sọc Jazz\" huyền thoại hợp thời trang khiến đôi VANS này thật sự trở thành mẫu giày classic bất bại, là fan hâm mộ của\r\nVANS nói chung và những skaters nói riêng đều nên có một đôi trong tủ giày.', 9, 3, 1),
(32, 'VANS DIY SK8-HI TAPERED BLACK/TRUE WHITE', 1890000, 'sp12.jpg', 'Giữ nguyên cho mình màu sắc cũng như kiểu dáng\r\nVANS SK8-Hi vốn đã làm nên tên tuổi của nhà VANS. VANS DIY SK8-HI TAPERED BLACK/TRUE WHITE vẫn mang bên mình một nét rất\r\nriêng mà chỉ có nó mới có. Tuy nhiên đôi với VANS DIY SK8-HI TAPERED BLACK/TRUE WHITE thuộc BST DIY, VANS muốn làm nó\r\ntrở nên thật đặc biệt.', 9, 1, 1),
(33, 'VANS SK8-HI CLASSIC TRUE WHITE', 1650000, 'sp13.jpg', 'Màu sắc của VANS CLASSIC SK8-HI TRUE WHITE là một phần không thể không nhắc đến khi toàn bộ đôi giày được mặc một màu áo trắng, một lần nữa VANS đánh mạnh vào sự đơn giản, nhưng đơn giản một cách khó cưỡng như VANS CLASSIC SK8-HI TRUE WHITE thì khó có sản phẩm nào bì kịp. Tin chắc rằng, VANS CLASSIC SK8-HI TRUE WHITE sẽ là một sản phẩm đủ sức làm cho trang phục của khách hàng dù là phong cách gì cũng trở nên sành điệu và phóng khoáng như cách VANS xây dựng thương hiệu của mình.', 9, 1, 1),
(34, 'VANS SLIP-ON CLASSIC ECO THEORY CHECKERBOARD', 1790000, 'sp14.jpg', 'Phiên bản VANS Slip-on là một trong những phiên bản cháy hàng nhất trong bộ sưu tập VANS CLASSIC SLIP-ON dành cho những bạn bận bịu không thích thắt dây giày, phối màu đơn giản dễ phối đồ cùng với chất liệu dễ custom khiến đôi giày trở thành một trong những sự lựa chọn hàng đầu. ', 9, 2, 1),
(35, 'VANS KNU SKOOL BLACK/TRUE WHITE', 2400000, 'sp15.jpg', 'Trong vũ trụ thời trang đa dạng và phong phú, Vans Knu Skool không chỉ đơn thuần là một sản phẩm, mà còn là một tác phẩm nghệ thuật đầy bất ngờ. Đôi giày này đã nhanh chóng ghi dấu ấn mạnh mẽ với sự sáng tạo tuyệt vời và sự kết hợp hoàn hảo giữa phong cách và tiện nghi. Với sắc đen huyền bí tạo nên sự lôi cuốn và viền trắng tinh tế, đôi giày này chắc chắn sẽ là điểm nhấn hoàn hảo cho bất kỳ bộ trang phục nào, đem đến sự tinh tế và sự phá cách cho mọi phong cách thời trang.', 6, 3, 1),
(36, 'VANS ERA PACKING TAPE BLACK', 1800000, 'sp16.jpg', 'VANS ERA PACKING TAPE BLACK là một sản phẩm ra mắt theo bộ sưu tập. Bộ sưu tập \"PACKING TAPE\" nổi tiếng bởi các kiểu dáng khác nhau trong đó có VANS ERA PACKING TAPE. \"PACKING TAPE\" ra đời bởi ý tưởng độc đáo khi các dòng logo nhãn hiệu \"VANS-OFF THE WALL\" xếp chồng lên nhau, vừa tạo được điểm mới lạ, vừa nâng cao được slogan của cá nhân VANS. Những dòng chữ được cách điệu, đậm nhạt khác nhau, tuy nhiên vẫn nổi bật trên nền đen xám, chính là một họa tiết đặc biệt biến bộ sưu tập này trở nên độc nhất và hứa hẹn trở thành một xu hướng mởi nhất trên toàn thế giới.', 8, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanphamchitiet`
--

CREATE TABLE `sanphamchitiet` (
  `id_sanphambt` int NOT NULL,
  `id_sp` int NOT NULL,
  `id_size` int NOT NULL,
  `soluong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanphamchitiet`
--

INSERT INTO `sanphamchitiet` (`id_sanphambt`, `id_sp`, `id_size`, `soluong`) VALUES
(3, 1, 1, 1),
(4, 2, 2, 1),
(5, 3, 2, 1),
(6, 4, 1, 1),
(7, 5, 2, 1),
(8, 6, 1, 1),
(9, 7, 2, 1),
(10, 8, 1, 1),
(11, 10, 2, 1),
(12, 11, 2, 1),
(13, 12, 1, 1),
(14, 13, 2, 1),
(15, 14, 1, 1),
(16, 15, 1, 1),
(17, 16, 2, 1),
(18, 9, 2, 1),
(19, 16, 1, 1),
(20, 16, 2, 1),
(21, 16, 1, 1),
(25, 16, 2, 6),
(26, 35, 1, 5),
(27, 35, 2, 2),
(28, 34, 1, 1),
(29, 33, 2, 1),
(30, 32, 2, 1),
(31, 31, 2, 1),
(32, 30, 2, 1),
(33, 29, 2, 1),
(34, 28, 2, 1),
(35, 27, 2, 1),
(36, 26, 2, 1),
(37, 20, 2, 1),
(38, 22, 2, 1),
(39, 23, 2, 1),
(40, 24, 2, 1),
(41, 25, 2, 1),
(42, 36, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` int NOT NULL,
  `size` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `size`) VALUES
(1, 40),
(2, 42);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int NOT NULL,
  `name_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `name_status`) VALUES
(1, 'Đang bán'),
(2, 'Đã xóa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `address`, `phone`, `role`) VALUES
(2, 'user2', '1234567', 'user1234567@gmail.com', 'TPHCM', 123456788, 0),
(3, 'vy', '1234', 'vytestweb@gmail.com', 'Ha Noi', 123456789, 0),
(6, 'admin', 'admin', 'vytestweb@gmail.com', 'Ha Noi', 123456789, 1),
(8, 'vynguyen', '1234567', 'vytestweb@gmail.com', 'Ha Noi', 123456789, 1),
(9, 'vy1', '123456', 'vynguyenreview1309@gmail.com', 'Ha Noi', 123456789, 0),
(13, 'vy3', '123456', 'hdvb@gmail.com', 'Ha Noi', 123456789, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `id_user` (`id_user`,`id_sp`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`) USING BTREE;

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id_dhct`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `sanphamchitiet`
--
ALTER TABLE `sanphamchitiet`
  ADD PRIMARY KEY (`id_sanphambt`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id_dhct` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sanphamchitiet`
--
ALTER TABLE `sanphamchitiet`
  MODIFY `id_sanphambt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`id_status`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
