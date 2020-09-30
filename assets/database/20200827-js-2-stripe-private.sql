ALTER TABLE `site`
	ADD COLUMN `stripe_secret_key` MEDIUMTEXT NULL DEFAULT NULL AFTER `stripe_key`;
