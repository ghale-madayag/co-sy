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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

INSERT INTO patient_records VALUES("38","PAT0001","50","161","19.29","120","90","1","03/16/2018","03/30/2018","2018-04-20 11:27:04");
INSERT INTO patient_records VALUES("39","PAT0002","60","167","21.51","120","100","1","04/21/2018","04/26/2018","2018-04-21 11:35:40");
INSERT INTO patient_records VALUES("40","PAT0003","50","161","19.29","120","90","1","04/12/2018","04/18/2018","2018-04-21 13:29:47");
INSERT INTO patient_records VALUES("41","PAT0004","61","158","24.44","100","80","1","04/20/2018","04/21/2018","2018-04-21 14:01:48");



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



