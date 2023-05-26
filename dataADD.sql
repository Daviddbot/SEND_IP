-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2023 at 11:47 AM
-- Server version: 10.5.19-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apipoms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataADD`
--

CREATE TABLE `dataADD` (
  `id` int(11) NOT NULL,
  `devicenomer` varchar(17) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dataADD`
--

INSERT INTO `dataADD` (`id`, `devicenomer`, `ip`) VALUES
(2, '0C:B8:15:D7:9A:84', '192.168.1.2'),
(3, '50:02:91:F7:B8:2E', '192.168.1.23'),
(4, 'FC:F5:C4:2F:73:DC', '192.168.1.4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataADD`
--
ALTER TABLE `dataADD`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataADD`
--
ALTER TABLE `dataADD`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
