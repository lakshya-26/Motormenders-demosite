-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 06:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motormenders`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('lakshya26', 'l7890122');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `carmanf` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `year` varchar(10) NOT NULL,
  `service` varchar(200) NOT NULL,
  `hear` varchar(500) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `carimage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`name`, `email`, `phone`, `state`, `city`, `pincode`, `carmanf`, `model`, `year`, `service`, `hear`, `comment`, `carimage`) VALUES
('Lakshya Kumar Singh', 'lakshyakumarsingh.2003.va@gmail.com', '7890122435', 'West Bengal', 'Rishra', '712249', 'Mahindra', 'Thar', '2023', 'Car Modification', 'Youtube', 'Need A Sigma Level Car Modification For My Car...', 'fimg/Mahindra_Thar_Photoshoot_At_Perupalem_Beach_(West_Godavari_District,AP,India_)_Djdavid.jpg.jpg'),
('Priyanshu Tripathi', 'ptripathi@gmail.com', '9555780835', 'West Bengal', 'Serampore', '712249', 'Mahindra', 'Scropio-n', '2023', 'Interior Modification', 'Instagram', 'Please Contact Me If You Are Free...', 'fimg/mahindra-scorpio-gto-review-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
