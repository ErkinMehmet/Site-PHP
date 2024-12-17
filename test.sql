-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 31, 2019 at 12:00 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `amis`
--

DROP TABLE IF EXISTS `amis`;
CREATE TABLE IF NOT EXISTS `amis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `moi` text NOT NULL,
  `ami` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amis`
--

INSERT INTO `amis` (`id`, `moi`, `ami`) VALUES
(1, 'Fernando', 'Yohann'),
(2, 'Fernando', 'Luisana');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  `bold` tinyint(1) NOT NULL DEFAULT '0',
  `italic` tinyint(1) NOT NULL DEFAULT '0',
  `underlined` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(20) DEFAULT NULL,
  `bgcolor` varchar(20) DEFAULT NULL,
  `imp` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sender`, `receiver`, `message`, `datetime`, `bold`, `italic`, `underlined`, `color`, `bgcolor`, `imp`) VALUES
(1, 'Fernando', 'Yohann', 'ILOVEU', '2019-04-05 00:00:00', 0, 0, 0, NULL, NULL, 0),
(2, 'Yohann', 'Fernando', 'lOOOOL thank you', '2019-04-30 00:00:00', 0, 0, 0, NULL, NULL, 0),
(3, 'Fernando', 'Luisana', 'hello Luisana no hay actualización', '2019-04-11 00:00:00', 0, 0, 0, NULL, NULL, 0),
(4, 'Luisana', 'Fernando', 'FERNANDO!!!', '2019-04-04 00:00:00', 0, 0, 0, NULL, NULL, 0),
(5, 'Fernando', 'Yohann', 'ssss', '2019-04-20 11:13:07', 0, 0, 0, NULL, NULL, 0),
(6, 'Fernando', 'Yohann', 'jaj', '2019-04-20 11:13:55', 0, 0, 0, NULL, NULL, 0),
(7, 'Fernando', 'Yohann', '', '2019-04-20 11:13:56', 0, 0, 0, NULL, NULL, 0),
(8, 'Fernando', 'Yohann', '', '2019-04-20 11:13:57', 0, 0, 0, NULL, NULL, 0),
(9, 'Fernando', 'Yohann', 'hkjhkj', '2019-04-20 11:14:37', 0, 0, 0, NULL, NULL, 0),
(10, 'Luisana', 'Fernando', '', '2019-04-20 11:15:28', 0, 0, 0, NULL, NULL, 0),
(11, 'Luisana', 'Fernando', '', '2019-04-20 11:16:11', 0, 0, 0, NULL, NULL, 0),
(12, 'Fernando', 'Luisana', 'ddddd', '2019-04-20 11:17:44', 0, 0, 0, NULL, NULL, 0),
(20, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:48:09', 0, 0, 0, NULL, NULL, 0),
(21, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:48:12', 0, 0, 0, NULL, NULL, 0),
(22, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:48:31', 0, 0, 0, NULL, NULL, 0),
(23, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:48:33', 0, 0, 0, NULL, NULL, 0),
(24, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:48:34', 0, 0, 0, NULL, NULL, 0),
(25, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:49:48', 0, 0, 0, NULL, NULL, 0),
(26, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:50:04', 0, 0, 0, NULL, NULL, 0),
(27, 'Yohann', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 11:50:49', 0, 0, 0, NULL, NULL, 0),
(28, 'Yohann', 'Fernando', 'kk', '2019-04-21 11:50:53', 0, 0, 0, NULL, NULL, 0),
(29, 'Yohann', 'Fernando', 'kk', '2019-04-21 11:50:57', 0, 0, 0, NULL, NULL, 0),
(30, 'Yohann', 'Fernando', 'kk', '2019-04-21 11:51:18', 0, 0, 0, NULL, NULL, 0),
(31, 'Yohann', 'Fernando', 'kk', '2019-04-21 11:51:21', 0, 0, 0, NULL, NULL, 0),
(32, 'Yohann', 'Fernando', 'kk', '2019-04-21 11:51:32', 0, 0, 0, NULL, NULL, 0),
(33, 'Yohann', 'Fernando', 'kk', '2019-04-21 11:52:49', 0, 0, 0, NULL, NULL, 0),
(34, 'Yohann', 'Fernando', 'kk', '2019-04-21 11:53:06', 0, 0, 0, NULL, NULL, 0),
(35, 'Yohann', 'Fernando', 'What do you wantkkdo?', '2019-04-21 11:53:10', 0, 0, 0, NULL, NULL, 0),
(36, 'Yohann', 'Fernando', 'What do you wantkkdo?', '2019-04-21 11:53:13', 0, 0, 0, NULL, NULL, 0),
(37, 'Yohann', 'Fernando', 'What do you wantkkdo?', '2019-04-21 11:53:33', 0, 0, 0, NULL, NULL, 0),
(38, 'Yohann', 'Fernando', 'What do you want to say to Fed', '2019-04-21 11:53:53', 0, 0, 0, NULL, NULL, 0),
(39, 'Yohann', 'Fernando', 'What do you want to say to Fed', '2019-04-21 11:53:56', 0, 0, 0, NULL, NULL, 0),
(40, 'Yohann', 'Fernando', 'What do you want to say to Fed', '2019-04-21 11:57:07', 0, 0, 0, NULL, NULL, 0),
(41, 'Yohann', 'Fernando', 'What do you want to say to Fed', '2019-04-21 11:59:21', 0, 0, 0, NULL, NULL, 0),
(42, 'Luisana', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 12:02:58', 0, 0, 0, NULL, NULL, 0),
(43, 'Luisana', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 12:03:00', 0, 0, 0, NULL, NULL, 0),
(44, 'Luisana', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 12:04:18', 0, 0, 0, NULL, NULL, 0),
(45, 'Luisana', 'Fernando', 'What do you want to say t', '2019-04-21 12:24:07', 0, 0, 0, NULL, NULL, 0),
(46, 'Luisana', 'Fernando', 'What do you want to say t', '2019-04-21 12:24:10', 0, 0, 0, NULL, NULL, 0),
(47, 'Luisana', 'Fernando', 'What do you want to say t', '2019-04-21 12:24:32', 0, 0, 0, NULL, NULL, 0),
(48, 'Fernando', 'Luisana', 'What do you ana?', '2019-04-21 12:25:02', 0, 0, 0, NULL, NULL, 0),
(49, 'Fernando', 'Luisana', 'What do you ana?', '2019-04-21 12:25:04', 0, 0, 0, NULL, NULL, 0),
(50, 'Fernando', 'Luisana', 'What do you want to say t', '2019-04-21 12:25:57', 0, 0, 0, NULL, NULL, 0),
(51, 'Fernando', 'Luisana', 'What do you want to say t', '2019-04-21 12:25:59', 0, 0, 0, NULL, NULL, 0),
(52, 'Fernando', 'Luisana', 'What do you want to s', '2019-04-21 12:35:53', 0, 0, 0, NULL, NULL, 0),
(53, 'Fernando', 'Luisana', 'What do you want to s', '2019-04-21 12:35:56', 0, 0, 0, NULL, NULL, 0),
(54, 'Fernando', 'Luisana', 'What do you want to s', '2019-04-21 12:37:39', 0, 0, 0, NULL, NULL, 0),
(55, 'Luisana', 'Fernando', 'What do you want ternando?', '2019-04-21 12:40:03', 0, 0, 0, NULL, NULL, 0),
(56, 'Luisana', 'Fernando', 'What do you want ternando?', '2019-04-21 12:40:05', 0, 0, 0, NULL, NULL, 0),
(57, 'Luisana', 'Fernando', 'What do you want ternando?', '2019-04-21 12:40:40', 0, 0, 0, NULL, NULL, 0),
(58, 'Luisana', 'Fernando', 'What do you want ternando?', '2019-04-21 12:40:43', 0, 0, 0, NULL, NULL, 0),
(59, 'Luisana', 'Fernando', 'What do you want ternando?', '2019-04-21 12:40:57', 0, 0, 0, NULL, NULL, 0),
(60, 'Luisana', 'Fernando', 'kk', '2019-04-21 12:41:20', 0, 0, 0, NULL, NULL, 0),
(61, 'Luisana', 'Fernando', 'kk', '2019-04-21 12:41:23', 0, 0, 0, NULL, NULL, 0),
(62, 'Luisana', 'Fernando', 'kk', '2019-04-21 12:42:07', 0, 0, 0, NULL, NULL, 0),
(63, 'Fernando', 'Luisana', 'What do you wanna?', '2019-04-21 12:42:35', 0, 0, 0, NULL, NULL, 0),
(64, 'Fernando', 'Luisana', 'What do you wanna?', '2019-04-21 12:42:38', 0, 0, 0, NULL, NULL, 0),
(65, 'Luisana', 'Fernando', 'Whrnando?', '2019-04-21 12:56:40', 0, 0, 0, NULL, NULL, 0),
(66, 'Luisana', 'Fernando', 'Whrnando?', '2019-04-21 12:56:46', 0, 0, 0, NULL, NULL, 0),
(67, 'Luisana', 'Fernando', 'Whrnando?', '2019-04-21 12:56:54', 0, 0, 0, NULL, NULL, 0),
(68, 'Luisana', 'Fernando', 'Whrnando?', '2019-04-21 12:57:20', 0, 0, 0, NULL, NULL, 0),
(69, 'Luisana', 'Fernando', 'Whrnando?', '2019-04-21 12:57:33', 0, 0, 0, NULL, NULL, 0),
(70, 'Luisana', 'Fernando', 'Whrnando?', '2019-04-21 12:57:58', 0, 0, 0, NULL, NULL, 0),
(71, 'Luisana', 'Fernando', 'Whrnando?', '2019-04-21 12:58:13', 0, 0, 0, NULL, NULL, 0),
(72, 'Luisana', 'Fernando', 'What do yornando?', '2019-04-21 13:01:01', 0, 0, 0, NULL, NULL, 0),
(73, 'Luisana', 'Fernando', 'What do yornando?', '2019-04-21 13:01:10', 0, 0, 0, NULL, NULL, 0),
(74, 'Luisana', 'Fernando', 'What do yornando?', '2019-04-21 13:01:21', 0, 0, 0, NULL, NULL, 0),
(75, 'Luisana', 'Fernando', 'What do yornando?', '2019-04-21 13:04:39', 0, 0, 0, NULL, NULL, 0),
(76, 'Luisana', 'Fernando', 'What do you wantlando?', '2019-04-21 13:05:21', 0, 0, 0, NULL, NULL, 0),
(77, 'Luisana', 'Fernando', 'What do you want to say to Fernando?', '2019-04-21 13:05:23', 0, 0, 0, NULL, NULL, 0),
(78, 'Luisant', 'FD', '&#60;img src=&#34;https://cdn.okccdn.com/media/img/emojis/apple/1F60C.png&#34;/&#62;', '2019-04-23 19:45:41', 0, 0, 0, NULL, NULL, 0),
(79, 'Fernando', 'Yohann', 'NKBKHK', '2019-04-25 18:28:24', 0, 0, 0, 'Brown', 'Pink', 0),
(80, 'Fernando', 'Yohann', 'What do you want to say to Yohann?aa', '2019-04-25 18:43:49', 0, 0, 0, 'Brown', 'Pink', 0),
(81, 'Fernando', 'Yohann', 'aaa', '2019-04-25 18:43:53', 0, 0, 0, 'Brown', 'Pink', 0),
(82, 'Fernando', 'Yohann', 'asa', '2019-04-25 18:44:04', 0, 0, 0, 'Brown', 'Pink', 0),
(83, 'Fernando', 'Yohann', 'qqq', '2019-04-25 18:44:09', 0, 0, 0, 'Brown', 'Pink', 0),
(84, 'Fernando', 'Yohann', 'asa', '2019-04-25 18:47:52', 0, 0, 0, 'Brown', 'Pink', 0),
(85, 'Fernando', 'Yohann', 'qqq', '2019-04-25 18:52:29', 0, 0, 0, 'Brown', 'Pink', 0),
(86, 'Fernando', 'Yohann', 'kk', '2019-04-25 18:53:31', 0, 0, 0, 'Brown', 'Pink', 0),
(87, 'Fernando', 'Yohann', 'eeew', '2019-04-25 19:10:08', 0, 0, 0, 'Brown', 'Pink', 0),
(88, 'Fernando', 'Yohann', '3rweretreyryr', '2019-04-25 19:10:14', 0, 0, 0, 'Brown', 'Pink', 0),
(89, 'Fernando', 'Luisana', 'eadsdfad', '2019-04-26 19:42:08', 0, 0, 0, 'Brown', 'Pink', 0),
(90, 'Fernando', 'Luisana', 'fafdaag', '2019-04-26 19:42:37', 0, 0, 0, 'Brown', 'Pink', 0),
(91, 'Luisana', 'Fernando', 'FERNANDO!!!', '2019-04-04 00:00:00', 0, 0, 0, NULL, NULL, 0),
(92, 'Fernando', 'Luisana', 'adfadsfa', '2019-04-26 19:47:49', 0, 0, 0, 'Brown', 'Pink', 0),
(93, 'Luisana', 'Fernando', 'FERNANDO!!!', '2019-05-04 00:00:00', 0, 0, 0, NULL, NULL, 0),
(94, 'Luisana', 'Fernando', 'FERNANDO!!!', '2019-05-04 00:00:00', 0, 0, 0, NULL, NULL, 0),
(95, 'Fernando', 'Luisana', 'adfadsfa', '2019-04-26 19:49:28', 0, 0, 0, 'Brown', 'Pink', 0),
(96, 'Fernando', 'Luisana', 'ssdff', '2019-04-26 19:49:49', 0, 0, 0, 'Brown', 'Pink', 0),
(97, 'Fernando', 'Yohann', 'wrewrw', '2019-04-26 22:48:17', 0, 0, 0, 'Brown', 'Pink', 0),
(98, 'Fernando', 'Yohann', 'wooooo', '2019-04-26 22:52:57', 0, 0, 0, 'Brown', 'Pink', 0),
(99, 'Fernando', 'Yohann', 'fsafsdf', '2019-04-26 22:54:11', 0, 0, 0, NULL, NULL, 0),
(100, 'Fernando', 'Yohann', 'ugiigikhihkhk', '2019-04-27 10:40:02', 0, 0, 0, 'Brown', 'Pink', 0),
(101, 'Fernando', 'Yohann', 'hhhh', '2019-04-28 00:05:22', 0, 0, 0, 'Brown', 'Pink', 0),
(102, 'Laundon', 'Fernando', 'putain merde nique', '2019-09-15 20:37:55', 0, 0, 0, 'Brown', 'Pink', 0),
(103, 'Fernando', 'Laundon', 'allo putain merde mange de la marde&#13;&#10;', '2019-09-15 20:38:29', 0, 0, 0, 'Brown', 'Pink', 0),
(104, 'Laundon', 'Fernando', 'putain merde nique', '2019-09-15 20:38:34', 0, 0, 0, 'Brown', 'Pink', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chatters`
--

DROP TABLE IF EXISTS `chatters`;
CREATE TABLE IF NOT EXISTS `chatters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `typing` tinyint(1) NOT NULL DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `age` int(3) DEFAULT NULL,
  `description` text,
  `place` varchar(50) DEFAULT NULL,
  `language` varchar(20) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `interests` varchar(50) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chatters`
--

INSERT INTO `chatters` (`id`, `name`, `typing`, `online`, `age`, `description`, `place`, `language`, `profession`, `interests`, `mdp`) VALUES
(1, 'Fernando', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, 'Yohann', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 'Luisana', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 'dfda', 0, 0, 77, 'faudra', 'faudra', 'English', 'dfda', 'fdafafa', '$2y$10$lYUQOX0z2TZrGhvqfMOAGuM6IBDiO0koQttJsV3xyFG.HldAY/Lry'),
(5, '', 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Laundon', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coursesen`
--

DROP TABLE IF EXISTS `coursesen`;
CREATE TABLE IF NOT EXISTS `coursesen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(3) NOT NULL,
  `course` varchar(15) NOT NULL,
  `description` varchar(100) NOT NULL,
  `grade` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coursesen`
--

INSERT INTO `coursesen` (`id`, `year`, `course`, `description`, `grade`) VALUES
(1, 1, 'CHEM 103', 'Introduction to University Chemistry I', 'A+'),
(2, 1, 'ENGG 130', 'Engineering Mechanics', 'A+'),
(3, 1, 'MATH 102', 'Applied Linear Algebra', 'A+'),
(4, 1, 'MATH 209', 'Calculus III', 'A+'),
(5, 1, 'PHYS 130', 'Wave Motion, Optics and Sound', 'A+'),
(6, 1, 'CHE 243', 'Engineering Thermodynamics', 'A+'),
(7, 1, 'CHEM 105', 'Introduction to University Chemistry II', 'A-'),
(8, 1, 'EN PH 131', 'Computer Programming for Engineers', 'A'),
(9, 1, 'MATH 201', 'Differential Equations', 'A+'),
(10, 2, 'CHEM 261', 'Organic Chemistry I', 'A'),
(11, 2, 'CME 265', 'Process Analysis', 'A'),
(12, 2, 'ENGL 123', 'Literature in Global Perspective', 'B-'),
(13, 2, 'MAT E 202', 'Materials Science II', 'A'),
(14, 2, 'PHIL 265', 'Philosophy of Science', 'B'),
(15, 2, 'STAT 235', 'Introduction to Statistics for Engineering', 'B+'),
(16, 2, 'BIOCH 200', 'Introductory Biochemitry', 'B+'),
(17, 2, 'ECE 209', 'Fundamentals of Electrical Engineering', 'B+'),
(18, 2, 'MAT E 211', 'Characterization of Materials', 'A'),
(19, 2, 'MAT E 221', 'Powder Fabrication and Process', 'B'),
(20, 2, 'SMO 301', 'Behaviour in Organization', 'A-'),
(21, 2, 'SOC 366', 'People in Industry', 'B-'),
(22, 3, 'CHE 312', 'Fluid Mechanics', 'A'),
(23, 3, 'CHE 343', 'Chemical Engineering Thermodynamics', 'A+'),
(24, 3, 'CHE 351', 'Chemical Engineering Lab', 'B+'),
(25, 3, 'CHE 374', 'Computational Methods for Engineering', 'A'),
(26, 3, 'ENG M 401', 'Financial Management for Engineers', 'A-'),
(27, 3, 'CHE 314', 'Heat Transfer', 'A-'),
(28, 3, 'CHE 318', 'Mass Transfer', 'B-'),
(29, 3, 'CHE 345', 'Chemical Reactor Analysis I', 'A'),
(30, 3, 'CHE 358', 'Process Data Analysis', 'A-'),
(31, 3, 'PHYS 271', 'Introduction to Modern Physics', 'A+'),
(32, 4, 'CHE 416', 'Equilibrium Stage Processes', 'A-'),
(33, 4, 'CHE 445', 'Chemical Reactor Analysis II', 'A-'),
(34, 4, 'CHE 446', 'Process Engineering Design I', 'A-'),
(35, 4, 'ENG M 530', 'Engineering Project Management', 'A-'),
(36, 4, 'CHE 454', 'Chemical Engineering Project Lab', 'B-'),
(37, 4, 'CHE 465', 'Chemical Engineering Design II', 'C'),
(38, 4, 'CHE 472', 'Modelling Process Control', 'B+'),
(39, 4, 'CHE 576', 'Intermediate Process Control', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `coursesfr`
--

DROP TABLE IF EXISTS `coursesfr`;
CREATE TABLE IF NOT EXISTS `coursesfr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(5) NOT NULL,
  `course` varchar(15) NOT NULL,
  `description` varchar(100) NOT NULL,
  `grade` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coursesfr`
--

INSERT INTO `coursesfr` (`id`, `year`, `course`, `description`, `grade`) VALUES
(1, 1, 'CHEM 103', 'Introduction à chimie universitaire I', 'A+'),
(2, 1, 'ENGG 130', 'Mécaniques d\'ingénieurs', 'A+'),
(3, 1, 'MATH 102', 'Algèbre linéaire appliqué ', 'A+'),
(4, 1, 'MATH 209', 'Calculus III', 'A+'),
(5, 1, 'PHYS 130', 'Motion d\'ondes, optiques et son', 'A+'),
(6, 1, 'CHE 243', 'Thermodynamiques d\'ingénieurs', 'A+'),
(7, 1, 'CHEM 105', 'Introduction à chimie universitaire II', 'A-'),
(8, 1, 'EN PH 131', 'Mécaniques', 'A+'),
(9, 1, 'ENCMP 100', 'Programmation pour ingénieurs', 'A'),
(10, 1, 'MATH 201', 'Équation différentielles', 'A+'),
(11, 2, 'CHEM 261', 'Chimie organique I', 'A'),
(12, 2, 'CME 265', 'Analyse de processus', 'A'),
(13, 2, 'ENGL 123', 'Littérature dans la perspective globale', 'B-'),
(14, 2, 'MAT E 202', 'Science de matériaux II', 'A'),
(15, 2, 'PHIL 265', 'Philosophie de science', 'B'),
(16, 2, 'STAT 235', 'Introduction à statistiques pour ingénieurs', 'B+'),
(17, 2, 'BIOCH 200', 'Biochimie fondamentale', 'B+'),
(18, 2, 'ECE 209', 'Fondamentales d\'ingénierie électrique', 'B+'),
(19, 2, 'MAT E 211', 'Caractérisation de matériaux', 'A'),
(20, 2, 'MAT E 221', 'Fabrication et processus de poudres', 'B'),
(21, 2, 'SMO 301', 'Comportements dans organisations', 'A-'),
(22, 2, 'SOC 366', 'Les gens dans industrie', 'B-'),
(23, 3, 'CHE 312', 'Mécaniques de fluide', 'A'),
(24, 3, 'CHE 343', 'Thermodynamiques en ingénierie chimique', 'A+'),
(25, 3, 'CHE 351', 'Laboratoire d\'ingénierie chimique', 'B+'),
(26, 3, 'CHE 374', 'Méthodes de computation pour ingénieurs', 'A'),
(27, 3, 'ENG M 401', 'Gestion financière pour ingénieurs', 'A-'),
(28, 3, 'CHE 314', 'Transfert de chaleur', 'A-'),
(29, 3, 'CHE 318', 'Transfert de masses', 'B-'),
(30, 3, 'CHE 345', 'Analyse de réacteur chimique I', 'A'),
(31, 3, 'CHE 358', 'Analyse de données de processus', 'A-'),
(32, 3, 'PHYS 271', 'Introduction à physique moderne', 'A+'),
(33, 4, 'CHE 416', 'Équilibre étape processus', 'A-'),
(34, 4, 'CHE 445', 'Analyse de réacteur chimique II', 'A-'),
(35, 4, 'CHE 446', 'Contrôle et dynamiques de processus', 'A'),
(36, 4, 'CHE 464', 'Design en ingénierie chimique I', 'A-'),
(37, 4, 'ENG M 530', 'Gestion de project en ingénierie', 'A-'),
(38, 4, 'CHE 454', 'Project de laboratoire en ingénierie chimique', 'B-'),
(39, 4, 'CHE 465', 'Design en ingénierie chimique II', 'C'),
(40, 4, 'CHE 472', 'Modelage de dynamiques de processus', 'A'),
(41, 4, 'CHE 576', 'Contrôle intermédiaire de processus', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `cours` varchar(244) NOT NULL,
  `description` text,
  `note` varchar(12) DEFAULT NULL,
  `annee` int(11) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`cours`, `description`, `note`, `annee`, `id`) VALUES
('CHEM 103', 'Introducción de Química en Universidad I', 'A+', 1, 1),
('ENGG 130', 'Mecánicas de Ingeniero', 'A+', 1, 4),
('MATH 102', 'Matemática Linear', 'A+', 1, 5),
('MATH 209', 'Calculus III', 'A+', 1, 6),
('PHYS 130', 'Moción Ondularia, Optística y Sonido', 'A+', 1, 7),
('CHE 243', 'Termodinámica de Ingeniero', 'A+', 1, 8),
('CHEM 105', 'Introducción de Química Universitaria', 'A-', 1, 9),
('EN PH 131', 'Mecánicas ', 'A+', 1, 10),
('ENCMP', 'Programación de Computación en Ingeniero ', 'A+', 1, 12),
('MATH 201', 'Equaciones Diferenciales', 'A+', 1, 13),
('CHEM 261', 'Química Organica I', 'A', 2, 14),
('CME 265', 'Análisis de Procesos', 'A', 2, 16),
('ENGL 123', 'Literatura en Perspectiva Mundial', 'B-', 2, 20),
('MAT E 202', 'Ciencia de Materiales II', 'A', 2, 21),
('PHIL 265', 'Filosofía de Ciencia', 'B', 2, 22),
('STAT 235', 'Introducción de Estadística en Ingeniería  ', 'B+', 2, 23),
('BIOCH 200', 'Introducción de Bioquímica', 'B+', 2, 24),
('ECE 209', 'Fundamentales de Ingeniería Eléctrica ', 'B+', 2, 25),
('MAT E 211', 'Característica de Materiales', 'A', 2, 26),
('MAT E 221', 'Fabricación y Proceso de Polvos', 'B', 2, 27),
('SMO 301', 'Comportamiento de Organizaciones', 'A-', 2, 28),
('SOC 366', 'Gente en industria', 'B-', 2, 29),
('CHE 312', 'Mecánica de Fluido', 'A', 3, 30),
('CHE 343', 'Termodinámica de Ingeniería Química', 'A+', 3, 31),
('CHE 351', 'Laboratorio de Ingeniería Química', 'B+', 3, 32),
('CHE 374', 'Methods Computacionales de Ingeniería', 'A', 3, 33),
('ENG M 401', 'Administración Financial para Ingenieros', 'A-', 3, 34),
('CHE 341', 'Transferencia de Calor', 'A-', 3, 35),
('CHE 318', 'Transferencia de Masa', 'B-', 3, 36),
('CHE 345', 'Análisis de Reactor Químico I', 'A', 3, 37),
('CHE 358', 'Análisis de Datos de Proceso', 'A-', 3, 38),
('PHYS 271', 'Introducción a Física Moderna', 'A+', 3, 39),
('CHE 416', 'Procesos de Pasos de Equilibro', 'A-', 4, 40),
('CHE 445', 'Análisis de Reactor Químico II', 'A-', 4, 41),
('CHE 446', 'Control y Dinámica de Procesos', 'A', 4, 42),
('CHE 464', 'Diseño de Ingeniería Quíhimica I', 'A-', 4, 43),
('ENG M 530', 'Administración de Proyectos Ingenieros', 'A-', 4, 44),
('CHE 454', 'Proyecto Laboratorio de Ingeniero Químico', 'B-', 4, 45),
('CHE 465', 'Diseño de Ingeniería Química II', 'C', 4, 46),
('CHE 472', 'Dinámica de Modelado de Procesos', 'A', 4, 47),
('CHE 576', 'Control Intermedio de Procesos', 'B+', 4, 48);

-- --------------------------------------------------------

--
-- Table structure for table `employementen`
--

DROP TABLE IF EXISTS `employementen`;
CREATE TABLE IF NOT EXISTS `employementen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start month` varchar(20) NOT NULL,
  `end month` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `task1` text NOT NULL,
  `task2` text NOT NULL,
  `task3` text,
  `position` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employementen`
--

INSERT INTO `employementen` (`id`, `start month`, `end month`, `company`, `task1`, `task2`, `task3`, `position`) VALUES
(3, 'July 2018', 'May 2019', 'Mito Sushi, Montreal, QC', 'Communicate with department leaders to ensure the well-being of the production', 'Use a wide spectrum of tools to make production plans and control materials', 'Create and modify macros to automatize updating of orders, printing and other tasks', 'Planning Staff'),
(6, 'May 2019', 'Present', 'FDM Group', 'Training in PL/SQL, VBA, OS Admin, UNIX, finance and business analysis', 'Started working for client Intact Insurances in July 2019', NULL, 'IT Consultant'),
(7, 'July 2019', 'Present', 'Intact Insurances', 'Automate Excel, Outlook, PowerPoint, IE navigator and Word in VBA combined with JavaScript, SQL and HTML, successfully shortening the time of reporting from hours to minutes', 'Try different methods like WPF applications in C# etc. to find a IT solution for concrete issues in workforce management', 'Analyze data and report with tools like Excel, Access, R, PowerBI and SAS', 'IT Consultant');

-- --------------------------------------------------------

--
-- Table structure for table `employementfr`
--

DROP TABLE IF EXISTS `employementfr`;
CREATE TABLE IF NOT EXISTS `employementfr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start month` varchar(20) NOT NULL,
  `end month` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `task1` text NOT NULL,
  `task2` text NOT NULL,
  `task3` text,
  `position` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employementfr`
--

INSERT INTO `employementfr` (`id`, `start month`, `end month`, `company`, `task1`, `task2`, `task3`, `position`) VALUES
(1, 'Juillet 2018', 'Présent', 'Mito Sushi, Montréal, QC', 'Communiquer avec les chefs d’équipes pour assurer une production efficace', 'Exercer un contrôle strict sur les matières premières en respectant les procédures', 'Créer et modifier les macros pour automatiser la mise à jour, l’impression, etc', 'Commis de Planification'),
(2, 'Sept. 2017', 'Déc. 2017', 'Université d\'Alberta, Edmonton, AB', 'Configurer les paramètres à l’aide de Matlab pour identifier les conditions à optimiser l’efficacité de facilités et la pureté des sucres\r\n', 'Gagner Dean’s Research Award à la fin de cette période pour mon excellente performance', NULL, 'Assistant de Laboratoire'),
(3, 'Sept. 2017', 'Avril 2018', 'Université d\'Alberta, Edmonton, AB', 'Fabriquer du polymère pour le traitement du résidu bitumine et en tester la performance \r\n', 'Analyser leurs performances à l’aide de MS Offices, afin qu’on détermine la meilleure condition de réaction et la direction pour les recherches à l’avenir\r\n', 'Présenter ma recherche à CSChE et publier deux papiers à une conférence en Chile', 'Assistant de Laboratoire');

-- --------------------------------------------------------

--
-- Table structure for table `experenciavoluntaria`
--

DROP TABLE IF EXISTS `experenciavoluntaria`;
CREATE TABLE IF NOT EXISTS `experenciavoluntaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posicion` varchar(50) NOT NULL,
  `deber` text NOT NULL,
  `ano` varchar(20) NOT NULL,
  `organizacion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experenciavoluntaria`
--

INSERT INTO `experenciavoluntaria` (`id`, `posicion`, `deber`, `ano`, `organizacion`) VALUES
(3, 'Voluntario General', 'Contribuir al bienestar y desarrollo de la comunidad francófona en Edmonton', '2017', 'Ciudad Franco Francófona'),
(4, 'VP Patronate', 'Buscar fondos para apoyar nuestras actividades y ayudar a organizar eventos que propagar los conceptos modernos de energía', '2015 - 2018', 'Club de Energía'),
(5, 'VP Cantonés', 'Organizar clases gratis de Cantonés a disposición del público al fin de difundir la cultura Cantonesa y por eso, seleccionar y capacitar voluntarios con que trabajo juntos', '2016 - 2017', 'Comunidad de Voluntarios de Estudiantes');

-- --------------------------------------------------------

--
-- Table structure for table `historiadeempleo`
--

DROP TABLE IF EXISTS `historiadeempleo`;
CREATE TABLE IF NOT EXISTS `historiadeempleo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `inicio mes` varchar(20) DEFAULT NULL,
  `fin mes` varchar(20) DEFAULT NULL,
  `empresa` varchar(50) NOT NULL,
  `deber1` text NOT NULL,
  `deber2` text,
  `deber3` text,
  `posicion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `historiadeempleo`
--

INSERT INTO `historiadeempleo` (`id`, `inicio mes`, `fin mes`, `empresa`, `deber1`, `deber2`, `deber3`, `posicion`) VALUES
(1, 'Julio 2018', 'Presento', 'Mito Sushi, Montreal, QC', 'Comunicarme con el líder de los equipos para asegurar una producción eficiente ', 'Ejercer un control estricto sobre las materia primas respetando los procedimientos', 'Crear y editar macros para automatizar el trabajo, por ejemplo la actualización de órdenes', 'Empleado de Planificación'),
(2, 'Sept. 2017', 'Dec. 2017', 'Universidad de Alberta, Edmonton, AB', 'Configurar los parámetros utilizando Matlab para identificar las condiciones optimizando la eficiencia y la pureza de la separación de azucares', 'Ganar un premio para mi presentación de los resultados de mi investigación por mi actuación excelente', NULL, 'Asistente de Laboratorio'),
(3, 'Sept. 2017', 'Abril 2018', 'Universidad de Alberta, Edmonton, AB', 'Hacer polímero para el tratamiento del residuo de betún y probar su rendimiento', 'Analizar su rendimiento usando MS Offices para determinar la mejor condición de respuesta y la dirección para futuras investigaciones', 'Presentar mi investigación en la conferencia CSChE y publicar dos artículos en Chile, Julio 2017', 'Asistente de Laboratorio');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(24) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_swedish_ci NOT NULL,
  `contenu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titre`, `contenu`) VALUES
(1, 'premier', 1),
(2, 'premier', 1),
(3, 'ddd', 23),
(4, 'ddd', 6);

-- --------------------------------------------------------

--
-- Table structure for table `Personnel`
--

DROP TABLE IF EXISTS `Personnel`;
CREATE TABLE IF NOT EXISTS `Personnel` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Telephone` bigint(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mdp` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Personnel`
--

INSERT INTO `Personnel` (`id`, `Nom`, `Prenom`, `Telephone`, `Email`, `Mdp`) VALUES
(13, 'Yohanna', 'Orita', 888, 'soupe@pho.ca', ''),
(15, 'Houcine', 'Bellout', 123456, 'houcine@abc.com', ''),
(16, 'dfadfa', 'Hadaf', 666, 'fcghgjkguk@qqu.ca', ''),
(17, 'Rodriguez', 'Yohann', 888888, 'Yohann@gmail.ca', ''),
(18, 'Houcine', 'Bellout', 123, 'houcine@mito.ca', ''),
(29, 'booboo', 'superman', 999999, 'juk@fuck.com', '$2y$10$c/Xp/0LjX4UyP4MfYJyq6OlrM5zf7z58qZkACz4J/.mgBi3sTGxtC'),
(30, 'yo', 'yo', 9999999999, 'yo@gmail.com', '$2y$10$V81e/91iPxpjHueIQCy/yeKBU3yJaD7t4bkzbhldAFt1pj7QO0Byq');

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proyecto` varchar(100) DEFAULT NULL,
  `descipcion` text,
  `ano` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proyectos`
--

INSERT INTO `proyectos` (`id`, `proyecto`, `descipcion`, `ano`) VALUES
(1, 'Floculación de residuos bituminosos', NULL, '2017'),
(2, 'Optimización de código en física cuántica', NULL, '2017'),
(3, 'Cromatografía simulada', NULL, '2017'),
(4, 'Gas natural licuado y producción de gas natural', NULL, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `recordatorio`
--

DROP TABLE IF EXISTS `recordatorio`;
CREATE TABLE IF NOT EXISTS `recordatorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` tinyint(1) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recordatorio`
--

INSERT INTO `recordatorio` (`id`, `estado`, `descripcion`, `categoria`, `inicio`, `fin`) VALUES
(12, 0, 'Acheter un sac à dos', 'Usage', '2019-03-30', '2019-07-26'),
(13, 0, 'Acheter des dreadlocks', 'Beauté', '2019-03-30', '2019-07-26'),
(14, 0, 'Lire les deux livres en Python', 'fuck', '2019-04-06', '2019-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` text,
  `prix` int(10) NOT NULL,
  `monnaie` varchar(10) DEFAULT NULL,
  `unite` varchar(10) DEFAULT NULL,
  `quantite` int(10) NOT NULL,
  `DMA` date DEFAULT NULL,
  `promotion` tinyint(1) DEFAULT NULL,
  `popularite` tinyint(1) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id`, `nom`, `description`, `prix`, `monnaie`, `unite`, `quantite`, `DMA`, `promotion`, `popularite`, `image`, `info`) VALUES
(1, 'Chingada Flor para el San-Valentin', 'Una chingada flor para las chicas', 10000, 'USD', 'UN', 1000, '2019-03-01', 1, 1, 'test.png', 'Como se llama un nariz en igles.? no se...'),
(2, 'Dictatormaricon', 'El presidente del venezuela', 9, 'CAD', 'UN', 1, '2019-03-10', 0, 0, 'test2.png', 'Viva la republica'),
(5, 'Chingada Flor para el San-Valentin', 'Una chingada flor para las chicas', 10000, 'USD', 'UN', 1000, '2019-03-01', 1, 1, 'test.png', 'Como se llama un nariz en igles.? no se...'),
(6, 'Chingada Flor para el San-Valentin', 'Una chingada flor para las chicas', 10000, 'USD', 'UN', 1000, '2019-03-01', 1, 1, 'test.png', 'Como se llama un nariz en igles.? no se...');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `tm` datetime(6) NOT NULL,
  `ref` varchar(250) NOT NULL,
  `agent` varchar(250) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `host_name` varchar(20) NOT NULL,
  `tracking_page_name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=542 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `tm`, `ref`, `agent`, `ip`, `host_name`, `tracking_page_name`) VALUES
(1, '2019-04-18 00:00:00.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(2, '2019-04-18 00:00:00.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(3, '2019-04-18 00:00:00.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(4, '2019-04-18 22:32:12.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(5, '2019-04-18 22:45:50.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(6, '2019-04-18 22:46:49.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(7, '2019-04-18 22:47:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(8, '2019-04-18 22:47:34.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(9, '2019-04-18 22:48:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(10, '2019-04-18 22:48:11.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(11, '2019-04-18 22:48:59.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(12, '2019-04-18 22:49:09.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(13, '2019-04-18 22:49:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(14, '2019-04-18 22:49:49.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(15, '2019-04-18 22:50:55.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(16, '2019-04-18 22:52:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(17, '2019-04-18 22:52:19.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(18, '2019-04-18 22:53:08.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(19, '2019-04-18 22:54:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(20, '2019-04-18 22:57:55.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(21, '2019-04-18 22:58:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(22, '2019-04-18 22:58:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(23, '2019-04-18 22:59:07.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(24, '2019-04-21 23:56:08.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(25, '2019-04-21 23:59:21.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(26, '2019-04-21 23:59:43.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(27, '2019-04-22 00:00:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(28, '2019-04-22 00:00:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(29, '2019-04-22 00:00:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(30, '2019-04-22 00:00:48.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(31, '2019-04-22 00:03:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(32, '2019-04-22 00:03:36.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(33, '2019-04-22 00:03:41.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(34, '2019-04-22 00:03:54.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(35, '2019-04-22 00:04:07.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(36, '2019-04-22 00:04:25.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(37, '2019-04-22 00:04:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(38, '2019-04-22 00:04:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(39, '2019-04-22 00:05:36.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(40, '2019-04-22 00:05:49.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(41, '2019-04-22 00:06:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(42, '2019-04-22 00:06:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(43, '2019-04-22 00:06:21.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(44, '2019-04-22 00:06:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(45, '2019-04-22 00:06:42.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(46, '2019-04-22 00:06:49.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(47, '2019-04-22 00:08:11.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(48, '2019-04-22 00:08:21.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(49, '2019-04-22 00:10:57.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(50, '2019-04-22 00:11:23.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(51, '2019-04-22 00:11:44.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(52, '2019-04-22 00:11:47.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(53, '2019-04-22 00:12:14.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(54, '2019-04-22 00:12:38.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(55, '2019-04-22 00:13:02.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(56, '2019-04-22 00:13:16.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(57, '2019-04-22 00:13:40.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(58, '2019-04-22 00:15:07.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(59, '2019-04-22 00:15:25.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(60, '2019-04-22 00:18:33.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(61, '2019-04-22 00:18:38.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(62, '2019-04-22 00:18:46.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(63, '2019-04-22 00:19:37.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(64, '2019-04-22 00:19:44.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(65, '2019-04-22 00:19:54.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(66, '2019-04-22 00:21:04.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(67, '2019-04-22 00:21:13.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(68, '2019-04-22 00:22:18.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(69, '2019-04-22 00:22:25.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(70, '2019-04-22 00:22:32.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(71, '2019-04-22 00:22:38.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(72, '2019-04-22 00:23:36.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(73, '2019-04-22 00:24:40.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(74, '2019-04-22 00:25:36.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(75, '2019-04-22 00:26:14.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(76, '2019-04-22 00:27:21.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(77, '2019-04-22 00:27:38.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(78, '2019-04-22 00:27:52.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(79, '2019-04-22 00:28:05.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(80, '2019-04-22 00:28:15.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(81, '2019-04-22 00:28:20.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(82, '2019-04-22 00:29:16.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(83, '2019-04-22 00:29:55.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(84, '2019-04-22 00:31:11.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(85, '2019-04-22 00:31:28.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(86, '2019-04-22 00:32:12.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(87, '2019-04-22 00:32:15.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(88, '2019-04-22 00:33:50.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(89, '2019-04-22 00:34:30.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(90, '2019-04-22 00:35:12.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(91, '2019-04-22 00:35:49.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(92, '2019-04-22 00:36:15.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(93, '2019-04-22 00:36:37.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(94, '2019-04-22 00:36:55.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(95, '2019-04-22 00:37:12.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(96, '2019-04-22 00:37:52.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(97, '2019-04-22 00:38:06.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(98, '2019-04-22 00:38:22.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(99, '2019-04-22 00:38:35.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(100, '2019-04-22 00:38:54.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(101, '2019-04-22 00:39:17.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(102, '2019-04-22 00:39:31.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(103, '2019-04-22 00:40:16.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(104, '2019-04-22 00:41:29.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(105, '2019-04-22 00:41:52.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(106, '2019-04-22 00:42:08.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(107, '2019-04-22 00:42:16.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(108, '2019-04-22 00:42:43.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(109, '2019-04-22 00:42:50.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(110, '2019-04-22 00:43:03.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(111, '2019-04-22 00:43:07.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(112, '2019-04-22 00:43:16.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(113, '2019-04-22 00:43:38.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(114, '2019-04-22 00:43:50.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(115, '2019-04-22 00:44:25.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(116, '2019-04-22 00:44:51.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(117, '2019-04-22 00:45:59.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(118, '2019-04-22 00:46:08.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(119, '2019-04-22 00:46:14.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(120, '2019-04-22 00:48:39.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(121, '2019-04-22 00:49:12.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(122, '2019-04-22 00:49:54.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(123, '2019-04-22 00:50:05.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(124, '2019-04-22 00:50:10.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(125, '2019-04-22 00:50:15.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(126, '2019-04-22 00:50:24.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(127, '2019-04-22 00:50:43.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(128, '2019-04-22 00:51:07.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(129, '2019-04-22 00:51:14.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(130, '2019-04-22 00:51:40.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(131, '2019-04-22 00:51:48.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(132, '2019-04-22 00:51:51.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(133, '2019-04-22 00:52:16.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(134, '2019-04-22 00:52:29.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(135, '2019-04-22 00:52:47.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(136, '2019-04-22 00:53:15.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(137, '2019-04-22 00:53:36.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(138, '2019-04-22 00:53:55.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(139, '2019-04-22 00:54:33.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(140, '2019-04-22 00:54:57.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(141, '2019-04-22 00:55:04.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(142, '2019-04-22 00:55:10.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(143, '2019-04-22 00:56:07.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(144, '2019-04-22 00:56:19.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(145, '2019-04-22 00:56:28.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(146, '2019-04-22 00:57:55.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(147, '2019-04-22 00:58:53.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(148, '2019-04-22 00:59:05.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(149, '2019-04-22 00:59:23.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(150, '2019-04-22 00:59:51.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(151, '2019-04-22 00:59:52.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(152, '2019-04-22 01:00:55.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(153, '2019-04-22 01:01:15.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(154, '2019-04-22 01:01:33.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(155, '2019-04-22 01:02:12.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(156, '2019-04-22 01:02:22.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(157, '2019-04-22 01:03:14.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(158, '2019-04-22 01:03:28.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(159, '2019-04-22 01:03:46.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(160, '2019-04-22 01:20:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(161, '2019-04-22 01:27:05.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(162, '2019-04-22 01:57:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(163, '2019-04-22 02:52:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(164, '2019-04-22 02:52:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(165, '2019-04-22 02:57:54.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(166, '2019-04-22 03:04:21.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(167, '2019-04-22 03:09:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(168, '2019-04-22 09:55:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(169, '2019-04-22 10:00:24.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(170, '2019-04-22 10:00:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(171, '2019-04-22 10:00:47.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(172, '2019-04-22 10:01:08.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(173, '2019-04-22 10:01:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(174, '2019-04-22 10:02:12.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(175, '2019-04-22 10:03:01.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(176, '2019-04-22 10:03:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(177, '2019-04-22 10:23:24.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(178, '2019-04-22 10:55:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(179, '2019-04-22 10:55:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(180, '2019-04-22 10:55:47.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(181, '2019-04-22 10:55:52.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(182, '2019-04-22 10:56:21.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(183, '2019-04-22 10:56:30.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(184, '2019-04-22 10:56:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(185, '2019-04-22 10:57:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(186, '2019-04-22 10:57:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(187, '2019-04-22 10:58:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(188, '2019-04-22 10:58:38.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(189, '2019-04-22 10:58:48.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(190, '2019-04-22 10:59:09.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(191, '2019-04-22 10:59:59.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(192, '2019-04-22 11:01:31.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(193, '2019-04-22 11:02:18.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(194, '2019-04-22 11:02:41.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(195, '2019-04-22 11:03:07.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(196, '2019-04-22 11:03:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(197, '2019-04-22 11:03:27.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(198, '2019-04-22 11:03:30.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(199, '2019-04-22 11:03:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(200, '2019-04-22 11:04:04.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(201, '2019-04-22 11:04:12.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(202, '2019-04-22 11:04:21.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(203, '2019-04-22 11:04:33.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(204, '2019-04-22 11:04:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(205, '2019-04-22 11:04:47.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(206, '2019-04-22 11:04:52.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(207, '2019-04-22 11:05:20.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(208, '2019-04-22 11:05:38.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(209, '2019-04-22 11:06:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(210, '2019-04-22 11:06:06.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(211, '2019-04-22 11:06:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(212, '2019-04-22 11:06:24.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(213, '2019-04-22 11:06:38.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(214, '2019-04-22 11:07:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(215, '2019-04-22 11:09:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(216, '2019-04-22 11:10:14.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(217, '2019-04-22 11:10:20.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(218, '2019-04-22 11:11:25.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(219, '2019-04-22 11:12:05.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(220, '2019-04-22 11:12:10.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(221, '2019-04-22 11:13:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(222, '2019-04-22 11:13:06.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(223, '2019-04-22 11:15:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(224, '2019-04-22 11:17:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(225, '2019-04-22 11:17:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(226, '2019-04-22 11:18:39.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(227, '2019-04-22 11:18:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(228, '2019-04-22 11:19:18.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(229, '2019-04-22 11:19:19.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(230, '2019-04-22 11:19:22.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(231, '2019-04-22 11:19:23.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(232, '2019-04-22 11:19:29.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(233, '2019-04-22 11:58:36.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(234, '2019-04-22 12:00:30.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(235, '2019-04-22 12:01:07.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(236, '2019-04-22 12:01:23.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(237, '2019-04-22 12:01:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(238, '2019-04-22 12:01:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(239, '2019-04-22 20:25:41.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(240, '2019-04-22 20:26:11.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(241, '2019-04-22 20:26:14.000000', 'http://localhost:8888/avril/t1.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(242, '2019-04-22 20:26:16.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(243, '2019-04-22 20:39:14.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(244, '2019-04-22 20:39:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(245, '2019-04-22 20:39:41.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(246, '2019-04-22 20:39:53.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(247, '2019-04-22 20:39:55.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example');
INSERT INTO `visitors` (`id`, `tm`, `ref`, `agent`, `ip`, `host_name`, `tracking_page_name`) VALUES
(248, '2019-04-22 20:40:01.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(249, '2019-04-22 20:50:28.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(250, '2019-04-22 20:51:17.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(251, '2019-04-22 21:00:25.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(252, '2019-04-22 21:00:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(253, '2019-04-22 21:00:39.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(254, '2019-04-22 21:02:36.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(255, '2019-04-22 21:04:04.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(256, '2019-04-22 21:05:22.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(257, '2019-04-22 21:05:50.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(258, '2019-04-22 21:11:55.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(259, '2019-04-22 21:12:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(260, '2019-04-22 21:13:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(261, '2019-04-22 21:13:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(262, '2019-04-22 21:13:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(263, '2019-04-22 21:14:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(264, '2019-04-22 21:14:56.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(265, '2019-04-22 21:15:24.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(266, '2019-04-22 21:18:22.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(267, '2019-04-22 21:22:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(268, '2019-04-22 21:25:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(269, '2019-04-22 21:25:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(270, '2019-04-22 21:26:14.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(271, '2019-04-22 21:26:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(272, '2019-04-22 21:28:57.000000', 'http://localhost:8888/avril/pie.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(273, '2019-04-22 21:33:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(274, '2019-04-22 21:34:39.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(275, '2019-04-22 21:35:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(276, '2019-04-22 21:35:58.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(277, '2019-04-22 21:36:12.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(278, '2019-04-22 21:36:18.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(279, '2019-04-22 21:36:52.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(280, '2019-04-22 21:37:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(281, '2019-04-22 21:38:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(282, '2019-04-22 21:38:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(283, '2019-04-22 21:38:33.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(284, '2019-04-22 21:39:48.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(285, '2019-04-22 21:40:07.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(286, '2019-04-22 21:40:19.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(287, '2019-04-22 21:43:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(288, '2019-04-22 21:43:57.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(289, '2019-04-22 21:44:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(290, '2019-04-22 21:44:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(291, '2019-04-22 21:54:00.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(292, '2019-04-23 11:50:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(293, '2019-04-23 11:50:48.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(294, '2019-04-23 11:50:48.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(295, '2019-04-23 11:53:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(296, '2019-04-23 11:53:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(297, '2019-04-23 11:53:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(298, '2019-04-23 11:56:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(299, '2019-04-23 11:56:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(300, '2019-04-23 11:58:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(301, '2019-04-23 11:59:05.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(302, '2019-04-23 11:59:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(303, '2019-04-24 11:57:19.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(304, '2019-04-25 17:05:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(305, '2019-04-26 14:47:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(306, '2019-04-26 14:47:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(307, '2019-04-26 14:47:33.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(308, '2019-04-26 14:47:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(309, '2019-04-26 17:23:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(310, '2019-04-26 19:15:12.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(311, '2019-04-26 19:53:34.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(312, '2019-04-26 22:48:42.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(313, '2019-04-27 11:17:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(314, '2019-04-27 11:17:07.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(315, '2019-04-27 11:19:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(316, '2019-04-27 11:20:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(317, '2019-04-27 11:24:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(318, '2019-04-27 11:28:39.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(319, '2019-04-27 11:44:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(320, '2019-04-27 11:48:06.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(321, '2019-04-27 11:48:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(322, '2019-04-27 11:54:23.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(323, '2019-04-27 12:03:41.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(324, '2019-04-27 12:04:42.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(325, '2019-04-27 12:07:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(326, '2019-04-27 23:21:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(327, '2019-04-27 23:31:54.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(328, '2019-04-27 23:33:48.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(329, '2019-04-28 00:41:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(330, '2019-04-28 09:03:59.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(331, '2019-04-28 09:07:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(332, '2019-04-28 09:24:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(333, '2019-04-28 09:38:49.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(334, '2019-04-29 18:08:01.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(335, '2019-05-01 11:23:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(336, '2019-05-03 08:52:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(337, '2019-05-05 19:51:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(338, '2019-05-06 20:32:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(339, '2019-05-07 20:48:04.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(340, '2019-05-07 20:51:34.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(341, '2019-05-07 20:51:36.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(342, '2019-05-07 20:51:58.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(343, '2019-05-07 20:53:42.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(344, '2019-05-07 20:53:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(345, '2019-05-07 20:53:58.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(346, '2019-05-07 20:54:20.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(347, '2019-05-07 20:56:27.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(348, '2019-05-07 20:56:39.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(349, '2019-05-07 20:57:43.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(350, '2019-05-07 20:57:57.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(351, '2019-05-07 20:58:09.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(352, '2019-05-07 20:58:58.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(353, '2019-05-07 20:59:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(354, '2019-05-07 20:59:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(355, '2019-05-07 20:59:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(356, '2019-05-07 21:00:08.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(357, '2019-05-07 21:00:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(358, '2019-05-07 21:00:43.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(359, '2019-05-07 21:00:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(360, '2019-05-07 21:02:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(361, '2019-05-07 21:03:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(362, '2019-05-07 21:03:55.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(363, '2019-05-07 21:04:09.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(364, '2019-05-07 21:04:18.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(365, '2019-05-07 21:04:23.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(366, '2019-05-07 21:04:36.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(367, '2019-05-07 21:04:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(368, '2019-05-07 21:05:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(369, '2019-05-07 21:05:09.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(370, '2019-05-07 21:05:38.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(371, '2019-05-07 21:08:18.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(372, '2019-05-07 21:08:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(373, '2019-05-07 21:09:05.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(374, '2019-05-07 21:09:27.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(375, '2019-05-07 21:09:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(376, '2019-05-07 21:09:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(377, '2019-05-07 21:09:56.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(378, '2019-05-07 21:10:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(379, '2019-05-07 21:10:20.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(380, '2019-05-07 21:10:58.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(381, '2019-05-07 21:11:09.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(382, '2019-05-07 21:11:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(383, '2019-05-07 21:11:22.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(384, '2019-05-07 21:12:27.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(385, '2019-05-07 21:12:33.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(386, '2019-05-07 21:12:52.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(387, '2019-05-07 21:13:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(388, '2019-05-07 21:13:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(389, '2019-05-07 21:13:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(390, '2019-05-07 21:13:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(391, '2019-05-07 21:14:14.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(392, '2019-05-07 21:14:24.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(393, '2019-05-07 21:14:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(394, '2019-05-07 21:14:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(395, '2019-05-07 21:14:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(396, '2019-05-07 21:15:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(397, '2019-05-07 21:15:15.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(398, '2019-05-07 21:15:27.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(399, '2019-05-07 21:15:49.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(400, '2019-05-07 21:15:59.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(401, '2019-05-07 21:16:05.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(402, '2019-05-07 21:16:20.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(403, '2019-05-07 21:16:31.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(404, '2019-05-07 21:16:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(405, '2019-05-07 21:17:20.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(406, '2019-05-07 21:17:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(407, '2019-05-07 21:17:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(408, '2019-05-07 21:18:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(409, '2019-05-07 21:18:56.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(410, '2019-05-07 21:19:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(411, '2019-05-07 21:19:20.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(412, '2019-05-07 21:19:38.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(413, '2019-05-07 21:19:47.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(414, '2019-05-07 21:20:24.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(415, '2019-05-07 21:21:05.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(416, '2019-05-07 21:22:18.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(417, '2019-05-07 21:22:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(418, '2019-05-07 21:23:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(419, '2019-05-07 21:24:07.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(420, '2019-05-07 21:24:35.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(421, '2019-05-07 21:56:00.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(422, '2019-05-07 22:00:17.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(423, '2019-05-07 22:00:24.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(424, '2019-05-07 22:00:57.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(425, '2019-05-07 22:01:02.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(426, '2019-05-07 22:01:45.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(427, '2019-05-07 22:01:50.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(428, '2019-05-07 22:03:00.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(429, '2019-05-07 22:03:36.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(430, '2019-05-07 22:03:54.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(431, '2019-05-07 22:03:59.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(432, '2019-05-07 22:04:15.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(433, '2019-05-07 22:04:50.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(434, '2019-05-07 22:05:10.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(435, '2019-05-07 22:05:50.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(436, '2019-05-07 22:06:49.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(437, '2019-05-07 22:07:56.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(438, '2019-05-07 22:08:16.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(439, '2019-05-07 22:08:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(440, '2019-05-07 22:08:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(441, '2019-05-07 22:08:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(442, '2019-05-07 22:09:04.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(443, '2019-05-07 22:09:21.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(444, '2019-05-07 22:09:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(445, '2019-05-07 22:09:39.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(446, '2019-05-07 22:09:49.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(447, '2019-05-07 22:10:01.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(448, '2019-05-07 22:10:18.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(449, '2019-05-07 22:10:25.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(450, '2019-05-07 22:10:37.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(451, '2019-05-07 22:10:39.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(452, '2019-05-07 22:10:41.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(453, '2019-05-07 22:10:42.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(454, '2019-05-07 22:10:49.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(455, '2019-05-07 22:10:50.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(456, '2019-05-07 22:10:53.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(457, '2019-05-07 22:10:56.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(458, '2019-05-07 22:11:16.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(459, '2019-05-07 22:14:09.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(460, '2019-05-07 22:15:25.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(461, '2019-05-07 22:15:44.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(462, '2019-05-07 22:15:56.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(463, '2019-05-07 22:16:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(464, '2019-05-07 22:18:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(465, '2019-05-07 22:19:55.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(466, '2019-05-07 22:20:48.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(467, '2019-05-07 22:21:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(468, '2019-05-07 22:22:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(469, '2019-05-07 22:24:37.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(470, '2019-05-07 22:25:59.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(471, '2019-05-07 22:26:59.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(472, '2019-05-08 05:14:52.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(473, '2019-05-08 05:37:01.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(474, '2019-05-08 13:20:31.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(475, '2019-05-08 13:20:31.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(476, '2019-05-08 13:20:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(477, '2019-05-08 13:21:23.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(478, '2019-05-08 13:23:33.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(479, '2019-05-08 13:23:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(480, '2019-05-08 13:23:51.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(481, '2019-05-08 13:24:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(482, '2019-05-08 13:24:08.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(483, '2019-05-08 13:33:23.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(484, '2019-05-08 13:33:50.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(485, '2019-05-08 13:33:59.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(486, '2019-05-08 13:34:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(487, '2019-05-08 13:34:23.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(488, '2019-05-08 13:34:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.110 Safari/537.36', '', '', 'example'),
(489, '2019-05-09 05:07:10.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(490, '2019-05-09 05:07:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Safari/605.1.15', '', '', 'example'),
(491, '2019-05-29 10:23:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(492, '2019-05-29 10:23:46.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(493, '2019-05-29 10:24:09.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(494, '2019-05-29 10:24:11.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(495, '2019-05-29 10:24:20.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(496, '2019-05-29 10:24:23.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(497, '2019-05-29 10:24:58.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(498, '2019-05-29 10:25:00.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(499, '2019-05-29 10:25:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(500, '2019-05-29 10:25:35.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(501, '2019-05-29 10:25:40.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(502, '2019-05-29 10:25:43.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(503, '2019-05-29 10:25:58.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(504, '2019-07-09 16:30:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(505, '2019-07-09 16:30:53.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Safari/605.1.15', '', '', 'example'),
(506, '2019-09-15 20:37:27.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(507, '2019-09-15 20:37:27.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(508, '2019-09-15 20:37:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(509, '2019-09-15 20:37:29.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(510, '2019-09-15 20:37:32.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(511, '2019-09-15 20:37:34.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(512, '2019-09-15 20:38:06.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(513, '2020-03-19 09:02:04.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(514, '2020-03-19 09:02:06.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example');
INSERT INTO `visitors` (`id`, `tm`, `ref`, `agent`, `ip`, `host_name`, `tracking_page_name`) VALUES
(515, '2020-03-19 09:02:42.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(516, '2020-03-19 09:03:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(517, '2020-03-19 09:10:30.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(518, '2020-03-19 09:12:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(519, '2020-03-19 09:15:54.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(520, '2020-03-19 09:17:32.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(521, '2020-03-19 09:23:02.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(522, '2020-03-19 09:24:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(523, '2020-03-19 09:25:50.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(524, '2020-03-19 09:27:28.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(525, '2020-03-19 09:28:25.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(526, '2020-03-19 09:29:13.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(527, '2020-03-19 09:29:40.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(528, '2020-03-19 09:30:03.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(529, '2020-03-19 09:30:26.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(530, '2020-03-19 09:30:42.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(531, '2020-03-19 09:30:57.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(532, '2020-03-19 09:31:09.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(533, '2020-03-19 09:31:16.000000', 'http://localhost:8888/avril/projects.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(534, '2020-03-19 09:31:19.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(535, '2020-03-19 09:31:20.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(536, '2020-03-19 09:31:22.000000', 'http://localhost:8888/avril/contact.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(537, '2020-03-19 09:31:24.000000', 'http://localhost:8888/avril/remarks.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(538, '2020-03-19 09:31:39.000000', 'http://localhost:8888/avril/work.php', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(539, '2020-03-19 18:59:45.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(540, '2020-03-20 11:26:18.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example'),
(541, '2020-03-20 11:26:20.000000', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', '', '', 'example');

-- --------------------------------------------------------

--
-- Table structure for table `volunteeringen`
--

DROP TABLE IF EXISTS `volunteeringen`;
CREATE TABLE IF NOT EXISTS `volunteeringen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(20) NOT NULL,
  `task` text NOT NULL,
  `year` varchar(20) NOT NULL,
  `organization` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteeringen`
--

INSERT INTO `volunteeringen` (`id`, `position`, `task`, `year`, `organization`) VALUES
(1, 'VP Sponsorship', 'Searched for sponsorship and communicate with them to ensure continuous funding\r\nand participated in event planning and event hosting in a strong team in ten', '2015-2018', 'Energy Club'),
(2, 'VP Contonese', 'Organized classes facing the general public on the Cantonese languages and cultures; interviewed and selected volunteers with whom I would work to propagate this beautiful language and culture\r\n', '2016-2017', 'Students\' Volunteering Community '),
(3, 'General Volunteer', 'Contributed to the well-being and development of French-speaking community ', '2018', 'City of Francophone');

-- --------------------------------------------------------

--
-- Table structure for table `volunteeringfr`
--

DROP TABLE IF EXISTS `volunteeringfr`;
CREATE TABLE IF NOT EXISTS `volunteeringfr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(20) NOT NULL,
  `task` text NOT NULL,
  `year` varchar(20) NOT NULL,
  `organization` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteeringfr`
--

INSERT INTO `volunteeringfr` (`id`, `position`, `task`, `year`, `organization`) VALUES
(1, 'Bénévole Général ', 'Contribuer au bien-être et au développement de la communauté francophone à Edmonton\r\n', '2018', 'La Cité Francophone'),
(2, 'VP Patronage', 'Rechercher du financement pour soutenir nos activités associées à l’énergie et contribuer à organiser des événements et assister aux réunions mensuelles \r\n', '2015-2018', 'Club d\'énergie'),
(3, 'VP Cantonais', 'Organiser des classes de cantonais disponibles au public; sélectionner et former les bénévolats pour qu’on travaille ensemble en faisant passer les cultures cantonaises et la langue cantonaise\r\n', '2016-2017', 'Communauté Bénévole des Étudiants');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
