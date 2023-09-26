-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 07:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `isi`) VALUES
(3, 'Profile Perusahaan', '<p style="text-align: justify;">\r\n<span style="box-sizing: border-box; font-weight: bolder; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;">PT. NOA CIPTA ADIWANGSA</span><span style="color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;">&nbsp;adalah suatu perseroan yang utamanya menjalankan usaha dalam bidang penyediaan jasa pengamanan atau security service kepada Klien atau pihak-pihak yang membutuhkan layanan jasa demikian, dengan menempatkan tenaga-tenaga pengaman atau tenaga security pada perusahaan atau pihak-pihak yang menjadi klien Perusahaan di bawah pengelolaan dan instruksi Perusahaan.</span><br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<span style="color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;">Oleh sebab itu pada tanggal 02 Februari 2021 kami dirikan dengan nama PT. NOA CIPTA ADIWANGSA yang siap berdedikasi dan menjadi Mitra yang tepat dalam hal membantu menciptakan rasa nyaman, aman dan tertib.</span><br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<span style="color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;">Kami mempekerjakan sejumlah tenaga kerja yang mempunyai minat, kemampuan dan pengalaman untuk menjadi tenaga pengaman yang ditempatkan dalam tugas-tugas pengamanan pada obyek yang ditentukan oleh Perusahaan dan Klien, dan Perusahaan masih mempunyai lowongan Tenaga Pengaman yang akan direkrut oleh Perusahaan berdasarkan hubungan kerja untuk waktu tertentu.</span><br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<span style="color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;">PT. NOA CIPTA ADIWANGSA menyiapkan jasa yang terkait dengan rasa nyaman, aman dan tertib dengan membekali para personelnya kemampuan yang terampil dan terdidik.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `aboutsesdua`
--

CREATE TABLE `aboutsesdua` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutsesdua`
--

INSERT INTO `aboutsesdua` (`id`, `judul`, `isi`) VALUES
(2, 'PT. NOA CIPTA ADIWANGSA', '        <p style="text-align: justify;">\r\n<span style="color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;">Menyediakan tenaga satuan pengamanan (Satpam) yang profesional, terdidik dan terampil untuk selalu siap menangani situasi keamanan hingga keadaan darurat yang mungkin terjadi. Membekali diri dengan keahlian khusus untuk berbagai keadaan darurat, antara lain bahaya kebakaran, bencana alam, evakuasi, pertolongan kecelakaan, kerusuhan dan tindak kekerasan lainnya.</span><br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<br style="box-sizing: border-box; color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;" />\r\n<span style="color: rgb(73, 71, 71); font-family: Merriweather, sans-serif; font-size: 16px; text-align: justify;">Kami terus meningkatkan keterampilan dan pengetahuan personelnya melalui pendidikan dan pelatihan bersertifikasi profesi tenaga Satpam yang berkesinambungan</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `legalistas`
--

CREATE TABLE `legalistas` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legalistas`
--

INSERT INTO `legalistas` (`id`, `judul`, `isi`) VALUES
(1, 'Komisaris', 'Yovita Putri Khamisra'),
(2, 'Perusahaan', 'PT. NOA CIPTA ADIWANGSA'),
(4, 'Penasehat', 'PT. NOA CIPTA ADIWANGSA'),
(5, 'SIUP', '2345754435 778\r\n'),
(6, '44', '444'),
(7, 'fssfsdf', 'dfgdfgdfg'),
(8, 'kljklj', 'lkjk,jk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`) VALUES
('6118b2a943acc2.78631959', 'Administrator', 'admin@mail.com', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', NULL, '2021-08-14 23:22:33', '2021-12-03 01:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutsesdua`
--
ALTER TABLE `aboutsesdua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legalistas`
--
ALTER TABLE `legalistas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `aboutsesdua`
--
ALTER TABLE `aboutsesdua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `legalistas`
--
ALTER TABLE `legalistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
