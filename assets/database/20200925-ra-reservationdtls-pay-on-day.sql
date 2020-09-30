ALTER TABLE `reservation_dtls`
	ADD COLUMN `pay_on_day` INT NULL DEFAULT '0' AFTER `payment_status`;
