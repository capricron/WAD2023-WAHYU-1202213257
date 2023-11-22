-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 02:25 AM
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
-- Database: `modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(5, 'Liberty Gilbert', 'neseq', 'diqured@mailinator.com', '$2y$10$uWoa1xqO9ehB.GjGNAE.4OmuFOmK3SIPfdfGsIGwc2jrLxu0hO8Qi'),
(6, 'Kelly Pace', 'ruxome', 'kududi@mailinator.com', '$2y$10$69jaTBU3jZwt4s6PlKoC2OJRURu1fTScAvGzV0i9xvBNddx9tghp6'),
(7, 'Althea Valentine', 'medyfasix', 'hukaperoqa@mailinator.com', '$2y$10$4eP0/vkgw.pVGjNPAcebLehnkO/KGwKKP6e3wyUZyh5oDbBzmXoHu'),
(8, 'Trevor Rocha', 'toqahomy', 'firyfopake@mailinator.com', '$2y$10$WyDnyIsXuBiCJg64bYHt4ufyntpE/YFXIqUaJiqjqUyUwDjyOfLxy'),
(9, 'Jerry Horton', 'koredih', 'kiniquzy@mailinator.com', '$2y$10$ZMXqqnu0YRBeW5aqVjxrL.w5cOfcpfDj.emynPjco1aIjL7Q8RFAq'),
(11, 'Leroy Cruz', 'mecela', 'c@m.com', '$2y$10$ZSyUZDD.hyxhgQ5ynI/a/uAMA0RYAMTPj2VydaYvLLmXSsT6VtUcK'),
(12, 'Wahyudi Khoeris Salimi', 'wahyu', 'wahyudi@gmail.com', '$2y$10$f95isMQ/bYvyhPjkJAGOXutIHdkqfnZzZ8iivFqNpZtorUozIC.1G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
