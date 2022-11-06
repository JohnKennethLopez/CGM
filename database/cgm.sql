-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
<<<<<<< HEAD
-- Generation Time: Oct 28, 2022 at 11:03 AM
=======
-- Generation Time: Oct 27, 2022 at 04:19 AM
>>>>>>> 2d96d18e26a5aef646c0981383efdf952df60d03
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
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `announceTitle` varchar(255) NOT NULL,
  `caption` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `img`, `cgmchapter`, `announceTitle`, `caption`) VALUES
<<<<<<< HEAD
(0, 'upload/build.jpg', 'CGM San Pedro, Laguna', 'Building More CGM Chapters', 'Nag sisimula nang itayo ang panibagong Chapter ng CGM.'),
(0, 'upload/giving.jpg', 'CGM Taguig City', 'Sample', 'asdafdfsdaf');
=======
(0, 'upload/build.jpg', 'CGM San Pedro, Laguna', 'Building More CGM Chapters', 'Nag sisimula nang itayo ang panibagong Chapter ng CGM.');
>>>>>>> 2d96d18e26a5aef646c0981383efdf952df60d03

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
(8, '', '2022/10/06', 'casjuar', 'Male', '094532541', '21', 'hjsdghaw'),
(9, 'CGM Bacoor, Cavite', '2022/10/12', 'asdas', 'Female', 'asdasdasd', '12', 'asdasd'),
(10, 'CGM Balete, Batangas', '2022/10/12', 'asdasda', 'Male', 'asdasd', '32', 'asdasdasd'),
(12, 'CGM Gattaran, Cagayan', '2022/10/12', 'xcvxfgvf', 'Male', 'sddsfsd', '17', 'zxczxczxczxczxczxczxczxczxc'),
(13, 'CGM Mabini, Tanauan', '2022/10/12', 'asdasdczxcdgtb', 'Female', 'azxcasdfds', '18', 'fvxzcvxcvxcvxcvxcvxcvxcvcxvc'),
(14, 'CGM Las Piñas Main', '2022/10/12', 'zxczxvswvsdfv', 'Male', 'sdvsvxczx', '19', 'vxcvzvxzcvxzcvzxvxzcv'),
(15, 'CGM Sta. Rosa, Laguna', '2022/10/12', 'agfsdxvdxsfx', 'Female', 'aqfcxdzcvzxv', '22', 'xcvxvxcvrfbfdhgwsrgtsg'),
(17, 'CGM Pulilan, Bulacan', '2022/10/12', 'asfcxvxcvxcv', 'Female', '12434245', '23', 'qawerafdszdc'),
(18, 'CGM Sta. Rosa, Laguna', '2022/10/12', 'avczxvxbyhfg', 'Female', '12343256', '23', 'asdfvikghjmngbthytxdf'),
(19, 'CGM Sampaloc, Quezon', '2022/10/12', 'asdasdas', 'Female', 'dasdasdasd', '12', 'asdasdasd'),
(20, 'CGM Sta. Rosa, Laguna', '2022/10/12', 'qxdbryhjtjn', 'Female', 'q1232', '123312', 'adzxzxc');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `image`, `img`, `pic`, `photo`) VALUES
<<<<<<< HEAD
(6, 'upload/tinig1.jpg', 'upload/online.jpg', 'upload/img3.jpg', 'upload/img5.jpg');
=======
(1, 'upload/tinig1.jpg', 'upload/', 'upload/', 'upload/');
>>>>>>> 2d96d18e26a5aef646c0981383efdf952df60d03

-- --------------------------------------------------------

--
-- Table structure for table `prayer`
--

CREATE TABLE `prayer` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `request` longtext NOT NULL,
  `report` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`id`, `cgmchapter`, `name`, `email`, `request`, `report`) VALUES
(9, 'CGM Las Piñas Main', 'asdasdasda', 'asdasda', '', 'asdasdasdasdasdasdddddddddddddddddddddddddddddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `title`, `image`, `des`, `date`, `time`, `loc`) VALUES
(6, 'ISANG TINIG', ' upload/tinig.jpg', 'At sinabi ng Dios kay Moises, AKO YAONG AKO NGA; at kaniyang sinabi, Ganito ang sasabihin mo sa mga anak ni Israel, Sinugo ako sa inyo ni AKO NGA.\r\n-EXODO 3:14', '2022-10-29', '09:00', 'CGM Las pinan Main'),
<<<<<<< HEAD
(7, 'YOUTH ANNUAL ONLINE', 'upload/online.jpg', 'I am the vine; you are the branches. If you remain in me and I in you, you will bear much fruit; apart from me you can do nothing.', '2021-10-28', '08:00', 'CGM Las pinan Main'),
=======
(7, 'YOUTH ANNUAL ONLINE', ' upload/', 'I am the vine; you are the branches. If you remain in me and I in you, you will bear much fruit; apart from me you can do nothing.', '2021-10-28', '08:00', 'CGM Las pinan Main'),
>>>>>>> 2d96d18e26a5aef646c0981383efdf952df60d03
(8, 'YOUTH ANNUAL ONLINE', ' upload/online.jpg', 'I am the vine; you are the branches. If you remain in me and I in you, you will bear much fruit; apart from me you can do nothing.', '2021-10-28', '08:00', 'CGM Las pinan Main');

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
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayer`
--
ALTER TABLE `prayer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> 2d96d18e26a5aef646c0981383efdf952df60d03

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
