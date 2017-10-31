-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2017 at 11:04 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `MYSQL_DATABASE_NAME`
--

-- --------------------------------------------------------

--
-- Table structure for table `myTable`
--

CREATE TABLE `myTable` (
  `id` int(11) NOT NULL,
  `stuff` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myTable`
--

INSERT INTO `myTable` (`id`, `stuff`) VALUES
(1, 'some stuff #1'),
(2, 'some stuff #2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myTable`
--
ALTER TABLE `myTable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myTable`
--
ALTER TABLE `myTable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;