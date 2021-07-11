-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 11, 2021 at 08:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `recruiter_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `description`, `recruiter_name`, `location`) VALUES
(1, 'web developer', 'Responsibilities:\n\n1. Able to Create a website layout/user interface by using standard HTML/CSS practices\n\n2. Understand responsibility for maintaining, expanding, and scaling our site\n', 'TCS', 'Pune'),
(2, 'Full Stack Developer', 'Full Stack: Python | Django | Javascript | React\n  Good In oop concepts\n*\n4+ years of software experience. 3+ years of experience in either Javascript or Python.\n*Good communication', 'Infosys', 'Mumbai'),
(22, 'Fron End Developer', 'Nihil incidunt nobis, dolor commodi impedit soluta placeat repudiandae repellat saepe ut laudantium sit non accusantium optio odio. Explicabo provident maxime harum?', 'Tata Consultany Services', 'Pune'),
(29, 'Deveops', 'About WebShar\n\nWe are an IT consulting firm headquartered in the USA & our operations team is set up in Pune, India. We collaborate with American start-up companies to develop their ', 'Deveops Enginer', 'Hyderabad'),
(34, 'Wordpress Developer', 'Good knowledge.PHP, HTML5,  Good Knowlege to make chnage =s design CSS3,Elementor Pro & Essential Add-ons Editor.  arrangements on the screen, the colour and font choices etc.', 'Tata Consultany Services', 'Pune'),
(36, 'Mobile Developer ', 'Technical Experience –\n\nExperience in Hybrid Development\nExperience in Ionic/ Cordova framework preferrable\nSkills Needed –\n\nStrong organisational skills\nExcellent Mathematical aptitude', 'Techmahinadra', 'Pune'),
(37, 'Python Developer', 'The prerequisie more about your attitude and aptitude than the specific tools and technologies you have used in the past. You need to have a strong passion for software development.', 'TCS', 'Mumbai'),
(38, 'UI/UX', 'We are looking for a Ui/ UX Developer responsible for managing the interchange of data between the server and the users. Your primary focus will be the development of all front -end', 'capgemini', 'Solapur');

-- --------------------------------------------------------

--
-- Table structure for table `job_request`
--

CREATE TABLE `job_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_request`
--

INSERT INTO `job_request` (`id`, `name`, `email`, `phone`, `address`, `gender`, `msg`, `title`, `description`) VALUES
(53, 'Abhishek Gouda', 'abhishekgouda882@gmail.com', '9373960367', 'akkashwani solapur', 'male', 'i want this job', 'Full Stack Developer', 'Full Stack: Python | Django | Javascript | React  Good In oop concepts*4+ years of software experience. 3+ years of experience in either Javascript or Python.*Good communication'),
(54, 'gayatri Gouda', 'gaytri121@gmail.com', '8793743871', 'akkashwani solapur', 'female', 'Hello sir ', 'web developer', 'Responsibilities:1. Able to Create a website layout/user interface by using standard HTML/CSS practices2. Understand responsibility for maintaining, expanding, and scaling our site'),
(55, 'AMBADAS GOUDA', 'ambadasgouda123@gmail.com', '8888888888', 'MUMBAI', 'male', 'interested', 'Fron End Developer', 'Nihil incidunt nobis, dolor commodi impedit soluta placeat repudiandae repellat saepe ut laudantium sit non accusantium optio odio. Explicabo provident maxime harum?'),
(56, 'Amruta vasal', 'amruta@gmail.com', '8793743866', 'pune', 'female', 'Interest', 'Python Developer', 'The prerequisie more about your attitude and aptitude than the specific tools and technologies you have used in the past. You need to have a strong passion for software development.'),
(57, 'abhi', 'abhi@gmail.com', '9378860369', 'Solapur', 'male', 'I am Interested Sir', 'Full Stack Developer', 'Full Stack: Python | Django | Javascript | React  Good In oop concepts*4+ years of software experience. 3+ years of experience in either Javascript or Python.*Good communication');

-- --------------------------------------------------------

--
-- Table structure for table `regdashboard`
--

CREATE TABLE `regdashboard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regdashboard`
--

INSERT INTO `regdashboard` (`id`, `name`, `email`, `password`, `address`) VALUES
(1, 'Abhishek Gouda', 'abhishekgouda882@gmail.com', 'abhi123', 'akkashwani solapur'),
(2, 'Abhi', 'admin', 'admin', 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `phone`, `email`, `password`, `address`) VALUES
(2, 'Abhishek Gouda', '9373960367', 'abhishekgouda882@gmail.com', 'abhi123', 'akkashwani solapur'),
(6, 'abhi', '9373960367', 'ag@gmail.com', 'abcd123', 'pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_request`
--
ALTER TABLE `job_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regdashboard`
--
ALTER TABLE `regdashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `job_request`
--
ALTER TABLE `job_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `regdashboard`
--
ALTER TABLE `regdashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
