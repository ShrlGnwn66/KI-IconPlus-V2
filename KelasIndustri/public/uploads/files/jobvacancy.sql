-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 11:20 AM
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
-- Database: `kelasindustri`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobvacancy`
--

CREATE TABLE `jobvacancy` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `job_description` varchar(255) DEFAULT NULL,
  `qualifications` varchar(255) DEFAULT NULL,
  `placement` varchar(255) DEFAULT NULL,
  `work_hours` varchar(255) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobvacancy`
--

INSERT INTO `jobvacancy` (`id`, `picture`, `title`, `job_description`, `qualifications`, `placement`, `work_hours`, `expired_date`, `created_at`, `updated_at`) VALUES
(1, 'images/job1.png', 'Junior Programmer', 'Merancang UI/UX website, Merancang UI/UX Apps Mobile, Merancang Front-end Website.', 'Menguasai React JS, Angular, Golang, Express JS, Python, Di utamakan mempunyai keahlian UI/UX.', 'Jember, Jawa Timur.', 'Part Time', '2023-10-12', '2023-09-25 21:04:58', '2023-09-26 02:09:59'),
(2, 'images/job2.png', 'Software Developer', 'Merancang UI/UX website, Merancang UI/UX Apps Mobile, Merancang Front-end Website.', 'Menguasai React JS, Angular, Golang, Express JS, Python, Di utamakan mempunyai keahlian UI/UX.', 'Bandung, Jawa Barat.', 'Full Time', '2023-10-07', '2023-09-26 01:09:40', '2023-09-26 01:09:40'),
(3, 'images/job3.png', 'Costumer Service', 'Melayani Pelanggan, Menerima Telepon dari pelanggan, Memberikan solusi atas permasalahan pelanggan.', 'Menguasai skill komunikasi yang baik, Ramah, Goodlooking', 'Semarang, Jawa Tengah.', 'Full Time', '2023-10-31', '2023-09-26 01:14:18', '2023-09-26 01:14:18'),
(4, 'images/job4.png', 'Engineer Telekomunikasi', 'Merancang Topologi Jaringan, Merancang Jaringan FTTH, Menjadi Administrator yang ramah', 'Menguasai Konsep Teknologi GPON, Menguasai konsep FTTH, Dapat bekerja sebagai tim', 'Surabaya, Jawa Timur', 'Full Time', '2023-10-19', '2023-09-26 01:20:17', '2023-09-26 01:20:17'),
(5, 'images/job5.png', 'Mobile Developer', 'Merancang UI/UX Apps Mobile, Merancang Front-end Apps Mobile.', 'Menguasai React Native, Kotlin, Flutter dan Bahasa lainnya,Dapat bekerja sebagai tim.', 'WFH', 'Parti Time', '2023-10-07', '2023-09-26 01:22:14', '2023-09-26 01:22:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobvacancy`
--
ALTER TABLE `jobvacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobvacancy`
--
ALTER TABLE `jobvacancy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
