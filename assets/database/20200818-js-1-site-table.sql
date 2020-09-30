CREATE TABLE `site` (
	`site_id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(128) NOT NULL,
	`address` VARCHAR(255) NOT NULL,
	`postcode` VARCHAR(32) NOT NULL,
	`status` TINYINT NOT NULL DEFAULT '1',
	`owner_id` INT NOT NULL,
	PRIMARY KEY (`site_id`),
	INDEX `owner_id` (`owner_id`)
)
COLLATE='utf8mb4_general_ci'
;
