-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2018 at 07:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4735050_subhrajit`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookllers`
--

CREATE TABLE `bookllers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `current_year` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `whatsapp_no` varchar(50) NOT NULL,
  `passwrd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookllers`
--

INSERT INTO `bookllers` (`id`, `firstname`, `lastname`, `current_year`, `branch`, `contact_no`, `whatsapp_no`, `passwrd`) VALUES
(39, 'Nitish', 'Roy', 'Passed Out', 'CSE', '8603406075', '8603406075', '7f88bb68e14d386d89af3cf317f6f7af1d39246c'),
(40, 'shree', 'kayal', 'Second', 'CSE', '9831916428', '9831916428', '9543df71a1cfdd16194abf0cef6bb2f8ba7501fb'),
(41, 'Shubhrajit ', 'Sarkar', 'Second', 'CSE', '9674777691', '8276004151', 'f16bed56189e249fe4ca8ed10a1ecae60e8ceac0'),
(42, 'Pritam', 'Das', 'Second', 'CSE', '9093204402', '9093204402', 'c686613051ab852ac5ff74729897e5bcaa971bb9'),
(43, 'Abc', 'Def', 'First', 'CE', '9999999999', '9999999999', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(44, 'Moumita', 'Majumder', 'First', 'ECE', '9123742944', '9123742944', '849577be7be88e176e5e8507f9394b0ccd2545c7'),
(45, 'Moumita', 'Majumder', 'First', 'ECE', '9123742944', '9123742944', '849577be7be88e176e5e8507f9394b0ccd2545c7'),
(46, 'snehita ', 'satpathy ', 'Second', 'CE', '7278716904', '7278716904', '2cfe534aa66900e81f6f20b02826b6132d2df8de'),
(47, 'Rahi', 'Roy', 'First', 'CE', '9684768900', '8956780021', 'd1d884400d1f7f0e29684eefa7e4487e355967ef'),
(48, 'Rahi', 'Roy', 'First', 'CE', '9804321501', '8674128200', 'd1d884400d1f7f0e29684eefa7e4487e355967ef'),
(49, 'Raj', 'Roy', 'First', 'CE', '9831847566', '9831847566', '3055effa054a24f84cf42cea946db4cdf445cb76'),
(50, 'Bivas', 'Biswas', 'Second', 'CE', '9874562111', '8677413106', '6735e2dac4420d6e08697fbd526b8802fd036e88');

-- --------------------------------------------------------

--
-- Table structure for table `bookllers_book`
--

CREATE TABLE `bookllers_book` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookllers_book`
--

INSERT INTO `bookllers_book` (`id`, `uid`, `book_name`, `author`, `price`, `quantity`, `img_path`) VALUES
(56, 41, 'HIGHER ENGINEERING MATHEMATICS', 'B.V RAMANA', '300', 2, 'upload_img/HIGHER ENGINEERING MATHEMATICS41Shubhrajit bookllers.jpg'),
(57, 41, 'MATHEMATICS(JEE ADVANCED)', 'G. TEWANI', '255', 1, 'upload_img/MATHEMATICS(JEE ADVANCED)41Shubhrajit bookllers.jpg'),
(58, 48, '3 SISTERS', 'KSHITIJ', '99', 1, 'upload_img/3 SISTERS48Rahibookllers.jpg'),
(59, 48, 'PRINCE OF THORNS', 'MARK LAWRENCE', '250', 5, 'upload_img/PRINCE OF THORNS48Rahibookllers.jpg'),
(60, 41, 'WICKED DESTINY', 'L.C HIBBETT', '100', 0, 'upload_img/WICKED DESTINY41Shubhrajit bookllers.jpg'),
(61, 50, 'IT', 'STEPHEN KING', '111', 2, 'upload_img/IT50Bivasbookllers.jpg'),
(62, 50, 'HARSHEL & THE HANUKKAH GOBLINS', 'ERIC KIMMEL', '870', 5, 'upload_img/HARSHEL & THE HANUKKAH GOBLINS50Bivasbookllers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookllers_deliverdorder`
--

CREATE TABLE `bookllers_deliverdorder` (
  `deliver_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_fnm` varchar(200) NOT NULL,
  `customer_lnm` varchar(200) NOT NULL,
  `customer_cntct` varchar(100) NOT NULL,
  `customer_address` varchar(4000) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `img_path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookllers_deliverdorder`
--

INSERT INTO `bookllers_deliverdorder` (`deliver_id`, `order_id`, `customer_fnm`, `customer_lnm`, `customer_cntct`, `customer_address`, `book_name`, `price`, `img_path`) VALUES
(22, 49, 'Nitish', 'Roy', '8709903003', 'C83, Gandhinagar', 'MATHEMATICS(JEE ADVANCED)', '250', 'upload_img/MATHEMATICS(JEE ADVANCED)41Shubhrajit bookllers.jpg'),
(23, 50, 'Prithwish', 'Paul', '9823456700', '206 Sonamukhi Road, Pal Para, Sarsuna, Kolkata-700061', 'PRINCE OF THORNS', '250', 'upload_img/PRINCE OF THORNS48Rahibookllers.jpg'),
(24, 51, 'Ranjit', 'Sarkar', '9674713118', '1053A,Kasthondanga Road, Sarsuna, Kolkata-700061', 'HIGHER ENGINEERING MATHEMATICS', '300', 'upload_img/HIGHER ENGINEERING MATHEMATICS41Shubhrajit bookllers.jpg'),
(25, 52, 'Rani', 'Mukherjee', '9876234567', '12 Mukherjeepara, Sarsuna, Kolkata-700061', 'HARSHEL & THE HANUKKAH GOBLINS', '87', 'upload_img/HARSHEL & THE HANUKKAH GOBLINS50Bivasbookllers.jpg'),
(26, 53, 'Ram', 'Roy', '9647113800', 'Abc.hjkk-700061', 'WICKED DESTINY', '100', 'upload_img/WICKED DESTINY41Shubhrajit bookllers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookllers_orderdetails`
--

CREATE TABLE `bookllers_orderdetails` (
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `book_nmae` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `sell_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookllers_orderdetails`
--

INSERT INTO `bookllers_orderdetails` (`order_id`, `book_id`, `seller_id`, `buyer_id`, `book_nmae`, `author`, `price`, `image`, `sell_status`) VALUES
(49, 57, 41, 15, 'MATHEMATICS(JEE ADVANCED)', 'G. TEWANI', '250', 'upload_img/MATHEMATICS(JEE ADVANCED)41Shubhrajit bookllers.jpg', 'Delivered'),
(50, 59, 48, 16, 'PRINCE OF THORNS', 'MARK LAWRENCE', '250', 'upload_img/PRINCE OF THORNS48Rahibookllers.jpg', 'Delivered'),
(51, 56, 41, 17, 'HIGHER ENGINEERING MATHEMATICS', 'B.V RAMANA', '300', 'upload_img/HIGHER ENGINEERING MATHEMATICS41Shubhrajit bookllers.jpg', 'Delivered'),
(52, 62, 50, 18, 'HARSHEL & THE HANUKKAH GOBLINS', 'ERIC KIMMEL', '87', 'upload_img/HARSHEL & THE HANUKKAH GOBLINS50Bivasbookllers.jpg', 'Delivered'),
(53, 60, 41, 19, 'WICKED DESTINY', 'L.C HIBBETT', '100', 'upload_img/WICKED DESTINY41Shubhrajit bookllers.jpg', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `buy_account`
--

CREATE TABLE `buy_account` (
  `buy_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `cntct` varchar(100) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `usrname` varchar(100) NOT NULL,
  `passwrd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_account`
--

INSERT INTO `buy_account` (`buy_id`, `fname`, `lname`, `cntct`, `address`, `usrname`, `passwrd`) VALUES
(15, 'Nitish', 'Roy', '8709903003', 'C83, Gandhinagar', 'Nitish', '7f88bb68e14d386d89af3cf317f6f7af1d39246c'),
(16, 'Prithwish', 'Paul', '9823456700', '206 Sonamukhi Road, Pal Para, Sarsuna, Kolkata-700061', 'paul', 'a027184a55211cd23e3f3094f1fdc728df5e0500'),
(17, 'Ranjit', 'Sarkar', '9674713118', '1053A,Kasthondanga Road, Sarsuna, Kolkata-700061', 'ranjit', '11aa0e67225134c844298af770a8021f35882b34'),
(18, 'Rani', 'Mukherjee', '9876234567', '12 Mukherjeepara, Sarsuna, Kolkata-700061', 'rani', '70e0294c86cf544230a9e9ba8d474d01a5a1e2a4'),
(19, 'Ram', 'Roy', '9647113800', 'Abc.hjkk-700061', 'ram', '77c7960e890deddebb7ff2e55e340d2ed1708368');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookllers`
--
ALTER TABLE `bookllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookllers_book`
--
ALTER TABLE `bookllers_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookllers_deliverdorder`
--
ALTER TABLE `bookllers_deliverdorder`
  ADD PRIMARY KEY (`deliver_id`);

--
-- Indexes for table `bookllers_orderdetails`
--
ALTER TABLE `bookllers_orderdetails`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `buy_account`
--
ALTER TABLE `buy_account`
  ADD PRIMARY KEY (`buy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookllers`
--
ALTER TABLE `bookllers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `bookllers_book`
--
ALTER TABLE `bookllers_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `bookllers_deliverdorder`
--
ALTER TABLE `bookllers_deliverdorder`
  MODIFY `deliver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bookllers_orderdetails`
--
ALTER TABLE `bookllers_orderdetails`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `buy_account`
--
ALTER TABLE `buy_account`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
