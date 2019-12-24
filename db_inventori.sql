-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 05:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `agamas`
--

CREATE TABLE `agamas` (
  `id_agama` int(10) UNSIGNED NOT NULL,
  `nama_agama` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agamas`
--

INSERT INTO `agamas` (`id_agama`, `nama_agama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2019-03-22 08:42:30', '2019-03-22 08:42:30'),
(2, 'Kristen', '2019-03-22 08:42:49', '2019-03-22 08:42:49'),
(3, 'Katolik', '2019-03-22 08:42:57', '2019-03-22 08:42:57'),
(4, 'Hindu', '2019-03-22 08:43:06', '2019-03-22 08:43:06'),
(7, 'Budha', '2019-11-19 06:32:08', '2019-11-19 06:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Kategori 1', '2019-11-27 12:51:39', NULL),
(2, 'Kategori 2', '2019-11-27 12:51:39', NULL),
(4, 'kategori 3', '2019-11-28 02:26:40', '2019-11-28 02:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `sap` char(7) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `id_gender` int(10) UNSIGNED NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_daftar` date NOT NULL,
  `id_agama` int(10) UNSIGNED DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_karyawan`, `sap`, `nama_karyawan`, `id_gender`, `tgl_lahir`, `tgl_daftar`, `id_agama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(9, '1234567', 'Karyawan A', 1, '1980-09-23', '2009-11-18', 1, 'Jl. Indah Kasih', '08123123', '2019-11-18 03:26:05', '2019-11-18 15:30:19'),
(10, '123456', 'Karyawan B', 1, '1988-08-21', '2010-11-18', 2, 'Jl. 2', '08765456', '2019-11-18 03:27:39', '2019-11-28 02:20:27'),
(12, '0987654', 'Karyawan E', 1, '1980-10-10', '2000-11-18', 1, 'Jn. Permai', '0567654343', '2019-11-18 07:01:38', '2019-11-18 07:01:38'),
(13, '1102233', 'Karyawan D', 1, '1988-09-23', '2009-11-28', 1, 'Jl. 1', '08435654767', '2019-11-28 02:19:52', '2019-11-28 02:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id_gender` int(10) UNSIGNED NOT NULL,
  `nama_gender` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id_gender`, `nama_gender`, `created_at`, `updated_at`) VALUES
(1, 'Laki-laki', '2019-03-22 09:38:24', '2019-03-22 09:38:24'),
(3, 'Perempuan', '2019-11-19 06:18:02', '2019-11-19 06:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('arif@contoh.com', '$2y$10$teDGfASs9BQExEzZkCf/OOoMBeOMYIlbwfHUzyVKNEg2NECzNIxyC', '2019-08-26 00:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `image` varchar(100) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `id_unit` int(10) UNSIGNED NOT NULL,
  `id_supplier` int(10) UNSIGNED NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `ket_produk` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_produk`, `kode_produk`, `nama_produk`, `id_kategori`, `image`, `stok_produk`, `id_unit`, `id_supplier`, `lokasi`, `ket_produk`, `created_at`, `updated_at`) VALUES
(1, 'MH009', 'Metal Ring', 1, '1577107585.jpg', 30, 3, 1, 'rak 4, kolom12', 'Flamable', '2019-12-23 13:26:25', '2019-12-23 13:26:25'),
(2, 'MB0041', 'Demian Hub', 2, '1577107635.jpg', 28, 4, 3, 'rak 4, kolom 23', 'Mudah pecah', '2019-12-23 13:27:15', '2019-12-23 13:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id_purchase` int(10) UNSIGNED NOT NULL,
  `tgl_purchase` date NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `qty_purchase` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id_purchase`, `tgl_purchase`, `id_produk`, `qty_purchase`, `status`, `created_at`, `updated_at`) VALUES
(2, '2019-12-24', 2, 20, 1, '2019-12-24 13:14:09', '2019-12-24 13:16:00'),
(3, '2019-12-24', 1, 10, 1, '2019-12-24 13:15:51', '2019-12-24 13:16:00'),
(6, '2019-12-24', 2, 20, 1, '2019-12-24 13:31:50', '2019-12-24 13:32:05');

--
-- Triggers `purchases`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` AFTER INSERT ON `purchases` FOR EACH ROW BEGIN
	UPDATE products SET stok_produk = stok_produk+NEW.qty_purchase
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cancel_purchase` AFTER DELETE ON `purchases` FOR EACH ROW BEGIN
	UPDATE products SET stok_produk = products.stok_produk - OLD.qty_purchase
	WHERE id_produk = OLD.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `id_sell` int(10) UNSIGNED NOT NULL,
  `tgl_sell` date NOT NULL,
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`id_sell`, `tgl_sell`, `id_karyawan`, `id_produk`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(1, '2019-12-23', 9, 1, 2, 1, '2019-12-23 13:27:42', '2019-12-23 13:28:09'),
(2, '2019-12-23', 9, 2, 3, 1, '2019-12-23 13:27:59', '2019-12-23 13:28:09'),
(3, '2019-12-23', 9, 2, 2, 1, '2019-12-23 16:26:29', '2019-12-23 16:26:55'),
(6, '2019-12-23', 10, 2, 2, 1, '2019-12-23 16:34:41', '2019-12-23 16:34:50');

--
-- Triggers `sells`
--
DELIMITER $$
CREATE TRIGGER `cancel_sell` AFTER DELETE ON `sells` FOR EACH ROW BEGIN
	UPDATE products SET stok_produk = products.stok_produk + OLD.qty
	WHERE id_produk = OLD.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pengambilan` AFTER INSERT ON `sells` FOR EACH ROW BEGIN
	UPDATE products SET stok_produk = stok_produk-NEW.qty
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id_supplier` int(10) UNSIGNED NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `telp_supplier` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id_supplier`, `nama_supplier`, `cp`, `alamat_supplier`, `telp_supplier`, `created_at`, `updated_at`) VALUES
(1, 'Supplier 1', 'Joko', 'Palembang', '081232435436', '2019-11-28 03:14:50', '2019-11-28 03:27:22'),
(3, 'Supplier 3', 'Andi', 'Medan', '067546436', '2019-11-28 03:28:17', '2019-11-28 03:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id_unit` int(10) UNSIGNED NOT NULL,
  `nama_unit` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id_unit`, `nama_unit`, `created_at`, `updated_at`) VALUES
(1, 'kg', '2019-11-28 14:30:50', '2019-11-28 14:30:50'),
(3, 'piece', '2019-11-28 14:31:53', '2019-11-28 14:31:53'),
(4, 'pack', '2019-11-28 14:32:51', '2019-11-28 14:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('admin','operator') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'operator',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `akses`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Administrator', 'admin', 'admin@contoh.com', 'admin', '$2y$10$e/4AEFdynOYFe3GLoEZ7luQ6KSvZUAecX8hgE.oIzRzLi0BKr.u4C', 'tn8WxclnEYX6yB6mOUzibwrN3H26xzoOb64vdDGrI3RIaoqD5JB3dshcDbYj', '2019-03-27 09:18:02', '2019-11-28 02:18:04'),
(6, 'Arif Rusman', 'arif', 'arif@contoh.com', 'operator', '$2y$10$Ocijq6DGVBlbdawCnM.XFu7yIhr99MPeuDn.DICkqQbQpSITihkmG', NULL, '2019-08-26 15:54:31', '2019-08-26 15:54:31'),
(7, 'Ade Eriviati', 'ade', 'ade@contoh.com', 'operator', '$2y$10$EZngxih2juu1z8oKHjhYUeEX.5dZmJfYWRFV.xZJMaI.2MOa2pd.W', 'cSByCzjxhCgddScqwyF06YZirziUTm4bgqSc6lYsLpytck5AotxETXLwy7OY', '2019-12-23 13:36:39', '2019-12-23 13:36:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agamas`
--
ALTER TABLE `agamas`
  ADD PRIMARY KEY (`id_agama`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_agama_2` (`id_agama`),
  ADD KEY `id_agama_3` (`id_agama`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_pasien` (`id_karyawan`),
  ADD KEY `id_pasien_2` (`id_karyawan`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_agama_2` (`id_agama`),
  ADD KEY `id_gender` (`id_gender`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id_gender`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id_purchase`),
  ADD KEY `id_purchase` (`id_purchase`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`id_sell`),
  ADD KEY `id_sell` (`id_sell`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id_unit`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agamas`
--
ALTER TABLE `agamas`
  MODIFY `id_agama` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_karyawan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id_gender` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id_purchase` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `id_sell` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id_supplier` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id_unit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `agamas` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`id_gender`) REFERENCES `genders` (`id_gender`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `categories` (`id_kategori`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id_unit`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id_supplier`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `products` (`id_produk`);

--
-- Constraints for table `sells`
--
ALTER TABLE `sells`
  ADD CONSTRAINT `sells_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `employees` (`id_karyawan`),
  ADD CONSTRAINT `sells_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `products` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
