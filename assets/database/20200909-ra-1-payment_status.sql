ALTER TABLE `reservation_dtls`
	ADD COLUMN `payment_status` INT(11) NOT NULL DEFAULT 0 AFTER `is_cancelled`;


