CREATE TABLE `close_schedule` (
	`close_id` INT NOT NULL AUTO_INCREMENT,
	`from_datetime` DATETIME NULL,
	`to_datetime` DATETIME NULL,
	`description` TINYTEXT NOT NULL DEFAULT '',
	`active` TINYINT NOT NULL DEFAULT '1',
	`site_id` INT NOT NULL,
	PRIMARY KEY (`close_id`),
	INDEX `site_id` (`site_id`)
)
COLLATE='utf8mb4_general_ci'
;
