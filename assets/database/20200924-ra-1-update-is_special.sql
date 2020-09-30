ALTER TABLE `reservation`
	ADD COLUMN `is_special` INT(11) NOT NULL DEFAULT 0 AFTER `exclusive`;