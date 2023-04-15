-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 07:32 PM
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
(3, 'algorithm', 'book-not-found.jpeg', 'jon dio', 'algorithm'),
(4, 'algorithm', 'book-not-found.jpeg', 'jon dio', 'algorithm'),
(5, 'DS', 'book-not-found.jpeg', 'bennella', 'DS'),
(6, 'DBMS', 'book-not-found.jpeg', 'sazikul', 'database management system'),
(7, 'BEE', 'book-not-found.jpeg', 'Belenni', 'Besic electric engineering'),
(8, 'ML', 'book-not-found.jpeg', 'Rajib', 'jhgd dsjhgds sjhgder ergrf reygrfr reygfryugjhg'),
(9, 'cp', 'book-not-found.jpeg', 'rajib', 'cp'),
(10, 'fgfh', 'book-not-found.jpeg', 'fghgfh', 'hfghfh'),
(11, 'algorithm', 'book-not-found.jpeg', ' jon dio', ' cp');

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
-- Table structure for table `student-issue-book`
--

CREATE TABLE `student-issue-book` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `issue_detalis` varchar(255) NOT NULL,
  `isuue_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student-issue-book`
--

INSERT INTO `student-issue-book` (`id`, `book_name`, `author_name`, `issue_detalis`, `isuue_date`) VALUES
(1, 'data', '', 'fddgdg', '2023-04-14'),
(2, 'data', '', 'fddgdg', '2023-04-14'),
(3, 'data', '', 'fddgdg', '2023-04-14'),
(4, 'rajib', 'rajib', 'rajib', '2023-04-14'),
(5, 'data', 'rajib', 'dfdfdtyrtr', '2023-04-14'),
(6, 'rajib', 'rajib', 'rajib', '2023-04-14');

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
(24, 'Rajib ', 'Dash', 'rajib@gmail.com', '0909Rajib', 1823913194),
(25, 'Rajib ', 'Dash', 'rajib@gmail.com', '0909Rajib', 1823913194),
(28, 'sagor', 'dash', 'sagor@gmail.com', '12345', 1823913194),
(29, 'emran', 'alom', 'emran@gmail.com', '0099', 1790908865);

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
-- Indexes for table `student-issue-book`
--
ALTER TABLE `student-issue-book`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student-issue-book`
--
ALTER TABLE `student-issue-book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_login_info`
--
ALTER TABLE `student_login_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
