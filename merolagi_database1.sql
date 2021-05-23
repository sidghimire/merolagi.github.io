-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 02:50 PM
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
(16, '60a76864da68d', 'Flower Vase', '1234', '45', 'Material', 'Flowers are one of the most popular and effective table decorations in both the catering and the hotel industry. Depending on the overall style of the establishment, the flower vases used can enhance the overall splendour of the flowers. Whether made of Cromargan®, glass or a combination of materials, well-chosen flower vases enhance the beauty of any decoration and give your space that little something special.\n\n', '2021/05/21', '09:59:35'),
(17, '60a769934e587', 'Fool Bhada', '2345', '23456', 'Material', 'Browse our collection of crystal and glass vases designed to enhance your home. We offer a vast range of colours, shapes and sizes and feature both traditional and contemporary vase designs. Our vases have been lovingly created by hand, making them a beautiful addition to your home or a special gift. Perfect for personalisation to give your gift a personal touch.', '2021/05/21', '10:04:35'),
(18, '60a769acb3495', 'Fool Bhada', '2345', '23456', 'Material', 'Browse our collection of crystal and glass vases designed to enhance your home. We offer a vast range of colours, shapes and sizes and feature both traditional and contemporary vase designs. Our vases have been lovingly created by hand, making them a beautiful addition to your home or a special gift. Perfect for personalisation to give your gift a personal touch.', '2021/05/21', '10:05:00'),
(19, '60a76a100b3d5', 'Fool Bhada', '2345', '23456', 'Material', 'Browse our collection of crystal and glass vases designed to enhance your home. We offer a vast range of colours, shapes and sizes and feature both traditional and contemporary vase designs. Our vases have been lovingly created by hand, making them a beautiful addition to your home or a special gift. Perfect for personalisation to give your gift a personal touch.', '2021/05/21', '10:06:40'),
(20, '60a76a5010c5b', 'Fool Bhada', '2345', '23456', 'Material', 'Browse our collection of crystal and glass vases designed to enhance your home. We offer a vast range of colours, shapes and sizes and feature both traditional and contemporary vase designs. Our vases have been lovingly created by hand, making them a beautiful addition to your home or a special gift. Perfect for personalisation to give your gift a personal touch.', '2021/05/21', '10:07:44');

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
-- Table structure for table `db301`
--

CREATE TABLE `db301` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `productToken` varchar(255) NOT NULL,
  `userToken` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `uploadDate` varchar(100) NOT NULL,
  `uploadTime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db301`
--

INSERT INTO `db301` (`id`, `token`, `productToken`, `userToken`, `quantity`, `price`, `uploadDate`, `uploadTime`) VALUES
(4, '60a7ca5abb97b', '60a76864da68d', '124601633660a715d095d1c8.39797392', 122, 1500, '2021/05/21', '16:57:30'),
(5, '60a91c0c93c16', '60a76864da68d', '124601633660a715d095d1c8.39797392', 1, 1, '2021/05/22', '16:58:20'),
(6, '60a9cade2a89b', '60a76864da68d', '124601633660a715d095d1c8.39797392', 23, 2345, '2021/05/23', '05:24:14'),
(7, '60a9e59e8570f', '60a769934e587', '124601633660a715d095d1c8.39797392', 1, 234, '2021/05/23', '07:18:22'),
(8, '60aa00c867ea9', '60a76864da68d', '124601633660a715d095d1c8.39797392', 20, 1500, '2021/05/23', '09:14:16'),
(9, '60aa015626c1c', '60a76864da68d', '124601633660a715d095d1c8.39797392', 20, 1700, '2021/05/23', '09:16:38');

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
(20, '60a76864da68d', '111690511060a1fbefdab269.43244573', 'Flower-Vase', '2021/05/21', '09:59:35'),
(21, '60a769934e587', '111690511060a1fbefdab269.43244573', 'Fool-Bhada', '2021/05/21', '10:04:35'),
(22, '60a769acb3495', '111690511060a1fbefdab269.43244573', 'Fool-Bhada-1', '2021/05/21', '10:05:00'),
(23, '60a76a100b3d5', '111690511060a1fbefdab269.43244573', 'Fool-Bhada-2', '2021/05/21', '10:06:40'),
(24, '60a76a5010c5b', '111690511060a1fbefdab269.43244573', 'Fool-Bhada-3', '2021/05/21', '10:07:44');

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
(446, '60a76864da68d', 'Material', 'Leather', '2021/05/21', '09:59:35'),
(447, '60a76864da68d', 'Size', '34', '2021/05/21', '09:59:35'),
(448, '60a769934e587', 'Material', '2322', '2021/05/21', '10:04:35'),
(449, '60a769acb3495', 'Material', '2322', '2021/05/21', '10:05:00'),
(450, '60a76a100b3d5', 'Material', '2322', '2021/05/21', '10:06:40'),
(451, '60a76a5010c5b', 'Material', '2322', '2021/05/21', '10:07:44');

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
(8, '60a76864da68d', '60a768673816b.jpg', '', '2021/05/21', '09:59:35'),
(9, '60a769934e587', '60a769937d77a.jpg', '', '2021/05/21', '10:04:35'),
(10, '60a769acb3495', '60a769acdb156.jpg', '', '2021/05/21', '10:05:00'),
(11, '60a76a100b3d5', '60a76a108aeeb.jpg', '', '2021/05/21', '10:06:40'),
(12, '60a76a5010c5b', '60a76a508dc78.jpg', '', '2021/05/21', '10:07:44');

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
(50, '60a7650c3464e.jpg', '60a7650c34266', '2021/05/21', '09:45:16'),
(51, '60a7650c814d8.jpg', '60a7650c34266', '2021/05/21', '09:45:16'),
(52, '60a7650c89d92.jpg', '60a7650c34266', '2021/05/21', '09:45:16'),
(53, '60a7650c98025.jpg', '60a7650c34266', '2021/05/21', '09:45:16'),
(54, '60a7654a8f1bd.jpg', '60a7654a8edd5', '2021/05/21', '09:46:18'),
(55, '60a7654ad3f5d.jpg', '60a7654a8edd5', '2021/05/21', '09:46:18'),
(56, '60a7654b4989e.jpg', '60a7654a8edd5', '2021/05/21', '09:46:19'),
(57, '60a7654b6a416.jpg', '60a7654a8edd5', '2021/05/21', '09:46:19'),
(58, '60a76599e4b08.jpg', '60a76599e4720', '2021/05/21', '09:47:37'),
(59, '60a7659a0220c.jpg', '60a76599e4720', '2021/05/21', '09:47:38'),
(60, '60a7659a0a2f6.jpg', '60a76599e4720', '2021/05/21', '09:47:38'),
(61, '60a7659a123e0.jpg', '60a76599e4720', '2021/05/21', '09:47:38'),
(62, '60a765ca560e1.jpg', '60a765ca55cf9', '2021/05/21', '09:48:26'),
(63, '60a765ca5f16b.jpg', '60a765ca55cf9', '2021/05/21', '09:48:26'),
(64, '60a765ca6c846.jpg', '60a765ca55cf9', '2021/05/21', '09:48:26'),
(65, '60a765ca7b2aa.jpg', '60a765ca55cf9', '2021/05/21', '09:48:26'),
(66, '60a765ef5c2ff.jpg', '60a765ef5bf17', '2021/05/21', '09:49:03'),
(67, '60a7662bebdb0.jpg', '60a7662beb9c8', '2021/05/21', '09:50:03'),
(68, '60a7662c54fb6.jpg', '60a7662beb9c8', '2021/05/21', '09:50:04'),
(69, '60a7662cc8779.jpg', '60a7662beb9c8', '2021/05/21', '09:50:04'),
(70, '60a7662cd0863.jpg', '60a7662beb9c8', '2021/05/21', '09:50:04'),
(71, '60a7664a00ec6.jpg', '60a7664a00ade', '2021/05/21', '09:50:34'),
(72, '60a7664a0baa9.jpg', '60a7664a00ade', '2021/05/21', '09:50:34'),
(73, '60a7664a13b93.jpg', '60a7664a00ade', '2021/05/21', '09:50:34'),
(74, '60a7664a1bc7d.jpg', '60a7664a00ade', '2021/05/21', '09:50:34'),
(75, '60a766892822b.jpg', '60a7668927e43', '2021/05/21', '09:51:37'),
(76, '60a7668934966.jpg', '60a7668927e43', '2021/05/21', '09:51:37'),
(77, '60a766893aef7.jpg', '60a7668927e43', '2021/05/21', '09:51:37'),
(78, '60a7668944b3a.jpg', '60a7668927e43', '2021/05/21', '09:51:37'),
(79, '60a766fc5e7a9.jpg', '60a766fc5e3c1', '2021/05/21', '09:53:32'),
(80, '60a766fc6c26d.jpg', '60a766fc5e3c1', '2021/05/21', '09:53:32'),
(81, '60a766fc756df.jpg', '60a766fc5e3c1', '2021/05/21', '09:53:32'),
(82, '60a766fc7f321.jpg', '60a766fc5e3c1', '2021/05/21', '09:53:32'),
(83, '60a7671aae7e0.jpg', '60a7671aae3f8', '2021/05/21', '09:54:02'),
(84, '60a7671abce5b.jpg', '60a7671aae3f8', '2021/05/21', '09:54:02'),
(85, '60a7671b10c84.jpg', '60a7671aae3f8', '2021/05/21', '09:54:03'),
(86, '60a7671b1a0f6.jpg', '60a7671aae3f8', '2021/05/21', '09:54:03'),
(87, '60a76736a22ff.jpg', '60a76736a1f17', '2021/05/21', '09:54:30'),
(88, '60a76736ada99.jpg', '60a76736a1f17', '2021/05/21', '09:54:30'),
(89, '60a76736b5b83.jpg', '60a76736a1f17', '2021/05/21', '09:54:30'),
(90, '60a76736c8c38.jpg', '60a76736a1f17', '2021/05/21', '09:54:30'),
(91, '60a7676c6f6cb.jpg', '60a7676c6f2e3', '2021/05/21', '09:55:24'),
(92, '60a7676c7e8ff.jpg', '60a7676c6f2e3', '2021/05/21', '09:55:24'),
(93, '60a7676c8bfda.jpg', '60a7676c6f2e3', '2021/05/21', '09:55:24'),
(94, '60a7676caaff9.jpg', '60a7676c6f2e3', '2021/05/21', '09:55:24'),
(95, '60a767a3bbe17.jpg', '60a767a3bba2f', '2021/05/21', '09:56:19'),
(96, '60a767a3ca492.jpg', '60a767a3bba2f', '2021/05/21', '09:56:19'),
(97, '60a767a3d7f56.jpg', '60a767a3bba2f', '2021/05/21', '09:56:19'),
(98, '60a767a3e0040.jpg', '60a767a3bba2f', '2021/05/21', '09:56:19'),
(99, '60a7681a3f8f0.jpg', '60a7681a3f508', '2021/05/21', '09:58:18'),
(100, '60a7681a72194.jpg', '60a7681a3f508', '2021/05/21', '09:58:18'),
(101, '60a7681a938c4.jpg', '60a7681a3f508', '2021/05/21', '09:58:18'),
(102, '60a7681a9d506.jpg', '60a7681a3f508', '2021/05/21', '09:58:18'),
(103, '60a7683c33566.jpg', '60a7683c3317e', '2021/05/21', '09:58:52'),
(104, '60a7683c67962.jpg', '60a7683c3317e', '2021/05/21', '09:58:52'),
(105, '60a7683c6fa4c.jpg', '60a7683c3317e', '2021/05/21', '09:58:52'),
(106, '60a7683c7b1e7.jpg', '60a7683c3317e', '2021/05/21', '09:58:52'),
(107, '60a76864daa75.jpg', '60a76864da68d', '2021/05/21', '09:59:32'),
(108, '60a768651a461.jpg', '60a76864da68d', '2021/05/21', '09:59:33'),
(109, '60a768657075e.jpg', '60a76864da68d', '2021/05/21', '09:59:33'),
(110, '60a7686613f09.jpg', '60a76864da68d', '2021/05/21', '09:59:34'),
(111, '60a768669c6c1.jpg', '60a76864da68d', '2021/05/21', '09:59:34'),
(112, '60a768dc024ca.jpg', '60a768dc020e2', '2021/05/21', '10:01:32'),
(113, '60a768dc393bf.jpg', '60a768dc020e2', '2021/05/21', '10:01:32'),
(114, '60a768dcd7724.jpg', '60a768dc020e2', '2021/05/21', '10:01:32'),
(115, '60a768dce174e.jpg', '60a768dc020e2', '2021/05/21', '10:01:32'),
(116, '60a7692944906.jpg', '60a769294451e', '2021/05/21', '10:02:49'),
(117, '60a7692984c6d.jpg', '60a769294451e', '2021/05/21', '10:02:50'),
(118, '60a7692a0b33a.jpg', '60a769294451e', '2021/05/21', '10:02:50'),
(119, '60a7692a27c48.jpg', '60a769294451e', '2021/05/21', '10:02:50'),
(120, '60a76979af27f.jpg', '60a76979aee97', '2021/05/21', '10:04:09'),
(121, '60a76979bbda2.jpg', '60a76979aee97', '2021/05/21', '10:04:09'),
(122, '60a76979cabed.jpg', '60a76979aee97', '2021/05/21', '10:04:09'),
(123, '60a76979d82c8.jpg', '60a76979aee97', '2021/05/21', '10:04:09'),
(124, '60a769934e96f.jpg', '60a769934e587', '2021/05/21', '10:04:35'),
(125, '60a769935b87a.jpg', '60a769934e587', '2021/05/21', '10:04:35'),
(126, '60a7699364cec.jpg', '60a769934e587', '2021/05/21', '10:04:35'),
(127, '60a7699376a18.jpg', '60a769934e587', '2021/05/21', '10:04:35'),
(128, '60a769acb387d.jpg', '60a769acb3495', '2021/05/21', '10:05:00'),
(129, '60a769acc2ab0.jpg', '60a769acb3495', '2021/05/21', '10:05:00'),
(130, '60a769acc9bfa.jpg', '60a769acb3495', '2021/05/21', '10:05:00'),
(131, '60a769acd0573.jpg', '60a769acb3495', '2021/05/21', '10:05:00'),
(132, '60a76a100b7bd.jpg', '60a76a100b3d5', '2021/05/21', '10:06:40'),
(133, '60a76a1036f17.jpg', '60a76a100b3d5', '2021/05/21', '10:06:40'),
(134, '60a76a107a92f.jpg', '60a76a100b3d5', '2021/05/21', '10:06:40'),
(135, '60a76a1081e61.jpg', '60a76a100b3d5', '2021/05/21', '10:06:40'),
(136, '60a76a501a0cd.jpg', '60a76a5010c5b', '2021/05/21', '10:07:44'),
(137, '60a76a5025098.jpg', '60a76a5010c5b', '2021/05/21', '10:07:44'),
(138, '60a76a502ecda.jpg', '60a76a5010c5b', '2021/05/21', '10:07:44'),
(139, '60a76a5062136.jpg', '60a76a5010c5b', '2021/05/21', '10:07:44');

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
-- Indexes for table `db301`
--
ALTER TABLE `db301`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `db201`
--
ALTER TABLE `db201`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db301`
--
ALTER TABLE `db301`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `db1020`
--
ALTER TABLE `db1020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `db1021`
--
ALTER TABLE `db1021`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT for table `db1022`
--
ALTER TABLE `db1022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `db1023`
--
ALTER TABLE `db1023`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
