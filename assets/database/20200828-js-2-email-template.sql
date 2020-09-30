CREATE TABLE `custom_email_template` (
	`template_id` INT NOT NULL AUTO_INCREMENT,
	`template` TEXT NULL,
	`email_type` TINYINT NULL,
	`site_id` INT NULL,
	PRIMARY KEY (`template_id`),
	INDEX `site_id` (`site_id`)
)
COLLATE='utf8mb4_general_ci'
;
