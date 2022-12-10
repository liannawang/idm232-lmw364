-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2022 at 06:55 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `recipe_title` varchar(255) NOT NULL,
  `image_path` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `servings` varchar(255) NOT NULL,
  `total_time` varchar(250) NOT NULL,
  `ingredients` varchar(250) NOT NULL,
  `instructions` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_title`, `image_path`, `description`, `servings`, `total_time`, `ingredients`, `instructions`) VALUES
(21, 'cake', 'dist/images/recipes/ancho-chicken.jpeg', 'this is a cake', '5', '10 min', '', ''),
(25, ' z', 'dist/images/recipes/ancho-chicken.jpeg', '', '', '', '', ''),
(26, ' hello', 'dist/images/recipes/ancho-chicken.jpeg', 'asf', '', '', '', ''),
(27, ' s', 'dist/images/recipes/ancho-chicken.jpeg', '', '', '', '', ''),
(28, ' ', 'dist/images/recipes/ancho-chicken.jpeg', '', '', '', '', ''),
(29, ' ', 'dist/images/recipes/ancho-chicken.jpeg', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
