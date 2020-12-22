-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2020 at 09:17 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JobPortal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `skillset` varchar(255) NOT NULL,
  `min_salary` int(11) NOT NULL,
  `max_salary` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_published_date` varchar(255) NOT NULL,
  `last_apply_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_description`, `skillset`, `min_salary`, `max_salary`, `company_name`, `job_published_date`, `last_apply_date`) VALUES
(1, 'Backend Developer', 'nkjfkjsd d  hjd fhdhfbjd fdf', 'nodejs,expressjs,mongodb', 340000, 540000, 'Google', '02/10/2020', '21/10/2020'),
(2, 'Backend Developer', 'nfjdsnf dnf dnf dfkjsdfn dfjkn', 'nodejs,nextjs,expressjs,php,laravel', 540000, 830000, 'Amazon', '19/10/2020', '25/10/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
