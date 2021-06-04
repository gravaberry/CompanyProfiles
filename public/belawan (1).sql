-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2021 at 04:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id_career` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id_career`, `title`, `deskripsi`, `gambar`, `tanggal`, `date`, `id_user`) VALUES
(3, 'Admin Staff', '<p style=\"padding-left: 40px;\">Berjenis kelamin Wanita</p>\r\n<p style=\"padding-left: 40px;\">Lulusan pendidikan min. D3/S1 Ilmu Ekonomi</p>\r\n<p style=\"padding-left: 40px;\">Mampu mengoperasikan komputer dengan baik</p>\r\n<p style=\"padding-left: 40px;\">Berpengalaman min. 1 tahun di bidang yang sama</p>\r\n<p style=\"padding-left: 40px;\">Memastikan Semua Komputer Berjalan deagadgasdgkasdgkasdgfaksd</p>\r\n<p style=\"padding-left: 40px;\">adsgggggggggggggggggggggggggggggggggggggggggggggggggg</p>\r\n<p style=\"padding-left: 40px;\">asdgaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', '20210208035956.jpg', '2021-02-08', '2021-02-09 04:49:05', 10),
(4, 'Safety', '<p style=\"padding-left: 40px;\">asdgadgasdgasasasasasas</p>\r\n<p style=\"padding-left: 40px;\">adsgasdgasdgas</p>\r\n<p style=\"padding-left: 40px;\">asdgasgasdg</p>\r\n<p style=\"padding-left: 40px;\">asdgasdgasdgasdg</p>\r\n<p style=\"padding-left: 40px;\">asdfgasdgasdgasdg</p>\r\n<p style=\"padding-left: 40px;\">asdgasdgasdg</p>\r\n<p style=\"padding-left: 40px;\">asdgasdgdsg</p>\r\n<p style=\"padding-left: 40px;\">&nbsp;</p>', '20210209045009.png', '2021-02-09', '2021-02-09 04:50:13', 10);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'php', 'php@gmail.com', 'pesaku', 'Masih ada lowongan kah?', '2021-02-01 04:46:21'),
(3, 'au', 'au@gmail.com', 'au', 'test lagi man', '2021-02-01 07:31:04'),
(4, 'testttt', 'test2@gmail.com', 'testttttttt', 'testttttttttt', '2021-02-01 07:31:59'),
(5, 'saut IT', 'saut@gmail.com', 'test', 'Belawan Indah is The Best', '2021-02-05 07:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` varchar(255) NOT NULL,
  `jenis_galeri` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(50) NOT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id_galeri`, `judul_galeri`, `jenis_galeri`, `gambar`, `website`, `popup_status`, `urutan`, `tanggal`) VALUES
(11, 'wheelloader', 'WheelLoader', 'wl1-1611303471.jpg', 'https:belawan.co.id', 'Publish', 1, '2021-01-22 08:17:51'),
(12, 'wheelloader2', 'WheelLoader', 'wl2-1611303552.jpg', 'https:belawan.co.id', 'Publish', 2, '2021-01-22 08:19:12'),
(13, 'wheelloader3', 'WheelLoader', 'wl3-1611303573.jpg', 'https:belawan.co.id', 'Publish', 3, '2021-01-22 08:19:33'),
(14, 'wheelloader4', 'WheelLoader', 'wl4-1611303590.jpg', 'https:belawan.co.id', 'Publish', 5, '2021-01-22 08:50:58'),
(16, 'Container1', 'Container', 'cont1-1611306426.jpg', 'https:belawan.co.id', 'Publish', 1, '2021-01-22 09:07:06'),
(17, 'Container2', 'Container', 'cont2-1611306459.jpg', 'https:belawan.co.id', 'Publish', 2, '2021-01-22 09:07:39'),
(18, 'Container3', 'Container', 'cont3-1611306479.jpg', 'https:belawan.co.id', 'Publish', 3, '2021-01-22 09:07:59'),
(19, 'Container4', 'Container', 'cont4-1611307590.jpg', 'https:belawan.co.id', 'Publish', 4, '2021-01-22 09:26:30'),
(20, 'Container5', 'Container', 'cont5-1611307608.jpg', 'https:belawan.co.id', 'Publish', 5, '2021-01-22 09:26:48'),
(21, 'Container6', 'Container', 'cont6-1611307625.jpg', 'https:belawan.co.id', 'Publish', 6, '2021-01-22 09:27:05'),
(22, 'Container7', 'Container', 'cont7-1611307642.jpg', 'https:belawan.co.id', 'Publish', 7, '2021-01-22 09:27:22'),
(23, 'Container8', 'Container', 'cont8-1611307660.jpg', 'https:belawan.co.id', 'Publish', 8, '2021-01-22 09:27:40'),
(24, 'Container9', 'Container', 'cont9-1611307679.jpg', 'https:belawan.co.id', 'Publish', 9, '2021-01-22 09:27:59'),
(25, 'Container10', 'Container', 'cont10-1611307700.jpg', 'https:belawan.co.id', 'Publish', 10, '2021-01-22 09:28:20'),
(26, 'Container11', 'Container', 'cont11-1611307717.jpg', 'https:belawan.co.id', 'Publish', 11, '2021-01-22 09:28:37'),
(27, 'Container12', 'Container', 'cont12-1611307734.jpg', 'https:belawan.co.id', 'Publish', 12, '2021-01-22 09:28:54'),
(28, 'Container13', 'Container', 'cont13-1611307758.jpg', 'https:belawan.co', 'Publish', 13, '2021-01-25 08:59:54'),
(29, 'Break Bulk', 'BreakBulk', 'bulk1-1611307795.jpg', 'https:belawan.co.id', 'Publish', 1, '2021-01-22 09:29:55'),
(30, 'Break Bulk2', 'BreakBulk', 'bulk2-1611307829.jpg', 'https:belawan.co.id', 'Publish', 2, '2021-01-22 09:30:29'),
(31, 'Break Bulk3', 'BreakBulk', 'bulk3-1611307846.jpg', 'https:belawan.co.id', 'Publish', 3, '2021-01-22 09:30:46'),
(32, 'Break Bulk4', 'BreakBulk', 'bulk4-1611307865.jpg', 'https:belawan.co.id', 'Publish', 4, '2021-01-22 09:31:05'),
(33, 'Break Bulk5', 'BreakBulk', 'bulk5-1611307890.jpg', 'https:belawan.co.id', 'Publish', 5, '2021-01-22 09:31:30'),
(34, 'Break Bulk6', 'BreakBulk', 'bulk6-1611308018.jpg', 'https:belawan.co.id', 'Publish', 6, '2021-01-22 09:33:38'),
(35, 'Break Bulk7', 'BreakBulk', 'bulk7-1611308044.jpg', 'https:belawan.co.id', 'Publish', 7, '2021-01-22 09:34:04'),
(36, 'Break Bulk8', 'BreakBulk', 'bulk8-1611308062.jpg', 'https:belawan.co.id', 'Publish', 8, '2021-01-22 09:34:22'),
(37, 'heavy Duty', 'HeavyDuty', 'heavy1-1611308126.jpg', 'https:belawan.co.id', 'Publish', 1, '2021-01-22 09:35:26'),
(38, 'heavy Duty2', 'HeavyDuty', 'heavy3-1611308159.jpg', 'https:belawan.co.id', 'Publish', 2, '2021-01-22 09:35:59'),
(42, 'dump1', 'BulkCargo', '20210209091957.jpg', 'http://belawanindah.co.id/', 'Publish', 1, '2021-02-09 09:19:59'),
(43, 'dump2', 'BulkCargo', '20210209092021.jpg', 'http://belawanindah.co.id/', 'Publish', 2, '2021-02-09 09:20:21'),
(44, 'dump3', 'BulkCargo', '20210209092044.jpg', 'http://belawanindah.co.id/', 'Publish', 3, '2021-02-09 09:20:44'),
(45, 'dump4', 'BulkCargo', '20210209092104.jpg', 'http://belawanindah.co.id/', 'Publish', 4, '2021-02-09 09:21:04'),
(46, 'dump5', 'BulkCargo', '20210209092143.jpg', 'http://belawanindah.co.id/', 'Publish', 5, '2021-02-09 09:21:43'),
(47, 'dump6', 'BulkCargo', '20210209092204.jpg', 'http://belawanindah.co.id/', 'Publish', 6, '2021-02-09 09:22:04'),
(48, 'dump7', 'BulkCargo', '20210209092222.jpg', 'http://belawanindah.co.id/', 'Publish', 7, '2021-02-09 09:22:22'),
(49, 'dump8', 'BulkCargo', '20210209092241.jpg', 'http://belawanindah.co.id/', 'Publish', 8, '2021-02-09 09:22:41'),
(50, 'ct1', 'CargoBreakBulk', '20210209092601.jpg', 'http://belawanindah.co.id/', 'Publish', 1, '2021-02-09 09:26:01'),
(51, 'ct12', 'CargoBreakBulk', '20210209092622.jpg', 'http://belawanindah.co.id/', 'Publish', 2, '2021-02-09 09:26:22'),
(52, 'ct3', 'CargoBreakBulk', '20210209092643.jpg', 'http://belawanindah.co.id/', 'Publish', 3, '2021-02-09 09:26:43'),
(53, 'heavy duty3', 'HeavyDuty', '20210209092954.jpg', 'http://belawanindah.co.id/', 'Publish', 3, '2021-02-09 09:29:54'),
(54, 'heavy duty4', 'HeavyDuty', '20210209093027.jpg', 'http://belawanindah.co.id/', 'Publish', 4, '2021-02-09 09:30:27'),
(55, 'forklipt1', 'Forkclipt', '20210209093248.jpg', 'http://belawanindah.co.id/', 'Publish', 1, '2021-02-09 09:32:48'),
(56, 'forklipt2', 'Forkclipt', '20210209093310.jpg', 'http://belawanindah.co.id/', 'Publish', 2, '2021-02-09 09:33:10'),
(57, 'forklipt3', 'Forkclipt', '20210209093339.jpg', 'http://belawanindah.co.id/', 'Publish', 3, '2021-02-09 09:33:39'),
(58, 'crane1', 'Crane', '20210209093509.jpg', 'http://belawanindah.co.id/', 'Publish', 1, '2021-02-09 09:35:09'),
(59, 'crane2', 'Crane', '20210209093528.jpg', 'http://belawanindah.co.id/', 'Publish', 2, '2021-02-09 09:35:28'),
(60, 'crane3', 'Crane', '20210209093545.jpg', 'http://belawanindah.co.id/', 'Publish', 3, '2021-02-09 09:35:45'),
(61, 'crane4', 'Crane', '20210209093604.jpg', 'http://belawanindah.co.id/', 'Publish', 4, '2021-02-09 09:36:04'),
(62, 'Excavator1', 'Excavator', '20210209093706.jpg', 'http://belawanindah.co.id/', 'Publish', 1, '2021-02-09 09:37:06'),
(63, 'Excavator2', 'Excavator', '20210209093724.jpg', 'http://belawanindah.co.id/', 'Publish', 2, '2021-02-09 09:37:24'),
(64, 'Excavator3', 'Excavator', '20210209093744.jpg', 'http://belawanindah.co.id/', 'Publish', 3, '2021-02-09 09:37:44'),
(65, 'Excavator4', 'Excavator', '20210209093800.jpg', 'http://belawanindah.co.id/', 'Publish', 4, '2021-02-09 09:38:00'),
(66, 'Compactor1', 'Compactor', '20210209094043.jpg', 'http://belawanindah.co.id/', 'Publish', 1, '2021-02-09 09:40:43'),
(67, 'Compactor2', 'Compactor', '20210209094100.jpg', 'http://belawanindah.co.id/', 'Publish', 2, '2021-02-09 09:41:00'),
(68, 'Compactor3', 'Compactor', '20210209094116.jpg', 'http://belawanindah.co.id/', 'Publish', 3, '2021-02-09 09:41:16'),
(69, 'Compactor4', 'Compactor', '20210209094131.jpg', 'http://belawanindah.co.id/', 'Publish', 4, '2021-02-09 09:41:31');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategorigaleri`
--

CREATE TABLE `kategorigaleri` (
  `id_kategorigaleri` int(11) NOT NULL,
  `slug_kategori_galeri` varchar(255) NOT NULL,
  `nama_kategori_galeri` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorigaleri`
--

INSERT INTO `kategorigaleri` (`id_kategorigaleri`, `slug_kategori_galeri`, `nama_kategori_galeri`, `urutan`) VALUES
(7, 'container', 'Container', 1),
(8, 'breakbulk', 'BreakBulk', 2),
(9, 'heavy-duty', 'Heavy Duty', 3),
(10, 'bulk-cargo', 'Bulk Cargo', 4),
(11, 'break-bulk', 'Break bulk', 5),
(12, 'homepage-slider', 'homepage -slider', 7),
(13, 'crane', 'crane', 8),
(14, 'forkclipt', 'Forkclipt', 8),
(15, 'excavator', 'excavator', 9),
(16, 'wheel-loader', 'wheel loader', 10),
(17, 'compactor', 'compactor', 12);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasis`
--

CREATE TABLE `konfigurasis` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `web_deskripsi` text NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `nama_singkat` varchar(50) NOT NULL,
  `singkatan` varchar(20) NOT NULL,
  `tagline1` text NOT NULL,
  `tangline2` text NOT NULL,
  `website_address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `nama_facebook` varchar(50) NOT NULL,
  `nama_twitter` varchar(50) NOT NULL,
  `nama_instagram` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `google_map` text NOT NULL,
  `judul_1` text NOT NULL,
  `judul_2` text NOT NULL,
  `pesan_1` text NOT NULL,
  `pesan_2` text NOT NULL,
  `isi_1` text NOT NULL,
  `isi_2` text NOT NULL,
  `link_1` varchar(50) NOT NULL,
  `link_2` varchar(50) NOT NULL,
  `link_3` varchar(50) NOT NULL,
  `belawanindah` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasis`
--

INSERT INTO `konfigurasis` (`id_konfigurasi`, `namaweb`, `deskripsi`, `web_deskripsi`, `nama_perusahaan`, `nama_singkat`, `singkatan`, `tagline1`, `tangline2`, `website_address`, `email`, `phone`, `facebook`, `twitter`, `instagram`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `logo`, `icon`, `google_map`, `judul_1`, `judul_2`, `pesan_1`, `pesan_2`, `isi_1`, `isi_2`, `link_1`, `link_2`, `link_3`, `belawanindah`, `alamat`, `kota`, `provinsi`, `gambar`, `id_user`, `tanggal`) VALUES
(1, 'www.belawanindah.co.id', '<p style=\"text-align: justify;\">Belawan Indah is the biggest and most established land transportation company in Sumatera, providing a comprehensive logistic service for import, export and domestic cargo for cities and town in Indonesia. Belawan Indah promotes team spirit and professionalism at work. We consistently upgrade our trucks and equipments to give the best service as well as to respond to changes in market demand thus focusing on maximising client.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Belawan Indah promotes team spirit and professionalism at work. Our Company ensures that it maintains safety and quality working environments at all times by complying with theTransport Safety Standards on National Level. Trainings are conducted on regular basis to maintain service standard and hence provide quality services to our valued clients.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Belawan Indah is committed in providing reliable and competitive pricing transportation with the support from an established workshop and strategic location depots in major cities. Our services cover delivering goods which include forwarding services from major ports in Indonesia to designated location. We are equipped with several warehouses for storage of goods as part of our service to clients. Being one of the most dynamic carrier, we have the capacity to deliver your freight securely and safely to your satisfaction.</p>', 'http://belawanindah.co.id/', 'PT.Belawan Indah', 'BI', 'BI', '', '', 'http://belawanindah.co.id/', 'marketing@belawanindah.com', 616943613, 'https://www.facebook.com/belawanindah.bi', 'https://www.instagram.com/ptbelawanindah/?hl=id', 'https://www.instagram.com/ptbelawanindah/', 'PTBelawanindah', 'ptbelawaninda', 'BelawanIndahGo', '20210206035419.png', 'test', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.175328533562!2d98.68437021430323!3d3.7719988500608386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3036cddcea82e9cd%3A0x9f6811b84ea34ed4!2sPT.%20Belawan%20Indah!5e0!3m2!1sen!2sid!4v1596091685684!5m2!1sen!2sid', 'test', 'test', 'test', '', '', '', '', '', '', '', 'Jl. Raya Pelabuhan I, Simpang Kampung Salam No. 1', 'Medan Belawan, Kota Medan', 'Sumatera Utara 20414 - Indonesia', '', '10', '2021-02-08 09:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_01_12_032118_create_sessions_table', 1),
(7, '2021_01_12_032946_create_homes_table', 2),
(8, '2020_05_21_100000_create_teams_table', 3),
(9, '2020_05_21_200000_create_team_user_table', 3),
(10, '2020_05_21_300000_create_team_invitations_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saut@belawanindah.com', '$2y$10$ElrTMG8TNqe/oArEM5QI6.NZcXoG17MjRnH7nLRQ93CLPusMcOs36', '2021-01-14 01:28:35'),
('gravaberry@gmail.com', '$2y$10$KWz7yjKm5yf85eE6K7sSGu5DvXVrR0BPt7lcAJcnCcuZzXe9Eovt6', '2021-01-14 01:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3JRkcE38bzW39ib0wSkJT67vivc8XOpDb6RdoJ1O', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUTRHSDh3ZG5oOTQ3WmpnS2VldUtKMG9BREUyNzBaRGtiNmk2Zmo1YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJsb2NhbGUiO3M6MjoiZW4iO30=', 1615388496),
('BJyDmSTMVvyYyJffeA4NDE59gKEosvdQZzAgrg58', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiU3ZHUHdIRXdSZ09YZk5QTEEyTDlXOG1Sdmh4bGhReVFxVE45dTZ6aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJpZF91c2VyIjtpOjEwO3M6NToiZW1haWwiO3M6MTU6ImFkbWluQGdtYWlsLmNvbSI7czoxMToiYWtzZXNfbGV2ZWwiO3M6NToiYWRtaW4iO30=', 1614311966),
('fCzpLkI63fy9UWEIcnFKc1RBeK3N6MzDlR2ZShTT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHVITnVpM3pud2k5eEs3d0VLY1N3QmpISG1JNjVXU01neWE2YmpUVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9qb2JrYXJpciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1614399080),
('grPOtF0qeanEw6ryvAqsgIC6oXXfZZAR1UX6zlJn', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkxvOXBDOVg0VlI3Y2Z5eWgxYUFEMUd2aTVmejRkekQza0VHRlBTbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9iZWxhd2FuL3B1YmxpYy9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1614304633),
('PqfoGpTkcAk3Rlvb4R1N6BXhhzI4Nn3910gKrpZT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFpWTU1QdU91ZlJJNVQzdFNWRUd0SU1VeG53SEhVaGlGRFI0SGdUNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9qb2JrYXJpciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1614321636);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id_slider` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis_slider` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `slider_status` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `status_text` varchar(255) NOT NULL,
  `tanggal_publish` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id_slider`, `judul`, `jenis_slider`, `gambar`, `isi`, `slider_status`, `urutan`, `status_text`, `tanggal_publish`) VALUES
(16, 'welcomeku', 'Galeri', 'bannerb1-1611290032.jpg', 'Welcome To PT. Belawan Indah', 'Publish', 1, 'Ya', '2021-01-22'),
(17, 'build', 'Homepage', 'bannerb2-1611290069.jpg', 'Build Trust To All Business Relations', 'Publish', 2, 'Ya', '2021-01-22'),
(18, 'place', 'Galeri', 'bannerb3-1611290096.jpg', 'We Place The Greatest Value On Reliability', 'Publish', 3, 'Ya', '2021-01-22'),
(19, 'test', 'Galeri', 'ban01-1611298191.jpg', 'test', 'Publish', 4, 'Ya', '2021-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses_level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `username`, `password`, `akses_level`, `remember_token`, `gambar`, `created_at`) VALUES
(10, 'admin', 'admin@gmail.com', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin', NULL, '20210129095511.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id_career`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorigaleri`
--
ALTER TABLE `kategorigaleri`
  ADD PRIMARY KEY (`id_kategorigaleri`);

--
-- Indexes for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  ADD PRIMARY KEY (`id_konfigurasi`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_email_unique` (`email`),
  ADD KEY `team_invitations_team_id_foreign` (`team_id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id_career` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategorigaleri`
--
ALTER TABLE `kategorigaleri`
  MODIFY `id_kategorigaleri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
