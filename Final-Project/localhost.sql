-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 17, 2022 at 06:48 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `register_info`
--

CREATE TABLE `register_info` (
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register_info`
--

INSERT INTO `register_info` (`username`, `password`, `email`) VALUES
('nagm', '123', 'nagm@hotmail.com'),
('nagmm', '123', 'nagmm@hotmail.com'),
('osama', '123', 'osama1@hotmail.com'),
('osama2', '123', 'osama2@hotmail.com'),
('oooo', '123', 'osama4@hotmail.com'),
('osamah', '123', 'osama@hotmail.com'),
('bbb', '123', 'osamabbb@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resv_info`
--

CREATE TABLE `resv_info` (
  `name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resv_info`
--

INSERT INTO `resv_info` (`name`, `location`, `number`, `date`, `time`, `email`, `message`) VALUES
('osama', 'Brooklyn', 'Two', '2022-08-30', '22:57', 'osama@hotmail.com', 'dfdfd'),
('OSAMAH', 'Brooklyn', 'Two', '2022-08-17', '20:15', 'OSAMA@HOTMAIL.COM', 'hello this is me'),
('osama', 'Brooklyn', 'Two', '2022-08-30', '05:17', 'osama@hotmail.com', '212121'),
('osamah', 'Brooklyn', 'Two', '2022-08-10', '02:22', 'osama@hotmail.com', 'nbvnvb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_info`
--
ALTER TABLE `register_info`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
