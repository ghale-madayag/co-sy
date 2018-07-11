-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2018 at 07:57 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `embryology`
--

DROP TABLE IF EXISTS `embryology`;
CREATE TABLE IF NOT EXISTS `embryology` (
  `emb_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) DEFAULT NULL,
  `emb_esdate` varchar(45) DEFAULT NULL,
  `emb_cycle` varchar(45) DEFAULT NULL,
  `emb_opudate` varchar(45) DEFAULT NULL,
  `emb_tnec` varchar(45) DEFAULT NULL,
  `emb_rt` varchar(45) DEFAULT NULL,
  `emb_lt` varchar(45) DEFAULT NULL,
  `emb_tnef1` varchar(45) DEFAULT NULL,
  `emb_tnef2` varchar(45) DEFAULT NULL,
  `emb_tnez1` varchar(45) DEFAULT NULL,
  `emb_tnez2` varchar(45) DEFAULT NULL,
  `emb_pi` varchar(45) DEFAULT NULL,
  `emb_mi` varchar(45) DEFAULT NULL,
  `emb_tnme` varchar(45) DEFAULT NULL,
  `emb_tnae1` varchar(45) DEFAULT NULL,
  `emb_tnae2` varchar(45) DEFAULT NULL,
  `emb_tnpe` varchar(45) DEFAULT NULL,
  `emb_tneafi1` varchar(45) DEFAULT NULL,
  `emb_tneafi2` varchar(45) DEFAULT NULL,
  `emb_tneafi3` varchar(45) DEFAULT NULL,
  `emb_tnefer1` varchar(45) DEFAULT NULL,
  `emb_tnefer2` varchar(45) DEFAULT NULL,
  `emb_tnefer3` varchar(45) DEFAULT NULL,
  `emb_tnecle` varchar(45) DEFAULT NULL,
  `emb_tnetran` varchar(45) DEFAULT NULL,
  `emb_getran` varchar(45) DEFAULT NULL,
  `emb_tned` varchar(45) DEFAULT NULL,
  `emb_tnefro` varchar(45) DEFAULT NULL,
  `emb_density` varchar(45) DEFAULT NULL,
  `emb_motility` varchar(45) DEFAULT NULL,
  `emb_morphology` varchar(45) DEFAULT NULL,
  `emb_embryologist` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `embryology`
--

INSERT INTO `embryology` (`emb_id`, `pat_num`, `emb_esdate`, `emb_cycle`, `emb_opudate`, `emb_tnec`, `emb_rt`, `emb_lt`, `emb_tnef1`, `emb_tnef2`, `emb_tnez1`, `emb_tnez2`, `emb_pi`, `emb_mi`, `emb_tnme`, `emb_tnae1`, `emb_tnae2`, `emb_tnpe`, `emb_tneafi1`, `emb_tneafi2`, `emb_tneafi3`, `emb_tnefer1`, `emb_tnefer2`, `emb_tnefer3`, `emb_tnecle`, `emb_tnetran`, `emb_getran`, `emb_tned`, `emb_tnefro`, `emb_density`, `emb_motility`, `emb_morphology`, `emb_embryologist`) VALUES
(4, 'PAT0001', '05/23/2017', 'OR 75-2017', '05/20/2018', '13', '7', '6', '', '', '', '', '1', '', '11', '', '', '1', '12', '', '', '11', '', '', '11', '2', '1 x 8C G1, 1 xMorulla G1', '1', '8', '67', '57 (23+34)', '2', 'S. Nicolas'),
(5, 'PAT0001', '05/11/2018', 'OR 75-2017', '05/01/2018', '10', '20', '30', '40', '50', '60', '70', '80', '90', '100', '110', '120', '130', '140', '150', '160', '170', '180', '190', '200', '210', '220', '230', '240', '250', '260', '270', 'N. Nicolas');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `his_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(45) DEFAULT NULL,
  `his_b1` varchar(45) DEFAULT NULL,
  `his_b2` varchar(45) DEFAULT NULL,
  `his_b3` varchar(45) DEFAULT NULL,
  `his_b4` varchar(45) DEFAULT NULL,
  `his_b5` varchar(45) DEFAULT NULL,
  `his_b6` varchar(45) DEFAULT NULL,
  `his_b7` varchar(45) DEFAULT NULL,
  `his_b8` varchar(45) DEFAULT NULL,
  `his_b9` varchar(45) DEFAULT NULL,
  `his_c1` varchar(45) DEFAULT NULL,
  `his_c2` varchar(45) DEFAULT NULL,
  `his_c3` varchar(45) DEFAULT NULL,
  `his_c4` varchar(45) DEFAULT NULL,
  `his_c5` varchar(45) DEFAULT NULL,
  `his_c6` varchar(45) DEFAULT NULL,
  `his_c7` varchar(45) DEFAULT NULL,
  `his_c8` varchar(45) DEFAULT NULL,
  `his_c9` varchar(45) DEFAULT NULL,
  `his_d1` varchar(45) DEFAULT NULL,
  `his_e1` varchar(45) DEFAULT NULL,
  `his_e2` varchar(45) DEFAULT NULL,
  `his_e1_2` varchar(45) DEFAULT NULL,
  `his_f1` varchar(45) DEFAULT NULL,
  `his_f2` varchar(45) DEFAULT NULL,
  `his_f3` varchar(45) DEFAULT NULL,
  `his_f4` varchar(45) DEFAULT NULL,
  `his_f5` varchar(45) DEFAULT NULL,
  `his_f6` varchar(45) DEFAULT NULL,
  `his_f7` varchar(45) DEFAULT NULL,
  `his_f8` varchar(45) DEFAULT NULL,
  `his_f9` varchar(45) DEFAULT NULL,
  `his_f10` varchar(45) DEFAULT NULL,
  `his_f11` varchar(45) DEFAULT NULL,
  `his_f12` varchar(45) DEFAULT NULL,
  `his_f13` varchar(45) DEFAULT NULL,
  `his_f14` varchar(45) DEFAULT NULL,
  `his_f15` varchar(45) DEFAULT NULL,
  `his_f16` varchar(45) DEFAULT NULL,
  `his_f17` varchar(45) DEFAULT NULL,
  `his_f18` varchar(45) DEFAULT NULL,
  `his_f19` varchar(45) DEFAULT NULL,
  `his_f20` varchar(45) DEFAULT NULL,
  `his_f21` varchar(45) DEFAULT NULL,
  `his_f22` varchar(45) DEFAULT NULL,
  `his_f23` varchar(45) DEFAULT NULL,
  `his_f24` varchar(45) DEFAULT NULL,
  `his_g1` varchar(45) DEFAULT NULL,
  `his_g2` varchar(45) DEFAULT NULL,
  `his_g3` varchar(45) DEFAULT NULL,
  `his_g4` varchar(45) DEFAULT NULL,
  `his_g5` varchar(45) DEFAULT NULL,
  `his_g6` varchar(45) DEFAULT NULL,
  `his_g7` varchar(45) DEFAULT NULL,
  `his_h1` varchar(45) DEFAULT NULL,
  `his_h2` varchar(45) DEFAULT NULL,
  `his_h3` varchar(45) DEFAULT NULL,
  `his_h4` varchar(45) DEFAULT NULL,
  `his_h5` varchar(45) DEFAULT NULL,
  `his_h6` varchar(45) DEFAULT NULL,
  `his_h7` varchar(45) DEFAULT NULL,
  `his_h8` varchar(45) DEFAULT NULL,
  `his_h9` varchar(45) DEFAULT NULL,
  `his_h10` varchar(45) DEFAULT NULL,
  `his_i1` varchar(45) DEFAULT NULL,
  `his_i2` varchar(45) DEFAULT NULL,
  `his_i3` varchar(45) DEFAULT NULL,
  `his_i4` varchar(45) DEFAULT NULL,
  `his_i5` varchar(45) DEFAULT NULL,
  `his_i6` varchar(45) DEFAULT NULL,
  `his_i7` varchar(45) DEFAULT NULL,
  `his_i8` varchar(45) DEFAULT NULL,
  `his_i9` varchar(45) DEFAULT NULL,
  `his_i10` varchar(45) DEFAULT NULL,
  `his_j1` varchar(45) DEFAULT NULL,
  `his_j2` varchar(45) DEFAULT NULL,
  `his_j3` varchar(45) DEFAULT NULL,
  `his_j4` varchar(45) DEFAULT NULL,
  `his_j5` varchar(45) DEFAULT NULL,
  `his_j6` varchar(45) DEFAULT NULL,
  `his_j7` varchar(45) DEFAULT NULL,
  `his_k1` varchar(45) DEFAULT NULL,
  `his_k2` varchar(45) DEFAULT NULL,
  `his_k3` varchar(45) DEFAULT NULL,
  `his_k1_2` varchar(45) DEFAULT NULL,
  `his_k2_2` varchar(45) DEFAULT NULL,
  `his_k3_2` varchar(45) DEFAULT NULL,
  `his_k1_3` varchar(45) DEFAULT NULL,
  `his_k2_3` varchar(45) DEFAULT NULL,
  `his_k3_3` varchar(45) DEFAULT NULL,
  `his_l1` varchar(45) DEFAULT NULL,
  `his_l2` varchar(45) DEFAULT NULL,
  `his_l3` varchar(45) DEFAULT NULL,
  `his_l4` varchar(45) DEFAULT NULL,
  `his_l5` varchar(45) DEFAULT NULL,
  `his_l6` varchar(45) DEFAULT NULL,
  `his_l7` varchar(45) DEFAULT NULL,
  `his_l8` varchar(45) DEFAULT NULL,
  `his_l9` varchar(45) DEFAULT NULL,
  `his_l10` varchar(45) DEFAULT NULL,
  `his_l11` varchar(45) DEFAULT NULL,
  `his_m1` varchar(45) DEFAULT NULL,
  `his_m2` varchar(45) DEFAULT NULL,
  `his_m3` varchar(45) DEFAULT NULL,
  `his_m4` varchar(45) DEFAULT NULL,
  `his_n1` varchar(45) DEFAULT NULL,
  `his_n2` varchar(45) DEFAULT NULL,
  `his_n3` varchar(45) DEFAULT NULL,
  `his_n4` varchar(45) DEFAULT NULL,
  `his_n5` varchar(45) DEFAULT NULL,
  `his_n6` varchar(45) DEFAULT NULL,
  `his_n7` varchar(45) DEFAULT NULL,
  `his_n8` varchar(45) DEFAULT NULL,
  `his_n9` varchar(45) DEFAULT NULL,
  `his_o1` varchar(45) DEFAULT NULL,
  `his_o2` varchar(45) DEFAULT NULL,
  `his_o3` varchar(45) DEFAULT NULL,
  `his_o4` varchar(45) DEFAULT NULL,
  `his_o5` varchar(45) DEFAULT NULL,
  `his_o6` varchar(45) DEFAULT NULL,
  `his_o7` varchar(45) DEFAULT NULL,
  `his_o8` varchar(45) DEFAULT NULL,
  `his_o9` varchar(45) DEFAULT NULL,
  `his_o10` varchar(45) DEFAULT NULL,
  `his_o11` varchar(45) DEFAULT NULL,
  `his_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`his_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`his_id`, `pat_num`, `his_b1`, `his_b2`, `his_b3`, `his_b4`, `his_b5`, `his_b6`, `his_b7`, `his_b8`, `his_b9`, `his_c1`, `his_c2`, `his_c3`, `his_c4`, `his_c5`, `his_c6`, `his_c7`, `his_c8`, `his_c9`, `his_d1`, `his_e1`, `his_e2`, `his_e1_2`, `his_f1`, `his_f2`, `his_f3`, `his_f4`, `his_f5`, `his_f6`, `his_f7`, `his_f8`, `his_f9`, `his_f10`, `his_f11`, `his_f12`, `his_f13`, `his_f14`, `his_f15`, `his_f16`, `his_f17`, `his_f18`, `his_f19`, `his_f20`, `his_f21`, `his_f22`, `his_f23`, `his_f24`, `his_g1`, `his_g2`, `his_g3`, `his_g4`, `his_g5`, `his_g6`, `his_g7`, `his_h1`, `his_h2`, `his_h3`, `his_h4`, `his_h5`, `his_h6`, `his_h7`, `his_h8`, `his_h9`, `his_h10`, `his_i1`, `his_i2`, `his_i3`, `his_i4`, `his_i5`, `his_i6`, `his_i7`, `his_i8`, `his_i9`, `his_i10`, `his_j1`, `his_j2`, `his_j3`, `his_j4`, `his_j5`, `his_j6`, `his_j7`, `his_k1`, `his_k2`, `his_k3`, `his_k1_2`, `his_k2_2`, `his_k3_2`, `his_k1_3`, `his_k2_3`, `his_k3_3`, `his_l1`, `his_l2`, `his_l3`, `his_l4`, `his_l5`, `his_l6`, `his_l7`, `his_l8`, `his_l9`, `his_l10`, `his_l11`, `his_m1`, `his_m2`, `his_m3`, `his_m4`, `his_n1`, `his_n2`, `his_n3`, `his_n4`, `his_n5`, `his_n6`, `his_n7`, `his_n8`, `his_n9`, `his_o1`, `his_o2`, `his_o3`, `his_o4`, `his_o5`, `his_o6`, `his_o7`, `his_o8`, `his_o9`, `his_o10`, `his_o11`, `his_indate`) VALUES
(30, 'PAT0005', '5', '2', '3', '6', 'yes', NULL, '', NULL, NULL, '', '', '', '', '', '', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, '', NULL, '', '', '', NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2018-06-12 22:52:55'),
(33, 'PAT0001', '100', '101', '105', '103', 'yes', 'no', '2018-06-15', 'yes', 'during', '105', '106', '107', '108', '109', '110', 'f', '111', '112', '113', 'no', 'yes', 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '114', '115', '116', '117', '118', '119', '120', '121', '122', '123', '124', '125', '126', '127', '128', '129', 'on', '130', '131', '132', '133', '134', '135', '136', 'no', 'yes', '137', '138', '139', '140', '141', '142', 'yes', NULL, NULL, NULL, 'on', 'on', NULL, NULL, NULL, NULL, '143', NULL, NULL, 'on', NULL, 'on', NULL, NULL, '144', '145', '146', '147', '148', '149', '150', '151', '152', 'no', '123', 'no', '154', '155', '156', 'no', '157', '158', '159', '160', 'no', '161', '162', '163', NULL, NULL, NULL, 'on', '165', NULL, '166', '167', '168', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '169', '2018-06-15 13:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `pat_num` varchar(10) NOT NULL,
  `par_fullname` varchar(100) DEFAULT NULL,
  `par_parbday` varchar(45) DEFAULT NULL,
  `par_parwei` varchar(10) DEFAULT NULL,
  `par_parhei` varchar(10) DEFAULT NULL,
  `par_noc` varchar(2) DEFAULT NULL,
  `par_paroccu` varchar(45) DEFAULT NULL,
  `par_eversmoke` varchar(3) DEFAULT NULL,
  `par_cursmoke` varchar(3) DEFAULT NULL,
  `par_stiperday` varchar(3) DEFAULT NULL,
  `par_agesta` varchar(2) DEFAULT NULL,
  `par_stiperdaybef` varchar(3) DEFAULT NULL,
  `par_agestop` varchar(2) DEFAULT NULL,
  `par_everdra` varchar(3) DEFAULT NULL,
  `par_curdri` varchar(3) DEFAULT NULL,
  `par_morethan` varchar(3) DEFAULT NULL,
  `par_numdrink` varchar(3) DEFAULT NULL,
  `par_agestodri` varchar(2) DEFAULT NULL,
  `par_drugs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`pat_num`, `par_fullname`, `par_parbday`, `par_parwei`, `par_parhei`, `par_noc`, `par_paroccu`, `par_eversmoke`, `par_cursmoke`, `par_stiperday`, `par_agesta`, `par_stiperdaybef`, `par_agestop`, `par_everdra`, `par_curdri`, `par_morethan`, `par_numdrink`, `par_agestodri`, `par_drugs`) VALUES
('PAT0006', 'Abegail L. Madayag', '06/12/1992', '', '', '', '', NULL, NULL, '', '', '', '', NULL, NULL, NULL, '', '', ''),
('PAT0007', 'Jhoanna Rose De Vera', '06/13/2018', '49', '159', '1', 'data encoder', 'on', 'on', '3', '18', '1', '25', 'on', 'on', 'on', '3', '26', '1 marijuana');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pat_num` varchar(7) NOT NULL,
  `pat_lname` varchar(100) DEFAULT NULL,
  `pat_fname` varchar(100) DEFAULT NULL,
  `pat_mname` varchar(100) DEFAULT NULL,
  `pat_nname` varchar(25) DEFAULT NULL,
  `pat_bday` varchar(10) DEFAULT NULL,
  `pat_email` varchar(100) DEFAULT NULL,
  `pat_occu` varchar(100) DEFAULT NULL,
  `pat_socstat` varchar(25) DEFAULT NULL,
  `pat_contact` varchar(20) DEFAULT NULL,
  `pat_add1` varchar(255) DEFAULT NULL,
  `pat_add2` varchar(255) DEFAULT NULL,
  `pat_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_num`, `pat_lname`, `pat_fname`, `pat_mname`, `pat_nname`, `pat_bday`, `pat_email`, `pat_occu`, `pat_socstat`, `pat_contact`, `pat_add1`, `pat_add2`, `pat_indate`) VALUES
('PAT0004', 'Andres', 'Josie', 'D', 'jos', '04/07/1980', 'jos@gmail.com', 'architech', 'Primary', '(63) 565-689-6865', 'Capas, Tarlac', 'Singapore', '2018-04-21 14:01:48'),
('PAT0003', 'De Vera', 'Jhoanna Rose', 'A', 'joan', '06/23/1994', 'jadevera@gmail.com', 'encoder', 'Primary', '(63) 929-866-8666', 'Tarlac', 'Canada', '2018-04-21 13:29:47'),
('PAT0001', 'mapili', 'pinky', '', 'pink', '04/02/1985', 'pm@gmail.com', 'teacher', 'Primary', '(63) 959-896-3589', 'Magalang, Pampanga', '', '2018-02-20 11:27:04'),
('PAT0002', 'Dela Cruz', 'Juan', 'p', 'ju', '04/07/1985', 'jd@gmail.com', 'teacher', 'Primary', '(63) 929-835-8965', 'Clark, Pampanga', 'USA', '2018-04-21 11:35:40'),
('PAT0005', 'Turla', 'Sharon', '', 'Sharon', '07/23/1978', 'sharonbaydal@yahoo.com', 'PT', 'Married', '(63) 917-799-7474', 'Blk 25, Lot 19 St. Jude Village, Angeles City', '', '2018-05-27 19:54:37'),
('PAT0006', 'Madayag', 'Abegail', 'L', 'Bal', '03/07/1991', 'ccs_ghale08@yahoo.com', 'teacher', 'Married', '(63) 965-865-8758', 'Blk. 63, Lot 4, Fiesta Community, San Rafael', 'Blk. 63, Lot 4, Fiesta Community, San Rafael', '2018-06-16 15:59:22'),
('PAT0007', 'Madayag', 'Abegail', 'L', 'jay', '03/07/1991', 'almadayag@tsu.edu.ph', 'Designer', 'Married', '(63) 928-837-0289', 'Blk. 63, Lot 4, Fiesta Community, San Rafael', 'Blk. 63, Lot 4, Fiesta Community, San Rafael', '2018-06-16 21:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `patient_records`
--

DROP TABLE IF EXISTS `patient_records`;
CREATE TABLE IF NOT EXISTS `patient_records` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(7) DEFAULT NULL,
  `pr_wei` varchar(10) DEFAULT NULL,
  `pr_hei` varchar(10) DEFAULT NULL,
  `pr_bmi` varchar(5) DEFAULT NULL,
  `pr_bpsys` int(3) DEFAULT NULL,
  `pr_bpdia` int(3) DEFAULT NULL,
  `pr_cc` varchar(45) DEFAULT NULL,
  `pr_lm` varchar(10) DEFAULT NULL,
  `pr_pm` varchar(10) DEFAULT NULL,
  `pr_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_records`
--

INSERT INTO `patient_records` (`pr_id`, `pat_num`, `pr_wei`, `pr_hei`, `pr_bmi`, `pr_bpsys`, `pr_bpdia`, `pr_cc`, `pr_lm`, `pr_pm`, `pr_indate`) VALUES
(38, 'PAT0001', '50', '161', '19.29', 120, 90, '1', '03/16/2018', '03/30/2018', '2018-04-20 11:27:04'),
(39, 'PAT0002', '60', '167', '21.51', 120, 100, 'Head', '04/21/2018', '04/26/2018', '2018-04-21 11:35:40'),
(40, 'PAT0003', '50', '161', '19.29', 120, 90, 'test', '04/12/2018', '04/18/2018', '2018-04-21 13:29:47'),
(41, 'PAT0004', '61', '158', '24.44', 100, 80, '1', '04/20/2018', '04/21/2018', '2018-04-21 14:01:48'),
(42, 'PAT0005', '67', '152', '29.00', 110, 70, 'dysmenorrhea, no discharge, hypertension', '05/07/2018', '05/07/2018', '2018-05-27 19:54:37'),
(46, 'PAT0006', '50', '161', '19.29', 90, 100, 'test', '06/13/2018', '06/19/2018', '2018-06-16 15:59:22'),
(47, 'PAT0007', '53', '161', '20.45', 90, 100, 'Head', '06/01/2018', '06/12/2018', '2018-06-16 21:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `siemen`
--

DROP TABLE IF EXISTS `siemen`;
CREATE TABLE IF NOT EXISTS `siemen` (
  `pat_num` varchar(10) NOT NULL,
  `sie_color` varchar(45) DEFAULT NULL,
  `sie_volume` varchar(6) DEFAULT NULL,
  `sie_ph` varchar(6) DEFAULT NULL,
  `sie_viscosity` varchar(5) DEFAULT NULL,
  `sie_liquetime` varchar(10) DEFAULT NULL,
  `sie_motility` varchar(10) DEFAULT NULL,
  `sie_grading` varchar(5) DEFAULT NULL,
  `sie_morphology` varchar(10) DEFAULT NULL,
  `sie_spercnt` varchar(5) DEFAULT NULL,
  `sie_puscell` varchar(20) DEFAULT NULL,
  `sie_redcell` varchar(10) DEFAULT NULL,
  `sie_bacteria` varchar(45) DEFAULT NULL,
  `sie_daysabs` varchar(5) DEFAULT NULL,
  `sie_wss` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siemen`
--

INSERT INTO `siemen` (`pat_num`, `sie_color`, `sie_volume`, `sie_ph`, `sie_viscosity`, `sie_liquetime`, `sie_motility`, `sie_grading`, `sie_morphology`, `sie_spercnt`, `sie_puscell`, `sie_redcell`, `sie_bacteria`, `sie_daysabs`, `sie_wss`) VALUES
('PAT0006', 'creamy white', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('PAT0007', 'creamy white', '2.2', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');

-- --------------------------------------------------------

--
-- Table structure for table `ultrasound`
--

DROP TABLE IF EXISTS `ultrasound`;
CREATE TABLE IF NOT EXISTS `ultrasound` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pat_num` varchar(10) DEFAULT NULL,
  `usr_indate` varchar(10) DEFAULT NULL,
  `usr_pus` varchar(45) DEFAULT NULL,
  `usr_uterus` varchar(45) DEFAULT NULL,
  `usr_size_1` varchar(5) DEFAULT NULL,
  `usr_size_2` varchar(5) DEFAULT NULL,
  `usr_size_3` varchar(4) DEFAULT NULL,
  `usr_contour` varchar(45) DEFAULT NULL,
  `usr_echopattern` varchar(45) DEFAULT NULL,
  `usr_echorem` varchar(255) DEFAULT NULL,
  `usr_endometrium` varchar(5) DEFAULT NULL,
  `usr_endometrium_sel` varchar(45) DEFAULT NULL,
  `usr_endometrium_rem` varchar(255) DEFAULT NULL,
  `usr_cer1` varchar(5) DEFAULT NULL,
  `usr_cer2` varchar(5) DEFAULT NULL,
  `usr_cer_urm` varchar(5) DEFAULT NULL,
  `usr_ro1` varchar(5) DEFAULT NULL,
  `usr_ro2` varchar(5) DEFAULT NULL,
  `usr_ro3` varchar(5) DEFAULT NULL,
  `usr_ro_rem` varchar(255) DEFAULT NULL,
  `usr_lo1` varchar(5) DEFAULT NULL,
  `usr_lo2` varchar(5) DEFAULT NULL,
  `usr_lo3` varchar(5) DEFAULT NULL,
  `usr_lo_rem` varchar(255) DEFAULT NULL,
  `usr_cdsf` varchar(45) DEFAULT NULL,
  `usr_opm` varchar(45) DEFAULT NULL,
  `usr_impre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ultrasound`
--

INSERT INTO `ultrasound` (`usr_id`, `pat_num`, `usr_indate`, `usr_pus`, `usr_uterus`, `usr_size_1`, `usr_size_2`, `usr_size_3`, `usr_contour`, `usr_echopattern`, `usr_echorem`, `usr_endometrium`, `usr_endometrium_sel`, `usr_endometrium_rem`, `usr_cer1`, `usr_cer2`, `usr_cer_urm`, `usr_ro1`, `usr_ro2`, `usr_ro3`, `usr_ro_rem`, `usr_lo1`, `usr_lo2`, `usr_lo3`, `usr_lo_rem`, `usr_cdsf`, `usr_opm`, `usr_impre`) VALUES
(80, 'PAT0001', '10/07/2017', 'Transabdominal', 'Retroverted', '8.0', '5.1', '5.7', 'Irregular', 'Heterogenous', 'GS: 1.24 cm, 6 2/7 weeks, YS: .27 cm', '170', 'trilaminar', NULL, '3.3', '4.5', '', '3', '4', '5', NULL, '5', '6', '7', NULL, 'Ascites', 'Present, Specifically', 'No Impression'),
(84, 'PAT0003', '05/01/2018', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', ''),
(83, 'PAT0002', '05/01/2018', 'Transvaginal', 'Retroverted', '', '', '', '', '', '', '', '', NULL, '', '', '', '4', '5', '6', NULL, '7', '8', '9', NULL, '', '', ''),
(82, 'PAT0001', '05/04/2018', 'Transvaginal', 'Antevered', '2', '3', '4', 'Irregular', 'Homogenous', '', '', '', NULL, '', '', '', '3', '4', '5', NULL, '8', '9', '0', NULL, 'None', 'Absent', ''),
(85, 'PAT0005', '05/28/2018', 'Transvaginal', '', '7.2', '4.2', '4.7', '', 'Homogenous', 'LO Dominant Follicle 2.3 x 2.3 cms', '.7', 'hyperechoic', NULL, '', '', '', '2.4', '1.3', '', NULL, '3.6', '2.5', '', NULL, 'None', 'Absent', 'Normal uterus and adnexae'),
(86, 'PAT0005', '01/02/1917', 'Transvaginal', 'Retroverted', '', '', '', 'Smooth', NULL, '', '', NULL, '', '', '', NULL, '', '', '', '', '', '', '', '', NULL, NULL, ''),
(87, 'PAT0004', '01/17/1917', 'Transvaginal', 'Antevered', '2', '2', '2', 'Smooth', 'Homogenous', 'as', '2', 'linear', 'endo', '2', '3', NULL, '2', '', '', 'right', '', '', '', 'left', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(45) DEFAULT NULL,
  `user_mname` varchar(45) DEFAULT NULL,
  `user_lname` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_pword` varchar(45) DEFAULT NULL,
  `user_contact` varchar(20) DEFAULT NULL,
  `user_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_mname`, `user_lname`, `user_email`, `user_pword`, `user_contact`, `user_indate`) VALUES
(1, 'Carlos', 'P', 'Flores Jr.', 'admin@gmail.com', '38f078a81a2b033d197497af5b77f95b50bfcfb8', '09298370289', '2018-03-28 00:19:15'),
(3, 'Abegail', 'P', 'Laxamana', 'ghale.madayag@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '09298370288', '2018-03-28 00:26:45'),
(8, 'Pitabasan', 'D', 'Reyes', 'pdreyes@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '092983702830', '2018-04-19 23:49:01'),
(9, 'Jhoanna', 'A', 'De Vera', 'jadevera@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '09298370254', '2018-04-19 23:50:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
