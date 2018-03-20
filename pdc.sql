-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 05:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `reciever`, `message`) VALUES
(1, 'muksa', 'preetbohra', 'Hello Doctor!'),
(2, 'muksa', 'preetbohra', 'test'),
(3, 'muksa', 'preetbohra', 'test'),
(4, 'muksa', '', 'test'),
(5, 'muksa', '', 'test'),
(6, 'muksa', '<script> document.write(name) </script>', 'test'),
(7, 'muksa', '<script> document.write(name) </script>', 'test'),
(8, 'muksa', '<script> document.write(name) </script>', 'test'),
(9, 'muksa', '<script> document.write(name) </script>', 'test'),
(10, 'muksa', '<script> document.write(name) </script>', '1'),
(11, 'muksa', 'preetbohra', ''),
(12, 'muksa', 'preetbohra', ''),
(13, 'muksa', 'preetbohra', ''),
(14, '', 'preetbohra', 'test'),
(15, 'muksa', 'preetbohra', 'helloa'),
(16, 'muksa', 'preetbohra', 'tets'),
(17, 'muksa', 'preetbohra', 'tets'),
(18, 'muksa', 'preetbohra', 'tets'),
(19, 'muksa', 'preetbohra', 'tets'),
(20, 'preetbohra', 'muksa', 'Hello Patient!'),
(21, 'muksa', 'preetbohra', 'tets'),
(22, 'muksa', 'preetbohra', 'tets'),
(23, '', 'muksa', 'he'),
(24, '', 'muksa', 'he'),
(25, 'preetbohra', 'muksa', 'tet'),
(26, 'preetbohra', 'muksa', 'tet'),
(27, 'preetbohra', 'muksa', 'tet'),
(28, 'preetbohra', 'muksa', 'tet'),
(29, 'muksa', 'preetbohra', 'hello'),
(30, 'muksa', 'preetbohra', 'Hi Doctor! :)'),
(31, 'preetbohra', 'muksa', 'hola'),
(32, 'preetbohra', '', ''),
(33, '', '', 'hello doctor this is test'),
(34, 'muksa', '', 'hello doc saab'),
(35, 'muksa', '', ''),
(36, 'muksa', '', 'hello'),
(37, 'muksa', '', 'hello'),
(38, 'muksa', '', 'heloo'),
(39, 'muksa', 'preetbohra', 'hello'),
(40, 'muksa', 'preetbohra', 'this is a test message hulululu'),
(41, 'preetbohra', 'muksa', 'helooasf'),
(42, 'preetbohra', 'muksa', 'helooasf'),
(43, 'muksa', 'preetbohra', 'hello doctor'),
(44, 'preetbohra', 'muksa', 'hello patient');

-- --------------------------------------------------------

--
-- Table structure for table `cure`
--

CREATE TABLE `cure` (
  `id` int(11) NOT NULL,
  `disease` varchar(256) NOT NULL,
  `medication` varchar(256) NOT NULL,
  `precautions` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cure`
--

INSERT INTO `cure` (`id`, `disease`, `medication`, `precautions`) VALUES
(1, 'fever', 'patacetamol 500mg', 'Avoid Cold Water, Take Warm Baths.'),
(2, 'Malaria', 'Alag Alag Davai', 'Macharo se Door rho bhai'),
(3, 'ulcer', 'pet me jalan ki davai', 'Thoda chill khana kha bhai mere. Kyu mrna hai teko?'),
(4, 'gas', 'Some Davai with awesome Price', 'Kam khaya kr'),
(5, 'food poisoning', 'Antibiotic', 'Bahar ka khaya to samaj lena tu !!!'),
(6, 'tuberculosis', 'Ameero ki davaiya', 'Aur ignore kr khaasi. Amitab Bachan ki advertisement ni dekhi?');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `symptom` varchar(256) NOT NULL,
  `disease` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `symptom`, `disease`) VALUES
(1, 'headache', 'headache,fever,malaria,dengue,yellow fever'),
(2, 'stomach ache', 'stomach ache,ulcer,gas,food poisoning'),
(3, 'cough', 'cough,fever,yellow fever,tuberculosis'),
(4, 'cold', 'cold,fever,tuberculosis'),
(5, 'Fever Low then High', 'malaria,dengue,fellow fever'),
(6, 'body pain', 'body pain,malaria,chikangunia'),
(7, 'itching', 'malaria');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `rating` double NOT NULL,
  `patients_treated` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_username`, `name`, `qualification`, `phone`, `email`, `district`, `pin`, `state`, `country`, `rating`, `patients_treated`, `password`) VALUES
('preetbohra', 'Preet Bohra', 'MBBS', '+919166445750', 'hello@hello.com', 'Jodhpur', 342001, 'Rajasthan', 'India', 5, 43, 'preet@123'),
('test', 'test', 'tset', '89465', 'iusehgof', '', 646, 'iuehgo', 'difjg', 0, 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `doc_resp`
--

CREATE TABLE `doc_resp` (
  `id` int(11) NOT NULL,
  `d_username` varchar(50) NOT NULL,
  `diseases` varchar(255) NOT NULL,
  `medi` varchar(255) NOT NULL,
  `precaution` varchar(255) NOT NULL,
  `p_username` varchar(50) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `time_resp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_query` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_resp`
--

INSERT INTO `doc_resp` (`id`, `d_username`, `diseases`, `medi`, `precaution`, `p_username`, `symptoms`, `time_resp`, `time_query`) VALUES
(12, 'preetbohra', 'test', 'test', 'test', 'muksa', 'headache,cough', '2018-02-12 15:07:31', '2018-02-12 14:43:12'),
(13, 'preetbohra', 'Fever', 'Paracetamol 250 mg', 'Have Proper Sleep', 'raghavagarwal', 'headache,cold,cough', '2018-02-13 07:28:40', '2018-02-13 07:21:29'),
(20, 'preetbohra', 'test', 'tse', 'trd', 'raghavagarwal', 'headache,cough,cold', '2018-02-21 18:11:44', '2018-02-13 11:18:34'),
(21, 'preetbohra', 'hello', 'hello ', 'helloworld', 'muksa', 'cough,cold,headache', '2018-02-21 18:12:14', '2018-02-21 12:34:26'),
(22, 'preetbohra', 'djhvkql', 'jhskdvhk', 'ihdkdv', 'muksa', 'headache,cough,cold', '2018-03-05 05:03:45', '2018-02-25 14:13:26'),
(23, 'test', 'test', 'test', 'test', 'muksa', 'headache,cold,cough', '2018-03-14 13:27:32', '2018-03-05 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_username`, `name`, `age`, `district`, `pin`, `state`, `country`, `phone`, `email`, `password`) VALUES
('ankit', 'dffg', 54, '', 9685, 'o;.,likmj', 'ol,ikmujnh', '02502', ',ljknhb', 'test'),
('gajju', 'hoj', 60, '', 0, 'lkjnnlkn', 'lknlknlk', 'jhbvj', 'kjnklj', 'test'),
('hola', 'Hola', 21, '', 980778, 'IND[', 'Ind', '8758745868', 'test@teat.com', 'test123'),
('muksa', 'neha singh chouhan', 19, '', 342001, 'rajasthan', 'indian', '8384924125', 'nehasinghchouhan7@gmail.com', 'neha123'),
('raghavagarwal', 'Raghav Agarwal', 20, 'Jodhpur', 342001, 'Rajasthan', 'India', '+918003215312', 'hello_hi@hello.com', 'raghav@123'),
('varsha', 'varsha singh', 20, '', 421302, 'maharashtra', 'india', '7276787772', 'varshasingh27@gmail.com', 'varsha27');

-- --------------------------------------------------------

--
-- Table structure for table `responded_query`
--

CREATE TABLE `responded_query` (
  `id` int(11) NOT NULL,
  `p_username` varchar(50) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `responded_query`
--

INSERT INTO `responded_query` (`id`, `p_username`, `symptom`, `time`) VALUES
(3, 'muksa', ',headache,cough', '2018-02-12 14:43:12'),
(7, 'raghavagarwal', ',headache,cold,cough', '2018-02-13 07:21:29'),
(8, 'raghavagarwal', ',headache,cough,cold', '2018-02-13 11:18:34'),
(9, 'muksa', ',cough,cold,headache', '2018-02-21 12:34:26'),
(10, 'muksa', ',headache,cough,cold', '2018-02-25 14:13:26'),
(11, 'muksa', ',headache,cold,cough', '2018-03-05 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `wait`
--

CREATE TABLE `wait` (
  `id` int(11) NOT NULL,
  `p_username` varchar(50) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `flag` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cure`
--
ALTER TABLE `cure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_username`);

--
-- Indexes for table `doc_resp`
--
ALTER TABLE `doc_resp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_username`);

--
-- Indexes for table `responded_query`
--
ALTER TABLE `responded_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wait`
--
ALTER TABLE `wait`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cure`
--
ALTER TABLE `cure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doc_resp`
--
ALTER TABLE `doc_resp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `responded_query`
--
ALTER TABLE `responded_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wait`
--
ALTER TABLE `wait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
