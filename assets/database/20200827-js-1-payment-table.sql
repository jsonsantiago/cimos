CREATE TABLE `payment` (
	`payment_id` INT NOT NULL AUTO_INCREMENT,
	`transaction_datetime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	`paid_amount` DECIMAL(10,2) NOT NULL DEFAULT 0,
	`status` TINYINT NOT NULL DEFAULT 1,
	`reserver_id` INT NOT NULL,
	PRIMARY KEY (`payment_id`),
	INDEX `reserver_id` (`reserver_id`)
)
COLLATE='utf8mb4_general_ci'
;
