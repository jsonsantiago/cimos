ALTER TABLE `payment`
	ADD COLUMN `reference_no` VARCHAR(255) NULL AFTER `paid_amount`;
