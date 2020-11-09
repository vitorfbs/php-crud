-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2020 at 01:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friendbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `category`, `date`) VALUES
(1, 'Teste de artigossss', 'Lorem ipsum dolerem blabablalba Lorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalbaLorem ipsum dolerem blabablalba', '11', '2020-11-08'),
(3, 'Deu bom', 'Será que deu mesmo?', 'Johnny', '2020-11-08'),
(4, 'Deu bom', 'Será que deu mesmo?', 'Johnny', '2020-11-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
