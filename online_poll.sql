-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 01:59 PM
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
-- Database: `online_poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstrator`
--

CREATE TABLE `adminstrator` (
  `ec_id` varchar(25) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminstrator`
--

INSERT INTO `adminstrator` (`ec_id`, `gmail`, `status`) VALUES
('2001', 'abcd@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `name` varchar(20) NOT NULL,
  `voter` varchar(35) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `aadhaar` varchar(12) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` varchar(10) DEFAULT 'pending',
  `dateofsubmit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`name`, `voter`, `age`, `gender`, `gmail`, `phone`, `address`, `aadhaar`, `photo`, `status`, `dateofsubmit`) VALUES
('Santu Paul', 'santupaul123', '21', 'male', 'paulsantu185@gmail.com', '8016690165', 'Deshra', '', '', NULL, '2023-06-28'),
('', '', '', '', '', '', '', '', '', NULL, '2023-06-28'),
('', '', '', '', '', '', '', '', '', NULL, '2023-06-28'),
('', '', '', 'male', '', '', '', '', 'upload/', NULL, '2023-06-28'),
('', '', '', 'male', '', '', '', '', 'upload/', NULL, '2023-06-28'),
('Santu Paul', '', '', 'male', '', '', '', '', 'candidate/', NULL, '2023-06-28'),
('', '', '', '', '', '', '', '', 'candidate/', NULL, '2023-06-28'),
('', '', '', '', '', '', '', '', 'candidate/', NULL, '2023-06-28'),
('', '', '', '', '', '', '', '', 'candidate/', NULL, '2023-06-28'),
('Santu Paul', 'NRZ2310118', '21', 'male', 'paulsantu185@gmail.com', '8016690165', 'Deshra Bankura', '861784664568', 'candidate/mypic.jpg', NULL, '2023-06-28'),
('Anupama Panja', 'WB785/652/2593', '21', 'female', 'panjaAnupama@gmail.com', '4566995689', 'New Jalpaiguri', '56984578126', 'candidate/deadpool-marvel-2a-1920x1080.jpg', NULL, '2023-06-28'),
('Anupama Panja', 'WB785/652/2593', '21', 'female', 'panjaAnupama@gmail.com', '4566995689', 'New Jalpaiguri', '56984578126', 'candidate/deadpool-marvel-2a-1920x1080.jpg', NULL, '2023-06-28'),
('Anupama Panja', 'WB785/652/2593', '21', 'female', 'panjaAnupama@gmail.com', '4566995689', 'New Jalpaiguri', '56984578126', 'candidate/deadpool-marvel-2a-1920x1080.jpg', NULL, '2023-06-28'),
('Anupama Panja', 'WB785/652/2593', '21', 'female', 'panjaAnupama@gmail.com', '4566995689', 'New Jalpaiguri', '56984578126', 'candidate/deadpool-marvel-2a-1920x1080.jpg', NULL, '2023-06-28'),
('Anupama Panja', 'WB785/652/2593', '21', 'female', 'panjaAnupama@gmail.com', '4566995689', 'New Jalpaiguri', '56984578126', 'candidate/deadpool-marvel-2a-1920x1080.jpg', NULL, '2023-06-28'),
('aqFQWET', 'GWRGW34YG35', '21', '', '', '', '', '', 'candidate/', NULL, '2023-06-28'),
('ERAHW3RGH', 'ARHGAW3R', '32', 'female', 'W34tg3w5', 'arwegaw35y', 'ar53yeyg35yg5r', 'awrtgawergy3', 'candidate/wallpaperflare.com_wallpaper.jpg', NULL, '2023-06-28'),
('Sathi Raut', 'NIO2255735', '35', 'female', 'sathiraute@gmail.com', '9641028138', 'Bali', '42699712729', 'candidate/IMG-20230506-WA0001.jpg', NULL, '2023-06-28'),
('santu paul', 'NRZ2310118', '22', 'male', 'palchittaranjan185@gmail.com', '8016690165', 'deshra ', '8016690165', 'candidate/pair 1.JPG', NULL, '2023-06-28'),
('argufhvaerugvaeear', 'WFKCUVWBV', '21', 'male', 'ABCD@GMAIL.COM', '8016690165', 'abcd', '8016690165', 'candidate/', NULL, '2023-06-28'),
('Harakali Pratihar', 'harakali', '23', 'male', 'harakali', '8016690165', 'kotulpur', 'harakali', 'candidate/', NULL, '2023-06-28'),
('xyz', 'xyz', 'xyz', '', 'xyz', 'xyz', 'xyz', 'xyz', 'candidate/', NULL, '2023-06-28'),
('abc', 'abc', 'abc', 'male', 'abc', 'abc', 'abc', 'abc', 'candidate/', NULL, '2023-06-28'),
('abc', 'abc', 'abc', 'male', 'abc', 'abc', 'abc', 'abc', 'candidate/', NULL, '2023-06-28'),
('pqr', 'pqr', 'pqr', 'male', 'pqr', 'pqr', 'pqr', 'pqr', 'candidate/', NULL, '2023-06-28'),
('ami', 'ami', 'ami', 'male', 'ami', 'ami', 'ami', 'ami', 'candidate/', NULL, '2023-06-28'),
('123', '123', '123', 'male', '123', '123', '123', '123', 'candidate/', NULL, '2023-06-28'),
('999', '999', '999', '', '999', '999', '999', '999', 'candidate/', NULL, '2023-06-28'),
('abz', 'abz', 'abz', 'male', 'abz', 'abz', 'abz', 'abz', 'candidate/', NULL, '2023-06-28'),
('jhk', 'jhk', 'jhk', 'male', 'jhk', 'jhk', 'jhk', 'jhk', 'candidate/', NULL, '2023-06-28'),
('7542', '7542', '754', '', '', '', '', '', 'candidate/', NULL, '2023-06-28'),
('7542', '7542', '754', 'male', '7542', '7542', '7542', '7542', 'candidate/', NULL, '2023-06-28'),
('adob', 'adob', 'ado', 'male', 'adob', 'adob', 'adob', 'adob', 'candidate/', NULL, '2023-06-28'),
('adob', 'adob', 'ado', 'male', 'adob', 'adob', 'adob', 'adob', 'candidate/', NULL, '2023-06-28'),
('adob', 'adob', 'ado', 'male', 'adob', 'adob', 'adob', 'adob', 'candidate/', NULL, '2023-06-28'),
('rqs', 'rqs', 'rqs', 'male', 'rqs', 'rqs', 'rqs', 'rqs', 'candidate/', NULL, '2023-06-28'),
('qwe', 'qwe', 'qwe', 'male', 'qwe', 'qwe', 'qwe', 'qwe', 'candidate/', NULL, '2023-06-28'),
('qwe', 'qwe', 'qwe', 'male', 'qwe', 'qwe', 'qwe', 'qwe', 'candidate/', NULL, '2023-06-28'),
('asd', 'asd', 'asd', 'male', 'asd', 'asd', 'asd', 'asd', 'candidate/', NULL, '2023-06-28'),
('asd', 'asd', 'asd', 'male', 'asd', 'asd', 'asd', 'asd', 'candidate/', NULL, '2023-06-28'),
('asd', 'asd', 'asd', 'male', 'asd', 'asd', 'asd', 'asd', 'candidate/', NULL, '2023-06-28'),
('asd', 'asd', 'asd', 'male', 'asd', 'asd', 'asd', 'asd', 'candidate/', NULL, '2023-06-28'),
('741', '741', '741', '', '', '', '', '', 'candidate/', NULL, '2023-06-28'),
('741', '741', '741', 'male', '741', '741', '741', '741', 'candidate/pair 1.JPG', NULL, '2023-06-28'),
('742', '742', '742', 'female', '742', '742', '742', '742', 'candidate/pair 2.JPG', NULL, '2023-06-28'),
('125', '125', '125', 'male', '125', '125', '125', '125', 'candidate/Screenshot_2023-04-14-18-09-37-295_com.android.chrome[124].jpg', NULL, '2023-06-28'),
('bjp', 'bjp', 'bjp', 'male', 'bjp', 'bjp', 'bjp', 'bjp', 'candidate/', NULL, '2023-06-28'),
('inc', 'inc', 'inc', 'male', 'inc', 'inc', 'inc', 'inc', 'candidate/', NULL, '2023-06-28'),
('gWRGEWRGrw', 'NRZ2310118', 'aer', 'male', 'erhbethbeT', 'ENTBEATNEA', 'ENTETN', '', 'candidate/', NULL, '2023-06-28'),
('sagun', 'sagun', 'sag', 'male', 'sagun', 'sagun', 'sagun', 'sagun', 'candidate/', NULL, '2023-06-28'),
('anshu', 'anshu', 'ans', 'male', 'anshu', 'anshu', 'anshu', 'anshu', 'candidate/', NULL, '2023-06-28'),
('roni', 'roni', 'ron', '', 'roni', 'roni', 'roni', 'roni', 'candidate/', NULL, '2023-06-28'),
('ddc', 'ddc', 'ddc', 'male', 'ddc', 'ddc', 'ddc', 'ddc', 'candidate/', NULL, '2023-06-28'),
('emni', 'emni', 'emn', '', 'emni', 'emni', 'emni', 'emni', 'candidate/', NULL, '2023-06-28'),
('qwt', 'qwt', 'qwt', 'male', 'qwt', 'qwt', 'qwt', 'qwt', 'candidate/', NULL, '2023-06-28'),
('er', 'er', 'er', 'male', 'er', 'er', 'er', 'er', 'candidate/', NULL, '2023-06-28'),
('sumit', 'sumit', 'sum', '', 'sumit', 'sumit', 'sumit', 'sumit', 'candidate/', NULL, '2023-06-28'),
('rrr', 'rrr', 'rrr', 'male', 'rrr', 'rrr', 'rrr', 'rrr', 'candidate/', NULL, '2023-06-28'),
('qqq', 'qqq', 'qqq', 'male', 'qqq', 'qqq', 'qqq', 'qqq', 'candidate/', NULL, '2023-06-28'),
('ddd', 'ddd', '20', 'male', 'ddd@gmail.com', 'ddd', 'ddd', 'ddd', 'candidate/IMG-20230506-WA0001.jpg', '0', '2023-06-28'),
('aaa', 'aaa', '19', 'male', 'aaa@gmail.com', 'aaa', 'aaa', 'aaa', 'candidate/pair 1.JPG', 'approved', '2023-06-28'),
('ww', 'ww', '18', 'male', 'ww@gmail.com', 'ww', 'ww', 'ww', 'candidate/IMG-20210929-WA0011.jpg', 'approved', '2023-06-28'),
('qq', 'qq', '20', 'male', 'qq@gmail.com', 'qq', 'qq', 'qq', 'candidate/IMG-20210929-WA0005.jpg', 'approved', '2023-06-28'),
('ss', 'ss', '22', 'male', 'ss@gmail.com', 'ss', 'ss', 'ss', 'candidate/IMG-20210929-WA0006.jpg', 'approved', '2023-06-28'),
('adfg', 'adfg', '24', 'male', 'adfg@gmail.com', 'adfg', 'adfg', 'adfg', 'candidate/pair 2.JPG', 'approved', '2023-06-28'),
('rt', 'rt', '20', 'male', 'rt@gmail.com', 'rt', 'rt', 'rt', 'candidate/IMG-20210929-WA0009.jpg', 'approved', '2023-06-28'),
('tgh', 'tgh', '22', 'male', 'tgh@gmail.com', 'tgh', 'tgh', 'tgh', 'candidate/IMG-20210929-WA0000.jpg', 'pending', '2023-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `declaration`
--

CREATE TABLE `declaration` (
  `election_date` date NOT NULL,
  `cons_number` varchar(3) NOT NULL,
  `vote_type` varchar(6) NOT NULL,
  `declare_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `declaration`
--

INSERT INTO `declaration` (`election_date`, `cons_number`, `vote_type`, `declare_date`) VALUES
('2023-06-30', '0', 'online', '0000-00-00'),
('2023-05-30', '0', 'online', '0000-00-00'),
('2023-05-30', '0', 'online', '0000-00-00'),
('2023-05-30', '0', 'online', '0000-00-00'),
('2023-06-04', '0', 'online', '0000-00-00'),
('2023-06-20', '0', 'online', '0000-00-00'),
('2023-06-20', '0', 'online', '0000-00-00'),
('2023-06-20', '0', 'online', '0000-00-00'),
('2023-06-14', '0', 'online', '0000-00-00'),
('2023-06-14', '0', 'online', '0000-00-00'),
('2023-06-14', '0', 'online', '0000-00-00'),
('2023-06-14', '0', 'online', '0000-00-00'),
('2023-06-14', '0', 'online', '0000-00-00'),
('2023-06-14', '', 'online', '0000-00-00'),
('2023-06-21', '', 'online', '0000-00-00'),
('2023-06-23', '020', 'online', '0000-00-00'),
('2023-05-26', '291', 'online', '0000-00-00'),
('2023-05-26', '291', 'online', '0000-00-00'),
('2023-06-30', '294', 'online', '0000-00-00'),
('2023-06-07', '100', 'online', '0000-00-00'),
('2023-06-08', '012', 'online', '0000-00-00'),
('2023-06-13', '256', 'online', '0000-00-00'),
('2023-06-14', '256', 'online', '0000-00-00'),
('2023-06-15', '001', 'online', '0000-00-00'),
('2023-06-16', '012', 'online', '0000-00-00'),
('2023-06-16', '001', 'online', '0000-00-00'),
('2023-06-17', '001', 'online', '0000-00-00'),
('2023-06-18', '288', 'online', '0000-00-00'),
('2023-06-19', '288', 'online', '0000-00-00'),
('2023-06-19', '027', 'online', '0000-00-00'),
('2023-06-20', '001', 'online', '0000-00-00'),
('2023-06-21', '001', 'online', '0000-00-00'),
('2023-06-21', '001', 'online', '0000-00-00'),
('2023-06-21', '001', 'online', '0000-00-00'),
('2023-06-25', '001', 'online', '0000-00-00'),
('2023-06-10', '007', 'online', '0000-00-00'),
('2023-06-09', '003', 'online', '0000-00-00'),
('2023-06-22', '003', 'online', '0000-00-00'),
('0000-00-00', '003', '', '0000-00-00'),
('2023-06-25', '003', 'online', '0000-00-00'),
('2023-06-25', '256', 'online', '0000-00-00'),
('2023-06-25', '294', 'online', '2023-06-23'),
('2023-06-26', '003', 'online', '2023-06-23'),
('2023-06-22', '008', 'online', '2023-06-23'),
('2023-06-24', '002', 'online', '2023-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `nomination`
--

CREATE TABLE `nomination` (
  `gmail` varchar(50) NOT NULL,
  `cons_number` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `party_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nomination`
--

INSERT INTO `nomination` (`gmail`, `cons_number`, `date`, `party_name`) VALUES
('paulsanmtu185@gmail.com', 'con', '0000-00-00', 'party_name'),
('awrgawrhgae3t', 'con', '0000-00-00', 'party_name'),
('awrgawrhgae3t', 'con', '0000-00-00', 'party_name'),
('swgabeh', 'con', '0000-00-00', 'party_name'),
('swgabeh', '006', '2023-06-03', 'wergr'),
('swgabeh', '006', '2023-06-03', 'wergr'),
('paulsantu185@gmail.com', '256', '2023-05-26', 'ABCD'),
('naykind23@gmail.com', '012', '2023-06-08', 'ABCD'),
('ggduf@gmail.com', '012', '2023-06-08', 'CDBA'),
('sathiraute@gmail.com', '256', '2023-06-13', 'BJP'),
('palchittaranjan185@gmail.com', '256', '2023-06-14', 'Congress'),
('ABCD@GMAIL.COM', '001', '2023-06-15', 'Congress'),
('harakali', '001', '2023-06-16', 'BJP'),
('', '001', '0000-00-00', ''),
('xyz', '001', '2023-06-16', 'xyz'),
('abc', '001', '2023-06-16', 'SamajWadi Party'),
('pqr', '256', '2023-06-16', 'rjd'),
('ami', '001', '2023-06-16', 'ami'),
('123', '001', '2023-06-17', '123'),
('999', '001', '2023-06-17', '999'),
('abz', '288', '2023-06-18', 'abz'),
('jhk', '288', '2023-06-18', 'jhk'),
('7542', '288', '2023-06-18', '7542'),
('adob', '288', '2023-06-18', 'adob'),
('asd', '288', '2023-06-18', 'asd'),
('asd', '288', '2023-06-18', 'asd'),
('asd', '288', '2023-06-18', 'asd'),
('asd', '288', '2023-06-18', 'asd'),
('asd', '288', '2023-06-18', 'asd'),
('asd', '288', '2023-06-18', 'asd'),
('asd', '288', '2023-06-18', 'asd'),
('qwe', '288', '2023-06-18', 'qwe'),
('qwe', '288', '2023-06-18', 'qwe'),
('741', '288', '2023-06-19', '741'),
('742', '288', '2023-06-19', '742'),
('125', '027', '2023-06-19', '125'),
('bjp', '001', '2023-06-20', 'bjp'),
('inc', '001', '2023-06-20', 'inc'),
('anshu', '003', '2023-06-22', 'BJP'),
('roni', '003', '2023-06-22', 'TMC'),
('anshu', '003', '2023-06-23', 'anshu'),
('anshu', '003', '2023-06-23', 'bjp'),
('anshu', '003', '2023-06-23', 'bjp'),
('anshu', '003', '0000-00-00', ''),
('anshu', '003', '2023-06-23', ''),
('anshu', '', '0000-00-00', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '003', '2023-06-23', ''),
('roni', '', '0000-00-00', ''),
('roni', '003', '2023-06-23', ''),
('roni', '294', '2023-06-23', ''),
('asd', '294', '2023-06-24', ''),
('qwe', '294', '2023-06-24', ''),
('', '', '0000-00-00', 'tmc'),
('', '', '0000-00-00', 'tmc'),
('abc', '294', '2023-06-24', 'bjp'),
('ddc', '008', '2023-06-23', 'TMC'),
('emni', '002', '2023-06-24', 'TMC');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `voter` varchar(35) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `issue_date` date NOT NULL,
  `cons_number` varchar(3) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `aadhaar` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`voter`, `name`, `father_name`, `dob`, `gender`, `address`, `issue_date`, `cons_number`, `photo`, `aadhaar`, `password`) VALUES
('WB01/236/8452', 'Atanu Panja', 'Barun Panja', '2004-05-02', 'male', 'Kotulpur Bankura', '2021-06-05', '', 'upload/IMG-20230506-WA0001.jpg', '845645688617', ''),
('NRZ2310118', 'Santu Paul', 'Chittaranjan Paul', '2001-11-02', 'male', 'Deshra Bankura', '2023-05-06', '', 'upload/mypic.jpg', '861784664568', ''),
('abcdefghijk', 'aerhawethwae4sthj', 'aethrtjryj', '2023-06-08', 'male', 'rthtjyr5kjuyl,strky', '2023-06-08', '', 'upload/IMG-20230506-WA0001.jpg', '26985926526', ''),
('ABCDEFGHI', 'aehbrtrsyjnhrysnj', ':IGURIUWFUS', '2023-06-08', 'female', 'aehet3hryjkashnjFSDharwjtsrysaryjs', '2023-06-08', '012', 'upload/IMG-20230506-WA0001.jpg', '265893645541', ''),
('NRZ2310118', 'Santu Paul', 'Chittaranjan Paul', '2001-11-02', 'male', 'Deshra Bankura', '2023-05-21', '256', 'upload/mypic.jpg', '861784664568', 'santu2001'),
('WB01/236/8452', 'Sagun Murmu', 'Hikim Murmu', '2000-03-05', 'male', 'Ranibandh', '2023-06-14', '256', 'upload/windows_69-wallpaper-1920x1080.jpg', '849846512231', 'sagun2000'),
('9735626173', 'Sagun Murmu', 'Hakim Chadra Murmu', '2000-05-06', 'male', 'sagunmurmu@gmail.com', '2023-06-05', '256', 'upload/pair 1.JPG', '754268139', '8016690165'),
('6296538976', 'Rounik Paul', 'Dhananjoy Paul', '2003-05-06', 'male', 'deshra', '2023-06-14', '256', 'upload/pair 1.JPG', '8768538270', '6296538976'),
('801669016575', 'Santu Paul', 'Chittaranjan Paul', '2001-11-02', 'male', 'paulasntyu185@gmail.com', '2023-06-09', '001', 'upload/windows_69-wallpaper-1920x1080.jpg', '801669016575', '8016690165'),
('abcd', 'abcd', 'abcd', '2001-01-01', 'male', 'abcd', '2001-01-01', '001', 'upload/', 'abcd', 'abcd'),
('1234', '1234', '1234', '0004-03-12', '', '1234', '0004-03-12', '123', 'upload/', '1234', '1234'),
('9735', '9735', '9735', '2023-06-17', 'male', '9735', '2023-06-17', '001', 'upload/', '9735', '9735'),
('voter', 'voter', 'voter', '2023-06-18', 'male', 'voter', '2023-06-18', '288', 'upload/', 'voter', 'voter'),
('12', '12', '12', '2023-06-18', '', '12', '2023-06-18', '288', 'upload/', '12', '12'),
('fgh', 'fgh', 'fgh', '2023-06-18', 'male', 'fgh', '2023-06-18', '288', 'upload/', 'fgh', 'fgh'),
('efg', 'efg', 'efg', '2023-06-18', 'male', 'efg', '2023-06-18', '288', 'upload/', 'efg', 'efg'),
('128', '128', '128', '2023-06-19', 'male', '128', '2023-06-19', '288', 'upload/', '128', '128'),
('abs', 'abs', 'abs', '2023-06-20', 'male', 'abs', '2023-06-20', '001', 'upload/', 'abs', 'abs'),
('new', 'new', 'new', '2023-06-25', 'male', 'new', '2023-06-25', '294', 'upload/', 'new', 'new'),
('new', 'new', 'new', '2023-06-25', 'male', 'new', '2023-06-25', '294', 'upload/', 'new', 'new'),
('new', 'new', 'new', '2023-06-25', 'male', 'new', '2023-06-25', '294', 'upload/', 'new', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `votter_status`
--

CREATE TABLE `votter_status` (
  `voter_vid` varchar(25) NOT NULL,
  `Vdate` date NOT NULL,
  `cons_number` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `votter_status`
--

INSERT INTO `votter_status` (`voter_vid`, `Vdate`, `cons_number`) VALUES
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('', '2023-06-13', ''),
('', '2023-06-13', ''),
('NRZ2310118', '2023-06-13', '256'),
('', '2023-06-13', ''),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('NRZ2310118', '2023-06-13', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('9735626173', '2023-06-14', '256'),
('801669016575', '2023-06-15', '001'),
('801669016575', '2023-06-15', '001'),
('abcd', '2023-06-15', '001'),
('abcd', '2023-06-15', '001'),
('abcd', '2023-06-16', '001'),
('', '2023-06-17', '001'),
('abc', '2023-06-17', '001'),
('123', '2023-06-17', '001'),
('999', '2023-06-17', '001'),
('9735', '2023-06-17', '001'),
('12', '2023-06-18', '288'),
('abz', '2023-06-18', '288'),
('7542', '2023-06-18', '288'),
('fgh', '2023-06-18', '288'),
('adob', '2023-06-18', '288'),
('asd', '2023-06-18', '288'),
('qwe', '2023-06-18', '288'),
('128', '2023-06-19', '288'),
('125', '2023-06-19', '027'),
('bjp', '2023-06-20', '001'),
('inc', '2023-06-20', '001'),
('abs', '2023-06-20', '001'),
('anshu', '2023-06-22', '003'),
('anshu', '2023-06-22', '003'),
('', '2023-06-22', '001'),
('ddc', '2023-06-23', '008'),
('emni', '2023-06-24', '002'),
('NRZ2310118', '2023-06-25', '256');

-- --------------------------------------------------------

--
-- Table structure for table `votting`
--

CREATE TABLE `votting` (
  `Vdate` date NOT NULL,
  `cons_number` varchar(3) NOT NULL,
  `party_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `votting`
--

INSERT INTO `votting` (`Vdate`, `cons_number`, `party_name`) VALUES
('2023-06-13', '256', ''),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', ''),
('2023-06-13', '', ''),
('2023-06-13', '', ''),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'ABCD'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'BJP'),
('2023-06-13', '256', 'ABCD'),
('2023-06-14', '256', ''),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'BJP'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'ABCD'),
('2023-06-14', '256', 'ABCD'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'ABCD'),
('2023-06-14', '256', 'ABCD'),
('2023-06-14', '256', 'BJP'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-14', '256', 'Congress'),
('2023-06-15', '001', 'Congress'),
('2023-06-15', '001', 'Congress'),
('2023-06-15', '001', 'Congress'),
('2023-06-15', '001', 'Congress'),
('2023-06-16', '001', 'SamajWadi'),
('2023-06-17', '001', 'BJP'),
('2023-06-17', '001', 'SamajWadi'),
('2023-06-17', '001', '123'),
('2023-06-17', '001', '999'),
('2023-06-17', '001', '999'),
('2023-06-18', '288', 'jhk'),
('2023-06-18', '288', 'abz'),
('2023-06-18', '288', '7542'),
('2023-06-18', '288', '7542'),
('2023-06-18', '288', 'adob'),
('2023-06-18', '288', 'asd'),
('2023-06-18', '288', 'qwe'),
('2023-06-19', '288', '742'),
('2023-06-19', '027', '125'),
('2023-06-20', '001', 'inc'),
('2023-06-20', '001', 'inc'),
('2023-06-20', '001', 'bjp'),
('2023-06-22', '003', 'BJP'),
('2023-06-22', '003', 'TMC'),
('2023-06-22', '001', ''),
('2023-06-23', '008', ''),
('2023-06-24', '002', 'TMC'),
('2023-06-25', '256', 'rjd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
