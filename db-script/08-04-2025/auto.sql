-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Apr 08, 2025 at 11:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_entry`
--

CREATE TABLE `account_entry` (
  `acc_id` int(11) NOT NULL,
  `entry_type` varchar(255) DEFAULT NULL,
  `supplier_id` varchar(255) DEFAULT NULL,
  `fitter_id` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `receipt_no` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_entry`
--

INSERT INTO `account_entry` (`acc_id`, `entry_type`, `supplier_id`, `fitter_id`, `amount`, `payment_mode`, `detail`, `date`, `receipt_no`, `customer_id`) VALUES
(1, 'Supplier', '1', '1', '4000', 'Cash', 'done', '03/02/2024', '12345', NULL),
(2, 'Supplier', '1', '1', '1234', 'Cash', 'Paid', '2024-02-04', '1231', NULL),
(3, 'Supplier', '1', '1', '1234', 'Cash', 'Paid', '2024-02-04', '1231', NULL),
(4, 'Supplier', '1', '', '233433', 'Cash', 'Paid', '2024-02-04', '27546', NULL),
(5, 'Supplier', '', '', '445', 'Debit Card', 'Paid', '2024-02-04', '86055', '1'),
(6, 'Supplier', '', '1', '43434', 'Cash', 'Paid', '2024-02-04', '34886', ''),
(7, 'customer', '', '', '444', 'Internet Banking', 'Paid', '2024-02-04', '52132', '1'),
(8, 'supplier', '1', '', '71', 'Cash', 'Paid', '2024-02-06', '70944', ''),
(9, 'supplier', '1', '', '71', 'Cash', 'Paid', '2024-02-06', '96468', ''),
(10, 'supplier', '1', '', '71', 'Debit Card', 'Paid', '2024-02-06', '61153', ''),
(11, 'supplier', '1', '', '12', 'Cash', 'Paid', '2024-02-06', '76458', ''),
(12, 'supplier', '1', '', '71', 'Cash', 'Paid', '2024-02-06', '39994', ''),
(13, 'supplier', '1', '', '71', 'Cash', 'Paid', '2024-02-06', '63931', ''),
(14, 'supplier', '1', '', '71', 'Credit Card', 'Paid', '2024-02-06', '51231', ''),
(15, 'supplier', '1', '', '71', 'Cash', 'Paid', '2024-02-06', '11025', ''),
(16, 'supplier', '1', '', '100', 'Internet Banking', 'Paid', '2024-02-06', '84781', ''),
(17, 'Customer', '', '', '1234', 'Cash', 'Paid', '2024-02-11', '89290', '4'),
(18, 'Supplier', '1', '', '12', 'Cash', 'Paid', '2024-02-11', '21378', ''),
(19, 'Fitter', '', '1', '33', 'Cash', 'Paid', '2024-02-11', '46571', ''),
(20, 'Supplier', '1', '', '', 'Cash', 'Paid', '2024-02-11', '84719', ''),
(21, 'Supplier', '1', '', '', 'Cash', 'Paid', '2024-02-11', '94464', ''),
(22, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-11', '53979', ''),
(23, 'Supplier', '1', '', '100', 'Internet Banking', 'Paid', '2024-02-11', '65584', ''),
(24, 'Supplier', '1', '', '100', 'Credit Card', 'Paid', '2024-02-11', '54225', ''),
(25, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-11', '21183', ''),
(26, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-11', '47674', ''),
(27, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-11', '82759', ''),
(28, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-11', '51463', ''),
(29, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-11', '16966', ''),
(30, 'Customer', '', '', '436', 'Debit Card', 'Paid', '2024-02-11', '19911', '1'),
(31, 'Customer', '', '', '100', 'Credit Card', 'Paid', '2024-02-11', '78508', '1'),
(32, 'Other', '', '', '123', 'Internet Banking', 'Paid', '2024-02-11', '98070', '1'),
(33, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-17', '27110', ''),
(34, 'Supplier', '1', '', '90', 'Cash', 'Paid', '2024-02-28', '47007', ''),
(35, 'Other', '', '', '100', 'Cash', 'Paid', '2024-02-28', '94480', ''),
(36, 'Other', '', '', '1000', 'Cash', 'Paid', '2024-02-28', '37938', ''),
(37, 'Fitter', '', '1', '500', 'Cash', 'Paid', '2024-02-29', '23837', ''),
(38, 'Customer', '', '', '100', 'Cash', 'Paid', '2024-02-29', '18750', '1'),
(39, 'Supplier', '1', '', '100', 'Cash', 'Paid', '2024-02-29', '83000', ''),
(40, 'Supplier', '1', '', '100', 'Internet Banking', 'Paid', '2024-02-29', '16736', ''),
(41, 'Customer', '', '', '1000', 'Cash', 'Paid', '2024-03-01', '30670', '4');

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `action_id` int(11) NOT NULL,
  `action_name` varchar(255) DEFAULT NULL,
  `createdat` date DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`action_id`, `action_name`, `createdat`, `updatedat`, `createdby`, `updatedby`) VALUES
(1, 'shiv', NULL, '25-08-23', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_date` date DEFAULT NULL,
  `attendance_flag` varchar(255) DEFAULT NULL,
  `attendance_user_name` varchar(255) DEFAULT NULL,
  `attendance_user_id` varchar(255) DEFAULT NULL,
  `attendance_project_id` varchar(255) DEFAULT NULL,
  `current_month` varchar(255) DEFAULT NULL,
  `current_year` varchar(255) DEFAULT NULL,
  `current_day` varchar(255) DEFAULT NULL,
  `createdat` date DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL,
  `attendance_type` varchar(255) DEFAULT NULL,
  `attendance_count` varchar(255) DEFAULT NULL,
  `login_time` time DEFAULT NULL,
  `logout_time` varchar(255) DEFAULT NULL,
  `attendance_meason` varchar(255) DEFAULT NULL,
  `attendance_helper` varchar(255) DEFAULT NULL,
  `attendance_department` varchar(255) DEFAULT NULL,
  `attendance_contractor_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_date`, `attendance_flag`, `attendance_user_name`, `attendance_user_id`, `attendance_project_id`, `current_month`, `current_year`, `current_day`, `createdat`, `updatedat`, `createdby`, `updatedby`, `attendance_type`, `attendance_count`, `login_time`, `logout_time`, `attendance_meason`, `attendance_helper`, `attendance_department`, `attendance_contractor_id`) VALUES
(1, '2023-08-28', 'Y', 'Rahul More', '2', '1', '08', '23', '28', '2028-08-23', '28-08-23', NULL, '2', '1', NULL, '11:08:00', '11:08', NULL, NULL, NULL, NULL),
(2, '2023-08-28', 'Y', 'Rahul More', '2', '1', '08', '23', '28', '2028-08-23', '28-08-23', NULL, '2', '2', NULL, '11:08:00', '11:08', '2', '3', NULL, '1'),
(3, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(4, '2023-09-03', 'Y', 'Rahul More', '2', '2', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(5, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(6, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(7, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(8, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(9, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(10, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(11, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(12, '2023-09-03', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL),
(13, '2023-09-04', 'Y', 'Rahul More', '2', '1', '09', '23', '04', '2004-09-23', '04-09-23', NULL, '2', '1', NULL, '12:09:00', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `box_id` int(11) NOT NULL,
  `box_no` varchar(255) DEFAULT NULL,
  `rack_no` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`box_id`, `box_no`, `rack_no`, `updatedat`, `updatedby`) VALUES
(1, 'box 1', 'Rack No 1', '13-10-23', '1'),
(2, 'BOX-1', 'RACK-1', '13-01-24', '1'),
(3, 'BOX-2', 'RACK-1', '13-01-24', '1'),
(4, 'BOX-A1', 'Rack no 11', '24-01-24', '1'),
(5, 'box-12', 'Rack no 12', '28-02-24', '1'),
(6, 'box-A3', 'Rack no 11', '28-02-24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `building_id` int(11) NOT NULL,
  `building_name` varchar(255) DEFAULT NULL,
  `building_project_id` varchar(255) DEFAULT NULL,
  `floor_plan` varchar(1000) DEFAULT NULL,
  `working_drawing` varchar(1000) DEFAULT NULL,
  `plumbing_drawing` varchar(1000) DEFAULT NULL,
  `structural_drawing` varchar(1000) DEFAULT NULL,
  `electrical_drawing` varchar(1000) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `building_name`, `building_project_id`, `floor_plan`, `working_drawing`, `plumbing_drawing`, `structural_drawing`, `electrical_drawing`, `createdat`, `updatedat`, `createdby`, `updatedby`) VALUES
(1, 'building no 1', '1', 'floor-plan-design.png', 'workingdrawing.jpeg', 'plumbindrow.jpeg', 'stdraw.jpeg', 'elec.jpeg', NULL, '09-08-23', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `name`, `address`, `phoneno`) VALUES
(1, 'Gajanan Auto ', 'Malegoin Camp-423203', '9881582062');

-- --------------------------------------------------------

--
-- Table structure for table `contractor`
--

CREATE TABLE `contractor` (
  `contractor_id` int(11) NOT NULL,
  `contractor_name` varchar(255) DEFAULT NULL,
  `contractor_mno` varchar(255) DEFAULT NULL,
  `contractor_pan` varchar(255) DEFAULT NULL,
  `contractor_charge` varchar(255) DEFAULT NULL,
  `contractor_meason` varchar(255) DEFAULT NULL,
  `contractor_helper` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contractor`
--

INSERT INTO `contractor` (`contractor_id`, `contractor_name`, `contractor_mno`, `contractor_pan`, `contractor_charge`, `contractor_meason`, `contractor_helper`, `createdat`, `updatedat`, `createdby`, `updatedby`) VALUES
(1, 'contractor no 1', '7588555845', 'asdfre34', '20', '800', '500', NULL, '10-08-23', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_mob_no` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_pan` varchar(255) DEFAULT NULL,
  `customer_project_id` varchar(255) DEFAULT NULL,
  `customer_building_id` varchar(255) DEFAULT NULL,
  `customer_unit_id` varchar(255) DEFAULT NULL,
  `customer_final_cost` varchar(255) DEFAULT NULL,
  `deliver_date` varchar(255) DEFAULT NULL,
  `booking_date` varchar(255) DEFAULT NULL,
  `reference_name` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_mob_no`, `customer_address`, `customer_email`, `customer_pan`, `customer_project_id`, `customer_building_id`, `customer_unit_id`, `customer_final_cost`, `deliver_date`, `booking_date`, `reference_name`, `createdat`, `updatedat`, `createdby`, `updatedby`) VALUES
(1, 'abhijeet', '7588555845', 'malegaon', 'ab@gmail.com', 'AXBPB5112e', '1', '1', '1', '122', 'a', 's', 'sds', NULL, '24-08-23', NULL, '1'),
(2, 'abhi', '7588', 'abhi', 'as', 'asd', '1', '1', '1', '12', '1', '1', 'e', NULL, '24-08-23', NULL, '1'),
(3, 'Gayatri', '8806598660', 'Nashik', 'gayatri@gmail.com', 'AGFG112', '1', 'Select', 'Select', '74646', '2022-02-08', '2021-11-03', 'Abhi', NULL, '25-08-23', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment_entry`
--

CREATE TABLE `customer_payment_entry` (
  `customer_payment_id` int(11) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `customer_total_amount` varchar(255) DEFAULT NULL,
  `customer_paid_amount` varchar(255) DEFAULT NULL,
  `customer_balance_amount` varchar(255) DEFAULT NULL,
  `customer_online_amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_payment_entry`
--

INSERT INTO `customer_payment_entry` (`customer_payment_id`, `customer_id`, `customer_total_amount`, `customer_paid_amount`, `customer_balance_amount`, `customer_online_amount`) VALUES
(86, '1', '13778.42', '12414.42', '1800', NULL),
(88, '4', '3169', '4169', '40', NULL),
(89, '14', '6744.96', '6744.96', '4732.96', NULL),
(90, '16', '1535.00', '1000', '1535.00', NULL),
(91, 'add-cust', '218.00', '218.00', '218.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dropdown`
--

CREATE TABLE `dropdown` (
  `dropdownId` int(11) NOT NULL,
  `dropdownKey` varchar(20) DEFAULT NULL,
  `dropdownDesc1` varchar(255) DEFAULT NULL,
  `dropdownDesc2` varchar(45) DEFAULT NULL,
  `dropdownDesc3` varchar(45) DEFAULT NULL,
  `editable` varchar(1) DEFAULT '1',
  `is_active` binary(1) DEFAULT 'Y',
  `updateTime` varchar(20) DEFAULT NULL,
  `updatedBy` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `dropdown`
--

INSERT INTO `dropdown` (`dropdownId`, `dropdownKey`, `dropdownDesc1`, `dropdownDesc2`, `dropdownDesc3`, `editable`, `is_active`, `updateTime`, `updatedBy`) VALUES
(1, 'BRAND', 'HONDA', 'HONDA', 'HONDA', '1', 0x59, '15-10-23 11:36:41', '2'),
(2, 'BRAND', 'veedol', 'veedol', 'veedol', '1', 0x59, '15-10-23 14:32:08', '2'),
(3, 'BRAND', 'Mobil', 'Mobil', 'Mobil', '1', 0x59, '15-10-23 14:43:56', '2'),
(5, 'BRAND', 'Valvoline', 'Valvoline', 'Valvoline', '1', 0x59, '15-10-23 14:49:19', '2'),
(6, 'BRAND', 'PHILIPS', 'PHILIPS', 'PHILIPS', '1', 0x59, '15-10-23 14:59:47', '2'),
(7, 'BRAND', 'BOSCH', 'BOSCH', 'BOSCH', '1', 0x59, '15-10-23 15:06:09', '2'),
(8, 'BRAND', 'Exide', 'Exide', 'Exide', '1', 0x59, '15-10-23 15:36:05', '2'),
(9, 'BRAND', 'A.R', 'A.R', 'A.R', '1', 0x59, '15-10-23 15:54:19', '2'),
(10, 'BRAND', 'FAG bearings', 'FAG bearings', 'FAG bearings', '1', 0x59, '15-10-23 15:55:27', '2'),
(11, 'BRAND', 'Uno Minda', 'Uno Minda', 'Uno Minda', '1', 0x59, '16-10-23 16:15:01', ''),
(12, 'RACK', 'Rack no 11', 'Rack no 11', '', '1', 0x59, '13-10-23 19:05:07', '1'),
(13, 'RACK', 'Rack no 12', 'Rack no 12', '', '1', 0x59, '13-10-23 19:05:07', '1'),
(14, 'BRAND', 'Hero', 'Hero', 'Hero', '1', 0x59, '15-10-23 14:27:37', '2'),
(15, 'BRAND', 'ROOTS', 'ROOTS', 'ROOTS', '1', 0x59, '15-10-23 15:50:50', '2'),
(16, 'BRAND', 'Wender', 'Wender', 'Wender', '1', 0x59, '23-10-23 12:41:40', '2'),
(17, 'BRAND', 'Plastic', 'Plastic', 'Plastic', '1', 0x59, '23-10-23 13:25:10', '2'),
(18, 'BRAND', 'Fiem', 'Fiem', 'Fiem', '1', 0x59, '23-10-23 14:19:39', '2'),
(19, 'BRAND', 'BAJAJ', 'BAJAJ', 'BAJAJ', '1', 0x59, '29-10-23 13:07:21', '2'),
(20, 'BRAND', 'STEEL BIRD', 'STEEL BIRD', 'STEEL BIRD', '1', 0x59, '29-10-23 13:28:58', '2'),
(21, 'BRAND', 'ROYAL EINFIELD', 'ROYAL EINFIELD', 'ROYAL EINFIELD', '1', 0x59, '29-10-23 13:56:01', '2'),
(22, 'RACK', 'RACK-1', 'RACK-1', '', '1', 0x59, '13-01-24 11:03:08', '1'),
(23, 'BRAND', 'Philips', 'Oswal', 'wipro', '1', 0x59, '28-02-24 12:23:34', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `position/title` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `reporting_managers_name` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `salary_details` varchar(255) DEFAULT NULL,
  `emergency_contact_name` varchar(255) DEFAULT NULL,
  `emergency_contact_number` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `position_held` varchar(255) DEFAULT NULL,
  `degree/diploma/certificate` varchar(255) DEFAULT NULL,
  `year_of_graduation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_proof` varchar(255) DEFAULT NULL,
  `address_proof` varchar(255) DEFAULT NULL,
  `bank_account_details_for_salary_deposit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `fitter`
--

CREATE TABLE `fitter` (
  `fitter_id` int(11) NOT NULL,
  `fitter_name` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `emergency_contact_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitter`
--

INSERT INTO `fitter` (`fitter_id`, `fitter_name`, `percentage`, `address`, `emergency_contact_no`, `mobile_no`) VALUES
(1, 'Abijeet Borase', NULL, 'Pune', '4335666', '1235456553'),
(2, 'Prashant Shelar', NULL, 'Maleaon', '98812345461', '9881582062'),
(3, 'Pankaj Dandan', NULL, 'Nashik', '474646', '3434443433'),
(4, 'manish', NULL, 'Mumbai', '987241258', '845217525'),
(5, '@bdsndbs', NULL, 'nashil', '4sds4fs6f', '44466666sffdf'),
(6, 'TEST', NULL, 'ddfd', 'sdsdsdsd', '343434'),
(7, 'TEST22444', NULL, 'erer', '3333333333', '2323232322'),
(8, 'ww', NULL, 'TEST', '2311', '2222'),
(9, 'TEST', NULL, '223', '223', '2323'),
(10, 'TEST', NULL, 'TESRT', '3332322222', '1111322333'),
(11, 'TESt123', NULL, 'TEST', '1232222222', '2321232222'),
(12, 'advik', NULL, 'malegaon', '2225741254', '8455221342');

-- --------------------------------------------------------

--
-- Table structure for table `fitter_payment_entry`
--

CREATE TABLE `fitter_payment_entry` (
  `fitter_payment_entry_id` int(11) NOT NULL,
  `entry_fitter_id` varchar(255) DEFAULT NULL,
  `fitter_total_amount` varchar(255) DEFAULT NULL,
  `fitter_balance_amount` varchar(255) DEFAULT NULL,
  `fitter_paid_amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitter_payment_entry`
--

INSERT INTO `fitter_payment_entry` (`fitter_payment_entry_id`, `entry_fitter_id`, `fitter_total_amount`, `fitter_balance_amount`, `fitter_paid_amount`) VALUES
(6, '1', '5616.596', '500', '500'),
(7, '3', '845.056', '0', '0'),
(8, '4', '790.082', '0', '0'),
(9, '2', '181.3', '0', '0'),
(10, '6', '105', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `fitter_payment_history`
--

CREATE TABLE `fitter_payment_history` (
  `fitter_history_id` int(11) NOT NULL,
  `fitter_id` varchar(255) DEFAULT NULL,
  `fitter_name` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `stock_out_id` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `fitter_amount` varchar(255) DEFAULT NULL,
  `fitter_percentage` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitter_payment_history`
--

INSERT INTO `fitter_payment_history` (`fitter_history_id`, `fitter_id`, `fitter_name`, `customer_id`, `stock_out_id`, `total_amount`, `fitter_amount`, `fitter_percentage`, `date`) VALUES
(40, '1', 'Abijeet Borase', '1', '74', '2849', '284.9', NULL, NULL),
(41, '1', 'Abijeet Borase', '9', '73', '2000', '200', NULL, NULL),
(43, '1', 'Abijeet Borase', '14', '75', '10000', '1000', NULL, NULL),
(44, '1', 'Abijeet Borase', '15', '76', '2000', '200', NULL, NULL),
(45, '1', 'Abijeet Borase', '16', '77', '6000', '600', NULL, NULL),
(46, '1', 'Abijeet Borase', '17', '78', '900', '90', NULL, NULL),
(47, '1', 'Abijeet Borase', '18', '79', '1020', '102', NULL, NULL),
(54, '1', 'Abijeet Borase', '19', '80', '1000', '100', NULL, NULL),
(57, '1', 'Abijeet Borase', '1', '81', '123.31', '12.331', NULL, NULL),
(61, '1', 'Abijeet Borase', '4', '82', '9.1', '0.91', NULL, NULL),
(66, '1', 'Abijeet Borase', '4', '84', '1.21', '0.121', NULL, NULL),
(67, '1', 'Abijeet Borase', '4', '85', '11', '1.1', NULL, NULL),
(68, '1', 'Abijeet Borase', '1', '86', '37.84', '3.784', NULL, NULL),
(69, '1', 'Abijeet Borase', '1', '87', '0.01', '0.001', NULL, NULL),
(70, '1', 'Abijeet Borase', '1', '88', '0.01', '0.001', NULL, NULL),
(71, '1', 'Abijeet Borase', '1', '89', '6231.00', '623.1', NULL, NULL),
(72, '1', 'Abijeet Borase', '1', '90', '100.00', '10', NULL, NULL),
(73, '1', 'Abijeet Borase', '1', '91', '98.00', '9.8', NULL, NULL),
(74, '1', 'Abijeet Borase', '1', '92', '25705.00', '2570.5', NULL, NULL),
(75, '1', 'Abijeet Borase', '1', '93', '10.99', '1.099', NULL, NULL),
(76, '1', 'Abijeet Borase', '1', '94', '0.09', '0.009', NULL, NULL),
(77, '1', 'Abijeet Borase', '1', '95', '0.09', '0.009', NULL, NULL),
(78, '1', 'Abijeet Borase', '1', '96', '0.09', '0.009', NULL, NULL),
(79, '1', 'Abijeet Borase', '4', '97', '0.09', '0.009', NULL, NULL),
(80, '1', 'Abijeet Borase', '1', '98', '0.09', '0.009', NULL, NULL),
(81, '1', 'Abijeet Borase', '1', '99', '10.99', '1.099', NULL, NULL),
(82, '1', 'Abijeet Borase', '1', '100', '120.89', '12.089', NULL, NULL),
(83, '1', 'Abijeet Borase', '1', '101', '0.09', '0.009', NULL, NULL),
(84, '1', 'Abijeet Borase', '1', '102', '10.99', '1.099', NULL, NULL),
(92, '1', 'Abijeet Borase', '', '104', '207.00', '20.7', NULL, NULL),
(93, '1', 'Abijeet Borase', '', '103', '426.00', '42.6', NULL, NULL),
(94, '1', 'Abijeet Borase', '1', '105', '0.09', '0.009', NULL, NULL),
(95, '1', 'Abijeet Borase', '1', '110', '209.46', '20.946', NULL, NULL),
(96, '1', 'Abijeet Borase', '1', '111', '209.46', '20.946', NULL, NULL),
(97, '1', 'Abijeet Borase', '1', '112', '157.86', '15.786', NULL, NULL),
(98, '1', 'Abijeet Borase', '1', '113', '157.86', '15.786', NULL, NULL),
(99, '1', 'Abijeet Borase', '1', '114', '0.99', '0.099', NULL, NULL),
(102, '1', 'Abijeet Borase', '', '117', '10.89', '1.089', NULL, NULL),
(103, '1', 'Abijeet Borase', '', '116', '145.86', '14.586', NULL, NULL),
(106, '1', 'Abijeet Borase', '', '115', '66.30', '6.63', NULL, NULL),
(107, '1', 'Abijeet Borase', '9', '118', '0.09', '0.009', NULL, NULL),
(108, '1', 'Abijeet Borase', '1', '119', '0.09', '0.009', NULL, NULL),
(109, '1', 'Abijeet Borase', '1', '122', '74.30', '7.43', NULL, NULL),
(110, '1', 'Abijeet Borase', '1', '123', '65.30', '6.53', NULL, NULL),
(111, '1', 'Abijeet Borase', '1', '124', '10.99', '1.099', NULL, NULL),
(112, '1', 'Abijeet Borase', '1', '125', '0.09', '0.009', NULL, NULL),
(113, '1', 'Abijeet Borase', '1', '126', '10.99', '1.099', NULL, NULL),
(114, '1', 'Abijeet Borase', '1', '127', '82.93', '8.293', NULL, NULL),
(115, '1', 'Abijeet Borase', '14', '128', '21.98', '2.198', NULL, NULL),
(118, '1', 'Abijeet Borase', '', '130', '99.00', '9.9', NULL, NULL),
(120, '1', 'Abijeet Borase', '', '131', '99.00', '9.9', NULL, NULL),
(123, '1', 'Abijeet Borase', '', '132', '545', '54.5', NULL, NULL),
(126, '1', 'Abijeet Borase', '', '133', '472.96', '47.296', NULL, NULL),
(128, '1', 'Abijeet Borase', '', '134', '461.96', '46.196', NULL, NULL),
(129, '1', 'Abijeet Borase', '', '129', '0.09', '0.009', NULL, NULL),
(144, '1', 'Abijeet Borase', '1', '135', '45.96', '4.596', NULL, NULL),
(145, '1', 'Abijeet Borase', '1', '136', '104.91', '10.491', NULL, NULL),
(146, '1', 'Abijeet Borase', '1', '137', '254.96', '25.496', NULL, NULL),
(147, '1', 'Abijeet Borase', '1', '138', '336.00', '33.6', NULL, NULL),
(148, '1', 'Abijeet Borase', '1', '139', '2080.00', '208', NULL, NULL),
(149, '1', 'Abijeet Borase', '1', '140', '2416.00', '241.6', NULL, NULL),
(151, '3', 'Pankaj Dandan', '4', '142', '990.00', '99', NULL, '2024-02-27 '),
(152, '4', 'manish', '1', '143', '99.00', '9.9', NULL, '2024-02-28 '),
(153, '4', 'manish', '1', '144', '1671.86', '167.186', NULL, '2024-02-28 '),
(154, '3', 'Pankaj Dandan', '1', '145', '5301.56', '530.156', NULL, '2024-02-28 '),
(155, '4', 'manish', '14', '146', '4732.96', '473.296', NULL, '2024-02-28 '),
(156, '2', 'Prashant Shelar', '16', '147', '535.00', '53.5', NULL, '2024-02-28 '),
(157, '1', 'Abijeet Borase', '4', '148', '99.00', '9.9', NULL, '2024-02-28 '),
(158, '1', 'Abijeet Borase', '1', '149', '862.00', '86.2', NULL, '2024-02-28 '),
(159, '4', 'manish', '1', '150', '862.00', '86.2', NULL, '2024-02-28 '),
(160, '2', 'Prashant Shelar', '14', '151', '862.00', '86.2', NULL, '2024-02-28 '),
(161, '2', 'Prashant Shelar', '4', '152', '416.00', '41.6', NULL, '2024-02-28 '),
(162, '3', 'Pankaj Dandan', '4', '153', '515.00', '51.5', NULL, '2024-02-28 '),
(163, '3', 'Pankaj Dandan', '14', '154', '100.00', '10', NULL, '2024-02-28 '),
(164, '3', 'Pankaj Dandan', '4', '155', '1000.00', '100', NULL, '2024-02-28 '),
(165, '6', 'TEST', '14', '156', '1050.00', '105', NULL, '2024-02-28 '),
(166, '3', 'Pankaj Dandan', '4', '157', '99.00', '9.9', NULL, '2024-02-28 '),
(167, '4', 'manish', '1', '158', '535.00', '53.5', NULL, '2024-02-29 '),
(168, '1', 'Abijeet Borase', 'add-cust', '159', '118.00', '11.8', NULL, '2024-04-23 ');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_description` varchar(255) DEFAULT NULL,
  `item_dimenssion` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL,
  `item_Brand` varchar(255) DEFAULT NULL,
  `item_part_no` varchar(255) DEFAULT NULL,
  `gst` varchar(255) DEFAULT NULL,
  `rack_no` varchar(255) DEFAULT NULL,
  `box_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_description`, `item_dimenssion`, `createdat`, `updatedat`, `createdby`, `updatedby`, `item_Brand`, `item_part_no`, `gst`, `rack_no`, `box_no`) VALUES
(3, 'main switch', 'Pleasure 4 PIN', '', NULL, '14-10-23', NULL, '2', 'Hero', '350101AALH00S', '9', 'Rack 1', 'Box 1'),
(4, 'main switch', '2 PIN', '', NULL, '14-10-23', NULL, '2', 'Hero', '35100AADH00S', '9', 'Rack 1', 'Box 1'),
(5, 'HEAD LIGHT STAY', 'PASSION PRO', '', NULL, '14-10-23', NULL, '2', 'Hero', '61311KWA830S', '9', 'Rack 1', 'Box 1'),
(6, 'main switch', 'SPL+ 4 PIN', '', NULL, '14-10-23', NULL, '2', 'Hero', '35100AAEH00S', '9', 'Rack 1', 'Box 1'),
(7, 'MAIN SWITCH KIT', 'Unicorn', '', NULL, '14-10-23', NULL, '2', 'HONDA', '35010KSP861', '9', 'Rack 1', 'Box 1'),
(8, 'main switch', 'ACTIVA', '', NULL, '14-10-23', NULL, '2', 'HONDA', '35010KPL842', '9', 'Rack 1', 'Box 1'),
(9, 'Clatch Plate Set', 'UNICORN', '', NULL, '14-10-23', NULL, '2', 'HONDA', '0222AKSP910', '9', 'Rack 1', 'Box 1'),
(10, 'Clatch Plate Set', 'Shine', '', NULL, '14-10-23', NULL, '2', 'HONDA', '0222BKTE910', '9', 'Rack 1', 'Box 1'),
(11, 'Clatch Plate Set', 'Dream Yuga', '', NULL, '23-11-23', NULL, '1', 'HONDA', '22201K55602', '9', 'Rack 1', 'Box 1'),
(12, 'Chain Spoket', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '02380KSP861', '9', 'Rack 1', 'Box 1'),
(13, 'Chain Spoket', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '02380KTEP11', '9', 'Rack 1', 'Box 1'),
(14, 'Chain Tensioner', 'All Model Shine Spl Pro', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14520KWF940', '9', 'Rack 1', 'Box 1'),
(15, 'Petrol Filter', 'ACTIVA', '', NULL, '15-10-23', NULL, '2', 'HONDA', '16707KOLD01', '9', 'Rack 1', 'Box 1'),
(16, 'Petrol Filter', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '16707KOYD01', '9', 'Rack 1', 'Box 1'),
(17, 'Air Filter', 'ACTIVA', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KPL841', '9', 'Rack 1', 'Box 1'),
(18, 'Clutch Cable', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '22870KTED01', '9', 'Rack 1', 'Box 1'),
(19, 'Handel Bar Switch', 'Unicorn ', 'LH.Side', NULL, '15-10-23', NULL, '2', 'HONDA', '35150KSP920', '9', 'Rack 1', 'Box 1'),
(20, 'Handel Bar Switch', 'Unicorn', 'Bs3 Bs4 LH.Side', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KSP920', '9', 'Rack 1', 'Box 1'),
(21, 'Clutch Switch', 'All Model Shine Spl Pro', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35330KEJ900', '9', 'Rack 1', 'Box 1'),
(22, 'Seat Lock Cable', 'ACTIVA', '', NULL, '15-10-23', NULL, '2', 'HONDA', '77240KWP900', '9', 'Rack 1', 'Box 1'),
(23, 'Block Pistan Kit', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '02110KTEA02', '9', 'Rack 1', 'Box 1'),
(24, 'Valve kit', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '01471K14900', '9', 'Rack 1', 'Box 1'),
(25, 'Valve kit', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '01471KSP900', '9', 'Rack 1', 'Box 1'),
(26, 'Chain Spoket', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '02380K14900', '9', 'Rack 1', 'Box 1'),
(27, 'Link Bush Kit', 'ACTIVA', '', NULL, '15-10-23', NULL, '2', 'HONDA', '05131KZK901', '9', 'Rack 1', 'Box 1'),
(28, 'Timeing Chain', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14401KSP860', '9', 'Rack 1', 'Box 1'),
(29, 'Timeing Chain', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14401KTE910', '9', 'Rack 1', 'Box 1'),
(30, 'Timeing Chain', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14401KTE910', '9', 'Rack 1', 'Box 1'),
(31, 'Timeing Chain', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14401KTE910', '9', 'Rack 1', 'Box 1'),
(32, 'Timeing Chain', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14401KWS901', '9', 'Rack 1', 'Box 1'),
(33, 'Timeing Chain', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14401KWS901', '9', 'Rack 1', 'Box 1'),
(34, 'Timeing Chain', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '14401KWS901', '9', 'Rack 1', 'Box 1'),
(35, 'Air Filter', 'ACTIVA', '3G', NULL, '15-10-23', NULL, '2', 'HONDA', '17210KVTD00', '9', 'Rack 1', 'Box 1'),
(36, 'Air Filter', 'ACTIVA', '3G', NULL, '15-10-23', NULL, '2', 'HONDA', '17210KVTD00', '9', 'Rack 1', 'Box 1'),
(37, 'Air Filter', 'ACTIVA', '3G', NULL, '15-10-23', NULL, '2', 'HONDA', '17210KVTD00', '9', 'Rack 1', 'Box 1'),
(38, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(39, 'Air Filter', 'Unicorn 160', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K38901', '9', 'Rack 1', 'Box 1'),
(40, 'Air Filter', 'Unicorn 160', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K38901', '9', 'Rack 1', 'Box 1'),
(41, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(42, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(43, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(44, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(45, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(46, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(47, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(48, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(49, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(50, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(51, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(52, 'Air Filter', 'Dream Yuga', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211K14901', '9', 'Rack 1', 'Box 1'),
(53, 'Air Filter', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KSPB00', '9', 'Rack 1', 'Box 1'),
(54, 'Air Filter', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KTE651', '9', 'Rack 1', 'Box 1'),
(55, 'Air Filter', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KTE651', '9', 'Rack 1', 'Box 1'),
(56, 'Air Filter', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KTE651', '9', 'Rack 1', 'Box 1'),
(57, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(58, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(59, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(60, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(61, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(62, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(63, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(64, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(65, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(66, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(67, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(68, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(69, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(70, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(71, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(72, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(73, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(74, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(75, 'Air Filter', 'TWISTER', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17211KWS900', '9', 'Rack 1', 'Box 1'),
(76, 'Air Filter', 'Shine BS6', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17220KOND00', '9', 'Rack 1', 'Box 1'),
(77, 'Choke Cable', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17950KSP900', '9', 'Rack 1', 'Box 1'),
(78, 'Choke Cable', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '17950KTE910', '9', 'Rack 1', 'Box 1'),
(79, 'Clutch Cable', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '22870KSP901', '9', 'Rack 1', 'Box 1'),
(80, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(81, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(82, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(83, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(84, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(85, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(86, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(87, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(88, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(89, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(90, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(91, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(92, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(93, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(94, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(95, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(96, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(97, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(98, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(99, 'Handel Bar Switch LH', 'Shine', '', NULL, '16-10-23', NULL, '', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(100, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(101, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(102, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(103, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(104, 'Handel Bar Switch LH', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '35200KTE741', '9', 'Rack 1', 'Box 1'),
(105, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(106, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(107, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(108, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(109, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(110, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(111, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(112, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(113, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(114, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(115, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(116, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(117, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(118, 'Speedo Cable ', 'Unicorn', '', NULL, '15-10-23', NULL, '2', 'HONDA', '44830KSP860', '9', 'Rack 1', 'Box 1'),
(119, 'Front Breke Cable', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '45450KTE910', '9', 'Rack 1', 'Box 1'),
(120, 'Front Breke Cable', 'Shine', '', NULL, '15-10-23', NULL, '2', 'HONDA', '45450KTE910', '9', 'Rack 1', 'Box 1'),
(121, 'TAKE OF 4T ULTA', 'BS6', '1L', NULL, '15-10-23', NULL, '2', 'veedol', '05W30', '9', 'Rack 1', 'Box 1'),
(122, 'TAKE OF 4T PREMIUM', 'SN', '900ML', NULL, '15-10-23', NULL, '2', 'veedol', '10W30 ', '9', 'Rack 1', 'Box 1'),
(123, 'FRONT FROK OIL', '', '175 ML', NULL, '15-10-23', NULL, '2', 'veedol', '27101980', '9', 'Rack 1', 'Box 1'),
(124, 'FRONT FROK OIL', '', '175 ML', NULL, '15-10-23', NULL, '2', 'veedol', '27101980', '9', 'Rack 1', 'Box 1'),
(125, 'AP 3 SUPREME GREASE', 'TUBE', '100 GM', NULL, '15-10-23', NULL, '2', 'veedol', '27101990', '9', 'Rack 1', 'Box 1'),
(126, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(127, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(128, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(129, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(130, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(131, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(132, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(133, 'SCOOTER GEAR OIL', 'GL5', '120 ML', NULL, '15-10-23', NULL, '2', 'veedol', '80W90', '9', 'Rack 1', 'Box 1'),
(134, 'M-SUP MOTO', 'SN', '900 ML', NULL, '15-10-23', NULL, '2', 'Mobil', '20W40', '9', 'Rack 1', 'Box 1'),
(135, 'M-SUP MOTO', 'SN', '800 ML', NULL, '15-10-23', NULL, '2', 'Mobil', '10W30 ', '9', 'Rack 1', 'Box 1'),
(136, 'Champ 4T', 'SN', '1 L', NULL, '15-10-23', NULL, '2', 'Valvoline', '20W40', '9', 'Rack 1', 'Box 1'),
(137, 'Champ 4T', 'SN', '900 ML', NULL, '15-10-23', NULL, '2', 'Valvoline', '20W40', '9', 'Rack 1', 'Box 1'),
(138, 'HEAD LIGHT', '12 V 35/35', '12 V 35/35', NULL, '15-10-23', NULL, '2', 'PHILIPS', '12636C1', '9', 'Rack 1', 'Box 1'),
(139, 'Spark Plug', '', '0.7mm', NULL, '15-10-23', NULL, '2', 'BOSCH', 'Plug', '9', 'Rack 1', 'Box 1'),
(140, 'Spark Plug', 'XL LUNA', '0.5mm', NULL, '15-10-23', NULL, '2', 'BOSCH', 'Plug', '9', 'Rack 1', 'Box 1'),
(141, 'Spark Plug', 'SPL+', '0.6MM', NULL, '15-10-23', NULL, '2', 'BOSCH', 'Plug', '9', 'Rack 1', 'Box 1'),
(142, 'Spark Plug', 'SPL+', '0.6MM', NULL, '15-10-23', NULL, '2', 'BOSCH', 'Plug', '9', 'Rack 1', 'Box 1'),
(143, 'Clatch Plate Set', 'SPL+', '4', NULL, '15-10-23', NULL, '2', 'BOSCH', 'Set', '9', 'Rack 1', 'Box 1'),
(144, 'Clatch Plate Set', 'SPL+', '4', NULL, '15-10-23', NULL, '2', 'BOSCH', 'Set', '9', 'Rack 1', 'Box 1'),
(145, 'Breke oil', '', '250 ML', NULL, '15-10-23', NULL, '2', 'BOSCH', 'Dot 4', '9', 'Rack 1', 'Box 1'),
(146, 'Breke oil', '', '250 ML', NULL, '15-10-23', NULL, '2', 'BOSCH', 'DOT 3', '9', 'Rack 1', 'Box 1'),
(147, 'Breke oil', '', '100 ML', NULL, '15-10-23', NULL, '2', 'BOSCH', 'DOT 3', '9', 'Rack 1', 'Box 1'),
(148, '2.5 LB', '', '', NULL, '15-10-23', NULL, '2', 'Exide', '2.5 LB', '9', 'Rack 1', 'Box 1'),
(149, 'TZ5', '', '', NULL, '15-10-23', NULL, '2', 'Exide', 'TZ5', '9', 'Rack 1', 'Box 1'),
(150, 'TZ4', '', '', NULL, '15-10-23', NULL, '2', 'Exide', 'TZ5', '9', 'Rack 1', 'Box 1'),
(151, '4 LB ', '', '', NULL, '15-10-23', NULL, '2', 'Exide', '4 LB ', '9', 'Rack 1', 'Box 1'),
(152, 'HORN BOTTON ', 'ACTIVA', '', NULL, '15-10-23', NULL, '2', 'ROOTS', 'HORN ', '9', 'Rack 1', 'Box 1'),
(153, 'Self Start Botton', 'ACTIVA', '', NULL, '16-10-23', NULL, '', 'ROOTS', 'Botton', '9', 'Rack 1', 'Box 1'),
(154, 'Head Light Botton', 'ACTIVA', '', NULL, '16-10-23', NULL, '', 'ROOTS', 'Botton', '9', 'Rack 1', 'Box 1'),
(155, 'Dipper botton', 'ACTIVA', '', NULL, '16-10-23', NULL, '', 'ROOTS', 'Botton', '9', 'Rack 1', 'Box 1'),
(156, 'indicator Botton', 'ACTIVA', '', NULL, '16-10-23', NULL, '', 'ROOTS', 'Botton', '9', 'Rack 1', 'Box 1'),
(157, 'Valve kit', 'SPL+', '', NULL, '16-10-23', NULL, '', 'Hero', '24K150LS', '9', 'Rack 1', 'Box 1'),
(158, 'Valve Oilseel', 'SPL+', '', NULL, '16-10-23', NULL, '', 'Hero', '12209GB4685S', '9', 'Rack 1', 'Box 1'),
(159, 'Pistan Ring', 'SPL+', '', NULL, '16-10-23', NULL, '', 'Hero', '13011KCC305LS', '9', 'Rack 1', 'Box 1'),
(160, 'Pistan Ring', 'HF Dilux', '', NULL, '16-10-23', NULL, '', 'Hero', '13011AAF00099S', '9', 'Rack 1', 'Box 1'),
(161, 'Pistan Ring', 'Sup Spl', '', NULL, '16-10-23', NULL, '', 'Hero', '13011KTC305S', '9', 'Rack 1', 'Box 1'),
(162, 'Pistan Ring', 'Shine', '', NULL, '16-10-23', NULL, '', 'HONDA', '13011KRM305', '9', 'Rack 1', 'Box 1'),
(163, 'Tappet Screw', 'SPL+', '', NULL, '16-10-23', NULL, '2', 'Hero', 'K91902HF100DS', '9', 'Rack 1', 'Box 1'),
(164, 'Bush Kick Spindle', 'Pleasure ', '', NULL, '16-10-23', NULL, '2', 'Hero', '28253KPL900S', '9', 'Rack 1', 'Box 1'),
(165, 'Setting Screw', 'Shine', '', NULL, '16-10-23', NULL, '2', 'HONDA', '16016KTE911', '9', 'Rack 1', 'Box 1'),
(166, 'Indicator Buzzer', '', '', NULL, '16-10-23', NULL, '2', 'Uno Minda', 'Buzzer', '9', 'Rack 1', 'Box 1'),
(167, 'Indicator Flasher', '', '', NULL, '16-10-23', NULL, '2', 'Uno Minda', '850036', '9', 'Rack 1', 'Box 1'),
(168, 'Horn', '', '', NULL, '16-10-23', NULL, '2', 'Uno Minda', '8202M', '9', 'Rack 1', 'Box 1'),
(169, 'Self Start Botton', 'spl pro', '', NULL, '16-10-23', NULL, '2', 'Uno Minda', 'SW-0686C', '9', 'Rack 1', 'Box 1'),
(170, 'Engine Oil ', '', '900 ML', NULL, '17-10-23', NULL, '2', 'HONDA', '10w30', '9', 'Rack 1', 'Box 1'),
(171, 'Engine Oil ', '', '1 L', NULL, '17-10-23', NULL, '2', 'HONDA', '10W30 ', '9', 'Rack 1', 'Box 1'),
(172, 'Ferring Glass', '', '', NULL, '23-10-23', NULL, '2', 'Wender', 'Dis-100', '9', 'Rack 1', 'Box 1'),
(173, 'Ferring Glass', '', '', NULL, '23-10-23', NULL, '2', 'Wender', 'PASSION PRO', '9', 'Rack 1', 'Box 1'),
(174, 'Ferring Glass', '', '', NULL, '23-10-23', NULL, '2', 'Wender', 'Sup Spl', '9', 'Rack 1', 'Box 1'),
(175, 'Ferring Glass', '', '', NULL, '23-10-23', NULL, '2', 'Wender', 'Platina', '9', 'Rack 1', 'Box 1'),
(176, 'Ferring ', 'PASSION PRO', 'Black Silver', NULL, '23-10-23', NULL, '2', 'Plastic', 'digital metter', '9', 'Rack 1', 'Box 1'),
(177, 'Ferring ', 'SPL+', 'Black Silver', NULL, '23-10-23', NULL, '2', 'Plastic', 'spl + ', '9', 'Rack 1', 'Box 1'),
(178, 'Ferring ', 'SPL+', 'black', NULL, '23-10-23', NULL, '2', 'Plastic', 'spl + ', '9', 'Rack 1', 'Box 1'),
(179, 'Ferring ', 'SPL+', 'Black Blue', NULL, '23-10-23', NULL, '2', 'Plastic', 'spl + ', '9', 'Rack 1', 'Box 1'),
(180, 'Ferring ', '', 'Black Silver ', NULL, '23-10-23', NULL, '2', 'Plastic', 'PASSION PRO', '9', 'Rack 1', 'Box 1'),
(181, 'FR Madgard', '', 'black', NULL, '23-10-23', NULL, '2', 'Plastic', 'spl + ', '9', 'Rack 1', 'Box 1'),
(182, 'FR Madgard', '', 'black', NULL, '23-10-23', NULL, '2', 'Plastic', 'HF-Dilux', '9', 'Rack 1', 'Box 1'),
(183, 'FR Madgard', '', 'black', NULL, '23-10-23', NULL, '2', 'Plastic', 'PASSION PRO', '9', 'Rack 1', 'Box 1'),
(184, 'Ferring ', '', 'Black Silver', NULL, '23-10-23', NULL, '2', 'Plastic', 'HF-Dilux', '9', 'Rack 1', 'Box 1'),
(185, 'Ferring ', '', 'Black Red', NULL, '23-10-23', NULL, '2', 'Plastic', 'HF-Dilux', '9', 'Rack 1', 'Box 1'),
(186, 'Merrior', '', 'RH Side', NULL, '23-10-23', NULL, '2', 'Fiem', 'spl + ', '9', 'Rack 1', 'Box 1'),
(187, 'Merrior', '', 'LH.Side', NULL, '23-10-23', NULL, '2', 'Fiem', 'spl + ', '9', 'Rack 1', 'Box 1'),
(188, 'Merrior', '', 'LH.Side', NULL, '23-10-23', NULL, '2', 'Fiem', 'PASSION PRO', '9', 'Rack 1', 'Box 1'),
(189, 'Merrior', '', 'RH Side', NULL, '23-10-23', NULL, '2', 'Fiem', 'PASSION PRO', '9', 'Rack 1', 'Box 1'),
(190, 'Merrior', '', 'LH.Side', NULL, '23-10-23', NULL, '2', 'Fiem', 'Activa', '9', 'Rack 1', 'Box 1'),
(191, 'Air Filter', 'pleasure', 'pleasure', NULL, '29-10-23', NULL, '2', 'Hero', '17210AAW300S', '9', 'Rack 1', 'Box 1'),
(192, 'Air Filter', 'spl pro', 'Spl Pro', NULL, '29-10-23', NULL, '2', 'Hero', '17213AACA0099S', '9', 'Rack 1', 'Box 1'),
(193, 'Air Filter', 'Mestro', 'Mestro', NULL, '29-10-23', NULL, '2', 'Hero', '17211KWP900S', '9', 'Rack 1', 'Box 1'),
(194, 'Air Filter', 'PASSION X-PRO', 'PASSION X-PRO', NULL, '29-10-23', NULL, '2', 'Hero', '17211KZAW00S', '9', 'Rack 1', 'Box 1'),
(195, 'Air Filter', 'CBZ', 'CBZ', NULL, '29-10-23', NULL, '2', 'Hero', '17211KVN900S', '9', 'Rack 1', 'Box 1'),
(196, 'Chimta Bush', 'SPL+', 'Spl +', NULL, '29-10-23', NULL, '2', 'Hero', '52181001300S', '9', 'Rack 1', 'Box 1'),
(197, 'Chember Bush', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'HONDA', '11103KWP900S', '9', 'Rack 1', 'Box 1'),
(198, 'RR SHOCK ABSORBER BUSH', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'HONDA', '11203GC7300', '9', 'Rack 1', 'Box 1'),
(199, 'LINK BUSH KIT', 'Mestro', 'Mestro', NULL, '29-10-23', NULL, '2', 'Hero', 'K51513KTPF900S', '9', 'Rack 1', 'Box 1'),
(200, 'Link Bush Kit fiber', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'Wender', 'DLX059', '9', 'Rack 1', 'Box 1'),
(201, 'RR SHOCK ABSORBER BUSH', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(202, 'Link Bush Kit', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(203, 'RR SHOCK ABSORBER BUSH', 'SPL+', 'BIG', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(204, 'RR SHOCK ABSORBER BUSH', 'SPL+', 'SMALL', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(205, 'GREEN BUSH', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(206, 'DISK BREKE PAD', 'CBZ', 'CBZ', NULL, '29-10-23', NULL, '2', 'Hero', '06455AAN211S', '9', 'Rack 1', 'Box 1'),
(207, 'CYLINDER KIT', 'CBZ', 'CBZ', NULL, '29-10-23', NULL, '2', 'Hero', '45530KCC841S', '9', 'Rack 1', 'Box 1'),
(208, 'DISK BREKE RUBER', 'CBZ', 'CBZ', NULL, '29-10-23', NULL, '2', 'BAJAJ', 'DK151090', '9', 'Rack 1', 'Box 1'),
(209, 'DISK BREKE PAD', 'SHINE', 'SHINE FR', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(210, 'DISK BREKE PAD', 'PULSAR', 'PULSAR RR', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(211, 'DISK BREKE PAD', 'PULSAR', 'PULSAR FR', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(212, 'LAINER', 'spl pro', 'Spl Pro SMALL', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(213, 'LAINER', 'spl pro', 'Spl Pro BIG', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(214, 'LAINER', 'SPL', 'Spl Pro SMALL', NULL, '29-10-23', NULL, '2', 'Hero', '43120365H70S', '9', 'Rack 1', 'Box 1'),
(215, 'LAINER', 'SPL+', 'Spl + SMALL', NULL, '29-10-23', NULL, '2', 'Hero', '43125KST92099S', '9', 'Rack 1', 'Box 1'),
(216, 'LAINER', 'spl pro', 'Spl Pro BIG', NULL, '29-10-23', NULL, '2', 'Hero', '45125AAHF0099S', '9', 'Rack 1', 'Box 1'),
(217, 'LAINER', 'Dis-100', 'DIS-100 BIG', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(218, 'LAINER', 'Dis-100', 'DIS-100 SMALL', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(219, 'ENGINE HANGER', 'pleasure', 'pleasure', NULL, '29-10-23', NULL, '2', 'Hero', '50355KPL900S', '9', 'Rack 1', 'Box 1'),
(220, 'DRAM RUBBER', 'SPL+', 'SPL+', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(221, 'DRAM RUBBER', 'PASSION PRO', 'PASSION PRO', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(222, 'DRAM RUBBER', 'CBZ', 'CBZ', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(223, 'DRAM RUBBER', 'SHINE ', 'SHINE ', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(224, 'DRAM RUBBER', 'TWISTER', 'TWISTER', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(225, 'DRAM RUBBER', 'PLATINA', 'PLATINA', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(226, 'DRAM RUBBER', 'PULSAR ', 'PULSAR ', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(227, 'DRAM RUBBER', 'UNICORN', 'UNICORN', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(228, 'Handel Rubber', 'spl+', 'SPL+', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(229, 'Handel Rubber', 'Dis-100', 'DIS-100 ', NULL, '29-10-23', NULL, '2', 'STEEL BIRD', '111', '9', 'Rack 1', 'Box 1'),
(230, 'indicator ', 'spl pro', 'Spl Pro', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(231, 'indicator ', 'SPL+', 'Spl +', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(232, 'indicator ', 'Shine', 'SHINE ', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(233, 'indicator ', 'Unicorn', 'UNICORN', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(234, 'indicator ', 'HF-DILUX', 'HF-DILUX', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(235, 'indicator ', 'PULSAR', 'PULSAR ', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(236, 'indicator ', 'PASSION PRO', 'PASSION PRO', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(237, 'indicator ', 'PASSION +', 'PASSION +', NULL, '29-10-23', NULL, '2', 'Uno Minda', '111', '9', 'Rack 1', 'Box 1'),
(238, 'LED', 'ALL MODEL', 'ALL MODEL', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(239, 'CHAIN LUBE', 'All Model ', '125 ML', NULL, '29-10-23', NULL, '2', 'veedol', '111', '9', 'Rack 1', 'Box 1'),
(240, 'METTOR GAIR', 'SPL+', 'SPL+', NULL, '29-10-23', NULL, '2', 'Hero', '29K210S', '9', 'Rack 1', 'Box 1'),
(241, 'METTOR GAIR', 'SPL+', 'SPL+', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(242, 'METTOR GAIR', 'Dis-100', 'DIS-100 ', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(243, 'METTOR GAIR', 'SHINE', 'SHINE DISK', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(244, 'METTOR GAIR', '350CC', '350CC', NULL, '29-10-23', NULL, '2', 'ROYAL EINFIELD', '1040741/A', '9', 'Rack 1', 'Box 1'),
(245, 'METTOR GAIR', 'ACTIVA FIBER', 'ACTIVA FIBER', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(246, 'METTOR GAIR', 'PLATINA', 'PLATINA', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(247, 'METTOR GAIR', 'SPL+ FIBER', 'SPL+ FIBER', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(248, 'METTOR GAIR', 'SPL+ METAL', 'SPL+ METAL', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(249, 'METTOR GAIR', 'ACTIVA METAL', 'ACTIVA METAL', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(250, 'LAINER SPRING', 'SPL+', 'SPL+', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(251, 'LAINER SPRING', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(252, 'LAINER SPRING', 'ACTIVA', 'ACTIVA', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(253, 'LAINER SPRING', 'Dis-100', 'DIS-100 ', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(254, 'LAINER PATTY', 'Dis-100', 'DIS-100 ', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(255, 'Chain Setting Patty', 'SPL+ big', 'SPL+ big', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(256, 'Chain Setting Patty', 'SPL+', 'SPL+ small', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(257, 'Chain Setting Patty', 'Dis-100', 'DIS-100 BIG', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(258, 'Chain Setting Patty', 'Dis-100', 'DIS-100 SMALL', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(259, 'Chain Setting Patty', '4S', '4S big', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(260, 'Chain Setting Patty', '4S', '4S Small', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(261, 'Chain Setting Patty', 'PASSION X-PRO ', 'PASSION X-PRO Big', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(262, 'Chain Setting Patty', 'PASSION X-PRO', 'PASSION X-PROP Small', NULL, '29-10-23', NULL, '2', 'Wender', '111', '9', 'Rack 1', 'Box 1'),
(263, 'DRAM RUBBER', 'SPL+', 'SPL+', NULL, '29-10-23', NULL, '2', 'Hero', '41241GB4770S', '9', 'Rack 1', 'Box 1'),
(264, 'test', 'gear part', '10x10', NULL, '21-11-23', NULL, '1', 'BAJAJ', 'test/1', '9', 'Rack 1', 'Box 1'),
(265, 'TEST', 'gear part', '10x10', NULL, '23-11-23', NULL, '1', 'HONDA', 'test/1', '9', 'Rack 1', 'Box 1'),
(266, 'Clatch Plate Set', 'gear part', '10x10', NULL, '24-11-23', NULL, '1', 'ROOTS', 'test/2', '9', 'Rack 1', 'Box 1'),
(267, 'TEST', 'gear part', '10x10', NULL, '25-11-23', NULL, '1', 'BAJAJ', 'test/1', '9', 'Rack 1', 'Box 1'),
(268, 'PI1', 'gear part', '20x20', NULL, '26-11-23', NULL, '1', 'HONDA', 'PP1', '9', 'Rack 1', 'Box 1'),
(269, 'PP', 'gear part', '20x20', NULL, '26-11-23', NULL, '1', 'HONDA', 'test/1', '9', 'Rack 1', 'Box 1'),
(270, 'asas', 'asas', 'asas', NULL, '26-11-23', NULL, '1', 'HONDA', 'sasa', '9', 'Rack 1', 'Box 1'),
(271, '11', '11', '11', NULL, '26-11-23', NULL, '1', 'HONDA', '111', '9', 'Rack 1', 'Box 1'),
(272, 'qwqw3', '11', '2', NULL, '26-11-23', NULL, '1', 'HONDA', '1121', '9', 'Rack 1', 'Box 1'),
(273, 'qq', 'qqe', 'eqe', NULL, '26-11-23', NULL, '1', 'HONDA', 'eqe', '9', 'Rack 1', 'Box 1'),
(274, 'Baj', 'qeqe', 'qeqe', NULL, '26-11-23', NULL, '1', 'HONDA', 'eqe', '9', 'Rack 1', 'Box 1'),
(275, 'Clatch Plate Set', 'gear part', '10x10', NULL, '13-01-24', NULL, '1', 'HONDA', 'test/1', '9', 'Rack 1', 'Box 1'),
(276, 'Clatch Plate Set', 'Test Part', '10x10', NULL, '13-01-24', NULL, '1', 'STEEL BIRD', 'test/1', '9', 'Rack 1', 'Box 1'),
(277, 'Clatch Plate Set', 'Test Part', '10x10', NULL, '13-01-24', NULL, '1', 'Mobil', 'test/1', '9', 'Rack 1', 'Box 1'),
(278, 'Clatch Plate Set', 'gear part', '20x20', NULL, '13-01-24', NULL, '1', 'HONDA', 'test/1', '9', 'Rack 1', 'Box 1'),
(279, 'Bajcsccc1233', 'gear part', '2', NULL, '28-02-24', NULL, '1', 'BAJAJ', 'test/111', '9', 'RACK-1', '2'),
(280, 'advik', 'Spare part', '15*15', NULL, '28-02-24', NULL, '1', 'Valvoline', 'test/13010', '9', 'Rack no 12', '5'),
(281, 'Clatch Plate Set', 'Spare part', '10x10', NULL, '01-03-24', NULL, '6', 'A.R', 'test/111', '9', 'RACK-1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `item_requisition`
--

CREATE TABLE `item_requisition` (
  `requisition_id` int(11) NOT NULL,
  `item_id` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_qty` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_requisition`
--

INSERT INTO `item_requisition` (`requisition_id`, `item_id`, `item_name`, `item_qty`, `date`, `status`) VALUES
(9, '32', 'HEAD LIGHT STAY', '2', '28-02-2024 04:33:52 PM', 'N'),
(10, '35', 'main switch', '3', '23-04-2024 10:47:03 PM', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `item_requisition_request`
--

CREATE TABLE `item_requisition_request` (
  `item_rr_id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_select_id` varchar(255) DEFAULT NULL,
  `item_description` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `reason_for_stock` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `req_project_id` varchar(255) DEFAULT NULL,
  `created_User_id` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `item_requisition_request`
--

INSERT INTO `item_requisition_request` (`item_rr_id`, `item_name`, `item_select_id`, `item_description`, `quantity`, `reason_for_stock`, `created_by`, `created_at`, `req_project_id`, `created_User_id`, `updatedat`, `updatedby`) VALUES
(1, 'mnp', '1', 'fde', '33', 'ded', NULL, NULL, '3', '4', '17-08-23', '1'),
(2, '', '1', 'desc', '2', 'only 2 item in stock', NULL, NULL, NULL, '28-08-23', '28-08-23', '1'),
(3, '', '1', 'desc', '2', 'desc', NULL, NULL, '1', '28-08-23', '28-08-23', '2');

-- --------------------------------------------------------

--
-- Table structure for table `lab_report`
--

CREATE TABLE `lab_report` (
  `aa` int(11) NOT NULL,
  `bb` varchar(100) DEFAULT NULL,
  `cc` varchar(100) DEFAULT NULL,
  `dd` varchar(100) DEFAULT NULL,
  `ee` varchar(100) DEFAULT NULL,
  `ff` varchar(100) DEFAULT NULL,
  `gg` varchar(100) DEFAULT NULL,
  `hh` varchar(100) DEFAULT NULL,
  `ii` varchar(100) DEFAULT NULL,
  `jj` varchar(100) DEFAULT NULL,
  `kk` varchar(100) DEFAULT NULL,
  `ll` varchar(100) DEFAULT NULL,
  `mm` varchar(100) DEFAULT NULL,
  `nn` varchar(100) DEFAULT NULL,
  `oo` varchar(100) DEFAULT NULL,
  `pp` varchar(100) DEFAULT NULL,
  `qq` varchar(100) DEFAULT NULL,
  `rr` varchar(100) DEFAULT NULL,
  `ss` varchar(100) DEFAULT NULL,
  `tt` varchar(100) DEFAULT NULL,
  `uu` varchar(100) DEFAULT NULL,
  `vv` varchar(100) DEFAULT NULL,
  `ww` varchar(100) DEFAULT NULL,
  `xx` varchar(100) DEFAULT NULL,
  `yy` varchar(100) DEFAULT NULL,
  `zz` varchar(100) DEFAULT NULL,
  `aaa` varchar(100) DEFAULT NULL,
  `bbb` varchar(100) DEFAULT NULL,
  `ccc` varchar(100) DEFAULT NULL,
  `ddd` varchar(100) DEFAULT NULL,
  `eee` varchar(100) DEFAULT NULL,
  `fff` varchar(100) DEFAULT NULL,
  `ggg` varchar(100) DEFAULT NULL,
  `hhh` varchar(100) DEFAULT NULL,
  `iii` varchar(100) DEFAULT NULL,
  `jjj` varchar(100) DEFAULT NULL,
  `kkk` varchar(100) DEFAULT NULL,
  `lll` varchar(100) DEFAULT NULL,
  `mmm` varchar(100) DEFAULT NULL,
  `nnn` varchar(100) DEFAULT NULL,
  `ooo` varchar(100) DEFAULT NULL,
  `ppp` varchar(100) DEFAULT NULL,
  `qqq` varchar(100) DEFAULT NULL,
  `rrr` varchar(100) DEFAULT NULL,
  `sss` varchar(100) DEFAULT NULL,
  `ttt` varchar(100) DEFAULT NULL,
  `uuu` varchar(100) DEFAULT NULL,
  `vvv` varchar(100) DEFAULT NULL,
  `www` varchar(100) DEFAULT NULL,
  `xxx` varchar(100) DEFAULT NULL,
  `yyy` varchar(100) DEFAULT NULL,
  `zzz` varchar(100) DEFAULT NULL,
  `aaaa` varchar(100) DEFAULT NULL,
  `bbbb` varchar(100) DEFAULT NULL,
  `cccc` varchar(100) DEFAULT NULL,
  `dddd` varchar(100) DEFAULT NULL,
  `eeee` varchar(100) DEFAULT NULL,
  `ffff` varchar(100) DEFAULT NULL,
  `gggg` varchar(100) DEFAULT NULL,
  `hhhh` varchar(100) DEFAULT NULL,
  `iiii` varchar(100) DEFAULT NULL,
  `jjjj` varchar(100) DEFAULT NULL,
  `kkkk` varchar(100) DEFAULT NULL,
  `llll` varchar(100) DEFAULT NULL,
  `mmmm` varchar(100) DEFAULT NULL,
  `nnnn` varchar(100) DEFAULT NULL,
  `oooo` varchar(100) DEFAULT NULL,
  `pppp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_report`
--

INSERT INTO `lab_report` (`aa`, `bb`, `cc`, `dd`, `ee`, `ff`, `gg`, `hh`, `ii`, `jj`, `kk`, `ll`, `mm`, `nn`, `oo`, `pp`, `qq`, `rr`, `ss`, `tt`, `uu`, `vv`, `ww`, `xx`, `yy`, `zz`, `aaa`, `bbb`, `ccc`, `ddd`, `eee`, `fff`, `ggg`, `hhh`, `iii`, `jjj`, `kkk`, `lll`, `mmm`, `nnn`, `ooo`, `ppp`, `qqq`, `rrr`, `sss`, `ttt`, `uuu`, `vvv`, `www`, `xxx`, `yyy`, `zzz`, `aaaa`, `bbbb`, `cccc`, `dddd`, `eeee`, `ffff`, `gggg`, `hhhh`, `iiii`, `jjjj`, `kkkk`, `llll`, `mmmm`, `nnnn`, `oooo`, `pppp`) VALUES
(1, '1', 'Prashant Shelar', 'GAT/123', 'Yesgaon', 'Malegaon', 'Nashik', '', 'Maze', '1.5', 'soil', NULL, 'डेसिसायमन/मि.', '1', 'डेसिसायमन/मि.', '2', 'डेसिसायमन/मि.', '3', 'डेसिसायमन/मि.', '4', 'डेसिसायमन/मि.', '5', 'डेसिसायमन/मि.', '6', 'डेसिसायमन/मि.', '7', 'डेसिसायमन/मि.', '8', 'डेसिसायमन/मि.', '9', 'डेसिसायमन/मि.', '10', 'डेसिसायमन/मि.', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(2, '2', 'Vinit Mahale', 'GAt/102', 'Vadel', 'Malegaon', 'Nashik', 'boar', '', '', 'water', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'डे.सी./ मीटर', '1', 'डे.सी./ मीटर', '2', 'डे.सी./ मीटर', '3', 'डे.सी./ मीटर', '4', 'डे.सी./ मीटर', '5', 'डे.सी./ मीटर', '6', 'डे.सी./ मीटर', '7', 'डे.सी./ मीटर', '8', 'डे.सी./ मीटर', '9', 'डे.सी./ मीटर', '10', 'डे.सी./ मीटर', '11', 'डे.सी./ मीटर', '12', 'डे.सी./ मीटर', '13', 'डे.सी./ मीटर', '14', 'डे.सी./ मीटर', '15', NULL, NULL, NULL, NULL),
(3, '3', 'Mayur Mahale', 'GAT/111', 'Surat', 'Surat', 'Surat', '', 'Maze', '1.4', 'soil', NULL, 'डेसिसायमन/मि.', '1', 'डेसिसायमन/मि.', '2', 'डेसिसायमन/मि.', '3', 'डेसिसायमन/मि.', '4', 'डेसिसायमन/मि.', '5', 'डेसिसायमन/मि.', '6', 'डेसिसायमन/मि.', '7', 'डेसिसायमन/मि.', '8', 'डेसिसायमन/मि.', '9', 'डेसिसायमन/मि.', '10', 'डेसिसायमन/मि.', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(4, '4', 'Jay Thakare', 'GAT/123', 'Vadel', 'Malegaon', 'Nashik', 'boar', 'Maze', '1.5', 'water', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'डे.सी./ मीटर', '1', 'डे.सी./ मीटर', '2', 'डे.सी./ मीटर', '3', 'डे.सी./ मीटर', '4', 'डे.सी./ मीटर', '5', 'डे.सी./ मीटर', '6', 'डे.सी./ मीटर', '7', 'डे.सी./ मीटर', '8', 'डे.सी./ मीटर', '9', 'डे.सी./ मीटर', '10', 'डे.सी./ मीटर', '11', 'डे.सी./ मीटर', '12', 'डे.सी./ मीटर', '13', 'डे.सी./ मीटर', '14', 'डे.सी./ मीटर', '15', NULL, NULL, NULL, NULL),
(5, '5', 'Ram Patil', 'GAT/122', 'chandanpuri', 'Malegaon', 'NAshik', '', 'MAze', '1.5', 'soil', NULL, 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', 'शेकडा', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(6, '6', 'Kapil Thakare', 'GATA/121', 'Vadel', 'Malegaon', 'Nashik', '', 'Maze', '2.5', 'soil', '29/05/24', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', 'कि.ग्र/हेक्टर', '3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL),
(7, '7', 'Akshay Shelar', 'GAT/343', 'Shelar Nagar', 'Malegaon', 'Nashik', 'boar1', 'MAze', '1.5', 'water', '29/05/24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', 'मि.इ./ लिटर', '3', NULL, NULL, NULL, ''),
(8, '8', 'Advik Shelar2', 'GAT/1234', 'Yesgaon', 'Malegaon', 'Nashik', 'boar', 'Maze', '1.6', 'water', '29/05/24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', 'मि.इ./ लिटर', '2', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment_entry`
--

CREATE TABLE `payment_entry` (
  `entry_id` int(11) NOT NULL,
  `tranction_type` varchar(255) DEFAULT NULL,
  `particular_name` varchar(255) DEFAULT NULL,
  `entry_date` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `entry_from` varchar(255) DEFAULT NULL,
  `entry_comment` varchar(255) DEFAULT NULL,
  `entry_attachment` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `payment_entry`
--

INSERT INTO `payment_entry` (`entry_id`, `tranction_type`, `particular_name`, `entry_date`, `amount`, `entry_from`, `entry_comment`, `entry_attachment`, `updatedat`, `updatedby`) VALUES
(1, 'credit', 'ddd', '12', '123', 'manual', '', 'ww', '10-10-23', '1'),
(2, 'credit', 'ddd', '12', '123', 'manual', '', 'ww', '10-10-23', '1'),
(3, 'credit', 'name', '10-12-23', '100', 'manual', '', 'att', '11-10-23', '1'),
(4, 'debit', 'debit', '10.12.23', '500', 'manual', '', 'attachment', '11-10-23', '1'),
(5, 'debit', 'debit', '10.12.23', '500', 'manual', '', 'attachment', '11-10-23', '1'),
(6, 'lending', 'rew', '10-23-32', '7000', 'manual', '', 'att', '11-10-23', '1'),
(7, 'borrowing', 'name', '10-12-23', '700', 'manual', '', 'attachment', '11-10-23', '1'),
(8, 'borrowing', 'name', '10-12-23', '900', 'manual', 'note', 'att', '11-10-23', '1'),
(9, 'lending', 'sfsdff', '11-10-2023', '65', 'manual', 'jhg', 'dfgd', '11-10-23', '1'),
(10, 'credit', 'dfgdfg', '12-10-2023', '789', 'manual', 'ytr', 'sdfsf', '11-10-23', '1'),
(11, 'lending', 'tytr', '13-10-2023', '900', 'manual', 'note', 'sdf', '11-10-23', '1');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_Name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_Date` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_Name`, `location`, `start_date`, `end_Date`, `createdat`, `updatedat`, `createdby`, `updatedby`) VALUES
(1, 'project no 1', 'satana road malegaon', '2023-01-01', '2023-12-15', NULL, '04-08-23', NULL, '1'),
(2, 'project no 2', 'nashik', '2023-08-30', '2026-12-31', NULL, '06-08-23', NULL, '1'),
(3, 'project 3', 'pune', '2023-09-01', '2023-08-09', NULL, '20-08-23', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) DEFAULT NULL,
  `is_active` binary(1) DEFAULT 'Y',
  `updateTime` varchar(20) DEFAULT NULL,
  `updatedBy` varchar(10) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `is_active`, `updateTime`, `updatedBy`, `updatedat`, `createdat`, `createdby`) VALUES
(1, 'SuperAdmin', 0x59, NULL, NULL, NULL, NULL, NULL),
(2, 'Fitter', 0x59, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_action`
--

CREATE TABLE `role_action` (
  `rr_id` int(11) NOT NULL,
  `aa_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_charge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_charge`) VALUES
(1, 'Washing', '100'),
(2, 'Oil Change', '50'),
(3, 'Coating', '1000'),
(4, 'Test2', '1000'),
(5, 'Polishing', '800'),
(6, 'akash@msfsf', ' bn77777ki'),
(7, 'TEST CHNARGE LENGTH', '12345'),
(8, 'TEST2', '10000'),
(9, 'Coating', '500');

-- --------------------------------------------------------

--
-- Table structure for table `service_footer`
--

CREATE TABLE `service_footer` (
  `service_footer_id` int(11) NOT NULL,
  `stock_out_header_id` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_charge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_footer`
--

INSERT INTO `service_footer` (`service_footer_id`, `stock_out_header_id`, `service_id`, `service_name`, `service_charge`) VALUES
(4, '82', '1', 'Washing', '100'),
(5, '82', '2', 'Oil Change', '50'),
(6, '83', '1', 'Washing', '100'),
(8, '84', '1', 'Washing', '100'),
(9, '85', '1', 'Washing', '100'),
(10, '86', '2', 'Oil Change', '50'),
(11, '92', '1', 'Washing', '100'),
(12, '93', '1', 'Washing', '100'),
(13, '94', '2', 'Oil Change', '50'),
(14, '95', '2', 'Oil Change', '50'),
(15, '96', '2', 'Oil Change', '50'),
(16, '97', '2', 'Oil Change', '50'),
(17, '100', '1', 'Washing', '100'),
(18, '101', '1', 'Washing', '100'),
(19, '102', '1', 'Washing', '100'),
(20, '105', '1', 'Washing', '100'),
(21, '106', '1', 'Washing', '100'),
(22, '107', '1', 'Washing', '100'),
(23, '108', '1', 'Washing', '100'),
(24, '109', '1', 'Washing', '100'),
(25, '120', '1', 'Washing', '100'),
(26, '121', '1', 'Washing', '100'),
(27, '122', '1', 'Washing', '100'),
(30, '132', '1', 'Washing', '100'),
(35, '133', '2', 'Oil Change', '50'),
(36, '133', '2', 'Oil Change', '50'),
(37, '133', '2', 'Oil Change', '50'),
(38, '133', '2', 'Oil Change', '50'),
(39, '133', '2', 'Oil Change', '50'),
(40, '133', '2', 'Oil Change', '50'),
(42, '134', '2', 'Oil Change', '50'),
(43, '134', '2', 'Oil Change', '50'),
(70, '135', '2', 'Oil Change', '50'),
(71, '136', '1', 'Washing', '100'),
(72, '137', '2', 'Oil Change', '50'),
(73, '138', '1', 'Washing', '100'),
(74, '139', '1', 'Washing', '100'),
(75, '141', '3', 'Coating', '1000'),
(76, '142', '2', 'Oil Change', '50'),
(77, '143', '1', 'Washing', '100'),
(78, '145', '2', 'Oil Change', '50'),
(79, '147', '4', 'Test2', '1000'),
(80, '159', '1', 'Washing', '100');

-- --------------------------------------------------------

--
-- Table structure for table `stock_entry`
--

CREATE TABLE `stock_entry` (
  `stock-entry-id` int(11) NOT NULL,
  `stock-entry-project-id` int(11) NOT NULL,
  `stock-entry-item-id` int(11) NOT NULL,
  `stock-entry-quantity` varchar(255) NOT NULL,
  `stock-entry-unit` varchar(255) NOT NULL,
  `stock-entry-created-at` datetime NOT NULL,
  `stock-entry-created-by` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_in_footer`
--

CREATE TABLE `stock_in_footer` (
  `stock_in_footer_id` int(11) NOT NULL,
  `item_id` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `hsn_code` varchar(255) DEFAULT NULL,
  `item_quantity` varchar(255) DEFAULT NULL,
  `item_amount` varchar(255) DEFAULT NULL,
  `tax_gst` varchar(255) DEFAULT NULL,
  `item_total_amount` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `stock_in_header_id` varchar(255) DEFAULT NULL,
  `item_discount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_in_footer`
--

INSERT INTO `stock_in_footer` (`stock_in_footer_id`, `item_id`, `item_name`, `hsn_code`, `item_quantity`, `item_amount`, `tax_gst`, `item_total_amount`, `brand_id`, `stock_in_header_id`, `item_discount`) VALUES
(177, '3-350101AALH00S', 'main switch', '350101AALH00S', '2', '100', '30', '250', '1', '114', '10'),
(178, '5-61311KWA830S-9-Rack 1-Box 1', 'HEAD LIGHT STAY', '61311KWA830S', '10', '100', '9', '990', '1', '121', '100'),
(179, '139-Plug-9-Rack 1-Box 1', 'Spark Plug', 'Plug', '15', '150', '9', '2402.5', '3', '122', '50'),
(180, '4-35100AADH00S-9-Rack 1-Box 1', 'main switch', '35100AADH00S', '5', '120', '9', '644', '5', '123', '10');

-- --------------------------------------------------------

--
-- Table structure for table `stock_in_header`
--

CREATE TABLE `stock_in_header` (
  `stock_in_header_id` int(11) NOT NULL,
  `supplier_id` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `supplier_total_amount` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `receipt_no` varchar(255) DEFAULT NULL,
  `supplier_paid_amount` varchar(255) DEFAULT NULL,
  `supplier_balance_amount` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_in_header`
--

INSERT INTO `stock_in_header` (`stock_in_header_id`, `supplier_id`, `date`, `supplier_total_amount`, `payment_mode`, `receipt_no`, `supplier_paid_amount`, `supplier_balance_amount`) VALUES
(102, '1', '2023-12-16', '1110', 'Credit Card', '1234', NULL, NULL),
(103, '1', '2023-12-16', '1040', 'Credit Card', '123', NULL, NULL),
(104, '1', '2023-12-16', '11', 'Credit Card', '11', NULL, NULL),
(105, '1', '2023-12-17', '132', 'Cash', '111', '1223', ''),
(106, '1', '2023-12-17', '132', 'Internet Banking', '1111', '121', ''),
(107, '1', '2023-12-17', '132', 'Internet Banking', '11', '130', '2'),
(108, '1', '2023-12-17', '100', 'Debit Card', '231', '1350', '3'),
(109, '1', '2023-12-17', '1331', 'Debit Card', '122', '1131', '200'),
(110, '1', '2023-12-17', '1500', 'Internet Banking', '434', '2312', '-812'),
(111, '1', '2023-12-17', '132', 'Internet Banking', '11', '131', '1'),
(112, '1', '2023-12-17', '221', 'Cash', '3211', '200', '21'),
(113, '1', '2023-12-17', '19700', 'Debit Card', '1234', '19000', '700'),
(114, '1', '2023-12-19', '250', 'Debit Card', '234', '100', '150'),
(115, '[value-2]', '0000-00-00', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(116, '[value-2]', '0000-00-00', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(117, '[value-2]', '0000-00-00', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(118, '[value-2]', '0000-00-00', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(119, '[value-2]', '0000-00-00', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(120, '[value-2]', '0000-00-00', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]'),
(121, '1', '2024-02-28', '990', 'Cash', '123456', '100', '890'),
(122, '3', '2024-02-28', '2402.5', 'Internet Banking', '12534', '2000', '402.5'),
(123, '4', '2024-03-01', '644', 'Cash', '152', '300', '344');

-- --------------------------------------------------------

--
-- Table structure for table `stock_item_entry`
--

CREATE TABLE `stock_item_entry` (
  `item_entry_id` int(11) NOT NULL,
  `item_entry_name` varchar(255) DEFAULT NULL,
  `item_entry_hsn_code` varchar(255) DEFAULT NULL,
  `item_entry_quantity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_item_entry`
--

INSERT INTO `stock_item_entry` (`item_entry_id`, `item_entry_name`, `item_entry_hsn_code`, `item_entry_quantity`) VALUES
(32, 'HEAD LIGHT STAY', '61311KWA830S', '0'),
(33, 'main switch', '350101AALH00S', '0'),
(34, 'Spark Plug', 'Plug', '5'),
(35, 'main switch', '35100AADH00S', '3');

-- --------------------------------------------------------

--
-- Table structure for table `stock_out_customer`
--

CREATE TABLE `stock_out_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_mobile_no` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_out_customer`
--

INSERT INTO `stock_out_customer` (`customer_id`, `customer_name`, `customer_mobile_no`, `customer_address`) VALUES
(1, 'Prashant Shelar', '98871234567', 'Malegaon Camp'),
(4, 'Ram', '3232435657', 'Pune'),
(9, 'JAy', '1234', 'Pune'),
(14, 'Kapil Thakare', '3576564846', 'Vadel'),
(15, 'Ankush', '5635453533', 'Pune'),
(16, 'Rupesh Shelar', '7847474663', 'Nashik'),
(17, 'Vinit M', '4545353344', 'Gujrat'),
(18, 'Vishal', '6576677677', 'Pune'),
(19, 'Abhijit B', '2323232323', 'Malegaon');

-- --------------------------------------------------------

--
-- Table structure for table `stock_out_footer`
--

CREATE TABLE `stock_out_footer` (
  `stock_out_footer_id` int(11) NOT NULL,
  `stock_out_item_id` varchar(255) DEFAULT NULL,
  `stock_out_item_name` varchar(255) DEFAULT NULL,
  `stock_out_item_hsn_code` varchar(255) DEFAULT NULL,
  `stock_out_item_quantity` varchar(255) DEFAULT NULL,
  `stock_out_item_price` varchar(255) DEFAULT NULL,
  `stock_out_item_tax_gst` varchar(255) DEFAULT NULL,
  `stock_out_item_total` varchar(255) DEFAULT NULL,
  `stock_out_item_discount` varchar(255) DEFAULT NULL,
  `stock_out_header_id` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_out_footer`
--

INSERT INTO `stock_out_footer` (`stock_out_footer_id`, `stock_out_item_id`, `stock_out_item_name`, `stock_out_item_hsn_code`, `stock_out_item_quantity`, `stock_out_item_price`, `stock_out_item_tax_gst`, `stock_out_item_total`, `stock_out_item_discount`, `stock_out_header_id`, `brand_name`) VALUES
(75, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '20', '100', '200', '2100', '100', '70', NULL),
(76, '4-35100AADH00S', 'main switch', '35100AADH00S', '10', '100', '200', '1100', '100', '71', NULL),
(79, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '22', '22', '22', '484', '22', '72', NULL),
(81, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '258', '11', '11', '2849', '11', '74', NULL),
(82, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '10', '200', '11', '2000', '11', '73', NULL),
(84, '3-350101AALH00S', 'main switch', '350101AALH00S', '33', '300', '200', '10000', '100', '75', NULL),
(85, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '20', '100', '11', '2000', '11', '76', NULL),
(86, '3-350101AALH00S', 'main switch', '350101AALH00S', '10', '500', '1000', '6000', '200', '77', NULL),
(87, '3-350101AALH00S', 'main switch', '350101AALH00S', '10', '100', '100', '900', '200', '78', NULL),
(88, '3-350101AALH00S', 'main switch', '350101AALH00S', '10', '100', '120', '1020', '100', '79', NULL),
(97, '3-350101AALH00S', 'main switch', '350101AALH00S', '3', '11', '11', '33', '11', '80', NULL),
(98, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '10', '100', '100', '1000', '100', '80', NULL),
(101, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '11', '11', '11', '123.31', '11', '81', NULL),
(105, '5-61311KWA830S', 'HEAD LIGHT STAY', '61311KWA830S', '1', '10', '1', '9.1', '1', '82', NULL),
(108, '3-350101AALH00S', 'main switch', '350101AALH00S', '1', '11', '11', '1.2100000000000009', '11', '83', NULL),
(110, '3-350101AALH00S', 'main switch', '350101AALH00S', '1', '11', '11', '1.21', '11', '84', NULL),
(111, '3-350101AALH00S', 'main switch', '350101AALH00S', '1', '11', '11', '11', '1', '85', NULL),
(112, '3-350101AALH00S', 'main switch', '350101AALH00S', '2', '22', '11', '37.84', '11', '86', NULL),
(113, '3-350101AALH00S', 'main switch', '350101AALH00S', '1', '1', '1', '0.01', '1', '87', NULL),
(114, '3-350101AALH00S', 'main switch', '350101AALH00S', '1', '1', '1', '0.01', '1', '88', NULL),
(115, '3-350101AALH00S', 'main switch', '350101AALH00S', '59', '100', '9', '6231.00', '200', '89', NULL),
(116, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '100', '9', '100.00', '9', '90', NULL),
(117, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '100', '9', '98.00', '11', '91', NULL),
(118, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '245', '100', '9', '25705.00', '1000', '92', NULL),
(119, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '11', '9', '10.99', '1', '93', NULL),
(120, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '94', NULL),
(121, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '95', NULL),
(122, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '96', NULL),
(123, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '97', NULL),
(124, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '1', '9', '0.09', '1', '98', NULL),
(125, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '11', '9', '10.99', '1', '99', 'Hero'),
(126, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '11', '11', '9', '120.89', '11', '100', 'Hero'),
(127, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '1', '9', '0.09', '1', '101', 'Hero'),
(128, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '10.99', '1', '102', 'Hero'),
(137, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '100', '9', '207.00', '11', '104', 'Hero'),
(138, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '200', '9', '426.00', '10', '103', 'Hero'),
(139, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '200', '9', '426.00', '10', '103', 'Hero'),
(140, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '105', 'Hero'),
(141, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '11', '9', '10.99', '1', '106', 'Hero'),
(142, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '11', '9', '10.99', '1', '107', 'Hero'),
(143, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '11', '9', '10.99', '1', '108', 'Hero'),
(144, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '11', '9', '10.99', '1', '109', 'Hero'),
(145, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '97', '2', '9', '209.46', '2', '110', 'Hero'),
(146, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '97', '2', '9', '209.46', '2', '111', 'Hero'),
(147, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '7', '22', '9', '157.86', '10', '112', 'Hero'),
(148, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '7', '22', '9', '157.86', '10', '113', 'Hero'),
(149, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '11', '9', '0.99', '11', '114', 'Hero'),
(153, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '11', '9', '10.89', '10', '117', 'Hero'),
(154, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '7', '22', '9', '145.86', '22', '116', 'Hero'),
(159, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '7', '22', '9', '145.86', '22', '115', 'Hero'),
(160, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '7', '10', '9', '66.30', '10', '115', 'Hero'),
(161, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '118', 'Hero'),
(162, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '119', 'Hero'),
(163, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '2', '9', '3.36', '1', '120', 'Hero'),
(164, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '2', '9', '3.36', '1', '121', 'Hero'),
(165, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '7', '10', '9', '74.30', '2', '122', 'Hero'),
(166, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '7', '10', '9', '65.30', '11', '123', 'Hero'),
(167, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '11', '9', '10.99', '1', '124', 'Hero'),
(168, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '0.09', '1', '125', 'Hero'),
(169, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '1', '1', '9', '10.99', '1', '126', 'Hero'),
(170, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '7', '11', '9', '82.93', '1', '127', 'Hero'),
(171, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '22', '9', '21.98', '2', '128', 'Hero'),
(174, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '100', '9', '99.00', '10', '130', 'Hero'),
(176, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '100', '9', '99.00', '10', '131', 'Hero'),
(179, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '5', '100', '9', '545', '111', '132', 'Hero'),
(183, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '222', '9', '472.96', '11', '133', 'Hero'),
(184, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '222', '9', '472.96', '11', '133', 'Hero'),
(186, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '222', '9', '461.96', '22', '134', 'Hero'),
(187, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '1', '9', '0.09', '1', '129', 'Hero'),
(214, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '222', '9', '461.96', '22', '135', 'Hero'),
(215, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '22', '9', '45.96', '2', '135', 'Hero'),
(216, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '3', '33', '9', '104.91', '3', '136', 'Hero'),
(217, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '122', '9', '254.96', '11', '137', 'Hero'),
(218, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '200', '9', '336.00', '100', '138', 'Hero'),
(219, '3-350101AALH00S-9', 'main switch', '350101AALH00S', '2', '1000', '9', '2080.00', '100', '139', 'Hero'),
(220, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '1200', '9', '2416.00', '200', '140', 'Hero'),
(221, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '500', '9', '445.00', '100', '141', 'Hero'),
(222, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '1000', '9', '990.00', '100', '142', 'Hero'),
(223, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '50', '9', '99.00', '10', '143', 'Hero'),
(224, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '7', '222', '9', '1671.86', '22', '144', 'Hero'),
(225, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '222', '9', '5301.56', '22', '145', 'Hero'),
(226, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '4', '1111', '9', '4732.96', '111', '146', 'Hero'),
(227, '139-Plug-9', 'Spark Plug', 'Plug', '5', '100', '9', '535.00', '10', '147', 'BOSCH'),
(228, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '100', '9', '99.00', '10', '148', 'Hero'),
(229, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '400', '9', '862.00', '10', '149', 'Hero'),
(230, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '400', '9', '862.00', '10', '150', 'Hero'),
(231, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '400', '9', '862.00', '10', '151', 'Hero'),
(232, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '200', '9', '416.00', '20', '152', 'Hero'),
(233, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '250', '9', '515.00', '30', '153', 'Hero'),
(234, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '100', '9', '100.00', '9', '154', 'Hero'),
(235, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '500', '9', '1000.00', '90', '155', 'Hero'),
(236, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '2', '500', '9', '1050.00', '40', '156', 'Hero'),
(237, '5-61311KWA830S-9', 'HEAD LIGHT STAY', '61311KWA830S', '1', '100', '9', '99.00', '10', '157', 'Hero'),
(238, '139-Plug-9', 'Spark Plug', 'Plug', '5', '100', '9', '535.00', '10', '158', 'BOSCH'),
(239, '4-35100AADH00S-9', 'main switch', '35100AADH00S', '2', '100', '9', '118.00', '100', '159', 'Hero');

-- --------------------------------------------------------

--
-- Table structure for table `stock_out_header`
--

CREATE TABLE `stock_out_header` (
  `stock_out_header_id` int(11) NOT NULL,
  `receipt_no` varchar(255) DEFAULT NULL,
  `stock_out_date` varchar(255) DEFAULT NULL,
  `fitter_id` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `customer_total_amount` varchar(255) DEFAULT NULL,
  `customer_paid_amount` varchar(255) DEFAULT NULL,
  `customer_balance_amount` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_online_amount` varchar(255) DEFAULT NULL,
  `gadi_no` varchar(255) DEFAULT NULL,
  `model_no` varchar(255) DEFAULT NULL,
  `engine_no` varchar(255) DEFAULT NULL,
  `kms` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_out_header`
--

INSERT INTO `stock_out_header` (`stock_out_header_id`, `receipt_no`, `stock_out_date`, `fitter_id`, `note`, `payment_mode`, `customer_total_amount`, `customer_paid_amount`, `customer_balance_amount`, `customer_id`, `customer_name`, `customer_online_amount`, `gadi_no`, `model_no`, `engine_no`, `kms`) VALUES
(73, '92156', '2023-12-17', '1', 'TEST', 'Borrow', '2000', '2000', '0', '9', 'JAy', NULL, NULL, NULL, NULL, NULL),
(74, '24380', '2023-12-17', '1', 'TEST', 'CARD', '2849', '2800', '49', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(75, '96089', '2023-12-17', '1', 'TEST', 'CARD', '10000', '9000', '1000', '14', 'Kapil Thakare', NULL, NULL, NULL, NULL, NULL),
(76, '50273', '2023-12-17', '1', 'TEST', 'CARD', '3150', '3000', '150', '15', 'Ankush', NULL, NULL, NULL, NULL, NULL),
(77, '91965', '2023-12-17', '1', 'TEST', 'Cash', '6000', '5000', '1000', '16', 'Rupesh Shelar', NULL, NULL, NULL, NULL, NULL),
(78, '34780', '2023-12-17', '1', 'TEST', 'CARD', '900', '900', '0', '17', 'Vinit M', NULL, NULL, NULL, NULL, NULL),
(79, '60106', '2023-12-17', '1', 'TEST', 'Cash', '1020', '1000', '20', '18', 'Vishal', NULL, NULL, NULL, NULL, NULL),
(80, '23405', '2023-12-18', '1', 'TEST', 'CARD', '1033', '0', '0', '19', 'Abhijit B', NULL, NULL, NULL, NULL, NULL),
(81, '94082', '2023-12-19', '1', 'TEST', 'CARD', '123.31', '100', '23.31', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(82, '51517', '2023-12-28', '1', 'TEST', 'CARD', '159.1', '150', '9.09', '4', 'Ram', NULL, NULL, NULL, NULL, NULL),
(83, '29138', '2023-12-29', '1', 'TEST', 'Netbanking', '1.21', '1.21', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(84, '20137', '2023-12-29', '1', 'TEST', 'Cash', '101.21', '101.21', '0', '4', 'Ram', NULL, NULL, NULL, NULL, NULL),
(85, '40411', '2024-01-06', '1', 'TEST', 'Cash', '111.00', '111.00', '0', '4', 'Ram', NULL, NULL, NULL, NULL, NULL),
(86, '93386', '2024-01-13', '1', 'TEST', 'Cash', '87.84', '87.84', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(87, '93989', '2024-01-13', '1', 'TEST', 'Cash', '0.01', '0.01', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(88, '79265', '2024-01-13', '1', 'TEST', 'Cash', '0.01', '0.01', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(89, '97356', '2024-01-13', '1', 'TEST', 'Cash', '6231.00', '6231.00', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(90, '68569', '2024-01-13', '1', 'TEST', 'Cash', '100.00', '100.00', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(91, '97446', '2024-01-13', '1', 'TEST', 'Cash', '98.00', '98.00', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(92, '11496', '2024-01-13', '1', 'TEST', 'Cash', '25805.00', '25805.00', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(93, '40443', '2024-01-13', '1', 'TEST', 'Cash', '110.99', '110.99', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(94, '46430', '2024-01-13', '1', 'TEST', 'Cash', '50.09', '50.09', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(95, '69825', '2024-01-13', '1', 'TEST', 'Cash', '50.09', '50.09', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(96, '69176', '2024-01-13', '1', 'TEST', 'Cash', '50.09', '50.09', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(97, '10089', '2024-01-13', '1', 'TEST', 'Cash', '50.09', '50.09', '0', '4', 'Ram', NULL, NULL, NULL, NULL, NULL),
(98, '18436', '2024-01-13', '1', 'TEST', 'Cash', '0.09', '0.09', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(99, '57899', '2024-01-13', '1', 'TEST', 'Cash', '10.99', '10.99', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(100, '82691', '2024-01-19', '1', 'TEST', 'Unpaid', '220.89', '200', '10.89', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(101, '85841', '2024-01-19', '1', 'TEST', 'Paid', '100.09', '100.09', '0', '1', 'Prashant Shelar', NULL, NULL, NULL, NULL, NULL),
(102, '29603', '2024-01-19', '1', 'TEST', 'Paid', '110.99', '100', '0.99', '1', 'Prashant Shelar', '10', NULL, NULL, NULL, NULL),
(103, '97340', '2024-01-20', '1', 'TEST', 'Paid', '426.00', '226', '200.00', '', 'Select Customer', '200', NULL, NULL, NULL, NULL),
(104, '99241', '2024-01-20', '1', 'TEST', 'Paid', '207.00', '207.00', '0', '', 'Select Customer', '0', NULL, NULL, NULL, NULL),
(105, '89658', '2024-01-20', '1', 'TEST', 'Paid', '100.09', '100.09', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(106, '66873', '2024-01-20', '1', 'TEST', 'Paid', '110.99', '110.99', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(107, '86517', '2024-01-20', '1', 'TEST', 'Paid', '110.99', '110.99', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(108, '17185', '2024-01-20', '1', 'TEST', 'Paid', '110.99', '110.99', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(109, '90547', '2024-01-20', '1', 'TEST', 'Paid', '110.99', '110.99', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(110, '84495', '2024-01-20', '1', 'TEST', 'Paid', '209.46', '209.46', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(111, '17775', '2024-01-20', '1', 'TEST', 'Paid', '209.46', '209.46', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(112, '47276', '2024-01-20', '1', 'TEST', 'Paid', '157.86', '157.86', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(113, '87283', '2024-01-20', '1', 'TEST', 'Paid', '157.86', '157.86', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(114, '94244', '2024-01-20', '1', 'TEST', 'Paid', '0.99', '0.99', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(115, '77321', '2024-01-20', '1', 'TEST', 'Paid', '66.30', '66.30', '0', '', 'Select Customer', '0', NULL, NULL, NULL, NULL),
(116, '78857', '2024-01-20', '1', 'TEST', 'Paid', '145.86', '145.86', '0', '', 'Select Customer', '0', NULL, NULL, NULL, NULL),
(117, '15121', '2024-01-20', '1', 'TEST', 'Paid', '10.89', '5', '0.89', '', 'Select Customer', '05', NULL, NULL, NULL, NULL),
(118, '66443', '2024-01-20', '1', 'TEST', 'Paid', '0.09', '0.09', '0', '9', 'JAy', '0', NULL, NULL, NULL, NULL),
(119, '88542', '2024-01-20', '1', 'TEST', 'Paid', '0.09', '0.09', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(120, '11001', '2024-01-20', '1', 'TEST', 'Paid', '103.36', '103.36', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(121, '17994', '2024-01-20', '1', 'TEST', 'Paid', '103.36', '103.36', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(122, '98830', '2024-01-20', '1', 'TEST', 'Paid', '174.30', '174.30', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(123, '27300', '2024-01-20', '1', 'TEST', 'Paid', '65.30', '65.30', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(124, '21186', '2024-01-20', '1', 'TEST', 'Paid', '10.99', '10.99', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(125, '24884', '2024-01-20', '1', 'TEST', 'Paid', '0.09', '0.09', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(126, '37990', '2024-01-20', '1', 'TEST', 'Paid', '10.99', '10.99', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(127, '28207', '2024-01-20', '1', 'TEST', 'Paid', '82.93', '82.93', '0', '1', 'Prashant Shelar', '0', NULL, NULL, NULL, NULL),
(128, '31091', '2024-01-20', '1', 'TEST', 'Paid', '21.98', '21.98', '0', '14', 'Kapil Thakare', '0', NULL, NULL, NULL, NULL),
(129, '81064', '2024-01-20', '1', 'TEST', 'Paid', '0.09', '0.09', '0', '', 'Select Customer', '0', NULL, NULL, NULL, NULL),
(130, '94755', '2024-01-20', '1', 'TEST', 'Paid', '99.00', '99.00', '0', '', 'Select Customer', '0', NULL, NULL, NULL, NULL),
(131, '53123', '2024-01-24', '1', 'TEST', 'Paid', '99.00', '99.00', '0', '', 'Select Customer', '0', 'MH-41 ps-1234', 'Splendor', 'ES1234', '120000'),
(132, '71159', '2024-01-27', '1', 'TEST', 'Paid', '645.00', '645.00', '0', '', 'Select Customer', '0', 'MH-41-1212', 'Sp-Plus', 'E122', '1234'),
(133, '11699', '2024-01-27', '1', 'TEST', 'Paid', '522.96', '522.96', '0', '', 'Select Customer', '0', '12', '22', '121', '1234'),
(134, '23271', '2024-01-27', '1', 'TEST', 'Paid', '511.96', '511.96', '0', '', 'Select Customer', '0', '11', '1', '1', '12'),
(135, '37870', '2024-01-27', '1', 'TEST', 'Paid', '557.92', '557.92', '0', '1', 'Prashant Shelar', '0', '22', '22', '22', '22222'),
(136, '92011', '2024-01-27', '1', 'TEST', 'Paid', '204.91', '20', '34.91', '1', 'Prashant Shelar', '150', '234', '333', '333', '333'),
(137, '26325', '2024-01-31', '1', 'TEST', 'Paid', '304.96', '304.96', '0', '1', 'Prashant Shelar', '0', '3322', '2333', '44', '556'),
(138, '79244', '2024-02-07', '1', 'TEST', 'Paid', '436.00', '436.00', '0', '1', 'Prashant Shelar', '0', 'MH-41p-5913', 'Shine', 'EB1234', '1200'),
(139, '48285', '2024-02-07', '1', 'TEST', 'Borrow', '2180.00', '180', '2000.00', '1', 'Prashant Shelar', '0', 'MH-41p-3612', 'SHINE', '123', '2400'),
(140, '98195', '2024-02-07', '1', 'TEST', 'Borrow', '2416.00', '416', '2000.00', '1', 'Prashant Shelar', '0', 'MH-41 P-5127', 'SHINE', 'EB1234', '1230'),
(141, '49968', '2024-02-27', '3', 'TEST', 'Paid', '1445.00', '1445.00', '0', '1', 'Prashant Shelar', '0', 'MH-41 PS2929', 'E12345', 'EBS123', '1100'),
(142, '18637', '2024-02-27', '3', 'TEST', 'Paid', '1040.00', '1040.00', '0', '4', 'Ram', '0', 'MH-41 PS2345', 'ENG-1234', 'EBS1234', '12000'),
(143, '44302', '2024-02-28', '4', 'TEST', 'Paid', '199.00', '199.00', '0.00', '1', 'Prashant Shelar', '0', 'MH-41 2145', 'Shine', 'EBS452', '800'),
(144, '37058', '2024-02-28', '4', 'TEST', 'Paid', '1671.86', '1671.86', '0', '1', 'Prashant Shelar', '0', 'MH-41 PS1234', 'SHINE', 'EBS124', '12333'),
(145, '69030', '2024-02-28', '3', 'TEST', 'Paid', '5351.56', '5351.56', '0', '1', 'Prashant Shelar', '0', 'Mh122', '22', '22', '222'),
(146, '85117', '2024-02-28', '4', 'TEST', 'Paid', '4732.96', '4732.96', '0', '14', 'Kapil Thakare', '0', 'wew', 'wewe', '443', '343'),
(147, '10800', '2024-02-28', '2', 'TEST', 'Paid', '1535.00', '1000', '535.00', '16', 'Rupesh Shelar', '', 'Mh-41 Ab8421', 'Splender', 'Eb4212', '500'),
(148, '32862', '2024-02-28', '1', 'TEST', 'Paid', '99.00', '99.00', '0', '4', 'Ram', '0', 'MH-41 PS2233', 'SHINE', 'EBS123', '1200'),
(149, '85342', '2024-02-28', '1', 'TEST', 'Paid', '862.00', '862.00', '0', '1', 'Prashant Shelar', '0', 'MH-41 PS-234', 'SPlendor', 'EBS1234', '2200'),
(150, '54211', '2024-02-28', '4', 'TEST', 'Paid', '862.00', '862.00', '0', '1', 'Prashant Shelar', '0', 'MH-41 PS-234', 'SPlendor', 'EBS1234', '2200'),
(151, '93942', '2024-02-28', '2', 'TEST', 'Paid', '862.00', '862.00', '0', '14', 'Kapil Thakare', '0', 'MH-41 PS-234', 'SPlendor', 'EBS1234', '2200'),
(152, '67628', '2024-02-28', '2', 'TEST', 'Paid', '416.00', '416.00', '0', '4', 'Ram', '0', 'MH41 PS-1234', 'SHINE', 'EBS123', '1230'),
(153, '97781', '2024-02-28', '3', 'TEST', 'Paid', '515.00', '515.00', '0', '4', 'Ram', '0', 'MH-41-ps345', 'SHINE', 'EBS1234', '1200'),
(154, '76033', '2024-02-28', '3', 'TEST', 'Paid', '100.00', '100.00', '0', '14', 'Kapil Thakare', '0', 'MH41 PS1234', 'SHINE', 'EBS123', '1234'),
(155, '77373', '2024-02-28', '3', 'TEST', 'Paid', '1000.00', '1000.00', '0', '4', 'Ram', '0', 'MH41 PS2345', 'Pulsar', 'EBS1234', '1200'),
(156, '65905', '2024-02-28', '6', 'TEST', 'Paid', '1050.00', '1050.00', '0', '14', 'Kapil Thakare', '0', 'MH41 PS-2345', 'CD DON', 'EBS123', '1100'),
(157, '14276', '2024-02-28', '3', 'TEST', 'Paid', '99.00', '99.00', '0', '4', 'Ram', '0', 'MH41 PS2323', 'SPLENDOR', 'EBS1234', '12300'),
(158, '35134', '2024-02-29', '4', 'TEST', 'Paid', '535.00', '535.00', '0', '1', 'Prashant Shelar', '0', 'MH-41 PS1234', 'SHNE', 'EBS123', '1200'),
(159, '21508', '2024-04-23', '1', 'TEST', 'Paid', '218.00', '218.00', '0', 'add-cust', '+ Add New Customer', '0', 'MH-41 p3030', 'Unicorn', 'E1232', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) DEFAULT NULL,
  `supplier_mno` varchar(255) DEFAULT NULL,
  `supplier_gstno` varchar(255) DEFAULT NULL,
  `supplier_address` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_mno`, `supplier_gstno`, `supplier_address`, `bank_name`, `account_no`, `ifsc_code`, `createdat`, `updatedat`, `createdby`, `updatedby`) VALUES
(1, 'supplyer no 1', '75885554845', '005134', 'malegaon', 'hdfc', '123456789', 'HDFC0000128', NULL, '10-08-23', NULL, '1'),
(2, 'Ganesh', '97458125', '584256dffdf', 'Nasik', 'Axis Bank', '65874123658942', 'Axis1727', NULL, '28-02-24', NULL, '1'),
(3, 'jayesh', '8742158962', '541245121', 'MAlegaon', 'hdfc', '32145241254185', 'hdfc7451', NULL, '28-02-24', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_payment_entry`
--

CREATE TABLE `supplier_payment_entry` (
  `supplier_entry_id` int(11) NOT NULL,
  `supplier_total_amount` varchar(255) DEFAULT NULL,
  `supplier_balance_amount` varchar(255) DEFAULT NULL,
  `supplier_paid_amount` varchar(255) DEFAULT NULL,
  `supplier_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier_payment_entry`
--

INSERT INTO `supplier_payment_entry` (`supplier_entry_id`, `supplier_total_amount`, `supplier_balance_amount`, `supplier_paid_amount`, `supplier_id`) VALUES
(3, '21161', '1100', '20061', '1'),
(4, '2402.5', '402.5', '2000', '3'),
(5, '644', '344', '300', '4');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_no` varchar(255) DEFAULT NULL,
  `task_title` varchar(255) DEFAULT NULL,
  `task_description` varchar(255) DEFAULT NULL,
  `task_project_id` varchar(255) DEFAULT NULL,
  `task_assign_user_id` varchar(255) DEFAULT NULL,
  `task_user_name` varchar(255) DEFAULT NULL,
  `task_status` varchar(255) DEFAULT NULL,
  `task_assignby` varchar(255) DEFAULT NULL,
  `task_startDate` varchar(255) DEFAULT NULL,
  `final_status` varchar(255) DEFAULT NULL,
  `task_comment_comment` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL,
  `task_endDate` varchar(255) DEFAULT NULL,
  `task_tentive_end` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_no`, `task_title`, `task_description`, `task_project_id`, `task_assign_user_id`, `task_user_name`, `task_status`, `task_assignby`, `task_startDate`, `final_status`, `task_comment_comment`, `createdat`, `updatedat`, `createdby`, `updatedby`, `task_endDate`, `task_tentive_end`) VALUES
(1, NULL, 'Task no 1', '', '1', '2', 'Rahul More', 'TO DO', '1', '29-08-23', NULL, NULL, NULL, '29-08-23', NULL, '1', NULL, NULL),
(2, NULL, 'no 2', 'New Task Created', '2', '2', 'Rahul More', 'TO DO', '1', '29-08-23', NULL, NULL, NULL, '29-08-23', NULL, '1', NULL, NULL),
(3, NULL, 'task no 4', 'task no 4', '1', '2', 'Rahul More', 'TO DO', '1', '29-08-23', NULL, 'New Task Created', NULL, '29-08-23', NULL, '1', NULL, NULL),
(4, NULL, 'task no 5', 'work started', '1', '2', 'Rahul More', 'IN PROGRESS', '1', '29-08-23', NULL, 'need help of another superwiser', NULL, '29-08-23', NULL, '1', NULL, NULL),
(5, NULL, 'task no 2', 'task no 3', '1', '2', 'Rahul More', 'TO DO', '1', '31-08-23', NULL, 'New Task Createddd', NULL, '31-08-23', NULL, '1', NULL, NULL),
(6, NULL, 'task', 'ddd', '1', '2', 'Rahul More', 'TO DO', '1', '2023-08-31', NULL, 'New Task Created', NULL, '31-08-23', NULL, '1', NULL, '2023-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `task_comment`
--

CREATE TABLE `task_comment` (
  `task_commnt_id` int(11) NOT NULL,
  `task_comment_main_id` varchar(255) DEFAULT NULL,
  `task_comment_status` varchar(255) DEFAULT NULL,
  `task_previous_status` varchar(255) DEFAULT NULL,
  `task_attachment` varchar(255) DEFAULT NULL,
  `task_comment_comment` varchar(255) DEFAULT NULL,
  `commentby` varchar(255) DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `task_comment`
--

INSERT INTO `task_comment` (`task_commnt_id`, `task_comment_main_id`, `task_comment_status`, `task_previous_status`, `task_attachment`, `task_comment_comment`, `commentby`, `createdat`, `updatedat`, `createdby`, `updatedby`) VALUES
(1, '1', 'TO DO', 'NEW', NULL, NULL, '1', NULL, '29-08-23', NULL, NULL),
(2, '2', 'TO DO', 'NEW', NULL, NULL, 'Abhijeet borse', NULL, '29-08-23', NULL, NULL),
(3, '3', 'TO DO', 'NEW', NULL, NULL, 'Abhijeet borse', NULL, '29-08-23', NULL, NULL),
(4, '4', 'TO DO', 'NEW', NULL, 'New Task Created', 'Abhijeet borse', NULL, '29-08-23', NULL, NULL),
(5, '4', 'IN PROGRESS', 'NEW', NULL, '', 'Rahul More', NULL, '29-08-23', NULL, NULL),
(6, '4', 'IN PROGRESS', 'NEW', NULL, 'work in progress', 'Rahul More', NULL, '29-08-23', NULL, NULL),
(7, '4', 'IN PROGRESS', 'NEW', NULL, 'need help of another superwiser', 'Rahul More', NULL, '29-08-23', NULL, NULL),
(8, '4', 'IN PROGRESS', 'NEW', NULL, 'need help of another superwiser', 'Abhijeet borse', NULL, '29-08-23', NULL, NULL),
(9, '5', 'TO DO', 'NEW', NULL, 'New Task Createddd', 'Abhijeet borse', NULL, '31-08-23', NULL, NULL),
(10, '6', 'TO DO', 'NEW', NULL, 'New Task Created', 'Abhijeet borse', NULL, '31-08-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_no` varchar(255) DEFAULT NULL,
  `unit_building_id` varchar(255) DEFAULT NULL,
  `unit_project_id` varchar(255) DEFAULT NULL,
  `unit_area` varchar(255) DEFAULT NULL,
  `unit_type` varchar(255) DEFAULT NULL,
  `unit_cost` varchar(255) DEFAULT NULL,
  `final_cost` varchar(255) DEFAULT NULL,
  `unit_building_flower` varchar(255) DEFAULT NULL,
  `unit_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `createdat` varchar(255) DEFAULT NULL,
  `updatedat` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updatedby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_fullName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_active` binary(1) DEFAULT NULL,
  `createat` date DEFAULT NULL,
  `updatedat` date DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `user_project_id` varchar(255) DEFAULT NULL,
  `createdby` varchar(255) DEFAULT NULL,
  `updateby` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_fullName`, `password`, `user_active`, `createat`, `updatedat`, `role`, `user_project_id`, `createdby`, `updateby`) VALUES
(1, 'abhi', 'Abhijeet borse', '123', 0x59, NULL, NULL, '1', '1', '1', NULL),
(56, 'pras', 'prashant', '123', 0x59, NULL, '2005-03-24', '1', NULL, NULL, '6'),
(57, 'shiv', 'Shiva', 'shiv', 0x59, NULL, '2005-03-24', '1', NULL, NULL, '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_entry`
--
ALTER TABLE `account_entry`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractor`
--
ALTER TABLE `contractor`
  ADD PRIMARY KEY (`contractor_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_payment_entry`
--
ALTER TABLE `customer_payment_entry`
  ADD PRIMARY KEY (`customer_payment_id`);

--
-- Indexes for table `dropdown`
--
ALTER TABLE `dropdown`
  ADD PRIMARY KEY (`dropdownId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `fitter`
--
ALTER TABLE `fitter`
  ADD PRIMARY KEY (`fitter_id`);

--
-- Indexes for table `fitter_payment_entry`
--
ALTER TABLE `fitter_payment_entry`
  ADD PRIMARY KEY (`fitter_payment_entry_id`);

--
-- Indexes for table `fitter_payment_history`
--
ALTER TABLE `fitter_payment_history`
  ADD PRIMARY KEY (`fitter_history_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_requisition`
--
ALTER TABLE `item_requisition`
  ADD PRIMARY KEY (`requisition_id`);

--
-- Indexes for table `item_requisition_request`
--
ALTER TABLE `item_requisition_request`
  ADD PRIMARY KEY (`item_rr_id`);

--
-- Indexes for table `lab_report`
--
ALTER TABLE `lab_report`
  ADD PRIMARY KEY (`aa`);

--
-- Indexes for table `payment_entry`
--
ALTER TABLE `payment_entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_action`
--
ALTER TABLE `role_action`
  ADD PRIMARY KEY (`rr_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_footer`
--
ALTER TABLE `service_footer`
  ADD PRIMARY KEY (`service_footer_id`);

--
-- Indexes for table `stock_entry`
--
ALTER TABLE `stock_entry`
  ADD PRIMARY KEY (`stock-entry-id`),
  ADD KEY `stock-entry-id` (`stock-entry-id`);

--
-- Indexes for table `stock_in_footer`
--
ALTER TABLE `stock_in_footer`
  ADD PRIMARY KEY (`stock_in_footer_id`);

--
-- Indexes for table `stock_in_header`
--
ALTER TABLE `stock_in_header`
  ADD PRIMARY KEY (`stock_in_header_id`);

--
-- Indexes for table `stock_item_entry`
--
ALTER TABLE `stock_item_entry`
  ADD PRIMARY KEY (`item_entry_id`);

--
-- Indexes for table `stock_out_customer`
--
ALTER TABLE `stock_out_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `stock_out_footer`
--
ALTER TABLE `stock_out_footer`
  ADD PRIMARY KEY (`stock_out_footer_id`);

--
-- Indexes for table `stock_out_header`
--
ALTER TABLE `stock_out_header`
  ADD PRIMARY KEY (`stock_out_header_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supplier_payment_entry`
--
ALTER TABLE `supplier_payment_entry`
  ADD PRIMARY KEY (`supplier_entry_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `task_comment`
--
ALTER TABLE `task_comment`
  ADD PRIMARY KEY (`task_commnt_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_entry`
--
ALTER TABLE `account_entry`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `box_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `building_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contractor`
--
ALTER TABLE `contractor`
  MODIFY `contractor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_payment_entry`
--
ALTER TABLE `customer_payment_entry`
  MODIFY `customer_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `dropdown`
--
ALTER TABLE `dropdown`
  MODIFY `dropdownId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fitter`
--
ALTER TABLE `fitter`
  MODIFY `fitter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fitter_payment_entry`
--
ALTER TABLE `fitter_payment_entry`
  MODIFY `fitter_payment_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fitter_payment_history`
--
ALTER TABLE `fitter_payment_history`
  MODIFY `fitter_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `item_requisition`
--
ALTER TABLE `item_requisition`
  MODIFY `requisition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `item_requisition_request`
--
ALTER TABLE `item_requisition_request`
  MODIFY `item_rr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab_report`
--
ALTER TABLE `lab_report`
  MODIFY `aa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment_entry`
--
ALTER TABLE `payment_entry`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role_action`
--
ALTER TABLE `role_action`
  MODIFY `rr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service_footer`
--
ALTER TABLE `service_footer`
  MODIFY `service_footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `stock_entry`
--
ALTER TABLE `stock_entry`
  MODIFY `stock-entry-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_in_footer`
--
ALTER TABLE `stock_in_footer`
  MODIFY `stock_in_footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `stock_in_header`
--
ALTER TABLE `stock_in_header`
  MODIFY `stock_in_header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `stock_item_entry`
--
ALTER TABLE `stock_item_entry`
  MODIFY `item_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `stock_out_customer`
--
ALTER TABLE `stock_out_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `stock_out_footer`
--
ALTER TABLE `stock_out_footer`
  MODIFY `stock_out_footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `stock_out_header`
--
ALTER TABLE `stock_out_header`
  MODIFY `stock_out_header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier_payment_entry`
--
ALTER TABLE `supplier_payment_entry`
  MODIFY `supplier_entry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task_comment`
--
ALTER TABLE `task_comment`
  MODIFY `task_commnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
