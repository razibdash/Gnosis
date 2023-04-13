-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 06:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE `add_book` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_picture` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `book-Detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `book_name`, `book_picture`, `author`, `book-Detail`) VALUES
(3, 'algorithm', '', 'jon dio', 'algorithm'),
(4, 'algorithm', 'Introduction-to-Algorithms.jpg', 'jon dio', 'algorithm'),
(5, 'DS', 'programming.jpg', 'bennella', 'DS'),
(6, 'DBMS', 'elibrary.jpg', 'sazikul', 'database management system'),
(7, 'BEE', 'pblm1.PNG', 'Belenni', 'Besic electric engineering');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'rajib', 'avronilrajib@gmail.com', '12345'),
(2, 'saurov', 'saurov@gmail.com', '12345\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student_login_info`
--

CREATE TABLE `student_login_info` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_login_info`
--

INSERT INTO `student_login_info` (`id`, `firstName`, `lastName`, `email`, `password`, `number`) VALUES
(7, 'rajib', 'dash', 'rajibdash707@gmail.com', '4387638764', 1791830152),
(8, 'saurov', 'paul', 'saurov@gmail.com', '12234676', 2147483647),
(9, 'saurov', 'paul', 'saurov@gmail.com', '76876876876', 2147483647),
(10, 'saurov', 'paul', 'saurov@gmail.com', '76876876876', 2147483647),
(11, 'avronil', 'rajib', 'avronil@gmail.com', '00990099', 1823913194),
(12, 'Avronil', 'Rajib', 'avronil@gmail.com', 'Avronil0909', 1823913194),
(13, 'Avronil', 'Rajib', 'avronil@gmail.com', 'Avronil0909', 1823913194),
(14, 'Avronil', 'Rajib', 'avronil@gmail.com', 'Avronil0909', 1823913194),
(15, 'Avronil', 'Rajib', 'avronil@gmail.com', 'Avronil0909', 1823913194),
(16, 'sagor', 'dash', 'sagor@gmail.com', '090909090909', 1785622589);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_login_info`
--
ALTER TABLE `student_login_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_login_info`
--
ALTER TABLE `student_login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
