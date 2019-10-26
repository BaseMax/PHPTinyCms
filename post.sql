-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2019 at 01:37 AM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vistargo_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(50) NOT NULL,
  `subject` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keyword` text NOT NULL,
  `text` text NOT NULL,
  `texts` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateUpdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `path` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `subject`, `title`, `description`, `keyword`, `text`, `texts`, `date`, `dateUpdate`, `path`) VALUES
(1, 'Nearly 12% of All Tether Is Now on Tron After $100M Chain Swap', '', '', '', 'The amount of Tether (USDT) tokens issued on the Tron (TRX) blockchain now accounts for nearly 12% of all USDT tokens.\\r\\n350 million to 450 million in one day\\r\\nLaunched in mid-April 2019, TRC20-based USDT has hit a total supply of over 490 million tokens on Oc… ', '', '2019-10-25 14:25:28', '0000-00-00 00:00:00', ''),
(2, 'ECB head Mario Draghi is saved by the bell as the eurozone\'s mess escalates - Axios', '', 'Less than 3 million Bitcoin (BTC) remain to be mined, with the process expected to take around 121 years. Some allege however, that Google\'s quantum', '', 'He will hand over control of the central bank to former IMF leader Christine Lagarde who, with no central baking experience, will inherit not just a group of weakening economies, but a squabbling 25-member governing council described by the Wall Stree… [+1546 chars]', '.......!!', '2019-10-25 14:28:29', '2019-10-26 22:04:14', ''),
(3, 'Make Sure You Didn\'t Download One of These 17 Malicious iOS Apps', '', 'Researchers have found 17 apps in Apple’s App Store that are infected with malware. While Apple has since removed the malicious apps from the store, if you have an iPhone or iPad, you should make sure you haven’t downloaded one of them prior to that removal. …', '', 'Researchers have found 17 apps in Apples App Store that are infected with malware. While Apple has since removed the malicious apps from the store, if you have an iPhone or iPad, you should make sure you havent downloaded one of them prior to that removal.\\r\\nT… [+1354 chars]', '', '2019-10-25 14:28:29', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
