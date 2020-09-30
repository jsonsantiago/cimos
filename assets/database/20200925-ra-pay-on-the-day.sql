ALTER TABLE `site`
	ADD COLUMN `pay_on_the_day` INT(11) NULL DEFAULT 0 AFTER `payment_notice`;
