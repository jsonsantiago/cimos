CREATE TABLE `terms_conditions` (
	`tac_id` INT NOT NULL AUTO_INCREMENT,
	`html_template` MEDIUMTEXT NOT NULL DEFAULT '',
	`last_edited` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
	`site_id` INT NOT NULL,
	PRIMARY KEY (`tac_id`),
	INDEX `site_id` (`site_id`)
)
COLLATE='utf8mb4_general_ci'
;
