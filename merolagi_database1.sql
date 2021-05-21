-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 04:15 AM
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
-- Database: `merolagi_database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `db101`
--

CREATE TABLE `db101` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db101`
--

INSERT INTO `db101` (`id`, `token`, `email`, `pswd`, `username`, `date`, `time`) VALUES
(15, '111690511060a1fbefdab269.43244573', 'email', '$2y$10$EjVPrJ1Stt0z1n9VHV.2ueTGXs0ghxkBEZ.NvadeQzgRupNwBk7wy', 'username', '2021/05/17', '07:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `db102`
--

CREATE TABLE `db102` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `uploadDate` varchar(100) NOT NULL,
  `uploadTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db102`
--

INSERT INTO `db102` (`id`, `token`, `name`, `price`, `quantity`, `category`, `description`, `uploadDate`, `uploadTime`) VALUES
(12, '60a5e14e27f2d', 'The Princeton Review:Cracking The SAT Premium 2019', '123', '123', 'Material', 'This is SAT Book', '2021/05/20', '06:10:54'),
(13, '60a5e74baee37', 'The Princeton Review:Cracking The SAT Premium 2019', '1234', '1234', 'Material', '1234567890-=-0987654321`', '2021/05/20', '06:36:28'),
(14, '60a5e79397b90', 'The Princeton Review:Cracking The SAT Premium 2019', '1234', '1234', 'Material', '1234567890-=-0987654321`', '2021/05/20', '06:37:39'),
(15, '60a5e80274e4d', 'The Princeton Review:Cracking The SAT Premium 2019', '1234', '1234', 'Material', '1234567890-=-0987654321`', '2021/05/20', '06:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `db201`
--

CREATE TABLE `db201` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db201`
--

INSERT INTO `db201` (`id`, `token`, `email`, `pswd`, `username`, `date`, `time`) VALUES
(16, '124601633660a715d095d1c8.39797392', 'email', '$2y$10$gBtwn.dcvP6gyuLPFCy7s.AbMYdfltC8eJjDZyVX5Ds45YvJxt.rK', 'username', '2021/05/21', '04:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `db1020`
--

CREATE TABLE `db1020` (
  `id` int(11) NOT NULL,
  `productToken` varchar(255) NOT NULL,
  `userToken` varchar(255) NOT NULL,
  `alias` text NOT NULL,
  `uploadDate` varchar(255) NOT NULL,
  `uploadTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db1020`
--

INSERT INTO `db1020` (`id`, `productToken`, `userToken`, `alias`, `uploadDate`, `uploadTime`) VALUES
(16, '60a5e14e27f2d', '111690511060a1fbefdab269.43244573', 'The-Princeton-Review-Cracking-The-SAT-Premium-2019', '2021/05/20', '06:10:54'),
(17, '60a5e74baee37', '111690511060a1fbefdab269.43244573', 'The-Princeton-Review-Cracking-The-SAT-Premium-2019-1', '2021/05/20', '06:36:28'),
(18, '60a5e79397b90', '111690511060a1fbefdab269.43244573', 'The-Princeton-Review-Cracking-The-SAT-Premium-2019-2', '2021/05/20', '06:37:39'),
(19, '60a5e80274e4d', '111690511060a1fbefdab269.43244573', 'The-Princeton-Review-Cracking-The-SAT-Premium-2019-3', '2021/05/20', '06:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `db1021`
--

CREATE TABLE `db1021` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `uploadDate` varchar(100) NOT NULL,
  `uploadTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db1021`
--

INSERT INTO `db1021` (`id`, `token`, `title`, `value`, `uploadDate`, `uploadTime`) VALUES
(443, '60a5e80274e4d', 'Material', '234567', '2021/05/20', '06:39:32'),
(444, '60a5e80274e4d', 'Size', '345676543', '2021/05/20', '06:39:32'),
(445, '60a5e80274e4d', 'Material', '4356787654', '2021/05/20', '06:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `db1022`
--

CREATE TABLE `db1022` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `uploadDate` varchar(100) NOT NULL,
  `uploadTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db1022`
--

INSERT INTO `db1022` (`id`, `token`, `image`, `type`, `uploadDate`, `uploadTime`) VALUES
(4, '60a5e14e27f2d', '60a5e14ec04d1.jpg', '', '2021/05/20', '06:10:54'),
(5, '60a5e74baee37', '60a5e74c32623.jpg', '', '2021/05/20', '06:36:28'),
(6, '60a5e79397b90', '60a5e793eabc4.jpg', '', '2021/05/20', '06:37:39'),
(7, '60a5e80274e4d', '60a5e8041e3f3.jpg', '', '2021/05/20', '06:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `db1023`
--

CREATE TABLE `db1023` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `uploadDate` varchar(100) NOT NULL,
  `uploadTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db1023`
--

INSERT INTO `db1023` (`id`, `image`, `token`, `uploadDate`, `uploadTime`) VALUES
(30, '60a5e14e28315.jpg', '60a5e14e27f2d', '2021/05/20', '06:10:54'),
(31, '60a5e14e86ecc.jpg', '60a5e14e27f2d', '2021/05/20', '06:10:54'),
(32, '60a5e14e964e7.jpg', '60a5e14e27f2d', '2021/05/20', '06:10:54'),
(33, '60a5e14ea7a43.jpg', '60a5e14e27f2d', '2021/05/20', '06:10:54'),
(34, '60a5e14eb6c77.jpg', '60a5e14e27f2d', '2021/05/20', '06:10:54'),
(35, '60a5e74baf220.jpg', '60a5e74baee37', '2021/05/20', '06:36:27'),
(36, '60a5e74be0353.jpg', '60a5e74baee37', '2021/05/20', '06:36:27'),
(37, '60a5e74beaf36.jpg', '60a5e74baee37', '2021/05/20', '06:36:27'),
(38, '60a5e74c04ba1.jpg', '60a5e74baee37', '2021/05/20', '06:36:28'),
(39, '60a5e74c2bcaa.jpg', '60a5e74baee37', '2021/05/20', '06:36:28'),
(40, '60a5e79397f78.jpg', '60a5e79397b90', '2021/05/20', '06:37:39'),
(41, '60a5e793a9ca4.jpg', '60a5e79397b90', '2021/05/20', '06:37:39'),
(42, '60a5e793c4e43.jpg', '60a5e79397b90', '2021/05/20', '06:37:39'),
(43, '60a5e793d01f5.jpg', '60a5e79397b90', '2021/05/20', '06:37:39'),
(44, '60a5e793dd4e9.jpg', '60a5e79397b90', '2021/05/20', '06:37:39'),
(45, '60a5e80275235.jpg', '60a5e80274e4d', '2021/05/20', '06:39:30'),
(46, '60a5e802cefca.jpg', '60a5e80274e4d', '2021/05/20', '06:39:30'),
(47, '60a5e8032f146.jpg', '60a5e80274e4d', '2021/05/20', '06:39:31'),
(48, '60a5e803a5401.jpg', '60a5e80274e4d', '2021/05/20', '06:39:31'),
(49, '60a5e803eb52a.jpg', '60a5e80274e4d', '2021/05/20', '06:39:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db101`
--
ALTER TABLE `db101`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `db102`
--
ALTER TABLE `db102`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `db201`
--
ALTER TABLE `db201`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `db1020`
--
ALTER TABLE `db1020`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productToken` (`productToken`),
  ADD UNIQUE KEY `alias` (`alias`) USING HASH;

--
-- Indexes for table `db1021`
--
ALTER TABLE `db1021`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db1022`
--
ALTER TABLE `db1022`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `db1023`
--
ALTER TABLE `db1023`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db101`
--
ALTER TABLE `db101`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `db102`
--
ALTER TABLE `db102`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `db201`
--
ALTER TABLE `db201`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db1020`
--
ALTER TABLE `db1020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `db1021`
--
ALTER TABLE `db1021`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT for table `db1022`
--
ALTER TABLE `db1022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db1023`
--
ALTER TABLE `db1023`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
