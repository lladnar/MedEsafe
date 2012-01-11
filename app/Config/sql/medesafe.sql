-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2012 at 04:30 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medesafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 56),
(2, 1, NULL, NULL, 'Groups', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Patients', 14, 25),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'view', 17, 18),
(11, 8, NULL, NULL, 'add', 19, 20),
(12, 8, NULL, NULL, 'edit', 21, 22),
(13, 8, NULL, NULL, 'delete', 23, 24),
(14, 1, NULL, NULL, 'Posts', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'view', 29, 30),
(17, 14, NULL, NULL, 'add', 31, 32),
(18, 14, NULL, NULL, 'edit', 33, 34),
(19, 14, NULL, NULL, 'delete', 35, 36),
(20, 1, NULL, NULL, 'Users', 38, 53),
(21, 20, NULL, NULL, 'index', 39, 40),
(22, 20, NULL, NULL, 'view', 41, 42),
(23, 20, NULL, NULL, 'add', 43, 44),
(24, 20, NULL, NULL, 'edit', 45, 46),
(25, 20, NULL, NULL, 'delete', 47, 48),
(26, 20, NULL, NULL, 'login', 49, 50),
(27, 20, NULL, NULL, 'logout', 51, 52),
(28, 1, NULL, NULL, 'AclExtras', 54, 55);

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE IF NOT EXISTS `activity_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `encounter_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `activity` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aer_searches`
--

CREATE TABLE IF NOT EXISTS `aer_searches` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `url` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `expression` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pairs` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `aer_searches`
--

INSERT INTO `aer_searches` (`id`, `name`, `active`, `url`, `expression`, `pairs`) VALUES
(1, 'Medicinenet', 1, 'http://www.medicinenet.com/script/main/srchcont.asp?src=DRUGNAME&op=mm', 'Search\\sResults.*?:\\s(?<RESULT>.*?)\\sa', ''),
(2, 'FDA Opacom', 1, 'http://google2.fda.gov/search?client=FDA&site=enforcement_report&output=xml_no_dtd&oe=&lr=&proxystylesheet=FDA&getfields=*&q=DRUGNAME&sa=Go', 'Results(.*?<){4}.*?<b>[\\s]*(?<RESULT>.*?)<', ''),
(3, 'FDA Medwatch', 1, 'http://google2.fda.gov/search?client=FDA&site=medwatch&output=xml_no_dtd&oe=&lr=&getfields=*&proxystylesheet=FDA&q=DRUGNAME&sa.x=0&sa.y=0&sa=Go%21', 'Results(.*?<){4}.*?<b>[\\s]*(?<RESULT>.*?)<', ''),
(4, 'FDA CDER', 1, 'http://google2.fda.gov/search?client=FDA&site=cder&output=xml_no_dtd&oe=&lr=&proxystylesheet=FDA&q=DRUGNAME&as=GO', 'Results(.*?<){4}.*?<b>[\\s]*(?<RESULT>.*?)<', ''),
(5, 'FDA Accessdata', 1, 'http://www.accessdata.fda.gov/scripts/wlcfm/resultswl.cfm?COMPANY=&Subject=&ISSUER=All&fulltext=DRUGNAME&person=&FromMonth=0&FromYear=0&ToMonth=0&ToYear=0&FromMonth_Auth=0&FromYear_Auth=0&ToMonth_Auth=0&ToYear_Auth=0&search_type=both&Searchwl=Search', '(?<RESULT><TR>)', ''),
(6, 'ASHP Base', 1, 'http://www.google.com/search?num=100&hl=en&lr=&as_qdr=all&q=DRUGNAME+site%3Aashp.org&btnG=Search', 'Results(.*?<){4}.*?<b>[\\s]*(?<RESULT>.*?)<', ''),
(7, 'ASHP Essentials', 1, 'http://www.ashp.org/mngrphs/search-results.cfm', 'Displaying\\srecords:([^<]*<){5}([^>]*>)[\\s]*(?<RESULT>[\\d]*)[\\s]*', 'searchText=DRUGNAME&newQuery=&collection=mngrphs&sort=&num=10'),
(8, 'Toxnet', 1, 'http://www.toxnet.nlm.nih.gov/cgi-bin/sis/search', 'javascript:formsubmit.*?>(?<RESULT>[\\d]+?)<', 'queryxxx=DRUGNAME&basicsearch=/cgi-bin/sis/htmlgen?index.html&revisesearch=/home/httpd/htdocs/html/index.html&second_search=1&chemsyn=1&database=toxline&database=dart&database=hsdb&database=iris&database=iter&database=genetox&database=ccris&database=lact&database=tri2004&database=chemid&database=hpd&database=hazmap&Stemming=1&and=1&xfile=1&nullvalue='),
(9, 'Kilroy', 1, 'www.medesafe.net', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scheduled_by` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `user_id`, `scheduled_by`, `description`, `start_time`, `end_time`, `notes`, `created`, `modified`) VALUES
(2, 6, 7, 'Lladnar Pro', 'golf', '2011-12-09 12:00:00', '2011-12-09 13:00:00', 'notes', NULL, NULL),
(3, 1, 5, 'Lladnar Pro', 'lunch', '2011-01-15 12:00:00', '2011-01-15 13:30:00', 'long lunch', '2011-12-15 13:18:30', '2011-12-15 13:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'User', 4, NULL, 1, 2),
(2, NULL, 'User', 5, NULL, 3, 4),
(3, NULL, 'User', 6, NULL, 5, 6),
(4, NULL, 'User', 7, NULL, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `_read` varchar(2) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `_update` varchar(2) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `_delete` varchar(2) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `encounter_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `encounters`
--

CREATE TABLE IF NOT EXISTS `encounters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `encounter_type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `attachment_id` int(11) NOT NULL,
  `form_data` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `encounters`
--

INSERT INTO `encounters` (`id`, `patient_id`, `encounter_type_id`, `user_id`, `appointment_id`, `attachment_id`, `form_data`, `date_time`, `created`, `modified`) VALUES
(1, 2, 1, 6, 2, 0, '', '2011-12-12 16:30:00', '2011-12-12 16:15:56', '2011-12-12 16:50:00'),
(2, 3, 1, 5, 2, 0, '', '2011-12-12 17:30:00', '2011-12-12 17:22:54', '2011-12-12 17:22:54'),
(3, 6, 1, 7, 2, 0, '', '2012-01-09 12:00:00', '2012-01-09 14:15:33', '2012-01-09 14:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `encounter_types`
--

CREATE TABLE IF NOT EXISTS `encounter_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `medications` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `m_dosage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `allergies` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `serious_reaction` tinyint(1) NOT NULL,
  `problems` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subjective` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `objective` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `assessment` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `plan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `prescriptions` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_dosage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `contact` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `encounter_types`
--

INSERT INTO `encounter_types` (`id`, `name`, `medications`, `m_dosage`, `allergies`, `serious_reaction`, `problems`, `subjective`, `objective`, `assessment`, `plan`, `prescriptions`, `p_dosage`, `status`, `contact`) VALUES
(1, 'Patient Contact', '', '', '', 0, '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'administrators', '2011-10-15 01:10:56', '2011-10-15 01:10:56'),
(2, 'clerks', '2011-10-24 18:40:06', '2011-10-24 18:40:06'),
(3, 'doctors', '2011-10-24 18:39:41', '2011-10-24 18:39:41'),
(4, 'nurses', '2011-10-24 18:39:48', '2011-10-24 18:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `lookups`
--

CREATE TABLE IF NOT EXISTS `lookups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `ssn` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `home_phone` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `cell_phone` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `work_phone` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `fax` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `state` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `zip` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `work_address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `work_city` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `work_state` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `work_zip` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_first` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `contact_last` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `relationship` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `contact_home` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `contact_cell` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `contact_work` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `contact_city` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `contact_state` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `contact_zip` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `primary` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`first_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `active`, `first_name`, `middle_name`, `last_name`, `dob`, `ssn`, `gender`, `marital_status`, `home_phone`, `cell_phone`, `work_phone`, `fax`, `address`, `city`, `state`, `zip`, `work_address`, `work_city`, `work_state`, `work_zip`, `email`, `notes`, `contact_first`, `contact_last`, `relationship`, `contact_home`, `contact_cell`, `contact_work`, `contact_address`, `contact_city`, `contact_state`, `contact_zip`, `contact_email`, `primary`, `created`, `modified`) VALUES
(1, 1, 'John', 'Dee', 'Doe', '2000-01-01', '344-33-1123', 'male', 'divorced', '917-465-9797', '917-665-6474', '917-253-3754', '917-253-3755', '23 Tulucci Dr\nApt 5', 'Ranchero Falls', 'RI', '35452', '78 Burlap St\n2nd Floor', 'Copadula', 'CT', '34251', 'johndoe@hotmail.com', 'good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe ', 'Josie', 'Wales', 'other', '302-231-3233', '535-235-5355', '', '12 Gaboogie Ln', 'Cantanker', 'SD', '88692', 'jwales@ol.com', 4, '2011-10-15 01:15:40', '2011-12-12 21:40:47'),
(2, 1, 'Test', '', 'Patient', '1995-04-01', '554-67-4433', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-10-15 07:24:17', '2011-11-21 23:19:19'),
(3, 1, 'Patient', '', 'Too', '2011-01-01', '878-98-5555', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-10-15 09:50:42', '2011-11-21 23:59:59'),
(4, 1, 'Jane', '', 'Doe', '1982-11-17', '298-34-3434', 'female', 'divorced', '', '', '', '', '', '', 'HI', '', '', '', 'DC', '', 'janedoe@hotmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-17 21:04:26', '2011-11-23 00:15:05'),
(5, 1, 'Don', '', 'Doe', '1996-11-17', '444-22-4444', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-17 21:18:02', '2011-11-21 23:59:48'),
(6, 1, 'Supa', '', 'Dupa', '1998-08-10', '222-22-2222', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-17 22:31:00', '2011-11-21 23:59:42'),
(9, 0, 'Super', '', '8', '1938-03-09', '555-33-5555', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-18 02:17:48', '2011-11-21 23:59:38'),
(11, 1, 'fghdh', '', 'fghd', '2011-11-20', '111-11-1111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-20 08:29:25', '2011-12-07 14:13:45'),
(12, 1, 'lguliu', '', 'jfgjgf', '2011-11-20', '333-22-1111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-20 08:30:02', '2011-11-21 23:59:30'),
(13, 1, 'yiodjvb', '', 'ljkgcy', '2011-11-20', '465-99-6666', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-20 08:30:25', '2011-11-21 23:59:27'),
(14, 1, 'ertygfds', '', 'aga44', '2011-11-20', '333-88-4444', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-20 08:30:51', '2011-11-21 23:59:24'),
(15, 1, 'Tom', '', 'Tune', '1957-03-06', '220-89-1125', 'male', 'single', '', '', '', '', '', '', '', '', '', '', '', '', 'tometune@lladnar.com', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2011-11-23 00:23:23', '2011-11-28 20:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `pdrs`
--

CREATE TABLE IF NOT EXISTS `pdrs` (
  `id` int(11) NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pdrs`
--

INSERT INTO `pdrs` (`id`, `url`) VALUES
(1, 'www.pdr.net');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE IF NOT EXISTS `providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `company` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `group_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subscriber` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `relationship` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `ssn` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `state` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `zip` char(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `patient_id`, `company`, `group_number`, `id_number`, `subscriber`, `relationship`, `ssn`, `dob`, `address`, `city`, `state`, `zip`) VALUES
(1, 1, 'Gecko', '5235', '1651981', 'Bob Doe', 'father', '000-00-0000', '1980-01-01', '1 Road St', 'Newark', 'DE', '00000'),
(2, 1, 'Progresso', '34573457', '57583534456', 'Bob Doe', 'father', '000-00-0000', '1980-01-01', '1 Road St', 'Newark', 'DE', '00000'),
(3, 1, 'State Barn', '', '', 'Bob Doe', 'father', '', '1980-01-01', '', '', '', ''),
(4, 1, 'Everystate', '', '', 'Bob Doe', '', '', '1980-01-01', '', '', '', ''),
(5, 1, 'Countrywide', '', '', 'Bob Doe', '', '', '1980-01-01', '', '', '', ''),
(8, 1, 'No Frills', '', '', 'Bob Doe', 'father', '', '1980-01-01', '', '', '', ''),
(9, 2, 'No Frills', '', '', 'Test Patient', 'self', '', '1975-07-15', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `search_index`
--

CREATE TABLE IF NOT EXISTS `search_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `association_key` int(11) NOT NULL,
  `model` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `association_key` (`association_key`,`model`),
  FULLTEXT KEY `data` (`data`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `search_index`
--

INSERT INTO `search_index` (`id`, `association_key`, `model`, `data`, `created`, `modified`) VALUES
(1, 1, 'Patient', 'John. Dee. Doe. 344-33-1123. male. divorced. 917-465-9797. 917-665-6474. 917-253-3754. 917-253-3755. 23 Tulucci Dr\r\nApt 5. Ranchero Falls. RI. 35452. 78 Burlap St\r\n2nd Floor. Copadula. CT. 34251. johndoe@hotmail.com. good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe good ole johnny doe . Josie. Wales. other. 302-231-3233. 535-235-5355. . 12 Gaboogie Ln. Cantanker. SD. 88692. jwales@ol.com', '2011-11-21 23:19:14', '2011-12-12 21:40:47'),
(2, 2, 'Patient', 'Test. Patient. 554-67-4433', '2011-11-21 23:19:19', '2011-11-21 23:19:19'),
(3, 14, 'Patient', 'ertygfds. aga44. 333-88-4444', '2011-11-21 23:59:24', '2011-11-21 23:59:24'),
(4, 13, 'Patient', 'yiodjvb. ljkgcy. 465-99-6666', '2011-11-21 23:59:27', '2011-11-21 23:59:27'),
(5, 12, 'Patient', 'lguliu. jfgjgf. 333-22-1111', '2011-11-21 23:59:30', '2011-11-21 23:59:30'),
(6, 11, 'Patient', 'fghdh. . fghd. 111-11-1111. . . . . . . . . . . . . . . . . . . . . . . . . . . . . ', '2011-11-21 23:59:35', '2011-12-07 14:13:45'),
(7, 9, 'Patient', 'Super. 8. 555-33-5555', '2011-11-21 23:59:38', '2011-11-21 23:59:38'),
(8, 6, 'Patient', 'Supa. Dupa. 222-22-2222', '2011-11-21 23:59:42', '2011-11-21 23:59:42'),
(9, 5, 'Patient', 'Don. Doe. 444-22-4444', '2011-11-21 23:59:48', '2011-11-21 23:59:48'),
(10, 4, 'Patient', 'Jane. . Doe. 298-34-3434. female. divorced. . . . . . . . HI. . . . . DC. . janedoe@hotmail.com', '2011-11-21 23:59:51', '2011-11-23 00:15:05'),
(11, 3, 'Patient', 'Patient. Too. 878-98-5555', '2011-11-21 23:59:59', '2011-11-21 23:59:59'),
(12, 15, 'Patient', 'Tom. . Tune. 220-89-1125. male. single. . . . . . . . . . . . . . . tometune@lladnar.com. . . . . . . . . . . ', '2011-11-23 00:23:23', '2011-11-28 20:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `week_start` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `week_end` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `day_start` time NOT NULL,
  `day_end` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `week_start`, `week_end`, `day_start`, `day_end`) VALUES
(1, 7, 'Monday', 'Friday', '08:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dea` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `deactivated` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `active`, `username`, `first_name`, `last_name`, `password`, `group_id`, `email`, `dea`, `created`, `deactivated`, `modified`) VALUES
(4, 1, 'lladnar', 'Lladnar', 'Pro', '30eed400d80c2b91a3ac78d61680e29f3350ac75', 1, 'lladnar@lladnar.com', 'AP2859391', '2011-11-19 18:37:15', NULL, '2011-12-07 15:34:15'),
(5, 1, 'oldadmin', 'Old', 'Admin', '4a12b74c071706cd67b4d39c8e5ba9d367e4a0ea', 1, 'oldadmin@mail.com', '', '2011-11-20 00:45:19', NULL, '2011-12-09 05:06:47'),
(6, 0, 'clerky', 'Clerky', 'McClerkster', '74dcbf9f0fbc51ba42dd1d7b567b96d04359bdd0', 2, 'cmcclerkster@aol.com', '', '2011-11-20 13:27:44', NULL, '2011-12-09 05:07:55'),
(7, 1, 'administrator', 'The', 'Admin', '396c914915056a5e72eef7f1c66918032e2b0952', 1, 'admin@aol.com', '', '2011-12-07 14:02:10', NULL, '2011-12-07 14:02:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
