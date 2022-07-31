-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 02:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kita_buatkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id_basic` int(11) NOT NULL,
  `nama_basic` varchar(56) NOT NULL,
  `title_basic` text NOT NULL,
  `alamat_basic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id_basic`, `nama_basic`, `title_basic`, `alamat_basic`) VALUES
(1, 'kita buatkan', 'Kita Buatkan adalah jasa layanan pembuatan website', 'Baleendah, Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_clients` int(11) NOT NULL,
  `logo_clients` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_clients`, `logo_clients`) VALUES
(1, 'smk73.png'),
(2, 'asiadream.png'),
(3, 'almega.png');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `kata1` text NOT NULL,
  `kata2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `kata1`, `kata2`) VALUES
(1, 'The best offer on the market', 'for your business');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `nama_form` varchar(56) NOT NULL,
  `email_form` varchar(56) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id_form`, `nama_form`, `email_form`, `pesan`) VALUES
(1, 'Pandu Putra Pradana', 'panduandro17@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores beatae natus vitae ullam odit soluta.'),
(2, 'Pandupp', 'panduputrapradana27@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores beatae natus vitae ullam odit soluta.');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `nama_paket` varchar(56) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `nama_paket`, `harga`) VALUES
(1, 'Hemat', 100000),
(2, 'Sedang', 250000),
(3, 'Premium', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan`
--

CREATE TABLE `keunggulan` (
  `id_keunggulan` int(11) NOT NULL,
  `judul_keunggulan` text NOT NULL,
  `deskripsi_keunggulan` text NOT NULL,
  `kepuasan` int(11) NOT NULL,
  `kecepatan` int(11) NOT NULL,
  `project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keunggulan`
--

INSERT INTO `keunggulan` (`id_keunggulan`, `judul_keunggulan`, `deskripsi_keunggulan`, `kepuasan`, `kecepatan`, `project`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur?', 'Nunc tincidunt vulputate elit. Mauris varius purus malesuada neque iaculis malesuada. Aenean gravida magna orci, non efficitur est porta id. Donec magna.', 100, 100, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `whatsapp` varchar(16) NOT NULL,
  `email` varchar(56) NOT NULL,
  `instagram` varchar(120) NOT NULL,
  `facebook` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `whatsapp`, `email`, `instagram`, `facebook`) VALUES
(1, '089663416413', 'panduputrapradana27@gmail.com', 'pandupp21', 'https://web.facebook.com/ucok.kocu.9809/');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `judul` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gambar_portfolio` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul`, `waktu`, `gambar_portfolio`) VALUES
(2, 'Aplikasi Sistem Transaksi', '2022-07-23 04:19:18', 'project2.png'),
(3, 'Aplikasi Inventori Barang', '2022-07-23 04:19:40', 'project11.png'),
(4, 'Undangan Digital', '2022-07-23 06:40:37', 'project51.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testi` int(11) NOT NULL,
  `nama_testi` varchar(24) NOT NULL,
  `foto_testi` varchar(256) NOT NULL,
  `profesi` varchar(56) NOT NULL,
  `deskripsi_testi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testi`, `nama_testi`, `foto_testi`, `profesi`, `deskripsi_testi`) VALUES
(1, 'Pandu Putra Pradana', 'contoh1.png', 'Kang Galon', 'Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Molestiae at, ex aut nobis saepe reprehenderit soluta laudantium quae suscipit eum mollitia?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(56) NOT NULL,
  `nama_user` varchar(56) NOT NULL,
  `password` varchar(56) NOT NULL,
  `level` enum('Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `password`, `level`) VALUES
(1, 'pandupp21', 'Pandu Putra Pradana', '81994874b797f4c62f236a2d5d703bbe', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id_basic`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_clients`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `keunggulan`
--
ALTER TABLE `keunggulan`
  ADD PRIMARY KEY (`id_keunggulan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id_basic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_clients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keunggulan`
--
ALTER TABLE `keunggulan`
  MODIFY `id_keunggulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
