CREATE TABLE `person` (
	`person_id` INT NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(50) NULL,
	`last_name` VARCHAR(50) NULL,
	`contact_no` VARCHAR(50) NULL,
	`address` TEXT NOT NULL DEFAULT '',
	`postcode` VARCHAR(50) NULL,
	`reserver_id` INT NOT NULL,
	PRIMARY KEY (`person_id`),
	INDEX `reserver_id` (`reserver_id`)
)
COLLATE='utf8mb4_general_ci'
;
