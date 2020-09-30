CREATE TABLE `discount_coupon` (
	`coupon_id` INT NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(10) NOT NULL,
	`name` VARCHAR(50) NULL,
	`type` VARCHAR(16) NOT NULL,
	`value` DECIMAL(10,2) NOT NULL DEFAULT 0,
	`expiration` DATE NOT NULL,
	`no_of_usage` VARCHAR(10) NULL,
	`active` TINYINT NOT NULL DEFAULT '1',
	`site_id` INT NOT NULL,
	PRIMARY KEY (`coupon_id`),
	INDEX `code` (`code`),
	INDEX `site_id` (`site_id`)
)
COLLATE='utf8mb4_general_ci'
;

ALTER TABLE `reservation_dtls`
	ADD COLUMN `coupon_code` VARCHAR(10) NULL AFTER `have_annual_pass`;
