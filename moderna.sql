-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 07:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` longtext NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `buttom_link` varchar(300) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `detail`, `button_text`, `buttom_link`, `status`) VALUES
(7, 'Welcome to Moderna', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Read More', 'https://bootstrapmade.com/demo/Restaurantly/ ', 0),
(8, 'Welcome to Moderna', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'More Deatils', 'https://bootstrapmade.com/demo/Presento/ ', 0),
(9, 'Welcome to Moderna', ' sed do eiusmod tempor incididunt ut labore et ', 'Read More', 'https://bootstrapmade.com/demo/iPortfolio/ ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `icons` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `moderna_table`
--

CREATE TABLE `moderna_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moderna_table`
--

INSERT INTO `moderna_table` (`id`, `name`, `email`, `password`, `images`) VALUES
(6, 'Afiful Hoque Adnan', 'afifuladnan2020@gamil.com', '3459e53125121bda92cd573b2fdcd8cc57724cfc ', 'User-6203163ce52fe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `images`) VALUES
(1, 'Britanni Hamilton', 'bataqynix@mailinator.com', 'Pa$$w0rd!', '1'),
(2, 'Arsenio Bridges', 'zonaxyqezu@mailinator.com', ' ac748cb38ff28d1ea98458b16695739d7e90f22d ', '1'),
(3, 'Aline Carr', 'hyluvicoqe@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d ', '1'),
(4, 'Eagan Russo', 'tupy@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d ', '1'),
(5, 'Rajah Austin', 'zemopeqe@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d ', 'User-62015bf4a1a4d.jpg'),
(6, 'Deacon Dickerson', 'pitegen@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d ', 'User-62015c0201560.jpg'),
(7, 'Amos Holt', 'jyxihojax@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d ', 'User-62015c293b635.jpg'),
(8, 'Lisandra Lancaster', 'vuxyrel@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d ', 'User-62015c6616095.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderna_table`
--
ALTER TABLE `moderna_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `moderna_table`
--
ALTER TABLE `moderna_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
