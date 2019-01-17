-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2019 at 01:14 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `user_id` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `umobile` varchar(10) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `uemail` varchar(60) NOT NULL,
  `upassword` varchar(10) NOT NULL,
  `user_type` int(11) NOT NULL,
  `ublog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`user_id`, `uname`, `umobile`, `uaddress`, `uemail`, `upassword`, `user_type`, `ublog`) VALUES
('cJxPkYOEhnpwvLal', 'Jiya', '45676767', 'Kanpur', 'jiya@gmail.com', 'asdf', 2, 'myblog'),
('cKgn3UjNstJQak0w', 'kamini', '6767654547', 'lko', 'kamini@gmail.com', 'kamini123', 2, 'newblog'),
('l0D7fk3VJd42Oizg', 'shikha tripathi', '23344444', 'lko', 'shikha@gmail.com', '1234', 2, 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
