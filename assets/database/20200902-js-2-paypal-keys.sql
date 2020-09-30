ALTER TABLE `site`
	ADD COLUMN `paypal_client_id` TEXT NULL DEFAULT NULL AFTER `required_tac`,
	ADD COLUMN `paypal_secret_key` TEXT NULL DEFAULT NULL AFTER `paypal_client_id`;
