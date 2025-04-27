-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2025 lúc 08:52 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandothucong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `thumbnail`) VALUES
(1, 'Cốc', '../img/menu_Mugs.jpg'),
(2, 'Chậu', '../img/menu_Pots.jpg'),
(3, 'Đĩa', '../img/menu_Plates.jpg'),
(4, 'Trang Trí', '../img/menu_Decor.jpg'),
(5, 'Bát', '../img/menu_Bowls.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_management`
--

CREATE TABLE `order_management` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ordered_date` datetime NOT NULL,
  `status` enum('Đang chờ xử lý','Đã chấp thuận','Bị từ chối','Đang tiến hành','Đã hoàn thành') NOT NULL DEFAULT 'Đang chờ xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_image_2` varchar(255) DEFAULT NULL,
  `product_image_3` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`, `sale_price`, `product_image`, `product_image_2`, `product_image_3`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cốc Đỏ', 120000, 1000, 'uploads/products/1744911192_68013b5828352.jpg', 'uploads/products/1744911192_68013b5828495.jpg', 'uploads/products/1744911192_68013b5828580.jpg', 'Cốc', '2025-04-17 19:33:12', '2025-04-17 19:33:12'),
(2, 1, 'Cocktail Cup', 200000, 20000, 'uploads/products/1744912101_68013ee565145.jpg', 'uploads/products/1744912101_68013ee565286.jpg', 'uploads/products/1744912101_68013ee565408.jpg', 'Cốc được làm từ đá Thanh Hoa\r\n', '2025-04-17 19:48:21', '2025-04-17 19:48:58'),
(3, 2, 'Black Windows Pot', 200000, 120000, 'uploads/products/1744913436_6801441c80b23.jpg', 'uploads/products/1744913436_6801441c80cd8.jpg', 'uploads/products/1744913436_6801441c80e41.jpg', 'Chậu hoa văn caro vô cùng độc đáo', '2025-04-17 20:10:36', '2025-04-17 20:10:36'),
(4, 3, '21cm Side Plate', 120000, 20000, 'uploads/products/1744914519_680148576fc80.jpg', 'uploads/products/1744913889_680145e1984a4.jpg', 'uploads/products/1744913889_680145e198621.jpg', 'Đĩa đất sét', '2025-04-17 20:18:09', '2025-04-17 20:28:39'),
(5, 5, ' Chén Nước Chấm', 129000, 100000, 'uploads/products/1744914071_6801469720629.jpg', 'uploads/products/1744914071_6801469720805.jpg', 'uploads/products/1744914071_680146972094d.jpg', 'Trang trí', '2025-04-17 20:21:11', '2025-04-27 14:47:28'),
(7, 1, 'Cốc Americano', 400000, 400000, 'uploads/products/1745758836_680e2a74e21d0.jpg', 'uploads/products/1745758836_680e2a74e2397.jpg', 'uploads/products/1745758836_680e2a74e3d24.jpg', 'Làm thủ công từ gốm cao cấp, Cốc Americano mang đến trải nghiệm tuyệt vời với thiết kế thanh lịch và lớp men mượt mà. Một lựa chọn hoàn hảo cho không gian và thưởng thức cà phê.', '2025-04-27 15:00:36', '2025-04-27 15:02:03'),
(8, 1, 'Cốc Gốm Đá', 200000, 150000, 'uploads/products/1745759245_680e2c0d489c2.jpg', 'uploads/products/1745759245_680e2c0d490c2.jpg', 'uploads/products/1745759245_680e2c0d495fb.jpg', 'Làm từ gốm đá cao cấp, Cốc Gốm Đá có thiết kế đơn giản, chắc chắn và giữ nhiệt tốt. Lý tưởng cho việc sử dụng hàng ngày và trang trí không gian sống.\r\n\r\n', '2025-04-27 15:07:25', '2025-04-27 15:07:25'),
(9, 2, 'Chậu Tadla', 80000, 79000, 'uploads/products/1745759400_680e2ca877939.jpg', 'uploads/products/1745759400_680e2ca877c5e.jpg', 'uploads/products/1745759400_680e2ca877edd.jpg', 'Làm từ gốm cao cấp, Chậu Tadla có thiết kế đơn giản, hiện đại, phù hợp để trồng cây hoặc làm vật trang trí cho không gian sống.\r\n\r\n', '2025-04-27 15:10:00', '2025-04-27 15:10:00'),
(10, 4, 'Bộ 3 Gạch Trang Trí', 350000, 320000, 'uploads/products/1745759612_680e2d7c6b56a.jpg', 'uploads/products/1745759612_680e2d7c6b8b0.jpg', 'uploads/products/1745759612_680e2d7c6bb11.jpg', 'Mỗi viên gạch trong bộ sản phẩm này được chế tác thủ công tỉ mỉ, với thiết kế độc đáo, mang đến sự sang trọng và phong cách riêng biệt cho không gian sống của bạn.', '2025-04-27 15:13:32', '2025-04-27 15:13:32'),
(11, 2, 'Chậu Cây Gốm Caterpillar', 180000, 180000, 'uploads/products/1745760326_680e30464280a.jpg', 'uploads/products/1745760326_680e304643027.jpg', 'uploads/products/1745760326_680e30464409e.jpg', 'Với thiết kế lấy cảm hứng từ hình dáng chú sâu, Chậu Cây Gốm Caterpillar mang lại vẻ đẹp tinh tế và thú vị, hoàn hảo để trang trí không gian và tạo điểm nhấn cho những cây cảnh yêu thích.', '2025-04-27 15:25:26', '2025-04-27 15:25:26'),
(12, 2, 'Chậu Cây Gốm Màu Trắng Lốm Đốm', 400000, 219000, 'uploads/products/1745760420_680e30a45734d.jpg', 'uploads/products/1745760420_680e30a4575e5.jpg', 'uploads/products/1745760420_680e30a4577c8.jpg', 'Chậu Cây Gốm Màu Trắng Lốm Đốm mang đến vẻ đẹp tinh tế với lớp men trắng kết hợp các đốm màu tự nhiên, tạo điểm nhấn nổi bật cho không gian và những chậu cây yêu thích.', '2025-04-27 15:27:00', '2025-04-27 15:27:00'),
(13, 3, 'Đĩa Salad Vuông', 220000, 200000, 'uploads/products/1745760613_680e3165b67a2.jpg', 'uploads/products/1745760613_680e3165b6f1a.jpg', 'uploads/products/1745760613_680e3165b776d.jpg', 'Đĩa Salad Vuông với thiết kế vuông vức đơn giản, mang lại vẻ đẹp thanh lịch và hiện đại, lý tưởng cho bữa ăn nhẹ và làm điểm nhấn cho bàn ăn của bạn.', '2025-04-27 15:30:13', '2025-04-27 15:30:13'),
(14, 3, 'Đĩa Ăn Tối', 300000, 120000, 'uploads/products/1745760721_680e31d1005c6.jpg', 'uploads/products/1745760721_680e31d100b13.jpg', 'uploads/products/1745760721_680e31d10130e.jpg', 'Đĩa Ăn với thiết kế tinh tế và đường nét rõ ràng, hoàn hảo cho các bữa ăn chính và tạo nên sự trang nhã cho bàn ăn của bạn.', '2025-04-27 15:32:01', '2025-04-27 15:32:01'),
(15, 3, 'Đĩa Phục Vụ', 250000, 120000, 'uploads/products/1745761249_680e33e184300.jpg', 'uploads/products/1745761249_680e33e184ae1.jpg', 'uploads/products/1745761249_680e33e185132.jpg', 'Đĩa Phục Vụ với thiết kế rộng rãi và đơn giản, lý tưởng để trình bày các món ăn cho bữa tiệc hoặc gia đình, mang đến vẻ đẹp tinh tế cho bàn ăn.', '2025-04-27 15:40:49', '2025-04-27 15:40:49'),
(16, 4, 'Đèn Treo Gốm Licht', 4255000, 4200000, 'uploads/products/1745761571_680e352324a37.jpg', 'uploads/products/1745761571_680e352324e66.jpg', 'uploads/products/1745761571_680e352325160.jpg', 'Đèn Treo Gốm Licht với thiết kế đơn giản và trang nhã, mang lại ánh sáng ấm áp và tạo không gian sống thêm phần sang trọng và ấm cúng.\r\n\r\n', '2025-04-27 15:46:11', '2025-04-27 15:46:11'),
(17, 4, 'Kệ Đỡ Nến San Hô Ba Ngọn', 1280000, 1000000, 'uploads/products/1745761698_680e35a250b12.jpg', 'uploads/products/1745761698_680e35a251205.jpg', 'uploads/products/1745761698_680e35a2518a4.jpg', 'Với thiết san hô kế tinh tế, mang đến ánh sáng ấm áp và tạo điểm nhấn sang trọng cho không gian sống của bạn.\r\n\r\n', '2025-04-27 15:48:18', '2025-04-27 15:48:18'),
(18, 4, 'Kệ Giấy Ăn Gốm', 350000, 300000, 'uploads/products/1745761799_680e360765199.jpg', 'uploads/products/1745761799_680e36076549b.jpg', 'uploads/products/1745761799_680e360765665.jpg', 'Kệ Giấy Ăn Gốm với thiết kế đơn giản, nhẹ nhàng, giúp sắp xếp giấy ăn gọn gàng và mang lại vẻ đẹp tự nhiên cho không gian bếp của bạn.\r\n\r\n', '2025-04-27 15:49:59', '2025-04-27 15:49:59'),
(19, 5, 'Bát Caramel', 120000, 80000, 'uploads/products/1745761866_680e364ae5990.jpg', 'uploads/products/1745761866_680e364ae5f28.jpg', 'uploads/products/1745761866_680e364ae654a.jpg', 'Bát Caramel với màu sắc ấm áp, thiết kế tinh tế, lý tưởng cho các món tráng miệng hoặc trang trí bàn ăn thêm phần nổi bật.\r\n\r\n', '2025-04-27 15:51:06', '2025-04-27 15:51:06'),
(20, 5, 'Bát Dawn', 800000, 700000, 'uploads/products/1745761938_680e3692d5ee6.jpg', 'uploads/products/1745761938_680e3692d65f5.jpg', 'uploads/products/1745761938_680e3692d6cdc.jpg', 'Bát Dawn với màu sắc nhẹ nhàng, thiết kế đơn giản, hoàn hảo cho bữa ăn sáng hoặc trang trí bàn ăn thêm phần ấm cúng.', '2025-04-27 15:52:18', '2025-04-27 15:52:18'),
(21, 5, 'Bát Kẻ Sọc', 220000, 220000, 'uploads/products/1745762004_680e36d40ab7a.jpg', 'uploads/products/1745762004_680e36d40afab.jpg', 'uploads/products/1745762004_680e36d40b2f9.jpg', 'Bát Kẻ Sọc với thiết kế sọc tinh tế, mang đến vẻ đẹp năng động và đầy phong cách cho mọi bữa ăn và không gian.', '2025-04-27 15:53:24', '2025-04-27 15:53:24'),
(22, 1, 'Cốc Taffy', 600000, 600000, 'uploads/products/1745762092_680e372c14811.jpg', 'uploads/products/1745762092_680e372c14b15.jpg', 'uploads/products/1745762092_680e372c14db9.jpg', 'Cốc Taffy với thiết kế nhẹ nhàng và màu sắc tươi sáng, mang lại cảm giác thoải mái và dễ chịu khi thưởng thức đồ uống yêu thích.', '2025-04-27 15:54:52', '2025-04-27 15:54:52'),
(23, 1, 'Cốc Gốm Wave', 420000, 400000, 'uploads/products/1745762154_680e376a7f71d.jpg', 'uploads/products/1745762154_680e376a7f9c2.jpg', '', 'Cốc Gốm Wave với thiết kế sóng nhẹ nhàng, mang lại vẻ đẹp độc đáo và cảm giác thoải mái khi thưởng thức đồ uống yêu thích.', '2025-04-27 15:55:54', '2025-04-27 15:55:54'),
(24, 3, 'Đĩa Đá Slate M', 710000, 680000, 'uploads/products/1745762238_680e37be80dd7.jpg', 'uploads/products/1745762238_680e37be80fa6.jpg', 'uploads/products/1745762238_680e37be81169.jpg', 'Đĩa Đá Slate M với chất liệu đá tự nhiên, thiết kế đơn giản nhưng tinh tế, lý tưởng để trình bày món ăn hoặc làm điểm nhấn cho bàn tiệc.', '2025-04-27 15:57:18', '2025-04-27 15:57:18'),
(25, 5, 'Bát Gạo', 240000, 140000, 'uploads/products/1745762394_680e385aa4462.jpg', 'uploads/products/1745762394_680e385aa5f24.jpg', 'uploads/products/1745762394_680e385aa666d.jpg', 'Bát Gạo với họa tiết tinh xảo mô phỏng hình dạng hạt gạo, mang đến vẻ đẹp độc đáo và sang trọng cho không gian bữa ăn, tạo cảm giác gần gũi và ấm cúng.', '2025-04-27 15:59:54', '2025-04-27 15:59:54'),
(26, 4, 'Kệ Đỡ Hương Gốm', 280000, 280000, 'uploads/products/1745762537_680e38e90f53a.jpg', 'uploads/products/1745762537_680e38e90f757.jpg', 'uploads/products/1745762537_680e38e90f934.jpg', 'Kệ Đỡ Hương Gốm với thiết kế đơn giản nhưng đầy nghệ thuật, là vật trang trí lý tưởng để giữ cho không gian của bạn luôn thơm mát và thư giãn.\r\n\r\n', '2025-04-27 16:02:17', '2025-04-27 16:02:17'),
(27, 2, 'Chậu Pieces and Parts', 200000, 189000, 'uploads/products/1745762614_680e39365ef59.jpg', 'uploads/products/1745762614_680e39365f5e2.jpg', 'uploads/products/1745762614_680e39365fa26.jpg', 'Chậu Pieces and Parts với thiết kế đặc biệt, kết hợp các phần khác biệt tạo nên một vẻ đẹp thú vị và phá cách, hoàn hảo để làm điểm nhấn cho không gian sống của bạn.', '2025-04-27 16:03:34', '2025-04-27 16:03:34');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(0, 'user'),
(1, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user_name`, `full_name`, `email`, `phone_number`, `address`, `password`, `role_id`) VALUES
(1, 'admin', 'Administrator', 'adminwebsite@gmail.com', '+84 12345678', 'Viet Nam', '25d55ad283aa400af464c76d713c07ad', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `order_management`
--
ALTER TABLE `order_management`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_management`
--
ALTER TABLE `order_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_management` (`id`);

--
-- Các ràng buộc cho bảng `order_management`
--
ALTER TABLE `order_management`
  ADD CONSTRAINT `order_management_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
