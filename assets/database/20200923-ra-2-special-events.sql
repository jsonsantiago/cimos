CREATE TABLE `special_events` (
	`special_id` INT(11) NOT NULL AUTO_INCREMENT,
	`datetimefrom` DATETIME NULL DEFAULT NULL,
	`datetimeto` DATETIME NULL DEFAULT NULL,
	`description` TINYTEXT NOT NULL DEFAULT '',
	`active` TINYINT(4) NOT NULL DEFAULT 1,
	`site_id` INT(11) NOT NULL,
	`price` DOUBLE NOT NULL,
	PRIMARY KEY (`special_id`),
	INDEX `site_id` (`site_id`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
