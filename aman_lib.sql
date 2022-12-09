-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 07:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aman_lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE `lib` (
  `fname` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `bname` varchar(255) NOT NULL,
  `uid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`fname`, `date`, `bname`, `uid`) VALUES
('Aman', '2022-10-06', 'harry potter', 27),
('Virat ', '2022-10-06', 'cricket', 29),
('MS ', '2022-10-06', 'Cricket', 30),
('Bhuvi', '2022-10-06', 'Bowling', 33),
('Mohammad ', '2022-10-06', 'Pace bowling', 34),
('iron', '2022-10-06', 'How to kill ultron without killing arsenol', 35),
('Captain ', '2022-10-06', 'How to overcome exrta positivity', 36),
('Shubham ', '2022-10-08', 'Psychology', 39),
('Aman Kumar ', '2022-12-09', 'aksdjlasd', 44),
('Aman Kumar', '2022-12-09', 'Book of Vishanti', 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib`
--
ALTER TABLE `lib`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib`
--
ALTER TABLE `lib`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
