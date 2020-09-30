-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table imperial_db.answer
CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL DEFAULT ' ',
  `lead_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`),
  KEY `lead_id` (`lead_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.answer: ~0 rows (approximately)
/*!40000 ALTER TABLE `answer` DISABLE KEYS */;
/*!40000 ALTER TABLE `answer` ENABLE KEYS */;

-- Dumping structure for table imperial_db.appointment
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `Istext` tinyint(4) NOT NULL DEFAULT '0',
  `lead_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `script_id` int(11) NOT NULL,
  PRIMARY KEY (`appointment_id`),
  KEY `lead_id` (`lead_id`),
  KEY `user_id` (`user_id`),
  KEY `script_id` (`script_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.appointment: ~0 rows (approximately)
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;

-- Dumping structure for table imperial_db.audit_log
CREATE TABLE IF NOT EXISTS `audit_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_action` varchar(50) NOT NULL,
  `transaction_ref` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.audit_log: ~0 rows (approximately)
/*!40000 ALTER TABLE `audit_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit_log` ENABLE KEYS */;

-- Dumping structure for table imperial_db.lead
CREATE TABLE IF NOT EXISTS `lead` (
  `lead_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `company` varchar(150) DEFAULT NULL,
  `campaign_code` varchar(50) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `reason` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(10) NOT NULL DEFAULT '',
  `queue` int(11) NOT NULL DEFAULT '1',
  `callback_date` datetime DEFAULT NULL,
  `for_mgmt` tinyint(4) NOT NULL DEFAULT '0',
  `note` text NOT NULL,
  `setter_id` int(11) DEFAULT NULL,
  `adviser_id` int(11) DEFAULT NULL,
  `drafter_id` int(11) DEFAULT NULL,
  `script_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`lead_id`),
  KEY `setter_id` (`setter_id`),
  KEY `adviser_id` (`adviser_id`),
  KEY `drafter_id` (`drafter_id`),
  KEY `script_id` (`script_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.lead: ~7 rows (approximately)
/*!40000 ALTER TABLE `lead` DISABLE KEYS */;
INSERT IGNORE INTO `lead` (`lead_id`, `first_name`, `last_name`, `email`, `phone`, `company`, `campaign_code`, `date_added`, `status`, `reason`, `title`, `queue`, `callback_date`, `for_mgmt`, `note`, `setter_id`, `adviser_id`, `drafter_id`, `script_id`) VALUES
	(1, 'Marc', 'Logan', 'marc.logan@gmail.com', '1111111111', NULL, NULL, '2020-07-10 11:41:55', 1, 0, '', 1, NULL, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu vestibulum justo, vitae tristique tellus. Duis eleifend ut risus ut finibus. \r\n\r\nFusce luctus ligula porttitor, condimentum dolor vitae, sollicitudin dui. Curabitur sem purus, suscipit id quam id, scelerisque laoreet magna. Phasellus ut turpis a sem viverra ultricies. Cras consequat suscipit hendrerit. Sed vitae dolor placerat, condimentum felis in, malesuada turpis. Maecenas eget suscipit augue, varius malesuada augue. Duis a nisi vitae velit venenatis vestibulum.\r\n\r\n In hac habitasse platea dictumst. Morbi in lorem quis ipsum pretium viverra. Mauris sit amet blandit metus, at posuere lectus. Nam at lacus ut velit posuere porta.', NULL, NULL, NULL, 1),
	(2, 'Mark', 'Zuckerberg', 'mark.zuck@facebook.com', '2222222222', NULL, 'TDSampleCode', '2020-07-10 18:45:42', 1, 0, '', 2, NULL, 0, 'Proin nec efficitur turpis. Mauris suscipit vulputate rhoncus. Donec posuere libero et nisl mollis, a finibus ex volutpat. Duis ut augue sollicitudin neque cursus luctus et id nibh. \r\n\r\nQuisque convallis pretium metus. Etiam luctus sit amet justo vel suscipit. Mauris sed ultrices felis, a rhoncus augue.\r\n\r\n Morbi tempor nibh non justo egestas mollis. Proin pellentesque sagittis lorem, non tincidunt eros finibus sed. Ut tortor nibh, cursus nec lobortis eu, euismod sit amet elit. Morbi at nulla sem.', NULL, NULL, NULL, 1),
	(3, 'Zelle', 'Belle', 'zelle.belle@gmail.com', '3333333333', NULL, '123123', '2020-07-13 10:46:26', 1, 0, '', 3, NULL, 0, 'Proin in felis id urna rutrum feugiat quis quis justo. Integer ac vulputate nisl. Mauris efficitur malesuada tellus, vel congue diam rutrum a.\r\n\r\n Aenean sagittis, libero posuere aliquam pretium, enim dui cursus augue, id gravida est ipsum vel nibh. Nunc urna diam, porttitor sed nibh in, commodo congue libero. \r\n\r\nMaecenas faucibus maximus est id ultrices. Etiam faucibus urna sed ipsum suscipit, at hendrerit elit aliquam. Nunc ut dolor lobortis leo facilisis ornare vel ut quam. Nullam id urna laoreet, euismod est at, maximus felis. Sed vitae erat elit. Nam venenatis eros nec diam iaculis tincidunt cursus vitae libero. Morbi placerat non est nec tempus. Fusce fermentum euismod nulla, eu volutpat lacus maximus pellentesque. Fusce sit amet sapien odio.', NULL, NULL, NULL, 1),
	(4, 'Mijin', 'Small', 'mijin.small@gmaill.com', '4444444444', NULL, NULL, '2020-07-13 12:41:48', 1, 0, '', 4, NULL, 0, 'Sample Lead Note\n\nSample List\n	- List 1\n	- List 2\n	- List 3\n\n', NULL, NULL, NULL, 1),
	(5, 'Jane', 'Xein', 'jan@gmail.com', '5555555555', NULL, '123', '2020-07-16 14:14:59', 1, 0, '', 5, NULL, 0, '', NULL, NULL, NULL, 1),
	(6, 'Johny', 'Data', 'johny.data@gmail.com', '6666666666', NULL, NULL, '2020-07-17 09:48:18', 1, 0, '', 6, NULL, 0, '', NULL, NULL, NULL, 1),
	(7, 'Small', 'Boy', 'smallboy@gmail.com', '7777777777', 'Nothing Co.', NULL, '2020-07-17 09:50:18', 1, 0, '', 7, NULL, 0, '', NULL, NULL, NULL, 1);
/*!40000 ALTER TABLE `lead` ENABLE KEYS */;

-- Dumping structure for table imperial_db.question
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `input_type` varchar(50) NOT NULL DEFAULT 'text',
  `input_placeholder` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `possible_answer` varchar(255) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.question: ~6 rows (approximately)
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT IGNORE INTO `question` (`question_id`, `input_type`, `input_placeholder`, `question`, `possible_answer`) VALUES
	(1, 'dropdown', '{question_ishomeowner}', 'Are you a home owner?', 'No Response, Yes,No'),
	(2, 'text', '{question_havechildren}', 'Do you any children?', '0'),
	(3, 'dropdown', '{question_havepartner}', 'Do you have a partner?', 'No Response, Yes,No'),
	(4, 'dropdown', '{question_havewillbefore}', 'Have you ever made a will before?', 'No Response, Yes,No'),
	(5, 'dropdown', '{question_typeofwill}', 'Is it a joint will or a single will that you are looking to make?', 'No Response, Single, Joint'),
	(6, 'dropdown', '{question_havelifeinsurance}', 'Life Insurance?', 'No Response, Yes,No');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;

-- Dumping structure for table imperial_db.script
CREATE TABLE IF NOT EXISTS `script` (
  `script_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `script` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`script_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.script: ~2 rows (approximately)
/*!40000 ALTER TABLE `script` DISABLE KEYS */;
INSERT IGNORE INTO `script` (`script_id`, `title`, `script`, `status`) VALUES
	(1, 'Life Insurance Will Scripts', 'Good morning/Afternoon is that Mr/Mrs {lead_first_name} {lead_last_name}? It’s {user_first_name} from Imperial Estate Planning. We spoke to you around a year ago regarding your life insurance policy? Now we’re back in touch because during the Covid-19 outbreak we’re offering all of our existing customers some completely free will writing advice.\r\n\r\nHave you ever looked into this before? Can it move down to the appropriate part of the script depending on what the answer is?\r\n\r\nNO – FACT FIND\r\n•	ARE YOU A HOMEOWNER? {question_ishomeowner}\r\n•	DO YOU HAVE ANY CHILDREN? {question_havechildren}\r\n•	DO YOU HAVE A PARTNER? {question_havepartner}\r\n\r\nDo you know what happens if you don’t have a will in place?\r\n\r\nPROMPT WHY THEY NEED A WILL\r\nOkay, just to confirm our will writing advice is completely FREE of charge, but depending on your circumstances our Senior Will Advisor may need to give you some recommendations, so for example, if you’re looking to protect yourself, children or your property then there may be additional cost attached but these will just be our recommendations and it’s completely up to you if you choose to take them, but it’s best to know the information than to not know it, does that make sense?\r\n\r\nBrilliant, so if you’re wanting to hear the recommendations, we will need yourself and your partner (if they said yes to above)  there and to have around 20-30 minutes time, with a  a pen ad paper and a cup of tea, this is just to discuss things with our Senior Will advisor. So when would be the best time of day for us to call you back?\r\n\r\nRECAP APPOINTMENT DATE AND TIME, SEND APPT CONFIRMATION EMAIL, END CALL\r\n\r\nYES I ALREADY HAVE A WILL – How long ago did you do this?\r\n\r\nWell, what we have discovered is that 7/10 wills that were written over 5 years ago are no longer valid. This is mainly due to a change in circumstance. To ensure your will is still valid our specialist can check this completely free of charge. When is the best time to call you back?\r\n\r\nIF STILL NOT INTERESTED WILL ASK ABOUT LPAs)\r\n\r\nOkay Mr/Mrs. {lead_first_name} {lead_last_name} just before you go can I ask have you currently got an LPA (Lasting Power of Attorney) in place?\r\n\r\nYES  - Okay Mr/Mrs. {lead_first_name} {lead_last_name} thanks for your time and have a nice day.\r\nNO – Okay an LPA is a very powerful legal document that appoints a trusted individual to look after your affairs in the event of you losing mental capacity through dementia, Alzheimer’s, a stroke or any type of accident, which can be legally stitched into your will.\r\n\r\nSo if you’re wanting to hear more information free of charge, we will need yourself and your partner there with around 20-30 minutes time, a pen and paper, and a cup of tea, this is just to discuss things with our Senior Advisor. So when would be the best time or day for us to call you back?\r\n\r\nBOOK APPOINTMENT TIME AND DATE (IF IT’S A JOINT WILL BOOK MR AND MRS)\r\n\r\nAny questions?\r\nThank you for your time and have a lovely day.', 1),
	(2, 'Senior Will Adviser Call Script', 'Good morning/Afternoon is that {lead_title} {lead_first_name} {lead_last_name}? It’s {user_first_name} from Imperial Estate Planning. I’m calling in response to an inquiry you’ve recently made online. I believe you’re looking for some information regarding making a will?\r\n\r\nJust so you’re aware, you’re through to Imperial Estate Planning and we specialize in all aspects of estate planning and it’s my job to ask you a few questions and that’s just to establish how we can be of assistance.\r\n\r\nSHORT FACT FIND\r\nSo firstly, have you ever made a will before? {question_havewillbefore}\r\nIs it a joint will or a single will that you are looking to make? {question_typeofwill}\r\nAre you a homeowner? {question_ishomeowner} \r\nLife Insurance? {question_havelifeinsurance} \r\nDo you have any children? {question_havechildren}\r\nIs there anything that’s prompted you to make a will now?\r\nAnd what exactly is it that you want your will to do?\r\n\r\nGIVE PRICE ON WILL AND BENEFITS\r\n•	LEGALLY BINDING DOCUMENT\r\n•	VALID FOR OVER 100 YEARS\r\n•	GUARANTEED TO GO THROUGH PROBATE\r\n•	SENT OUT SPECIAL DELIVERY ON HIGH QUALITY PAPER\r\n•	AMEND YOUR WILL FREE OF CHARGE (WITHIN REASON)\r\n•	FULLY VALIDATED SINGLE WILL ONLY £119 OR JOINT £149\r\n\r\nREASSURE CLIENT THAT EVERYTHING THEY WANT THEIR WILL TO DO IS COVERED IN THIS PRICE, BENEFICIARIES, LEGAL GUARDIANS ETC.\r\n\r\nNEXT STEP LPA’S\r\n\r\nNow that’s everything covered in the event of death NAME, can I ask have you heard of an LPA before, a Lasting Power of Attorney?\r\n\r\nAn LPA is a very powerful legal document that appoints a trusted individual to look after your affairs in the event of you losing mental capacity through dementia, Alzheimer’s, a stroke or any type of accident, which can be legally stitched into your will.\r\n\r\nThere are two types of LPA, the first one covers you for:\r\n\r\nHEALTH AND PERSONAL WELFARE – This covers decisions about all aspects of your healthcare and personal welfare, including decisions about who is looking after you, where you live and how you are cared for. It also allows your loved ones to make decisions on your behalf about medical treatment.\r\n\r\nThe second LPA covers you for:\r\n\r\nPROPERTY AND FINANCIAL AFFAIRS – This allows the people you trust to look after your bank accounts, household bills, mortgage and pensions as well as all other financial assets and property. As soon as the bank finds out you’ve lost capacity, your bank will freeze your accounts, and the government could take control of your assets (home).\r\n\r\nEXPLAIN WHAT HAPPENS WITHOUT AN LPA AND HOW IMPORTANT THEY ARE\r\n\r\nASK THE CLIENT DO THEY UNDERSTAND THE IMPORTANCE OF HAVING AN LPW?\r\n\r\nGIVE PRICE PER LPA, DISCOUNTS FOR MULTIPLES\r\n\r\nMr/Mrs {lead_first_name} {lead_last_name}…so your will, will cover you for the event of death and your LPAs will cover you while you’re still alive so regardless of your circumstances in the future you’re covered and so are your loved ones and assets.\r\n\r\nEXPLAIN THE PROCEDURE\r\n\r\n•	Payment taken today or 30 days payment plan\r\n•	We book an appointment for you to speak to our will writer, when you’ll have around 30-45 minutes.\r\n•	Draft up your will and LPAs, send them to you on email once you’ve sent it back and you’re happy, we then professionally write up your will and send it out on hight quality paper for you to sign\r\n•	We can also keep a copy in storage for you\r\nEXPLAIN AGAIN FIRST PAYMENT COMES OUT IN 30 DAYS NOTHING PAID TODAY (That’s if they’re going for payment plan)', 1);
/*!40000 ALTER TABLE `script` ENABLE KEYS */;

-- Dumping structure for table imperial_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.user: ~6 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT IGNORE INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `password`, `date_added`, `last_login`, `status`, `type_id`) VALUES
	(1, 'Admin', 'Tester', 'admin@gmail.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', '2020-07-06 10:45:19', NULL, 1, 1),
	(2, 'Management', 'Tester', 'management@gmail.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', '2020-07-07 12:37:41', '2020-07-17 11:32:59', 1, 2),
	(3, 'Setter', 'Tester', 'setter@gmail.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', '2020-07-09 11:27:44', '2020-07-17 10:32:54', 1, 3),
	(4, 'SWA', 'Tester', 'swa@gmail.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', '2020-07-09 11:29:12', '2020-07-17 11:26:45', 1, 4),
	(5, 'Drafter', 'Tester', 'drafter@gmail.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', '2020-07-09 11:31:34', NULL, 1, 5),
	(6, 'Jayson', 'Santiago', 'json.santiago11@gmail.com', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', '2020-07-09 11:35:13', NULL, 1, 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table imperial_db.user_type
CREATE TABLE IF NOT EXISTS `user_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.user_type: ~5 rows (approximately)
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT IGNORE INTO `user_type` (`type_id`, `name`) VALUES
	(1, 'Administrator'),
	(2, 'Management'),
	(3, 'Appointment Setter'),
	(4, 'Senior Will Adviser'),
	(5, 'Drafter');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;

-- Dumping structure for table imperial_db.xref_script_question
CREATE TABLE IF NOT EXISTS `xref_script_question` (
  `xref_id` int(11) NOT NULL AUTO_INCREMENT,
  `script_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`xref_id`),
  KEY `script_id` (`script_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table imperial_db.xref_script_question: ~0 rows (approximately)
/*!40000 ALTER TABLE `xref_script_question` DISABLE KEYS */;
/*!40000 ALTER TABLE `xref_script_question` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
