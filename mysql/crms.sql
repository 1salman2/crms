-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 07:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_login`
--

CREATE TABLE `account_login` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_login`
--

INSERT INTO `account_login` (`user_id`, `user_name`, `password`, `email`) VALUES
(1, 'asim', 'asim', 'asim@gmail.com'),
(2, 'areej', 'areej', 'areej@gmail.con'),
(3, 'admin', 'admin', 'areej@gmail.con'),
(4, 'admin1', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `car_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `No_of_days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`car_id`, `booking_id`, `customer_id`, `date_time`, `No_of_days`) VALUES
(55, 3, 1, '2022-08-11 06:55:29', 16),
(50, 4, 2, '2022-08-11 06:56:07', 3),
(3, 7, 5, '2022-08-16 09:31:15', 6),
(16, 8, 6, '2022-08-16 09:32:30', 14),
(32, 9, 5, '2022-08-16 09:52:26', 7),
(44, 10, 6, '2022-08-16 10:01:08', 19),
(1, 11, 6, '2022-08-16 10:04:46', 27),
(3, 14, 1, '2022-08-16 10:29:34', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cars`
--

CREATE TABLE `tbl_cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_model_year` varchar(255) NOT NULL,
  `car_brand` varchar(255) NOT NULL,
  `plate_number` varchar(255) NOT NULL,
  `Rent` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`car_id`, `car_name`, `car_model_year`, `car_brand`, `plate_number`, `Rent`, `status`) VALUES
(1, 'Carolla', '313', 'Carolla', '313', '4500.00', 0),
(2, 'Honda City', '313', 'honda city', '313', '4500.00', 0),
(3, 'bmw', '313', 'BMW', '313', '11000.00', 1),
(4, 'Marcedes', '313', 'Mercedes', '313', '12000.00', 0),
(5, 'Audi', '313', 'Audi', '313', '10000.00', 1),
(6, 'Wagon R', '313', 'Suzuki', '313', '4000.00', 1),
(7, 'BMW-320D', '313', 'BMW', '313', '7000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `CNIC` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `Car_pin` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `firstname`, `CNIC`, `address`, `Car_pin`, `contact`, `Gender`, `city`) VALUES
(14, 'SAlman aly', '35202-6419267-7', 'Consequatur expedita qui nesciunt sunt', '3', '03084331587', 'M', 'Lahore,punjab,Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `payment_amount` decimal(10,2) NOT NULL,
  `add_charges` decimal(10,2) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `booking_id`, `payment_amount`, `add_charges`, `date_time`) VALUES
(3, 1, '8.00', '0.00', '2022-08-11 06:55:29'),
(4, 2, '15.00', '0.00', '2022-08-11 06:56:07'),
(7, 5, '4.00', '0.00', '2022-08-16 09:31:15'),
(8, 6, '11.00', '0.00', '2022-08-16 09:32:30'),
(9, 5, '62.00', '0.00', '2022-08-16 09:52:26'),
(10, 6, '49.00', '0.00', '2022-08-16 10:01:08'),
(13, 9, '7000.00', '0.00', '2022-08-16 10:09:27'),
(14, 8, '11000.00', '0.00', '2022-08-16 10:29:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_login`
--
ALTER TABLE `account_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_login`
--
ALTER TABLE `account_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
