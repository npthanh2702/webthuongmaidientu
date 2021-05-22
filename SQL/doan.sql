-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 08:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `idcustomer` int(11) NOT NULL,
  `namecustomer` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `datecustomer` date NOT NULL,
  `addresscustomer` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `emailcustomer` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phonecustomer` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gendercustomer` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `deletecustomer` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`idcustomer`, `namecustomer`, `datecustomer`, `addresscustomer`, `emailcustomer`, `phonecustomer`, `gendercustomer`, `deletecustomer`) VALUES
(1239, 'thanh', '2020-12-02', ' NINK KIEU can tho', 'lht.koko@gmail.com', '0937330364', 'Male', 1),
(1240, 'nguyen phuoc thanh', '2020-12-02', ' NINK KIEU can tho', 'npthanh2702@gmail.com', '0937330364', 'male', 0),
(1241, 'thanh', '2000-02-27', 'thanh', 'npthanh2702@gmail.com', '0937330364', 'female', 0),
(1242, 'thanh', '2000-02-27', 'thanh', 'npthanh2702@gmail.com', '0937330364', 'female', 0),
(1243, 'thanhphuoc', '2000-02-27', 'cantho', 'npthanh2702@gmail.com', '0937330364', 'male', 0),
(1244, 'thanhphuoc', '2000-02-27', 'cantho', 'npthanh2702@gmail.com', '0937330364', 'male', 1),
(1245, 'nguyen phuoc thanh', '2000-02-07', 'cantho', 'npthanh2702@gmail.com', '0937330364', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desinvoice`
--

CREATE TABLE `tbl_desinvoice` (
  `idcustomer` int(11) NOT NULL,
  `dateorder` date NOT NULL,
  `addressdelivery` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `idvoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `idemployee` int(11) NOT NULL,
  `nameemployee` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dateemployee` date NOT NULL,
  `addressemployee` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `emailemployee` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phoneemployee` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `genderemployee` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `deleteemployee` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`idemployee`, `nameemployee`, `dateemployee`, `addressemployee`, `emailemployee`, `phoneemployee`, `genderemployee`, `deleteemployee`) VALUES
(123, 'thu', '2000-02-27', 'vinh long', 'npthanh2702@gmail.com', '0937330364', 'Male', 0),
(124, '0', '2021-01-06', 'hugiyftdr', 'npthanh2702@gmail.com', '0937330364', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `idfeedback` int(11) NOT NULL,
  `namefeedback` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `emailfeedback` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `subfeedback` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `messagefeedback` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`idfeedback`, `namefeedback`, `emailfeedback`, `subfeedback`, `messagefeedback`) VALUES
(6, 'thanh', 'npthanh2702@gmail.com', 'bao cao', 'bao cao');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `idvoice` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `priceproduct` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `idemployee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `idlogin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`idlogin`, `username`, `password`) VALUES
(1, 'thanh', '123'),
(6, 'admin', '123456'),
(7, 'admin', '123456'),
(8, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `idproduct` int(11) NOT NULL,
  `product_url` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_description` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_image_1` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_image_2` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_image_3` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`idproduct`, `product_url`, `product_name`, `product_description`, `product_price`, `product_image_1`, `product_image_2`, `product_image_3`) VALUES
(1, 'SANPHAM1', 'TRÀ OOLONG', 'Trà Ô Long có nguồn gốc từ Phúc Kiến-Trung Quốc, được du nhập sang Đài Loan và phát triển cực thịnh tại đây trước khi giống cây trồng này chính thức được đưa về Việt Nam, trồng thành công ở vùng đất Lâm Đồng và một số tỉnh miền núi phía Bắc.', 10, '../IMG/1.png', '../IMG/1.png', '../IMG/1.png'),
(2, 'sanpham2', 'TRÀ MƠ', 'Nếu không được bảo quản đúng cách, các loại trà sẽ dễ bị hư hỏng, màu sắc lá trà thay đổi, biến vị và trà có thể bị nấm mốc. Vậy những yếu tố nào ảnh hưởng đến quá trình bảo quản trà? Đó là ánh sáng, nhiệt độ, độ ẩm, oxy, vi sinh vật, ô nhiễm mùi.', 25, '../IMG/2.png', '../IMG/2.png', '../IMG/2.png'),
(3, 'SANPHAM3', 'TRÀ TRẮNG', 'Trà trắng có chứa EGCG – hợp chất có khả năng đốt cháy chất béo tương tự với trà xanh. Thành phần này cũng làm giảm thiểu các tế bào mỡ adipogenesis góp phần giúp giảm cân. Ngoài ra, còn làm tăng cường tốc độ trao đổi chất trong cơ thể lên đến 4-5%. Điều này tương đương với việc cơ thể đốt cháy thêm', 150, '../IMG/3.png', '../IMG/3.png', '../IMG/3.png'),
(4, 'SANPHAM4', 'TRÀ ĐEN', 'Trà đen được biết đến như một thức uống giải khát mang lại nhiều lợi ích cho sức khỏe. Vậy trà đen là gì? tác dụng của chúng ra sao, bạn có thể tham khảo bài viết dưới đây của chúng tôi.', 95, '../IMG/4.png', '../IMG/4.png', '../IMG/4.png'),
(5, 'combo1', 'GÓI TRÀ AN NHIÊN', 'Combo hũ trà thảo mộc tự chọn chắc chắn sẽ là món quà tặng ý nghĩa mà bạn dành cho những người mình yêu mến. Với combo trà hoa, bạn có thể tự lựa chọn loại trà mình yêu thích, tiết kiệm chi phí, bảo vệ môi trường đồng thời thỏa sức sáng tạo với các loại hương vị trà.', 250, '../IMG/5.png', '../IMG/5.png', '../IMG/5.png'),
(6, 'combo2', 'GÓI TRÀ AN LẠC', 'Combo hũ trà thảo mộc tự chọn chắc chắn sẽ là món quà tặng ý nghĩa mà bạn dành cho những người mình yêu mến. Với combo trà hoa, bạn có thể tự lựa chọn loại trà mình yêu thích, tiết kiệm chi phí, bảo vệ môi trường đồng thời thỏa sức sáng tạo với các loại hương vị trà.', 290, '../IMG/6.png', '../IMG/6.png', '../IMG/6.png'),
(7, 'combo3', 'GÓI TRÀ ĐỒ ÁN 1', 'Combo hũ trà thảo mộc tự chọn chắc chắn sẽ là món quà tặng ý nghĩa mà bạn dành cho những người mình yêu mến. Với combo trà hoa, bạn có thể tự lựa chọn loại trà mình yêu thích, tiết kiệm chi phí, bảo vệ môi trường đồng thời thỏa sức sáng tạo với các loại hương vị trà. Công dụng sau những đêm dài thức', 10, '../IMG/7.png', '../IMG/7.png', '../IMG/7.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `tbl_desinvoice`
--
ALTER TABLE `tbl_desinvoice`
  ADD PRIMARY KEY (`idvoice`,`idproduct`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`idemployee`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`idfeedback`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`idvoice`),
  ADD KEY `idcustomer` (`idcustomer`),
  ADD KEY `idemployee` (`idemployee`),
  ADD KEY `idproduct` (`idproduct`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`idproduct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1246;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `idemployee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `idfeedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_desinvoice`
--
ALTER TABLE `tbl_desinvoice`
  ADD CONSTRAINT `idvoice` FOREIGN KEY (`idvoice`) REFERENCES `tbl_invoice` (`idvoice`);

--
-- Constraints for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD CONSTRAINT `idcustomer` FOREIGN KEY (`idcustomer`) REFERENCES `tbl_customer` (`idcustomer`),
  ADD CONSTRAINT `idemployee` FOREIGN KEY (`idemployee`) REFERENCES `tbl_employee` (`idemployee`),
  ADD CONSTRAINT `idproduct` FOREIGN KEY (`idproduct`) REFERENCES `tbl_product` (`idproduct`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
