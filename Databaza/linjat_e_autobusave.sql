-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 04:43 PM
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
-- Database: `linjat_e_autobusave`
--

CREATE DATABASE `linjat_e_autobusave`;

-- --------------------------------------------------------


-- 
-- Perdorimi i Databazes se Krijuar
--

USE `linjat_e_autobusave`;

-- ------------------------------------------------------


--
-- Table structure for table `linjat`
--

CREATE TABLE `linjat` (
  `id` int(11) NOT NULL,
  `nisja` varchar(250) NOT NULL,
  `mberritja` varchar(250) NOT NULL,
  `kompania` varchar(250) NOT NULL,
  `relacioni_fq` varchar(250) NOT NULL,
  `relacioni` varchar(250) NOT NULL,
  `statusi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `emri` varchar(50) DEFAULT NULL,
  `mbiemri` varchar(50) DEFAULT NULL,
  `aksesi` varchar(30) NOT NULL DEFAULT 'visitor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `emri`, `mbiemri`, `aksesi`) VALUES
(1, 'admin', '$2y$10$YP6yz0mijhD1K8HIZct9FeygKGP9qIo9fvyQ7U0zRHy36BVnfF33C', 'Administrator', '', 'founder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linjat`
--
ALTER TABLE `linjat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linjat`
--
ALTER TABLE `linjat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
