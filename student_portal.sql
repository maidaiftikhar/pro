-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 06:52 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(255) NOT NULL,
  `class_key` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `class_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_key`, `teacher_email`, `class_name`) VALUES
(1, '943615', 'waheed5@gmail.com', 'mscfinal1'),
(2, '780418', 'kalimullah@gmail.com', 'MSc final'),
(3, '726683', 'kalimullah@gmail.com', 'MSc(Previous)'),
(4, '636056', 'kalimullah@gmail.com', 'bs chemistry'),
(5, '780908', 'nasimullah@gmail.com', 'Bs Chemistry'),
(6, '432543', '', 'physics'),
(7, '428204', 'nasimullah@gmail.com', 'physics'),
(8, '585111', 'ilyas@gmail.com', 'MSc(Previous)'),
(9, '213074', 'ilyas@gmail.com', 'Bs Chemistry'),
(10, '568268', 'ilyas@gmail.com', 'Bio'),
(11, '964027', 'ilyas@gmail.com', 'MSc final'),
(12, '720604', 'kashif@gmail.com', 'physics'),
(13, '273129', 'kashif@gmail.com', 'MSc final'),
(14, 'class_key', 'teacheremail', 'classname'),
(15, 'ihsan_555', 'kashif@gmail.com', 'bs chemistry'),
(16, 'bio_2020', 'kashif@gmail.com', 'Bio');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `file_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `class_id`, `file_name`, `file_path`, `file_type`) VALUES
(1, 943615, '', 'testfiles/', ''),
(2, 943615, 'MORA-Scholarship-Form.pdf', 'testfiles/MORA-Scholarship-Form.pdf', 'application/pdf'),
(3, 780418, 'login.php', 'testfiles/login.php', 'application/octet-stream'),
(4, 780418, 'basic formula.xlsx', 'testfiles/basic formula.xlsx', 'application/vnd.openxmlformats-officedocument.spre'),
(5, 585111, '', 'testfiles/', ''),
(6, 213074, 'QR Code Macro.txt', 'testfiles/QR Code Macro.txt', 'text/plain'),
(7, 585111, '', 'testfiles/', ''),
(8, 15, 'naseen.PNG', 'testfiles/naseen.PNG', 'image/png'),
(9, 15, 'awatar.PNG', 'testfiles/awatar.PNG', 'image/png'),
(10, 15, 'Doc2.docx', 'testfiles/Doc2.docx', 'application/vnd.openxmlformats-officedocument.word'),
(11, 15, 'Drawing1.vsdx', 'testfiles/Drawing1.vsdx', 'application/vnd.ms-visio.drawing'),
(12, 15, 'FYP.1.3(development) Customised.docx', 'testfiles/FYP.1.3(development) Customised.docx', 'application/vnd.openxmlformats-officedocument.word'),
(13, 16, 'Ali-CV.pdf', 'testfiles/Ali-CV.pdf', 'application/pdf'),
(14, 16, 'Hotel Auto Menu Â®.pdf', 'testfiles/Hotel Auto Menu Â®.pdf', 'application/pdf'),
(15, 16, 'Hotel Auto Menu Â®.pdf', 'testfiles/Hotel Auto Menu Â®.pdf', 'application/pdf'),
(16, 16, 'Hotel Auto Menu Â®1111.pdf', 'testfiles/Hotel Auto Menu Â®1111.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `keytable`
--

CREATE TABLE `keytable` (
  `key_id` int(255) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `class_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keytable`
--

INSERT INTO `keytable` (`key_id`, `student_email`, `class_id`) VALUES
(1, 'sajid@gmail.com', 123456),
(2, 'ishfaq@gmail.com', 15),
(3, 'ishfaq@gmail.com', 16);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `name`, `url`) VALUES
(4, 'HSSC Scholarship', 'https://www.eduvision.edu.pk/scholarships/merit.php'),
(5, 'HSSC Scholarship', 'https://www.eduvision.edu.pk/scholarships/merit.php');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(255) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_password` varchar(50) NOT NULL,
  `security_question` varchar(100) NOT NULL,
  `question_answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_password`, `security_question`, `question_answer`) VALUES
(1, 'ahsan', 'ahsan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', ''),
(2, 'ishfaq', 'ishfaq@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'What Is your favorite book?', 'java');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(30) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `teacher_email` varchar(30) NOT NULL,
  `teacher_password` varchar(50) NOT NULL,
  `security_question` varchar(100) NOT NULL,
  `question_answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`, `security_question`, `question_answer`) VALUES
(1, 'waheed', 'waheed5@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', ''),
(2, 'Kalim ullah', 'kalimullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
(6, 'Nasim ullah', 'nasimullah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'What Is your favorite book?', 'c++'),
(7, 'Ilyas khan', 'ilyas@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'What Is your favorite book?', 'java'),
(8, 'kashif khan', 'kashif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'What Is your favorite book?', 'java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `keytable`
--
ALTER TABLE `keytable`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `keytable`
--
ALTER TABLE `keytable`
  MODIFY `key_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
