DROP TABLE IF EXISTS embryology;

CREATE TABLE `embryology` (
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

INSERT INTO embryology VALUES("4","PAT0001","05/23/2017","OR 75-2017","05/20/2018","13","7","6","","","","","1","","11","","","1","12","","","11","","","11","2","1 x 8C G1, 1 xMorulla G1","1","8","67","57 (23+34)","2","S. Nicolas");
INSERT INTO embryology VALUES("5","PAT0001","05/11/2018","OR 75-2017","05/01/2018","10","20","30","40","50","60","70","80","90","100","110","120","130","140","150","160","170","180","190","200","210","220","230","240","250","260","270","N. Nicolas");



DROP TABLE IF EXISTS history;

CREATE TABLE `history` (
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

INSERT INTO history VALUES("30","PAT0005","5","2","3","6","yes","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","2018-06-12 22:52:55");
INSERT INTO history VALUES("33","PAT0001","100","101","105","103","yes","no","2018-06-15","yes","during","105","106","107","108","109","110","f","111","112","113","no","yes","f","","","","","","","","","114","115","116","117","118","119","120","121","122","123","124","125","126","127","128","129","on","130","131","132","133","134","135","136","no","yes","137","138","139","140","141","142","yes","","","","on","on","","","","","143","","","on","","on","","","144","145","146","147","148","149","150","151","152","no","123","no","154","155","156","no","157","158","159","160","no","161","162","163","","","","on","165","","166","167","168","","","","","","","","","","","169","2018-06-15 13:58:09");



DROP TABLE IF EXISTS patient;

CREATE TABLE `patient` (
  `pat_num` varchar(7) NOT NULL,
  `pat_lname` varchar(100) DEFAULT NULL,
  `pat_fname` varchar(100) DEFAULT NULL,
  `pat_mname` varchar(100) DEFAULT NULL,
  `pat_nname` varchar(25) DEFAULT NULL,
  `pat_bday` varchar(10) DEFAULT NULL,
  `pat_email` varchar(100) DEFAULT NULL,
  `pat_occu` varchar(100) DEFAULT NULL,
  `pat_socstat` varchar(10) DEFAULT NULL,
  `pat_contact` varchar(20) DEFAULT NULL,
  `pat_add1` varchar(255) DEFAULT NULL,
  `pat_add2` varchar(255) DEFAULT NULL,
  `pat_indate` datetime DEFAULT NULL,
  PRIMARY KEY (`pat_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("PAT0004","Andres","Josie","D","jos","04/07/1980","jos@gmail.com","architech","Primary","(63) 565-689-6865","Capas, Tarlac","Singapore","2018-04-21 14:01:48");
INSERT INTO patient VALUES("PAT0003","De Vera","Jhoanna Rose","A","joan","06/23/1994","jadevera@gmail.com","encoder","Primary","(63) 929-866-8666","Tarlac","Canada","2018-04-21 13:29:47");
INSERT INTO patient VALUES("PAT0001","mapili","pinky","","pink","04/02/1985","pm@gmail.com","teacher","Primary","(63) 959-896-3589","Magalang, Pampanga","","2018-02-20 11:27:04");
INSERT INTO patient VALUES("PAT0002","Dela Cruz","Juan","p","ju","04/07/1985","jd@gmail.com","teacher","Primary","(63) 929-835-8965","Clark, Pampanga","USA","2018-04-21 11:35:40");
INSERT INTO patient VALUES("PAT0005","Turla","Sharon","","Sharon","07/23/1978","sharonbaydal@yahoo.com","PT","Married","(63) 917-799-7474","Blk 25, Lot 19 St. Jude Village, Angeles City","","2018-05-27 19:54:37");



DROP TABLE IF EXISTS patient_records;

CREATE TABLE `patient_records` (
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
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

INSERT INTO patient_records VALUES("38","PAT0001","50","161","19.29","120","90","1","03/16/2018","03/30/2018","2018-04-20 11:27:04");
INSERT INTO patient_records VALUES("39","PAT0002","60","167","21.51","120","100","Head","04/21/2018","04/26/2018","2018-04-21 11:35:40");
INSERT INTO patient_records VALUES("40","PAT0003","50","161","19.29","120","90","test","04/12/2018","04/18/2018","2018-04-21 13:29:47");
INSERT INTO patient_records VALUES("41","PAT0004","61","158","24.44","100","80","1","04/20/2018","04/21/2018","2018-04-21 14:01:48");
INSERT INTO patient_records VALUES("42","PAT0005","67","152","29.00","110","70","dysmenorrhea, no discharge, hypertension","05/07/2018","05/07/2018","2018-05-27 19:54:37");



DROP TABLE IF EXISTS ultrasound;

CREATE TABLE `ultrasound` (
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

INSERT INTO ultrasound VALUES("80","PAT0001","10/07/2017","Transabdominal","Retroverted","8.0","5.1","5.7","Irregular","Heterogenous","GS: 1.24 cm, 6 2/7 weeks, YS: .27 cm","170","trilaminar","","3.3","4.5","","3","4","5","","5","6","7","","Ascites","Present, Specifically","No Impression");
INSERT INTO ultrasound VALUES("84","PAT0003","05/01/2018","","","","","","","","","","","","","","","","","","","","","","","","","");
INSERT INTO ultrasound VALUES("83","PAT0002","05/01/2018","Transvaginal","Retroverted","","","","","","","","","","","","","4","5","6","","7","8","9","","","","");
INSERT INTO ultrasound VALUES("82","PAT0001","05/04/2018","Transvaginal","Antevered","2","3","4","Irregular","Homogenous","","","","","","","","3","4","5","","8","9","0","","None","Absent","");
INSERT INTO ultrasound VALUES("85","PAT0005","05/28/2018","Transvaginal","","7.2","4.2","4.7","","Homogenous","LO Dominant Follicle 2.3 x 2.3 cms",".7","hyperechoic","","","","","2.4","1.3","","","3.6","2.5","","","None","Absent","Normal uterus and adnexae");
INSERT INTO ultrasound VALUES("86","PAT0005","01/02/1917","Transvaginal","Retroverted","","","","Smooth","","","","","","","","","","","","","","","","","","","");
INSERT INTO ultrasound VALUES("87","PAT0004","01/17/1917","Transvaginal","Antevered","2","2","2","Smooth","Homogenous","as","2","linear","endo","2","3","","2","","","right","","","","left","","","");



DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
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

INSERT INTO user VALUES("1","Carlos","P","Flores Jr.","admin@gmail.com","38f078a81a2b033d197497af5b77f95b50bfcfb8","09298370289","2018-03-28 00:19:15");
INSERT INTO user VALUES("3","Abegail","P","Laxamana","ghale.madayag@gmail.com","7c4a8d09ca3762af61e59520943dc26494f8941b","09298370288","2018-03-28 00:26:45");
INSERT INTO user VALUES("8","Pitabasan","D","Reyes","pdreyes@gmail.com","7c4a8d09ca3762af61e59520943dc26494f8941b","092983702830","2018-04-19 23:49:01");
INSERT INTO user VALUES("9","Jhoanna","A","De Vera","jadevera@yahoo.com","7c4a8d09ca3762af61e59520943dc26494f8941b","09298370254","2018-04-19 23:50:21");



