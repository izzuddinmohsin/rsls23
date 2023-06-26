-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 03:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsls23`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(25) NOT NULL,
  `id_login` int(25) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_login`, `admin_name`, `admin_phone`, `admin_address`) VALUES
(1, 1, 'Amir Imtiaz bin mohamad amir', '011-789 7894', 'kelantan malaysia'),
(2, 2, 'Muhammad Izzuddin', '016-714 6935', 'Peserai, Batu Pahat, Johor'),
(8, 21, 'Naufal Bin Ahmad', '123', 'AAA');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(25) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'Full Paper - Research Paper'),
(2, 'Full Paper - Conceptual Paper'),
(3, 'Full Abstract'),
(4, 'Slide Presentation');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(25) NOT NULL,
  `id_user` int(25) NOT NULL,
  `id_scope` int(25) NOT NULL,
  `id_category` int(25) NOT NULL,
  `file_link` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `id_user`, `id_scope`, `id_category`, `file_link`) VALUES
(2, 14, 1, 1, 'https://youtu.be/IYqJKumab7Q'),
(5, 14, 1, 4, 'https://youtu.be/RijXAzOzA4s');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `title` varchar(10) DEFAULT NULL,
  `full_name` varchar(30) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `register_as` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  `research_field` varchar(100) DEFAULT NULL,
  `id_login` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `title`, `full_name`, `phone_number`, `register_as`, `address`, `university`, `research_field`, `id_login`) VALUES
(1, 'Mr', 'hanif muhammmad', '0123123123', 'Participant', 'no 4, lintang aman 8', 'UNIVERSITI TUN HUSSEIN ON MALAYSIA', ' test', 13),
(2, 'Mr', 'Alif Nazrul amir', '01123123123', 'Participant', 'no 4, lintang aman 8', 'UNIVERSITI TUN HUSSEIN ON MALAYSIA', ' Information_technology', 14),
(4, 'Prof', 'Abuttt', '01010101010191', 'Presenter', 'No 4, Lintang Aman 8, Taman Desa Aman', 'Uthm', 'Test', 16);

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

CREATE TABLE `scope` (
  `id_scope` int(255) NOT NULL,
  `scope_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scope`
--

INSERT INTO `scope` (`id_scope`, `scope_name`) VALUES
(1, 'Social Enterprise'),
(2, 'Volunteer'),
(3, 'Leadership'),
(4, 'Enterpreneurship'),
(5, 'Community Service');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `trn_date` varchar(20) DEFAULT NULL,
  `access_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`, `access_level`) VALUES
(1, 'amir', 'amir12@example.com', '123', '2023-06-09 09:59:19', 'admin'),
(2, 'izzuddin', 'izzuddin@gmail.com', '123', '2023-06-09 09:59:31', 'admin'),
(13, 'hanif', 'jsmith@sample.com', '123', '2023-06-10 07:15:55', 'Participant'),
(14, 'alif', 'nazrulism17@gmail.com', '123', '2023-06-10 07:29:32', 'Participant'),
(16, 'Abu', 'abu@gmail.com', '123', '2023-06-11 17:22:27', 'Presenter'),
(21, 'naufal', 'naufal@gmail.com', '123', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `login_admin` (`id_login`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `user_file` (`id_user`),
  ADD KEY `category_file` (`id_category`),
  ADD KEY `scope_file` (`id_scope`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `scope`
--
ALTER TABLE `scope`
  ADD PRIMARY KEY (`id_scope`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scope`
--
ALTER TABLE `scope`
  MODIFY `id_scope` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `login_admin` FOREIGN KEY (`id_login`) REFERENCES `users` (`id`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `category_file` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
  ADD CONSTRAINT `scope_file` FOREIGN KEY (`id_scope`) REFERENCES `scope` (`id_scope`),
  ADD CONSTRAINT `user_file` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `id_login` FOREIGN KEY (`id_login`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
