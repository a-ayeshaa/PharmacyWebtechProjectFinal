# PharmacyWebtechProjectFinal

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 08:33 PM
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
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `billinghistory`
--

CREATE TABLE `billinghistory` (
  `OrderID` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `MedicineCodes` varchar(100) NOT NULL,
  `Quantities` varchar(100) NOT NULL,
  `GrandTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billinghistory`
--

INSERT INTO `billinghistory` (`OrderID`, `Username`, `MedicineCodes`, `Quantities`, `GrandTotal`) VALUES
(1, 'Ayesha', '3,1', '2,1', 148),
(2, 'Dibya', '1', '20', 720),
(3, 'Ayesha', '5', '10', 650),
(4, 'Tahmid', '3', '3', 240),
(5, 'Tonmoy', '3,2,4', '7,1,3', 1030),
(6, 'ayesha', ', 2, 1', ', 3, 3', 780);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `OrderNumber` int(11) NOT NULL,
  `MedicineCode` varchar(20) NOT NULL,
  `MedicineName` varchar(20) NOT NULL,
  `MedicinePrice` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `MedicineName` varchar(100) NOT NULL,
  `MedicineCode` int(100) NOT NULL,
  `MedicineStock` int(100) NOT NULL,
  `MedicinePrice` float NOT NULL,
  `ExpiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`MedicineName`, `MedicineCode`, `MedicineStock`, `MedicinePrice`, `ExpiryDate`) VALUES
('Napa', 1, 150, 20, '2022-02-23'),
('Sanitizer', 2, 300, 120, '2023-06-13'),
('Boxol', 3, 220, 130, '2025-01-01'),
('Fexo', 4, 84, 35, '2023-10-19'),
('Napa Extra', 5, 115, 60, '2022-10-11'),
('Xfin', 6, 300, 25, '2023-09-23'),
('Savlon', 7, 100, 30, '2024-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `doB` date NOT NULL,
  `religion` varchar(20) NOT NULL,
  `presentAddress` varchar(50) NOT NULL,
  `permanentAddress` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `recoveryEmail` varchar(50) NOT NULL,
  `favColor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `password`, `firstname`, `lastname`, `gender`, `doB`, `religion`, `presentAddress`, `permanentAddress`, `phone`, `email`, `recoveryEmail`, `favColor`) VALUES
('ayesha', '123', 'Ayesha', 'Akhtar', 'Female', '1999-02-01', 'Islam', 'Road 16/House 43', '2nd floor', '01798406965', 'ayesha.akhtar.1999@gmail.com', 'ayesha.akhtar.1999@gmail.com', 'Blue'),
('ayesha.akhtar.1999@gmail.com', '1223', 'Ayesha', 'Akhtar', 'Female', '1999-02-04', 'Islam', 'Road 16/House 43', '2nd floor', '017984069655', 'ayesha.akhtar.1999@gmail.com', 'ayesha.akhtar.1999@gmail.com', 'black');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billinghistory`
--
ALTER TABLE `billinghistory`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`OrderNumber`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`MedicineCode`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billinghistory`
--
ALTER TABLE `billinghistory`
  MODIFY `OrderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `OrderNumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `MedicineCode` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
