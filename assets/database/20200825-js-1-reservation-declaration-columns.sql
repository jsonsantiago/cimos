ALTER TABLE `reservation_dtls`
	ADD COLUMN `no_of_household` INT NULL DEFAULT '1' AFTER `no_show`,
	ADD COLUMN `address` TEXT NULL DEFAULT '' AFTER `no_of_household`,
	ADD COLUMN `postcode` VARCHAR(50) NULL AFTER `address`,
	ADD COLUMN `declaration_done` TINYINT NULL DEFAULT '0' AFTER `postcode`;
