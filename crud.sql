-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 11:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(10) NOT NULL,
  `task_name` varchar(50) DEFAULT NULL,
  `date_todo` datetime NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `date_todo`, `status`) VALUES
(11, 'CRUD Project', '0000-00-00 00:00:00', 0),
(13, 'ALC 4.0', '0000-00-00 00:00:00', 0),
(14, 'Movie', '0000-00-00 00:00:00', 0),
(15, 'Sleeping', '0000-00-00 00:00:00', 0),
(16, 'Church', '0000-00-00 00:00:00', 0),
(17, 'Java', '0000-00-00 00:00:00', 0),
(18, 'Coding', '0000-00-00 00:00:00', 0),
(20, 'Exam Registration', '0000-00-00 00:00:00', 0),
(21, 'Reading', '0000-00-00 00:00:00', 0),
(22, 'Movie', '0000-00-00 00:00:00', 0),
(23, 'Hiking', '0000-00-00 00:00:00', 0),
(24, 'Attending Seminar', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks2`
--

CREATE TABLE `tasks2` (
  `task_id` int(10) NOT NULL,
  `date_todo` datetime NOT NULL,
  `task_name` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `tasks2`
--
ALTER TABLE `tasks2`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tasks2`
--
ALTER TABLE `tasks2`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
