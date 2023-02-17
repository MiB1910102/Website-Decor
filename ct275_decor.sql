-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2022 lúc 05:06 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct275_decor`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'B1910304', 123456, 1),
(2, 'B1910102', 123456, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_user_cart` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status_cart` tinyint(10) DEFAULT NULL,
  `list_product_cart` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`list_product_cart`)),
  `address_user_cart` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `email_user_cart`, `status_cart`, `list_product_cart`, `address_user_cart`) VALUES
('abc@gmail.com01510513112022', 'abc@gmail.com', 1, '[{\"namesp\":\"Cu00e2y giu1ea3 1\",\"idsp\":\"DCP001\",\"soluong\":1,\"giasp\":\"100000\",\"hinhanhsp\":\"P001.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 2\",\"idsp\":\"DCP002\",\"soluong\":1,\"giasp\":\"120000\",\"hinhanhsp\":\"P002.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 3\",\"idsp\":\"DCP003\",\"soluong\":1,\"giasp\":\"130000\",\"hinhanhsp\":\"P003.jpg\"}]', '3/2, Ninh Kiều,Cần Thơ'),
('abc@gmail.com01514213112022', 'abc@gmail.com', 1, '[{\"namesp\":\"Cu00e2y giu1ea3 1\",\"idsp\":\"DCP001\",\"soluong\":1,\"giasp\":\"100000\",\"hinhanhsp\":\"P001.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 2\",\"idsp\":\"DCP002\",\"soluong\":1,\"giasp\":\"120000\",\"hinhanhsp\":\"P002.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 3\",\"idsp\":\"DCP003\",\"soluong\":1,\"giasp\":\"130000\",\"hinhanhsp\":\"P003.jpg\"}]', '3/2, Ninh Kiều,Cần Thơ'),
('abc@gmail.com01594813112022', 'abc@gmail.com', 1, '[{\"namesp\":\"Cu00e2y giu1ea3 1\",\"idsp\":\"DCP001\",\"soluong\":1,\"giasp\":\"100000\",\"hinhanhsp\":\"P001.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 2\",\"idsp\":\"DCP002\",\"soluong\":1,\"giasp\":\"120000\",\"hinhanhsp\":\"P002.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 3\",\"idsp\":\"DCP003\",\"soluong\":1,\"giasp\":\"130000\",\"hinhanhsp\":\"P003.jpg\"}]', '3/2, Ninh Kiều,Cần Thơ'),
('abc@gmail.com02004113112022', 'abc@gmail.com', 1, '[{\"namesp\":\"Cu00e2y giu1ea3 1\",\"idsp\":\"DCP001\",\"soluong\":1,\"giasp\":\"100000\",\"hinhanhsp\":\"P001.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 2\",\"idsp\":\"DCP002\",\"soluong\":1,\"giasp\":\"120000\",\"hinhanhsp\":\"P002.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 3\",\"idsp\":\"DCP003\",\"soluong\":1,\"giasp\":\"130000\",\"hinhanhsp\":\"P003.jpg\"}]', '3/2, Ninh Kiều,Cần Thơ'),
('abc@gmail.com02035513112022', 'abc@gmail.com', 1, '[{\"namesp\":\"Cu00e2y giu1ea3 1\",\"idsp\":\"DCP001\",\"soluong\":1,\"giasp\":\"100000\",\"hinhanhsp\":\"P001.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 2\",\"idsp\":\"DCP002\",\"soluong\":1,\"giasp\":\"120000\",\"hinhanhsp\":\"P002.jpg\"},{\"namesp\":\"Cu00e2y giu1ea3 3\",\"idsp\":\"DCP003\",\"soluong\":1,\"giasp\":\"130000\",\"hinhanhsp\":\"P003.jpg\"}]', '3/2, Ninh Kiều,Cần Thơ'),
('abc@gmail.com04225413112022', 'abc@gmail.com', 1, '[{\"namesp\":\"Tu01b0u1ee3ng 3\",\"idsp\":\"DCP011\",\"soluong\":1,\"giasp\":\"253232\",\"hinhanhsp\":\"P011.jpg\"},{\"namesp\":\"Tu01b0u1ee3ng 5\",\"idsp\":\"DCP025\",\"soluong\":1,\"giasp\":\"555555\",\"hinhanhsp\":\"P023.jpg\"}]', 'Hưng Lợi, Ninh Kiều,Cần Thơ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_category` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name_category`) VALUES
('DC001', 'Cây giả Decor'),
('DC002', 'Gương Decor'),
('DC003', 'Đèn Decor'),
('DC004', 'Tranh Decor'),
('DC005', 'Tượng Decor');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `name_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass_user` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_user` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`name_user`, `pass_user`, `email_user`, `phone_user`) VALUES
('B1910304', 'e10adc3949ba59abbe56e057f20f883e', 'abc@gmail.com', '0837878999'),
('B1910102', 'e10adc3949ba59abbe56e057f20f883e', 'def@gmail.com', '0837878111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_product` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_product` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sl_product` int(11) DEFAULT NULL,
  `hinhanh_product` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung_product` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinhtrang_product` tinyint(4) DEFAULT NULL,
  `id_category` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `name_product`, `gia_product`, `sl_product`, `hinhanh_product`, `noidung_product`, `tinhtrang_product`, `id_category`) VALUES
('DCP001', 'Cây giả 1', '100000', 100, 'P001.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC001'),
('DCP002', 'Cây giả 2', '120000', 15, 'P002.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC001'),
('DCP003', 'Cây giả 3', '130000', 52, 'P003.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC001'),
('DCP004', 'Cây giả 4', '444236', 88, 'P004.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC001'),
('DCP005', 'Gương 1', '100000', 12, 'P005.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC002'),
('DCP006', 'Gương 2', '125000', 14, 'P006.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC002'),
('DCP007', 'Gương 3', '152000', 14, 'P007.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC002'),
('DCP008', 'Gương 4', '451000', 25, 'P008.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC002'),
('DCP009', 'Tượng 1', '141000', 13, 'P009.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC005'),
('DCP010', 'Tượng 2', '253125', 58, 'P010.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC005'),
('DCP011', 'Tượng 3', '253232', 6, 'P011.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC005'),
('DCP012', 'Tượng 4', '456231', 52, 'P012.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC005'),
('DCP013', 'Tranh 1', '142523', 15, 'P013.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC004'),
('DCP014', 'Tranh 2', '258633', 69, 'P014.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC004'),
('DCP015', 'Tranh 3', '456321', 78, 'P015.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC004'),
('DCP016', 'Tranh 4', '444444', 45, 'P016.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC004'),
('DCP017', 'Đèn 1', '562314', 11, 'P017.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC003'),
('DCP018', 'Đèn 2', '142563', 96, 'P018.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, ''),
('DCP019', 'Đèn 3', '152369', 74, 'P019.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC003'),
('DCP020', 'Đèn 4', '456214', 78, 'P020.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC003'),
('DCP021', 'Cây giả 5', '114521', 11, 'P025.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC001'),
('DCP022', 'Gương 5', '452145', 44, 'P024.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC002'),
('DCP023', 'Đèn 5', '111444', 44, 'P021.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC003'),
('DCP024', 'Tranh 5', '444444', 44, 'P022.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC004'),
('DCP025', 'Tượng 5', '555555', 45, 'P023.jpg', 'Cây cảnh (hoặc cây kiểng) là một số loại thực vật được chăm sóc, gieo trồng và tạo dáng công phu, thường dùng làm vật trang trí hay một chi tiết trong thuật phong thủy.\r\n\r\n                Cây cảnh được bài trí có khi nhằm thể hiện một ý tưởng của người trồng qua cách xếp đặt mà vẫn giữ được vẻ tự nhiên của lá. Thân cây được uốn theo một hình dáng nào đó, còn gọi là thế, kết hợp với chậu, đất hay nước là môi trường dinh dưỡng cho thực vật ấy.\r\n\r\n                Bên cạnh mục tiêu làm cảnh (vì lẽ này cây cảnh đã được tuyên lên thành nghệ thuật như ở Nhật Bản có bon-sai) cây cảnh còn là một loại hàng hóa được kinh doanh không theo một khung giá cố định nào mà phần nhiều tùy hứng của người bán và người mua hoặc tùy tâm của người bán.', 1, 'DC005');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`email_user`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
