-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 08:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_login`
--

CREATE TABLE `account_login` (
  `username` varchar(30) DEFAULT NULL,
  `password` char(10) DEFAULT NULL,
  `id` char(6) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_login`
--

INSERT INTO `account_login` (`username`, `password`, `id`, `user_type`) VALUES
('admin', 'admin', '1', 'Admin'),
('Dumbeldore', 'hogwarts', '3', 'Professor'),
('Hermoine Granger', 'meow', '4', 'Student'),
('Nora Seed', '12345', '2', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `total_marks` int(11) NOT NULL,
  `stu_year` int(11) NOT NULL,
  `uid` char(11) NOT NULL,
  `marks_obtained` int(11) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`total_marks`, `stu_year`, `uid`, `marks_obtained`, `percentage`) VALUES
(700, 1, 'S20102', 659, 94.14);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sub_name` varchar(30) NOT NULL,
  `marks` int(11) NOT NULL,
  `stu_year` int(20) NOT NULL,
  `stud_id` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sub_name`, `marks`, `stu_year`, `stud_id`) VALUES
('Astronomy', 70, 1, 'S20102'),
('Charms', 95, 1, 'S20102'),
('Defense Against the Dark Arts', 95, 1, 'S20102'),
('Herbology', 94, 1, 'S20102'),
('History of Magic', 91, 1, 'S20102'),
('Potions', 98, 1, 'S20102'),
('Transfiguration', 97, 1, 'S20102');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `prof_name` varchar(30) NOT NULL DEFAULT '',
  `prof_id` char(6) NOT NULL,
  `sub_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`prof_name`, `prof_id`, `sub_name`) VALUES
('Cuthbert Binns', 'P19025', 'Alchemy'),
('Bathsheda Babbling', 'P19015', 'Ancient Runes'),
('Wilkie Twycross', 'P19030', 'Apparition'),
('Septima Vector', 'P19021', 'Arithmancy'),
('Aurora Sinistra', 'P19020', 'Astronomy'),
('Rolanda Hooch', 'P19017', 'Broom Flight Class'),
('Silvanus Kettleburn', 'P19019', 'Care of Magical Creatures'),
('Filius Flitwick', 'P19013', 'Charms'),
('Quirinus Quirrell', 'P19018', 'Defence Against the Dark Arts'),
('Sybill Trelawney', 'P19035', 'Divination'),
(' Albus Dumbledore', 'P19010', 'Headmaster'),
('Pomona Sprout', 'P19012', 'Herbology'),
('Cuthbert Binns', 'P19016', 'History of Magic'),
('Charity Burbage', 'P19022', 'Muggle Studies'),
('Severus Snape', 'P19014', 'Potions'),
('Minerva McGonagall', 'P19011', 'Transfiguration');

-- --------------------------------------------------------

--
-- Table structure for table `result_login`
--

CREATE TABLE `result_login` (
  `stud_id` char(6) NOT NULL,
  `stu_year` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result_login`
--

INSERT INTO `result_login` (`stud_id`, `stu_year`) VALUES
('S20102', 1),
('S20209', 4),
('S20102', 1),
('S20102', 1),
('S20102', 1),
('S20102', 1),
('S20102', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_name` varchar(30) NOT NULL,
  `stud_id` char(6) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `stu_year` int(4) NOT NULL,
  `house` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_name`, `stud_id`, `roll_no`, `stu_year`, `house`, `dob`) VALUES
('Alex Sykes', 'S20402', 227, 7, 'Slytherin', '1980-12-21'),
('Cho Chang', 'S20304', 222, 3, 'Slytherin', '1981-04-09'),
('Dean Thomas', 'S20201', 211, 4, 'Slytherin', '1981-04-15'),
('Draco Malfoy', 'S20110', 210, 1, 'Slytherin', '1981-04-26'),
('Emma Vane', 'S20204', 215, 5, 'Ravenclaw', '1980-11-11'),
('Eric Murley', 'S20400', 228, 2, 'Slytherin', '1980-08-01'),
('Ernest Macmillan', 'S20204', 217, 6, 'Hufflepuff', '1980-06-10'),
('Hannah Abbott', 'S20105', 205, 5, 'Hufflepuff', '1980-09-12'),
('Harry Potter', 'S20101', 201, 1, 'Gryffindor', '1980-07-31'),
('Hermione Granger', 'S20102', 202, 1, 'Gryffindor', '1980-08-31'),
('Katie Bell', 'S20301', 219, 6, 'Gryffindor', '1981-04-28'),
('Kazu', '343', 0, 3, 'Gryffindor', '0000-00-00'),
('Kazu', '5432', 0, 1, 'Gryffindor', '0000-00-00'),
('Kormac', 'S20302', 220, 5, 'Gryffindor', '1981-04-21'),
('kurisu', '110', 0, 0, '', '0000-00-00'),
('Magnus Nazareth', 'S20104', 204, 3, 'Gryffindor', '1980-10-30'),
('Marcus Belby', 'S20306', 224, 2, 'Hufflepuff', '1981-04-04'),
('Marietta Edgecombe', 'S20303', 221, 7, 'Ravenclaw', '1981-04-11'),
('Megan Jones', 'S20204', 218, 4, 'Hufflepuff', '1980-09-11'),
('Michael Corner', 'S20107', 207, 4, 'Ravenclaw', '1980-10-12'),
('MSajsj', '988', 0, 1, 'gryffindor', '0000-00-00'),
('Neville Longbottom', 'S20202', 212, 7, 'Hufflepuff', '1980-10-21'),
('Nicolas Grimmett', 'S20402', 227, 7, 'Slytherin', '1980-11-29'),
('Nora Seed', 'S20209', 0, 4, 'Gryffindor', '0000-00-00'),
('Oliver Rivers', 'S20308', 226, 3, 'Ravenclaw', '1981-04-01'),
('Pansy Parkinson', 'S20204', 213, 5, 'Slytherin', '1980-01-22'),
('pranjal', '110', 0, 1, 'gryffindor', '0000-00-00'),
('pranjal', '111', 0, 0, '', '0000-00-00'),
('pranjal', '343', 0, 1, 'gryffindor', '0000-00-00'),
('prerana', '111', 0, 0, '', '0000-00-00'),
('prerana', '433', 0, 1, 'gryffindor', '0000-00-00'),
('rhea yadav', '112', 0, 1, 'gryffindor', '0000-00-00'),
('Rhea Yadav', 'S40404', 0, 1, 'Gryffindor', '0000-00-00'),
('Rhea Yadav', 'S40404', 0, 5, 'Gryffindor', '0000-00-00'),
('Ronald Weasley', 'S20103', 203, 7, 'Gryffindor', '1980-09-30'),
('Sally Smith', 'S20204', 216, 2, 'Ravenclaw', '1980-06-01'),
('sneha', '343', 0, 1, 'gryffindor', '0000-00-00'),
('sneha', '433', 0, 1, 'gryffindor', '0000-00-00'),
('Sophie Roper', 'S20307', 225, 1, 'Ravenclaw', '1981-04-02'),
('sse', '212', 0, 1, 'gryffindor', '0000-00-00'),
('Terry Boot', 'S20108', 208, 6, 'Ravenclaw', '1980-10-22'),
('ZZZA', 'S20106', 206, 1, 'Hufflepuff', '1980-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_name` varchar(30) NOT NULL,
  `sub_code` char(20) NOT NULL,
  `min_marks` int(11) NOT NULL,
  `max_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_name`, `sub_code`, `min_marks`, `max_marks`) VALUES
('Alchemy', 'CS514', 40, 100),
('Ancient Runes', 'CS508', 40, 100),
('Apparition', 'CS509', 40, 100),
('Arithmancy', 'CS510', 40, 100),
('Astronomy', 'CS504', 40, 100),
('Broom Flight Class', 'CS507', 40, 100),
('Care of Magical Creatures', 'CS511', 40, 100),
('Charms', 'CS501', 40, 100),
('Defense Against the Dark Arts', 'CS506', 40, 100),
('Divination', 'CS512', 40, 100),
('Herbology', 'CS505', 40, 100),
('History of Magic', 'CS503', 40, 100),
('Muggle Studies', 'CS513', 40, 100),
('Potions', 'CS502', 40, 100),
('Transfiguration', 'CS515', 40, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_login`
--
ALTER TABLE `account_login`
  ADD UNIQUE KEY `username` (`username`,`password`,`id`,`user_type`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD UNIQUE KEY `total_marks` (`total_marks`,`stu_year`,`uid`,`marks_obtained`,`percentage`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD UNIQUE KEY `sub_name` (`sub_name`,`marks`,`stu_year`,`stud_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD UNIQUE KEY `prof_name` (`prof_name`,`prof_id`),
  ADD UNIQUE KEY `sub_name` (`sub_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `stu_name` (`stud_name`,`stud_id`,`roll_no`,`stu_year`,`house`,`dob`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD UNIQUE KEY `sub_name` (`sub_name`,`sub_code`,`min_marks`,`max_marks`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
