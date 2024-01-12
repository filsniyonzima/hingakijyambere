-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hingakijyambere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `PASSWORD` varchar(10) NOT NULL,
  `telefone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`PASSWORD`, `telefone`) VALUES
('fils', 78);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `address` varchar(30) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `firstname` char(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `CODE` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`address`, `telefone`, `firstname`, `lastname`, `CODE`, `password`) VALUES
('kamo/mugina', 79, 'ikuza', 'fils', '12a', 'o1a'),
('kanmo/mugina', 79, 'leo', 'fidele', '01a', '00a');

-- --------------------------------------------------------

--
-- Table structure for table `agronomist`
--

CREATE TABLE `agronomist` (
  `address` varchar(30) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `agronomistid` varchar(5) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agronomist`
--

INSERT INTO `agronomist` (`address`, `telefone`, `agronomistid`, `name`) VALUES
('musanze/ruhuha', 780182085, '11a', 'fil'),
('kamo/mugina', 790000000, '122a', 'fil'),
('kamo/mugina', 797979970, '12a', 'fo');

-- --------------------------------------------------------

--
-- Table structure for table `cooperative`
--

CREATE TABLE `cooperative` (
  `copid` varchar(10) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `copsize` int(11) DEFAULT NULL,
  `request` varchar(30) DEFAULT NULL,
  `plotsize` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmerid` varchar(10) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `secondname` varchar(20) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `plotsize` int(11) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmerid`, `firstname`, `secondname`, `address`, `telefone`, `plotsize`, `payment`, `password`) VALUES
('12a', 'king', 'mukuru', 'musanze/ruhuha', 797979970, 5, 'cash', '111'),
('232f', 'qween', 'mukire', 'kamo/mugina', 791398611, 477474, 'MOMO', '123');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `fertid` varchar(10) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(25) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentprogress`
--

CREATE TABLE `paymentprogress` (
  `farmerid` varchar(10) DEFAULT NULL,
  `payid` varchar(10) NOT NULL,
  `season` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `requestedid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requested`
--

CREATE TABLE `requested` (
  `articleid` varchar(10) DEFAULT NULL,
  `stockid` varchar(10) DEFAULT NULL,
  `season` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `farmerid` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requested`
--

INSERT INTO `requested` (`articleid`, `stockid`, `season`, `quantity`, `farmerid`, `date`, `description`) VALUES
('1212a', '34r', '3', 56, '1222r', '2023-12-31', 'ibijumba'),
('12345', '34r', '3', 5555, '10', '2023-12-31', 'matoke'),
('11', '123d', '2', 1, '12a', '2024-01-03', 'soya'),
('1111', '123d', '1', 23, '12a', '2024-01-03', 'eggs'),
('1233', '4554', '1', 4545, '12a', '2024-01-03', 'soya'),
('1233', '4554', '1', 4545, '12a', '2024-01-03', 'soya'),
('55w', '4554', '1', 12, '12a', '2024-01-04', 'pilpil'),
('12a', '34r', '3', 1, '232f', '2024-01-04', 'ibijumba'),
('12345', '4554', '1', 23, '01a', '2024-01-04', 'kawunga'),
('12345', '4554', '1', 23, '01a', '2024-01-04', 'kawunga'),
('12hh', '4554', '1', 3434, '', '2024-01-11', 'ibijumba'),
('12hh', '4554', '1', 3434, '', '2024-01-11', 'ibijumba');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `articleid` varchar(10) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(25) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`articleid`, `price`, `description`, `date`) VALUES
('', 3000, 'npk', '2023-12-25'),
('120f', 100, 'hello', '2024-01-24'),
('1212a', 45, 'hihih', '2023-12-31'),
('122c', 2000, 'soya', '2024-01-04'),
('12345', 12900, 'ibijumba', '2023-12-20'),
('12a', 12, 'kawa', '2024-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `storekeeper`
--

CREATE TABLE `storekeeper` (
  `storekid` varchar(5) NOT NULL,
  `stockid` varchar(5) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastmame` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storekeeper`
--

INSERT INTO `storekeeper` (`storekid`, `stockid`, `firstname`, `lastmame`, `password`, `address`) VALUES
('00s', 'stock', 'el deblande', 'dev', '0s', 'kayonza/rweru'),
('01s', '1s', 'felicieneer', 'developer', '1s', 'rwmagana/buhanda'),
('02s', '4554', 'ikuza', 'devis', '2s', 'nyagatre/rusumo'),
('03s', '34r', 'kwizera', 'jmv', '3s', 'kamomyi/ruyenzi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `role`) VALUES
('00f', '111', 'farmer'),
('01f', '123', 'farmer'),
('00a', '00a', 'agent'),
('01a', '00b', 'agent'),
('02a', '00c', 'agent'),
('00ag', '12a', 'agronomist'),
('01ag', '11a', 'agronomist'),
('02ag', '122a', 'agronomist'),
('00s', '0s', 'storekeeper'),
('01s', '1s', 'storekeeper'),
('02s', '2s', 'storekeeper'),
('03s', '3s', 'storekeeper'),
('0ad', 'filss', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`PASSWORD`);

--
-- Indexes for table `agronomist`
--
ALTER TABLE `agronomist`
  ADD PRIMARY KEY (`agronomistid`);

--
-- Indexes for table `cooperative`
--
ALTER TABLE `cooperative`
  ADD PRIMARY KEY (`copid`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmerid`);

--
-- Indexes for table `paymentprogress`
--
ALTER TABLE `paymentprogress`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`articleid`);

--
-- Indexes for table `storekeeper`
--
ALTER TABLE `storekeeper`
  ADD PRIMARY KEY (`storekid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
