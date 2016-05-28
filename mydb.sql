-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2016 at 01:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `First name` varchar(20) DEFAULT NULL,
  `Last name` varchar(20) DEFAULT NULL,
  `Reg_number` bigint(15) NOT NULL,
  `Mobile_number` bigint(15) NOT NULL,
  `Birthday` date NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Hobby` varchar(50) NOT NULL,
  `Programme` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Roll` varchar(10) NOT NULL,
  `Userid` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Verified` varchar(5) NOT NULL DEFAULT 'no',
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`First name`, `Last name`, `Reg_number`, `Mobile_number`, `Birthday`, `Age`, `Gender`, `Email`, `Hobby`, `Programme`, `Department`, `Semester`, `Roll`, `Userid`, `Password`, `Verified`, `image_name`) VALUES
('Jay', 'Shanker', 20130052, 9476059341, '1995-06-25', '20 years 9 months 3 days ', 'male', 'jayshanker37@gmail.com', 'Reading,Table Tennis', 'B.Tech', 'IT', 'Sixth Semester', '13/IT/01', 'shanker', '123456789', 'yes', 'jay.jpg'),
('Veena', 'Hembrom', 20130150, 8420354266, '1995-01-01', '21 years 2 months 27 days ', 'female', 'veenahmbrm20@gmail.com', 'Swimming,Reading', 'B.Tech', 'IT', 'Sixth Semester', '13/IT/05', 'veena12', '1234567', 'yes', 'veena.jpg'),
('Deepshikha', 'Bhoumic', 20130452, 7123578940, '1995-05-08', '20 years 10 months 20 days ', 'female', 'deepshikha@gmail.com', 'Swimming', 'B.Tech', 'IT', 'Sixth Semester', '13/IT/90', 'deepa1', '123456', 'no', 'itlogo.png'),
('Sakshi', 'Saraogi', 20130506, 9831538292, '1994-07-07', '21 years 8 months 21 days ', 'female', 'sakshi.saraogi07@yahoo.in', 'Reading', 'B.Tech', 'IT', 'Sixth Semester', '13/IT/29', 'sakshi', 'sakshi07', 'yes', 'sakshi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
 ADD PRIMARY KEY (`Reg_number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
