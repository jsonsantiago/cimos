CREATE TABLE `extra_schedule` (
	`extra_id` INT(11) NOT NULL AUTO_INCREMENT,
	`from_datetime` DATETIME NULL DEFAULT NULL,
	`to_datetime` DATETIME NULL DEFAULT NULL,
	`description` TINYTEXT NOT NULL DEFAULT '',
	`active` TINYINT(4) NOT NULL DEFAULT 1,
	`site_id` INT(11) NOT NULL,
	PRIMARY KEY (`extra_id`),
	INDEX `site_id` (`site_id`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
