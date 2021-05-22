-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 09:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `Text` text NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Meta_k` varchar(200) NOT NULL,
  `Meta_d` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `Title`, `Date`, `Type`, `Photo`, `Text`, `Autor`, `Description`, `Meta_k`, `Meta_d`) VALUES
(1, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1'),
(2, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1'),
(3, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1'),
(4, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1'),
(5, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1'),
(6, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1'),
(7, 'title 1', '2021-05-22', '1', 'photo 1', 'text 1', 'autor 1', 'description 1', 'meta_k 1', 'meta_d 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
