-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 01:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_lapkinerja`
--

CREATE TABLE `tabel_lapkinerja` (
  `tname` varchar(255) NOT NULL,
  `tjabatan` varchar(255) NOT NULL,
  `topd` varchar(255) NOT NULL,
  `tnipatasan` varchar(18) NOT NULL,
  `tnameatasan` varchar(255) NOT NULL,
  `rencana` varchar(255) NOT NULL,
  `target` int(225) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `waktu` int(2) NOT NULL,
  `tlaporankinerja` varchar(255) NOT NULL,
  `targetlaporan` int(8) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `tpersen` int(50) NOT NULL,
  `id` int(11) NOT NULL,
  `NIP` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_lapkinerja`
--

INSERT INTO `tabel_lapkinerja` (`tname`, `tjabatan`, `topd`, `tnipatasan`, `tnameatasan`, `rencana`, `target`, `satuan`, `waktu`, `tlaporankinerja`, `targetlaporan`, `status`, `tpersen`, `id`, `NIP`) VALUES
('YUNI ROSDIAH, S.IP., M.Si', 'KEPALA BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA KOTA PONTIANAK', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '196404211989031013', 'DR. H. Mulyadi, M.Si', '', 0, '', 0, '1 Kegiatan', 0, 0, 100, 1, '196906061989032007'),
('UMMI NASIROH, SH., MH', 'KEPALA BIDANG DISIPLIN DAN KESEJAHTERAAN APARATUR', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '196906061989032007', 'YUNI ROSDIAH, S.IP., M.Si', '', 0, '', 0, '3 Laporan', 0, 0, 70, 2, '196906061989032007'),
('WULANDA ANJASWARI, S.STP., M.Si(HAN)', 'Analis Kebijakan Muda', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '196608041986012001', 'UMMI NASIROH, SH., MH', '', 0, '', 0, '1 Laporan', 0, 1, 20, 3, '198601222004122001'),
('FAUZIA SANTI, S.Sos', 'Analis Kinerja', 'BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA', '198601222004122001', 'WULANDA ANJASWARI, S.STP., M.Si(HAN)', 'Analisa SKP', 3, 'Laporan', 5, 'Laporan Kegiatan', 2, 0, 0, 4, '198107252000032001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `gol` varchar(255) NOT NULL,
  `opd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_lapkinerja`
--
ALTER TABLE `tabel_lapkinerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_lapkinerja`
--
ALTER TABLE `tabel_lapkinerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
