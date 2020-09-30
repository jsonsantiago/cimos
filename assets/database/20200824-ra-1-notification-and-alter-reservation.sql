ALTER TABLE `reservation`
	ADD COLUMN `exclusive` INT(11) NOT NULL DEFAULT '0' AFTER `site_id`

CREATE TABLE `exclusive_notification` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`session_date` DATETIME NULL DEFAULT NULL,
	`reservation_id` INT(11) NULL DEFAULT NULL,
	`site_id` INT(11) NULL DEFAULT NULL,
	`date` DATETIME NULL DEFAULT NULL,
	`isread` INT(11) NULL DEFAULT 0,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;

