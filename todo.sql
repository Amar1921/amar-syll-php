-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2020 at 02:06 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_user_id` int(11) NOT NULL,
  `task` varchar(250) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(100) NOT NULL,
  `state` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_user_id`, `task`, `date`, `time`, `state`) VALUES
(1, 1, 'Terminer projet php', '14-July-2020', '02h:00', 'Finish'),
(2, 1, 'Debuter projet NodesJs', '14-July-2020', '03h:00', 'Finish'),
(6, 2, 'Aller au salon', '18-January-2020', '15h:00', 'Finish'),
(7, 2, 'Appeler mum', '20-January-2020', '00h:00', 'Finish'),
(8, 1, 'Commencer l projet Wordpress', '20-July-2020', '06h:07', 'Finish'),
(11, 2, 'Appeler Amar', '16-July-2020', '16h:00', 'waiting'),
(14, 2, 'AMAR', '15-January-2020', '17h:30', 'waiting'),
(15, 2, 'Finir le devoir', '18-July-2020', '17h:30', 'waiting'),
(16, 6, 'Allez en salle', '16-July-2020', '12h:00', 'waiting'),
(17, 6, 'Appeler Amar', '12-January-2020', '15h:00', 'Finish'),
(18, 6, 'Reprendre le projet php', '19-July-2020', '20h:15', 'waiting'),
(19, 7, 'Appeler Amar', '11-July-2020', '08h:30', 'Finish'),
(20, 7, 'Aller au travail ', '10-July-2020', '12h:15', 'Running'),
(21, 8, 'terminer ', '09-September-2020', '08h:08', 'Running');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'amar', '$2y$10$aPpaF7Bynjt2NkvPOT/fmek28FMMBkGEVthSPGWN8wnGD10gMypGq'),
(2, 'viviane', '$2y$10$Mvf4APVLXcbGT33bTxa8auDYypoWm4tF/OyBjjEhEAgcrJGu/qhTS'),
(3, 'Salla', '$2y$10$ryLZuiLr5zTQjMA6hITeLuD.JDD5phzYdmEt59yDXzd/iIUnN208y'),
(4, 'bina', '$2y$10$3W.xDg0FF/1usvAX0zDfHO8bzHnbCZd9XxDHCjrPZQM7hsBxXZVyS'),
(5, 'Angele', '$2y$10$bY23jGnp12O1pbIf.dKgVeCLnGik6hXve9Quq3VnuRyPa0LQLhSdy'),
(6, 'male', '$2y$10$3tpjOuARX2eGEew8A9UwZedIVxk0T9FD6zgRNpVrOUy8ErscwUzk.'),
(7, 'fary', '$2y$10$0WyMs6wN9JBc4x7M7bDZD.FZ9BrmyD7wstNRBmp9y1aL3BBMvNllu'),
(8, 'sarett', '$2y$10$wq6ycW5Tp8uE9u2hdy.z9O3fgAzf79okDpm9LCcttc2jHDq7bIKU.'),
(9, 'gorba', '$2y$10$XZzkAHgHEEYT1j5vGYovMu/GHSg7qd8KuTWI1We0BYZjVho15FCpe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
