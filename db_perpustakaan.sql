-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 02:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `prodi`) VALUES
(2032011021, 'Adiasya Binawan', 'bandung', '2002-02-09', 'Laki-laki', 'S1 Teknik Informatika'),
(2032011022, 'Andra Syuryahman', 'bandung', '2002-02-09', 'Laki-laki', 'S1 Teknik Informatika'),
(2032011026, 'Candra Wali Sanjaya', 'Bandung', '2001-01-01', 'Laki-laki', 'S1 -Teknik Informatika'),
(2032011028, 'Evita Rizkia Rabbani', 'bandung', '2002-02-09', 'Perempuan', 'S1 Teknik Informatika'),
(2032011030, 'Gege Hanif Patiro Sya\'ban', 'bandung', '2002-02-09', 'Laki-laki', 'S1 Teknik Informatika'),
(2032011033, ' Jeje Zaeni', 'bandung', '2002-02-09', 'Laki-laki', 'S1 Teknik Informatika'),
(2032011034, 'Nabila Ramadhan', 'bandung', '2002-02-09', 'Perempuan', 'S1 Teknik Informatika'),
(2032011036, 'Rizal Maulana Sanjaya', 'bandung', '2002-02-09', 'Laki-laki', 'S1 Teknik Informatika'),
(2032011040, ' Adinda Kharisma ', 'bandung', '2002-02-09', 'Perempuan', 'S1 Teknik Informatika'),
(2032011042, 'Muhamad Faisal', 'Cimahi', '2001-09-08', 'Laki-laki', 'S1-Teknik Informatika'),
(2032011055, 'Nabila G Ramadhan', 'Bandung', '2001-02-13', 'Perempuan', 'S1 -Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `jumlah_buku` int(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tanggal_input`) VALUES
(14, ' 41 Script PHP Siap Pakaian', 'Yosef Murya', 'Jasakom', '2018', '9786020823249', 23, 'Rak 1', '2023-01-27'),
(15, 'Hackintosh: Jalankan Mac Os X', 'Macbook Pro', 'Jasakom', '2014', '9789791090933', 17, 'Rak 1', '2023-01-27'),
(16, 'Windows 7 Security', 'Yusmadi', 'Jasakom', '2010', '9789791090421', 3, 'Rak 1', '2023-01-27'),
(17, 'Membangun IT Savvy', 'Jogiyanto ', 'Andi', '2017', '9789792960297', 0, 'Rak 1', '2023-01-27'),
(18, 'CISCO Kung Fu', 'Aristo', 'Jasakom', '2017', '9786020823270', 21, 'Rak 1', '2023-01-27'),
(19, 'BackTrack 5 R3 : 100% Attack', 'Stephen', 'Jasakom', '2013', '9789791090797', 2, 'Rak 1', '2023-01-27'),
(20, 'Blogging : Have Fun', 'Carolina', 'Stiletto', '2016', '9786027572447', 14, 'Rak 1', '2023-01-27'),
(21, 'PHP Dan MYSQL', 'R.H. Sianipar', 'Andi', '2016', '9789792952810', 5, 'Rak 1', '2023-01-27'),
(22, 'Buku Sakti Pemrograman Web Seri PHP', 'Mundzir MF', 'Jasakom', '1994', '9789792960297', 10, 'Rak 1', '2023-01-27'),
(23, 'Matematika', 'Yusmadi', 'StartUp', '1994', '9789791090872', 20, 'Rak 1', '2023-01-27'),
(25, 'Sejarah Karawitan II', 'Rabimin, S.Kar', 'Gava Media', '2008', '978-602-8755-00-9', 11, 'Rak 1', '2023-01-27'),
(26, 'Akuntansi Pengantar 1', 'Supardi', 'Gava Media', '2009', '978-979-107-882-5', 1, 'Rak 2', '2023-01-27'),
(27, 'Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu', 'Samsulhadi', 'Sagung Seto', '2013', '978-979-328-876-5 	', 2, 'Rak 2', '2023-01-27'),
(28, 'Aplikasi Praktis Asuhan Keperawatan Keluarga', 'Komang Ayu Heni', 'Sagung Seto', '2012', '978-602-867-404-1', 2, 'Rak 2', '2023-01-27'),
(29, 'A-Z Psikologi : Berbagai kumpulan topik Psikologi', 'Zainul Anwar', 'Andi Offset', '2012', '978-979-293-215-7', 2, 'Rak 2', '2023-01-27'),
(30, 'Bangsa gagal ; Mencari identitas kebangsaan', 'Nasruddin Anshoriy', 'LKiS', '2008', '978-979-128-365-6', 2, 'Rak 2', '2023-01-27'),
(31, 'Biografi Gus Dur ; The Authorized Biography of KH. Abdurrahman Wahid (Soft Cover)', 'Greg Barton', 'LKiS', '2011', '978-979-338-125-1', 2, 'Rak 2', '2023-01-27'),
(32, 'Buku Ajar Tumbuh Kembang Remaja & Permasalahanya', 'Soetjiningsih', 'Sagung Seto', '2004', '979-328-808-6', 2, 'Rak 2', '2023-01-27'),
(33, 'Cedera Kepala', 'M. Z. Arifin', 'Sagung Seto', '2013', '978-602-867-497-3', 2, 'Rak 2', '2023-01-27'),
(34, 'Dasar Dasar Uroginekologi', 'Pribakti B', 'Sagung Seto', '2011', '978-602-867-451-5', 2, 'Rak 2', '2023-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_denda`
--

CREATE TABLE `tb_denda` (
  `id` int(11) NOT NULL,
  `denda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_denda`
--

INSERT INTO `tb_denda` (`id`, `denda`) VALUES
(1, '500');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasibuku`
--

CREATE TABLE `tb_lokasibuku` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasibuku`
--

INSERT INTO `tb_lokasibuku` (`id`, `lokasi`) VALUES
(1, 'Rak 1'),
(2, 'Rak 2'),
(3, 'Rak 3'),
(4, 'Rak 4'),
(5, 'Rak 5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `username`, `nama`, `password`, `level`, `foto`) VALUES
(10, 'faisal', 'Muhamad Faisal', 'faisal', 'admin', 'ganteng.jpg'),
(11, 'rektor', 'Muhamad Faisal', 'rektor', 'ks', 'ganteng.jpg'),
(12, 'petugas', 'Muhamad Faisal', 'petugas', 'petugas', 'ganteng.jpg'),
(22, 'admin', 'Muhamad Faisal', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'ganteng.jpg'),
(23, 'nabila', 'Nabila G Ramadhan', 'eec1b906b0c314e617235f13f0e6468d', 'petugas', 'index.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `nim` varchar(12) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `lambat` varchar(100) DEFAULT NULL,
  `denda` varchar(100) DEFAULT NULL,
  `status` enum('Pinjam','Kembali','Hilang','Lunas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nim`, `nama`, `tanggal_pinjam`, `tanggal_kembali`, `lambat`, `denda`, `status`) VALUES
(219, 'Hackintosh: Jalankan Mac Os X', '02032011043', 'Yoga Widianto', '2023-01-01', '2023-01-04', '', '', 'Lunas'),
(220, 'BackTrack 5 R3 : 100% Attack', '0203201104', 'Annisavira', '2023-01-15', '2023-01-30', '0 ', '0', 'Kembali'),
(221, 'Windows 7 Security', '02032011042', 'Muhamad Faisal', '2023-01-01', '2023-01-15', '15 ', '7500', 'Lunas'),
(222, 'Buku Sakti Pemrograman Web Seri PHP', '02032011044', 'Tyas Sekar', '2023-01-01', NULL, '0 ', '50000', 'Lunas'),
(223, 'PHP Dan MYSQL', '02032011045', 'Dadi Setiadi', '2023-01-15', '2023-01-24', '0 ', '0', 'Hilang'),
(224, 'Buku Sakti Pemrograman Web Seri PHP', '02032011046', 'Tyas Sekar', '2023-01-26', '2023-02-09', '0 ', '0', 'Lunas'),
(225, ' 41 Script PHP Siap Pakaian', '2032011042', 'Muhamad Faisal', '2023-01-15', '2023-01-29', NULL, NULL, 'Pinjam'),
(226, 'Windows 7 Security', '2032011055', 'Nabila G Ramadhan', '2023-01-15', '2023-01-22', NULL, NULL, 'Pinjam'),
(227, 'Akuntansi Pengantar 1', '2032011033', ' Jeje Zaeni', '2023-01-27', '2023-02-03', NULL, NULL, 'Pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_denda`
--
ALTER TABLE `tb_denda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lokasibuku`
--
ALTER TABLE `tb_lokasibuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_denda`
--
ALTER TABLE `tb_denda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_lokasibuku`
--
ALTER TABLE `tb_lokasibuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
