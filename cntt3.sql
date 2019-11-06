-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 10:05 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cntt3`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `image` text DEFAULT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `email`, `title`, `image`, `time`) VALUES
(1, 'doantung98hy@gmail.com', 'Ban dang lam gi', '1.png', '2019-11-06'),
(2, 'vuthuong@gmail.com', 'chuc moi nguoi vui ve', '1.png', '2019-11-06'),
(4, 'vuthuong@gmail.com', 'aaaaaaaaaaa', 'anh2.jpg', '0000-00-00'),
(102, 'doantung98hy@gmail.com', 'aaaaa', 'anh2.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `Hoten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id`, `Hoten`, `email`, `password`, `ngaysinh`, `gioitinh`) VALUES
(1, 'Doan Tung', 'doantung98hy@gmail.com', '202cb962ac59075b964b07152d234b70', '1998-06-22', 'Nam'),
(2, 'Vu Thuong', 'vuthuong@gmail.com', '202cb962ac59075b964b07152d234b70', '1998-06-14', 'Nu');

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`email`, `password`) VALUES
('doantung98hy@gmail.com', '202cb962ac59075b964b07152d234b70'),
('vuthuong@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `trangcanhan`
--

CREATE TABLE `trangcanhan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` text NOT NULL,
  `coverImage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trangcanhan`
--

INSERT INTO `trangcanhan` (`id`, `email`, `avatar`, `coverImage`) VALUES
(1, 'doantung98hy@gmail.com', '3.jpg', NULL),
(2, 'vuthuong@gmail.com', '3.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `trangcanhan`
--
ALTER TABLE `trangcanhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trangcanhan`
--
ALTER TABLE `trangcanhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
