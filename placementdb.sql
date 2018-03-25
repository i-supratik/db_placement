-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 04:59 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placementdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL DEFAULT 'superman'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `password`) VALUES
('admin1', 'one'),
('admin2', 'superman'),
('admin3', 'superman'),
('admin4', 'superman'),
('admin5', 'superman');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CID` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `COMPANY_NAME` varchar(20) NOT NULL,
  `CTC` int(11) NOT NULL,
  `SECTOR` varchar(10) NOT NULL,
  `LOCATION` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CID`, `SID`, `COMPANY_NAME`, `CTC`, `SECTOR`, `LOCATION`) VALUES
(1, 'B415001', 'DELL', 8, 'FINANCE', 'BANGALORE'),
(2, 'B415002', 'INFOSYS', 4, 'MARKETING', 'BANGALORE'),
(3, 'B415003', 'TCS', 3, 'SALES', 'HYDERABAD'),
(4, 'B415004', 'ITC', 5, 'HR', 'PUNE'),
(5, 'B415005', 'TECH MAHINDRA', 7, 'MANUFACTUR', 'HYDERABAD'),
(6, 'B415006', 'DELL', 8, 'MANUFACTUR', 'BANGALORE'),
(7, 'B415007', 'INFOSYS', 4, 'FINANCE', 'BANGALORE'),
(8, 'B415008', 'TCS', 3, 'HR', 'PUNE'),
(9, 'B415009', 'ITC', 4, 'MARKETING', 'HYDERABAD'),
(10, 'B415010', 'ITC', 5, 'SALES', 'BANGALORE'),
(11, 'B415011', 'TECH MAHINDRA', 6, 'SALES', 'HYDERABAD'),
(12, 'B415012', 'DELL', 8, 'HR', 'PUNE'),
(13, 'B415013', 'INFOSYS', 3, 'HR', 'HYDERABAD'),
(14, 'B415014', 'TCS', 5, 'MANUFACTUR', 'BANGALORE'),
(15, 'B415015', 'ITC', 5, 'MARKETING', 'DELHI'),
(16, 'B415016', 'TECH MAHINDRA', 4, 'FINANCE', 'PUNE'),
(17, 'B415017', 'DELL', 8, 'MANUFACTUR', 'HYDERABAD'),
(18, 'B415018', 'TCS', 6, 'FINANCE', 'BANGALORE'),
(19, 'B415019', 'ITC', 5, 'MARKETING', 'PUNE'),
(20, 'B415020', 'TECH MAHINDRA', 4, 'HR', 'PUNE');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE `diploma` (
  `DID` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `COLLEGE` varchar(20) DEFAULT NULL,
  `BOARD` varchar(10) DEFAULT NULL,
  `PERCENTAGE` float DEFAULT NULL,
  `YEAR_OF_PASSING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diploma`
--

INSERT INTO `diploma` (`DID`, `SID`, `COLLEGE`, `BOARD`, `PERCENTAGE`, `YEAR_OF_PASSING`) VALUES
(1, 'B415001', NULL, NULL, NULL, 0),
(2, 'B415002', NULL, NULL, NULL, 0),
(3, 'B415003', NULL, NULL, NULL, 0),
(4, 'B415004', NULL, NULL, NULL, 0),
(5, 'B415005', NULL, NULL, NULL, 0),
(6, 'B415006', NULL, NULL, NULL, 0),
(7, 'B415007', NULL, NULL, NULL, 0),
(8, 'B415008', NULL, NULL, NULL, 0),
(9, 'B415009', NULL, NULL, NULL, 0),
(10, 'B415010', NULL, NULL, NULL, 0),
(11, 'B415011', NULL, NULL, NULL, 0),
(12, 'B415012', NULL, NULL, NULL, 0),
(13, 'B415013', NULL, NULL, NULL, 0),
(14, 'B415014', NULL, NULL, NULL, 0),
(15, 'B415015', '', '', 0, 0),
(16, 'B415016', NULL, NULL, NULL, 0),
(17, 'B415017', NULL, NULL, NULL, 0),
(18, 'B415018', NULL, NULL, NULL, 0),
(19, 'B415019', NULL, NULL, NULL, 0),
(20, 'B415020', 'adssdadsasdasda', 'dsadsasdad', 93, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `IID` int(11) NOT NULL,
  `SID` varchar(10) NOT NULL,
  `INTERNSHIP_PROJECT` varchar(50) DEFAULT NULL,
  `COMPANY_INSTITUTION` varchar(50) DEFAULT NULL,
  `DURATION` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent_information`
--

CREATE TABLE `parent_information` (
  `PID` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `FATHER_NAME` varchar(20) NOT NULL,
  `MOTHER_NAME` varchar(20) NOT NULL,
  `FATHER_OCCUPATION` varchar(20) DEFAULT NULL,
  `F_PHONE_NUMBER` bigint(10) NOT NULL,
  `MOTHER_OCCUPATION` varchar(20) DEFAULT NULL,
  `M_PHONE_NUMBER` int(11) NOT NULL,
  `F_EMAIL_ID` varchar(30) DEFAULT NULL,
  `M_EMAIL_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_information`
--

INSERT INTO `parent_information` (`PID`, `SID`, `FATHER_NAME`, `MOTHER_NAME`, `FATHER_OCCUPATION`, `F_PHONE_NUMBER`, `MOTHER_OCCUPATION`, `M_PHONE_NUMBER`, `F_EMAIL_ID`, `M_EMAIL_ID`) VALUES
(1, 'B415001', 'AAAA', 'BBBB', 'SERVICE', 56214852, 'HOUSEWIFE', 614215324, 'ABC@gmail.com', 'ABCD@gmail.com'),
(2, 'B415002', 'ABCD', 'PQRS', 'SERVICE', 6412316416, 'HOUSEWIFE', 661545665, 'gahdg@gmail.com', 'wgwud@gmail.com'),
(3, 'B415003', 'GHVY', 'DHSD', 'SERVICE', 641235416, 'HOUSEWIFE', 74526865, 'gadsg@gmail.com', 'sdgwud@gmail.com'),
(4, 'B415004', 'JDEJ', 'DJSADH', 'BUSINESS', 5656616416, 'SERVICE', 456461, 'nsudhg@gmail.com', 'dhdb@gmail.com'),
(5, 'B415005', 'JDWHD', 'DWJDHW', 'SERVICE', 6412316416, 'TEACHER', 464646546, 'bsuhs@gmail.com', 'djbdjk@gmail.com'),
(6, 'B415006', 'JDFFJK', 'DJHJH', 'SERVICE', 6616144166, 'SERVICE', 56461635, 'hvhbjbj@gmail.com', 'sbjsnj@gmail.com'),
(7, 'B415007', 'WHEJB', 'DKEKN', 'SERVICE', 1256358, 'SERVICE', 5656264, 'sbjbsjsj@gmail.com', 'jdbjdbj@gmail.com'),
(8, 'B415008', 'EFBDFNDK', 'DJFBDJF', 'BUSINESS', 6445461165, 'HOUSEWIFE', 12556256, 'sjsjsb@gmail.com', 'sjsjnsj@gmail.com'),
(9, 'B415009', 'DWJDBDJW', 'JDHJDJ', 'SERVICE', 123456789, 'HOUSEWIFE', 987654321, 'hsbjsbj@gmail.com', 'sjbj@gmail.com'),
(10, 'B415010', 'JDHJDS', 'DJFBJD', 'SERVICE', 521364799, 'HOUSEWIFE', 215468793, 'sbjshvh@gmail.com', 'djhdhj@gmail.com'),
(11, 'B415011', 'HSJAHJS', 'DJSDBJS', 'TEACHER', 4646164964, 'HOUSEWIFE', 562626, 'jsjs@gmail.com', 'dkndk@gmail.com'),
(12, 'B415012', 'JNEJNDE', 'JEFNJEF', 'SERVICE', 5626266, 'HOUSEWIFE', 5616516, 'dnkdnkd@gmail.com', 'dnkdndk@gmail.com'),
(13, 'B415013', 'FNRJFNREJ', 'ENJEKFBJR', 'SERVICE', 6556165465, 'HOUSEWIFE', 56496164, 'ghvh@gmail.com', 'gbhj@gmail.com'),
(14, 'B415014', 'KDBJ', 'DDJNDJK', 'SERVICE', 56526566, 'HOUSEWIFE', 485166, 'dhwik@gmail.com', 'fnkdnd@gmail.com'),
(15, 'B415015', 'GGGGG', 'MMMMM', 'SERVICE', 9934113864, 'HOUSEWIFE', 2147483647, 'hks@gmail.com', 'ss@gmail.com'),
(16, 'B415016', 'BBJJJBB', 'BDDHBJ', 'BUSINESS', 4242365123, 'BUSINESS', 4961263, 'shjn@gmail.com', 'ddjh@gmail.com'),
(17, 'B415017', 'ADSGDH', 'BDBDN', 'SERVICE', 646163333, 'HOUSEWIFE', 6163163, 'sbjj@gmail.com', 'gghfd@gmail.com'),
(18, 'B415018', 'JFRKF', 'JRJRGD', 'SERVICE', 6549646, 'HOUSEWIFE', 2451236, 'ghjj@gmail.com', 'ssss@gmail.com'),
(19, 'B415019', 'DBHEWFEJ', 'FFGGG', 'SERVICE', 51236332156, 'SERVICE', 27418793, 'vcdfs@gmail.com', 'kljag@gmail.com'),
(20, 'B415020', 'XNJAKL', 'WLKSJD', 'SERVICE', 412365789, 'SERVICE', 123458769, 'lkjhg@gmail.com', 'pojhgf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `SKID` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `C` varchar(5) DEFAULT NULL,
  `CPP` varchar(5) DEFAULT NULL,
  `JAVA` varchar(5) DEFAULT NULL,
  `HTML` varchar(5) DEFAULT NULL,
  `CSS` varchar(5) DEFAULT NULL,
  `JAVASCRIPT` varchar(5) DEFAULT NULL,
  `PYTHON` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`SKID`, `SID`, `C`, `CPP`, `JAVA`, `HTML`, `CSS`, `JAVASCRIPT`, `PYTHON`) VALUES
(1, 'B415001', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(2, 'B415002', 'NO', 'NO', 'YES', 'NO', 'YES', 'NO', 'NO'),
(3, 'B415003', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(4, 'B415004', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', 'YES'),
(5, 'B415005', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(6, 'B415006', 'YES', 'YES', 'NO', 'NO', 'YES', 'YES', 'YES'),
(7, 'B415007', 'NO', 'NO', 'YES', 'NO', 'NO', 'NO', 'YES'),
(8, 'B415008', 'YES', 'NO', 'YES', 'YES', 'YES', 'NO', 'YES'),
(9, 'B415009', 'YES', 'NO', 'YES', 'YES', 'YES', 'YES', 'YES'),
(10, 'B415010', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(11, 'B415011', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(12, 'B415012', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', 'YES'),
(13, 'B415013', 'YES', 'NO', 'YES', 'NO', 'YES', 'YES', 'YES'),
(14, 'B415014', 'YES', 'NO', 'NO', 'NO', 'YES', 'NO', 'NO'),
(15, 'B415015', 'YES', 'YES', 'YES', 'NO', 'NO', 'NO', 'NO'),
(16, 'B415016', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(17, 'B415017', 'YES', 'YES', 'YES', 'NO', 'YES', 'NO', 'YES'),
(18, 'B415018', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(19, 'B415019', 'YES', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES'),
(20, 'B415020', 'NO', 'NO', 'YES', 'NO', 'YES', 'NO', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SID` varchar(11) NOT NULL,
  `FIRST_NAME` varchar(10) NOT NULL,
  `MIDDLE_NAME` varchar(10) DEFAULT NULL,
  `LAST_NAME` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `PHONE_NUMBER` bigint(11) NOT NULL,
  `AADHAR_NUMBER` int(11) DEFAULT NULL,
  `EMAIL_ID` varchar(30) DEFAULT NULL,
  `Alt_email_Id` varchar(30) DEFAULT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CITY` varchar(10) DEFAULT NULL,
  `STATE` varchar(10) NOT NULL,
  `COUNTRY` varchar(10) NOT NULL DEFAULT 'INDIA',
  `POSTAL_CODE` int(11) NOT NULL,
  `Password` varchar(30) NOT NULL DEFAULT 'changeme',
  `verified` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `DOB`, `PHONE_NUMBER`, `AADHAR_NUMBER`, `EMAIL_ID`, `Alt_email_Id`, `ADDRESS`, `CITY`, `STATE`, `COUNTRY`, `POSTAL_CODE`, `Password`, `verified`) VALUES
('B415001', 'AASHNA', NULL, 'MAHAPATRA', '1997-11-03', 123456789, 1, 'aa@gmail.com', NULL, 'APJ NAGAR', 'BBSR', 'ODISHA', 'INDIA', 1, 'changeme', NULL),
('B415002', 'ACHIV', NULL, 'CHAUHAN', '1997-10-23', 5565456324, 161465446, 'bb@gmail.com', NULL, 'PQY NAGAR', 'BBSR', 'ODISHA', 'INDIA', 1, 'changeme', NULL),
('B415003', 'ADITYA', NULL, 'PANDEY', '1997-12-04', 423545636, 354513165, 'cc@gmail.com', NULL, 'MANGO', 'JAMSHEDPUR', 'JHARKHAND', 'INDIA', 831004, 'changeme', NULL),
('B415004', 'AISHWARYA', NULL, 'TRIPATHI', '1996-05-11', 462666113, 546626622, 'dd@gmail.com', NULL, 'LAJPAT NAGAR', 'DELHI', 'DELHI', 'INDIA', 100001, 'changeme', NULL),
('B415005', 'ITISHREE', NULL, 'NAYAK', '1997-11-19', 9456321558, 2147483647, 'ee@gmail.com', '', 'SBI COLONY', 'BHADRAK', 'ODISHA', 'INDIA', 751003, 'changeme', NULL),
('B415006', 'PRIYASMINI', NULL, 'SAHOO', '1996-05-18', 9456321558, 2147483647, 'ff@gmail.com', '', 'HATHI BAGAN', 'KOLKATTA', 'BENGAL', 'INDIA', 458922, 'changeme', NULL),
('B415007', 'ALISHA', NULL, 'PANDA', '1995-11-07', 5646136, 454165152, 'gg@gmail.com', NULL, 'STEPHEN NAGAR', 'CUTTACK', 'ODISHA', 'INDIA', 5665, 'changeme', NULL),
('B415008', 'AMARNATH', NULL, 'SAHOO', '1996-03-25', 46416165, 54416516, 'hh@gmail.com', NULL, 'SHAHID NAGAR', 'BBSR', 'ODISHA', 'INDIA', 1, 'changeme', NULL),
('B415009', 'ANKITA ', NULL, 'SAHOO', '1996-12-01', 12345872, 32145876, 'ii@gmail.com', NULL, 'SHAHID NAGAR', 'BBSR', 'ODISHA', 'INDIA', 0, 'changeme', NULL),
('B415010', 'ARPITA', NULL, 'BISWAL', '1996-01-01', 42157831, 12546938, 'jj@gmail.com', NULL, 'XYZ COLONY', 'BOKARO', 'JHARKHAND', 'INDIA', 4125, 'changeme', NULL),
('B415011', 'ANKOOR', NULL, 'SHANDILYA', '1996-07-23', 5623132, 14541654, 'kk@gmail.com', NULL, 'ABC COLONY', 'PATNA', 'BIHAR', 'INDIA', 32352, 'changeme', NULL),
('B415012', 'SWATI ', NULL, 'PATTNAIK', '1996-02-12', 5135213, 2351666, 'll@gmail.com', NULL, 'PATIA', 'BBSR', 'ODISHA', 'INDIA', 5161, 'changeme', NULL),
('B415013', 'BIBIDH', NULL, 'PRADHAN', '1996-10-24', 563123, 485641, 'mm@gmail.com', NULL, 'BCD NAGAR', 'RKL', 'ODISHA', 'INDIA', 4163, 'changeme', NULL),
('B415014', 'SUPRATIK', NULL, 'SAMAL', '1996-01-01', 453213, 153613, 'nn@gmail.com', NULL, 'XYZ', 'RKL', 'ODISHA', 'INDIA', 4516, 'changeme', NULL),
('B415015', 'GARIMA', NULL, 'SAHU', '1997-07-25', 7777777777, 2147483647, 'pp@gmail.com', NULL, 'SONARI', 'JAMSHEDPUR', 'JHARKHAND', 'INDIA', 831011, 'changeme', NULL),
('B415016', 'SAUMYA', NULL, 'JHA', '1997-04-16', 4153366, 4565155, 'oo@gmail.com', NULL, 'PATIA', 'BBSR', 'ODISHA', 'INDIA', 51633, 'changeme', NULL),
('B415017', 'RUDRA', 'NARAYAN', 'PANDA', '1997-02-02', 121313, 463551, 'ss@gmail.com', NULL, 'PQR', 'BBSR', 'ODISHA', 'INDIA', 6226, 'changeme', NULL),
('B415018', 'BHAVNA', NULL, 'SHADANGI', '1996-08-13', 45312, 468512, 'rr@gmail.com', NULL, 'ESPLANADE', 'KOLKATTA', 'BENGAL', 'INDIA', 5313, 'changeme', NULL),
('B415019', 'PRATEEK', NULL, 'SHARMA', '1996-02-18', 41320, 4861532, 'tt@gmail.com', NULL, 'XXX', 'AGRA', 'UP', 'INDIA', 4653, 'changeme', NULL),
('B415020', 'FAHEEM', '', 'HABIB', '1997-10-27', 96523652, 45613246, 'aaaa@m.com', 'aaaa@nnn.com', 'GHFDST', 'BBSR', 'ODISHA', 'INDIA', 6451320, 'changeme', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `undergraduation`
--

CREATE TABLE `undergraduation` (
  `UID` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `BRANCH` varchar(5) NOT NULL,
  `COLLEGE` varchar(20) NOT NULL,
  `CGPA` float NOT NULL,
  `YEAR_OF_PASSING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `undergraduation`
--

INSERT INTO `undergraduation` (`UID`, `SID`, `BRANCH`, `COLLEGE`, `CGPA`, `YEAR_OF_PASSING`) VALUES
(1, 'B415001', 'CSE', 'IIIT BHUBANESWAR', 8.25, 2019),
(2, 'B415002', 'CSE', 'IIIT BHUBANESWAR', 6.88, 2019),
(3, 'B415003', 'CSE', 'IIIT BHUBANESWAR', 7.14, 2019),
(4, 'B415004', 'CSE', 'IIIT BHUBANESWAR', 7.3, 2019),
(5, 'B415005', 'CSE', 'IIIT BHUBANESWAR', 8.05, 2019),
(6, 'B415006', 'ETC', 'IIIT BHUBANESWAR', 8.32, 2019),
(7, 'B415007', 'ETC', 'IIIT BHUBANESWAR', 8.89, 2019),
(8, 'B415008', 'ETC', 'IIIT BHUBANESWAR', 8.56, 2019),
(9, 'B415009', 'ETC', 'IIIT BHUBANESWAR', 7.23, 2019),
(10, 'B415010', 'ETC', 'IIIT BHUBANESWAR', 7.44, 2019),
(11, 'B415011', 'EEE', 'IIIT BHUBANESWAR', 8.9, 2019),
(12, 'B415012', 'EEE', 'IIIT BHUBANESWAR', 8.55, 2019),
(13, 'B415013', 'EEE', 'IIIT BHUBANESWAR', 7.38, 2019),
(14, 'B415014', 'EEE', 'IIIT BHUBANESWAR', 8.12, 2019),
(15, 'B415015', 'EEE', 'IIIT BHUBANESWAR', 7.7, 2019),
(16, 'B415016', 'IT', 'IIIT BHUBANESWAR', 7.56, 2019),
(17, 'B415017', 'IT', 'IIIT BHUBANESWAR', 8.21, 2019),
(18, 'B415018', 'IT', 'IIIT BHUBANESWAR', 7.65, 2019),
(19, 'B415019', 'IT', 'IIIT BHUBANESWAR', 8.65, 2019),
(20, 'B415020', 'IT', 'IIIT BHUBANESWAR', 8.09, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `xiith`
--

CREATE TABLE `xiith` (
  `XIIID` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `SCHOOL` varchar(10) NOT NULL,
  `BOARD` varchar(10) NOT NULL,
  `PERCENTAGE` float NOT NULL,
  `YEAR_OF_PASSING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xiith`
--

INSERT INTO `xiith` (`XIIID`, `SID`, `SCHOOL`, `BOARD`, `PERCENTAGE`, `YEAR_OF_PASSING`) VALUES
(1, 'B415001', 'JH TARAPOR', 'ICSE', 81.5, 2015),
(2, 'B415002', 'CARMEL JUN', 'ICSE', 85.5, 2015),
(3, 'B415003', 'LOYOLA SCH', 'ICSE', 91.8, 2015),
(4, 'B415004', 'ST MARY EN', 'CBSE', 75.8, 2015),
(5, 'B415005', 'MOTILAL NE', 'ICSE', 88.2, 2015),
(6, 'B415006', 'HILL TOP S', 'ICSE', 94.8, 2015),
(7, 'B415007', 'ST STEPHEN', 'ICSE', 78.6, 2014),
(8, 'B415008', 'DAV PUBLIC', 'CBSE', 84.1, 2015),
(9, 'B415009', 'DAV PUBLIC', 'CBSE', 82.2, 2015),
(10, 'B415010', 'MOTHERS PU', 'ICSE', 74.3, 2015),
(11, 'B415011', 'DAV PUBLIC', 'CBSE', 93.2, 2015),
(12, 'B415012', 'ST MARY EN', 'CBSE', 94.6, 2015),
(13, 'B415013', 'ISPAT ENG.', 'ICSE', 74.2, 2015),
(14, 'B415014', 'DAV PUBLIC', 'CBSE', 94.6, 2015),
(15, 'B415015', 'LOYOLA SCH', 'ICSE', 95.25, 2015),
(16, 'B415016', 'MOTHERS P', 'ICSE', 91.8, 2015),
(17, 'B415017', 'DAV PUB', 'CBSE', 94.2, 2015),
(18, 'B415018', 'CARMEL JU', 'ICSE', 88.6, 2015),
(19, 'B415019', 'HILL TOP', 'ICSE', 96.3, 2015),
(20, 'B415020', 'ADLS SUNS', 'ICSE', 98.5, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `xth`
--

CREATE TABLE `xth` (
  `XID` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `SCHOOL` varchar(20) NOT NULL,
  `BOARD` varchar(10) NOT NULL,
  `PERCENTAGE` float NOT NULL,
  `YEAR_OF_PASSING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xth`
--

INSERT INTO `xth` (`XID`, `SID`, `SCHOOL`, `BOARD`, `PERCENTAGE`, `YEAR_OF_PASSING`) VALUES
(1, 'B415001', 'JH TARAPORE SCHOOL', 'ICSE', 92.5, 2013),
(2, 'B415002', 'CARMEL JUNIOR COLLEG', 'ICSE', 93.5, 2013),
(3, 'B415003', 'LOYOLA SCHOOL', 'ICSE', 91.8, 2013),
(4, 'B415004', 'ST. MARY ENGLISH HIG', 'CBSE', 87.2, 2013),
(5, 'B415005', 'MOTILAL NEHRU PUBLIC', 'CBSE', 85.6, 2013),
(6, 'B415006', 'HILL TOP SCHOOL', 'CBSE', 95.5, 2012),
(7, 'B415007', 'ST. STEPHEN ENGLISH ', 'ICSE', 92.8, 2012),
(8, 'B415008', 'DAV PUBLIC SCHOOL', 'CBSE', 82.4, 2013),
(9, 'B415009', 'DAV PUBLIC SCHOOL', 'CBSE', 79.8, 2013),
(10, 'B415010', 'MOTHERS PUB. SCHOOL', 'ICSE', 84.1, 2013),
(11, 'B415011', 'DAV PUBLIC SCHOOL', 'CBSE', 94.8, 2013),
(12, 'B415012', 'ST. MARY ENGLISH SCH', 'CBSE', 92.5, 2013),
(13, 'B415013', 'ISPAT ENGLISH SCHOOL', 'ICSE', 81.5, 2013),
(14, 'B415014', 'DAV PUBLIC SCHOOL', 'CBSE', 93.8, 2012),
(15, 'B415015', 'LOYOLA SCHOOL', 'ICSE', 93.8, 2013),
(16, 'B415016', 'MOTHERS PUB. SCHOOL', 'ICSE', 94.1, 2013),
(17, 'B415017', 'DAV PUBLIC SCHOOL', 'CBSE', 94.2, 2013),
(18, 'B415018', 'CARMEL JUNIOR COLLEG', 'ICSE', 87.2, 2013),
(19, 'B415019', 'HILL TOP SCHOOL', 'ICSE', 95.5, 2012),
(20, 'B415020', 'ADLS SUNSHINE SCHOOL', 'ICSE', 94.6, 2013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `diploma`
--
ALTER TABLE `diploma`
  ADD PRIMARY KEY (`DID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`IID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `parent_information`
--
ALTER TABLE `parent_information`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`SKID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `undergraduation`
--
ALTER TABLE `undergraduation`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `xiith`
--
ALTER TABLE `xiith`
  ADD PRIMARY KEY (`XIIID`),
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `xth`
--
ALTER TABLE `xth`
  ADD PRIMARY KEY (`XID`),
  ADD KEY `SID` (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `diploma`
--
ALTER TABLE `diploma`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parent_information`
--
ALTER TABLE `parent_information`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `SKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `undergraduation`
--
ALTER TABLE `undergraduation`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `xiith`
--
ALTER TABLE `xiith`
  MODIFY `XIIID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `xth`
--
ALTER TABLE `xth`
  MODIFY `XID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `student` (`SID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
