ALTER TABLE `site`
	ADD COLUMN `booking_notification` TINYINT NOT NULL DEFAULT '0' AFTER `stripe_secret_key`;
