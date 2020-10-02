-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 02:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_and_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_accountID` bigint(20) NOT NULL,
  `user_roleID` bigint(20) NOT NULL,
  `user_departmentID` bigint(20) NOT NULL,
  `user_designationID` bigint(20) NOT NULL,
  `user_accountCode` varchar(100) NOT NULL,
  `user_accountUsername` varchar(150) NOT NULL,
  `user_accountPassword` text NOT NULL,
  `user_accountFirstname` varchar(100) NOT NULL,
  `user_accountMiddlename` varchar(100) DEFAULT NULL,
  `user_accountLastname` varchar(100) NOT NULL,
  `user_accountContactnumber` varchar(100) NOT NULL,
  `user_accountHireddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_accountStatus` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_accountID`, `user_roleID`, `user_departmentID`, `user_designationID`, `user_accountCode`, `user_accountUsername`, `user_accountPassword`, `user_accountFirstname`, `user_accountMiddlename`, `user_accountLastname`, `user_accountContactnumber`, `user_accountHireddate`, `user_accountStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'EMP-20-00001', 'admin', 'admin', 'Akosi', 'Hatdog', 'Admin', '09099054766', '2020-09-07 02:49:19', 'Active', '2020-09-07 02:49:19', '2020-09-07 02:49:19'),
(2, 2, 2, 2, 'EMP-20-00002', 'cashier', 'cashier', 'Akosi', 'Halaman', 'Cashier', '09099054769', '2020-09-07 03:17:30', 'Inactive', '2020-09-07 02:49:19', '2020-09-07 03:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_department`
--

CREATE TABLE `user_department` (
  `user_departmentID` bigint(20) NOT NULL,
  `user_departmentCode` varchar(100) NOT NULL,
  `user_departmentName` varchar(200) NOT NULL,
  `user_departmentStatus` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_department`
--

INSERT INTO `user_department` (`user_departmentID`, `user_departmentCode`, `user_departmentName`, `user_departmentStatus`, `created_at`, `updated_at`) VALUES
(1, 'DEP-20-00001', 'Information Technology', 'Active', '2020-09-07 02:41:46', '2020-09-07 02:45:38'),
(2, 'DEP-20-00002', 'Sales', 'Active', '2020-09-07 02:44:57', '2020-09-07 02:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_designation`
--

CREATE TABLE `user_designation` (
  `user_designationID` bigint(20) NOT NULL,
  `user_departmentID` bigint(20) NOT NULL,
  `user_designationCode` varchar(100) NOT NULL,
  `user_designationName` varchar(200) NOT NULL,
  `user_designationStatus` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_designation`
--

INSERT INTO `user_designation` (`user_designationID`, `user_departmentID`, `user_designationCode`, `user_designationName`, `user_designationStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 'DES=20-00001', 'Supervisor', 'Active', '2020-09-07 02:42:30', '2020-09-07 02:46:07'),
(2, 2, 'DES=20-00002', 'Cashier', 'Active', '2020-09-07 02:42:30', '2020-09-07 02:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_module`
--

CREATE TABLE `user_module` (
  `user_moduleID` bigint(20) NOT NULL,
  `user_moduleName` varchar(100) NOT NULL,
  `user_moduleShortname` varchar(200) DEFAULT NULL,
  `user_moduleStatus` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_module`
--

INSERT INTO `user_module` (`user_moduleID`, `user_moduleName`, `user_moduleShortname`, `user_moduleStatus`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'dashboard', 'Active', '2020-09-07 01:27:19', '2020-09-07 01:27:19'),
(2, 'Company Setup', 'company_setup', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(3, 'Roles and Permission', 'roles_and_permission', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(4, 'User Department', 'user_department', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(5, 'User Designation', 'user_designation', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(6, 'User Account', 'user_account', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(7, 'Approval Setup', 'approval_setup', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(8, 'Inventory Storage', 'inventory_storage', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(9, 'Warehouse and Storage Reports', 'warehouse_and_storage_reports', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(10, 'Inventory Vendor', 'inventory_vendor', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(11, 'Supplier Reports', 'supplier_reports', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(12, 'Courrier Setup', 'courrier_setup', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(13, 'Logistic Reports', 'logistic_reports', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(14, 'Inventory Group', 'inventory_group', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(15, 'Inventory Item', 'inventory_item', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(16, 'Purchase Request', 'purchase_request', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(17, 'Purchase Order', 'purchase_order', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(18, 'List of Stocks', 'list_of_stocks', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(19, 'Stock In Warehouse', 'stock_in_warehouse', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(20, 'Stock Out Warehouse', 'stock_out_warehouse', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(21, 'Stock In Department', 'stock_in_department', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(22, 'Transfer Request Form', 'transfer_request_form', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(23, 'Inventory Movement', 'inventory_movement', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(24, 'Inventory Report', 'inventory_report', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(25, 'Purchase Report', 'purchase_report', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(26, 'Inventory Incident Report', 'inventory_incident_report', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(27, 'Menu Group', 'menu_group', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(28, 'Menu Category', 'menu_category', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(29, 'Menu Item', 'menu_item', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(30, 'Discount Setup', 'discount_setup', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(31, 'Payment Setup', 'payment_setup', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(32, 'Post Scheduling', 'post_scheduling', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(33, 'Cash Tray In', 'cash_tray_in', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(34, 'Dine In/Take Out', 'dine_in/take_out', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(35, 'Recall', 'recall', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(36, 'Void', 'void', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(37, 'Discount', 'discount', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(38, 'Settle', 'settle', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(39, 'Cash Out', 'cash_out', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(40, 'Cashier Report', 'cashier_report', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26'),
(41, 'Sales Report', 'sales_report', 'Active', '2020-09-07 01:44:26', '2020-09-07 01:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_permission`
--

CREATE TABLE `user_permission` (
  `user_permissionID` bigint(20) NOT NULL,
  `user_roleID` bigint(20) NOT NULL,
  `user_moduleID` bigint(20) NOT NULL,
  `user_permissionStatus` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permission`
--

INSERT INTO `user_permission` (`user_permissionID`, `user_roleID`, `user_moduleID`, `user_permissionStatus`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Active', '2020-09-07 06:36:08', '2020-09-07 06:36:08'),
(2, 1, 2, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(3, 1, 3, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(4, 1, 4, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(5, 1, 5, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(6, 1, 6, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(7, 1, 7, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(8, 1, 8, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(9, 1, 9, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(10, 1, 10, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(11, 1, 11, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(12, 1, 12, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(13, 1, 13, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(14, 1, 14, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(15, 1, 15, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(16, 1, 16, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(17, 1, 17, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(18, 1, 18, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(19, 1, 19, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(20, 1, 20, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(21, 1, 21, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(22, 1, 22, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(23, 1, 23, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(24, 1, 24, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(25, 1, 25, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(26, 1, 26, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(27, 1, 27, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(28, 1, 28, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(29, 1, 29, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(30, 1, 30, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(31, 1, 31, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(32, 1, 32, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(33, 1, 33, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(34, 1, 34, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(35, 1, 35, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(36, 1, 36, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(37, 1, 37, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(38, 1, 38, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(39, 1, 39, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(40, 1, 40, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23'),
(41, 1, 41, 'Active', '2020-09-07 06:41:23', '2020-09-07 06:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `user_roleID` bigint(20) NOT NULL,
  `user_roleName` varchar(100) NOT NULL,
  `user_roleDescription` varchar(150) DEFAULT NULL,
  `user_roleStatus` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_roleID`, `user_roleName`, `user_roleDescription`, `user_roleStatus`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, 'Active', '2020-09-07 02:31:51', '2020-09-07 02:31:51'),
(2, 'Cashier', NULL, 'Active', '2020-09-07 02:43:02', '2020-09-07 02:43:02'),
(3, 'CEO', 'Chief Executive Officer', 'Active', '2020-09-07 02:43:45', '2020-09-07 02:43:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_accountID`);

--
-- Indexes for table `user_department`
--
ALTER TABLE `user_department`
  ADD PRIMARY KEY (`user_departmentID`);

--
-- Indexes for table `user_designation`
--
ALTER TABLE `user_designation`
  ADD PRIMARY KEY (`user_designationID`);

--
-- Indexes for table `user_module`
--
ALTER TABLE `user_module`
  ADD PRIMARY KEY (`user_moduleID`);

--
-- Indexes for table `user_permission`
--
ALTER TABLE `user_permission`
  ADD PRIMARY KEY (`user_permissionID`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_accountID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_department`
--
ALTER TABLE `user_department`
  MODIFY `user_departmentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_designation`
--
ALTER TABLE `user_designation`
  MODIFY `user_designationID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_module`
--
ALTER TABLE `user_module`
  MODIFY `user_moduleID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_permission`
--
ALTER TABLE `user_permission`
  MODIFY `user_permissionID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `user_roleID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
