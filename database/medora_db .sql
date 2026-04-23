-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2026 at 05:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medora_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appoint_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `doctor_name` varchar(100) DEFAULT NULL,
  `booked_at` datetime DEFAULT current_timestamp(),
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appoint_id`, `id`, `name`, `email`, `address`, `phone`, `age`, `gender`, `doctor_name`, `booked_at`, `reason`) VALUES
(1, NULL, '', '', '', '', 0, '', '', '2026-01-29 22:00:47', NULL),
(2, 2, 'mohamed muqshith', 'muqshithmohamed222@gmail.com', '76/B/2/51/7, Gnanawimala road\r\ndematagoda', '0757702778', 23, 'on', 'Dr. Arham Mustak', '2026-01-29 23:12:06', 'Hello'),
(3, 2, 'Arham', 'arhamcool95@gmail.com', 'mosque road,negombo\r\n', '0756550885', 21, 'on', 'Dr. Muqshith Ahamed', '2026-01-29 23:14:01', 'Heart surgery'),
(4, 10, 'mohamed muqshith', 'muqshithmohamed222@gmail.com', '76/B/2/51/7, Gnanawimala road\r\ndematagoda', '0757702778', 21, 'on', 'Dr. Arham Mustak', '2026-01-30 00:40:06', 'To date the doctor'),
(5, 10, 'mohamed muqshith', 'muqshithmohamed222@gmail.com', '76/B/2/51/7, Gnanawimala road\r\ndematagoda', '0757702778', 21, 'on', 'Dr. Arham Mustak', '2026-01-30 00:40:10', 'To date the doctor'),
(6, 2, 'mohamed muqshith', 'muqshithmohamed222@gmail.com', '76/B/2/51/7, Gnanawimala road\r\ndematagoda', '0757702778', 23, 'on', 'Dr. Muqshith Ahamed', '2026-02-01 15:48:05', 'Heart surgery'),
(7, 2, 'mohamed muqshith', 'muqshithmohamed222@gmail.com', '76/B/2/51/7, Gnanawimala road\r\ndematagoda', '0757702778', 23, 'on', 'Dr.Mohamed Sahdan', '2026-02-01 16:20:23', 'fever'),
(8, 2, 'mohamed muqshith', 'muqshithmohamed222@gmail.com', '76/B/2/51/7, Gnanawimala road\r\ndematagoda', '0757702778', 23, 'on', 'Dr. Arham Mustak', '2026-02-01 16:35:54', 'Love sick.'),
(9, 2, 'mohamed muqshith', 'muqshithmohamed222@gmail.com', '76/B/2/51/7, Gnanawimala road\r\ndematagoda', '0757702778', 23, 'on', 'Dr.Mohamed Sahdan', '2026-02-01 16:48:02', 'Heart surgery'),
(10, 19, 'Muqshith Akbar', 'muqshith.akbar@gmail.com', '4iwurhipwue9', '0766760454', 20, 'on', 'Dr. Arham Mustak', '2026-04-21 17:56:31', 'love sick');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_account`
--

CREATE TABLE `doctors_account` (
  `doctor_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_account`
--

INSERT INTO `doctors_account` (`doctor_id`, `full_name`, `email`, `contact_number`, `password_hash`, `specialization`, `created_at`) VALUES
(8, 'Muqshith Akbar', 'muqshith.akbar@gmail.com', '0757702778', '$2y$10$90hAtQiJzeCW4PlFsvyfrepUiyhGfpSi80oVZBtwbfOQ8rGHrGQn2', 'Cardiologist', '2026-04-21 18:17:11');

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `name`) VALUES
(1, 'Cardiologist'),
(2, 'Cardiac Surgeon'),
(3, 'Neurologist'),
(4, 'Neurosurgeon'),
(5, 'Pediatrician'),
(6, 'Dermatologist'),
(7, 'General Physician'),
(8, 'Orthopedic Surgeon'),
(9, 'Psychiatrist'),
(10, 'Gynecologist'),
(11, 'Obstetrician'),
(12, 'ENT Specialist'),
(13, 'Ophthalmologist'),
(14, 'Urologist'),
(15, 'Nephrologist'),
(16, 'Endocrinologist'),
(17, 'Gastroenterologist'),
(18, 'Pulmonologist'),
(19, 'Oncologist'),
(20, 'Hematologist'),
(21, 'Rheumatologist'),
(22, 'Allergist'),
(23, 'Immunologist'),
(24, 'Anesthesiologist'),
(25, 'Radiologist'),
(26, 'Pathologist'),
(27, 'Emergency Medicine Specialist'),
(28, 'Family Medicine Doctor'),
(29, 'Sports Medicine Specialist'),
(30, 'Plastic Surgeon'),
(31, 'Vascular Surgeon'),
(32, 'Infectious Disease Specialist'),
(33, 'Geriatrician'),
(34, 'Dentist'),
(35, 'Oral Surgeon'),
(36, 'Physiotherapist'),
(37, 'Nutritionist'),
(38, 'Clinical Psychologist');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `created_at`) VALUES
(1, '', '', '', '$2y$10$XjitCz4oin9FDIPsix2MwOJGH3GEfKp2WzENxLBi1nFGqZ95pTKTq', '2026-01-22 10:33:11'),
(2, 'Muqshith Akbar', 'muqshithmohamed222@gmail.com', '0757702778', '$2y$10$hgAASUAFU64EdlHRVZ2ThuM8BcMFKSj3tPlBzgISh87EamvHfkTbq', '2026-01-22 11:11:45'),
(3, 'Arham', 'Arhame@yahoo.com', '0757702454', '$2y$10$eIEnGLNYHknUhSLBVmGQ5.4GaYyMMw6fRmOM.58yEtb5qzQnXb/Aq', '2026-01-22 11:18:06'),
(4, 'Ammar', 'muna@fake.com', '0125478652', '$2y$10$xHXnDhQYrvZqOxOrryStU.oUcJFuo69CVBG9W70i7rT8fJNgIp6wa', '2026-01-22 11:44:22'),
(5, 'Munsif', 'munsif@yahoo.com', '0457861568', '$2y$10$6jYep7Ya4o6LVLJdw5n0fe0TMbgphj7BbUshA.yI2Jht25JS50pUe', '2026-01-22 12:42:42'),
(6, 'Hameez', 'Hameez@fake.com', '0754218963', '$2y$10$.S9fHp.XvF2FcRKWBR52zOLG5XaznyGJy9sW4MfFEBsDFY1iBXaR2', '2026-01-22 14:04:36'),
(7, 'Ammar', 'ammar111@fake.com', '0757703778', '$2y$10$qSWTerzrbGHzqG0WVuDEpOwzyizOdwpSHskedfSJch1jTtDxRZwLe', '2026-01-22 15:55:29'),
(8, 'Meenpudi Minza', 'meenpudi@minza.com', '0123781525', '$2y$10$2ALcQ2kQ1xTUGWDaBFxYLOud22izJNE9.16HFQ6c/aHaeprfepCcS', '2026-01-26 13:59:16'),
(9, 'Ammar', 'muqshithmohamed5@gmail.com', '0754202594', '$2y$10$Ow8bja.QhmNvvLRGAwIcAOvY60ppRPJwACqRGb2ZQxkpqSyD3fvM.', '2026-01-26 18:13:55'),
(10, 'Arham', 'arhamMusthak@gmail.com', '0756550885', '$2y$10$VW60S8dqO2ILxSlzVnPoWOap3G1NtHtuxLx6rsrr1n4PL90dhLt0O', '2026-01-26 18:40:27'),
(11, 'Arham Mustaq', 'Arhammustaq@fake.com', '0757702777', '$2y$10$2xBWaYWNAEcYPTt/g2tCZ.J/fYBmiQ9CgdMPf6qsK0yi1qwDyFKC2', '2026-02-01 10:15:08'),
(12, 'Mirun', 'mirun@gmail.com', '0757702745', '$2y$10$UkJG8J59ctp6wR/Pr4jXXeK9whihL0iBfxF5W.mC6j9lmIBIFzjWu', '2026-02-01 10:21:27'),
(13, 'MirunK', 'mirunK@gmail.com', '0757702755', '$2y$10$AJPG.HU109/MtoXvqVQvuO/i6IoP8..bbGb8BKy0lGQ4jcqvlAjDe', '2026-02-01 10:23:38'),
(14, 'MirunM', 'mirunM@gmail.com', '0757702123', '$2y$10$eDXnBBmecQaJBO2Wx4lLYeUIMmXZFdb0.cIBZa4jz/P.mO5Ar0tcG', '2026-02-01 10:24:22'),
(15, 'Muna', 'muqshithmohamed454@gmail.com', '0123781456', '$2y$10$xQutizevYAyxYMTrRjjpG.HlEFybhfKqWFyYnNu7jCYvm4Wuz.c5G', '2026-02-01 10:26:25'),
(16, 'Muqshith Akbar', 'muqshithmohamed@222gmail.com', '0757702778', '$2y$10$ylKAKf41e36wz.DFCVfEhucLbGwln2gJtToHyv3cvU1yNOM0CarRK', '2026-02-01 10:45:39'),
(17, 'Nafla', 'naflafatima@fake.com', '0757702722', '$2y$10$.EXqJobwH.kgpCjJnvpiJuxE9uQ1ZnvhjnOJj2OWluzJ7eNZIRtIK', '2026-02-01 10:47:13'),
(18, 'Akash', 'Akash@fake.com', '1458725645', '$2y$10$p5dEFvRqOSTk8PcnMPHV4eyyA8yrnJg1PpFD1vZE02oT8mVbuZ.Zy', '2026-02-01 11:14:06'),
(19, 'Muqshith Akbar', 'muqshith.akbar@gmail.com', '0757702778', '$2y$10$9wqyXMbNlVkQT.JDhF4rxucU2sS9.uPUiu4T066QKhVUKQQZ5/dvO', '2026-04-21 12:22:13'),
(20, 'arham', 'arham@gmail.com', '0757702778', '$2y$10$dL8MpQfvYwljNsDyekJNTO9oiLzxH/0FL.2VTVosQcBYsZIK4FV0W', '2026-04-21 17:55:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appoint_id`),
  ADD KEY `fk_appointments_id` (`id`);

--
-- Indexes for table `doctors_account`
--
ALTER TABLE `doctors_account`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors_account`
--
ALTER TABLE `doctors_account`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointments_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
