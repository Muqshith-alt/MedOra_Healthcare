-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2026 at 12:10 AM
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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `reason` text DEFAULT NULL,
  `status` enum('Pending','Confirmed','Cancelled','Completed') DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `user_id`, `doctor_id`, `appointment_date`, `appointment_time`, `reason`, `status`, `created_at`) VALUES
(8, 23, 8, '2026-05-01', '10:00:00', 'fever', 'Pending', '2026-04-30 20:51:51'),
(9, 23, 8, '2026-05-01', '10:00:00', 'fever', 'Pending', '2026-04-30 20:55:02');

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
(8, 'Muqshith Akbar', 'muqshith.akbar@gmail.com', '0757702772', '$2y$10$90hAtQiJzeCW4PlFsvyfrepUiyhGfpSi80oVZBtwbfOQ8rGHrGQn2', '', '2026-04-21 18:17:11'),
(9, 'faizam', 'faizam@gmail.com', '0752274114', '$2y$10$gRuneSEizCEBfu/YJ2sjCeqSbpNnQV/OchuEgZypXFAPdmdsIA746', 'Dermatologist', '2026-04-30 16:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule`
--

CREATE TABLE `doctor_schedule` (
  `schedule_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `day_of_week` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` enum('Available','Busy') DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_schedule`
--

INSERT INTO `doctor_schedule` (`schedule_id`, `doctor_id`, `day_of_week`, `start_time`, `end_time`, `status`) VALUES
(1, 8, 'Monday', '09:00:00', '17:00:00', 'Available'),
(2, 8, 'Wednesday', '13:58:00', '16:01:00', 'Available');

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
(23, 'Muqshith Akbar', 'muqshith@gmail.com', '0757702778', '$2y$10$wjR//hH2NHFaL4.HCZ1MAOoIAyhQhEvVDJ2Avkgimn74dmh6OEeaK', '2026-04-30 12:50:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `fk_appointment_user` (`user_id`),
  ADD KEY `fk_appointment_doctor` (`doctor_id`);

--
-- Indexes for table `doctors_account`
--
ALTER TABLE `doctors_account`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `doctor_id` (`doctor_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors_account`
--
ALTER TABLE `doctors_account`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointment_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctors_account` (`doctor_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_appointment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD CONSTRAINT `doctor_schedule_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors_account` (`doctor_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
