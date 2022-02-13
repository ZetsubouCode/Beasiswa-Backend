-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 03:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerx4333_dbinterbusih`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblakademikmahasiswa`
--

CREATE TABLE `tblakademikmahasiswa` (
  `idakademik` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `perguruantinggi` varchar(50) NOT NULL,
  `programstudi` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `tahunajaran` varchar(20) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `urltranskrip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblakademikmahasiswa`
--

INSERT INTO `tblakademikmahasiswa` (`idakademik`, `email`, `username`, `perguruantinggi`, `programstudi`, `semester`, `tahunajaran`, `ipk`, `urltranskrip`) VALUES
(31, 'mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Psikologi', 'Genap', '2020', '4.00', 'PhotoGrid_Plus_1610890919526.jpg'),
(32, 'mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Psikologi', 'Ganjil', '2020', '4.00', 'images (15).jpeg'),
(33, 'dita@gmail.com', 'dita', '', '', 'Ganjil', '2021', '3.67', 'images (19).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tblakademiksiswa`
--

CREATE TABLE `tblakademiksiswa` (
  `idakademik` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `tahunajaran` varchar(20) NOT NULL,
  `nilairatarata` varchar(10) NOT NULL,
  `urlraport` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblakademiksiswa`
--

INSERT INTO `tblakademiksiswa` (`idakademik`, `email`, `username`, `sekolah`, `jurusan`, `semester`, `tahunajaran`, `nilairatarata`, `urlraport`) VALUES
(28, 'pelajar@gmail.com', 'Pelajar', 'SMP 1 Mandiraja', '100', 'Genap', '2022', '100', 'https://firebasestorage.googleapis.com/v0/b/binterbusih.appspot.com/o/raports%2FPelajar2022Genap.pdf?alt=media&token=65218168-f6bf-4487-914e-66bed12c2'),
(29, 'pelajar@gmail.com', 'Pelajar', 'SMP 1 Mandiraja', '100', 'Genap', '2020', '100', 'https://firebasestorage.googleapis.com/v0/b/binterbusih.appspot.com/o/raports%2FPelajar2020Genap.pdf?alt=media&token=01788aa5-3c1b-4512-bcf4-bb3e2fbb3'),
(30, 'pelajar@gmail.com', 'Pelajar', 'SMP 1 Mandiraja', '100', 'Genap', '2025', '100', 'https://firebasestorage.googleapis.com/v0/b/binterbusih.appspot.com/o/raports%2FPelajar2025Genap.pdf?alt=media&token=ef203681-f820-461e-bccd-b2ccca956');

-- --------------------------------------------------------

--
-- Table structure for table `tbldataperbankan`
--

CREATE TABLE `tbldataperbankan` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `norekening` varchar(50) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `atasnama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldataperbankan`
--

INSERT INTO `tbldataperbankan` (`email`, `username`, `norekening`, `cabang`, `atasnama`) VALUES
('pelajar@gmail.com', 'Pelajar', '1122334455', 'BCA', 'Beni Okta'),
('mahasiswa@gmail.com', 'Mahasiswa', '2233440099', 'BCA', 'Rakha Surya'),
('test@gmail.com', 'Test', '', 'BCA', ''),
('cobamahasiswa@gmail.com', 'Coba Mahasiswa', '000999888', 'BCA', 'AtasNama'),
('cobapelajar@gmail.com', 'Coba Pelajar', '', 'BCA', ''),
('aldo@gmail.com', 'aldo', '', 'BCA', ''),
('percobaan@gmail.com', 'percobaan', '', 'BCA', ''),
('erwin@gmail.com', 'Erwin', '888777666555', 'BRI', 'Erwin Smith'),
('testing@gmail.com', 'Testing', '', 'BCA', ''),
('userpelajar@gmail.com', 'User Pelajar', '555666777888', 'BRI', 'Rivaldo Napitupulu'),
('dita@gmail.com', 'dita', '', 'BCA', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllembagastudi`
--

CREATE TABLE `tbllembagastudi` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `namalembagastudi` varchar(50) NOT NULL,
  `statusakreditasi` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `namafakultas` varchar(50) NOT NULL,
  `namajurusan` varchar(50) NOT NULL,
  `jenjangpendidikan` varchar(20) NOT NULL,
  `prestasikumulatif` varchar(20) NOT NULL,
  `prestasisemester` varchar(20) NOT NULL,
  `tanggalmasuk` varchar(20) NOT NULL,
  `tanggallulusdiharapkan` varchar(20) NOT NULL,
  `jenjangstudi` varchar(20) NOT NULL,
  `alamatlembaga` varchar(20) NOT NULL,
  `kabupatenkota` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `rekeninglembaga` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllembagastudi`
--

INSERT INTO `tbllembagastudi` (`email`, `username`, `namalembagastudi`, `statusakreditasi`, `jenis`, `namafakultas`, `namajurusan`, `jenjangpendidikan`, `prestasikumulatif`, `prestasisemester`, `tanggalmasuk`, `tanggallulusdiharapkan`, `jenjangstudi`, `alamatlembaga`, `kabupatenkota`, `telepon`, `rekeninglembaga`, `bank`) VALUES
('beni@gmail.com', 'Beni Okta', 'Universitas A', 'Jl. Salatiga', 'A', 'Swasta', 'Universitas Salatiga', 'Psikologi', '4.0', '4.0', '2017-08-29', '2021-08-29', 'S1', 'Jl. Salatiga', 'Salatiga', '082222333444', '222333444555666777', 'BCA'),
('shella@gmail.com', 'Shella', '', '', '', 'Swasta', '', '', '', '', '2021-08-30', '2021-08-30', 'D3', '', '', '', '', 'BCA'),
('mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Jl. Semarang', 'A', 'Swasta', 'Psikologi', 'Psikologi', '4', '4', '2018-09-27', '2022-09-27', 'S1', 'Jl. Semarang', 'Semarang', '082222333555666', '1122330099', 'BCA'),
('cobamahasiswa@gmail.com', 'Coba Mahasiswa', 'Univ A', 'AlamLembaga', 'A', 'Swasta', 'NFakultas', 'NJurusan', '4.00', '3.90', '2018-09-29', '2021-09-29', 'S1', 'AlamLembaga', 'Salatiga', '081999888777', '888777666', 'BCA'),
('aldo@gmail.com', 'aldo', '', '', '', 'Swasta', '', '', '', '', '2021-10-07', '2021-10-07', 'D3', '', '', '', '', 'BCA'),
('percobaan@gmail.com', 'percobaan', '', '', '', 'Swasta', '', '', '', '', '2021-10-07', '2021-10-07', 'D3', '', '', '', '', 'BCA'),
('dita@gmail.com', 'dita', '', '', '', 'Swasta', '', '', '', '', '2021-10-16', '2021-10-16', 'D3', '', '', '', '', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `tblorangtua`
--

CREATE TABLE `tblorangtua` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `tanggallahir` varchar(20) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `masihhidupayah` varchar(20) NOT NULL,
  `suku` varchar(20) NOT NULL,
  `pekerjaanayah` varchar(20) NOT NULL,
  `alamatlengkapayah` varchar(20) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `namaibu` varchar(20) NOT NULL,
  `masihhidupibu` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(20) NOT NULL,
  `alamatlengkapibu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorangtua`
--

INSERT INTO `tblorangtua` (`email`, `username`, `namaayah`, `tanggallahir`, `umur`, `masihhidupayah`, `suku`, `pekerjaanayah`, `alamatlengkapayah`, `notelp`, `namaibu`, `masihhidupibu`, `pekerjaanibu`, `alamatlengkapibu`) VALUES
('pelajar@gmail.com', 'Pelajar', 'Cueng', '1975-09-27', '41', 'Ya', 'Jawa', 'Pedagang', 'Jl. Mandiraja', '081333444555', 'Siti', 'Ya', 'Ibu Rumah Tangga', 'Jl. Mandiraja'),
('mahasiswa@gmail.com', 'Mahasiswa', 'Budi', '1971-09-27', '50', 'Ya', 'Jawa', 'Pedagang', 'Jl. Semarang', '082777888999', 'Siti ', 'Ya', 'Ibu Rumah Tangga', 'Jl. Semarang'),
('test@gmail.com', 'Test', '', '2021-09-27', '', 'Ya', '', '', '', '', '', 'Ya', '', ''),
('cobamahasiswa@gmail.com', 'Coba Mahasiswa', 'Ayah', '2021-09-29', '40', 'Ya', 'Jawa', 'Wiraswasta', 'AlamAyah', '089333444555', 'Ibu', 'Ya', 'Wiraswasta', 'AlamIbu'),
('cobapelajar@gmail.com', 'Coba Pelajar', '', '2021-09-29', '', 'Ya', '', '', '', '', '', 'Ya', '', ''),
('aldo@gmail.com', 'aldo', '', '2021-10-07', '', 'Ya', '', '', '', '', '', 'Ya', '', ''),
('percobaan@gmail.com', 'percobaan', '', '2021-10-07', '', 'Ya', '', '', '', '', '', 'Ya', '', ''),
('erwin@gmail.com', 'Erwin', 'Jono Smith', '1970-10-11', '51', 'Ya', 'Jawa', 'Pedagang', 'Jl. Salatiga Rt/Rw 0', '085353039627', 'Siti Smith', 'Ya', 'Ibu Rumah Tangga', 'Jl. Salatiga Rt/Rw'),
('userpelajar@gmail.com', 'User Pelajar', 'Budi Napitupulu', '1975-09-10', '47', 'Ya', 'Batak', 'Wiraswasta', 'Jl. Parakancanggah', '085000999888', 'Siti ', 'Ya', 'Ibu Rumah Tangga', 'Jl. Parakancanggah'),
('dita@gmail.com', 'dita', '', '2021-10-16', '', 'Ya', '', '', '', '', '', 'Ya', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblpelajar`
--

CREATE TABLE `tblpelajar` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sekolah` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `nilairatarataraporsmp` varchar(50) NOT NULL,
  `nilaisttbsmp` varchar(50) NOT NULL,
  `nilaiujianakhirsekolah` varchar(50) NOT NULL,
  `bahasaindonesia` varchar(50) NOT NULL,
  `bahasainggris` varchar(50) NOT NULL,
  `matematika` varchar(50) NOT NULL,
  `ipa` varchar(50) NOT NULL,
  `ips` varchar(50) NOT NULL,
  `fisika` varchar(50) NOT NULL,
  `kimia` varchar(50) NOT NULL,
  `biologi` varchar(50) NOT NULL,
  `geografi` varchar(50) NOT NULL,
  `ekonomi` varchar(50) NOT NULL,
  `sosiologi` varchar(50) NOT NULL,
  `teknologiinformasi` varchar(50) NOT NULL,
  `ektrakulikuler1` varchar(50) NOT NULL,
  `ektrakulikuler2` varchar(50) NOT NULL,
  `ektrakulikuler3` varchar(50) NOT NULL,
  `ektrakulikuler4` varchar(50) NOT NULL,
  `ektrakulikuler5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpelajar`
--

INSERT INTO `tblpelajar` (`email`, `username`, `sekolah`, `jurusan`, `nilairatarataraporsmp`, `nilaisttbsmp`, `nilaiujianakhirsekolah`, `bahasaindonesia`, `bahasainggris`, `matematika`, `ipa`, `ips`, `fisika`, `kimia`, `biologi`, `geografi`, `ekonomi`, `sosiologi`, `teknologiinformasi`, `ektrakulikuler1`, `ektrakulikuler2`, `ektrakulikuler3`, `ektrakulikuler4`, `ektrakulikuler5`) VALUES
('pelajar@gmail.com', 'Pelajar', 'SMP 1 Mandiraja', '100', '100', '100', '100', '100', '100', 'androidx.appcompat.widget.AppCompatEditText{b78bf4', '100', 'androidx.appcompat.widget.AppCompatEditText{9a6756', '100', '100', '100', '100', '100', '100', '100', '', '', '', '', ''),
('test@gmail.com', 'Test', '', '', '', '', '', '', '', 'androidx.appcompat.widget.AppCompatEditText{57d73c', '', 'androidx.appcompat.widget.AppCompatEditText{d4cf87', '', '', '', '', '', '', '', '', '', '', '', ''),
('cobapelajar@gmail.com', 'Coba Pelajar', '', '', '', '', '', '', '', 'androidx.appcompat.widget.AppCompatEditText{ad090b', '', 'androidx.appcompat.widget.AppCompatEditText{42b56c', '', '', '', '', '', '', '', 'PMI', 'Pramuka', 'Basket', 'Sepakbola', 'Bulutangkis'),
('erwin@gmail.com', 'Erwin', 'SMA N 1 Salatiga', '100', '95', '90', '85', '80', '75', '70', '65', '60', '55', '50', '45', '40', '35', '30', '25', 'Basket', 'Bulutangkis', 'Sepakbola', 'PMI', 'Catur'),
('userpelajar@gmail.com', 'User Pelajar', 'SMP 1 Salatiga', 'IPA', '100', '95', '90', '85', '80', '75', '70', '65', '60', '55', '50', '45', '40', '35', '30', 'Basket', 'PMI', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblpribadi`
--

CREATE TABLE `tblpribadi` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `namakeluarga` varchar(20) NOT NULL,
  `namadepan` varchar(20) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `noktp` varchar(20) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `alamatlengkap` varchar(50) NOT NULL,
  `urlphoto` varchar(50) NOT NULL,
  `alamattetap` varchar(50) NOT NULL,
  `alamatsementara` varchar(50) NOT NULL,
  `areaasal` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `suku` varchar(20) NOT NULL,
  `wilayahadat` varchar(20) NOT NULL,
  `tipemember` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpribadi`
--

INSERT INTO `tblpribadi` (`email`, `username`, `namakeluarga`, `namadepan`, `notelp`, `noktp`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `alamatlengkap`, `urlphoto`, `alamattetap`, `alamatsementara`, `areaasal`, `agama`, `suku`, `wilayahadat`, `tipemember`, `status`) VALUES
('pelajar@gmail.com', 'Pelajar', 'Okta', 'Beni', '081353039627', '111222333444555', 'Banjarnegara', '1999-09-27', 'Laki-Laki', 'Jl. Mandiraja', 'PhotoGrid_Plus_1610890894136.jpg', 'Jl. Mandiraja', 'Jl. Mandiraja', 'Banjarnegara', 'Islam', 'Jawa', 'Banjarnegara', 'Pelajar', 'Terima'),
('mahasiswa@gmail.com', 'Mahasiswa', 'Surya', 'Rakha', '082353039627', '222333444555666', 'Semarang', '1998-09-27', 'Laki-Laki', 'Jl. Semarang', 'Page not found-1.webp', 'Jl. Semarang', 'Jl. Semarang', 'Semarang', 'Islam', 'Jawa', 'Semarang', 'Mahasiswa', 'Terima'),
('test@gmail.com', 'Test', '', '', '', '', '', '2021-09-27', 'Laki-Laki', '', 'PhotoGrid_Plus_1610890947451.jpg', '', '', '', 'Islam', '', '', 'Pelajar', 'Tolak'),
('cobamahasiswa@gmail.com', 'Coba Mahasiswa', 'NKeluarga', 'NDepan', '081111222333', '111222333', 'Salatiga', '2021-09-29', 'Laki-Laki', 'AlamLengkap', 'Screenshot_20210925-172212.png', 'AlamTetap', 'AlamSementara', 'AreAsal', 'Islam', 'Jawa', 'AreAsal', 'Mahasiswa', 'Tolak'),
('cobapelajar@gmail.com', 'Coba Pelajar', '', '', '', '', '', '2021-09-29', 'Laki-Laki', '', '', '', '', '', 'Islam', '', '', 'Pelajar', 'Tolak'),
('aldo@gmail.com', 'aldo', '', '', '', '', '', '2021-10-07', 'Laki-Laki', '', '', '', '', '', 'Islam', '', '', 'Mahasiswa', 'Terima'),
('percobaan@gmail.com', 'percobaan', '', '', '', '', '', '2021-10-07', 'Laki-Laki', '', 'images (13).jpeg', '', '', '', 'Islam', '', '', 'Mahasiswa', ''),
('erwin@gmail.com', 'Erwin', 'Smith', 'Erwin', '089353039627', '999000111222333', 'Salatiga', '1999-10-11', 'Laki-Laki', 'Jl. Salatiga No 1', 'Log in.jpeg.jpg', 'Jl. Salatiga', 'Jl. Cemara', 'Salatiga', 'Islam', 'Jawa', 'Salatiga', 'Pelajar', 'Terima'),
('testing@gmail.com', 'Testing', '', '', '', '', '', '2021-10-11', 'Laki-Laki', '', '', '', '', '', 'Islam', '', '', 'Pelajar', 'Tolak'),
('userpelajar@gmail.com', 'User Pelajar', 'Napitupulu', 'Rivaldo', '081353039627', '11122233444', 'Tegal', '1999-10-11', 'Laki-Laki', 'Jl. Cemara', 'PhotoGrid_Plus_1610890894136.jpg', 'Jl. Parakancanggah', 'Jl. Cemara', 'Banjarnegara', 'Kristen', 'Batak', 'Banjarnegara', 'Pelajar', ''),
('dita@gmail.com', 'dita', 'Kunj', 'Dita', '', '', '', '2021-10-16', 'Laki-Laki', '', 'images (18).jpeg', '', '', '', 'Islam', '', '', 'Mahasiswa', 'Terima');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `tipemember` varchar(20) NOT NULL,
  `statusproses` varchar(20) NOT NULL,
  `fcm_token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel untuk menyimpan data user';

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `email`, `password`, `username`, `nohp`, `tipemember`, `statusproses`, `fcm_token`) VALUES
(1, 'coba@gmail.com', '123456', 'coba', '123456', 'Pelajar', 'Proses', NULL),
(2, 'admin@gmail.com', 'admin123', 'admin', '123456789', 'Admin', '', 'fvc6hTY4Ss-dIcqrbU88jb:APA91bGmdkmJMCJeW82-eqkpHq2IFS_84fmDqIFjVDDIbZ_nEjt59ksnOMJBUEZqURRofq7fSSq8JUKmpwIMRnesW6Q6N6Rwfh9iWViwPqNfZOHt6R00stvXA1ws7m7a49KtxnnrMnaA'),
(3, 'pelajar@gmail.com', 'pelajar123', 'Pelajar', '081231231231', 'Pelajar', 'Terima', NULL),
(4, 'mahasiswa@gmail.com', 'mahasiswa123', 'Mahasiswa', '081353039627', 'Mahasiswa', 'Terima', 'c2gABIXtQYmGPfIfhwY8F3:APA91bG0_rPNtAkwhbN8nYoX7RAqm-9VABhkeseGFYSkjNgSDV-kpRsA8j4NWsxtsk8zld9l2vCrIfZqntOO-zcYz-PbkfXmWnzKjFVqul_04ioNyxdrVgDEL7XowS260ep-KDRXMAzu'),
(5, 'test@gmail.com', 'test123', 'Test', '089222555888', 'Pelajar', 'Tolak', NULL),
(6, 'cobapelajar@gmail.com', 'cobapelajar123', 'Coba Pelajar', '081000111222', 'Pelajar', 'Tolak', NULL),
(7, 'cobamahasiswa@gmail.com', 'cobamahasiswa123', 'Coba Mahasiswa', '081111222333', 'Mahasiswa', 'Tolak', NULL),
(8, 'aldo@gmail.com', 'aldo123', 'aldo', '085353039627', 'Mahasiswa', 'Terima', NULL),
(9, 'percobaan@gmail.com', 'percobaan123', 'percobaan', '088353039627', 'Mahasiswa', 'Proses', NULL),
(10, 'erwin@gmail.com', 'erwin123', 'Erwin', '089353039627', 'Pelajar', 'Terima', NULL),
(11, 'testing@gmail.com', 'testing123', 'Testing', '081353039627', 'Pelajar', 'Tolak', NULL),
(12, 'userpelajar@gmail.com', 'pelajar', 'User Pelajar', '081353039627', 'Pelajar', 'Proses', NULL),
(13, 'dita@gmail.com', 'dita123', 'dita', '082555888666', 'Mahasiswa', 'Terima', NULL),
(14, 'kevkev@gmail.com', '123456', 'kevkev', '088123412342', 'Mahasiswa', 'Proses', NULL),
(15, 'k@gmail.com', '123456', 'kevkev', '08123123123', 'Pelajar', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblwisuda`
--

CREATE TABLE `tblwisuda` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `perguruantinggi` varchar(50) NOT NULL,
  `programstudi` varchar(50) NOT NULL,
  `jenjangpendidikan` varchar(50) NOT NULL,
  `tanggalselesai` varchar(20) NOT NULL,
  `ipk` varchar(20) NOT NULL,
  `urlijazah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwisuda`
--

INSERT INTO `tblwisuda` (`email`, `username`, `perguruantinggi`, `programstudi`, `jenjangpendidikan`, `tanggalselesai`, `ipk`, `urlijazah`) VALUES
('mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Psikologi', 'Psikologi', '2021-09-29', '4.00', 'PhotoGrid_Plus_16108'),
('mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Psikologi', 'Psikologi', '2021-09-29', '4.00', 'PhotoGrid_Plus_16108'),
('mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Psikologi', 'Psikologi', '2021-09-29', '4.00', ''),
('mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Psikologi', 'Psikologi', '2021-10-11', '3.90', 'PhotoGrid_Plus_16108'),
('mahasiswa@gmail.com', 'Mahasiswa', 'Universitas Semarang', 'Psikologi', 'Psikologi', '2021-10-16', '3.45', 'IMG_20210814_203005.'),
('dita@gmail.com', 'dita', '', '', '', '2021-10-16', '3.67', 'images (20).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblakademikmahasiswa`
--
ALTER TABLE `tblakademikmahasiswa`
  ADD PRIMARY KEY (`idakademik`);

--
-- Indexes for table `tblakademiksiswa`
--
ALTER TABLE `tblakademiksiswa`
  ADD PRIMARY KEY (`idakademik`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblakademikmahasiswa`
--
ALTER TABLE `tblakademikmahasiswa`
  MODIFY `idakademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblakademiksiswa`
--
ALTER TABLE `tblakademiksiswa`
  MODIFY `idakademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
