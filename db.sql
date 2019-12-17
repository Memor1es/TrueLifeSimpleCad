-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 01:46 PM
-- Server version: 10.1.41-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tru3l1fe_vtablet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuerpomedico`
--

CREATE TABLE `cuerpomedico` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cuerpomedico`
--

INSERT INTO `cuerpomedico` (`id`, `usuario`, `mail`, `pass`) VALUES
(13, 'Daniel Evans', 'daniel@truelife.es', '0966c02d5b64c82578ac7827789bf3eaee680788'),
(14, 'use', 'user@user.user', '92c08ebadbd3104fbea82b6db734b38c9ef57b73'),
(15, 'demo', 'demo@demo.demo', '929ac48a9775acdc0c5d0f8ea9fa7da79fa75e6d');

-- --------------------------------------------------------

--
-- Table structure for table `ems`
--

CREATE TABLE `ems` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registromedico` text COLLATE utf8_unicode_ci NOT NULL,
  `seguro` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ems`
--

INSERT INTO `ems` (`id`, `nombre`, `registromedico`, `seguro`) VALUES
(20, 'silvia', 'jadhjasdad', 'aujsdasdad'),
(21, 'weqdwe', 'OPERACION WERUFHWERU', '39000$');

-- --------------------------------------------------------

--
-- Table structure for table `lspd`
--

CREATE TABLE `lspd` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `crimen` text COLLATE utf8_unicode_ci NOT NULL,
  `sancion` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `miembros`
--

CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `miembros`
--

INSERT INTO `miembros` (`id`, `usuario`, `mail`, `pass`) VALUES
(14, 'danielevans', 'daniel@truelife.es', '0966c02d5b64c82578ac7827789bf3eaee680788'),
(16, 'test', 'test@test.life', '4fb1f90dc0c4e5d7830a572f7896ce8ecbc8dd2a'),
(17, 'yisus', 'yisus@yisus.yisus', 'fcb75131a18ace3b07535b8caf062f5384a43069'),
(18, 'demo', 'demo@demo.demo', '929ac48a9775acdc0c5d0f8ea9fa7da79fa75e6d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuerpomedico`
--
ALTER TABLE `cuerpomedico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ems`
--
ALTER TABLE `ems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lspd`
--
ALTER TABLE `lspd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuerpomedico`
--
ALTER TABLE `cuerpomedico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ems`
--
ALTER TABLE `ems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lspd`
--
ALTER TABLE `lspd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
