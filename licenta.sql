-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 09:54 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licenta`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `datePersonale` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `id_user`, `datePersonale`) VALUES
(58, 1, 'a:54:{s:9:"tab1_nume";s:10:"Mihailescu";s:12:"tab1_prenume";s:6:"Andrei";s:10:"tab1_email";s:19:"andreimih@gmail.com";s:12:"tab1_telefon";s:10:"0723909343";s:8:"tab1_sex";s:8:"Masculin";s:9:"tab1_luna";s:4:"June";s:9:"tab1_ziua";s:1:"6";s:7:"tab1_an";s:4:"1994";s:15:"tab1_localitate";s:9:"Bucuresti";s:14:"tab1_facultate";s:14:"Titu Maiorescu";s:19:"tab2_nume_angajator";s:9:"APT Group";s:15:"tab2_localitate";s:9:"Bucuresti";s:9:"tab2_tara";s:7:"Romania";s:22:"tab2_domeniu_angajator";s:12:"IT / Telecom";s:18:"tab2_perioada_luna";s:4:"June";s:16:"tab2_perioada_an";s:4:"2014";s:19:"tab2_perioada_luna2";s:6:"August";s:17:"tab2_perioada_an2";s:4:"2014";s:12:"tab2_functia";s:10:"Practicant";s:12:"tab2_tip_job";s:21:"Internship / Practica";s:14:"tab2_nivel_job";s:5:"Entry";s:15:"tab2_activitati";s:13:"Aplicatie PHP";s:13:"tab3_denumire";s:23:"Liceul George Calinescu";s:15:"tab3_localitate";s:9:"Bucuresti";s:8:"tab3_an1";s:4:"2007";s:8:"tab3_an2";s:4:"2010";s:17:"tab3_specializare";s:11:"Informatica";s:15:"tab3_disciplina";s:22:"Matematica Informatica";s:17:"tab3_fac_denumire";s:14:"Titu Maiorescu";s:19:"tab3_fac_localitate";s:9:"Bucuresti";s:17:"tab3_fac_domeniul";s:2:"IT";s:12:"tab3_fac_an1";s:4:"2013";s:12:"tab3_fac_an2";s:4:"2016";s:21:"tab3_fac_specializare";s:11:"Informatica";s:19:"tab3_fac_disciplina";s:9:"HTML, PHP";s:17:"tab3_mas_denumire";s:14:"Titu Maiorescu";s:19:"tab3_mas_localitate";s:9:"Bucuresti";s:17:"tab3_mas_domeniul";s:2:"IT";s:12:"tab3_mas_an1";s:4:"2014";s:12:"tab3_mas_an2";s:4:"2016";s:21:"tab3_mas_specializare";s:11:"Informatica";s:19:"tab3_mas_disciplina";s:12:"Criptografie";s:10:"tab4_limba";s:7:"Engleza";s:10:"tab4_nivel";s:5:"mediu";s:14:"tab4_ascultare";s:2:"B1";s:11:"tab4_citire";s:2:"B1";s:12:"tab4_vorbire";s:2:"B1";s:12:"tab4_discurs";s:2:"B1";s:12:"tab4_scriere";s:2:"A2";s:24:"tab4_limbaj_specialitate";s:2:"IT";s:18:"tab6_caracterizare";s:0:"";s:15:"tab6_informatii";s:0:"";s:10:"tab6_hobby";s:0:"";s:13:"tab1_inserare";s:8:"Salveaza";}'),
(91, 7, 'a:54:{s:9:"tab1_nume";s:7:"Slavila";s:12:"tab1_prenume";s:4:"Alex";s:10:"tab1_email";s:21:"alexslavila@gmail.com";s:12:"tab1_telefon";s:10:"0723568156";s:8:"tab1_sex";s:8:"Masculin";s:9:"tab1_luna";s:9:"September";s:9:"tab1_ziua";s:2:"20";s:7:"tab1_an";s:4:"1994";s:15:"tab1_localitate";s:9:"Bucuresti";s:14:"tab1_facultate";s:14:"Titu Maiorescu";s:19:"tab2_nume_angajator";s:9:"APT Group";s:15:"tab2_localitate";s:9:"Bucuresti";s:9:"tab2_tara";s:7:"Romania";s:22:"tab2_domeniu_angajator";s:12:"IT / Telecom";s:18:"tab2_perioada_luna";s:4:"June";s:16:"tab2_perioada_an";s:4:"2014";s:19:"tab2_perioada_luna2";s:4:"July";s:17:"tab2_perioada_an2";s:4:"2014";s:12:"tab2_functia";s:10:"Practicant";s:12:"tab2_tip_job";s:21:"Internship / Practica";s:14:"tab2_nivel_job";s:5:"Entry";s:15:"tab2_activitati";s:13:"Aplicatie PHP";s:13:"tab3_denumire";s:15:"Dante Aligherii";s:15:"tab3_localitate";s:9:"Bucuresti";s:8:"tab3_an1";s:4:"2010";s:8:"tab3_an2";s:4:"2014";s:17:"tab3_specializare";s:11:"Informatica";s:15:"tab3_disciplina";s:22:"Matematica Informatica";s:17:"tab3_fac_denumire";s:14:"Titu Maiorescu";s:19:"tab3_fac_localitate";s:9:"Bucuresti";s:17:"tab3_fac_domeniul";s:2:"IT";s:12:"tab3_fac_an1";s:4:"2016";s:12:"tab3_fac_an2";s:4:"2014";s:21:"tab3_fac_specializare";s:11:"Informatica";s:19:"tab3_fac_disciplina";s:21:"HTML, PHP, JavaScript";s:17:"tab3_mas_denumire";s:14:"Titu Maiorescu";s:19:"tab3_mas_localitate";s:9:"Bucuresti";s:17:"tab3_mas_domeniul";s:2:"IT";s:12:"tab3_mas_an1";s:4:"2016";s:12:"tab3_mas_an2";s:4:"2016";s:21:"tab3_mas_specializare";s:11:"Informatica";s:19:"tab3_mas_disciplina";s:12:"Nu stiu inca";s:10:"tab4_limba";s:7:"Engleza";s:10:"tab4_nivel";s:7:"avansat";s:14:"tab4_ascultare";s:2:"A1";s:11:"tab4_citire";s:2:"A1";s:12:"tab4_vorbire";s:2:"A1";s:12:"tab4_discurs";s:2:"A1";s:12:"tab4_scriere";s:2:"A1";s:24:"tab4_limbaj_specialitate";s:2:"IT";s:18:"tab6_caracterizare";s:0:"";s:15:"tab6_informatii";s:0:"";s:10:"tab6_hobby";s:6:"Fotbal";s:13:"tab1_inserare";s:8:"Salveaza";}'),
(93, 11, 'a:54:{s:9:"tab1_nume";s:7:"Popescu";s:12:"tab1_prenume";s:6:"Razvan";s:10:"tab1_email";s:23:"popescurazvan@gmail.com";s:12:"tab1_telefon";s:10:"0734656828";s:8:"tab1_sex";s:8:"Masculin";s:9:"tab1_luna";s:7:"January";s:9:"tab1_ziua";s:2:"24";s:7:"tab1_an";s:4:"1993";s:15:"tab1_localitate";s:9:"Bucuresti";s:14:"tab1_facultate";s:14:"Titu Maiorescu";s:19:"tab2_nume_angajator";s:8:"Class IT";s:15:"tab2_localitate";s:9:"Bucuresti";s:9:"tab2_tara";s:7:"Romania";s:22:"tab2_domeniu_angajator";s:12:"IT / Telecom";s:18:"tab2_perioada_luna";s:4:"July";s:16:"tab2_perioada_an";s:4:"2015";s:19:"tab2_perioada_luna2";s:6:"August";s:17:"tab2_perioada_an2";s:4:"2015";s:12:"tab2_functia";s:10:"Practicant";s:12:"tab2_tip_job";s:21:"Internship / Practica";s:14:"tab2_nivel_job";s:5:"Entry";s:15:"tab2_activitati";s:9:"Suport IT";s:13:"tab3_denumire";s:15:"Eugen Lovinescu";s:15:"tab3_localitate";s:9:"Bucuresti";s:8:"tab3_an1";s:4:"2009";s:8:"tab3_an2";s:4:"2013";s:17:"tab3_specializare";s:11:"Informatica";s:15:"tab3_disciplina";s:22:"Matematica Informatica";s:17:"tab3_fac_denumire";s:14:"Titu Maiorescu";s:19:"tab3_fac_localitate";s:9:"Bucuresti";s:17:"tab3_fac_domeniul";s:2:"IT";s:12:"tab3_fac_an1";s:4:"2014";s:12:"tab3_fac_an2";s:4:"2016";s:21:"tab3_fac_specializare";s:11:"Informatica";s:19:"tab3_fac_disciplina";s:12:"C, C++, Java";s:17:"tab3_mas_denumire";s:14:"Titu Maiorescu";s:19:"tab3_mas_localitate";s:9:"Bucuresti";s:17:"tab3_mas_domeniul";s:2:"IT";s:12:"tab3_mas_an1";s:4:"2016";s:12:"tab3_mas_an2";s:4:"2016";s:21:"tab3_mas_specializare";s:11:"Informatica";s:19:"tab3_mas_disciplina";s:12:"Nu stiu inca";s:10:"tab4_limba";s:7:"Engleza";s:10:"tab4_nivel";s:5:"mediu";s:14:"tab4_ascultare";s:2:"B1";s:11:"tab4_citire";s:2:"B1";s:12:"tab4_vorbire";s:2:"B1";s:12:"tab4_discurs";s:2:"B1";s:12:"tab4_scriere";s:2:"B1";s:24:"tab4_limbaj_specialitate";s:2:"IT";s:18:"tab6_caracterizare";s:0:"";s:15:"tab6_informatii";s:0:"";s:10:"tab6_hobby";s:6:"Fotbal";s:13:"tab1_inserare";s:8:"Salveaza";}'),
(94, 12, 'a:54:{s:9:"tab1_nume";s:8:"Stanescu";s:12:"tab1_prenume";s:13:"Dragos Andrei";s:10:"tab1_email";s:24:"stanescudragos@gmail.com";s:12:"tab1_telefon";s:10:"0246585479";s:8:"tab1_sex";s:8:"Masculin";s:9:"tab1_luna";s:7:"October";s:9:"tab1_ziua";s:1:"1";s:7:"tab1_an";s:4:"1993";s:15:"tab1_localitate";s:9:"Bucuresti";s:14:"tab1_facultate";s:14:"Titu Maiorescu";s:19:"tab2_nume_angajator";s:8:"Class IT";s:15:"tab2_localitate";s:9:"Bucuresti";s:9:"tab2_tara";s:7:"Romania";s:22:"tab2_domeniu_angajator";s:12:"IT / Telecom";s:18:"tab2_perioada_luna";s:9:"September";s:16:"tab2_perioada_an";s:4:"2015";s:19:"tab2_perioada_luna2";s:7:"October";s:17:"tab2_perioada_an2";s:4:"2015";s:12:"tab2_functia";s:10:"Practicant";s:12:"tab2_tip_job";s:21:"Internship / Practica";s:14:"tab2_nivel_job";s:5:"Entry";s:15:"tab2_activitati";s:9:"Suport IT";s:13:"tab3_denumire";s:15:"Eugen Lovinescu";s:15:"tab3_localitate";s:9:"Bucuresti";s:8:"tab3_an1";s:4:"2009";s:8:"tab3_an2";s:4:"2013";s:17:"tab3_specializare";s:11:"Informatica";s:15:"tab3_disciplina";s:22:"Matematica Informatica";s:17:"tab3_fac_denumire";s:14:"Titu Maiorescu";s:19:"tab3_fac_localitate";s:9:"Bucuresti";s:17:"tab3_fac_domeniul";s:2:"IT";s:12:"tab3_fac_an1";s:4:"2016";s:12:"tab3_fac_an2";s:4:"2014";s:21:"tab3_fac_specializare";s:11:"Informatica";s:19:"tab3_fac_disciplina";s:14:"HTML, CSS, PHP";s:17:"tab3_mas_denumire";s:14:"Titu Maiorescu";s:19:"tab3_mas_localitate";s:9:"Bucuresti";s:17:"tab3_mas_domeniul";s:2:"IT";s:12:"tab3_mas_an1";s:4:"2016";s:12:"tab3_mas_an2";s:4:"2016";s:21:"tab3_mas_specializare";s:11:"Informatica";s:19:"tab3_mas_disciplina";s:12:"Nu stiu inca";s:10:"tab4_limba";s:7:"Engleza";s:10:"tab4_nivel";s:7:"avansat";s:14:"tab4_ascultare";s:2:"A1";s:11:"tab4_citire";s:2:"A1";s:12:"tab4_vorbire";s:2:"A1";s:12:"tab4_discurs";s:2:"A1";s:12:"tab4_scriere";s:2:"A1";s:24:"tab4_limbaj_specialitate";s:2:"IT";s:18:"tab6_caracterizare";s:0:"";s:15:"tab6_informatii";s:0:"";s:10:"tab6_hobby";s:12:"Jocuri video";s:13:"tab1_inserare";s:8:"Salveaza";}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `initiala_tata` varchar(5) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `CNP` varchar(20) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `initiala_tata`, `last_name`, `email`, `CNP`, `active`, `type`) VALUES
(1, 'andrei', '5f4dcc3b5aa765d61d8327deb882cf99', 'Mihailescu', 'F', 'Andrei', 'andreimihailescu@gmail.com', '78948694894869486949', 1, 1),
(7, 'alex', '5f4dcc3b5aa765d61d8327deb882cf99', 'Slavila', 'E', 'Alex', 'alexslavila@gmail.com', '84964984984984', 1, 0),
(11, 'razvan', '5f4dcc3b5aa765d61d8327deb882cf99', 'Popescu', 'C', 'Razvan', 'popescurazvan@gmail.com', '9846945694796476', 1, 0),
(12, 'dragos', '5f4dcc3b5aa765d61d8327deb882cf99', 'Stanescu', 'M', 'Dragos Andrei', 'stanescudragos@gmail.com', '19930606456498', 1, 0),
(13, 'alin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Turnagiu', 'C', 'Alin', 'turnagiualin@gmail.com', '0324568456', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
