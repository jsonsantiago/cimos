ALTER TABLE `site`
	ADD COLUMN `payment_notice` INT NULL DEFAULT '0' AFTER `show_session_days`;