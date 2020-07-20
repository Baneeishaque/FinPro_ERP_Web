-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 07:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_docs`
--

CREATE TABLE `bank_docs` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `pw` varchar(50) NOT NULL,
  `trn` varchar(50) NOT NULL,
  `arn` varchar(50) NOT NULL,
  `purchase_doc` tinyint(1) NOT NULL,
  `bank_doc` tinyint(1) NOT NULL,
  `sales` tinyint(1) NOT NULL,
  `gst_report_doc` tinyint(1) NOT NULL,
  `other_doc` tinyint(1) NOT NULL,
  `gstin` varchar(50) NOT NULL,
  `gst_username` varchar(60) NOT NULL,
  `opening_balance` varchar(255) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `charge_out` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `recieved` varchar(50) NOT NULL,
  `closing_balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contras`
--

CREATE TABLE `contras` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `d/r` varchar(50) NOT NULL,
  `c/r` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gst_report_docs`
--

CREATE TABLE `gst_report_docs` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `income_taxes`
--

CREATE TABLE `income_taxes` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL,
  `assigned` int(11) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `charge_out` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `recieved` int(11) NOT NULL,
  `closing_balance` int(11) NOT NULL,
  `it_username` varchar(50) NOT NULL,
  `pw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `c/r` varchar(50) NOT NULL,
  `d/r` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ledgers`
--

CREATE TABLE `ledgers` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `ledger_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `capital_account` tinyint(1) NOT NULL,
  `cash` tinyint(1) NOT NULL,
  `account_receivable` tinyint(1) NOT NULL,
  `inventory` tinyint(1) NOT NULL,
  `other_assets` tinyint(1) NOT NULL,
  `option1` tinyint(1) NOT NULL,
  `option2` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other_docs`
--

CREATE TABLE `other_docs` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pan_cards`
--

CREATE TABLE `pan_cards` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `charge_out` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `recieved` int(11) NOT NULL,
  `closing_balance` int(11) NOT NULL,
  `assigned` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partnership_deeds`
--

CREATE TABLE `partnership_deeds` (
  `id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `work` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `charge_out` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `recieved` int(11) NOT NULL,
  `closing_balance` int(11) NOT NULL,
  `assigned` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `method` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project_reports`
--

CREATE TABLE `project_reports` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `work` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `charge_out` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `recieved` int(11) NOT NULL,
  `closing_balance` int(11) NOT NULL,
  `assigned` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `method` varchar(50) NOT NULL,
  `taxabl` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_docs`
--

CREATE TABLE `purchase_docs` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `method` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `method` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `inventory_num` varchar(50) NOT NULL,
  `taxable` varchar(50) NOT NULL,
  `cgst` varchar(50) NOT NULL,
  `sgst` varchar(50) NOT NULL,
  `discount` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_docs`
--

CREATE TABLE `sales_docs` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `staff_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trade_marks`
--

CREATE TABLE `trade_marks` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `work` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL,
  `opening_balance` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `charge_out` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `recieved` int(11) NOT NULL,
  `closing_balance` int(11) NOT NULL,
  `assigned` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_docs`
--
ALTER TABLE `bank_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_docs_ibfk_1` (`client_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`,`client_name`);

--
-- Indexes for table `contras`
--
ALTER TABLE `contras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contra_ibfk_1` (`client_id`);

--
-- Indexes for table `gst_report_docs`
--
ALTER TABLE `gst_report_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gst_report_docs_ibfk_1` (`client_id`);

--
-- Indexes for table `income_taxes`
--
ALTER TABLE `income_taxes`
  ADD PRIMARY KEY (`id`,`it_username`,`client_id`,`client_name`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journal_ibfk_1` (`client_id`);

--
-- Indexes for table `ledgers`
--
ALTER TABLE `ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ledger_ibfk_1` (`client_id`);

--
-- Indexes for table `other_docs`
--
ALTER TABLE `other_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `other_docs_ibfk_1` (`client_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `pan_cards`
--
ALTER TABLE `pan_cards`
  ADD PRIMARY KEY (`id`,`client_name`);

--
-- Indexes for table `partnership_deeds`
--
ALTER TABLE `partnership_deeds`
  ADD PRIMARY KEY (`partner_id`,`name`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_ibfk_1` (`client_id`);

--
-- Indexes for table `project_reports`
--
ALTER TABLE `project_reports`
  ADD PRIMARY KEY (`id`,`client_id`,`client_name`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_ibfk_1` (`client_id`);

--
-- Indexes for table `purchase_docs`
--
ALTER TABLE `purchase_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_docs_ibfk_1` (`client_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receipts_ibfk_1` (`client_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_ibfk_1` (`client_id`);

--
-- Indexes for table `sales_docs`
--
ALTER TABLE `sales_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_docs_ibfk_1` (`client_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `trade_marks`
--
ALTER TABLE `trade_marks`
  ADD PRIMARY KEY (`id`,`client_id`,`client_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_docs`
--
ALTER TABLE `bank_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contras`
--
ALTER TABLE `contras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gst_report_docs`
--
ALTER TABLE `gst_report_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income_taxes`
--
ALTER TABLE `income_taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ledgers`
--
ALTER TABLE `ledgers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_docs`
--
ALTER TABLE `other_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pan_cards`
--
ALTER TABLE `pan_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_reports`
--
ALTER TABLE `project_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_docs`
--
ALTER TABLE `purchase_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_docs`
--
ALTER TABLE `sales_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trade_marks`
--
ALTER TABLE `trade_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_docs`
--
ALTER TABLE `bank_docs`
  ADD CONSTRAINT `bank_docs_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `contras`
--
ALTER TABLE `contras`
  ADD CONSTRAINT `contra_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `gst_report_docs`
--
ALTER TABLE `gst_report_docs`
  ADD CONSTRAINT `gst_report_docs_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journal_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `ledgers`
--
ALTER TABLE `ledgers`
  ADD CONSTRAINT `ledger_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `other_docs`
--
ALTER TABLE `other_docs`
  ADD CONSTRAINT `other_docs_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `purchase_docs`
--
ALTER TABLE `purchase_docs`
  ADD CONSTRAINT `purchase_docs_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `sales_docs`
--
ALTER TABLE `sales_docs`
  ADD CONSTRAINT `sales_docs_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
