-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 07:49 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoppet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_09_26_100546_create_tbl_admin_table', 2),
(4, '2021_09_27_100258_create_tbl_category_product', 3),
(5, '2021_09_28_075124_create_tbl__brand__product', 4),
(6, '2021_09_28_080852_create_tbl__brand__product', 5),
(7, '2019_06_19_155204_create_tbl_product', 6),
(8, '2021_10_02_144126_create_sliders_table', 7),
(9, '2021_10_19_060358_tbl_customer', 8),
(10, '2021_10_22_011059_tbl_shipping', 9),
(11, '2021_11_02_064843_tbl_payment', 10),
(12, '2021_11_02_064948_tbl_order', 10),
(13, '2021_11_02_065408_tbl_order_detail', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_used_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_name`, `slider_image`, `status`) VALUES
(7, '213', 'royal-canin-poodle-12x85g-145.jpg', 0),
(8, '123213', 'royal-canin-instinctive-jelly60.jpg', 0),
(9, '123213', 'royal-canin-british-shorthair-897.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tum ', '03772273674', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand_product`
--

CREATE TABLE `tbl_brand_product` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand_product`
--

INSERT INTO `tbl_brand_product` (`brand_id`, `brand_name`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(2, 'Reflex', 'Thương hiệu 4', 0, NULL, NULL),
(3, 'Royal Canin', 'Thương hiệu 3', 0, NULL, NULL),
(4, 'ANF', 'Thương hiệu 2', 0, NULL, NULL),
(5, 'Nutrisource', 'Thương hiệu 1', 0, NULL, NULL),
(6, 'Dog Mania', '123', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(4, 'Đồ ăn cho mèo trường thành', 'Danh mục 4', '0', NULL, NULL),
(5, 'Đồ ăn cho mèo con', 'Danh mục 3', '0', NULL, NULL),
(6, 'Đồ ăn cho chó trưởng thành', 'Danh mục 2', '0', NULL, NULL),
(7, 'Đồ ăn cho chó con', 'Danh mục 1', '0', NULL, NULL),
(8, '3312321', '<p>ewq</p>', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phan_loai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_phone`, `phan_loai`, `created_at`, `updated_at`) VALUES
(1, 'tủm', 'tum@gmail.com', '123', '0123', 0, NULL, NULL),
(4, 'tủm323', 'tum@213gmail.com', '321', '123', 0, NULL, NULL),
(5, 'heo1', '11rerqwrqw@gmail.com', '123', '2156465465', 2, NULL, NULL),
(6, '43243242', 'tum@212233gmail.com', '123456', '0112244878', 0, NULL, NULL),
(7, 'hân', 'baohan@gmail.com', '123', '011122333', 0, NULL, NULL),
(9, 'tèo', 'teo@gmail.com', '123', '12233232', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_time` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`, `order_time`) VALUES
(12, 1, 12, 19, '1349000', 'Đang chờ xử lý', NULL, NULL, ''),
(13, 1, 13, 20, '1349000', 'Đang chờ xử lý', NULL, NULL, ''),
(14, 1, 14, 21, '1314000', 'Xử lý thành công', NULL, NULL, ''),
(15, 1, 15, 22, '52380000', 'Đang chờ xử lý', NULL, NULL, ''),
(18, 1, 17, 25, '150000', 'Xử lý thành công', NULL, NULL, '2021/11/0605:10:57pm'),
(19, 1, 18, 26, '135000', 'Xử lý thành công', NULL, NULL, 'November 06, 2021 05:13:14'),
(20, 1, 19, 27, '155000', 'Xử lý thành công', NULL, NULL, '11/07/2021 12:18:27 am'),
(21, 1, 20, 28, '25000', 'Xử lý thành công', NULL, NULL, '11/22/2021 08:21:02 pm'),
(22, 1, 21, 29, '739278', 'Đang chờ xử lý', NULL, NULL, '11/22/2021 11:38:08 pm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(5, 4, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(6, 4, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(7, 4, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(8, 5, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(9, 5, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(10, 5, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(11, 6, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(12, 6, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(13, 6, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(14, 7, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(15, 7, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(16, 7, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(17, 8, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(18, 8, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(19, 8, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(20, 9, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(21, 9, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(22, 9, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(23, 10, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(24, 10, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(25, 10, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(26, 11, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(27, 11, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(28, 11, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 3, NULL, NULL),
(29, 12, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 1, NULL, NULL),
(30, 13, 32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', '1349000', 1, NULL, NULL),
(31, 14, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 1, NULL, NULL),
(32, 14, 28, 'Thức Ăn Cho Chó Con Dog Mania 1.5kg – Giảm Còi, Tăng Cân – Hàn Quốc', '150000', 1, NULL, NULL),
(33, 15, 31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', '1164000', 45, NULL, NULL),
(34, 17, 23, 'Pate Cho Chó Trưởng Thành Royal Canin Poodle (85g)', '36000', 1, NULL, NULL),
(35, 18, 28, 'Thức Ăn Cho Chó Con Dog Mania 1.5kg – Giảm Còi, Tăng Cân – Hàn Quốc', '150000', 1, NULL, NULL),
(36, 19, 8, 'Thức Ăn Cho Mèo Trưởng Thành Cao Cấp Reflex Plus 1.5kg – Thổ Nhĩ Kỳ', '135000', 1, NULL, NULL),
(37, 20, 13, 'Thức Ăn Cho Mèo Con Reflex 2kg – Giá Rẻ – Vị Gà – Thổ Nhĩ Kỳ', '155000', 1, NULL, NULL),
(38, 21, 34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', '25000', 1, NULL, NULL),
(39, 22, 38, '12312312', '123213', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(11, '2', 'Đang chờ xử lý', NULL, NULL),
(12, '2', 'Đang chờ xử lý', NULL, NULL),
(13, '2', 'Đang chờ xử lý', NULL, NULL),
(14, '2', 'Đang chờ xử lý', NULL, NULL),
(15, '2', 'Đang chờ xử lý', NULL, NULL),
(16, '2', 'Đang chờ xử lý', NULL, NULL),
(17, '2', 'Đang chờ xử lý', NULL, NULL),
(18, '2', 'Đang chờ xử lý', NULL, NULL),
(19, '2', 'Đang chờ xử lý', NULL, NULL),
(20, '2', 'Đang chờ xử lý', NULL, NULL),
(21, '1', 'Đang chờ xử lý', NULL, NULL),
(22, '1', 'Đang chờ xử lý', NULL, NULL),
(23, '1', 'Đang chờ xử lý', NULL, NULL),
(24, '1', 'Đang chờ xử lý', NULL, NULL),
(25, '3', 'Đang chờ xử lý', NULL, NULL),
(26, '3', 'Đang chờ xử lý', NULL, NULL),
(27, '3', 'Đang chờ xử lý', NULL, NULL),
(28, '1', 'Đang chờ xử lý', NULL, NULL),
(29, '2', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quality` int(11) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `brand_id`, `product_desc`, `product_quality`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(5, 'Thức Ăn Cho Mèo Trưởng Thành Reflex 2kg – Giá Rẻ – Vị Gà – Thổ Nhĩ Kỳ', 4, 2, '- Mèo trưởng thành cần nguồn dinh dưỡng ít hơn mèo con nhưng lại phải luôn ổn định để duy trì sinh hoạt hằng ngày của chúng.\r\n- Vì thế khi mèo trên 12 tháng tuổi, bạn cũng cần phải duy trì thức ăn hạt cho chúng vì hạt khô sở hữu nhiều loại dinh dưỡng giúp cung cấp năng lượng cho cơ thể của mèo.\r\n- Hạt Reflex là sản phẩm được nghiên cứu và sản xuất 100% tại Thổ Nhĩ Kỳ, một trong những quốc gia phát triển nhất ở Trung Đông.\r\n- Sản phẩm phù hợp với mọi giống mèo từ 12 tháng tuổi trở lên.\r\n- Sản phẩm có công thức đặc biệt được trích xuất từ cây Yucca, một loại cây có tuổi thọ lâu đời, chỉ xuất hiện ở các vùng sa mạc.\r\n- Cây Yucca chứa những chất đặc biệt đã được khoa học chứng minh là có lợi ích với thú cưng, đặc biệt là mèo, bao gồm:\r\n+ Tăng khả năng miễn dịch của cơ thể mèo, giúp mèo chống chọi lại với các tác nhân gây bệnh ở bên ngoài.\r\n+ Cải thiện hệ tiêu hoá, giúp tăng sức khoẻ cho đường ruột của thú cưng.\r\n+ Giảm mùi hôi chất thải, đặc biệt là mùi hôi nước tiểu nhờ vào carbohydrate trong cây Yucca có khả năng ức chế Amoniac.\r\n+ Ngăn chặn sự tấn công của giun tròn sống ký sinh trong cơ thể của mèo.', 1, 150000, 'thuc-an-cho-meo-truong-thanh-reflex-15kg-168.jpg', 0, NULL, NULL),
(6, 'Thức Ăn Cho Mèo Con Cao Cấp Reflex Plus 1.5kg – Vị Gà – Thổ Nhĩ Kỳ', 5, 2, '- Giai đoạn từ 0 đến 12 tháng tuổi được xem là giai đoạn vàng giúp mèo phát triển vượt bậc. Nếu trong giai đoạn này, mèo được nuôi kĩ lưỡng và chăm sóc sức khoẻ đầy đủ thì sau khi trưởng thành, mèo sẽ ít bị bệnh và sống thọ hơn.\r\n- Chính vì vậy, ở giai đoạn này, bạn cần cho mèo con ăn những loại thức ăn chứa đầy đủ chất dinh dưỡng và cung cấp dưỡng chất cân bằng nhất cho cơ thể của chúng.\r\n- Dòng sản phẩm Reflex Plus cho mèo con là dòng thức ăn cao cấp, được nghiên cứu và sản xuất tại Thổ Nhĩ Kỳ.\r\n- Hạt khô sở hữu công thức độc quyền giúp bổ sung Omega-3, Omega-6 và đặc biệt hơn là chất Xylo-oligosaccharides (XOS).\r\n- Phù hợp với mèo con dưới 12 tháng tuổi.\r\n\r\nTHÀNH PHẦN DINH DƯỠNG ĐẶC BIỆT:\r\n+ Omege-3 và Omega-6 là 2 loại vi chất không thể nào được tổng hợp từ các loại thức ăn trong tự nhiên. Do đó, bạn cần bổ sung 2 chất này cho mèo thông qua thức ăn hạt. Hai chất này sẽ giúp lông của mèo bóng mượt hơn và hạn chế các bệnh liên quan đến da của chúng.\r\n+ Xylo-oligosaccharides (XOS) là một dạng prebiotic (men vi sinh) đặc biệt giúp ức chế sự phát triển của các loại vi khuẩn đường ruột; đồng thời tăng khả năng hấp thu khoáng của cơ thể. Từ đó, giúp cải thiện khả năng tiêu hoá và giảm thiểu các bệnh liên quan đến đường ruột của mèo.\r\n\r\nĐƯỢC CHIẾT XUẤT TỪ CÂY YUCCA:\r\n+ Cây Yucca là một loại cây có tuổi thọ lên đến ngàn năm và chỉ sống được ở những vùng sa mạc khô cằn của Trung Đông.\r\n+ Các tác dụng của cây Yucca trong thức ăn chăn nuôi đã được khoa học chứng minh, bao gồm:\r\n+ Giảm mùi hôi chất thải của mèo do carbohydrate có trong cây này có khả năng ức chế amoniac trong nước tiểu của mèo.\r\n+ Tăng cường chức năng đường ruột của mèo.\r\n+ Cải thiện sức đề kháng nhờ vào chất saponin có trong cây Yucca.\r\n+ Hạn chế sự phát triển và tấn công của của giun tròn sống ký sinh bên trong cơ thể mèo.', 432432, 14000, 'thuc-an-cho-meo-con-cao-cap-reflex-plus-15kg-153.jpg', 0, NULL, NULL),
(8, 'Thức Ăn Cho Mèo Trưởng Thành Cao Cấp Reflex Plus 1.5kg – Thổ Nhĩ Kỳ', 4, 2, '- Reflex Plus là dòng thức ăn cao cấp dành riêng cho mèo trên 12 tháng tuổi.\r\n- Giai đoạn này, mèo sẽ cần ít dinh dưỡng hơn nhưng nguồn dinh dưỡng phải ổn định để đảm bảo cung cấp đủ năng lượng cho sinh hoạt hằng ngày của chúng.\r\n- Các loại thức ăn thông thường bạn nấu đều thiếu chất này hoặc chất khác khiến cho mèo không đủ sức khoẻ để phát triển tốt trong những năm tháng trưởng thành.\r\n- Hạt Reflex Plus được nghiên cứu và phát triển bởi các nhà khoa học và bác sĩ thú y tại Thổ Nhĩ Kỳ, một quốc gia phát triển tại vùng Trung Đông.\r\n- Đảm bảo các an toàn về vệ sinh thực phẩm cũng như được kiểm duyệt chất lượng đầy đủ khi thông quan tại Hải quan Việt Nam.\r\n- Sản phẩm hạt Reflex Plus mang đến công thức đặc biệt giúp bổ sung đầy đủ các vitamin và khoáng chất cho mèo trưởng thành, bao gồm:\r\n+ Vitamin A, D3, E và C: Giúp cải thiện sức đề kháng của mèo, giảm thiểu nguy cơ mắc các bệnh do virus tấn công\r\n+ Omega-3 và Omega-6: Cải thiện sức khoẻ lông giúp lông của mèo óng mượt hơn và ít rụng hơn từ đó giảm thiểu tình trạng búi lông ở mèo.\r\n+ Carbohydrate: Đây là một chất đặc biệt giúp giảm mùi hôi chất thải của mèo nhờ vào khả năng ức chế amoniac trong nước tiểu của chúng.\r\n+ Saponin: là một loại vi chất độc đáo chỉ có trong cây Yucca của Trung Đông. Chất này giúp tăng sức đề kháng của mèo, đảm bảo mèo có một sức khoẻ tốt và giảm thiểu khả năng bị các bệnh lặt vặt.', 11, 135000, 'reflex-255.jpg', 0, NULL, NULL),
(11, 'Thức Ăn Cho Chó Trưởng Thành Reflex Plus 3kg – Thổ Nhĩ Kỳ', 6, 2, '- Chó trưởng thành cần dinh dưỡng ít hơn chó con; tuy nhiên, chúng lại cần nguồn thức ăn ổn định để có thể duy trì các hoạt động sống hằng ngày.\r\n- Hiểu được điều này, Reflex Plus đã cho ra đời dòng thức ăn cao cấp cho chó với công thức độc quyền được nhiều quốc gia trên thế giới ưa chuộng như Thổ Nhĩ Kỳ, Malaysia hay Indonesia.\r\n- Hạt bổ sung các chất dinh dưỡng cần thiết bao gồm: L-carnitine (giúp tăng khả năng tiêu hoá), Omega-3 và 6 (cải thiện vẻ đẹp của lông và da), Protein thuỷ phân (tăng dinh dưỡng và giảm dị ứng), các loại vitamin và khoáng chất (thường thiếu trong các thức ăn tự nhiên của chó)\r\n- Sản phẩm được sản xuất 100% từ Thổ Nhĩ Kỳ với quy trình khép kín và tuân thủ theo các tiêu chuẩn về an toàn thực phẩm.\r\n- Hạt có HSD xa vì thế bạn sẽ hoàn toàn yên tâm khi cho chó ăn cũng như bảo quản được trong thời gian dài.\r\n- Sản phẩm phù hợp với các giống chó nhỏ từ 12 tháng tuổi trở lên.', 3123123, 205000, 'thuc-an-cho-cho-truong-thanh-reflex-plus-3kg-156.jpg', 0, NULL, NULL),
(12, 'Thức Ăn Cho Chó Con Giống Nhỏ Reflex Plus 3kg – Vị Gà – Thổ Nhĩ Kỳ', 7, 2, '- Với chó con, dinh dưỡng là một điều cực kì quan trọng. Nếu trong giai đoạn này, chó con không được ăn đầy đủ dinh dưỡng thì rất dễ mắc bệnh khi trưởng thành hoặc phát triển không được khoẻ mạnh, suy dinh dưỡng.\r\n\r\n- Hạt khô cho chó con luôn được ưu tiên hơn các loại thức ăn khác vì công thức hạt được nghiên cứu và phát triển dành riêng cho nhu cầu dinh dưỡng đặc biệt cho chó con.\r\n\r\n- Ngoài ra, sản phẩm này còn bổ sung thêm nhiều khoáng chất và vi lượng đặc biệt, mà các loại thực phẩm trong tự nhiên không có, bao gồm:\r\n\r\n+ L-Carnitin: đây là một loại chất cực kì quan trọng giúp mang các axit béo đến các tế bào của chó dễ dàng hơn. Từ đó, giúp việc hấp thu dinh dưỡng của chó con hiệu quả. Chất này còn giúp đốt các chất béo để giúp cơ thể chó sản sinh ra năng lượng cho hoạt động hằng ngày.\r\n\r\n+ Omega-3 và Omega-6: Đây là hai vi chất vô cùng cần thiết đối với sự phát triển của lông và da của chó con, đặc biệt là những chú chó lông trung đến dài. Hai chất này giúp da của chó khoẻ hơn đồng thời làm giảm tình trạng rụng lông thường xảy ra ở chó con.\r\n\r\n+ Xylo-oligosaccharides (XOS): Do không thể tự tổng hợp được bằng các loại thức ăn trong tự nhiên, vì thế chất này trở nên rất hữu ích cho cơ thể của chó. XOS giúp chó giảm thiểu các chất béo có nội tạng, từ đó giúp giảm nguy cơ của bệnh béo phì ở chó.\r\n\r\n- Sản phẩm này còn sở hữu nhiều chất xơ, giúp tăng quá trình trao đổi chất, cải thiện hệ tiêu hoá, giúp chó con ăn mau tiêu và hấp thụ dinh dưỡng tốt hơn,\r\n\r\n- Hạt được sản xuất 100% tại Thổ Nhĩ Kỳ, một trong những quốc gia phát triển nhất của Trung Đông. Do đó, chất lượng của sản phẩm luôn được đảm bảo đúng với thông tin trên bao bì.', 3213, 220000, 'thuc-an-cho-cho-con-giong-nho-reflex-plus-3kg-117.jpg', 0, NULL, NULL),
(13, 'Thức Ăn Cho Mèo Con Reflex 2kg – Giá Rẻ – Vị Gà – Thổ Nhĩ Kỳ', 5, 2, '- Thức ăn hạt khô là một trong những loại thực phẩm phổ biến nhất khi nuôi mèo vì các thức ăn nấu tự nhiên không cung cấp được cho mèo những loại dưỡng chất quan trọng mà cơ thể cần như Omega-3. Đây là lý do vì sao mèo nên ăn hạt vì các loại hạt đều có công thức giúp bổ sung dinh dưỡng đặc biệt.\r\n- Là dòng sản phẩm thuộc thương hiệu Reflex của Thổ Nhĩ Kỳ, hạt Reflex cho mèo con chứa lượng dinh dưỡng cao hơn nhiều lần so với các loại hạt của mèo trưởng thành; giúp đảm bảo cho nhu cầu dinh dưỡng cực kì cao của mèo ở giai đoạn này.\r\n- Sản phẩm sở hữu công thức độc quyền giúp bổ sung Omega-3 và Omega-6, hai vi chất cực quan trọng cho sức khỏe của lông và móng mèo, giúp cho lông bóng mượt và ít rụng hơn.\r\n- Hạt giúp bổ sung các loại khoáng chất cũng như các vitamin cần thiết cho mèo như vitamin A, D3, E và C.\r\n- Phù hợp cho mèo con dưới 12 tháng tuổi.\r\n- Hạt còn có các khoáng chất được chiết xuất từ cây Yucca, một loại cây có tuổi thọ ngàn năm, chỉ sống ở các vùng sa mạc rộng lớn của Trung Đông.\r\n\r\nCác chất trong cây Yucca đã được khoa học chứng minh có lợi cho sức khỏe của động vật nói chung, bao gồm\r\n+ Giảm mùi hôi chất thải của mèo nhờ carbohydrate có trong cây Yucca giúp ức chế amoniac trong nước tiểu.\r\n+ Cải thiện hệ miễn dịch của mèo nhờ vào chất saponin của trái Yucca.\r\n+ Ức chế sự phát triển và tấn công của giun tròn ký sinh trong cơ thể của mèo.\r\n+ Nâng cao chức năng đường ruột và hệ tiêu hóa của mèo.', 123, 155000, 'thuc-an-cho-meo-con-reflex-15kg-183.jpg', 0, NULL, NULL),
(14, 'Pate Cho Mèo Trưởng Thành Ba Tư Royal Canin Persian (Gói)', 4, 3, '- Thương hiệu danh tiếng đến từ Pháp.\r\n- Chứa hàm lượng Axit béo, Omega 3 và 6 hỗ trợ làn da khỏe mạnh và bộ lông dài mềm mượt.\r\n- Công thức riêng biệt thúc đẩy sự cân bằng hệ vi khuẩn đường ruột cho sức khỏe tiêu hóa tối ưu.\r\n- Bổ sung đầy đủ dưỡng chất cho hoạt động mỗi ngày của các bé.\r\n- Kích thước và kết cấu độc đáo được thiết kế đặc biệt phù hợp với hình dạng hàm và kiểu ăn của mèo Ba Tư.\r\n- Kích thích khẩu vị giúp ngon miệng.\r\n- Thích hợp cho mèo ăn riêng hoặc trộn chung với hạt,\r\n- Phù hợp với mèo Ba Tư trên 1 năm tuổi.', 123, 34000, 'royal-canin-persian-972.jpg', 0, NULL, NULL),
(15, 'Thức Ăn Cho Mèo Trưởng Thành Ba Tư Royal Canin Persian (2kg)', 4, 3, '- Nhập khẩu hoàn toàn từ Pháp.\r\n- Thúc đẩy làn da khỏe mạnh và bộ lông dài của mèo Ba Tư mềm mại, sáng bóng với các dưỡng chất Omega 3 (EPA & DHA) , Omega 6 và axit béo.\r\n- Duy trì hệ tiêu hóa khỏe mạnh bằng cách kích thích quá trình đường ruột với các Protein tiêu hóa cao, prebiotic và chất xơ.\r\n- Bổ sung đầy đủ chất dinh dưỡng cho mọi hoạt động hàng ngày của các bé.\r\n- Thiết kế hạt theo hình dáng quả hạnh độc quyền giúp cho mèo Ba Tư dễ dàng nhai đồng thời hỗ trợ sức khỏe răng miệng.\r\n- Thích hợp với mèo Ba Tư trên 12 tháng tuổi.\r\n- TIẾT KIỆM 130,000 ĐỒNG, SO VỚI TÚI 400G', 123, 453000, 'royal-canin-persian-915.jpg', 0, NULL, NULL),
(16, 'Thức Ăn Cho Mèo Trưởng Thành Ba Tư Royal Canin Persian (400g)', 4, 3, '- Nhập khẩu hoàn toàn từ Pháp.\r\n- Thúc đẩy làn da khỏe mạnh và bộ lông dài của mèo Ba Tư mềm mại, sáng bóng với các dưỡng chất Omega 3 (EPA & DHA) , Omega 6 và axit béo.\r\n- Duy trì hệ tiêu hóa khỏe mạnh bằng cách kích thích quá trình đường ruột với các Protein tiêu hóa cao, prebiotic và chất xơ.\r\n- Bổ sung đầy đủ chất dinh dưỡng cho mọi hoạt động hàng ngày của các bé.\r\n- Thiết kế hạt theo hình dáng quả hạnh độc quyền giúp cho mèo Ba Tư dễ dàng nhai đồng thời hỗ trợ sức khỏe răng miệng.\r\n- Thích hợp với mèo Ba Tư trên 12 tháng tuổi.', 213, 114000, 'royal-canin-persian-938.jpg', 0, NULL, NULL),
(17, 'Thức Ăn Cho Mèo Con Ba Tư Royal Canin Persian Kitten (2kg)', 5, 3, '- Thương hiệu uy tín đến từ Pháp được đại đa số người nuôi thú cưng trên thế giới tin dùng.\r\n- Công thức riêng biệt cho mèo con Ba Tư thúc đẩy phát triển sức khỏe và giữ cho bộ lông dài mềm mại, sáng bóng với các chất dinh dưỡng đặc trưng của giống.\r\n- Duy trì hệ tiêu hóa khỏe mạnh với các protein và prebiotic.\r\n- Hỗ trợ hệ thống miễn dịch với hỗn hợp chất chống oxy hóa tăng trưởng tối ưu\r\n- Kích cỡ hạt vuông độc quyền với kết cấu mềm mại, được thiết kế cho hàm ngắn của mèo con Ba Tư, khuyến khích sức khỏe răng miệng.\r\n- Phù hợp với mèo con Ba Tư từ 2 đến 12 tháng tuổi.\r\n- TIẾT KIỆM 125,000 ĐỒNG, SO VỚI TÚI 400G\r\n- ĐẶC BIỆT KHI MUA TỪ 3 TÚI TRỞ LÊN, GIÁ CHỈ CÒN 425,000 ĐỒNG/1 TÚI', 123, 464000, 'royal-canin-persian-kitten-716.jpg', 0, NULL, NULL),
(18, 'Sữa Cho Chó Con Royal Canin Baby Dog Milk (400g)', 7, 3, '- Sản phẩm là sự lựa chọn hoàn hảo để thay thế cho sữa chó mẹ khi chó con tách mẹ hoặc chó mẹ không đủ sữa.\r\n- Phù hợp với chó con từ 0 - 2 tháng tuổi.\r\n- Điểm mạnh của Babydog Milk là có chứa rất nhiều DHA, một loại chất chỉ có trong sữa tự nhiên của chó mẹ. DHA giúp phát triển hệ thần kinh của chó và cải thiện các chức năng liên quan đến não bộ.\r\n- Sữa được thiết kế gần giống nhất với sữa của chó mẹ, mau tan trong nước, không vón cục.\r\n- Sữa chứa các loại proteins hỗ trợ cho hệ tiêu hóa còn non yếu của chó sơ sinh.\r\n- Sản xuất 100% tại Pháp, với date xa, đảm bảo chó của bạn sẽ có được dinh dưỡng tốt nhất.\r\n- ĐẶC BIỆT KHI MUA TỪ 3 HỘP TRỞ LÊN, GIÁ CHỈ CÒN 550,000 ĐỒNG/1 HỘP', 123, 581000, 'royal-canin-baby-dog-milk-179.jpg', 0, NULL, NULL),
(19, 'Thức Ăn Cho Mèo Trưởng Thành Royal Canin British Shorthair (2kg)', 4, 3, '- Thương hiệu nổi tiếng đến từ Pháp\r\n- Sản phẩm điều chế đặc biệt góp phần duy trì khối lượng cơ bắp mèo của bạn.\r\n- Thành phần chứa L-Carnitine dưỡng chất chuyển hóa chất béo lành mạnh.\r\n- Bao gồm các axit béo Omega-3 (EPA và DHA) khuyến khích xương khớp khỏe mạnh cũng như duy trì mức năng lượng hoạt động bình thường mỗi ngày.\r\n- Cân bằng các khoáng chất bảo vệ chức năng tim mạch khỏe mạnh.\r\n- Kích thước hạt thiết kế chuyên biệt cho hàm của mèo Anh lông ngắn giúp các bé dễ dàng nhai và hỗ trợ vệ sinh răng miệng.\r\n- Thích hợp cho mèo Anh lông ngắn trên 12 tháng tuổi.\r\n- TIẾT KIỆM 147,000 ĐỒNG, SO VỚI TÚI 400G\r\n- ĐẶC BIỆT KHI MUA TỪ 3 TÚI TRỞ LÊN, GIÁ CHỈ CÒN 430,000 ĐỒNG/1 TÚI', 123, 470000, 'royal-canin-british-shorthair-844.jpg', 0, NULL, NULL),
(20, 'Thức Ăn Cho Mèo Trưởng Thành Royal Canin British Shorthair (400g)', 4, 2, '- Thương hiệu nổi tiếng đến từ Pháp\r\n- Sản phẩm điều chế đặc biệt góp phần duy trì khối lượng cơ bắp mèo của bạn.\r\n- Thành phần chứa L-Carnitine dưỡng chất chuyển hóa chất béo lành mạnh.\r\n- Bao gồm các axit béo Omega-3 (EPA và DHA) khuyến khích xương khớp khỏe mạnh cũng như duy trì mức năng lượng hoạt động bình thường mỗi ngày.\r\n- Cân bằng các khoáng chất bảo vệ chức năng tim mạch khỏe mạnh.\r\n- Kích thước hạt thiết kế chuyên biệt cho hàm của mèo Anh lông ngắn giúp các bé dễ dàng nhai và hỗ trợ vệ sinh răng miệng.\r\n- Thích hợp cho mèo Anh lông ngắn trên 12 tháng tuổi.\r\n- ĐẶC BIỆT KHI MUA TỪ 3 TÚI TRỞ LÊN, GIÁ CHỈ CÒN 111,000 ĐỒNG/1 TÚI', 123, 117000, 'royal-canin-british-shorthair-875.jpg', 0, NULL, NULL),
(21, 'Pate Cho Mèo Con Royal Canin Kitten Loaf 85g (1 Gói)', 5, 3, '- Xuất xứ 100% từ Pháp\r\n- Thành phần dẫn xuất từ thịt động vật, ngũ cốc, chiết xuất protein thực vật, các dẫn xuất có nguồn gốc thực vật, khoáng chất, các loại đường khác nhau, men, dầu và chất béo\r\n- Thiết kế thức ăn mềm, kích thích vị giác dễ dàng cho mèo con của bạn nhai, nuốt và tiêu hóa\r\n- Được sản xuất với hàm lượng protein, carbohydrate và chất béo tối ưu, hỗ trợ sự phát triển của mèo con\r\n- Tăng cường hệ thống miễn dịch, phát triển sức khỏe tự nhiên.\r\n- Cung cấo vitamin, chất dinh dưỡng, protein và carbohydrate để duy trì năng lương cho hoạt động thường ngày của mèo con\r\n- Thức ăn ướt, thích hợp cho mèo con dưới 12 tháng tuổi.\r\n- Phù hợp với tất cả giống mèo.\r\n- ĐẶC BIỆT KHI MUA TỪ 16 GÓI TRỞ LÊN, GIÁ CHỈ CÒN 30,000 ĐỒNG/1 GÓI', 123, 33000, 'royal-canin-kitten-instinctive-loaf84.jpg', 0, NULL, NULL),
(22, 'Pate Cho Mèo Trưởng Thành Royal Canin Instinctive Jelly 85g (1 Gói)', 4, 3, '- Nhập khẩu 100% từ Pháp\r\n- Dành cho mèo trên 12 tháng tuổi.\r\n- Giúp thúc đẩy hệ thống tiết niệu khỏe mạnh tránh bệnh sỏi thận về sau cho mèo.\r\n- Duy trì cân nặng lý tưởng tránh tình trạng thừa cân cho thú cưng.\r\n- Thiết kế thức ăn phù hợp với hương vị yêu thích của mèo cùng sự mềm mại kết hợp với thạch giúp kích thích vị giác, đem lại cảm giác ngon miệng cho các bé.\r\n- Phù hợp với mọi giống mèo.\r\n- ĐẶC BIỆT KHI MUA TỪ 24 GÓI TRỞ LÊN, GIÁ CHỈ CÒN 30,000 ĐỒNG/1 GÓI', 13, 32000, 'royal-canin-instinctive-jelly79.jpg', 0, NULL, NULL),
(23, 'Pate Cho Chó Trưởng Thành Royal Canin Poodle (85g)', 6, 2, '<p>- Xuất xứ: Sản phẩm nhập khẩu 100% từ Ph&aacute;p</p>\r\n\r\n<p>- C&ocirc;ng dụng:</p>\r\n\r\n<p>+ M&ugrave;i vị độc quyền d&agrave;nh ri&ecirc;ng cho giống Poodle gi&uacute;p c&aacute;c bẻ trở n&ecirc;n ngon miệng hơn. + C&ocirc;ng thức với Protein cao v&agrave; L-carnitine gi&uacute;p duy tr&igrave; khối lượng cơ bắp.</p>\r\n\r\n<p>+ Cung cấp đầy đủ dưỡng chất cần thiết, cải thiện hệ ti&ecirc;u h&oacute;a v&agrave; tăng cường hệ miễn dịch cho giống Poodle. - Ph&ugrave; hợp với giống ch&oacute; Poodle tr&ecirc;n 10 th&aacute;ng tuổi.</p>', 123, 36000, 'royal-canin-poodle-12x85g-118.jpg', 0, NULL, NULL),
(24, 'Thức Ăn Organic Cho Mèo Con ANF 6 Free Indoor 6kg – Hàn Quốc', 5, 4, '- Là một trong số những sản phẩm cho mèo hiếm hoi trên thị trường được làm từ các nguyên liệu Organic, 100% tự nhiên\r\n- Cam kết 6 KHÔNG về sản phẩm: Không có chất đột biến gen, không thuốc kháng sinh, không thuốc trừ sâu, không chất bảo quản, không màu tổng hợp, không thuốc tăng trưởng.\r\n- Công thức đặc biệt giúp mèo con cải thiện cân nặng và duy trì hệ miễn dịch tốt.\r\n- Có chứa các chất giúp lông và da mèo con được khỏe mạnh và sáng bóng.\r\n- Sản phẩm được sản xuất 100% tại Hàn Quốc, nơi có các công nghệ thực phẩm tiên tiến và hàng đầu thế giới.\r\n- Giá niêm yết thị trường là 1,390,000 đồng, đang khuyến mãi còn 1,250,000 đồng.\r\n- ĐẶC BIỆT MUA 2 TÚI TRỞ LÊN, GIÁ CHỈ CÒN 1,215,000 ĐỒNG/1 TÚI', 12, 1250000, 'thuc-an-organic-cho-meo-con-anf-6-free-indoor-134.jpg', 0, NULL, NULL),
(25, 'Thức Ăn Organic Cho Mèo Con ANF 6 Free Indoor 400g – Hàn Quốc', 5, 4, '- Là một trong số những sản phẩm cho mèo hiếm hoi trên thị trường được làm từ các nguyên liệu Organic, 100% tự nhiên\r\n- Cam kết 6 KHÔNG về sản phẩm: Không có chất đột biến gen, không thuốc kháng sinh, không thuốc trừ sâu, không chất bảo quản, không màu tổng hợp, không thuốc tăng trưởng.\r\n- Công thức đặc biệt giúp mèo con cải thiện cân nặng và duy trì hệ miễn dịch tốt.\r\n- Có chứa các chất giúp lông và da mèo con được khỏe mạnh và sáng bóng.\r\n- Sản phẩm được sản xuất 100% tại Hàn Quốc, nơi có các công nghệ thực phẩm tiên tiến và hàng đầu thế giới.\r\n- Giá niêm yết thị trường là 105,000 đồng, đang khuyến mãi còn 95,000 đồng.\r\n- ĐẶC BIỆT MUA 5 GÓI TRỞ LÊN, GIÁ CHỈ CÒN 85,000 ĐỒNG/1 GÓI', 12, 95000, 'thuc-an-organic-cho-meo-con-anf-6-free-indoor-145.jpg', 0, NULL, NULL),
(26, 'Thức Ăn Organic Cho Mèo Lớn ANF 6 Free Indoor 6kg – Hàn Quốc', 4, 4, '- Là một trong số những sản phẩm cho mèo hiếm hoi trên thị trường được làm từ các nguyên liệu Organic, 100% tự nhiên\r\n- Cam kết 6 KHÔNG về sản phẩm: Không có chất đột biến gen, không thuốc kháng sinh, không thuốc trừ sâu, không chất bảo quản, không màu tổng hợp, không thuốc tăng trưởng.\r\n- Công thức đặc biệt giúp mèo cải thiện cân nặng và duy trì hệ miễn dịch tốt.\r\n- Có chứa các chất giúp lông và da mèo được khỏe mạnh và sáng bóng.\r\n- Sản phẩm được sản xuất 100% tại Hàn Quốc, nơi có các công nghệ thực phẩm tiên tiến và hàng đầu thế giới.\r\n- Giá niêm yết thị trường là 1,370,000 đồng, đang khuyến mãi còn 1,233,000 đồng.\r\n- ĐẶC BIỆT MUA 2 TÚI TRỞ LÊN, GIÁ CHỈ CÒN 1,199,000 ĐỒNG/1 TÚI', 12, 1233000, 'thuc-an-organic-cho-meo-lon-anf-6-free-indoor-18.jpg', 0, NULL, NULL),
(27, 'Thức Ăn Organic Cho Mèo Lớn ANF 6 Free Indoor 400g – Hàn Quốc', 4, 4, '- Là một trong số những sản phẩm cho mèo hiếm hoi trên thị trường được làm từ các nguyên liệu Organic, 100% tự nhiên\r\n- Cam kết 6 KHÔNG về sản phẩm: Không có chất đột biến gen, không thuốc kháng sinh, không thuốc trừ sâu, không chất bảo quản, không màu tổng hợp, không thuốc tăng trưởng.\r\n- Công thức đặc biệt giúp mèo cải thiện cân nặng và duy trì hệ miễn dịch tốt.\r\n- Có chứa các chất giúp lông và da mèo được khỏe mạnh và sáng bóng.\r\n- Sản phẩm được sản xuất 100% tại Hàn Quốc, nơi có các công nghệ thực phẩm tiên tiến và hàng đầu thế giới.\r\n- Giá niêm yết thị trường là 1,370,000 đồng, đang khuyến mãi còn 1,233,000 đồng.\r\n- ĐẶC BIỆT MUA 2 TÚI TRỞ LÊN, GIÁ CHỈ CÒN 1,199,000 ĐỒNG/1 TÚI', 12, 89000, 'thuc-an-organic-cho-meo-lon-anf-6-free-indoor-115.jpg', 0, NULL, NULL),
(28, 'Thức Ăn Cho Chó Con Dog Mania 1.5kg – Giảm Còi, Tăng Cân – Hàn Quốc', 7, 6, '- Hàn Quốc từ lâu đã nổi tiếng là một trong những quốc gia Châu Á phát triển trong các ngành sản xuất thực phẩm thiết yếu, thức ăn cho chó cũng không là ngoại lệ.\r\n- Dog Mania được xem là dòng sản phẩm bán rất chạy tại Hàn Quốc nhờ vào chất lượng và độ an toàn khi cho cún cưng ăn.\r\n- Sản phẩm có thành phần phù hợp với nhu cầu dinh dưỡng riêng của chó con.\r\n- Dog Mania được làm từ bột gà tự nhiên, phần bột gà này đã được chế biến sao cho vừa dễ hấp thu lại vừa cung cấp lượng lớn đạm cho chó hoạt động hằng ngày.\r\n- Hạt có các khoáng chất quan trọng mà chó cần như Kẽm, Omega 3 và 6 hay axit béo. Đây là các vi chất cực kì quan trọng cho việc phát triển lông cún cưng. Vì vậy, hạt giúp lông của chó đẹp hơn, óng mượt hơn và màu sắc lông ít bị bạc hơn.\r\n- Hạt còn được bổ sung thêm tinh chất chiết xuất từ cây hương thảo. Cây hương thảo giúp tăng sức khỏe cho hệ tiêu hóa, tăng khả năng miễn dịch và giảm thiểu tình trạng chó bị đầy bụng hay khó tiêu.\r\n- Sản phẩm còn có thêm tinh chất của cây Yucca. Cây Yucca từ lâu đã được các nhà khoa học chứng minh giúp giảm thiểu mùi hôi của chất thải. Do đó, nếu bạn cho chó ăn hạt khô Dog Mania thì sẽ giúp cải thiện vấn đề mùi trong chất thải của chó. Từ đó cũng giúp giảm thiểu mùi hôi trên cơ thể cún cưng.\r\n- Sản phẩm được sản xuất 100% tại Hàn Quốc và được nhập khẩu chính ngạch về Việt Nam nên chất lượng thức ăn đạt đủ tiêu chuẩn Vệ sinh An toàn thực phẩm.\r\n- Túi thức ăn có date xa nên bạn có thể mua về trữ và cho chó ăn dần trong thời gian dài.', 12, 150000, 'thuc-an-cho-cho-con-dog-mania-15kg-195.jpg', 0, NULL, NULL),
(29, 'Thức Ăn Cho Chó Trưởng Thành Dog Mania 1.5kg – Mượt Lông – Hàn Quốc', 6, 6, '- Hàn Quốc từ lâu đã nổi tiếng là một trong những quốc gia Châu Á phát triển trong các ngành sản xuất thực phẩm thiết yếu, thức ăn cho chó cũng không là ngoại lệ.\r\n- Dog Mania được xem là dòng sản phẩm bán rất chạy tại Hàn Quốc nhờ vào chất lượng và độ an toàn khi cho cún cưng ăn.\r\n- Sản phẩm có thành phần phù hợp với nhu cầu dinh dưỡng riêng của chó trưởng thành.\r\n- Dog Mania được làm từ bột gà tự nhiên, phần bột gà này đã được chế biến sao cho vừa dễ hấp thu lại vừa cung cấp lượng lớn đạm cho chó hoạt động hằng ngày.\r\n- Hạt có các khoáng chất quan trọng mà chó cần như Kẽm, Omega 3 và 6 hay axit béo. Đây là các vi chất cực kì quan trọng cho việc phát triển lông cún cưng. Vì vậy, hạt giúp lông của chó đẹp hơn, óng mượt hơn và màu sắc lông ít bị bạc hơn.\r\n- Hạt còn được bổ sung thêm tinh chất chiết xuất từ cây hương thảo. Cây hương thảo giúp tăng sức khỏe cho hệ tiêu hóa, tăng khả năng miễn dịch và giảm thiểu tình trạng chó bị đầy bụng hay khó tiêu.\r\n- Sản phẩm còn có thêm tinh chất của cây Yucca. Cây Yucca từ lâu đã được các nhà khoa học chứng minh giúp giảm thiểu mùi hôi của chất thải. Do đó, nếu bạn cho chó ăn hạt khô Dog Mania thì sẽ giúp cải thiện vấn đề mùi trong chất thải của chó. Từ đó cũng giúp giảm thiểu mùi hôi trên cơ thể cún cưng.\r\n- Sản phẩm được sản xuất 100% tại Hàn Quốc và được nhập khẩu chính ngạch về Việt Nam nên chất lượng thức ăn đạt đủ tiêu chuẩn Vệ sinh An toàn thực phẩm.\r\n- Túi thức ăn có date xa nên bạn có thể mua về trữ và cho chó ăn dần trong thời gian dài.', 12, 145000, 'thuc-an-cho-cho-truong-thanh-dog-mania-15kg-174.jpg', 0, NULL, NULL),
(30, 'Thức Ăn Cho Chó Trưởng Thành Nutri Source Gà Và Gạo Lức (13.6kg)', 6, 5, '- Xuất xứ: Thương hiệu từ Mỹ trứ danh trên toàn cầu với công thức độc quyền khép kín “Good 4 Life” đảm bảo an toàn và nâng cao sức khỏe của thú cưng.\r\n- Công dụng:\r\n+ Gạo và bột yến mạch bổ sung chất xơ giúp tiêu hóa và đào thải lành mạnh.\r\n+ Protein chất lượng cao được cân bằng cùng các loại rau khác, thành phần dinh dưỡng giúp chú chó của bạn duy trì cân nặng và có nhiều năng lượng hơn.\r\n+ Bổ sung đầy đủ các khoáng chất và Vitamin nhằm nâng cao sức đề kháng và hệ miễn dịch nhằm ngăn ngừa các bệnh thường gặp ở thú cưng.\r\n+ Cung cấp hàm lượng Omega 3 và 6 cùng DHA hỗ trợ da và lông trở nên bóng mượt.\r\n- Giá cực rẻ - chỉ với 1.200.000 vnđ cho sản phẩm 13,6kg (dùng khoảng 2-3 tháng) bạn đã có thể chuẩn bị cho các bé 1 bữa ăn đầy đủ dưỡng chất và ngon miệng\r\n- Dùng sản phẩm riêng hoặc trộn cùng những loại thức ăn khác như pate hay cơm giúp thúc đẩy vị giác cho thú cưng dễ ăn hơn.\r\n- Phù hợp mọi giống chó trưởng thành trên 12 tháng tuổi với cân nặng từ 0-45kg', 12, 1200000, 'thuc-an-cho-cho-truong-thanh-nutri-source-ga-va-gao-luc-13-6kg71.jpg', 0, NULL, NULL),
(31, 'Thức Ăn Cho Chó Con Cỡ Lớn Nutri Source Gà Và Gạo Lức (13.6kg)', 7, 5, '- Xuất Xứ: Thương hiệu từ Mỹ được người tiêu dùng trên toàn cầu tin dùng với công thức trứ danh độc quyền và khép kín “Good 4 Life”, bảo đảm an toàn và hỗ trợ cho sức khỏe thú cưng.\r\n- Công dụng:\r\n+ Sản phẩm chứa hàm lượng Canxi và Phốt Pho được điều chỉnh đặc biệt phù hợp với Protein, cung cấp đầy đủ dinh dưỡng cho sự phát triển cân đối của cơ bắp và xương ở các bé giống lớn , tránh mắc các bệnh về khớp sau này.\r\n+ Bổ sung các khoáng chất và Vitamin nhằm nâng cao đề kháng và hệ miễn dịch đối với thú cưng ngay từ khi còn nhỏ.\r\n+ Cân bằng hàm lượng Omega 3 và 6 cùng DHA giúp thúc đẩy da và lông trở nên bóng mượt.\r\n+ Nâng cao hệ tiêu hóa với công thức chứa men vi sinh, prebiotics và probiotics.\r\n- Giá cực rẻ - chỉ với 1.164.000 vnđ cho sản phẩm 13,6kg (dùng khoảng 2-3 tháng) bạn đã có thể chuẩn bị cho các bé 1 bữa ăn đầy đủ dưỡng chất và ngon miệng\r\n- Có thể dùng sản phẩm riêng hoặc kết hợp cùng nhiều loại thức ăn khác như pate hay cơm giúp thúc đẩy vị giác cho thú cưng dễ ăn hơn.\r\n- Phù hợp mọi giống chó con cỡ lớn trong quá trình (cai sữa – 18 tháng) với cân nặng trên 23kg.', 12, 1164000, 'thuc-an-cho-cho-con-co-lon-nutri-source-ga-va-gao-luc-13-6kg23.jpg', 0, NULL, NULL),
(32, 'Thức Ăn Cho Chó Con Giá Rẻ Nutri Source Gà Và Gạo Lức (13.6kg)', 7, 5, '- Xuất xứ: Thương hiệu của Mỹ nổi danh trên toàn thế giới với công thức độc quyền khép kín “Good 4 Life”, đảm bảo an toàn và chất lượng cho sức khỏe thú cưng.\r\n- Công dụng:\r\n+ Hỗ trợ tăng cường hệ tiêu hóa với thành phần chứa men vi sinh, prebiotics và probiotics.\r\n+ Bổ sung đầy đủ các khoáng chất, Vitamin, axit béo (Omega 3 và 6), hỗ trợ da và lông thú cưng bóng mượt.\r\n+ Cung cấp nguồn Protein thiết yếu cho hoạt động thường ngày của các bé.\r\n- Giá cực rẻ - chỉ với 1.349.000 vnđ cho sản phẩm 13,6kg (dùng khoảng 2-3 tháng) bạn đã có thể chuẩn bị cho các bé 1 bữa đầy đủ dinh dưỡng và ngon miệng\r\n- Có thể dùng riêng hoặc kết hợp cùng nhiều loại thức ăn khác như pate hay cơm giúp thúc đẩy vị giác cho các bé dễ ăn hơn.\r\n- Phù hợp mọi giống chó con trong quá trình (cai sữa – 18 tháng) với cân nặng từ 0-23kg.', 12, 1349000, 'thuc-an-cho-cho-con-gia-re-nutri-source-ga-va-gao-luc-13-6kg17.jpg', 0, NULL, NULL),
(34, 'Thức Ăn Cho Mèo Giá Rẻ Nutri Source Pure Vita Gà Và Đậu Hà Lan (142g)', 4, 5, '<p>- Thương hiệu đến từ Mỹ với d&acirc;y chuyền sản xuất độc quyền kh&eacute;p k&iacute;n, đảm bảo an to&agrave;n cho th&uacute; cưng khi sử dụng. C&aacute;c sản phẩm của Nutri Source được d&agrave;nh ri&ecirc;ng để cải thiện sức khỏe vật nu&ocirc;i.</p>\r\n\r\n<p>- Th&agrave;nh phần kết hợp từ thịt g&agrave; tươi được chứng nhận nu&ocirc;i ở c&aacute;c trang trại với đậu H&agrave; Lan, c&agrave; rốt c&ugrave;ng hương vị ho&agrave;n to&agrave;n tự nhi&ecirc;n, kh&ocirc;ng sử dụng ng&ocirc;, đậu n&agrave;nh l&agrave;m ảnh hưởng hệ ti&ecirc;u h&oacute;a của th&uacute; cưng. Bổ sung đầy đủ c&aacute;c dưỡng chất protein, chất b&eacute;o, chất sơ, chất sắt, kẽm, omega 3, kho&aacute;ng chất, vitamin B-12, A, D, E, C&hellip;</p>\r\n\r\n<p>- G&oacute;p phần gi&uacute;p l&ocirc;ng m&egrave;o trở n&ecirc;n mượt hơn, kiểm so&aacute;t m&ugrave;i, tăng hệ miễn dịch, k&iacute;ch th&iacute;ch n&atilde;o bộ, duy tr&igrave; c&acirc;n nặng ở mức ổn v&agrave; kh&ocirc;ng g&acirc;y kh&oacute; ti&ecirc;u. - Sản phẩm sở hữu nhiều m&ugrave;i vị tự nhi&ecirc;n kh&aacute;c nhau, gi&uacute;p vật nu&ocirc;i kh&ocirc;ng cảm thấy ng&aacute;n.</p>\r\n\r\n<p>- Gi&aacute; cực rẻ - rẻ nhất tr&ecirc;n thị trường hiện nay, với chỉ 25,000 đồng bạn đ&atilde; c&oacute; thể bổ sung cho th&uacute; cưng 1 bữa ăn đầy đủ dinh dưỡng c&ugrave;ng kho&aacute;ng chất tự nhi&ecirc;n.</p>\r\n\r\n<p>- Sản phẩm c&oacute; thể d&ugrave;ng ri&ecirc;ng trực tiếp hoặc trộn chung với đa dạng c&aacute;c loại thức ăn kh&aacute;c như pate hay cơm nhằm tăng hương vị cho c&aacute;c b&eacute; dễ ăn hơn.</p>\r\n\r\n<p>- Ph&ugrave; hợp với mọi giống m&egrave;o ở c&aacute;c lứa tuổi kh&aacute;c nhau (m&egrave;o con, m&egrave;o trưởng th&agrave;nh).</p>', 0, 25000, '3a70.png', 0, NULL, NULL),
(40, 'Thức Ăn Cho Chó Trưởng Thành Dog Mania 1.5kg – Mượt Lông – Hàn Quốc', 7, 6, '<p>321312313</p>', 12312321, 1232131, 'thuc-an-cho-cho-truong-thanh-dog-mania-15kg-17486.jpg', 0, NULL, NULL),
(41, 'Thức Ăn Cho Chó Trưởng Thành Dog Mania 1.5kg – Mượt Lông – Hàn Quốc', 7, 6, '<p>31231</p>', 213, 21321, 'thuc-an-cho-cho-truong-thanh-dog-mania-15kg-17443.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(11, '3213214', '4324', '234234', '4324', '234234', NULL, NULL),
(12, '34234', '4324234', '234234324', '23423423', '234234324', NULL, NULL),
(13, 'hân', '123 tủm', '231312', 'tủm', '231312', NULL, NULL),
(14, 'mi', 'nó', '6+ưqewqeq', 'tao', '6+ưqewqeq', NULL, NULL),
(15, '12312', '234234', '234234324', '432432', '234234324', NULL, NULL),
(16, '324234', '234234324', '534534534543', '234234324', '534534534543', NULL, NULL),
(17, 'fsdfsd', 'sdfgfd', 'gdfgdfgfd', 'fsdfsdf', 'gdfgdfgfd', NULL, NULL),
(18, 'dfgdfgfd', 'gdfgdf', 'gdfgfdg', 'gdfgdfg', 'gdfgfdg', NULL, NULL),
(19, 'ewrwer', 'rưerew', 'ưerwerwer', 'ưerwerew', 'ưerwerwer', NULL, NULL),
(20, '34234', '234234', '423432432', '4324', '423432432', NULL, NULL),
(21, '34234', '123213', '3123213123', '12312321', '3123213123', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_brand_product`
--
ALTER TABLE `tbl_brand_product`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_brand_product`
--
ALTER TABLE `tbl_brand_product`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
