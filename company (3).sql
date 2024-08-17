-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 05:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendancelog`
--

CREATE TABLE `attendancelog` (
  `attendanceId` int(100) NOT NULL,
  `employeeId` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `timeIn` time(6) NOT NULL,
  `timeOut` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendancelog`
--

INSERT INTO `attendancelog` (`attendanceId`, `employeeId`, `date`, `timeIn`, `timeOut`) VALUES
(1, 'bobo ka', '2023-11-29', '14:04:23.000000', '00:00:00.000000'),
(2, 'bobo ka', '2023-11-29', '14:07:24.000000', '00:00:00.000000'),
(3, 'shanti', '2023-11-29', '14:08:18.000000', '00:00:00.000000'),
(4, 'shanti', '2023-11-29', '00:00:00.000000', '14:08:45.000000'),
(5, 'shanti', '2023-11-29', '16:03:05.000000', '00:00:00.000000'),
(6, 'bobo ka', '2023-11-29', '00:00:00.000000', '16:04:15.000000'),
(7, 'shanti', '2023-12-02', '10:10:53.000000', '00:00:00.000000'),
(8, 'bobo ka', '2023-12-02', '00:00:00.000000', '10:18:19.000000'),
(9, 'shanti', '2023-12-02', '10:18:41.000000', '00:00:00.000000'),
(10, 'shanti', '2023-12-02', '00:00:00.000000', '10:18:58.000000'),
(11, 'bobo ka', '2023-12-02', '11:03:02.000000', '00:00:00.000000'),
(12, 'shanti', '2023-12-02', '00:00:00.000000', '11:03:18.000000'),
(13, 'shanti', '2023-12-02', '11:06:58.000000', '00:00:00.000000'),
(14, '012222', '2023-12-07', '13:24:16.000000', '00:00:00.000000'),
(15, '012222', '2023-12-07', '00:00:00.000000', '13:25:21.000000'),
(16, '012222', '2023-12-09', '17:12:01.000000', '00:00:00.000000'),
(17, '012222', '2023-12-09', '00:00:00.000000', '17:12:52.000000'),
(18, '012222', '2023-12-09', '17:54:43.000000', '00:00:00.000000'),
(19, '012222', '2023-12-09', '00:00:00.000000', '17:55:30.000000'),
(20, '012222', '2023-12-12', '12:17:57.000000', '00:00:00.000000'),
(21, '012222', '2023-12-12', '12:27:07.000000', '00:00:00.000000'),
(22, '012222', '2023-12-12', '16:00:24.000000', '00:00:00.000000'),
(23, '012222', '2023-12-15', '12:05:17.000000', '00:00:00.000000'),
(24, '012222', '2023-12-15', '00:00:00.000000', '12:05:36.000000'),
(25, '012222', '2023-12-21', '22:29:08.000000', '00:00:00.000000'),
(26, '012222', '2023-12-21', '00:00:00.000000', '22:29:27.000000'),
(27, '012222', '2023-12-22', '12:01:48.000000', '00:00:00.000000'),
(28, '012222', '2023-12-22', '00:00:00.000000', '12:02:08.000000'),
(29, '012222', '2023-12-25', '10:22:28.000000', '00:00:00.000000'),
(30, '012222', '2023-12-25', '00:00:00.000000', '10:22:44.000000'),
(31, '012222', '2023-12-25', '10:54:28.000000', '00:00:00.000000'),
(32, '012222', '2023-12-25', '00:00:00.000000', '10:54:52.000000'),
(33, '012222', '2023-12-25', '22:14:02.000000', '00:00:00.000000'),
(34, '012222', '2023-12-25', '00:00:00.000000', '22:14:26.000000');

-- --------------------------------------------------------

--
-- Table structure for table `audittrail`
--

CREATE TABLE `audittrail` (
  `auditId` int(100) NOT NULL,
  `name` int(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfo`
--

CREATE TABLE `employeeinfo` (
  `employeeId` int(25) NOT NULL,
  `employeename` varchar(50) NOT NULL,
  `employeeNumber` int(25) NOT NULL,
  `userId` int(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sssId` varchar(25) NOT NULL,
  `tinId` varchar(25) NOT NULL,
  `philhealthId` varchar(25) NOT NULL,
  `jobDescription` varchar(50) NOT NULL,
  `contractSalary` varchar(50) NOT NULL,
  `dailySalary` varchar(50) NOT NULL,
  `profilePicture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeeinfo`
--

INSERT INTO `employeeinfo` (`employeeId`, `employeename`, `employeeNumber`, `userId`, `address`, `sssId`, `tinId`, `philhealthId`, `jobDescription`, `contractSalary`, `dailySalary`, `profilePicture`) VALUES
(1, 'kokey', 3426626, 17, 'kahit saan ednis oyat', '6246426462', '62446446', '4426 46', 'tanbay', '426244462', '234', 0x2f434f4d50414e592f636f6e74656e742f70726f66696c652f68616e2d736f2d6865652d6b6f7265616e2d616374726573732d346b2d77616c6c70617065722d3338343078323136302d75686470617065722e636f6d2d3131392e305f622e6a7067),
(2, 'han so hee', 24466264, 5, 'sa puso mo ', '4464246', '42626266', '246246', 'palamunin', '2524524', '13315', 0x2f434f4d50414e592f636f6e74656e742f70726f66696c652f68616e2d736f2d6865652d62656175746966756c2d6b6f7265616e2d346b2d77616c6c70617065722d3338343078323136302d75686470617065722e636f6d2d3131302e305f622e6a7067),
(3, 'hanni pham', 5254564, 4, 'sa bahay', '3451535', '3151355', '3135131', 'pabigat', '31535355', '1345', 0x2f434f4d50414e592f636f6e74656e742f70726f66696c652f68616e6e692d6e65776a65616e732d6f6d672d346b2d77616c6c70617065722d75686470617065722e636f6d2d323436403040692e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectid` int(25) NOT NULL,
  `projectname` varchar(50) NOT NULL,
  `projectdescription` varchar(150) NOT NULL,
  `status` varchar(25) NOT NULL,
  `client` varchar(25) NOT NULL,
  `budget` varchar(25) NOT NULL,
  `projectimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectid`, `projectname`, `projectdescription`, `status`, `client`, `budget`, `projectimage`) VALUES
(15, 'Cyber City (Pentest)', 'Cybersecurity project bug bounty', 'Designing', 'Cisco ', '3000000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f75706c6f6164313635373731313436393333352e6a7067),
(16, 'HU Main (AI Robotics)', 'Advance AI robotics Project', 'Planning', 'Blue Origin', '6000000000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f75706c6f6164646f776e6c6f6164202836292e6a7067),
(17, 'Data Mine (Data Center)', 'Advance Data Center Project ', 'Planning', 'IBM', '10000000000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f75706c6f61646461746163656e7465722d7363616c65642d312e6a7067),
(18, 'Hacker One (Bug Bounty)', 'Bug bounty project ', 'Designing', 'HackerOne', '40000000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f646f776e6c6f6164202839292e6a7067),
(19, 'Quantum Chip (Processor)', 'A quantum chip project ', 'Testing', 'Intel', '48880606', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f636869702e6a7067),
(20, 'Intensity  (AI Assistant)', 'Advance AI Chat Virtual Assistant', 'Finish', 'IIT', '424214333', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f616e6e612e6a7067),
(21, 'HAK 4 GOV (Bug Bounty)', 'Bug Bounty Project for DICT ', 'Testing', 'DICT', '150000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f696d61676573202838292e706e67),
(22, 'Ark Angel (Electric Vehicle)', 'Advance electric vehicle project', 'Implementation', 'IIT', '30000000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f696d61676573202838292e6a7067),
(23, 'Quantifier (Quantum Computer)', 'advance quantum computing project', 'Development', 'Google', '334311134', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f646f776e6c6f616420283130292e6a666966),
(24, 'Polarity Solar Energy (Solar Power)', 'Solar energy project ', 'Finish', 'IIT', '434246462462', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f677662672e6a7067),
(25, 'Encryption Killer (Quantum Computer)', 'Advance encryption killer project', 'Designing', 'Cisco', '60000000000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f646f776e6c6f616420283131292e6a666966),
(26, 'Cloud Tech (Cloud Technology)', 'advance cloud project ', 'Finish', 'Amazon', '400000000', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f696d61676573202839292e6a666966),
(28, 'CARE (Healthcare Management System)', 'a advance healthcare management system', 'Implementation', 'IIT', '2.3523523325352352e17', 0x2f434f4d50414e592f636f6e74656e742f75706c6f61642f646f776e6c6f6164202838292e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `projectchat`
--

CREATE TABLE `projectchat` (
  `projectChatId` int(50) NOT NULL,
  `userId` int(50) NOT NULL,
  `projectid` int(50) NOT NULL,
  `chatData` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectchat`
--

INSERT INTO `projectchat` (`projectChatId`, `userId`, `projectid`, `chatData`, `time`) VALUES
(1, 1, 15, 'shabu oyats ', '2024-01-05 01:50:00'),
(2, 1, 15, 'savdvdadvdv', '2024-01-05 01:50:11'),
(3, 1, 15, 'gago', '2024-01-05 01:50:15'),
(4, 5, 15, 'hlllhlf', '2024-01-05 01:51:18'),
(5, 5, 15, 'hlllhlf', '2024-01-05 01:52:18'),
(6, 5, 15, 'hdhdhdy', '2024-01-05 01:55:20'),
(7, 5, 15, 'ffffffffs fsf', '2024-01-05 01:55:27'),
(8, 5, 15, 'ha', '2024-01-05 01:55:32'),
(9, 5, 15, 'ha', '2024-01-05 01:55:39'),
(10, 5, 15, 'ha', '2024-01-05 01:55:48'),
(11, 5, 15, 'burat', '2024-01-05 01:56:01'),
(12, 4, 15, '6886o', '2024-01-05 01:57:10'),
(13, 4, 15, 'pukining inaymo', '2024-01-05 01:57:14'),
(14, 4, 15, 'burat', '2024-01-05 01:57:19'),
(15, 4, 15, 'ulul', '2024-01-05 01:57:34'),
(16, 4, 15, 'hahah', '2024-01-05 01:57:42'),
(17, 4, 15, 'ulul', '2024-01-05 01:58:00'),
(18, 5, 15, 'gago', '2024-01-05 13:19:59'),
(19, 5, 15, 'ulul', '2024-01-05 13:20:11'),
(20, 1, 15, 'ww', '2024-01-05 13:23:48'),
(21, 1, 15, 'fafsdfa', '2024-01-05 13:23:59'),
(22, 1, 15, 'ww', '2024-01-05 13:24:20'),
(23, 1, 15, 'pukining inaymo', '2024-01-05 13:24:28'),
(24, 1, 15, 'fafsdfa', '2024-01-05 13:24:37'),
(25, 1, 15, 'fgf', '2024-01-05 13:24:49'),
(26, 1, 15, 'fafsdfa', '2024-01-05 13:24:56'),
(27, 1, 15, 'shabu oyats ', '2024-01-05 13:25:10'),
(28, 1, 15, 'savdvdadvdv', '2024-01-05 13:28:47'),
(29, 1, 15, 'savdvdadvdv', '2024-01-05 13:29:20'),
(30, 1, 15, 'savdvdadvdv', '2024-01-05 13:29:40'),
(31, 1, 15, 'savdvdadvdv', '2024-01-05 13:29:55'),
(32, 1, 15, 'pukining inaymo', '2024-01-05 13:31:53'),
(33, 1, 15, 'fasf', '2024-01-05 13:32:43'),
(34, 1, 15, 'fasf', '2024-01-05 13:35:56'),
(35, 1, 15, 'shabu oyats ', '2024-01-05 13:36:02'),
(36, 5, 15, 'pukining inaymo', '2024-01-05 13:36:31'),
(37, 5, 15, 'gege', '2024-01-05 13:36:41'),
(38, 5, 15, 'gago', '2024-01-05 13:38:39'),
(39, 5, 15, 'pukining inaymo', '2024-01-05 13:43:20'),
(40, 5, 15, 'gago', '2024-01-05 13:43:36'),
(41, 5, 15, 'hatdog ulul', '2024-01-05 13:43:48'),
(42, 1, 15, 'dadadgd', '2024-01-05 23:58:01'),
(43, 4, 15, 'hahahaah', '2024-01-05 23:58:41'),
(44, 4, 15, 'dd', '2024-01-05 23:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleId` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `roleId`, `name`, `email`, `mobile`, `status`) VALUES
(1, 'admin', 'admin', 1, 'admin', 'admin@gmail.com', '4624624646', ''),
(2, 'user', 'user', 2, 'user', 'user@gmail.com', '414354315', ''),
(4, 'andal', 'andal', 1, 'andal', 'andal@gmail.com', '039340949', 'Active Employee'),
(5, 'ceo', 'ceo', 1, 'ceo', 'ceo@gmail.com', '24424246', 'Active Employee'),
(17, 'test', '123', 1, 'testing', 'testing @gmail.com', '352534646', 'Active Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendancelog`
--
ALTER TABLE `attendancelog`
  ADD PRIMARY KEY (`attendanceId`);

--
-- Indexes for table `audittrail`
--
ALTER TABLE `audittrail`
  ADD PRIMARY KEY (`auditId`);

--
-- Indexes for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`employeeId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectid`);

--
-- Indexes for table `projectchat`
--
ALTER TABLE `projectchat`
  ADD PRIMARY KEY (`projectChatId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendancelog`
--
ALTER TABLE `attendancelog`
  MODIFY `attendanceId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `audittrail`
--
ALTER TABLE `audittrail`
  MODIFY `auditId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employeeinfo`
--
ALTER TABLE `employeeinfo`
  MODIFY `employeeId` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `projectchat`
--
ALTER TABLE `projectchat`
  MODIFY `projectChatId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
