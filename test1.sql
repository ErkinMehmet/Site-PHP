-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 31, 2019 at 12:02 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--
CREATE DATABASE IF NOT EXISTS `test1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test1`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `anom` varchar(50) NOT NULL,
  `online` int(1) NOT NULL DEFAULT '0',
  `typing` int(1) NOT NULL DEFAULT '0',
  `vip` int(1) NOT NULL DEFAULT '0',
  `mood` tinyint(4) DEFAULT NULL,
  `webpush` int(1) NOT NULL DEFAULT '0',
  `interests` varchar(200) DEFAULT NULL,
  `lang` varchar(20) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `uid`, `anom`, `online`, `typing`, `vip`, `mood`, `webpush`, `interests`, `lang`, `image`, `place`) VALUES
(1, 6, 'Yonnbaby', 0, 0, 0, NULL, 0, NULL, NULL, NULL, ''),
(2, 7, 'Yanky', 1, 0, 0, NULL, 0, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `tiempo` date NOT NULL,
  `abstracto` tinytext,
  `cuerpo` mediumtext NOT NULL,
  `ps` tinytext,
  `credito` varchar(200) DEFAULT NULL,
  `referencia` tinytext,
  `lang` varchar(100) DEFAULT NULL,
  `cat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `tiempo`, `abstracto`, `cuerpo`, `ps`, `credito`, `referencia`, `lang`, `cat`) VALUES
(1, 'Test', '2020-03-01', 'C est un tese lol', 'c est le corps de notre article', 'ps. c est très bon cet article', 'credit a alejo', 'book1 \r\nbook2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

DROP TABLE IF EXISTS `cate`;
CREATE TABLE IF NOT EXISTS `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commarticulos`
--

DROP TABLE IF EXISTS `commarticulos`;
CREATE TABLE IF NOT EXISTS `commarticulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articuloid` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tit` varchar(200) NOT NULL,
  `comen` tinytext NOT NULL,
  `tiempo` date NOT NULL,
  `lugar` varchar(200) NOT NULL,
  `cel` varchar(20) NOT NULL,
  `login` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commarticulos`
--

INSERT INTO `commarticulos` (`id`, `articuloid`, `nombre`, `correo`, `tit`, `comen`, `tiempo`, `lugar`, `cel`, `login`) VALUES
(1, 1, 'hello', 'hello', 'hello', 'hello', '2020-11-03', 'hello', 'hello', 'hello'),
(2, 1, 'fafda', 'dfadf@dd.com', 'title', 'dfdasfadfPlease enter your comments over here!\r\n\r\n', '2020-11-24', 'fadfa', 'dfadfa', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15'),
(3, 1, '', '', 'title', '', '2020-11-24', '', '', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `commentaire` text NOT NULL,
  `hidden` int(1) DEFAULT NULL,
  `temps` date DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `cel` varchar(20) NOT NULL,
  `login` varchar(200) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `commentaire`, `hidden`, `temps`, `lugar`, `correo`, `cel`, `login`, `pays`) VALUES
(1, 'Luisana de Amania', 'Es muy bonito! Me encanta el diseño y el contenido.', 0, '2019-07-10', NULL, '', '', NULL, NULL),
(2, 'Jennifer Lopez', 'Me encanta jajajajajajaja te quero', 0, '2019-07-22', NULL, '', '', NULL, NULL),
(5, 'Maluma', 'AH tu me calienta :( ', 0, '2019-07-12', NULL, '', '', NULL, NULL),
(6, 'uhh', 'uhh', 0, '2019-11-26', NULL, '', '', NULL, NULL),
(7, 'dfads', 'Please enter your comments over here!<b>Bold</b>', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(8, 'Maria2', 'Please enter your comments over here!\r\n\r\n<b>Bolddsfadfa i have bold content</b>', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(9, 'jhn', 'Please enter your comments over here! <b>&nbsp;dd&nbsp;John</b>', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(10, 'lobo', 'Please enter your comments over here!\r\n\r\n<img src=\"http://localhost:8888/avril/drapeaux/AG.png\" width=\"30\">', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(11, 'lobo', 'Please enter your comments over here!\r\n\r\n<img src=\"http://localhost:8888/avril/drapeaux/AG.png\" width=\"30\">', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(12, 'adfasd', 'Please enter your comments over hedafre!\r\n\r\n', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(13, 'adfasd', 'Please enter your comments over hedafre!\r\n\r\n', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(14, 'bueaut', 'Please enter your comments over here!kitty', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(15, 'ss', '<span style=\"font-size: 18px; background-color: rgb(211, 211, 211);\">Please enter your comments over here!kitty</span>', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(16, 'sd', '<span style=\"font-size: 18px; background-color: rgb(211, 211, 211);\">Please enter your comments over here!kitty</span>', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(17, 'aaa', '<span style=\"font-size: 18px; background-color: rgb(211, 211, 211);\">Please enter your comments over here!kitty</span>', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(18, 'aa', 'Please enter your comments over here!\r\n\r\n', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(19, 'armero', 'sadjfljadfjfjjfjdjfladfladjslfj;asfjsafjsajf;sajf;ajsf;j;sajf;dasjf;asfjdads;fj;asfjd;asjfasdjf;adsjf;adsf<img src=\"http://localhost:8888/avril/drapeaux/AR.png\" width=\"30\">', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(20, 'Poop', 'fuck tabarnak ldafoadjfoadflnadslfndaslgjdaslgjladsjgfladsjgladsjgjasdlgjdalsgjas<img src=\"http://localhost:8888/avril/drapeaux/PH.png\" width=\"30\"><img src=\"http://localhost:8888/avril/drapeaux/SC.png\" width=\"30\"><img src=\"http://localhost:8888/avril/drapeaux/SC.png\" width=\"30\"><img src=\"http://localhost:8888/avril/drapeaux/SC.png\" width=\"30\"><img src=\"http://localhost:8888/avril/drapeaux/SC.png\" width=\"30\">', 0, '2020-03-20', NULL, '', '', NULL, NULL),
(21, 'SSDFD', 'Please enter your comments over here!dfadfafadasfa<img src=\"http://localhost:8888/avril/drapeaux/BS.png\" width=\"30\">fdafafafadsfdasfasdfadsfdasf', 0, '2020-03-21', 'fuck', '', '3242424', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', NULL),
(22, 'Alberto Fernández', 'Please enter your comments over here!sdsdsd', 0, '2020-11-24', 'Buenos Aires', 'yourname@govr.ar', '123456', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', NULL),
(23, 'Alberto Fernández', 'resfasdfasfadsfadsfadsfdasfdasfdddddddddddddddresfasdfasfadsfadsfadsfdasfdasfdddddddddddddddresfasdfasfadsfadsfadsfdasfdasfdddddddddddddddresfasdfasfadsfadsfadsfdasfdasfdddddddddddddddresfasdfasfadsfadsfadsfdasfdasfddddddddddddddd', 0, '2020-11-24', 'Buenos Aires', 'yourname@govr.ar', '123456', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.2 Safari/605.1.15', 'http://localhost:8888/novveint/drapeaux/DJ.png');

-- --------------------------------------------------------

--
-- Table structure for table `convo`
--

DROP TABLE IF EXISTS `convo`;
CREATE TABLE IF NOT EXISTS `convo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` tinytext NOT NULL,
  `time` datetime NOT NULL,
  `asendid` int(11) NOT NULL,
  `arecid` int(11) NOT NULL,
  `attid` int(11) NOT NULL DEFAULT '0',
  `typing` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `convo`
--

INSERT INTO `convo` (`id`, `msg`, `time`, `asendid`, `arecid`, `attid`, `typing`) VALUES
(1, 'fuck you bitch', '2020-04-09 07:40:19', 2, 1, 0, 0),
(2, 'Hello you are beautiful but you look like a fuckign bitch can you please go and eat some dirt', '2020-04-09 07:41:46', 2, 1, 0, 0),
(3, '', '2020-04-09 08:08:34', 2, 1, 0, 0),
(4, 'Hello Poopsie', '2020-04-09 08:49:13', 2, 1, 0, 0),
(5, 'hLLO LET S TALK WE ARE GOOOD THE SUN IS OUT', '2020-04-12 06:21:02', 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `convoatt`
--

DROP TABLE IF EXISTS `convoatt`;
CREATE TABLE IF NOT EXISTS `convoatt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) NOT NULL,
  `gauche` varchar(50) NOT NULL,
  `fond` varchar(50) NOT NULL,
  `footer` varchar(50) NOT NULL,
  `font` varchar(50) NOT NULL,
  `droite` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `ejercicios`
--

DROP TABLE IF EXISTS `ejercicios`;
CREATE TABLE IF NOT EXISTS `ejercicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descri` tinytext,
  `fuerza` varchar(20) DEFAULT NULL,
  `dura` varchar(10) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `at1` varchar(50) DEFAULT NULL,
  `at2` varchar(50) DEFAULT NULL,
  `at3` varchar(50) DEFAULT NULL,
  `at4` varchar(50) DEFAULT NULL,
  `at5` varchar(50) DEFAULT NULL,
  `at6` varchar(50) DEFAULT NULL,
  `at7` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ejercicios`
--

INSERT INTO `ejercicios` (`id`, `tipo`, `nombre`, `descri`, `fuerza`, `dura`, `imagen`, `at1`, `at2`, `at3`, `at4`, `at5`, `at6`, `at7`) VALUES
(1, 'Arm', 'Push-ups', 'Flattening your body on the floor with the two palms and two foot tips supporting the whole body weight, doing up and down movements', 'Medium', '2 s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Arm', 'Forearm Lifting', 'Fix the elbow close to the body, levering the forearm with a weight by alternating the open and closed positions', 'Medium', '5 s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Arm', 'Side Stretching', 'Both hands hold two sides of a spring, alternating from the position where both arm are stretched at maximum to the position where both arms are vertical to your body in front of your chest', 'Medium', '10 s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Arm', 'Arm Swinging', 'Swing the arm freely to relief the fatigue', 'Light', '0.5 s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  `dtf` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `p1`, `p2`, `dt`, `dtf`) VALUES
(1, 10, 10, '2020-12-02 01:43:21', '2020-12-02 01:44:29'),
(2, 10, 10, '2020-12-02 01:50:46', '2020-12-02 01:55:04'),
(3, 10, 10, '2020-12-02 02:05:09', '2020-12-02 02:05:12'),
(4, 10, 10, '2020-12-02 02:06:00', '2020-12-02 02:06:02'),
(5, 10, 10, '2020-12-02 03:05:16', '2020-12-02 03:05:17'),
(6, 10, 10, '2020-12-02 06:53:21', NULL),
(7, 10, 15, '2020-12-02 23:49:36', '2020-12-02 23:50:19'),
(8, 10, 15, '2020-12-02 23:50:20', '2020-12-04 04:35:43'),
(9, 10, 16, '2020-12-03 00:11:13', '2020-12-05 22:20:25'),
(10, 10, 11, '2020-12-03 00:11:40', '2020-12-04 04:26:58'),
(11, 10, 14, '2020-12-03 00:12:45', '2020-12-05 22:24:44'),
(12, 10, 12, '2020-12-03 00:13:23', '2020-12-03 00:15:04'),
(13, 10, 15, '2020-12-04 04:35:51', '2020-12-05 22:25:53'),
(14, 10, 12, '2020-12-05 18:38:58', '2020-12-05 22:26:52'),
(15, 10, 14, '2020-12-05 22:24:46', '2020-12-05 22:26:21'),
(16, 10, 14, '2020-12-05 22:26:22', NULL),
(17, 10, 12, '2020-12-05 22:26:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gpa`
--

DROP TABLE IF EXISTS `gpa`;
CREATE TABLE IF NOT EXISTS `gpa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gpid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

DROP TABLE IF EXISTS `gps`;
CREATE TABLE IF NOT EXISTS `gps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `builtat` datetime NOT NULL,
  `gptid` int(11) NOT NULL,
  `owneraid` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `lang` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gpt`
--

DROP TABLE IF EXISTS `gpt`;
CREATE TABLE IF NOT EXISTS `gpt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `size` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loginlogout`
--

DROP TABLE IF EXISTS `loginlogout`;
CREATE TABLE IF NOT EXISTS `loginlogout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL,
  `aid` int(11) NOT NULL,
  `info1` varchar(200) NOT NULL,
  `info2` varchar(200) NOT NULL,
  `info3` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `musique`
--

DROP TABLE IF EXISTS `musique`;
CREATE TABLE IF NOT EXISTS `musique` (
  `id` int(11) DEFAULT NULL,
  `url` varchar(500) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p1actif`
--

DROP TABLE IF EXISTS `p1actif`;
CREATE TABLE IF NOT EXISTS `p1actif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `chattype` int(11) NOT NULL,
  `u2gid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p1actif`
--

INSERT INTO `p1actif` (`id`, `uid`, `chattype`, `u2gid`) VALUES
(124, 10, 1, 2),
(125, 10, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `p1chatgp`
--

DROP TABLE IF EXISTS `p1chatgp`;
CREATE TABLE IF NOT EXISTS `p1chatgp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `dt` datetime DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `chatadminuid` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p1chatgp`
--

INSERT INTO `p1chatgp` (`id`, `nom`, `dt`, `cat`, `taille`, `chatadminuid`, `description`) VALUES
(2, 'Group Admin', '2020-12-01 01:54:29', 0, 0, 10, NULL),
(6, 'fuckyou', '2020-12-06 05:38:31', 1, 1, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `p1chatgphist`
--

DROP TABLE IF EXISTS `p1chatgphist`;
CREATE TABLE IF NOT EXISTS `p1chatgphist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senid` int(11) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `dt` datetime NOT NULL,
  `lu` int(11) DEFAULT '0',
  `ludt` datetime DEFAULT NULL,
  `gid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p1chatgphist`
--

INSERT INTO `p1chatgphist` (`id`, `senid`, `msg`, `dt`, `lu`, `ludt`, `gid`) VALUES
(25, 11, 'fukfuckcfadsfaf', '2020-12-17 00:00:00', 0, NULL, 2),
(26, 11, 'fukfuckcfadsfaf', '2020-12-17 00:00:00', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `p1chatgpusuario`
--

DROP TABLE IF EXISTS `p1chatgpusuario`;
CREATE TABLE IF NOT EXISTS `p1chatgpusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `uid` int(11) NOT NULL,
  `valid` int(11) NOT NULL DEFAULT '0',
  `dt` datetime DEFAULT NULL,
  `dtf` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p1chatgpusuario`
--

INSERT INTO `p1chatgpusuario` (`id`, `gid`, `uid`, `valid`, `dt`, `dtf`) VALUES
(3, 2, 10, 1, '2020-12-01 01:54:29', NULL),
(4, 2, 10, 0, '2020-12-04 12:29:38', '2020-12-04 12:31:10'),
(5, 6, 10, 1, '2020-12-06 05:38:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p1chathist`
--

DROP TABLE IF EXISTS `p1chathist`;
CREATE TABLE IF NOT EXISTS `p1chathist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senid` int(11) NOT NULL,
  `recid` int(11) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `dt` datetime NOT NULL,
  `lu` int(11) DEFAULT '0',
  `ludt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p1chathist`
--

INSERT INTO `p1chathist` (`id`, `senid`, `recid`, `msg`, `dt`, `lu`, `ludt`) VALUES
(1, 11, 10, 'hello mec', '2020-11-03 00:00:00', 0, NULL),
(78, 10, 10, 'hielo fuck', '2020-12-03 08:03:32', 0, NULL),
(79, 10, 10, 'hey bpofasdf', '2020-12-02 09:59:44', 0, NULL),
(80, 10, 10, 'hello babadaf', '2020-12-02 10:08:03', 0, NULL),
(81, 10, 11, 'hello mon ami', '2020-12-02 10:08:12', 0, NULL),
(82, 10, 10, 'hi shit', '2020-12-02 10:08:29', 0, NULL),
(83, 10, 11, 'hiiii babybagadf ', '2020-12-02 10:08:42', 0, NULL),
(84, 10, 10, 'hello shit\n', '2020-12-02 23:15:11', 0, NULL),
(85, 10, 10, 'bullshit fuck', '2020-12-02 23:17:26', 0, NULL),
(86, 10, 11, 'bullshit fuck', '2020-12-02 23:17:42', 0, NULL),
(87, 10, 11, 'fuckyou dda', '2020-12-02 23:34:38', 0, NULL),
(88, 10, 15, 'Hello Alejo', '2020-12-02 23:50:28', 0, NULL),
(89, 10, 10, 'hello kitt\n', '2020-12-04 04:00:40', 0, NULL),
(90, 10, 14, 'boda', '2020-12-04 04:00:54', 0, NULL),
(91, 10, 16, 'jflasdjflasd', '2020-12-05 19:51:10', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p1chatstyle`
--

DROP TABLE IF EXISTS `p1chatstyle`;
CREATE TABLE IF NOT EXISTS `p1chatstyle` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `chattype` int(11) NOT NULL,
  `gid` int(11) DEFAULT NULL,
  `uid2` int(11) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `bgcolor` varchar(20) DEFAULT NULL,
  `fontsize` int(11) DEFAULT NULL,
  `fonttype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p1chatusuario`
--

DROP TABLE IF EXISTS `p1chatusuario`;
CREATE TABLE IF NOT EXISTS `p1chatusuario` (
  `id` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p1login`
--

DROP TABLE IF EXISTS `p1login`;
CREATE TABLE IF NOT EXISTS `p1login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  `dtf` datetime DEFAULT NULL,
  `visitor` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p1login`
--

INSERT INTO `p1login` (`id`, `uid`, `dt`, `dtf`, `visitor`) VALUES
(2, 10, '2020-12-03 09:19:12', '2020-12-03 14:20:01', '::1'),
(3, 10, '2020-12-03 10:19:12', '2020-12-03 15:36:53', '::1'),
(4, 10, '2020-12-03 10:37:12', '2020-12-03 16:14:32', '::1'),
(5, 10, '2020-12-03 11:14:12', NULL, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `p1pwch`
--

DROP TABLE IF EXISTS `p1pwch`;
CREATE TABLE IF NOT EXISTS `p1pwch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timed` datetime NOT NULL,
  `idusuario` int(11) NOT NULL,
  `clef` varchar(100) NOT NULL,
  `visitor` varchar(200) NOT NULL,
  `mdpde` varchar(200) NOT NULL,
  `mdpa` varchar(200) DEFAULT NULL,
  `timec` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `p1pwch`
--

INSERT INTO `p1pwch` (`id`, `timed`, `idusuario`, `clef`, `visitor`, `mdpde`, `mdpa`, `timec`) VALUES
(1, '2020-11-30 16:25:45', 8, '1606753545fernando', '::1', '$argon2i$v=19$m=1024,t=2,p=2$dFc5aU9FMmlPUDM4ZUxtVQ$dL1VhT7NHDLt6DqnvV0r6kvjXAaEeZv5biUrwx3oBNc', '$argon2i$v=19$m=1024,t=2,p=2$UjEyanZOcWNyZmEwbjVnSg$PJlPfra5m0jrQw4uVX6ZGcxWnUc4NbMFVbsklSOsumk', '2020-11-30 06:12:54'),
(2, '2020-11-30 16:35:57', 8, '1606754157fernando', '::1', '$argon2i$v=19$m=1024,t=2,p=2$dFc5aU9FMmlPUDM4ZUxtVQ$dL1VhT7NHDLt6DqnvV0r6kvjXAaEeZv5biUrwx3oBNc', NULL, NULL),
(3, '2020-11-30 18:13:23', 8, '1606760003fernando', '::1', '$argon2i$v=19$m=1024,t=2,p=2$UjEyanZOcWNyZmEwbjVnSg$PJlPfra5m0jrQw4uVX6ZGcxWnUc4NbMFVbsklSOsumk', NULL, NULL),
(4, '2020-11-30 18:14:32', 8, '1606760072fernando', '::1', '$argon2i$v=19$m=1024,t=2,p=2$UjEyanZOcWNyZmEwbjVnSg$PJlPfra5m0jrQw4uVX6ZGcxWnUc4NbMFVbsklSOsumk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `p1rendezvous`
--

DROP TABLE IF EXISTS `p1rendezvous`;
CREATE TABLE IF NOT EXISTS `p1rendezvous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) DEFAULT NULL,
  `debuthm` varchar(10) NOT NULL,
  `finhm` varchar(10) NOT NULL,
  `dia` date NOT NULL,
  `msg` text,
  `visitor` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `statut` int(1) NOT NULL DEFAULT '0',
  `cell` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p1rendezvous`
--

INSERT INTO `p1rendezvous` (`id`, `titre`, `debuthm`, `finhm`, `dia`, `msg`, `visitor`, `email`, `nom`, `statut`, `cell`) VALUES
(1, NULL, '13:00', '14:00', '2020-11-27', NULL, 'visitor', 'abc@alberta.ca', NULL, 0, NULL),
(2, NULL, '13:00', '14:00', '2020-11-27', NULL, 'visitor', 'abc@alberta.ca', NULL, 0, NULL),
(3, NULL, '13:00', '14:00', '2020-11-27', NULL, 'visitor', 'abc@alberta.ca', NULL, 0, NULL),
(4, NULL, '13:00', '14:00', '2020-11-27', NULL, 'visitor', 'abc@alberta.ca', NULL, 0, NULL),
(5, NULL, '13:00', '14:00', '2020-11-27', NULL, 'visitor', 'abc@alberta.ca', NULL, 0, NULL),
(23, '', '01:00', '02:00', '2020-11-30', 'fdfsda', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(22, '', '12:00', '13:00', '2020-11-30', 'fsdf', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(21, '', '23:00', '23:01', '2020-11-27', 'aaa', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(20, '', '23:00', '23:01', '2020-11-30', 'aaa', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(19, 'afeado', '12:00', '12:30', '2020-12-01', 'atado', '::1', 'adfaffa@ua.com', 'fadfa', 0, ''),
(18, 'xx', '23:58', '23:59', '2020-11-30', 'x', '::1', 'Alejo@govr.ar', 'anonymous', 0, 'xx'),
(17, '', '23:01', '23:04', '2020-11-27', 'Another test Oka poo', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(16, '', '23:58', '23:59', '2020-11-27', 'k,nh', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(24, '', '23:58', '23:59', '2020-11-29', 'sdasd', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(25, '', '23:58', '23:59', '2020-12-02', 'ss', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(26, '', '23:58', '23:59', '2021-11-12', 'sdasd', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(27, '', '23:58', '23:59', '2021-11-06', 'sed', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(28, '', '23:58', '23:59', '2021-11-27', 'sdfsdf', '::1', 'Alejo@govr.ar', 'anonymous', 0, ''),
(29, '', '23:58', '23:59', '2020-12-03', 'Fernando', '::1', 'Alejo@govr.ar', 'anonymous', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `p1typing`
--

DROP TABLE IF EXISTS `p1typing`;
CREATE TABLE IF NOT EXISTS `p1typing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `chattype` int(11) NOT NULL,
  `u2gid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `p1usuarios`
--

DROP TABLE IF EXISTS `p1usuarios`;
CREATE TABLE IF NOT EXISTS `p1usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mdp` varchar(500) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `nais` date DEFAULT NULL,
  `courriel` varchar(50) DEFAULT NULL,
  `nationalite` varchar(50) DEFAULT NULL,
  `cel` varchar(20) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `poidsesp` int(11) DEFAULT NULL,
  `prof` varchar(20) DEFAULT NULL,
  `niveau` varchar(20) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `typecorps` varchar(20) DEFAULT NULL,
  `freq` varchar(20) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `Insta` varchar(200) DEFAULT NULL,
  `tw` varchar(200) DEFAULT NULL,
  `autres` varchar(200) DEFAULT NULL,
  `tailleu` varchar(10) DEFAULT NULL,
  `poidsu` varchar(10) DEFAULT NULL,
  `poidseu` varchar(10) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `userid` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p1usuarios`
--

INSERT INTO `p1usuarios` (`id`, `mdp`, `nom`, `sexe`, `nais`, `courriel`, `nationalite`, `cel`, `poids`, `poidsesp`, `prof`, `niveau`, `taille`, `typecorps`, `freq`, `facebook`, `Insta`, `tw`, `autres`, `tailleu`, `poidsu`, `poidseu`, `photo`, `userid`) VALUES
(11, '$argon2i$v=19$m=1024,t=2,p=2$c1ZuYURzOWJNSy9NOXAyZw$faPdN7N3MOT6k8ISVrnEMNFQ27Pw4Eo+k2WdItoVLgU', 'cristiano', 'M', '2020-11-11', 'admin@fernandodupaysdelicorne.com', '', '', 10, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '22-11-30 10:00:46tabarnakcristiano'),
(10, '$argon2i$v=19$m=1024,t=2,p=2$RWxrYVhOdEdQQTVZdU5rQw$oCjEdnrRqBPq5pm9rxSsBfD9TnTga+d62z+xgPNJQ1I', 'Fernando3800x', 'M', '3000-09-10', 'huachao@ualberta.ca', 'Japanese', '12345567', 33, NULL, 'Doctor', NULL, 44, NULL, NULL, '', '', '', '', 'cm', 'kg', NULL, 'drapeaux/5fcbe47fef028.png', '18-11-30 06:46:26tabarnakFernando'),
(12, '$argon2i$v=19$m=1024,t=2,p=2$Rmw3d0l5dk1aczMwMW9OSA$6FozvQFWLLcbeJupL7yzXdJfZaFUR7cjAJWzx19zBps', 'LeiBei', 'M', '2020-11-11', '787651710@qq.com', '', '', 44, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '03-12-02 03:30:02tabarnakLeiBei'),
(13, '$argon2i$v=19$m=1024,t=2,p=2$c2ZwL3FGdTZDTDlYbGJaSA$ZBWi25y93W9kaFez5XwVrnDSNssufEMMkBMEXGYEqRc', 'JesusGozalez', 'M', '2020-11-11', 'fernando@fernandodupaysdelicorne.com', '', '', 33, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '03-12-02 03:33:54tabarnakJesusGozalez'),
(14, '$argon2i$v=19$m=1024,t=2,p=2$WHhybGlIN1Y0YzdNNUxJZg$1DLYK9TKERGC3m4vgZ3oK/yyF3qEScuuc8R+QMe6iLI', 'JohnSmith', 'M', '2020-11-11', 'fernan1@fernandodupaysdelicorne.com', '', '', 33, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '03-12-02 03:34:50tabarnakJohnSmith'),
(15, '$argon2i$v=19$m=1024,t=2,p=2$a3U4NzJQSGE3SS5JQmIxcw$Uk25JvtXNbg5V4yS4836YL0c2uVOsr+c+wkehRm4Br4', 'AlejandroLee', 'M', '2020-11-11', 'alejo@fernandodupaysdelicorne.com', '', '', 33, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '03-12-02 03:35:12tabarnakAlejandroLee'),
(16, '$argon2i$v=19$m=1024,t=2,p=2$YmNrQndvME1XcDloN1UwOQ$FIf6M7nZ8Mjl2NCTy5irAAUDNWErzaNTreCmcRXgLMc', 'Yohann', 'M', '2020-11-11', 'yohann@fernandodupaysdelicorne.com', '', '', 33, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '03-12-02 03:35:43tabarnakYohann'),
(17, '$argon2i$v=19$m=1024,t=2,p=2$TlR1NzN1eXZuR2VaSTAzUA$8WrfRpGngfKYDPo2ktwxPgCcl4XAwsKgfXBigvydnJ8', 'SaraUzbeki', 'M', '2020-11-11', '137677529@qq.com', '', '', 33, NULL, '', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '03-12-02 03:36:14tabarnakSaraUzbeki');

-- --------------------------------------------------------

--
-- Table structure for table `periodicos`
--

DROP TABLE IF EXISTS `periodicos`;
CREATE TABLE IF NOT EXISTS `periodicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perid` int(11) NOT NULL,
  `ejid` int(11) NOT NULL,
  `freq` int(11) NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `otro` varchar(200) DEFAULT NULL,
  `dim` int(1) DEFAULT NULL,
  `lun` int(1) DEFAULT NULL,
  `mar` int(1) DEFAULT NULL,
  `mer` int(1) DEFAULT NULL,
  `jeu` int(1) DEFAULT NULL,
  `ven` int(1) DEFAULT NULL,
  `sam` int(1) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `periodicos`
--

INSERT INTO `periodicos` (`id`, `perid`, `ejid`, `freq`, `inicio`, `fin`, `cantidad`, `otro`, `dim`, `lun`, `mar`, `mer`, `jeu`, `ven`, `sam`, `hora`) VALUES
(1, 6, 1, 1, '2020-09-09', '2020-09-10', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 6, 2, 3, '2020-08-09', '2020-08-09', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03:09:09'),
(3, 6, 3, 3, '2020-08-09', '2020-08-09', 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03:09:09'),
(4, 6, 1, 3, '2020-04-03', '2020-09-20', 222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03:05:09'),
(5, 6, 2, 3, '2020-04-03', '2020-09-20', 898, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03:05:09'),
(6, 6, 1, 2, '2020-04-08', '2020-04-30', 222, NULL, 0, 0, 0, 1, 0, 0, 1, '03:05:09'),
(7, 6, 4, 2, '2020-09-01', '2020-09-30', 99, NULL, 0, 0, 1, 0, 0, 0, 1, '18:09:09'),
(8, 6, 2, 1, '2020-09-09', '2020-09-10', 109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12:09:09'),
(9, 6, 1, 1, '2020-07-09', '2020-08-09', 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `planificados`
--

DROP TABLE IF EXISTS `planificados`;
CREATE TABLE IF NOT EXISTS `planificados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodicoid` int(11) DEFAULT NULL,
  `perid` int(11) NOT NULL,
  `ejid` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `dia` date NOT NULL,
  `fuerza` varchar(20) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `comentario` tinytext,
  `otro1` varchar(200) DEFAULT NULL,
  `otro2` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `planificados`
--

INSERT INTO `planificados` (`id`, `periodicoid`, `perid`, `ejid`, `cant`, `dia`, `fuerza`, `hora`, `estado`, `comentario`, `otro1`, `otro2`) VALUES
(1, 1, 1, 1, 20, '2020-04-01', 'Medium', '26:12:06', 0, NULL, NULL, NULL),
(2, NULL, 6, 1, 100, '2020-04-09', 'Light', '21:09:09', 0, NULL, NULL, NULL),
(3, NULL, 6, 2, 23, '2020-04-09', 'Light', '21:09:09', 0, NULL, NULL, NULL),
(4, NULL, 6, 3, 44, '2020-04-09', 'Light', '21:09:09', 0, NULL, NULL, NULL),
(5, NULL, 6, 4, 333, '2020-04-09', 'Light', '21:09:09', 0, NULL, NULL, NULL),
(6, NULL, 6, 1, 222, '2020-04-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(7, NULL, 6, 1, 222, '2020-05-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(8, NULL, 6, 1, 222, '2020-06-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(9, NULL, 6, 1, 222, '2020-07-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(10, NULL, 6, 1, 222, '2020-08-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(11, NULL, 6, 1, 222, '2020-09-05', 'Light', '03:05:09', 1, NULL, NULL, NULL),
(12, NULL, 6, 2, 898, '2020-04-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(13, NULL, 6, 2, 898, '2020-05-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(14, NULL, 6, 2, 898, '2020-06-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(16, NULL, 6, 2, 898, '2020-08-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(17, NULL, 6, 2, 898, '2020-09-05', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(18, 6, 6, 1, 222, '2020-04-10', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(19, 6, 6, 1, 222, '2020-04-11', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(20, 6, 6, 1, 222, '2020-04-12', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(21, 6, 6, 1, 222, '2020-04-17', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(22, 6, 6, 1, 222, '2020-04-18', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(23, 6, 6, 1, 222, '2020-04-19', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(24, 6, 6, 1, 222, '2020-04-24', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(25, 6, 6, 1, 222, '2020-04-25', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(26, 6, 6, 1, 222, '2020-04-26', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(27, 6, 6, 2, 898, '2020-04-10', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(28, 6, 6, 2, 898, '2020-04-11', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(29, 6, 6, 2, 898, '2020-04-12', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(30, 6, 6, 2, 898, '2020-04-17', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(31, 6, 6, 2, 898, '2020-04-18', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(32, 6, 6, 2, 898, '2020-04-19', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(33, 6, 6, 2, 898, '2020-04-24', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(34, 6, 6, 2, 898, '2020-04-25', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(35, 6, 6, 2, 898, '2020-04-26', 'Light', '03:05:09', 0, NULL, NULL, NULL),
(36, 7, 6, 4, 99, '2020-09-03', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(37, 7, 6, 4, 99, '2020-09-05', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(38, 7, 6, 4, 99, '2020-09-06', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(39, 7, 6, 4, 99, '2020-09-10', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(40, 7, 6, 4, 99, '2020-09-12', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(41, 7, 6, 4, 99, '2020-09-13', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(42, 7, 6, 4, 99, '2020-09-17', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(43, 7, 6, 4, 99, '2020-09-19', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(44, 7, 6, 4, 99, '2020-09-20', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(45, 7, 6, 4, 99, '2020-09-24', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(46, 7, 6, 4, 99, '2020-09-26', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(47, 7, 6, 4, 999, '2020-09-29', 'Light', '18:09:09', 0, NULL, NULL, NULL),
(48, NULL, 6, 1, 909, '2020-09-09', 'Light', '19:11:10', 0, NULL, NULL, NULL),
(49, 8, 6, 2, 109, '2020-09-10', 'Light', '12:09:09', 0, NULL, NULL, NULL),
(50, NULL, 6, 1, 289, '2009-09-09', 'Light', '12:09:08', 0, NULL, NULL, NULL),
(51, 9, 6, 1, 22, '2020-07-10', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(52, 9, 6, 1, 22, '2020-07-11', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(53, 9, 6, 1, 22, '2020-07-12', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(54, 9, 6, 1, 22, '2020-07-13', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(55, 9, 6, 1, 22, '2020-07-14', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(56, 9, 6, 1, 22, '2020-07-15', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(57, 9, 6, 1, 22, '2020-07-16', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(58, 9, 6, 1, 22, '2020-07-17', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(59, 9, 6, 1, 22, '2020-07-18', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(60, 9, 6, 1, 22, '2020-07-19', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(61, 9, 6, 1, 22, '2020-07-20', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(62, 9, 6, 1, 22, '2020-07-21', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(63, 9, 6, 1, 22, '2020-07-22', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(64, 9, 6, 1, 22, '2020-07-23', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(65, 9, 6, 1, 22, '2020-07-24', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(66, 9, 6, 1, 22, '2020-07-25', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(67, 9, 6, 1, 22, '2020-07-26', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(68, 9, 6, 1, 22, '2020-07-27', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(69, 9, 6, 1, 22, '2020-07-28', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(70, 9, 6, 1, 22, '2020-07-29', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(71, 9, 6, 1, 22, '2020-07-30', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(72, 9, 6, 1, 22, '2020-07-31', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(73, 9, 6, 1, 22, '2020-08-01', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(74, 9, 6, 1, 22, '2020-08-02', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(75, 9, 6, 1, 22, '2020-08-03', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(76, 9, 6, 1, 22, '2020-08-04', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(77, 9, 6, 1, 22, '2020-08-05', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(78, 9, 6, 1, 22, '2020-08-06', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(79, 9, 6, 1, 22, '2020-08-07', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(80, 9, 6, 1, 22, '2020-08-08', 'Light', '23:05:09', 0, NULL, NULL, NULL),
(81, 9, 6, 1, 22, '2020-08-09', 'Light', '23:05:09', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sacsusuarios`
--

DROP TABLE IF EXISTS `sacsusuarios`;
CREATE TABLE IF NOT EXISTS `sacsusuarios` (
  `id` int(11) NOT NULL,
  `mdp` varchar(500) NOT NULL,
  `courriel` varchar(50) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sacsusuarios`
--

INSERT INTO `sacsusuarios` (`id`, `mdp`, `courriel`, `lastlogin`, `userid`) VALUES
(1, '96e79218965eb72c92a549dd5a330112', 'huachao@ualberta.ca', '2021-05-02 09:17:39', 'fernandoli');

-- --------------------------------------------------------

--
-- Table structure for table `testuserphotos`
--

DROP TABLE IF EXISTS `testuserphotos`;
CREATE TABLE IF NOT EXISTS `testuserphotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_image` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

DROP TABLE IF EXISTS `timeline`;
CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `cate` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `dat` date NOT NULL,
  `dur` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `cate`, `des`, `dat`, `dur`) VALUES
(5, 'Étude', 'Apprendre laravel', '2019-08-01', NULL),
(6, 'Travail', 'Me familiariser du nouveau travail', '2019-09-01', NULL),
(7, 'Travail', 'Commencer le stage', '2019-07-25', NULL),
(8, '1', '1', '2019-07-01', '2019-07-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `age`, `location`, `date`) VALUES
(1, 'flafjd', 'sfasdf', '', NULL, NULL, '2019-03-15 00:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mdp` varchar(500) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `nais` date DEFAULT NULL,
  `courriel` varchar(50) DEFAULT NULL,
  `nationalite` varchar(50) DEFAULT NULL,
  `cel` varchar(20) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `poidsesp` int(11) DEFAULT NULL,
  `prof` varchar(20) DEFAULT NULL,
  `niveau` varchar(20) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `typecorps` varchar(20) DEFAULT NULL,
  `freq` varchar(20) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `Insta` varchar(200) DEFAULT NULL,
  `tw` varchar(200) DEFAULT NULL,
  `autres` varchar(200) DEFAULT NULL,
  `tailleu` varchar(10) DEFAULT NULL,
  `poidsu` varchar(10) DEFAULT NULL,
  `poidseu` varchar(10) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vie`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vie`;
CREATE TABLE IF NOT EXISTS `vie` (
`id` int(4)
,`year(dat)` int(4)
,`month(dat)` int(2)
,`day(dat)` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `vinculos`
--

DROP TABLE IF EXISTS `vinculos`;
CREATE TABLE IF NOT EXISTS `vinculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `otheraid` int(11) NOT NULL,
  `cateid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure for view `vie`
--
DROP TABLE IF EXISTS `vie`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vie`  AS  select `timeline`.`id` AS `id`,year(`timeline`.`dat`) AS `year(dat)`,month(`timeline`.`dat`) AS `month(dat)`,dayofmonth(`timeline`.`dat`) AS `day(dat)` from `timeline` ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
