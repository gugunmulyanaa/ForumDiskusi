-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2021 pada 14.04
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ultra_community`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_beranda`
--

CREATE TABLE IF NOT EXISTS `tb_beranda` (
  `id_beranda` int(11) NOT NULL,
  `intro` varchar(200) NOT NULL,
  `beranda` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_beranda`
--

INSERT INTO `tb_beranda` (`id_beranda`, `intro`, `beranda`) VALUES
(1, 'SELAMAT DATANG DI IBLOGGO', 'Forum diskusi adalah aplikasi yang di buat untuk mendiskusikan berbagai hal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
`id_berita` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `no_gambar` varchar(20) NOT NULL,
  `nia` varchar(50) NOT NULL,
  `hits` int(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kategori`, `pengirim`, `judul`, `isi`, `date`, `gambar`, `no_gambar`, `nia`, `hits`, `status`) VALUES
(18, 1, 'Aldi', 'UNSERA', 'Unsera Berada di kota serang', '2021-01-17', 'images_(1).jpg', 'no', '202115001', 2, 0),
(20, 1, 'Gugun', 'Informatika', 'Teknik Informatika merupakan salah satu jurusan pendidikan tingkat perguruan tinggi yang mempelajari serta menerapkan prinsip-prinsip ilmu komputer dan analisis matematis dalam perancangan, pengujian, pengembangan, dan evaluasi sistem operasi, perangkat lunak (software), dan kinerja komputer. ', '2021-01-17', 'programmer-5bdd6a0543322f4afc64ebe5.jpg', 'no', '201632002', 11, 0),
(21, 9, 'Akmal', 'PC geming', 'Mau lihat PC gaming ku...', '2021-01-17', 'gaming-cpu-cabinate-500x500_(1).jpg', 'no', '201632002', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
`id_kategori` int(10) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Berita'),
(2, 'Project'),
(3, 'Loker'),
(9, 'Curhat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE IF NOT EXISTS `tb_komentar` (
`id_komentar` int(10) NOT NULL,
  `id_berita` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `isi_pesan` text NOT NULL,
  `nia` bigint(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_berita`, `nama_lengkap`, `isi_pesan`, `nia`) VALUES
(1, 10, 'John Connor', 'Bagusss gan artikelnya', 201601001),
(2, 10, 'Aldan Bran', 'Gw prefer suka Xiaomi gan daripada IPIN', 201602001),
(5, 11, 'John Connor', 'sepi amat thread gw ', 201601001),
(6, 11, 'Admin', '@John Connor : gw admin disini jgn nyepam se enaknya lu!', 201632002),
(7, 11, 'Aldan Bran', 'rame amat ini thread wkwkwkwk', 201602001),
(11, 11, 'Ipin ', 'Admin lu heboh amat', 201602004),
(12, 10, 'Ipin ', 'gw suka esia ', 201602004),
(16, 11, 'Aldan Bran', 'apaan nih rame amat', 201602001),
(17, 13, 'Aldan Bran', 'Bagus gan', 201602001),
(18, 16, 'aldi', 'iya ', 202115001),
(19, 16, 'akmal', 'beli dong\r\n', 202115002),
(22, 20, 'aldi', 'Saya mahasiswa semester 5 di informatika', 202115001),
(23, 20, 'akmal', 'oh iya,kita satu jurusan', 202115002);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
`nia` bigint(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=202115003 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`nia`, `nama`, `fakultas`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `telepon`, `angkatan`, `avatar`, `username`, `password`) VALUES
(201601001, 'John Connor', 'FIKI', 'Bandung', '09/26/1882', 'laki', 'islam', '089672377544', '12', 'avatar_08.png', 'johnconnor', 'johnconnor'),
(201602001, 'Aldan Bran', 'Fakultas Ekonomi', 'Bandung', '11/22/1992', 'laki', 'islam', '089672377522', '15', 'team-3.jpg', 'aldz', 'aldz'),
(201602002, 'Neil Stiven', 'FIKI', 'Bandung', '04/20/1882', 'laki', 'islam', '089723232323', '15', 'img10-large.jpg', 'neil', 'neil'),
(201602003, 'Malik jaen', 'FE', 'Cimahi', '10/24/1992', 'laki', 'islam', '081220453451', '15', 'img05-large.jpg', 'malik', 'malik'),
(201632002, 'Admin', 'FIKI', 'sw', '12/16/2015', 'laki', 'islam', '3232', '15', 'avatar_071.png', 'admin', 'admin'),
(202115001, 'aldi', 'FE', 'serang', '02mei', 'laki', 'islam', '0877731301234', '12', '19379859_139436213298311_7423663049136930816_n.jpg', 'aldi', 'aldi'),
(202115002, 'akmal', 'FTI', 'Serang', '01/15/2021', 'laki', 'islam', '0877731301234', '15', 'fa26c287c2784e14477ec5494a208b71_png_wh860.png', 'akmal', 'akmal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(10) NOT NULL,
  `id_no` bigint(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `level` enum('admin','mhs') NOT NULL,
  `status` enum('notpublish','publish') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `id_no`, `username`, `password`, `nama`, `avatar`, `level`, `status`) VALUES
(1, 201632002, 'admin', 'admin', 'Admin', 'verly.png', 'admin', 'publish'),
(7, 201601001, 'johnconnor', 'johnconnor', 'John Connor', 'avatar_08.png', 'mhs', 'publish'),
(8, 201602001, 'aldz', 'aldz', 'Aldan Bran', 'team-3.jpg', 'mhs', 'publish'),
(9, 201602002, 'neil', 'neil', 'Neil Stiven', 'img10-large.jpg', 'mhs', 'notpublish'),
(10, 201602003, 'malik', 'malik', 'Malik jaen', 'img05-large.jpg', 'mhs', 'publish'),
(12, 202115001, 'aldi', 'aldi', 'aldi', '19379859_139436213298311_7423663049136930816_n.jpg', 'mhs', 'publish'),
(13, 202115002, 'akmal', 'akmal', 'akmal', 'fa26c287c2784e14477ec5494a208b71_png_wh860.png', 'mhs', 'publish');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi`
--

CREATE TABLE IF NOT EXISTS `tb_visi` (
  `id_visi` int(11) NOT NULL,
  `visi_misi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_visi`
--

INSERT INTO `tb_visi` (`id_visi`, `visi_misi`) VALUES
(1, '1. pancasila <br>\r\n2. apa aja <br>\r\n3. blabalblaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_beranda`
--
ALTER TABLE `tb_beranda`
 ADD PRIMARY KEY (`id_beranda`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
 ADD PRIMARY KEY (`nia`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_visi`
--
ALTER TABLE `tb_visi`
 ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
MODIFY `nia` bigint(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=202115003;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
