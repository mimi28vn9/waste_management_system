-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 03:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(11) NOT NULL,
  `center` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `center`, `location`) VALUES
(3, 'A', 'Pugu'),
(4, 'B', 'Kigogo'),
(5, 'C', 'Kinondoni'),
(6, 'D', 'Mbagala'),
(7, 'E', 'Mwenge');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_id`, `location`, `street`, `service`, `created_at`) VALUES
(1, 5, 'Mbagala ', 'Rangitatu', 'Liquid waste', '2023-12-20 08:23:12'),
(2, 3, 'Kawe ', 'Packas', 'Office clearning', '2023-12-20 08:24:20'),
(3, 10, 'Buguruni ', 'Sokoni', 'Home clearning', '2023-12-20 08:24:36'),
(15, 20, 'Mwenge', 'Mlalakuwa', 'Portable toilet renting', '2023-12-23 22:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `confirm_password`, `user_type`) VALUES
(1, '', '', 'admin@gmail.com', '', 'f09697f61d3f58ed3f272f888086beca', 'f09697f61d3f58ed3f272f888086beca', 'admin'),
(2, 'Vicent', 'Kigosi', 'kigosivicent@gmail.com', '0712326659', '54b67e1a5f5bbe011ef9e9e8a332bd12', '54b67e1a5f5bbe011ef9e9e8a332bd12', 'customer'),
(3, 'Amina', 'Juma', 'jumaamina@gmail.com', '0783456754', '861637a425ef06e6d539aaaff113d1d5', '861637a425ef06e6d539aaaff113d1d5', 'customer'),
(4, 'Isaack', 'John', 'johnisaack343@gmail.com', '0656789900', 'fa246d0262c3925617b0c72bb20eeb1d', 'fa246d0262c3925617b0c72bb20eeb1d', 'customer'),
(5, 'Upendo', 'Msuya', 'msuyaupendo@gmail.com', '0718654427', 'a252bfffc38594ccd74448f33711bd96', 'a252bfffc38594ccd74448f33711bd96', 'customer'),
(6, 'John', 'Zackaria', 'zackaria@gmail.com', '0784322217', 'e6767819375f79b71c82ba96ed72368c', 'e6767819375f79b71c82ba96ed72368c', 'customer'),
(8, 'Alice', 'Mlela', 'mlelaalice@gmail.com', '0714658954', '67699d70b5d24e7c0444adc7c1900709', '5f84cf378515232784b8a55788450266', 'customer'),
(9, 'Paulo', 'Kenedy', 'kenedypaulo@gmail.com', '0654343233', 'ac748b57f6435d6f7442bd669d7a7842', 'ac748b57f6435d6f7442bd669d7a7842', 'customer'),
(10, 'Rajabu', 'Shabani', 'shabanirajabu777@gmail.com', '0784675583', 'c1dc62c1001874b3110b7375faabb528', 'c1dc62c1001874b3110b7375faabb528', 'customer'),
(20, 'Denis', 'Mussa', 'musaa654@gmail.com', '0654467543', '03d51258646645680f8264be180c2397', '03d51258646645680f8264be180c2397', 'customer'),
(21, 'Asha', 'Shaban', 'shaban122@gmail.com', '0712567843', 'caf1a3dfb505ffed0d024130f58c5cfa', 'caf1a3dfb505ffed0d024130f58c5cfa', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
