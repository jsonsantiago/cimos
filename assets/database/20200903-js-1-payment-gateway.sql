ALTER TABLE `site`
	ADD COLUMN `payment_gateway` VARCHAR(20) NULL DEFAULT 'none' AFTER `paypal_secret_key`;
