ALTER TABLE `site`
	ADD COLUMN `stripe_key` TEXT(65535) NULL DEFAULT NULL AFTER `children_price`;
