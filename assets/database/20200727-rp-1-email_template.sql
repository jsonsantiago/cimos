CREATE TABLE `email_template` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`subject` VARCHAR(150) NULL DEFAULT NULL,
	`body` TEXT NULL DEFAULT NULL,
	`action` VARCHAR(100) NULL DEFAULT NULL,
	`status` VARCHAR(100) NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;
