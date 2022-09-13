-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2022 at 09:33 PM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valoymoc_strategy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cxo`
--

CREATE TABLE `cxo` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cxo`
--

INSERT INTO `cxo` (`id`, `full_name`, `email`, `organization`, `designation`, `address`, `postal_code`, `city`, `phone`, `date`, `about`) VALUES
(1, 'Shariful Haque Shagor', 'Shagor.shariful619@gmail.com', 'Valor of Bangladesh', 'Visualizer', 'Mugda', 1214, 'Dhaka', '01626916140', '2021-11-08', 'Test Run'),
(2, 'Tanbin Siddique Eidul', 'tanbinsiddiqui17@gmail.com', 'xcvxcvbdf', 'xcvc', 'vfdvfvfv', 1224, 'Dhaka', '01521569950', '2021-11-02', '                                    xcvxcv');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sector` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `trxid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `practices` text COLLATE utf8_unicode_ci NOT NULL,
  `achievements` text COLLATE utf8_unicode_ci NOT NULL,
  `trajectory` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `trxid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `full_name`, `email`, `organization`, `designation`, `address`, `postal_code`, `city`, `phone`, `date`, `trxid`, `about`) VALUES
(21, 'Shahidul Islam Palash', 's.palash0@gmail.com', 'Ha-Meem Group', 'General Manager Operation. ', 'House_04, Road_10, Sector_09, Uttara Dhaka Bangladesh. ', 1230, 'Dhaka', '01980100353', '2022-07-25', '9GP2VNBS50', ''),
(22, 'Sabbir Ahmed ', 'rumana@babylon-bd.com', 'Babylon Group ', 'Group CFO', '2-B/1, Darussalam Road, Mirpur, Dhaka', 1216, 'Dhaka', '01713247253', '2022-08-01', '', ''),
(23, 'Arif Bhuiyan ', 'rumana_88@yahoo.com', 'Babylon Group ', 'Group CEO', '2-B/1, Darussalam Road, Mirpur, Dhaka', 1216, 'Dhaka', '01713247253', '2022-08-01', '', ''),
(24, 'Nazmus Saquib Mallick, CPA (US', 'naz.mallick@newzealanddairybd.', 'New Zealand Dairy Products BD ', 'Business Development Manager', 'Shanta Western Tower, Office Space #801, Level # 8, 186, Tejgaon Industrial Area, Dhaka- 1208, Bangladesh', 1208, 'Dhaka', '01313444000', '2022-08-01', '9H144BKG4Y', ''),
(25, 'Mohammad Masum Uddin Khan', 'masum.khan@newzealanddairybd.c', 'Crystal Grains Ltd.', 'Head of Business Operation', 'Shanta Western Tower, Office Space #801, Level # 8, 186, Tejgaon Industrial Area, Dhaka- 1208, Bangladesh', 1208, 'Dhaka', '01713032570', '2022-08-01', '9H184CD2ZW', ''),
(26, 'Muhammad Shariful Anam Shuman', 'shariful.anam@metlife.com.bd', 'Metlife', 'Executive Vice President', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01708461379', '2022-08-02', '0000', ''),
(27, 'Mohammed Ashraful Haque', 'Ashraful.Haque@metlife.com.bd', 'Metlife', 'Senior Executive Vice Presiden', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01711435148', '2022-08-02', '0000', ''),
(28, 'Sharif Mehedi Hassan', 'Sharif.Mehedi@metlife.com.bd', 'Metlife', 'Vice President', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01755639440', '2022-08-02', '0000', ''),
(29, 'Mohammad Ariful Islam', 'Ariful.Islam@metlife.com.bd', 'Metlife', 'Senior Vice President', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01709632850', '2022-08-02', '0000', ''),
(30, 'Mohammad Kamruzzaman', 'M.Kamruzzaman@metlife.com.bd', 'Metlife', 'Senior Executive Vice Presiden', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01711435149', '2022-08-02', '0000', ''),
(31, 'Sharif Mostafiz', 'Sharif.Mostafiz@metlife.com.bd', 'Metlife', 'Vice President', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01713997810', '2022-08-02', '0000', ''),
(32, 'Md. Lutfor Rahman', 'Lutfor.Rahman@metlife.com.bd', 'Metlife', 'Senior Executive Vice Presiden', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01711400365', '2022-08-02', '0000', ''),
(33, 'Muhammad Asif Shams', 'Asif.Shams@metlife.com.bd', 'Metlife', 'Senior Executive Vice Presiden', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01730032357', '2022-08-02', '0000', ''),
(34, 'Syed M Nowfel Anower', 'nowfel.anower@metlife.com.bd', 'Metlife', 'Executive Vice President', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01313448873', '2022-08-02', '0000', ''),
(35, 'Md. Faisal Akhtar', 'Faisal.Akhtar@metlife.com.bd', 'Metlife', 'Vice President', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01709632851', '2022-08-02', '0000', ''),
(36, 'Shaila Parvin', 'shaila.parvin@metlife.com.bd', 'Metlife', 'Executive Vice President', 'Alico Building, 18-20 Motijheel, C/A Dilkusha Rd, Dhaka 1000', 1000, 'Dhaka', '01730076133', '2022-08-02', '0000', ''),
(37, 'Mahmudur Rahman', 'mahmud.rahmn@gmail.com', 'Directorate of Technical Educa', 'CI', 'Jashore', 7460, 'Jashore', '01515281092', '2022-08-01', 'FUJJYRFCCV', ''),
(38, 'Md. Dabirul Islam', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'CEM, AKK', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(39, 'Mr. Nazrul Islam Salim', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'CMO, AKTL', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(40, 'Mr. K M Kamrul Hasan', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'CLO, AKK', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(41, 'Mr. Ashfaque Ahmed', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'CEO, AKPEN', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(42, 'Muhammad Moniruzzaman Miah', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'CEO, AKSL', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(43, 'Ms. Ainun Nahar', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'HOI, AKK', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(44, 'Abdul Wadud', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'Sr. Business Analyst, AKK', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(45, 'Mr. Shibli Noman', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'GM- A & F, AKK', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(46, 'Mr. Rafiqul Islam', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'Head of Accounts, AKK', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(47, 'Tania Hannan Nishi', 'corporate@valorofbangladesh.co', 'A.K. Khan & Company Ltd.', 'Sr. Executive, AKK', '2nd Floor, 57 Gulshan Ave, Dhaka 1212', 1212, 'Dhaka', '01321987654', '2022-08-03', '0000', ''),
(48, 'Ziaul Karim Chowdhury ', 'ziaul.karim@omeralpg.com', 'Omera Petroleum Ltd', 'Senior Manager, SCM', 'Mobil House, CWS (A) 13/A, Gulshan Avenue,Bir Uttam Mir Shawkat Sarak , Dhaka - 1212', 1212, 'Dhaka', '01787654467', '2022-08-04', '0000', ''),
(49, 'Qazi Sohel Ahmad ', 'sohel.ahmad@omeralpg.com', 'Omera Petroleum Ltd', 'General Manager (HoSCM), SCM', 'Mobil House, CWS (A) 13/A, Gulshan Avenue,Bir Uttam Mir Shawkat Sarak , Dhaka - 1212', 1212, 'Dhaka', '01777738988', '2022-08-04', '0000', ''),
(50, 'Atiar Rahman ', 'atiar.rahman@omeralpg.com', 'Omera Petroleum Ltd', 'Head of Finance ', 'Mobil House, CWS (A) 13/A, Gulshan Avenue,Bir Uttam Mir Shawkat Sarak , Dhaka - 1212', 1212, 'Dhaka', '01708124238', '2022-08-04', '0000', ''),
(51, 'Masud Parvez ', 'corporate@rockenergybd.com', 'Rock Energy', 'Head of Business', 'Mobil House, CWS (A) 13/A, Gulshan Avenue,Bir Uttam Mir Shawkat Sarak , Dhaka - 1212', 1212, 'Dhaka', '01708480366', '2022-08-04', '0000', ''),
(52, 'Hasif Sowdagar ', 'hasif.sowdagar@ecg.com.bd', 'East Coast Group ', 'CFO', 'Mobil House, CWS (A) 13/A, Gulshan Avenue,Bir Uttam Mir Shawkat Sarak , Dhaka - 1212', 1212, 'Dhaka', '01708480353', '2022-08-04', '0000', ''),
(53, 'Masudur Rahim', 'masudur.rahim@ecg.com.bd', 'East Coast Group ', 'CEO', 'Mobil House, CWS (A) 13/A, Gulshan Avenue,Bir Uttam Mir Shawkat Sarak , Dhaka - 1212', 1212, 'Dhaka', '01713017594', '2022-08-04', '0000', ''),
(54, 'Mr. Salauddin Yousuf ', 'yousuf_salauddin@yahoo.com', 'Lub-rref (Bangladesh) Ltd.', 'Director ', 'Rupayan Trade Center, Space #5 (7th Floor), 114 Kazi Nazrul Islam Avenue, Dhaka-1000,Bangladesh ', 1000, 'Dhaka', '01923171533', '2022-08-04', '9H4873YFTU', ''),
(57, 'Humayoun Kabir', 'md-humayoun.kabir@unilever.com', 'Unilever Consumer Care Limited', 'Head of Finance', '12th Floor, Santa Forum, GUlshan-Tejgaon Link Road', 1212, 'Dhaka', '01709637942', '2022-08-04', '9H48792NWK', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cxo`
--
ALTER TABLE `cxo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cxo`
--
ALTER TABLE `cxo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
