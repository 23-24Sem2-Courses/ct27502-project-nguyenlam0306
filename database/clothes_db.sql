-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2024 lúc 02:01 AM
-- Phiên bản máy phục vụ: 8.0.36
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clothes_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `status` int DEFAULT '0',
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL,
  `description` text,
  `price` decimal(10,0) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `color`, `size`, `description`, `price`, `image_path`) VALUES
(7, 'Áo dài form suông', 'Áo dài', 'Đỏ rượu', 'M', '', 150000, '/img/uploads/dai2_2024-04-13_05-01-11.jpg'),
(8, 'Áo dài raplan tay áo', 'Áo dài', 'Đỏ đô', 'L', 'Kho: 10 cái', 140000, '/img/uploads/dai3_2024-04-13_05-03-54.jpg'),
(9, 'Áo dài cổ truyền', 'Áo dài', 'Đỏ', '<60kg', 'Kho: 15 cái', 160000, '/img/uploads/dai4_2024-04-13_05-05-31.jpg'),
(10, 'Áo dài nhung tay lửng', 'Áo dài', 'Đỏ nhung', 'M', '', 130000, '/img/uploads/dai5_2024-04-13_05-07-41.jpg'),
(11, 'Áo dài nhiều tầng', 'Áo dài', 'Trắng hồng voan', 'L', 'Kho: 16 cái', 170000, '/img/uploads/dai7_2024-04-13_05-09-42.jpg'),
(12, 'Áo dài xuân', 'Áo dài', 'Hồng đất', 'M', 'Kho: 10 cái', 130000, '/img/uploads/dai9_2024-04-13_05-11-55.jpg'),
(13, 'Áo dài form suông', 'Áo dài', 'Xanh mạ', 'M (<56kg)', 'Kho: 10 cái', 130000, '/img/uploads/dai15_2024-04-13_05-12-54.jpg'),
(14, 'Áo dài xanh hoạ tiết ', 'Áo dài', 'Xanh biếc', 'M (<56kg)', 'Kho: 10 cái', 170000, '/img/uploads/dai17_2024-04-13_05-14-31.jpg'),
(15, 'Áo dài xanh truyền thống', 'Áo dài', 'Xanh đậm', 'M', 'Kho: 5 cái (Kèm khăn)', 120000, '/img/uploads/dai16_2024-04-13_05-15-41.jpg'),
(16, 'Áo dài hoạ tiết hoa nhí', 'Áo dài', 'Đỏ cam đào', 'M (<56kg)', 'Kho: 10 cái', 150000, '/img/uploads/dai12_2024-04-13_05-16-48.jpg'),
(17, 'Áo dài xanh lá pastel', 'Áo dài', 'Xanh pastel', 'M (<56kg)', 'Kho: 10 cái', 150000, '/img/uploads/dai18_2024-04-13_05-17-57.jpg'),
(18, 'Áo dài kaki xanh coban', 'Áo dài', 'Xanh coban', 'M (<56kg)', 'Kho: 10 cái (Kèm dây chuyền)', 160000, '/img/uploads/dai11_2024-04-13_05-20-17.jpg'),
(19, 'Trang phục cosplay Batman', 'Cosplay', 'Tổng hợp', '<70kg', 'Kho: 10 cái', 200000, '/img/uploads/cos1_2024-04-13_05-23-14.jpg'),
(20, 'Cosplay Amber', 'Cosplay', 'Tone đỏ', 'M (<56kg)', '', 200000, '/img/uploads/cos2_2024-04-13_05-45-52.jpg'),
(21, 'Cosplay nữ hiệp ', 'Cosplay', 'Tone xanh', 'M (<56kg)', 'Kho: 2 bộ', 250000, '/img/uploads/cos3_2024-04-13_05-26-23.jpg'),
(22, 'Cosplay Hinamori Amu', 'Cosplay', 'Tone đỏ', 'M (<56kg)', 'Kho: 3 bộ', 200000, '/img/uploads/cos4_2024-04-13_05-31-13.jpg'),
(23, 'Cosplay Genshin', 'Cosplay', 'Tone xanh', 'M (<56kg)', 'Kho: 5 bộ', 250000, '/img/uploads/cos5_2024-04-13_05-34-03.jpg'),
(24, 'Coslay Yuiki Yaya', 'Cosplay', 'Tone đỏ', 'M (<56kg)', 'Kho: 5 bộ', 250000, '/img/uploads/cos6_2024-04-13_05-35-03.jpg'),
(25, 'Cosplay Wolverine ', 'Cosplay', 'Vàng', '<70kg', 'Kho: 2 bộ', 200000, '/img/uploads/cos7_2024-04-13_05-36-21.jpg'),
(26, 'Cosplay Flash Gorden', 'Cosplay', 'Đỏ', '<70kg', 'Kho: 5 bộ', 200000, '/img/uploads/cos8_2024-04-13_05-38-04.jpg'),
(27, 'Cosplay Raiden Shogun', 'Cosplay', 'Tone tím', 'M', 'Kho: 3 bộ', 250000, '/img/uploads/cos9_2024-04-13_05-39-46.jpg'),
(28, 'Cosplay Ultra Man', 'Cosplay', 'Đỏ trắng', '<70kg', 'Kho: 1 bộ', 200000, '/img/uploads/cos10_2024-04-13_05-41-31.jpg'),
(29, 'Cosplay Yanfei', 'Cosplay', 'Tone đỏ', 'M (<56kg)', 'Kho: 1 bộ', 200000, '/img/uploads/cos11_2024-04-13_05-42-56.jpg'),
(30, 'Cosplay Collei', 'Cosplay', 'Tone tím', 'M (<56kg)', 'Kho: 5 bộ', 250000, '/img/uploads/cos12_2024-04-13_05-44-32.jpg'),
(31, 'Đầm Baby Angel', 'Dress', 'Hồng trắng', 'M (<56kg)', 'Kho: 2 cái', 200000, '/img/uploads/dress1_2024-04-13_05-47-55.jpg'),
(32, 'Đầm dạ hội lệch vai', 'Dress', 'Trắng', 'M (<56kg)', 'Kho: 2 cái', 200000, '/img/uploads/dress2_2024-04-13_09-52-58.jpg'),
(33, 'Đầm dạ hội phối voan trắng', 'Dress', 'Đen phi ', 'M (<56kg)', 'Kho: 3 cái', 200000, '/img/uploads/dress3_2024-04-13_05-49-39.jpg'),
(34, 'Đầm lọ lem', 'Dress', 'Tone xanh', 'M (<56kg)', 'Kho: 3 cái', 250000, '/img/uploads/dress4_2024-04-13_09-53-38.jpg'),
(35, 'Đầm dạ hội', 'Dress', 'Đen', 'M (<56kg)', 'Kho: 1 cái', 150000, '/img/uploads/dress5_2024-04-13_05-51-04.jpg'),
(36, 'Đầm dự prom ', 'Dress', 'Xanh Navy', 'M (<56kg)', 'Kho: 5 cái', 200000, '/img/uploads/dress6_2024-04-13_05-51-43.jpg'),
(37, 'Đầm đi tiệc ', 'Dress', 'Đen lông vũ', 'M (<56kg)', 'Kho: 2 cái', 200000, '/img/uploads/dress7_2024-04-13_05-52-21.jpg'),
(38, 'Đầm dự tiệc xanh chảnh', 'Dress', 'Xanh lá mạ', 'M (<56kg)', 'Kho: 2 cái', 250000, '/img/uploads/dress8_2024-04-13_05-54-00.jpg'),
(39, 'Đầm đi Prom', 'Dress', 'Xanh đậm', 'M (<56kg)', 'Kho: 2 cái', 200000, '/img/uploads/dress9_2024-04-13_05-54-50.jpg'),
(40, 'Đầm dự tiệc xẻ tà', 'Dress', 'Đỏ nhung', 'M (<56kg)', 'Kho: 3 cái', 200000, '/img/uploads/dress10_2024-04-13_05-55-30.jpg'),
(41, 'Đầm công chúa huyền bí', 'Dress', 'Đen trắng', 'M (<56kg)', 'Kho: 2 cái', 200000, '/img/uploads/dress11_2024-04-13_05-56-33.jpg'),
(42, 'Đầm dự prom', 'Dress', 'Xanh ombre', 'M (<56kg)', 'Kho: 1 cái', 200000, '/img/uploads/dress12_2024-04-13_05-57-25.jpg'),
(43, 'Đầm quý cô sang chảnh', 'Dress', 'Tone đỏ', 'M (<56kg)', 'Kho: 2 cái', 200000, '/img/uploads/dress13_2024-04-13_05-58-11.jpg'),
(44, 'Đầm công chúa mơ mộng', 'Dress', 'Hồng nhẹ', 'M (<56kg)', 'Kho: 2 cái', 200000, '/img/uploads/dress14_2024-04-13_05-59-00.jpg'),
(45, 'Đầm dự prom ', 'Dress', 'Xanh tím', 'M (<56kg)', 'Kho: 2 cái', 250000, '/img/uploads/dress18_2024-04-13_05-59-38.jpg'),
(46, 'Vest nam', 'Vest', 'Tone trắng', 'M (<56kg)', 'Kho: 2 bộ', 300000, '/img/uploads/suit20_2024-04-13_06-01-23.jpg'),
(47, 'Vest nam trắng đỏ', 'Vest', 'Trắng đỏ', 'M (<56kg)', 'Kho: 2 bộ', 200000, '/img/uploads/suit5_2024-04-13_06-02-23.jpg'),
(48, 'Vest nam đen đỏ', 'Vest', 'Đen', '<70kg', 'Kho: 2 cái', 200000, '/img/uploads/suit18_2024-04-13_06-05-04.jpg'),
(49, 'Vest nam xám', 'Vest', 'Xám', '<70kg', 'Kho: 2 bộ', 250000, '/img/uploads/suit11_2024-04-13_06-05-50.jpg'),
(50, 'Vest hồng nam', 'Vest', 'Hồng', '<70kg', 'Kho: 2 cái', 180000, '/img/uploads/suit2_2024-04-13_06-06-58.jpg'),
(51, 'Vest ruốc đậm nam', 'Vest', 'Ruốc đậm', '<70kg', 'Kho: 2 cái', 250000, '/img/uploads/suit12_2024-04-13_09-55-58.jpg'),
(52, 'Vest nữ xanh lá', 'Vest', 'Xanh mint', '<60kg', 'Kho: 2 bộ', 200000, '/img/uploads/sui10_2024-04-13_09-57-06.jpg'),
(53, 'Vest nữ xanh rêu', 'Vest', 'Xanh rêu', '<60kg', 'Kho: 3 bộ', 180000, '/img/uploads/suit8_2024-04-13_10-09-47.jpg'),
(54, 'Vest nữ xám xi măng', 'Vest', 'Xám xi măng', 'M (<56kg)', 'Kho: 3 bộ', 250000, '/img/uploads/suit13_2024-04-13_10-11-56.jpg'),
(55, 'Vest nữ xanh mạ', 'Dress', 'Xanh mạ', 'M (<56kg)', 'Kho: 2 bộ', 200000, '/img/uploads/suit14_2024-04-13_10-13-21.jpg'),
(56, 'Vest nữ nude', 'Vest', 'Màu nude', 'M (<56kg)', 'Kho: 2 bộ', 200000, '/img/uploads/suit17_2024-04-13_10-14-43.jpg'),
(57, 'Vest nữ hồng pastel', 'Vest', 'Hồng nhạt', 'M', 'Kho: 5 bộ', 180000, '/img/uploads/suit22_2024-04-13_10-18-27.jpg'),
(58, 'Vest nữ xanh Navy', 'Vest', 'Xanh Navy', 'M (<56kg)', 'Kho: 2 bộ', 200000, '/img/uploads/suit23_2024-04-13_10-20-52.jpg'),
(59, 'Quần tây trắng', 'Trousers', 'Trắng', '<70kg', 'Kho: 5 cái', 100000, '/img/uploads/trouser9_2024-04-13_10-25-23.jpg'),
(60, 'Quần tây xám', 'Trousers', 'Nâu xám', '<70kg', 'Kho: 3 cái', 100000, '/img/uploads/trouser5_2024-04-13_10-27-07.jpg'),
(61, 'Quần tây xanh lưng cao', 'Trousers', 'Xám xanh', '<70kg', 'Kho: 4 cái', 120000, '/img/uploads/trouser4_2024-04-13_10-28-41.jpg'),
(62, 'Quần tây kem', 'Trousers', 'Trắng sọc', '<70kg', 'Kho: 3 cái', 90000, '/img/uploads/trouser6_2024-04-13_10-34-38.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `notes` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `phone`, `password_hash`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'john_doe', 'John Doe', '123456789', 'password_hash_123', 'Some notes about John Doe', '2024-03-30 14:46:00', '2024-03-30 14:46:00'),
(2, 'jane_smith', 'Jane Smith', '987654321', 'password_hash_456', 'Some notes about Jane Smith', '2024-03-30 14:46:00', '2024-03-30 14:46:00'),
(3, 'admin', 'Thảo Duy', '0938107918', '$2y$10$0t.254Z5swSKMGoCE.GI1ekDKbs7eg1wTUHNBT7Fvxks.WnsRnYyy', NULL, '2024-04-08 14:31:20', '2024-04-08 14:31:20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
