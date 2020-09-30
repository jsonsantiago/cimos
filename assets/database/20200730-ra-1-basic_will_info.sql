-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 10:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imperial_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `will_aboutlead`
--

CREATE TABLE `will_aboutlead` (
  `aboutlead_id` int(11) NOT NULL,
  `lead_id` int(11) DEFAULT NULL,
  `over18yrs` int(11) DEFAULT NULL,
  `ownhouse` int(11) DEFAULT NULL,
  `undermedication` int(11) DEFAULT NULL,
  `medicationdtls` text DEFAULT NULL,
  `hasdependency` int(11) DEFAULT NULL,
  `dependencydtls` text DEFAULT NULL,
  `inherit_hasspecialneeds` int(11) DEFAULT NULL,
  `specialneedsdtls` text DEFAULT NULL,
  `hasassetsabroad` int(11) DEFAULT NULL,
  `assestsabroad_dtls` text DEFAULT NULL,
  `willalone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `will_beneficiary`
--

CREATE TABLE `will_beneficiary` (
  `id` int(11) NOT NULL,
  `BenTitle` varchar(50) DEFAULT NULL,
  `BenForeName` varchar(50) DEFAULT NULL,
  `BenSurName` varchar(50) DEFAULT NULL,
  `splitequally` int(11) NOT NULL,
  `ispercenter` int(11) NOT NULL,
  `percentage` double NOT NULL,
  `benedied_passtosurviving_child` int(11) NOT NULL,
  `benedied_passtosurviving_bene` int(11) NOT NULL,
  `ClientId` int(11) NOT NULL,
  `leadid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `will_children`
--

CREATE TABLE `will_children` (
  `id` int(11) NOT NULL,
  `ForeName` varchar(50) DEFAULT NULL,
  `SurName` varchar(50) DEFAULT NULL,
  `RelationShip` varchar(50) DEFAULT NULL,
  `RelationShipPartner` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `BirthDate` varchar(50) DEFAULT NULL,
  `ClientId` int(11) NOT NULL,
  `Leadid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `will_executors`
--

CREATE TABLE `will_executors` (
  `id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `ForeName` varchar(50) DEFAULT NULL,
  `SurName` varchar(50) DEFAULT NULL,
  `BirthDate` varchar(50) DEFAULT NULL,
  `leadid` int(11) NOT NULL,
  `ClientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `will_gifts`
--

CREATE TABLE `will_gifts` (
  `id` int(11) NOT NULL,
  `Giftname` varchar(50) DEFAULT NULL,
  `BenTitle` varchar(50) DEFAULT NULL,
  `BenForeName` varchar(50) DEFAULT NULL,
  `BenSurName` varchar(50) DEFAULT NULL,
  `InheritAge` varchar(50) DEFAULT NULL,
  `PartnerRelationShip` varchar(50) DEFAULT NULL,
  `RelationShip` varchar(50) DEFAULT NULL,
  `GiftFrom` varchar(50) DEFAULT NULL,
  `ClientId` int(11) NOT NULL,
  `leadid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `will_guardians`
--

CREATE TABLE `will_guardians` (
  `id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `ForeName` varchar(50) DEFAULT NULL,
  `SurName` varchar(50) DEFAULT NULL,
  `BirthDate` varchar(50) DEFAULT NULL,
  `leadid` int(11) NOT NULL,
  `ClientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `will_leaddtls`
--

CREATE TABLE `will_leaddtls` (
  `clientid` int(11) NOT NULL,
  `lead_id` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Forename` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `OtherName` varchar(50) DEFAULT NULL,
  `Marital` varchar(50) DEFAULT NULL,
  `Mobil` varchar(50) DEFAULT NULL,
  `HomeTel` varchar(50) DEFAULT NULL,
  `PostCode` varchar(50) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `DateOfBirth` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` smallint(1) NOT NULL DEFAULT 1,
  `assestsabroad_dtls` text DEFAULT NULL,
  `specialneedsdtls` text DEFAULT NULL,
  `leaveOut_details` text DEFAULT NULL,
  `medicationdtls` text DEFAULT NULL,
  `willCover` int(11) DEFAULT NULL,
  `hasassetsabroad` int(11) DEFAULT NULL,
  `hasspecialneeds` int(11) DEFAULT NULL,
  `leaveout` int(11) DEFAULT NULL,
  `undermedication` int(11) DEFAULT NULL,
  `ownhouse` int(11) DEFAULT NULL,
  `over18yrs` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `will_leaddtls`
--

INSERT INTO `will_leaddtls` (`clientid`, `lead_id`, `Title`, `Forename`, `Surname`, `OtherName`, `Marital`, `Mobil`, `HomeTel`, `PostCode`, `Address`, `Email`, `DateOfBirth`, `date`, `status`, `assestsabroad_dtls`, `specialneedsdtls`, `leaveOut_details`, `medicationdtls`, `willCover`, `hasassetsabroad`, `hasspecialneeds`, `leaveout`, `undermedication`, `ownhouse`, `over18yrs`) VALUES
(1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30 08:17:29', 1, '', '', '', '', 2, 0, 0, 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wlii_partners`
--

CREATE TABLE `will_partners` (
  `PartnerId` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `PostCode` varchar(50) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `OtherName` varchar(50) DEFAULT NULL,
  `Forename` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Marital` varchar(50) DEFAULT NULL,
  `Mobil` varchar(50) DEFAULT NULL,
  `HomeTel` varchar(50) DEFAULT NULL,
  `DateOfBirth` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `will_aboutlead`
--
ALTER TABLE `will_aboutlead`
  ADD PRIMARY KEY (`aboutlead_id`);

--
-- Indexes for table `will_children`
--
ALTER TABLE `will_children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `will_executors`
--
ALTER TABLE `will_executors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `will_guardians`
--
ALTER TABLE `will_guardians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `will_leaddtls`
--
ALTER TABLE `will_leaddtls`
  ADD PRIMARY KEY (`clientid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `will_aboutlead`
--
ALTER TABLE `will_aboutlead`
  MODIFY `aboutlead_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `will_children`
--
ALTER TABLE `will_children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `will_executors`
--
ALTER TABLE `will_executors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `will_guardians`
--
ALTER TABLE `will_guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `will_leaddtls`
--
ALTER TABLE `will_leaddtls`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
