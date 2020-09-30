CREATE TABLE `payment` (
	`payment_id` INT NOT NULL AUTO_INCREMENT,
	`payment_datetime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	`amount` DECIMAL(10,2) NOT NULL DEFAULT 0,
	`reference` VARCHAR(128) NOT NULL,
	`note` VARCHAR(255) NOT NULL DEFAULT '',
	`payment_for` TINYINT NOT NULL;
	`lead_id` INT NOT NULL,
	`user_id` INT NOT NULL,
	PRIMARY KEY (`payment_id`),
	INDEX `lead_id` (`lead_id`),
	INDEX `user_id` (`user_id`)
)
COLLATE='utf8mb4_general_ci';
