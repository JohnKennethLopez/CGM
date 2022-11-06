-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2022 at 10:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `cgmchapter`, `date`, `fullname`, `gender`, `contactnumber`, `age`, `address`) VALUES
(1, 'CGM Tanauan Mabini', '', 'c dvgf', 'Female', '056421', '21', 'fdyedsgvdgtf'),
(2, 'CGM Main', '2022/10/04', 'jfgdskj', 'Female', '094518554', '21', 'asfdsadf'),
(3, 'CGM Gattaran, Cagayan', '2022/10/06', 'ashgdahj', 'Male', 'hgdfajhg', '12', 'asd'),
(4, 'CGM Gen. Tinio, Nueva Ecija', '2022/10/06', 'sdsadas', 'Female', 'k;kjl;lkj', '121', 'jhkghjghj'),
(5, 'CGM Bacoor, Cavite', '2022/10/06', 'asdfa', 'Female', 'sadas', '56', 'asdasfd'),
(6, 'CGM Bacoor, Cavite', '2022/10/06', 'sadas', 'Male', 'dfas', '12', 'asdasf'),
(7, '', '2022/10/06', 'asdf', 'Male', '05512', '12', 'asdad'),
(8, '', '2022/10/06', 'casjuar', 'Male', '094532541', '21', 'hjsdghaw');

-- --------------------------------------------------------

--
-- Table structure for table `prayer`
--

CREATE TABLE `prayer` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`id`, `cgmchapter`, `name`, `email`, `request`, `report`) VALUES
(1, 'tanauan', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'adsasdasdasd', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'asdasdasdasdaaaaaa'),
(2, 'CGM Gen. Tinio, Nueva Ecija', 'sadsadsa', 'asf', 'fas', 'asfad'),
(3, 'CGM Bacoor, Cavite', 'sad', 'victoria del mundo', 'yhggff', 'dfgfes'),
(4, 'CGM Pulilan, Bulacan', 'gdg', '09078196948', 'esfdfds', 'ahsgfa'),
(5, 'CGM Gen. Tinio, Nueva Ecija', 'gdg', 'asdafs', '245', 'asdaf'),
(6, 'CGM Candaba, Pampanga', 'gasgdn', 'zxvsafa', '854a', 'asdawd'),
(7, 'CGM Bustos, Bulacan', 'sadfs', 'asda', 'asda', 'asdasd'),
(8, 'CGM Bustos, Bulacan', 'sadfs', 'asda', 'asda', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayer`
--
ALTER TABLE `prayer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
