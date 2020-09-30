CREATE TABLE `suspended` (
	`suspended_id` INT NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`status` TINYINT NOT NULL DEFAULT '1',
	`recorded` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	`site_id` INT NOT NULL,
	PRIMARY KEY (`suspended_id`),
	INDEX `site_id` (`site_id`)
)
COLLATE='utf8mb4_general_ci'
;
