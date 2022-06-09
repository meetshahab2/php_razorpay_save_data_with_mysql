-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2022 at 12:48 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qacxdneq_influencerhire`
--

-- --------------------------------------------------------

--
-- Table structure for table `razorpay_payment`
--

CREATE TABLE `razorpay_payment` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `razorpayId` varchar(100) NOT NULL,
  `razaorpayOrderId` varchar(100) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `subscriptionName` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` tinyint(4) NOT NULL,
  `payment_message` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razorpay_payment`
--

INSERT INTO `razorpay_payment` (`id`, `product_id`, `razorpayId`, `razaorpayOrderId`, `emailAddress`, `phoneNumber`, `subscriptionName`, `amount`, `payment_status`, `payment_message`, `date_added`) VALUES
(9, '3456', 'pay_JcaqP6FK53SQO9', 'order_JcaqAGjKImcJoX', 'meetshahab2@gmail.com', '9580445657', 'My Test Product', 1, 1, 'Sucessfull', '2022-06-02 15:58:51'),
(10, '', 'pay_JcvUTqCJ8gUz24', 'order_JcvTxh8liKQYgz', 'kavitarawat.jimmc@gmail.com', '08470060021', '', 500, 1, 'Sucessfull', '2022-06-03 12:10:45'),
(11, '', 'pay_JcvlR7xlFRQDFs', 'order_Jcvl0iAXNfBx5I', 'kavitarawat.jimmc@gmail.com', '08470060021', '', 300, 1, 'Sucessfull', '2022-06-03 12:26:52'),
(12, '5', 'pay_JcvnMhp0gBd73q', 'order_Jcvn388Db1YWtU', 'kavitarawat.jimmc@gmail.com', '08470060021', 'sara ali khan', 300, 1, 'Sucessfull', '2022-06-03 12:28:34'),
(13, '5', 'pay_Jcw1j8RbO9T6Cj', 'order_JcvzVaafpTOgML', 'kavitarawat.jimmc@gmail.com', '8447873473', 'sara ali khan', 400, 1, 'Sucessfull', '2022-06-03 12:42:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `razorpay_payment`
--
ALTER TABLE `razorpay_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `razorpay_payment`
--
ALTER TABLE `razorpay_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
