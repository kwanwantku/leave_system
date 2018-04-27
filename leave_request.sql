-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 27, 2018 at 08:10 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `leave_request`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `userid` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `ig` varchar(255) NOT NULL,
  `lineid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`userid`, `facebook`, `ig`, `lineid`) VALUES
(1, 'www.facebook.com/papop', 'www.instagram.com/papop', 'newid');

-- --------------------------------------------------------

--
-- Table structure for table `Departments`
--

CREATE TABLE `Departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `LeaveRequest`
--

CREATE TABLE `LeaveRequest` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL COMMENT 'Vacation_leave, Personal_Errand_leave,Sick_leave',
  `extra` varchar(255) NOT NULL,
  `record_at` datetime NOT NULL,
  `approve_at` datetime NOT NULL,
  `leave_start_at` datetime NOT NULL,
  `leave_end_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Tasks`
--

CREATE TABLE `Tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `TasksJoin`
--

CREATE TABLE `TasksJoin` (
  `taskid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL COMMENT 'Administrator,Supervisor, Subordinate',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `departmentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `email`, `type`, `firstname`, `lastname`, `picture`, `departmentid`) VALUES
(1, 'pranger54', '12345678', 'prangprang@hotmail.com', 'Administrator', 'Kwanwan', 'Tantichartkul', '/src/img.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `LeaveRequest`
--
ALTER TABLE `LeaveRequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Tasks`
--
ALTER TABLE `Tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TasksJoin`
--
ALTER TABLE `TasksJoin`
  ADD PRIMARY KEY (`taskid`,`userid`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Departments`
--
ALTER TABLE `Departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `LeaveRequest`
--
ALTER TABLE `LeaveRequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tasks`
--
ALTER TABLE `Tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
