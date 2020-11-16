-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2020 at 01:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stopidodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_slno` int(8) NOT NULL,
  `partner_fnm` varchar(16) NOT NULL,
  `partner_mnm` varchar(16) NOT NULL,
  `partner_lnm` varchar(16) NOT NULL,
  `partner_tel` varchar(8) NOT NULL,
  `partner_mail` varchar(8) NOT NULL,
  `partner_ct` varchar(8) NOT NULL,
  `partner_occu` varchar(8) NOT NULL,
  `partner_ref` varchar(8) NOT NULL,
  `partner_stat` varchar(8) NOT NULL,
  `partner_pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_slno` int(8) NOT NULL,
  `supplier_fnm` varchar(16) NOT NULL,
  `supplier_mnm` varchar(16) NOT NULL,
  `supplier_lnm` varchar(16) NOT NULL,
  `supplier_tel` varchar(8) NOT NULL,
  `supplier_mail` varchar(8) NOT NULL,
  `supplier_ct` varchar(8) NOT NULL,
  `supplier_occu` varchar(8) NOT NULL,
  `supplier_ref` varchar(8) NOT NULL,
  `supplier_stat` varchar(8) NOT NULL,
  `supplier_pass` varchar(8) NOT NULL,
  `supplier_bnm` varchar(16) NOT NULL,
  `supplier_type` varchar(16) NOT NULL,
  `supplier_prod_category` varchar(16) NOT NULL,
  `supplier_range` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test_tbl`
--

CREATE TABLE `test_tbl` (
  `slno` int(4) NOT NULL,
  `fnm` varchar(12) NOT NULL,
  `lnm` varchar(12) NOT NULL,
  `ct` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_slno`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_slno`);

--
-- Indexes for table `test_tbl`
--
ALTER TABLE `test_tbl`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_slno` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_slno` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_tbl`
--
ALTER TABLE `test_tbl`
  MODIFY `slno` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
