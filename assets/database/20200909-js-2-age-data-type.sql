ALTER TABLE `person`
	CHANGE COLUMN `age` `age` INT NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci' AFTER `postcode`;
