-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 07:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiwd2002`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `confirm_password`) VALUES
(2, 'Admin', 'admin@gmail.com', '01837229519', '1230', '1230'),
(4, 'MD OMAR FARUK', 'Alex@gmail.com', '01837229519', 'Omar', 'Omar'),
(12, 'Rasel Mia', 'Rasel120@gmail.com', '01232525522', 'Rasel', 'Rasel'),
(13, 'Jamal', 'Jamal@gmail.com', '01306269892', 'jamal', 'jamal'),
(15, 'MD OMAR FARUK', 'Farukbd302@gmail.com', '01837229519', '', ''),
(17, 'Hasan', 'HasanSir@gmail.com', '01235835892', '$2y$10$1vgMg.XY86qUtPal2bIP2etAdQWcIDUgbb8QR/uoia07fS5a6sdDy', 'Hasan120'),
(18, 'Tariq', 'Tqriq@gmail.com', '01332355625', '$2y$10$AaVHjaFB/NbCV5y3A6xpt.UhvQlEiuA.S3vmBKJfHmiuVclRbBBi2', 'Tar@#12'),
(19, 'Alex', 'Alexbd@gmail.com', '01835662562', '$2y$10$rv9/d4ehjgcWbxLU3ZIbj.yjfxid/hxfsjxHTrqJjSC6e4tXv2zK2', 'Alexbd@gmail.com'),
(20, 'shimul', 'Shimul2015@gmail.com', '0125632663', '$2y$10$6CuGslOXRM6t9D9JZr9oSOahjkJGjP0D9E871h.8UHISmLbrx7uli', 'shimul'),
(21, 'Jhon', 'Jhon@gmail.com', '01265626959', '$2y$10$bP07sD95du3y9wG7zUmLkegA1g/LVixRtWzBLuD2ww4T8wGnmRfRO', 'Jhon@gmail.com'),
(22, 'Omar Faruk', 'Omar@gamil.com', '01837229519', '$2y$10$6tSdfoo55HqZ/0VUQwkaG.oB47jfNhE94EYyIq1Z.eBZUA0b0rXLW', 'Omar10'),
(23, 'arif', 'arif@gmail.com', '023355656562', '$2y$10$478ZTkTz.HeYMnoFmQmnx.8cycXPlKvp7WD4igtSmT3RgRd1D2cny', 'arif@gmail.com'),
(24, 'niaz', 'niazkhan120@gmail.com', '01356633335', '$2y$10$oJI4oIM8G5w7c1WJJZLvIuOhZRP59vSEEuBYqTnog.xoWDB8qaQYm', 'niaz'),
(25, 'Nusrat', 'Nusrat@gmail.com', '01837559642', '$2y$10$FXJlFoJO6BGKJTNgkm6OPe2opvQudraiNx1pcppL39RF2TM.rda4W', 'Nusrat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
