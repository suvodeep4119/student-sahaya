-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 06:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `mob_num` bigint(255) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mob_num`, `e_mail`, `message`) VALUES
(23, 'Ankita', 852136547, 'ankita20@gmail.com', 'nicely executed!!\r\n'),
(40, 'aauc', 7262933726, 'aauc@gmail.com', 'dgayvkicgkisgslougsouh\r\nah\r\nsihacpinch\r\npd'),
(41, 'Suvodeep', 8762801257, 'suvodeep4119@gmail.com', 'Very good !');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(33, 'WhatsApp Image 2017-05-28 at 4.39.56 PM (3).jpeg', 'Question paper sample -1'),
(35, 'WhatsApp Image 2017-05-28 at 4.39.56 PM.jpeg', 'Question paper sample - 2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'hello', 'hello@hello.com', '5d41402abc4b2a76b9719d911017c592'),
(2, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'mango', 'mango@gmail.com', 'aa00faf97d042c13a59da4d27eb32358'),
(4, 'dassdsa', 'sadsa@asda.com', '900150983cd24fb0d6963f7d28e17f72'),
(5, 'sas', 'sasas@ss.com', '202cb962ac59075b964b07152d234b70'),
(6, 'suvodeep', 'shujd@dd.com', '1f3870be274f6c49b3e31a0c6728957f'),
(7, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'JYHVFJ', 'HHG@ggg.com', '1f3870be274f6c49b3e31a0c6728957f'),
(9, 'mango', 'mango@gmail.com', 'aa00faf97d042c13a59da4d27eb32358'),
(10, 'gandu', 'apple@gmail.com', 'a6ab927538c392303c3d88287ac0d099'),
(11, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6'),
(13, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(14, 'suvodeep', 'suvodeep4119@gmail.com', '1f3870be274f6c49b3e31a0c6728957f'),
(15, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(18, 'admin', 'admin@admin.com', 'e00cf25ad42683b3df678c61f42c6bda'),
(19, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(20, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(21, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(22, 'ddd', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(23, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(24, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(25, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(26, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6'),
(27, 'suvodeep', 'suvodeep4119@gmail.com', '903010ac03abcc015f3f5227a392bd91'),
(28, 'ladiesman_pavvu', 'baddy@chu.com', '48ffb45d0dc95b6d04d63c58f836e64e'),
(29, 'mango', 'mango@mango.com', 'aa00faf97d042c13a59da4d27eb32358'),
(30, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(31, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(32, 'lakshmi', 'jl@gmail.com', 'c9e55fc0be18bed4a9c695a6d8ac2840'),
(33, 'Ankita', 'ankita20@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(34, 'vivek', 'k.vivek.rao@gmail.com', 'b5db229e05093570ab6116e76c5217a2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
