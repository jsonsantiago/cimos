CREATE TABLE `will_life_interest` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`lead_id` INT NOT NULL,
	`residency_to` VARCHAR(15) NULL DEFAULT NULL,
	`residency_to_name` VARCHAR(126) NULL DEFAULT NULL,
	`additional_benefits` VARCHAR(64) NULL DEFAULT NULL,
	`is_mortgage_discharged` TINYINT NULL DEFAULT NULL,
	`include_furniture_fittings` TINYINT NULL DEFAULT NULL,
	`occupancy_on_cohabitation` TINYINT NULL DEFAULT NULL,
	`bene_share_to` VARCHAR(36) NULL DEFAULT NULL,
	`bene_share_to_name` VARCHAR(126) NULL DEFAULT NULL,
	`bene_share_to_percent` FLOAT NOT NULL DEFAULT '0',
	`bene_share_type` VARCHAR(36) NULL DEFAULT NULL,
	`bene_share_age_inherit` TINYINT NULL DEFAULT NULL,
	`bene_share_age_issue_inherit` TINYINT NULL DEFAULT NULL,
	`bene_share_to_giftover` VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `lead_id` (`lead_id`)
)
COLLATE='utf8mb4_general_ci'
;
