-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 02:24 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `firstname` char(15) NOT NULL,
  `lastname` char(15) NOT NULL,
  `fathers name` char(15) NOT NULL,
  `roll no` int(5) NOT NULL,
  `course` varchar(10) NOT NULL,
  `department` varchar(15) NOT NULL,
  PRIMARY KEY (`roll no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`firstname`, `lastname`, `fathers name`, `roll no`, `course`, `department`) VALUES
('', '', '', 0, '', ''),
('sau', 'dfas', 'fdds', 1, '', 'cse'),
('saurabh', 'taneja', 'rakesh', 2, '', 'cse'),
('mnmd', 'aga', 'cjdbjd', 10, '', 'cse'),
('hfvhhy', 'bgjj', 'paneja', 12, '', 'mech'),
('asdas', 'B', 'cjdbjd', 15, '', 'mech'),
('abcc', 'aga', 'amitabh', 20, '', 'mech'),
('abcc', 'B', 'amitabh', 21, '', 'mech'),
('abcc', 'bgjj', 'cjdbjd', 23, '', 'mech'),
('abcc', 'B', 'amitabh', 24, '', 'cse'),
('abcc', 'B', 'amitabh', 25, '', 'cse'),
('asdas', 'aga', 'dee', 56, '', 'mech'),
('mnmd', 'chandel', 'amitabh', 65, '', 'cse'),
('abcc', 'B', 'cjdbjd', 78, '', 'mech'),
('Mukul', 'aga', 'cjdbjd', 86, '', 'mech'),
('asdas', 'bgjj', 'fgff', 87, '', 'cse'),
('abcc', 'B', 'amitabh', 90, '', 'cse'),
('shahbaz', 'kaur', 'amitabh', 91, '', 'mech'),
('abcc', 'chandel', 'C', 98, '', 'mech'),
('saura', 'pisa', 'raka', 111, '', 'cse'),
('ass', 'chandel', 'cjdbjd', 127, 'Pharmacy', 'PHARMA'),
('abcc', 'bgjj', 'cjdbjd', 151, '', 'mech'),
('abcc', 'aga', 'cjdbjd', 152, 'BCA', 'First choose co'),
('shub', 'sdmd', 'kkd', 234, '', 'cnc'),
('abcc', 'B', 'cjdbjd', 321, 'B.tech', 'CSE'),
('abcc', 'bgjj', 'cjdbjd', 345, '', ''),
('Mukul', 'Pahwa', 'suresh', 456, '', 'cse'),
('saurav', 'ln', 'fan', 567, '', 'cse'),
('saurav', 'ln', 'suresh', 667, '', 'cse'),
('mbnjj', 'paneja', 'edgh', 768, '', 'vbvh'),
('sawan', 'talwar', 'amitabh', 787, 'BCA', 'IT'),
('shabaz', 'singh sandhu', 'abh', 789, 'BCA', 'IT'),
('shivam', 'ranjan', 'jitendra', 801, '', 'cse'),
('saurav', 'ranjan', 'jitendra', 804, '', 'cse'),
('navneet', 'chuti', 'suresh', 807, '', 'mech'),
('asdas', 'bgjj', 'amitabh', 876, '', 'mech'),
('shivam', 'ranjan', 'jk', 890, '', 'cse'),
('mnmd', 'chandel', 'paneja', 907, '', 'mech'),
('yfhyh', 'bjbv', ' bh', 908, '', 'hn v'),
('a', 'B', 'cjdbjd', 918, '', 'mech'),
('abcc', 'B', 'cjdbjd', 981, '', 'mech'),
('a', 'B', 'C', 1111, '', 'cse'),
('xdsccsdcc', 'dfdf', 'ffffff', 1234, '', 'cse'),
('abcc', 'bgjj', 'cjdbjd', 1514, '', 'mech'),
('abcc', 'd', 'dee', 1666, '', 'cse'),
('sndn', 'dndn', 'dndn', 1890, 'BCA', 'IT'),
('hfvhhy', 'B', 'cjdbjd', 2343, 'Pharmacy', 'PHARMA'),
('srk', 'khan', 'rashid', 5678, '', 'cse'),
('abcc', 'B', 'C', 7656, '', 'mech'),
('jn', 'jbj', 'hvvh', 9067, '', 'vvj'),
('yfhyh', 'bjbv', ' bh', 9082, '', 'hn v'),
('abcc', 'B', 'cjdbjd', 9190, '', 'mech'),
('sourabh', 'taneja', 'paneja', 12346, '', 'cse'),
('fhhf', 'd', 'C', 15123, 'BCA', 'IT'),
('a', 'bgjj', 'cjdbjd', 15145, 'BCA', 'IT'),
('abcc', 'B', 'amitabh', 15147, '', ''),
('asdas', 'bgjj', 'dee', 15345, 'Diploma', 'CSE'),
('asdas', 'B', 'fdds', 65432, '', 'cse'),
('sau', 'bgjj', 'cjdbjd', 76545, 'Pharmacy', 'PHARMA'),
('mnmd', 'dsf', 'suresh', 77687, '', 'mech'),
('srk', 'rashid', 'mohammad', 89765, '', 'cse'),
('yfhyh', 'bjbv', ' bh', 90823, '', 'hn v'),
('asdas', 'B', 'cjdbjd', 91987, '', 'cse'),
('hh', 'jjkhkokk', 'jghjg', 98876, 'Pharmacy', 'PHARMA'),
('asdas', 'B', 'dndn', 123451, 'BCA', 'IT'),
('shivam', 'esdf', 'jkh', 123654, 'B.tech', 'CSE'),
('asdas', 'chuti', 'dndn', 151312, 'Pharmacy', 'PHARMA'),
('asdas', 'B', 'cjdbjd', 151473, 'Pharmacy', 'First choose co'),
('asdas', 'bgjj', 'cjdbjd', 158967, 'Pharmacy', 'PHARMA'),
('SHIVANI', 'SHARMA', 'UFIASUD', 193894, '', 'cse'),
('ass', 'chandel', 'C', 543287, '', 'mech'),
('asdas', 'B', 'C', 986467, '', 'mech'),
('mnmd', 'aga', 'cjdbjd', 1234456, '', 'cse'),
('saurabhta', 'kmasfldk', 'saadsf', 1234569, '', 'cse'),
('asdas', 'bgjj', 'cjdbjd', 1514778, 'Diploma', 'MECHANICAL'),
('asdas', 'chandel', 'fdds', 1514798, 'Pharmacy', 'PHARMA'),
('HIO32H23', 'KJNWOJFDN', 'JNEFJEWN', 2561651, '', 'cse'),
('abcc', 'chandel', 'C', 8765356, '', 'mech'),
('mnmd', 'chandel', 'paneja', 12345677, '', 'cse'),
('abcc', 'aga', 'C', 15113234, 'Diploma', 'CSE'),
('abcc', 'bgjj', 'dee', 15147890, 'Pharmacy', 'PHARMA'),
('shubneet', 'grover', 'amitabh', 1610991843, 'B.tech', 'CSE'),
('shivam', 'ranjan', 'amitabh', 2147483647, 'Pharmacy', 'First choose co');
