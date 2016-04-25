-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 03:49 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crst_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive_jobs`
--

CREATE TABLE `archive_jobs` (
  `job_id` int(11) NOT NULL,
  `client_name` varchar(45) NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `ticket_date` date NOT NULL,
  `due_date` date NOT NULL,
  `created_by` varchar(5) NOT NULL,
  `estimate_number` varchar(10) NOT NULL,
  `special_instructions` text NOT NULL,
  `data_loc` varchar(80) NOT NULL,
  `records_total` int(11) NOT NULL,
  `domestic` int(11) NOT NULL,
  `foreigns` int(11) NOT NULL,
  `data_source` varchar(80) NOT NULL,
  `data_received` date NOT NULL,
  `data_completed` date NOT NULL,
  `processed_by` varchar(5) NOT NULL,
  `dqr_sent` date NOT NULL,
  `exact` varchar(15) NOT NULL,
  `mail_foreigns` varchar(15) NOT NULL,
  `household` varchar(15) NOT NULL,
  `noca` varchar(15) NOT NULL,
  `mail_class` varchar(45) NOT NULL,
  `rate` varchar(45) NOT NULL,
  `processing_category` varchar(45) NOT NULL,
  `mail_dim` varchar(45) NOT NULL,
  `weights_measures` varchar(45) NOT NULL,
  `permit` varchar(45) NOT NULL,
  `bmeu` varchar(45) NOT NULL,
  `based_on` varchar(45) NOT NULL,
  `non_profit_number` int(11) NOT NULL,
  `materials_ordered` date NOT NULL,
  `expected` date NOT NULL,
  `received` date NOT NULL,
  `location` varchar(80) NOT NULL,
  `checked_in` varchar(45) NOT NULL,
  `material` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `vendor` varchar(45) NOT NULL,
  `expected_quantity` varchar(15) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `size` varchar(15) NOT NULL,
  `completed_date` date NOT NULL,
  `data_hrs` int(11) NOT NULL,
  `gd_hrs` int(11) NOT NULL,
  `initialrec_count` int(11) NOT NULL,
  `manual` int(11) NOT NULL,
  `uncorrected` int(11) NOT NULL,
  `unverifiable` int(11) NOT NULL,
  `loose` int(11) NOT NULL,
  `householded` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `ncoa_errors` int(11) NOT NULL,
  `final_count` int(11) NOT NULL,
  `postage` varchar(45) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `residual_returned` varchar(45) NOT NULL,
  `2week_followup` varchar(45) NOT NULL,
  `notes` text NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blue_sheet`
--

CREATE TABLE `blue_sheet` (
  `job_id` int(11) NOT NULL,
  `completed_date` date NOT NULL,
  `data_hrs` int(11) NOT NULL,
  `gd_hrs` int(11) NOT NULL,
  `initialrec_count` int(11) NOT NULL,
  `manual` int(11) NOT NULL,
  `uncorrected` int(11) NOT NULL,
  `unverifiable` int(11) NOT NULL,
  `bs_foreigns` int(11) NOT NULL,
  `bs_exact` int(11) NOT NULL,
  `loose` int(11) NOT NULL,
  `householded` int(11) NOT NULL,
  `basic` int(11) NOT NULL,
  `ncoa_errors` int(11) NOT NULL,
  `bs_ncoa` int(11) NOT NULL,
  `final_count` int(11) NOT NULL,
  `bs_domestic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blue_sheet`
--

INSERT INTO `blue_sheet` (`job_id`, `completed_date`, `data_hrs`, `gd_hrs`, `initialrec_count`, `manual`, `uncorrected`, `unverifiable`, `bs_foreigns`, `bs_exact`, `loose`, `householded`, `basic`, `ncoa_errors`, `bs_ncoa`, `final_count`, `bs_domestic`) VALUES
(5565, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5566, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5567, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5568, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5569, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5570, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5571, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5572, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_name` varchar(45) NOT NULL,
  `client_add` varchar(45) NOT NULL,
  `contact_name` varchar(45) NOT NULL,
  `contact_phone` varchar(45) NOT NULL,
  `contact_email` varchar(45) NOT NULL,
  `sec1` varchar(70) NOT NULL,
  `sec2` varchar(70) NOT NULL,
  `sec3` varchar(70) NOT NULL,
  `vendor_contact` varchar(70) NOT NULL,
  `category` varchar(80) NOT NULL,
  `website` varchar(90) NOT NULL,
  `notes` text NOT NULL,
  `title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`client_name`, `client_add`, `contact_name`, `contact_phone`, `contact_email`, `sec1`, `sec2`, `sec3`, `vendor_contact`, `category`, `website`, `notes`, `title`) VALUES
('', '', 'Anna', '', '', '', '', '', '', '', '', '', ''),
('ABC COMPANY', '123 AWE', 'abc  AWE', '3474050304', 'jfg fhg', 'gfg ', '', '', '', 'BUsinessman', 'gh hj ', 'g yhgfh g', 'fggh'),
('Anna', '', '', '', '', '', '', '', '', '', '', '', ''),
('DickButt', '7 Hawkins St Awe', 'Kevin McReady Awe', '3474050304Awe', 'kevin.mcready@yahoo.com', '7183263163', '', '', '', 'BUsinessman', 'kevinmcready.com', 'Just a boss Awe', 'President'),
('Femina', '8 Southside Awesome', 'Femina AwePatel', '1234567890', 'femina@gmail.com', ' 2112345566Awe', '', '', '', 'studentAwe', 'sbdbjsfj.comAwe', 'Awedsf etgrrkjngkdfkgl  vng gjhjhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhg       dfjlads fkdslg               elfkldk fl;drk lfkldrjfklr jfji riooooooot', 'AweCircular progress bar (canvas)'),
('Femina1', '8 Southside Ave', 'Femina Patel', '1234567890', 'femina@gmail.com', '1231231230', '', '', '', 'student', 'sbdbjsfj.com', 'ermtr hyt y ju', 'Circular progress bar (canvas)'),
('Simpsons', '123 St ABC ', 'abc ', '123-456-7896', '123@gmail.com', '123-654-9878', '', '', '', 'Cartoon', 'abc.com', '123 abc check', 'Actor'),
('Somebody', '31 CRST', 'HI ', '111-111-1111', 'sb@gmail.com', '454-545-5545', '', '', '', 'Artist', 'dfnkjjkgd.com', 'sd fefgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfgfge', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `title` varchar(45) NOT NULL,
  `text` text NOT NULL,
  `user` varchar(15) NOT NULL,
  `timestamp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`title`, `text`, `user`, `timestamp`) VALUES
('anna', 'invite her', 'fpatel', '2016-04-22'),
('Brother Earth', 'hello brother awe', '', '0000-00-00'),
('Cousin Earth', 'awe123', 'fpatel', '0000-00-00'),
('Father Earth', 'faaaaaaaaatttttttttttttttttthhhhhhhhhhhhherrrrrrrrrrrrr\r\nmmmmmmmmoooooooooooottttthhhhhherrrrrrrrrr\r\nchild', '', '0000-00-00'),
('femina', 'works', 'fpatel', '2016-04-22'),
('jezz', 'is adorable', 'fpatel', '2016-04-22'),
('kevin', 'rocks', 'fpatel', '2016-04-22'),
('kevin Mc', 'eats pizza', 'fpatel', '2016-04-22'),
('Mother Earth', 'do this awe awe \r\n\r\ndo that awe \r\n\r\nalsoooooooooooooooooooooo do this and this and this\r\nThis is a new line\r\n', 'fpatel', '2016-04-12'),
('s', 'awe', 'fpatel', '2016-04-11'),
('Sister Earth', 'sister', 'fpatel', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `job_id` int(11) NOT NULL,
  `postage` varchar(3) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `residual_returned` varchar(45) NOT NULL,
  `2week_followup` varchar(45) NOT NULL,
  `notes` text NOT NULL,
  `status` varchar(45) NOT NULL,
  `reason` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`job_id`, `postage`, `invoice_number`, `residual_returned`, `2week_followup`, `notes`, `status`, `reason`) VALUES
(5563, 'sad', 456, 'dsgdg', 'gdfghfh', 't r yh j', 'Finished', 'sgf'),
(5564, '', 12560, '', '', '', 'Cancelled', 'fcg'),
(5565, '', 0, '', '', '', '', ''),
(5566, '', 0, '', '', '', '', ''),
(5567, '', 0, '', '', '', '', ''),
(5568, '', 0, '', '', '', '', ''),
(5569, '', 0, '', '', '', '', ''),
(5570, '', 0, '', '', '', '', ''),
(5571, '', 0, '', '', '', '', ''),
(5572, '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_ticket`
--

CREATE TABLE `job_ticket` (
  `job_id` int(45) NOT NULL,
  `client_name` varchar(45) NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `ticket_date` date NOT NULL,
  `due_date` date NOT NULL,
  `created_by` varchar(2) NOT NULL,
  `estimate_number` int(10) DEFAULT NULL,
  `special_instructions` text NOT NULL,
  `materials_ordered` date NOT NULL,
  `materials_expected` date NOT NULL,
  `expected_quantity` int(11) NOT NULL,
  `job_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_ticket`
--

INSERT INTO `job_ticket` (`job_id`, `client_name`, `project_name`, `ticket_date`, `due_date`, `created_by`, `estimate_number`, `special_instructions`, `materials_ordered`, `materials_expected`, `expected_quantity`, `job_status`) VALUES
(5546, 'DickButt', '10', '2016-04-06', '0000-00-00', 'KM', 0, '', '0000-00-00', '0000-00-00', 0, ''),
(5565, 'Femina', 'Type15', '2016-04-27', '2016-04-30', 'JS', 123, '', '0000-00-00', '0000-00-00', 0, 'waiting for assignment'),
(5566, 'ABC COMPANY', 'type16', '0000-00-00', '0000-00-00', 'AB', 0, '', '0000-00-00', '0000-00-00', 0, 'just created'),
(5567, 'Anna', 'type1738', '0000-00-00', '0000-00-00', 'JS', 0, '', '0000-00-00', '0000-00-00', 0, 'waiting for assignment'),
(5568, 'Anna', 'rebel', '0000-00-00', '0000-00-00', 'AB', 0, '', '0000-00-00', '0000-00-00', 0, ''),
(5569, 'Anna', 'go there and come back', '0000-00-00', '0000-00-00', 'AB', 0, '', '0000-00-00', '0000-00-00', 0, ''),
(5570, 'Femina1', 'type18', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', '0000-00-00', 0, ''),
(5571, 'Simpsons', 'type18', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', '0000-00-00', 0, 'on hold'),
(5572, 'Simpsons', 'type20', '0000-00-00', '0000-00-00', '', 0, '', '0000-00-00', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mail_data`
--

CREATE TABLE `mail_data` (
  `job_id` int(11) NOT NULL,
  `data_loc` text NOT NULL,
  `records_total` int(11) NOT NULL,
  `domestic` int(11) NOT NULL,
  `foreigns` int(45) NOT NULL,
  `data_source` varchar(45) NOT NULL,
  `data_received` date NOT NULL,
  `data_completed` date NOT NULL,
  `processed_by` varchar(45) DEFAULT NULL,
  `dqr_sent` date NOT NULL,
  `exact` varchar(3) NOT NULL,
  `mail_foreigns` varchar(3) NOT NULL,
  `household` varchar(3) NOT NULL,
  `ncoa` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_data`
--

INSERT INTO `mail_data` (`job_id`, `data_loc`, `records_total`, `domestic`, `foreigns`, `data_source`, `data_received`, `data_completed`, `processed_by`, `dqr_sent`, `exact`, `mail_foreigns`, `household`, `ncoa`) VALUES
(5565, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', ''),
(5566, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', ''),
(5567, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', ''),
(5568, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', ''),
(5569, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', ''),
(5570, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', ''),
(5571, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', ''),
(5572, '', 0, 0, 0, '', '0000-00-00', '0000-00-00', 'AB', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mail_info`
--

CREATE TABLE `mail_info` (
  `job_id` int(11) NOT NULL,
  `mail_class` varchar(45) NOT NULL,
  `rate` varchar(45) NOT NULL,
  `processing_category` varchar(45) NOT NULL,
  `mail_dim` varchar(45) NOT NULL,
  `weights_measures` varchar(15) NOT NULL,
  `permit` varchar(45) NOT NULL,
  `bmeu` varchar(45) NOT NULL,
  `based_on` varchar(45) NOT NULL,
  `non_profit_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_info`
--

INSERT INTO `mail_info` (`job_id`, `mail_class`, `rate`, `processing_category`, `mail_dim`, `weights_measures`, `permit`, `bmeu`, `based_on`, `non_profit_number`) VALUES
(5565, '', '', '', '', '', '', '', '', 0),
(5566, '', '', '', '', '', '', '', '', 0),
(5567, '', '', '', '', '', '', '', '', 0),
(5568, '', '', '', '', '', '', '', '', 0),
(5569, '', '', '', '', '', '', '', '', 0),
(5570, '', '', '', '', '', '', '', '', 0),
(5571, '', '', '', '', '', '', '', '', 0),
(5572, '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `job_id` int(11) NOT NULL,
  `received` date NOT NULL,
  `location` varchar(15) NOT NULL,
  `checked_in` varchar(3) NOT NULL,
  `material` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `quantity` int(11) NOT NULL,
  `vendor` varchar(45) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`job_id`, `received`, `location`, `checked_in`, `material`, `type`, `quantity`, `vendor`, `height`, `weight`, `size`) VALUES
(5546, '2016-04-26', 'somewhere12', '', '', '', 0, 'Jezz', 0, 0, ''),
(5571, '2016-04-26', 'somewhere', '', 'envelopes', '', 0, 'Kevin', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `job_id` int(11) NOT NULL,
  `hold_postage` varchar(45) NOT NULL,
  `postage_paid` varchar(45) NOT NULL,
  `print_template` text NOT NULL,
  `special_address` text NOT NULL,
  `delivery` varchar(45) NOT NULL,
  `completed` date NOT NULL,
  `tasks` text NOT NULL,
  `task1` varchar(45) NOT NULL,
  `task2` varchar(45) NOT NULL,
  `task3` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`job_id`, `hold_postage`, `postage_paid`, `print_template`, `special_address`, `delivery`, `completed`, `tasks`, `task1`, `task2`, `task3`) VALUES
(5533, '', '', '', '', '', '0000-00-00', '', '', '', ''),
(5534, 'yes', '', '', '', '', '0000-00-00', '', '', '', ''),
(5540, 'yes', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5541, 'yes', 'no', 'sdsfdbv', '8 Southside Ave', '', '0000-00-00', '', '', '', ''),
(5542, 'no', 'yes', 'sdsfdbv', '8 Southside Ave', 'bike', '2016-04-04', '', '', '', ''),
(5544, 'no', 'yes', 'sdsfdbv', '8 Southside Ave', 'bike', '2016-04-18', '', '1', '2', '3'),
(5545, 'no', 'no', '', '', '', '0000-00-00', 'Mail Merge, Letter Printing, In-House Envelope Printing', '', '', ''),
(5546, 'yes', 'no', '', '', 'bike', '0000-00-00', 'Mail Merge, Letter Printing', 'dsfdds', '', ''),
(5547, 'no', 'no', 'sdsfdbv', '8 Southside Ave', 'bike', '2016-04-06', 'Mail Merge, Glue Dots', '12', '34', '56'),
(5548, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5549, 'yes', 'yes', 'dfmf ', 'fgfggh', 'dsrfd ', '2016-04-01', 'Letter Printing, Tabbing', '11', '22', '33'),
(5550, 'yes', 'no', 'yes', 'sffvcg', 'bike', '2016-04-01', 'Tag as Political, Glue Dots', '123', '456', '789'),
(5551, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5552, 'no', 'yes', 'sdsfdbv0', '1 Southside Ave', 'bike', '0000-00-00', 'Mail Merge, In-House Envelope Printing, Inkjet Printing', '', '', ''),
(5553, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5554, 'no', 'no', '', '', '', '0000-00-00', 'Mail Merge, In-House Envelope Printing, Tabbing', '', '', ''),
(5555, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5556, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5557, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5558, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5559, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5560, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5561, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5562, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5563, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5564, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5565, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5566, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5567, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5568, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5569, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5570, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5571, 'no', 'no', '', '', '', '0000-00-00', '', '', '', ''),
(5572, 'no', 'no', '', '', '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectmanager`
--

CREATE TABLE `projectmanager` (
  `pm` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectmanager`
--

INSERT INTO `projectmanager` (`pm`) VALUES
('FP'),
('KM');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `user` varchar(45) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`user`, `text`, `date`) VALUES
('fpatel', 'hello', '2016-04-11'),
('someone', 'hello there', '2016-04-11'),
('fpatel', 'not to be printed', '2016-04-12'),
('fpatel', 'today is here', '2016-04-11'),
('fpatel', 'kevin is here', '2016-04-11'),
('fpatel', 'no one', '2016-04-12'),
('fpatel', '17th +6', '2016-04-17'),
('fpatel', '16th +5', '2016-04-16'),
('fpatel', 'gfh gh', '2017-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `timestamp`
--

CREATE TABLE `timestamp` (
  `user` varchar(45) NOT NULL,
  `time` varchar(70) NOT NULL,
  `job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timestamp`
--

INSERT INTO `timestamp` (`user`, `time`, `job`) VALUES
('fpatel', 'April 22, 2016, 4:25 pm', 'updated job ticket'),
('fpatel', 'April 22, 2016, 4:28 pm', 'created job ticket'),
('fpatel', 'April 22, 2016, 4:30 pm', 'added new w&m'),
('fpatel', 'April 22, 2016, 4:36 pm', 'updated w&m'),
('fpatel', '2016-04-22', 'added documentation'),
('fpatel', '2016-04-22', 'added documentation'),
('fpatel', '2016-04-22', 'added new doc'),
('fpatel', 'April 22, 2016, 4:47 pm', 'added new doc'),
('fpatel', 'April 22, 2016, 4:50 pm', 'updated doc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `initial` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `password`, `initial`, `department`, `name`) VALUES
('aboyd', 'Cornerstone91415', 'AB', 'Project Management', 'Anna Boyd'),
('fpatel', '1234', 'FP', 'prod', 'Femina patel'),
('jscheuler', 'Sales4$CRST', 'JS', 'Sales', 'Jessica Isabel Scheuler'),
('kmcready', 'DC3#CRST1', 'KM', 'Project Management', 'Kevin McReady'),
('mbirnbaum', 'Ibanez1!', 'MB', 'Sales', 'Michael Birnbaum'),
('rob', 'rob123', 'RP', 'Production', 'Rob Philipes');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_name` varchar(45) NOT NULL,
  `vendor_contact` varchar(45) NOT NULL,
  `vendor_add` varchar(45) NOT NULL,
  `vendor_email` varchar(45) NOT NULL,
  `vendor_phone` varchar(45) NOT NULL,
  `vendor_website` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_name`, `vendor_contact`, `vendor_add`, `vendor_email`, `vendor_phone`, `vendor_website`) VALUES
('Femina', 'Femina Awe Awe', '5 South Awe', 'f@gmail.com', '2223334545', 'f.com'),
('Jezz', 'jessica', '31', 'sf@fg.com', '123', 'sda.com'),
('Kevin', 'Kevin Mc Awe', '31 crst', 'k@gmail.com', '1234567896', 'k.com'),
('S. Cartoon', 'john ', 'hilarious dr', 'j@gmail.com', '777-888-9999', 'john.com');

-- --------------------------------------------------------

--
-- Table structure for table `w_and_m`
--

CREATE TABLE `w_and_m` (
  `vendor` varchar(45) NOT NULL,
  `material` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `height` varchar(45) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `based_on` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `w_and_m`
--

INSERT INTO `w_and_m` (`vendor`, `material`, `size`, `height`, `weight`, `based_on`) VALUES
('Femina', 'Post Cards', '12', '13', '8', '10'),
('Jezz', 'bday', '', '', '', '1'),
('S. Cartoon', 'mugs', '4" * 2"', '12', '80', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_jobs`
--
ALTER TABLE `archive_jobs`
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `blue_sheet`
--
ALTER TABLE `blue_sheet`
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD UNIQUE KEY `clientname` (`client_name`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `job_ticket`
--
ALTER TABLE `job_ticket`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `jobid` (`job_id`);

--
-- Indexes for table `mail_data`
--
ALTER TABLE `mail_data`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `mail_info`
--
ALTER TABLE `mail_info`
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_name`),
  ADD UNIQUE KEY `vendor_name` (`vendor_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_ticket`
--
ALTER TABLE `job_ticket`
  MODIFY `job_id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5573;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
