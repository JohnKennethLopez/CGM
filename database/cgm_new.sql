-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 09:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `history` longtext NOT NULL,
  `mission` longtext NOT NULL,
  `vision` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `history`, `mission`, `vision`) VALUES
(1, 'The Church of Gods Miracles was established in 1991 by a group of Pastors and believers called by God. These believers have patiently organized numerous meetings in Buli Elementary School in order to establish a new church. Through the help and guidance from the Lord God the CHURCH OF GODS MIRACLES (CGM) was born on July 16, 1991. Ptr. Camilo L. Principe the appointed Administrative Pastor, together with seven (7) elders and seven (7) deacons were selected to lead the church.\r\n\r\n	The first central office and Sunday Worship Celebration was held at the 3rd floor Rosa Building, Montillano St. Alabang, Muntinlupa City. God continuously works wonders and miracles in the church. Many have turned their faith to Jesus and with such numerous new Christians attending the Sunday Worship celebration, three (3) services were held two (2) in the morning and one (1) in the afternoon. Mid-week service during Wednesdays and Miracles Night during Fridays were likewise opened. Due to huge number of new workers, CGM started its new Christian Workers Training School to fully train and equips workers in the proper way of teaching and sharing the gospel of Christ.\r\n\r\n	With the vast expansion of the church, CGM transferred to Manuela 2 Cinema 6 and its office was transferred to J. Villanueva 3 Compound, Almanza, Las Piñas City.\r\n\r\n	New leaders were voted and appointed under the leadership of Ptr. Frankie L. Beato, Senior Pastor. Through the new leadership and by the grace of God, workers participated in doing their share of work in developing and establishing a better church to widen the scope of spreading the Word of God. Within a short period of time, the new administration successfully continues to meet its goal in reaching for the lost souls and bringing them back to God. \r\n\r\n	The church adapted a pastoral policy wherein the Senior Pastor acts as chairman of all the business meetings including the administration of the church.\r\n\r\n	Eventually CGM transferred to its church building at Lot 1A Liderato Hernandez St., Metrocor South Gate Homes, Almanza Uno, Las Piñas City where the Worship Services are held and its office is located.\r\n\r\n	Today CGM has seventeen (17) chapters, six (6) districts and twelve (12) areas in different parts of NCR and provinces. all for the highest gratitude and thanksgiving to the one and only founder and head of the church, The Lord Jesus Christ!', 'CHURCH OF GODS MIRACLES exists to pray for, win and disciple people, to become committed, spirit filled followers of Jesus Christ, to become a worshipping people, a caring community and a worldwide witness.', 'To be a model Cell Church, passionate in worship and prayer, where everyone is motivated by the love of God to minister to all people, equipping and working together to win our cities for God and the whole world.');

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
(5, 'upload/coffee.jpg', 'CGM Las Piñas Main', 'Coffee with God', 'asd asd asd asd asd asd asd asd asdasd asd as das das dadasdasd ');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer`) VALUES
(1, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F487435389770347%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(2, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F1185180615400672%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(3, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F902641164047706%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(4, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F798982644701796%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(5, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F1158330561778666%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(6, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F815429583104905%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(7, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F1118078545746063%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(8, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F4815482711888174%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(10, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmjesusistheanswer%2Fvideos%2F832862051085243%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date`, `fullname`, `email`, `contact`, `time`, `address`, `service`, `cgmchapter`, `message`, `room_id`, `status`) VALUES
(11, '2022-11-23', 'Grace', 'grace.grumo12@gmail.com', '09771183520', '3:00pm', '12 barangay, mabini, tanauan city batangas', 'other', 'CGM Mabini, Tanauan', 'birthday ni mama', 10, 'Rejected'),
(12, '2022-11-08', 'Grace', 'grace.grumo12@gmail.com', '09771183520', '10:00am', '12 barangay, mabini, tanauan city batangas', 'Business blessing', 'CGM Bacoor, Cavite', 'ad asda sdas das das das a', 2, 'Rejected'),
(13, '2022-11-09', 'john kenneth lopez', 'lopeznneth204@gmail.com', '09771183520', '3:00pm', '12 barangay, mabini, tanauan city batangas', 'Water baptism', 'CGM Balete, Batangas', 'fd gdfg dfg df gdf gdf ', 3, 'Pending'),
(14, '2022-11-10', 'John Kenneth M. Lopez', 'lopezkenneth25@yahoo.com', '09771183520', '12:00pm', '12 barangay, mabini, tanauan city batangas', 'Child dedication', 'CGM Bustos, Bulacan', 'ads gebfgnb fgn fgn fgn g', 4, 'Confirmed'),
(15, '2022-11-20', 'John Kenneth M. Lopez', 'lopezkenneth25@yahoo.com', '09771183520', '12:00pm', '12 barangay, mabini, tanauan city batangas', 'Water baptism', 'CGM Las Piñas Main', 'a asd asd asd ad as', 1, 'Pending'),
(16, '2022-11-08', 'John Kenneth M. Lopez', 'lopeznneth204@gmail.com', '09771183520', '3:00pm', '12 barangay, mabini, tanauan city batangas', 'wedding', 'CGM Balete, Batangas', 'asd asd asd afgdgfgfg d fgd fg df ', 3, 'Pending'),
(18, '2022-11-07', 'John Kenneth M. Lopez', 'lopezkenneth25@yahoo.com', '09771183520', '12:00pm', '12 barangay, mabini, tanauan city batangas', 'Business blessing', 'CGM Mabini, Tanauan', 'asd a af sgf dh gjnghfjty j  tre ', 10, 'Rejected'),
(19, '2022-11-08', 'John Kenneth M. Lopez', 'arlenelopez30@gmail.com', '09771183520', '3:00pm', '12 barangay, mabini, tanauan city batangas', 'Business blessing', 'CGM Las Piñas Main', 'ad agghfdg hf ghfg hfgh fg h', 1, 'Confirmed'),
(20, '2022-11-09', 'John Kenneth M. Lopez', 'lopezkenneth25@yahoo.com', '09771183520', '3:00pm', '12 barangay, mabini, tanauan city batangas', 'Water baptism', 'CGM Las Piñas Main', 'asd sgfgfd sghd fgd fgfd gdf ', 1, 'Confirmed'),
(22, '2023-01-03', 'john kenneth lopez', 'lopezkenneth25@yahoo.com', '09771183520', '09:00AM-11:00AM', '12 barangay, mabini, tanauan city batangas', 'Business blessing', 'CGM Las Piñas Main', '', 1, 'Confirmed');

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
(22, 'CGM Mabini, Tanauan', '2022/11/23', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', '012 Mabini Tanauan City, Batangas'),
(23, 'CGM Mabini, Tanauan', '2022/11/23', 'Vergel Bryan Tolentino', 'Male', '09516438165', '22', 'sto tomas City, Batangas'),
(24, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(25, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(26, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(27, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(28, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(31, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(32, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(33, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(34, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(35, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(36, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(37, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(38, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(39, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(40, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(41, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(42, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(43, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas'),
(44, 'CGM Mabini, Tanauan', '2022/11/30', 'John Kenneth M. Lopez', 'Male', '09771183520', '22', 'Brgy. Mabini Tanauan City, Batangas');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`id`, `cgmchapter`) VALUES
(1, 'CGM Las Piñas Main'),
(2, 'CGM Bacoor, Cavite'),
(3, 'CGM Balete, Batangas'),
(4, 'CGM Bustos, Bulacan'),
(5, 'CGM Cabuyao, Laguna'),
(6, 'CGM Candaba, Pampanga'),
(7, 'CGM EDSA Mandaluyong'),
(8, 'CGM Gattaran, Cagayan'),
(9, 'CGM Hinigaran, Negros'),
(10, 'CGM Mabini, Tanauan'),
(11, 'CGM Mariveles, Bataan'),
(12, 'CGM Nasugbu, Batangas'),
(13, 'CGM Navotas City'),
(14, 'CGM Prieto Diaz, Sorsogon'),
(15, 'CGM Pulilan, Bulacan'),
(16, 'CGM Sampaloc, Quezon'),
(17, 'CGM San Pedro, Laguna'),
(18, 'CGM Sta. Rosa, Laguna'),
(19, 'CGM Taguig City'),
(20, 'CGM Gen. Tinio, Nueva Ecija');

-- --------------------------------------------------------

--
-- Table structure for table `cmimage`
--

CREATE TABLE `cmimage` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmimage`
--

INSERT INTO `cmimage` (`id`, `image`, `info`) VALUES
(1, 'upload/women.png', 'This council is focusing on engaging all women from the ages of 30 and up. We mentor the young women in developing their relationship with God, not just about God but also about the community that is part of this church.<br><span> Be part of the Womens Council. Look for Sis. Elsa Fiedelan and Ptr. Alicia Serrano.</span>'),
(2, 'upload/men.png', 'This council is primarily interested in attracting men aged 30 and up. Also, to mentor the young men to develop their relationship and appreciate their love for God, not just for God but also for the other community that is part of this church.<br><span> Be part of the Men\'s Council. Look for Ptr. Josepino Jumawan and Bro. Danny Catimbuhan.</span>'),
(3, 'upload/ymc.png', 'The purpose of the Youth Council is to encourage the youngsters to develop their relationships and place their trust in other people and in our beloved God. These kinds of opportunities will increase your skills and lead them in a good way to influence other communities.<br><span> Be a part of the Youth Council. Look for Sis. Abie Canedo and Bro. Lemuel Beato.</span>'),
(4, 'upload/yam.png', 'This ministry is focusing on making connections to guide the young in taking the steps to gather and make actions and decisions. Also, to more appreciate the love of God and reach out to our family and communities.<br><span> Be part of the Young Adult Ministry. Look for Sis. Esther Villar and Bro. Daniel Dela Llana.</span>'),
(5, 'upload/Ycouples.png', 'The ministry will help to address their living needs and issues that they experience when they are together. The Young Couples Ministry will assist and guide them in preparing themselves for the new path of their life.<br><span>\n                         Come and join the Young Couples Missionary Council. Look for Sis. Roshel Lomboy.</span>'),
(6, 'upload/senior.png', 'The ministry is about appreciating them, spending time with them, and cherishing their time with the seniors. They give seniors the opportunity to share their professional gifts and talents, to encourage each other in their faith, and to be witnesses to their families.<br><span> Come and join the Senior Missionary Council. Look for Sis. Bhabes Madrid.</span>'),
(7, 'upload/children.png', 'Every Sunday, the children will attend church for activities and programs that will help them develop their spiritual knowledge, communication skills, and leadership. This ministry will help them accept and learn about Jesus. <br><span>\n                        Be part of the Children\'s Ministry. Look for Sis. Emma Regulacion.</span>'),
(8, 'upload/music.png', 'We offer the love and harmony that delivered the message to God through singing and worship.  There are many ways to become part of this ministry by playing the instrument or singing and influencing everybody to become part of this ministry and community. <br><span>Be part of the Music Ministry. Look for Bro. Frank Lemual Beato and Bro. Francis Millard Cañedo.</span>'),
(9, 'upload/media.png', 'We are the people that communicate and spread all the messages of God from different parts of the world by using different types of social media. We can deliver by using graphic images, PowerPoint presentations, and livestream. <br><span>Be part of the Media Ministry. Look for Bro. Carl Dematera and Sis. Cora Cañedo.</span>'),
(11, 'upload/dance.png', 'These people are focused on the dancing presentation, or interpretive dance, which is a type of art used to worship God\'s glory. Through the dancing, they can deliver the message of each verse and words with their hearts. <br><span>Be part of the Dance Ministry. Look for Sis. Ivy Batanes.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `cmvideo`
--

CREATE TABLE `cmvideo` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `head` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmvideo`
--

INSERT INTO `cmvideo` (`id`, `video`, `head`) VALUES
(1, 'upload/counmin.mp4', 'Church councils are gatherings in the church, and a community of people from all ages that get together to serve the church and to know more about God, service, and fellowship.');

-- --------------------------------------------------------

--
-- Table structure for table `event_archive`
--

CREATE TABLE `event_archive` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_archive`
--

INSERT INTO `event_archive` (`id`, `title`, `image`, `des`, `date`, `time`, `loc`) VALUES
(18, 'YOUTH ANNUAL ONLINE', 'upload/online.jpg', 'I am the vine; you are the branches. If you remain in me and I in you, you will bear much fruit; apart from me you can do nothing.', '2021-10-28', '08:00', 'CGM Las pinan Main'),
(19, 'Isang Tinig', ' upload/tinig.jpg', ' God said to Moses, “I am who I am.[a] This is what you are to say to the Israelites: ‘I am has sent me to you.’”', '2022-10-29', '08:00', 'CGM Las pinas main');

-- --------------------------------------------------------

--
-- Table structure for table `give`
--

CREATE TABLE `give` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `gcash` text NOT NULL,
  `gform` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `give`
--

INSERT INTO `give` (`id`, `cgmchapter`, `des`, `method`, `gcash`, `gform`) VALUES
(1, 'CGM Las Piñas Main', 'You can use this method to send your Tithes and offerings, just click the Google form to see the details:', 'Google form', '0921-786-6788', 'https://forms.gle/8rM6zML53ta9jz5y6'),
(2, 'CGM Bacoor, Cavite', '', '', '', ''),
(3, 'CGM Balete, Batangas', '', '', '', ''),
(4, 'CGM Bustos, Bulacan', '', '', '', ''),
(5, 'CGM Cabuyao, Laguna', '', '', '', ''),
(6, 'CGM Candaba, Pampanga', '', '', '', ''),
(7, 'CGM EDSA Mandaluyong', '', '', '', ''),
(8, 'CGM Gattaran, Cagayan', '', '', '', ''),
(9, 'CGM Hinigaran, Negros', '', '', '', ''),
(10, 'CGM Mabini, Tanauan', '', '', '', ''),
(11, 'CGM Mariveles, Bataan', '', '', '', ''),
(12, 'CGM Nasugbu, Batangas', '', '', '', ''),
(13, 'CGM Navotas City', '', '', '', ''),
(14, 'CGM Prieto Diaz Sorsogon', '', '', '', ''),
(15, 'CGM Pulilan, Bulacan', 'You can send your Tithes and Offerings in this Bank Account | Acc. name: Church of Gods Miracles, Inc | PNB Robinsons Pulilan', 'Account Number: 200910049764', '', ''),
(16, 'CGM Sampaloc, Quezon', '', '', '', ''),
(17, 'CGM San Pedro, Laguna', '', '', '', ''),
(18, 'CGM Sta. Rosa, Laguna', '', '', '', ''),
(19, 'CGM Taguig City', '', '', '', ''),
(20, 'CGM Gen. Tinio, Nueva Ecija', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `givepic`
--

CREATE TABLE `givepic` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `givepic`
--

INSERT INTO `givepic` (`id`, `image`, `title`, `info`) VALUES
(1, ' upload/build.jpg', 'Building Support', 'All the offerings that will be gathered in services or through digital or online donations will help the church to create establishments like new CGM chapters to different places in the Philippines. Building new Churches will reach and help more people.'),
(2, ' upload/mission.jpg', 'Mission Support', 'We desire to contribute and build special programs to assist individuals impacted by the disasters, as well as medical missions to assist them with their medical concerns and to provide some hope using the word of God to let them know they are not alone in this hardships.'),
(3, 'upload/giving.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gmap`
--

CREATE TABLE `gmap` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `f2fservice` varchar(255) NOT NULL,
  `online` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `googlemap` longtext NOT NULL,
  `fblink` longtext NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gmap`
--

INSERT INTO `gmap` (`id`, `cgmchapter`, `f2fservice`, `online`, `address`, `googlemap`, `fblink`, `lat`, `lng`) VALUES
(1, 'CGM Las Piñas Main', 'Sunday | <span>1st Service 7:00am-8:30am</span> | <span>2nd service 9:00am-10:30am</span> | <span>3rd Service 4:00pm-5:30pm</span>', 'Sunday | <span>1st Service 7:00am-8:30am</span> | <span> service 9:00am-10:30am</span> | <span>3rd Service 4:00pm-5:30pm</span> | To watch the live stream just go to CGM Las Piñas Main Facebook Page.', 'Lot 1-A Liderato Hernandez St., 1750 Metrocor, Southgate Homes Almanza Uno, Las Pinas, Cavite', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d901.8155137319616!2d121.01069839395186!3d14.436063075434395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1de0f20117f%3A0xe5adc43eafd4b06e!2sChurch%20of%20Gods%20Miracles!5e1!3m2!1sen!2sph!4v1665694154854!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/CGMMain', '14.435992', '121.011693'),
(2, 'CGM Bacoor, Cavite', '', '', '', '', '', '', ''),
(3, 'CGM Balete, Batangas', 'Sunday |<span> 1st Service 7:30am-10:30am</span> | <span>2nd to 5th Sunday, Afternoon Service at Brgy. Looc, Brgy. Malabanan, Brgy. Solis 2:00pm-4:00pm</span>', '', 'Brgy. Palsara, Balete, Batangas', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57824.07506735483!2d121.02612018585205!3d14.013994872102785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6de22f39faf5%3A0x6970ce9d5fdeadbc!2sChurch%20Of%20God%C5%9B%20Miracles!5e1!3m2!1sen!2sph!4v1665694056850!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '14.013974', '121.096109'),
(4, 'CGM Bustos, Bulacan', 'Sunday | <span>1st Service 9:00am-10:30am</span> | ', 'Visit Our FaceBook Page. Just Click the FB Icon', 'LACONSOLACION SUBDIVISION SAN PEDRO HIGH WAY BUSTOS BULACAN\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', 'https://www.facebook.com/profile.php?id=100064875724235', '', ''),
(5, 'CGM Cabuyao, Laguna', '', '', '', '', '', '', ''),
(6, 'CGM Candaba, Pampanga', 'Sunday | <span>1st Service 8:30am-10:30am</span> |', 'Sunday | <span>8:30am-10:30am</span> | To watch the live stream just go to CGM Candaba, Pampanga Facebook Page.', 'Sitio 3 Pulong Palazan, Candaba Pampanga\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', 'https://www.facebook.com/profile.php?id=100064536345759', '', ''),
(7, 'CGM EDSA Mandaluyong', 'Sunday Service | <span>10:00am-11:30am </span> | ', 'Sunday | <span>10:00am-11:30am </span>| To watch the live stream just go to CGM Edsa Facebook.', '#304 SHAW BOULEVARD (DUMLAO SPORTS CENTER) PLEASANT HILLS, MANDALUYONG CITY', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.8236003449283!2d121.04634831874382!3d14.585758000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c83bd0286f0f%3A0x46f2a4fd36b42dad!2sChurch%20Of%20God&#39;s%20Miracles!5e1!3m2!1sen!2sph!4v1665698199940!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/cgmedsa07', '14.585701', '121.048446'),
(8, 'CGM Gattaran, Cagayan', '', '', '', '', '', '', ''),
(9, 'CGM Hinigaran, Negros', '', '', '', '', '', '', ''),
(10, 'CGM Mabini, Tanauan', 'Sunday |<span> 1st Service 9:00am-11:00am</span> | <span>2nd service at Bagbag Area 3:00pm-5:00pm</span>', 'Sunday |<span> 9:00am-11:00am</span> | To watch the live stream just go to CGM Mabini Tanauan Facebook Page.', '012 Brgy. Mabini, Tanauan City, Batangas', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4296.959604661916!2d121.11772050826217!3d14.058818325462532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6fb321148ee9%3A0x6bb27b83fe3fa56b!2sChurch%20of%20Gods%20Miracles%20Mabini%20Tanauan%20Chapter!5e1!3m2!1sen!2sph!4v1665693942024!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/edwinmoncayo81', '14.060477', '121.115938'),
(11, 'CGM Mariveles, Bataan', '', '', '', '', '', '', ''),
(12, 'CGM Nasugbo, Batangas', 'Sunday | <span>1st Service 8:00am-10:00am</span> |', '', 'Campo Palico Brgy.Bilaran  Nasugbu Batangas\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', '', '', ''),
(13, 'CGM Navotas City', 'Sunday | <span>1st Service 8:00am-10:30am</span> |', 'Visit Our FaceBook Page. Just Click the FB Icon', '#23 Quintos Street San Jose Navotas City\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', 'https://www.facebook.com/profile.php?id=100069676473144', '', ''),
(14, 'CGM Prieto Diaz, Sorsogon', '', '', '', '', '', '', ''),
(15, 'CGM Pulilan, Bulacan', 'Sunday Service | <span>8:00am-10:30am</span> | <span>Friday Miracle Night 7:00pm-8:30pm</span>', 'Sunday | <span>8:00am-10:30am</span> | <span>Friday Miracle Night 7:00pm-8:30pm</span> | To watch the live stream just go to CGM pulilan Facebook.', '072 Dimas St. Lumbac Pulilan, Bulacan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.4187822216086!2d120.86981591774259!3d14.912315200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339654e0b1980c43%3A0x193045d224cf992c!2sChurch%20Of%20God&#39;s%20Miracles!5e1!3m2!1sen!2sph!4v1665698115489!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/CGM-Pulilan-107443997478145', '14.912350', '120.872064'),
(16, 'CGM Sampaloc, Quezon', 'Sunday | <span>1st Service 9:00am-11:00am</span> |', '', 'National Highway, Bgy. Ilayang-Owain, Sampaloc, Quezon\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', '', '', ''),
(17, 'CGM San Pedro, Laguna', 'Sunday | <span>1st Service 9:00am-10:30am</span> |', 'Sunday | <span>9:00am-10:30am</span> | To watch the live stream just go to CGM San Pedro Facebook Page.', 'Heron St. Camella Woodhills, Brgy. San Antonio, San Pedro City, Laguna\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', 'https://www.facebook.com/CGMSanPedro', '', ''),
(18, 'CGM Sta. Rosa, Laguna', '', '', '', '', '', '', ''),
(19, 'CGM Taguig City', 'Sunday | <span>1st Service 9:00am-11:00am</span> |', 'Sunday | <span>9:00am-11:00am</span> | To watch the live stream just go to CGM Taguig Facebook Page.', '14 Rongo St., Brgy. Central Signal Village, Taguig\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', 'https://www.facebook.com/cgmtaguigchapter', '', ''),
(20, 'CGM Gen. Tinio, Nueva Ecija', 'Sunday | <span>1st Service 8:00am-10:00am</span> |', '', 'Purok gulod bgry San Pedro General tinio Nueva Ecija.\r\n<br><br>\r\nWE WILL SOON BE ADDING A GOOGLE MAP FOR THIS CHAPTER!!!', '', '', '', '');

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
(6, 'upload/mission.jpg', 'upload/img1.jpg', 'upload/img3.jpg', 'upload/img5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `limang`
--

CREATE TABLE `limang` (
  `id` int(11) NOT NULL,
  `limang` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `limang`
--

INSERT INTO `limang` (`id`, `limang`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VNLQ82P1Jnk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5MaJU2K2eyw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/s0dt9ouQHZc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aPgWx3_fJok\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rQn4Ew7lJ6A\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RE1XNR7JRYk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ekxlyTC0Pu0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aygCvgp1hEQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FfR2g_1d1w4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jIhA1-Nj1AA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(11, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Qkwq9JQzg2U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(12, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/peYt8ax2vzY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(13, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UxnqAIMbEt8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(14, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WKfngIBEtzs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(16, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Qujz7pak3zo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `manna`
--

CREATE TABLE `manna` (
  `id` int(11) NOT NULL,
  `manna` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manna`
--

INSERT INTO `manna` (`id`, `manna`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eee1EPTQtIM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=362&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F676418783736354%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(3, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F8127954743941193%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(4, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F479045703992738%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(5, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F512926534018073%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(6, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F537530438281501%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(7, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F483478937166031%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(8, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F1159140261354109%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(9, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F1270795317053971%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>'),
(11, '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcgmdailymanna%2Fvideos%2F1286941102070852%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\" poster=\"css/image/white.jpg\" ></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `misser`
--

CREATE TABLE `misser` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `misser`
--

INSERT INTO `misser` (`id`, `image`, `title`, `info`) VALUES
(1, 'upload/reach.jpg', 'Reaching Out the Poor', 'We want to encourage everyone to help the people that are affected by poverty. Giving them some clothes, food and supplies specially school supplies for the children to help them and realize that even if they have many problems in life, God is always there and he will find an instrument for spreading hopes and guiding the other people that need help.'),
(2, 'upload/medical.jpg', 'Medical Mission', 'We organized a medical mission to the place that was not close to the hospital or health center to ensure that they will receive medical treatment in spite of their problem God will always be on their side. This is one of our goals which is to help them and attach healthcare volunteers with mission-driven organizations in need, raising public access to quality healthcare.'),
(3, 'upload/dental.png', 'Dental Mission', 'We organized a dental mission not only for helping the other people and giving them some information for protecting their teeth but also hygiene.'),
(4, 'upload/coffee2.jpg', 'Coffee with God', 'Coffee with God is an early evangelism to street sweepers where the word of God is shared to them and they are prayed for. Then they will be given coffee and pandesal or food to eat.'),
(5, 'upload/house.jpg', 'House-to-House', 'House to House evangelism is we randomly go a house giving tracks and praying for the household.'),
(6, 'upload/car.jpg', 'Car Blessing', 'A blessing rite refers to a ceremonial act where a person of authority in church will offer a prayer to something or someone. In this case, a car. Usually, pastors handle this ceremony. House blessings might be more familiar to some, but car blessings work just the same way as the former. Car blessing is yet another gesture of giving thanks for having received this kind of blessing. Many asked and worked for it but not everyone still had it.'),
(7, 'upload/wedding.jpg', 'Wedding', 'A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes. Most wedding ceremonies involve an exchange of marriage vows by a couple, presentation of a gift (offering, rings, symbolic item, flowers, money, dress), and a public proclamation of marriage by an authority figure or celebrant.'),
(8, 'upload/child.jpg', 'Child Dedication', 'Child dedication A child dedication or baby presentation is an act of consecration of children to God practiced in evangelical churches, such as those of the Baptist tradition.'),
(9, 'upload/housebless.jpg', 'House Blessing', 'House blessings (also known as house healings, house clearings, house cleansings and space clearing) are rites intended to protect the inhabitants of a house or apartment from misfortune, whether before moving into it or to \"heal\" it after an occurrence.'),
(10, 'upload/business.jpg', 'Business Blessing', 'A blessing ceremony for new businesses attracts the presence of God into your new business space and allows God to bless your business, providing protection, harmony, and the power to build wealth in your business activities and enterprise.'),
(11, 'upload/water.jpg', 'Water Baptism', 'Water baptism is an act of obedience that follows conversion to portray symbolically the washing away of our sins. Water baptism calls for immersion instead of sprinkling. Many groups that have only sprinkled in times past are now seeing that the Scriptural method is total immersion in water. In fact, the Greek word “baptism” means to immerse, submerse and emerge.');

-- --------------------------------------------------------

--
-- Table structure for table `near`
--

CREATE TABLE `near` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `iframe` longtext NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `near`
--

INSERT INTO `near` (`id`, `cgmchapter`, `iframe`, `lat`, `lng`) VALUES
(1, 'CGM Las Piñas Main', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d901.8155137319616!2d121.01069839395186!3d14.436063075434395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d1de0f20117f%3A0xe5adc43eafd4b06e!2sChurch%20of%20Gods%20Miracles!5e1!3m2!1sen!2sph!4v1665694154854!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '14.435992', '121.011693'),
(2, 'CGM Balete, Batangas', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57824.07506735483!2d121.02612018585205!3d14.013994872102785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6de22f39faf5%3A0x6970ce9d5fdeadbc!2sChurch%20Of%20God%C5%9B%20Miracles!5e1!3m2!1sen!2sph!4v1665694056850!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '14.013974', '121.096109'),
(3, 'CGM EDSA Mandaluyong', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.8236003449283!2d121.04634831874382!3d14.585758000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c83bd0286f0f%3A0x46f2a4fd36b42dad!2sChurch%20Of%20God&#39;s%20Miracles!5e1!3m2!1sen!2sph!4v1665698199940!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '14.585701', '121.048446'),
(4, 'CGM Mabini, Tanauan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4296.959604661916!2d121.11772050826217!3d14.058818325462532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6fb321148ee9%3A0x6bb27b83fe3fa56b!2sChurch%20of%20Gods%20Miracles%20Mabini%20Tanauan%20Chapter!5e1!3m2!1sen!2sph!4v1665693942024!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '14.060477', '121.115938'),
(5, 'CGM Pulilan, Bulacan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.4187822216086!2d120.86981591774259!3d14.912315200000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339654e0b1980c43%3A0x193045d224cf992c!2sChurch%20Of%20God&#39;s%20Miracles!5e1!3m2!1sen!2sph!4v1665698115489!5m2!1sen!2sph\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '14.912350', '120.872064');

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
  `report` longtext NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`id`, `cgmchapter`, `name`, `email`, `request`, `report`, `status`) VALUES
(11, 'CGM Hinigaran, Negros', 'John Kenneth Lopez', 'lopezalyzanicole@gmail.com', 'fg hfgh fgh fgh fgh fg', 'swf sdgfd gdfd hgh ', 'Pending'),
(12, 'CGM Gattaran, Cagayan', 'John Kenneth Lopez', 'lopezkenneth25@yahoo.com', '', 'asd adggdafdg dfg dfg dgf', 'Pending'),
(14, 'CGM Mabini, Tanauan', 'John Kenneth Lopez', 'lopeznneth204@gmail.com', 'pakisama po sa prayer nyo kami ng mga kaibigan ko malapit na po kasi ang Final defense namin, dito po nakasalalay ang kinabukasan po namin. sana po ay makapasa kami in Jesus name alam po namin di kami iiwan ni Lord. Amen.', '', 'Pending'),
(15, 'CGM Mabini, Tanauan', 'John Kenneth Lopez', 'lopezalyzanicole@gmail.com', 'as da sd asd asd asd asd as dasd asd asd as', 'ad asd asd asdas das dd as das das d asdas das das das', 'Pending'),
(16, 'CGM Mabini, Tanauan', 'John Kenneth Lopez', 'lopeznneth204@gmail.com', 'asd asdas fdsf sdf dsaf dsf sdfsd fsd fsd fds fsd fsdf sdfsd fsd fsd fs dfsd fsd fsd fs dfs dfsd fsd fsd fs', '', 'Pending'),
(18, 'CGM Las Piñas Main', 'John Kenneth Lopez', 'lopeznneth204@gmail.com', ' asad ad asd asd asda s', 'das d asd asdas', 'Pending'),
(19, 'CGM Balete, Batangas', 'John Kenneth Lopez', 'arlenelopez30@gmail.com', 'asd asd asda sdas d', 'asd asd asd asd asd', 'Pending'),
(21, 'CGM Las Piñas Main', 'Grace', 'grace.grumo12@gmail.com', ' asdas das das', 'asd asd asd asd', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `id` int(11) NOT NULL,
  `cgmchapter` varchar(255) NOT NULL,
  `live` longtext NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`id`, `cgmchapter`, `live`, `title`) VALUES
(1, 'CGM Las Piñas Main', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FCGMMain%2Fvideos%2F540209184254025%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>', 'CGM WORSHIP 3RD SERVICE | PTR. J. SERRANO | 11-20-22'),
(2, 'CGM Bacoor, Cavite', '', ''),
(3, 'CGM Balete, Batangas', '', ''),
(4, 'CGM Bustos, Bulacan', '', ''),
(5, 'CGM Cabuyao, Laguna', '', ''),
(6, 'CGM Candaba, Pampanga', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100064536345759%2Fvideos%2F660919782368578%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>', 'GIVE GOD HIS DUE THROUGH YOUR HEART'),
(7, 'CGM EDSA Mandaluyong', '', ''),
(8, 'CGM Gattaran, Cagayan', '', ''),
(9, 'CGM Hinigaran, Negros', '', ''),
(10, 'CGM Mabini, Tanauan', '<iframe src=\"https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fedwin.moncayo.9%2Fvideos%2F654201156413675%2F&show_text=false&width=560&t=0\" width=\"560\" height=\"314\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\" allowFullScreen=\"true\"></iframe>', 'CHURCH OF GODS MIRACLES TANAUAN SUNDAY SERVICE'),
(11, 'CGM Mariveles, Bataan', '', ''),
(12, 'CGM Nasugbu, Batangas', '', ''),
(13, 'CGM Navotas City', '', ''),
(14, 'CGM Prieto Diaz Sorsogon', '', ''),
(15, 'CGM Pulilan, Bulacan', '', ''),
(16, 'CGM Sampaloc, Quezon', '', ''),
(17, 'CGM San Pedro, Laguna', '', ''),
(18, 'CGM Sta. Rosa, Laguna', '', ''),
(19, 'CGM Taguig City', '', ''),
(20, 'CGM Gen. Tinio, Nueva Ecija', '', '');

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
  `loc` varchar(255) NOT NULL,
  `curdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `title`, `image`, `des`, `date`, `time`, `loc`, `curdate`) VALUES
(20, 'Isang Tinig', ' upload/tinig.jpg', ' God said to Moses, “I am who I am.[a] This is what you are to say to the Israelites: ‘I am has sent me to you.’”', '2023-10-29', '08:00', 'CGM Las pinas main', '2023-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmimage`
--
ALTER TABLE `cmimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmvideo`
--
ALTER TABLE `cmvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_archive`
--
ALTER TABLE `event_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `give`
--
ALTER TABLE `give`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `givepic`
--
ALTER TABLE `givepic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gmap`
--
ALTER TABLE `gmap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limang`
--
ALTER TABLE `limang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manna`
--
ALTER TABLE `manna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misser`
--
ALTER TABLE `misser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `near`
--
ALTER TABLE `near`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prayer`
--
ALTER TABLE `prayer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cmimage`
--
ALTER TABLE `cmimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cmvideo`
--
ALTER TABLE `cmvideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_archive`
--
ALTER TABLE `event_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `give`
--
ALTER TABLE `give`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `givepic`
--
ALTER TABLE `givepic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gmap`
--
ALTER TABLE `gmap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `limang`
--
ALTER TABLE `limang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `manna`
--
ALTER TABLE `manna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `misser`
--
ALTER TABLE `misser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `near`
--
ALTER TABLE `near`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
