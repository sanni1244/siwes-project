-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 05:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siwesproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `applytable`
--

CREATE TABLE `applytable` (
  `id` int(11) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Country Code` int(11) NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Field` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applytable`
--

INSERT INTO `applytable` (`id`, `First Name`, `Last Name`, `Country Code`, `Phone Number`, `Email`, `Address`, `Date of Birth`, `Gender`, `Field`, `Country`, `State`, `Page`) VALUES
(1, 'John', 'Doe', 234, 111111111, 'example@gmail.com', '01, Eiffel tower opp. Aso rock.', '2001-01-22', 'male', 'Data Science', 'Nigeria', 'Lagos', 'https://github.com/sanni1244?tab=repositories');

-- --------------------------------------------------------

--
-- Table structure for table `infolog`
--

CREATE TABLE `infolog` (
  `id` int(11) NOT NULL,
  `FIRST NAME` varchar(20) NOT NULL,
  `LAST NAME` varchar(20) NOT NULL,
  `ID number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infolog`
--

INSERT INTO `infolog` (`id`, `FIRST NAME`, `LAST NAME`, `ID number`) VALUES
(1, 'Opeyemi', 'Sanni', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applytable`
--
ALTER TABLE `applytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infolog`
--
ALTER TABLE `infolog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applytable`
--
ALTER TABLE `applytable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infolog`
--
ALTER TABLE `infolog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
