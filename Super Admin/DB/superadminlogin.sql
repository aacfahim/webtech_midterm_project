-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `superadminlogin`
--

CREATE TABLE `superadminlogin` (
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `superadminlogin`
--

INSERT INTO `superadminlogin` (`Name`, `Username`, `Password`, `Email`) VALUES
('Ashfaq Afzal Chowdhury', 'aacfahim', 'aacfahim', 'aacfahim@gmail.com'),
('abc', 'abc123', 'abc123', 'abc123@gmail.com'),
('aiub', 'aiub.edu', 'aiub', 'aiub@aiub.edu'),
('Alice', 'alice123', 'alice', 'alice@aiub.edu'),
('Bob', 'bob123', 'bob', 'bob@aiub.edu'),
('xyz', 'xyz', 'xyz', 'xyz@anymail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `superadminlogin`
--
ALTER TABLE `superadminlogin`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
