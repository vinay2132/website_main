-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 11:29 AM
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
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `signindetailss`
--

CREATE TABLE `signindetailss` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `psw` varchar(110) NOT NULL,
  `vkey` varchar(110) NOT NULL,
  `varified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signindetailss`
--

INSERT INTO `signindetailss` (`id`, `username`, `email`, `phone`, `psw`, `vkey`, `varified`) VALUES
(11, 'hi', 'boydarorzo@enayu.com', 123, '900150983cd24fb0d6963f7d28e17f72', '776045b539b8b6fc1ad1f8858a30045c', 1),
(13, 'x', 'papib95660@provlst.com', 122, '4124bc0a9335c27f086f24ba207a4912', 'd213e33e574a21de63d768ea2d5d0441', 1),
(14, 'a', 'cevij62845@prowerl.com', 123, '31bbe4c3093979f6f4866f1ee3d9f372', '49086fe3f6da46169ba4fbd07efe446c', 1),
(15, 'viany123', 'gejatov471@provlst.com', 823798479, 'd16fb36f0911f878998c136191af705e', '37b6bb999219a155b825fbd2dbe9ad0c', 1),
(16, 'aaaaaaaa', 'sanexah666@provlst.com', 2312435, '9336ebf25087d91c818ee6e9ec29f8c1', '922d74588b1c2eb8f8adc2e8cf982d02', 1),
(18, 'afdfjlkdsjfdlfkjd', 'nefake5701@prowerl.com', 2331435, '4124bc0a9335c27f086f24ba207a4912', '6ad5222555b89a288d22b7e1edd83232', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signindetailss`
--
ALTER TABLE `signindetailss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signindetailss`
--
ALTER TABLE `signindetailss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
