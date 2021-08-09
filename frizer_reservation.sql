-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 05:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frizer_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('A','N') NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `role`, `status`) VALUES
(1, 'kreativdental.lab@gmail.com', '$2y$10$Gvfk/gH1m0bUjkKWnCiC7u8RlOJEcmtfOJVv6qSKA/VTeZcLbbfDG', 'admin', 'A'),
(2, 'admin@gmail.com', '$2y$10$psuWyUCnMsRmcviy95K5oude1PC0Q5qQ75DJQ5DMVwfevdlel.GtW', 'admin', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `booking_appointment_data`
--

CREATE TABLE `booking_appointment_data` (
  `id` int(11) NOT NULL,
  `fk_booking_records_id` int(10) UNSIGNED NOT NULL,
  `appointment_email_body` longtext DEFAULT NULL,
  `appointnment_my_comment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela o prihvatanju i odbijanju termnia\nEmail poruka\nKomentari koje smo mi pisali za nas';

-- --------------------------------------------------------

--
-- Table structure for table `booking_records`
--

CREATE TABLE `booking_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_reservation_time_id` int(10) UNSIGNED NOT NULL,
  `booking_first_name` varchar(100) NOT NULL,
  `booking_last_name` varchar(150) NOT NULL,
  `booking_email` varchar(150) NOT NULL,
  `booking_phone` varchar(12) NOT NULL,
  `booking_comment` mediumtext DEFAULT NULL,
  `booking_recrod_status` enum('A','R','S','C') NOT NULL DEFAULT 'A' COMMENT 'A - Active term R - Reserved termS - Stand by term - waiting adming to apply reservation C - Cancel appointment',
  `booking_record_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking_records`
--

INSERT INTO `booking_records` (`id`, `fk_reservation_time_id`, `booking_first_name`, `booking_last_name`, `booking_email`, `booking_phone`, `booking_comment`, `booking_recrod_status`, `booking_record_year`) VALUES
(18, 54, 'Nenad', 'Peric', 'nenad.peric@outlook.com', '0600455722', 'test', 'C', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_date`
--

CREATE TABLE `reservation_date` (
  `id` int(10) UNSIGNED NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_date_status` enum('A','N') NOT NULL DEFAULT 'A',
  `reservation_date_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_date`
--

INSERT INTO `reservation_date` (`id`, `reservation_date`, `reservation_date_status`, `reservation_date_year`) VALUES
(1, '2019-12-16', 'A', 2019),
(2, '2019-12-26', 'N', 2019),
(3, '2020-01-28', 'A', 2019),
(4, '2020-11-22', 'A', 2020),
(5, '2021-07-23', 'A', 2021),
(6, '2021-08-04', 'A', 2021),
(7, '2021-08-06', 'A', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_time`
--

CREATE TABLE `reservation_time` (
  `id` int(10) UNSIGNED NOT NULL,
  `fk_reservation_date_id` int(10) UNSIGNED NOT NULL,
  `reservation_time` varchar(2) NOT NULL,
  `reservation_time_status` enum('A','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_time`
--

INSERT INTO `reservation_time` (`id`, `fk_reservation_date_id`, `reservation_time`, `reservation_time_status`) VALUES
(54, 6, '12', 'N'),
(55, 6, '13', 'N'),
(56, 6, '14', 'N'),
(57, 6, '15', 'N'),
(58, 6, '16', 'N'),
(59, 6, '17', 'N'),
(60, 7, '9', 'N'),
(61, 7, '10', 'N'),
(62, 7, '11', 'N'),
(63, 7, '12', 'N'),
(64, 7, '13', 'N'),
(65, 7, '14', 'N'),
(66, 7, '15', 'N'),
(67, 7, '16', 'N'),
(68, 7, '17', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `booking_appointment_data`
--
ALTER TABLE `booking_appointment_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_records_id_idx` (`fk_booking_records_id`);

--
-- Indexes for table `booking_records`
--
ALTER TABLE `booking_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservation_time_id_idx` (`fk_reservation_time_id`);

--
-- Indexes for table `reservation_date`
--
ALTER TABLE `reservation_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_time`
--
ALTER TABLE `reservation_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservation_date_id` (`fk_reservation_date_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_appointment_data`
--
ALTER TABLE `booking_appointment_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `booking_records`
--
ALTER TABLE `booking_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reservation_date`
--
ALTER TABLE `reservation_date`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation_time`
--
ALTER TABLE `reservation_time`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_appointment_data`
--
ALTER TABLE `booking_appointment_data`
  ADD CONSTRAINT `fk_booking_records_id` FOREIGN KEY (`fk_booking_records_id`) REFERENCES `booking_records` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `booking_records`
--
ALTER TABLE `booking_records`
  ADD CONSTRAINT `fk_reservation_time_id` FOREIGN KEY (`fk_reservation_time_id`) REFERENCES `reservation_time` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation_time`
--
ALTER TABLE `reservation_time`
  ADD CONSTRAINT `fk_reservation_date_id` FOREIGN KEY (`fk_reservation_date_id`) REFERENCES `reservation_date` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
