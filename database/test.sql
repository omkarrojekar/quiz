-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 10:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `ansers`
--

CREATE TABLE `ansers` (
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  `question6` text NOT NULL,
  `question7` text NOT NULL,
  `question8` text NOT NULL,
  `question9` text NOT NULL,
  `question10` text NOT NULL,
  `question11` text NOT NULL,
  `question12` text NOT NULL,
  `question13` text NOT NULL,
  `question14` text NOT NULL,
  `question15` text NOT NULL,
  `question16` text NOT NULL,
  `question17` text NOT NULL,
  `question18` text NOT NULL,
  `question19` text NOT NULL,
  `question20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ansers`
--

INSERT INTO `ansers` (`question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `question18`, `question19`, `question20`) VALUES
('Carcinogen', 'Lung Cancer', 'False', 'Zoladex', 'False', 'False', 'Uncontrolled Cell Growth', 'Leukemia', 'Radiation', 'BRCA1', 'PSA', 'False', 'Rivers', 'False', 'False', 'False', 'False', 'Immunotherapy', 'Watching Movies', 'Crab');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `age`) VALUES
('01', 'omkar', 25),
('02', 'dsfdg', 45),
('02', 'dsfdg', 45),
('05', 'asdfgfg', 50),
('06', 'asdfgfg', 50),
('10', 'dasdsds', 45),
('66', 'sds', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `email`, `question1`, `question2`, `question3`, `question4`, `question5`, `status`) VALUES
('1655', 'Akshay', 'Renal', 'B', 'Oncogene', 'Aflatoxin', 'Lung cancer', 1),
('1754', 'werfewr', 'Renal', 'D', 'Carcinogen', 'Oncogene', 'Stomach cancer', 1),
('2547', 'ggg', 'Renal', 'D', 'Carcinogen', 'Oncogene', 'Lung cancer', 1),
('5162', 'Akshayf', 'Renal', 'B', 'Oncogene', 'Aflatoxin', 'Lung cancer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_answers2`
--

CREATE TABLE `user_answers2` (
  `id` varchar(20) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question1` text NOT NULL,
  `question2` text NOT NULL,
  `question3` text NOT NULL,
  `question4` text NOT NULL,
  `question5` text NOT NULL,
  `question6` text NOT NULL,
  `question7` text NOT NULL,
  `question8` text NOT NULL,
  `question9` text NOT NULL,
  `question10` text NOT NULL,
  `question11` text NOT NULL,
  `question12` text NOT NULL,
  `question13` text NOT NULL,
  `question14` text NOT NULL,
  `question15` text NOT NULL,
  `question16` text NOT NULL,
  `question17` text NOT NULL,
  `question18` text NOT NULL,
  `question19` text NOT NULL,
  `question20` text NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `intime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  `outtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `quizstartime` int(11) NOT NULL,
  `quizendtime` int(11) NOT NULL,
  `timetaken` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answers2`
--

INSERT INTO `user_answers2` (`id`, `firstName`, `lastName`, `email`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `question18`, `question19`, `question20`, `counter`, `intime`, `status`, `outtime`, `quizstartime`, `quizendtime`, `timetaken`, `marks`) VALUES
('1322', 'Omkar', 'ff', 'dddom@gmail.com', 'Renal', 'A', 'Oncogene', 'Asbestos', 'Stomach cancer', 'Hormones in beef', 'Prostate cancer', 'False', 'Alcohol', 'liver', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-01 15:10:43', '1', '0000-00-00 00:00:00', 33594, 38443, 4849, 3),
('1534', 'omkar', 'dgsg', 'odddm@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-01 18:29:32', '1', '0000-00-00 00:00:00', 49513, 50372, 859, 0),
('1635', 'Sarfaraj', 'Gaitonde', 'sarfarag@dbail.com', 'Renal', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', '', '', '', '', '', '', '', '', '', '', 9, '2019-02-02 15:04:00', '1', '0000-00-00 00:00:00', 22863, 22882, 19, 1),
('1659', 'omkar', 'dgsg', 'ddddddom@gmail.com', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', 50251, 0, 0, 0),
('1722', 'prabhakar', 'shashtri', 'prabha@gmail.com', 'Renal', 'B', 'Oncogene', 'Not Attempted', 'Lung cancer', 'Obesity', 'Lung cancer', 'False', 'Alcohol', 'bone', '', '', '', '', '', '', '', '', '', '', 6, '2019-02-02 15:04:09', '1', '0000-00-00 00:00:00', 25261, 25606, 345, 7),
('2249', 'shafaraz', 'khan', 'asd@gmail.com', 'Carcinogen', 'Colorectal Cancer', 'False', 'Zoladex', 'Lung cancer', 'False', 'Caused by Infected Water', 'Leukemia', 'Radiation', 'BRCA1', 'PSA', 'False', 'Sea', 'False', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-02 20:20:03', '1', '0000-00-00 00:00:00', 54892, 57003, 2111, 10),
('2528', 'omkar', 'Rojekar', 'om@gmail.comvv', 'Renal', 'B', 'Mutagen', 'Asbestos', 'Stomach cancer', 'Obesity', 'Prostate cancer', 'True', 'Alcohol', 'lung', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-01 12:45:33', '1', '0000-00-00 00:00:00', 29680, 29733, 53, 4),
('2535', 'majid', 'khan', 'alfaz@gmail.com', 'Renal', 'B', 'Oncogene', 'Aflatoxin', 'Lung cancer', 'Obesity', 'Lung cancer', 'False', 'Alcohol', 'bone', '', '', '', '', '', '', '', '', '', '', 7, '2019-02-02 15:04:04', '1', '0000-00-00 00:00:00', 26342, 26466, 124, 8),
('2882', 'pankaj', 'udas', 'oeeeem@gmail.com', 'Renal', 'A', 'Mutagen', 'Aflatoxin', 'Lung cancer', 'Artificial sweeteners', 'Prostate cancer', 'False', 'Alcohol', 'lung', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-01 13:01:31', '1', '0000-00-00 00:00:00', 30186, 30691, 505, 5),
('2894', 'Rahul ', 'fdsf', 'gdetye@gmail.com', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', 50239, 0, 0, 0),
('3248', 'Omkar', 'Rojekar', 'swdeqaswer@gmail.com', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', 50100, 0, 0, 0),
('3339', 'omkar', 'dgsg', 'om@gmail.com', 'Not Attempted', 'D', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-02 10:54:49', '1', '0000-00-00 00:00:00', 23074, 23089, 15, 0),
('3350', 'rwqrewr', 'ewrewrew', 'rewrewrrrre@fmail.vgb', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Imfinzi', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Immunotherapy', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 15:44:06', '1', '0000-00-00 00:00:00', 40287, 40446, 159, 1),
('3476', 'Rahul ', 'Rojekar', 'omkar.rojekar@gmail.comdd', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 10, '2019-02-02 15:05:19', '1', '0000-00-00 00:00:00', 38080, 38119, 39, 0),
('3847', 'omkar', 'Thakkur', 'omdddi@gmail.com', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', 38211, 0, 0, 0),
('3854', 'Tantya', 'Tope', 'tantya@tope.up', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Soy', 'Not Attempted', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 10, '2019-02-02 15:28:15', '1', '0000-00-00 00:00:00', 39179, 39495, 316, 0),
('4014', 'Omkar', 'Rojekar', 'offfffm@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 15:40:14', '1', '0000-00-00 00:00:00', 40194, 40214, 20, 0),
('4065', 'Omkar', 'dgsg', 'omkar.rojekar@gmail.comsss', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 10, '2019-02-02 14:58:32', '1', '0000-00-00 00:00:00', 37660, 37712, 52, 0),
('4144', 'sajany', 'mishra', 'dsf@gmail.cda', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Hormones in beef', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-02 14:00:40', '1', '0000-00-00 00:00:00', 25963, 34240, 8277, 0),
('4786', 'Omkar', 'Rojekar', 'omkar.rojekar@gmail.com', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', 33570, 0, 0, 0),
('5234', 'omkar', 'dgsg', 'qwaerweqweqweqwe@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-02 19:39:29', '1', '0000-00-00 00:00:00', 50293, 54569, 4276, 0),
('5486', 'Omkar', 'fdsf', 'sadxdxxaf@gmail.com', 'Not Attempted', 'Not Attempted', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 2, '2019-02-02 18:25:23', '1', '0000-00-00 00:00:00', 50121, 0, 0, 0),
('5620', 'qewr', 'ewrewrew', 'ewrew@fmail.cjm', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 16:39:44', '1', '0000-00-00 00:00:00', 43753, 0, 0, 0),
('5710', 'tanmay', 'datta', 'dsfdks@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Treated With Antibiotics', 'Prostate Cancer', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 15:35:03', '1', '0000-00-00 00:00:00', 39879, 39903, 24, 0),
('6317', 'Rahul ', 'dgsg', 'gretre@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Treated With Antibiotics', 'Prostate Cancer', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 15:58:17', '1', '0000-00-00 00:00:00', 41275, 0, 0, 0),
('6510', 'omkar', 'dgsg', 'omrfrfrrr@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Treated With Antibiotics', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Sea', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Immunotherapy', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 15:44:32', '1', '0000-00-00 00:00:00', 40457, 40472, 15, 1),
('6570', 'Omkar', 'dgsg', 'om@gmail.comsdewfwrg', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Imfinzi', 'Not Attempted', 'Not Attempted', 'Treated With Antibiotics', 'Prostate Cancer', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Immunotherapy', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 16:10:53', '1', '0000-00-00 00:00:00', 42035, 0, 0, 0),
('6676', 'sadaf', 'gargi', 'sadsa@dmail.com', 'Renal', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'brain', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 10, '2019-02-02 16:08:12', '1', '0000-00-00 00:00:00', 40120, 41892, 1772, 1),
('6781', 'Omkar', 'dgsg', 'iiom@gmail.com', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, '0000-00-00 00:00:00', '1', '0000-00-00 00:00:00', 50141, 0, 0, 0),
('7013', 'Omkar', 'Rojekar', 'om@gmail.comd', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-02 10:45:07', '1', '0000-00-00 00:00:00', 22485, 22507, 22, 0),
('7650', 'Rahul ', 'dgsg', 'omddd@gmail.com', 'Not Attempted', 'B', 'Carcinogen', 'Aflatoxin', 'Stomach cancer', 'Artificial sweeteners', 'Lung cancer', 'False', 'Alcohol', 'liver', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 10, '2019-02-02 14:40:39', '1', '0000-00-00 00:00:00', 34257, 36639, 2382, 5),
('7740', 'Omkar', 'fdsf', 'om@gmail.comuuu', 'Not Attempted', 'Not Attempted', 'Mutagen', 'Aniline dyes', 'Lung cancer', 'Hormones in beef', 'Esophageal cancer', 'True', 'Stress', 'bone', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 10, '2019-02-02 15:22:35', '1', '0000-00-00 00:00:00', 38242, 39155, 913, 3),
('7795', 'Omkar', 'dgsg', 'ddddomkar.rojekar@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Immunotherapy', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 18:09:34', '1', '0000-00-00 00:00:00', 49157, 0, 0, 0),
('7862', 'omkar', 'dgsg', 'rrcg.cloud@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', '', '', '', '', '', '', '', '', '', '', 10, '2019-02-02 10:55:43', '1', '0000-00-00 00:00:00', 23122, 23143, 21, 0),
('8974', 'rammanjo', 'sdasdsa', 'q@gmail.cmn', 'Oncogene', 'Lung Cancer', 'False', 'Zoladex', 'False', 'False', 'Uncontrolled Cell Growth', 'Leukemia', 'Radiation', 'BRCA1', 'PSA', 'False', 'Rivers', 'False', 'False', 'False', 'False', 'Immunotherapy', 'Watching Movies', 'Crab', 20, '2019-02-02 20:23:08', '1', '0000-00-00 00:00:00', 57106, 57188, 82, 19),
('9114', 'Omkar', 'dgsg', 'dasdasdasdsadsaom@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-02 19:43:49', '1', '0000-00-00 00:00:00', 54639, 54829, 190, 0),
('9132', 'ef', 'ef', 'qwerwqwqarom@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Transmitted Through The Air', 'Prostate Cancer', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 15:45:55', '1', '0000-00-00 00:00:00', 40538, 0, 0, 0),
('9596', 'asd', 'Rojekar', 'sasdasdsa@gmail.com', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Treated With Antibiotics', 'Prostate Cancer', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 'Not Attempted', 20, '2019-02-04 15:36:12', '1', '0000-00-00 00:00:00', 39952, 39972, 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `session` varchar(20) NOT NULL,
  `counter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_session`
--

INSERT INTO `user_session` (`session`, `counter`) VALUES
('8105', '0'),
('4718', '0'),
('7327', '0'),
('3611', '0'),
('6934', '0'),
('7679', '0'),
('3257', '0'),
('1867', '0'),
('1404', '0'),
('6340', '0'),
('6919', '0'),
('7909', '0'),
('2709', '0'),
('1343', '0'),
('4738', '0'),
('3229', '0'),
('3589', '0'),
('8873', '0'),
('3203', '0'),
('9965', ''),
('6026', ''),
('2467', ''),
('8967', ''),
('2573', ''),
('8056', ''),
('7852', ''),
('5905', ''),
('6618', ''),
('7033', ''),
('3796', ''),
('9793', ''),
('3370', ''),
('2706', ''),
('8090', ''),
('3914', ''),
('8430', ''),
('7630', ''),
('6351', ''),
('1489', ''),
('3812', ''),
('1957', ''),
('1156', ''),
('9318', ''),
('3512', ''),
('9377', ''),
('8575', ''),
('4023', ''),
('1196', ''),
('1514', ''),
('6471', ''),
('5233', ''),
('6092', ''),
('6784', ''),
('9571', ''),
('6285', ''),
('6337', ''),
('6944', ''),
('9178', ''),
('4201', ''),
('4562', ''),
('7595', ''),
('9387', ''),
('5525', ''),
('8816', ''),
('4438', ''),
('4533', ''),
('3522', ''),
('3565', ''),
('9182', ''),
('3743', ''),
('6287', ''),
('1772', ''),
('4910', ''),
('5333', ''),
('2060', ''),
('5061', ''),
('4778', ''),
('2627', ''),
('1329', ''),
('7235', ''),
('7910', ''),
('6689', ''),
('2083', ''),
('5836', ''),
('4446', ''),
('8687', ''),
('1711', ''),
('1616', ''),
('5981', ''),
('5937', ''),
('1351', ''),
('5930', ''),
('6160', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_answers2`
--
ALTER TABLE `user_answers2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
