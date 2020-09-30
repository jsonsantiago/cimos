ALTER TABLE `appointment`
	CHANGE COLUMN `schedule` `schedule` DATETIME NULL DEFAULT NULL AFTER `appointment_id`;
