-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 06:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `womenwel`
--

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `no` int(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `title` mediumtext DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `descri` mediumtext DEFAULT NULL,
  `doc` mediumtext DEFAULT NULL,
  `obj` mediumtext DEFAULT NULL,
  `right_logo` varchar(255) DEFAULT NULL,
  `center_logo` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `form` varchar(255) NOT NULL,
  `age` varchar(255) DEFAULT NULL,
  `cast` varchar(255) DEFAULT NULL,
  `marital` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`no`, `date`, `title`, `status`, `descri`, `doc`, `obj`, `right_logo`, `center_logo`, `banner`, `form`, `age`, `cast`, `marital`) VALUES
(21, '2022-10-08 11:38:32', 'MISSION POSHAN', 1, 'Saksham Anganwadi and Poshan 2.0, Integrated Child Development Services (ICDS), Scheme for Adolescent Girls (SAG), National Child Home Scheme, Sustainable Development Goals, Poshan Vatika.             Better health is a necessary condition for human capital or human development and better nutrition is a necessary condition for better health. There is a need to take nutrition as a mission to tackle the challenge of malnutrition in the country. Therefore, the Government of India has announced the launch of Mission Poshan 2.0 in this years budget, under which the goal of nutritional intake, delivery, outreach and strengthening of results has been set.             Apart from this, the Government of India has decided to merge the Supplemental Nutrition Program and Poshan Abhiyan in this years budget. An announcement has also been made in the budget to adopt a consolidated strategy to improve nutritional outcomes in 112 aspirational districts of the country. The government will adopt an intensive strategy to improve nutritional outcomes in all 112 districts. Out of Rs 24,435 crore allocated to the Ministry of Women and Child Development in the budget, Rs 20,105 crore has been allocated to Saksham Anganwadi and Poshan 2.0.', 'medical certificatebank pass bookBank account numberApplication Form', 'To contribute to human capital development of the country.Address challenges of malnutrition.Promote nutrition awareness and good eating habits for sustainable health and wellbeing.Address nutrition related deficiencies through key strategies.AYUSH systems shall be integrated under Poshan 2.0 for wellness and nourishment.', 'logo of mp2.png', 'center logo of poshan.png', 'poster of poshan.png', '', '6', 'scst', 'unmarried'),
(22, '2022-10-08 12:00:26', 'BETI BACHAO BETI PADHAO', 1, 'On 22 January 2015, Prime Minister Narendra Modi started the \"Beti Bachao Beti Padhao\" scheme in Panipat district of Haryana. The main goal of this scheme is to equalize the sex ratio and empower women. So that women can also participate in every sphere of the society. For which education is necessary. And to remove the wrong social discrimination happening with women.', 'Aadhar Card\r\nBirth Certificate\r\nRation Card\r\nPassport Size Photo', 'Help to eliminate gender-based discrimination and to do.\r\nTo protect the girl child.\r\nTo provide education of child girl', '1.png', 'middle logo.png', 'bbbp banner.jpg', '', '7', 'general,obc,scst', 'unmarried'),
(24, '2022-10-08 14:27:28', 'SWADHAR GREH YOJANA', 1, 'Under the Swadhar Greh scheme, all the helpless and destitute women of the country have to be proviUnder this scheme, homeless and destitute women victims of prostitution, prisoner, natural calamity or any other reason are brought to Swadhar Greh and vocational training is given to these women.ded shelter, clothing, food and medical assistance to live. Through this scheme, women have to be emotionally strong and strong', 'Aadhar card\r\nidentity card\r\nBank Account\r\nincome certificate\r\ncaste certificate\r\nmobile number\r\nPassport size photo', 'To cater to the primary need of shelter, food, clothing, medical treatment and care of the women in distress and who are without any social and economic support.\r\nTo enable them to regain their emotional strength that gets hampered due to their encounter with unfortunate circumstances.\r\nTo provide them with legal aid and guidance to enable them to take steps for their readjustment in family/society.\r\nTo rehabilitate them economically and emotionally.', 'swadhar greh logo.jpg', '2.png', 'poster 2.png', '', '10', 'obc,scst', 'married,unmarried');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no` int(255) NOT NULL,
  `datetime` datetime DEFAULT current_timestamp(),
  `mail` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no`, `datetime`, `mail`, `pass`, `name`) VALUES
(1, '2022-10-07 13:04:51', 'whatyou@gmail.com', '12121212', 'Smit K'),
(2, '2022-10-07 13:06:15', 'adada@asmd.com', 'aksdnjdsa', 'aks'),
(3, '2022-10-08 06:41:07', 'akmsdak@asnd.conm', 'dssfcdsasd', 'Sandhya'),
(4, '2022-10-08 06:45:37', 'akmdak@asnd.conm', 'sSZXzXzx', 'nzkjn'),
(5, '2022-10-08 09:12:13', 'makwanah651@gmail.com', '1234', '098Harsh Makwana'),
(6, '2022-10-08 09:15:18', 'makwanah51@gmail.com', '12345678', '12345'),
(7, '2022-12-14 14:47:13', 'sms@gmail.com', '12345678', 'smit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
