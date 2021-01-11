-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 02:34 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintable` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttable`
--

CREATE TABLE `appointmenttable` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
    `age` int (10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmenttable`
--

INSERT INTO `appointmenttable` (`pid`, `ID`, `fname`, `lname`, `gender`, `age`,`email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(2, 2, 'Rekha', 'Peri', 'Female', 25, 'rperi@ilstu.edu', '8838489464', 'Rizwan', 100, '2020-02-14', '10:00:00', 1, 0),
(1, 1, 'Sayali ', 'Ahirrao', 'Female', 35, 'sahirra@ilstu.edu', '8838489464', 'Amrita', 500, '2020-02-28', '10:00:00', 0, 1),
(3, 3, 'Arsalan', 'Siddiqui', 'Male', 27, 'arsidd@ilstu.edu', '8838489464', 'Tejas', 500, '2020-02-19', '03:00:00', 0, 1),
(7, 7, 'Mildred', 'Agallo', 'Female', 37, 'magallo@ilstu.edu', '9768946252', 'Talha', 400, '2020-02-29', '20:00:00', 1, 1),
(4, 4, 'Daniyal', 'Mirza', 'Male', 30, 'mbaig@ilstu.edu', '8838489464', 'Yashika', 800, '2020-02-28', '12:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Arsalan', 'rperi@ilstu.edu', '7896677554', 'Apna Time Ayega!'),
(' Sameeh', 'sameeh@ilstu.edu', '9899778865', 'Basically, the project looks great'),
('Rekha', 'rekha@ilstu.edu', '9997888879', 'Bariyaa!'),
('Sayali', 'sahirra@ilstu.edu', '8788979967', 'Unka kuch alag hi chalra hai');

-- --------------------------------------------------------

--
-- Table structure for table `doctortable`
--

CREATE TABLE `doctortable` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctortable`
--

INSERT INTO `doctortable` (`username`, `password`, `email`, `spec`, `docFees`) VALUES
('Amrita', 'google123', 'ashalin@gmail.com', 'Cardiologist', 500),
('Uriel', 'google123', 'uriel@gmail.com', 'Cardiologist', 600),
('Hamza', 'google123', 'hmoin@gmail.com', 'Neurologist', 700),
('Tejas', 'google123', 'tcmanda@gmail.com', 'Dermatologist', 500),
('Yashika', 'google123', 'ymatre@gmail.com', 'Physician', 800),
('Divya', 'google123', 'divy@gmail.com', 'Cardiologist', 100),
('Rizwan', 'google123', 'riz@gmail.com', 'Gastroenterologist', 100),
('Talha', 'google123', 'tzordaar@gmail.com', 'Surgeon', 400),
('Tashin', 'google123', 'tashin@gmail.com', 'Psychiatrist', 400),
('Shahab', 'google123', 'rajput@gmail.com', 'Neurologist', 400),
('Sammana', 'google123', 'sfatima@gmail.com', 'Gastroenterologist', 400);

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--





CREATE TABLE `patientregistration` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientregistration`
--

INSERT INTO `patientregistration` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Sayali', 'Ahirrao', 'Female', 'sahirra@ilstu.com', '9876543210', 'abc123', 'abc123'),
(2, 'Rekha', 'Peri', 'Female', 'rperi@ilstu.edu', '8976897689', 'abc123', 'abc123'),
(3, 'Arsalan ', 'Siddiqui', 'Male', 'arsidd@ilstu.edu', '8976898463', 'abc123', 'abc123'),
(4, 'Daniyal', 'Mirza', 'Male', 'mbaig@ilstu.edu', '8838489464', 'abc123', 'abc123'),
(5, 'Sameeh', 'Ullah', 'Male', 'sameeh@ilstu.edu', '9070897653', 'abc123', 'abc123'),
(6, 'Jihad', 'Qaddour', 'Male', 'jqaddour@ilstu.edu', '9059986865', 'abc123', 'abc123'),
(7, 'Mildred', 'Agallo', 'Female', 'magallo@ilstu.edu', '9128972454', 'abc123', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptiontable`
--

CREATE TABLE `prescriptiontable` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescriptiontable`
--

INSERT INTO `prescriptiontable` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `status`, `prescription`) VALUES
('Amrita Shalin', 4, 4, 'Daniyal', 'Mirza', '2020-03-27', '15:00:00', 'Cough', 'Nothing', 'Just take a teaspoon of Benadryl every night'),
('Tejas Mandalpu', 3, 3, 'Arsalan', 'Siddiqui', '2020-03-21', '10:00:00', 'Severe Fever', 'Nothing', 'Take bed rest'),
('Uriel Quartey', 7, 7, 'Mildred', 'Agallo', '2020-03-26', '12:00:00', 'Sever fever', 'nothing', 'Paracetamol -> 1 every morning and night'),
('Rizwan Ahmed', 6, 6, 'Jihad', 'Qaddour', '2020-03-26', '14:00:00', 'Cough', 'Skin dryness', 'Intake fruits with more water content');

--
-- Indexes for dumped tables
--


-- Table structure for table `healthtable`
--

CREATE TABLE `healthtable` (
`ID` INT AUTO_INCREMENT primary key NOT NULL,
 `Timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Temperature` float(4,2)  NOT NULL,
    `Heartrate` int(100)  NOT NULL,
      `Respiration` int(100)  NOT NULL,
        `Spo2` int(100)  NOT NULL,
        `Predict` varchar (100)  NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;





CREATE TABLE `blockchain` (
`ID` INT AUTO_INCREMENT primary key NOT NULL,
 `Timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   `Block` int(100)  NOT NULL,
         `Proof` int(255)  NOT NULL,
       `PreviousHash` varchar (255)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




--
-- Indexes for table `appointmenttable`
--
ALTER TABLE `appointmenttable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttable`
--
ALTER TABLE `appointmenttable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
