CREATE TABLE `xref_lead_log` (
	`xref_id` INT NOT NULL AUTO_INCREMENT,
	`lead_id` INT NOT NULL,
	`log_id` INT NOT NULL,
	PRIMARY KEY (`xref_id`),
	INDEX `lead_id` (`lead_id`),
	INDEX `log_id` (`log_id`)
)
COLLATE='utf8mb4_general_ci'
;