-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 08:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imtiyaj_ahamad_e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `long_desc` mediumtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `short_desc`, `price`, `long_desc`, `img`) VALUES
(15, 'c basics', 'this is basic programming', '120', 'in this programme you will learn about c language', 'clang.jpg'),
(17, 'Java', 'basic java', '500', 'java for beginners', 'assests/photos/java_logo_640.jpg'),
(18, 'python', 'this is python course', '230', 'this is very useful course. you will learn lots of thing with this course', 'assests/photos/python.png'),
(19, 'C++', 'this is C++', '230', 'this is very useful course. you will learn lots of thing with this course', 'assests/photos/c++.png'),
(23, 'Full Stack Devlopment', 'Learn Web Devlopment', '999', 'In this course, we will learn these topics\r\n1. HTML\r\n2. CSS\r\n3. JavaScript\r\n4. Php \r\n5. Mysql', 'assests/photos/fullstack.jpeg'),
(24, 'Ethical Hacking', 'Best Course', '999', 'this course is awesome', 'assests/photos/hack.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imtiyaj_ahamad_contact_table`
--

CREATE TABLE `imtiyaj_ahamad_contact_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messege` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imtiyaj_ahamad_contact_table`
--

INSERT INTO `imtiyaj_ahamad_contact_table` (`id`, `name`, `email`, `messege`) VALUES
(2, 'abhi', 'cde@gmail.com', 'this is dummy text 2');

-- --------------------------------------------------------

--
-- Table structure for table `imtiyaj_ahamad_user_table`
--

CREATE TABLE `imtiyaj_ahamad_user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imtiyaj_ahamad_user_table`
--

INSERT INTO `imtiyaj_ahamad_user_table` (`id`, `name`, `password`, `email`, `mobile`, `role`) VALUES
(1, 'imtiyaj', '1234', 'imbanty07@gmail.com', '9871234560', '2'),
(2, 'shahid', '987', 'sha@gmail.com', '6392035767', '2'),
(3, 'admin', 'admin', 'admin@gmail.com', '9876543211', '1'),
(4, 'Ajaz', '1234', 'abfgd@gmail.com', '9305846184', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imtiyaj_ahamad_contact_table`
--
ALTER TABLE `imtiyaj_ahamad_contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imtiyaj_ahamad_user_table`
--
ALTER TABLE `imtiyaj_ahamad_user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `imtiyaj_ahamad_contact_table`
--
ALTER TABLE `imtiyaj_ahamad_contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imtiyaj_ahamad_user_table`
--
ALTER TABLE `imtiyaj_ahamad_user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
