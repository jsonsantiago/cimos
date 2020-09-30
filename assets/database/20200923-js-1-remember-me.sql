ALTER TABLE `reservation_dtls`
	ADD COLUMN `remember_me` TINYINT NOT NULL DEFAULT '0' AFTER `coupon_code`;
