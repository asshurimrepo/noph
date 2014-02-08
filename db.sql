-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4522
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for noph
CREATE DATABASE IF NOT EXISTS `noph` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `noph`;


-- Dumping structure for table noph.department_mst
CREATE TABLE IF NOT EXISTS `department_mst` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.department_mst: ~2 rows (approximately)
DELETE FROM `department_mst`;
/*!40000 ALTER TABLE `department_mst` DISABLE KEYS */;
INSERT INTO `department_mst` (`id`, `dep_id`, `name`) VALUES
	(1, 120, 'Pediatric Department Station 1'),
	(2, 130, 'Emergency Room ');
/*!40000 ALTER TABLE `department_mst` ENABLE KEYS */;


-- Dumping structure for table noph.doctors
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(30) NOT NULL,
  `doc_fname` varchar(30) NOT NULL,
  `doc_mname` varchar(30) NOT NULL,
  `doc_lname` varchar(30) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `doc_gender` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` int(30) NOT NULL,
  `room` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.doctors: ~66 rows (approximately)
DELETE FROM `doctors`;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` (`id`, `doctor_id`, `doc_fname`, `doc_mname`, `doc_lname`, `dept`, `doc_gender`, `tel`, `room`) VALUES
	(1, 20140001, 'Dr Chumba', 'K', 'Mike', 'Upper Annex Medicine  Department ', 'Male', 8564597, 105),
	(2, 20140002, 'Dr Hyde', 'O', 'Lucky', 'Surgery Dorm Department', 'Female', 9676887, 104),
	(3, 20140003, 'Dr Jekyll', 'M', 'Frank', 'Pediatrics Department Station 2', 'Female', 5855542, 103),
	(4, 20140004, 'Dr Denis', 'K', 'Chemjor', 'Pediatrics Department Station 1', 'Male', 4566690, 102),
	(5, 20140005, 'Dr Lee', 'J', 'Pasay', 'Emergency room', 'Female', 7432435, 100),
	(6, 20140006, 'Dr Mariel', 'H', 'codilla', 'Out-Patient Department (OPD)', 'Female', 97654567, 112),
	(7, 20140007, 'Dr Atilio', 'G', 'Gilty', 'Prenatal Department', 'Male', 777, 110),
	(8, 20140008, 'Dr Khayat', 'D', 'Dodoi', 'Surgery Main Department', 'Male', 88674, 111),
	(12, 20140009, 'Dr Jim', 'M', 'Punzalan', 'Operating Room ', 'male', 905643467, 109),
	(24, 20140010, 'Dr  Ann', 'L', 'Cabaces', 'LR-DR (Labor and Delivery Room)', 'female', 976533, 101),
	(25, 20140011, 'Dr Rose', 'A', 'Gutierrez', 'Under Five Clinic', 'female', 784647, 106),
	(26, 20140012, 'Dr Teddy', 'J', 'Tiongson', 'Lower Annex Medicine Department', 'male', 872654, 108),
	(27, 20140013, 'Dr Karen', 'O', 'Villialon', 'Mezzanine Department (Private Rooms)', 'female', 784656, 107),
	(29, 20140015, 'Dr James', 'Kamau', 'Langwech', 'pediatrics department Station 2', 'male', 35465768, 103),
	(31, 20140014, 'Dr Geoffry', 'H', 'Dayot', 'Emergency room', 'Male', 898237, 100),
	(32, 20140016, 'Dr Wendy', 'C', 'Chemtai', 'Emergency room', 'Female', 8674534, 100),
	(34, 20140017, 'Dr  Jane', 'Lim', 'Merriam', 'surgery main department', 'female', 456, 111),
	(36, 20140018, 'Dr Ted', 'K', 'Tubilag', 'pediatrics department Station 1', 'male', 102829220, 102),
	(37, 20140019, 'Dr Grace', 'B', 'Sanchez', 'pediatrics department Station 1', 'female', 2147483647, 102),
	(38, 20140020, 'Dr Mario', 'H', 'Villahermosa', 'pediatrics department Station 1', 'male', 2147483647, 102),
	(39, 20140021, 'Dr Elaine', 'F', 'Fuentivilla', 'pediatrics department Station 1', 'female', 930505969, 102),
	(40, 20140022, 'Dr Hannah', 'L', 'Alabata', 'lr-dr (labor and lelivery room)', 'female', 39330303, 101),
	(41, 20140023, 'Dr Jimmy', 'D', 'Tose', 'lr-dr (labor and lelivery room)', 'male', 849349300, 101),
	(42, 20140024, 'Dr Darah', 'J', 'Sandoval', 'lr-dr (labor and lelivery room)', 'female', 90001011, 101),
	(43, 20140025, 'Dr Steven', 'G', 'Beloso', 'lr-dr (labor and lelivery room)', 'male', 2147483647, 101),
	(44, 20140026, 'Dr Shainah', 'O', 'Aragones', 'pediatrics department Station 2', 'female', 2147483647, 103),
	(45, 20140027, 'Dr Luis', 'G', 'Babao', 'pediatrics department Station 2', 'male', 94009034, 103),
	(46, 20140028, 'Dr Tracy', 'S', 'Aquino', 'pediatrics department Station 2', 'female', 929339094, 103),
	(47, 20140029, 'Dr Frank', 'O', 'Lopez', 'pediatrics department Station 2', 'male', 920210220, 103),
	(48, 20140030, 'Dr Kathy', 'E', 'Electrica', 'surgery dorm department', 'female', 23994422, 104),
	(49, 20140031, 'Dr Tricia Marie', 'U', 'Yap', 'surgery dorm department', 'female', 2147483647, 104),
	(50, 20140032, 'Dr Jeffrey', 'Q', 'Francisco', 'surgery dorm department', 'male', 738329929, 104),
	(51, 20140033, 'Dr Francis', 'R', 'Reyes', 'surgery dorm department', 'male', 2147483647, 104),
	(52, 20140034, 'Dr Satie', 'H', 'Laritay', 'upper annex medicine department', 'male', 2147483647, 105),
	(53, 20140035, 'Dr Jamie', 'F', 'Hunculada', 'upper annex medicine department', 'male', 2147483647, 105),
	(54, 20140036, 'Dr Shena', 'W', 'Villegas', 'upper annex medicine department', 'female', 2147483647, 105),
	(55, 20140037, 'Dr Marie', 'G', 'Santiago', 'upper annex medicine department', 'female', 833040949, 105),
	(56, 20140038, 'Dr Franz', 'G', 'Lee', 'under five clinic', 'female', 2147483647, 106),
	(57, 20140039, 'Dr Tam', 'D', 'Delim', 'under five clinic', 'male', 2147483647, 106),
	(58, 20140040, 'Dr Ram', 'J', 'Legaspi', 'under five clinic', 'male', 2147483647, 106),
	(59, 20140041, 'Dr Teressa', 'P', 'Paraiso', 'under five clinic', 'female', 2147483647, 106),
	(60, 20140042, 'Dr Agnes', 'L', 'Torres', 'mezzanine department (private rooms)', 'male', 632822291, 107),
	(61, 20140043, 'Dr Ligaya', 'M', 'Montes', 'mezzanine department (private rooms)', 'female', 2147483647, 107),
	(62, 20140044, 'Dr Roy', 'H', 'Gabas', 'mezzanine department (private rooms)', 'male', 484404040, 107),
	(63, 20140045, 'Dr Mitch', 'U', 'Nuique', 'mezzanine department (private rooms)', 'male', 474844949, 107),
	(64, 20140046, 'Dr Felix', 'G', 'Nuay', 'lower annex medicine department', 'male', 2147483647, 108),
	(65, 20140047, 'Dr Tevra', 'F', 'Lamatan', 'lower annex medicine department', 'female', 2147483647, 108),
	(66, 20140048, 'Dr Deniara', 'D', 'Looc', 'lower annex medicine department', 'female', 2147483647, 108),
	(67, 20140049, 'Dr David', 'D', 'Donaire', 'lower annex medicine department', 'male', 8129292, 108),
	(68, 20140050, 'Dr Trinidad', 'C', 'Castro', 'operating room', 'male', 4566622, 109),
	(69, 20140051, 'Dr Sallie', 'R', 'Alanano', 'operating room', 'female', 66789900, 109),
	(70, 20140052, 'Dr Kevin', 'C', 'Bantayanon', 'operating room', 'male', 2147483647, 109),
	(71, 20140053, 'Dr Robin', 'H', 'Lapid', 'operating room', 'male', 1819191919, 109),
	(72, 20140054, 'Dr Roselie', 'D', 'Tuayon', 'prenatal department', 'female', 92022020, 110),
	(73, 20140055, 'Dr Santiago', 'K', 'Tore', 'prenatal department', 'male', 191911001, 110),
	(74, 20140056, 'Dr Shirley', 'M', 'Mandayao', 'prenatal department', 'female', 920202002, 110),
	(75, 20140057, 'Dr Troy', 'U', 'Mendez', 'prenatal department', 'male', 222002022, 110),
	(76, 20140058, 'Dr Leonardo', 'Z', 'Aranas', 'surgery main department', 'male', 39300330, 111),
	(77, 20140059, 'Dr Tammy', 'G', 'Olongapo', 'surgery dorm department', 'male', 829220220, 111),
	(78, 20140060, 'Dr Shenna Anne', 'L', 'Delicana', 'surgery main department', 'female', 2147483647, 111),
	(79, 20140061, 'Dr Trance', 'J', 'Parao', 'surgery main department', 'male', 2147483647, 111),
	(80, 20140062, 'Dr Luisa', 'S', 'Sayton', 'out-patient department (OPD)', 'female', 2147483647, 112),
	(81, 20140063, 'Dr Granny', 'F', 'Fuentes', 'out-patient department (OPD)', 'male', 819111001, 112),
	(82, 20140064, 'Dr Nataniel', 'J', 'Kaparas', 'out-patient department (OPD)', 'male', 2147483647, 112),
	(83, 20140065, 'Dr Tricia Lyn', 'O', 'Yan', 'out-patient department (OPD)', 'female', 2147483647, 112),
	(91, 20140066, 'Dr Meriam', 'H', 'Chemjor', 'under five clinic', 'male', 777900, 106);
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;


-- Dumping structure for table noph.invoice
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `amount` int(11) NOT NULL,
  `creation_timestamp` datetime NOT NULL,
  `status` longtext NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.invoice: ~2 rows (approximately)
DELETE FROM `invoice`;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` (`invoice_id`, `patient_id`, `fname`, `mname`, `lname`, `title`, `description`, `amount`, `creation_timestamp`, `status`) VALUES
	(3, 295, 'Mike', 'K', 'Chumba', 'Operation payment', 'Open Reduction Internal Fixation of the Left knee', 25000, '2014-01-23 03:08:39', 'Paid'),
	(5, 2961, 'Denis', 'K', 'Chemjor', 'certificate payment', 'Birth certificate', 250, '2014-01-03 07:06:48', 'Unpaid');
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;


-- Dumping structure for table noph.lab
CREATE TABLE IF NOT EXISTS `lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `fname` varchar(11) NOT NULL,
  `mid_init` varchar(11) NOT NULL,
  `lname` varchar(11) NOT NULL,
  `Lab_test` varchar(300) NOT NULL,
  `date_test` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.lab: ~2 rows (approximately)
DELETE FROM `lab`;
/*!40000 ALTER TABLE `lab` DISABLE KEYS */;
INSERT INTO `lab` (`id`, `patient_id`, `fname`, `mid_init`, `lname`, `Lab_test`, `date_test`) VALUES
	(1, 3438, 'Rocky', 'L', 'Macario', 'Blood test,Platelet, CBC with PLT, Hemoglobin,Hematocrit,Prothrombin time and Clotthing time.', '2014-02-03 10:43:25'),
	(2, 295, 'Mike', 'K', 'Chumba', 'Bleeding time, Erythrocyte sedimentation(ESR),Peripheral smear(c/0 outside lab) and Smear for malari', '2014-02-02 10:39:50');
/*!40000 ALTER TABLE `lab` ENABLE KEYS */;


-- Dumping structure for table noph.patients_info
CREATE TABLE IF NOT EXISTS `patients_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `age` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `contact` int(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `dep_ward` varchar(45) NOT NULL,
  `c_preference` varchar(20) NOT NULL,
  `ornum` int(15) NOT NULL,
  `date_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.patients_info: ~16 rows (approximately)
DELETE FROM `patients_info`;
/*!40000 ALTER TABLE `patients_info` DISABLE KEYS */;
INSERT INTO `patients_info` (`id`, `patient_id`, `fname`, `mname`, `lname`, `bdate`, `age`, `gender`, `address`, `status`, `occupation`, `religion`, `nationality`, `contact`, `email`, `doctor_id`, `dep_ward`, `c_preference`, `ornum`, `date_in`) VALUES
	(1, 295, 'Mike', 'K', 'Chumba', '1968-12-11', 35, 'male', 'dumaguete', 'single', 'carpenter', 'christian', 'filipino', 905345357, 'chumbamike@gmail.com', 20140009, 'Operating Room', 'philhealth', 1001, '2014-02-03 17:25:22'),
	(2, 2961, 'Denis', 'K', 'Chemjor', '1968-12-10', 24, 'male', 'Piapi', 'single', 'teacher', 'christian', 'Briton', 2147483647, 'denchemjor@yahoo.com', 20140009, 'Operating Room', 'payward', 1002, '2014-02-03 17:25:17'),
	(4, 2889, 'Collete', 'L', 'Chumba', '1998-06-18', 5, 'female', 'Batinguel, Dumaguete', 'Single', 'NONE', 'Roman Catholic', 'kenyan', 2147483647, 'collete@yahoo.com', 20140004, 'pediatrics department Station 1', 'philhealth', 1003, '2014-02-03 17:25:31'),
	(5, 2224, 'Mary', 'H', 'Joan', '1979-12-19', 24, 'female', 'Piapi', 'single', 'teacher', 'christian', 'Filipino', 2147483647, 'luckygurl0506@gmail.com', 20140001, 'upper annex medicine department', 'philhealth', 1004, '2014-02-03 17:26:10'),
	(6, 1922, 'Mary', 'D', 'Obab', '1978-12-09', 8, 'female', 'dumaguete', 'single', 'student', 'christian', 'Kenyan', 9063666, 'chumbamike@gmail.com', 20140006, 'out-patient department (OPD)', 'philhealth', 1005, '2014-02-03 17:26:15'),
	(7, 3643, 'Daisy', 'A', 'Joy', '1990-12-31', 35, 'female', 'aldecoa', 'Married', 'teacher', 'Roman Catholic', 'Kenyan', 2147483647, 'luckygurl0506@gmail.com', 20140007, 'prenatal department', 'philhealth', 1006, '2014-02-03 17:26:21'),
	(8, 3438, 'Rocky', 'L', 'Macario', '1980-12-04', 45, 'male', 'Piapi', 'Married', 'teacher', 'christian', 'Frenchman; Frenchwoman', 874357755, 'mizziecollete@hotmail.com', 20140002, 'surgery dorm department', 'charity', 1007, '2014-02-03 17:26:27'),
	(12, 3130, 'gil', 'H', 'mike', '1986-12-05', 25, 'male', 'dumaguete', 'Married', 'Web developer', 'christian', 'Israeli', 2147483647, 'chumbamike@gmail.com', 20140008, 'surgery main department', 'philhealth', 1008, '2014-02-03 17:26:32'),
	(13, 4325, 'Jay dela ', 'S', 'Cruz', '2004-01-03', 9, 'female', 'valencia', 'single', 'student', 'christian', 'Filipino', 9765, 'chumbamike@gmail.com', 20140012, 'lower annex medicine department', 'philhealth', 1009, '2014-02-03 17:26:37'),
	(16, 4314, 'Jayden', 'W', 'Alexander', '1990-01-15', 23, 'male', 'Purok 3', 'single', 'student', 'Muslim', 'Afghan', 879839783, 'jaydenalex@yahoo.com', 20140010, 'lr-dr (labor and lelivery room)', 'payward', 1010, '2014-02-03 17:26:47'),
	(18, 8792, 'Madison', 'Q', 'Abigail', '2000-01-30', 15, 'female', 'Piapi', 'single', 'student', 'Roman Catholic', 'Briton', 89785675, 'madison@gmail.com', 20140013, 'mezzanine department (private rooms)', 'charity', 1011, '2014-02-03 17:26:52'),
	(30, 2085, 'Fortine', 'T', 'Sayson', '1997-02-01', 17, 'male', 'Purok 3', 'single', 'student', 'Roman Catholic', 'Icelander', 5646743, 'fort@gmail.com', 20140012, 'lower annex medicine department', 'charity', 1012, '2014-02-03 17:26:56'),
	(34, 2152, 'Beyonce', 'M', 'Joan', '1984-01-08', 29, 'female', 'Dumaguete City', 'single', 'singer', 'christian', 'American;US citizen', 210387485, 'beyonce@gmail.com', 20140001, 'upper annex medicine department', 'payward', 1013, '0000-00-00 00:00:00'),
	(35, 3802, 'France', 'L', 'Rop', '1990-02-02', 22, 'male', 'aldecoa', 'single', 'student', 'christian', 'Japanis', 824536, 'france@yahoo.com', 20140001, 'Upper Annex Medicine  Department', 'charity', 1014, '2014-02-03 17:27:07'),
	(43, 9517, 'Jack', 'Sparrow', 'Man', '1995-07-13', 19, 'male', '182 ALDECOA ST., DARO', 'single', 'student', 'christian', 'Philippino', 23890, 'oliverlo@gmail.com', 20140008, 'Pediatric', 'Payward', 1015, '2014-02-03 17:27:14'),
	(44, 610, 'Jean', 'Rose', 'Mae', '1990-03-05', 22, 'Female', 'Simotwet', 'single', 'Student', 'christian', 'Kenyan', 981234, 'denchmjir1@gmail.com', 20140013, 'Pediatric', 'charity', 1016, '2014-02-03 17:27:20');
/*!40000 ALTER TABLE `patients_info` ENABLE KEYS */;


-- Dumping structure for table noph.prescription
CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `case_history` longtext NOT NULL,
  `medication` longtext NOT NULL,
  `discription` longtext NOT NULL,
  `report_type` longtext NOT NULL,
  `document_type` longtext NOT NULL,
  `file_name` longtext NOT NULL,
  `lab_discription` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.prescription: ~15 rows (approximately)
DELETE FROM `prescription`;
/*!40000 ALTER TABLE `prescription` DISABLE KEYS */;
INSERT INTO `prescription` (`id`, `doctor_id`, `patient_id`, `case_history`, `medication`, `discription`, `report_type`, `document_type`, `file_name`, `lab_discription`) VALUES
	(1, 20140008, 3130, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(2, 20140001, 2224, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(3, 20140008, 3130, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(22, 20140010, 4314, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(23, 20130003, 1384, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(29, 20140001, 2152, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(30, 20140001, 2152, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(31, 20140001, 2961, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(32, 20140001, 2961, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(33, 20140002, 295, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(37, 20140001, 2152, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(38, 20140002, 295, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(40, 20140001, 2961, 'Feeling nause great ', 'Enalapril 20mg twice daily Lasix 40mg once every other day Kcl 20mg once daily', 'U/A Sp Gr 1.008 pH 6.5 2+ Alb many WBC many RBC 3+ bact \r\nABG pH 7.46 pCO234 PO284 O2Sat 98% (room air) \r\nEKG NSR 96, ST elevations I, AVL, V4-V6; rare unifocal VPC’s \r\nCXR portable AP, probable cardiomegaly, mild PVC', 'care unit.', 'image', 'brad.jpg', 'Extremities: skin warm and smooth except for chronic venous stasis changes in \r\n both legs. 1+ edema to the knees, non-pitting and very tender to palpation. \r\n No clubbing nor cyanosis. \r\n11.Neurological: Awake, alert and fully oriented. Cranial nerves III-XII intact except \r\n for decreased hearing. Motor: Strength not tested, patient moves all extremities. \r\n Sensory: Grossly normal to touch and pin prick. Cerebellar: no tremor nor \r\n dysmetria. Reflexes symmetrical 1+ through out, no Babinski sign.'),
	(44, 20140004, 3438, 'ugkhjzs khfv', 'af', 'adbzsv', 'dsbxv', 'zbvxf', '0', 'WneatHSRDGFT'),
	(45, 20140004, 2889, 'tdufyguhlkjl', 'fyiguohijoyiguohijok', 'yguohijok', 't7y8u', '6rt79y8u9pi0', '0', 'turyiuoup');
/*!40000 ALTER TABLE `prescription` ENABLE KEYS */;


-- Dumping structure for table noph.procedures
CREATE TABLE IF NOT EXISTS `procedures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mid_init` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `hotwater_bag_appli` varchar(150) NOT NULL,
  `tepid_sponge_bath` varchar(150) NOT NULL,
  `monitoring I/O` varchar(150) NOT NULL,
  `health_teaching` varchar(150) NOT NULL,
  `diet_instruction` varchar(150) NOT NULL,
  `O2_inhalation` varchar(150) NOT NULL,
  `suction` varchar(150) NOT NULL,
  `heat_lamp_appli` varchar(150) NOT NULL,
  `catheterization` varchar(150) NOT NULL,
  `ngt_feeding` varchar(150) NOT NULL,
  `wound_care` varchar(150) NOT NULL,
  `nebulization` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.procedures: ~2 rows (approximately)
DELETE FROM `procedures`;
/*!40000 ALTER TABLE `procedures` DISABLE KEYS */;
INSERT INTO `procedures` (`id`, `patient_id`, `fname`, `mid_init`, `lname`, `hotwater_bag_appli`, `tepid_sponge_bath`, `monitoring I/O`, `health_teaching`, `diet_instruction`, `O2_inhalation`, `suction`, `heat_lamp_appli`, `catheterization`, `ngt_feeding`, `wound_care`, `nebulization`) VALUES
	(1, 295, 'mike', 'K', 'Chumba', '15 mins application of hot water bag @ the abdomen area to stimulate urination', '15-20 mins TSB for temp of 37.7 degree celcius ', '1500ml input (including IVF, water, milk, soup) 200ml output (urine, vomitus & stool)', 'breathing exercise, benefits of eating healthy foods', 'Diet for Age (DAT)', '3 LPM via nasal cannula', 'discharges (greenish in color)', '15 mins application at the perineum area to enhance healing', 'catheterization for output monitoring, catheter care done', '60ml feeding every 6 hours', 'wound care done @ the abdominal area twice a day', '1/2 nebule salbutamol for nebulization'),
	(2, 3438, 'Rocky', 'L', 'Macario', '15 mins application of hot water bag @ the abdomen area to stimulate urination', '15 mins TSB for temp of 37.8 degree celcius ', '1000ml input (including IVF, water, milk, soup) 150ml output (urine, vomitus & stool)', 'exercise and diet', 'DAT except dark colored foods', '2 LPM via face mask', 'discharges (yellowish in color)', '15 mins application at the perineum area to enhance healing', 'catheterization & catheter care done', '40ml feeding every 8 hours', 'wound care done @ the chest area twice a day', '1 nebule of budezonide nebulization');
/*!40000 ALTER TABLE `procedures` ENABLE KEYS */;


-- Dumping structure for table noph.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `staff_no` int(30) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dep_id` int(10) NOT NULL,
  `level` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.user: ~4 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `staff_no`, `username`, `password`, `fname`, `mname`, `lname`, `dep_id`, `level`) VALUES
	(1, 20140001, 'Admin', '1234', 'Mike', 'Chumba', '', 130, 100),
	(2, 20140004, 'Doctor', 'doctor', 'Dr Denis', 'K', 'Chemjor', 120, 20),
	(3, 1002, 'Nurse', 'nurse', 'BSN-RN, Mariel ', 'H', 'Codilla, ', 110, 10),
	(4, 1001, 'Infor_desk', 'window', 'Janice', 'J', 'Mercado', 100, 5);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table noph.vital_signs_measurements
CREATE TABLE IF NOT EXISTS `vital_signs_measurements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `temp` varchar(25) NOT NULL,
  `pulserate` varchar(15) NOT NULL,
  `respiratory_rate` varchar(15) NOT NULL,
  `blood_pressure` varchar(15) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `height` varchar(15) NOT NULL,
  `abdominal_girth` varchar(15) NOT NULL,
  `category` varchar(30) NOT NULL,
  `room` varchar(20) NOT NULL,
  `doctor_id` int(13) NOT NULL,
  `nurse_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table noph.vital_signs_measurements: ~10 rows (approximately)
DELETE FROM `vital_signs_measurements`;
/*!40000 ALTER TABLE `vital_signs_measurements` DISABLE KEYS */;
INSERT INTO `vital_signs_measurements` (`id`, `patient_id`, `fname`, `mname`, `lname`, `temp`, `pulserate`, `respiratory_rate`, `blood_pressure`, `weight`, `height`, `abdominal_girth`, `category`, `room`, `doctor_id`, `nurse_id`) VALUES
	(1, 295, 'Mike', 'K', 'Chumba', '37.8 degree Celcius', '92 bpm', '40 cpm', '140/80 mmHg', '65 kg', '159 cm', '58 cm', 'Inpatient', 'R1', 20140002, 890),
	(2, 3438, 'Rocky', 'L', 'Macario', '38.2 degree Celcius', '72 bpm', '36 cpm', '120/70 mmHg', '89kg', '180cm', '68 cm', 'Outpatient', 'R2', 20140004, 0),
	(7, 2889, 'Collete', 'L', 'Chumba', '35.2 degree Celcius', '64 bpm', '12 cpm', '120/80 mmHg', '89 kg', '170 cm', '60 cm', 'Outpatient', 'R6', 20140004, 0),
	(8, 1384, 'Mizzie', 'c', 'Chumba', '33.2 degree Celcius', '70 bpm', '30 cpm', '121/80 mmHg', '56 Kg', '167 cm', '61 cm', 'Inpatient', 'R5', 20140003, 0),
	(9, 4314, 'Jayden', 'W', 'Alexander', '36.2 degree Celcius', '68 bpm', '25 cpm', '119/81 mmHg', '70 Kg', '145 Kg', '59 cm', 'Inpatient', 'R8', 20140010, 0),
	(10, 2152, 'Beyonce', 'H', 'Joan', '35.2 degree Celcius', '64 bpm', '12 cpm', '120/80 mmHg', '89 kg', '170 cm', '60 cm', 'Inpatient', 'R9', 20140001, 29),
	(11, 2961, 'Denis', 'K', 'Chemjor', '36.8 degree Celcius', '91 bpm', '41 cpm', '140/80 mmHg', '67 Kg', '160 cm', '59 cm', 'Outpatient', 'R9', 20140001, 576),
	(12, 3130, 'gil', 'H', 'mike', '35.2 degree Celcius', '64 bpm', '12 cpm', '120/80 mmHg', '89 kg', '170 cm', '60 cm', 'Outpatient', 'R10', 20140008, 0),
	(13, 5820, 'Aiden', 'Y', 'Ethan', '35.2 degree Celcius', '64 bpm', '12 cpm', '120/80 mmHg', '89kg', '190 cm', '60cm', 'Outpatient', 'R6', 20140012, 0),
	(14, 3802, 'France', 'L', 'Rop', '36.2 degree Celcius', '64 bpm', '38 cpm', '120/80 mmHg', '65 kg', '150 cm', '60 cm', 'Inpatient', 'R2', 20140001, 0);
/*!40000 ALTER TABLE `vital_signs_measurements` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
