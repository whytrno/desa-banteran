-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 04:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_banteran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `artikel_berita` text NOT NULL,
  `tanggal` date NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `artikel_berita`, `tanggal`, `pengarang`, `img`) VALUES
(1, 'ajib terbang', 'ajib terbang ke bulan', '2022-06-30', 'rai', 'berita-desa-1.jpg'),
(2, 'asdsad', 'sadsadsad', '2022-07-02', 'Raihan Febriyansah', 'berita-desa-3.jpg'),
(3, 'Wahyu Triono', 'jajan di banteran', '2022-07-02', 'Raihan Febriyansah', 'berita-desa-1.jpg'),
(4, 'Produk baru', 'sebagai pembuka, nyoba', '2022-07-22', 'Raihan Febriyansah', 'darani.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `img`) VALUES
(1, 'Djoglo_Banteran.jpg'),
(2, 'Lapangan_Banteran.jpg'),
(3, 'Masjid_Jami_Alhidayah.jpg'),
(4, 'Mts_Maarif_Nu_1_Sumbang.jpg'),
(5, 'SDN_1_Banteran.jpg'),
(6, 'SDN_2_Banteran.jpg'),
(7, 'SMPN_2_Sumbang.jpg'),
(8, 'desa-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `judul_layanan` varchar(255) NOT NULL,
  `artikel_layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `file_penduduk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `file_penduduk`) VALUES
(1, 'Penduduk_Banteran.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_program`
--

CREATE TABLE `tb_program` (
  `id_program` int(11) NOT NULL,
  `judul_program` text NOT NULL,
  `artikel_program` text NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` enum('terlaksana','mendatang') NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_program`
--

INSERT INTO `tb_program` (`id_program`, `judul_program`, `artikel_program`, `tanggal`, `kategori`, `pengarang`, `img`) VALUES
(1, 'Wahyu Triono', 'Alhamdulillah wahyu mualaf', '2022-07-02', 'terlaksana', 'Raihan Febriyansah', 'darani.png'),
(2, 'Wahyu Triono', 'Wahyu sholat jumat', '2022-07-02', 'mendatang', 'Raihan Febriyansah', 'darani.png'),
(3, 'Vaksinasi Covid-19', 'Sudah terlaksana pada xxxx', '2022-07-22', 'terlaksana', 'Raihan Febriyansah', 'program-desa-1.jpg'),
(4, 'asdasdsadasdsad', 'wahyu jelek :v', '2022-07-24', 'mendatang', 'Raihan Febriyansah', 'Tanda-tangan.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id_struktur` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `img`) VALUES
(1, 'Struktur.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tingkat_user`
--

CREATE TABLE `tb_tingkat_user` (
  `id_tingkat_user` int(11) NOT NULL,
  `tingkat_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tingkat_user`
--

INSERT INTO `tb_tingkat_user` (`id_tingkat_user`, `tingkat_user`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_tingkat_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `nama_pengguna`, `img`, `id_tingkat_user`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Raihan Febriyansah', 'men.png', 1),
(3, 'afifa', 'afa18965d04a659f73f336f489bffc6e', 'afifatunnimah', 'women.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indexes for table `tb_program`
--
ALTER TABLE `tb_program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `tb_tingkat_user`
--
ALTER TABLE `tb_tingkat_user`
  ADD PRIMARY KEY (`id_tingkat_user`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_tingkat_user` (`id_tingkat_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_program`
--
ALTER TABLE `tb_program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tingkat_user`
--
ALTER TABLE `tb_tingkat_user`
  MODIFY `id_tingkat_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`id_tingkat_user`) REFERENCES `tb_tingkat_user` (`id_tingkat_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
