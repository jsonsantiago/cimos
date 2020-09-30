ALTER TABLE `site`
	ADD COLUMN `required_tac` TINYINT(4) NOT NULL DEFAULT '0' AFTER `booking_notification`;
